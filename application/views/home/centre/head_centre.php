
<div class="container-fluid" style="background-color:rgba(250,250,250,0.5); max-width:2000px; margin-bottom:30px;">
  <div class="container">
    <div class="row">
      <div class="col-md-12" style="margin-top:20px;">
        <?php if(isset($centre)):?>
          <?php foreach ($centre as $r) {?>
      <p style="font-size:24px;"><?php echo $r->centre_title;?><p>
      <?php };?>
    <?php endif;?>
      <hr style="margin:0px 0px 0px 0px; border:2px solid #3a99c4;">
        <div style="margin:10px 0px 10px 0px;">
          <ul class="nav">
            <li class="nav-item head-about-list">
              <a class="nav-link head-about-link"  href="#">เกี่ยวกับเรา</a>
            </li>
            <li class="nav-item head-about-list">
              <a class="nav-link head-about-link" href="#">ข่าวสาร</a>
            </li>
            <li class="nav-item head-about-list">
              <a class="nav-link head-about-link" href="#">ผลิตภัณฑ์และบริการ</a>
            </li>
            <li class="nav-item head-about-list">
              <a class="nav-link head-about-link" href="#">บริจาคและอาสาสมัคร</a>
            </li>
            <li class="nav-item head-about-list">
              <a class="nav-link head-about-link" href="#">ติดต่อเรา</a>
            </li>
          </ul>
        </div>
      </div>
    </div>
  </div>
</div>
