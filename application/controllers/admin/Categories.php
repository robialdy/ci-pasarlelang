<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Categories extends CI_Controller
{
	public $Model_Categories, $user;
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
			'categories' => $this->Model_Categories->read(),
		];
		$this->load->view('admin/dashboard/index', $data);
	}
}
