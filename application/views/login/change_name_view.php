<!doctype html>
<html lang="en">
  <head>

    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">


    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
    <title>"Job"</title>
  </head>
<body class="bg-light">
  <form action="<?php echo base_url(). 'Profiles/save_change_name' ;?>" method="post" accept-charset="utf-8">
    <input type="hidden" name="UserID" value="<?php echo $this->session->userdata('UserID') ;?>">
    <br>
    <label>title</label>
    <input class="btn" name="Name" value="<?php echo $this->session->userdata('Name') ;?>">
    <br><br>
    <input class="btn btn-warning" type="submit" id="submit" value="Save Name">
    <a class="btn" href="<?php echo base_url(). 'login/profile' ;?>">Back</a>
  </form>

<!-- <form action="<?php echo base_url(). 'Profiles/change_name';?>">
  <input class="">
  <label>name</label><br>
  <input class="from-control btn">
  <br><br>
  <button type="submit" class="btn btn-warning">Save</button>
  <a class="btn btn-light" href="<?php echo base_url(). 'login/profile'?>">Back</a>
</form> -->
<br>

<script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>
</body>
</html>
