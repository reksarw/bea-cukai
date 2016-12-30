<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Home extends Auth_Controller {

	public function index() {
		$this->template->views('home');
	}

}

/* End of file Home.php */
/* Location: ./application/controllers/Home.php */