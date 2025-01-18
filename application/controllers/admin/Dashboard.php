<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Dashboard extends CI_Controller
{
	public $user;
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
	}

	public function index()
	{
		$data = [
			'title' => 'Dashboard',
			'user' => $this->user
		];
		$this->load->view('admin/dashboard/index', $data);
	}
}
