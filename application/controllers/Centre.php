<?php
class Centre extends CI_Controller
{
  public function __construct()
  {
       parent::__construct();
      // $this->load->model('about_model');
      $this->load->model('page_model');
      $this->load->model('centre_model');
      $this->load->helper('url');
      $this->load->database();
      $this->load->helper('form');
      $this->load->helper('html');
      $this->load->library('form_validation');
      $this->load->helper('date');
      $this->load->library('session');
      $lang = $this->session->userdata('lang');
      $this->lang->load($lang,$lang);
  }

  public function centre()
  {
    $data ['footer'] = $this->page_model->getfooter();
    $data ['centre'] = $this->centre_model->getcentre();
    $lang = $this->session->userdata('lang');
    $this->lang->load($lang,$lang);

    $this->load->view('templates/header');
    $this->load->view('home/centre/centre', $data);
    $this->load->view('templates/footer', $data);
  }

  public function about()
  {
    if($this->uri->segment('3')=="")
    {
      $num = $this->session->userdata('home');
    }
    else
    {
      $num = $this->uri->segment('3');
    }

    $data = array(
      "home" => $num
    );
    $this->session->set_userdata($data);

    $about = $this->session->userdata('home');
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
      $data ['about'] = $this->centre_model->getabout();
      $data ['footer'] = $this->page_model->getfooter();
      $data ['news_h'] = $this->centre_model->getnews_h();
      $data ['news'] = $this->centre_model->getnews();
      $data ['news_list'] = $this->centre_model->getnews_list();
      $data ['product'] = $this->centre_model->getproduct();
      $data ['donate'] = $this->centre_model->getdonate();
      $page = array(
        "about" => $data['about'],
        "news_h" => $data['news_h'],
        "news" => $data['news'],
        "news_list" => $data['news_list'],
        "product" => $data['product'],
        "donate" => $data['donate'],
      );
      $this->session->set_userdata($page);
    $this->load->view('templates/header');
    $this->load->view('home/centre/head_centre', $data);
    $this->load->view('home/centre/about', $data);
    $this->load->view('templates/footer', $data);
  }

  public function about_show()
  {
    $about = $this->session->userdata('home');
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
    $data ['footer'] = $this->page_model->getfooter();

    $this->load->view('templates/header');
    $this->load->view('home/centre/head_centre', $data);
    $this->load->view('home/centre/about_show', $data);
    $this->load->view('templates/footer', $data);
  }

  public function news()
  {
    $news = $this->session->userdata('home');
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
    $data ['footer'] = $this->page_model->getfooter();

    $this->load->view('templates/header');
    $this->load->view('home/centre/head_centre', $data);
    $this->load->view('home/centre/news', $data);
    $this->load->view('templates/footer', $data);
  }

  public function product()
  {
    $product = $this->session->userdata('home');
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
    $id = $this->session->userdata('num');
    $data['service'] = $this->centre_model->getservice($id);
    $data ['footer'] = $this->page_model->getfooter();

    $this->load->view('templates/header');
    $this->load->view('home/centre/head_centre', $data);
    $this->load->view('home/centre/product', $data);
    $this->load->view('templates/footer', $data);
  }

  public function donate()
  {
    $donate = $this->session->userdata('home');
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

    $data ['footer'] = $this->page_model->getfooter();

    $this->load->view('templates/header');
    $this->load->view('home/centre/head_centre', $data);
    $this->load->view('home/centre/donate', $data);
    $this->load->view('templates/footer', $data);
  }

  public function contact()
  {
    $contact = $this->session->userdata('home');
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
    $id = $this->session->userdata('home');
    $data['contact'] = $this->centre_model->getcontact($id);
    $data ['footer'] = $this->page_model->getfooter();

    $this->load->view('templates/header');
    $this->load->view('home/centre/head_centre', $data);
    $this->load->view('home/centre/contact', $data);
    $this->load->view('templates/footer', $data);
  }

}
