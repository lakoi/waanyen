<?php
class Volunteer extends CI_Controller {

  public function __construct()
  {
          parent::__construct();
          $this->load->model('page_model');
          $this->load->helper('url_helper');
          $this->load->database();
          $this->load->helper('form');
          $this->load->helper('html');
          $this->load->library('form_validation');
          $this->load->library('pagination');
          $this->load->helper('date');
          if($this->session->userdata('lang')==NULL){
            $lang = "thai";
            $this->session->set_userdata('lang',$lang);
          }else{
            $lang = $this->session->userdata('lang');
          }
          $this->lang->load($lang,$lang);
  }

  public function index(){
    $config = array();
        $config["base_url"] = base_url() . "volunteer/index";
        $config["total_rows"] = $this->page_model->record_count_news();
        $config["per_page"] = 2;
        $config["uri_segment"] = 3;

        $this->pagination->initialize($config);

        $page = ($this->uri->segment(3)) ? $this->uri->segment(3) : 0;
        $data["news"] = $this->page_model->
            fetch_news($config["per_page"], $page);
        $data["links"] = $this->pagination->create_links();

        $data ['footer'] = $this->page_model->getfooter();

        $lang = $this->session->userdata('lang');
        $this->lang->load($lang,$lang);
        $this->load->view('templates/header');
        $this->load->view("home/volunteer/volunteer", $data);
        $this->load->view('templates/footer', $data);
  }

}
