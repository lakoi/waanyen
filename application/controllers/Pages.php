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
		$data ['slide'] = $this->page_model->getslide();
		$data ['about'] = $this->page_model->getabout();
		$data ['centre'] = $this->page_model->getcentre();
		$data ['news'] = $this->page_model->getnews();
		$data ['product'] = $this->page_model->getproduct();
		$data ['join'] = $this->page_model->getjoin();
		$data ['footer'] = $this->page_model->getfooter();

	if($this->session->userdata('lang')==NULL){
		$lang = "thai";
		$this->session->set_userdata('lang',$lang);
	}else{
		$lang = $this->session->userdata('lang');
	}

	$this->lang->load($lang,$lang);
	$this->load->view('templates/header', $data);
	$this->load->view('home/index', $data);
	$this->load->view('templates/footer', $data);
}

	public function changeLang()
	{
		$lang = $this->input->post('id');

		$this->session->set_userdata('lang',$lang);
		return true;
	}


}
