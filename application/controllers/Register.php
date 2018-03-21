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

        $data['title'] = 'User';
        $this->load->view('templates/header');
        $this->load->view('login/register_view', $data);
        $this->load->view('templates/footer');
}

  public function create()
{


        $data['title'] = 'validate';

        $this->form_validation->set_rules('Email', 'Email', 'trim|required|valid_email');
        $this->form_validation->set_rules('Password', 'Password', 'trim|required|min_length[8]');
        $this->form_validation->set_rules('ConPassword', 'ConPassword', 'trim|required|matches[Password]');
        $this->form_validation->set_rules('Name', 'Name', 'required');
        if ($this->form_validation->run())
        {
            $this->register_model->create_register();


        }
        else
        {
            $this->index();

        }
}
}
