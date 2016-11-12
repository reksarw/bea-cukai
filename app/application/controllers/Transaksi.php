<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Transaksi extends Auth_Controller {
	public function __construct() {
		parent::__construct();
		$this->load->model('builder');
	}

	public function Transaksi_Barang() {
		$this->template->views('transaksi/transaksi_barang');
	}

	public function Add_Lelang() {
		$this->template->views('transaksi/add_lelang');
	}

	public function act_add_lelang(){
		if ( ! $this->input->post())
		{
			redirect();
		}

		print_r($_POST);
	}
}

/* End of file Transaksi.php */
/* Location: ./application/controllers/Transaksi.php */