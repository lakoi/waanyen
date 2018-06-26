<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <link href='https://fonts.googleapis.com/css?family=Kanit:400,300&subset=thai,latin' rel='stylesheet' type='text/css'>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>

    <title>Register</title>
  </head>
  <body class="bg-light">
<?php echo form_open('register/regis_valid'); ?>
<form method="post" name="regis_form" id="regis_form">
  <div class="container">
    <div class="row">
      <div class="col-sm-12">
        <div class="row">
          <div class="col-sm-6">

          </div>
          <div class="col-sm-6">
            <div style="margin:30px 0px 30px 0px;">
              <h3>Register</h3>
              <div class="text-left">
                <div style="margin:15px 0px 15px 0px;">
                  <label class="text-danger"><?php echo $this->session->flashdata("regis_error"); ?></label>
                  <p> &nbsp;Email</p>
                  <input class="form-control" name="Email" type="email" size="40" placeholder="ใส่ Email..." value="<?php echo $this->input->post('Email');?>"><?php echo form_error('Email');?>
                </div>
                <div style="margin:15px 0px 15px 0px;">
                <p> &nbsp;Password</p>
                <input class="form-control" name="Password" type="password" placeholder="ใส่ Password..."><?php echo form_error('Password');?>
                </div>
                <div style="margin:15px 0px 15px 0px;">
                <p> &nbsp;Confirm Password</p>
                <input class="form-control" name="ConPassword" type="password" placeholder="ยืนยัน Password..." ><?php echo form_error('ConPassword');?>
                </div>
                <div style="margin:15px 0px 15px 0px;">
                <p>&nbsp;Name</p>
                <input class="form-control" name="Name" type="text" size="35" placeholder="ใส่ชื่อ..." value="<?php echo $this->input->post('Name');?>"><?php echo form_error('Name');?>
                </div>
                <div class="col-sm-4 offset-8">
                  <div style="margin:15px 0px 15px 0px;">
                <p>Status</p>
                <select class="form-control" name="Status" id="Status" >
                  <option value="USER">USER</option>
                </select>
              </div>
              </div>
              <br/>
              <div class="text-right">
              <input class="btn btn-outline-success" type="submit" name="Submit" value="Save">
              <a class="btn btn-outline-primary " href="<?php echo base_url()."login";?>" role="button">Back</a>
            </div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
</form>

<!-- <script type="text/javascript">
  $(document).ready(function(e)
  {
    $('#regis_form').on('submit', function(e)
    {
      e.preventDefault();
      if(confirm("Are you sure update data?"))
      {
      $.ajax({
              method: 'POST',
              url: "<?php echo base_url(). 'register/regis_valid';?>",
              data: new FormData(this),
              contentType: false,
              processData: false,
              success: function(data)
              {
                alert('save success');
                window.history.replaceState(null, null, '<php echo base_url(). "login";?>');
              },
              error: function()
              {
                alert('not save news');
              }
            });
          }
    });
  });
</script> -->

<style>
/* .form-control{color:#0066ff} */
</style>
<script src="https://code.jquery.com/jquery-3.3.1.min.js"></script>
<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.2/jquery.min.js"></script>
<script type="text/javascript" src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>

  </body>
</html>
