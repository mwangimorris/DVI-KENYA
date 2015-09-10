<?php defined('BASEPATH') OR exit('No direct script access allowed');?>
  <div class="panel-heading border login_heading">SIGN IN</div> 
       <?php 
      echo validation_errors('<div class="alert alert-danger alert-dismissable"><button type="button" class="close" data-dismiss="alert" aria-hidden="true">&times;</button><b>',' </b></div>');?>     
       <?php echo form_open('users/submit');?>
         <div class="form-group">
              <?php
              echo form_label('Enter User Name','username');
              echo form_error('username');
              echo form_input(['name' => 'username', 'id' => 'username', 'class' => 'form-control', 'placeholder' => 'Enter Username Name']);
              ?>
          </div>
    <div class="form-group">
              <?php
              echo form_label('Enter Password','password');
              echo form_error('modulename_name');
              echo form_password(['name' => 'password', 'id' => 'password', 'class' => 'form-control', 'placeholder' => 'Enter Password']);
              ?>
    </div>
      
      <button class="btn btn-lg btn-danger btn-block" name="submit" type="submit">LOGIN</button>
    <?php echo form_close();?>
