<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Account extends CI_Controller
{
	public $Model_Users, $curl, $user;
	public function __construct()
	{
		parent::__construct();
		$this->load->model('Model_Users');
	}

	// ADMIN
	public function index()
	{
		$data = [
			'title' => 'Admin Account',
			// data akun
			'user' => $this->user,
			'admins' => $this->Model_Users->readAccountAdmin(),
		];
		$this->load->view('admin/admin-account/index', $data);
	}
	

	public function create()
	{
		$this->form_validation->set_rules('first_name', 'Nama Depan', 'required|trim');
		$this->form_validation->set_rules('last_name', 'Nama Belakang', 'required|trim');
		$this->form_validation->set_rules('born_in', 'Tempat Lahir', 'required|trim');
		$this->form_validation->set_rules('birthday', 'Tanggal Lahir', 'required|trim');
		$this->form_validation->set_rules('email', 'Email', 'required|trim');
		$this->form_validation->set_rules('no_handphone', 'No Handphone', 'required|trim');
		$this->form_validation->set_rules('address', 'Alamat Lengkap', 'required|trim');
		$this->form_validation->set_rules('password', 'Password', 'required|trim');
		$this->form_validation->set_rules('confirm_password', 'Password', 'required|trim|matches[password]');

		if ($this->form_validation->run() == FALSE) {
			$data = [
				'title' => 'Create Account',
				'user' => $this->user,
			];
			$this->load->view('admin/admin-account/create', $data);
		} else {
			$this->Model_Users->insertAdmin();
			$this->session->set_flashdata('success', 'Account Admin Ditambahkan!');
			redirect('admin/account');
		}
	}

	public function edit($slug)
	{
		$this->form_validation->set_rules('first_name', 'Nama Depan', 'required|trim');
		$this->form_validation->set_rules('last_name', 'Nama Belakang', 'required|trim');
		$this->form_validation->set_rules('born_in', 'Tempat Lahir', 'required|trim');
		$this->form_validation->set_rules('birthday', 'Tanggal Lahir', 'required|trim');
		$this->form_validation->set_rules('email', 'Email', 'required|trim');
		$this->form_validation->set_rules('no_handphone', 'No Handphone', 'required|trim');
		$this->form_validation->set_rules('address', 'Alamat Lengkap', 'required|trim');

		if ($this->form_validation->run() == FALSE) {
			$data = [
				'title' => 'Create Account',
				'account' => $this->Model_Users->editAdmin($slug),
				'user' => $this->user,
			];
			$this->load->view('admin/admin-account/edit', $data);
		} else {
			$this->Model_Users->updateAdmin($slug);
			$this->session->set_flashdata('success', 'Account Telah Diupdate!');
			redirect('admin/account');
		}
	}

	public function delete($slug)
	{
		$this->Model_Users->delete($slug);

		$this->session->set_flashdata('success', 'Account Telah Didelete!');
		redirect('admin/account');
	}
}
