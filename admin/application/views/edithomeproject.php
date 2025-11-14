







<?php include('templates/header.php');?>
 


 <div class="text-white h-48 sub-header" style="background-color:rgb(0 155 222)">
                <div class="w-full p-8">
                    <div class="row">
                        <div class="px-4 col-md-12">
                            <div class="flex flex-wrap items-center justify-between">
                                <div>
                                    <h1 class="text-white mb-2 mr-16">Add Home Project</h1>
                                
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
                             <input type="text" value="<?php echo $val->name?>"  class="w-full px-4 py-2 placeholder-secondary-400 border dark:bg-dark-card dark:border-secondary-800 rounded outline-none focus:border-primary-500 dark:focus:border-primary-500 focus:shadow" name="name" aria-label="Default select example">
                       
                            </div>
                        
                    </div>
                    <div class="w-full">
                    
                            <div class="mb-4">
                                <label class="inline-block mb-2 text-secondary-600 dark:text-white ">Image:
                                    *</label>
              <div style="display: flex; height: 150px; overflow-y: auto;margin-bottom:10px">
                                             <?php $images=explode(',',$val->pimage); foreach($images as $image){  ?>
                                <img id="blah3" style="height:100px; width:100px; padding-bottom:6px;margin-left:1%" src="<?php echo base_url()?>/uploads/products/<?=$image?>"/>
              <?php }?>
              </div>
                                            <input type="file" accept="image/png, image/gif, image/jpeg" id="myfile" class="w-full px-4 py-2 placeholder-secondary-400 border dark:bg-dark-card dark:border-secondary-800 rounded outline-none focus:border-primary-500 dark:focus:border-primary-500 focus:shadow"  name="pimage[]" >
                    <input type="hidden" name="pimage1p" value="<?=$val->pimage?>"/>
                                </div>
                        
                    </div>
                </div>
                
                 <div class="grid lg:grid-cols-2 md:grid-cols-2 lg:gap-8 md:gap-8">
                    <div class="w-full">
                        
                            <div class="mb-4">
                                <label class="inline-block mb-2 text-secondary-600 dark:text-white">Location:
                                    *</label>
                             <input type="text" value="<?php echo $val->location?>"  class="w-full px-4 py-2 placeholder-secondary-400 border dark:bg-dark-card dark:border-secondary-800 rounded outline-none focus:border-primary-500 dark:focus:border-primary-500 focus:shadow" name="location" aria-label="Default select example">
                       
                            </div>
                        
                    </div>
                   <div class="w-full">
                        
                            <div class="mb-4">
                                <label class="inline-block mb-2 text-secondary-600 dark:text-white">Total Buildings:
                                    *</label>
                             <input type="text" value="<?php echo $val->totalbuildings?>"  class="w-full px-4 py-2 placeholder-secondary-400 border dark:bg-dark-card dark:border-secondary-800 rounded outline-none focus:border-primary-500 dark:focus:border-primary-500 focus:shadow" name="totalbuildings" aria-label="Default select example">
                       
                            </div>
                        
                    </div>
                  
                </div>
                <div class="grid lg:grid-cols-2 md:grid-cols-2 lg:gap-8 md:gap-8">
                    <div class="w-full">
                        
                            <div class="mb-4">
                                <label class="inline-block mb-2 text-secondary-600 dark:text-white">Available:
                                    *</label>
                             <input type="text" value="<?php echo $val->available?>"  class="w-full px-4 py-2 placeholder-secondary-400 border dark:bg-dark-card dark:border-secondary-800 rounded outline-none focus:border-primary-500 dark:focus:border-primary-500 focus:shadow" name="available" aria-label="Default select example">
                       
                            </div>
                        
                    </div>
                   <div class="w-full">
                        
                            <div class="mb-4">
                                <label class="inline-block mb-2 text-secondary-600 dark:text-white">Units Sold:
                                    *</label>
                             <input type="text" value="<?php echo $val->unitsold?>"  class="w-full px-4 py-2 placeholder-secondary-400 border dark:bg-dark-card dark:border-secondary-800 rounded outline-none focus:border-primary-500 dark:focus:border-primary-500 focus:shadow" name="unitsold" aria-label="Default select example">
                       
                            </div>
                        
                    </div>
                  
                </div>
                <div class="grid lg:grid-cols-2 md:grid-cols-2 lg:gap-8 md:gap-8">
                    <div class="w-full">
                        
                            <div class="mb-4">
                                <label class="inline-block mb-2 text-secondary-600 dark:text-white">Category:
                                    *</label>
                       <select class="w-full px-4 py-2 placeholder-secondary-400 border dark:bg-dark-card dark:border-secondary-800 rounded outline-none focus:border-primary-500 dark:focus:border-primary-500 focus:shadow" name="category">
                          <option value="<?php echo $val->category?>"><?php echo $val->category?></option>
                           <option value="office">office</option>
                           <option value="retail">retail</option>
                           <option value="flex">flex</option>
                           <option value="plots">plots</option>
                       </select>
                            </div>
                        
                    </div>
                    
                    <div class="w-full">
                        
                            <div class="mb-4">
                                <label class="inline-block mb-2 text-secondary-600 dark:text-white">Url:
                                    *</label>
                             <input type="text" value="<?php echo $val->urlt?>"  class="w-full px-4 py-2 placeholder-secondary-400 border dark:bg-dark-card dark:border-secondary-800 rounded outline-none focus:border-primary-500 dark:focus:border-primary-500 focus:shadow" name="urlt" aria-label="Default select example">
                       
                            </div>
                        
                    </div>
                  
                  
                </div>
                            <button type="submit" name="editproduct" id="thatbutton" class="btn btn-primary">Update</button>
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



