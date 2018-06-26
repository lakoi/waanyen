<?php
class Register_model extends CI_Model
{
			public function __construct()
  		{
          parent::__construct();
          $this->load->model('register_model');
          $this->load->helper('url_helper');
          $this->load->database();
          $this->load->helper('form');
          $this->load->library('form_validation');
  }

			public  function create_register($data)
	{
					$query = $this->db->query(" select * from member where Email = '".$this->input->post('Email')."'");
					if ($query->num_rows()>0)
					{
						return false;
					}
					else
					{
						if($this->db->insert('member', $data))
						{
							return true;
						}


					}
	}
}
