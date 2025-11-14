



<?php include('templates/header.php');?>



 <div class="text-white h-48 sub-header" style="background-color:rgb(0 155 222)">
                <div class="w-full p-8">
                    <div class="row">
                        <div class="px-4 col-md-12">
                            <div class="flex flex-wrap items-center justify-between">
                                <div>
                                    <h1 class="text-white mb-2 mr-16">Home Projects</h1>
                                
                                </div>
                                <div>
                                    <a href="<?php echo base_url()?>homecontroller/addhomeproject"
                                        class="text-white btn shadow-md btn-soft-light hover:shadow-xl hover:bg-glass focus:bg-gray-200">
                                        <svg xmlns="http://www.w3.org/2000/svg" width="1em" height="1em" viewBox="0 0 24 24"><path fill="currentColor" d="M18 10h-4V6a2 2 0 0 0-4 0l.071 4H6a2 2 0 0 0 0 4l4.071-.071L10 18a2 2 0 0 0 4 0v-4.071L18 14a2 2 0 0 0 0-4"/></svg>
                                        Add New Project
                                    </a>
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
    
    
    
    <div class="p-6 lg:p-8 footer-inner  mx-auto main-container  lg:py-0 py-0 " x-bind:class="setting.page_layout">
<div class="flex flex-wrap contet-inner">
    <div class="flex-auto w-full">
        <div class="relative flex flex-col mb-8  bg-white dark:bg-dark-card shadow rounded">
            <div class="flex justify-between flex-auto p-5 border-b dark:border-secondary-800 rounded">
                <h4 class="mb-0 dark:text-secondary-200">Home Projects List</h4>
            </div>
            <div class="pb-6 pt-2 px-0">
                <div class="overflow-x-auto">
                    <div class=" overflow-x-auto p-5">
                        <div class="flex flex-wrap justify-between my-6 mx-5">
                            <div class="flex justify-center items-center mb-1">
                            <label class="inline-block text-secondary-600 dark:text-white" for="show">Show</label>
                            <div class="flex">
                                <select
                                class="block w-full px-2 py-1 ml-2 text-base font-normal rounded text-secondary-500 dark:bg-dark-card dark:border-secondary-800 bg-white border outline-none focus:border-primary-500 focus:shadow"
                                aria-label=".form-select-sm example" id="show">
                                <option selected="">10</option>
                                <option value="1">25</option>
                                <option value="2">50</option>
                                <option value="3">100</option>
                                </select>
                                <span class="text-secondary-600 ml-1 dark:text-white">entries</span>
                            </div>
                            </div>
                            <!--<div class="flex justify-center items-center mb-1">-->
                            <!--<label class="inline-block mb-2 text-secondary-600 dark:text-white" for="email">Search:</label>-->
                            <!--<input type="email"-->
                            <!--    class="block w-full px-4 py-1 ml-2 text-base font-normal dark:bg-dark-card dark:border-secondary-800 bg-white border rounded outline-none focus:border-primary-500 focus:shadow"-->
                            <!--    id="email">-->
                            <!--</div>-->
                        </div>
                        <table
                            class="min-w-full overflow-hidden divide-y divide-secondary-200 dark:divide-secondary-800 border dark:border-secondary-800">
                            <thead>
                                <tr class="bg-secondary-100 dark:bg-dark-bg">
                                    <th class="px-6 py-4 text-left font-medium text-secondary-600 dark:text-white">
                                        #</th>
                                    <th class="px-6 py-4 text-left font-medium text-secondary-600 dark:text-white">
                                        Name</th>
                                    <th class="px-6 py-4 text-left font-medium text-secondary-600 dark:text-white">
                                        Category</th>
                                    <th class="px-6 py-4 text-left font-medium text-secondary-600 dark:text-white">
                                        Action</th>
                                </tr>
                            </thead>
                            <tbody class="divide-y divide-secondary-200 dark:divide-secondary-800">
                                
                                	<?php
                   $i=0;
                             foreach($list as $val){  $i = $i +1;?>
                                <tr>
                                    <td class="px-6 py-4 whitespace-nowrap">
                                        <?=$i?>
                                    </td>
                                    <td class="px-6 py-4 whitespace-nowrap text-secondary-600 dark:text-secondary-500"><?=$val->name?></td>
                                   <td class="px-6 py-4 whitespace-nowrap text-secondary-600 dark:text-secondary-500"><?=$val->category?></td>
                                    <td class="px-6 py-4">


                                           <a href="<?php echo base_url()?>homecontroller/edithomeproject/<?=$val->id?>"><button type="button" style="padding:4px" class="btn btn-primary mb-2 btn-sm">Edit Project</button></a>
                                           
                                           <a href="<?php echo base_url()?>homecontroller/deletehomeproject/<?=$val->id?>" style="margin-left:2%"><button type="button" style="padding:4px" class="btn btn-primary mb-2 btn-sm">Delete Project</button></a>
                                           
                                         
                                    </td>
                                </tr>
                                
                                <?php } ?>
                                
                                
                            </tbody>
                        </table>
                        <div class="border dark:border-secondary-800">
                        <div class="flex flex-wrap justify-between my-6 mx-5">
                                <div class="flex justify-center items-center mb-1">
                                  <p class="text-secondary-600">Showing 1 to 9 of 9 entries</p>  
                                </div>
                                <div class="inline-flex flex-wrap">
                                    <a href="#" class="border-t border-b border-l text-primary-500 border-secondary-500 px-2 py-1 rounded-l dark:border-secondary-800">Previous</a>
                                    <a href="#" class="border text-white border-secondary-500 cursor-pointer bg-primary-500 px-4 py-1 dark:border-secondary-800">1</a>
                                    <a href="#" class="border-r border-t border-b text-primary-500 border-secondary-500 px-4 py-1 rounded-r dark:border-secondary-800">Next</a>
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

