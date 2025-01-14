<?php
class Model_Categories extends CI_Model
{

	public function read()
	{
		return $this->db->get('categories')->result();
	}
}
