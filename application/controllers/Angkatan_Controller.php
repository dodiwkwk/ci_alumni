<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Angkatan_Controller extends CI_Controller
{

    public function __construct()
    {
        parent::__construct();
        if (!$this->session->userdata('email')) {
            redirect('login');
        }
        $this->load->model('Alumni_Model', 'alumni');
    }

    public function index()
    {
        $data = [
            'title' => 'Alumni',
            'user' => $this->alumni->read()
        ];
        $this->load->view('templates/admin/header', $data);
        $this->load->view('templates/admin/sidebar');
        $this->load->view('templates/admin/topbar');
        $this->load->view('angkatan/index', $data);
        $this->load->view('templates/admin/footer');
    }

    public function view($id)
    {
        $data = [
            'title' => 'Detail Alumni',
            'user_detail' => $this->alumni->view($id)
        ];

        $this->load->view('templates/admin/header', $data);
        $this->load->view('templates/admin/sidebar');
        $this->load->view('templates/admin/topbar');
        $this->load->view('angkatan/detail');
        $this->load->view('templates/admin/footer');
    }
}

/* End of file Angkatan_Controller.php */
/* Location: ./application/controllers/Angkatan_Controller.php */
