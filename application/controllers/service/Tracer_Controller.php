<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Tracer_Controller extends CI_Controller {

	public function __construct()
	{
	    parent::__construct();
	    if(!$this->session->userdata('email')){
            redirect('login');
        }
	    $this->load->model('Tracer_Model', 'tracer');
	}

	public function index()
	{
		$id_user = $this->session->userdata('id_user');
		$data = [
            'title' => 'Tracer Study',
            'pertanyaan' => $this->tracer->read(),
            'jawaban' => $this->tracer->view($id_user)
        ];
        $this->load->view('templates/admin/header', $data);
        $this->load->view('templates/admin/sidebar');
        $this->load->view('templates/admin/topbar');
        $this->load->view('tracer/index', $data);
        $this->load->view('templates/admin/footer'); 
	}

	public function tambah()
	{
	    $pertanyaan = $this->tracer->read();
	    foreach($pertanyaan as $result){
	    	$id_pertanyaan = $result['id_pertanyaan'];
	    	$data = [
	    		'id_user' => $this->session->userdata('id_user'),
	    		'id_pertanyaan' => $id_pertanyaan,
	    		'jawaban' => $this->input->post($id_pertanyaan)
	    	];
	    	
	    	$this->db->insert('jawaban', $data);
	    }
	    	$data = ['status' => 'sudah'];
	    	$this->db->update('user', $data, ['id_user' => $this->session->userdata('id_user')]);
	    	$this->session->set_flashdata('flash', 'Ditambahkan');
	    	redirect('service/tracer');
	}

	public function edit($id_user)
	{
	    $data = [
            'title' => 'Edit Jawaban',
            'pertanyaan' => $this->tracer->join($id_user),
            'tracer' => $this->tracer->view($id_user)
        ];
        $this->load->view('templates/admin/header', $data);
        $this->load->view('templates/admin/sidebar');
        $this->load->view('templates/admin/topbar');
        $this->load->view('tracer/edit', $data);
        $this->load->view('templates/admin/footer'); 
	}

	public function edit_proses()
	{
		
	   	$this->db->update('jawaban', ['jawaban' => $this->input->post('pendapatan')], ['id_pertanyaan' => $this->input->post('pertanyaan'), 'id_user' => $this->input->post('id_user')]);
	    $this->session->set_flashdata('flash', 'Diubah');
    	redirect('service/tracer'); 
	}

	public function list_tracer()
	{
	  $data = [
            'title' => 'Tracer Study',
            'pendapatan' => $this->tracer->pendapatan()
        ];
        $this->load->view('templates/admin/header', $data);
        $this->load->view('templates/admin/sidebar');
        $this->load->view('templates/admin/topbar');
        $this->load->view('tracer/list_tracer', $data);
        $this->load->view('templates/admin/footer');   
	}


}

/* End of file Tracer_Controller.php */
/* Location: ./application/controllers/service/Tracer_Controller.php */