<?php
class News extends CI_Controller
{

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
          $lang = $this->session->userdata('lang');
          $this->lang->load($lang,$lang);
  }

        public function news()
  {
          $data ['footer'] = $this->page_model->getfooter();
          $data ['news'] = $this->page_model->getallnews();
          $config = array();
              $config["base_url"] = base_url() . "news/news";
              $config["total_rows"] = $this->page_model->record_count_news();
              $config["per_page"] = 4;
              $config["uri_segment"] = 3;

              $this->pagination->initialize($config);

              $page = ($this->uri->segment(3)) ? $this->uri->segment(3) : 0;
              $data["news_page"] = $this->page_model->fetch_news($config["per_page"], $page);
              $data["news"] = $this->page_model->getnews_5item();
              $data["links"] = $this->pagination->create_links();

              $lang = $this->session->userdata('lang');
              $this->lang->load($lang,$lang);

          $this->load->view('templates/header');
          $this->load->view('home/news/news', $data);
          $this->load->view('templates/footer', $data);
  }
}
