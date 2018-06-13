<div class="container">
  <div class="row">
    <div class="col-md-12 font-normal">
      <div>
        <p style="font-weight:bold; font-size:20px; color:#5dbfec;">บริการ</p>
        <hr style="margin:0px; border:1px solid black;">
        <div style="margin:30px 0px 30px 0px;">
          <?php if(isset($service)):?>
            <?php foreach ($service as $r) {?>
              <p><?php echo $r->centre_product_service_text;?></p>
            <?php };?>
          <?php endif;?>
        </div>
      </div>
      <div>
        <p style="font-weight:bold; font-size:20px; color:#5dbfec;">ผลิตภัณฑ์ต่างๆ</p>
        <hr style="margin:0px; border:1px solid black;">
        <div style="margin:30px 0px 30px 0px;">
          <?php if($this->session->userdata('product')!=""):?>
            <?php foreach ($this->session->userdata('product') as $r) {?>
              <div style="padding:10px 0px 10px 0px;">
                <div class="row">
                  <div class="col-md-3">
                    <div style="">
                      <img src="<?php echo base_url(). "img/".$r->centre_product_pto;?>" class="w-100 h-100">
                    </div>
                  </div>
                  <div class="col-md-9">
                    <div class="col-md-8" style="padding:0px; word-wrap:break-word;">
                      <p style="font-weight:bold; font-size:18px; color:#5dbfec;"><a href="#" ><?php echo $r->centre_product_name;?></a></p>
                    </div>
                    <div class="col-md-8" style="padding:0px; word-wrap:break-word; display: -webkit-box; -webkit-line-clamp: 4; -webkit-box-orient: vertical; overflow: hidden;">
                      <p><?php echo $r->centre_product_content;?></p>
                    <div class="boxnewsFade">
                    </div>
                  </div>
                  <p>ราคา <?php echo $r->centre_product_price;?> บาท</p>
                  <p>ผลิตภัณฑ์จาก : <?php echo $r->centre_product_from;?></p>
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
