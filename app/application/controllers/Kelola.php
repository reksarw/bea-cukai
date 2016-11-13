<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Kelola extends CI_Controller {
	public function __construct() {
		parent::__construct();
		
	}

	public function Barang_Masuk() {
		$this->template->views('kelola/barang_masuk');
	}

	public function Pilih_Barang() {
		$this->template->views('kelola/pilih_barang');
	}

	public function Add_Barang_Keluar() {
		$this->template->views('kelola/add_barang_keluar');
	}

	public function Barang_Keluar() {
		$this->template->views('kelola/barang_keluar');
	}

}

/* End of file Kelola.php */
/* Location: ./application/controllers/Kelola.php */