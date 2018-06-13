<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <link href='https://fonts.googleapis.com/css?family=Kanit:400,300&subset=thai,latin' rel='stylesheet' type='text/css'>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
    <title>waanyen</title>
    <style>
        body
        {
          font-family: "Kanit", sans-serif;
          color: black;
          font-weight: normal;
        }
        .form-control
        {
          opacity: 0.9;
        }
        textarea
        {
          resize:none;
        }
        .asd
        {
           width: 300px;
           /* border:3px solid #00ACEE; */
           overflow: hidden;
           white-space: normal;
           text-overflow: ellipsis;
           word-wrap: break-word;
        }
    </style>
  </head>
  <body class="bg-light">
    <div class="btn-group-lg container" role="group" aria-label="Basic example">
    <a href="<?php echo base_url().'login/home';?>" class="btn primary ">Home</a>|
    <!-- <a href="<?php echo base_url().'login/education';?>" class="btn primary">Education</a>|
    <a href="<?php echo base_url().'login/interest';?>" class="btn primary">Interest</a>|
    <a href="<?php echo base_url().'login/job';?>" class="btn primary">Job</a>|
    <a href="<?php echo base_url().'lists/domain';?>" class="btn primary">Domain</a>| -->
    <a target="_top" href="<?php echo base_url().'backs/slide';?>" class="btn primary ">slide</a>|
    <a href="<?php echo base_url().'backs/about';?>" class="btn primary ">about</a>|
    <!-- <a href="<?php echo base_url().'backs/centre';?>" class="btn primary ">centre</a>| -->
    <div class="btn-group">
  <a href="<?php echo base_url().'backs/centre';?>" class="btn primary">centre</a>
  <button type="button" class="btn primary dropdown-toggle dropdown-toggle-split" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
    <span class="sr-only">Toggle Dropdown</span>
  </button>
  <div class="dropdown-menu">
    <a class="dropdown-item" href="<?php echo base_url().'backs_centre/about/1';?>">โรงเรียนสอนคนตาบอดกรุงเทพ</a>
    <a class="dropdown-item" href="<?php echo base_url().'backs_centre/about/2';?>">ศูนย์พัฒนาสมรรถภาพคนตาบอด</a>
    <a class="dropdown-item" href="<?php echo base_url().'backs_centre/about/3';?>">ศูนย์เทคโนโลยีการศึกษาเพื่อคนตาบอด</a>
    <a class="dropdown-item" href="<?php echo base_url().'backs_centre/about/4';?>">ศูนย์ฝึกอาชีพหญิงตาบอดสามพราน</a>
    <a class="dropdown-item" href="<?php echo base_url().'backs_centre/about/5';?>">ศูนย์พัฒนาอาชีพคนตาบอด</a>
  </div>
</div>
    |<a href="<?php echo base_url().'backs/news';?>" class="btn primary ">news</a>|
    <a href="<?php echo base_url().'backs/product';?>" class="btn primary ">product</a>|
    <a href="<?php echo base_url().'backs/join';?>" class="btn primary ">join</a>|
    <a href="<?php echo base_url().'backs/footer';?>" class="btn primary ">footer</a>|
    <a href="<?php echo base_url().'login/popup';?>" class="btn primary">popup</a>
    <hr>
    </div>
<br>
