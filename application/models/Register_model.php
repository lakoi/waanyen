<?php
class Register_model extends CI_Model {
			public function __construct()
  {
          parent::__construct();
          $this->load->model('register_model');
          $this->load->helper('url_helper');
          $this->load->database();
          $this->load->helper('form');
          $this->load->library('form_validation');
  }
			public function get_register($slug = FALSE)
	{
					if ($slug === FALSE)
					{
									$query = $this->db->get('member');
									return $query->result_array();
					}

					$query = $this->db->get_where('member', array('slug' => $slug));
					return $query->row_array();
	}

			public  function create_register()
	{
					$this->load->helper('url');

				 $slug = url_title($this->input->post('Email'), 'dash', TRUE);

					$data = array(
							'Email' => $this->input->post('Email'),
							'slug' => $slug,
							'Password' => md5($this->input->post('Password')),
							'Name' => $this->input->post('Name')
			);

			return $this->db->insert('member', $data);
	}

}
