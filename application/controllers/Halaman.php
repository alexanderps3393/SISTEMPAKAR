<?php


class Halaman extends CI_Controller {
			public function __construct(){
					parent::__construct();
					$this->load->library('session');
			$this->load->helper('form');
			$this->load->library('form_validation');
			$this->load->library('upload');

					$this->load->helper('url_helper');
					$this->load->helper('text');
					$this->load->helper('date');
					$this->load->library('pagination');
			}

	public function view()
	{

		if (!empty($this->session->userdata('username'))) {
			$this->load->view('pages/static/header');
			$this->load->view('pages/forms/home');
			$this->load->view('pages/static/footer');
		}else {
			redirect('Login/signin');
		}

	}



	public function noresult()
	{
		$this->load->view('pages/static/header');
		$this->load->view('pages/forms/noresult');
		$this->load->view('pages/static/footer');
	}






}
