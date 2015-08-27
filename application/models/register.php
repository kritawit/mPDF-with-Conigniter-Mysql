<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Register extends CI_Model {

	public function __construct()
	{
		parent::__construct();
		//Do your magic here
	}


	function getallprofile(){
		$sql = 'SELECT * FROM tbl_user where status = 1';

		if ($q = $this->db->query($sql)) {
			return $q->result_array();
		}
	}

}

/* End of file register.php */
/* Location: ./application/models/register.php */