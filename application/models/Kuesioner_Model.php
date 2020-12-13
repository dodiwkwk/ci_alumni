<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Kuesioner_Model extends CI_Model {

	public function read()
	{
	   return $this->db->get('pertanyaan')->result_array();
	}

	public function create()
	{
	    $data = [
	    	'pertanyaan' => $this->input->post('pertanyaan')
	    ];
	    $this->db->insert('pertanyaan', $data);
	}

	public function view($id)
	{
	   return $this->db->get_where('pertanyaan', ['id_pertanyaan' => $id])->row_array();
	}

	public function update()	
	{
	    $data = [
	    	'pertanyaan' => $this->input->post('pertanyaan')
	    ];
	    $this->db->update('pertanyaan', $data, ['id_pertanyaan' => $this->input->post('id_pertanyaan')]);
	}	







}

/* End of file Kuesioner_Model.php */
/* Location: ./application/models/Kuesioner_Model.php */