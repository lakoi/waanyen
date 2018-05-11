<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>

    <title>waanyen</title>
    <style>
      .centre-img1
        {
          margin: 10px 5px ;
          /* background-color: #999; */
          width: 330px;
          height: 270px;
          background-repeat : no-repeat;
          background-position: top center;
          border: 10px 0;
          position: relative;
        }
        .centre-txt1
        {
          z-index: 1;
          position: relative;
          border: 10px 0;
          width: 290px;
          height: 230px;
          display:table;
          /* top:50%;
          left:50%; */
          margin: 20px;
        }
        .centre-txt1:hover
        {
          /* color: #FF6600; */
          opacity: 0.9;
          background-color: #aaa;
        }
        .centre-mid
        {
          display:table-cell;
          vertical-align:middle;
        }
        .centre-pto
        {
          position: absolute;
          left: 0; top: 0;
          z-index: 0;
        }
        .form-control
        {
          opacity: 0.9;
        }
    </style>
  </head>
  <body class="bg-light">
    <div class="btn-group-lg   text-left offset-1   " role="group" aria-label="Basic example">
    <a href="<?php echo base_url().'login/home';?>" class="btn primary ">Home</a>|
    <!-- <a href="<?php echo base_url().'login/education';?>" class="btn primary">Education</a>|
    <a href="<?php echo base_url().'login/interest';?>" class="btn primary">Interest</a>|
    <a href="<?php echo base_url().'login/job';?>" class="btn primary">Job</a>|
    <a href="<?php echo base_url().'lists/domain';?>" class="btn primary">Domain</a>| -->
    <a target="_top" href="<?php echo base_url().'backs/donate';?>" class="btn primary ">donate</a>|
    <a href="<?php echo base_url().'backs/about';?>" class="btn primary ">about</a>|
    <a href="<?php echo base_url().'backs/centre';?>" class="btn primary ">centre</a>|
    <a href="<?php echo base_url().'backs/news';?>" class="btn primary ">news</a>|
    <a href="<?php echo base_url().'backs/product';?>" class="btn primary ">product</a>|
    <a href="<?php echo base_url().'backs/motto';?>" class="btn primary ">motto</a>|
    <a href="<?php echo base_url().'backs/footer';?>" class="btn primary ">footer</a>|
    <a href="<?php echo base_url().'login/popup';?>" class="btn primary">popup</a>
    <hr>
    </div>
<br>
