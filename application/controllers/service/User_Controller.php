<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class User_Controller extends CI_Controller {

	public function __construct()
    {
        parent::__construct();
        if(!$this->session->userdata('email')){
            redirect('login');
        }
        $this->load->model('User_Model', 'user');
    }

    public function index()
    {
        $data = [
            'title' => 'Users',
            'user' => $this->user->read()
        ];
        $this->load->view('templates/admin/header', $data);
        $this->load->view('templates/admin/sidebar');
        $this->load->view('templates/admin/topbar');
        $this->load->view('user/index');
        $this->load->view('templates/admin/footer');        
    }

    public function view($id)       
    {
        $data = [
            'title' => 'Detail User',
            'user' => $this->user->view($id)
        ];
        $this->load->view('templates/admin/header', $data);
        $this->load->view('templates/admin/sidebar');
        $this->load->view('templates/admin/topbar');
        $this->load->view('user/detail');
        $this->load->view('templates/admin/footer');
    }

    public function create()
    {
        $data = [
            'title' => 'Tambah Akun User'
        ];
        $this->form_validation->set_rules('nama', 'Nama', 'required|trim');
        $this->form_validation->set_rules('email', 'Email', 'required|trim');
        if ($this->form_validation->run() == false) {    
            $this->load->view('templates/admin/header', $data);
            $this->load->view('templates/admin/sidebar');
            $this->load->view('templates/admin/topbar');
            $this->load->view('user/tambah');
            $this->load->view('templates/admin/footer');
        } else {
            $this->user->add();
            $this->session->set_flashdata('flash', 'Ditambah');
            redirect('service/user');
        }
    }

    public function update($id)
    {
        $data = [
            'title' => 'Edit User',
            'user' => $this->user->view($id),
            'role' => $this->user->view_role()
        ];
        $this->form_validation->set_rules('nama', 'Nama', 'required|trim');
        $this->form_validation->set_rules('email', 'Email', 'required|trim');
        $this->form_validation->set_rules('role', 'Role', 'required|trim');
        if ($this->form_validation->run() == false) {    
            $this->load->view('templates/admin/header', $data);
            $this->load->view('templates/admin/sidebar');
            $this->load->view('templates/admin/topbar');
            $this->load->view('user/edit');
            $this->load->view('templates/admin/footer');
        } else {
            $this->user->update();
            $this->session->set_flashdata('flash', 'Diubah');
            redirect('service/user');
        }
    }

    public function delete($id)
    {
        $this->db->delete('user', ['id_user' => $id]);
        $this->session->set_flashdata('flash', 'Dihapus');
        redirect('service/user');
    }

}

/* End of file User_Controller.php */
/* Location: ./application/controllers/service/User_Controller.php */