<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Login extends CI_Controller {
	public function __construct() {
		parent::__construct();
		$this->load->model('builder');
	}

	public function index() {
		$this->check_login();
		
		$this->load->view('login');
	}

	public function act_login() {
		$this->check_login();

		$this->form_validation->set_rules('user', 'Username', 'trim|required|min_length[4]|max_length[15]');
		$this->form_validation->set_rules('pass', 'Password', 'trim|required');

		if ($this->form_validation->run() == FALSE) {
			$this->session->set_flashdata('msg', err_msg(validation_errors()));
			redirect('Login');
		} else {
			$param 	= $this->input->post();
			$username = trim($param['user']);
			$password = md5($param['pass']);

			$where = [
				'user' => $username,
				'pass' => $password
			];
			$proses = $this->builder->getWhere('login' , $where);

			if (count($proses) > 0) {
				if ( $this->input->post('remember'))
				{
					$cookie = array(
						'name' => 'remember',
						'value' => $username,
						'expire' => '216000' // 24 jam
					);

					set_cookie($cookie);
				}

				$proses = $this->builder->buildQuery('UPDATE login SET lastlogin = NOW() WHERE user ="' .$username .'"');

				$this->session->set_userdata('user_session', $proses);
				
				redirect('Home');
			} else {
				$this->session->set_flashdata('msg', err_msg('Username atau Password Anda Salah'));
				redirect('Login');
			}
		}
	}

	public function act_logout() {
		$this->session->sess_destroy();
		delete_cookie('remember');
		redirect('Login');
	}

	public function check_login() {
		$this->user_login = $this->session->userdata('user_session');

		if (count($this->user_login) > 0 || get_cookie('remember')) {
			redirect('Home');
		}
	}
}

/* End of file Login.php */
/* Location: ./application/controllers/Login.php */