<?php
class Lists extends CI_Controller
{
  public function __construct()
  {
	     parent::__construct();
  		$this->load->model('list_model');
  		$this->load->helper('url_helper');
  		$this->load->database();
  		$this->load->helper('form');
	}

  public function index()
  {
      $data['title']='lise';
      $this->load->view('templates/header', $data);
      $this->load->view('login/view_list');
      $this->load->view('templates/footer');
  }

  // public function edu()
  // {
  //     $data['title']='lise';
  //     $this->load->view('templates/header', $data);
  //     $this->load->view('login/list_education');
  //     $this->load->view('templates/footer');
  //
  // }
  public function edu()
  {
    $data ['query'] = $this->list_model->edu_model();
    $this->load->view('templates/header');
    $this->load->view('login/list_education', $data);
    $this->load->view('templates/footer');
    echo '<div align="right"><label class="btn btn-outline-danger btn-lg"><a href="'.base_url().'login/logout">Logout</a></label></div>';
  }

  public function int()
  {
    $data ['query'] = $this->list_model->int_model();
    $this->load->view('templates/header');
    $this->load->view('login/list_interest', $data);
    $this->load->view('templates/footer');
    echo '<div align="right"><label class="btn btn-outline-danger btn-lg"><a href="'.base_url().'login/logout">Logout</a></label></div>';
  }

  public function j()
  {
    $data ['query'] = $this->list_model->j_model();
    $this->load->view('templates/header');
    $this->load->view('login/list_job', $data);
    $this->load->view('templates/footer');
    echo '<div align="right"><label class="btn btn-outline-danger btn-lg"><a href="'.base_url().'login/logout">Logout</a></label></div>';
  }
}
