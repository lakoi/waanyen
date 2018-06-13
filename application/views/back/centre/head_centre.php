
<div class="container-fluid" style="background-color:rgba(250,250,250,0.5); max-width:2000px; margin-bottom:30px;">
  <div class="container">
    <div class="row">
      <div class="col-md-12" style="margin-top:0px;">
        <?php if(isset($head)):?>
          <p style="font-size:24px;"><?php echo $head;?><p>
        <?php endif;?>
        <hr style="border:2px solid #3a99c4;">
        <div style="margin:10px 0px 10px 0px;">
          <ul class="nav">
            <li class="nav-item head-about-list">
              <a class="nav-link head-about-link" href="<?php echo base_url(). 'backs_centre/about';?>">เกี่ยวกับเรา</a>
            </li>
            <li class="nav-item head-about-list">
              <a class="nav-link head-about-link" href="<?php echo base_url(). 'backs_centre/news';?>">ข่าวสาร</a>
            </li>
            <li class="nav-item head-about-list">
              <a class="nav-link head-about-link" href="<?php echo base_url(). 'backs_centre/product';?>">ผลิตภัณฑ์และบริการ</a>
            </li>
            <li class="nav-item head-about-list">
              <a class="nav-link head-about-link" href="<?php echo base_url(). 'backs_centre/donate';?>">บริจาคและอาสาสมัคร</a>
            </li>
            <li class="nav-item head-about-list">
              <a class="nav-link head-about-link" href="<?php echo base_url(). 'backs_centre/contact';?>">ติดต่อเรา</a>
            </li>
          </ul>
        </div>
      </div>
    </div>
  </div>
</div>
