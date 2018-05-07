<?php
class Pages extends CI_Controller
{
	public function view()
	{
    $this->load->view('templates/header');
    $this->load->view('home/index');
    $this->load->view('templates/footer');
	}
}
