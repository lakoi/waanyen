<?php

           echo form_open('lists/save_edit_edu');

           print_r($query);
           echo form_hidden('id',$query[0]->id);
           echo "<br>";
           echo form_label('title');
           echo form_input(array('class'=>'form-control','name'=>'title','value'=>$result[0]->title));
           echo "<br/>";

           echo form_submit(array('id'=>'submit','value'=>'Save Edit','class'=>'btn btn-warning'));

           echo anchor(base_url().'login/education', 'Back',array('class'=>'btn btn-default'));

           echo form_close();
        ?>
