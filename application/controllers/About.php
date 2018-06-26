<?php
class About extends CI_Controller
{
	public function __construct()
  {
	     parent::__construct();
  		// $this->load->model('about_model');
      $this->load->model('page_model');
  		$this->load->helper('url');
  		$this->load->database();
  		$this->load->helper('form');
      $this->load->helper('html');
      $this->load->library('form_validation');
      $this->load->helper('date');
			$lang = $this->session->userdata('lang');
			$this->lang->load($lang,$lang);
	}

  public function about()
  {
    // $data ['about'] = $this->about_model->about();
    $data ['footer'] = $this->page_model->getfooter();
    $this->load->view('templates/header');
    $this->load->view('home/about/head_about');
    $this->load->view('home/about/about', $data);
    $this->load->view('templates/footer', $data);
  }

  public function board()
  {
    // $data ['about'] = $this->about_model->about();
    $data ['footer'] = $this->page_model->getfooter();

    $this->load->view('templates/header');
    $this->load->view('home/about/head_about');
    $this->load->view('home/about/board', $data);
    $this->load->view('templates/footer', $data);
  }

  public function chart()
  {
    // $data ['about'] = $this->about_model->about();
    $data ['footer'] = $this->page_model->getfooter();

    $this->load->view('templates/header');
    $this->load->view('home/about/head_about');
    $this->load->view('home/about/chart', $data);
    $this->load->view('templates/footer', $data);
  }

  public function fame()
  {
    // $data ['about'] = $this->about_model->about();
    $data ['footer'] = $this->page_model->getfooter();

    $this->load->view('templates/header');
    $this->load->view('home/about/head_about');
    $this->load->view('home/about/fame', $data);
    $this->load->view('templates/footer', $data);
  }

	public function office()
	{
		// $data ['about'] = $this->about_model->about();
		$data ['footer'] = $this->page_model->getfooter();

		$this->load->view('templates/header');
		$this->load->view('home/about/head_about');
		$this->load->view('home/about/office', $data);
		$this->load->view('templates/footer', $data);
	}

	public function contact()
	{
		// $data ['about'] = $this->about_model->about();
		$data ['footer'] = $this->page_model->getfooter();

		$this->load->view('templates/header');
		$this->load->view('home/about/head_about');
		$this->load->view('home/about/contact', $data);
		$this->load->view('templates/footer', $data);
	}

}
