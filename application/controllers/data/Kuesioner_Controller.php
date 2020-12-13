<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Kuesioner_Controller extends CI_Controller {

	public function __construct()
	{
	    parent::__construct();
        if(!$this->session->userdata('email')){
            redirect('login');
        }
	    $this->load->model('Kuesioner_Model', 'kuesioner');
	}

	public function index()
	{
		$data = [
            'title' => 'Kuesioner',
            'pertanyaan' => $this->kuesioner->read()
        ];
        $this->load->view('templates/admin/header', $data);
        $this->load->view('templates/admin/sidebar');
        $this->load->view('templates/admin/topbar');
        $this->load->view('kuesioner/index');
        $this->load->view('templates/admin/footer'); 
	}

	public function create()
    {
        $data = [
            'title' => 'Tambah Pertanyaan'
        ];
        $this->form_validation->set_rules('pertanyaan', 'Pertanyaan', 'required|trim');
        if ($this->form_validation->run() == false) {    
            $this->load->view('templates/admin/header', $data);
            $this->load->view('templates/admin/sidebar');
            $this->load->view('templates/admin/topbar');
            $this->load->view('kuesioner/tambah', $data);
            $this->load->view('templates/admin/footer');
        } else {
            $this->kuesioner->create();
            $this->session->set_flashdata('flash', 'Ditambah');
            redirect('data/kuesioner');
        }
    }

    public function update($id)
    {
        $data = [
            'title' => 'Edit Pertanyaan',
            'pertanyaan' => $this->kuesioner->view($id)
        ];
        $this->form_validation->set_rules('pertanyaan', 'Pertanyaan', 'required|trim');
        if ($this->form_validation->run() == false) {    
            $this->load->view('templates/admin/header', $data);
            $this->load->view('templates/admin/sidebar');
            $this->load->view('templates/admin/topbar');
            $this->load->view('kuesioner/edit', $data);
            $this->load->view('templates/admin/footer');
        } else {
            $this->kuesioner->update();
            $this->session->set_flashdata('flash', 'Diubah');
            redirect('data/kuesioner');
        }
    }

    public function delete($id)
    {
        $this->db->delete('pertanyaan', ['id_pertanyaan' => $id]);
        $this->session->set_flashdata('flash', 'Dihapus');
        redirect('data/kuesioner');
    }

}

/* End of file Kuesioner_Controller.php */
/* Location: ./application/controllers/data/Kuesioner_Controller.php */