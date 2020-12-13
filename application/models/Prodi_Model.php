<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Prodi_Model extends CI_Model {

	public function read()
	{
		$this->db->select('*');
		$this->db->from('kaprodi');
		$this->db->join('user', 'user.id_user=kaprodi.id_user');
		$this->db->where('kaprodi.id_user', 3);
		$result = $this->db->get();
	    return $result->row_array();
	}

	public function view($id)
	{
	    $this->db->select('*');
		$this->db->from('kaprodi');
		$this->db->join('user', 'user.id_user=kaprodi.id_user');
		$this->db->where('id_kaprodi', $id);
		$result = $this->db->get();
	    return $result->row_array();
	}

	public function view_kaprodi($id)
	{
	   return $this->db->get_where('user', ['id_user' => $id])->row_array();
	}

	public function create()
	{
	    $data = [
	    	'nidn' => $this->input->post('nidn'),
	    	'nama_lengkap' => $this->input->post('nama_lengkap'),
	    	'jenis_kelamin' => $this->input->post('jenis_kelamin'),
	    	'agama' => $this->input->post('agama'),
	    	'alamat' => $this->input->post('alamat'),
	    	'telpon' => $this->input->post('telpon'),
	    	'tanggal_lahir' => $this->input->post('tanggal_lahir'),
	    	'tempat_lahir' => $this->input->post('tempat_lahir'),
	    	'periode_jabatan' => $this->input->post('periode_jabatan'),
	    	'id_user' => $this->input->post('id_user')
	    ];
	    $this->db->insert('kaprodi', $data);
	}

	public function update()
	{
	    $data = [
	    	'nidn' => $this->input->post('nidn'),
	    	'nama_lengkap' => $this->input->post('nama_lengkap'),
	    	'agama' => $this->input->post('agama'),
	    	'alamat' => $this->input->post('alamat'),
	    	'telpon' => $this->input->post('telpon'),
	    	'tanggal_lahir' => $this->input->post('tanggal_lahir'),
	    	'tempat_lahir' => $this->input->post('tempat_lahir'),
	    	'periode_jabatan' => $this->input->post('periode_jabatan')
	    ];

	    $this->db->update('kaprodi', $data, ['id_kaprodi' => $this->input->post('id_kaprodi')]);
	}
	

}

/* End of file Prodi_Model.php */
/* Location: ./application/models/Prodi_Model.php */