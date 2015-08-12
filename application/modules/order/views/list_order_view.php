<form id="list_orders_fm">
        <div>
            <ol class="breadcrumb">
              <li><a href="#">Vaccines</a></li><span class="divider">/</span>
              <li class="active"><a href="#"></a></li><span class="divider">/</span>
            </ol>
          </div>
         <div>
   <a href='<?php echo site_url('order/create_order');?>' class='btn btn-info state_change' id="create_order" value="Create Order">Create Order</a>
   <hr></hr> <hr></hr>

<!--Listing Placed Orders-->
      <div><h3>Placed Orders</h3></div>
      <hr></hr>

    <table class="table" id="list_orders_tbl">
        <thead>
                <tr><td>Order No</td><td>Order By </td><td>Date Created</td><td>Status</td><td>Action</td></tr>
        </thead>

        <tbody>

        <?php foreach ($orders as $order) { ?>
              <tr>
              <td><?php echo $order['order_id']?></td>
              <td><?php echo $order['order_by']?></td>
              <td><?php echo $order['date_created']?></td>
              <td style="color:red">Pending</td>
              <td><a href="<?php echo site_url('order/view_orders')?>">View</a><span class="divider"> | </span><a href="#">Receive</a></td>
        <?php }?>
              </tr>

        </tbody>
        </table>

<!--Listing Rejected Orders-->
      <hr></hr>
      <div><h3>Rejected Orders</h3></div>
      <hr></hr>

  <table class="table" id="list_rejected_orders_tbl">
        <thead>
          <tr><td>Order No</td><td>Order By </td><td>Date Rejected</td><td>Reasons</td><td>Action</td></tr>
        </thead>
        <tbody>
                <tr>
                <td></td>
                <td></td>
                <td></td>
                <td></td>
                <td><a href="#">Edit/Modify</a></td>
                </tr>
        </tbody>
  </table>
</form>