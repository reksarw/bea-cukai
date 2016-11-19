<?php
	class Template {
		protected $_ci;

		function __construct() {
			$this->_ci = &get_instance(); //Untuk Memanggil function load, dll dari CI. ex: $this->load, $this->model, dll
		}

		function views($template = NULL, $data = NULL) {
			if ($template != NULL) {
				// CSS
				$data['_css'] 					= $this->_ci->load->view('_layout/_css', $data, TRUE);
				
					//Menu
					$data['_menu'] 				= $this->_ci->load->view('_layout/_menu', $data, TRUE);
					//Sidebar
					$data['_sidebar'] 			= $this->_ci->load->view('_layout/_sidebar', $data, TRUE);
				// Navbar
				$data['_navbar'] 				= $this->_ci->load->view('_layout/_navbar', $data, TRUE);
				
				//Content
				$data['_headerContent'] 		= $this->_ci->load->view('_layout/_headerContent', $data, TRUE);

				//Content
				$data['_content'] 				= $this->_ci->load->view($template, $data, TRUE);
				
				//JS
				$data['_js'] 					= $this->_ci->load->view('_layout/_js', $data, TRUE);

				echo $data['_template'] 		= $this->_ci->load->view('_layout/_template', $data, TRUE);
			}
		}
	}
?>