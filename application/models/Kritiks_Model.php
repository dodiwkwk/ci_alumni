<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Kritiks_Model extends CI_Model {

	public function read()
	{
		$this->db->select('*');
		$this->db->from('kritik_saran');
		$this->db->join('user', 'kritik_saran.id_user=user.id_user');
	   	$result = $this->db->get();
	   	return $result->result_array();
	}

	public function create()
	{
	    $data = [
	    	'id_user' => $this->input->post('id_user'),
	    	'kritik' => $this->input->post('kritik'),
	    	'saran' => $this->input->post('saran'),
	    	'tanggal_posting' => $this->input->post('tanggal_posting')
	    ];
	    $this->db->insert('kritik_saran', $data);
	}

	public function view($id)
	{
		$this->db->select('*');
		$this->db->from('kritik_saran');
		$this->db->join('user', 'kritik_saran.id_user=user.id_user');
		$this->db->where('id_kritiksaran', $id);
	   	$result = $this->db->get();
	   	return $result->row_array();
	}

	public function update()	
	{
	    $data = [
	    	'kritik' => $this->input->post('kritik'),
	    	'saran' => $this->input->post('saran')
	    ];
	    $this->db->update('kritik_saran', $data, ['id_kritiksaran' => $this->input->post('id_kritiksaran')]);
	}
	

}

/* End of file Kritiks_Model.php */
/* Location: ./application/models/Kritiks_Model.php */