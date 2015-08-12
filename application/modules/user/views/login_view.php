<div class="panel-heading border login_heading">sign in now</div>	
      <?php 
      
if($this->session->flashdata('message'))
{
?>
    <div class="alert alert-danger alert-dismissible" role="alert">
      <button type="button" class="close" data-dismiss="alert" aria-label="Close"><span
aria-hidden="true">&times;</span></button>
      <?php echo $this->session->flashdata('message');?>
    </div>
<?php
}
?>
      
    <?php echo form_open('',array('class'=>'form-horizontal'));?>
      <div class="form-group">
        <?php echo form_label('Username','identity');?>
        <?php echo form_error('identity');?>
        <?php echo form_input('identity','','class="form-control"');?>
      </div>
      <div class="form-group">
        <?php echo form_label('Password','password');?>
        <?php echo form_error('password');?>
        <?php echo form_password('password','','class="form-control"');?>
      </div>
      <div class="form-group">
        <label>
          <?php echo form_checkbox('remember','1',FALSE);?> Remember me
        </label>
      </div>
      <?php echo form_submit('submit', 'Log in', 'class="btn btn-primary btn-lg btn-block"');?>
    <?php echo form_close();?>
