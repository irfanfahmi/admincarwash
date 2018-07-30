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
		date_default_timezone_set('Asia/Jakarta');
		$tanggal = date('Y-m-d', time());
		$id_carwash = $this->session->userdata('logged_in')['carwash'];
		$data['pelanggan'] = $this->Models->get('pelanggan')->result();
		$data['jenis'] = $this->Models->get('tipe_cuci')->result();
		$data['carwash'] = $this->Models->get('carwash')->result();
		$data['pesanan'] = $this->Models->get_waktu($id_carwash, $tanggal)->result();
		$this->load->view('kasir/input_pesanan', $data);
	}

	public function get_waktu() {
		$tanggal = $this->input->post('tanggal');
		$id_carwash = $this->session->userdata('logged_in')['carwash'];
		$waktu = $this->Models->get_waktu($id_carwash, $tanggal)->result();

		echo json_encode($waktu);
	}

	public function proses_pesanan() {
		date_default_timezone_set('Asia/Jakarta');
		$id_carwash = $this->session->userdata('logged_in')['carwash'];
		$tanggal = $this->input->post('tanggal_cuci');
		$jam_cuci = $this->input->post('waktu');

		// $dateObj = DateTime::createFromFormat('!Y-!m-!d', $i);

		$data = array(
			'id_carwash' => $id_carwash,
			//'id_pelanggan' => $this->input->post('pelanggan'),
			'id_tipe' => $this->input->post('jenis'),
			'nama_pemesan' => $this->input->post('nama_pemesan'),
			'jenis' => $this->input->post('merk'),
			'plat_nomor' => $this->input->post('no_plat'),
			'tanggal_pesan' => date('Y-m-d', time()),
			'tanggal_cuci' => $tanggal,
			'jam_cuci' => $jam_cuci,
			'total_biaya' => $this->input->post('biaya'),
			'status' => $this->input->post('status'),
			'uang_bayar' => $this->input->post('uang'),
			'note' => $this->input->post('note'),
		);

		// echo "<pre>";
		// print_r($data);
		$insert = null;
		$cek_waktu = $this->Models->get_waktu($id_carwash, $tanggal)->result();
		$status = true;
		foreach ($cek_waktu as $item) {
			if ($item->jam_cuci == $jam_cuci) {
				$status = false;
				$this->session->set_flashdata('msg', '<div class="alert alert-danger" role="alert"><button type="button" class="close" data-dismiss="alert" aria-label="Close"><span aria-hidden="true">&times;</span></button><strong class="d-block d-sm-inline-block-force">Gagal!</strong> Data tidak dapat disimpan. Silahkan ubah jam cuci!</div>');
			}
		}

		if ($status) {
			$insert = $this->Models->insert($data, 'pemesanan');
			if ($insert) {
				$this->session->set_flashdata('msg', '<div class="alert alert-success" role="alert"><button type="button" class="close" data-dismiss="alert" aria-label="Close"><span aria-hidden="true">&times;</span></button><strong class="d-block d-sm-inline-block-force">Berhasil!</strong> Data Berhasil Tersimpan.</div>');
			} else {
				$this->session->set_flashdata('msg', '<div class="alert alert-danger" role="alert"><button type="button" class="close" data-dismiss="alert" aria-label="Close"><span aria-hidden="true">&times;</span></button><strong class="d-block d-sm-inline-block-force">Gagal!</strong> Data Tidak Tersimpan.</div>');
			}
		}

		// print_r($cek_waktu);

		redirect('Kasir/input_pesanan', 'refresh');
	}

	public function pesanan() {
		$id_carwash = $this->session->userdata('logged_in')['carwash'];
		$data['carwash'] = $this->Models->get_pemesanan($id_carwash)->result();
		$this->load->view('kasir/data_pesanan', $data);
	}

	public function ambil_harga() {
		$id = $this->input->post('id');
		$where = array('id_tipe' => $id);
		$row = $this->Models->fetch($where, 'tipe_cuci')->row();

		echo json_encode($row);
	}

	public function setujui_permintaan_pemesanan() {
		echo "<pre>";
		$idpesan = $this->uri->segment(3);
		$data = array('status_pesan' => 1);
		$where = array('id_pemesanan' => $idpesan);
		$update = $this->Models->update($where, $data, 'pemesanan');
		if ($update) {
			$this->session->set_flashdata('msg', '<div class="alert alert-success" role="alert"><button type="button" class="close" data-dismiss="alert" aria-label="Close"><span aria-hidden="true">&times;</span></button><strong class="d-block d-sm-inline-block-force">Berhasil!</strong> Data Berhasil Tersimpan.</div>');
		} else {
			$this->session->set_flashdata('msg', '<div class="alert alert-danger" role="alert"><button type="button" class="close" data-dismiss="alert" aria-label="Close"><span aria-hidden="true">&times;</span></button><strong class="d-block d-sm-inline-block-force">Gagal!</strong> Data Tidak Tersimpan.</div>');
		}

		$pemesanan = $this->Models->fetch($where, 'pemesanan')->row();

		// print_r($pemesanan);

		$transaksi = array(
			'id_pemesanan' => $idpesan,
			'id_carwash' => $this->session->userdata('logged_in')['carwash'],
			'nama_pelanggan' => $pemesanan->nama_pemesan,
			'nopol' => $pemesanan->plat_nomor,
			'jenis_cuci' => $pemesanan->id_tipe,
			'merk_mobil' => $pemesanan->jenis,
			'tanggal' => $pemesanan->tanggal_cuci,
			'biaya' => $pemesanan->total_biaya,
		);

		$this->Models->insert($transaksi, 'transaksi');

		redirect('Kasir/pesanan', 'refresh');
	}

	public function lihat_pemesanan() {
		$id = $this->input->post('id_pesan');
		$pesanan = $this->Models->get_pemesanan_by_id($id)->row();
		echo json_encode($pesanan);
	}

	public function lunas() {
		$id = $this->input->post('kode');
		$pesanan = $this->Models->get_pemesanan_by_id($id)->row();
		$data = array('uang_bayar' => $pesanan->total_biaya, 'status_bayar' => 'lunas');
		$where = array('id_pemesanan' => $id);
		$update = $this->Models->update($where, $data, 'pemesanan');
		echo json_encode($update);
	}

	public function cetak() {
		$id = $this->uri->segment(3);
		$data = $this->Models->get_transaksi_by_id($id)->row();
		$this->load->view('kasir/invoices', $data);
	}

	public function batalkan_pemesanan() {
		$idpesan = $this->uri->segment(3);
		$data = array('status_pesan' => 2);
		$where = array('id_pemesanan' => $idpesan);
		$update = $this->Models->update($where, $data, 'pemesanan');
		if ($update) {
			$this->session->set_flashdata('msg', '<div class="alert alert-success" role="alert"><button type="button" class="close" data-dismiss="alert" aria-label="Close"><span aria-hidden="true">&times;</span></button><strong class="d-block d-sm-inline-block-force">Berhasil!</strong> Data Berhasil Tersimpan.</div>');
		} else {
			$this->session->set_flashdata('msg', '<div class="alert alert-danger" role="alert"><button type="button" class="close" data-dismiss="alert" aria-label="Close"><span aria-hidden="true">&times;</span></button><strong class="d-block d-sm-inline-block-force">Gagal!</strong> Data Tidak Tersimpan.</div>');
		}
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
		$id_carwash = $this->session->userdata('logged_in')['carwash'];
		$data['carwash'] = $this->Models->get_transaksi($id_carwash)->result();

		$this->load->view('kasir/data_transaksi', $data);
	}
}
