<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Users extends CI_Controller
{
	public $Model_Users, $curl;
	public function __construct()
	{
		parent::__construct();
		$this->load->model('Model_Users');
	}

	// REGISTRASI USER
	public function indexUser()
	{
		$data = [
			'title' => 'User Account',
			// data akun
			'user' => $this->user,
			'users' => $this->Model_Users->read(),
		];
		$this->load->view('admin/users/index', $data);
	}
}
