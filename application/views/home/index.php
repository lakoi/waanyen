<header>
<div id="carouselExampleFade" class="carousel slide carousel-fade" data-ride="carousel" style="position: relative; height: 100vh;">
  <div class="carousel-inner">
    <div class="carousel-item active" style="height: 100vh;">
      <div class="text-center" style="position:absolute; ">
      <img class="d-block w-100 h-100" src="<?php echo base_url(). 'img/test1.jpg';?>" alt="First slide">
      </div>
      <div class="text-center" style="position:relative; top: 40% ">
          <div class="" style="font-size: 3vw;">
            <p id="donate_bd">xxxxxxxxxx</p>
          </div>
          <div class="" style="font-size: 2vw;">
            <p id="donate1">xxxxxxxxxxxxx</p>
            <p id="donate2">xxxxxxxxxxxxxxx</p>
          </div>
          <div>
            <a class="btn btn-primary" href="<?php echo base_url(). 'login/index';?>">login</a>
            <button type="button" class="btn btn-primary" id="donate_bt">xxxxxxxx</button>
          </div>
        </div>
        </div>
    <div class="carousel-item" style="height: 100vh ">
      <div>
      <img class="d-block w-100 h-100" src="<?php echo base_url(). 'img/test2.jpg';?>" alt="Second slide">
    </div>
    </div>
    <div class="carousel-item" style="height: 100vh">
      <img class="d-block w-100" src="<?php echo base_url(). 'img/test1.jpg';?>" alt="Third slide">
    </div>
  </div>
  <a class="carousel-control-prev" href="#carouselExampleFade" role="button" data-slide="prev">
    <span class="carousel-control-prev-icon" aria-hidden="true"></span>
    <span class="sr-only">Previous</span>
  </a>
  <a class="carousel-control-next" href="#carouselExampleFade" role="button" data-slide="next">
    <span class="carousel-control-next-icon" aria-hidden="true"></span>
    <span class="sr-only">Next</span>
  </a>
</div>
</header>

  <div style="position:relative; height: 100vh; width: 100vw;">
    <div style="position:absolute; height: 100vh; width: 100vw;">
      <img class="d-block w-100 h-100" src="<?php echo base_url(). 'img/test2.jpg';?>">
    </div>
    <div class="row" style="padding-top: 80px; padding-bottom: 80px;">
      <div class="col-sm-4 offset-2">
        <div class="border" style="background-color: #d7efed;  border-radius: 15px;">
          <div style="padding: 20px;">
          <div style="border-left: 4px solid #2a67b7;">
            <div style="margin: 10px;">
              <h4 id="about_head"></h4>
            </div>
          </div>
          <div class="border" style="margin-top: 20px; margin-bottom: 20px; max-width: 100%; max-height: 200px;">
            <img class="w-100" id="" src="<?php echo base_url(). 'img/test1.jpg';?>" height="200"/>
          </div>
          <p id="about_motto" style="font-size: 0.75em; font-weight: bold;"></p>
          <p id="about_content" style="font-size: 0.8em; word-wrap:break-word;"></p>
        </div>
          <div class="offset-8  text-center" style="font-size: 0.8em; padding: 5px; margin-bottom: 20px; background-color: #2a81b7; position: relative;">
            <a href="#" style="text-decoration: none; color: white;">รายละเอียดเพิ่มเติม</a>
          </div>
        </div>

      </div>
      <div class="col-sm-4">
          <div style=" height: 90px;">
            <div class="row">
              <div class="col-sm-6">
                <br>
                <div style="background-color: #2a81b7; padding: 10px; color: white;">
                  ข่าวสารต่างๆ
                </div>
              </div>
              <div class="col-sm-6 text-right">
                <br>
                <br>
                <a href="#" style="text-decoration: none;">ข่าวทั้งหมด ></a>
              </div>
            </div>
          </div>
        <div class="">
          <ul class="list-group">
            <?php if(isset($news)):?>
              <?php foreach ($news as $r) {?>
            <li id="<?php echo $r->id_news;?>" class="list-group-item as" style="display: block; position: relative; height: 150px;">
              <div style="padding: 10px;">
                <div class="row">
                  <div style="padding-right: 10px;">
                    <img src="<?php echo base_url(). 'img/'.$r->news_pto;?>" width="110" height="110" >
                  </div>
                  <div style="word-wrap:break-word; width: 280px;">
                    <div style="white-space: nowrap;  overflow: hidden; text-overflow: ellipsis;">
                      <b><?php echo $r->news_title;?></b>
                    </div>
                    <span><?php echo date('d M Y',strtotime($r->news_time));?></span>
                    <div style="font-size: .8em; display: -webkit-box; -webkit-line-clamp: 3; -webkit-box-orient: vertical; overflow: hidden;">
                      <?php echo $r->news_content;?>
                    </div>
                  </div>
                </div>
              </div>
            </li>
          <?php }?>
        <?php endif;?>
          </ul>
        </div>
      </div>
    </div>
  </div>
