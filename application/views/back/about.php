<div class="container">
  <form method="post" id="about_form" name="about_form" action="">
    <div class="row">
      <?php if(isset($about)):?>
        <?php foreach ($about as $r) {?>
      <div class="col-sm-6">
        <textarea class="form-control" id="about_head" name="about_head" ><?php echo $r->about_head;?></textarea>
        <hr>
        <textarea class="form-control" id="about_title" name="about_title" ><?php echo $r->about_title;?></textarea>
        <hr>
        <textarea class="form-control" id="about_content" name="about_content" rows="4"><?php echo $r->about_content;?></textarea>
      </div>
      <div class="col-sm-3">
        <label>คลิกที่รูปเพื่อแก้ไข</label>
        <div>
          <input type="hidden" id="id_about" name="id_about" value="<?php echo $r->id_about;?>"/>
          <input type="hidden" id="oldabout_pto" name="oldabout_pto" value="<?php echo $r->about_pto;?>"/>
          <input type="file" id="showabout_pto" name="showabout_pto" style="display:none;" onchange="showabout1(this);"/>
          <img src="<?php echo base_url().'img/'.$r->about_pto;?>" class="btn-upload border" height="200" id="about_pto" name="about_pto"/>
        </div>
      </div>
      <div class="text-center">
        <input type="submit" id="save_About" class="btn btn-success" value="Save About"/>
        <div>แก้ไขล่าสุด เมื่อ<br><span><?php echo date('d/m/Y',strtotime($r->about_time));?><span></div>
      </div>

    <?php };?>
  <?php endif;?>
    </div>
  </form>
</div>

<script type="text/javascript">
function showabout1(input)
{
  if (input.files && input.files[0])
  {
     var reader = new FileReader();
     reader.onload = function (e)
     {
         $('#about_pto').attr('src', e.target.result);
     }
     reader.readAsDataURL(input.files[0]);
  }
}

  $(document).ready(function(e)
  {
    $(".btn-upload").on("click",function()
    {
      $('#showabout_pto').trigger("click");
    });

    $('#about_form').on('submit',(function(e)
    {
      e.preventDefault();
      if(confirm("Are you sure update data?"))
      {
      $.ajax({
              method: 'POST',
              url: "<?php echo base_url(). 'Backs/save_about';?>",
              data: new FormData(this),
              contentType: false,
              processData: false,
              success: function(data)
              {
                alert('save success.');
                // $('#id_about').val('');
                // $('#about_head').val('');
                // $('#about_title').val('');
                // $('#about_content').val('');
                // $('#about_time').val('');
                // $('#about_pto1').attr('src','');
                // $('#oldabout_pto').val('');
                // getabout();
                location.reload();
              },
              error: function()
              {
                alert('not save about.');
              }
            });
          }
    }));
  });
</script>
