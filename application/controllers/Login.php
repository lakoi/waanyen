<?php
class Login extends CI_Controller
{
	public function __construct(){

					parent::__construct();
					$this->load->model('register_model');
					$this->load->helper('url_helper');
					$this->load->database();
					$this->load->helper('form');
					$this->load->library('form_validation');
	}
	public function index(){

	 				$this->load->view('templates/header');
	        $this->load->view('login/login_view');
					$this->load->view('templates/footer');
}
	public function login(){
		if(isset($_POST['Email'])){
				//connection
                  echo "";
				//รับค่า user & password
                  $Username = $_POST['Email'];
                  $Password = md5($_POST['Password']);
				//query
                  $sql="SELECT * FROM member Where Email='".$Username."' and Password='".$Password."' ";

                  $result = mysqli_query($sql);

                  if(mysqli_num_rows($result)==1){

                      $row = mysqli_fetch_array($result);

                      $_SESSION["Email"] = $row["Email"];
                      $_SESSION["Password"] = $row["Password"];
                      $_SESSION["Status"] = $row["Status"];

                      if($_SESSION["Status"]=="ADMIN"){ //ถ้าเป็น admin ให้กระโดดไปหน้า admin_page.php

                        $this->load->view('admin_view');

                      }

                      if ($_SESSION["Status"]=="USER"){  //ถ้าเป็น member ให้กระโดดไปหน้า user_page.php

                        $this->load->view('user_view');

                      }



	}

}
}}
