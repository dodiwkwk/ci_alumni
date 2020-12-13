<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Jurnal_Model extends CI_Model {

	public function read()
	{
	   return $this->db->get('jurnal')->result_array();
	}
	

}

/* End of file Jurnal_Model.php */
/* Location: ./application/models/Jurnal_Model.php */