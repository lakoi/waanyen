<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
    <title>"Waanyen"</title>
  </head>
    <body class="blockquote text-center bg-light">
      <?php echo "ยินดีต้อนรับ คุณ",$this->session->userdata('Email'); ?><br>
        <table class="table">
          <thead>
            <th>
              <div class="btn-group-lg text-left" role="group" aria-label="Basic example">
                <a href="<?php echo base_url().'login/education';?>" class="btn btn-outline-primary border-0">Education</a>|
                <a href="<?php echo base_url().'login/interest';?>" class="btn btn-outline-primary border-0">Interest</a>|
                <a href="<?php echo base_url().'login/job';?>" class="btn btn-outline-primary border-0">Job</a>|
                <a href="<?php echo base_url().'login/domain';?>" class="btn btn-outline-primary border-0">Domain</a>|
                <a href="<?php echo base_url().'login/popup';?>" class="btn btn-outline-primary border-0">popup</a>
              </div>
            </th>
          </thead>
        </table>

        <!-- Button trigger modal -->
<button type="button" class="btn btn-primary" data-toggle="modal" data-target="#exampleModal">
  Launch demo modal
</button>

<!-- Modal -->
<div class="modal fade" id="exampleModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLabel">Modal title</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">
        <?php
        echo form_open_multipart('Lists/save_popup');
        ?>
        <input type="file" class="btn btn-info" name="photo" id="featured">
        <div class="text-left">title</div>
        <input type="text" class="form-control" name="title">

      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
        <input type="submit" class="btn btn-primary" value="upload">
      </div>
    </div>
  </div>
</div>
</form>

          <h3>Education</h3>
            <div class="col-sm-8 offset-2 ">
              <?php if (isset($query)): ?>
                <table class="table table-hover" >
                  <thead>
                    <tr>
                      <th><center>title</center></th>
                      <th><center>edit</center></th>
                      <th><center>delete</center></th>
                    </tr>
                  </thead>
                    <tbody>
                      <?php foreach($query as $r)
                      {
                        echo "<tr>";
                          echo "<td>".$r->title."</td>";
                          echo "<td><center><button type='button' class='btn btn-primary' data-toggle='modal' data-target='#exampleModal'>Edit</button></center></td>";
                          // echo "<td><center><a href='".base_url()."login/edit_education/".$r->id."' class='btn btn-warning'>Edit</a></center></td>";
                          echo "<td><center><a href='".base_url()."lists/delete_edu/".$r->id."' onclick='return confirm(\"Confirm Delete $r->title\")' class='btn btn-danger'>Delete</a></center></td>";
                        echo "</tr>";
                      } ?>
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
