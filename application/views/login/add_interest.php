<?php
            echo form_open('lists/save_int');

            echo form_label('title');
            echo form_input(array('class'=>'form-control','name'=>'title'));
            echo "<br/>";

            echo form_submit(array('id'=>'submit','value'=>'Add','class'=>'btn btn-success'));

            echo anchor(base_url().'login/interest', 'Back',array('class'=>'btn btn-default'));

            echo form_close();
         ?>
