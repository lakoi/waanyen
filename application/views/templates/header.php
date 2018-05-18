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
          color: white;
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
          opacity: 0.8;
          background-color: #4495ff;
        }
        .centre-mid
        {
          z-index: 20;
          position: relative;
          display:table-cell;
          vertical-align:middle;
        }
        .centre-mid:hover
        {
          opacity: 1;
        }
        .centre-pto
        {
          position: absolute;
          left: 0; top: 0;
          z-index: 0;
        }
    </style>
  </head>
  <body class="bg-light" >
<div style="position:relative; z-index: 1;" >
  <div>
  <div class="col-sm-12 offset-1 mi-auto">
    <div class="row">
      <div class="col-sm-4">
        <div class="row">
          <div>
            <img src="<?php echo base_url(). 'img/show_photo.png';?>" wigth="100" height="100" />
          </div>
          <div>
            <br>
              <b>มูลนิธิช่วยคนตาบอดแห่งประเทศไทย</b>
            <br>ในพระบรมราชินูปถัมภ์
          </div>
        </div>
      </div>
      <div class="col-sm-8">
        <div class="offset-2 text-right">
          <div class="row">
            <div>
              <nav class="navbar navbar-light">
                <form class="form-inline">
                  <input class="form-control mr-sm-2" type="search" placeholder="Search" aria-label="Search">
                  <button class="btn btn-outline-success my-2 my-sm-0" type="submit">Search</button>
                </form>
              </nav>
            </div>
              <div class="btn-group btn-group-toggle text-right" data-toggle="buttons">
                <label class="btn btn-secondary ">
                  <input type="radio" name="options" id="option1" autocomplete="off" checked> EN
                </label>
                <label class="btn btn-secondary active">
                  <input type="radio" name="options" id="option2" autocomplete="off"> TH
                </label>
              </div>
          </div>
        </div>
        <ul class="nav ">
          <li class="nav-item">
            <a class="nav-link" href="#">หน้าแรก</a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="#">เกี่ยวกับเรา</a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="#">ศูนย์ต่างๆ</a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="#">ข่าวสาร</a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="#">อาสาสมัคร</a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="#">บริจาค</a>
          </li>
        </ul>
      </div>
    </div>
  </div>
</div>
</div>
<br>
