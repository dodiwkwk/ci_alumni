<?php

class Profile_Controller extends CI_Controller
{

    function __construct()
    {
        parent::__construct();
        if(!$this->session->userdata('email')){
            redirect('login');
        }
        $this->load->model('Profile_Model');
    }

    public function index()
    {
        $id = $this->session->userdata('id_user');
        $data = [
            'title' => 'Profile',
            'user' => $this->Profile_Model->profile_tampil_id($id),
            'user_detail' => $this->Profile_Model->profile_detail_tampil_id($id)
        ];
        $this->load->view('templates/admin/header', $data);
        $this->load->view('templates/admin/sidebar');
        $this->load->view('templates/admin/topbar');
        $this->load->view('profile/index', $data);
        $this->load->view('templates/admin/footer');
    }

    public function lengkapi()
    {
        $id = $this->session->userdata('id_user');
        $data = [
            'title' => 'Lengkapi Profile',
            'user' => $this->Profile_Model->profile_tampil_id($id)
        ];
        $this->form_validation->set_rules('npm', 'Npm', 'trim|required');
        $this->form_validation->set_rules('nama_lengkap', 'Nama Lengkap', 'trim|required');
        $this->form_validation->set_rules('tempat_lahir', 'Tempat Lahir', 'trim|required');
        $this->form_validation->set_rules('agama', 'Agama', 'trim|required');
        $this->form_validation->set_rules('alamat', 'Alamat', 'trim|required');
        $this->form_validation->set_rules('telpon', 'Telpon', 'trim|required');
        $this->form_validation->set_rules('ipk', 'IPK', 'trim|required');
        $this->form_validation->set_rules('pekerjaan', 'Pekerjaan', 'trim|required');
        $this->form_validation->set_rules('tahun_masuk', 'Tahun Masuk', 'trim|required');
        $this->form_validation->set_rules('tahun_lulus', 'Tahun Lulus', 'trim|required');

        if ($this->form_validation->run() == false) {
            $this->load->view('templates/admin/header', $data);
            $this->load->view('templates/admin/sidebar');
            $this->load->view('templates/admin/topbar');
            $this->load->view('profile/lengkapi', $data);
            $this->load->view('templates/admin/footer');
        } else {
            $this->Profile_Model->lengkapi_data();
            $this->session->set_flashdata('flash', 'Ditambah');
            redirect('service/profile');
        }
    }

    public function edit($id)
    {
        $data = [
            'title' => 'Edit Profile',
            'user_detail' => $this->Profile_Model->profile_detail_tampil_id($id),
            'jenis_kelamin' => ['Laki-Laki', 'Perempuan'],
            'jenjang' => ['D3', 'S1', 'S2']
        ];
        $this->form_validation->set_rules('npm', 'Npm', 'trim|required');
        $this->form_validation->set_rules('nama_lengkap', 'Nama Lengkap', 'trim|required');
        $this->form_validation->set_rules('tempat_lahir', 'Tempat Lahir', 'trim|required');
        $this->form_validation->set_rules('agama', 'Agama', 'trim|required');
        $this->form_validation->set_rules('alamat', 'Alamat', 'trim|required');
        $this->form_validation->set_rules('telpon', 'Telpon', 'trim|required');
        $this->form_validation->set_rules('ipk', 'IPK', 'trim|required');
        $this->form_validation->set_rules('pekerjaan', 'Pekerjaan', 'trim|required');
        $this->form_validation->set_rules('tahun_masuk', 'Tahun Masuk', 'trim|required');
        $this->form_validation->set_rules('tahun_lulus', 'Tahun Lulus', 'trim|required');

        if ($this->form_validation->run() == false) {
            $this->load->view('templates/admin/header', $data);
            $this->load->view('templates/admin/sidebar');
            $this->load->view('templates/admin/topbar');
            $this->load->view('profile/edit', $data);
            $this->load->view('templates/admin/footer');
        } else {
            $this->Profile_Model->edit_profile();
            $this->session->set_flashdata('flash', 'Diubah');
            redirect('service/profile');
        }
    }

    public function edit_foto()
    {
        $id = $this->session->userdata('id_user');
        $data = [
            'title' => 'Edit Foto',
            'user' => $this->Profile_Model->profile_tampil_id($id)
        ];
            $this->load->view('templates/admin/header', $data);
            $this->load->view('templates/admin/sidebar');
            $this->load->view('templates/admin/topbar');
            $this->load->view('profile/edit_foto', $data);
            $this->load->view('templates/admin/footer'); 
    }

    public function edit_foto_proses()
    {
        $id = $this->session->userdata('id_user');
        $data['user'] = $this->Profile_Model->profile_tampil_id($id);
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
                redirect('service/profile');
            } else {
                echo $this->upload->display_errors();
            }
        }
    }



}
