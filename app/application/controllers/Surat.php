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
				$data['surat_masuk'] = $this->builder->getData('data_surat');
				$this->template->views('data_surat/data_surat_masuk' , $data);
			break;

			case 'edit-surat-masuk';
				$this->template->views('data_surat/edit_surat_masuk');
			break;

			case 'act_hapus';
			if ( ! $this->input->get('id'))
			{
				redirect();
			}

			print_r($this->input->get());
			break;

			default:
				show_404();
			break;
		}
	}
}

/* End of file Master.php */
/* Location: ./application/controllers/Master.php */