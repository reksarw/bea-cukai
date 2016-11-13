<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Home extends CI_Controller {

	public function index() {
		$data['judul'] = 'Direktorat Jenderal Pajak';
		
		$this->template->views('home', $data);
	}

}

/* End of file Home.php */
/* Location: ./application/controllers/Home.php */