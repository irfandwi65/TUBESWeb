<?php

	class Dashboard extends CI_Controller{
		public function index()
		{
			$this->load->view('admin/dashboardHeader');
			$this->load->view('admin/dashboard');
			$this->load->view('admin/dashboardFooter');
		}
	}