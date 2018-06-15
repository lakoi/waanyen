<?php
class News extends CI_Controller {

        public function __construct()
        {
                parent::__construct();
                $this->load->model('page_model');
                $this->load->helper('url_helper');
                $this->load->database();
                $this->load->helper('form');
                $this->load->helper('html');
                $this->load->library('form_validation');
                $this->load->helper('date');
        }

        public function news()
  {
          $data ['news'] = $this->page_model->getallnews();

          $this->load->view('templates/header');
          $this->load->view('home/news/news', $data);
          $this->load->view('templates/footer');
  }
}
