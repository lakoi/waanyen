
  <div id="carouselExampleFade" class="carousel slide carousel-fade container-fluid donate-frame" data-ride="carousel">
    <div class="carousel-inner">
    <?php if(isset($donate)):?>
      <?php foreach ($donate as $r) {?>
      <div class="carousel-item donate-item active">
        <!-- <div class="text-center donate-background"> -->
        <img class="d-block w-100 h-100" src="<?php echo base_url(). 'img/images/backgroud.jpg';?>" alt="First slide">
        <!-- </div> -->
        <div class="text-center donate-content">
            <div class="text-center">
              <p class="donate-title"><?php echo $r->donate_title;?></p>
            </div>
            <div>
              <p class="donate-text"><?php echo nl2br($r->donate_text);?></p>
            </div>
            <div>
              <a class="btn btn-primary" href="<?php echo base_url(). 'login/index';?>">login</a>
              <a href="#" class="btn btn-primary donate-button" id="donate_bt"><?php echo $r->donate_bt;?></a>
            </div>
          </div>
        </div>
        <?php };?>
      <?php endif;?>
      <div class="carousel-item donate-item">
        <img class="d-block w-100 h-100" src="<?php echo base_url(). 'img/images/backgroud.jpg';?>" alt="Second slide">
      </div>
      <div class="carousel-item donate-item">
        <img class="d-block w-100 h-100" src="<?php echo base_url(). 'img/images/backgroud.jpg';?>" alt="Third slide">
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

  <div class="container-fluid about-outside-frame">
    <div class="container about-frame">
      <div class="row">
        <?php if(isset($about)):?>
          <?php foreach ($about as $r) {?>
        <div class="col-sm-6">
          <div class="border about-content-frame">
            <div class="about-head-frame">
              <div class="about-head">
                <h4><?php echo nl2br($r->about_head);?></h4>
              </div>
            </div>
            <div class="border about-image">
              <img class="w-100" src="<?php echo base_url(). 'img/'.$r->about_pto;?>" height="300"/>
            </div>
            <b class="about-title"><?php echo $r->about_title;?></b><br><br>
            <p class="about-content"><?php echo $r->about_content;?></p>
            <div class="text-right">
              <a href="#" class="about-more">รายละเอียดเพิ่มเติม</a>
            </div>
          </div>
        </div>
      <?php };?>
    <?php endif;?>
        <div class="col-sm-6" style="position:relative;">
            <div style=" height: 90px;">
              <div class="row">
                <div class="col-sm-6">
                  <br>
                  <div style="background-color: #165378; padding: 10px; color: white;">
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
          <div class="list-group">
              <?php if(isset($news)):?>
                <?php foreach ($news as $r) {?>
                  <?php $ThMonth = array ("", "มกราคม", "กุมภาพันธ์", "มีนาคม", "เมษายน","พฤษภาคม", "มิถุนายน", "กรกฏาคม", "สิงหาคม","กันยายน", "ตุลาคม", "พฤศจิกายน", "ธันวาคม" );
                    $months = date('n',strtotime($r->news_time));
                    $d = date('j',strtotime($r->news_time));
                    $m = $ThMonth[$months];
                    $y = date('Y',strtotime($r->news_time))+543;?>
              <div id="<?php echo $r->id_news;?>" class="list-group-item as list-news" style="display: block; position: relative; height: 170px;">
                <div style="padding: 10px;">
                  <div class="row">
                    <div class="col-sm-4" style="padding-right: 10px;">
                      <img src="<?php echo base_url(). 'img/'.$r->news_pto;?>" width="130" height="130" >
                    </div>
                    <div class="col-sm-8" style="word-wrap:break-word; width: 100%;">
                      <div style="white-space: nowrap;  overflow: hidden; text-overflow: ellipsis;">
                        <b><?php echo $r->news_title;?></b>
                      </div>
                      <span><?php echo "วันที่ ".$d." ".$m." ".$y;?></span>
                      <div style="width:100%; display: -webkit-box; -webkit-line-clamp: 3; -webkit-box-orient: vertical; overflow: hidden;">
                        <?php echo $r->news_content;?>
                      </div>
                    </div>
                  </div>
                </div>
              </div>
            <?php }?>
          <?php endif;?>
          </div>
        </div>
      </div>
    </div>
  </div>


  <div class="container" style="position:relative; padding:100px 0px 100px 0px;">
    <div class="col-lg-4" style="background-color: #165378; padding: 10px; margin-bottom:30px; color: white;">
      ศูนย์ต่างๆ
    </div>
    <div class="row justify-content-around">
        <?php if(isset($centre)):?>
          <?php foreach ($centre as $r)
          {?>
          <div class="col-lg-2 col-md-3 col-sm-4 col-xs-6" >
            <div class="border" style="position: relative; z-index: 1; height: 300px; margin:15px -15px 15px -15px;">
              <div class="border" style="position: absolute; z-index: 2; height: 280px; margin: 10px; background-image: url('<?php echo base_url().'img/'.$r->centre_pto;?>'); background-position: center; background-size: auto 100%; display:table;">
                <div class="qw" id="<?php echo $r->id_centre;?>" style="color:white; word-wrap:break-word; margin: auto; text-align:center; display:table-cell; vertical-align:middle; ">
                  <p style="font-weight: bold;"><?php echo $r->centre_title;?></p>
                  <div class="we<?php echo $r->id_centre;?>" id="<?php echo $r->id_centre;?>" style="display:none;">
                    <p style="font-size:0.8em; word-wrap:break-word; display:block;"><?php echo $r->centre_content;?></p>
                    <a href="#" style="color:white; text-decoration: none; border: 2px solid #ffffff; padding:5px;"><?php echo $r->centre_bt;?></a>
                  </div>
                </div>
              </div>
            </div>
          </div>
        <?php };?>
      <?php endif;?>
    </div>
  </div>

  <div class="container-fluid" style="background-image: url('<?php echo base_url().'img/images/product/background3.jpg';?>'); background-size: 100%; padding-top:80px; padding-bottom:80px; max-width:2000px;">
    <div class="text-center">
      <img src="<?php echo base_url(). 'img/show_photo.png';?>" wigth="80" height="80" /><br>
      <a href="#" style="font-size:24px; text-decoration: none;">ผลิตภัณฑ์และบริการ</a><br>
      <span>"การสนับสนุนผลิตภัณฑ์ฝีมือคนตาบอด เป็นการสร้างอาชีพและให้อนาคต"</span>
    </div>
    <?php if(isset($product)):?>
    <div id="carouselExampleIndicators" class="carousel slide text-center" data-ride="carousel" data-interval="10000">
      <div class="carousel-inner container" >
        <div class="row">
        <?php $product_r =  array_chunk($product, 4, true);
              foreach ($product_r as $key) { ?>
                <?php if(isset($key[0]))
                {
                  echo "<div class='carousel-item  active' style=' margin:30px -30px 30px 30px;'>";
                }
                else
                {
                  echo "<div class='carousel-item' style='; margin:30px -30px 30px 30px;'>";
                };?>
          <div class="row">
            <?php foreach ($key as $arr) {?>
            <div class="col-lg-3 col-md-4 col-sm-6 col-xs-12 " style="margin-top:10px;">
              <div class="bg-white" style="width: 200px; height: 350px; padding:10px;">
                <a href="#">
                  <img class="card-img-top" src="<?php echo base_url(). 'img/'.$arr->pd_pto;?>" height="180">
                </a>
                <div class="card-body">
                  <b><a class="card-title" href="#" style="text-decoration: none; white-space: nowrap;  overflow: hidden; text-overflow: ellipsis;"><?php echo $arr->pd_name;?></a></b>
                  <p class="card-text">ราคา <?php echo $arr->pd_price;?> บาท</p>
                  <p class="card-text">ผลิตภัณฑ์จาก:<br>
                  <span style="white-space: nowrap;  overflow: hidden; text-overflow: ellipsis;"><?php echo $arr->pd_from;?></span></p>
                </div>
              </div>
            </div>
            <?php };?>
          </div>
        </div>
      <?php };?>
          </div>
      </div>
      <a class="carousel-control-prev" href="#carouselExampleIndicators" role="button" data-slide="prev">
        <span class="carousel-control-prev-icon prev" aria-hidden="true"></span>
        <span class="sr-only">Previous</span>
      </a>
      <a class="carousel-control-next" href="#carouselExampleIndicators" role="button" data-slide="next">
        <span class="carousel-control-next-icon next" aria-hidden="true"></span>
        <span class="sr-only">Next</span>
      </a>
  <?php endif;?>
</div>
  </div>

  <div class="container" style="margin-top:100px;">
    <div class="row">
      <div class="col-sm-6" >
        <p style=" font-size:1.75em;">ร่วมเป็นส่วนหนึ่ง<br>
        ในการช่วยเหลือผู้พิการทางสายตา</p>
        <div class="border">
          <img src="<?php echo base_url(). 'img/show_photo.png';?>" class="w-100" style="padding:30px;"/>
        </div>
      </div>
      <div class="col-sm-6">
        <div class="row">
          <?php if(isset($join)):?>
            <?php foreach ($join as $r) {?>
              <div class="col-lg-6 col-md-12 col-sm-12 col-xs-12 border text-center" style="height:300px; display:table;">
                <div style="text-align:center; display:table-cell; vertical-align:middle; ">
                  <img src="<?php echo base_url(). 'img/'.$r->join_pto;?>" width="100" height="100" style="border-radius: 100%;"/>
                  <div style="padding-top:10px;">
                    <a href="#" style="font-size:1.5em; text-decoration: none;"><?php echo $r->join_head;?></a>
                    <p><?php echo $r->join_title;?></p>
                  </div>
                </div>
              </div>
            <?php };?>
          <?php endif;?>
        </div>
      </div>
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
