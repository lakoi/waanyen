      <?php if(empty($slide)):?>
      <div class="container">
        <div class="row" style="margin:30px 0px 30px 0px;">
          <div class="col-md-6">
            <div class="row">
              <a href="#"><i class="fas fa-print"></i> พิมพ์หน้านี้</a>
            </div>
          </div>
          <div class="col-md-6 text-right" style="padding:0px;">
            <span><i class="fas fa-eye"></i> อ่านแล้ว ... คน</span>
          </div>
        </div>
      </div>
    <?php endif;?>
      <div class="container-fluid" style="max-width:2000px; background-image:url('<?php echo base_url(). 'img/images/bg-footer.jpg';?>')">
        <?php if(isset($footer)):?>
          <?php foreach ($footer as $r)
          {?>
        <div class="container" style="padding-top:50px; padding-bottom:50px;">
          <div class="row">
            <div class="col-lg-6 col-md-12">
              <div class="row">
                <div class="col-sm-2">
                  <img src="<?php echo base_url(). 'img/images/footer-logo.png';?>" wigth="80" height="80"/>
                  <!-- <img src="<?php echo base_url(). 'img/'.$r->footer_pto;?>" wigth="80" height="80" /> -->
                </div>
                <div class="col-sm-10" style="color:white;">
                  <div>
                    <p class="footer-title" style=" font-size:18px;"><?php echo nl2br($r->footer_title);?></p>
                  </div>
                  <div>
                    <p class="font-normal" style="font-size:14px;"><span><?php echo $r->footer_from;?></span><br>
                    โทรศัพท์ : <span><?php echo $r->footer_phone;?></span><br>
                    โทรสาร : <span><?php echo $r->footer_fax;?></span><br>
                    อีเมล : <span><?php echo $r->footer_mail;?></span></p>
                    <div class="col-md-4" style="background-image:url('<?php echo base_url(). 'img/images/social.png';?>'); background-size:100% 100%; padding:0px 0px 0px 15px;">
                    <div class="row">

                        <div style="background-color: rgba(0,0,0,0); height:34px; width:34px;">

                        </div>


                        <div style="background-color:rgba(9,9,9,0); height:40px; width:40px;">

                        </div>

                    </div>
                      <!-- <img src="<?php echo base_url(). 'img/images/social.png';?>"/> -->
                    </div>
                  </div>
                </div>
              </div>
            </div>
            <div class="col-lg-6 col-md-12" >
              <div class="row">
              <div class="col-sm-6">
                  <a href="#" class="list-footer">> หน้าแรก</a><br>
                  <a href="#" class="list-footer">> เกี่ยวกับเรา</a><br>
                  <a href="#" class="list-footer">> ศูนย์ต่างๆ</a><br>
                  <a href="#" class="list-footer">> ข่าวสาร</a><br>
                  <a href="#" class="list-footer">> อาสาสมัคร</a><br>
                  <a href="#" class="list-footer">> บริจาค</a>
              </div>
              <div class="col-sm-6">
                <ui>
                  <a href="#" class="list-footer">> คำถามที่พบบ่อย</a><br>
                  <a href="#" class="list-footer">> เว็บลิงก์</a><br>
                  <a href="#" class="list-footer">> ตัวช่วยเหลือการเข้าสู่เว็บไซต์</a><br>
                  <a href="#" class="list-footer">> ติดต่อเรา</a><br>
                  <a href="#" class="list-footer">> แผนผังเว็บไซต์</a>
                </ui>
              </div>
            </div>
            </div>
          </div>
        </div>
          <?php };?>
        <?php endif;?>
      </div>
      <div class="text-center font-normal" style="color:white; position: relative; padding:10px; background-color: #165378; max-width:2000px; margin:auto;">
          Copyright 	&copy; 2016 www.blind.or.th All right reserved.
      </div>


      <script type="text/javascript">
      $(function(){
        if($('#title').text() == '')
        {
          $('#myModal').modal('hide');
        }
        else
        {
          $('#myModal').modal('show');
        }
        });

        $(document).ready(function()
      {
        $( "p" ).click(function() {
          $( this ).toggleClass( "highlight" );
        });

        $('.qw').mouseover(function()
      {
        var id = $(this).attr("id");
        $('.we'+id).css({"display":"block"});
      });

      $('.qw').mouseout(function()
    {
      var id = $(this).attr("id");
      $('.we'+id).css({"display":"none"});
    });
      });
      </script>


<script src="https://code.jquery.com/jquery-3.3.1.min.js"></script>
<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.2/jquery.min.js"></script>
<script type="text/javascript" src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>
</body>
</html>
