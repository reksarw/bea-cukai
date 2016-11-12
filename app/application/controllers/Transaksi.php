<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Transaksi extends CI_Controller {
	public function __construct() {
		parent::__construct();
	}

	public function Transaksi_Barang() {
		$this->template->views('transaksi/transaksi_barang');
	}

	public function Add_Lelang() {
		$this->template->views('transaksi/add_lelang');
	}
}

/* End of file Transaksi.php */
/* Location: ./application/controllers/Transaksi.php */