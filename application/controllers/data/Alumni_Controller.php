<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Alumni_Controller extends CI_Controller {

    public function __construct()
    {
        parent::__construct();
        if(!$this->session->userdata('email')){
            redirect('login');
        }
        $this->load->model('Alumni_Model', 'alumni');
    }

    public function index()
    {
        $data = [
            'title' => 'Data Alumni',
            'user' => $this->alumni->read()
        ];
        $this->load->view('templates/admin/header', $data);
        $this->load->view('templates/admin/sidebar');
        $this->load->view('templates/admin/topbar');
        $this->load->view('alumni/index', $data);
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
        $this->load->view('alumni/detail');
        $this->load->view('templates/admin/footer');
    }

    public function laporan_pdf()
    {
        $data['laporan_pdf'] = $this->alumni->read();

        $this->load->library('pdf');

        $this->pdf->setPaper('A4', 'potrait');
        $this->pdf->filename = "laporan-alumni.pdf";
        $this->pdf->load_view('alumni/laporan_pdf', $data);
    }

}

/* End of file Alumni_Controller.php */
/* Location: ./application/controllers/data/Alumni_Controller.php */