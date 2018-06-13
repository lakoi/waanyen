    <div class="container">
      <div class="row">
        <div class="col-sm-8">
          <h4>Profile</h4>
          <form method="post">
        <?php if (isset($query)): ?>
        <table class="table border-0">
          <input type="hidden" name="UserID" value="<?php echo $query[0]->UserID ;?>"></input>
            <tr>
              <th><label>Email</label></th>
              <td><span><?php echo $this->session->userdata('Email'); ?></span></td><td></td>
            </tr>
            <tr>
              <th><label> Password</label></th>
              <td><input type="password" readonly class="form-control-plaintext" value="<?php echo $this->session->userdata('Password'); ?>"></td>
              <td><a class="btn btn-warning" href="<?php echo base_url(). 'login/change_password';?>"> change password</a></td>
            </tr>
            <tr>
              <th><label>Name</label></th>
              <td><?php echo $this->session->userdata('Name');?></td>
              <td><a class="btn btn-warning" href="<?php echo base_url(). 'login/change_name';?>"> change name</a></td>
            </tr>
          </table>
            <?php endif; ?>
          </form>
        </div>
      </div>
    </div>
