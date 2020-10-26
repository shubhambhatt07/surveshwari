<style>
 .table td, .table th {
    padding: .75rem;
    vertical-align: top !important;
     border-top: 0px solid #dee2e6 !important; 
      border-bottom: 1px solid #dee2e6 !important; 
}
</style>

            <h5 class="title font-weight-bold space bg-light p-3">Products / View Products</h5>
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
                            <th class="font text-center">SNo</th>
                            <th class="font text-center">Ordered By</th>
                            <th class="font text-center">Order Details</th>
                             
                            <th class="font text-center">Delivery Status</th>
                            <th class="font text-center">Delivery Boy</th>
                            <th class="font text-center">Total Amount</th>
                            
                            
                            <th class="font text-center">Payment Status</th>
                            <th class="font text-center">Action</th>
                        </tr>
                    </thead>
                    <tbody >
            <?php
              $i=1;
              
              foreach($fetchorders as $row)
              {
                $deliveryDetails=unserialize($row['deli_add']);
                $cartDet=unserialize($row['cart_details']);
                // print_r($deliveryDetails);
                           
                ?>
                  <tr>
                    <td><?=$i?></td>
                    <td><?=$deliveryDetails['fullname']?></td>
                    <td><a href="<?=base_url('Admin/viewOrderDetails/').$row['order_id']?>">View Order</a>
                      <?php
                        $product_Detail=$row['product_Detail'];
                        // print_r($product_Detail);
                        // foreach ($product_Detail as $item) {

                        // }
                      ?>

                    <td>
                      <select class="form-control">
                        <option>Packed</option>
                         <option selected=""><?=$row['order_status']?></option>
                      </select>
                     </td>
                      <td>
                        <a href="javascript:void(0)"class="assign" order_id="<?=$row['order_id']?>">Assign</a>
                      </td>
                    <td><strong>&#8377;</strong> <?=$cartDet[0]['order_amount']?></td>
                    
                    <td><a href="javascript:void(0)" product_id="" class="w-100 rounded-pill border-0 p-2 text-white font-weight-bold butn-style1 deleteproduct"><?=$row['amount_status']?></a></td>
                    <td><a href=""  class="w-100 rounded-pill border-0 p-2 text-white font-weight-bold butn-style building">Reject</a></td>
                  </tr>
                <?php
             
              $i++;
              }
             ?>      
              </tbody>              
                </table>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
  <div class="modal fade" id="assignDelivery" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog" role="document">
      <div class="modal-content">
        <div class="modal-header">
          <h5 class="modal-title" id="exampleModalLabel">Assign Order</h5>
          <button type="button" class="close" data-dismiss="modal" aria-label="Close">
            <span aria-hidden="true">&times;</span>
          </button>
        </div>
        <div class="modal-body">
          <form id="assignOrder">
            <label>Order Id:</label>
            <input type="text" name="order_id" id="order_id" class="form-control">
            <label>Select Delivery Boy</label>
            <select class="form-control" name="delive_id">
              <option>Select</option>
              <?php
                foreach ($delBoy as $key => $value) {
                  echo '<option value="'.$value->id.'">'.$value->name.'</option>';
                }
              ?>
            </select>
            <hr>
            <input type="submit" value="Assign" class="btn btn-success">
          </form>
        </div>
        <div class="modal-footer">
          <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
          <!-- <button type="button" class="btn btn-primary">Save changes</button> -->
        </div>
      </div>
    </div>
  </div>
</body>
</html>
 
      <script type="text/javascript">
        $(document).ready(function(){
          $('#assignOrder').on('submit',function(e){
            e.preventDefault();
            var formData= new FormData($(this)[0]);
            $.ajax({
              url:"<?=base_url('Admin/assignDel')?>",
              type:"post",
              cache:false,
              contentType:false,
              processData:false,
              data:formData,
              success:function(response){
                var obj=JSON.parse(response);
                 console.log(obj.code);
                 if(obj.code==0)
                 {
                    swal("Delivery!", "Try Error", "error")
                 }
                 if(obj.code==1)
                 {
                  swal("Delivery!", "Delivery Assigned", "success")
                 }
                 if(obj.code==2)
                 {
                 swal("Delivery!", "Already Exist", "error")
                 }
              }
            });
          });
          $('.assign').on('click',function(){
            $('#assignDelivery').modal('show');
            var order_id=$(this).attr('order_id');
            console.log("Order Id : "+order_id);
            $('#order_id').val(order_id);
          });


          $('.deleteproduct').on('click',function(){ 
             var product_id=$(this).attr("product_id");
             // alert(owner_id);
           if(confirm("Are you Sure want to delete?") ==true)
            {       
            // alert(owner_id);         
                $.ajax({
                  url:"<?=base_url('Products/DeleteProducts')?>",
                  type:"post",
                  data:{product_id:product_id},
                  success:function(response)
                  {   
                  response=JSON.parse(response);             
                     if (response==1)
                      {
                   swal('Product!','Deleted','success');
                    location.reload();
                    
                       }
                  }
                 })                           
             // userPreference = "Data Delete successfully!";

             }
             else 
             {
              userPreference = "Save Canceled!";
              }
              
          })
        })  
      </script>
    