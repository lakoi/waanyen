<div class="container">
  <div class="row">
    <div class="col-sm-12 ">
      <?php if(isset($b_contact)):?>
        <?php foreach ($b_contact as $r) {?>
          <form method="post" name="contact_form" id="contact_form">
            <div class="row font-normal">
              <div class="col-sm-9">
                <div style="margin:15px;">
                  <input type="hidden" id="oldcentre_contact_pto" name="oldcentre_contact_pto" value="<?php echo $r->centre_contact_pto;?>"/>
                  <input type="file" id="newcentre_contact_pto" name="newcentre_contact_pto" style="display:none;" onchange="newcontact(this);"/>
                  <img src="<?php echo base_url(). 'img/'.$r->centre_contact_pto;?>" name="centre_contact_pto" id="centre_contact_pto" height="200">
                  <input type="hidden" id="id_centre_contact" name="id_centre_contact" value="<?php echo $r->id_centre_contact;?>"/>
                </div>
                <div>
                  <button type="button" id="add_pto" class="btn btn-primary">add photo</button>
                </div>
                <div>
                  <p>ศูนย์ <input type="text" class="form-control" name="centre_contact_name" value="<?php echo $r->centre_contact_name;?>"/></p>
                  <p>ที่อยู่ <input type="text" class="form-control" name="centre_contact_from" value="<?php echo $r->centre_contact_from;?>"/></p>
                  <p>โทรศัพท์ <input type="text" class="form-control" name="centre_contact_phone" value="<?php echo $r->centre_contact_phone;?>"/></p>
                  <p>โทรสาร <input type="text" class="form-control" name="centre_contact_fax" value="<?php echo $r->centre_contact_fax;?>"/></p>
                  <p>อีเมล : <input type="text" class="form-control" name="centre_contact_email" value="<?php echo $r->centre_contact_email;?>"/></p>
                </div>
              </div>
              <div class="col-sm-3 text-center">
                <button type="submit" class="btn btn-success">Save</button>
                <div>แก้ไขล่าสุด เมื่อ<br><span><?php echo date('d/m/Y',strtotime($r->centre_contact_time));?><span></div>
              </div>
            </div>
          </form>
        <?php };?>
      <?php endif;?>
    </div>
  </div>
</div>

<script type="text/javascript">

function newcontact(input)
{
  if (input.files && input.files[0])
  {
     var reader = new FileReader();
     reader.onload = function (e)
     {
         $('#centre_contact_pto').attr('src', e.target.result);
     }
     reader.readAsDataURL(input.files[0]);
  }
}

$(document).ready(function(e)
{
  $('#add_pto').on("click",function()
  {
    $('#newcentre_contact_pto').trigger("click");
  });

  $('.edit').click(function()
  {
      $('#contact_form')[0].reset();
      $('#id_centre_contact').val($(this).attr("id"));
      $('.modal-title').text("update contact");
      $('#contact_modal').modal("show");
  });

  $('#contact_form').on('submit',function(e)
  {
    e.preventDefault();
    if(confirm("Are you sure update data?"))
    {
    $.ajax({
            method: 'POST',
            url: "<?php echo base_url(). 'Backs_centre/save_contact';?>",
            data: new FormData(this),
            contentType: false,
            processData: false,
            success: function(data)
            {
              alert('save success')
              location.reload();
            },
            error: function(request, status, error)
            {
               alert(request.responseText);
              alert('not save product');
            }
          });
        }
  });
});
</script>
