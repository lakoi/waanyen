<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
    <title>"Education"</title>
  </head>
    <body class="blockquote text-center bg-light">

      <br>

        <div class="col-sm-8 offset-2 ">
          <h3>Education</h3>
          <a href="<?php echo base_url().'login/add_education';?>" class="btn btn-info ">add</a>
      <?php if (isset($query)): ?>
      <table class="table table-hover" >
        <thead>
          <tr>
            <!-- <th><center>id</center></th> -->
            <th><center>title</center></th>
            <th><center>edit</center></th>
            <th><center>delete</center></th>
          </tr>
        </thead>
      <tbody>
        <?php
        foreach($query as $r){
            echo "<tr>";
                echo "<td>".$r->title."</td>";
                echo "<td><center><a href='".base_url()."login/edit_education/".$r->id."' class='btn btn-warning'>Edit</a></center></td>";
                echo "<td><center><a href='".base_url()."lists/delete_edu/".$r->id."' onclick='return confirm(\"Confirm Delete $r->title\")' class='btn btn-danger'>Delete</a></center></td>";
            echo "</tr>";
        }
    ?>
      </tbody>
      </table>
      <a href="<?php echo base_url().'login/add_education';?>" class="btn btn-info btn-block">add</a>
      <?php endif; ?>
    </div>
      <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
      <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
      <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>
    </body>
</html>
