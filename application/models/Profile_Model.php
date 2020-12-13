<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Profile_Model extends CI_Model {

	public function profile_tampil_id($id)
	{
	    return $this->db->get_where('user', ['id_user' => $id])->row_array();
	}

	public function profile_detail_tampil_id($id)
	{
	    return $this->db->get_where('user_detail', ['id_user' => $id])->row_array();
	}

	public function lengkapi_data()
	{
	    $data = [
	    	'id_user' => $this->session->userdata('id_user'),
	    	'npm' => $this->input->post('npm'),
	    	'nama_lengkap' => $this->input->post('nama_lengkap'),
	    	'tempat_lahir' => $this->input->post('tempat_lahir'),
	    	'jenis_kelamin' => $this->input->post('jenis_kelamin'),
	    	'agama' => $this->input->post('agama'),
	    	'alamat' => $this->input->post('alamat'),
	    	'telpon' => $this->input->post('telpon'),
	    	'ipk' => $this->input->post('ipk'),
	    	'jenjang' => $this->input->post('jenjang'),
	    	'pekerjaan' => $this->input->post('pekerjaan'),
	    	'nama_perusahaan' => $this->input->post('nama_perusahaan'),
	    	'tahun_masuk' => $this->input->post('tahun_masuk'),
	    	'tahun_lulus' => $this->input->post('tahun_lulus')
	    ];
	    $this->db->insert('user_detail', $data);
	}

	public function edit_profile()
	{
	    $data = [
	    	'npm' => $this->input->post('npm'),
	    	'nama_lengkap' => $this->input->post('nama_lengkap'),
	    	'tempat_lahir' => $this->input->post('tempat_lahir'),
	    	'jenis_kelamin' => $this->input->post('jenis_kelamin'),
	    	'agama' => $this->input->post('agama'),
	    	'alamat' => $this->input->post('alamat'),
	    	'telpon' => $this->input->post('telpon'),
	    	'ipk' => $this->input->post('ipk'),
	    	'jenjang' => $this->input->post('jenjang'),
	    	'pekerjaan' => $this->input->post('pekerjaan'),
	    	'nama_perusahaan' => $this->input->post('nama_perusahaan'),
	    	'tahun_masuk' => $this->input->post('tahun_masuk'),
	    	'tahun_lulus' => $this->input->post('tahun_lulus')
	    ];
	    $this->db->update('user_detail', $data, ['id_user' => $this->input->post('id_user')]);
	}














}
/* End of file Profile_Model.php */
/* Location: ./application/models/Profile_Model.php */