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

<!--<?php echo validation_errors('<div style="padding:3px 10px;">','</div>');?>
<?php echo form_open('create'); ?>-->
<form method="POST" class="form-horizontal">
  <h4>Register<h4> <br>
    <div class="row">
      <div class="col-xl-6 col-xl-12">
        <div class="btn btn-disabled">
  <table>
    <tbody>
      <tr>
        <th> &nbsp;Email</th>
        <td><input class="form-control btn btn-outline-light bg-white glyphicon form-control-feedback" name="Email" type="Email" id="txtUsername" size="40" placeholder="ใส่ Email..." required><span class="bg-light"><?php echo form_error('Email');?><span></td>
      </tr>
      <tr>
        <th> &nbsp;Password</th>
        <td><input class="form-control btn btn-outline-light bg-white" name="Password" type="password" id="txtPassword" placeholder="ใส่ Password..." required><span><?php echo form_error('Password');?></span></td>
      </tr>
      <tr>
        <th> &nbsp;Confirm Password</th>
        <td><input class="form-control btn btn-outline-light bg-white" name="ConPassword" type="password" id="txtConPassword" placeholder="ยืนยัน Password..." ><?php echo form_error('ConPassword');?></td>
      </tr>
      <tr>
        <th>&nbsp;Name</th>
        <td><input class="form-control btn btn-outline-light bg-white" name="Name" type="text" id="txtName" size="35" placeholder="ใส่ชื่อ..." ><?php echo form_error('Name');?></td>
      </tr>
    </tbody>
  </table>
  </div>
</div>
</div>
  <br>
  <div>
  <input class="btn btn-outline-success" type="submit" name="Submit" value="Save">
</form>
<div class="row" style="margin-bottom:8px;">
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
</div>
<style>
.form-control{color:#0066ff !important}
</style>

    <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>
  </body>
</html>
