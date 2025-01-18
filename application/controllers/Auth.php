<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Auth extends CI_Controller
{
	public $form_validation, $Model_Users, $session, $input, $db;
	public function __construct()
	{
		parent::__construct();
		$this->load->model('Model_Users');
	}

	public function index()
	{
		$this->form_validation->set_rules('email', 'Email', 'required|trim|valid_email');
		$this->form_validation->set_rules('password', 'Password', 'required|trim');

		if ($this->form_validation->run() == FALSE) {
			$data = [
				'title' => 'Auth',
			];
			$this->load->view('auth/login', $data);
		} else {
			$this->_login();
		}
	}

	private function _login()
	{
		$email = $this->input->post('email');
		$password = $this->input->post('password');

		$user = $this->db->get_where('users', ['email' => $email])->row();

		if ($user) {

			if (password_verify($password, $user->password)) {
				// set session
				$this->session->set_userdata(['user' => $user]);
				if ($user->role == 'User') {
					redirect(base_url());
				} else {
					redirect('admin/dashboard');
				}
			} else {
				// pesan
				$this->session->set_flashdata('error_password', 'Password anda salah');
				redirect('auth');
			}
		} else {
			// pesan
			$this->session->set_flashdata('error_email', 'Email tidak ditemukan');
			redirect('auth');
		}
	}

	public function logout()
	{
		// Hapus sessionn
		$this->session->sess_destroy();
		redirect(base_url());
	}

	public function register()
	{
		// API STATIS
		$url = 'https://www.emsifa.com/api-wilayah-indonesia/api/provinces.json';
		$response = json_decode($this->getCurl($url), true);

		$this->form_validation->set_rules('first_name', 'Nama Depan', 'required|trim');
		$this->form_validation->set_rules('last_name', 'Nama Belakang', 'required|trim');
		$this->form_validation->set_rules('born_in', 'Tempat Lahir', 'required|trim');
		$this->form_validation->set_rules('birthday', 'Tanggal Lahir', 'required|trim');
		$this->form_validation->set_rules('email', 'Email', 'required|trim');
		$this->form_validation->set_rules('type_work', 'Jenis Pekerjaan', 'required|trim');
		$this->form_validation->set_rules('no_handphone', 'No Handphone', 'required|trim');
		// $this->form_validation->set_rules('document', 'Document', 'required|trim');
		$this->form_validation->set_rules('nik', 'NIK', 'required|trim');
		$this->form_validation->set_rules('address', 'Alamat', 'required|trim');
		$this->form_validation->set_rules('provincy', 'Provinsi', 'required|trim');
		$this->form_validation->set_rules('city', 'Kota/Kabupaten', 'required|trim');
		$this->form_validation->set_rules('district', 'Kecamatan', 'required|trim');
		$this->form_validation->set_rules('villages', 'Kelurahan', 'required|trim');
		$this->form_validation->set_rules('password', 'Password', 'required|trim|min_length[8]');
		$this->form_validation->set_rules('confirm_password', 'Konfirmasi Password', 'required|trim|matches[password]');

		if ($this->form_validation->run() == FALSE) {
			$data = [
				'title' => 'Registrasi',
				'provincy' => $response
			];
			$this->load->view('auth/register', $data);
		} else {
			$this->Model_Users->insertUser();
			redirect('');
		}
	}

	public function getCities($province_id)
	{
		$url = "https://www.emsifa.com/api-wilayah-indonesia/api/regencies/$province_id.json";

		$response = json_decode($this->getCurl($url), true);

		header('Content-Type: application/json');
		echo json_encode($response);
	}

	public function getDistrict($city_id)
	{
		$url = "https://www.emsifa.com/api-wilayah-indonesia/api/districts/$city_id.json";

		$response = json_decode($this->getCurl($url), true);

		header('Content-Type: application/json');
		echo json_encode($response);
	}

	public function getVillages($district_id)
	{
		$url = "https://www.emsifa.com/api-wilayah-indonesia/api/villages/$district_id.json";

		$response = json_decode($this->getCurl($url), true);

		header('Content-Type: application/json');
		echo json_encode($response);
	}

	private function getCurl($url)
	{
		$ch = curl_init();

		curl_setopt($ch, CURLOPT_URL, $url);
		curl_setopt($ch, CURLOPT_RETURNTRANSFER, 1);
		curl_setopt($ch, CURLOPT_TIMEOUT, 30);

		$output = curl_exec($ch);

		if (curl_errno($ch)) {
			echo 'Error:' . curl_error($ch);
			return null;
		}

		curl_close($ch);

		return $output;
	}
}
