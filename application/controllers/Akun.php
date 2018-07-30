<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Akun extends CI_Controller {

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
		$data['akun'] = $this->Models->get('akun')->result();
		$this->load->view('data-akun', $data);
	}

	public function input_akun() {
		// $data['carwash'] = $this->Models->get_id_carwash($id_carwash);
		$data['carwash'] = $this->Models->get('carwash')->result();
		$this->load->view('input-akun', $data);
	}

	public function nonaktifkan_akun($id_akun) {
		$where = array('id_akun' => $id_akun);
		$data = array('status' => 'Tidak Aktif');
		$result = $this->Models->update($where, $data, 'akun');
		if ($result) {
			$this->session->set_flashdata('msg', '<div class="alert alert-success"><strong>Berhasil! </strong>Data berhasil disimpan!</div>');
		} else {
			$this->session->set_flashdata('msg', '<div class="alert alert-danger"><strong>Gagal! </strong>Data gagal disimpan!</div>');
		}
		redirect('akun');
	}

	public function aktifkan_akun($id_akun) {
		$where = array('id_akun' => $id_akun);
		$data = array('status' => 'Aktif');
		$result = $this->Models->update($where, $data, 'akun');
		if ($result) {
			$this->session->set_flashdata('msg', '<div class="alert alert-success"><strong>Berhasil! </strong>Data berhasil disimpan!</div>');
		} else {
			$this->session->set_flashdata('msg', '<div class="alert alert-danger"><strong>Gagal! </strong>Data gagal disimpan!</div>');
		}
		redirect('akun');
	}

	public function input_data_akun() {
		$data_carwash = array(
			'no_izin' => $this->input->post('izin_carwash'),
			'nama' => $this->input->post('nama_carwash'),
			'kontak' => $this->input->post('kontak_carwash'),
			'email' => $this->input->post('email_pemilik'),
			'nama_pemilik' => $this->input->post('nama_pemilik'),
			'alamat' => $this->input->post('alamat_carwash'),
			'deskripsi' => $this->input->post('deskripsi'),
			'no_rekening' => $this->input->post('no_rekening'),
			'nama_rekening' => $this->input->post('nama_rekening'),
			'nama_bank' => $this->input->post('nama_bank'),
			'status' => 'Aktif',
		);

		$id_carwash = $this->Models->insert_get_id($data_carwash, 'carwash');

		$data_pemilik = array(
			'username' => $this->input->post('username_pemilik'),
			'password' => $this->input->post('password_pemilik'),
			'nama_lengkap' => $this->input->post('nama_pemilik'),
			'email' => $this->input->post('email_pemilik'),
			'level' => 'Pemilik',
			'status' => 'Aktif',
			'id_carwash' => $id_carwash,
		);

		$result = $this->Models->insert($data_pemilik, 'akun');

		$data_kasir = array(
			'username' => $this->input->post('username_kasir'),
			'password' => $this->input->post('password_kasir'),
			'nama_lengkap' => $this->input->post('nama_kasir'),
			'email' => $this->input->post('email_kasir'),
			'level' => 'Kasir',
			'status' => 'Aktif',
			'id_carwash' => $id_carwash,
		);

		$result = $this->Models->insert($data_kasir, 'akun');

		if ($result) {
			$this->session->set_flashdata('msg', '<div class="alert alert-success" role="alert"><button type="button" class="close" data-dismiss="alert" aria-label="Close"><span aria-hidden="true">&times;</span></button><strong class="d-block d-sm-inline-block-force">Berhasil!</strong> Data Berhasil Tersimpan.</div>');
		} else {
			$this->session->set_flashdata('msg', '<div class="alert alert-danger" role="alert"><button type="button" class="close" data-dismiss="alert" aria-label="Close"><span aria-hidden="true">&times;</span></button><strong class="d-block d-sm-inline-block-force">Gagal!</strong> Data Tidak Tersimpan.</div>');

		}

		redirect('akun/input_akun');
	}

	public function app_pemilik() {
		$data['carwash'] = $this->Models->get('carwash')->result();
		$this->load->view('app_pemilik', $data);
	}

	public function nonaktifkan_pemilik($id_carwash) {
		$where = array('id_carwash' => $id_carwash);
		$data = array('status' => 'Tidak Aktif', 'level' => ' ');
		$result = $this->Models->update($where, $data, 'pemilik_carwash');
		if ($result) {
			$this->session->set_flashdata('msg', '<div class="alert alert-success"><strong>Berhasil! </strong>Data berhasil disimpan!</div>');
		} else {
			$this->session->set_flashdata('msg', '<div class="alert alert-danger"><strong>Gagal! </strong>Data gagal disimpan!</div>');
		}
		redirect('akun/app_pemilik');
	}

	public function aktifkan_pemilik($id_carwash) {
		$where = array('id_carwash' => $id_carwash);
		$data = array('status' => 'Aktif', 'level' => 'Pemilik');
		$result = $this->Models->update($where, $data, 'pemilik_carwash');
		if ($result) {
			$this->session->set_flashdata('msg', '<div class="alert alert-success"><strong>Berhasil! </strong>Data berhasil disimpan!</div>');
		} else {
			$this->session->set_flashdata('msg', '<div class="alert alert-danger"><strong>Gagal! </strong>Data gagal disimpan!</div>');
		}
		redirect('akun/app_pemilik');
	}

	public function data_carwash() {
		$where = array('id_akun' => $this->session->userdata['logged_in']['id_akun']);
		$data['carwash'] = $this->Models->fetch($where, 'carwash')->result();
		$this->load->view('data-carwash', $data);
	}

}
