<?php
class Profiles extends CI_Controller
{

  public function __construct()
  {
	     parent::__construct();
  		$this->load->model('profile_model');
  		$this->load->helper('url_helper');
  		$this->load->database();
  		$this->load->helper('form');
      $this->load->library('form_validation');
	}

  	public function index()
  	{
      $data ['query'] = 'hi';
      $this->load->view('templates/menu');
  		$this->load->view('templates/header');
  		$this->load->view('login/profile_view', $data);
  		$this->load->view('templates/footer');
  	}

    public function change_name()
    {
      $id = $this->uri->segment('3');
  		$data['query'] = $this->profile_model->change_name_model($id);
      $this->load->view('templates/header');
      $this->load->view('login/change_name_view', $data);
      $this->load->view('templates/footer');
      // if()
    }

    public function save_change_name()
    {
      $data = array(
      'Name' => $this->input->post('Name')
      );
		  $id = $this->input->post('userID');
      $this->list_model->save_edit_edu_model($data,$id);
		  $this->edu();
    }

    public function change_pass()
    {
      $id = $this->uri->segment('3');
  		$data['query'] = $this->profile_model->change_pass_model($id);
      $this->load->view('templates/header');
      $this->load->view('login/change_password_view', $data);
      $this->load->view('templates/footer');
    }

    public function save_change_pass()
    {
        $data = array(
        'Password' => $this->input->post('Password')
        );
        $this->profile_model->save_change_pass_model($data);
        if($this->profile_model->save_change_pass_model($data)==true)
        {

        $this->index();
        }
        else {
          $this->change_pass();
        }
    }

}
