<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class TracerStudy_Model extends CI_Model {

	public function read()	
	{
	    $this->db->select('*');
	    $this->db->from('user');
	    $this->db->join('user_detail', 'user_detail.id_user=user.id_user');
	    $this->db->where('status', 'sudah');
	    $result = $this->db->get();
	    return $result->result_array();
	}

	public function view($id_user)
	{
	    $this->db->select('*');
	    $this->db->from('jawaban');
	    $this->db->join('pertanyaan', 'pertanyaan.id_pertanyaan=jawaban.id_pertanyaan');
	    $this->db->join('user', 'user.id_user=jawaban.id_user');
	    $this->db->where('user.id_user', $id_user);
	    $result = $this->db->get();
	    return $result->result_array();
	}

	public function read_user($id)
	{
	    $this->db->select('*');
	    $this->db->from('user');
	    $this->db->join('user_detail', 'user_detail.id_user=user.id_user');
	    $this->db->where('user.id_user', $id);
	    $result = $this->db->get();
	    return $result->row_array();
	}

}

/* End of file TracerStudy_Model.php */
/* Location: ./application/models/TracerStudy_Model.php */