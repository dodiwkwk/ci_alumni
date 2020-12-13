<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Loker_Model extends CI_Model {

	public function read()
	{
	    return $this->db->get('lowongan')->result_array();
	}

	public function view($id)
	{
	    return $this->db->get_where('lowongan', ['id_lowongan' => $id])->row_array();
	}

	public function update()	
	{
	    $data = [
	    	'nama_perusahaan' => $this->input->post('nama_perusahaan'),
	    	'judul_lowongan' => $this->input->post('judul_lowongan'),
	    	'deskripsi' => $this->input->post('deskripsi'),
	    	'tanggal_posting' => $this->input->post('tanggal_posting')
	    ];
	    $this->db->update('lowongan', $data, ['id_lowongan' => $this->input->post('id_lowongan')]);
	}

}

/* End of file Loker_Model.php */
/* Location: ./application/models/Loker_Model.php */