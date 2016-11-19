<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Master extends Auth_Controller {
	
	public function __construct() {
		parent::__construct();
		$this->load->model('builder');
	}

	function menu($halaman)
	{
		switch($halaman)
		{
			case 'data-perusahaan';
			// view data perusahaan
			break;

			case 'jenis-layanan';
			// view jenis pelayanan
			break;

			default:
				show_404();
			break;
		}
	}
}

/* End of file Master.php */
/* Location: ./application/controllers/Master.php */