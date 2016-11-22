<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Home extends CI_Controller {
	public function __construct() {
		parent::__construct();
		$this->load->model('M_pegawai');
		$this->load->model('M_posisi');
		$this->load->model('M_kota');
	}

	public function index() {
		$session = $this->session->userdata('status');

		if ($session != '') {
			$data['username'] = $this->session->userdata('username');
			$this->load->view('home', $data);
		} else {
			redirect('Auth');
		}
	}

	public function tampil() {
		$session = $this->session->userdata('status');

		if ($session != '') {
			$search = trim($_POST['search']);

			if ($search == "") {
				$data['dataPegawai'] = $this->M_pegawai->select_all();
				echo "string";
			} else {
				$data['dataPegawai'] = $this->M_pegawai->select_all($search);
			}

			$this->load->view('list_data', $data);
		} else {
			redirect('Auth');
		}
	}

	public function update($id) {
		$session = $this->session->userdata('status');

		if ($session != '') {
			$id = trim($id);
			$data['dataPegawai'] = $this->M_pegawai->select_by_id($id);
			$data['dataPosisi'] = $this->M_posisi->select_all();
			$data['dataKota'] = $this->M_kota->select_all();

			$this->load->view('update', $data);
		} else {
			redirect('Auth');
		}
	}

	public function prosesUpdate() {
		$session = $this->session->userdata('status');

		if ($session != '') {
			$data = $this->input->post();
			$result = $this->M_pegawai->update($data);

			if ($result) {
				redirect('Home');
			}
		} else {
			redirect('Auth');
		}
	}

	public function delete() {
		$session = $this->session->userdata('status');

		if ($session != '') {
			$id = $this->input->post('id');

			$this->M_pegawai->delete($id);
		} else {
			redirect('Auth');
		}
	}

	public function tambah() {
		$session = $this->session->userdata('status');

		if ($session != '') {
			$data['dataPosisi'] = $this->M_posisi->select_all();
			$data['dataKota'] = $this->M_kota->select_all();

			$this->load->view('tambah', $data);
		} else {
			redirect('Auth');
		}
	}

	public function prosesTambah() {
		$session = $this->session->userdata('status');

		if ($session != '') {
			$data = $this->input->post();
			$result = $this->M_pegawai->insert($data);

			if ($result) {
				redirect('Home');
			}
		} else {
			redirect('Auth');
		}
	}

	public function detail($id) {
		$session = $this->session->userdata('status');

		if ($session != '') {
			$id = trim($id);
			$data['dataPegawai'] = $this->M_pegawai->select_by_id($id);

			$this->load->view('detail', $data);
		} else {
			redirect('Auth');
		}
	}
}

/* End of file Home.php */
/* Location: ./application/controllers/Home.php */