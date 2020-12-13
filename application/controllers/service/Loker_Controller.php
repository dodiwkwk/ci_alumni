<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Loker_Controller extends CI_Controller {

    public function __construct()
    {
        parent::__construct();
        if(!$this->session->userdata('email')){
            redirect('login');
        }
        $this->load->model('Loker_Model', 'loker');
    }

    public function index()
    {
        $data = [
            'title' => 'Loker',
            'loker' => $this->loker->read()
        ];
        $this->load->view('templates/admin/header', $data);
        $this->load->view('templates/admin/sidebar');
        $this->load->view('templates/admin/topbar');
        $this->load->view('loker/index');
        $this->load->view('templates/admin/footer');        
    }

    public function create()
    {
        $data = [
            'title' => 'Tambah Loker'
        ];
        $this->form_validation->set_rules('nama_perusahaan', 'Nama Perusahaan', 'required|trim');
        $this->form_validation->set_rules('judul_lowongan', 'Judul Lowongan', 'required|trim');
        $this->form_validation->set_rules('deskripsi', 'Deskripsi', 'required|trim');
        $this->form_validation->set_rules('tanggal_posting', 'Tanggal Posting', 'required|trim');
        if ($this->form_validation->run() == false) {    
            $this->load->view('templates/admin/header', $data);
            $this->load->view('templates/admin/sidebar');
            $this->load->view('templates/admin/topbar');
            $this->load->view('loker/tambah');
            $this->load->view('templates/admin/footer');
        } else {
            $gambar = $_FILES['gambar']['name'];
            if ($gambar) {
                $config['allowed_types'] = 'gif|jpg|png|jpeg|JPG';
                $config['upload_path'] = './assets/img/loker/';

                 $this->load->library('upload', $config);

                if ($this->upload->do_upload('gambar')) {
                 } else {
                    echo $this->upload->display_errors();
                 }

                 $data = [
                    'nama_perusahaan' => $this->input->post('nama_perusahaan'),
                    'judul_lowongan' => $this->input->post('judul_lowongan'),
                    'deskripsi' => $this->input->post('deskripsi'),
                    'gambar' => $gambar,
                    'tanggal_posting' => $this->input->post('tanggal_posting')
                ];
                 $this->db->insert('lowongan', $data);
                 $this->session->set_flashdata('flash', 'Ditambah');
                 redirect('service/loker');
        }
    }
}

    public function view($id)       
    {
        $data = [
            'title' => 'Detail Lowongan',
            'loker' => $this->loker->view($id)
        ];
        $this->load->view('templates/admin/header', $data);
        $this->load->view('templates/admin/sidebar');
        $this->load->view('templates/admin/topbar');
        $this->load->view('loker/detail');
        $this->load->view('templates/admin/footer');
    }

    public function update($id)
    {
        $data = [
            'title' => 'Edit Loker',
            'loker' => $this->loker->view($id)
        ];
        $this->form_validation->set_rules('nama_perusahaan', 'Nama Perusahaan', 'required|trim');
        $this->form_validation->set_rules('judul_lowongan', 'Judul Lowongan', 'required|trim');
        $this->form_validation->set_rules('deskripsi', 'Deskripsi', 'required|trim');
        $this->form_validation->set_rules('tanggal_posting', 'Tanggal Posting', 'required|trim');
        if ($this->form_validation->run() == false) {    
            $this->load->view('templates/admin/header', $data);
            $this->load->view('templates/admin/sidebar');
            $this->load->view('templates/admin/topbar');
            $this->load->view('loker/edit');
            $this->load->view('templates/admin/footer');
        } else {
            $this->loker->update();
            $this->session->set_flashdata('flash', 'Diubah');
            redirect('service/loker');
        }
    }

    public function delete($id)
    {
        $this->db->delete('lowongan', ['id_lowongan' => $id]);
        $this->session->set_flashdata('flash', 'Dihapus');
        redirect('service/loker');
    }






}

/* End of file Loker_Controller.php */
/* Location: ./application/controllers/service/Loker_Controller.php */