<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Surat extends Auth_Controller {
	
	public function __construct() {
		parent::__construct();
		$this->load->model('builder');
	}

	function menu($halaman)
	{
		switch($halaman)
		{
			case 'surat-masuk';
				// view surat masuk
			break;

			default:
				show_404();
			break;
		}
	}
}

/* End of file Master.php */
/* Location: ./application/controllers/Master.php */