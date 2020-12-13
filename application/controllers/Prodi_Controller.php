<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Prodi_Controller extends CI_Controller {

    public function __construct()
    {
        parent::__construct();
        if(!$this->session->userdata('email')){
            redirect('login');
        }
        $this->load->model('Prodi_Model', 'kaprodi');
    }

    public function index()
    {
        $data = [
            'title' => 'Data Prodi',
            'kaprodi' => $this->kaprodi->read()
        ];
        $this->load->view('templates/admin/header', $data);
        $this->load->view('templates/admin/sidebar');
        $this->load->view('templates/admin/topbar');
        $this->load->view('prodi/index', $data);
        $this->load->view('templates/admin/footer');
    }

    public function tambah()
    {
        $data = [
            'title' => 'Tambah Data',
            'id_user' => $this->session->userdata('id_user')
        ];
        $this->form_validation->set_rules('nidn', 'NIDN', 'trim|required');
        $this->form_validation->set_rules('nama_lengkap', 'Nama Lengkap', 'trim|required');
        $this->form_validation->set_rules('agama', 'Agama', 'trim|required');
        $this->form_validation->set_rules('alamat', 'Alamat', 'trim|required');
        $this->form_validation->set_rules('telpon', 'Telpon', 'trim|required');
        $this->form_validation->set_rules('jenis_kelamin', 'Jenis Kelamin', 'trim|required');
        $this->form_validation->set_rules('tempat_lahir', 'Tempat Lahir', 'trim|required');
        $this->form_validation->set_rules('tanggal_lahir', 'Tanggal Lahir', 'trim|required');
        $this->form_validation->set_rules('periode_jabatan', 'Periode Jabatan', 'trim|required');
        if ($this->form_validation->run() == false) {
            $this->load->view('templates/admin/header', $data);
            $this->load->view('templates/admin/sidebar');
            $this->load->view('templates/admin/topbar');
            $this->load->view('prodi/tambah', $data);
            $this->load->view('templates/admin/footer');
        } else {
            $this->kaprodi->create();
            $this->session->set_flashdata('flash', 'Ditambah');
            redirect('prodi');
        }
    }

    public function edit($id)
    {
        $data = [
            'title' => 'Tambah Data',
            'kaprodi' => $this->kaprodi->view($id)
        ];

        $this->form_validation->set_rules('nidn', 'NIDN', 'trim|required');
        $this->form_validation->set_rules('nama_lengkap', 'Nama Lengkap', 'trim|required');
        $this->form_validation->set_rules('agama', 'Agama', 'trim|required');
        $this->form_validation->set_rules('alamat', 'Alamat', 'trim|required');
        $this->form_validation->set_rules('telpon', 'Telpon', 'trim|required');
        $this->form_validation->set_rules('tempat_lahir', 'Tempat Lahir', 'trim|required');
        $this->form_validation->set_rules('tanggal_lahir', 'Tanggal Lahir', 'trim|required');
        $this->form_validation->set_rules('periode_jabatan', 'Periode Jabatan', 'trim|required');
        if ($this->form_validation->run() == false) {
            $this->load->view('templates/admin/header', $data);
            $this->load->view('templates/admin/sidebar');
            $this->load->view('templates/admin/topbar');
            $this->load->view('prodi/edit', $data);
            $this->load->view('templates/admin/footer');
        } else {
            $this->kaprodi->update();
            $this->session->set_flashdata('flash', 'Diubah');
            redirect('prodi');
        }
    }

    public function edit_foto()
    {
        $id = $this->session->userdata('id_user');
        $data = [
            'title' => 'Edit Foto',
            'user' => $this->kaprodi->view_kaprodi($id)
        ];

        $this->load->view('templates/admin/header', $data);
        $this->load->view('templates/admin/sidebar');
        $this->load->view('templates/admin/topbar');
        $this->load->view('prodi/edit_foto', $data);
        $this->load->view('templates/admin/footer'); 
    }

    public function edit_foto_proses()
    {
        $id = $this->session->userdata('id_user');
        $data['user'] = $this->kaprodi->view_kaprodi($id);
        $id_user = $this->input->post('id_user');
        $nama = $this->input->post('nama');
        $gambar = $_FILES['gambar']['name'];
        if ($gambar) {
            $config['allowed_types'] = 'gif|jpg|png|jpeg|JPG';
            $config['upload_path'] = './assets/img/profile/';

            $this->load->library('upload', $config);

            if ($this->upload->do_upload('gambar')) {
                $old_image = $data['user']['gambar'];
                if ($old_image != 'default.jpg') {
                    unlink(FCPATH . 'assets/img/profile/' . $old_image);
                }
                $new_image = $this->upload->data('file_name');
                $this->db->set('gambar', $new_image);
                $this->db->where('id_user', $id_user);
                $this->db->update('user');  
                $this->session->set_flashdata('flash', 'Diubah');
                redirect('prodi');
            } else {
                echo $this->upload->display_errors();
            }
        }
    }

}

/* End of file Prodi_Controller.php */
/* Location: ./application/controllers/data/Prodi_Controller.php */