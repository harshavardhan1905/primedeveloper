<?php include('templates/header.php');?>

 
    <div class="p-6 lg:p-8 footer-inner  mx-auto main-container " x-bind:class="setting.page_layout">
<div class="flex flex-wrap justify-between mb-6 gap-4">
    <div class="">
        <h3 class="mb-0 dark:text-white">Quick Insights</h3>
        <p class="text-secondary-600 dark:text-white"> Dashboard</p>
    </div>
   
   
   
</div>


<div class="grid lg:grid-cols-4 md:grid-cols-2 grid-cols-1 gap-8 mb-8">
    <div class="w-full">
        <div class="relative flex flex-col text-secondary-600 bg-white shadow rounded dark:bg-dark-card">
            <div class="p-6 sm:flex-auto text-center">
                <span class="text-secondary-600 dark:text-white ">Projects</span>
                <div class="flex items-center justify-between mt-6">
                    <div>
                        <h2 class="text-3xl  text-black counter dark:text-white" style="visibility: visible;"> <?php
                        $query = $this->db->get('projects');
                        echo $query->num_rows();
                        ?></h2>
                     
                    </div>
                    <div class="p-4 text-danger-500 bg-danger-500/10 border dark:border-secondary-800 rounded">
                      <a href="<?php echo base_url()?>homecontroller/projects">  <svg xmlns="http://www.w3.org/2000/svg" width="20px" height="20px" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                          <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M5 10l7-7m0 0l7 7m-7-7v18"></path>
                        </svg></a>
                    </div>
                </div>
                <div class="flex w-full h-1.5 mt-6 align-middle bg-danger-500/10 rounded-full shadow-inner">
                    <div class="w-3/6 text-xs leading-none text-center text-white bg-danger-500 rounded-l-full "></div>
                </div>
            </div>
        </div>
    </div>
    <div class="w-full">
        <div class="relative flex flex-col text-secondary-600 bg-white shadow rounded dark:bg-dark-card">
            <div class="flex-auto p-6 text-center">
                <span class=" text-secondary-600 dark:text-white">Home Projects</span>
                <div class="flex items-center justify-between mt-6">
                    <div>
                        <h2 class=" dark:text-secondary-600  dark:text-white"> <?php
        $query2 = $this->db->get('homeprojects');
        echo $query2->num_rows();
        ?></h2>
                   
                    </div>
                    <div class="p-4 border rounded bg-info-500/10 text-info-500 dark:border-secondary-800">
                     <a href="<?php echo base_url()?>homeprojects">   <svg xmlns="http://www.w3.org/2000/svg" class="w-5 h-5" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M5 10l7-7m0 0l7 7m-7-7v18"></path>
                        </svg></a>
                    </div>
                </div>
                <div class="flex w-full h-1.5 mt-6 align-middle bg-info-500/10 rounded-full shadow-inner">
                    <div class="w-3/4 text-xs leading-none text-center text-white rounded-l-full bg-info-500 "></div>
                </div>
            </div>
        </div>
    </div>
    <div class="w-full">
        <div class="relative flex flex-col text-secondary-600 bg-white shadow rounded dark:bg-dark-card">
            <div class="flex-auto p-6 text-center">
                <span class=" text-secondary-600 dark:text-white">Blogs</span>
                <div class="flex items-center justify-between mt-6">
                    <div>
                        <h2 class="text-3xl  text-black dark:text-secondary-600 counter dark:text-white" style="visibility: visible;"> <?php
        $query3 = $this->db->get('blog');
        echo $query3->num_rows();
        ?></h2>
                        
                    </div>
                    <div class="p-4 text-success-500 bg-success-500/10 border rounded dark:border-secondary-800">
                       <a href="<?php echo base_url()?>blogs"> <svg xmlns="http://www.w3.org/2000/svg" class="w-5 h-5" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M5 10l7-7m0 0l7 7m-7-7v18"></path>
                        </svg></a>
                    </div>
                </div>
                <div class="flex w-full h-1.5 mt-6 align-middle bg-success-500/10 rounded-full shadow-inner">
                    <div class="w-3/4 text-xs leading-none text-center text-white bg-success-500 rounded-l-full "></div>
                </div>
            </div>
        </div>
    </div>
    <div class="w-full">
        <div class="relative flex flex-col text-secondary-600 bg-white shadow rounded dark:bg-dark-card">
            <div class="flex-auto p-6 text-center">
                <span class=" text-secondary-600 dark:text-white">Registrations</span>
                <div class="flex items-center justify-between mt-6">
                    <div>
                        <h2 class="text-3xl  text-black dark:text-white counter" style="visibility: visible;"> <?php
        $query4 = $this->db->get('registrations');
        echo $query4->num_rows();
        ?></h2>
                        
                    </div>
                    <div class="p-4 text-primary-500 bg-primary-500/10 rounded dark:border-secondary-800 border">
                      <a href="<?php echo base_url()?>registrations">  <svg xmlns="http://www.w3.org/2000/svg" class="w-5 h-5" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M5 10l7-7m0 0l7 7m-7-7v18"></path>
                        </svg></a>
                    </div>
                </div>
                <div class="flex w-full h-1.5 mt-6 align-middle bg-primary-500/10 rounded-full shadow-inner">
                    <div class="w-3/6 text-xs leading-none text-center text-white bg-primary-500 rounded-l-full"></div>
                </div>
            </div>
        </div>
    </div>
   
 
</div>

<div>
   
   
    
</div>
</div>
    </div>
   


<?php include('templates/footer.php');?>
