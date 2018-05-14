<div class="col-sm-10 offset-1">
  <?php if(isset($centre)):?>
  <table class="table">
    <thead>
      <tr>
        <th>Title</th>
        <th>Content</th>
        <th>Text_button</th>
        <th>Photo</th>
        <th>Edit</th>
      </tr>
    </thead>
    <tbody>
      <?php foreach($centre as $r)
      {?>
        <tr>
          <td><?php echo $r->centre_area1 ;?></td>
          <td><?php echo $r->centre_area2 ;?></td>
          <td><?php echo $r->centre_bt ;?></td>
          <td><img src='<?php echo base_url(). 'img/'.$r->centre_pto ;?>' width="80" height="80"/></td>
          <td><a id="<?php echo $r->id_centre;?>" name="edit" class="btn btn-warning edit" onclick="edit(<?php echo $r->id_centre;?>)">Edit</a></td>
        </tr>
      <?php } ?>
    </tbody>
  </table>
  <?php endif; ?>
</div>

<div class="modal fade" id="centre_modal" tabindex="-1" role="dialog">
  <div class="modal-dialog modal-dialog-centered">
    <form id="centre_form" name="centre_form" method="post">
      <div class="modal-content">
        <div class="modal-header">
          <h5 class="modal-title" id="exampleModalCenterTitle">edit centre</h5>
          <button type="button" class="close" data-dismiss="modal" aria-label="Close">
            <span aria-hidden="true">&times;</span>
          </button>
        </div>
        <div class="modal-body">
          <div class="text-center">
            <p>click photo<p>
            <input type="hidden" id="oldcentre_pto" name="oldcentre_pto"/>
            <input type="file" id="newcentre_pto" name="newcentre_pto"  onchange="newcentre(this);"/>
            <img name="centre_pto" id="centre_pto" src width="200" height="200"/>
            <input type="hidden" id="id_centre" name="id_centre"/>
          </div>
          <table>
            <tr>
              <th>Title</th>
              <td><textarea name="centre_area1" id="centre_area1" class="form-control" rows="2" cols="50"></textarea></td>
            </tr>
            <tr>
              <th>Content</th>
              <td><textarea name="centre_area2" id="centre_area2" class="form-control" rows="2" cols="50"></textarea></td>
            </tr>
            <tr>
              <th>Button</th>
              <td><input name="centre_bt" id="centre_bt" type="text" class="form-control"></td>
            </tr>
          </table>
        </div>
        <div class="modal-footer">
          <button type="button" class="btn btn-danger" data-dismiss="modal">Close</button>
          <button type="submit" class="btn btn-success">Save</button>
        </div>
      </div>
    </form>
  </div>
</div>

<script>
function edit(x)
{
  $.ajax({
         type: 'POST',
         data: 'id='+x,
         url:'<?php echo base_url(). 'backs/edit_centre';?>',
         dataType: 'json',
         success: function(data)
         {
           $('[name="id_centre"]').val(data[0].id_centre);
           $('[name="centre_area1"]').html(data[0].centre_area1);
           $('[name="centre_area2"]').html(data[0].centre_area2);
           $('[name="centre_bt"]').val(data[0].centre_bt);
           $('[name="centre_pto"]').attr("src",'<?php echo base_url(). 'img/';?>'+data[0].centre_pto);
           $('[name="oldcentre_pto"]').val(data[0].centre_pto);
         },
         error: function(data)
         {
           alert(data);
           alert('not edit');
         }
        });
}
$(function()
{
  $('.edit').click(function()
  {
    $('#centre_modal').modal('show');
    $('#newcentre_pto').val('');
  });

  $("#centre_pto").on("click",function()
  {
    $('#newcentre_pto').trigger("click");
  });

  $('#centre_form').on('submit',function(e)
  {
    e.preventDefault();
    if(confirm("Are you sure update data?"))
    {
    $.ajax({
            method: 'POST',
            url: "<?php echo base_url(). 'Backs/save_centre';?>",
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
              alert('not save about.');
            }
          });
        }
  });
});

  function newcentre(input)
  {
    if (input.files && input.files[0])
    {
       var reader = new FileReader();
       reader.onload = function (e)
       {
           $('#centre_pto').attr('src', e.target.result);
       }
       reader.readAsDataURL(input.files[0]);
    }
  }
