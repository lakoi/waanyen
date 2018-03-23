<?php
class Listadd extends CI_Controller
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
      $query = $this->db->get('education');

                  $data['result'] = $query->result();
  		$this->load->view('templates/header');

  		$this->load->view('login/list_education', $data);

  		$this->load->view('templates/footer');
  	}

  	public function add_edu(){

  	  $this->load->view('templates/header');

  		$this->load->view('login/add_education');

  		$this->load->view('templates/footer');
      $this->list_model->

  	}

  	public function save_edu(){

  	$data = array(
              'title' => $this->input->post('title')
           );

           $this->list_Model->addedu_model($data);

  		 redirect('listadd/index');
  	}

  	public function edit_customer_form(){

  		 $id = $this->uri->segment('3');

  		 $data['result'] = $this->Customer_Model->selectOne($id);

  		 $this->load->view('header');

           $this->load->view('customer/customer_edit_form',$data);

  		 $this->load->view('footer');

  	}

  	public function save_edit_customer(){

  		 $data = array(
              'first_name' => $this->input->post('first_name'),
              'last_name' => $this->input->post('last_name'),
           );

  		 $id = $this->input->post('id');

           $this->Customer_Model->update($data,$id);

  		 redirect('customer/index');

  	}

  	public function delete_customer(){

  		 $id = $this->uri->segment('3');

  		 $this->Customer_Model->delete($id);

  		 redirect('customer/index');
  	}



  // public function add_edu()
  // {
  //   $data['title'] = 'add education';
  //   $this->load->view('templates/header');
  //   $this->load->view('login/add_education', $data);
  //   $this->load->view('templates/footer');
  // }
  //
  // public function chackadd_edu()
  //   {
  //     $this->form_validation->set_rules('title', 'Title', 'required');
  //     if($this->form_validation->run())
  //     {
  //       $this->list_model->addedu_model();
  //
  //     }
  //   }
  //
  // public function saveadd_edu()
  // {
  //
  //   $data = array(
  //           'title' => $this->input->post('title'),
  //        );
  //
  //        $this->addedu_Model->insert($data);
  //
  //        $this->edu();
  //   }
}
