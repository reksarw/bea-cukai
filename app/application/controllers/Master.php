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
			$this->session->set_flashdata('msg', err_msg(validation_errors()));
			redirect('Master/Jenis_Barang');
		}
		else
		{
			$x = $this->input->post();
			$this->builder->insertData('jenis_barang', $x);

			$this->session->set_flashdata('msg', succ_msg('Jenis barang berhasil ditambahkan'));
			redirect('Master/Jenis_Barang');
		}
	}

	public function edit_data() {
		$id = trim($_POST['id']);

		$where = [
			'id' => $id
		];
		$data['data_jenis'] = $this->builder->getWhere('jenis_barang', $where);

		$JSON = [
			'id' => 'edit-data-jenis',
			'modal' => show_my_modal('modal/edit_jenis_barang', 'Edit Jenis Barang', 'edit-data-jenis', $data)
		];

		echo json_encode($JSON);
	}

}

/* End of file Master.php */
/* Location: ./application/controllers/Master.php */