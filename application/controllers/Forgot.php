<?php

class Forgot extends CI_Controller {
    public function index()
    {
        $data['judul'] = 'Halaman Forgot';
        $this->load->view('templates/forgot/header_forgot', $data);
        $this->load->view('forgot/index');
        $this->load->view('templates/forgot/footer_forgot');
    }
}