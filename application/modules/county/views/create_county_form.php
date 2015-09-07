<?php defined('BASEPATH') OR exit('No direct script access allowed');?>
  <div class="row">
    <div class="col-lg-4 col-lg-offset-4">
    <?php echo validation_errors('<div class="alert alert-danger alert-dismissable"><button type="button" class="close" data-dismiss="alert" aria-hidden="true">&times;</button><b>',' </b></div>');

      $array = array();
      $x=0;
      foreach($maregion as $row ){
          //$new_arr[$v[0]] = end($v); 
          //$array[] = end($row->county_name);
      //    $array = [
      //    $row-> => $row->county_name
      //];
         $array[$row->region_id] = $row->region_name;
        // $array[$row->region_id] = $row->id;

}
 
    ?>
      <h1>Add New County</h1>
      <?php echo form_open('county/submit',array('class'=>'form-horizontal'));?>
      <div class="form-group">
        <?php
        echo form_label('County Name','county_name');
        echo form_error('county_name');
        echo form_input(['name' => 'county_name', 'id' => 'county',  'value' => $county_name ,'class' => 'form-control', 'placeholder' => 'Enter County Name']);
        ?>
      </div>
      <div class="form-group">
        <?php
        echo form_label('County Headquarter','county_headquater');
        echo form_error('county_headquarter');
        echo form_input(['name' => 'county_headquarter', 'id' => 'county_headquarter',  'value' => $county_headquarter ,'class' => 'form-control', 'placeholder' => 'Enter County Headquarter']);
        ?>
      </div>
	  
      <div class="form-group">
        <?php
        echo form_label('Region','region_id');
        echo form_error('region_id');
        //echo form_input(['name' => 'region_id', 'id' => 'region_id',  'value' => $region_id ,'class' => 'form-control', 'placeholder' => 'Enter Region']);
        echo form_dropdown('region_id',$array , $region_id, 'id="region_id" class="form-control"'); 
        ?>
      </div>
	  
	  <div class="form-group">
        <?php
        echo form_label('DHIS ID','DHIS_ID');
        echo form_error('DHIS_ID');
        echo form_input(['name' => 'DHIS_ID', 'id' => 'DHIS_ID',  'value' => $DHIS_ID ,'class' => 'form-control', 'placeholder' => 'Enter DHIS ID']);
		?>
      </div>
	  
	  <div class="form-group">
        <?php
        echo form_label('County EPI Logistician','county_logistician');
        echo form_error('county_logistician');
        echo form_input(['name' => 'county_logistician', 'id' => 'county_logistician',  'value' => $county_logistician ,'class' => 'form-control', 'placeholder' => 'Enter Name of County EPI Logistician']);
        ?>
      </div>
	  
	  <div class="form-group">
        <?php
        echo form_label('Mobile Phone Number of EPI Logistician','county_logistician_phone');
        echo form_error('county_logistician_phone');
        echo form_input(['name' => 'county_logistician_phone', 'id' => 'county_logistician_phone',  'value' => $county_logistician_phone ,'class' => 'form-control', 'placeholder' => 'Enter Phone Number of EPI Logistician']);
        ?>
      </div>
	  
	  <div class="form-group">
        <?php
        echo form_label('Email Address of EPI Logistician','county_logistician_email');
        echo form_error('county_logistician_email');
        echo form_input(['name' => 'county_logistician_email', 'id' => 'county_logistician_email',  'value' => $county_logistician_email ,'class' => 'form-control', 'placeholder' => 'Enter Email Address of EPI Logistician']);
        ?>
      </div>
	  
	  
	  
	  <div class="form-group">
        <?php
        echo form_label('County Public Health Nurse','county_nurse');
        echo form_error('county_nurse');
        echo form_input(['name' => 'county_nurse', 'id' => 'county_nurse',  'value' => $county_nurse ,'class' => 'form-control', 'placeholder' => 'Enter Name of County Public Health Nurse']);
        ?>
      </div>
	  
	  <div class="form-group">
        <?php
        echo form_label('Mobile Phone Number of County Public Health Nurse','county_nurse_phone');
        echo form_error('county_nurse_phone');
        echo form_input(['name' => 'county_nurse_phone', 'id' => 'county_nurse_phone',  'value' => $county_nurse_phone ,'class' => 'form-control', 'placeholder' => 'Enter Mobile Phone Number of County Public Health Nurse']);
        ?>
      </div>
	  
	  <div class="form-group">
        <?php
        echo form_label('Email Address of County Public Health Nurse','county_nurse_email');
        echo form_error('county_nurse_email');
        echo form_input(['name' => 'county_nurse_email', 'id' => 'county_nurse_email',  'value' => $county_nurse_email ,'class' => 'form-control', 'placeholder' => 'Enter Email Address of County Public Health Nurse']);
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
        echo form_label('Name of County Medical Officer','county_medicalofficer');
        echo form_error('county_medicalofficer');
        echo form_input(['name' => 'county_medicalofficer', 'id' => 'county_medicalofficer',  'value' => $county_medicalofficer ,'class' => 'form-control', 'placeholder' => 'Enter Name of County Medical Officer']);
        ?>
      </div>
	  
	  <div class="form-group">
        <?php
        echo form_label('Mobile Phone Number of County Medical Officer','county_medicalofficer_phone');
        echo form_error('county_medicalofficer_phone');
        echo form_input(['name' => 'county_medicalofficer_phone', 'id' => 'county_medicalofficer_phone',  'value' => $county_medicalofficer_phone ,'class' => 'form-control', 'placeholder' => 'Enter Mobile Phone Number of County Medical Officer']);
        ?>
      </div>
	  
	  <div class="form-group">
        <?php
        echo form_label('Email Address of County Medical Officer','county_medicalofficer');
        echo form_error('county_medicalofficer_email');
        echo form_input(['name' => 'county_medicalofficer_email', 'id' => 'county_medicalofficer_email',  'value' => $county_medicalofficer_email ,'class' => 'form-control', 'placeholder' => 'Enter Email Address of County Medical Officer']);
        ?>
      </div>
	  
	  
      
      <button class="btn btn-lg btn-danger btn-block" name="submit" type="submit">Create County</button>
      <?php 
      if (isset($update_id)){
          echo form_hidden('update_id', $update_id);
      }
      echo form_close();?>
    </div>
  </div>
