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

			case 'act_simpan_perusahaan';
				if ( ! $this->input->post())
				{
					redirect();
				}

				if ( $this->input->post('nama_perusahaan') == '')
				{
					$this->session->set_flashdata('msg', err_msg('Nama perusahaan tidak boleh kosong'));
				}else{
					$this->builder->insertData('perusahaan' , $this->input->post());
					$this->session->set_flashdata('msg', succ_msg('Berhasil menambah data perusahaan'));
				}

				redirect('master/data-perusahaan');
			break;

			case 'act_simpan_jenisLayanan';
				if ( ! $this->input->post())
				{
					redirect();
				}

				if ( $this->input->post('jenis_kegiatan') == '')
				{
					$this->session->set_flashdata('msg', err_msg('Jenis layanan tidak boleh kosong'));
				}else{
					$this->builder->insertData('jenis_kegiatan' , $this->input->post());
					$this->session->set_flashdata('msg', succ_msg('Berhasil menambah data jenis layanan'));
				}

				redirect('master/jenis-layanan');
			break;

			case 'act_edit_perusahaan';
				if ( ! $this->input->post())
				{
					redirect();
				}

				if ( $this->input->post('nama_perusahaan') == '')
				{
					$this->session->set_flashdata('msg', err_msg('Nama perusahaan tidak boleh kosong'));
				}else{
					$this->builder->updateData('perusahaan' , array("nama_perusahaan" => $this->input->post('nama_perusahaan')) , "id = ".$this->input->post('id')."");

					$this->session->set_flashdata('msg', succ_msg('Berhasil mengubah data perusahaan'));
				}

				redirect('master/data-perusahaan');
			break;

			case 'act_edit_jenisLayanan';
				if ( ! $this->input->post())
				{
					redirect();
				}

				if ( $this->input->post('jenis_kegiatan') == '')
				{
					$this->session->set_flashdata('msg', err_msg('Jenis Pelayanan tidak boleh kosong'));
				}else{
					$this->builder->updateData('jenis_kegiatan' , array("jenis_kegiatan" => $this->input->post('jenis_kegiatan')) , "id = ".$this->input->post('id')."");

					$this->session->set_flashdata('msg', succ_msg('Berhasil mengubah data jenis pelayanan'));
				}

				redirect('master/jenis-layanan');
			break;

			case 'delete';
				if ( ! $this->input->get('section') || ! $this->input->get('id'))
				{
					redirect();
				}

				switch($this->input->get('section'))
				{
					case 'perusahaan';
						if ( $this->builder->countData('perusahaan',"id=".$this->input->get('id')) == 0)
						{
							$this->session->set_flashdata('msg', err_msg('Data perusahaan gagal dihapus'));
						}else{
							$this->builder->deleteData('perusahaan', array('id' => $this->input->get('id')));
							$this->session->set_flashdata('msg', succ_msg('Berhasil mengubah data perusahaan'));
						}

						redirect('master/data-perusahaan');
					break;

					case 'layanan';
						if ( $this->builder->countData('jenis_kegiatan',"id=".$this->input->get('id')) == 0)
						{
							$this->session->set_flashdata('msg', err_msg('Data jenis layanan gagal dihapus'));
						}else{
							$this->builder->deleteData('jenis_kegiatan', array('id' => $this->input->get('id')));
							$this->session->set_flashdata('msg', succ_msg('Berhasil mengubah data jenis layanan'));
						}

						redirect('master/jenis-layanan');
					break;

					default:
						redirect();
					break;
				}
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