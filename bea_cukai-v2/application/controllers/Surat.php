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
				$data['jenis_kegiatan'] = $this->builder->getData('jenis_kegiatan');
				$data['perusahaan'] = $this->builder->getData('perusahaan');
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
				$this->form_validation->set_rules('no_surat', 'Nomor Surat', 'trim|required');
				$this->form_validation->set_rules('tgl_surat', 'Tanggal Surat', 'trim|required');
				$this->form_validation->set_rules('jenis_kegiatan', 'Jenis Kegiatan', 'trim|required');
				$this->form_validation->set_rules('jenis_bkc', 'Jenis BKC', 'trim|required');
				$this->form_validation->set_rules('nama_perusahaan', 'Nama Perusahaan', 'trim|required');
				$this->form_validation->set_rules('npwp', 'NPWP', 'trim|required');
				$this->form_validation->set_rules('alamat', 'Alamat', 'trim|required');
				$this->form_validation->set_rules('nama_atasan', 'Nama Pimpinan', 'trim|required');
				$this->form_validation->set_rules('jabatan', 'Jabatan', 'trim|required');
				$this->form_validation->set_rules('npwp_atasan', 'NPWP Pimpinan', 'trim|required');
				$this->form_validation->set_rules('kewarganegaraan', 'Kewarganegaraan', 'trim|required');
				$this->form_validation->set_rules('judulsurat', 'Nama Surat', 'trim|required');
				if (empty($_FILES['surat']['name'])) {
					$this->form_validation->set_rules('surat', 'File Surat', 'trim|required');
				}

				if ($this->form_validation->run() == FALSE) {
					$this->session->set_flashdata('msg', err_msg(validation_errors()));
					redirect('surat/surat-masuk');
				} else {
					$config['upload_path'] = FCPATH."docs/";
					$config['allowed_types'] = '*';
					$this->load->library('upload' , $config);

					if ( ! $this->upload->do_upload('surat'))
					{
						$error = $this->upload->display_errors();

						$this->session->set_flashdata('msg', err_msg($error));
						redirect('surat/surat-masuk');
					} else{
						$data_file = $this->upload->data();
						$_POST['surat'] = $data_file['file_name'];

						$this->builder->insertData('data_surat' , $this->input->post());
						$this->session->set_flashdata('msg', succ_msg('Surat Masuk berhasil diinputkan'));
						redirect('surat/surat-masuk');
					}
				}
			break;

			case 'act_edit_SuratMasuk':
				$this->form_validation->set_rules('no_surat', 'Nomor Surat', 'trim|required');
				$this->form_validation->set_rules('tgl_surat', 'Tanggal Surat', 'trim|required');
				$this->form_validation->set_rules('jenis_kegiatan', 'Jenis Kegiatan', 'trim|required');
				$this->form_validation->set_rules('jenis_bkc', 'Jenis BKC', 'trim|required');
				$this->form_validation->set_rules('nama_perusahaan', 'Nama Perusahaan', 'trim|required');
				$this->form_validation->set_rules('npwp', 'NPWP', 'trim|required');
				$this->form_validation->set_rules('alamat', 'Alamat', 'trim|required');
				$this->form_validation->set_rules('nama_atasan', 'Nama Pimpinan', 'trim|required');
				$this->form_validation->set_rules('jabatan', 'Jabatan', 'trim|required');
				$this->form_validation->set_rules('npwp_atasan', 'NPWP Pimpinan', 'trim|required');
				$this->form_validation->set_rules('kewarganegaraan', 'Kewarganegaraan', 'trim|required');
				$this->form_validation->set_rules('judulsurat', 'Nama Surat', 'trim|required');

				if ($this->form_validation->run() == FALSE) {
					$this->session->set_flashdata('msg', err_msg(validation_errors()));
					redirect('surat/surat-masuk');
				} else {
					if (isset($_FILES['surat']['name'])) {
						$config['upload_path'] = FCPATH."docs/";
						$config['allowed_types'] = '*';
						$this->load->library('upload' , $config);

						if ( ! $this->upload->do_upload('surat'))
						{
							$error = $this->upload->display_errors();

							$this->session->set_flashdata('msg', err_msg($error));
							redirect('surat/surat-masuk');
						} else{
							$data_file = $this->upload->data();
							$_POST['surat'] = $data_file['file_name'];
							$id = $this->input->post('id');
							unset($_POST['id']);

							$this->builder->updateData('data_surat' , $this->input->post(), "id = " .$id);
							$this->session->set_flashdata('msg', succ_msg('Surat Masuk berhasil diupdate'));
							redirect('surat/surat-masuk');
						}
					} else {
						$id = $this->input->post('id');
						unset($_POST['id']);
						unset($_POST['surat']);

						$this->builder->updateData('data_surat' , $this->input->post(), "id = " .$id);
						$this->session->set_flashdata('msg', succ_msg('Surat Masuk berhasil diupdate'));
						redirect('surat/surat-masuk');
					}
				}
			break;

			case 'act_hapus';
				if ( ! $this->input->get('id'))
				{
					redirect();
				}
				
				if ( $this->builder->countData('data_surat',"id=".$this->input->get('id')) == 0)
				{
					$this->session->set_flashdata('msg', err_msg('Data Surat masuk gagal dihapus'));
				}else{
					$this->builder->deleteData('data_surat', array('id' => $this->input->get('id')));
					$this->session->set_flashdata('msg', succ_msg('Berhasil menghapus data surat masuk'));
				}

				redirect('surat/surat-masuk');
			break;

			default:
				show_404();
			break;
		}
	}
}

/* End of file Master.php */
/* Location: ./application/controllers/Master.php */