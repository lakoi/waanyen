  <div class="container text-center">
    <form method="post" id="donate_form" name="donate_form" action="">
      <?php if(isset($donate)):?>
        <?php foreach ($donate as $r) {?>
      <div class="row">
        <div class="col-sm-6 offset-3">
          <input type="hidden" id="id_donate" name="id_donate" value="<?php echo $r->id_donate;?>"/>
            <textarea class="form-control text-center" name="donate_title"  id="donate_title" rows="1" cols="50"><?php echo $r->donate_title;?></textarea>
            <br>
            <textarea class="form-control text-center" name="donate_text"  id="donate_text" rows="2" cols="50"><?php echo $r->donate_text;?></textarea>
            <br>
            <button type="button" class="btn btn-primary">
              <input type="text" class="form-control text-center" id="donate_bt" name="donate_bt" value="<?php echo $r->donate_bt;?>"/>
            </button>
        </div>
        <div class="col-sm-3">
          <input type="submit" id="save_donate" class="btn btn-success" value="Save Donate"/>
          <div>
            <div>แก้ไขล่าสุด เมื่อ<br><span><?php echo date('d/m/Y',strtotime($r->donate_time));?><span></div>
          </div>
        </div>
      </div>
    <?php };?>
  <?php endif;?>
    </form>
  </div>


<script type="text/javascript">
  $(document).ready(function(e)
  {
    $('#donate_form').on('submit',(function(e)
    {
      e.preventDefault();
      if(confirm("Are you sure update data?"))
      {
      $.ajax({
              method: 'POST',
              url: "<?php echo base_url(). 'Backs/save_donate';?>",
              data: new FormData(this),
              contentType: false,
              processData: false,
              success: function(data)
              {
                console.log(data);
                alert('save success.');
                location.reload();
              },
              error: function()
              {
                alert('not save donate.');
              }
            });
          }
    }));
  });
</script>
