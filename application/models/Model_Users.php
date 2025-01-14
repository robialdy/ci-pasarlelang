<?php
class Model_Users extends CI_Model
{

	public function read()
	{
		return $this->db->get('users')->result();
	}
}
