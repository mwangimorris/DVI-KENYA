<?php
$form_attributes = array('id' => 'vaccine_ledger');
echo form_open('',$form_attributes);?>
<table>
<p class="bg-info"> Vaccine Ledger</p>
	<thead>
	     <th style="width:50%;" class="small" align="center">Vaccine/Diluent</th>
	</thead>
	<tbody>
		 <td> <select name="vaccine" class="vaccine" id="vaccine">
                 <option value="">--Select One--</option>
                 <?php foreach ($vaccines as $vaccine) { 
                     echo "<option value='".$vaccine['ID']."'>".$vaccine['Vaccine_name']."</option>";
                     }?>
                </select></td>
	</tbody>
 </table>
							

<table class="table">

<hr></hr><hr></hr>
	<thead>
		<th style="width:12%;" class="small">Vaccines/Diluents (Origin/Destination)</th>
							<th style="width:12%;" class="small">Count</th>
							<th style="width:12%;" class="small">Received</th>
							<th style="width:12%;" class="small">Issued</th>
							<th style="width:12%;" class="small">Store Balance</th>
							<th style="width:12%;" class="small">Voucher Number</th>
							<th style="width:12%" class="small">Batch Number</th>
							<th style="width:12%" class="small">Expiry Date</th>
							<th style="width:10%" class="small">VVM Status</th>
	</thead>
	<tbody>
		<tr align="center">
				
             	    <td><?php $data=array('name' => 'vaccine','id'=> 'vaccine','class'=>'col-xs-11 vaccine'); echo form_input($data);?></td>
             		<td><?php $data=array('name' => 'count','id'=>'count','class'=>'col-xs-9 count'); echo form_input($data);?></td>
             		<td><?php $data=array('name' => 'received','id'=> 'received','class'=>'col-xs-11 received'); echo form_input($data);?></td>
             		<td><?php $data=array('name' => 'issued','id'=> 'issued','class'=>'col-xs-10 issued'); echo form_input($data);?></td>
             		<td><?php $data=array('name' => 'store_bal','id'=> 'store_bal','class'=>'col-xs-9 store_bal'); echo form_input($data);?></td>
             		<td><?php $data=array('name' => 'voucher_number','id'=> 'voucher_number','class'=>'col-xs-8 voucher_number'); echo form_input($data);?></td>
             		<td><?php $data=array('name' => 'batch_number','id'=> 'batch_number','class'=>'col-xs-7 batch_number'); echo form_input($data);?></td>
             		<td><?php $data=array('name' => 'expiry_date','id'=> 'expiry_date','class'=>'col-xs-9 expiry_date'); echo form_input($data);?></td>
             		<td><?php $data=array('name' => 'vvm_status','id'=> 'vvm_status','class'=>'col-xs-8 vvm_status'); echo form_input($data);?></td>
             		
			</tr>
	</tbody>
</table>

<?php echo form_close();?>