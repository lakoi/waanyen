<div>
  <div class="col-sm-10 offset-1 text-center">
    <form method="post" id="donate_form" name="donate_form" action="">
      <div class="row">
        <div class="col-sm-6 offset-3">
          <input type="hidden" id="id_donate" name="id_donate" />
          <div class="border col-sm-12">
            <input type="text" class="form-control text-center" id="donate_bd" name="donate_bd" />
          </div>
            <input type="text" class="form-control text-center" id="donate1" name="donate1" />
            <input type="text" class="form-control text-center" id="donate2" name="donate2" />
            <button type="button" class="btn btn-primary">
              <input type="text" class="form-control text-center" id="donate_bt" name="donate_bt" />
            </button>
        </div>
        <div class="col-sm-3">
          <input type="submit" id="save_donate" class="btn btn-success" value="Save Donate"/>
          <div>
            <div>แก้ไขล่าสุด เมื่อ <span id="donate_time"><span></div>
          </div>
        </div>
      </div>
    </form>
  </div>
</div>


<script type="text/javascript">
  $(function(){
    getdonate();
  });
    function getdonate()
    {
    $.ajax({
      type: 'POST',
      url: "<?php echo base_url(). "Pages/getdonate";?>",
      dataType: 'json',
      success: function(data)
      {
        $.each(data.donate, function(key, val) {
          $('#id_donate').val(val["id_donate"]);
          $('#donate_bd').val(val["donate_bd"]);
          $('#donate1').val(val["donate1"]);
          $('#donate2').val(val["donate2"]);
          $('#donate_bt').val(val["donate_bt"]);
          $('#donate_time').html(val["donate_time"]);
          });
     },
     error: function()
     {
       alert('not');
     }
   });
  }
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
                $('#check_donate').val('');
                $('#id_donate').val('');
                $('#donate_bd').val('');
                $('#donate1').val('');
                $('#donate2').val('');
                $('#donate_bt').val('');
                getdonate();
                // location.reload();
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
