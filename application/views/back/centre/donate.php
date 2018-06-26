<div class="container">
  <div class="row">
    <div class="col-sm-12">
      <?php if($this->session->userdata('b_donate')!=""):?>
        <?php foreach ($this->session->userdata('b_donate') as $r) {?>
          <div style="margin:15px 0px 15px 0px;">
            <div><a id="<?php echo $r->id_centre_donate;?>" style="color: white;" class="btn btn-success edit" onclick="action(<?php echo $r->id_centre_donate;?>);">Edit donate</a></div>
          </div>
          <div>
            <?php echo $r->centre_donate_thai;?>
          </div>
        <?php };?>
      <?php endif;?>
    </div>
  </div>
</div>

<div class="modal fade bd-example-modal-lg" id="donate_modal" tabindex="-1" role="dialog">
  <div class="modal-dialog modal-lg">
    <form id="donate_form" name="donate_form" method="post">
      <div class="modal-content">
        <div class="modal-header">
          <h5 class="modal-title" id="exampleModalCenterTitle">edit product</h5>
          <button type="button" class="close" data-dismiss="modal" aria-label="Close">
            <span aria-hidden="true">&times;</span>
          </button>
        </div>
        <div class="modal-body">
          <div class="row" style="padding:0px 15px 0px 15px;">
            <input type="hidden" id="id_centre_donate" name="id_centre_donate">
            <textarea type="text" class="form-control" id="centre_donate_thai" name="centre_donate_thai" rows="50"></textarea>
          </div>
          <div class="modal-footer">
            <button type="button" class="btn btn-danger" data-dismiss="modal">Close</button>
            <button type="submit" class="btn btn-success">Save</button>
          </div>
        </div>
      </form>
    </div>
  </div>
</div>

<script type="text/javascript">

function action(x)
{
    $.ajax({
            type: 'POST',
            data: 'id='+x,
            url: '<?php echo base_url(). "backs_centre/edit_donate";?>',
            dataType: 'json',
            success: function(data)
            {
              console.log(data);
              $('[name="centre_donate_thai"]').html(data[0].centre_donate_thai);
              $('[name="id_centre_donate"]').val(data[0].id_centre_donate);
            },
            error: function()
            {
              alert('click error');
            }
          });
}

$(document).ready(function(e)
{
  $('.edit').click(function()
  {
      $('#donate_form')[0].reset();
      $('#id_centre_donate').val($(this).attr("id"));
      $('.modal-title').text("update donate");
      $('#donate_modal').modal("show");
  });

  $('#donate_form').on('submit',function(e)
  {
    e.preventDefault();
    if(confirm("Are you sure update data?"))
    {
    $.ajax({
            method: 'POST',
            url: "<?php echo base_url(). 'Backs_centre/save_edit_donate';?>",
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
              alert('not save donate');
            }
          });
        }
  });
});
</script>
