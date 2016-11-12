<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Master extends CI_Controller {
	public function __construct() {
		parent::__construct();
		$this->load->model('builder');
	}

	public function Jenis_Barang() {
		$this->template->views('master/jenis_barang');
	}

	public function act_simpan()
	{
		$this->form_validation->set_rules('jenis_barang','Jenis Barang','required');

		if ( $this->form_validation->run() == FALSE)
		{
			redirect('Master/Jenis_Barang');
		}
		else
		{
			$x = $this->input->post();

			$this->builder->insertData('jenis_barang', $x);
			redirect('Master/Jenis_Barang');
		}
	}

}

/* End of file Master.php */
/* Location: ./application/controllers/Master.php */