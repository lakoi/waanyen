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
        .home-hover:hover{
          background-color: rgba(22, 83, 120, 0.9);
          color:white;
          text-decoration: none;
        }
        .txt-hover-warning
        {
          color: white;
        }
        .txt-hover-warning:hover
        {
          color: yellow;
        }
        .txt-hover-danger
        {
          color: white;
        }
        .txt-hover-danger:hover
        {
          color: red;
        }
    </style>
  </head>
  <body class="bg-light">
    <?php $about = $this->session->userdata('Status');
    switch($about)
    {
      case "HIGH_ADMIN" :
      {?>
    <div class="btn-group-lg container" role="group" aria-label="Basic example">
    <a href="<?php echo base_url().'login/home';?>" class="btn primary ">Home</a>|

    <div class="btn-group">
      <button type="button" class="btn primary dropdown-toggle" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
        Centre
      </button>
      <div class="dropdown-menu">
        <a class="dropdown-item" href="<?php echo base_url().'backs_centre/about/1';?>">โรงเรียนสอนคนตาบอดกรุงเทพ</a>
        <a class="dropdown-item" href="<?php echo base_url().'backs_centre/about/2';?>">ศูนย์พัฒนาสมรรถภาพคนตาบอด</a>
        <a class="dropdown-item" href="<?php echo base_url().'backs_centre/about/3';?>">ศูนย์เทคโนโลยีการศึกษาเพื่อคนตาบอด</a>
        <a class="dropdown-item" href="<?php echo base_url().'backs_centre/about/4';?>">ศูนย์ฝึกอาชีพหญิงตาบอดสามพราน</a>
        <a class="dropdown-item" href="<?php echo base_url().'backs_centre/about/5';?>">ศูนย์พัฒนาอาชีพคนตาบอด</a>
      </div>
    </div>|
    <a href="<?php echo base_url().'login/popup';?>" class="btn primary">popup</a>
    <hr>
    </div>
    <?php break;
      }
      case "ADMIN_FONT" :
      {?>
      <div class="btn-group-lg container" role="group" aria-label="Basic example">
      <a href="<?php echo base_url().'login/home';?>" class="btn primary ">Home</a>|
      <a href="<?php echo base_url().'login/popup';?>" class="btn primary">popup</a>
      <hr>
      </div>
    <?php break;
      }
      case "ADMIN(โรงเรียนสอนคนตาบอดกรุงเทพ)" :
      {?>
      <div class="btn-group-lg container" role="group" aria-label="Basic example">
      <div class="btn-group">
        <a href="<?php echo base_url().'backs/centre';?>" class="btn primary">centre</a>
        <button type="button" class="btn primary dropdown-toggle dropdown-toggle-split" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
          Centre
        </button>
        <div class="dropdown-menu">
          <a class="dropdown-item" href="<?php echo base_url().'backs_centre/about/1';?>">โรงเรียนสอนคนตาบอดกรุงเทพ</a>
        </div>
      </div>|
      <hr>
      </div>
      <?php break;
        }
        case "ADMIN(ศูนย์พัฒนาสมรรถภาพคนตาบอด)" :
        {?>
        <div class="btn-group-lg container" role="group" aria-label="Basic example">
        <div class="btn-group">
          <button type="button" class="btn primary dropdown-toggle" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
            Centre
          </button>
          <div class="dropdown-menu">
            <a class="dropdown-item" href="<?php echo base_url().'backs_centre/about/2';?>">ศูนย์พัฒนาสมรรถภาพคนตาบอด</a>
          </div>
        </div>|
        <hr>
        </div>
      <?php break;
        }
        case "ADMIN(ศูนย์เทคโนโลยีการศึกษาเพื่อคนตาบอด)" :
        {?>
        <div class="btn-group-lg container" role="group" aria-label="Basic example">
        <div class="btn-group">
          <button type="button" class="btn primary dropdown-toggle" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
            Centre
          </button>
          <div class="dropdown-menu">
            <a class="dropdown-item" href="<?php echo base_url().'backs_centre/about/3';?>">ศูนย์เทคโนโลยีการศึกษาเพื่อคนตาบอด</a>
          </div>
        </div>|
        <hr>
        </div>
      <?php break;
        }
        case "ADMIN(ศูนย์ฝึกอาชีพหญิงตาบอดสามพราน)" :
        {?>
        <div class="btn-group-lg container" role="group" aria-label="Basic example">
        <div class="btn-group">
          <button type="button" class="btn primary dropdown-toggle" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
            Centre
          </button>
          <div class="dropdown-menu">
            <a class="dropdown-item" href="<?php echo base_url().'backs_centre/about/4';?>">ศูนย์ฝึกอาชีพหญิงตาบอดสามพราน</a>
          </div>
        </div>|
        <hr>
        </div>
      <?php break;
        }
        case "ADMIN(ศูนย์พัฒนาอาชีพคนตาบอด)" :
        {?>
        <div class="btn-group-lg container" role="group" aria-label="Basic example">
        <div class="btn-group">
          <button type="button" class="btn primary dropdown-toggle" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
            Centre
          </button>
          <div class="dropdown-menu">
            <a class="dropdown-item" href="<?php echo base_url().'backs_centre/about/5';?>">ศูนย์พัฒนาอาชีพคนตาบอด</a>
          </div>
        </div>|
        <hr>
        </div>
        <?php break;
          }
        }?>
