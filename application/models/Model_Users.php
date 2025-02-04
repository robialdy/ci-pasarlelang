<?php
class Model_Users extends CI_Model
{

	public function readAccountUserValidated()
	{
		return $this->db->where('role', 'User')->where('status', 'Validated')->get('users')->result();
	}
	public function readAccountUserNotValidated()
	{
		return $this->db->where('role', 'User')->where('status', 'Not Validated')->get('users')->result();
	}
	public function readAccountAdmin()
	{
		return $this->db->where('role', 'Admin')->get('users')->result();
	}

	// register
	public function insertUser()
	{
		// upload gambar
		$this->load->library('upload');
		$config['upload_path']   = FCPATH . 'public/assets/img/document/';
		$config['allowed_types'] = 'jpg|jpeg|png';
		$config['max_size']      = 2048; //2mb
		$config['encrypt_name']  = TRUE;
		$this->upload->initialize($config);

		$fileName = '';
		if (!$this->upload->do_upload('document')) {
			echo 'gagal upload gambar';
		} else {
			$data = $this->upload->data();
			$fileName = $data['file_name'];
		}

		//slug
		//slug
		$nameLower = strtolower(trim($this->input->post('first_name')) . '-' . trim($this->input->post('last_name')));
		$slug = preg_replace('/[^a-z0-9]+/', '-', $nameLower);

		$form_data = [
			'first_name' => $this->input->post('first_name'),
			'last_name' => $this->input->post('last_name'),
			'slug' => $slug,
			'born_in' => $this->input->post('born_in'),
			'birthday' => $this->input->post('birthday'),
			'email' => $this->input->post('email'),
			'type_work' => $this->input->post('type_work'),
			'no_handphone' => $this->input->post('no_handphone'),
			'document' => $fileName,
			'nik' => $this->input->post('nik'),
			'address' => $this->input->post('address'),
			'provincy' => $this->input->post('provincy'),
			'city' => $this->input->post('city'),
			'district' => $this->input->post('district'),
			'villages' => $this->input->post('villages'),
			'role' => 'User',
			'status' => 'Not Validated',
			'password' => password_hash($this->input->post('password'), PASSWORD_DEFAULT),
			'created_at' => date('Y-m-d H:i:s'),
			'updated_at' => date('Y-m-d H:i:s'),
		];
		$this->db->insert('users', $form_data);
	}

	// ADMIN
	public function insertAdmin()
	{

		//slug
		$nameLower = strtolower(trim($this->input->post('first_name')) . '-' . trim($this->input->post('last_name')));
		$slug = preg_replace('/[^a-z0-9]+/', '-', $nameLower);


		$form_data = [
			'first_name' => $this->input->post('first_name'),
			'last_name' => $this->input->post('last_name'),
			'slug' => $slug,
			'born_in' => $this->input->post('born_in'),
			'birthday' => $this->input->post('birthday'),
			'email' => $this->input->post('email'),
			'no_handphone' => $this->input->post('no_handphone'),
			'address' => $this->input->post('address'),
			'password' => password_hash($this->input->post('password'), PASSWORD_DEFAULT),
			'role' => 'Admin',
			'status' => 'Validated',
			'created_at' => date('Y-m-d H:i:s'),
			'updated_at' => date('Y-m-d H:i:s'),
		];
		$this->db->insert('users', $form_data);
	}

	public function editAdmin($slug)
	{
		return $this->db->get_where('users', ['slug' => $slug])->row();
	}

	public function updateAdmin($slug)
	{
		//slug
		$nameLower = strtolower(trim($this->input->post('first_name')) . '-' . trim($this->input->post('last_name')));
		$newSlug = preg_replace('/[^a-z0-9]+/', '-', $nameLower);

		$form_data = [
			'first_name' => $this->input->post('first_name'),
			'last_name' => $this->input->post('last_name'),
			'slug' => $newSlug,
			'born_in' => $this->input->post('born_in'),
			'birthday' => $this->input->post('birthday'),
			'email' => $this->input->post('email'),
			'no_handphone' => $this->input->post('no_handphone'),
			'address' => $this->input->post('address'),
			'updated_at' => date('Y-m-d H:i:s'),
		];
		$this->db->where('slug', $slug);
		$this->db->update('users', $form_data);
	}
}
