<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Testimoni_Controller extends CI_Controller {

	public function __construct()
    {
        parent::__construct();
        if(!$this->session->userdata('email')){
            redirect('login');
        }
        $this->load->model('Testimoni_Model', 'testimoni');
    }

    public function index()
    {
        $id = $this->session->userdata('id_user');
        $data = [
            'title' => 'Testimoni Alumni',
            'testimoni' => $this->testimoni->read(),
            'user' => $this->testimoni->read_user($id)
        ];

        $this->load->view('templates/admin/header', $data);
        $this->load->view('templates/admin/sidebar');
        $this->load->view('templates/admin/topbar');
        $this->load->view('testimoni/index', $data);
        $this->load->view('templates/admin/footer');        
    }

    public function create()
    {
        $data = [
            'title' => 'Tambah Testimoni',
            'id_user' => $this->session->userdata('id_user')
        ];
        $this->form_validation->set_rules('testimoni', 'Testimoni', 'required|trim');
        if ($this->form_validation->run() == false) {    
            $this->load->view('templates/admin/header', $data);
            $this->load->view('templates/admin/sidebar');
            $this->load->view('templates/admin/topbar');
            $this->load->view('testimoni/tambah', $data);
            $this->load->view('templates/admin/footer');
        } else {
            $this->testimoni->create();
            $this->session->set_flashdata('flash', 'Ditambah');
            redirect('service/testimoni');
        }
    }

    public function view($id)       
    {
        $data = [
            'title' => 'Detail Testimoni',
            'testimoni' => $this->testimoni->view($id)
        ];

        $this->load->view('templates/admin/header', $data);
        $this->load->view('templates/admin/sidebar');
        $this->load->view('templates/admin/topbar');
        $this->load->view('testimoni/detail');
        $this->load->view('templates/admin/footer');
    }

    public function update($id)
    {
        $data = [
            'title' => 'Edit Testimoni',
            'testimoni' => $this->testimoni->view($id),
            'is_view' => ['Ya', 'Tidak']
            
        ];
        $this->form_validation->set_rules('testimoni', 'Testimoni', 'required|trim');
        if ($this->form_validation->run() == false) {    
            $this->load->view('templates/admin/header', $data);
            $this->load->view('templates/admin/sidebar');
            $this->load->view('templates/admin/topbar');
            $this->load->view('testimoni/edit');
            $this->load->view('templates/admin/footer');
        } else {
            $this->testimoni->update();
            $this->session->set_flashdata('flash', 'Diubah');
            redirect('service/testimoni');
        }
    }

    public function delete($id)
    {
        $this->db->delete('testimoni', ['id_testimoni' => $id]);
        $this->session->set_flashdata('flash', 'Dihapus');
        redirect('service/testimoni');
    }

}

/* End of file Testimoni_Controller.php */
/* Location: ./application/controllers/service/Testimoni_Controller.php */