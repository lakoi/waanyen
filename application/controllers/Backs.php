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
		$data ['donate'] = $this->back_model->getdonate();
    $this->load->view('templates/back_header');
    $this->load->view('back/donate', $data);
    $this->load->view('templates/back_footer');
	}

	public function save_donate()
	{
			$data = array(
			'donate_title' => $_POST['donate_title'],
			'donate_text' => $_POST['donate_text'],
			'donate_bt' => $_POST['donate_bt'],
			'donate_time' => date(Y_m_d_H_i_s),
			);
			$id = $_POST['id_donate'];
			$this->back_model->save_donate($data, $id);
			echo json_encode($data);
			return true;
	}

	public function about()
	{
		$this->login_model->check_status();
		$data ['about'] = $this->back_model->getabout();
    $this->load->view('templates/back_header');
    $this->load->view('back/about', $data);
    $this->load->view('templates/back_footer');
	}

	public function save_about()
	{
		$config['upload_path']   = 'img/';
		$config['allowed_types'] = 'gif|jpg|png';
		$config['encrypt_name']  = true;
		$config['remove_spaces']  = true;
			$this->load->library('upload', $config);
			if ( ! $this->upload->do_upload('showabout_pto'))
			{
				$photo = $this->input->post('oldabout_pto');
			}
			else
			{
				$photo = $this->upload->data('file_name');
			}
				$data = array(
					'about_head' => $this->input->post('about_head'),
					'about_title' => $this->input->post('about_title'),
					'about_content' => $this->input->post('about_content'),
					'about_time' => date(Y_m_d_H_i_s),
					'about_pto' => $photo,
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
					'centre_title' => $this->input->post('centre_title'),
					'centre_content' => $this->input->post('centre_content'),
					'centre_bt' => $this->input->post('centre_bt'),
					'centre_time' => date(Y_m_d_H_i_s),
					'centre_pto' => $photo,
				);
				$id = $this->input->post('id_centre');
				$this->back_model->save_centre($data, $id);
				return true;
	}

	public function news()
	{
		$this->login_model->check_status();
		$data['news'] = $this->back_model->getnews();
    $this->load->view('templates/back_header');
    $this->load->view('back/news', $data);
    $this->load->view('templates/back_footer');
	}

	public function edit_news()
	{
		$id = $this->input->post('id');
		$edit_news = $this->back_model->edit_news($id);
		echo json_encode($edit_news);
	}

	public function save_news()
  {
    if($_POST["action"] == "upload")
    {
    $config['upload_path']   = 'img/';
    $config['allowed_types'] = 'gif|jpg|png';
    $config['max_size']      = 0;
    $config['max_width']     = 0;
    $config['max_height']    = 0;
		$config['encrypt_name']  = true;
      $this->load->library('upload', $config);
      if ( ! $this->upload->do_upload('newnews_pto'))
      {
        $photo = $this->input->post('oldnews_pto');
      }
      else
      {
				$photo = $this->upload->data('file_name');
      }
			$data = array(
				'news_title' => $this->input->post('news_title'),
				'news_content' => $this->input->post('news_content'),
				'news_bt' => $this->input->post('news_bt'),
				'news_post' => $this->session->userdata('Name'),
				'news_pto' => $photo,
				'news_time' => date(Y_m_d_H_i_s),
			);
			$this->back_model->save_news($data);
			return true;
    }
    if($_POST["action"] == "update")
    {
      $config['upload_path']   = 'img/';
      $config['allowed_types'] = 'gif|jpg|png';
      $config['max_size']      = 0;
      $config['max_width']     = 0;
      $config['max_height']    = 0;
			$config['encrypt_name']  = true;
        $this->load->library('upload', $config);
        if ( ! $this->upload->do_upload('newnews_pto'))
        {
          $photo = $this->input->post('oldnews_pto');
        }
        else
        {
          $photo = $this->upload->data('file_name');
        }
				$data = array(
					'news_title' => $this->input->post('news_title'),
					'news_content' => $this->input->post('news_content'),
					'news_bt' => $this->input->post('news_bt'),
					'news_post' => $this->session->userdata('Name'),
					'news_pto' => $photo,
					'news_time' => date(Y_m_d_H_i_s),
				);
          $id = $this->input->post('id_news');
          $this->back_model->save_edit_news($data,$id);
          return true;
    }
    if($_POST["action"] == "delete")
    {
      $id = $this->input->post("id");
      $this->back_model->delete_news($id);
      return true;
    }
  }

	public function product()
	{
		$this->login_model->check_status();
		$data['product'] = $this->back_model->getproduct();
    $this->load->view('templates/back_header');
    $this->load->view('back/product', $data);
    $this->load->view('templates/back_footer');
	}

	public function edit_product()
	{
		$id = $this->input->post('id');
		$edit_product = $this->back_model->edit_product($id);
		echo json_encode($edit_product);
	}

	public function save_product()
	{
		if($_POST["action"] == "upload")
		{
		$config['upload_path']   = 'img/';
		$config['allowed_types'] = 'gif|jpg|png';
		$config['max_size']      = 0;
		$config['max_width']     = 0;
		$config['max_height']    = 0;
		$config['encrypt_name']  = true;
			$this->load->library('upload', $config);
			if ( ! $this->upload->do_upload('newpd_pto'))
			{
				$photo = $this->input->post('oldpd_pto');
			}
			else
			{
				$photo = $this->upload->data('file_name');
			}
			$data = array(
				'pd_name' => $this->input->post('pd_name'),
				'pd_price' => $this->input->post('pd_price'),
				'pd_from' => $this->input->post('pd_from'),
				'pd_pto' => $photo,
				'pd_time' => date(Y_m_d_H_i_s),
			);
			$this->back_model->save_product($data);
			return true;
		}
		if($_POST["action"] == "update")
		{
			$config['upload_path']   = 'img/';
			$config['allowed_types'] = 'gif|jpg|png';
			$config['max_size']      = 0;
			$config['max_width']     = 0;
			$config['max_height']    = 0;
			$config['encrypt_name']  = true;
				$this->load->library('upload', $config);
				if ( ! $this->upload->do_upload('newpd_pto'))
				{
					$photo = $this->input->post('oldpd_pto');
				}
				else
				{
					$photo = $this->upload->data('file_name');
				}
				$data = array(
					'pd_name' => $this->input->post('pd_name'),
					'pd_price' => $this->input->post('pd_price'),
					'pd_from' => $this->input->post('pd_from'),
					'pd_pto' => $photo,
					'pd_time' => date(Y_m_d_H_i_s),
				);
					$id = $this->input->post('id_product');
					$this->back_model->save_edit_product($data,$id);
					return true;
		}
		if($_POST["action"] == "delete")
		{
		  $id = $this->input->post("id");
		  $this->back_model->delete_product($id);
		  return true;
		}
	}

	public function join()
	{
		$this->login_model->check_status();
		$data['join'] = $this->back_model->getjoin();
    $this->load->view('templates/back_header');
    $this->load->view('back/join', $data);
    $this->load->view('templates/back_footer');
	}

	public function edit_join()
	{
		$id = $this->input->post('id');
		$edit_join = $this->back_model->edit_join($id);
		echo json_encode($edit_join);
	}

	public function save_join()
	{
		$config['upload_path']   = 'img/';
		$config['allowed_types'] = 'gif|jpg|png';
		$config['max_size']      = 0;
		$config['max_width']     = 0;
		$config['max_height']    = 0;
		$config['encrypt_name']  = true;
			$this->load->library('upload', $config);
			if ( ! $this->upload->do_upload('newjoin_pto'))
			{
				$photo = $this->input->post('oldjoin_pto');
			}
			else
			{
				$photo = $this->upload->data('file_name');
			}
			$data = array(
			'join_head' => $_POST['join_head'],
			'join_title' => $_POST['join_title'],
			'join_time' => date(Y_m_d_H_i_s),
			'join_pto' => $photo,
			);
			$id = $_POST['id_join'];
			$this->back_model->save_join($data, $id);
			return true;
	}

	public function footer()
	{
		$this->login_model->check_status();
		$data['footer'] = $this->back_model->getfooter();
    $this->load->view('templates/back_header');
    $this->load->view('back/footer', $data);
    $this->load->view('templates/back_footer');
	}

	public function save_footer()
	{
		$config['upload_path']   = 'img/';
		$config['allowed_types'] = 'gif|jpg|png';
		$config['encrypt_name']  = true;
		$config['remove_spaces']  = true;
			$this->load->library('upload', $config);
			if ( ! $this->upload->do_upload('newfooter_pto'))
			{
				$photo = $this->input->post('oldfooter_pto');
			}
			else
			{
				$photo = $this->upload->data('file_name');
			}
				$data = array(
					'footer_title' => $this->input->post('footer_title'),
					'footer_from' => $this->input->post('footer_from'),
					'footer_phone' => $this->input->post('footer_phone'),
					'footer_fax' => $this->input->post('footer_fax'),
					'footer_mail' => $this->input->post('footer_mail'),
					'footer_time' => date(Y_m_d_H_i_s),
					'footer_pto' => $photo,
				);
				$id = $this->input->post('id_footer');
				$this->back_model->save_footer($data, $id);
				return true;
	}

}
