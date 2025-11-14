


<?php include('templates/header.php')?>












<div class="container-fluid py-4">
  <div class="row min-vh-80">
    <div class="col-12">
      <div class="card h-100">
        <div class="card-header p-0 position-relative mt-n4 mx-3 z-index-2">
          <div class="bg-gradient-primary shadow-primary border-radius-lg pt-4 pb-3">
            <h5 class="text-white text-capitalize ps-3">Menu</h5>
          </div>
        </div>
        <div class="card-body">
          






        <p style="color:green"><?= $this->session->flashdata('Successs');?></p>
  <div class="row">

  <div class="col-md-12">
                  
                     
                      
                      
                     
                    
                      <div class="template-demo">
                        <a href="<?php echo base_url()?>addmenu"><button type="button" class="btn btn-outline-danger btn-icon-text">
                          <i class="typcn typcn-upload btn-icon-prepend"></i>                                                    
                          Add New
                        </button></a>
                        
                      </div>
                      
                    
                  </div>


            <div class="col-md-12" style="margin-top:1%">
              <div class="card">
                <div class="table-responsive pt-3">
                  <table class="table table-striped project-orders-table">
                    <thead>
                      <tr>
					  <th style="width:80px;"><strong>#</strong></th>
  										<th><strong>Name</strong></th>
                      <th><strong>Category</strong></th>
  							
                        <th>Actions</th>
                      </tr>
                    </thead>
                    <tbody>
					<?php
                   $i=1;
                             foreach($listcategory as $val){?>
                      <tr>
					  <td><strong><?= $i?></strong></td>
            <td>
<?= $val->productname?>
                    </td>
                    <td>
   <?php                 $catp=$val->pc;
$dname=$this->category->selectdp($catp);

foreach($dname as $ui){
  $mine=$ui->name;
}?>
<?= $mine?>
                    </td>
  									
                        <td>
                          <div class="d-flex align-items-center">
						  <a  href="<?php echo base_url();?>homecontroller/editmenu/<?= $val->id?>"> <button type="button" class="btn btn-primary btn-sm btn-icon-text mr-3">Edit <i class="typcn typcn-edit btn-icon-append"></i></button></a>
							<a href="<?php echo base_url();?>homecontroller/deletemenu/<?= $val->id?>" onclick="return confirm('Are you sure you want to delete?')" style="padding-left:5%">  <button type="button" class="btn btn-primary btn-sm btn-icon-text" >Delete <i class="typcn typcn-delete-outline btn-icon-append"></i></button></a>    
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
 
<?php include('templates/footer.php');?>

