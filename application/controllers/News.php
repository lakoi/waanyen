<?php
class News extends CI_Controller {

        public function __construct()
        {
                parent::__construct();
                $this->load->model('news_model');
                $this->load->helper('url_helper');
                $this->load->database();
                $this->load->helper('form');
                $this->load->library('form_validation');
        }

        public function index()
{
        $data['news'] = $this->news_model->get_news();
        $data['title'] = 'News archive';

        $this->load->view('templates/header', $data);
        $this->load->view('news/index', $data);
        $this->load->view('templates/footer');
}

        public function view($slug = NULL)
        {
        $data['news_item'] = $this->news_model->get_news($slug);

        if (empty($data['news_item']))
        {
                show_404();
        }

        $data['title'] = $data['news_item']['title'];

        $this->load->view('templates/header', $data);
        $this->load->view('news/view', $data);
        $this->load->view('templates/footer');
        }
        public function create()
    {


        $data['title'] = 'Create a news item';

        $this->form_validation->set_rules('Email', 'Email', 'trim|required|valid_email');
        $this->form_validation->set_rules('Password', 'Password', 'trim|required|min_length[8]');
        $this->form_validation->set_rules('ConPassword', 'ConPassword', 'trim|required|matches[Password]');
        $this->form_validation->set_rules('Name', 'Name', 'required');
        // $this->form_validation->set_error_delimiters('<div class="alert alert-danger" role="alert">', '</div>');
        if ($this->form_validation->run() === FALSE)
        {
              $this->load->view('templates/header', $data);
              $this->load->view('news/create');
              $this->load->view('templates/footer');

          }
          else
          {
              $this->news_model->create_register();
              $this->load->view('news/success');
          }
      }
}
