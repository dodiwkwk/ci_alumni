<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Model_Home extends CI_Model {

   public function search_loker($keyword = null)    
    {
        if ($keyword) {
	         $this->db->like('judul_lowongan', $keyword);
	      }
	      return $this->db->get('lowongan')->result_array();
    }

    public function search_event($keyword = null)    
    {
        if ($keyword) {
	         $this->db->like('judul_event', $keyword);
	      }
	      return $this->db->get('event')->result_array();
    }

    public function read_banner()
    {
        return $this->db->get('banner')->result_array();
    }

}

/* End of file Model_Home.php */
/* Location: ./application/models/Model_Home.php */