<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Kasir extends CI_Controller {

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
		if ($this->session->userdata('logged_in')) {
			$where = array('id_akun' => $this->session->userdata['logged_in']['id_akun']);
			$data['carwash'] = $this->Models->fetch($where, 'carwash')->result();
			$this->load->view('kasir/index', $data);
		} else {
			redirect('login');
		}
	}

	public function input_pesanan() {
		$data['pelanggan'] = $this->Models->get('pelanggan')->result();
		$data['jenis'] = $this->Models->get('tipe_cuci')->result();
		$data['carwash'] = $this->Models->get('carwash')->result();
		$this->load->view('kasir/input_pesanan', $data);
	}

	public function proses_pesanan() {
		date_default_timezone_set('Asia/Jakarta');
		// $tanggal = $this->input->post('tanggal_cuci');

		// $dateObj = DateTime::createFromFormat('!Y-!m-!d', $i);

		$data = array(
			'id_carwash' => $this->input->post('carwash'),
			//'id_pelanggan' => $this->input->post('pelanggan'),
			'id_tipe' => $this->input->post('jenis'),
			'nama_pemesan' => $this->input->post('nama_pemesan'),
			'jenis' => $this->input->post('merk'),
			'plat_nomor' => $this->input->post('no_plat'),
			'tanggal_pesan' => date('Y-m-d', time()),
			'tanggal_cuci' => $this->input->post('tanggal_cuci'),
			'total_biaya' => $this->input->post('biaya'),
			'status' => $this->input->post('status'),
			'uang_bayar' => $this->input->post('uang'),
			'note' => $this->input->post('note'),
		);

		// echo "<pre>";
		// print_r($data);

		$insert = $this->Models->insert($data, 'pemesanan');
		if ($insert) {
			$this->session->set_flashdata('msg', '<div class="alert alert-success" role="alert"><button type="button" class="close" data-dismiss="alert" aria-label="Close"><span aria-hidden="true">&times;</span></button><strong class="d-block d-sm-inline-block-force">Berhasil!</strong> Data Berhasil Tersimpan.</div>');
		} else {
			$this->session->set_flashdata('msg', '<div class="alert alert-danger" role="alert"><button type="button" class="close" data-dismiss="alert" aria-label="Close"><span aria-hidden="true">&times;</span></button><strong class="d-block d-sm-inline-block-force">Gagal!</strong> Data Tidak Tersimpan.</div>');
		}

		redirect('Kasir/input_pesanan', 'refresh');
	}

	public function pesanan() {
		$data['carwash'] = $this->Models->get_pemesanan()->result();
		$this->load->view('kasir/data_pesanan', $data);
	}

	public function ambil_harga() {
		$id = $this->input->post('id');
		$where = array('id_tipe' => $id);
		$row = $this->Models->fetch($where, 'tipe_cuci')->row();

		echo json_encode($row);
	}

	public function setujui_permintaan_pemesanan() {
		# code...
	}

	public function lihat_detail_pemesanan() {
		# code...
	}

	public function cetak_kode_pemesanan() {
		# code...
	}

	public function batalkan_pemesanan() {
		# code...
	}

	public function input_transaksi() {
		$data['jenis'] = $this->Models->get('tipe_cuci')->result();

		$this->load->view('kasir/input_transaksi', $data);
	}

	public function proses_transaksi() {

		$data = array(
			'nama_pelanggan' => $this->input->post('nama_pelanggan'),
			'nopol' => $this->input->post('nopol'),
			'merk_mobil' => $this->input->post('merk_mobil'),
			'jenis_cuci' => $this->input->post('jenis_cuci'),
			'tanggal' => $this->input->post('tanggal'),
			'biaya' => $this->input->post('biaya'),
		);

		$insert = $this->Models->insert($data, 'transaksi');
		if ($insert) {
			$this->session->set_flashdata('msg', '<div class="alert alert-success" role="alert"><button type="button" class="close" data-dismiss="alert" aria-label="Close"><span aria-hidden="true">&times;</span></button><strong class="d-block d-sm-inline-block-force">Berhasil!</strong> Data Berhasil Tersimpan.</div>');
		} else {
			$this->session->set_flashdata('msg', '<div class="alert alert-danger" role="alert"><button type="button" class="close" data-dismiss="alert" aria-label="Close"><span aria-hidden="true">&times;</span></button><strong class="d-block d-sm-inline-block-force">Gagal!</strong> Data Tidak Tersimpan.</div>');
		}

		redirect('Kasir/input_transaksi', 'refresh');
	}

	public function transaksi() {
		$data['carwash'] = $this->Models->get_transaksi()->result();

		$this->load->view('kasir/data_transaksi', $data);
	}
}