<div class="container">
  <div class="row">
        <?php if(isset($join)):?>
            <table class="table">
              <thead>
                <tr class="text-center">
                  <th>photo</th>
                  <th>head</th>
                  <th>title</th>
                  <th>edit</th>
                </tr>
              </thead>
              <tbody>
              <?php foreach ($join as $r)
              {?>
                <tr>
                  <td><img src="<?php echo base_url(). 'img/'.$r->join_pto;?>" width="200" height="120"></td>
                  <td><?php echo $r->join_head;?></td>
                  <td><?php echo $r->join_title;?></td>
                  <td class="text-center"><a id="<?php echo $r->id_join;?>" style="color: white;" class="btn btn-success edit" onclick="action(<?php echo $r->id_join;?>)">Edit</a>
                  <div>แก้ไขล่าสุด เมื่อ<br><span><?php echo date('d/m/Y',strtotime($r->join_time));?><span></div></td>
                </tr>
              <?php };?>
              </tbody>
            </table>
      <?php endif;?>
      </div>
    </form>
  </div>
</div>

<div class="modal fade bd-example-modal-lg" id="join_modal" tabindex="-1" role="dialog">
  <div class="modal-dialog modal-lg">
    <form method="POST" id="join_form" name="join_form" >
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
            <input type="hidden" id="oldjoin_pto" name="oldjoin_pto"/>
            <input type="file" id="newjoin_pto" name="newjoin_pto" style="display:none;" onchange="newjoin(this);"/>
            <img name="join_pto" id="join_pto" src style="width:100%; padding:10px;"/>
            <input type="hidden" id="id_join" name="id_join"/>
          </div>
          <div class="col-sm-6">
            <div>
              <button type="button" id="add_pto" class="btn btn-primary">add photo</button>
            </div>
            <div>
              <label>head</label>
              <input type="text" name="join_head" id="join_head" type="text" class="form-control">
            </div>
            <div>
              <label>title</label>
              <textarea type="text" name="join_title" id="join_title" class="form-control" rows="3"></textarea>
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
    $.ajax({
           type: 'POST',
           data: 'id='+x,
           url:'<?php echo base_url(). 'backs/edit_join';?>',
           dataType: 'json',
           success: function(data)
           {
             $('[name="id_join"]').val(data[0].id_join);
             $('[name="join_head"]').val(data[0].join_head);
             $('[name="join_title"]').val(data[0].join_title);
             $('[name="join_pto"]').attr("src",'<?php echo base_url(). 'img/';?>'+data[0].join_pto);
             $('[name="oldjoin_pto"]').val(data[0].join_pto);
           },
           error: function(data)
           {
             alert('not edit');
           }
          });
  }

  function newjoin(input)
  {
    if (input.files && input.files[0])
    {
       var reader = new FileReader();
       reader.onload = function (e)
       {
           $('#join_pto').attr('src', e.target.result);
       }
       reader.readAsDataURL(input.files[0]);
    }
  }

  $(document).ready(function(e)
  {
    $('.edit').click(function()
    {
      $('#join_modal').modal('show');
      $('#newjoin_pto').val('');
    });

    $("#add_pto").on("click",function()
    {
      $('#newjoin_pto').trigger("click");
    });

    $('#join_form').on('submit',(function(e)
    {
      e.preventDefault();
      if(confirm("Are you sure update data?"))
      {
      $.ajax({
              method: 'POST',
              url: "<?php echo base_url(). 'Backs/save_join';?>",
              data: new FormData(this),
              contentType: false,
              processData: false,
              success: function(data)
              {
                alert('save success.');
                location.reload();
              },
              error: function(data)
              {
                alert('not save join.');
              }
            });
      }
    }));
  });
</script>
