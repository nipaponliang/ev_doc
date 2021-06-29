<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Home extends CI_Controller {

	public function index()
	{
		$data['title'] = "everydaydoctor";
		$this->load->view('head',$data);
		$this->load->view('navbar');
	}
	public function login()
	{
		$this->load->view('head');
		$this->load->view('navbar');
		$this->load->view('login');
	}

}
