<?php defined('BASEPATH') OR exit('No direct script access allowed');?>
  <div class="row">
    <div class="col-lg-4 col-lg-offset-4">
    <?php //echo validation_errors('<div class="alert alert-danger alert-dismissable"><button type="button" class="close" data-dismiss="alert" aria-hidden="true">&times;</button><b>',' </b></div>');?>
      <h1>Add Refrigerator</h1>
      <?php echo form_open('refrigerator/submit',array('class'=>'form-horizontal', 'parsley-validate' => '', 'novalidate' => ''));?>
      <div class="form-group">
        <?php
        echo form_label('Make & Model','make_model');
        echo form_error('make_model');
        echo form_input(['name' => 'make_model', 'id' => 'make_model',  'value' => $make_model ,'class' => 'form-control', 'placeholder' => 'Make and Model']);
        ?>
      </div>
     <div class="form-group">
        <?php
        echo form_label('Temperature Monitoring Device Number','temp_monitor_no');
        echo form_error('temp_monitor_no');
        echo form_input(['name' => 'temp_monitor_no', 'id' => 'temp_monitor_no',  'value' => $temp_monitor_no ,'class' => 'form-control']);
        ?>
      </div>
      <div class="form-group">
        <?php
        echo form_label('Main Power Source','main_power_source');
        echo form_error('main_power_source');
        echo form_input(['name' => 'main_power_source', 'id' => 'main_power_source',  'value' => $main_power_source ,'class' => 'form-control']);
        ?>
      </div>
      <div class="form-group">
        <?php
        echo form_label('Backup Power Source','backup_power_source');
        echo form_error('backup_power_source');
        echo form_input(['name' => 'backup_power_source', 'id' => 'backup_power_source',  'value' => $backup_power_source ,'class' => 'form-control']);
        ?>
      </div>
      <div class="form-group">
        <?php
        echo form_label('Age of Refrigerator','refrigerator_age');
        echo form_error('refrigerator_age');
        echo form_input(['name' => 'refrigerator_age', 'id' => 'refrigerator_age',  'value' => $refrigerator_age, 'placeholder' => 'Years','class' => 'form-control']);
        ?>
      </div>

      <div class="col-lg-offset-2 col-lg-8">
      <button class="btn btn-lg btn-danger btn-block" name="submit" type="submit">Create Refrigerator</button>
      </div>
      <?php 
      if (isset($update_id)){
          echo form_hidden('update_id', $update_id);
      }
      echo form_close();?>
    </div>
  </div>
