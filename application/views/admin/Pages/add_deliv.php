
            <h5 class="title font-weight-bold space bg-light p-3">User / Add Delivery Boy</h5>
           
<!-- 
            `user`(`id`, `name`, `type_`, `email`, `user_image`, `password`, `phone`, `address`, `reffral_from`, `reffral`, `wallet`, `shipping_address`, `gender`, `verified`) -->
            <form id="addDeliv">
                <div class="row mt-5">
                    <div class="col-md-3">
                        <label for="email">Full Name :</label>
                        <input class="form-control "type="text" name="name" required  autocomplete="false" placeholder="Enter Name">
                    </div>
                    <div class="col-md-3">
                        <label for="email">Email :</label>
                        <input class="form-control "type="email" name="email" autocomplete="false" required placeholder="Enter Email">
                    </div>
                    <div class="col-md-3">
                        <label for="email">password:</label>
                         <input class="form-control "type="password" name="password" autocomplete="false" required placeholder="*************">
                    </div>

                    <div class="col-md-3">
                        <label for="email">User Type:</label>
                       <div class="row d-flex">
                          <select  class=" order-alpha input-style form-control " autocomplete="false" required name="type_" >
                            
                           <option value="2" selected>Delivery Boy</option>
                            
                    
                              
                         </select>
                          
                       </div>
                    </div>
                    
                </div>
                <div class="row mt-1">
                    <div class="col-md-3">
                        <label for="email">Phone</label>
                         <input class="form-control "type="text" required autocomplete="false" name="phone" placeholder="Enter Mobile No.">
                    </div>
                    <div class="col-md-9">
                        <label>Address </label>
                        <input class="form-control "type="text" required autocomplete="false" name="address" placeholder="Enter Address">
                    </div>
                  
                </div>

        
                <div class="row mt-1">
                    <div class="col-md-1 col-3">
                    <img src="<?php echo base_url("/assets/images/c.png");?>" width="50px">
                    </div>
                    <div class="col-md-11 mt-4 col-9">
                    <input type="file"  name="files" required >
                    </div>   
                </div>
                <div class="row mt-5">
                    <div class="col-md-3">
                       <button type="submit"  class="w-75 rounded-pill border-0 p-2 text-white font-weight-bold butn-style">Add</button>
                    </div>
                </div>
                <div class="row mt-5">
                     <p class="bg-light p-3 w-100 text-center mt-3">© Copyright 2020 DoonSoftwares All Rights Reserved</p>
                </div>
            </form>
          </div>
        </div>
      </div>
    </div>
  </div>
</body>
</html>


      <script type="text/javascript"> 
$(document).on('submit','#addDeliv',function(e){
     e.preventDefault();
     var formData= new FormData($(this)[0]);
     $.ajax({
        url:"<?=base_url('Admin/addDelivery')?>",
         type:"post",
         catche:false,
         contentType:false,
         processData:false,
         data:formData,
         success:function(response)
        {
             var obj=JSON.parse(response);
             console.log(obj.status);
             if(obj.status==0)
             {
                swal("Category!", "Try Error", "error")
             }
             if(obj.status==1)
             {
              swal("Great!", "Added", "success")
             }
             if(obj.status==2)
             {
             swal("Category!", "Already Exist", "error")
             }
             $('#addDeliv')[0].reset();
             // window.location.href='<?=base_url("Category/CategorySection")?>';
        }
     });
});
</script>
