<div class="container" style="padding:0px;">
  <div class="row">
    <div class="col-md-12">
      <?php if(isset($about)):?>
        <?php foreach ($about as $r) {?>
          <div class="border" style="padding:20px;">
            <div class="row">
              <div class="col-md-8">
                <div style="border-left: 4px solid #227ea8;">
                  <p style="padding-left:10px; font-size:20px;">ประวัติและความเป็นมา</p>
                </div>
                <div class="font-normal boxnews" style=" word-wrap:break-word; display: -webkit-box; -webkit-line-clamp: 8; -webkit-box-orient: vertical; overflow: hidden;">
                  <p><?php echo $r->centre_about_title;?></p>
                  <div class="boxnewsFade">
                  </div>
                </div>
                <div class="" style="margin:20px 0px 0px 0px; ">
                  <a href="<?php echo base_url(). "centre/about_show";?>" style="padding:5px 10px 5px 10px; background-color: #227ea8; color:white;">รายละเอียดเพิ่มเติม</a>
                </div>
              </div>
              <div class="col-md-4" >
                <div class="border" style="height:250px;">
                  <img src="<?php echo base_url(). "img/".$r->centre_about_pto;?>" class="w-100 h-100">
                </div>
              </div>
            </div>
          </div>
        <?php };?>
      <?php endif;?>

      <div style=" margin:20px 0px 20px 0px;">
        <div class="row">
          <div class="col-sm-3">
            <br>
            <div style="background-image: url('<?php echo base_url(). 'img/images/news/head-news.png';?>'); background-size: 100% 100%; padding: 10px; color: white;">
              <img src="<?php echo base_url(). 'img/images/news/icon-news.png';?>" style="padding-bottom:3px;"/>ข่าวสารต่างๆ
            </div>
          </div>
          <div class="col-sm-9 text-right" style="margin:30px 0px 20px 0px;">
            <a href="<?php echo base_url(). 'centre/news';?>" style="text-decoration: none;">ข่าวทั้งหมด <i class="fas fa-caret-right" style="font-size:1.1em; margin-bottom:-2px;"></i></a>
          </div>
        </div>
        <hr style="margin:-5px 0px 0px 5px; border:2px solid #5dbfec;">
      </div>
      <div class="row">
        <?php if(isset($news_h)):?>
          <?php foreach ($news_h as $r) {?>
            <?php $ThMonth = array ("", "ม.ค", "ก.พ", "มี.ค", "เม.ย","พ.ค", "มิ.ย", "ก.ค", "ส.ค","ก.ย", "ต.ค", "พ.ย", "ธ.ค" );
              $months = date('n',strtotime($r->centre_news_time));
              $d = date('j',strtotime($r->centre_news_time));
              $m = $ThMonth[$months];
              $y = date('Y',strtotime($r->centre_news_time))+543;?>
        <div class="col-lg-6 col-md-12 col-sm-12">
          <div class="border" style="position:relative; border-radius: 5px;">
            <div class="about-inside-frame">
            <div style="position:relative; margin-bottom: 20px; max-width: 100%;">
              <div class="text-center" style="position:absolute; margin-left:10px; padding-top:5px; width:60px; height:90px; background-color:rgba(34,126,168,0.95);">
                <p class="date-news" style="color:white;"><?php echo "<span style='font-size:24px; line-height: 1.2; '>".$d."<br> ".$m."</span><br> ".$y;?></p>
              </div>
              <img class="w-100" src="<?php echo base_url(). 'img/'.$r->centre_news_pto;?>"/>

            </div>
            <p class="about-title"><?php echo $r->centre_news_title;?></p>
            <div class="font-normal boxnews" style=" word-wrap:break-word; display: -webkit-box; -webkit-line-clamp: 3; -webkit-box-orient: vertical; overflow: hidden;">
              <p class="about-content"><?php echo $r->centre_news_content;?></p>
              <div class="boxnewsFade">
              </div>
            </div>
            <div>
              <a href="#" style="background-color:#227ea8; display: inline-block; padding:5px; color:white; text-decoration: none;">
                <i class="fas fa-arrow-circle-right" style="color:#5193ca; font-size:18px; color:white;"></i> อ่านต่อ...
              </a>
            </div>
          </div>
          </div>
        </div>
      <?php };?>
    <?php endif;?>
        <div class="col-lg-6 col-md-12 col-sm-12" style="position:relative;">
          <div class="list-group">
              <?php if(isset($news)):?>
                <?php foreach ($news as $r) {?>
                  <?php $ThMonth = array ("", "มกราคม", "กุมภาพันธ์", "มีนาคม", "เมษายน","พฤษภาคม", "มิถุนายน", "กรกฏาคม", "สิงหาคม","กันยายน", "ตุลาคม", "พฤศจิกายน", "ธันวาคม" );
                    $months = date('n',strtotime($r->centre_news_time));
                    $d = date('j',strtotime($r->centre_news_time));
                    $m = $ThMonth[$months];
                    $y = date('Y',strtotime($r->centre_news_time))+543;?>
              <div id="<?php echo $r->id_centre_news;?>" class="list-group-item as list-news" style="display: block; position: relative;">
                <div class="col-md-12" style="padding: 10px;">
                  <div class="row">
                    <div class="col-sm-4" style="padding-right: 10px;">
                      <img src="<?php echo base_url(). 'img/'.$r->centre_news_pto;?>" width="130" height="130" >
                    </div>
                    <div class="col-sm-8" style="word-wrap:break-word; width: 100%;">
                      <div style="font-weight:bold; font-size:1.1em; white-space: nowrap;  overflow: hidden; text-overflow: ellipsis;">
                        <a class="news-title" href="#"><?php echo $r->centre_news_title;?></a>
                      </div>
                      <div style="padding:10px 0px 10px 0px;">
                      <span><i class="fas fa-calendar-alt" style="color:#227ea8; font-size:1em;"></i> <?php echo "วันที่ ".$d." ".$m." ".$y;?></span>
                    </div>
                      <div class="font-normal" style="width:100%; display: -webkit-box; -webkit-line-clamp: 3; -webkit-box-orient: vertical; overflow: hidden;">
                        <?php echo $r->centre_news_content;?>
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
</div>

<div class="container" style="padding:0px;">
  <div class="row">
    <div class="col-md-12">
      <div style=" margin:20px 0px 20px 0px;">
        <div class="row">
          <div class="col-sm-3">
            <br>
            <div style="background-image: url('<?php echo base_url(). 'img/images/news/head-news.png';?>'); background-size: 100% 100%; padding: 10px; color: white;">
              <img src="<?php echo base_url(). 'img/images/news/icon-news.png';?>" style="padding-bottom:3px;"/>ผลิตภัณฑ์
            </div>
          </div>
          <div class="col-sm-9 text-right" style="margin:30px 0px 20px 0px;">
            <a href="<?php echo base_url(). "centre/product";?>" style="text-decoration: none;">ดูสินค้าทั้งหมด <i class="fas fa-caret-right" style="font-size:1.1em; margin-bottom:-2px;"></i></a>
          </div>
        </div>
        <hr style="margin:-5px 0px 0px 5px; border:2px solid #5dbfec;">
      </div>
    </div>
  </div>
</div>

<div class="container-fluid" style="padding:0px 0px 0px 0px; max-width:2000px;">
  <?php if(isset($product)):?>
    <div id="carouselExampleIndicators" class="carousel slide text-center" data-ride="carousel" data-interval="6000">
      <div class="carousel-inner container">
        <div class="row">
          <!-- <div class="col-md-12"> -->
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
                    <div class=" col-md-3 col-sm-6 col-xs-12 " style="margin-top:10px;">
                      <div class="bg-white card-product" style="width: ; height: 420px; ">
                        <a href="#">
                          <img class="card-img-top" src="<?php echo base_url(). 'img/'.$arr->centre_product_pto;?>" height="230">
                        </a>
                        <div class="card-body">
                          <div style="font-weight:bold; white-space: nowrap;  overflow: hidden; text-overflow: ellipsis;">
                            <a class="card-title" href="#" style="text-decoration: none; color:black;"><?php echo $arr->centre_product_name;?></a>
                          </div><br>
                          <p class="card-text">ราคา <span style="font-size:20px; font-weight:bold;"><?php echo $arr->centre_product_price;?></span> บาท</p>
                          <b class="card-text">ผลิตภัณฑ์จาก:</b><br>
                          <div style="white-space: nowrap;  overflow: hidden; text-overflow: ellipsis;">
                            <span style=""><?php echo $arr->centre_product_from;?></span>
                          </div>
                        </div>
                      </div>
                    </div>
                  <?php };?>
                </div>
              </div>
            <?php };?>
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
    </div>
  <?php endif;?>
</div>
