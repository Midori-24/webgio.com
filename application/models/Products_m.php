<?php

class Products_m extends CI_Model{
	public function get_all()
	{
		return $this->db->get('products')->result();
	}

	public function get_id($id)
	{
		return $this->db->where('id', $id)
		->get('products')
		->row();
	}
}

?>