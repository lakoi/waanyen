<div class="container">
  <div class="row">
    <div><button id="add" type="button" class="btn btn-primary" onclick="action('upload');">Add product</button></div>
    <?php if(isset($product)):?>
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
      <?php foreach ($product as $r)
      {?>
        <tr>
          <td><img src="<?php echo base_url(). 'img/'.$r->pd_pto;?>" width="200" height="120"></td>
          <td><?php echo $r->pd_name;?></td>
          <td><?php echo $r->pd_price;?></td>
          <td><div class="asd"><?php echo $r->pd_from;?></div></td>
          <td class="text-center"><a id="<?php echo $r->id_product;?>" style="color: white;" class="btn btn-success edit" onclick="action(<?php echo $r->id_product;?>)">Edit</a>
          <div>แก้ไขล่าสุด เมื่อ<br><span><?php echo date('d/m/Y',strtotime($r->pd_time));?><span></div></td>
          <td><a id="<?php echo $r->id_product;?>" style="color: white;" class="btn btn-danger delete" >Delete</a></td>
        </tr>
      <?php };?>
      </tbody>
    </table>
    <?php endif;?>
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
            <input type="hidden" id="oldpd_pto" name="oldpd_pto"/>
            <input type="file" id="newpd_pto" name="newpd_pto" style="display:none;" onchange="newpd(this);"/>
            <img name="pd_pto" id="pd_pto" src width="330" height="270"/>
            <input type="hidden" id="id_product" name="id_product"/>
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
              <label>price</label><br>
              <td>
                <div class="col-sm-12">
                  <div class="row">
                    <div class="col-sm-2">ราคา</div>
                    <div class="col-sm-6"><input type="text" name="pd_price" id="pd_price" class="form-control"/></div>
                    <div class="col-sm-3">บาท</div>
                  </div>
                </div>
              </td>
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

  $('.delete').on('click', function()
  {
    var id = $(this).attr("id");
    var action = "delete";
    if(confirm("Are you sure delete data?"))
    {
      $.ajax({
              url: "<?php echo base_url(). "Backs/save_product";?>",
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

<!-- <div class="col-sm-12 text-center">
  <div class="row">
    <div class="col-sm-4">
      <p><span class="font-weight-bold">ผลิตภัณฑ์และบริการ</span><br>
      "การสนับสนุนผลิตภัณฑ์ฝีมือคนตาบอด<br>
      เป็นการสร้างอาชีพและให้อนาคต"</p>
    </div>
    <div class="col-sm-7">
      <div>
        <div id="carouselExampleIndicators" class="carousel slide" data-ride="carousel">
          <div class="carousel-inner">
            <div class="carousel-item active">
              <div class="row">
                <div class="col-sm-4">
                  <div class="card" style="width: 230px; height: 400px;">
                    <img class="card-img-top" src="<?php echo base_url(). 'img/test1.jpg';?>" height="220">
                    <div class="card-body">
                      <h5 class="card-title">Card title</h5>
                      <p class="card-text">ราคา  บาท</p>
                      <p class="card-text">ผลิตภัณฑ์จาก:<br>
                      <span>asd</span></p>
                    </div>
                  </div>
                </div>
                <div class="col-sm-4">
                  <div class="card" style="width: 230px;">
                    <img class="card-img-top" src="<?php echo base_url(). 'img/show_photo.png';?>" alt="Card image cap">
                    <div class="card-body">
                      <h5 class="card-title">Card title</h5>
                      <p class="card-text">ราคา  บาท</p>
                      <p class="card-text">ผลิตภัณฑ์จาก:<br>
                      <span></span></p>
                    </div>
                  </div>
                </div>
                <div class="col-sm-4">
                  <div class="card" style="width: 230px;">
                    <img class="card-img-top" src="<?php echo base_url(). 'img/show_photo.png';?>" alt="Card image cap">
                    <div class="card-body">
                      <h5 class="card-title">Card title</h5>
                      <p class="card-text">ราคา  บาท</p>
                      <p class="card-text">ผลิตภัณฑ์จาก:<br>
                      <span></span></p>
                    </div>
                  </div>
                </div>
              </div>
            </div>
            <div class="carousel-item">
              <div class="row">
                <div class="col-sm-4">
                  <div class="card" style="width: 230px; height: 400px;">
                    <img class="card-img-top" src="<?php echo base_url(). 'img/test1.jpg';?>" height="220">
                    <div class="card-body">
                      <h5 class="card-title">Card title</h5>
                      <p class="card-text">ราคา  บาท</p>
                      <p class="card-text">ผลิตภัณฑ์จาก:<br>
                      <span>asd</span></p>
                    </div>
                  </div>
                </div>
                <div class="col-sm-4">
                  <div class="card" style="width: 12rem;">
                    <img class="card-img-top" src="<?php echo base_url(). 'img/show_photo.png';?>" alt="Card image cap">
                    <div class="card-body">
                      <h5 class="card-title">Card title</h5>
                      <p class="card-text">ราคา  บาท</p>
                      <p class="card-text">ผลิตภัณฑ์จาก:<br>
                      <span></span></p>
                    </div>
                  </div>
                </div>
                <div class="col-sm-4">
                  <div class="card" style="width: 12rem;">
                    <img class="card-img-top" src="<?php echo base_url(). 'img/show_photo.png';?>" alt="Card image cap">
                    <div class="card-body">
                      <h5 class="card-title">Card title</h5>
                      <p class="card-text">ราคา  บาท</p>
                      <p class="card-text">ผลิตภัณฑ์จาก:<br>
                      <span></span></p>
                    </div>
                  </div>
                </div>
              </div>
            </div>
            <div class="carousel-item">
              <div class="row">
                <div class="col-sm-4">
                  <div class="card" style="width: 230px; height: 400px;">
                    <img class="card-img-top" src="<?php echo base_url(). 'img/test1.jpg';?>" height="220">
                    <div class="card-body">
                      <h5 class="card-title">Card title</h5>
                      <p class="card-text">ราคา  บาท</p>
                      <p class="card-text">ผลิตภัณฑ์จาก:<br>
                      <span>asd</span></p>
                    </div>
                  </div>
                </div>
                <div class="col-sm-4">
                  <div class="card" style="width: 12rem;">
                    <img class="card-img-top" src="<?php echo base_url(). 'img/show_photo.png';?>" alt="Card image cap">
                    <div class="card-body">
                      <h5 class="card-title">Card title</h5>
                      <p class="card-text">ราคา  บาท</p>
                      <p class="card-text">ผลิตภัณฑ์จาก:<br>
                      <span></span></p>
                    </div>
                  </div>
                </div>
                <div class="col-sm-4">
                  <div class="card" style="width: 12rem;">
                    <img class="card-img-top" src="<?php echo base_url(). 'img/show_photo.png';?>" alt="Card image cap">
                    <div class="card-body">
                      <h5 class="card-title">Card title</h5>
                      <p class="card-text">ราคา  บาท</p>
                      <p class="card-text">ผลิตภัณฑ์จาก:<br>
                      <span></span></p>
                    </div>
                  </div>
                </div>
              </div>
            </div>
          </div>
          <a class="carousel-control-prev" href="#carouselExampleIndicators" role="button" data-slide="prev">
            <span class="carousel-control-prev-icon" aria-hidden="true"></span>
            <span class="sr-only">Previous</span>
          </a>
          <a class="carousel-control-next" href="#carouselExampleIndicators" role="button" data-slide="next">
            <span class="carousel-control-next-icon" aria-hidden="true"></span>
            <span class="sr-only">Next</span>
          </a>
        </div>
      </div>
    </div>
  </div>
</div> -->
