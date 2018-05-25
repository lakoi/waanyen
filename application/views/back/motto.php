<div class="col-sm-10 offset-1">
  <form method="POST" id="motto_form" name="motto_form" >
  <div class="text-center">
    <?php if(isset($motto)):?>
      <?php foreach ($motto as $r)
      {?>
    <div class="row">
      <div class="col-sm-6">
        <input type="hidden" id="id_motto" name="id_motto" value="<?php echo $r->id_motto;?>"/>
        <textarea name="motto_txt" id="motto_txt" class="form-control text-center"><?php echo $r->motto_txt;?></textarea>
        <div class="text-center">
          <button type="button" class="btn btn-primary"><input type="text" name="motto_bt" id="motto_bt" class="form-control text-center" value="<?php echo $r->motto_bt;?>"/></button>
        </div>
      </div>
      <div class="col-sm-6">
        <button type="submit" class="btn btn-success">save motto</button>
      </div>
    </div>
  <?php };?>
  <?php endif;?>
  </div>
</form>
</div>

<script type="text/javascript">
  $(document).ready(function(e)
  {
    $('#motto_form').on('submit',(function(e)
    {
      e.preventDefault();
      if(confirm("Are you sure update data?"))
      {
      $.ajax({
              method: 'POST',
              url: "<?php echo base_url(). 'Backs/save_motto';?>",
              data: new FormData(this),
              contentType: false,
              processData: false,
              success: function(data)
              {
                alert('save success.');
                location.reload();
              },
              error: function(data)
              {
                alert('not save motto.');
              }
            });
      }
    }));
  });
</script>
