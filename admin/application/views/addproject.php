







<?php include('templates/header.php');?>
 


 <div class="text-white h-48 sub-header" style="background-color:rgb(112 22 208 / var(--tw-bg-opacity))">
                <div class="w-full p-8">
                    <div class="row">
                        <div class="px-4 col-md-12">
                            <div class="flex flex-wrap items-center justify-between">
                                <div>
                                    <h1 class="text-white mb-2 mr-16">Add Project</h1>
                                
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
                          <form action="" method="post" enctype="multipart/form-data" id="myform">
                            
        <div class="grid lg:grid-cols-2 md:grid-cols-2 lg:gap-8 md:gap-8">
                    <div class="w-full">
                        
                            <div class="mb-4">
                                <label class="inline-block mb-2 text-secondary-600 dark:text-white">Project Name:
                                    *</label>
                             <input type="text"  class="w-full px-4 py-2 placeholder-secondary-400 border dark:bg-dark-card dark:border-secondary-800 rounded outline-none focus:border-primary-500 dark:focus:border-primary-500 focus:shadow" name="name" aria-label="Default select example">
                       
                            </div>
                        
                    </div>
                    <div class="w-full">
                    
                            <div class="mb-4">
                                <label class="inline-block mb-2 text-secondary-600 dark:text-white ">Photos:
                                    *</label>
                                            <input type="file" accept="image/png, image/gif, image/jpeg" id="myfile" class="w-full px-4 py-2 placeholder-secondary-400 border dark:bg-dark-card dark:border-secondary-800 rounded outline-none focus:border-primary-500 dark:focus:border-primary-500 focus:shadow" multiple name="pimage[]" required>
                    
                                </div>
                        
                    </div>
                </div>
                            <button type="submit" name="addproduct" id="thatbutton" class="btn btn-primary">ADD</button>
                          </form>



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



