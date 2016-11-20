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
				$this->template->views('data_surat/data_surat_masuk');
			break;

			case 'edit-surat-masuk';
				$this->template->views('data_surat/edit_surat_masuk');
			break;

			default:
				show_404();
			break;
		}
	}
}

/* End of file Master.php */
/* Location: ./application/controllers/Master.php */