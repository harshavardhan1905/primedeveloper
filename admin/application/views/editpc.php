






<?php include('templates/header.php')?>












<div class="container-fluid py-4">
  <div class="row min-vh-80">
    <div class="col-12">
      <div class="card h-100">
        <div class="card-header p-0 position-relative mt-n4 mx-3 z-index-2">
          <div class="bg-gradient-primary shadow-primary border-radius-lg pt-4 pb-3">
            <h5 class="text-white text-capitalize ps-3">Edit Menu Category</h5>
          </div>
        </div>
        <div class="card-body">
          





        <div class="row">
          <p style="color:green"><?= $this->session->flashdata('Success');?></p>
            <div class="col-md-6">
              <div class="card">
                <form class="form-horizontal" method="post">
                  <div class="card-body">


  <?php

            foreach($vals as $val){?>


                    <div class="form-group row">
                      
                      <div class="col-sm-9">
                        <input
                          type="text"
                          class="form-control"
                          id="fname" name="name"
                          placeholder="Name" value="<?= $val->name?>"
                        />
                      </div>
                    </div>

                 

                   
                 
                  <?php } ?> 
                    
                  <div class="border-top">
                    <div class="card-body">
                      <input  type="submit" name="editcategory" value="Save" class="btn btn-primary">
                        
                    </div>
                  </div>
                </form>
              </div>
             
             
            </div>







          </div>


        </div>
      </div>
    </div>
  </div>
 
<?php include('templates/footer.php');?>










