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
				if ( $this->builder->countData('data_surat' , array('id' => $this->input->get('id'))) == 0)
				{
					$this->session->set_flashdata('msg', err_msg('Surat tidak ada'));
					redirect('surat/surat-masuk');
				}
				else{
					$data['surat'] = $this->builder->getWhere('data_surat' , array('id' => $this->input->get('id')));
					$data['jenis_kegiatan'] = $this->builder->getData('jenis_kegiatan');
					$data['nama_perusahaan'] = $this->builder->getData('perusahaan');
					$this->template->views('data_surat/edit_surat_masuk' , $data);
				}
			break;

			case 'act_simpan_SuratMasuk';
				$config['upload_path'] = FCPATH."docs/";
				$config['allowed_types'] = 'docs|doc|docx|pdf|php';
				$this->load->library('upload' , $config);

				if ( ! $this->upload->do_upload('surat'))
				{
					$error = array('error' => $this->upload->display_errors());

					$this->session->set_flashdata('msg', err_msg($error));
				}
				
				else{
					echo 'berhasil upload';
				}

				//print_r($this->input->post());

				//redirect('surat/surat-masuk');
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