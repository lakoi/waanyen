<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>

    <title>waanyen</title>
    <style> /*donate*/
      .donate-frame
      {
        position: relative;
        height: 540px;
        max-width:2000px;
        padding:0px;
      }
      .donate-item
      {
        height: 540px;
      }
      .donate-background
      {
        position:absolute;
      }
      .donate-content
      {
        color:white;
        width:100%;
        margin: auto;
        position:absolute;
        z-index:99;
        top: 40%;
      }
      .donate-title
      {
        font-size: 24px;
        border:2px solid #ffffff;
        padding:10px;
        max-width:500px;
        float:center;
        margin:auto;
      }
      .donate-text
      {
        font-size: 18px;
      }
      .donate-button
      {
        border-radius: 25px;
      }
    </style>
    <style>/*about*/
      .about-outside-frame
      {
        position: relative;
        background-image:url('<?php echo base_url(). 'img/images/background2.jpg';?>');
        background-repeat: no-repeat;
        background-size: 100% 100%;
        /* height:auto; */
        padding:0px;
        max-width:2000px;
      }
      .about-frame
      {
        position:relative;
        padding:100px 0px 15px 0px;
      }
      .about-content-frame
      {
        position:relative;
        background-color: #d7efed;
        border-radius: 15px;
        padding: 20px;
      }
      .about-head-frame
      {
        border-left: 4px solid #2a67b7;
      }
      .about-head
      {
        margin: 10px;
      }
      .about-image
      {
        margin-top: 20px;
        margin-bottom: 20px;
        max-width: 100%;
        max-height: 300px;
      }
      .about-content
      {
        word-wrap:break-word;
      }
      .about-more
      {
        text-decoration: none;
        color: white; font-size: 0.8em;
        padding: 10px; margin-bottom: 20px;
        background-color: #34a0e1;
        position: relative;
      }
      .about-more:hover
      {
        text-decoration: none;
        color: white; font-size: 1em;
        padding: 10px; margin-bottom: 20px;
        background-color: #34a0e1;
        position: relative;
      }
    </style>
    <style>/*news*/

    </style>
    <style>
        .qw:hover{
          background: rgba(22, 83, 120, 0.9);
          display: block;
        }
        .as:hover
        {
          background-color: #d7efed;
          border-left: 4px solid #165378;
          /* border-color: lime; */
        }
        body{
          color: black;
          font-size: 1em;
        }
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
          .boxnews{
          font-size: 1em;
          /* padding-top: 7px; */
          padding-bottom: 5px;
          text-indent: 25px;
          position: relative;
          max-height: 70px;
          overflow: hidden;
        }
          .boxnewsFade {
          position: absolute;
          left: 0;
          bottom: 0;
          width: 100%;
          z-index: 1;
          height: 40px;
          display: inline-block;
          background: -webkit-linear-gradient(left, rgba(255,255,255,0), rgba(255,255,255,1));
          background: -o-linear-gradient(right, rgba(255,255,255,0), rgba(255,255,255,1));
          background: -moz-linear-gradient(right, rgba(255,255,255,0), rgba(255,255,255,1));
          background: linear-gradient(to bottom, rgba(255,255,255,0), rgba(255,255,255,1));
      }
      .list-footer
      {
        color:white;
        text-decoration: none;
      }
      .list-footer:hover
      {
        color:orange;
        text-decoration: none;
      }
      .list-news
      {
        color:black;
        text-decoration: none;
      }
      .list-news:hover
      {
        color:black;
        text-decoration: none;
      }
      .prev,
      .next
      {
        height: 40px;
        width: 40px;
        outline: black;
        background-size: 100%, 100%;
        border-radius: 50%;
        border: 2px solid blue;
        background-image: none;
      }

      .next:after
      {
        content: '>';
        font-weight: bold;
        font-size: 22px;
        color: blue;
      }

      .prev:after
      {
        content: '<';
        font-weight: bold;
        font-size: 22px;
        color: blue;
      }
      .header-nav
      {
        color:white;
      }
      .header-nav:hover
      {
        background-color: #007bff;
        border-radius: 25px;
        color:white;
      }
      .header-text::first-line
      {
        color: blue;
        font-size:1.2em;
      }
    </style>
  </head>
  <body>
  <div style="position:absolute; z-index:99; width:100%">
    <div class="container" style="position:relative; z-index:99; color:white;">
      <div class="row">
        <div class="col-sm-5" >
          <div class="row">
            <div class="col-md-3">
              <img src="<?php echo base_url(). 'img/images/logo.png';?>" wigth="100" height="100" />
            </div>
            <div class="col-md-9" style="font-size:1.1  em; padding:20px 0px;">
                <p class="header-text">มูลนิธิช่วยคนตาบอดแห่งประเทศไทย<br>
                ในพระบรมราชินูปถัมภ์<i class="fal fa-football-ball"></i></p>
            </div>
          </div>
        </div>
        <div class="col-sm-7">
          <div class="row" style="float: right;">
            <div>
              <nav class="navbar navbar-light" >
                <form class="form-inline">
                  <input class="form-control mr-sm-2" type="search" placeholder="Search" aria-label="Search">
                  <button class="btn btn-outline-success my-2 my-sm-0" type="submit">Search</button>
                </form>
              </nav>
            </div>
              <div class="btn-group btn-group-toggle text-right" data-toggle="buttons">
                <label class="btn btn-primary language">
                  <input type="radio" class="language" name="options" id="option1" autocomplete="off" checked> EN
                </label>
                <label class="btn btn-primary language focus active">
                  <input type="radio" class="language" name="options" id="option2" autocomplete="off"> TH
                </label>
              </div>
            </div>
          <ul class="nav "style=" float: right;">
            <li class="nav-item">
              <a class="nav-link header-nav" href="#">หน้าแรก</a>
            </li>
            <li class="nav-item">
              <a class="nav-link header-nav" href="#">เกี่ยวกับเรา</a>
            </li>
            <li class="nav-item">
              <a class="nav-link header-nav" href="#">ศูนย์ต่างๆ</a>
            </li>
            <li class="nav-item">
              <a class="nav-link header-nav" href="#">ข่าวสาร</a>
            </li>
            <li class="nav-item">
              <a class="nav-link header-nav" href="#">อาสาสมัคร</a>
            </li>
            <li class="nav-item">
              <a class="nav-link header-nav" href="#">บริจาค</a>
            </li>
          </ul>
        </div>
      </div>
    </div>
  </div>
