<br>
<br>
<br>
<br>
<br>
<div style="position: relative;">
  <div class="text-center" style="position:absolute; opacity: 0.4; margin-top: -250px; width: 100%; height: 650px; overflow: hidden;">
    <img src="<?php echo base_url(). 'img/test1.jpg';?>" id="donate_pto" name="donate_pto"/>
  </div>
  <div class="text-center" style="position:relative; z-index:1;">
    <div class="col-sm-6 offset-3 border align-bottom">
      <p id="donate_bd">xxxxxxxxxx</p>
      <?php

        $date = date("Y-m-d");
        $time = date("H:i:s");

        echo $date."  ".$time;

    ?>
    </div>
    <div class="col-sm-6 offset-3">
      <p id="donate1">xxxxxxxxxxxxx</p>
      <p id="donate2">xxxxxxxxxxxxxxx</p>
    </div>
    <div>
      <a class="btn btn-primary" href="<?php echo base_url(). 'login/index';?>">login</a>
      <button type="button" class="btn btn-primary" id="donate_bt">xxxxxxxx</button>
    </div>
  </div>
</div>
<br>
<br>
<br>
<br>
<br>
<br>
    <br>
  <div class="text-center col-sm-10 offset-1">
    <div class="btn-group btn-group-toggle" data-toggle="buttons">
      <label class="btn btn-secondary">
        <input type="radio" name="options" id="option1" autocomplete="off" checked>
        <div class="text-center">
          <img src="<?php echo base_url(). 'img/show_photo.png';?>" wigth="80" height="80" />
          <p><b>อาสาสมัคร</b><br>
            ร่วมเป็นจิตอาสามาในการช่วยเหลือ
          </p>
        </div>
      </label>
      <label class="btn btn-secondary">
        <input type="radio" name="options" id="option2" autocomplete="off">
        <div class="text-center">
          <img src="<?php echo base_url(). 'img/show_photo.png';?>" wigth="80" height="80" />
          <p><b>ร่วมสนับสนุนกิจกรรม</b><br>
            กิจกรรมส่งเสริมผู้พิการทางสายตา
          </p>
        </div>
      </label>
      <label class="btn btn-secondary">
        <input type="radio" name="options" id="option3" autocomplete="off">
        <div class="text-center">
          <img src="<?php echo base_url(). 'img/show_photo.png';?>" wigth="80" height="80" />
          <p><b>ผลิตภัณฑ์และบริการ</b><br>
            สนับสนุนผลิตภัณฑ์ฝีมือคนตาบอด
          </p>
        </div>
      </label>
      <label class="btn btn-secondary">
        <input type="radio" name="options" id="option3" autocomplete="off">
        <div class="text-center">
          <img src="<?php echo base_url(). 'img/show_photo.png';?>" wigth="80" height="80" />
          <p><b>ร่วมบริจาค</b><br>
            ส่งเสริมและพัฒนาอาชีพ
          </p>
        </div>
      </label>
    </div>
  </div>
  <br>
  <div class="row">
    <div class="col-sm-5 offset-1">
      <div class="col-sm-8 offset-1" >
        <p id="about_tle" class="text-center"></p>
        <hr width="20%">
        <h5 id="about_h1"></h5>
        <h5 id="about_h2"></h5>
        <p id="about_ui"></p>
        <ui>
          <li id="about_li1"></li>
          <li id="about_li2"></li>
          <li id="about_li3"></li>
          <li id="about_li4"></li>
        </ui>
      </div>
    </div>
    <div class="col-sm-5">
      <img id="about_pto1" src="<?php echo base_url(). 'img/show_photo.png';?>" width="200" height="200" />
    </div>
  </div>
  <br>
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
        <!-- <img src="<?php echo base_url(). 'img/show_photo.png';?>" wigth="350" height="350" /> -->
  </div>
  <br>
  <div class="col-sm-10 offset-1">
    <p class="text-center">ข่าวสาร<span class="text-success">มูลนิธิ</span></p>
    <hr width="20%" style="color: #fff">
    <div class="row">
      <?php if(isset($news)):?>
        <?php foreach ($news as $r) {?>
          <div class="col-sm-4">
            <div class="card" style="width: 330px; height: 500px;">
              <img class="card-img-top" src="<?php echo base_url(). 'img/'.$r->news_pto;?>" width="300" height="250">
              <div class="card-body">
                <h5 class="card-title"><?php echo $r->news_title;?></h5>
                <p>Post by <?php echo $r->news_post;?></p>
                <div style="height: 73px; overflow: hidden; word-wrap: break-word;" class="border">
                  <p class="card-text"><?php echo $r->news_content;?></p>
                </div>
                <a href="#" class="btn btn-primary"><?php echo $r->news_bt;?></a>
              </div>
            </div>
          </div>
        <?php }?>
      <?php endif;?>
    </div>
  </div>
  <br>
  <div class="col-sm-12 text-center">
    <div class="row">
      <div class="col-sm-4">
        <p><span class="font-weight-bold">ผลิตภัณฑ์และบริการ</span><br>
        "การสนับสนุนผลิตภัณฑ์ฝีมือคนตาบอด<br>
        เป็นการสร้างอาชีพและให้อนาคต"</p>
      </div>
      <div class="col-sm-7">
        <div>
          <div id="carouselExampleIndicators" class="carousel slide" data-ride="carousel">
            <div class="carousel-inner">
              <div class="carousel-item active">
                <div class="row">
                  <div class="col-sm-4">
                    <div class="card" style="width: 230px; height: 400px;">
                      <img class="card-img-top" src="<?php echo base_url(). 'img/test1.jpg';?>" height="220">
                      <div class="card-body">
                        <h5 class="card-title">Card title</h5>
                        <p class="card-text">ราคา  บาท</p>
                        <p class="card-text">ผลิตภัณฑ์จาก:<br>
                        <span>asd</span></p>
                      </div>
                    </div>
                  </div>
                  <div class="col-sm-4">
                    <div class="card" style="width: 230px;">
                      <img class="card-img-top" src="<?php echo base_url(). 'img/show_photo.png';?>" alt="Card image cap">
                      <div class="card-body">
                        <h5 class="card-title">Card title</h5>
                        <p class="card-text">ราคา  บาท</p>
                        <p class="card-text">ผลิตภัณฑ์จาก:<br>
                        <span></span></p>
                      </div>
                    </div>
                  </div>
                  <div class="col-sm-4">
                    <div class="card" style="width: 230px;">
                      <img class="card-img-top" src="<?php echo base_url(). 'img/show_photo.png';?>" alt="Card image cap">
                      <div class="card-body">
                        <h5 class="card-title">Card title</h5>
                        <p class="card-text">ราคา  บาท</p>
                        <p class="card-text">ผลิตภัณฑ์จาก:<br>
                        <span></span></p>
                      </div>
                    </div>
                  </div>
                </div>
              </div>
              <div class="carousel-item">
                <div class="row">
                  <div class="col-sm-4">
                    <div class="card" style="width: 230px; height: 400px;">
                      <img class="card-img-top" src="<?php echo base_url(). 'img/test1.jpg';?>" height="220">
                      <div class="card-body">
                        <h5 class="card-title">Card title</h5>
                        <p class="card-text">ราคา  บาท</p>
                        <p class="card-text">ผลิตภัณฑ์จาก:<br>
                        <span>asd</span></p>
                      </div>
                    </div>
                  </div>
                  <div class="col-sm-4">
                    <div class="card" style="width: 12rem;">
                      <img class="card-img-top" src="<?php echo base_url(). 'img/show_photo.png';?>" alt="Card image cap">
                      <div class="card-body">
                        <h5 class="card-title">Card title</h5>
                        <p class="card-text">ราคา  บาท</p>
                        <p class="card-text">ผลิตภัณฑ์จาก:<br>
                        <span></span></p>
                      </div>
                    </div>
                  </div>
                  <div class="col-sm-4">
                    <div class="card" style="width: 12rem;">
                      <img class="card-img-top" src="<?php echo base_url(). 'img/show_photo.png';?>" alt="Card image cap">
                      <div class="card-body">
                        <h5 class="card-title">Card title</h5>
                        <p class="card-text">ราคา  บาท</p>
                        <p class="card-text">ผลิตภัณฑ์จาก:<br>
                        <span></span></p>
                      </div>
                    </div>
                  </div>
                </div>
              </div>
              <div class="carousel-item">
                <div class="row">
                  <div class="col-sm-4">
                    <div class="card" style="width: 230px; height: 400px;">
                      <img class="card-img-top" src="<?php echo base_url(). 'img/test1.jpg';?>" height="220">
                      <div class="card-body">
                        <h5 class="card-title">Card title</h5>
                        <p class="card-text">ราคา  บาท</p>
                        <p class="card-text">ผลิตภัณฑ์จาก:<br>
                        <span>asd</span></p>
                      </div>
                    </div>
                  </div>
                  <div class="col-sm-4">
                    <div class="card" style="width: 12rem;">
                      <img class="card-img-top" src="<?php echo base_url(). 'img/show_photo.png';?>" alt="Card image cap">
                      <div class="card-body">
                        <h5 class="card-title">Card title</h5>
                        <p class="card-text">ราคา  บาท</p>
                        <p class="card-text">ผลิตภัณฑ์จาก:<br>
                        <span></span></p>
                      </div>
                    </div>
                  </div>
                  <div class="col-sm-4">
                    <div class="card" style="width: 12rem;">
                      <img class="card-img-top" src="<?php echo base_url(). 'img/show_photo.png';?>" alt="Card image cap">
                      <div class="card-body">
                        <h5 class="card-title">Card title</h5>
                        <p class="card-text">ราคา  บาท</p>
                        <p class="card-text">ผลิตภัณฑ์จาก:<br>
                        <span></span></p>
                      </div>
                    </div>
                  </div>
                </div>
              </div>
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
        </div>
      </div>
    </div>
  </div>
  <br>
  <div class="text-center">
    <p><span class="font-weight-bold">"</span><br>
    "ฝ่าลู่ทางชีวิตต้องคิดเฝ้าย้อมใจ โลกมืดมนเพียงใดหัวใจอย่าคร้ามเกรง<br>
    ตั้งหน้าชื่นเอาไว้ย้อมใจด้วยเพลง ไยนึกกลัวหวาดเกรงยิ้มสู้"</p>
    <div>
      <button type="button" class="btn btn-primary">ร่วมบริจาค</button>
    </div>
  </div>

  <div class="modal fade" id="myModal" role="dialog" >
    <div class="modal-dialog" >
      <div class="modal-content" >
        <div class="modal-header">
          <button type="button" class="close" data-dismiss="modal" aria-label="Close">
            <span aria-hidden="true">&times;</span>
          </button>
        </div>
        <div class="modal-body">
          <div class="container box" style="width: 30rem; height: 30rem;">
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
