<?php
class Profiles extends CI_Controller
{

  public function __construct()
  {
	     parent::__construct();
  		$this->load->model('profile_model');
      $this->load->model('login_model');
  		$this->load->helper('url_helper');
  		$this->load->database();
  		$this->load->helper('form');
      $this->load->library('form_validation');
	}

  	public function index()
  	{
      $this->login_model->checker();
      $data ['query'] = $this->profile_model->pro_model();
        $this->login_model->check_status();
      		$this->load->view('templates/back_header');
      		$this->load->view('login/profile_view', $data);
      		$this->load->view('templates/back_footer');
    }

    public function change_name()
    {
        $this->login_model->checker();
        $UserID = $this->uri->segment('3');
    		$data['query'] = $this->profile_model->change_name_model($UserID);
          $this->load->view('templates/back_header');
          $this->load->view('login/change_name_view', $data);
          $this->load->view('templates/back_footer');
    }

    public function save_change_name()
    {
      $data = array(
      'Name' => $this->input->post('Name')
    );
      $name = $this->input->post('Name');
      $this->session->set_userdata('Name', $name);
		  $UserID = $this->input->post('UserID');
      $this->profile_model->save_change_name_model($data,$UserID);
		  $this->index();
    }

    public function change_pass()
    {
        $this->login_model->checker();
        $UserID = $this->uri->segment('3');
    		$data['query'] = $this->profile_model->change_pass_model($UserID);
          $this->load->view('templates/back_header');
          $this->load->view('login/change_password_view', $data);
          $this->load->view('templates/back_footer');
    }

    public function save_change_pass()
    {
      $password = $this->input->post('Password');
      $data = array(
      'Password' => md5($password)
      );
      $this->session->set_userdata('Password', $password);
		  $UserID = $this->input->post('UserID');
      $this->profile_model->save_change_pass_model($data, $UserID);
		  $this->index();
    }

}
