<body class="bg-light">
<form action="<?php echo base_url(). 'Profiles/save_change_pass';?>">
  <label>Password</label><br>
  <input type="password" name="Password" class="from-control btn" value="<?php echo $this->session->userdata('Password'); ?>">
  <br><br>
  <input class="btn btn-outline-success" type="submit" name="submit" value="Save">
  <a class="btn btn-light" href="<?php echo base_url(). 'login/profile'?>">Back</a>

<br>
</body>
