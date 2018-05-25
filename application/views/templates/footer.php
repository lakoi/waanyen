      <br>
      <div class="bg-secondary text-center">
        <?php if(isset($footer)):?>
          <?php foreach ($footer as $r)
          {?>
            <img src="<?php echo base_url(). 'img/'.$r->footer_pto;?>" wigth="100" height="100" />
            <div>
              <b><?php echo nl2br($r->footer_title);?></b>
            </div>
            <div>
              <p><?php echo $r->footer_from;?><br>
              โทรศัพท์ : <?php echo $r->footer_phone;?><br>
              โทรสาร : <?php echo $r->footer_fax;?><br>
              อีเมล : <?php echo $r->footer_mail;?></p><br>
              <p>Copyright 	&copy; 2016 www.blind.or.th All right reserved.</p>
            </div>
          <?php };?>
        <?php endif;?>
      </div>

      <script type="text/javascript">
      $(function(){
        getdonate();
        getabout();
        // getcentre();
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

        $(document).ready(function()
      {
        $('.centre-mid').mouseenter(function()
        {
          $('.centre-txt1').hover();
        });
        var id = $('.qw').attr("id");
        $('.qw').hover(function()
        {
          // alert(id);
          // alert(id);
          // alert($(this).attr("id"));
          $('.we').show();
        },
        function()
        {
          $('.we').hide();
        });
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
                    $('#about_head').html(val["about_head"]);
                    $('#about_motto').html(val["about_motto"]);
                    $('#about_content').html(val["about_content"]);
                    $('#about_pto1').attr('src','<?php echo base_url(). 'img/';?>'+val["about_pto1"]);
                  });
                 },
                 error: function()
                 {
                   alert('not getdonate');
                 }
               });
        }

        // function getcentre()
        // {
        // $.ajax({
        //         type: 'POST',
        //         url: "<?php echo base_url(). "Pages/getcentre";?>",
        //         dataType: 'json',
        //         success: function(data)
        //         {
        //           $.each(data.centre, function(key, val)
        //           {
        //             if(key == "0")
        //             {
        //               $('#centre_area11').html(val["centre_area1"]);
        //               $('#centre_area12').html(val["centre_area2"]);
        //               $('#centre_bt1').html(val["centre_bt"]);
        //               $('#centre_pto1').attr('src','<?php echo base_url(). 'img/';?>'+val["centre_pto"]);
        //             }
        //             if(key == "1")
        //             {
        //               $('#centre_area21').html(val["centre_area1"]);
        //               $('#centre_area22').html(val["centre_area2"]);
        //               $('#centre_bt2').html(val["centre_bt"]);
        //               $('#centre_pto2').attr('src','<?php echo base_url(). 'img/';?>'+val["centre_pto"]);
        //             }
        //             if(key == "2")
        //             {
        //               $('#centre_area31').html(val["centre_area1"]);
        //               $('#centre_area32').html(val["centre_area2"]);
        //               $('#centre_bt3').html(val["centre_bt"]);
        //               $('#centre_pto3').attr('src','<?php echo base_url(). 'img/';?>'+val["centre_pto"]);
        //             }
        //             if(key == "3")
        //             {
        //               $('#centre_area41').html(val["centre_area1"]);
        //               $('#centre_area42').html(val["centre_area2"]);
        //               $('#centre_bt4').html(val["centre_bt"]);
        //               $('#centre_pto4').attr('src','<?php echo base_url(). 'img/';?>'+val["centre_pto"]);
        //             }
        //             if(key == "4")
        //             {
        //               $('#centre_area51').html(val["centre_area1"]);
        //               $('#centre_area52').html(val["centre_area2"]);
        //               $('#centre_bt5').html(val["centre_bt"]);
        //               $('#centre_pto5').attr('src','<?php echo base_url(). 'img/';?>'+val["centre_pto"]);
        //             }
        //           });
        //          },
        //          error: function()
        //          {
        //            alert('not getcentre');
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
