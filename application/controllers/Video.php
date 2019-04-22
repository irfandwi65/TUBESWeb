<?php

	class Video extends CI_Controller{
		public function index()
		{
			$this->load->view('templates/header' , $data);
			$this->load->view('video/index');
			$this->load->view('templates/footer');
		}
	}