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

	// USER
	public function index()
	{
		$data = [
			'title' => 'User Account',
			// data akun
			'user' => $this->user,
			'userValidateds' => $this->Model_Users->readAccountUserValidated(),
			'userNotValidateds' => $this->Model_Users->readAccountUserNotValidated(),
		];
		$this->load->view('admin/user-account/index', $data);
	}

	public function AccountUserValidated($id)
	{
		$this->db->where('id_user', $id);
		$this->db->update('users', ['status' => 'Validated']);
		$this->session->set_flashdata('success', 'Account Sekarang Tervalidasi!');
		redirect('admin/user-account');
	}
}
