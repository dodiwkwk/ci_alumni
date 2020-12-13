<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Alumni_Model extends CI_Model {

	public function read()
	{
		$this->db->select('*');
		$this->db->from('user');
		$this->db->join('user_detail', 'user_detail.id_user=user.id_user');
	   	$result = $this->db->get();
	   	return $result->result_array();
	}

	public function view($id)
	{
		$this->db->select('*');
		$this->db->from('user');
		$this->db->join('user_detail', 'user_detail.id_user=user.id_user');
		$this->db->where('user.id_user', $id);
	   	$result = $this->db->get();
	   	return $result->row_array();
	}


}

/* End of file Alumni_Model.php */
/* Location: ./application/models/Alumni_Model.php */