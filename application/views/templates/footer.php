      <br>
      <div class="bg-secondary text-center">
        <img src="<?php echo base_url(). 'img/show_photo.png';?>" wigth="100" height="100" />
        <div>
          <b>มูลนิธิช่วยคนตาบอดแห่งประเทศไทย</b><br>
          <p>ในพระบรมราชินูปถัมภ์</p><br>
        </div>
        <div>
          <p>420 ถนนราชวิถี แขวงทุ่งพญาไท เขตราชเทวี กรุงเทพมหานคร 10400<br>
          โทรศัพท์ : 0-2354-8365-68 , 0-2354-8370-71<br>
          โทรสาร : 0-2354-8369<br>
          อีเมล : service@blind.or.th</p><br>
          <p>Copyright 	&copy; 2016 www.blind.or.th All right reserved.</p>
        </div>
      </div>

      <script type="text/javascript">
      $(function(){
        getdonate();
        getabout();
        if($('#title').text() == '')
        {
          $('#myModal').modal('hide');
        }
        else
        {
          $('#myModal').modal('show');
        }
        });

        function getdonate()
        {
        $.ajax({
                type: 'POST',
                url: "<?php echo base_url(). "Pages/getdonate";?>",
                dataType: 'json',
                success: function(data)
                {
                  $.each(data.donate, function(key, val)
                  {
                    $('#id_donate').html(val["id_donate"]);
                    $('#donate_bd').html(val["donate_bd"]);
                    $('#donate1').html(val["donate1"]);
                    $('#donate2').html(val["donate2"]);
                    $('#donate_bt').html(val["donate_bt"]);
                  });
                 },
                 error: function()
                 {
                   alert('not getdonate');
                 }
               });
        }

        function getabout()
        {
        $.ajax({
                type: 'POST',
                url: "<?php echo base_url(). "Pages/getabout";?>",
                dataType: 'json',
                success: function(data)
                {
                  $.each(data.about, function(key, val)
                  {
                    $('#id_about').html(val["id_about"]);
                    $('#about_tle').html(val["about_tle"]);
                    $('#about_h1').html(val["about_h1"]);
                    $('#about_h2').html(val["about_h2"]);
                    $('#about_ui').html(val["about_ui"]);
                    $('#about_li1').html(val["about_li1"]);
                    $('#about_li2').html(val["about_li2"]);
                    $('#about_li3').html(val["about_li3"]);
                    $('#about_li4').html(val["about_li4"]);
                    $('#about_pto1').attr('src','<?php echo base_url(). 'img/';?>'+val["about_pto1"]);
                  });
                 },
                 error: function()
                 {
                   alert('not getdonate');
                 }
               });
        }
      </script>


<script src="https://code.jquery.com/jquery-3.3.1.min.js"></script>
<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.2/jquery.min.js"></script>
<script type="text/javascript" src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>
</body>
</html>
