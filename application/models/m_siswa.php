<?php

class M_siswa extends CI_Model{
	public function get_data()
	{
		return $this->db->get('siswa')->result_array();
	}
}

?>