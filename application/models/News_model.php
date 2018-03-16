<?php
class News_model extends CI_Model {


        public function get_news($slug = FALSE)
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
                $mock_data = array(
                  $this->db->find('member')

                );

                $exist_email = $mock_data->find($this->input->post('Email'))
                if ($exist_email ="1") {
                  return false;
                }
                else {
               // $slug = url_title($this->input->post('Email'), 'dash', TRUE);

                  $data = array(
                    'Email' => $this->input->post('Email'),
                    // 'slug' => $slug,
                    'Password' => md5($this->input->post('Password')),
                    'Name' => $this->input->post('Name')

                  );
                  return $this->db->insert('member', $data);
                }

        }

}
