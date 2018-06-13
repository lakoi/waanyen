<div class="container">
  <div class="row">
    <div class="col-md-12">
      <div style="margin-top:30px;">
        <p style="font-size:24px;">ศูนย์ต่างๆ<p>
        <hr style="margin:0px 0px 0px 0px; border:2px solid #3a99c4;">
      </div>
      <div class="row">
        <?php if(isset($centre)):?>
          <?php $n = "1";?>
          <?php foreach ($centre as $r) {?>
            <div class="col-md-4" style="margin:30px 0px 0px 0px; ">
              <div class="border" style="width:330px; height:420px;">
                <div style="height:250px; ">
                  <img src="<?php echo base_url().'img/'.$r->centre_pto;?>" class="w-100 h-100" >
                </div>
                <div class="text-center" style="padding:15px 10px 0px 10px;">
                  <p style="font-size:18px;"><?php echo $r->centre_title;?></p>
                  <p class="font-normal" style="font-size:14px; margin-top:-10px;"><?php echo $r->centre_content;?></p>
                  <a href="<?php echo base_url(). "centre/about/".$n;?>" class="btn btn-primary">ดูรายละเอียด</a>
                </div>
              </div>
            </div>
          <?php $n++;};?>
        <?php endif;?>
      </div>
    </div>
  </div>
</div>
