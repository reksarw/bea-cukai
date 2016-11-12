<?php
defined('BASEPATH') OR exit('No direct script access allowed');
class Kelola extends CI_Controller {
	public function __construct() {
		parent::__construct();
		$this->load->model('builder');
	}
	public function Barang_Masuk() {
		$data['jenis_barang'] = $this->builder->getData('jenis_barang');
		$data['juru_sita'] = $this->builder->getData('jurusita');
		$data['barang_masuk'] = $this->builder->getData('barang_masuk');
		$this->template->views('kelola/barang_masuk' , $data);
	}

	public function Edit_Barang_Masuk()
	{
		if ( ! $this->input->get('id'))
		{
			redirect();
		}

		$data['jenis_barang'] = $this->builder->getData('jenis_barang');
		$data['juru_sita'] = $this->builder->getData('jurusita');
		$this->template->views('kelola/edit_barang_masuk' , $data);
	}

	public function Add_Barang_Masuk(){
		$this->template->views('kelola/barang_masuk' , $data);
	}

	public function Pilih_Barang() {
		$data['lihat_barang'] = $this->builder->getData('barang_masuk');
		$this->template->views('kelola/pilih_barang' , $data);
	}
	public function Add_Barang_Keluar() {
		if ( ! isset($_REQUEST['kode_masuk']) || ! isset($_REQUEST['id']))
		{
			redirect();
		}

		$data['barang_masuk'] = $this->builder->getWhere('barang_masuk' , array('kode_masuk' => $_REQUEST['kode_masuk'] , 'id' => $_REQUEST['id']));

		//echo $_REQUEST['kode_masuk'].'<BR>'.$_REQUEST['id'];
		$this->template->views('kelola/add_barang_keluar' , $data);
	}
	public function Barang_Keluar() {
		$this->template->views('kelola/barang_keluar');
	}

	public function act_hapus()
	{
		if ( ! $this->input->get('id'))
		{
			redirect();
		}

		$this->builder->deleteData('barang_masuk' , array('id' => $this->input->get('id')));
		$this->session->set_flashdata('message', succ_msg('Berhasil menghapus barang'));
		redirect('Kelola/Barang_Masuk');
	}

	public function act_barang_masuk()
	{
		$this->form_validation->set_rules('kode_masuk','Kode Masuk Barang','required');
		$this->form_validation->set_rules('nomor_surat','Nomor Surat','required');
		$this->form_validation->set_rules('lokasi','Lokasi','required');
		$this->form_validation->set_rules('tgl_sita','Tangagl Sita','required');
		$this->form_validation->set_rules('no_disposisi','No Disposisi','required');
		$this->form_validation->set_rules('disposisi_tugas','Disposisi Awal','required');
		$this->form_validation->set_rules('disposisi_akhir','Disposisi Ahir','required');
		$this->form_validation->set_rules('jenis_barang','Jenis Barang','required');
		$this->form_validation->set_rules('kondisi_barang','Kondisi Barang','required');
		$this->form_validation->set_rules('asal','Asal Barang','required');
		$this->form_validation->set_rules('tujuan','Tujuan Barang','required');
		$this->form_validation->set_rules('no_dok','Nomor Dokumen','required');
		$this->form_validation->set_rules('no_petikemas','Nomor Petikemas','required');
		$this->form_validation->set_rules('jumlah','Jumlah Barang','required');
		$this->form_validation->set_rules('pengemasan','Pengemasan','required');
		$this->form_validation->set_rules('invoice','Invoice','required');
		$this->form_validation->set_rules('surat_keputusan','Surat Keputusan','required');
		$this->form_validation->set_rules('no_register','No Register','required');
		$this->form_validation->set_rules('no_peti','No Peti','required');
		$this->form_validation->set_rules('nama_pemilik','Nama Pemilik','required');
		$this->form_validation->set_rules('npwp','NPWP Pemilik','required');
		$this->form_validation->set_rules('alamat','Alamat Pemilik','required');
		$this->form_validation->set_rules('tpb','TBP Kepabeaan','required');
		$this->form_validation->set_rules('reg_sita','No Register Sita ','required');
		$this->form_validation->set_rules('lama','Lama Sita','required');
		$this->form_validation->set_rules('rak','Lokasi Sita','required');
		$this->form_validation->set_rules('kadaluarsa','Kadaluarsa','required');
		$this->form_validation->set_rules('tanggal_masuk','Tanggal Masuk','required');
		$this->form_validation->set_rules('nama_petugasa','Nama Petugas 1`','required');
		$this->form_validation->set_rules('nama_petugasb','Nama Petugas 2','required');
		$this->form_validation->set_rules('juru_sita','Juru Sita','required');

		if ( $this->form_validation->run() == FALSE)
		{
			$this->session->set_flashdata('message', err_msg(validation_errors()));
			redirect('Kelola/Barang_Masuk');
		}
		else
		{
			$x = $this->input->post();
			$this->builder->insertData('barang_masuk', $x);

			$this->session->set_flashdata('message', succ_msg('Barang masuk berhasil ditambahkan'));
			redirect('Kelola/Barang_Masuk');
		}
	}

	public function print_preview()
	{
		if ( ! isset($_REQUEST['mode']) || ! isset($_REQUEST['print_id']))
		{
			redirect();
		}

		$mode = array('barang-masuk', 'sitaan-keluar');

		if ( ! in_array($_REQUEST['mode'] , $mode))
		{
			redirect();
		}

		switch($_REQUEST['mode'])
		{
			case 'barang-masuk':
				$data['barang_masuk'] = $this->builder->getWhere('barang_masuk' , array('id' => $_REQUEST['print_id']));
				$this->load->view('print/print_barang_masuk' , $data);
			break;

			case 'sitaan-keluar';

			break;
		}
	}

	public function edit_barang_keluar() {
		$id = trim($_POST['id']);
		$where = [
			'id' => $id
		];
		$data['data_barangKeluar'] = $this->builder->getWhere('barang_keluar', $where);
		$JSON = [
			'id' => 'edit-barang-keluar',
			'modal' => show_my_modal('modal/edit_barang_keluar', 'Edit Barang Keluar', 'edit-barang-keluar', $data)
		];
		echo json_encode($JSON);
	}
}

/* End of file Kelola.php */
/* Location: ./application/controllers/Kelola.php */