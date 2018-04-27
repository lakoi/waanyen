<!doctype html>
<html lang="en">
  <head>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
    <!-- <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script> -->
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>

    <style>
    p
    {
      color: red;
    }

    </style>

<script type="text/javascript">
  showAllEmployee();

  function showAllEmployee()
  {
    $.ajax({
            type: 'POST',
            url: '<?php echo base_url(). "lists/showAllEmployee";?>',
            dataType: 'json',
            success: function(data)
            {
              var html = '';
              var i;
              for(i=0; i<data.length; i++)
              {
                html +='<form method="post" id="status_form"><tr>'+
                        '<td><input class="form-check-input status" type="radio" name='+data[i].id+' id="status" value="1">1<br><input class="form-check-input status" type="radio" name='+data[i].id+' id="status" value="0" >0<br><p id='+data[i].id+' class="up_s">'+data[i].status+'</p></td>'+

                        '<td><img src="<?php echo base_url().'img/';?>'+data[i].photo+'" width="80" hight="80" id="show_profile"/></td>'+

                        '<td>'+data[i].title+'</td>'+

                        '<td><a id='+data[i].id+' class="btn btn-warning update" onclick="submit('+data[i].id+')">Edit</a></td>'+

                        '<td><a id='+data[i].id+' class="btn btn-danger delete">Delete</a></td>'+
                      '</tr></form>';
              }
              $('#showdata').html(html);
            },
            error: function()
            {
              alert('not get database');
            }
          });
  }
  function submit(x)
  {
    if(x=='upload')
    {
      $('#img').show();
      $('[name="img"]').attr("src",'<?php echo base_url(). 'img/show_photo.png';?>');
      $("[name='photo']").val('');
      $("[name='title']").val('');
      $('#not').html('');
    }
    else
    {
      $('#img').show();
      $("[name='photo']").val('');
      $('#not').html('');

      $.ajax({
              type: 'POST',
              data: 'id='+x,
              url: '<?php echo base_url(). "lists/updatedata";?>',
              dataType: 'json',
              success: function(data)
              {
                $('[name="img"]').attr("src",'<?php echo base_url(). 'img/';?>'+data[0].photo);
                $('[name="title"]').val(data[0].title);
                $('[name="id"]').val(data[0].id);
              },
              error: function()
              {
                alert('not submit');
              }
            });
    }
  }
  function readURL(input)
  {
    if (input.files && input.files[0])
    {
       var reader = new FileReader();
       reader.onload = function (e)
       {
           $('#img').attr('src', e.target.result);
       }
       reader.readAsDataURL(input.files[0]);
    }

  }

  $(document).ready(function (e)
  {
    $('#add').click(function()
    {
      $('#myModal').modal('show');
      $('#popup_form')[0].reset();
      $('.modal-title').text("add Image");
      $('#id').val('');
      $('#action').val('upload');
      $('#upload').val("Upload");
    });
    $('.update').on('click', function()
    {
        $('#id').val($(this).attr("id"));
        $('#action').val("update");
        $('.modal-title').text("update image");
        $('#upload').val("Update");
        $('#myModal').modal("show");
    });
    $('.delete').on('click', function()
    {
      var id = $(this).attr("id");
      var action = "delete";
      if(confirm("Are you sure delete data?"))
      {
        $.ajax({
                url: "<?php echo base_url(). "lists/uploaddata";?>",
                method: 'POST',
                data:{id:id, action:action},
                success: function(data)
                {
                  showAllEmployee();
                }
              });
      }
    });
    $("#popup_form").on('submit',(function(e)
    {
      e.preventDefault();
      var image_name = $('#photo').val();
      if(image_name == '')
      {
        $('#not').html("add photo");
        return false;
      }
      else
      {
        var title = $('#title').val();
        if(title == '')
        {
          $('#not').html("add title");
          return false;
        }
        else
        {
          var extension = $('#photo').val().split('.').pop().toLowerCase();
          if(jQuery.inArray(extension, ['gif','png','jpg','jpeg']) == -1)
          {
            alert("add a image");
            $('#photo').val('');
            return false;
          }
          else
          {
            $.ajax({
                    url: "<?php echo base_url(). "lists/uploaddata";?>",
                    type: "POST",
                    data:  new FormData(this),
                    contentType: false,
                    processData:false,
                    success: function(data)
                    {
                      showAllEmployee();
                      $('#myModal').modal('hide');
                      $("[name='photo']").val('');
                      $("[name='title']").val('');
                    },
                    error: function()
                    {
                      alert("not upload");
                    }
                  });
          }
        }
      }
    }));
    $('.status').change('click',function()
    {
        $( '#result' ).html( $( "input:checked" ).val() + " is checked!" );
      // showAllEmployee();
      // $('#up_s').html() == $(this).val();
      // $('#result').html( "id : " + $(this).attr('id')  );

        if(confirm("Are you change status?"))
        {
          // var status = $("#status:checked").length;
          // alert( "you checked status = "+status );
          var id = $(this).attr('name');
          var status = $(this).val();

      $.ajax({
              url: "<?php echo base_url(). "lists/editstatus";?>",
              method: 'POST',
              data:{id:id, status:status},
              dataType: 'json',
              success: function(data)
              {
                alert(id);
                // $('.up_s').attr('id', id).val(status);
                // showAllEmployee();
                // location.reload();
              },
              error: function()
              {
                alert("n");
              }
            });
          }
    });
  });
