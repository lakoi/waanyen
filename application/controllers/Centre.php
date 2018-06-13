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
  }

  public function centre()
  {
    $data ['footer'] = $this->page_model->getfooter();
    $data ['centre'] = $this->centre_model->getcentre();

    $this->load->view('templates/header');
    $this->load->view('home/centre/centre', $data);
    $this->load->view('templates/footer', $data);
  }

  public function about()
  {
    if($this->uri->segment('3')=="")
    {
      $num = $this->session->userdata('num');
    }
    else
    {
      $num = $this->uri->segment('3');
    }

    $data = array(
      "num" => $num
    );
    $this->session->set_userdata($data);
    if($this->session->userdata('num')=="1")
    {
      $data ['head'] = "เกี่ยวกับเรา - โรงเรียนสอนคนตาบอดกรุงเทพ";
      $data ['query'] = "1";
      $data ['about'] = $this->centre_model->getabout1();
      $data ['footer'] = $this->page_model->getfooter();
      $data ['news_h'] = $this->centre_model->getnews1_h();
      $data ['news'] = $this->centre_model->getnews1();
      $data ['news_list'] = $this->centre_model->getnews1_list();
      $data ['product'] = $this->centre_model->getproduct1();
      $data ['donate'] = $this->centre_model->getdonate1();
      $page1 = array(
        "head" => $data['head'],
        "query" => $data['query'],
        "about" => $data['about'],
        "news_h" => $data['news_h'],
        "news" => $data['news'],
        "news_list" => $data['news_list'],
        "product" => $data['product'],
        "donate" => $data['donate'],
      );
      $this->session->set_userdata($page1);
    $this->load->view('templates/header');
    $this->load->view('home/centre/head_centre', $data);
    $this->load->view('home/centre/about', $data);
    $this->load->view('templates/footer', $data);
    }
    if($this->session->userdata('num')=="2")
    {
      $data ['head'] = "เกี่ยวกับเรา - ศูนย์พัฒนาสมรรถภาพคนตาบอด";
      $data ['query'] = "2";
      $data ['about'] = $this->centre_model->getabout2();
      $data ['footer'] = $this->page_model->getfooter();
      $data ['news_h'] = $this->centre_model->getnews2_h();
      $data ['news'] = $this->centre_model->getnews2();
      $data ['news_list'] = $this->centre_model->getnews2_list();
      $data ['product'] = $this->centre_model->getproduct2();
      $data ['donate'] = $this->centre_model->getdonate2();
      $page2 = array(
        "head" => $data['head'],
        "query" => $data['query'],
        "about" => $data['about'],
        "news_h" => $data['news_h'],
        "news" => $data['news'],
        "news_list" => $data['news_list'],
        "product" => $data['product'],
        "donate" => $data['donate'],
      );
      $this->session->set_userdata($page2);
      $this->load->view('templates/header');
      $this->load->view('home/centre/head_centre', $data);
      $this->load->view('home/centre/about', $data);
      $this->load->view('templates/footer', $data);
    }
    if($this->session->userdata('num')=="3")
    {
      $data ['head'] = "เกี่ยวกับเรา - ศูนย์เทคโนโลยีการศึกษาเพื่อคนตาบอด";
      $data ['query'] = "3";
      $data ['about'] = $this->centre_model->getabout3();
      $data ['footer'] = $this->page_model->getfooter();
      $data ['news_h'] = $this->centre_model->getnews3_h();
      $data ['news'] = $this->centre_model->getnews3();
      $data ['news_list'] = $this->centre_model->getnews3_list();
      $data ['product'] = $this->centre_model->getproduct3();
      $data ['donate'] = $this->centre_model->getdonate3();
      $page3 = array(
        "head" => $data['head'],
        "query" => $data['query'],
        "about" => $data['about'],
        "news_h" => $data['news_h'],
        "news" => $data['news'],
        "news_list" => $data['news_list'],
        "product" => $data['product'],
        "donate" => $data['donate'],
      );
      $this->session->set_userdata($page3);
      $this->load->view('templates/header');
      $this->load->view('home/centre/head_centre', $data);
      $this->load->view('home/centre/about', $data);
      $this->load->view('templates/footer', $data);
    }
    if($this->session->userdata('num')=="4")
    {
      $data ['head'] = "เกี่ยวกับเรา - ศูนย์ฝึกอาชีพหญิงตาบอดสามพราน";
      $data ['query'] = "4";
      $data ['about'] = $this->centre_model->getabout4();
      $data ['footer'] = $this->page_model->getfooter();
      $data ['news_h'] = $this->centre_model->getnews4_h();
      $data ['news'] = $this->centre_model->getnews4();
      $data ['news_list'] = $this->centre_model->getnews4_list();
      $data ['product'] = $this->centre_model->getproduct4();
      $data ['donate'] = $this->centre_model->getdonate4();
      $page4 = array(
        "head" => $data['head'],
        "query" => $data['query'],
        "about" => $data['about'],
        "news_h" => $data['news_h'],
        "news" => $data['news'],
        "news_list" => $data['news_list'],
        "product" => $data['product'],
        "donate" => $data['donate'],
      );
      $this->session->set_userdata($page4);
      $this->load->view('templates/header');
      $this->load->view('home/centre/head_centre', $data);
      $this->load->view('home/centre/about', $data);
      $this->load->view('templates/footer', $data);
    }
    if($this->session->userdata('num')=="5")
    {
      $data ['head'] = "เกี่ยวกับเรา - ศูนย์พัฒนาอาชีพคนตาบอด";
      $data ['query'] = "5";
      $data ['about'] = $this->centre_model->getabout5();
      $data ['footer'] = $this->page_model->getfooter();
      $data ['news_h'] = $this->centre_model->getnews5_h();
      $data ['news'] = $this->centre_model->getnews5();
      $data ['news_list'] = $this->centre_model->getnews5_list();
      $data ['product'] = $this->centre_model->getproduct5();
      $data ['donate'] = $this->centre_model->getdonate5();
      $page5 = array(
        "head" => $data['head'],
        "query" => $data['query'],
        "about" => $data['about'],
        "news_h" => $data['news_h'],
        "news" => $data['news'],
        "news_list" => $data['news_list'],
        "product" => $data['product'],
        "donate" => $data['donate'],
      );
      $this->session->set_userdata($page5);
      $this->load->view('templates/header');
      $this->load->view('home/centre/head_centre', $data);
      $this->load->view('home/centre/about', $data);
      $this->load->view('templates/footer', $data);
    }
  }

  public function about_show()
  {
    if($this->session->userdata('num')=="1")
    {
      $data ['head'] = "เกี่ยวกับเรา - โรงเรียนสอนคนตาบอดกรุงเทพ";
    }
    if($this->session->userdata('num')=="2")
    {
      $data ['head'] = "เกี่ยวกับเรา - ศูนย์พัฒนาสมรรถภาพคนตาบอด";
    }
    if($this->session->userdata('num')=="3")
    {
      $data ['head'] = "เกี่ยวกับเรา - ศูนย์เทคโนโลยีการศึกษาเพื่อคนตาบอด";
    }
    if($this->session->userdata('num')=="4")
    {
      $data ['head'] = "เกี่ยวกับเรา - ศูนย์ฝึกอาชีพหญิงตาบอดสามพราน";
    }
    if($this->session->userdata('num')=="5")
    {
      $data ['head'] = "เกี่ยวกับเรา - ศูนย์พัฒนาอาชีพคนตาบอด";
    }
    $data ['footer'] = $this->page_model->getfooter();

    $this->load->view('templates/header');
    $this->load->view('home/centre/head_centre', $data);
    $this->load->view('home/centre/about_show', $data);
    $this->load->view('templates/footer', $data);
  }

  public function news()
  {
    if($this->session->userdata('num')=="1")
    {
      $data ['head'] = "ข่าวสาร - โรงเรียนสอนคนตาบอดกรุงเทพ";
    }
    if($this->session->userdata('num')=="2")
    {
      $data ['head'] = "ข่าวสาร - ศูนย์พัฒนาสมรรถภาพคนตาบอด";
    }
    if($this->session->userdata('num')=="3")
    {
      $data ['head'] = "ข่าวสาร - ศูนย์เทคโนโลยีการศึกษาเพื่อคนตาบอด";
    }
    if($this->session->userdata('num')=="4")
    {
      $data ['head'] = "ข่าวสาร - ศูนย์ฝึกอาชีพหญิงตาบอดสามพราน";
    }
    if($this->session->userdata('num')=="5")
    {
      $data ['head'] = "ข่าวสาร - ศูนย์พัฒนาอาชีพคนตาบอด";
    }
    $data ['footer'] = $this->page_model->getfooter();

    $this->load->view('templates/header');
    $this->load->view('home/centre/head_centre', $data);
    $this->load->view('home/centre/news', $data);
    $this->load->view('templates/footer', $data);
  }

  public function product()
  {
    if($this->session->userdata('num')=="1")
    {
      $data ['head'] = "ผลิตภัณฑ์และบริการ - โรงเรียนสอนคนตาบอดกรุงเทพ";
    }
    if($this->session->userdata('num')=="2")
    {
      $data ['head'] = "ผลิตภัณฑ์และบริการ - ศูนย์พัฒนาสมรรถภาพคนตาบอด";
    }
    if($this->session->userdata('num')=="3")
    {
      $data ['head'] = "ผลิตภัณฑ์และบริการ - ศูนย์เทคโนโลยีการศึกษาเพื่อคนตาบอด";
    }
    if($this->session->userdata('num')=="4")
    {
      $data ['head'] = "ผลิตภัณฑ์และบริการ - ศูนย์ฝึกอาชีพหญิงตาบอดสามพราน";
    }
    if($this->session->userdata('num')=="5")
    {
      $data ['head'] = "ผลิตภัณฑ์และบริการ - ศูนย์พัฒนาอาชีพคนตาบอด";
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
    if($this->session->userdata('num')=="1")
    {
      $data ['head'] = "บริจาคและอาสาสมัคร - โรงเรียนสอนคนตาบอดกรุงเทพ";
    }
    if($this->session->userdata('num')=="2")
    {
      $data ['head'] = "บริจาคและอาสาสมัคร - ศูนย์พัฒนาสมรรถภาพคนตาบอด";
    }
    if($this->session->userdata('num')=="3")
    {
      $data ['head'] = "บริจาคและอาสาสมัคร - ศูนย์เทคโนโลยีการศึกษาเพื่อคนตาบอด";
    }
    if($this->session->userdata('num')=="4")
    {
      $data ['head'] = "บริจาคและอาสาสมัคร - ศูนย์ฝึกอาชีพหญิงตาบอดสามพราน";
    }
    if($this->session->userdata('num')=="5")
    {
      $data ['head'] = "บริจาคและอาสาสมัคร - ศูนย์พัฒนาอาชีพคนตาบอด";
    }

    $data ['footer'] = $this->page_model->getfooter();

    $this->load->view('templates/header');
    $this->load->view('home/centre/head_centre', $data);
    $this->load->view('home/centre/donate', $data);
    $this->load->view('templates/footer', $data);
  }

  public function contact()
  {
    if($this->session->userdata('num')=="1")
    {
      $data ['head'] = "ติดต่อเรา - โรงเรียนสอนคนตาบอดกรุงเทพ";
    }
    if($this->session->userdata('num')=="2")
    {
      $data ['head'] = "ติดต่อเรา - ศูนย์พัฒนาสมรรถภาพคนตาบอด";
    }
    if($this->session->userdata('num')=="3")
    {
      $data ['head'] = "ติดต่อเรา - ศูนย์เทคโนโลยีการศึกษาเพื่อคนตาบอด";
    }
    if($this->session->userdata('num')=="4")
    {
      $data ['head'] = "ติดต่อเรา - ศูนย์ฝึกอาชีพหญิงตาบอดสามพราน";
    }
    if($this->session->userdata('num')=="5")
    {
      $data ['head'] = "ติดต่อเรา - ศูนย์พัฒนาอาชีพคนตาบอด";
    }
    $id = $this->session->userdata('num');
    $data['contact'] = $this->centre_model->getcontact($id);
    $data ['footer'] = $this->page_model->getfooter();

    $this->load->view('templates/header');
    $this->load->view('home/centre/head_centre', $data);
    $this->load->view('home/centre/contact', $data);
    $this->load->view('templates/footer', $data);
  }

}
