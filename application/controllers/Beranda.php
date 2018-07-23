<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Beranda extends CI_Controller {

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
		if($this->session->userdata('logged_in')){
			$this->load->view('index');
		}else{
			redirect('login');
		}
		// $data['topcarwash'] = $this->Models->get_top_carwash()->result();
		
	}
	public function beranda()
	{	
		$this->load->view('dashboard');
	}

	public function login()
	{	
		if($this->session->userdata('logged_in')){
			$this->load->view('index');
		}else{
			redirect('login');
		}
	}
	public function register()
	{
	
		$this->load->view('register_pemilik');
	}

	public function input_data_akun(){
		$nama = $this->input->post('nama');
		$alamat = $this->input->post('alamat');
		$no_izin = $this->input->post('no_izin');
		$deskripsi = $this->input->post('deskripsi');
		$logo_carwash = $this->input->post('logo_carwash');
		$nama_pemilik = $this->input->post('nama_pemilik');
		$kontak = $this->input->post('kontak');
		$email = $this->input->post('email');
	

		$data = array(
					'nama'=>$nama,
					'alamat'=>$alamat,
					'no_izin'=>$no_izin,
					'deskripsi'=>$deskripsi,
					'logo_carwash'=>$logo_carwash,
					'nama_pemilik'=>$nama_pemilik,
					'kontak'=>$kontak,
					'email'=>$email
					
				);

				$result = $this->Models->insert($data,'carwash');
			if ($result) {
				$this->session->set_flashdata('msg','<div class="alert alert-success" role="alert"><button type="button" class="close" data-dismiss="alert" aria-label="Close"><span aria-hidden="true">&times;</span></button><strong class="d-block d-sm-inline-block-force">Berhasil!</strong> Data Berhasil Tersimpan.</div>');
			}else{
				$this->session->set_flashdata('msg','<div class="alert alert-danger" role="alert"><button type="button" class="close" data-dismiss="alert" aria-label="Close"><span aria-hidden="true">&times;</span></button><strong class="d-block d-sm-inline-block-force">Gagal!</strong> Data Tidak Tersimpan.</div>');
			} 

		redirect('Beranda/register');
	}

	


}
