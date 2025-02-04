<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Categories extends CI_Controller
{
	public $Model_Categories, $user, $form_validation;
	public function __construct()
	{
		parent::__construct();
		if (!$this->user) {
			redirect('auth');
		} else {
			if ($this->user->role == 'User') {
				show_404();
			}
		};
		$this->load->model('Model_Categories');
	}

	public function index()
	{
		$data = [
			'title' => 'Categories',
			'categories' => $this->Model_Categories->read(),
			'user' => $this->user
		];
		$this->load->view('admin/categories/index', $data);
	}

	public function create()
	{
		$this->form_validation->set_rules('title', 'Judul', 'required|trim');
		$this->form_validation->set_rules('description', 'Deskripsi', 'required|trim');

		if ($this->form_validation->run() == FALSE) {
			$data = [
				'title' => 'Create Categories',
				'user' => $this->user
			];
			$this->load->view('admin/categories/create', $data);
		} else {
			$this->Model_Categories->insert();
			$this->session->set_flashdata('success', 'Categories Berhasil ditambahkan!');
			redirect('admin/categories');
		}
	}

	public function edit($title)
	{
		$this->form_validation->set_rules('title', 'Judul', 'required|trim');
		$this->form_validation->set_rules('description', 'Deskripsi', 'required|trim');

		if ($this->form_validation->run() == FALSE) {
			$data = [
				'title' => 'Create Categories',
				'categories' => $this->Model_Categories->readByTitle($title),
				'user' => $this->user
			];
			$this->load->view('admin/categories/edit', $data);
		} else {
			$this->Model_Categories->edit($title);
			redirect('admin/categories');
		}
	}
}
