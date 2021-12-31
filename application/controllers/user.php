<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class user extends CI_Controller {
	public function index()
	{
		$this->load->view('user/navigation');
		$this->load->view('user/header');
		$this->load->view('user/user');
		$this->load->view('user/footer');

	}
    }

