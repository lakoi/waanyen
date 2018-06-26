<style>
 .text-black-hov-blue
 {
   color: black;
   text-decoration: none;
 }
 .text-black-hov-blue:hover
 {
   color: #227ea8;
   text-decoration: none;
 }
</style>
<div class="container" style="padding:0px;">
  <div class="row">
    <div class="col-sm-12">
      <div style="margin:30px 0px 30px 0px;">
        <p style="font-size:24px;">ข่าวสาร<p>
        <hr style="margin:0px 0px 0px 0px; border:2px solid #3a99c4;">
      </div>
      <div class="row" >
        <?php if(isset($news_page)):?>
          <div class="col-sm-9 font-normal">
            <?php foreach ($news_page as $r) {?>
              <?php $ThMonth = array ("", "มกราคม", "กุมภาพันธ์", "มีนาคม", "เมษายน","พฤษภาคม", "มิถุนายน", "กรกฏาคม", "สิงหาคม","กันยายน", "ตุลาคม", "พฤศจิกายน", "ธันวาคม" );
                $months = date('n',strtotime($r->news_time));
                $d = date('j',strtotime($r->news_time));
                $m = $ThMonth[$months];
                $y = date('Y',strtotime($r->news_time))+543;?>
              <div class="row" style="margin:15px 0px 15px 0px;">
                <div class="col-sm-3">
                  <div class="row">
                    <img src="<?php echo base_url(). 'img/'.$r->news_pto;?>" alt="<?php echo $r->news_title;?>" title="" class="w-100 h-100">
                  </div>
                </div>
                <div class="col-sm-9">
                  <div style="word-wrap:break-word; display: -webkit-box; -webkit-line-clamp: 3; -webkit-box-orient: vertical;  overflow: hidden;">
                    <p><a href="#" style="font-size:24px; text-decoration: none;"><?php echo $r->news_title;?></a></p>
                    <p><i class="fas fa-calendar-alt" style="color:#227ea8;"></i> <?php echo "วันที่ ".$d." ".$m." ".$y;?></p>
                    <p><?php echo $r->news_content;?></p>
                    <div class="boxnewsFade">
                    </div>
                  </div>
                </div>
              </div>
            <?php };?>
          </div>
        <?php endif;?>

        <div class="col-sm-3">
          <div style="background-image: url('<?php echo base_url(). 'img/images/news/head-news.png';?>'); background-size: 100% 100%; padding: 10px; margin-bottom:15px; color: white;">
            <img src="<?php echo base_url(). 'img/images/news/icon-news.png';?>" style="padding-bottom:3px;"/>ข่าวสารต่างๆ
          </div>
          <?php if(isset($news)):?>
            <?php $n = "5";?>
          <div class="list-group font-normal">
            <?php foreach($news as $arr) {?>
            <div class="list-group-item list-group-item-action flex-column align-items-start">
              <p class="mb-1"><i class="fas fa-caret-right" style="font-size:1.1em; margin-bottom:-2px; color:#227ea8;"></i>
                 <a href="#" class="text-black-hov-blue"><?php echo $arr->news_title;?></a>
              </p>
              <?php if($n=="1"):?>
                <p style="margin-top:30px; text-align:right;"><a href="#" style="text-decoration: none;">ดูข่าวสารทั้งหมด</a></p>
              <?php endif;?>
            </div>
          <?php $n--;};?>
          </div>

          <?php endif;?>
        </div>
      </div>
      <p class="page-news text-center"><?php echo $links; ?></p>
      </div>
    </div>
  </div>
</div>
