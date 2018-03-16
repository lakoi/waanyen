<?php
class Login extends CI_Controller
{

	public function index($page = 'login_view')
{
					$data['title'] = ucfirst($page);
	 				$this->load->view('templates/header', $data);
	        $this->load->view('login/login_view');
					$this->load->view('templates/footer', $data);
}

}
