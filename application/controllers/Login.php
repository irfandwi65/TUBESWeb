<?php

	class Login extends CI_Controller{
		public function index()
		{
			$data['judul'] = 'LOGIN';
			$this->load->view('admin/login');
		}
	}