</script>

    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <!-- <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous"> -->
      <title>"Waanyen"</title>

  </head>
  <body class="blockquote bg-light">

      <div class="btn-group-lg   text-left offset-1   " role="group" aria-label="Basic example">
        <a href="<?php echo base_url().'login/home';?>" class="btn primary ">Home</a>|
        <a href="<?php echo base_url().'login/education';?>" class="btn primary">Education</a>|
        <a href="<?php echo base_url().'login/interest';?>" class="btn primary">Interest</a>|
        <a href="<?php echo base_url().'login/job';?>" class="btn primary">Job</a>|
        <a href="<?php echo base_url().'login/domain';?>" class="btn primary">Domain</a>|
        <a href="<?php echo base_url().'login/popup';?>" class="btn primary">popup</a>
        <hr>
      </div>

      <div class="container box">
        <h2>Popup</h2>
        <div id="result"></div>
          <button id="add" type="button" class="btn btn-primary" onclick="submit('upload')" >Add</button>
        <table class="table table-hover" id="table_popup">
          <thead>
            <tr>
              <th><center>no</center></th>
              <th><center>photo</center></th>
              <th><center>title</center></th>
              <th><center>edit</center></th>
              <th><center>delete</center></th>
            </tr>
          </thead>
            <tbody id="showdata">
            </tbody>
          </table>
        </div>

        <div class="modal fade" id="myModal" role="dialog" >
          <div class="modal-dialog modal-dialog-centered">
            <form method="post" id="popup_form" enctype="multipart/form-data" runat="server">
              <div class="modal-content">
              <div class="modal-header">
                <h1 class="modal-title">Data</h1>
            </div>
            <div class="modal-body">

            <table class="table">
              <tr>
                <td></td>
                <td><img src name="img" id="img" alt="your image" class="post_images" width="200" height="200" border="10 "/></td>
              </tr>

              <tr>
                <p id="not" class="text-center text-red"></p>
                <td>photo</td>
                <td><input type="file" name="photo" id="photo" class="form-control" onchange="readURL(this);"/></td>
                <input type="hidden" name="action" id="action" value="upload"/>
                <input type="hidden" name="id" id="id" value=""/>
                <span class="user_upload_image"></span>
              </tr>
              <tr>
                <td>title</td>
                <td><input type="text" name="title" id="title" class="form-control" value=""/></td>
              </tr>
              <tr>
                <td></td>
                <td>
                  <input type="submit" name="upload" id="upload" value="Upload" class="btn btn-success"/>
                  <button type="button" id="back" data-dismiss="modal" class="btn btn-danger" >back</button>
                </td>
              </tr>
            </table>
          </div>
            </div>
            </form>
          </div>
        </div>

        <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
        <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>
  </body>
</html>
