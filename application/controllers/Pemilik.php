<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Pemilik extends CI_Controller {

	/**
	 * Index Page for this controller.
	 *
	 * Maps to the following URL
	 * 		http://example.com/index.php/welcome
	 *	- or -
	 * 		http://example.com/index.php/welcome/index
	 *	- or -
	 * Since this controller is set as the default controller in
	 * config/routes.php, it's displayed at http://example.com/
	 *
	 * So any other public methods not prefixed with an underscore will
	 * map to /index.php/welcome/<method_name>
	 * @see https://codeigniter.com/user_guide/general/urls.html
	 */

	public function __construct() {
		parent::__construct();
		$this->load->model('Models');
	}

	public function index() {

		$id_carwash = $this->session->userdata('logged_in')['carwash'];
		//$data['tra'] = $this->Models->get_transaksi($id_carwash)->result();
		$data['transaksi'] = $this->Models->jumlahmobil($id_carwash);

		//$queri = $this->db->query("SELECT count(id_transaksi) AS jumlah FROM transaksi WHERE $id_carwash");
		$this->load->view('mycarwash', $data);
		
	}

	public function data_carwash() {
		$where = array('id_akun' => $this->session->userdata['logged_in']['id_akun']);
		$data['carwash'] = $this->Models->fetch($where, 'carwash')->result();
		$this->load->view('data-carwash', $data);
	}

	public function nonaktifkan_carwash($id_carwash) {
		$where = array('id_carwash' => $id_carwash);
		$data = array('status' => 'Tidak Aktif');
		$result = $this->Models->update($where, $data, 'carwash');
		if ($result) {
			$this->session->set_flashdata('msg', '<div class="alert alert-success"><strong>Berhasil! </strong>Data berhasil disimpan!</div>');
		} else {
			$this->session->set_flashdata('msg', '<div class="alert alert-danger"><strong>Gagal! </strong>Data gagal disimpan!</div>');
		}
		redirect('pemilik/data_carwash');
	}

	public function aktifkan_carwash($id_carwash) {
		$where = array('id_carwash' => $id_carwash);
		$data = array('status' => 'Aktif');
		$result = $this->Models->update($where, $data, 'carwash');
		if ($result) {
			$this->session->set_flashdata('msg', '<div class="alert alert-success"><strong>Berhasil! </strong>Data berhasil disimpan!</div>');
		} else {
			$this->session->set_flashdata('msg', '<div class="alert alert-danger"><strong>Gagal! </strong>Data gagal disimpan!</div>');
		}
		redirect('pemilik/data_carwash');
	}

	public function input_carwash() {
		$this->load->view('input-carwash');
	}

	public function input_data_carwash() {
		$nama = $this->input->post('nama');
		$kontak = $this->input->post('kontak');
		$alamat = $this->input->post('alamat');
		$biaya = $this->input->post('biaya');
		$kuota = $this->input->post('kuota');
		$deskripsi = $this->input->post('deskripsi');
		$foto = $_FILES['foto']['name'];
		$simpanfoto = str_replace(' ', '-', $foto);
		// echo $simpanfoto;

		if ($foto != '') {
			// $image_path = dirname($_SERVER["SCRIPT_FILENAME"])."/foto/";
			$config['upload_path'] = './fotocarwash/';
			// $config['upload_url'] = base_url()."foto/";
			$config['log_threshold'] = 1;
			$config['allowed_types'] = 'png|jpg|jpeg|gif';
			$config['max_size'] = '0'; // 0 = no file size limit
			$config['file_name'] = $foto;
			$config['overwrite'] = false;
			$this->upload->initialize($config);
			$this->load->library('upload', $config);
			$this->upload->do_upload('foto');
			$upload_data = $this->upload->data();
			$file_name = $upload_data['file_name'];
		}

		$data = array(
			'nama' => $nama,
			'kontak' => $kontak,
			'alamat' => $alamat,
			'biaya' => $biaya,
			'kuota' => $kuota,
			'deskripsi' => $deskripsi,
			'foto' => $simpanfoto,
			'id_akun' => $this->session->userdata['logged_in']['id_akun'],
		);

		$result = $this->Models->insert($data, 'carwash');
		if ($result) {
			$this->session->set_flashdata('msg', '<div class="alert alert-success" role="alert"><button type="button" class="close" data-dismiss="alert" aria-label="Close"><span aria-hidden="true">&times;</span></button><strong class="d-block d-sm-inline-block-force">Berhasil!</strong> Data Berhasil Tersimpan.</div>');
		} else {
			$this->session->set_flashdata('msg', '<div class="alert alert-danger" role="alert"><button type="button" class="close" data-dismiss="alert" aria-label="Close"><span aria-hidden="true">&times;</span></button><strong class="d-block d-sm-inline-block-force">Gagal!</strong> Data Tidak Tersimpan.</div>');

		}

		redirect('pemilik/input_carwash');
	}

	public function transaksi() {
		$id_carwash = $this->session->userdata('logged_in')['carwash'];
		$data['carwash'] = $this->Models->get_transaksi($id_carwash)->result();
		$this->load->view('pemilik/data_transaksi', $data);
	}

	public function editprofil() {
		$id_carwash = $this->session->userdata('logged_in')['carwash'];
		$data['carwash'] = $this->Models->get_transaksi($id_carwash)->result();
		$this->load->view('pemilik/edit_profil_pemilik', $data);
	}
}
