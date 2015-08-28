<?php defined('BASEPATH') OR exit('No direct script access allowed');?>
  <div class="row">
    <div class="col-lg-4 col-lg-offset-4">
    <?php echo validation_errors('<div class="alert alert-danger alert-dismissable"><button type="button" class="close" data-dismiss="alert" aria-hidden="true">&times;</button><b>',' </b></div>');?>
      <h1>Add New Sub County</h1>
      <?php echo form_open('subcounty/submit',array('class'=>'form-horizontal'));?>
      <div class="form-group">
        <?php
        echo form_label('Sub County Name','subcounty_name');
        echo form_error('subcounty_name');
        echo form_input(['name' => 'subcounty_name', 'id' => 'subcounty',  'value' => $subcounty_name ,'class' => 'form-control', 'placeholder' => 'Enter Sub County Name']);
        ?>
      </div>
      <div class="form-group">
        <?php
        echo form_label('County Name','county_id');
        echo form_error('county_id');
        echo form_input(['name' => 'county_id', 'id' => 'county_id',  'value' => $county_id ,'class' => 'form-control', 'placeholder' => 'Enter County Name']);
        ?>
      </div>
       <div class="form-group">
        <?php
        echo form_label('Estimated Total Population','population');
        echo form_error('population');
        echo form_input(['name' => 'population', 'id' => 'population',  'value' => $population ,'class' => 'form-control', 'placeholder' => 'Enter Population']);
        ?>
      </div>
       <div class="form-group">
        <?php
        echo form_label('Estimated Population Under One','population_one');
        echo form_error('population_one');
        echo form_input(['name' => 'population_one', 'id' => 'population_one',  'value' => $population_one ,'class' => 'form-control', 'placeholder' => 'Enter Population']);
        ?>
      </div>
       <div class="form-group">
        <?php
        echo form_label('Estimated Population of Women','population_women');
        echo form_error('population_women');
        echo form_input(['name' => 'population_women', 'id' => 'population_women',  'value' => $population_women ,'class' => 'form-control', 'placeholder' => 'Enter Population']);
        ?>
      </div>
     <div class="form-group">
        <?php
        echo form_label('Number of Health Facilities','no_facilities');
        echo form_error('no_facilities');
        echo form_input(['name' => 'no_facilities', 'id' => 'no_facilities',  'value' => $no_facilities ,'class' => 'form-control', 'placeholder' => 'Enter Number']);
        ?>
      </div>
	  <div class="form-group">
        <?php
        echo form_label('Sub-County EPI Logistician','subcounty_logistician');
        echo form_error('subcounty_logistician');
        echo form_input(['name' => 'subcounty_logistician', 'id' => 'subcounty_logistician',  'value' => $subcounty_logistician ,'class' => 'form-control', 'placeholder' => 'Enter Name of Sub-County EPI Logistician']);
        ?>
      </div>
	  
	  <div class="form-group">
        <?php
        echo form_label('Mobile Phone Number of EPI Logistician','subcounty_logistician_phone');
        echo form_error('subcounty_logistician_phone');
        echo form_input(['name' => 'subcounty_logistician_phone', 'id' => 'subcounty_logistician_phone',  'value' => $subcounty_logistician_phone ,'class' => 'form-control', 'placeholder' => 'Enter Phone Number of EPI Logistician']);
        ?>
      </div>
	  
	  <div class="form-group">
        <?php
        echo form_label('Email Address of EPI Logistician','subcounty_logistician_email');
        echo form_error('subcounty_logistician_email');
        echo form_input(['name' => 'subcounty_logistician_email', 'id' => 'subcounty_logistician_email',  'value' => $subcounty_logistician_email ,'class' => 'form-control', 'placeholder' => 'Enter Email Address of EPI Logistician']);
        ?>
      </div>
	  
	  
	  
	  <div class="form-group">
        <?php
        echo form_label('Sub-County Public Health Nurse','subcounty_nurse');
        echo form_error('subcounty_nurse');
        echo form_input(['name' => 'subcounty_nurse', 'id' => 'subcounty_nurse',  'value' => $subcounty_nurse ,'class' => 'form-control', 'placeholder' => 'Enter Name of Sub-County Public Health Nurse']);
        ?>
      </div>
	  
	  <div class="form-group">
        <?php
        echo form_label('Mobile Phone Number of Sub-County Public Health Nurse','subcounty_nurse_phone');
        echo form_error('subcounty_nurse_phone');
        echo form_input(['name' => 'subcounty_nurse_phone', 'id' => 'subcounty_nurse_phone',  'value' => $subcounty_nurse_phone ,'class' => 'form-control', 'placeholder' => 'Enter Mobile Phone Number of Sub-County Public Health Nurse']);
        ?>
      </div>
	  
	  <div class="form-group">
        <?php
        echo form_label('Email Address of Sub-County Public Health Nurse','subcounty_nurse_email');
        echo form_error('subcounty_nurse_email');
        echo form_input(['name' => 'subcounty_nurse_email', 'id' => 'subcounty_nurse_email',  'value' => $subcounty_nurse_email ,'class' => 'form-control', 'placeholder' => 'Enter Email Address of Sub-County Public Health Nurse']);
        ?>
      </div>
	  
	  <div class="form-group">
        <?php
        echo form_label('Name of Medical Engineering Technician','medical_technician');
        echo form_error('medical_technician');
        echo form_input(['name' => 'medical_technician', 'id' => 'medical_technician',  'value' => $medical_technician ,'class' => 'form-control', 'placeholder' => 'Enter Name of Medical Engineering Technician']);
        ?>
      </div>
	  
	  <div class="form-group">
        <?php
        echo form_label('Mobile Phone Number of Medical Engineering Technician','medical_technician_phone');
        echo form_error('medical_technician_phone');
        echo form_input(['name' => 'medical_technician_phone', 'id' => 'medical_technician_phone',  'value' => $medical_technician_phone ,'class' => 'form-control', 'placeholder' => 'Enter Mobile Phone Number of Medical Engineering Technician']);
        ?>
      </div>
	  
	  <div class="form-group">
        <?php
        echo form_label('Email Address of Medical Engineering Technician','medical_technician_email');
        echo form_error('medical_technician_email');
        echo form_input(['name' => 'medical_technician_email', 'id' => 'medical_technician_email',  'value' => $medical_technician_email ,'class' => 'form-control', 'placeholder' => 'Enter Email Address of Medical Engineering Technician']);
        ?>
      </div>
	  
	  
	  
	  <div class="form-group">
        <?php
        echo form_label('Name of Sub-County Medical Officer','subcounty_medicalofficer');
        echo form_error('subcounty_medicalofficer');
        echo form_input(['name' => 'subcounty_medicalofficer', 'id' => 'subcounty_medicalofficer',  'value' => $subcounty_medicalofficer ,'class' => 'form-control', 'placeholder' => 'Enter Name of Sub-County Medical Officer']);
        ?>
      </div>
	  
	  <div class="form-group">
        <?php
        echo form_label('Mobile Phone Number of Sub-County Medical Officer','subcounty_medicalofficer_phone');
        echo form_error('subcounty_medicalofficer_phone');
        echo form_input(['name' => 'subcounty_medicalofficer_phone', 'id' => 'subcounty_medicalofficer_phone',  'value' => $subcounty_medicalofficer_phone ,'class' => 'form-control', 'placeholder' => 'Enter Mobile Phone Number of Sub-County Medical Officer']);
        ?>
      </div>
	  
	  <div class="form-group">
        <?php
        echo form_label('Email Address of Sub-County Medical Officer','subcounty_medicalofficer');
        echo form_error('subcounty_medicalofficer_email');
        echo form_input(['name' => 'subcounty_medicalofficer_email', 'id' => 'subcounty_medicalofficer_email',  'value' => $subcounty_medicalofficer_email ,'class' => 'form-control', 'placeholder' => 'Enter Email Address of Sub-County Medical Officer']);
        ?>
      </div>
	  
      <div >
      <button class="btn btn-lg btn-danger btn-block" name="submit" type="submit">Create Sub County</button>
      </div>
      <?php 
      if (isset($update_id)){
          echo form_hidden('update_id', $update_id);
      }
      echo form_close();?>
    </div>
  </div>
