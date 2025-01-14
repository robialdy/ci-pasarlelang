<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Users extends CI_Controller
{
	public $Model_Users;
	public function __construct()
	{
		parent::__construct();
		$this->load->model('Model_Users');
	}

	public function index()
	{
		$data = [
			'users' => $this->Model_Users->read(),
		];
		$this->load->view('users/index', $data);
	}
}
