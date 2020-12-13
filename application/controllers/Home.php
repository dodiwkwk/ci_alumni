<?php

class Home extends CI_Controller {

    public function __construct()
    {
        parent::__construct();
        $this->load->model('Model_Home', 'home');
    }

    public function index()
    {
        $data = [
            'judul' => 'Halaman Home',
            'testimoni' => $this->db->select('*')->from('testimoni')->join('user', 'user.id_user=testimoni.id_user')->where('is_view', 'Ya')->limit(4)->order_by('testimoni', 'ASC')->get()->result_array(),
            'banner' => $this->home->read_banner()
        ];
        $this->load->view('templates/home/header_home', $data);
        $this->load->view('home/index', $data);
        $this->load->view('templates/home/footer_home');
    }

    public function about()
    {
        $data['judul'] = 'Halaman About';
        $this->load->view('templates/home/header_home', $data);
        $this->load->view('home/about');
        $this->load->view('templates/home/footer_home');
    }

    public function contact()
    {
        $data['judul'] = 'Halaman Contact';
        $this->load->view('templates/home/header_home', $data);
        $this->load->view('home/contact');
        $this->load->view('templates/home/footer_home');
    }

    public function informasi()
    {
        $data = [
           'judul' => 'Informasi',
           'lowongan' => $this->db->get('lowongan')->result_array()
        ];
        $this->load->view('templates/home/header_home', $data);
        $this->load->view('home/informasi', $data);
        $this->load->view('templates/home/footer_home');
    }

    public function event()
    {
        $data = [
           'judul' => 'Event',
           'event' => $this->db->get('event')->result_array()
        ];
        $this->load->view('templates/home/header_home', $data);
        $this->load->view('home/event', $data);
        $this->load->view('templates/home/footer_home');
    }

    public function search_loker()    
    {
        if ($this->input->post('submit')) {
             $data['keyword'] = $this->input->post('keyword');
          } else {
             $data['keyword'] = null;
          }
          $data = [
            'judul' => 'Result search lowongan',
            'lowongan_result' => $this->home->search_loker($data['keyword'])
          ];
          $this->load->view('templates/home/header_home', $data);
          $this->load->view('home/search_loker', $data);
          $this->load->view('templates/home/footer_home');
    }

    public function search_event()    
    {
        if ($this->input->post('submit')) {
             $data['keyword'] = $this->input->post('keyword');
          } else {
             $data['keyword'] = null;
          }
          $data = [
            'judul' => 'Result search event',
            'event_result' => $this->home->search_event($data['keyword'])
          ];
          $this->load->view('templates/home/header_home', $data);
          $this->load->view('home/search_event', $data);
          $this->load->view('templates/home/footer_home');
    }


}