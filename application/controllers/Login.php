<?php
class Login extends CI_Controller
{
	public function __construct(){

					parent::__construct();
					$this->load->model('login_model');
					$this->load->helper('url_helper');
					$this->load->database();
					$this->load->helper('form');
					$this->load->library('form_validation');
					$this->load->library('session');
					$this->load->helper('date');
	}
	public function index()
	{

			$data['title'] = 'Welcome';
			$this->load->view('templates/header');
			$this->load->view('login/login_view', $data);
			$this->load->view('templates/footer');

	}

 	public function login_valid()
 	{
				 	$this->form_validation->set_rules('Email', 'Email', 'trim|required|valid_email');
					$this->form_validation->set_rules('Password', 'Password', 'trim|required|min_length[8]');
				if ($this->form_validation->run())
				{
					$email = $this->input->post('Email');
					$password = $this->input->post('Password');

					$this->load->model('login_model');
					if($this->login_model->can_login($email, $password))
					{
						$query = $this->db->query("select * from member where Email = '$email'");

							foreach ($query->result_array() as $row)
								$userdata = array(
								'UserID' => $row['UserID'],
								'Email' => $row['Email'],
								'Password' => $password,
								'Name' => $row['Name'],
								'Status' => $row['Status']
							);
							$this->session->set_userdata($userdata);
							$this->enter();
					}
					else
					{
						$this->session->set_flashdata('error', 'ชื่อผู้ใช้หรือรหัสผ่านไม่ถูกต้อง');
						$this->index();
						// redirect(base_url() . 'login/index');
					}
 				}
 				else
		 		{
			 	$this->index();
		 		}
	}

 	public function enter()
 	{
				$this->login_model->check_status();
				echo date("Y-m-d H:i:s");
				$this->load->view('templates/header');
				$this->load->view('login/list_view');
				$this->load->view('templates/footer');
 	}

	public function logout()
	{
		 // $this->session->unset_userdata('Email');
		 session_destroy();
		 redirect(base_url() . 'login');
	}

}
