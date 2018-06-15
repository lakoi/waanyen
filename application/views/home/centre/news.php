<div class="container" style="padding:0px;">
  <div class="row">
    <div class="col-md-12 font-normal">
      <div>
        <p style="font-weight:bold; font-size:20px; color:#5dbfec;">ข่าวสาร</p>
        <hr style="margin:0px; border:1px solid black;">
        <div style="margin:30px 0px 30px 0px;">
          <?php if($this->session->userdata('news_list')!=""):?>
            <?php foreach ($this->session->userdata('news_list') as $r) {?>
              <?php $ThMonth = array ("", "มกราคม", "กุมภาพันธ์", "มีนาคม", "เมษายน","พฤษภาคม", "มิถุนายน", "กรกฏาคม", "สิงหาคม","กันยายน", "ตุลาคม", "พฤศจิกายน", "ธันวาคม" );
                $months = date('n',strtotime($r->centre_news_time));
                $d = date('j',strtotime($r->centre_news_time));
                $m = $ThMonth[$months];
                $y = date('Y',strtotime($r->centre_news_time))+543;
              ?>
              <div style="padding:10px 0px 10px 0px;">
                <div class="row">
                  <div class="col-md-3">
                    <div style="">
                      <img src="<?php echo base_url(). "img/".$r->centre_news_pto;?>" class="w-100 h-100">
                    </div>
                  </div>
                  <div class="col-md-9">
                    <div style="">
                    <p><a href="#"><?php echo $r->centre_news_title;?></a></p>
                  </div>
                    <p><i class="fas fa-calendar-alt" style="color:#227ea8; font-size:1em;"></i> <?php echo "เมื่อวันที่ ".$d." ".$m." ".$y;?></p>
                    <div class="col-md-8" style="padding:0px; word-wrap:break-word; display: -webkit-box; -webkit-line-clamp: 4; -webkit-box-orient: vertical; overflow: hidden;">
                    <p><?php echo $r->centre_news_content;?></p>
                    <div class="boxnewsFade">
                    </div>
                  </div>
                  </div>
                </div>
              </div>
              <hr>
            <?php };?>
          <?php endif;?>
        </div>
      </div>
    </div>
  </div>
</div>
