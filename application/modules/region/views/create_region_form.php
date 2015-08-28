<?php defined('BASEPATH') OR exit('No direct script access allowed');?>
  <div class="row">
    <div class="col-lg-4 col-lg-offset-4">
    <?php echo validation_errors('<div class="alert alert-danger alert-dismissable"><button type="button" class="close" data-dismiss="alert" aria-hidden="true">&times;</button><b>',' </b></div>');?>
      <h1>Add New Region</h1>
      <?php echo form_open('region/submit',array('class'=>'form-horizontal'));?>
      <div class="form-group">
        <?php
        echo form_label('Region Name','region_name');
        echo form_error('region_name');
        echo form_input(['name' => 'region_name', 'id' => 'region',  'value' => $region_name ,'class' => 'form-control', 'placeholder' => 'Enter Region Name']);
        ?>
      </div>
     <div class="form-group">
        <?php
        echo form_label('Resident County','resident_county');
        echo form_error('resident_county');
        echo form_input(['name' => 'resident_county', 'id' => 'resident_county',  'value' => $resident_county ,'class' => 'form-control', 'placeholder' => 'Enter Resident County']);
        ?>
      </div>
	  
	  <div class="form-group">
        <?php
        echo form_label('Name of In-Charge','incharge_name');
        echo form_error('incharge_name');
        echo form_input(['name' => 'incharge_name', 'id' => 'region',  'value' => $incharge_name ,'class' => 'form-control', 'placeholder' => 'Enter Name of In-Charge']);
        ?>
      </div>
	  
	  <div class="form-group">
        <?php
        echo form_label('Mobile Phone Number','mobile_number');
        echo form_error('mobile_number');
        echo form_input(['name' => 'mobile_number', 'id' => 'region',  'value' => $mobile_number ,'class' => 'form-control', 'placeholder' => 'Enter Mobile Phone Number']);
        ?>
      </div>
	  
	  <div class="form-group">
        <?php
        echo form_label('Email Address of Contact Person','email_of_contactperson');
        echo form_error('email_of_contactperson');
        echo form_input(['name' => 'email_of_contactperson', 'id' => 'region',  'value' => $email_of_contactperson ,'class' => 'form-control', 'placeholder' => 'Enter Email Address of Contact Person']);
        ?>
      </div>
	  
	  
	  
      <div >
      <button class="btn btn-lg btn-danger btn-block" name="submit" type="submit">Create Region</button>
      </div>
      <?php 
      if (isset($update_id)){
          echo form_hidden('update_id', $update_id);
      }
      echo form_close();?>
    </div>
  </div>
