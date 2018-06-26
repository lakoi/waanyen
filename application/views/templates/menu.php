    <style>
    .dropbtn {
    background-color: #f8f9fa;
    color: white;
    padding: 16px;
    font-size: 16px;
    border: none;
    }

    /* .dropdown {
    position: relative;
    display: inline-block;
    }

    .dropdown-menu {
    display: none;
    position: absolute;
    background-color: #f8f9fa;
    min-width: 160px;
    z-index: 1;
    }



    .dropdown-menu a:hover {background-color: #f8f9fa; color: #007bff;}

    .dropdown:hover .dropdown-menu {
    display: block;
    }

    .dropdown:hover .dropbtn {
    background-color: #f8f9fa;
    } */
    .dropdown-menu a {
    color: black;
    padding: 12px 16px;
    text-decoration: none;
    display: block;
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
    <div class="container">
      <div class="row">
        <div class="col-sm-12 text-right">
          <div class="dropdown">
            <button type="button" class="btn primary btn-lg dropbtn dropdown-toggle" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
              <?php echo $this->session->userdata('Email'); ?>
            </button>

            <div class="dropdown-menu dropdown-menu-right text-right">
              <a class="dropdown-item" href="<?php echo base_url().'login/home';?>">Home</a>
              <a class="dropdown-item" href="<?php echo base_url(). 'login/profile';?>">Profile</a>
              <div class="dropdown-divider"></div>
              <a class="dropdown-item" href="<?php echo base_url().'login/logout';?>">Logout</a>
            </div>
          </div>
        </div>
      </div>
    </div>