</script>

<!-- <div class="offset-10">
  <button type="submit" class="btn btn-success">Save Centre</button>
</div>
<div class="offset-1 text-center">
  <div class="col-sm-10">
    <div class="row">
      <div class="col-sm-4">
        <div style="width:330; height:270;">
          <input type="hidden" id="oldabout_pto1" name="oldabout_pto1"/>
          <input type="file" id="showabout_pto1" name="showabout_pto1" style="display:none;" onchange="showabout1(this);"/>
          <img id="centre_pto" name="centre_pto" class="btn-upload" src width="330" height="270" />
        </div>
      </div>
      <div class="col-sm-4">
        <div class="centre-img1 border">
          <div class="centre-pto">
            <input type="hidden" id="oldabout_pto1" name="oldabout_pto1"/>
            <input type="file" id="showabout_pto1" name="showabout_pto1" style="display:none;" onchange="showabout1(this);"/>
            <img id="centre_pto1" name="centre_pto1" class="btn-upload" src width="330" height="270" />
          </div>
          <div class="border centre-txt1">
            <div class="centre-mid">
              <textarea id="centre_area11" name="centre_area11" type="text" class="form-control" rows=2 style="resize:none;"></textarea>
              <textarea id="centre_area12" name="centre_area12" type="text" class="form-control" rows=2 style="resize:none;"></textarea>
              <button class="btn"><input id="centre_bt1" name="centre_bt1" type="text" class="form-control"/></button>
            </div>
          </div>
        </div>
      </div>
      <div class="col-sm-4">
        <div class="centre-img1 border">
          <div class="centre-pto">
            <img id="centre_pto2" name="centre_pto2" src width="330" height="270" />
          </div>
          <div class="border centre-txt1">
            <div class="centre-mid">
              <textarea id="centre_area21" name="centre_area21" type="text" class="form-control" rows=2 style="resize:none;"></textarea>
              <textarea id="centre_area22" name="centre_area22" type="text" class="form-control" rows=2 style="resize:none;"></textarea>
              <button class="btn"><input id="centre_bt2" name="centre_bt2" type="text" class="form-control"/></button>
            </div>
          </div>
        </div>
      </div>
    </div>
    <div class="row">
      <div class="col-sm-4">
        <div class="centre-img1 border">
          <div class="centre-pto">
            <img id="centre_pto3" name="centre_pto3" src width="330" height="270" />
          </div>
          <div class="border centre-txt1">
            <div class="centre-mid">
              <textarea id="centre_area31" name="centre_area31" type="text" class="form-control" rows=2 style="resize:none;"></textarea>
              <textarea id="centre_area32" name="centre_area32" type="text" class="form-control" rows=2 style="resize:none;"></textarea>
              <button class="btn"><input id="centre_bt3" name="centre_bt3" type="text" class="form-control"/></button>
            </div>
          </div>
        </div>
      </div>
      <div class="col-sm-4">
        <div class="centre-img1 border">
          <div class="centre-pto">
            <img id="centre_pto4" name="centre_pto4" src width="330" height="270" />
          </div>
          <div class="border centre-txt1">
            <div class="centre-mid">
              <textarea id="centre_area41" name="centre_area41" type="text" class="form-control" rows=2 style="resize:none;" ></textarea>
              <textarea id="centre_area42" name="centre_area42" type="text" class="form-control" rows=2 style="resize:none;" ></textarea>
              <button class="btn"><input id="centre_bt4" name="centre_bt4" type="text" class="form-control" /></button>
            </div>
          </div>
        </div>
      </div>
      <div class="col-sm-4">
        <div class="centre-img1 border">
          <div class="centre-pto">
            <img id="centre_pto5" name="centre_pto5" src width="330" height="270" />
          </div>
          <div class="border centre-txt1">
            <div class="centre-mid">
              <textarea id="centre_area51" name="centre_area51" type="text" class="form-control" rows=2 style="resize:none;" ></textarea>
              <textarea id="centre_area52" name="centre_area52" type="text" class="form-control" rows=2 style="resize:none;" ></textarea>
              <button class="btn"><input id="centre_bt5" name="centre_bt5" type="text" class="form-control" /></button>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
      <img src="<?php echo base_url(). 'img/show_photo.png';?>" width="350" height="350" />
</div> -->
