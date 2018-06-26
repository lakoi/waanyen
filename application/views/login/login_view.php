<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
<title>Waanyen</title>
</head>
<body class="bg-light">
  <?php echo form_open('login/login_valid'); ?>
<form method="post" action="<?php echo base_url(). 'Login/login_valid' ;?>" >
  <div class="container">
    <div class="row">
      <div class="col-sm-12" style="margin-top:30px;">
        <div class="row">
          <div class="col-sm-6">

          </div>
          <div class="col-sm-6">
            <h3>Login</h3>
            <div style="margin:15px 0px 15px 0px;">
              <label class="text-danger"><?php echo $this->session->flashdata("login_error"); ?></label>
              <p>Email</p>
              <input class="form-control" name="Email" type="email" id="txtUsername" value="<?php echo $this->input->post('Email');?>">
              <span><?php echo form_error('Email');?></span>
            </div>
            <div style="margin:15px 0px 15px 0px;">
              <p>Password</p>
              <input class="form-control" name="Password" type="password" id="txtPassword">
              <span><?php echo form_error('Password');?></span>
            </div>
            <div class="form-check" style="margin:15px 0px 15px 0px;">
              <input type="checkbox" class="form-check-input" id="dropdownCheck">
              <label class="form-check-label btn btn-light text-warning" for="dropdownCheck">
                Remember me
              </label>
            </div>
            <div class="col-sm-12" style="margin:15px 0px 15px 0px;">
            <div class="row justify-content-between">
              <div>
                <a class="btn btn-outline-primary " href="<?php echo base_url();?>" role="button">home</a>
              </div>
              <div>
                <a class="btn btn-outline-primary " href="<?php echo base_url()."register/index";?>" role="button">Register</a>
                <input class="btn btn-outline-success" type="submit" name="submit" value="LOGIN">
              </div>
            </div>
          </div>
          </div>
        </div>
      </div>
    </div>
  </div>
</form>

<style>
.form-control{color:#0066ff !important}
</style>
<script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>

</body>
</html>
