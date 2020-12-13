<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Banner_Controller extends CI_Controller {

	public function __construct()
    {
        parent::__construct();
        if(!$this->session->userdata('email')){
            redirect('login');
        }
        $this->load->model('Banner_Model', 'banner');
    }

    public function index()
    {
        $data = [
            'title' => 'Banner Management',
            'banner' => $this->banner->read()
        ];
        $this->load->view('templates/admin/header', $data);
        $this->load->view('templates/admin/sidebar');
        $this->load->view('templates/admin/topbar');
        $this->load->view('banner/index', $data);
        $this->load->view('templates/admin/footer');        
    }

    public function create()
    {
        $data = [
            'title' => 'Tambah Banner'
        ];
        $this->form_validation->set_rules('judul_banner', 'Judul Banner', 'required|trim');
        $this->form_validation->set_rules('deskripsi', 'Deskripsi', 'required|trim');
        if ($this->form_validation->run() == false) {    
            $this->load->view('templates/admin/header', $data);
            $this->load->view('templates/admin/sidebar');
            $this->load->view('templates/admin/topbar');
            $this->load->view('banner/tambah');
            $this->load->view('templates/admin/footer');
        } else {
            $gambar = $_FILES['gambar']['name'];
			$file_new = strtolower(end(explode('.', $gambar)));
			$time = time();
			$result_file = 'gambar'.$time.'.'.$file_new;

                $config['allowed_types'] = 'gif|jpg|png|jpeg|JPG';
                $config['upload_path'] = './assets/img/banner/';
                $config['file_name'] = $result_file;

                 $this->load->library('upload', $config);

                if ($this->upload->do_upload('gambar')) {
                 } else {
                    echo $this->upload->display_errors();
                 }

                 $data = [
                    'judul_banner' => $this->input->post('judul_banner'),
                    'deskripsi' => $this->input->post('deskripsi'),
                    'gambar' => $result_file
                ];
                 $this->db->insert('banner', $data);
                 $this->session->set_flashdata('flash', 'Ditambah');
                 redirect('data/banner');
		        
		    }
		}

    public function view($id)       
    {
        $data = [
            'title' => 'Detail Banner',
            'banner' => $this->banner->view($id)
        ];
        $this->load->view('templates/admin/header', $data);
        $this->load->view('templates/admin/sidebar');
        $this->load->view('templates/admin/topbar');
        $this->load->view('banner/detail');
        $this->load->view('templates/admin/footer');
    }

    public function update($id)
    {
        $data = [
            'title' => 'Edit Banner',
            'banner' => $this->banner->view($id)
        ];
        $this->form_validation->set_rules('judul_banner', 'Judul Banner', 'required|trim');
        $this->form_validation->set_rules('deskripsi', 'Deskripsi', 'required|trim');
        if ($this->form_validation->run() == false) {    
            $this->load->view('templates/admin/header', $data);
            $this->load->view('templates/admin/sidebar');
            $this->load->view('templates/admin/topbar');
            $this->load->view('banner/edit');
            $this->load->view('templates/admin/footer');
        } else {
            $this->banner->update();
            $this->session->set_flashdata('flash', 'Diubah');
            redirect('data/banner');
        }
    }

    public function delete($id)
    {
        $this->db->delete('banner', ['id_banner' => $id]);
        $this->session->set_flashdata('flash', 'Dihapus');
        redirect('data/banner');
    }


}

/* End of file Banner_Controller.php */
/* Location: ./application/controllers/data/Banner_Controller.php */