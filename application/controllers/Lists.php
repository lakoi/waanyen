<?php
class Lists extends CI_Controller
{
  public function __construct()
  {
	     parent::__construct();
  		$this->load->model('list_model');
  		$this->load->helper('url_helper');
  		$this->load->database();
  		$this->load->helper('form');
      $this->load->library('form_validation');
	}

  public function index()
  {
      $data['title']='list';
      $this->load->view('templates/header', $data);
      $this->load->view('login/list_view');
      $this->load->view('templates/footer');
  }
                                                      // ***Admin***
  public function admin()
  {
      $data ['query'] = $this->list_model->admin_model();
      $this->load->view('templates/admin');
      $this->load->view('templates/header');
      $this->load->view('login/list_admin', $data);
      $this->load->view('templates/footer');
    }

    public function edit_name_ad()
    {
    		$UserID = $this->uri->segment('3');
    		$data['query'] = $this->list_model->edit_name_ad_model($UserID);
    		$this->load->view('templates/header');
        $this->load->view('login/edit_name_admin', $data);
    		$this->load->view('templates/footer');
  	}

  	public function save_edit_name_ad()
    {
  	    $data = array(
        'Name' => $this->input->post('Name')
        );
  		  $UserID = $this->input->post('UserID');
        $this->list_model->save_edit_name_ad_model($data,$UserID);
  		  $this->admin();
  	}

    public function edit_status_ad()
    {
    		$UserID = $this->uri->segment('3');
    		$data['query'] = $this->list_model->edit_status_ad_model($UserID);
    		$this->load->view('templates/header');
        $this->load->view('login/edit_status_admin', $data);
    		$this->load->view('templates/footer');
  	}

  	public function save_edit_status_ad()
    {
  	    $data = array(
        'Status' => $this->input->post('Status')
        );
  		  $UserID = $this->input->post('UserID');
        $this->list_model->save_edit_status_ad_model($data,$UserID);
  		  $this->admin();
  	}

    public function delete_user()
    {
        $UserID = $this->uri->segment('3');
        $this->list_model->delete_user_model($UserID);
        $this->admin();
    }
                                                      // ***Education***
  public function edu()
  {
    $data ['query'] = $this->list_model->edu_model();
    if($this->session->userdata('Status') == "ADMIN")
    {
      $this->load->view('templates/admin');
      $this->load->view('templates/header');
      $this->load->view('login/list_education', $data);
      $this->load->view('templates/footer');
    }
    else
    {
      $this->load->view('templates/menu');
      $this->load->view('templates/header');
      $this->load->view('login/list_education', $data);
      $this->load->view('templates/footer');
    }
  }

  public function add_edu()
  {
      $query = $this->db->get("education");
      $data['result'] = $query->result();

      $this->load->view('templates/header');
      $this->load->view('login/add_education', $data);
      $this->load->view('templates/footer');
  }

  public function save_edu()
  {
      $data = array(
      'title' => $this->input->post('title')
      );
      $this->list_model->addedu_model($data);
      $this->edu();
  }

  public function edit_edu()
  {
  		$id = $this->uri->segment('3');
  		$data['query'] = $this->list_model->edit_edu_model($id);
  		$this->load->view('templates/header');
      $this->load->view('login/edit_education', $data);
  		$this->load->view('templates/footer');
	}

	public function save_edit_edu()
  {
	    $data = array(
      'title' => $this->input->post('title')
      );
		  $id = $this->input->post('id');
      $this->list_model->save_edit_edu_model($data,$id);
		  $this->edu();
	}

  public function delete_edu()
  {
      $id = $this->uri->segment('3');
      $this->list_model->delete_edu_model($id);
      $this->edu();
  }
                                                      // ***interest***
  public function int()
  {
    $data ['query'] = $this->list_model->int_model();
    if($this->session->userdata('Status') == "ADMIN")
    {
      $this->load->view('templates/admin');
      $this->load->view('templates/header');
      $this->load->view('login/list_interest', $data);
      $this->load->view('templates/footer');
    }
    else
    {
      $this->load->view('templates/menu');
      $this->load->view('templates/header');
      $this->load->view('login/list_interest', $data);
      $this->load->view('templates/footer');
    }
  }

  public function add_int()
  {
      $query = $this->db->get("interest");
      $data['result'] = $query->result();

      $this->load->view('templates/header');
      $this->load->view('login/add_interest', $data);
      $this->load->view('templates/footer');
  }

  public function save_int()
  {
      	$data = array(
        'title' => $this->input->post('title')
        );
        $this->list_model->addint_model($data);
      	$this->int();
  }

  public function edit_int()
  {
  		$id = $this->uri->segment('3');
  		$data['query'] = $this->list_model->edit_int_model($id);
  		$this->load->view('templates/header');
      $this->load->view('login/edit_interest', $data);
  		$this->load->view('templates/footer');
	}

	public function save_edit_int()
  {
	    $data = array(
      'title' => $this->input->post('title')
      );
		  $id = $this->input->post('id');
      $this->list_model->save_edit_int_model($data,$id);
		  $this->int();
  }

  public function delete_int()
  {
      $id = $this->uri->segment('3');
      $this->list_model->delete_int_model($id);
      $this->int();
  }
                                                      // ***job***
  public function j()
  {
      $data ['query'] = $this->list_model->j_model();
      if($this->session->userdata('Status') == "ADMIN")
      {
        $this->load->view('templates/admin');
        $this->load->view('templates/header');
        $this->load->view('login/list_job', $data);
        $this->load->view('templates/footer');
      }
      else
      {
        $this->load->view('templates/menu');
        $this->load->view('templates/header');
        $this->load->view('login/list_job', $data);
        $this->load->view('templates/footer');
      }
  }

  public function add_j()
  {
      $query = $this->db->get("job");
      $data['result'] = $query->result();

      $this->load->view('templates/header');
      $this->load->view('login/add_job', $data);
      $this->load->view('templates/footer');
  }

  public function save_j()
  {
      	$data = array(
        'title' => $this->input->post('title')
        );
        $this->list_model->addj_model($data);
      	$this->j();
  }

  public function edit_j()
  {
  		$id = $this->uri->segment('3');
  		$data['query'] = $this->list_model->edit_j_model($id);
  		$this->load->view('templates/header');
      $this->load->view('login/edit_job', $data);
  		$this->load->view('templates/footer');
	}

	public function save_edit_j()
  {
	    $data = array(
      'title' => $this->input->post('title')
      );
		  $id = $this->input->post('id');
      $this->list_model->save_edit_j_model($data,$id);
		  $this->j();
  }

  public function delete_j()
  {
      $id = $this->uri->segment('3');
      $this->list_model->delete_j_model($id);
      $this->j();
  }

}
