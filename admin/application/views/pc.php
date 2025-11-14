<?php include('templates/header.php')?>












<div class="container-fluid py-4">
  <div class="row min-vh-80">
    <div class="col-12">
      <div class="card h-100">
        <div class="card-header p-0 position-relative mt-n4 mx-3 z-index-2">
          <div class="bg-gradient-primary shadow-primary border-radius-lg pt-4 pb-3">
            <h5 class="text-white text-capitalize ps-3">Menu Categories</h5>
          </div>
        </div>
        <div class="card-body">
          






        <div class="row">
      <div class="col-md-12" >
              
                 
                  
                  
                 
                
              <div class="template-demo">
                <a href="<?php echo base_url()?>addpc"><button type="button" class="btn btn-outline-danger btn-icon-text">
                  <i class="typcn typcn-upload btn-icon-prepend"></i>                                                    
                  Add New
                </button></a>
                
              </div>
              
            
          </div>


        <div class="col-12" style="margin-top:2%">
        



          <div class="card">
            <div class="card-body">
              <div class="table-responsive">
                <table
                  id="zero_config"
                  class="table table-striped table-bordered"
                >
                  <thead>
                    <tr>
                      <th>#</th>
                      <th>Name</th>
                     
                      <th>Action</th>
                    </tr>
                  </thead>
                  <tbody>
                  <?php
               $i=1;
                         foreach($listcategory as $val){?>
                  <tr>
                  <td><strong><?= $i?></strong></td>
                                      <td><?= $val->name?></td>
      

                    <td>
                      <div class="d-flex align-items-center">
                      <a  href="<?php echo base_url();?>homecontroller/editpc/<?= $val->id?>"> <button type="button" class="btn btn-primary btn-sm btn-icon-text mr-3">Edit <i class="typcn typcn-edit btn-icon-append"></i></button></a>
                        <a style="padding-left:5%" href="<?php echo base_url();?>homecontroller/deletepc/<?= $val->id?>" onclick="return confirm('Are you sure you want to delete?')">   <button type="button" class="btn btn-primary btn-sm btn-icon-text">Delete <i class="typcn typcn-delete-outline btn-icon-append"></i></button></a>    
        
        </div>
                    </td>
                  </tr>
                 
                  <?php $i++; } ?>
                   
                  </tbody>
                  
                </table>
              </div>
            </div>
          </div>
        </div>
      </div>



        </div>
      </div>
    </div>
  </div>
 
<?php include('templates/footer.php');?>
