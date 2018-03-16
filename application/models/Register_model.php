<?php
class Register_model extends CI_Model {
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
