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
                                                      // ***Domain***
  public function domain()
  {
    $this->login_model->checker();
    $data ['query'] = $this->list_model->domain_model();
      $this->login_model->check_status();
      $this->load->view('templates/back_header');
      $this->load->view('login/list_domain', $data);
      $this->load->view('templates/back_footer');
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
      $this->load->view('templates/back_header');
      $this->load->view('login/list_popup',$data);
      $this->load->view('templates/back_footer');
  }

  public function popup_re()
  {
  $data ['query'] = $this->list_model->popup_model();
    echo json_encode($data);
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
        $u_load = $this->list_model->save_popup_model($data);
        return true;
        // echo json_encode($u_load);
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
          $u_date = $this->list_model->save_edit_popup_model($data,$id);
          return true;
          // echo json_encode($u_date);
    }
    if($_POST["action"] == "delete")
    {
      $id = $this->input->post("id");
      $del = $this->list_model->delete_popup_model($id);
      return true;
      // echo json_encode($del);
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
    if($_POST["status"] != '')
    {
      $status = "0";
    }
      $data = array(
      'status' => $status
      );
      $statusedit =  $this->list_model->editstatus($data);
      if($statusedit != '')
      {
        if($_POST["status"] == "1")
        {
          $statuss = "1";
        }
        else
        {
          $statuss = "0";
        }
        $data = array(
        'status' => $statuss
        );
        $id = $_POST["id"];
        $statussedit =  $this->list_model->editstatuss($data,$id);
        echo json_encode($data);
      }
  }

}
