<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
    <title>"Job"</title>
  </head>
    <body class="blockquote text-center bg-light">

      <?php echo $this->session->userdata('Email'); ?><br>
      <table class="table">
        <thead>
          <th>
            <div class="btn-group-lg text-left" role="group" aria-label="Basic example">
              <button href="#" type="button" class="btn btn-outline-secondary border-0 text-primary"><a href="<?php echo base_url().'login/education';?>">Education</a></button>/
              <button href="#" type="button" class="btn btn-outline-secondary border-0 text-primary"><a href="<?php echo base_url().'login/interest';?>">Interest</a></button>/
              <button href="#" type="button" class="btn btn-outline-secondary border-0 text-primary"><a href="<?php echo base_url().'login/job';?>">Job</a></button>
            </div>
          </th>
        </thead>
      </table>

      <br>

      <h3>Job</h3>
        <div class="col-sm-6 offset-3 ">
      <?php if (isset($query)): ?>
      <table class="table">
        <thead>
          <tr>
            <th><center>id</center></th>
            <th><center>title</center></th>
            <th><center>edit</center></th>
            <th><center>delete</center></th>
          </tr>
        </thead>
      <tbody>
      <?php foreach($query as $r):?>
      <tr align="center">
        <td><?php echo $r->id; ?></td>
        <td><?php echo $r->title; ?></td>
        <td><a href='".base_url()."index.php/customer/edit_customer_form/".$r->id."' class='btn btn-warning'>Edit</a></td>
        <td><a href='".base_url()."index.php/customer/delete_customer/".$r->id."' onclick='return confirm(\"Confirm Delete Item\")' class='btn btn-danger'>Delete</a></td>
      </tr>

      <?php endforeach; ?>

      </tbody>
      </table>
      <a href="<?php echo base_url().'login/add_job';?>" class="btn btn-info">add</a>
      <?php endif; ?>
    </div>

      <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
      <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
      <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>
    </body>
</html>
