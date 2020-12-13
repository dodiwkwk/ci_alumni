<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Banner_Model extends CI_Model {

	public function read()
	{
	    return $this->db->get('banner')->result_array();
	}

	public function view($id)
	{
	    return $this->db->get_where('banner', ['id_banner' => $id])->row_array();
	}

	public function update()	
	{
	    $data = [
	    	'judul_banner' => $this->input->post('judul_banner'),
	    	'deskripsi' => $this->input->post('deskripsi')
	    ];
	    $this->db->update('banner', $data, ['id_banner' => $this->input->post('id_banner')]);
	}

}

/* End of file Banner_Model.php */
/* Location: ./application/models/Banner_Model.php */