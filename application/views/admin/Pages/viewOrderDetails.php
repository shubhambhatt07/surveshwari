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

$orderItem=$fetchorders[0];
$cartDetails=unserialize($orderItem['cart_details']);
$cartDetails=$cartDetails[0];
// echo '*********************************************************************************************';
//   print_r(json_encode($cartDetails));
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
                            
                            
                            <!-- <th class="font text-center">Deivery Asssinged To</th> -->
                            <th class="font text-center">Payment</th>
                            <!-- <th class="font text-center">Order</th> -->
                        </tr>
                    </thead>
                    <tbody>
                      <?php $i=0?>
                    
                        <tr>
                          <td><?=$i+1?></td>
                          <td><?=$orderItem['order_id']?></td>
                          <td>
                            <?php
                            // print_r($orderItem['product_Detail']);
                            ?>
                            <!-- die; -->
                            <table width="100%">
                              <?php foreach($orderItem['product_Detail'] as $item): ?>
                                <tr>
                                  <!-- <?php  print_r($cartDetails); ?>  -->
                                  <td><?=$item['name']?></td>
                                  <td><?=$cartDetails['quantity'][$i].' '.$item['quant_type']?></td> 
                                </tr>
                               <?php $i++?>
                              <?php endforeach; ?>
                            </table>
                          </td>
                          <td><strong> &#8377; </strong><?=$cartDetails['order_amount']?> </td>
                        
                          <td><?='Payment Pending' ?></td>
                          
                         
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
 

    