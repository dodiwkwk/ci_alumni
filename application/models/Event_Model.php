<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Event_Model extends CI_Model {

	public function read()
	{
	    return $this->db->get('event')->result_array();
	}

	public function create()
	{
	    $data = [
	    	'nama_event' => $this->input->post('nama_event'),
	    	'judul_event' => $this->input->post('judul_event'),
	    	'deskripsi' => $this->input->post('deskripsi'),
	    	'tanggal_posting' => $this->input->post('tanggal_posting'),
	    	'id_user' => $this->input->post('id_user')
	    ];
	    $this->db->insert('event', $data);
	}

	public function view($id)
	{
		$this->db->select('*');
		$this->db->from('event');
		$this->db->join('user', 'event.id_user=user.id_user');
		$this->db->where('id_event', $id);
	   	$result = $this->db->get();
	   	return $result->row_array();
	}

	public function update()	
	{
	    $data = [
	    	'nama_event' => $this->input->post('nama_event'),
	    	'judul_event' => $this->input->post('judul_event'),
	    	'deskripsi' => $this->input->post('deskripsi')
	    ];
	    $this->db->update('event', $data, ['id_event' => $this->input->post('id_event')]);
	}	

}

/* End of file Event_Model.php */
/* Location: ./application/models/Event_Model.php */