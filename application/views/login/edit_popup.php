<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
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
                <a href="<?php echo base_url().'login/home';?>" class="btn btn-outline-primary border-0">Home</a>|
                <a href="<?php echo base_url().'login/education';?>" class="btn btn-outline-primary border-0">Education</a>|
                <a href="<?php echo base_url().'login/interest';?>" class="btn btn-outline-primary border-0">Interest</a>|
                <a href="<?php echo base_url().'login/job';?>" class="btn btn-outline-primary border-0">Job</a>|
                <a href="<?php echo base_url().'login/domain';?>" class="btn btn-outline-primary border-0">Domain</a>|
                <a href="<?php echo base_url().'login/popup';?>" class="btn btn-outline-primary border-0">popup</a>
              </div>
            </th>
          </thead>
        </table>

        <!-- <img src="<?php echo base_url(). 'img/10_04_2018_10_11_54.png';?>" width="200" hight="200"/> -->
          <h3>Popup</h3>
            <div class="col-sm-8 offset-2 ">
              <?php if (isset($query)): ?>
              <div class="col-sm-1" ><button type="button" class="btn btn-primary" data-toggle="modal" data-target="#addModal">Add</button></div>
                <table class="table table-hover" >
                  <thead>
                    <tr>
                      <th><center>photo</center></th>
                      <th><center>photo</center></th>
                      <th><center>title</center></th>
                      <th><center>edit</center></th>
                      <th><center>delete</center></th>
                    </tr>
                  </thead>
                    <tbody>
                      <?php  foreach($query as $r)
                      {
                      ?>
                      <tr>
                        <td>
                          <div class='checkbox' >
                            <button><p><?php echo $r->status;?></p><p style='display: none'>1</p></button>
                          </div>
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
                        <td><a data-toggle="modal" data-target="#editModal" href="<?php echo base_url().'login/edit_popup/'.$r->id;?>" class="btn btn-warning">Edit</a></td>
                        <td><a href="<?php echo base_url().'login/delete_popup/'.$r->id;?>" onclick='return confirm(\"Confirm Delete   Item <?php echo $r->photo;?>\")' class='btn btn-danger'>Delete</a></td>
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
            <!-- <div class="modal fade" id="addModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
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
                    <input type="file" class="btn border-primary" name="photo" id="featured">

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
            </div> -->

            <!-- Edit Modal -->
            <div class="modal fade" tabindex="-1" id="editModal" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
              <div class="modal-dialog modal-dialog-centered" role="document">
                <div class="modal-content">
                  <div class="modal-header">
                    <h5 class="modal-title" id="exampleModalLabel">Edit file</h5>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                      <span aria-hidden="true">&times;</span>
                    </button>
                  </div>

                  <div class="modal-body">
                    <form enctype="multipart/form-data" method="post" action="<?php echo base_url(). 'Lists/save_edit_popup';?>">
                      <input type="hidden" name="id" value="<?php echo $query[0]->id ;?>">
                      <input type="hidden" name="old_image" value="<?php echo $query[0]->photo ;?>">
                      <?php $update_image = array(
                        'src'   => 'img/'.$query[0]->photo,
                        'class' => 'post_images',
                        'width' => '200',
                        'height'=> '200',
                      );
                      echo img($update_image);?>
                      <input type="hidden" name="id" value="<?php echo $query[0]->id ;?>">
                    <input type="file" class="btn border-primary" name="photo">
                    <div class="text-left">title</div>
                    <input type="text" class="form-control text-center" name="title" value="<?php echo $query[0]->title ;?>">
                    </div>

                  <div class="modal-footer">
                    <input type="submit" class="btn btn-success" value="upload">
                    <button type="button" class="btn btn-danger" data-dismiss="modal">Close</button>
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
          $(window).load(function(){
            $('#editModal').modal('show');
          });
          </script>
      <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
      <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
      <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>
    </body>
</html>
