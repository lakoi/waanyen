<div class="col-sm-10 offset-1">
  <div><button id="add" type="button" class="btn btn-primary" onclick="action('upload');">add news</button></div>
  <?php if(isset($product)):?>
  <table class="table">
    <thead>
      <tr>
        <th>photo</th>
        <th>product</th>
        <th>price (baht)</th>
        <th>product from</th>
        <th>Edit</th>
      </tr>
    </thead>
    <tbody>
    <?php foreach ($product as $r)
    {?>
      <tr>
        <td><img src="<?php echo base_url(). 'img/'.$r->pd_pto;?>" width="200" height="120"></td>
        <td><?php echo $r->pd_name;?></td>
        <td><?php echo $r->pd_price;?></td>
        <td><div class="asd"><?php echo $r->pd_from;?></div></td>
        <td><a id="<?php echo $r->id_product;?>" name="news" style="color: white;" class="btn btn-success edit" onclick="action(<?php echo $r->id_product;?>)">Edit</a></td>
      </tr>
    <?php };?>
    </tbody>
  </table>
  <?php endif;?>
</div>

<div class="modal fade bd-example-modal-lg" id="product_modal" tabindex="-1" role="dialog">
  <div class="modal-dialog modal-lg">
    <form id="product_form" name="product_form" method="post">
      <div class="modal-content">
        <div class="modal-header">
          <h5 class="modal-title" id="exampleModalCenterTitle">edit product</h5>
          <button type="button" class="close" data-dismiss="modal" aria-label="Close">
            <span aria-hidden="true">&times;</span>
          </button>
        </div>
        <div class="modal-body">
          <div class="row">
          <div class="col-sm-6">
            <input type="hidden" id="oldpd_pto" name="oldpd_pto"/>
            <input type="file" id="newpd_pto" name="newpd_pto" style="display:none;" onchange="newpd(this);"/>
            <img name="pd_pto" id="pd_pto" src width="330" height="270"/>
            <input type="hidden" id="id_pd" name="id_pd"/>
            <input type="hidden" name="action" id="action" value="upload"/>
          </div>
          <div class="col-sm-6">
            <div>
              <button type="button" id="add_pto" class="btn btn-primary">add photo</button>
            </div>
            <div>
              <label>Product name</label>
              <input type="text" name="pd_name" id="pd_name" type="text" class="form-control">
            </div>
            <div>
              <label>price</label>
              <td><input type="text" name="pd_price" id="pd_price" class="form-control"/></td>
            </div>
            <div>
              <label>from</label>
              <input type="text" name="pd_from" id="pd_from" type="text" class="form-control">
            </div>
          </div>
        </div>
        <div class="modal-footer">
          <button type="button" class="btn btn-danger" data-dismiss="modal">Close</button>
          <button type="submit" class="btn btn-success">Save</button>
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
            url: '<?php echo base_url(). "backs/edit_product";?>',
            dataType: 'json',
            success: function(data)
            {
              console.log(data);
              $('[name="pd_pto"]').attr("src",'<?php echo base_url(). 'img/';?>'+data[0].pd_pto);
              $('[name="pd_name"]').val(data[0].pd_name);
              $('[name="pd_price"]').val(data[0].pd_price);
              $('[name="pd_from"]').val(data[0].pd_from);
              $('[name="id_product"]').val(data[0].id_product);
              $('[name="oldpd_pto"]').val(data[0].pd_pto);
            },
            error: function()
            {
              alert('click error');
            }
          });
  }
}

function newpd(input)
{
  if (input.files && input.files[0])
  {
     var reader = new FileReader();
     reader.onload = function (e)
     {
         $('#pd_pto').attr('src', e.target.result);
     }
     reader.readAsDataURL(input.files[0]);
  }
}

$(document).ready(function(e)
{
  $('#add_pto').on("click",function()
  {
    $('#newpd_pto').trigger("click");
  });

  $('#add').click(function()
  {
    $('#product_modal').modal('show');
    $('#product_form')[0].reset();
    $('.modal-title').text("add product");
    $('#id').val('');
    $('.news_post').html('');
    $('#action').val("upload");
    $('#upload').val("Upload");
  });

  $('.edit').click(function()
  {
      $('#product_form')[0].reset();
      $('#id_product').val($(this).attr("id"));
      $('#action').val("update");
      $('.modal-title').text("update product");
      $('#upload').val("Update");
      $('#product_modal').modal("show");
  });

  $('#product_form').on('submit',function(e)
  {
    e.preventDefault();
    if(confirm("Are you sure update data?"))
    {
    $.ajax({
            method: 'POST',
            url: "<?php echo base_url(). 'Backs/save_product';?>",
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
              alert('not save product');
            }
          });
        }
  });
});
</script>
