<?php
class Backs extends CI_Controller
{
	public function __construct()
  {
	     parent::__construct();
  		$this->load->model('back_model');
			$this->load->model('login_model');
  		$this->load->helper('url');
  		$this->load->database();
  		$this->load->helper('form');
      $this->load->helper('html');
      $this->load->library('form_validation');
      $this->load->helper('date');
	}

	public function donate()
	{
		$this->login_model->check_status();
    $this->load->view('templates/back_header');
    $this->load->view('back/donate');
    $this->load->view('templates/back_footer');
	}

	public function getdonate()
	{
	$data ['donate'] = $this->page_model->donate();
	echo json_encode($data);
	}

	public function save_donate()
	{
			$data = array(
			'donate_bd' => $_POST['donate_bd'],
			'donate1' => $_POST['donate1'],
			'donate2' => $_POST['donate2'],
			'donate_bt' => $_POST['donate_bt'],
			);
			$id = $_POST['id_donate'];
			$this->back_model->save_donate($data, $id);
			return true;
	}

	public function about()
	{
		$this->login_model->check_status();
    $this->load->view('templates/back_header');
    $this->load->view('back/about');
    $this->load->view('templates/back_footer');
	}

	public function save_about()
	{
		$config['upload_path']   = 'img/';
		$config['allowed_types'] = 'gif|jpg|png';
		$config['max_size']      = 0;
		$config['max_width']     = 0;
		$config['max_height']    = 0;
		// $config['file_name']  = date(d_m_Y_H_i_s);
		$config['encrypt_name']  = true;
		$config['remove_spaces']  = true;
			$this->load->library('upload', $config);
			if ( ! $this->upload->do_upload('showabout_pto1'))
			{
				$photo = $this->input->post('oldabout_pto1');
			}
			else
			{
				$photo = $this->upload->data('file_name');
			}
				$data = array(
					'about_tle' => $this->input->post('about_tle'),
					'about_h1' => $this->input->post('about_h1'),
					'about_h2' => $this->input->post('about_h2'),
					'about_ui' => $this->input->post('about_ui'),
					'about_li1' => $this->input->post('about_li1'),
					'about_li2' => $this->input->post('about_li2'),
					'about_li3' => $this->input->post('about_li3'),
					'about_li4' => $this->input->post('about_li4'),
					'about_pto1' => $photo,
				);
				$id = $this->input->post('id_about');
				$this->back_model->save_about($data, $id);
				return true;
	}

	public function centre()
	{
		$this->login_model->check_status();
		$data['centre'] = $this->back_model->getcentre();
    $this->load->view('templates/back_header');
    $this->load->view('back/centre', $data);
    $this->load->view('templates/back_footer');
	}

	public function edit_centre()
	{
		$id = $this->input->post('id');
		$edit_centre = $this->back_model->edit_centre($id);
		echo json_encode($edit_centre);
	}

	public function save_centre()
	{
		$config['upload_path']   = 'img/';
		$config['allowed_types'] = 'gif|jpg|png';
		$config['max_size']      = 0;
		$config['max_width']     = 0;
		$config['max_height']    = 0;
		// $config['file_name']  = date(d_m_Y_H_i_s);
		$config['encrypt_name']  = true;
		$config['remove_spaces']  = true;
			$this->load->library('upload', $config);
			if ( ! $this->upload->do_upload('newcentre_pto'))
			{
				$photo = $this->input->post('oldcentre_pto');
			}
			else
			{
				$photo = $this->upload->data('file_name');
			}
				$data = array(
					'centre_area1' => $this->input->post('centre_area1'),
					'centre_area2' => $this->input->post('centre_area2'),
					'centre_bt' => $this->input->post('centre_bt'),
					'centre_pto' => $photo,
				);
				$id = $this->input->post('id_centre');
				$this->back_model->save_centre($data, $id);
				return true;
	}

	public function news()
	{
		$this->login_model->check_status();
    $this->load->view('templates/back_header');
    $this->load->view('back/news');
    $this->load->view('templates/back_footer');
	}

	public function product()
	{
		$this->login_model->check_status();
    $this->load->view('templates/back_header');
    $this->load->view('back/product');
    $this->load->view('templates/back_footer');
	}

	public function motto()
	{
		$this->login_model->check_status();
    $this->load->view('templates/back_header');
    $this->load->view('back/motto');
    $this->load->view('templates/back_footer');
	}

	public function footer()
	{
		$this->login_model->check_status();
    $this->load->view('templates/back_header');
    $this->load->view('back/footer');
    $this->load->view('templates/back_footer');
	}

}
