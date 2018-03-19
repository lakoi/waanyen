<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">

    <title>Register</title>
  </head>
  <body class="blockquote text-center bg-light">

<!-- <?php echo validation_errors();?> -->
<?php echo form_open('register'); ?>
<form method="post" class="form-horizontal table-bordered table-components">
  <h4>Register<h4> <br>
    <div class="row">
      <div class="col-sm-12">
        <div class="row">
          <div class="col-sm-4 offset-4">
            <div class="blockquote text-left text-primary">
        <span> &nbsp;Email</span>
        <input class="form-control btn btn-outline-light bg-white " aria-hidden="true" name="Email" type="email" id="txtUsername" size="40" placeholder="ใส่ Email..."><?php echo form_error('Email');?>

        <span> &nbsp;Password</span>
        <input class="form-control btn btn-outline-light bg-white" aria-hidden="true" name="Password" type="password" id="txtPassword" placeholder="ใส่ Password..."><?php echo form_error('Password');?>

        <span> &nbsp;Confirm Password</span>
        <input class="form-control btn btn-outline-light bg-white" aria-hidden="true" name="ConPassword" type="password" id="txtConPassword" placeholder="ยืนยัน Password..." ><?php echo form_error('ConPassword');?>

        <span>&nbsp;Name</span>
        <input class="form-control btn btn-outline-light bg-white" aria-hidden="true" name="Name" type="text" id="txtName" size="35" placeholder="ใส่ชื่อ..." ><?php echo form_error('Name');?>

        <div class="col-sm-4 offset-8">
        <span>Status</span>
        <select class="form-control btn btn-outline-dark" name="Status" id="Status" >
          <option value="ADMIN">ADMIN</option>
          <option value="USER">USER</option>
        </select>
      </div>
            </div>
          </div>
        </div>
        </div>
      </div>

  <br>
  <div>
  <input class="btn btn-outline-success" type="submit" name="Submit" value="Save">
  <a class="btn btn-outline-primary " href="login" role="button">Back</a>
</div>
</form>
<!-- <div class="row" style="margin-bottom:8px;">
  <div class="col-md-12">
    <div class="row">
      <div class="col-md-6">
        <div class="input-group">
          <span class="input-group-btn">
            <button class="btn btn-primary disabled" type="button">Notes (ถ้ามี)</button>
          </span>
          <input type="text" class="form-control" placeholder="หมายเหตุ..." name="notes" id="notes">
        </div>
      </div>
    </div>
  </div>
</div> -->
<style>
.form-control{color:#0066ff !important}
</style>
<!-- <script>
 $.validate({
 modules: 'security, file',
 onModulesLoaded: function () {
 $('input[name="pass_confirmation"]').displayPasswordStrength();
 }
 });
 </script> -->
    <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>
  </body>
</html>
