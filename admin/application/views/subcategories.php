










<?php include('templates/header.php');?>

 
            <div class="content">
                <div class="container-fluid">
                   
                   
                 <div class="row">

  <div class="col-md-12">
                  
                     
                      
                      
                     
                    
                      <div class="template-demo">
                        <a href="<?php echo base_url()?>addsubcategory"><button type="button" class="btn btn-outline-danger btn-icon-text">
                          <i class="typcn typcn-upload btn-icon-prepend"></i>                                                    
                          Add New
                        </button></a>
                        
                      </div>
                      
                    
                  </div>


            <div class="col-md-12" style="margin-top:1%">
              <div class="card">
            <div class="table-responsive">
                
<p style="color:green"><?= $this->session->flashdata('success_msg');?></p>
              <p style="color:green"><?= $this->session->flashdata('Successs');?></p>

              <!-- Projects table -->
              <table class="table align-items-center table-flush">
                  <div id="order-listing_wrapper" class="dataTables_wrapper container-fluid dt-bootstrap4 no-footer">
                      <div class="row">
                          <div class="col-sm-12 col-md-6">
                              <div class="dataTables_length" id="order-listing_length">
                                  <div class="col-sm-12 col-md-6"><div id="order-listing_filter" class="dataTables_filter"><label></label></div></div></div>
                                  <div class="row">
                                      <div class="col-sm-12"><table id="order-listing" class="table dataTable no-footer" role="grid" aria-describedby="order-listing_info">
                    <thead>
                      <tr>
					  <th style="width:80px;"><strong>#</strong></th>
  										<th><strong>Name</strong></th>
                      <th><strong>Category</strong></th>
  										<th><strong>Status</strong></th>
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
<?= $val->name?>
                    </td>
                    <td>
   <?php                 $catp=$val->parentcategory;
$dname=$this->category->selectdp($catp);

foreach($dname as $ui){
  $mine=$ui->name;
}?>
<?= $mine?>
                    </td>
  										<td> <?php if($val->status=='Active'){?><span class="badge light badge-success"><?= $val->status?></span> <?php } else{?> <span class="badge light badge-danger"><?= $val->status?></span> <?php } ?></td>

                        <td>
                          <div class="d-flex align-items-center">
						  <a  href="<?php echo base_url();?>homecontroller/editsubcategory/<?= $val->id?>"> <button type="button" class="btn btn-primary btn-sm btn-icon-text mr-3">Edit <i class="typcn typcn-edit btn-icon-append"></i></button></a>
						
              <a href="<?php echo base_url();?>homecontroller/deletesubcategory/<?= $val->id?>" onclick="return confirm('Are you sure you want to delete?')">  <button type="button" class="btn btn-primary btn-sm btn-icon-text">Delete <i class="typcn typcn-delete-outline btn-icon-append"></i></button></a>    
                            
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
                   
                   
                   
                   
                   
                </div>
            </div>
       

<?php include('templates/footer.php');?>


