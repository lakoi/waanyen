<div class="text-center col-sm-10 offset-1">
  <form method="POST" name="footer_form" id="footer_form">
  <?php if(isset($footer)):?>
    <?php foreach ($footer as $r)
    {?>
  <div class="row">
    <div class="col-sm-6">
      <input type="hidden" name="oldfooter_pto" id="oldfooter_pto" value="<?php echo $r->footer_pto;?>"/>
      <input type="file" id="newfooter_pto" name="newfooter_pto" style="display: none;" onchange="showphoto(this);"/>
      <img name="footer_pto" id="footer_pto" src="<?php echo base_url(). 'img/'.$r->footer_pto;?>" wigth="150" height="150" style="padding: 10px;" /><br>
      <input type="hidden" name="id_footer" id="id_footer" value="<?php echo $r->id_footer;?>"/>
      <button class="btn btn-primary" type="button" id="add_photo" >add  photo</button>
      <br>
      <br>
      <div class="row">
        <div class="col-sm-2">
          <label>title</label>
        </div>
        <div class="col-sm-10">
          <textarea class="form-control" name="footer_title" id="footer_title"><?php echo $r->footer_title;?></textarea>
        </div>
      </div>
      <br>
      <div class="row">
        <div class="col-sm-2">
          <label>from</label>
        </div>
        <div class="col-sm-10">
          <textarea class="form-control" name="footer_from" id="footer_from"><?php echo $r->footer_from;?></textarea>
        </div>
      </div>
      <br>
      <div class="row">
        <div class="col-sm-2">
          <label>phone</label>
        </div>
        <div class="col-sm-10">
          <input type="text" class="form-control" name="footer_phone" id="footer_phone" value="<?php echo $r->footer_phone;?>"/>
        </div>
      </div>
      <br>
      <div class="row">
        <div class="col-sm-2">
          <label>fax</label>
        </div>
        <div class="col-sm-10">
          <input type="text" class="form-control" name="footer_fax" id="footer_fax" value="<?php echo $r->footer_fax;?>">
        </div>
      </div>
      <br>
      <div class="row">
        <div class="col-sm-2">
          <label>E-mail</label>
        </div>
        <div class="col-sm-10">
          <input type="text" class="form-control" name="footer_mail" id="footer_mail" value="<?php echo $r->footer_mail;?>">
        </div>
      </div>
      <br>
      <p>Copyright 	&copy; 2016 www.blind.or.th All right reserved.</p>
    </div>
    <div class="col-sm-6">
      <button class="btn btn-success" type="submit">save footer</button>
    </div>
  </div>
  <?php };?>
  <?php endif;?>
  <form>
</div>

<script>
  function showphoto(input)
  {
    if (input.files && input.files[0])
    {
       var reader = new FileReader();
       reader.onload = function (e)
       {
           $('#footer_pto').attr('src', e.target.result);
       }
       reader.readAsDataURL(input.files[0]);
    }
  }

  $(document).ready(function(e)
  {
    $("#add_photo").on("click",function()
    {
      $('#newfooter_pto').trigger("click");
    });

    $('#footer_form').on('submit',(function(e)
    {
      e.preventDefault();
      if(confirm("Are you sure update data?"))
      {
      $.ajax({
              method: 'POST',
              url: "<?php echo base_url(). 'Backs/save_footer';?>",
              data: new FormData(this),
              contentType: false,
              processData: false,
              success: function(data)
              {
                alert('save success.');
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
