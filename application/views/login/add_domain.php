<!doctype html>
<html lang="en">
  <head>

    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">


    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
  </head>
    <body class="blockquote bg-light">
<form method="post" action="<?php echo base_url(). 'lists/save_do';?>">
  <div class="form-group">
    <label for="formGroupExampleInput">domain</label>
    <input type="text" class="btn" name="domain" id="formGroupExampleInput" placeholder="domain . . .">
  </div>
  <div class="form-group">
    <label for="formGroupExampleInput2">username</label>
    <input type="text" class="btn" name="username" id="formGroupExampleInput2" placeholder="username . . .">
  </div>
  <div class="form-group">
    <label for="formGroupExampleInput2">email</label>
    <input type="text" class="btn" name="email" id="formGroupExampleInput2" placeholder="email . . .">
  </div>
  <div class="form-group">
    <label for="formGroupExampleInput2">package</label>
    <input type="text" class="btn" name="package" id="formGroupExampleInput2" placeholder="package . . .">
  </div>
  <!-- <div class="form-group">
    <label for="formGroupExampleInput2">date_reg</label>
    <input type="text" class="form-control" name="domain" id="formGroupExampleInput2" placeholder="date_reg . . .">
  </div> -->
  <input class="btn btn-warning" type="submit" name="submit" value="save">
  <a href="<?php echo base_url(). 'login/domain';?>" class="btn">Back<a/>
</form>
<script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>
</body>
</html>
