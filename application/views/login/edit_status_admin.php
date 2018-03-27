          <?php
           echo form_open('lists/save_edit_status_ad');


           echo form_hidden('UserID',$query[0]->UserID);
           echo "<br>";
           echo form_label('Status');
           echo form_dropdawn(array('class'=>'form-control','name'=>'Status','value'=>$query[0]->Name));
           echo "<br/>";

           echo form_submit(array('id'=>'submit','value'=>'Save Edit','class'=>'btn btn-warning'));

           echo anchor(base_url().'login/list_admin', 'Back',array('class'=>'btn btn-default'));

           echo form_close();
        ?>
