<?php

class Models extends CI_Model {

	public function insert($data, $tabel) {
		$result = $this->db->insert($tabel, $data);
		if ($result) {
			return true;
		} else {
			return false;
		}
	}

	function cek_login($username, $password) {
		$status = 'Aktif';
		$query = "username = " . "'" . $username . "' AND " . "password ='" . $password . "' AND " . " status = '" . $status . "'";
		$this->db->select('*');
		$this->db->from('akun');
		$this->db->where($query);
		// $this->db->limit(1);

		$exec = $this->db->get();
		if ($exec->num_rows() == 1) {
			return true;
		} else {
			return false;
		}
	}

	function getdatabyusername($username) {
		$this->db->from('akun');
		$this->db->where('username', $username);

		$exec = $this->db->get();
		if ($exec->num_rows() == 1) {
			return $exec->result();
		}
	}

	function sendEmail($receiver, $msg) {

		$from = "info.bpkad@gmail.com"; //senders email address
		$subject = 'Pengumuman Instruksi Pelatihan'; //email subject

		//sending confirmEmail($receiver) function calling link to the user, inside message body
		$message = $msg;

		//config email settings
		$config['protocol'] = 'smtp';
		$config['smtp_host'] = 'ssl://smtp.gmail.com';
		$config['smtp_port'] = '465';
		$config['smtp_user'] = $from;
		$config['smtp_pass'] = 'infobpkad123'; //sender's password
		$config['mailtype'] = 'html';
		$config['charset'] = 'iso-8859-1';
		$config['wordwrap'] = 'TRUE';
		$config['newline'] = "\r\n";

		$this->load->library('email', $config);
		$this->email->initialize($config);
		//send email
		$this->email->from($from);
		$this->email->to($receiver);
		$this->email->subject($subject);
		$this->email->message($message);

		if ($this->email->send()) {
			//for testing
			echo "sent to: " . $receiver . "<br>";
			echo "from: " . $from . "<br>";
			echo "protocol: " . $config['protocol'] . "<br>";
			echo "message: " . $message;
			return true;
		} else {
			echo $this->email->print_debugger();
			return false;
		}
	}

	public function get($tabel) {
		return $this->db->get($tabel);
	}

	public function fetch($where, $tabel) {
		return $this->db->get_where($tabel, $where);
	}

	public function update($where, $data, $tabel) {
		$this->db->where($where);
		$this->db->update($tabel, $data);

		if ($this->db->affected_rows() > 0) {
			return true;
		} else {
			return false;
		}
	}

	public function delete($where, $tabel) {
		$this->db->where($where);
		$this->db->delete($tabel);

		if ($this->db->affected_rows() > 0) {
			return true;
		} else {
			return false;
		}
	}

	public function get_pemesanan() {
		$this->db->from('pemesanan p');
		$this->db->join('pelanggan pl', 'pl.id_pelanggan = p.id_pelanggan', 'left');
		$this->db->join('tipe_cuci t', 't.id_tipe = p.id_tipe', 'left');
		return $this->db->get();
	}

	public function get_transaksi() {
		$this->db->from('transaksi t');
		$this->db->join('pemesanan p', 'p.id_pemesanan = t.id_pemesanan', 'left');
		$this->db->join('pelanggan pl', 'pl.id_pelanggan = p.id_pelanggan', 'left');
		return $this->db->get();
	}

	public function get_id_carwash($id_carwash = false){
		$queri = $this->db->query("SELECT id_carwash,nama_pemilik,email FROM carwash WHERE id_carwash = $id_carwash");
		return $queri->row_array();
	}
}
?>