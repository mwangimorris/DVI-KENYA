
<table class="table" id="inventory">
        <thead>
                
              <th style="width:20%;" class="small">Vaccine/Diluents</th>
              <th style="width:20%;" class="small">Vaccine Formulation</th>
              <th style="width:20%;" class="small">Mode Of Administration</th>
              <th style="width:20%;" class="small">Action</th>
        </thead>

        <tbody>

             <?php foreach ($vaccines as $vaccine) { ?>
              <tr>
             
              <td><?php echo $vaccine['Vaccine_name']?></td>
              <td><?php echo $vaccine['Vaccine_formulation']?></td>
              <td><?php echo $vaccine['Mode_administration']?></td> 
              <td><a id= "v_ledger" class="small v_ledger" href="<?php echo site_url('stock/vaccine_ledger')?>">view vaccine ledger</a></td>
              
              </tr>
               <?php }?>

        </tbody>
        </table>


        <script type="text/javascript">

            $(".v_ledger").click(function(e){
              var _url="<?php echo base_url();?>stock/";
            
                      var request=$.ajax({
                         url: _url,
                         type: 'post',
                         data: {"selected_batch":selected_batch},

                        });
                        request.done(function(data){
                          data=JSON.parse(data);
                          console.log(data);
                          
                          $.each(data,function(key,value){
                            
                          });
                        });
                        request.fail(function(jqXHR, textStatus) {
                        
                      });
            });
        </script>