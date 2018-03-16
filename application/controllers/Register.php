<?php
class Register extends CI_Controller{

/*        public function __construct()
        {
        		parent::__construct();
        		$this->load->helper(array('form', 'url'));
        		$this->load->library('form_validation');
            $this->load->model('register_model');
            $this->load->database();
  }

  public function index()
  {
    echo "REQUEST<br/>";
    print_r($_POST);
    echo "<br/>";
    echo "REQUEST<br/>";
    //print_r($request);
    echo "<br/>";
      $this->load->view('templates/header');
      $this->load->view('login/register_view');
      $this->load->view('templates/footer');
  }


  public function validate()
  {
    $this->form_validation->set_rules('Username', 'Username', 'trim|required|min_length[5]|max_length[12]');
    $this->form_validation->set_rules('Password', 'Password', 'trim|required|min_length[8]');
    $this->form_validation->set_rules('ConPassword', 'ConPassword', 'trim|required|matches[Password]');
    $this->form_validation->set_rules('Name', 'Name', 'required');
    if ($this->form_validation->run() == FALSE) {
      $this->load->view('templates/header');
      $this->load->view('login/register_view');
      $this->load->view('templates/footer');
    }
    else {
			$Username = $this->input->post('Username');
			$Password = $this->input->post('Password');
      $ConPassword = $this->input->post('Conpassword');
			$Name = $this->input->post('Name');

      $data = array(
    		'Username'     => $Username,
    		'Password'     => $Password,
        'Conpassword'     => $Conpassword,
    		'Name'     => $Name

    	);
        $this->load->view('login/success');
    }
  }*/
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
  $data['register'] = $this->register_model->get_register();
  $data['title'] = 'News archive';

  $this->load->view('templates/header', $data);
  $this->load->view('login/register_view', $data);
  $this->load->view('templates/footer');
}

  public function view($slug = NULL)
  {
  $data['news_item'] = $this->register_model->get_register($slug);

  if (empty($data['news_item']))
  {
          show_404();
  }

  $data['title'] = $data['news_item']['title'];

  $this->load->view('templates/header', $data);
  $this->load->view('login/index', $data);
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
        $this->load->view('login/register_view');
        $this->load->view('templates/footer');

    }
    else
    {
        $this->register_model->create_register();
        $this->load->view('login/success');
    }
}
}
