<?php
class Centre extends CI_Controller
{
  public function __construct()
  {
       parent::__construct();
      // $this->load->model('about_model');
      $this->load->model('page_model');
      $this->load->model('centre_model');
      $this->load->helper('url');
      $this->load->database();
      $this->load->helper('form');
      $this->load->helper('html');
      $this->load->library('form_validation');
      $this->load->helper('date');
  }

  public function centre()
  {
    $data ['footer'] = $this->page_model->getfooter();
    $data ['centre'] = $this->centre_model->getcentre();

    $this->load->view('templates/header');
    // $this->load->view('home/centre/head_centre');
    $this->load->view('home/centre/centre', $data);
    $this->load->view('templates/footer', $data);
  }

  public function centre_about()
  {
    $id = $this->input->post('id_centre');
    $data ['centre'] = $this->centre_model->centre_about($id);
    $data ['footer'] = $this->page_model->getfooter();
    $data ['about'] = $this->page_model->getabout();
    $data ['news'] = $this->page_model->getnews();
    $data ['product'] = $this->page_model->getproduct();

    $this->load->view('templates/header');
    $this->load->view('home/centre/head_centre', $data);
    $this->load->view('home/centre/centre_about', $data);
    $this->load->view('templates/footer', $data);
  }



}
