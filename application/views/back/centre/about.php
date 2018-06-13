<script type="text/javascript">
function action(x)
  {
  if(x == 'upload')
  {
    $("[name='pd_pto']").attr('src','<?php echo base_url(). 'img/show_photo.png';?>');
    $("[name='pd_name']").val('');
    $("[name='pd_price']").val('');
    $("[name='pd_from']").val('');
  }
  else
  {
    $.ajax({
            type: 'POST',
            data: 'id='+x,
            url: '<?php echo base_url(). "Backs_centre/edit_about";?>',
            dataType: 'json',
            success: function(data)
            {
              console.log(data);
              $('[name="centre_about_pto"]').attr("src",'<?php echo base_url(). 'img/';?>'+data[0].centre_about_pto);
              $('[name="centre_about_title"]').html(data[0].centre_about_title);
              $('[name="centre_about_code"]').html(data[0].centre_about_code);
              $('[name="id_centre_about"]').val(data[0].id_centre_about);
              $('[name="oldcentre_about_pto"]').val(data[0].centre_about_pto);
            },
            error: function()
            {
              alert('click error');
            }
          });
        }
  }
  function newabout(input)
  {
    if (input.files && input.files[0])
    {
       var reader = new FileReader();
       reader.onload = function (e)
       {
           $('#centre_about_pto').attr('src', e.target.result);
       }
       reader.readAsDataURL(input.files[0]);
    }
  }

  $(document).ready(function(e)
  {

    $('#add_pto').on("click",function()
    {
      $('#newcentre_about_pto').trigger("click");
    });

    $('.edit').click(function()
    {
        $('#about_form')[0].reset();
        $('#id_centre_about').val($(this).attr("id"));
        $('#action').val("update");
        $('#upload').val("Update");
        $('#about_modal').modal("show");
    });

    $('#about_form').on('submit',function(e)
    {
      e.preventDefault();
      if(confirm("Are you sure update data?"))
      {
      $.ajax({
              method: 'POST',
              url: "<?php echo base_url(). 'Backs_centre/save_about';?>",
              data: new FormData(this),
              contentType: false,
              processData: false,
              success: function(data)
              {
                alert('save success')
                location.reload();
              },
              error: function()
              {
                alert('not save about');
              }
            });
          }
    });
  });
</script>
<div class="container">
  <div class="row">
    <div class="col-md-12">
      <?php if($this->session->userdata('b_about')!=""):?>
        <table class="table">
          <thead>
          <tr class="text-center">
            <th>photo</th>
            <th>title</th>
            <th>code</th>
            <th>edit</th>
          </tr>
        </thead>
        <tbody>
          <?php foreach ($this->session->userdata('b_about') as $r) {?>
            <tr>
              <td><img src="<?php echo base_url(). "img/".$r->centre_about_pto;?>" height="100"/></td>
              <td><?php echo $r->centre_about_title;?></td>
              <td><input type="text" class="form-control-plaintext" value="<?php echo $r->centre_about_code;?>" readonly /></td>
              <td class="text-center"><a id="<?php echo $r->id_centre_about;?>" class="btn btn-success edit" onclick="javascript:action(<?php echo $r->id_centre_about;?>);">Edit</a>
                <div>แก้ไขล่าสุด เมื่อ<br>
                  <span><?php echo date('d/m/Y',strtotime($r->centre_about_time));?></span>
                </div>
              </td>
            </tr>
          <?php };?>
        </tbody>
        </table>
      <?php endif;?>
    </div>
  </div>
</div>

<div class="modal fade bd-example-modal-lg" id="about_modal" tabindex="-1" role="dialog">
  <div class="modal-dialog modal-lg">
    <form id="about_form" name="about_form" method="post">
      <div class="modal-content">
        <div class="modal-header">
          <h5 class="modal-title" id="exampleModalCenterTitle">edit about</h5>
          <button type="button" class="close" data-dismiss="modal" aria-label="Close">
            <span aria-hidden="true">&times;</span>
          </button>
        </div>
        <div class="modal-body">
          <div class="row">
            <div class="col-sm-7">
              <div class="text-right">
                <button type="button" id="add_pto" class="btn btn-primary">add photo</button>
              </div>
              <div>
                <label>title</label>
                <textarea type="text" name="centre_about_title" id="centre_about_title" rows="6" class="form-control"></textarea>
              </div>
            </div>
            <div class="col-sm-5">
              <input type="hidden" id="oldcentre_about_pto" name="oldcentre_about_pto"/>
              <input type="file" id="newcentre_about_pto" name="newcentre_about_pto" style="display:none;" onchange="newabout(this);"/>
              <img name="centre_about_pto" id="centre_about_pto" src class="w-100"/>
              <input type="hidden" id="id_centre_about" name="id_centre_about"/>
              <input type="hidden" name="action" id="action" value="upload"/>
            </div>
          </div>
          <div class="col-sm-12" style="margin-top:15px;">
            <div class="row">
              <textarea type="text" name="centre_about_code" id="centre_about_code" rows="12" class="form-control"></textarea>
            </div>
          </div>
          <div class="modal-footer">
            <button type="button" class="btn btn-danger" data-dismiss="modal">Close</button>
            <button type="submit" class="btn btn-success">Save</button>
          </div>
        </div>
      </div>
    </form>
  </div>
</div>
