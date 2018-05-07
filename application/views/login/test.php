<!doctype html>
<html lang="en">
  <head>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>

    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <title>"Waanyen"</title>
    <style>
  p {
    color: red;
  }
  span {
    color: blue;
  }
  </style>

  <script>
  // showAllEmployee();

  // function showAllEmployee()
  // {
  //   $.ajax({
  //           type: 'POST',
  //           url: '<?php echo base_url(). "lists/showAllEmployee";?>',
  //           dataType: 'json',
  //           success: function(data)
  //           {
  //             var html = '';
  //             var i;
  //             for(i=0; i<data.length; i++)
  //             {
  //               html +='<form method="post" id="status_form"><tr>'+
  //                       '<td><input class="form-check-input status" type="radio" name="status" id='+data[i].id+' value="1">1<br><input class="form-check-input status" type="radio" name="status" id='+data[i].id+' value="0" >0<br><p id='+data[i].id+' class="up_s">'+data[i].status+'</p></td>'+
  //
  //                       '<td><img src="<?php echo base_url().'img/';?>'+data[i].photo+'" width="80" hight="80" id="show_profile"/></td>'+
  //
  //                       '<td>'+data[i].title+'</td>'+
  //
  //                       '<td><a id='+data[i].id+' class="btn btn-warning update" onclick="submit('+data[i].id+')">Edit</a></td>'+
  //
  //                       '<td><a id='+data[i].id+' class="btn btn-danger delete">Delete</a></td>'+
  //                     '</tr></form>';
  //             }
  //
  //
  //
  //             $('#showdata').html(html);
  //           },
  //           error: function()
  //           {
  //             alert('not get database');
  //           }
  //         });
  // }
</script>
</head>

<body>
  <div class="btn-group-lg   text-left offset-1   " role="group" aria-label="Basic example">
<a href="<?php echo base_url().'login/home';?>" class="btn primary ">Home</a>|
<a href="<?php echo base_url().'login/education';?>" class="btn primary">Education</a>|
<a href="<?php echo base_url().'login/interest';?>" class="btn primary">Interest</a>|
<a href="<?php echo base_url().'login/job';?>" class="btn primary">Job</a>|
<a href="<?php echo base_url().'login/domain';?>" class="btn primary">Domain</a>|
<a href="<?php echo base_url().'login/popup';?>" class="btn primary">popup</a>
<hr>
</div>


</body>
      <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
      <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>
    </body>
</html>
