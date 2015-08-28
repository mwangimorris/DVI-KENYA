<?php defined('BASEPATH') OR exit('No direct script access allowed');?>
  <div class="row">
    <div class="col-lg-4 col-lg-offset-4">
    <?php //echo validation_errors('<div class="alert alert-danger alert-dismissable"><button type="button" class="close" data-dismiss="alert" aria-hidden="true">&times;</button><b>',' </b></div>');?>
      <h1>Add New Depot</h1>
	  <?php 
	$level_array = array(
  "National" => "National",
	"Regional" => "Regional",
	"County"	 => "County",
	"Subcounty"	=> "Subcounty"
	); 
	$region_array = array();
	foreach($region as $row ){
		$region_array[$row->id] = $row->region_name;
	}
	$county_array = array();
	foreach($county as $row ){
		$county_array[$row->id] = $row->county_name;
	}	
	$subcounty_array = array();
	foreach($subcounty as $row ){
		$subcounty_array[$row->id] = $row->subcounty_name;
	}
  $array = array(
    'Yes' => 'Yes',
    'No' => 'No'
  );
	?>
      <?php echo form_open('depot/submit',array('class'=>'form-horizontal'));?>
      <div class="form-group">
        <?php
        echo form_label('Depot Name','depot_name');
        echo form_error('depot_name');
        echo form_input(['name' => 'depot_name', 'id' => 'depot_name',  'value' => $depot_name ,'class' => 'form-control', 'placeholder' => 'Enter Depot Name']);
        ?>
      </div>

     <div class="form-group">
        <?php
        echo form_label('Depot Level','depot_level');
        echo form_error('depot_level');
        echo form_dropdown('depot_level',$level_array , 'National', 'id="depot_level" class="form-control"'); 
        ?>
      </div>

      <div class="form-group">
        <?php
        echo form_label('Region','region_id');
        echo form_error('region_id');
		    echo form_dropdown('region_id',$region_array , $region_id, 'id="region_id" class="form-control"'); 
        ?>
      </div>
  	  <div class="form-group">
          <?php
          echo form_label('County','county_id');
          echo form_error('county_id');
  		    echo form_dropdown('county_id',$county_array , $county_id, 'id="county_id" class="form-control"'); 
          ?>
        </div>
       <div class="form-group">
          <?php
          echo form_label('Sub-county','subcounty_id');
          echo form_error('subcounty_id');
          echo form_dropdown('subcounty_id',$subcounty_array , $subcounty_id, 'id="subcounty_id" class="form-control"'); 
          ?>
        </div>
        <div class="form-group">
          <?php
          echo form_label('Name of Officer In-charge','officer_incharge');
          echo form_error('officer_incharge');
          echo form_input(['name' => 'officer_incharge', 'id' => 'officer_incharge',  'value' => $officer_incharge, 'class'=> 'form-control', 'placeholder' => 'Enter Name of Officer In-charge']);
          ?>
          </div>

          <div class="form-group">
          <?php
          echo form_label('Email Address','email');
          echo form_error('email');
          echo form_input(['name' => 'email', 'id' => 'email',  'value' => $email, 'class'=> 'form-control', 'placeholder' => 'Enter Email Address']);
          ?>
          </div>

          <div class="form-group">
          <?php
          echo form_label('Phone Number','phone');
          echo form_error('phone');
          echo form_input(['name' => 'phone', 'id' => 'phone',  'value' => $phone, 'class'=> 'form-control', 'placeholder' => 'Enter Mobile Phone Number']);
          ?>
          </div>
      <div class="form-group">
          <?php
          echo form_label('Electrification Status','elec_status');
          echo form_error('elec_status');
          echo form_dropdown('elec_status',$array, 'Yes', 'id="elec_status" class="form-control"');
          ?>
          </div>  
     
      <div class="col-lg-6 col-lg-offset-4">
      <button class="btn btn-lg btn-danger btn-block" name="submit" type="submit">Create Depot</button>
      </div>
      <?php 
      if (isset($update_id)){
          echo form_hidden('update_id', $update_id);
      }
      echo form_close();?>
    </div>
  </div>
