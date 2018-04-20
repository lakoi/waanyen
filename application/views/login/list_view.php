<!doctype html>
<html lang="en">
  <head>
    <SCRIPT LANGUAGE="JavaScript">
      function showFilled(Value) {
      return (Value > 9) ? "" + Value : "0" + Value;
      }
      function StartClock24() {
      TheTime = new Date;
      document.clock.showTime.value = showFilled(TheTime.getHours()) + ":" +
      showFilled(TheTime.getMinutes()) + ":" + showFilled(TheTime.getSeconds());
      setTimeout("StartClock24()",1000)
      }
    </script>
    <style type="text/css">
      .input { font-family: Verdana, Arial, Helvetica, sans-serif; font-size: 8pt;border-style: none }

        .btn
        {
            border: none;
            color: white;
            padding: 14px 28px;
            font-size: 16px;
            cursor: pointer;
        }
        .primary {background-color: #f8f9fa; color: #007bff;} /* Green */
        .primary:hover {background-color: #f8f9fa; color: #000;}
    </style>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
    <title>"Waanyen"</title>
  </head>
        <body class="blockquote text-center bg-light" onload="StartClock24()">
          <form name="clock" class="text-center">
            <input type="text" name="showTime" size="6" class="input bg-light" >
          </form>
          <table class="table">
            <thead>
              <th><div class="btn-group-lg text-left" role="group" aria-label="Basic example">
                <a href="<?php echo base_url().'login/education';?>" class="btn primary">Education</a>|
                <a href="<?php echo base_url().'login/interest';?>" class="btn primary">Interest</a>|
                <a href="<?php echo base_url().'login/job';?>" class="btn primary">Job</a>|
                <a href="<?php echo base_url().'login/domain';?>" class="btn primary">Domain</a>|
                <a href="<?php echo base_url().'login/popup';?>" class="btn primary">popup</a>
              </div></th>
            </thead>
          </table>
          <marquee scrollamount="20"><blink><h4> * * * Hello Word * * *</h4></blink></marquee>
            <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
            <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
            <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>
        </body>
</html>
