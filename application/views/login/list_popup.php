<!DOCTYPE html>
<html>
  <body class="blockquote bg-light request">

      <div class="container box">
        <h2>Popup</h2>
        <div id="result"></div>
          <button id="add" type="button" class="btn btn-primary" onclick="submit('upload')">Add</button>
          <?php if (isset($query)): ?>
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
              <?php
              foreach($query as $r){
                $uncheck = "";
                $check = "";
                if($r->status == 1)
                {
                  $uncheck = "checked";
                  $check = "";
                }
                else
                {
                  $uncheck = "";
                  $check = "checked";
                }

                echo "<tr>";

                        echo "<td><input class='form-check-input status' type='radio' name='status$r->id' id='$r->id' value='1' $uncheck/>ON<br>";
                          echo  "<input class='form-check-input status' type='radio' name='status$r->id' id='$r->id' value='0' $check/>OFF<br>";
                            echo  "<input id='status$r->id' name='statuss' type='hidden' class='up_s form-control' value='$r->status'>";

                      echo  "<td><img src=" .base_url()."img/".$r->photo." width='80' hight='80' id='photo$r->id'/></td>";

                      echo  "<td id='title$r->id'>".$r->title."</td>";

                      echo  "<td><a id='$r->id' class='btn btn-warning update' onclick='submit($r->id)'>Edit</a></td>";

                      echo  "<td><a id='$r->id' class='btn btn-danger delete'>Delete</a></td>";

                    echo  "</tr>";
                }
              ?>
            </tbody>
          </table>
          <?php endif; ?>
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
                <td><input type="text" name="title" id="title" class="form-control" /></td>
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

        <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
        <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
        <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>

        <script type="text/javascript">

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

          function popup_re()
          {
            $.ajax({
                  method: 'POST',
                  url: '<?php echo base_url(). "lists/popup_re";?>',
                  dataType: 'json',
                  success: function(data)
                  {
                    $.each(data.query, function(key, val) {
                      var id = val["id"];
                      var title = val["title"];
                      var status = val["status"];
                      var photo = val["photo"];


                      $('#status'+id).html(status);
                      $('#title'+id).html(title);
                      $('#photo'+id).attr('src','<?php echo base_url(). 'img/';?>'+photo);
                   });
                  }
                });
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
            $('.update').click(function()
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
                        // dataType: 'json',
                        success: function(data)
                        {
                          location.reload();
                          // popup_re();
                        },
                        error: function()
                        {
                          alert("don't delete");
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
                    alert("add image");
                    $('#photo').val('');
                    return false;
                  }
                  else
                  {
                    $.ajax({
                            url: "<?php echo base_url(). "lists/uploaddata";?>",
                            method: "POST",
                            data:  new FormData(this),
                            contentType: false,
                            processData:false,
                            // dataType: 'json',
                            success: function(data)
                            {
                              location.reload();
                              // popup_re()
                              $('#myModal').modal('hide');
                              $("[name='photo']").val('');
                              $("[name='title']").val('');
                            },
                            error: function(request, status, error)
                            {
                              alert(request.responseText);
                            }
                          });
                  }
                }
              }
            }));

            $('.status').change('click',function()
            {
                if(confirm("Are you change status?"))
                {
                  var id = $(this).attr('id');
                  var status = $(this).val();

              $.ajax({
                      url: "<?php echo base_url(). "lists/editstatus";?>",
                      method: 'POST',
                      data:{id:id, status:status},
                      dataType: 'json',
                      success: function(data)
                      {
                        // popup_re();
                        location.reload();
                      },
                      error: function(request, status, error)
                      {
                         alert(request.responseText);
                      }
                    });
                  }
            });

          });
        </script>
  </body>
</html>
