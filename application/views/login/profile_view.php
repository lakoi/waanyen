<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
    <title>"Profiles"</title>
  </head>
  <body class="text-center bg-light">

    <div class="container">
      <div class="row">
        <div class="col-sm-8">
          <h4>Profile</h4>
          <form method="post">
        <?php if (isset($query)): ?>
        <table class="table border-0">
          <input type="hidden" name="UserID" value="<?php echo $query[0]->UserID ;?>"></input>
            <tr>
              <th><label>Email</label></th>
              <td><span><?php echo $this->session->userdata('Email'); ?></span></td><td></td>
            </tr>
            <tr>
              <th><label> Password</label></th>
              <td><input type="password" readonly class="form-control-plaintext" value="<?php echo $this->session->userdata('Password'); ?>"></td>
              <td><a class="btn btn-warning" href="<?php echo base_url(). 'login/change_password';?>"> change password</a></td>
            </tr>
            <tr>
              <th><label>Name</label></th>
              <td><?php echo $this->session->userdata('Name');?></td>
              <td><a class="btn btn-warning" href="<?php echo base_url(). 'login/change_name';?>"> change name</a></td>
            </tr>

          </table>
            <?php endif; ?>
          </form>
        </div>
      </div>
    </div>


<script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>
</body>
</html>
