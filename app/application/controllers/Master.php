<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Master extends CI_Controller {
	public function __construct() {
		parent::__construct();
		
	}

	public function Jenis_Barang() {
		$this->template->views('master/jenis_barang');
	}

}

/* End of file Master.php */
/* Location: ./application/controllers/Master.php */