<div class="container">
  <div class="row">
    <div class="col-md-12">
      <?php if($this->session->userdata('b_news_list')!=""):?>
        <div><button id="add" type="button" class="btn btn-primary" onclick="action('upload');">Add product</button></div>
        <table class="table">
          <thead>
            <tr class="text-center">
              <th>photo</th>
              <th>title</th>
              <th>content</th>
              <th>edit</th>
              <th>delete</th>
            </tr>
          </thead>
          <tbody>
        <?php foreach ($this->session->userdata('b_news_list') as $r) {?>
          <tr>
            <td><img src="<?php echo base_url(). "img/".$r->centre_news_pto;?>" alt="<?php echo $r->centre_news_title;?>" title="" height="100"/></td>
            <td style="max-width:200px; word-wrap:break-word;"><?php echo $r->centre_news_title;?></td>
            <td style="max-width:300px; word-wrap:break-word;"><?php echo $r->centre_news_content;?></td>
            <td class="text-center"><a id="<?php echo $r->id_centre_news;?>" class="btn btn-success edit" onclick="javascript:action(<?php echo $r->id_centre_news;?>);">Edit</a>
              <div>แก้ไขล่าสุด เมื่อ<br>
                <span><?php echo date('d/m/Y',strtotime($r->centre_news_time));?></span>
              </div>
            </td>
            <td class="text-center"><a id="<?php echo $r->id_centre_news;?>" style="color: white;" class="btn btn-danger delete" >Delete</a></td>
          </tr>
        <?php };?>
      </tbody>
    </table>
      <?php endif;?>
    </div>
  </div>
</div>

<div class="modal fade bd-example-modal-lg" id="news_modal" tabindex="-1" role="dialog" >
  <div class="modal-dialog modal-lg" style=" height: 400px;">
    <form id="news_form" name="news_form" method="post">
      <div class="modal-content">
        <div class="modal-header">
          <h5 class="modal-title" id="modal-title">edit news</h5>
          <button type="button" class="close" data-dismiss="modal" aria-label="Close">
            <span aria-hidden="true">&times;</span>
          </button>
        </div>
        <div class="modal-body">
          <div class="row">
            <div class="col-sm-5">
              <input type="hidden" id="oldcentre_news_pto" name="oldcentre_news_pto"/>
              <input type="file" id="newcentre_news_pto" name="newcentre_news_pto" style="display:none;" onchange="newnews(this);"/>
              <img name="centre_news_pto" id="centre_news_pto" alt="" src class="w-100"/>
              <input type="hidden" id="id_centre_news" name="id_news"/>
              <input type="hidden" name="action" id="action" value="upload"/>
            </div>
            <div class="col-sm-7">
              <div>
                <div>
                  <button type="button" id="add_pto" class="btn btn-primary">add photo</button>
                </div>
                <label><b>News title</b></label>
                <textarea name="centre_news_title" id="centre_news_title" class="form-control" rows="3"></textarea>
              </div>
            </div>
          </div>
          <div style="margin-top:15px;">
            <label><b>Content</b></label>
            <textarea name="centre_news_content" id="centre_news_content" class="form-control" rows="6"></textarea>
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
    $("[name='centre_news_pto']").attr('src','<?php echo base_url(). 'img/show_photo.png';?>');
    $("[name='centre_news_title']").val('');
    $("[name='centre_news_content']").val('');
    $("[name='id_centre_news']").val('');
  }
  else
  {
    $.ajax({
            type: 'POST',
            data: 'id='+x,
            url: '<?php echo base_url(). "backs_centre/edit_news";?>',
            dataType: 'json',
            success: function(data)
            {
              console.log(data);
              $('[name="centre_news_pto"]').attr("src",'<?php echo base_url(). 'img/';?>'+data[0].centre_news_pto);
              $('[name="centre_news_title"]').val(data[0].centre_news_title);
              $('[name="centre_news_content"]').val(data[0].centre_news_content);
              $('[name="id_centre_news"]').val(data[0].id_centre_news);
              $('[name="oldcentre_news_pto"]').val(data[0].centre_news_pto);
            },
            error: function()
            {
              alert('click error');
            }
          });
  }
}

function newnews(input)
{
  if (input.files && input.files[0])
  {
     var reader = new FileReader();
     reader.onload = function (e)
     {
         $('#centre_news_pto').attr('src', e.target.result);
     }
     reader.readAsDataURL(input.files[0]);
  }
}

$(document).ready(function(e)
{
  $('#add_pto').on("click",function()
  {
    $('#newcentre_news_pto').trigger("click");
  });

  $('#add').click(function()
  {
    $('#news_modal').modal('show');
    $('#news_form')[0].reset();
    $('.modal-title').text("add Image");
    $('#id_centre_news').val('');
    $('#action').val("upload");
    $('#upload').val("Upload");
  });

  $('.edit').click(function()
  {
      $('#news_form')[0].reset();
      $('#id_centre_news').val($(this).attr("id"));
      $('#action').val("update");
      $('.modal-title').text("update news");
      $('#upload').val("Update");
      $('#news_modal').modal("show");
  });

  $('.delete').on('click', function()
  {
    var id = $(this).attr("id");
    var action = "delete";
    if(confirm("Are you sure delete data?"))
    {
      $.ajax({
              url: "<?php echo base_url(). "Backs_centre/save_news";?>",
              method: 'POST',
              data:{id:id, action:action},
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

  $('#news_form').on('submit', function(e)
  {
    e.preventDefault();
    if(confirm("Are you sure update data?"))
    {
    $.ajax({
            method: 'POST',
            url: "<?php echo base_url(). 'Backs_centre/save_news';?>",
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
              alert('not save news');
            }
          });
        }
  });
});
</script>
