<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Jurnal_Controller extends CI_Controller {

	public function __construct()
	{
	    parent::__construct();
        if(!$this->session->userdata('email')){
            redirect('login');
        }
	    $this->load->model('Jurnal_Model', 'jurnal');
	}

    public function index()
    {
    	$data = [
    		'title' => 'Jurnal',
    		'jurnal' => $this->jurnal->read()
    	];
        $this->load->view('templates/admin/header', $data);
        $this->load->view('templates/admin/sidebar');
        $this->load->view('templates/admin/topbar');
        $this->load->view('jurnal/index');
        $this->load->view('templates/admin/footer');
    }

    public function upload()
    {
        $data = [
    		'title' => 'Upload File'
    	];
        $this->load->view('templates/admin/header', $data);
        $this->load->view('templates/admin/sidebar');
        $this->load->view('templates/admin/topbar');
        $this->load->view('jurnal/upload');
        $this->load->view('templates/admin/footer');		
    }

    public function upload_proses()
    {
		$deskripsi = $this->input->post('deskripsi');
    $jurnal = $_FILES['jurnal']['name'];
		$file_new = strtolower(end(explode('.', $jurnal)));
		$time = time();
		$result_file = 'jurnal'.$time.'.'.$file_new;

		    $config['allowed_types'] = 'pdf|docx|doc|xlsx';
        $config['upload_path'] = './assets/upload/jurnal/';
      	$config['file_name'] = $result_file;

        $this->load->library('upload', $config);

        if ($this->upload->do_upload('jurnal')) {
         } else {
            echo $this->upload->display_errors();
         }

         $data = [
         	'nama_jurnal' => $result_file,
         	'deskripsi' => $deskripsi
         ];
         $this->db->insert('jurnal', $data);
         $this->session->set_flashdata('flash', 'Ditambah');
      	 redirect('data/jurnal');
	
    }

    public function delete($id)
    {
     $this->db->delete('jurnal', ['id_jurnal' => $id]);
     $this->session->set_flashdata('flash', 'Dihapus');
  	 redirect('data/jurnal');
    }

}

/* End of file Jurnal_Controller.php */
/* Location: ./application/controllers/data/Jurnal_Controller.php */