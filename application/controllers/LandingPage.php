<?php
defined('BASEPATH') or exit('No direct script access allowed');

class LandingPage extends CI_Controller
{

	public function __construct()
	{
		parent::__construct();
	}

	public function index()
	{
		
		$data = [
			'title' => 'Pasar Lelang '
		];

		$this->load->view('landing_page/index', $data);
	}
}
