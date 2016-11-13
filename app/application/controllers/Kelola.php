<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Kelola extends CI_Controller {
	public function __construct() {
		parent::__construct();
		
	}

	public function Barang_Masuk() {
		$this->template->views('kelola/barang_masuk');
	}

}

/* End of file Kelola.php */
/* Location: ./application/controllers/Kelola.php */