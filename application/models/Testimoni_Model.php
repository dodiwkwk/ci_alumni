<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Testimoni_Model extends CI_Model {

	public function read()
	{
		$this->db->select('*');
		$this->db->from('testimoni');
		$this->db->join('user', 'testimoni.id_user=user.id_user');
	   	$result = $this->db->get();
	   	return $result->result_array();
	}

	public function read_user($id)
	{
	    $this->db->select('*');
		$this->db->from('testimoni');
		$this->db->join('user', 'testimoni.id_user=user.id_user');
		$this->db->where('user.id_user', $id);
	   	$result = $this->db->get();
	   	return $result->row_array();
	}

	public function create()
	{
	    $data = [
	    	'id_user' => $this->input->post('id_user'),
	    	'testimoni' => $this->input->post('testimoni'),
	    	'is_view' => $this->input->post('is_view')
	    ];
	    $this->db->insert('testimoni', $data);
	}

	public function view($id)
	{
		$this->db->select('*');
		$this->db->from('testimoni');
		$this->db->join('user', 'testimoni.id_user=user.id_user');
		$this->db->where('id_testimoni', $id);
	   	$result = $this->db->get();
	   	return $result->row_array();
	}

	public function update()	
	{
	    $data = [
	    	'testimoni' => $this->input->post('testimoni'),
	    	'is_view' => $this->input->post('is_view')
	    ];
	    $this->db->update('testimoni', $data, ['id_testimoni' => $this->input->post('id_testimoni')]);
	}

}

/* End of file Testimoni_Model.php */
/* Location: ./application/models/Testimoni_Model.php */