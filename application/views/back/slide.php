  <div class="container">
    <div class="col-sm-12 text-right">
      <button id="add" type="button" class="btn btn-primary" onclick="action('upload');">add slide</button>
    </div>
    <?php if(isset($slide)):?>
      <table class="table">
        <thead>
          <th>photo</th>
          <th>title</th>
          <th>content</th>
          <th>edit</th>
          <th>delete</th>
        </thead>
        <tbody>
          <?php foreach ($slide as $r) {?>
            <tr class="text-center">
              <td><img class="d-block" src="<?php echo base_url(). 'img/'.$r->slide_pto;?>" width="160" height="80"></td>
              <td style="width:400px;"><?php echo $r->slide_title;?></td>
              <td style="width:380px;"><?php echo $r->slide_content;?></td>
              <td class="text-center"><a id="<?php echo $r->id_slide;?>" style="color: white;" class="btn btn-success edit" onclick="action(<?php echo $r->id_slide;?>)">Edit</a>
              <div>แก้ไขล่าสุด เมื่อ<br><span><?php echo date('d/m/Y',strtotime($r->slide_time));?><span></div></td>
              <td><a id="<?php echo $r->id_slide;?>" style="color: white;" class="btn btn-danger delete" >Delete</a></td>
            </tr>
          <?php };?>
        </tbody>
      </table>
    <?php endif;?>
  </div>

  <div class="modal fade bd-example-modal-lg" id="slide_modal" tabindex="-1" role="dialog" >
    <div class="modal-dialog modal-lg" style=" height: 400px;">
      <form id="slide_form" name="slide_form" method="post">
        <div class="modal-content">
          <div class="modal-header">
            <h5 class="modal-title" id="modal-title">edit news</h5>
            <button type="button" class="close" data-dismiss="modal" aria-label="Close">
              <span aria-hidden="true">&times;</span>
            </button>
          </div>
          <div class="modal-body">
              <div class="col-sm-12">
                <input type="hidden" id="oldslide_pto" name="oldslide_pto"/>
                <input type="file" id="newslide_pto" name="newslide_pto" style="display:none;" onchange="newslide(this);"/>
                <img name="slide_pto" id="slide_pto" src class="w-100"/>
                <input type="hidden" id="id_slide" name="id_slide"/>
                <input type="hidden" name="action" id="action" value="upload"/>
                <div style="margin:10px 0px 10px 0px;">
                  <button type="button" id="add_pto" class="btn btn-primary">add photo</button>
                </div>
              </div>
              <div class="col-sm-12">
                  <label><b>Slide title</b></label>
                  <textarea name="slide_title" id="slide_title" class="form-control" rows="10" cols="50"></textarea>
              </div>
              <div class="col-sm-12">
                <label><b>Content</b></label>
                <textarea name="slide_content" id="slide_content" class="form-control" rows="10" cols="50"></textarea>
              </div>
            <div class="modal-footer">
              <button type="button" class="btn btn-danger" data-dismiss="modal">Close</button>
              <input type="submit" class="btn btn-success" id="upload"/>
            </div>
          </div>
        </div>
      </form>
    </div>
  </div>


<script type="text/javascript">
  function action(x)
  {
    if(x == 'upload')
    {
      $("[name='slide_pto']").attr('src','<?php echo base_url(). 'img/show_photo.png';?>');
      $("[name='slide_title']").val('');
      $("[name='slide_content']").val('');
    }
    else
    {
      $.ajax({
              type: 'POST',
              data: 'id='+x,
              url: '<?php echo base_url(). "backs/edit_slide";?>',
              dataType: 'json',
              success: function(data)
              {
                // console.log(data);
                $('[name="slide_pto"]').attr("src",'<?php echo base_url(). 'img/';?>'+data[0].slide_pto);
                $('[name="slide_title"]').val(data[0].slide_title);
                $('[name="slide_content"]').val(data[0].slide_content);
                $('[name="id_slide"]').val(data[0].id_slide);
                $('[name="oldslide_pto"]').val(data[0].slide_pto);
              },
              error: function()
              {
                alert('click error');
              }
            });
    }
  }

  function newslide(input)
  {
    if (input.files && input.files[0])
    {
       var reader = new FileReader();
       reader.onload = function (e)
       {
           $('#slide_pto').attr('src', e.target.result);
       }
       reader.readAsDataURL(input.files[0]);
    }
  }

  $(document).ready(function(e)
  {
    $('#add_pto').on("click",function()
    {
      $('#newslide_pto').trigger("click");
    });

    $('#add').click(function()
    {
      $('#slide_modal').modal('show');
      $('#slide_form')[0].reset();
      $('.modal-title').text("add Image");
      $('#id_slide').val('');
      $('#action').val("upload");
      $('#upload').val("Upload");
    });

    $('.edit').click(function()
    {
        $('#slide_form')[0].reset();
        $('#id_slide').val($(this).attr("id"));
        $('#action').val("update");
        $('.modal-title').text("update slide");
        $('#upload').val("Update");
        $('#slide_modal').modal("show");
    });

    $('.delete').on('click', function()
    {
      var id = $(this).attr("id");
      var action = "delete";
      if(confirm("Are you sure delete data?"))
      {
        $.ajax({
                url: "<?php echo base_url(). "Backs/save_slide";?>",
                method: 'POST',
                data:{id:id, action:action},
                // dataType: 'json',
                success: function(data)
                {
                  alert("delete success");
                  location.reload();
                },
                error: function()
                {
                  alert("Not delete");
                }
              });
      }
    });

    $('#slide_form').on('submit', function(e)
    {
      e.preventDefault();
      if(confirm("Are you sure update data?"))
      {
      $.ajax({
              method: 'POST',
              url: "<?php echo base_url(). 'Backs/save_slide';?>",
              data: new FormData(this),
              contentType: false,
              processData: false,
              success: function(data)
              {
                alert('save success');
                location.reload();
              },
              error: function()
              {
                alert('not save slide');
              }
            });
          }
    });
  });
</script>
