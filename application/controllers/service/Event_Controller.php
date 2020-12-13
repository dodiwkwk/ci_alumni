<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Event_Controller extends CI_Controller {

	public function __construct()
    {
        parent::__construct();
        if(!$this->session->userdata('email')){
            redirect('login');
        }
        $this->load->model('Event_Model', 'event');
    }

    public function index()
    {
        $data = [
            'title' => 'Event',
            'event' => $this->event->read()
        ];

        $this->load->view('templates/admin/header', $data);
        $this->load->view('templates/admin/sidebar');
        $this->load->view('templates/admin/topbar');
        $this->load->view('event/index');
        $this->load->view('templates/admin/footer');        
    }

    public function create()
    {
        $data = [
            'title' => 'Tambah Event',
            'id_user' => $this->session->userdata('id_user')
        ];
        $this->form_validation->set_rules('nama_event', 'Nama Event', 'required|trim');
        $this->form_validation->set_rules('judul_event', 'Judul Event', 'required|trim');
        $this->form_validation->set_rules('deskripsi', 'Deskripsi', 'required|trim');
        $this->form_validation->set_rules('tanggal_posting', 'Tanggal Posting', 'required|trim');
        if ($this->form_validation->run() == false) {    
            $this->load->view('templates/admin/header', $data);
            $this->load->view('templates/admin/sidebar');
            $this->load->view('templates/admin/topbar');
            $this->load->view('event/tambah', $data);
            $this->load->view('templates/admin/footer');
        } else {
            $foto = $_FILES['foto']['name'];
            if ($foto) {
                $config['allowed_types'] = 'gif|jpg|png|jpeg|JPG';
                $config['upload_path'] = './assets/img/event/';

                 $this->load->library('upload', $config);

                if ($this->upload->do_upload('foto')) {
                 } else {
                    echo $this->upload->display_errors();
                 }
                 $data = [
                    'nama_event' => $this->input->post('nama_event'),
                    'judul_event' => $this->input->post('judul_event'),
                    'deskripsi' => $this->input->post('deskripsi'),
                    'foto' => $foto,
                    'tanggal_posting' => $this->input->post('tanggal_posting'),
                    'id_user' => $this->input->post('id_user')
                ];
            $this->db->insert('event', $data);
             $this->session->set_flashdata('flash', 'Ditambah');
            redirect('service/event');
            }
        }
    }


    public function view($id)       
    {
        $data = [
            'title' => 'Detail Event',
            'event' => $this->event->view($id)
        ];

        $this->load->view('templates/admin/header', $data);
        $this->load->view('templates/admin/sidebar');
        $this->load->view('templates/admin/topbar');
        $this->load->view('event/detail');
        $this->load->view('templates/admin/footer');
    }

    public function update($id)
    {
        $data = [
            'title' => 'Edit Event',
            'event' => $this->event->view($id)
        ];
        $this->form_validation->set_rules('nama_event', 'Nama Event', 'required|trim');
        $this->form_validation->set_rules('judul_event', 'Judul Event', 'required|trim');
        $this->form_validation->set_rules('deskripsi', 'Deskripsi', 'required|trim');
        if ($this->form_validation->run() == false) {    
            $this->load->view('templates/admin/header', $data);
            $this->load->view('templates/admin/sidebar');
            $this->load->view('templates/admin/topbar');
            $this->load->view('event/edit');
            $this->load->view('templates/admin/footer');
        } else {
            $this->event->update();
            $this->session->set_flashdata('flash', 'Diubah');
            redirect('service/event');
        }
    }

    public function delete($id)
    {
        $this->db->delete('event', ['id_event' => $id]);
        $this->session->set_flashdata('flash', 'Dihapus');
        redirect('service/event');
    }

}

/* End of file Event_Controller.php */
/* Location: ./application/controllers/service/Event_Controller.php */