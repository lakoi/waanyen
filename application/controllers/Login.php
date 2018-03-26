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
					// $this->load->library('session');
	}
	public function index(){
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
						$session_data = array(
							'Email' => $email
						);
						$this->session->set_userdata($session_data);
						$this->enter();
						// redirect(base_url() . 'login/enter');
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
	 		if($this->session->userdata('Email') != '')
	 		{
				$this->load->view('templates/menu');
				$this->load->view('templates/header');
				$this->load->view('login/list_view');
				$this->load->view('templates/footer');
			}
	 		else
	 		{
				$this->index();
				// redirect(base_url() . 'login/index');
			}
 	}

	public function logout()
	{
		 $this->session->unset_userdata('Email');
		 redirect(base_url() . 'login/index');
	}

}
