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
      $data['title']='lise';
      $this->load->view('templates/header', $data);
      $this->load->view('login/view_list');
      $this->load->view('templates/footer');
  }

  public function edu()
  {

      $data ['query'] = $this->list_model->edu_model();
      $this->load->view('templates/header');
      $this->load->view('login/list_education', $data);
      $this->load->view('templates/footer');
      echo '<div align="right"><label class="btn btn-outline-danger btn-lg"><a href="'.base_url().'login/logout">Logout</a></label></div>';
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
  		$id = $this->uri->segment('2');
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

  public function int()
  {
      $data ['query'] = $this->list_model->int_model();
      $this->load->view('templates/header');
      $this->load->view('login/list_interest', $data);
      $this->load->view('templates/footer');
      echo '<div align="right"><label class="btn btn-outline-danger btn-lg"><a href="'.base_url().'login/logout">Logout</a></label></div>';
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

  public function j()
  {
        $data ['query'] = $this->list_model->j_model();
        $this->load->view('templates/header');
        $this->load->view('login/list_job', $data);
        $this->load->view('templates/footer');
        echo '<div align="right"><label class="btn btn-outline-danger btn-lg"><a href="'.base_url().'login/logout">Logout</a></label></div>';
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

}
