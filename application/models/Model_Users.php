<?php
class Model_Users extends CI_Model
{

	public function read()
	{
		return $this->db->get('users')->result();
	}

	// registrasi
	public function insertUser()
	{
		$form_data = [
			'first_name' => $this->input->post('first_name'),
			'last_name' => $this->input->post('last_name'),
			'slug' => 'slug.test',
			'born_in' => $this->input->post('born_in'),
			'birthday' => $this->input->post('birthday'),
			'email' => $this->input->post('email'),
			'type_work' => $this->input->post('type_work'),
			'no_handphone' => $this->input->post('no_handphone'),
			'document' => 'document.jpg',
			'nik' => $this->input->post('nik'),
			'address' => $this->input->post('address'),
			'provincy' => $this->input->post('provincy'),
			'city' => $this->input->post('city'),
			'district' => $this->input->post('district'),
			'villages' => $this->input->post('villages'),
			'role' => 'User',
			'password' => password_hash($this->input->post('password'), PASSWORD_DEFAULT),
			'created_at' => date('Y-m-d H:i:s'),
			'updated_at' => date('Y-m-d H:i:s'),
		];
		$this->db->insert('users', $form_data);
	}
}
