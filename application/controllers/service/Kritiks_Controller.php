<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Kritiks_Controller extends CI_Controller {

	public function __construct()
    {
        parent::__construct();
        if(!$this->session->userdata('email')){
            redirect('login');
        }
        $this->load->model('Kritiks_Model', 'kritiks');
    }

    public function index()
    {
        $data = [
            'title' => 'Kritik dan Saran',
            'kritiks' => $this->kritiks->read()
        ];
        $this->load->view('templates/admin/header', $data);
        $this->load->view('templates/admin/sidebar');
        $this->load->view('templates/admin/topbar');
        $this->load->view('kritiks/index');
        $this->load->view('templates/admin/footer');        
    }

    public function create()
    {
        $data = [
            'title' => 'Tambah Kritik dan Saran',
            'id_user' => $this->session->userdata('id_user')
        ];
        $this->form_validation->set_rules('kritik', 'Kritik', 'required|trim');
        $this->form_validation->set_rules('saran', 'Saran', 'required|trim');
        if ($this->form_validation->run() == false) {    
            $this->load->view('templates/admin/header', $data);
            $this->load->view('templates/admin/sidebar');
            $this->load->view('templates/admin/topbar');
            $this->load->view('kritiks/tambah', $data);
            $this->load->view('templates/admin/footer');
        } else {
            $this->kritiks->create();
            $this->session->set_flashdata('flash', 'Ditambah');
            redirect('service/kritik_dan_saran');
        }
    }

    public function view($id)       
    {
        $data = [
            'title' => 'Detail Kritik dan Saran',
            'kritiks' => $this->kritiks->view($id)
        ];

        $this->load->view('templates/admin/header', $data);
        $this->load->view('templates/admin/sidebar');
        $this->load->view('templates/admin/topbar');
        $this->load->view('kritiks/detail');
        $this->load->view('templates/admin/footer');
    }

    public function update($id)
    {
        $data = [
            'title' => 'Edit Kritik dan Saran',
            'kritiks' => $this->kritiks->view($id)
        ];
        $this->form_validation->set_rules('kritik', 'Kritik', 'required|trim');
        $this->form_validation->set_rules('saran', 'Saran', 'required|trim');
        if ($this->form_validation->run() == false) {    
            $this->load->view('templates/admin/header', $data);
            $this->load->view('templates/admin/sidebar');
            $this->load->view('templates/admin/topbar');
            $this->load->view('kritiks/edit');
            $this->load->view('templates/admin/footer');
        } else {
            $this->kritiks->update();
            $this->session->set_flashdata('flash', 'Diubah');
            redirect('service/kritik_dan_saran');
        }
    }

    public function delete($id)
    {
        $this->db->delete('kritik_saran', ['id_kritiksaran' => $id]);
        $this->session->set_flashdata('flash', 'Dihapus');
        redirect('service/kritik_dan_saran');
    }

}

/* End of file Kritiks_Controller.php */
/* Location: ./application/controllers/service/Kritiks_Controller.php */