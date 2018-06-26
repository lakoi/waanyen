<?php
class Admins extends CI_Controller
{
  public function __construct()
  {
	     parent::__construct();
  		$this->load->model('admins_model');
      $this->load->model('login_model');
  		$this->load->helper('url_helper');
  		$this->load->database();
  		$this->load->helper('form');
      $this->load->library('form_validation');
	}

  public function admin()
  {
      $this->login_model->checker();
      $data ['query'] = $this->admins_model->admin_model();
      $this->load->view('templates/admin');
      $this->load->view('templates/back_header');
      $this->load->view('login/list_admin', $data);
      $this->load->view('templates/back_footer');
  }

  // public function edit_name_ad()
  // {
  //     $this->login_model->checker();
  //     $UserID = $this->uri->segment('3');
  //     $data['query'] = $this->admins_model->edit_name_ad_model($UserID);
  //     $this->load->view('templates/back_header');
  //     $this->load->view('login/edit_name_admin', $data);
  //     $this->load->view('templates/back_footer');
  // }
  //
  // public function save_edit_name_ad()
  // {
  //     $data = array(
  //     'Name' => $this->input->post('Name')
  //     );
  //     $UserID = $this->input->post('UserID');
  //     $this->admins_model->save_edit_name_ad_model($data,$UserID);
  //     $this->admin();
  // }

  public function edit_status_ad()
  {
      $this->login_model->checker();
      $UserID = $this->uri->segment('3');
      $data['query'] = $this->admins_model->edit_status_ad_model($UserID);
      $this->load->view('templates/back_header');
      $this->load->view('login/edit_status_admin', $data);
      $this->load->view('templates/back_footer');
  }

  public function save_edit_status_ad()
  {
      $data = array(
      'Status' => $this->input->post('Status')
      );
      $UserID = $this->input->post('UserID');
      $this->admins_model->save_edit_status_ad_model($data,$UserID);
      $this->admin();
  }

  public function delete_user()
  {
      $UserID = $this->uri->segment('3');
      $this->admins_model->delete_user_model($UserID);
      $this->admin();
  }

}
