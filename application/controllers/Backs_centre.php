<?php
class Backs_centre extends CI_Controller
{
	public function __construct()
  {
	     parent::__construct();
      $this->load->model('centre_model');
  		$this->load->model('back_centre_model');
			$this->load->model('login_model');
  		$this->load->helper('url');
  		$this->load->database();
  		$this->load->helper('form');
      $this->load->helper('html');
      $this->load->library('form_validation');
      $this->load->helper('date');
			$this->login_model->checker();
	}

  public function about()
  {
    if($this->uri->segment('3')=="")
    {
      $id = $this->session->userdata('back');
    }
    else
    {
      $id = $this->uri->segment('3');
    }
    $iddata = array(
      "back" => $id,
    );
    $this->session->set_userdata($iddata);

		$about = $this->session->userdata('back');
		switch($about)
		{
			case "1" :
			{
				$data ['head'] = "เกี่ยวกับเรา - โรงเรียนสอนคนตาบอดกรุงเทพ";
				break;
			}
			case "2" :
			{
				$data ['head'] = "เกี่ยวกับเรา - ศูนย์พัฒนาสมรรถภาพคนตาบอด";
				break;
			}
			case "3" :
			{
				$data ['head'] = "เกี่ยวกับเรา - ศูนย์เทคโนโลยีการศึกษาเพื่อคนตาบอด";
				break;
			}
			case "4" :
			{
				$data ['head'] = "เกี่ยวกับเรา - ศูนย์ฝึกอาชีพหญิงตาบอดสามพราน";
				break;
			}
			case "5" :
			{
				$data ['head'] = "เกี่ยวกับเรา - ศูนย์พัฒนาอาชีพคนตาบอด";
				break;
			}
		}
		$data ['about'] = $this->back_centre_model->getabout();
		$back = array("b_about" => $data['about']);
		$this->session->set_userdata($back);

		$this->login_model->check_status();
    $this->load->view('templates/back_header');
    $this->load->view('back/centre/head_centre', $data);
    $this->load->view('back/centre/about', $data);
    $this->load->view('templates/back_footer');
  }

  public function edit_about()
	{
    $id = $this->input->post('id');
  	$edit_about = $this->back_centre_model->edit_about($id);
  	echo json_encode($edit_about);
	}

  public function save_about()
  {
    $config['upload_path']   = 'img/';
    $config['allowed_types'] = 'gif|jpg|png';
    $config['max_size']      = 0;
    $config['max_width']     = 0;
    $config['max_height']    = 0;
    $config['encrypt_name']  = true;
      $this->load->library('upload', $config);
      if ( ! $this->upload->do_upload('newcentre_about_pto'))
      {
        $photo = $this->input->post('oldcentre_about_pto');
      }
      else
      {
        $photo = $this->upload->data('file_name');
      }
      $data = array(
        'centre_about_title' => $this->input->post('centre_about_title'),
        'centre_about_code' => $this->input->post('centre_about_code'),
        'centre_about_pto' => $photo,
        'centre_about_time' => date(Y_m_d_H_i_s),
      );
        $id = $this->input->post('id_centre_about');
        $this->back_centre_model->save_edit_about($data,$id);
        return true;
  }

  public function news()
  {
		$news = $this->session->userdata('back');
		switch($news)
		{
			case "1" :
			{
				$data ['head'] = "ข่าวสาร - โรงเรียนสอนคนตาบอดกรุงเทพ";
				break;
			}
			case "2" :
			{
				$data ['head'] = "ข่าวสาร - ศูนย์พัฒนาสมรรถภาพคนตาบอด";
				break;
			}
			case "3" :
			{
				$data ['head'] = "ข่าวสาร - ศูนย์เทคโนโลยีการศึกษาเพื่อคนตาบอด";
				break;
			}
			case "4" :
			{
				$data ['head'] = "ข่าวสาร - ศูนย์ฝึกอาชีพหญิงตาบอดสามพราน";
				break;
			}
			case "5" :
			{
				$data ['head'] = "ข่าวสาร - ศูนย์พัฒนาอาชีพคนตาบอด";
				break;
			}
		}
		$data ['news_list'] = $this->back_centre_model->getnews_list();
		$news1 = array("b_news_list" => $data['news_list'],);
		$this->session->set_userdata($news1);

		$this->login_model->check_status();
    $this->load->view('templates/back_header');
    $this->load->view('back/centre/head_centre', $data);
    $this->load->view('back/centre/news', $data);
    $this->load->view('templates/back_footer');
  }