<br>
  <div class="col-sm-8 offset-2">
    <div class="col-sm-3" style="background-color: #2a81b7; padding: 10px; color: white;">
      ศูนย์ต่างๆ
    </div><br>
    <div class="row">
      <?php if(isset($centre)):?>
        <!-- <?php $n = "1";?> -->
        <?php foreach ($centre as $r)
        {?>
          <!-- <?php echo $n;?> -->
          <div class="border" style="position: relative; z-index: 1; height: 270px; width: 179px; ">
            <div class="border" style="position: absolute; z-index: 2; height: 250px; max-width: 160px; margin: 10px; background-image: url('<?php echo base_url().'img/'.$r->centre_pto;?>'); background-position: center; background-size: auto 100%; display:table;">
              <div class="qw" id="<?php echo $r->id_centre;?>" style="word-wrap:break-word; margin: auto; max-width: 160px; text-align:center; display:table-cell; vertical-align:middle; ">
                <p style="color:white; font-size: 14px; font-weight: bold;"><?php echo $r->centre_title;?></p>
                <div class="we" id="<?php echo $r->id_centre;?>" style="display:none;">
                <p style="font-size: 14px; word-wrap:break-word; display:block;"><?php echo $r->centre_content;?></p>
                <a href="#" style="color:white; text-decoration: none; border: 2px solid #ffffff; padding:5px;">เพิ่มเติม</a>
              </div>
              </div>
            </div>
          </div>
        <?php };?>
      <?php endif;?>
    </div>
  </div>

  <!-- <br>
  <div class="offset-1 text-center">
    <div class="col-sm-10">
      <div class="row">
        <div class="col-sm-4" style="position: relative; display:table; width: 330px; height: 270px;">
          <div style="position:relative; display:table-cell; vertical-align:middle;">
          <p>ศูนย์ต่าง ๆ ของ</p>
          <p>มูลนิธิช่วยคนตาบอด</p>
        </div>
        </div>
        <div class="col-sm-4">
          <div class="centre-img1 border">
            <div class="centre-pto">
              <img id="centre_pto1" src="<?php echo base_url(). 'img/show_photo.png';?>" width="330" height="270" />
            </div>
            <div class="border centre-txt1">
              <div class="centre-mid" style="padding-left: 5px; padding-right: 5px;">
                <div style="padding-left: 40px; padding-right: 40px;">
                <p><b id="centre_area11">adasdfsdf</b></p>
              </div>
                <p id="centre_area12">asdfasdfd</p>
                <button class="btn btn-primary" id="centre_bt1">อ่านเพิ่มเติม</button>
              </div>
            </div>
          </div>
        </div>
        <div class="col-sm-4">
          <div class="centre-img1 border">
            <div class="centre-pto">
              <img id="centre_pto2" src="<?php echo base_url(). 'img/show_photo.png';?>" width="330" height="270" />
            </div>
            <div class="border centre-txt1" >
              <div class="centre-mid">
                <div style="padding-left: 40px; padding-right: 40px;">
                <p><b id="centre_area21">adasf</b></p>
              </div>
                <p id="centre_area22">asdfasdfd</p>
                <button class="btn btn-primary" id="centre_bt2">อ่านเพิ่มเติม</button>
              </div>
            </div>
          </div>
        </div>
      </div>
      <div class="row">
        <div class="col-sm-4">
          <div class="centre-img1 border">
            <div class="centre-pto">
              <img id="centre_pto3" src="<?php echo base_url(). 'img/show_photo.png';?>" width="330" height="270" />
            </div>
            <div class="border centre-txt1" >
              <div class="centre-mid">
                <p><b id="centre_area31">adasf</b></p>
                <p id="centre_area32">asdfasdfd</p>
                <button class="btn btn-primary" id="centre_bt3">อ่านเพิ่มเติม</button>
              </div>
            </div>
          </div>
        </div>
        <div class="col-sm-4">
          <div class="centre-img1 border">
            <div class="centre-pto">
              <img id="centre_pto4" src="<?php echo base_url(). 'img/show_photo.png';?>" width="330" height="270" />
            </div>
            <div class="border centre-txt1" >
              <div class="centre-mid">
                <p><b id="centre_area41">adasf</b></p>
                <p id="centre_area42">asdfasdfd</p>
                <button class="btn btn-primary" id="centre_bt4">อ่านเพิ่มเติม</button>
              </div>
            </div>
          </div>
        </div>
        <div class="col-sm-4">
          <div class="centre-img1 border">
            <div class="centre-pto">
              <img id="centre_pto5" src="<?php echo base_url(). 'img/show_photo.png';?>" width="330" height="270" />
            </div>
            <div class="border centre-txt1" >
              <div class="centre-mid">
                <p><b id="centre_area51">adasf</b></p>
                <p id="centre_area52">asdfasdfd</p>
                <button class="btn btn-primary" id="centre_bt5">อ่านเพิ่มเติม</button>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
        <img src="<?php echo base_url(). 'img/show_photo.png';?>" wigth="350" height="350" />
  </div>
  <br> -->

  <br>
  <div class="col-sm-12 text-center">
    <div class="row">
      <div class="col-sm-4">
        <p><span class="font-weight-bold">ผลิตภัณฑ์และบริการ</span><br>
        "การสนับสนุนผลิตภัณฑ์ฝีมือคนตาบอด<br>
        เป็นการสร้างอาชีพและให้อนาคต"</p>
      </div>
      <div class="col-sm-7">
          <?php if(isset($product)):?>
          <div id="carouselExampleIndicators" class="carousel slide" data-ride="carousel">
            <div class="carousel-inner">
              <?php $product_r =  array_chunk($product, 3, true);
                    foreach ($product_r as $key) { ?>
                      <?php if(isset($key[0]))
                      {
                        echo "<div class='carousel-item active'>";
                      }
                      else
                      {
                        echo "<div class='carousel-item'>";
                      };?>
                <div class="row">
                  <?php foreach ($key as $arr) {?>
                  <div class="col-sm-4">
                    <div class="card" style="width: 230px; height: 400px;">
                      <img class="card-img-top" src="<?php echo base_url(). 'img/'.$arr->pd_pto;?>" height="220">
                      <div class="card-body">
                        <h5 class="card-title"><?php echo $arr->pd_name;?></h5>
                        <p class="card-text">ราคา <?php echo $arr->pd_price;?> บาท</p>
                        <p class="card-text">ผลิตภัณฑ์จาก:<br>
                        <span><?php echo $arr->pd_from;?></span></p>
                      </div>
                    </div>
                  </div>
                  <?php };?>
                </div>
              </div>
            <?php };?>
            </div>
            <a class="carousel-control-prev" href="#carouselExampleIndicators" role="button" data-slide="prev">
              <span class="carousel-control-prev-icon" aria-hidden="true"></span>
              <span class="sr-only">Previous</span>
            </a>
            <a class="carousel-control-next" href="#carouselExampleIndicators" role="button" data-slide="next">
              <span class="carousel-control-next-icon" aria-hidden="true"></span>
              <span class="sr-only">Next</span>
            </a>
          </div>
        <?php endif;?>
        </div>
    </div>
  </div>
  <br>
  <?php if(isset($motto)):?>
    <?php foreach ($motto as $r)
    {?>
  <div class="text-center">
    <span class="font-weight-bold">"</span>
    <p><?php echo nl2br($r->motto_txt);?></p>
    <div>
      <button type="button" class="btn btn-primary"><?php echo $r->motto_bt;?></button>
    </div>
  </div>
<?php };?>
<?php endif;?>

  <div class="modal fade" id="myModal" role="dialog" >
    <div class="modal-dialog" >
      <div class="modal-content" >
        <div class="modal-header">
          <button type="button" class="close" data-dismiss="modal" aria-label="Close">
            <span aria-hidden="true">&times;</span>
          </button>
        </div>
        <div class="modal-body">
          <div class="container-box" style="width: 30rem; height: 30rem;">
            <?php if (isset($popup)): ?>
            <?php foreach($popup as $r)
            {
              echo "<div class='text-center'>";
              echo  "<div><img src=" .base_url()."img/".$r->photo." width='300' hight='300' id='photo'/></div>";
              echo  "<div id='title'>".$r->title."</div>";
              echo  "</div>";
            }
            ?>
          </div>
          <?php endif; ?>
        </div>
      </div>
    </div>
  </div>
