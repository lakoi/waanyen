<?php
class Register extends CI_Controller
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

  public function index()
  {
        $this->load->view('login/register_view');
  }

  public function regis_valid()
  {
      $this->form_validation->set_rules('Email', 'Email', 'trim|required|valid_email');
      $this->form_validation->set_rules('Password', 'Password', 'trim|required|min_length[8]');
      $this->form_validation->set_rules('ConPassword', 'ConPassword', 'trim|required|matches[Password]');
      $this->form_validation->set_rules('Name', 'Name', 'required');
      if ($this->form_validation->run())
      {
        $data = array(
        'Email' => $this->input->post('Email'),
        'Password' => md5($this->input->post('Password')),
        'Name' => $this->input->post('Name'),
        'Status' => $this->input->post('Status')
        );
          $regis = $this->register_model->create_register($data);

          if($regis == true)
          {
            // return true;
            $this->load->view("login/success");
            // redirect(base_url()."login");
          }
          else
          {

            $this->session->set_flashdata('regis_error', 'อีเมล์นี้ถูกใช้แล้ว');
            // return false;

            $this->index();
            // $this->index();
          }
      }
      else
      {
        $this->index();
      }

  }
}
