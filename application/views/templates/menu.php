    <style>
      .btn
      {
          border: none;
          color: white;
          padding: 14px 28px;
          font-size: 16px;
          cursor: pointer;
      }
      .primary {background-color: #f8f9fa; color: #007bff;}
      .primary:hover {background-color: #f8f9fa; color: #000;}
    </style>

<div class="offset-10">
<div class="btn-group">
<button type="button" class="btn primary btn-lg dropdown-toggle" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false"><?php echo $this->session->userdata('Email'); ?></button>
<div class="dropdown-menu dropdown-menu-right">
<a class="dropdown-item" href="<?php echo base_url().'login/home';?>">Home</a>
<a class="dropdown-item" href="<?php echo base_url(). 'login/profile';?>">Profile</a>
<div class="dropdown-divider"></div>
<a class="dropdown-item" href="<?php echo base_url().'login/logout';?>">Logout</a>
</div>
</div>
</div>
