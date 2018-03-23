<?php

           echo form_open('lists/save_edit_int');

           echo form_hidden('id',$result[0]->id);

           echo form_label('First Name');
           echo form_input(array('class'=>'form-control','name'=>'first_name','value'=>$result[0]->first_name));
           echo "<br/>";

           echo form_label('Last Name');
           echo form_input(array('class'=>'form-control','name'=>'last_name','value'=>$result[0]->last_name));
           echo "<br/>";

           echo form_submit(array('id'=>'submit','value'=>'Save Edit','class'=>'btn btn-warning'));

           echo anchor(base_url().'index.php/customer', 'Back',array('class'=>'btn btn-default'));

           echo form_close();
        ?>
