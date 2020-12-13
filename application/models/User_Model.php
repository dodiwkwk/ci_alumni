<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class User_Model extends CI_Model {

	public function read()
	{
		$this->db->select('*');
		$this->db->from('user');
		$this->db->join('role', 'role.id_role=user.role_id');
	   	$result = $this->db->get();
	   	return $result->result_array();
	}

	public function add()
	{
	    $data = [
	    	'nama' => $this->input->post('nama'),
	    	'email' => $this->input->post('email'),
	    	'password' => password_hash($this->input->post('password'), PASSWORD_DEFAULT),
	    	'role_id' => 4,
	    	'gambar' => 'default.jpg'
	    ];
	    $this->db->insert('user', $data);
	}

	public function view($id)
	{
		$this->db->select('*');
		$this->db->from('user');
		$this->db->join('role', 'role.id_role=user.role_id');
		$this->db->where('id_user', $id);
	   	$result = $this->db->get();
	   	return $result->row_array();
	}

	public function view_role()
	{
	    return $this->db->get('role')->result_array();
	}

	public function update()	
	{
	    $data = [
	    	'nama' => $this->input->post('nama'),
	    	'email' => $this->input->post('email'),
	    	'role_id' => $this->input->post('role')
	    ];
	    $this->db->update('user', $data, ['id_user' => $this->input->post('id_user')]);
	}

}

/* End of file User_Model.php */
/* Location: ./application/models/User_Model.php */