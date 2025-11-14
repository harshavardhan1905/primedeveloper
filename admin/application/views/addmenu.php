
<?php include('templates/header.php')?>



<div class="container-fluid py-4">
  <div class="row min-vh-80">
    <div class="col-12">
      <div class="card h-100">
        <div class="card-header p-0 position-relative mt-n4 mx-3 z-index-2">
          <div class="bg-gradient-primary shadow-primary border-radius-lg pt-4 pb-3">
            <h5 class="text-white text-capitalize ps-3">Add Menu Item</h5>
          </div>
        </div>
        <div class="card-body">
          






        <p style="color:green"><?= $this->session->flashdata('Successs');?></p>
        <div class="row">
          <div style="color:red;text-align:center"><?php echo validation_errors(); ?></div>
              <p style="color:green"><?= $this->session->flashdata('success_msg');?></p>
            <div class="col-md-12">
           
                <form class="text-start" method="post" enctype="multipart/form-data">
                 
               
                    <div class="row">
                   
                    
                      <div class="col-sm-4">

                      <div class="input-group input-group-outline my-3">
                    <label class="form-label">Item Name</label>
                    <input
                          type="text"
                          class="form-control"
                          id="fname" name="productname"
                         
                        />
                  </div>
                        
                      </div>
                 


               
                 
                      <div class="col-sm-4">
                      <div class="input-group input-group-outline my-3">
                    <label class="form-label">Price</label>
                    <input type="text" name="mrp"  class="form-control" id="mrp" >
                  </div>
                    
                      </div>
                   


                      <div class="col-sm-4">
                      <div class="input-group input-group-outline my-3">
                    <label class="form-label"></label>
                    <select id="country" class="form-control" name="pc" aria-label="Default select example">
                                <option value="">Select Category</option>


                <?php

                         foreach($listpc as $vap){
              echo '<option value="'.$vap->id.'">'.$vap->name.'</option>';
              }?>

              </select>
                  </div>
                     
                      </div>
                  
                 
                      <div class="col-sm-4">
                      <div class="input-group input-group-outline my-3">
                    <label class="form-label">Locations</label>
                   

<div class="row" style="margin-top:10%;">
                <?php

                         foreach($listcategory as $vald){?>
          <div style="display:flex">
           <div class="form-check form-check-info text-start ps-0">
              <input type="checkbox" class="form-check-input"  name="category[]"  value="<?=$vald->id?>" >
                         </div>  
              <label style="font-weight:normal"><?=$vald->name?></label>
                         </div>
              <?php }?>
                         </div>
              




                  </div>
                     
                      </div>
                  

                 
                    
                      <div class="col-sm-4">
                      <div class="input-group input-group-outline my-3">
                    <label class="form-label">Description</label>
                    <textarea name="description" class="form-control" id="exampleFormControlTextarea1"   rows="3" required></textarea>
                  </div>
                     
                      </div>
                

                    

                 

                  
                   
                      <div class="col-sm-4">
                      <div class="input-group input-group-outline my-3">
                    <label class="form-label"></label>
                    <input type="file" accept="image/png, image/gif, image/jpeg" id="myfile" class="form-control" name="pimage[]"  required>
                  </div>
                      
                      </div>
                   

                    
            </div>
                 
                   
                    
                  <div class="border-top">
                    <div class="card-body">
                      <input  type="submit" name="addproduct" value="Save" class="btn btn-primary">
                        
                    </div>
                  </div>
                </form>
          
             
             
            </div>







          </div>

        </div>
      </div>
    </div>
  </div>
 
<?php include('templates/footer.php');?>

