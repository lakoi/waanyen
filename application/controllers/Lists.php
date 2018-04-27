<?php
class Lists extends CI_Controller
{
  public function __construct()
  {
	     parent::__construct();
      $this->load->model('popup_model', 'm');
      $this->load->model('popup_model');
  		$this->load->model('list_model');
      $this->load->model('login_model');
  		$this->load->helper('url');
  		$this->load->database();
  		$this->load->helper('form');
      $this->load->helper('html');
      $this->load->library('form_validation');
      $this->load->helper('date');
	}
                                                      // ***Education***
  public function edu()
  {
      $this->login_model->checker();
      $data ['query'] = $this->list_model->edu_model();
        $this->login_model->check_status();
        $this->load->view('templates/header');
        $this->load->view('login/list_education', $data);
        $this->load->view('templates/footer');
  }
                                                      // ***add_Education***
  public function add_edu()
  {
      $this->login_model->checker();
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
                                                      // ***edit_Education***
  public function edit_edu()
  {
      $this->login_model->checker();
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
		  redirect(base_url(). 'lists/edu');
	}
                                                      // ***delete_Education***
  public function delete_edu()
  {
      $id = $this->uri->segment('3');
      $this->list_model->delete_edu_model($id);
      $this->edu();
  }
                                                      // ***interest***
  public function int()
  {
      $this->login_model->checker();
      $data ['query'] = $this->list_model->int_model();
        $this->login_model->check_status();
        $this->load->view('templates/header');
        $this->load->view('login/list_interest', $data);
        $this->load->view('templates/footer');
  }
                                                      // ***add_interest***
  public function add_int()
  {
      $this->login_model->checker();
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
                                                      // ***edit_interest***
  public function edit_int()
  {
      $this->login_model->checker();
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
                                                      // ***delete_interest***
  public function delete_int()
  {
      $id = $this->uri->segment('3');
      $this->list_model->delete_int_model($id);
      $this->int();
  }
                                                      // ***job***
  public function j()
  {
      $this->login_model->checker();
      $data ['query'] = $this->list_model->j_model();
        $this->login_model->check_status();
        $this->load->view('templates/header');
        $this->load->view('login/list_job', $data);
        $this->load->view('templates/footer');
  }
                                                      // ***add_job***
  public function add_j()
  {
      $this->login_model->checker();
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
                                                      // ***edit_job***
  public function edit_j()
  {
      $this->login_model->checker();
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
                                                      // ***delete_job***
  public function delete_j()
  {
    $id = $this->uri->segment('3');
    $this->list_model->delete_j_model($id);
    $this->j();
  }
                                                      // ***Domain***
  public function domain()
  {
    $this->login_model->checker();
    $data ['query'] = $this->list_model->domain_model();
      $this->login_model->check_status();
      $this->load->view('templates/header');
      $this->load->view('login/list_domain', $data);
      $this->load->view('templates/footer');
  }

  public function add_do()
  {
    $this->login_model->checker();
    $query = $this->db->get("domain");
    $data['result'] = $query->result();
      $this->load->view('templates/header');
      $this->load->view('login/add_domain', $data);
      $this->load->view('templates/footer');
  }

  public function save_do()
  {
  	$data = array(
      'domain' => $this->input->post('domain'),
      'username' => $this->input->post('username'),
      'email' => $this->input->post('email'),
      'package' => $this->input->post('package'),
      'date_reg' => time()
    );
    $this->list_model->add_do_model($data);
  	redirect(base_url(). 'login/domain');
  }

  public function search_do()
  {
    $this->login_model->checker();
    $email = $this->input->get('email');
    $username = $this->input->get('username');
    $package = $this->input->get('package');
    $data ['query'] = $this->list_model->search_do_model($email, $package, $username);
    $this->login_model->check_status();
      $this->load->view('templates/header');
      $this->load->view('login/search_domain', $data);
      $this->load->view('templates/footer');
  }

  public function popup()
  {
    $this->login_model->checker();
    $data ['query'] = $this->list_model->popup_model();
      $this->login_model->check_status();
      $this->load->view('templates/header');
      $this->load->view('login/list_popup',$data);
      $this->load->view('templates/footer');
  }

  public function showAllEmployee()
  {
    $datapopup = $result = $this->m->showAllEmployee('popup')->result();
    echo json_encode($datapopup);
  }

  public function uploaddata()
  {
    if($_POST["action"] == "upload")
    {
    $config['upload_path']   = 'img/';
    $config['allowed_types'] = 'gif|jpg|png';
    $config['max_size']      = 0;
    $config['max_width']     = 0;
    $config['max_height']    = 0;
    $config['file_name']  = date(d_m_Y_H_i_s);
      $this->load->library('upload', $config);
      if ( ! $this->upload->do_upload('photo'))
      {
        return false;
      }
      else
      {
        $data = array(
          'title' => $this->input->post('title'),
          'photo' => $this->upload->data('file_name'),
        );
        $this->list_model->save_popup_model($data);
        return true;
      }
    }
    if($_POST["action"] == "update")
    {
      $config['upload_path']   = 'img/';
      $config['allowed_types'] = 'gif|jpg|png';
      $config['max_size']      = 0;
      $config['max_width']     = 0;
      $config['max_height']    = 0;
      $config['file_name']  = date(d_m_Y_H_i_s);
        $this->load->library('upload', $config);
        if ( ! $this->upload->do_upload('photo'))
        {
          return false;
        }
        else
        {
          $photo = $this->upload->data('file_name');
        }
          $data = array(
            'title' => $this->input->post('title'),
            'photo' => $photo,
          );
          $id = $this->input->post('id');
          $this->list_model->save_edit_popup_model($data,$id);
          return true;
    }
    if($_POST["action"] == "delete")
    {
      $id = $this->input->post("id");
      $this->list_model->delete_popup_model($id);
      return true;
    }

    }

  public function updatedata()
  {
    $id = $this->input->post('id');
    $where = array('id' => $id);
    $dataupdate = $this->m->updatedata('popup',$where)->result();
    echo json_encode($dataupdate);
  }

  public function editstatus()
  {
    if($_POST["status"] == 1)
    {
      $status = "1";
    }
    else
    {
      $status = "0";
    }
      $data = array(
      'status' => $status
      );
      $id = $_POST["id"];
      $statusedit =  $this->list_model->editstatus($data,$id);
      echo json_encode($statusedit);
      // return true;
  }

}
