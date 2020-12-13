<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Tracer_Model extends CI_Model {

	public function read()
	{
	    return $this->db->get('pertanyaan')->result_array();
	}

	public function view($id_user)
	{
	    $this->db->select('*');
	    $this->db->from('jawaban');
	    $this->db->join('pertanyaan', 'pertanyaan.id_pertanyaan=jawaban.id_pertanyaan');
	    $this->db->where('id_user', $id_user);
	    $result = $this->db->get();
	    return $result->result_array();
	}

	public function pendapatan()
	{
	    $this->db->select('*');
	    $this->db->from('jawaban');
	    $this->db->join('user_detail', 'user_detail.id_user=jawaban.id_user');
	    $this->db->like('jawaban', 'Juta');
	   	$result = $this->db->get();
	   	return $result->result_array();
	}

	public function join($id_user)
	{
	   	$this->db->select('*');
	    $this->db->from('jawaban');
	    $this->db->join('pertanyaan', 'pertanyaan.id_pertanyaan=jawaban.id_pertanyaan');
	    $this->db->where([
	    	'jawaban.id_pertanyaan' => 8,
	    	'id_user' => $id_user
	    ]);
	    $result = $this->db->get();
	    return $result->row_array(); 
	}

}

/* End of file Tracer_Model.php */
/* Location: ./application/models/Tracer_Model.php */