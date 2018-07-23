<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Login extends CI_Controller {

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
		$this->load->view('login');
	}

	function logincek() {

		$username = $this->input->post('username');
		$password = $this->input->post('password');

		if (isset($this->session->userdata['logged_in'])) {
			redirect('beranda');
		} else {

			$exec = $this->Models->cek_login($username, $password);
			if ($exec == TRUE) {

				$result = $this->Models->getdatabyusername($username);

				$session_data = array(
					'id_akun' => $result[0]->id_akun,
					'username' => $result[0]->username,
					'nama' => $result[0]->nama_lengkap,
					'email' => $result[0]->email,
					'jenis' => $result[0]->level,
					'carwash' => $result[0]->id_carwash,
				);

				$this->session->set_userdata('logged_in', $session_data);
				redirect('beranda');
			} else {
				$this->session->set_flashdata('msg', '<div class="alert alert-danger" role="alert"><button type="button" class="close" data-dismiss="alert" aria-label="Close"><span aria-hidden="true">&times;</span></button><strong class="d-block d-sm-inline-block-force">Gagal!</strong> Cek username / password anda .</div>');
				redirect('login');
			}
		}

	}

	function logout() {

		$sess_data = array(
			'username' => '',
			'nama' => '',
			'jenis' => '',
			'email' => '',

		);

		$this->session->unset_userdata('logged_in', $sess_data);
		redirect('login');
	}
}
