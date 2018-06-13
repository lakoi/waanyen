<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <link href='https://fonts.googleapis.com/css?family=Kanit:400,300&subset=thai,latin' rel='stylesheet' type='text/css'>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
    <script defer src="https://use.fontawesome.com/releases/v5.0.13/js/all.js" integrity="sha384-xymdQtn1n3lH2wcu0qhcdaOpQwyoarkgLVxC/wZ5q7h9gHtxICrpcaSUfygqZGOe" crossorigin="anonymous"></script>
    <title>waanyen</title>
    <style> /*donate*/
      .donate-frame
      {
        position: relative;
        height: 600px;
        max-width:2000px;
        padding:0px;

      }
      .donate-item
      {
        height: 600px;
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
        top:40%;
      }
      /* .donate-title
      {
        font-size: 24px;
        border:2px solid #ffffff;
        background-color: rgba(0,0,0,0.2);
        padding:10px;
        max-width:500px;
        float:center;

      }
      .donate-text
      {
        font-size: 18px;
        font-weight: lighter;
      }
      .donate-text::first-line
      {
        font-size: 24px;
      }
      .donate-text span
      {
        font-weight:bold;
        color:#5dbfec;
        font-size: 32px;
      }
      .donate-button
      {
        color:white;
        background-color: #227ea8;
        border-radius: 25px;
      }
      .donate-button:hover
      {
        color:white;
        background-color: #5dbfec;
        border-radius: 25px;
      } */
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
        padding: 0px 0px 40px 0px;
      }
      .about-head-frame
      {
        border-left: 4px solid #5dbfec;
      }
      .about-head
      {
        margin: 10px;
        color:#5dbfec;
      }
      .about-head::first-line
      {
        margin: 10px;
        color:black;
      }
      .about-inside-frame
      {
        padding:20px;
      }
      .about-image
      {
        margin-top: 20px;
        margin-bottom: 20px;
        max-width: 100%;
        max-height: 300px;
      }
      .about-title
      {
        font-size:18px;
      }
      .about-content
      {
        word-wrap:break-word;
        /* font-weight: lighter;s */
      }
      .about-more
      {
        text-decoration: none;
        color: white;
        font-size: 16px;
        padding: 10px 20px 10px 40px; margin-bottom: 20px;
        background-image:url('<?php echo base_url(). 'img/images/about/more-about.png';?>');
        background-repeat: no-repeat;
        background-size: 100% 100%;

        /* position: relative; */
      }
      .about-more:hover
      {
        text-decoration: none;
        color: #227ea8;
        font-size: 16px;
        padding: 10px 20px 10px 40px; margin-bottom: 20px;
        background-image:url('<?php echo base_url(). 'img/images/about/more-about.png';?>');
        background-size: 100% 100%;
        /* position: relative; */
      }
    </style>
    <style>/*news*/
      .news-title
      {
        text-decoration: none;
        color:black;
      }
      .news-title:hover
      {
        text-decoration: none;
        color:#007bff;
      }
    </style>
    <style>/*product*/
      .head-product
      {
        color:#227ea8;
        font-size:24px;
        text-decoration: none;
        font-weight:bold;
      }
      .head-product:hover
      {
        color:#5dbfec;
        font-size:24px;
        text-decoration: none;
        font-weight:bold;
      }
      .card-product
      {
        box-shadow:0 0px 10px 0 rgba(0, 0, 0, 0.08);
      }
      .all-product
      {
        color:white;
        background-color:#227ea8;
        border-radius: 25px;
      }
      .all-product:hover
      {
        color:white;
        background-color:#5dbfec;
        border-radius: 25px;
      }
    </style>
    <style>/*join*/
      .head-join::first-line
      {
        font-size:50px;
        font-weight: bold;
        color:#5193ca;
      }
      .join-border-left
      {
        border-left: 1px solid #eee;
      }
      .join-border-bottom
      {
        border-bottom: 1px solid #eee;
      }
      .join-title
      {
        font-size:24px;
        text-decoration: none;
        color:#227ea8;
      }
      .join-title:hover
      {
        font-size:24px;
        text-decoration: none;
        color:#5dbfec;
      }
    </style>
    <style>
        .qw
        {
          background: rgba(0, 0, 0, 0.3);
        }
        .qw:hover{
          background: rgba(22, 83, 120, 0.9);
          display: block;
        }
        .as:hover
        {
          background-color: #d7efed;
          border-left: 5px solid #227ea8;
          padding-left: 16px;
          /* border-color: lime; */
        }
        body{
          font-family: "Kanit", sans-serif;
          color: black;
          font-weight: normal;
        }
        .font-normal
        {
          font-family: "normal", sans-serif;
          line-height: 1.2;
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
          font-s/ize: 1em;
          /* padding-top: 7px; */
          /* padding-bottom: 5px; */
          text-indent: 25px;
          position: relative;
          max-height: 250px;
          overflow: hidden;
          word-wrap:break-word;
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
        border: 2px solid #227ea8;
        background-image: none;
      }

      .next:after
      {
        content: '>';
        font-weight: bold;
        font-size: 22px;
        color: #227ea8;
      }

      .prev:after
      {
        content: '<';
        font-weight: bold;
        font-size: 22px;
        color: #227ea8;
      }
      .header-nav
      {
        color:white;
      }
      .header-nav:hover
      {
        background-color: #5dbfec;
        border-radius: 25px;
        color:white;
      }
      .header-text
      {
        color: white;
        font-size:18px;
      }
      .header-text::first-line
      {
        color: #5dbfec;
        font-size:22px;
        /* font-weight:bold; */
      }
    </style>
    <style>/*footer*/
      .footer-title::first-line
      {
        color: #5dbfec;
        font-size:1.2em;
        font-weight:bold;
      }
    </style>
    <style>/*head about*/
    .head-about-list:hover
    {
      background-color: #3a99c4;
    }
    .head-about-link
    {
      color:black;
    }
    .head-about-link:hover
    {
      color:white;
    }

    </style>
    <style>
    .date-news::first-line
    {
      color: #5dbfec;
    }
    </style>
  </head>
  <body class="body">
    <?php if(isset($slide)):?>
      <div style="position:absolute; z-index:99; width:100% ">
        <div class="container" style="position:relative; z-index:99; color:white;">
    <?php endif;?>

    <?php if(empty($slide)):?>
      <div class="container-fluid" style="position:relative; z-index:99; max-width:2000px; padding-left:0px; background-image:url('<?php echo base_url(). 'img/images/background.jpg';?>'); background-size:100% 300%;">
        <div class="row">
          <div class="container" style="position:relative; z-index:99; color:white; ">
    <?php endif;?>

            <div class="row">
              <div class="col-lg-5 col-md-12 col-sm-12" >
                <div class="row">
                  <div class="col-md-3">
                    <img src="<?php echo base_url(). 'img/images/logo.png';?>" wigth="100" height="100" />
                  </div>
                  <div class="col-md-9" style="padding:20px 0px;">
                    <p class="header-text">มูลนิธิช่วยคนตาบอดแห่งประเทศไทย<br>
                    ในพระบรมราชินูปถัมภ์</p>
                  </div>
                </div>
              </div>
              <div class="col-lg-7 col-md-12 col-sm-12">
                <div class="row" style="float: right;">
                  <div class="col-md-10">
                    <div class="header-toolbar col-md-12" style="background-image:url('<?php echo base_url(). 'img/images/toolbar.png';?>'); background-size:100% 100%; padding:5px 20px 5px 35px; width:420px;">
                      <div class="row">
                        <div>
                          <span style="color:#227ea8;">ขนาดตัวหนังสือ</span>
                          <a href="#"><i class="fas fa-font" style="font-size:12px;"></i></a>
                          <a href="#"><i class="fas fa-font" style="font-size:16px;"></i></a>
                          <a href="#"><i class="fas fa-font" style="font-size:18px;"></i></a>
                        </div>
                        <div style="border-left:1px solid #dddddd; margin:0px 20px 0px 5px; padding-left:5px; ">
                          <span style="color:black">เปลี่ยนสี</span>
                          <a href="#" style="opacity:0.3;"><img src="<?php echo base_url(). 'img/images/change-color.png';?>"/></a>
                          <a href="#" style="opacity:0.6;"><img src="<?php echo base_url(). 'img/images/change-color.png';?>"/></a>
                          <a href="#" style="opacity:1;"><img src="<?php echo base_url(). 'img/images/change-color.png';?>"/></a>
                        </div>
                        <div>
                          <a href="#"><i class="fas fa-search" style="color:white;"></i></a>
                        </div>
                      </div>
                    </div>
                    <div class="header-search" style="display:none">
                      <nav class="navbar navbar-light" >
                        <form class="form-inline">
                          <input class="form-control mr-sm-2" type="search" placeholder="Search" aria-label="Search">
                          <button class="btn btn-outline-success my-2 my-sm-0" type="submit">Search</button>
                        </form>
                      </nav>
                    </div>
                  </div>
                  <div class="col-md-2">
                    <div class="row text-center" style="font-family: 'normal', sans-serif;">
                      <div class="" style="background-color:#227ea8;">
                        <a href="#" style="color:white; text-decoration: none; padding:5px 2px 5px 2px;">EN</a>
                      </div>
                      <div class="" style="background-color: black;">
                        <a href="#" style="color:white; text-decoration: none; padding:5px 2px 5px 2px;">TH</a>
                      </div>
                    </div>
                  </div>
                </div><br><br>
                <div class="col-md-12" style="padding-top:20px;">
                  <ul class="nav "style=" float: right; font-weight: lighter;">
                    <li class="nav-item">
                      <a class="nav-link header-nav" href="<?php echo base_url().'';?>">หน้าแรก</a>
                    </li>
                    <li class="nav-item">
                      <a class="nav-link header-nav" href="<?php echo base_url().'about/about';?>">เกี่ยวกับเรา</a>
                    </li>
                    <li class="nav-item">
                      <a class="nav-link header-nav" href="<?php echo base_url().'centre/centre';?>">ศูนย์ต่างๆ</a>
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

          <?php if(empty($slide)):?>
          </div>
        </div>
      </div>
      <div class="container-fluid" style="background-color:; max-width:2000px; box-shadow: 0 4px 8px 0 rgba(0, 0, 0, 0.2)">
        <div class="container" >
          <div class="row">
            <div class="col-md-12" style="padding:10px 0px 10px 15px;">
              <span >คุณอยู่ที่นี่ : หน้าแรก >> ศูนย์ต่างๆ</span>
            </div>
          </div>
        </div>
      </div>
    <?php endif;?>
          <?php if(isset($slide)):?>
          </div>
        </div>
      <?php endif;?>