  public function edit_news()
  {
    $id = $this->input->post('id');
    $edit_news = $this->back_centre_model->edit_news($id);
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
      if ( ! $this->upload->do_upload('newcentre_news_pto'))
      {
        $photo = $this->input->post('oldcentre_news_pto');
      }
      else
      {
				$photo = $this->upload->data('file_name');
      }
			$data = array(
				'centre_news_title' => $this->input->post('centre_news_title'),
				'centre_news_content' => $this->input->post('centre_news_content'),
				'centre_news_pto' => $photo,
				'centre_news_time' => date(Y_m_d_H_i_s),
			);
			$this->back_centre_model->save_news($data);
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
        if ( ! $this->upload->do_upload('newcentre_news_pto'))
        {
          $photo = $this->input->post('oldcentre_news_pto');
        }
        else
        {
          $photo = $this->upload->data('file_name');
        }
				$data = array(
					'centre_news_title' => $this->input->post('centre_news_title'),
					'centre_news_content' => $this->input->post('centre_news_content'),
					'centre_news_pto' => $photo,
					'centre_news_time' => date(Y_m_d_H_i_s),
				);
          $id = $this->input->post('id_news');
          $this->back_centre_model->save_edit_news($data,$id);
          return true;
    }
    if($_POST["action"] == "delete")
    {
      $id = $this->input->post("id");
      $this->back_centre_model->delete_news($id);
      return true;
    }
  }

  public function product()
  {
		$product = $this->session->userdata('back');
		switch($product)
		{
			case "1" :
			{
				$data ['head'] = "ผลิตภัณฑ์และบริการ - โรงเรียนสอนคนตาบอดกรุงเทพ";
				break;
			}
			case "2" :
			{
				$data ['head'] = "ผลิตภัณฑ์และบริการ - ศูนย์พัฒนาสมรรถภาพคนตาบอด";
				break;
			}
			case "3" :
			{
				$data ['head'] = "ผลิตภัณฑ์และบริการ - ศูนย์เทคโนโลยีการศึกษาเพื่อคนตาบอด";
				break;
			}
			case "4" :
			{
				$data ['head'] = "ผลิตภัณฑ์และบริการ - ศูนย์ฝึกอาชีพหญิงตาบอดสามพราน";
				break;
			}
			case "5" :
			{
				$data ['head'] = "ผลิตภัณฑ์และบริการ - ศูนย์พัฒนาอาชีพคนตาบอด";
				break;
			}
		}
		$id = $this->session->userdata('back');
		$data ['product'] = $this->back_centre_model->getproduct();
		$data ['service'] = $this->back_centre_model->getservice($id);
		$back1 = array("b_product" => $data['product'],"b_service" => $data['service']);
		$this->session->set_userdata($back1);

		$this->login_model->check_status();
    $this->load->view('templates/back_header');
    $this->load->view('back/centre/head_centre', $data);
    $this->load->view('back/centre/product', $data);
    $this->load->view('templates/back_footer');
  }

  public function edit_product()
	{
		$id = $this->input->post('id');
		$edit_product = $this->back_centre_model->edit_product($id);
		echo json_encode($edit_product);
	}

	public function save_service()
	{
		$data = array(
			'centre_product_service_text' => $this->input->post('centre_product_service_text'),
			'centre_product_service_time' => date(Y_m_d_H_i_s),
		);
		$id = $this->input->post('id_centre_product_service');
		$this->back_centre_model->save_service($data,$id);
		return true;
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
			if ( ! $this->upload->do_upload('newcentre_product_pto'))
			{
				$photo = $this->input->post('oldcentre_product_pto');
			}
			else
			{
				$photo = $this->upload->data('file_name');
			}
			$data = array(
				'centre_product_name' => $this->input->post('centre_product_name'),
				'centre_product_price' => $this->input->post('centre_product_price'),
				'centre_product_from' => $this->input->post('centre_product_from'),
				'centre_product_pto' => $photo,
				'centre_product_time' => date(Y_m_d_H_i_s),
			);
			$this->back_centre_model->save_product($data);
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
				if ( ! $this->upload->do_upload('newcentre_product_pto'))
				{
					$photo = $this->input->post('oldcentre_product_pto');
				}
				else
				{
					$photo = $this->upload->data('file_name');
				}
				$data = array(
					'centre_product_name' => $this->input->post('centre_product_name'),
					'centre_product_price' => $this->input->post('centre_product_price'),
					'centre_product_from' => $this->input->post('centre_product_from'),
					'centre_product_pto' => $photo,
					'centre_product_time' => date(Y_m_d_H_i_s),
				);
					$id = $this->input->post('id_centre_product');
					$this->back_centre_model->save_edit_product($data,$id);
					return true;
		}
		if($_POST["action"] == "delete")
		{
		  $id = $this->input->post("id");
		  $this->back_centre_model->delete_product($id);
		  return true;
		}
	}

  public function donate()
  {
		$donate = $this->session->userdata('back');
		switch($donate)
		{
			case "1" :
			{
				$data ['head'] = "บริจาคและอาสาสมัคร - โรงเรียนสอนคนตาบอดกรุงเทพ";
				break;
			}
			case "2" :
			{
				$data ['head'] = "บริจาคและอาสาสมัคร - ศูนย์พัฒนาสมรรถภาพคนตาบอด";
				break;
			}
			case "3" :
			{
				$data ['head'] = "บริจาคและอาสาสมัคร - ศูนย์เทคโนโลยีการศึกษาเพื่อคนตาบอด";
				break;
			}
			case "4" :
			{
				$data ['head'] = "บริจาคและอาสาสมัคร - ศูนย์ฝึกอาชีพหญิงตาบอดสามพราน";
				break;
			}
			case "5" :
			{
				$data ['head'] = "บริจาคและอาสาสมัคร - ศูนย์พัฒนาอาชีพคนตาบอด";
				break;
			}
		}
		$data ['donate'] = $this->back_centre_model->getdonate();
		$back1 = array("b_donate" => $data['donate']);
		$this->session->set_userdata($back1);

		$this->login_model->check_status();
    $this->load->view('templates/back_header');
    $this->load->view('back/centre/head_centre', $data);
    $this->load->view('back/centre/donate', $data);
    $this->load->view('templates/back_footer');
  }

	public function edit_donate()
	{
		$id = $this->input->post('id');
		$edit_donate = $this->back_centre_model->edit_donate($id);
		echo json_encode($edit_donate);
	}

	public function save_edit_donate()
	{
		$data = array(
			'centre_donate_thai' => $this->input->post('centre_donate_thai'),
			'centre_donate_time' => date(Y_m_d_H_i_s),
		);
		$id = $this->input->post('id_centre_donate');
		$this->back_centre_model->save_edit_donate($data,$id);
		return true;
	}

  public function contact()
  {
		$contact = $this->session->userdata('back');
		switch($contact)
		{
			case "1" :
			{
				$data ['head'] = "ติดต่อเรา - โรงเรียนสอนคนตาบอดกรุงเทพ";
				break;
			}
			case "2" :
			{
				$data ['head'] = "ติดต่อเรา - ศูนย์พัฒนาสมรรถภาพคนตาบอด";
				break;
			}
			case "3" :
			{
				$data ['head'] = "ติดต่อเรา - ศูนย์เทคโนโลยีการศึกษาเพื่อคนตาบอด";
				break;
			}
			case "4" :
			{
				$data ['head'] = "ติดต่อเรา - ศูนย์ฝึกอาชีพหญิงตาบอดสามพราน";
				break;
			}
			case "5" :
			{
				$data ['head'] = "ติดต่อเรา - ศูนย์พัฒนาอาชีพคนตาบอด";
				break;
			}
		}
		$id = $this->session->userdata('back');
		$data['b_contact'] = $this->back_centre_model->getcontact($id);

		$this->login_model->check_status();
    $this->load->view('templates/back_header');
    $this->load->view('back/centre/head_centre', $data);
    $this->load->view('back/centre/contact', $data);
    $this->load->view('templates/back_footer');
  }

	public function save_contact()
	{
		$config['upload_path']   = 'img/';
		$config['allowed_types'] = 'gif|jpg|png';
		$config['max_size']      = 0;
		$config['max_width']     = 0;
		$config['max_height']    = 0;
		$config['encrypt_name']  = true;
		$this->load->library('upload', $config);
		if ( ! $this->upload->do_upload('newcentre_contact_pto'))
		{
			$photo = $this->input->post('oldcentre_contact_pto');
		}
		else
		{
			$photo = $this->upload->data('file_name');
		}
		$data = array(
			'centre_contact_name' => $this->input->post('centre_contact_name'),
			'centre_contact_from' => $this->input->post('centre_contact_from'),
			'centre_contact_phone' => $this->input->post('centre_contact_phone'),
			'centre_contact_fax' => $this->input->post('centre_contact_fax'),
			'centre_contact_email' => $this->input->post('centre_contact_email'),
			'centre_contact_pto' => $photo,
			'centre_contact_time' => date(Y_m_d_H_i_s),
		);
			$id = $this->input->post('id_centre_contact');
			$this->back_centre_model->save_edit_contact($data,$id);
			return true;
	}

}
