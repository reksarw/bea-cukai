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
				$data['perusahaan'] = $this->builder->getData('perusahaan')->result();
				$this->template->views('master/data_perusahaan', $data);
			break;

			case 'jenis-layanan';
				$data['jenis_kegiatan'] = $this->builder->getData('jenis_kegiatan')->result();
				$this->template->views('master/jenis_layanan', $data);
			break;

			default:
				show_404();
			break;
		}
	}

	public function edit_perusahaan() {
		$id = trim($_POST['id']);
		$where = [
			'id' => $id
		];
		$data['data_perusahaan'] = $this->builder->getWhere('perusahaan', $where);
		$JSON = [
			'id' => 'edit-perusahaan',
			'modal' => show_my_modal('modal/edit_perusahaan', 'Edit Perusahaan', 'edit-perusahaan', $data)
		];
		echo json_encode($JSON);
	}

	public function edit_jenisLayanan() {
		$id = trim($_POST['id']);
		$where = [
			'id' => $id
		];
		$data['data_jenisKegiatan'] = $this->builder->getWhere('jenis_kegiatan', $where);
		$JSON = [
			'id' => 'edit-jenis-layanan',
			'modal' => show_my_modal('modal/edit_jenis_layanan', 'Edit Jenis Layanan', 'edit-jenis-layanan', $data)
		];
		echo json_encode($JSON);
	}
}

/* End of file Master.php */
/* Location: ./application/controllers/Master.php */