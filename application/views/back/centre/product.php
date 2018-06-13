<div class="container">
  <div class="row">
    <div class="col-sm-12">
      <?php if($this->session->userdata('b_product')!=""):?>
        <div><button id="add" type="button" class="btn btn-primary" onclick="action('upload');">Add product</button></div>
      <table class="table">
        <thead>
          <tr class="text-center">
            <th>photo</th>
            <th>product</th>
            <th>price (baht)</th>
            <th>product from</th>
            <th>Edit</th>
            <th>Delete</th>
          </tr>
        </thead>
        <tbody>
        <?php foreach ($this->session->userdata('b_product') as $r) {?>
          <tr>
            <td><img src="<?php echo base_url(). 'img/'.$r->centre_product_pto;?>" height="100"></td>
            <td><?php echo $r->centre_product_name;?></td>
            <td><?php echo $r->centre_product_price;?></td>
            <td><div class="asd"><?php echo $r->centre_product_from;?></div></td>
            <td class="text-center"><a id="<?php echo $r->id_centre_product;?>" style="color: white;" class="btn btn-success edit" onclick="action(<?php echo $r->id_centre_product;?>)">Edit</a>
            <div>แก้ไขล่าสุด เมื่อ<br><span><?php echo date('d/m/Y',strtotime($r->centre_product_time));?><span></div></td>
            <td><a id="<?php echo $r->id_centre_product;?>" style="color: white;" class="btn btn-danger delete" >Delete</a></td>
          </tr>
        <?php };?>
        </tbody>
      </table>
      <?php endif;?>
    </div>
  </div>
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
            <input type="hidden" id="oldcentre_product_pto" name="oldcentre_product_pto"/>
            <input type="file" id="newcentre_product_pto" name="newcentre_product_pto" style="display:none;" onchange="newpd(this);"/>
            <img name="centre_product_pto" id="centre_product_pto" src width="330" height="270"/>
            <input type="hidden" id="id_centre_product" name="id_centre_product"/>
            <input type="hidden" name="action" id="action" value="upload"/>
          </div>
          <div class="col-sm-6">
            <div>
              <button type="button" id="add_pto" class="btn btn-primary">add photo</button>
            </div>
            <div>
              <label>Product name</label>
              <input type="text" name="centre_product_name" id="centre_product_name" type="text" class="form-control">
            </div>
            <div>
              <label>price</label><br>
              <td>
                <div class="col-sm-12">
                  <div class="row">
                    <div class="col-sm-2">ราคา</div>
                    <div class="col-sm-6"><input type="text" name="centre_product_price" id="centre_product_price" class="form-control"/></div>
                    <div class="col-sm-3">บาท</div>
                  </div>
                </div>
              </td>
            </div>
            <div>
              <label>from</label>
              <input type="text" name="centre_product_from" id="centre_product_from" type="text" class="form-control">
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
    $("[name='centre_product_pto']").attr('src','<?php echo base_url(). 'img/show_photo.png';?>');
    $("[name='centre_product_name']").val('');
    $("[name='centre_product_price']").val('');
    $("[name='centre_product_from']").val('');
  }
  else
  {
    $.ajax({
            type: 'POST',
            data: 'id='+x,
            url: '<?php echo base_url(). "backs_centre/edit_product";?>',
            dataType: 'json',
            success: function(data)
            {
              console.log(data);
              $('[name="centre_product_pto"]').attr("src",'<?php echo base_url(). 'img/';?>'+data[0].centre_product_pto);
              $('[name="centre_product_name"]').val(data[0].centre_product_name);
              $('[name="centre_product_price"]').val(data[0].centre_product_price);
              $('[name="centre_product_from"]').val(data[0].centre_product_from);
              $('[name="id_centre_product"]').val(data[0].id_centre_product);
              $('[name="oldcentre_product_pto"]').val(data[0].centre_product_pto);
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
         $('#centre_product_pto').attr('src', e.target.result);
     }
     reader.readAsDataURL(input.files[0]);
  }
}

$(document).ready(function(e)
{
  $('#add_pto').on("click",function()
  {
    $('#newcentre_product_pto').trigger("click");
  });

  $('#add').click(function()
  {
    $('#product_modal').modal('show');
    $('#product_form')[0].reset();
    $('.modal-title').text("add product");
    $('#id_centre_product').val('');
    $('#action').val("upload");
    $('#upload').val("Upload");
  });

  $('.edit').click(function()
  {
      $('#product_form')[0].reset();
      $('#id_centre_product').val($(this).attr("id"));
      $('#action').val("update");
      $('.modal-title').text("update product");
      $('#upload').val("Update");
      $('#product_modal').modal("show");
  });

  $('.delete').on('click', function()
  {
    var id = $(this).attr("id");
    var action = "delete";
    if(confirm("Are you sure delete data?"))
    {
      $.ajax({
              url: "<?php echo base_url(). "Backs_centre/save_product";?>",
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

  $('#product_form').on('submit',function(e)
  {
    e.preventDefault();
    if(confirm("Are you sure update data?"))
    {
    $.ajax({
            method: 'POST',
            url: "<?php echo base_url(). 'Backs_centre/save_product';?>",
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
