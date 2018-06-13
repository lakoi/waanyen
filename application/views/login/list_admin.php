        <div class="container">
        <h3>Admin</h3>
      <?php if (isset($query)): ?>
      <table class="table table-hover" >
        <thead>
          <tr>
            <!-- <th><center>id</center></th> -->
            <th><center>Email</center></th>
            <th><center>Name</center></th>
            <th><center>Status</center></th>
            <th><center>Edit Name</center></th>
            <th><center>Edit Status</center></th>
            <th><center>Delete User</center></th>
          </tr>
        </thead>
      <tbody>
        <?php
        foreach($query as $r){
            echo "<tr>";
                // echo "<td>".$r->id."</td>";
                echo "<td>".$r->Email."</td>";
                echo "<td>".$r->Name."</td>";
                echo "<td>".$r->Status."</td>";
                echo "<td><center><a href='".base_url()."login/edit_name_admin/".$r->UserID."' class='btn btn-warning'>Edit name</a></center></td>";
                echo "<td><center><a href='".base_url()."login/edit_status_admin/".$r->UserID."' class='btn btn-warning'>Edit status</a></center></td>";
                echo "<td><center><a href='".base_url()."lists/delete_user/".$r->UserID."' onclick='return confirm(\"Confirm Delete $r->Email\")' class='btn btn-danger'>Delete user</a></center></td>";
            echo "</tr>";
        }
    ?>


      </tbody>
      </table>
      <?php endif; ?>
    </div>
