<!doctype html>
<html lang="en">
  <head>

    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">


    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
    <title>"Education"</title>
  </head>
    <body class="blockquote bg-light">

  <form action="<?php echo base_url(). 'Lists/save_edit_status_ad' ;?>" method="post" accept-charset="utf-8">
    <input type="hidden" name="UserID" value="<?php echo $query[0]->UserID ;?>">
    <br>
    <label>Status</label>
    <select name="Status">
<option selected>select status</option>
<option value="ADMIN">ADMIN</option>
<option value="USER">USER</option>
</select>
    <span>your status <?php echo $query[0]->Status ;?></span>
    <br><br>
    <input class="btn btn-warning" type="submit" id="submit" value="Save Edit">
    <a class="btn" href="<?php echo base_url(). 'login/list_admin' ;?>">Back</a>
  </form>

  <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>
  </body>
  </html>

          <!-- <?php
           // echo form_open('lists/save_edit_status_ad');
           //
           //
           // echo form_hidden('UserID',$query[0]->UserID);
           // echo "<br>";
           // echo form_label('Status');
           // echo form_dropdawn(array('class'=>'form-control','name'=>'Status','value'=>$query[0]->Name));
           // echo "<br/>";
           //
           // echo form_submit(array('id'=>'submit','value'=>'Save Edit','class'=>'btn btn-warning'));
           //
           // echo anchor(base_url().'login/list_admin', 'Back',array('class'=>'btn btn-default'));
           //
           // echo form_close();
        ?> -->
