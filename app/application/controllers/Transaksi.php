<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Transaksi extends Auth_Controller {
	public function __construct() {
		parent::__construct();
		$this->load->model('builder');
	}

	public function Transaksi_Barang() {
		$data['barang'] = $this->builder->buildQuery("SELECT lelang.kode_lelang , barang_masuk.kode_masuk , barang_masuk.nomor_surat , lelang.juru_sita , barang_masuk.tgl_sita , barang_masuk.no_disposisi , barang_masuk.no_dok , barang_masuk.nama_pemilik  FROM lelang , barang_masuk WHERE lelang.id_barang = barang_masuk.id");
		$this->template->views('transaksi/transaksi_barang' , $data);
	}

	public function Add_Lelang() {
		if ( $this->input->get('kode_lelang'))
		{
			$data['query'] = $this->builder->buildQuery("SELECT * FROM barang_masuk , lelang WHERE kode_lelang = '".$this->input->get('kode_lelang')."'")->row();
		}
		$data['barang_lelang'] = $this->builder->buildQuery("SELECT * FROM barang_masuk , lelang WHERE lelang.id_barang = barang_masuk.id")->result();
		$this->template->views('transaksi/add_lelang' , @$data);
	}

	public function act_add_lelang(){
		if ( ! $this->input->post())
		{
			redirect();
		}

		$this->form_validation->set_rules('tujuan' , 'Tujuan Lelang' , 'trim|required');
		$this->form_validation->set_rules('tgl_lelang' , 'Tanggal Lelang' , 'trim|required');
		$this->form_validation->set_rules('petugasa' , 'Petugas A' , 'trim|required');
		$this->form_validation->set_rules('petugasb' , 'Petugas B' , 'trim|required');
		$this->form_validation->set_rules('petugasc' , 'Petugas C' , 'trim|required');
		$this->form_validation->set_rules('petugasd' , 'Petugas D' , 'trim|required');
		$this->form_validation->set_rules('jurusitaa' , 'Juru Sita 1' , 'trim|required');
		$this->form_validation->set_rules('jurusitab' , 'Juru Sita 2' , 'trim|required');
		$this->form_validation->set_rules('juru_sita' , 'Kepala Juru Sita' , 'trim|required');
		$this->form_validation->set_rules('reg_lelang' , 'Nomor Register Lelang' , 'trim|required');

		if ( $this->form_validation->run() == FALSE)
		{
			$this->session->set_flashdata('message', err_msg(validation_errors()));
			redirect("Transaksi/Transaksi_Barang");
		}
		else
		{
			$x = $this->input->post();
			$this->builder->insertData('lelang', $x);

			$this->session->set_flashdata('message', succ_msg('Lelang berhasil ditambahkan'));
			redirect("Transaksi/Transaksi_Barang");
		}
	}

	public function act_hapus()
	{
		if ( ! $this->input->get('kode_lelang') || ! $this->input->get('id'))
		{
			redirect();
		}	

		$kl = $this->input->get('kode_lelang');
		$id = $this->input->get('id');
		$this->builder->deleteData("lelang" , array('kode_lelang' => $kl , 'id' => $id));
		$this->session->set_flashdata('message', succ_msg('Lelang berhasil dihapus'));
		redirect("Transaksi/Add_Lelang");
	}

	public function act_edit_lelang()
	{
		if ( ! $this->input->get('kode_lelang'))
		{
			redirect();
		}

		echo 'It work!';
	}
}

/* End of file Transaksi.php */
/* Location: ./application/controllers/Transaksi.php */