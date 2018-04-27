    <style>
    .fa
    {
      position: fixed;
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
  .btn
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

    <div class="dropdown col-sm-3 offset-10">
      <div class="fa">
    <button type="button" class="btn primary btn-lg dropbtn dropdown-toggle" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false"><?php echo $this->session->userdata('Email'); ?></button>

    <div class="dropdown-content">
    <a class="dropdown-item" href="<?php echo base_url().'login/home';?>">Home</a>
    <a class="dropdown-item" href="<?php echo base_url(). 'login/profile';?>">Profile</a>
    <div class="dropdown-divider"></div>
    <a class="dropdown-item" href="<?php echo base_url().'login/logout';?>">Logout</a>
    </div>
    </div>
    </div>
