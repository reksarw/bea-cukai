<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Test extends CI_Controller {

	function __construct()
	{
		parent::__construct();
		$this->load->model('builder');
	}

	public function index()
	{
		$data['barang_keluar'] = $this->builder->getData('barang_keluar');
		$this->load->view('test_view' , $data);
	}

	function print()
	{
		$this->load->view('print');
	}

	function data($id)
	{
		$data = array('id' => $id);
		$this->builder->deleteData('jenis_barang' , $data);
	}

}

/* End of file Test.php */
/* Location: ./application/controllers/Test.php */