<div class="container">
  <div class="row">
    <div class="col-md-12">
      <div style="margin-top:30px;">
        <p style="font-size:24px;">ศูนย์ต่างๆ<p>
        <hr style="margin:0px 0px 0px 0px; border:2px solid #3a99c4;">
      </div>
      <div class="row">
        <?php if(isset($centre)):?>
          <?php foreach ($centre as $r) {?>
            <form method="post" action="<?php echo base_url(). "centre/centre_about";?>">
              <input type="hidden" name="id_centre" value="<?php echo $r->id_centre;?>">
        <div class="col-md-4" style="margin:30px 0px 0px 0px; ">
          <div class="border" style="width:330px; height:420px;">
            <div style="height:250px; ">
              <img src="<?php echo base_url().'img/'.$r->centre_pto;?>" class="w-100 h-100" >
            </div>
            <div class="text-center" style="padding:15px 10px 0px 10px;">
              <p style="font-size:18px;"><?php echo $r->centre_title;?></p>
              <p class="font-normal" style="font-size:14px; margin-top:-10px;"><?php echo $r->centre_content;?></p>
              <button type="submit" class="btn btn-primary">ดูรายละเอียด</button>
            </div>
          </div>
        </div>
      </form>
      <?php };?>
    <?php endif;?>
      </div>
    </div>
  </div>
</div>

<script>
function action(x)
{
  $.ajax({
          type: 'POST',
          data: 'id='+x,
          url: '<?php echo base_url(). "centre/centre_about";?>',
          success: function(data)
          {
            console.log(data);
            $('.body').html(data);
            // $('[name="news_pto"]').attr("src",'<?php echo base_url(). 'img/';?>'+data[0].news_pto);
            // $('[name="news_title"]').val(data[0].news_title);
            // $('[name="news_content"]').val(data[0].news_content);
            // $('[name="news_bt"]').val(data[0].news_bt);
            // $('[name="id_news"]').val(data[0].id_news);
            // $('[name="news_post"]').html(data[0].news_post);
            // $('[name="oldnews_pto"]').val(data[0].news_pto);
          },
          error: function()
          {
            alert('click error');
          }
        });
}
</script>
