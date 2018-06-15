<div class="container" style="padding:0px;">
  <div class="row">
    <div class="col-sm-12">
      <div style="margin:30px 0px 30px 0px;">
        <p style="font-size:24px;">ข่าวสาร<p>
        <hr style="margin:0px 0px 0px 0px; border:2px solid #3a99c4;">
      </div>
      <div class="row" >
        <?php if(isset($news)):?>
          <div class="col-sm-8 font-normal">
            <?php foreach ($news as $r) {?>
              <?php $ThMonth = array ("", "มกราคม", "กุมภาพันธ์", "มีนาคม", "เมษายน","พฤษภาคม", "มิถุนายน", "กรกฏาคม", "สิงหาคม","กันยายน", "ตุลาคม", "พฤศจิกายน", "ธันวาคม" );
                $months = date('n',strtotime($r->news_time));
                $d = date('j',strtotime($r->news_time));
                $m = $ThMonth[$months];
                $y = date('Y',strtotime($r->news_time))+543;?>
              <div class="row" style="margin:15px 0px 15px 0px;">
                <div class="col-sm-4">
                  <div>
                    <img src="<?php echo base_url(). 'img/'.$r->news_pto;?>" class="w-100 h-100">
                  </div>
                </div>
                <div class="col-sm-8">
                  <div style="word-wrap:break-word;">
                    <p style="font-size:24px; color:#3a99c4;"><?php echo $r->news_title;?></p>
                    <p><i class="fas fa-calendar-alt" style="color:#227ea8;"></i> <?php echo "วันที่ ".$d." ".$m." ".$y;?></p>
                    <p><?php echo $r->news_content;?></p>
                  </div>
                </div>
              </div>
            <?php };?>
          </div>
        <?php endif;?>

        <div class="col-sm-4">
          <div class="list-group">
            <a href="#" class="list-group-item list-group-item-action flex-column align-items-start">
              <p class="mb-1"><i class="fas fa-caret-right" style="font-size:1.1em; margin-bottom:-2px;"></i> Donec id elit non mi porta gravida at eget metus. Maecenas sed diam eget risus varius blandit.</p>
            </a>
            <a href="#" class="list-group-item list-group-item-action flex-column align-items-start">
              <p class="mb-1"><i class="fas fa-caret-right" style="font-size:1.1em; margin-bottom:-2px;"></i> Donec id elit non mi porta gravida at eget metus. Maecenas sed diam eget risus varius blandit.</p>
            </a>
            <a href="#" class="list-group-item list-group-item-action flex-column align-items-start">
              <p class="mb-1"><i class="fas fa-caret-right" style="font-size:1.1em; margin-bottom:-2px;"></i> Donec id elit non mi porta gravida at eget metus. Maecenas sed diam eget risus varius blandit.</p>
            </a>
            <a href="#" class="list-group-item list-group-item-action flex-column align-items-start">
              <p class="mb-1"><i class="fas fa-caret-right" style="font-size:1.1em; margin-bottom:-2px;"></i> Donec id elit non mi porta gravida at eget metus. Maecenas sed diam eget risus varius blandit.</p>
            </a>
            <a href="#" class="list-group-item list-group-item-action flex-column align-items-start">
              <p class="mb-1"><i class="fas fa-caret-right" style="font-size:1.1em; margin-bottom:-2px;"></i> Donec id elit non mi porta gravida at eget metus. Maecenas sed diam eget risus varius blandit.</p>
            </a>
          </div>
        </div>
      </div>
      <div class="row text-center">
        <div >
        <nav aria-label="Page navigation example">
          <ul class="pagination">
            <li class="page-item"><a class="page-link" href="#">Previous</a></li>
            <li class="page-item"><a class="page-link" href="#">1</a></li>
            <li class="page-item"><a class="page-link" href="#">2</a></li>
            <li class="page-item"><a class="page-link" href="#">3</a></li>
            <li class="page-item"><a class="page-link" href="#">Next</a></li>
          </ul>
        </nav>
      </div>
    </div>
      </div>
    </div>
  </div>
</div>
