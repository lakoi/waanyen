<!doctype html>
<html lang="en">
  <head>
    <style>
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
    </style>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
    <title>"Education"</title>
  </head>
    <body class="blockquote text-center bg-light">

      <?php echo $this->session->userdata('Email'); ?><br>
      <table class="table">
        <thead>
          <th>
            <div class="btn-group-lg text-left" role="group" aria-label="Basic example">
              <a href="<?php echo base_url().'login/home';?>" class="btn primary">Home</a>|
              <a href="<?php echo base_url().'login/education';?>" class="btn primary">Education</a>|
              <a href="<?php echo base_url().'login/interest';?>" class="btn primary">Interest</a>|
              <a href="<?php echo base_url().'login/job';?>" class="btn primary">Job</a>|
              <a href="<?php echo base_url().'login/domain';?>" class="btn primary">Domain</a>

            </div>
          </th>
        </thead>
      </table>

      <br>

  <form method="get" action="<?php echo base_url(). 'login/search_domain';?>">
    <div class="row">
      <div class="input-group mb-4 col-sm-4 offset-1 ">
        <div class="input-group-prepend">
      <input class="btn btn-outline-primary" type="submit" name="search" value="Search">
    </div>
      <input type="text" class="form-control" name="email" placeholder="search email . . ." aria-label="" aria-describedby="basic-addon1">
    </div>
    <div class="input-group mb-4 col-sm-4">
      <input type="text" class="form-control" name="username" placeholder="search username . . ." aria-label="" aria-describedby="basic-addon1">
    </div>
  </div>

    <div class="col-sm-12 offset-1 ">
      <table>
        <tr>
          <td>
            <div class="form-check mb-3 col-sm-3" >
          <input type="checkbox" class="form-check-input" name="package" id="exampleCheck1" value="0">
          <label class="form-check-label text-green" for="exampleCheck1">Free</label>
            </div>
          </td>
          <td>
            <div class="form-check mb-3 col-sm-3" >
          <input type="checkbox" class="form-check-input" name="package" id="exampleCheck2" value="1">
          <label class="form-check-label text-blue" for="exampleCheck2">Starten</label>
            </div>
          </td>
          <td>
            <div class="form-check mb-3 col-sm-3" >
          <input type="checkbox" class="form-check-input" name="package" id="exampleCheck3" value="2">
          <label class="form-check-label text-warning" for="exampleCheck3">gold</label>
            </div>
          </td>
          <td>
            <div class="form-check mb-3 col-sm-3" >
          <input type="checkbox" class="form-check-input" name="package" id="exampleCheck4" value="3">
          <label class="form-check-label text-purple" for="exampleCheck4">diamond</label>
            </div>
          </td>
        </tr>
      </table>
    </div>
  </form>

      <h3>Domain</h3>
        <div class="col-sm-8 offset-2 ">
      <?php if (isset($query)): ?>
      <table class="table table-hover" >
        <thead>
          <tr>
            <th><center>domain</center></th>
            <th><center>username</center></th>
            <th><center>email</center></th>
            <th><center>package</center></th>
            <th><center>date_reg</center></th>
          </tr>
        </thead>
      <tbody>
        <?php
        foreach($query as $r){
            echo "<tr>";
                echo "<td>".$r->domain."</td>";
                echo "<td>".$r->username."</td>";
                echo "<td>".$r->email."</td>";
                echo "<td>".$r->package."</td>";
                echo "<td>".$r->date_reg."</td>";
            echo "</tr>";
        }
    ?>
      </tbody>
      </table>
      <a href="<?php echo base_url().'login/add_domain';?>" class="btn btn-info btn-block">add</a>
      <?php endif; ?>
    </div>
    <style>
    .text-purple{color:#FF00ED !important}
    .text-green{color:#24f855 !important}
    .text-blue{color:#00dcff !important}
    </style>
      <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
      <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
      <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>
    </body>
</html>
