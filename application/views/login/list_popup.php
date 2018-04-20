<!doctype html>
<html lang="en">
  <head>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
    <!-- <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script> -->
    <script src="http://code.jquery.com/jquery-3.3.1.min.js" integrity="sha256-FgpCb/KJQlLNfOu91ta32o/NMZxltwRo8QtmkMRdAu8=" crossorigin="anonymous"></script>

    <style>
      .btn
      {
          border: none;
          color: white;
          padding: 14px 28px;
          font-size: 16px;
          cursor: pointer;
      }
      .primary {background-color: #f8f9fa; color: #007bff;}
      .primary:hover {background-color: #f8f9fa; color: #000;}
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
                      html +='<tr>'+
                              '<td>'+data[i].id+'</td>'+
                              // '<td>'+data[i].photo+'</td>'+
                              '<td><img src="<?php echo base_url().'img/';?>'+data[i].photo+'" width="80" hight="80"/></td>'+
                              '<td>'+data[i].title+'</td>'+
                              '<td><a href="#myModal" data-toggle="modal" class="btn btn-warning" onclick="submit('+data[i].id+')">Edit</a></td>'+
                              '<td><a href="javascript:;" class="btn btn-danger">Delete</a></td>'+
                            '</tr>';
                    }
                    $('#showdata').html(html);
                  },
                  error: function()
                  {
                    alert('not get database');
                  }
                });
        }
        function uploaddata()
        {
          var photo = $("[name='photo']").val();
          var title = $("[name='title']").val();

          $.ajax({
                  type: 'POST',
                  data: 'photo='+photo+'&title='+title,
                  url: '<?php echo base_url(). "lists/uploaddata";?>',
                  // contentType: false,
                  // cacha: false,
                  // processData: false,
                  dataType: 'json',
                  success: function(data)
                  {
                    console.log(data);
                    $("#not").html(data.not);
                    if(data.not=='')
                    {
                      $('#myModal').modal('hide');
                      showAllEmployee();

                      $("[name='photo']").val('');
                      $("[name='title']").val('');
                    }
                  },
                  error: function(request)
                  {
                    alert(request.responseText);
                  }
                });
        }
        function submit(x)
        {
          if(x=='upload')
          {
            $('#btn-upload').show();
            $('#btn-update').hide();
            $('#btn-img').hide();
          }
          else
          {
            $('#btn-upload').hide();
            $('#btn-update').show();
            $('#btn-img').show();

            $.ajax({
                    type: 'POST',
                    data: 'id='+x,
                    url: '<?php echo base_url(). "lists/updatedata";?>',
                    dataType: 'json',
                    success: function(data)
                    {
                      // $('[name="photo"]').val(data[0].photo);
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
        function editdata()
        {
          // var id = $("[name='id']").val();
          var photo = $("[name='photo']").val();
          var title = $("[name='title']").val();
          $.ajax({
                  type: 'POST',
                  data: 'photo='+photo+'&title='+title,
                  url: '<?php echo base_url(). "lists/editdata";?>',
                  dataType: 'json',
                  success: function(data)
                  {
                    console.log(data);
                    $("#not").html(data.not);
                    if(data.not=='')
                    {
                      $('#myModal').modal('hide');
                      showAllEmployee();

                      $("[name='photo']").val('');
                      $("[name='title']").val('');
                    }
                  },
                  error: function()
                  {
                    alert('not update file');
                  }
                });
        }
      </script>

    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
    <title>"Waanyen"</title>

  </head>
    <body class="blockquote bg-light">

              <div class="btn-group-lg text-left offset-1" role="group" aria-label="Basic example">
                <a href="<?php echo base_url().'login/home';?>" class="btn primary ">Home</a>|
                <a href="<?php echo base_url().'login/education';?>" class="btn primary">Education</a>|
                <a href="<?php echo base_url().'login/interest';?>" class="btn primary">Interest</a>|
                <a href="<?php echo base_url().'login/job';?>" class="btn primary">Job</a>|
                <a href="<?php echo base_url().'login/domain';?>" class="btn primary">Domain</a>|
                <a href="<?php echo base_url().'login/popup';?>" class="btn primary">popup</a>
              </div>
                <hr>

          <div class="container box">
            <h2>Popup</h2>
              <button data-target="#myModal" data-toggle="modal" type="button" class="btn btn-primary" onclick="submit('upload')" >Add</button>
            <table class="table table-hover">
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
                <form method="post" id="popup_form" enctype="multipart/form-data">
                  <div class="modal-content">
                  <div class="modal-header">
                    <h1>Data</h1>
                    <p id="not"></p>
                </div>
                <div class="modal-body">
                <table class="table">
                  <tr>
                    <td></td>
                    <td><img src name="img" id="img" class="post_images" width="200" height="200"/></td>
                  </tr>
                  <tr>
                    <td>photo</td>
                    <td><input type="file" name="photo" id="photo" class="form-control" value=""/></td>
                    <input type="hidden" name="id" id="id" value=""/>
                    <span class="user_upload_image"></span>
                  </tr>
                  <tr>
                    <td>title</td>
                    <td><input type="text" name="title" id="btn-title" class="form-control" value=""/></td>
                  </tr>
                  <tr>
                    <td></td>
                    <td>
                      <button type="button" id="btn-upload" onclick="uploaddata()" class="btn btn-success" >upload</button>
                      <button type="button" id="btn-update" onclick="editdata()" class="btn btn-success" >update</button>
                      <button type="button" data-dismiss="modal" class="btn btn-danger" >back</button>
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
