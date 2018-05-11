<form method="post" id="about_form" name="about_form" action="">
<div class="row">
  <div class="col-sm-5 offset-1">
    <div class="col-sm-10">
      <input type="hidden" id="id_about" name="id_about"/>
      <p><input type="text" class="form-control text-center" id="about_tle" name="about_tle"/></p>
      <hr width="20%">
      <h1><input type="text" class="form-control"  id="about_h1" name="about_h1"/></h1>
      <h5><input type="text" class="form-control"  id="about_h2" name="about_h2"/></h5>
      <p><textarea type="text" class="form-control" rows=2 cols=40 style="resize:none;" id="about_ui" name="about_ui"></textarea></p>
      <ui>
        <li><textarea type="text" class="form-control" rows=2 cols=40 style="resize:none;" id="about_li1" name="about_li1"></textarea></li>
        <li><textarea type="text" class="form-control" rows=2 cols=40 style="resize:none;" id="about_li2" name="about_li2"></textarea></li>
        <li><textarea type="text" class="form-control" rows=2 cols=40 style="resize:none;" id="about_li3" name="about_li3"></textarea></li>
        <li><textarea type="text" class="form-control" rows=2 cols=40 style="resize:none;" id="about_li4" name="about_li4"></textarea></li>
      </ui>
    </div>
  </div>
  <div class="col-sm-3">
      <label>คลิกที่รูปเพื่อแก้ไข</label>
    <div>
    <input type="hidden" id="oldabout_pto1" name="oldabout_pto1"/>
    <input type="file" id="showabout_pto1" name="showabout_pto1" style="display:none;" onchange="showabout1(this);"/>
    <img src class="btn-upload border" wigth="200" height="200" id="about_pto1" name="about_pto1"/>
  </div>
  </div>
  <div>
    <input type="submit" id="save_About" class="btn btn-success" value="Save About"/>
  </div>
</div>
</form>

<script type="text/javascript">
function showabout1(input)
{
  if (input.files && input.files[0])
  {
     var reader = new FileReader();
     reader.onload = function (e)
     {
         $('#about_pto1').attr('src', e.target.result);
     }
     reader.readAsDataURL(input.files[0]);
  }
}
$(function()
{
  getabout();
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
              var id_about = val["id_about"];
              var about_tle = val["about_tle"];
              var about_h1 = val["about_h1"];
              var about_h2 = val["about_h2"];
              var about_ui = val["about_ui"];
              var about_li1 = val["about_li1"];
              var about_li2 = val["about_li2"];
              var about_li3 = val["about_li3"];
              var about_li4 = val["about_li4"];
              var about_pto1 = val["about_pto1"];

              $('#id_about').val(id_about);
              $('#about_tle').val(about_tle);
              $('#about_h1').val(about_h1);
              $('#about_h2').val(about_h2);
              $('#about_ui').val(about_ui);
              $('#about_li1').val(about_li1);
              $('#about_li2').val(about_li2);
              $('#about_li3').val(about_li3);
              $('#about_li4').val(about_li4);
              $('#about_pto1').attr("src",'<?php echo base_url(). 'img/';?>'+about_pto1);
              $('#oldabout_pto1').val(about_pto1);
            });
           },
           error: function()
           {
             alert('not getdonate');
           }
         });
  }


  $(document).ready(function(e)
  {
    $(".btn-upload").on("click",function()
    {
      $('#showabout_pto1').trigger("click");
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
                $('#id_about').val('');
                $('#about_tle').val('');
                $('#about_h1').val('');
                $('#about_h2').val('');
                $('#about_ui').val('');
                $('#about_li1').val('');
                $('#about_li2').val('');
                $('#about_li3').val('');
                $('#about_li4').val('');
                $('#about_pto1').attr('src','');
                $('#oldabout_pto1').val('');
                getabout();
                // location.reload();
              },
              error: function()
              {
                alert('not save about.');
              }
            });
          }
    }));
});
});




</script>
