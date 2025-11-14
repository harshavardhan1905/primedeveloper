







<?php include('templates/header.php');?>
 


 <div class="text-white h-48 sub-header" style="background-color:rgb(0 155 222)">
                <div class="w-full p-8">
                    <div class="row">
                        <div class="px-4 col-md-12">
                            <div class="flex flex-wrap items-center justify-between">
                                <div>
                                    <h1 class="text-white mb-2 mr-16">Edit Project Details</h1>
                                
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="absolute top-0 h-80 img-height overflow-hidden" style="z-index: -1;">
                    <img src="../../assets/images/dashboard/top-header.png" alt="header"
                        class="animated-scaleX object-cover w-screen h-full rounded-2xl">
                </div>
            </div>            <!-- Nav Header Component End -->
        <!--Nav End-->
    </div>
    <div class="p-6 lg:p-8 footer-inner  mx-auto main-container  lg:py-0 py-0 " x-bind:class="setting.page_layout" style="margin-top:2%">
<div class="flex flex-wrap contet-inner" style="background: white;padding: 20px;">
    <div class="flex-auto w-full">
        
        
        
        
        
        <div class="row">
      <div class="col-lg-12">
        <div class="card">
          <div class="card-header">
          </div>
          <div class="card-body">
            <div >
            <div style="color:red;text-align:center"><?php echo validation_errors(); ?></div>
              <p style="color:green"><?= $this->session->flashdata('success_msg');?></p>
              
              <?php

                       foreach($vals as $val){?>
                          <form action="" method="post" enctype="multipart/form-data" id="myform">
                            
        <div class="grid lg:grid-cols-2 md:grid-cols-2 lg:gap-8 md:gap-8">
                    <div class="w-full">
                        
                            <div class="mb-4">
                                <label class="inline-block mb-2 text-secondary-600 dark:text-white">Project Name:
                                    *</label>
                             <input type="text" style="background-color:gainsboro" value="<?php echo $val->name?>"  class="w-full px-4 py-2 placeholder-secondary-400 border dark:bg-dark-card dark:border-secondary-800 rounded outline-none focus:border-primary-500 dark:focus:border-primary-500 focus:shadow" name="name" aria-label="Default select example" readonly>
                       
                            </div>
                        
                    </div>
                </div>
                
                <div class="grid lg:grid-cols-3 md:grid-cols-3 lg:gap-8 md:gap-8">
                    <div class="w-full">
                        
                            <div class="mb-4">
                                <label class="inline-block mb-2 text-secondary-600 dark:text-white ">Flyer:
                                    </label>
              <div style="display:flex">
                  <?php if($val->flyer){?>
                                <a href="<?php echo base_url()?>/uploads/products/<?=$val->flyer?>" target="_blank" style="color:green">View File </a>
              <?php } else{ ?>
              <p style="color:red">No File Uploaded</p>
              <?php } ?>
              </div>
                                            <input type="file"   class="w-full px-4 py-2 placeholder-secondary-400 border dark:bg-dark-card dark:border-secondary-800 rounded outline-none focus:border-primary-500 dark:focus:border-primary-500 focus:shadow" name="flyer" >
                    <input type="hidden" name="flyer1" value="<?=$val->flyer?>"/>
                                </div>
                        
                    </div>
                    <div class="w-full">
                    
                            <div class="mb-4">
                                
                                <label class="inline-block mb-2 text-secondary-600 dark:text-white ">Retail Elevation:
                                    </label>
              <div style="display:flex">
                  <?php if($val->retailelevation){?>
                                <a href="<?php echo base_url()?>/uploads/products/<?=$val->retailelevation?>" target="_blank" style="color:green">View File </a>
              <?php } else{ ?>
              <p style="color:red">No File Uploaded</p>
              <?php } ?>
              </div>
                                            <input type="file"   class="w-full px-4 py-2 placeholder-secondary-400 border dark:bg-dark-card dark:border-secondary-800 rounded outline-none focus:border-primary-500 dark:focus:border-primary-500 focus:shadow" name="retailelevation" >
                    <input type="hidden" name="retailelevation1" value="<?=$val->retailelevation?>"/>
                                </div>
                        
                    </div>
                    
                    <div class="w-full">
                    
                            <div class="mb-4">
                                
                                <label class="inline-block mb-2 text-secondary-600 dark:text-white ">Retail Floor Plan:
                                    </label>
              <div style="display:flex">
                  <?php if($val->retailfloorplan){?>
                                <a href="<?php echo base_url()?>/uploads/products/<?=$val->retailfloorplan?>" target="_blank" style="color:green">View File </a>
              <?php } else{ ?>
              <p style="color:red">No File Uploaded</p>
              <?php } ?>
              </div>
                                            <input type="file"   class="w-full px-4 py-2 placeholder-secondary-400 border dark:bg-dark-card dark:border-secondary-800 rounded outline-none focus:border-primary-500 dark:focus:border-primary-500 focus:shadow" name="retailfloorplan" >
                    <input type="hidden" name="retailfloorplan1" value="<?=$val->retailfloorplan?>"/>
                                </div>
                        
                    </div>
                </div>
                
                
                
             
                
                <div class="grid lg:grid-cols-3 md:grid-cols-3 lg:gap-8 md:gap-8">
                    <div class="w-full">
                        
                            <div class="mb-4">
                                <label class="inline-block mb-2 text-secondary-600 dark:text-white ">Near By:
                                    </label>
              <div style="display:flex">
                  <?php if($val->nearby){?>
                                <a href="<?php echo base_url()?>/uploads/products/<?=$val->nearby?>" target="_blank" style="color:green">View File </a>
              <?php } else{ ?>
              <p style="color:red">No File Uploaded</p>
              <?php } ?>
              </div>
                                            <input type="file"   class="w-full px-4 py-2 placeholder-secondary-400 border dark:bg-dark-card dark:border-secondary-800 rounded outline-none focus:border-primary-500 dark:focus:border-primary-500 focus:shadow" name="nearby" >
                    <input type="hidden" name="nearby1" value="<?=$val->nearby?>"/>
                                </div>
                        
                    </div>
                    <div class="w-full">
                    
                            <div class="mb-4">
                                
                                <label class="inline-block mb-2 text-secondary-600 dark:text-white ">Parking Ratio:
                                    </label>
              <div style="display:flex">
                  <?php if($val->parkingratio){?>
                                <a href="<?php echo base_url()?>/uploads/products/<?=$val->parkingratio?>" target="_blank" style="color:green">View File </a>
              <?php } else{ ?>
              <p style="color:red">No File Uploaded</p>
              <?php } ?>
              </div>
                                            <input type="file"   class="w-full px-4 py-2 placeholder-secondary-400 border dark:bg-dark-card dark:border-secondary-800 rounded outline-none focus:border-primary-500 dark:focus:border-primary-500 focus:shadow" name="parkingratio" >
                    <input type="hidden" name="parkingratio1" value="<?=$val->parkingratio?>"/>
                                </div>
                        
                    </div>
                    
                   
                </div>
                
                
                
                <div class="grid lg:grid-cols-3 md:grid-cols-3 lg:gap-8 md:gap-8">
                    <div class="w-full">
                        
                            <div class="mb-4">
                                
                                <label class="inline-block mb-2 text-secondary-600 dark:text-white ">Unit Specifications :
                                    </label>
              
                                            <input type="text" value="<?=$val->website?>"   class="w-full px-4 py-2 placeholder-secondary-400 border dark:bg-dark-card dark:border-secondary-800 rounded outline-none focus:border-primary-500 dark:focus:border-primary-500 focus:shadow" name="website" >
        
                                </div>
                        
                    </div>
                    <div class="w-full">
                    
                            <div class="mb-4">
                                
                                <label class="inline-block mb-2 text-secondary-600 dark:text-white ">Youtube 3d Site View:
                                    </label>
              
                                            <input type="text" value="<?=$val->video1?>"   class="w-full px-4 py-2 placeholder-secondary-400 border dark:bg-dark-card dark:border-secondary-800 rounded outline-none focus:border-primary-500 dark:focus:border-primary-500 focus:shadow" name="video1" >
        
                                </div>
                        
                    </div>
                    
                    <div class="w-full">
                    
                            <div class="mb-4">
                                
                                <label class="inline-block mb-2 text-secondary-600 dark:text-white ">Youtube Site Progress View:
                                    </label>
              
                                            <input type="text" value="<?=$val->video2?>"   class="w-full px-4 py-2 placeholder-secondary-400 border dark:bg-dark-card dark:border-secondary-800 rounded outline-none focus:border-primary-500 dark:focus:border-primary-500 focus:shadow" name="video2" >
        
                                </div>
                        
                    </div>
                </div>
                
                
                
                            <button type="submit" name="editproduct" id="thatbutton" class="btn btn-primary">Save</button>
                          </form>

<?php } ?>

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



