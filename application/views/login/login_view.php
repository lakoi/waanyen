<?php session_start() ?>
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
<body class="blockquote text-center bg-light">
  <?php echo validation_errors();?>
  <?php echo form_open('login'); ?>
<form method="post" >
  <h4 class="blockquote text-center">Login</h4><br>
<div class="row">
  <div class="col-sm-12">
    <div class="row">
      <div class="col-sm-4 col-sm-12">
        <div class="btn btn-disabled">
          <table class="blockquote text-center">
            <tbody>
              <tr>
                <td> &nbsp;Email</td>
                <td><input class="form-control btn btn-outline-light bg-white" name="Email" type="Email" id="txtUsername"></td><?php echo form_error('Email');?>
              </tr>
              <tr>
                <td> &nbsp;Password</td>
                <td><input class="form-control btn btn-outline-light bg-white" name="Password" type="password" id="txtPassword"></td><?php echo form_error('Password');?>
              </tr>
            </tbody>
          </table>
        </div>
      </div>
    </div>
  </div>
</div>
  <div class="form-check">
      <input type="checkbox" class="form-check-input" id="dropdownCheck">
      <label class="form-check-label btn btn-light text-warning" for="dropdownCheck">
        Remember me
      </label>
    </div>
  <br>
  <input class="btn btn-outline-success" type="submit" name="submit" value="LOGIN">

  <a class="btn btn-outline-primary " href="register" role="button">Register</a>
</form>
<style>
.form-control{color:#0066ff !important}
</style>
<script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>

</body>
</html>
