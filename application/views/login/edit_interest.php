<?php

           echo form_open('lists/save_edit_int');


           echo form_hidden('id',$query[0]->id);
           echo "<br>";
           echo form_label('title');
           echo form_input(array('class'=>'form-control','name'=>'title','value'=>$query[0]->title));
           echo "<br/>";

           echo form_submit(array('id'=>'submit','value'=>'Save Edit','class'=>'btn btn-warning'));

           echo anchor(base_url().'login/interest', 'Back',array('class'=>'btn btn-default'));

           echo form_close();
        ?>
