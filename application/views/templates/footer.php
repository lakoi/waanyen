      <br>
      <div class="bg-secondary container-fluid" style="max-width:2000px;">
        <?php if(isset($footer)):?>
          <?php foreach ($footer as $r)
          {?>
        <div class="container" style="padding-top:50px; padding-bottom:50px;">
          <div class="row">
            <div class="col-sm-6">
              <div class="row">
                <div class="col-sm-4">
                  <img src="<?php echo base_url(). 'img/show_photo.png';?>" wigth="80" height="80" />
                  <!-- <img src="<?php echo base_url(). 'img/'.$r->footer_pto;?>" wigth="80" height="80" /> -->
                </div>
                <div class="col-sm-8">
                  <div>
                    <b><?php echo nl2br($r->footer_title);?></b>
                  </div>
                  <div>
                    <p style="font-size:14px;"><span><?php echo $r->footer_from;?></span><br>
                    โทรศัพท์ : <span><?php echo $r->footer_phone;?></span><br>
                    โทรสาร : <span><?php echo $r->footer_fax;?></span><br>
                    อีเมล : <span><?php echo $r->footer_mail;?></span></p>
                    <div>
                      <img src="<?php echo base_url(). 'img/show_photo.png';?>" wigth="35" height="35" />
                      <img src="<?php echo base_url(). 'img/show_photo.png';?>" wigth="35" height="35" />
                      <img src="<?php echo base_url(). 'img/show_photo.png';?>" wigth="35" height="35" />
                    </div>
                  </div>
                </div>
              </div>
            </div>
            <div class="col-sm-6" >
              <div class="row">
              <div class="col-sm-5">
                  <a href="#" class="list-footer">> หน้าแรก</a><br>
                  <a href="#" class="list-footer">> เกี่ยวกับเรา</a><br>
                  <a href="#" class="list-footer">> ศูนย์ต่างๆ</a><br>
                  <a href="#" class="list-footer">> ข่าวสาร</a><br>
                  <a href="#" class="list-footer">> อาสาสมัคร</a><br>
                  <a href="#" class="list-footer">> บริจาค</a>
              </div>
              <div class="col-sm-7">
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
      <div class="text-center bg-success" style="position: relative; padding:10px;  ">
        <div>
          Copyright 	&copy; 2016 www.blind.or.th All right reserved.
        </div>
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
