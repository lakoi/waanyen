<?php
class Pages extends CI_Controller
{
	public function __construct()
  {
	     parent::__construct();
  		$this->load->model('page_model');
  		$this->load->helper('url');
  		$this->load->database();
  		$this->load->helper('form');
      $this->load->helper('html');
      $this->load->library('form_validation');
      $this->load->helper('date');
	}

	public function view()
	{
		$status = "1";
		$data ['popup'] = $this->page_model->on_popup_model($status);
		$data ['centre'] = $this->page_model->getcentre();
		$data ['news'] = $this->page_model->getnews();
		$data ['product'] = $this->page_model->getproduct();
		$data ['motto'] = $this->page_model->getmotto();
		$data ['footer'] = $this->page_model->getfooter();

    $this->load->view('templates/header');
    $this->load->view('home/index', $data);
    $this->load->view('templates/footer', $data);
	}

	public function getdonate()
	{
	$data ['donate'] = $this->page_model->getdonate();
	echo json_encode($data);
	}

	public function getabout()
	{
	$data ['about'] = $this->page_model->getabout();
	echo json_encode($data);
	}

	// public function getcentre()
	// {
	// $data ['centre'] = $this->page_model->getcentre();
	// echo json_encode($data);
	// }

	// public function getnews()
	// {
	// $data ['news'] = $this->page_model->getnews();
	// echo json_encode($data);
	// }

}
