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

	public function __construct(){
		parent::__construct();
		$this->load->model('Models');
	}

	public function index()
	{
		$data['akun'] = $this->Models->get('akun')->result();
		$this->load->view('data-akun',$data);
	}

	public function input_akun($id_carwash){
		// $data['carwash'] = $this->Models->get_id_carwash($id_carwash);
		$data['carwash'] = $this->Models->get('carwash')->result();
		$this->load->view('input-akun', $data);
	}

	public function nonaktifkan_akun($id_akun){
		$where = array('id_akun'=>$id_akun);
		$data = array('status'=>'Tidak Aktif');
		$result = $this->Models->update($where,$data,'akun');	
		if ($result) {
				$this->session->set_flashdata('msg','<div class="alert alert-success"><strong>Berhasil! </strong>Data berhasil disimpan!</div>');
			}else{
				$this->session->set_flashdata('msg','<div class="alert alert-danger"><strong>Gagal! </strong>Data gagal disimpan!</div>');
			}
		redirect('akun');
	}

	public function aktifkan_akun($id_akun){
		$where = array('id_akun'=>$id_akun);
		$data = array('status'=>'Aktif');
		$result = $this->Models->update($where,$data,'akun');	
		if ($result) {
				$this->session->set_flashdata('msg','<div class="alert alert-success"><strong>Berhasil! </strong>Data berhasil disimpan!</div>');
			}else{
				$this->session->set_flashdata('msg','<div class="alert alert-danger"><strong>Gagal! </strong>Data gagal disimpan!</div>');
			}
		redirect('akun');
	}

	public function input_data_akun(){
		$username = $this->input->post('username');
		$password = $this->input->post('password');
		$nama = $this->input->post('nama');
		$email = $this->input->post('email');
		$level = $this->input->post('level');

		$data = array(
					'username'=>$username,
					'password'=>$password,
					'nama_lengkap'=>$nama,
					'email'=>$email,
					'level'=>$level
				);

		$result = $this->Models->insert($data,'akun');
			if ($result) {
				$this->session->set_flashdata('msg','<div class="alert alert-success" role="alert"><button type="button" class="close" data-dismiss="alert" aria-label="Close"><span aria-hidden="true">&times;</span></button><strong class="d-block d-sm-inline-block-force">Berhasil!</strong> Data Berhasil Tersimpan.</div>');
			}else{
				$this->session->set_flashdata('msg','<div class="alert alert-danger" role="alert"><button type="button" class="close" data-dismiss="alert" aria-label="Close"><span aria-hidden="true">&times;</span></button><strong class="d-block d-sm-inline-block-force">Gagal!</strong> Data Tidak Tersimpan.</div>');

			} 

		redirect('akun/input_akun');
	}

	public function app_pemilik(){
		$data['carwash'] = $this->Models->get('carwash')->result();
		$this->load->view('app_pemilik',$data);
	}

	public function nonaktifkan_pemilik($id_carwash){
		$where = array('id_carwash'=>$id_carwash);
		$data = array('status'=>'Tidak Aktif','level'=>' ');
		$result = $this->Models->update($where,$data,'pemilik_carwash');	
		if ($result) {
				$this->session->set_flashdata('msg','<div class="alert alert-success"><strong>Berhasil! </strong>Data berhasil disimpan!</div>');
			}else{
				$this->session->set_flashdata('msg','<div class="alert alert-danger"><strong>Gagal! </strong>Data gagal disimpan!</div>');
			}
		redirect('akun/app_pemilik');
	}

	public function aktifkan_pemilik($id_carwash){
		$where = array('id_carwash'=>$id_carwash);
		$data = array('status'=>'Aktif','level'=>'Pemilik');
		$result = $this->Models->update($where,$data,'pemilik_carwash');	
		if ($result) {
				$this->session->set_flashdata('msg','<div class="alert alert-success"><strong>Berhasil! </strong>Data berhasil disimpan!</div>');
			}else{
				$this->session->set_flashdata('msg','<div class="alert alert-danger"><strong>Gagal! </strong>Data gagal disimpan!</div>');
			}
		redirect('akun/app_pemilik');
	}

	public function data_carwash(){
		$where = array('id_akun'=>$this->session->userdata['logged_in']['id_akun']);
		$data['carwash'] = $this->Models->fetch($where,'carwash')->result();
		$this->load->view('data-carwash',$data);
	}


}
