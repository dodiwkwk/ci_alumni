<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Dashboard_Controller extends CI_Controller {

    public function __construct()
    {
        parent::__construct();
        if(!$this->session->userdata('email')){
            redirect('login');
        }
        $this->load->model('Dashboard_Model', 'dashboard');
    }

    public function index()
    {
        $data = [
            'title' => 'Dashboard',
            'sudah' => $this->db->get_where('user', ['status' => 'sudah'])->result_array(),
            'belum' => $this->db->get_where('user', ['status' => ''])->result_array(),
            'alumni' => $this->db->get_where('user', ['role_id' => '4'])->result_array(),
            'lowongan' => $this->db->get('lowongan')->result_array(),
            'jurnal' => $this->db->get('jurnal')->result_array()
        ];
        $this->load->view('templates/admin/header', $data);
        $this->load->view('templates/admin/sidebar');
        $this->load->view('templates/admin/topbar');
        $this->load->view('admin/index');
        $this->load->view('templates/admin/footer');        
    }

}

/* End of file Dashboard_Controller.php */
/* Location: ./application/controllers/Dashboard_Controller.php */