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
        getcentre();
        // getnews();
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

        function getcentre()
        {
        $.ajax({
                type: 'POST',
                url: "<?php echo base_url(). "Pages/getcentre";?>",
                dataType: 'json',
                success: function(data)
                {
                  $.each(data.centre, function(key, val)
                  {
                    if(key == "0")
                    {
                      $('#centre_area11').html(val["centre_area1"]);
                      $('#centre_area12').html(val["centre_area2"]);
                      $('#centre_bt1').html(val["centre_bt"]);
                      $('#centre_pto1').attr('src','<?php echo base_url(). 'img/';?>'+val["centre_pto"]);
                    }
                    if(key == "1")
                    {
                      $('#centre_area21').html(val["centre_area1"]);
                      $('#centre_area22').html(val["centre_area2"]);
                      $('#centre_bt2').html(val["centre_bt"]);
                      $('#centre_pto2').attr('src','<?php echo base_url(). 'img/';?>'+val["centre_pto"]);
                    }
                    if(key == "2")
                    {
                      $('#centre_area31').html(val["centre_area1"]);
                      $('#centre_area32').html(val["centre_area2"]);
                      $('#centre_bt3').html(val["centre_bt"]);
                      $('#centre_pto3').attr('src','<?php echo base_url(). 'img/';?>'+val["centre_pto"]);
                    }
                    if(key == "3")
                    {
                      $('#centre_area41').html(val["centre_area1"]);
                      $('#centre_area42').html(val["centre_area2"]);
                      $('#centre_bt4').html(val["centre_bt"]);
                      $('#centre_pto4').attr('src','<?php echo base_url(). 'img/';?>'+val["centre_pto"]);
                    }
                    if(key == "4")
                    {
                      $('#centre_area51').html(val["centre_area1"]);
                      $('#centre_area52').html(val["centre_area2"]);
                      $('#centre_bt5').html(val["centre_bt"]);
                      $('#centre_pto5').attr('src','<?php echo base_url(). 'img/';?>'+val["centre_pto"]);
                    }
                  });
                 },
                 error: function()
                 {
                   alert('not getcentre');
                 }
               });
        }

        // function getnews()
        // {
        // $.ajax({
        //         type: 'POST',
        //         url: "<?php echo base_url(). "Pages/getnews";?>",
        //         dataType: 'json',
        //         success: function(data)
        //         {
        //           $.each(data.news, function(key, val)
        //           {
        //             if(key == "0")
        //             {
        //               $('#id_news1').html(val["id_news"]);
        //               $('#news_pto1').attr('src','<?php echo base_url(). 'img/';?>'+val["news_pto"]);
        //               $('#news_title1').html(val["news_title"]);
        //               $('#news_content1').html(val["news_content"]);
        //               $('#news_bt1').html(val["news_bt"]);
        //               $('#news_time1').html(val["news_time"]);
        //               $('#news_post1').html(val["news_post"]);
        //             }
        //             if(key == "1")
        //             {
        //               $('#id_news2').html(val["id_news"]);
        //               $('#news_pto2').attr('src','<?php echo base_url(). 'img/';?>'+val["news_pto"]);
        //               $('#news_title2').html(val["news_title"]);
        //               $('#news_content2').html(val["news_content"]);
        //               $('#news_bt2').html(val["news_bt"]);
        //               $('#news_time2').html(val["news_time"]);
        //               $('#news_post2').html(val["news_post"]);
        //             }
        //             if(key == "2")
        //             {
        //               $('#id_news3').html(val["id_news"]);
        //               $('#news_pto3').attr('src','<?php echo base_url(). 'img/';?>'+val["news_pto"]);
        //               $('#news_title3').html(val["news_title"]);
        //               $('#news_content3').html(val["news_content"]);
        //               $('#news_bt3').html(val["news_bt"]);
        //               $('#news_time3').html(val["news_time"]);
        //               $('#news_post3').html(val["news_post"]);
        //             }
        //           });
        //
        //          },
        //          error: function()
        //          {
        //            alert('not getnews');
        //          }
        //        });
        // }
      </script>


<script src="https://code.jquery.com/jquery-3.3.1.min.js"></script>
<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.2/jquery.min.js"></script>
<script type="text/javascript" src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>
</body>
</html>
