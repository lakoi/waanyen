<!doctype html>
<html lang="en">
  <head>

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

    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">


    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
    <title>"Waanyen"</title>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.2/jquery.min.js"></script>
  </head>
    <body class="blockquote text-center bg-light">
      <?php echo "ยินดีต้อนรับ คุณ",$this->session->userdata('Email'); ?><br>
        <table class="table">
          <thead>
            <th>
              <div class="btn-group-lg text-left" role="group" aria-label="Basic example">
                <a href="<?php echo base_url().'login/home';?>" class="btn primary ">Home</a>|
                <a href="<?php echo base_url().'login/education';?>" class="btn primary">Education</a>|
                <a href="<?php echo base_url().'login/interest';?>" class="btn primary">Interest</a>|
                <a href="<?php echo base_url().'login/job';?>" class="btn primary">Job</a>|
                <a href="<?php echo base_url().'login/domain';?>" class="btn primary">Domain</a>|
                <a href="<?php echo base_url().'login/popup';?>" class="btn primary">popup</a>
              </div>
            </th>
          </thead>
        </table>

          <h3>Popup</h3>

          <?php echo print_r($_POST);?>
            <div class="col-sm-8 offset-2 ">
              <?php if (isset($query)): ?>
              <div class="col-sm-1" ><button type="button" class="btn btn-primary" data-toggle="modal" data-target="#addModal">Add</button></div>
                <table class="table table-hover" >
                  <thead>
                    <tr>
                      <th><center>no</center></th>
                      <th><center>photo</center></th>
                      <th><center>title</center></th>
                      <th><center>edit</center></th>
                      <th><center>delete</center></th>
                    </tr>
                  </thead>
                    <tbody>

                      <?php  foreach($query as $r)
                      {
                        // echo base_url(). 'img/'.$query[$n]->photo;
                      ?>
                      <tr>
                        <td>
                          <button class="btn"><p class="text-success font-weight-bold">Off</p> <p style="display: none" class="text-danger font-weight-bold">On</p></button>
                        </td>
                        <td>
                        <?php
                        $image_properties = array(
                                'src'   => 'img/'.$r->photo,
                                'class' => 'post_images',
                                'width' => '80',
                                'height'=> '60',
                        );
                        echo img($image_properties);?>
                        </td>
                        <td><?php echo $r->title;?></td>
                        <td><a data-toggle="modal" href="#editModal" class="btn btn-warning text-center edit"
                              data-title="<?php echo $r->title; ?>"
                              data-photo="<?php echo base_url(). 'img/'.$r->photo;?>"
                              data-id="<?php echo $r->id; ?>" >Edit</a></td>
                        <td><a href="<?php echo base_url().'Lists/delete_popup/'.$r->id;?>" onclick="return confirm('Confirm Delete Item <?php echo $r->title;?>')" class='btn btn-danger'>Delete</a></td>
                      </tr>
                        <?php
                      }
                      ?>
                    </form>
                    </tbody>
                  </table>
              <?php endif; ?>
            </div>

            <!-- AddModal -->
            <div class="modal fade" id="addModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
              <div class="modal-dialog modal-dialog-centered" role="document">
                <div class="modal-content">
                  <div class="modal-header">
                    <h5 class="modal-title" id="exampleModalLabel">Add file</h5>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                      <span aria-hidden="true">&times;</span>
                    </button>
                  </div>
                  <div class="modal-body">
                    <form enctype="multipart/form-data" method="post" action="<?php echo base_url(). 'Lists/save_popup';?>">
                    <input type="file" class="btn primary" name="photo" id="featured">

                    <div class="text-left">title</div>
                    <input type="text" class="form-control text-center" name="title">
                  </div>
                  <div class="modal-footer">
                    <input type="submit" class="btn btn-success" value="upload">
                    <button type="button" class="btn btn-danger" data-dismiss="modal">Close</button>
                    </form>
                  </div>
                </div>
              </div>
            </div>

            <!-- Edit Modal -->
            <div class="modal fade" id="editModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
              <div class="modal-dialog modal-dialog-centered" role="document">
                <div class="modal-content">

                  <div>
                  <div class="modal-header">
                    <h5 class="modal-title" id="exampleModalLabel">Edit file</h5>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                      <span aria-hidden="true">&times;</span>
                    </button>
                  </div>
                <form enctype="multipart/form-data" method="post" action="" id="edit-form">
                  <div class="modal-body">
                    <input type="hidden" name="id" id="id">
            <!-- <?php echo base_url(). 'Lists/save_edit_popup';?> -->
                      <img type="hidden" name="old_image" value="">
                      <img src id="photo" class="post_images" width="200" height="200"/>
                    <input type="file" class="btn primary form-control" name="photo">
                    <div class="text-left">title</div>
                    <input type="text" class="form-control text-center" name="title" id="title" >
                  </div>

                  <div class="modal-footer">
                    <input type="submit" class="btn btn-success" value="upload">
                    <button type="button" class="btn btn-danger" data-dismiss="modal">Close</button>
                  </div>
                </form>
                  </div>
                </div>
              </div>
            </div>


            <script>
            $( "button" ).click(function() {
              $( "p" ).toggle();
            });
            </script>

            <script type="text/javascript">
            $('.edit').click(function(){

              var id = $(this).attr('data-id');
              var title = $(this).attr('data-title');
              var photo = $(this).attr('data-photo');

              $("#id").val(id);
              $("#title").val(title);
              $("#photo").attr({"src":photo});
              });
          </script>
          <script type="text/javascript">
          $(function(){


                 $("#edit-form").on("submit",function(event){
                     console.log("test 1");
                     event.preventDefault();
                     console.log("test 2");
                     var dataSend = $(this).serialize();
                     var dataSend2 = $(this).serializeArray();
                     console.log(dataSend);
                     console.log(dataSend2);
                     $.post("list_popup.php",dataSend,function(response){

                     });
                     $.post("<?php echo base_url(). 'login/popup';?>",dataSend2,function(response){

                     });
                 });

          });
          </script>


      <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
      <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
      <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>
    </body>
</html>
