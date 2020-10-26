<style>
 .table td, .table th {
    padding: .75rem;
    vertical-align: top !important;
     border-top: 0px solid #dee2e6 !important; 
      border-bottom: 1px solid #dee2e6 !important; 
}
</style>

<?php

// print_r($fetchorders['data']);

$orderItem=$fetchorders['data'];

// echo '*********************************************************************************************';
//   print_r(json_encode($fetchorders));
// die;
?>

            <h5 class="title font-weight-bold space bg-light p-3">Order / Order Detail</h5>
            <?php
              if($this->session->flashdata('msg'))
              {
                echo '<div class="alert alert-info">'.$this->session->flashdata('msg').'</div>';
              }
            ?> 
            <div class="row mt-5">
                <table class="table text-center " width="100%">
                    <thead>
                        <tr>
                            <th class="font text-center">S.No</th>
                            <th class="font text-center">Order Id</th>
                            <th class="font text-center">Cart Details</th>
                             
                            <!-- <th class="font text-center">Status</th> -->
                            <th class="font text-center">Total Amount</th>
                            
                            
                            <th class="font text-center">Deivery Asssinged To</th>
                            <th class="font text-center">Payment</th>
                            <th class="font text-center">Order</th>
                        </tr>
                    </thead>
                    <tbody>
                      <?php $i=1?>
                    
                        <tr>
                          <td><?='Order Id'?></td>
                          <td>dd</td>
                          <td>
                            <?php
                            // print_r($assigned_to);
                            ?>
                            <table width="100%">
                              <?php foreach($orderItem as $item): ?>
                                <tr>
                                  <!-- <?php  print_r($item); ?> -->
                                  <td><?=$item['product_detail']->name?></td>
                                  <td><?=$item['qty'].' '.$item['product_detail']->quant_type?></td>
                                </tr>
                               
                              <?php endforeach; ?>
                            </table>
                          </td>
                          <td><strong> &#8377; </strong><?=$fetchorders['total_price']?> </td>
                          <td><?=ucwords($assigned_to->name)  ?></td>
                          <td><?='Payment Pending' ?></td>
                          <td><?=ucwords($assigned_to->order_status)  ?></td>
                         
                        </tr>
                    </tbody>             
                </table>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
</body>
</html>
 

    