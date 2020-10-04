<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Home extends CI_Controller {

	public function __construct()
	{
		parent::__construct();
	}
	
	public function index()
	{
		$this->load->view('frontend/home_vw');
	}

	public function about()
	{
		$this->load->view('frontend/about_vw');
	}

	public function services()
	{
		$this->load->view('frontend/services_vw');
	}

	public function login()
	{
		$this->load->view('frontend/login_vw');
	}

	public function register()
	{
		$this->load->view('frontend/register_vw');
	}

	public function contact()
	{
		$this->load->view('frontend/contact_vw');
	}

	public function multi_register()
	{
		$this->load->view('frontend/multi_register_vw');
	}
}
