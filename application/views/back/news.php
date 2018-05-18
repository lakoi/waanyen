<div class="col-sm-10 offset-1">
  <div><button id="add" type="button" class="btn btn-primary" onclick="action('upload');">add news</button></div>
  <?php if(isset($news)):?>
  <table class="table">
    <thead>
      <tr>
        <th>photo</th>
        <th>title</th>
        <th>post by</th>
        <th>content</th>
        <th>text button</th>
        <th>Edit</th>
      </tr>
    </thead>
    <tbody>
    <?php foreach ($news as $r)
    {?>
      <tr>
        <td><img src="<?php echo base_url(). 'img/'.$r->news_pto;?>" width="200" height="120"></td>
        <td><?php echo nl2br($r->news_title);?></td>
        <td><?php echo $r->news_post;?></td>
        <td><div class="asd"><?php echo $r->news_content;?></div></td>
        <td><?php echo $r->news_bt;?></td>
        <td><a id="<?php echo $r->id_news;?>" name="news" style="color: white;" class="btn btn-success edit" onclick="action(<?php echo $r->id_news;?>)">Edit</a></td>
      </tr>
    <?php };?>
    </tbody>
  </table>
  <?php endif;?>
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
            <div class="col-sm-6">
              <input type="hidden" id="oldnews_pto" name="oldnews_pto"/>
              <input type="file" id="newnews_pto" name="newnews_pto" style="display:none;" onchange="newnews(this);"/>
              <img name="news_pto" id="news_pto" src width="330"/>
              <input type="hidden" id="id_news" name="id_news"/>
              <input type="hidden" name="action" id="action" value="upload"/>
            </div>
            <div class="col-sm-6">
              <div class="offset-2">
                <p>post by <span name="news_post" class="news_post"><span></p>
              </div>
              <div>
                <div>
                  <button type="button" id="add_pto" class="btn btn-primary">add photo</button>
                </div>
                <label><b>News title</b></label>
                <textarea name="news_title" id="news_title" class="form-control" rows="2" cols="50"></textarea>
              </div>
              <div>
                <label><b>Text button</b></label>
                <input name="news_bt" id="news_bt" type="text" class="form-control" value="อ่านต่อ..."/>
              </div>
            </div>
          </div>
          <div>
            <label><b>Content</b></label>
            <textarea name="news_content" id="news_content" class="form-control" rows="6" cols="50"></textarea>
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
    $("[name='news_pto']").attr('src','<?php echo base_url(). 'img/show_photo.png';?>');
    $("[name='news_title']").val('');
    $("[name='news_content']").val('');
    $("[name='news_bt']").val('');
  }
  else
  {
    $.ajax({
            type: 'POST',
            data: 'id='+x,
            url: '<?php echo base_url(). "backs/edit_news";?>',
            dataType: 'json',
            success: function(data)
            {
              console.log(data);
              $('[name="news_pto"]').attr("src",'<?php echo base_url(). 'img/';?>'+data[0].news_pto);
              $('[name="news_title"]').val(data[0].news_title);
              $('[name="news_content"]').val(data[0].news_content);
              $('[name="news_bt"]').val(data[0].news_bt);
              $('[name="id_news"]').val(data[0].id_news);
              $('[name="news_post"]').html(data[0].news_post);
              $('[name="oldnews_pto"]').val(data[0].news_pto);
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
         $('#news_pto').attr('src', e.target.result);
     }
     reader.readAsDataURL(input.files[0]);
  }
}

$(document).ready(function(e)
{
  $('#add_pto').on("click",function()
  {
    $('#newnews_pto').trigger("click");
  });

  $('#add').click(function()
  {
    $('#news_modal').modal('show');
    $('#news_form')[0].reset();
    $('.modal-title').text("add Image");
    $('#id').val('');
    $('.news_post').html('');
    $('#action').val("upload");
    $('#upload').val("Upload");
  });

  $('.edit').click(function()
  {
      $('#news_form')[0].reset();
      $('#id_news').val($(this).attr("id"));
      $('#action').val("update");
      $('.modal-title').text("update news");
      $('#upload').val("Update");
      $('#news_modal').modal("show");
  });

  $('#news_form').on('submit',function(e)
  {
    e.preventDefault();
    if(confirm("Are you sure update data?"))
    {
    $.ajax({
            method: 'POST',
            url: "<?php echo base_url(). 'Backs/save_news';?>",
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
              alert('not save news');
            }
          });
        }
  });
});
</script>
