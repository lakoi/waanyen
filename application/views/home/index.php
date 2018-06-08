
  <div id="carouselExampleFade" class="carousel slide carousel-fade container-fluid donate-frame" data-ride="carousel">
    <div class="carousel-inner">
      <?php if(isset($slide)):?>
        <?php foreach ($slide as $r) {?>
          <?php if($r->id_slide == "1")
          {
            echo "<div class='carousel-item donate-item active'>";
          }
          else
          {
            echo "<div class='carousel-item donate-item'>";
          };?>
            <img class="d-block w-100 h-100" src="<?php echo base_url(). 'img/'.$r->slide_pto;?>">
            <div class="text-center donate-content">
              <?php echo $r->slide_title;?>
              <?php echo $r->slide_content;?>
            </div>
          </div>
        <?php };?>
      <?php endif;?>
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
        <div class="col-lg-6 col-md-12 col-sm-12">
          <div class="about-content-frame">
            <div class="about-inside-frame">
            <div class="about-head-frame">
              <div class="about-head">
                <h3><?php echo nl2br($r->about_head);?></h3>
              </div>
            </div>
            <div class="about-image">
              <img class="w-100" src="<?php echo base_url(). 'img/'.$r->about_pto;?>"/>
            </div>
            <p class="about-title"><?php echo $r->about_title;?></p><br>
            <p class="about-content"><?php echo $r->about_content;?></p>
          </div>
            <div class=" text-right">
              <a href="#" class="about-more">รายละเอียดเพิ่มเติม</a>
            </div>
          </div>
        </div>
      <?php };?>
    <?php endif;?>
        <div class="col-lg-6 col-md-12 col-sm-12" style="position:relative;">
            <div style=" height: 90px;">
              <div class="row">
                <div class="col-sm-6">
                  <br>
                  <div style="background-image: url('<?php echo base_url(). 'img/images/news/head-news.png';?>'); background-size: 100% 100%; padding: 10px; color: white;">
                    <img src="<?php echo base_url(). 'img/images/news/icon-news.png';?>" style="padding-bottom:3px;"/>ข่าวสารต่างๆ
                  </div>
                </div>
                <div class="col-lg-6 col-md-12 col-sm-12 text-right">
                  <br>
                  <br>
                  <a href="#" style="text-decoration: none;">ข่าวทั้งหมด <i class="fas fa-caret-right" style="font-size:1.1em; margin-bottom:-2px;"></i></a>
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
              <div id="<?php echo $r->id_news;?>" class="list-group-item as list-news" style="display: block; position: relative;">
                <div class="col-md-12" style="padding: 10px;">
                  <div class="row">
                    <div class="col-sm-4" style="padding-right: 10px;">
                      <img src="<?php echo base_url(). 'img/'.$r->news_pto;?>" width="130" height="130" >
                    </div>
                    <div class="col-sm-8" style="word-wrap:break-word; width: 100%;">
                      <div style="font-weight:bold; font-size:1.1em; white-space: nowrap;  overflow: hidden; text-overflow: ellipsis;">
                        <a class="news-title" href="#"><?php echo $r->news_title;?></a>
                      </div>
                      <div style="padding:10px 0px 10px 0px;">
                      <span><i class="fas fa-calendar-alt" style="color:#227ea8; font-size:1em;"></i> <?php echo "วันที่ ".$d." ".$m." ".$y;?></span>
                    </div>
                      <div class="font-normal" style="width:100%; display: -webkit-box; -webkit-line-clamp: 3; -webkit-box-orient: vertical; overflow: hidden;">
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
    <div class="col-lg-3 col-md-6 col-sm-6 col-xs-6" style="background-image:url('<?php echo base_url(). 'img/images/centre/head-centre.png';?>'); background-size: 100% 100%; padding: 10px; margin-bottom:30px; color: white;">
      <img src="<?php echo base_url(). 'img/images/centre/icon-centre.png';?>" style="padding-bottom:3px;"/>ศูนย์ต่างๆ
    </div>
    <hr style="margin:-34px 0px 0px 7px; border:2px solid #5dbfec;">
    <div class="row justify-content-around">
        <?php if(isset($centre)):?>
          <?php foreach ($centre as $r)
          {?>
          <div class="col-lg-2 col-md-4 col-sm-4 col-xs-6" >
            <div class="border" style="position: relative; z-index: 1; height: 300px; margin:30px -15px 15px -15px;">
              <div class="border" style="position: absolute; z-index: 2; height:280px; width:90%; margin:10px; background-image: url('<?php echo base_url().'img/'.$r->centre_pto;?>'); background-position: center; background-size: auto 100%; display:table;">
                <div class="qw" id="<?php echo $r->id_centre;?>" style="color:white; word-wrap:break-word; margin: auto; text-align:center; display:table-cell; vertical-align:middle; padding: 5px;">
                  <p style="word-wrap:break-word;"><?php echo $r->centre_title;?></p>
                  <div class="we<?php echo $r->id_centre;?> font-normal" id="<?php echo $r->id_centre;?>" style="display:none;">
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
      <img src="<?php echo base_url(). 'img/images/product/icon-product.png';?>" wigth="80" height="80" /><br>
      <a href="#" class="head-product">ผลิตภัณฑ์และบริการ</a><br>
      <span>"การสนับสนุนผลิตภัณฑ์ฝีมือคนตาบอด เป็นการสร้างอาชีพและให้อนาคต"</span>
    </div>
    <?php if(isset($product)):?>
    <div id="carouselExampleIndicators" class="carousel slide text-center" data-ride="carousel" data-interval="6000">
      <div class="carousel-inner container">
        <div class="row">
        <?php $product_r =  array_chunk($product, 4, true);
              foreach ($product_r as $key) { ?>
                <?php if(isset($key[0]))
                {
                  echo "<div class='carousel-item  active' style=' margin:30px 0px 30px 0px;'>";
                }
                else
                {
                  echo "<div class='carousel-item' style=' margin:30px 0px 30px 0px;'>";
                };?>
            <div class="row">
              <?php foreach ($key as $arr) {?>
              <div class="col-lg-3 col-md-4 col-sm-6 col-xs-12 " style="margin-top:10px;">
                <div class="bg-white card-product" style="width: ; height: 420px; ">
                  <a href="#">
                    <img class="card-img-top" src="<?php echo base_url(). 'img/'.$arr->pd_pto;?>" height="230">
                  </a>
                  <div class="card-body">
                    <div style="font-weight:bold; white-space: nowrap;  overflow: hidden; text-overflow: ellipsis;">
                      <a class="card-title" href="#" style="text-decoration: none; color:black;"><?php echo $arr->pd_name;?></a>
                    </div><br>
                    <p class="card-text">ราคา <span style="font-size:20px; font-weight:bold;"><?php echo $arr->pd_price;?></span> บาท</p>
                    <b class="card-text">ผลิตภัณฑ์จาก:</b><br>
                    <div style="white-space: nowrap;  overflow: hidden; text-overflow: ellipsis;"><span style=""><?php echo $arr->pd_from;?></span></div>
                  </div>
                </div>
              </div>
              <?php };?>
          </div>
        </div>
      <?php };?>
      <div class="col-sm-12 text-center">
        <a href="#" class="btn all-product">สินค้าทั้งหมด</a>
      </div>
          </div>
      </div>
      <a style="width:10%;" class="carousel-control-prev" href="#carouselExampleIndicators" role="button" data-slide="prev">
        <span class="carousel-control-prev-icon prev" aria-hidden="true"></span>
        <span class="sr-only">Previous</span>
      </a>
      <a style="width:10%;" class="carousel-control-next" href="#carouselExampleIndicators" role="button" data-slide="next">
        <span class="carousel-control-next-icon next" aria-hidden="true"></span>
        <span class="sr-only">Next</span>
      </a>
  <?php endif;?>
</div>
  </div>

  <div class="container" style="margin-top:100px;">
    <div class="row">
      <div class="col-sm-6" >
        <p class="head-join" style="color:#5dbfec; font-size:1.8em;">ร่วมเป็นส่วนหนึ่ง<i class="fas fa-arrow-circle-right" style="color:#5193ca; font-size:2em;"></i><br>
        ในการช่วยเหลือผู้พิการทางสายตา</p>
        <div class="">
          <img src="<?php echo base_url(). 'img/images/join/join.png';?>" class="w-100" style="padding-top:-30px;"/>
        </div>
      </div>
      <div class="col-sm-6">
        <div class="row" >
          <?php if(isset($join)):?>
            <?php foreach ($join as $r) {?>
              <?php if($r->id_join == "1")
                    {
                      echo "<div class='col-lg-6 col-md-12 col-sm-12 col-xs-12 text-center' style='height:300px; display:table; '>";
                    }
                    else
                    {
                      if($r->id_join == "2")
                        {
                          echo "<div class='col-lg-6 col-md-12 col-sm-12 col-xs-12 text-center' style='height:300px; display:table; '>";
                        }
                        else
                        {
                          if($r->id_join == "4")
                          {
                            echo "<div class='col-lg-6 col-md-12 col-sm-12 col-xs-12 text-center' style='height:300px; display:table; '>";
                          }
                          else
                          {
                            echo "<div class='col-lg-6 col-md-12 col-sm-12 col-xs-12 text-center' style='height:300px; display:table; '>";
                          }
                        }
                    };?>
                <div style="text-align:center; display:table-cell; vertical-align:middle; ">
                  <img src="<?php echo base_url(). 'img/'.$r->join_pto;?>" width="120" height="120" style="border-radius: 100%;"/>
                  <div style="padding-top:10px;">
                    <a href="#" class="join-title"><?php echo $r->join_title;?></a>
                    <p class="font-normal"><?php echo $r->join_content;?></p>
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
