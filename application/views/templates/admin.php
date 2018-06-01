<html>
  <body>
<style>
    .fa
    {
      position: fixed;
      top: 0;
      z-index: 2;
    }
    .dropbtn {
    background-color: #f8f9fa;
    color: white;
    padding: 16px;
    font-size: 16px;
    border: none;
    }

    .dropdown {
    position: relative;
    display: inline-block;
    }

    .dropdown-content {
    display: none;
    position: absolute;
    background-color: #f8f9fa;
    min-width: 160px;
    /* box-shadow: 0px 8px 16px 0px rgba(0,0,0,0.2); */
    z-index: 1;
    }

    .dropdown-content a {
    color: black;
    padding: 12px 16px;
    text-decoration: none;
    display: block;
    }

    .dropdown-content a:hover {background-color: #f8f9fa; color: #007bff;}

    .dropdown:hover .dropdown-content {
    display: block;
    }

    .dropdown:hover .dropbtn {
    background-color: #f8f9fa;
    }
  .xxx
  {
      border: none;
      color: white;
      padding: 14px 28px;
      font-size: 16px;
      cursor: pointer;
  }
  .primary {background-color: #f8f9fa; color: #000;}
  .primary:hover {background-color: #f8f9fa; color: #007bff;}
</style>

<div class="container-fluid" style="">
  <div class="row">
  <div class="dropdown offset-10">
    <div class="fa" style="position:relative; float:right;">
      <button style="float:right;" type="button" href="<?php echo base_url(). 'login/profile';?>" class="xxx primary btn-lg dropbtn dropdown-toggle">
        <?php echo $this->session->userdata('Email'); ?>
      </button>
      </div>
      <div class="dropdown-content">
      <a class="dropdown-item" href="<?php echo base_url().'login/home';?>">Home</a>
      <a class="dropdown-item" href="<?php echo base_url(). 'login/profile';?>">Profile</a>
      <a class="dropdown-item" href="<?php echo base_url(). 'login/admin';?>">จัดการผู้ใช้</a>
      <div class="dropdown-divider"></div>
      <a class="dropdown-item" href="<?php echo base_url().'login/logout';?>">Logout</a>
      </div>

  </div>
</div>
</div>

</body>
</html>

<!-- </div> -->
