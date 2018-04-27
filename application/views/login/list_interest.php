<!doctype html>
<html lang="en">
  <head>
    <!-- <style>
      .btn
      {
          border: none;
          color: white;
          padding: 14px 28px;
          font-size: 16px;
          cursor: pointer;
      }
      .primary {background-color: #f8f9fa; color: #007bff;} /* Green */
      .primary:hover {background-color: #f8f9fa; color: #000;}
    </style> -->
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
    <title>"Interest"</title>
  </head>
    <body class="blockquote text-center bg-light">
      <div class="btn-group-lg text-left offset-1" role="group" aria-label="Basic example">
        <a href="<?php echo base_url().'login/home';?>" class="btn primary ">Home</a>|
        <a href="<?php echo base_url().'login/education';?>" class="btn primary">Education</a>|
        <a href="<?php echo base_url().'login/interest';?>" class="btn primary">Interest</a>|
        <a href="<?php echo base_url().'login/job';?>" class="btn primary">Job</a>|
        <a href="<?php echo base_url().'login/domain';?>" class="btn primary">Domain</a>|
        <a href="<?php echo base_url().'login/popup';?>" class="btn primary">popup</a>
      </div>
        <hr>
      <br>
        <div class="col-sm-8 offset-2 ">
          <h3>Interest</h3>
          <a href="<?php echo base_url().'login/add_interest';?>" class="btn btn-info ">add</a>
      <?php if (isset($query)): ?>
      <table class="table table-hover">
        <thead>
          <tr>
            <th><center>title</center></th>
            <th><center>edit</center></th>
            <th><center>delete</center></th>
          </tr>
        </thead>
      <tbody>
        <?php
        foreach($query as $r){
            echo "<tr>";
                // echo "<td>".$r->id."</td>";
                echo "<td>".$r->title."</td>";
                echo "<td><a href='".base_url()."login/edit_interest/".$r->id."' class='btn btn-warning'>Edit</a></td>";
                echo "<td><a href='".base_url()."lists/delete_int/".$r->id."' onclick='return confirm(\"Confirm Delete $r->title\")' class='btn btn-danger'>Delete</a></td>";
            echo "</tr>";
        }
    ?>
      </tbody>
      </table>
    <a href="<?php echo base_url().'login/add_interest';?>" class="btn btn-info btn-block">add</a>
      <?php endif; ?>
    </div>

      <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
      <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
      <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>
    </body>
</html>
