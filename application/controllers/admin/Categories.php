<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Categories extends CI_Controller
{
	public $Model_Categories;
	public function __construct()
	{
		parent::__construct();
		$this->load->model('Model_Categories');
	}

	public function index()
	{
		$data = [
			'categories' => $this->Model_Categories->read(),
		];
		$this->load->view('testing', $data);
	}
}
