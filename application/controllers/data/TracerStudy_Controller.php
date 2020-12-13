<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class TracerStudy_Controller extends CI_Controller {

	public function __construct()
	{
	    parent::__construct();
	    if(!$this->session->userdata('email')){
            redirect('login');
        }
	    $this->load->model('TracerStudy_Model', 'tracerStudy');
	}

	public function index()
	{
		$id_user = $this->session->userdata('id_user');
		$data = [
            'title' => 'Data Tracer Study Alumni',
            'user' => $this->tracerStudy->read()
        ];
        $this->load->view('templates/admin/header', $data);
        $this->load->view('templates/admin/sidebar');
        $this->load->view('templates/admin/topbar');
        $this->load->view('tracerStudy/index', $data);
        $this->load->view('templates/admin/footer'); 
	}

	public function view($id)
	{
	    $data = [
            'title' => 'Detail Tracer Study Alumni',
            'user' => $this->tracerStudy->read_user($id),
            'tracer' => $this->tracerStudy->view($id)
        ];
        $this->load->view('templates/admin/header', $data);
        $this->load->view('templates/admin/sidebar');
        $this->load->view('templates/admin/topbar');
        $this->load->view('tracerStudy/detail', $data);
        $this->load->view('templates/admin/footer'); 
	}

	public function delete($id)
	{
	    $this->db->delete('jawaban', ['id_user' => $id]);
	    $data = ['status' => ''];
	    $this->db->update('user', $data, ['id_user' => $id]);
	    $this->session->set_flashdata('flash', 'Dihapus');
	    redirect('data/tracer_study');
	}

}

/* End of file TracerStudy_Controller.php */
/* Location: ./application/controllers/data/TracerStudy_Controller.php */