<?php
class Model_Categories extends CI_Model
{

	public function read()
	{
		return $this->db->get('categories')->result();
	}

	public function insert()
	{
		$form_data = [
			'title' => $this->input->post('title'),
			'description' => $this->input->post('description'),
			'created_at' => date('Y-m-d H:i:s'),
			'updated_at' => date('Y-m-d H:i:s'),
		];
		$this->db->insert('categories', $form_data);
	}

	public function readByTitle($title)
	{
		return $this->db->get_where('categories', ['title' => $title])->row();
	}

	public function edit($title)
	{
		$form_data = [
			'title' => $this->input->post('title'),
			'description' => $this->input->post('description'),
			'updated_at' => date('Y-m-d H:i:s'),
		];
		$this->db->where('title', $title);
		$this->db->update('categories', $form_data);
	}
}
