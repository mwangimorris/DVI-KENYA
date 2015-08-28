<?php defined('BASEPATH') OR exit('No direct script access allowed');?>
  <div class="row">
    <div class="col-lg-12">
      <a href="<?php echo site_url('county/create');?>" class="btn btn-primary">Add County</a>
    </div>
  </div>
  <div class="row">
  </br>
  </br>
  <?php echo $this->session->flashdata('msg');  ?>
    <div class="col-lg-12" style="margin-top: 10px;">
     <div class="table-responsive">
  <table class="table table-bordered table-hover table-striped">
                                <thead>
                                    <tr>
                                        <th>County Name</th>
                                        <th>County Headquarter</th>
										<th>Region</th>
										<th>DHIS ID</th>
										<th>County EPI Logistician</th>
										<th>Mobile Number</th>
										<th>Email Address</th>
										<th>County Public Health Nurse</th>
										<th>Mobile Phone Number</th>
										<th>Email Address</th>
										<th>Medical Engineering Technician</th>
										<th>Mobile Phone Number</th>
										<th>Email Address</th>
										<th>County Medical Officer</th>
										<th>Mobile Phone Number</th>
										<th>Email Address</th>
                                        <td align="center"><b>Edit</b></td>
                                        <td align="center"><b>Delete</b></td>
                                    </tr>
                                </thead>
                                <tbody>
                                    <?php
                                    foreach ($records->result() as $row){
                                        $edit_url = base_url().'county/create/'.$row->id;
                                        $delete_url = base_url().'county/delete/'.$row->id;
                                      ?>
                                    <tr>
                                        <td><?php echo $row->county_name ?></td>
                                        <td><?php echo $row->county_headquarter ?></td>
										<td><?php echo $row->region_id ?></td>
										<td><?php echo $row->DHIS_ID ?></td>
										<td><?php echo $row->county_logistician ?></td>
										<td><?php echo $row->county_logistician_phone ?></td>
										<td><?php echo $row->county_logistician_email ?></td>
										<td><?php echo $row->county_nurse ?></td>
										<td><?php echo $row->county_nurse_phone ?></td>
										<td><?php echo $row->county_nurse_email ?></td>
										<td><?php echo $row->medical_technician ?></td>
										<td><?php echo $row->medical_technician_phone ?></td>
										<td><?php echo $row->medical_technician_email ?></td>
										<td><?php echo $row->county_medicalofficer ?></td>
										<td><?php echo $row->county_medicalofficer_phone ?></td>
										<td><?php echo $row->county_medicalofficer_email ?></td>
										<td align="center"><a href="<?php echo $edit_url ?>"><i class="fa fa-edit"></i></a></td>
                                        <td align="center"><a href="<?php echo $delete_url ?>"><i class="fa fa-trash-o"></i></td>
                                       
                                    </tr>
                                    <?php } ?>
                                </tbody>
                            </table>
                    <hr>
                    </br>
                    
                    <?php 

                    //echo $this->table->generate($records);
                    echo $this->pagination->create_links(); ?>
                    
                    
                    
                
                        </div>

  <script type="text/javascript">
window.setTimeout(function() {
    $("#alert-message").fadeTo(500, 0).slideUp(500, function(){
        $(this).remove(); 
    });
}, 5000);

</script>
