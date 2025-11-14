







<?php include('templates/header.php');?>
<script src="https://cdn.ckeditor.com/4.16.0/standard/ckeditor.js"></script>

 <script>
     const bullet = "\u2022";
const bulletWithSpace = `${bullet} `;
const enter = 13;


const handleInput = (event) => {
  const { keyCode, target } = event;
  const { selectionStart, value } = target;
  
  if (keyCode === enter) {
    console.log('a');
    target.value = [...value]
      .map((c, i) => i === selectionStart - 1
        ? `\n${bulletWithSpace}`
        : c
      )
      .join('');
      console.log(target.value);
      
    target.selectionStart = selectionStart+bulletWithSpace.length;
    target.selectionEnd = selectionStart+bulletWithSpace.length;
  }
  
  if (value[0] !== bullet) {
    target.value = `${bulletWithSpace}${value}`;
  }
}
 </script>


 <div class="text-white h-48 sub-header" style="background-color:rgb(0 155 222)">
                <div class="w-full p-8">
                    <div class="row">
                        <div class="px-4 col-md-12">
                            <div class="flex flex-wrap items-center justify-between">
                                <div>
                                    <h1 class="text-white mb-2 mr-16">Edit Project</h1>
                                
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
                             <input type="text" value="<?php echo $val->name?>"  class="w-full px-4 py-2 placeholder-secondary-400 border dark:bg-dark-card dark:border-secondary-800 rounded outline-none focus:border-primary-500 dark:focus:border-primary-500 focus:shadow" name="name" aria-label="Default select example" readonly>
                       
                            </div>
                        
                    </div>
                   
                </div>
                
                
                
                 <div class="grid lg:grid-cols-2 md:grid-cols-2 lg:gap-8 md:gap-8">
                    <div class="w-full">
                        
                            <div class="mb-4">
                                <label class="inline-block mb-2 text-secondary-600 dark:text-white">Floor Plan Heading:
                                    *</label>
                             <input type="text" value="<?php echo $val->floorplanheading?>"  class="w-full px-4 py-2 placeholder-secondary-400 border dark:bg-dark-card dark:border-secondary-800 rounded outline-none focus:border-primary-500 dark:focus:border-primary-500 focus:shadow" name="floorplanheading" aria-label="Default select example">
                       
                            </div>
                        
                    </div>
                    <div class="w-full">
                        
                            <div class="mb-4">
                                <label class="inline-block mb-2 text-secondary-600 dark:text-white">Floor Plan Content:
                                    *</label>
                       <textarea rows="10"  class=" w-full px-4 py-2 placeholder-secondary-400 border dark:bg-dark-card dark:border-secondary-800 rounded outline-none focus:border-primary-500 dark:focus:border-primary-500 focus:shadow" name="floorplancontent"><?php echo $val->floorplancontent?></textarea>
                            </div>
                        
                    </div>
                </div>
                
              
              
                <div class="grid lg:grid-cols-2 md:grid-cols-2 lg:gap-8 md:gap-8">
                    <div class="w-full">
                        
                            <div class="mb-4">
                                <label class="inline-block mb-2 text-secondary-600 dark:text-white">Building Name 1:
                                    *</label>
                             <input type="text" value="<?php echo $val->buildingname1?>"  class="w-full px-4 py-2 placeholder-secondary-400 border dark:bg-dark-card dark:border-secondary-800 rounded outline-none focus:border-primary-500 dark:focus:border-primary-500 focus:shadow" name="buildingname1" aria-label="Default select example">
                       
                            </div>
                        
                    </div>
                    <div class="w-full">
                    
                            <div class="mb-4">
                                <label class="inline-block mb-2 text-secondary-600 dark:text-white ">Plan Photo:
                                    *</label>
              <div style="display: flex; height: 150px; overflow-y: auto;margin-bottom:10px">
                                             <?php $images=explode(',',$val->floorplan1); foreach($images as $image){  ?>
                                <img id="blah3" style="height:100px; width:100px; padding-bottom:6px;margin-left:1%" src="<?php echo base_url()?>/uploads/products/<?=$image?>"/>
              <?php }?>
              </div>
                                            <input type="file" accept="image/png, image/gif, image/jpeg"  class="w-full px-4 py-2 placeholder-secondary-400 border dark:bg-dark-card dark:border-secondary-800 rounded outline-none focus:border-primary-500 dark:focus:border-primary-500 focus:shadow"  name="pimage" >
                    <input type="hidden" name="pimage1p" value="<?=$val->floorplan1?>"/>
                                </div>
                        
                    </div>
                </div>
                
                  <div class="grid lg:grid-cols-6 md:grid-cols-2 lg:gap-8 md:gap-8">
    <div class="w-full">
        <div class="mb-4">
            <label class="inline-block mb-2 text-secondary-600 dark:text-white">Total Area: *</label>
            <input type="text" value="<?php echo $val->totalarea1?>" class="w-full px-4 py-2 placeholder-secondary-400 border dark:bg-dark-card dark:border-secondary-800 rounded outline-none focus:border-primary-500 dark:focus:border-primary-500 focus:shadow" name="totalarea1" aria-label="Default select example">
        </div>
    </div>
    <div class="w-full">
        <div class="mb-4">
            <label class="inline-block mb-2 text-secondary-600 dark:text-white">Building No: *</label>
            <input type="text" value="<?php echo $val->building1?>" class="w-full px-4 py-2 placeholder-secondary-400 border dark:bg-dark-card dark:border-secondary-800 rounded outline-none focus:border-primary-500 dark:focus:border-primary-500 focus:shadow" name="building1" aria-label="Default select example">
        </div>
    </div>
    <!-- Add two more divs to create a total of four columns -->
    <div class="w-full">
       <div class="mb-4">
            <label class="inline-block mb-2 text-secondary-600 dark:text-white">Total Units: *</label>
            <input type="text" value="<?php echo $val->totalunits1?>" class="w-full px-4 py-2 placeholder-secondary-400 border dark:bg-dark-card dark:border-secondary-800 rounded outline-none focus:border-primary-500 dark:focus:border-primary-500 focus:shadow" name="totalunits1" aria-label="Default select example">
        </div>
    </div>
    <div class="w-full">
        <div class="mb-4">
            <label class="inline-block mb-2 text-secondary-600 dark:text-white">Available Units: *</label>
            <input type="text" value="<?php echo $val->availableunits1?>" class="w-full px-4 py-2 placeholder-secondary-400 border dark:bg-dark-card dark:border-secondary-800 rounded outline-none focus:border-primary-500 dark:focus:border-primary-500 focus:shadow" name="availableunits1" aria-label="Default select example">
        </div>
    </div>
     <div class="w-full">
        <div class="mb-4">
            <label class="inline-block mb-2 text-secondary-600 dark:text-white">Parking Available: *</label>
            <input type="text" value="<?php echo $val->parking1?>" class="w-full px-4 py-2 placeholder-secondary-400 border dark:bg-dark-card dark:border-secondary-800 rounded outline-none focus:border-primary-500 dark:focus:border-primary-500 focus:shadow" name="parking1" aria-label="Default select example">
        </div>
    </div>
     <div class="w-full">
        <div class="mb-4">
            <label class="inline-block mb-2 text-secondary-600 dark:text-white">Prices From: *</label>
            <input type="text" value="<?php echo $val->price1?>" class="w-full px-4 py-2 placeholder-secondary-400 border dark:bg-dark-card dark:border-secondary-800 rounded outline-none focus:border-primary-500 dark:focus:border-primary-500 focus:shadow" name="price1" aria-label="Default select example">
        </div>
    </div>
</div>

                
                
      <div class="grid lg:grid-cols-2 md:grid-cols-2 lg:gap-8 md:gap-8">
                    <div class="w-full">
                        
                            <div class="mb-4">
                                <label class="inline-block mb-2 text-secondary-600 dark:text-white">Building Name 2:
                                    *</label>
                             <input type="text" value="<?php echo $val->buildingname2?>"  class="w-full px-4 py-2 placeholder-secondary-400 border dark:bg-dark-card dark:border-secondary-800 rounded outline-none focus:border-primary-500 dark:focus:border-primary-500 focus:shadow" name="buildingname2" aria-label="Default select example">
                       
                            </div>
                        
                    </div>
                    <div class="w-full">
                    
                            <div class="mb-4">
                                <label class="inline-block mb-2 text-secondary-600 dark:text-white ">Plan Photo:
                                    *</label>
              <div style="display: flex; height: 150px; overflow-y: auto;margin-bottom:10px">
                                             <?php $images2=explode(',',$val->floorplan2); foreach($images2 as $image2){  ?>
                                <img id="blah3" style="height:100px; width:100px; padding-bottom:6px;margin-left:1%" src="<?php echo base_url()?>/uploads/products/<?=$image2?>"/>
              <?php }?>
              </div>
                                            <input type="file" accept="image/png, image/gif, image/jpeg"  class="w-full px-4 py-2 placeholder-secondary-400 border dark:bg-dark-card dark:border-secondary-800 rounded outline-none focus:border-primary-500 dark:focus:border-primary-500 focus:shadow"  name="pimage2" >
                    <input type="hidden" name="pimage2p" value="<?=$val->floorplan2?>"/>
                                </div>
                        
                    </div>
                </div>          
                
                
                      <div class="grid lg:grid-cols-6 md:grid-cols-2 lg:gap-8 md:gap-8">
    <div class="w-full">
        <div class="mb-4">
            <label class="inline-block mb-2 text-secondary-600 dark:text-white">Total Area: *</label>
            <input type="text" value="<?php echo $val->totalarea2?>" class="w-full px-4 py-2 placeholder-secondary-400 border dark:bg-dark-card dark:border-secondary-800 rounded outline-none focus:border-primary-500 dark:focus:border-primary-500 focus:shadow" name="totalarea2" aria-label="Default select example">
        </div>
    </div>
    <div class="w-full">
        <div class="mb-4">
            <label class="inline-block mb-2 text-secondary-600 dark:text-white">Building No: *</label>
            <input type="text" value="<?php echo $val->building2?>" class="w-full px-4 py-2 placeholder-secondary-400 border dark:bg-dark-card dark:border-secondary-800 rounded outline-none focus:border-primary-500 dark:focus:border-primary-500 focus:shadow" name="building2" aria-label="Default select example">
        </div>
    </div>
    <!-- Add two more divs to create a total of four columns -->
    <div class="w-full">
       <div class="mb-4">
            <label class="inline-block mb-2 text-secondary-600 dark:text-white">Total Units: *</label>
            <input type="text" value="<?php echo $val->totalunits2?>" class="w-full px-4 py-2 placeholder-secondary-400 border dark:bg-dark-card dark:border-secondary-800 rounded outline-none focus:border-primary-500 dark:focus:border-primary-500 focus:shadow" name="totalunits2" aria-label="Default select example">
        </div>
    </div>
    <div class="w-full">
        <div class="mb-4">
            <label class="inline-block mb-2 text-secondary-600 dark:text-white">Available Units: *</label>
            <input type="text" value="<?php echo $val->availableunits2?>" class="w-full px-4 py-2 placeholder-secondary-400 border dark:bg-dark-card dark:border-secondary-800 rounded outline-none focus:border-primary-500 dark:focus:border-primary-500 focus:shadow" name="availableunits2" aria-label="Default select example">
        </div>
    </div>
     <div class="w-full">
        <div class="mb-4">
            <label class="inline-block mb-2 text-secondary-600 dark:text-white">Parking Available: *</label>
            <input type="text" value="<?php echo $val->parking2?>" class="w-full px-4 py-2 placeholder-secondary-400 border dark:bg-dark-card dark:border-secondary-800 rounded outline-none focus:border-primary-500 dark:focus:border-primary-500 focus:shadow" name="parking2" aria-label="Default select example">
        </div>
    </div>
     <div class="w-full">
        <div class="mb-4">
            <label class="inline-block mb-2 text-secondary-600 dark:text-white">Prices From: *</label>
            <input type="text" value="<?php echo $val->price2?>" class="w-full px-4 py-2 placeholder-secondary-400 border dark:bg-dark-card dark:border-secondary-800 rounded outline-none focus:border-primary-500 dark:focus:border-primary-500 focus:shadow" name="price2" aria-label="Default select example">
        </div>
    </div>
</div> 
                
                
           
   
   
   <div class="grid lg:grid-cols-2 md:grid-cols-2 lg:gap-8 md:gap-8">
    <div class="w-full">
        <div class="mb-4">
            <label class="inline-block mb-2 text-secondary-600 dark:text-white">Building Name 3:
                *</label>
            <input type="text" value="<?php echo $val->buildingname3?>"  class="w-full px-4 py-2 placeholder-secondary-400 border dark:bg-dark-card dark:border-secondary-800 rounded outline-none focus:border-primary-500 dark:focus:border-primary-500 focus:shadow" name="buildingname3" aria-label="Default select example">
        </div>
    </div>
    <div class="w-full">
        <div class="mb-4">
            <label class="inline-block mb-2 text-secondary-600 dark:text-white ">Plan Photo 3:
                *</label>
            <div style="display: flex; height: 150px; overflow-y: auto;margin-bottom:10px">
                <?php $images=explode(',',$val->floorplan3); foreach($images as $image){  ?>
                <img id="blah3" style="height:100px; width:100px; padding-bottom:6px;margin-left:1%" src="<?php echo base_url()?>/uploads/products/<?=$image?>"/>
                <?php }?>
            </div>
            <input type="file" accept="image/png, image/gif, image/jpeg"  class="w-full px-4 py-2 placeholder-secondary-400 border dark:bg-dark-card dark:border-secondary-800 rounded outline-none focus:border-primary-500 dark:focus:border-primary-500 focus:shadow"  name="pimage3" >
            <input type="hidden" name="pimage3p" value="<?=$val->floorplan3?>"/>
        </div>
    </div>
</div>

<div class="grid lg:grid-cols-6 md:grid-cols-2 lg:gap-8 md:gap-8">
    <div class="w-full">
        <div class="mb-4">
            <label class="inline-block mb-2 text-secondary-600 dark:text-white">Total Area 3: *</label>
            <input type="text" value="<?php echo $val->totalarea3?>" class="w-full px-4 py-2 placeholder-secondary-400 border dark:bg-dark-card dark:border-secondary-800 rounded outline-none focus:border-primary-500 dark:focus:border-primary-500 focus:shadow" name="totalarea3" aria-label="Default select example">
        </div>
    </div>
    <div class="w-full">
        <div class="mb-4">
            <label class="inline-block mb-2 text-secondary-600 dark:text-white">Building No 3: *</label>
            <input type="text" value="<?php echo $val->building3?>" class="w-full px-4 py-2 placeholder-secondary-400 border dark:bg-dark-card dark:border-secondary-800 rounded outline-none focus:border-primary-500 dark:focus:border-primary-500 focus:shadow" name="building3" aria-label="Default select example">
        </div>
    </div>
    <!-- Add two more divs to create a total of four columns -->
    <div class="w-full">
        <div class="mb-4">
            <label class="inline-block mb-2 text-secondary-600 dark:text-white">Total Units 3: *</label>
            <input type="text" value="<?php echo $val->totalunits3?>" class="w-full px-4 py-2 placeholder-secondary-400 border dark:bg-dark-card dark:border-secondary-800 rounded outline-none focus:border-primary-500 dark:focus:border-primary-500 focus:shadow" name="totalunits3" aria-label="Default select example">
        </div>
    </div>
    <div class="w-full">
        <div class="mb-4">
            <label class="inline-block mb-2 text-secondary-600 dark:text-white">Available Units 3: *</label>
            <input type="text" value="<?php echo $val->availableunits3?>" class="w-full px-4 py-2 placeholder-secondary-400 border dark:bg-dark-card dark:border-secondary-800 rounded outline-none focus:border-primary-500 dark:focus:border-primary-500 focus:shadow" name="availableunits3" aria-label="Default select example">
        </div>
    </div>
    <div class="w-full">
        <div class="mb-4">
            <label class="inline-block mb-2 text-secondary-600 dark:text-white">Parking Available 3: *</label>
            <input type="text" value="<?php echo $val->parking3?>" class="w-full px-4 py-2 placeholder-secondary-400 border dark:bg-dark-card dark:border-secondary-800 rounded outline-none focus:border-primary-500 dark:focus:border-primary-500 focus:shadow" name="parking3" aria-label="Default select example">
        </div>
    </div>
    <div class="w-full">
        <div class="mb-4">
            <label class="inline-block mb-2 text-secondary-600 dark:text-white">Prices From 3: *</label>
            <input type="text" value="<?php echo $val->price3?>" class="w-full px-4 py-2 placeholder-secondary-400 border dark:bg-dark-card dark:border-secondary-800 rounded outline-none focus:border-primary-500 dark:focus:border-primary-500 focus:shadow" name="price3" aria-label="Default select example">
        </div>
    </div>
</div>


<div class="grid lg:grid-cols-2 md:grid-cols-2 lg:gap-8 md:gap-8">
    <div class="w-full">
        <div class="mb-4">
            <label class="inline-block mb-2 text-secondary-600 dark:text-white">Building Name 4:
                *</label>
            <input type="text" value="<?php echo $val->buildingname4?>"  class="w-full px-4 py-2 placeholder-secondary-400 border dark:bg-dark-card dark:border-secondary-800 rounded outline-none focus:border-primary-500 dark:focus:border-primary-500 focus:shadow" name="buildingname4" aria-label="Default select example">
        </div>
    </div>
    <div class="w-full">
        <div class="mb-4">
            <label class="inline-block mb-2 text-secondary-600 dark:text-white ">Plan Photo 4:
                *</label>
            <div style="display: flex; height: 150px; overflow-y: auto;margin-bottom:10px">
                <?php $images=explode(',',$val->floorplan4); foreach($images as $image){  ?>
                <img id="blah3" style="height:100px; width:100px; padding-bottom:6px;margin-left:1%" src="<?php echo base_url()?>/uploads/products/<?=$image?>"/>
                <?php }?>
            </div>
            <input type="file" accept="image/png, image/gif, image/jpeg"  class="w-full px-4 py-2 placeholder-secondary-400 border dark:bg-dark-card dark:border-secondary-800 rounded outline-none focus:border-primary-500 dark:focus:border-primary-500 focus:shadow"  name="pimage4" >
            <input type="hidden" name="pimage4p" value="<?=$val->floorplan4?>"/>
        </div>
    </div>
</div>

<div class="grid lg:grid-cols-6 md:grid-cols-2 lg:gap-8 md:gap-8">
    <div class="w-full">
        <div class="mb-4">
            <label class="inline-block mb-2 text-secondary-600 dark:text-white">Total Area 4: *</label>
            <input type="text" value="<?php echo $val->totalarea4?>" class="w-full px-4 py-2 placeholder-secondary-400 border dark:bg-dark-card dark:border-secondary-800 rounded outline-none focus:border-primary-500 dark:focus:border-primary-500 focus:shadow" name="totalarea4" aria-label="Default select example">
        </div>
    </div>
    <div class="w-full">
        <div class="mb-4">
            <label class="inline-block mb-2 text-secondary-600 dark:text-white">Building No 4: *</label>
            <input type="text" value="<?php echo $val->building4?>" class="w-full px-4 py-2 placeholder-secondary-400 border dark:bg-dark-card dark:border-secondary-800 rounded outline-none focus:border-primary-500 dark:focus:border-primary-500 focus:shadow" name="building4" aria-label="Default select example">
        </div>
    </div>
    <!-- Add two more divs to create a total of four columns -->
    <div class="w-full">
        <div class="mb-4">
            <label class="inline-block mb-2 text-secondary-600 dark:text-white">Total Units 4: *</label>
            <input type="text" value="<?php echo $val->totalunits4?>" class="w-full px-4 py-2 placeholder-secondary-400 border dark:bg-dark-card dark:border-secondary-800 rounded outline-none focus:border-primary-500 dark:focus:border-primary-500 focus:shadow" name="totalunits4" aria-label="Default select example">
        </div>
    </div>
    <div class="w-full">
        <div class="mb-4">
            <label class="inline-block mb-2 text-secondary-600 dark:text-white">Available Units 4: *</label>
            <input type="text" value="<?php echo $val->availableunits4?>" class="w-full px-4 py-2 placeholder-secondary-400 border dark:bg-dark-card dark:border-secondary-800 rounded outline-none focus:border-primary-500 dark:focus:border-primary-500 focus:shadow" name="availableunits4" aria-label="Default select example">
        </div>
    </div>
    <div class="w-full">
        <div class="mb-4">
            <label class="inline-block mb-2 text-secondary-600 dark:text-white">Parking Available 4: *</label>
            <input type="text" value="<?php echo $val->parking4?>" class="w-full px-4 py-2 placeholder-secondary-400 border dark:bg-dark-card dark:border-secondary-800 rounded outline-none focus:border-primary-500 dark:focus:border-primary-500 focus:shadow" name="parking4" aria-label="Default select example">
        </div>
    </div>
    <div class="w-full">
        <div class="mb-4">
            <label class="inline-block mb-2 text-secondary-600 dark:text-white">Prices From 4: *</label>
            <input type="text" value="<?php echo $val->price4?>" class="w-full px-4 py-2 placeholder-secondary-400 border dark:bg-dark-card dark:border-secondary-800 rounded outline-none focus:border-primary-500 dark:focus:border-primary-500 focus:shadow" name="price4" aria-label="Default select example">
        </div>
    </div>
</div>


     <div class="grid lg:grid-cols-2 md:grid-cols-2 lg:gap-8 md:gap-8">
    <div class="w-full">
        <div class="mb-4">
            <label class="inline-block mb-2 text-secondary-600 dark:text-white">Building Name 5:
                *</label>
            <input type="text" value="<?php echo $val->buildingname5?>"  class="w-full px-4 py-2 placeholder-secondary-400 border dark:bg-dark-card dark:border-secondary-800 rounded outline-none focus:border-primary-500 dark:focus:border-primary-500 focus:shadow" name="buildingname5" aria-label="Default select example">
        </div>
    </div>
    <div class="w-full">
        <div class="mb-4">
            <label class="inline-block mb-2 text-secondary-600 dark:text-white ">Plan Photo 5:
                *</label>
            <div style="display: flex; height: 150px; overflow-y: auto;margin-bottom:10px">
                <?php $images=explode(',',$val->floorplan5); foreach($images as $image){  ?>
                <img id="blah3" style="height:100px; width:100px; padding-bottom:6px;margin-left:1%" src="<?php echo base_url()?>/uploads/products/<?=$image?>"/>
                <?php }?>
            </div>
            <input type="file" accept="image/png, image/gif, image/jpeg"  class="w-full px-4 py-2 placeholder-secondary-400 border dark:bg-dark-card dark:border-secondary-800 rounded outline-none focus:border-primary-500 dark:focus:border-primary-500 focus:shadow"  name="pimage5" >
            <input type="hidden" name="pimage5p" value="<?=$val->floorplan5?>"/>
        </div>
    </div>
</div>

<div class="grid lg:grid-cols-6 md:grid-cols-2 lg:gap-8 md:gap-8">
    <div class="w-full">
        <div class="mb-4">
            <label class="inline-block mb-2 text-secondary-600 dark:text-white">Total Area 5: *</label>
            <input type="text" value="<?php echo $val->totalarea5?>" class="w-full px-4 py-2 placeholder-secondary-400 border dark:bg-dark-card dark:border-secondary-800 rounded outline-none focus:border-primary-500 dark:focus:border-primary-500 focus:shadow" name="totalarea5" aria-label="Default select example">
        </div>
    </div>
    <div class="w-full">
        <div class="mb-4">
            <label class="inline-block mb-2 text-secondary-600 dark:text-white">Building No 5: *</label>
            <input type="text" value="<?php echo $val->building5?>" class="w-full px-4 py-2 placeholder-secondary-400 border dark:bg-dark-card dark:border-secondary-800 rounded outline-none focus:border-primary-500 dark:focus:border-primary-500 focus:shadow" name="building5" aria-label="Default select example">
        </div>
    </div>
    <!-- Add two more divs to create a total of four columns -->
    <div class="w-full">
        <div class="mb-4">
            <label class="inline-block mb-2 text-secondary-600 dark:text-white">Total Units 5: *</label>
            <input type="text" value="<?php echo $val->totalunits5?>" class="w-full px-4 py-2 placeholder-secondary-400 border dark:bg-dark-card dark:border-secondary-800 rounded outline-none focus:border-primary-500 dark:focus:border-primary-500 focus:shadow" name="totalunits5" aria-label="Default select example">
        </div>
    </div>
    <div class="w-full">
        <div class="mb-4">
            <label class="inline-block mb-2 text-secondary-600 dark:text-white">Available Units 5: *</label>
            <input type="text" value="<?php echo $val->availableunits5?>" class="w-full px-4 py-2 placeholder-secondary-400 border dark:bg-dark-card dark:border-secondary-800 rounded outline-none focus:border-primary-500 dark:focus:border-primary-500 focus:shadow" name="availableunits5" aria-label="Default select example">
        </div>
    </div>
    <div class="w-full">
        <div class="mb-4">
            <label class="inline-block mb-2 text-secondary-600 dark:text-white">Parking Available 5: *</label>
            <input type="text" value="<?php echo $val->parking5?>" class="w-full px-4 py-2 placeholder-secondary-400 border dark:bg-dark-card dark:border-secondary-800 rounded outline-none focus:border-primary-500 dark:focus:border-primary-500 focus:shadow" name="parking5" aria-label="Default select example">
        </div>
    </div>
    <div class="w-full">
        <div class="mb-4">
            <label class="inline-block mb-2 text-secondary-600 dark:text-white">Prices From 5: *</label>
            <input type="text" value="<?php echo $val->price5?>" class="w-full px-4 py-2 placeholder-secondary-400 border dark:bg-dark-card dark:border-secondary-800 rounded outline-none focus:border-primary-500 dark:focus:border-primary-500 focus:shadow" name="price5" aria-label="Default select example">
        </div>
    </div>
</div>


<div class="grid lg:grid-cols-2 md:grid-cols-2 lg:gap-8 md:gap-8">
    <div class="w-full">
        <div class="mb-4">
            <label class="inline-block mb-2 text-secondary-600 dark:text-white">Building Name 6:
                *</label>
            <input type="text" value="<?php echo $val->buildingname6?>"  class="w-full px-4 py-2 placeholder-secondary-400 border dark:bg-dark-card dark:border-secondary-800 rounded outline-none focus:border-primary-500 dark:focus:border-primary-500 focus:shadow" name="buildingname6" aria-label="Default select example">
        </div>
    </div>
    <div class="w-full">
        <div class="mb-4">
            <label class="inline-block mb-2 text-secondary-600 dark:text-white ">Plan Photo 6:
                *</label>
            <div style="display: flex; height: 150px; overflow-y: auto;margin-bottom:10px">
                <?php $images=explode(',',$val->floorplan6); foreach($images as $image){  ?>
                <img id="blah3" style="height:100px; width:100px; padding-bottom:6px;margin-left:1%" src="<?php echo base_url()?>/uploads/products/<?=$image?>"/>
                <?php }?>
            </div>
            <input type="file" accept="image/png, image/gif, image/jpeg"  class="w-full px-4 py-2 placeholder-secondary-400 border dark:bg-dark-card dark:border-secondary-800 rounded outline-none focus:border-primary-500 dark:focus:border-primary-500 focus:shadow"  name="pimage6" >
            <input type="hidden" name="pimage6p" value="<?=$val->floorplan6?>"/>
        </div>
    </div>
</div>

<div class="grid lg:grid-cols-6 md:grid-cols-2 lg:gap-8 md:gap-8">
    <div class="w-full">
        <div class="mb-4">
            <label class="inline-block mb-2 text-secondary-600 dark:text-white">Total Area 6: *</label>
            <input type="text" value="<?php echo $val->totalarea6?>" class="w-full px-4 py-2 placeholder-secondary-400 border dark:bg-dark-card dark:border-secondary-800 rounded outline-none focus:border-primary-500 dark:focus:border-primary-500 focus:shadow" name="totalarea6" aria-label="Default select example">
        </div>
    </div>
    <div class="w-full">
        <div class="mb-4">
            <label class="inline-block mb-2 text-secondary-600 dark:text-white">Building No 6: *</label>
            <input type="text" value="<?php echo $val->building6?>" class="w-full px-4 py-2 placeholder-secondary-400 border dark:bg-dark-card dark:border-secondary-800 rounded outline-none focus:border-primary-500 dark:focus:border-primary-500 focus:shadow" name="building6" aria-label="Default select example">
        </div>
    </div>
    <!-- Add two more divs to create a total of four columns -->
    <div class="w-full">
        <div class="mb-4">
            <label class="inline-block mb-2 text-secondary-600 dark:text-white">Total Units 6: *</label>
            <input type="text" value="<?php echo $val->totalunits6?>" class="w-full px-4 py-2 placeholder-secondary-400 border dark:bg-dark-card dark:border-secondary-800 rounded outline-none focus:border-primary-500 dark:focus:border-primary-500 focus:shadow" name="totalunits6" aria-label="Default select example">
        </div>
    </div>
    <div class="w-full">
        <div class="mb-4">
            <label class="inline-block mb-2 text-secondary-600 dark:text-white">Available Units 6: *</label>
            <input type="text" value="<?php echo $val->availableunits6?>" class="w-full px-4 py-2 placeholder-secondary-400 border dark:bg-dark-card dark:border-secondary-800 rounded outline-none focus:border-primary-500 dark:focus:border-primary-500 focus:shadow" name="availableunits6" aria-label="Default select example">
        </div>
    </div>
    <div class="w-full">
        <div class="mb-4">
            <label class="inline-block mb-2 text-secondary-600 dark:text-white">Parking Available 6: *</label>
            <input type="text" value="<?php echo $val->parking6?>" class="w-full px-4 py-2 placeholder-secondary-400 border dark:bg-dark-card dark:border-secondary-800 rounded outline-none focus:border-primary-500 dark:focus:border-primary-500 focus:shadow" name="parking6" aria-label="Default select example">
        </div>
    </div>
    <div class="w-full">
        <div class="mb-4">
            <label class="inline-block mb-2 text-secondary-600 dark:text-white">Prices From 6: *</label>
            <input type="text" value="<?php echo $val->price6?>" class="w-full px-4 py-2 placeholder-secondary-400 border dark:bg-dark-card dark:border-secondary-800 rounded outline-none focus:border-primary-500 dark:focus:border-primary-500 focus:shadow" name="price6" aria-label="Default select example">
        </div>
    </div>
</div>

<div class="grid lg:grid-cols-2 md:grid-cols-2 lg:gap-8 md:gap-8">
    <div class="w-full">
        <div class="mb-4">
            <label class="inline-block mb-2 text-secondary-600 dark:text-white">Building Name 7:
                *</label>
            <input type="text" value="<?php echo $val->buildingname7?>"  class="w-full px-4 py-2 placeholder-secondary-400 border dark:bg-dark-card dark:border-secondary-800 rounded outline-none focus:border-primary-500 dark:focus:border-primary-500 focus:shadow" name="buildingname7" aria-label="Default select example">
        </div>
    </div>
    <div class="w-full">
        <div class="mb-4">
            <label class="inline-block mb-2 text-secondary-600 dark:text-white ">Plan Photo 7:
                *</label>
            <div style="display: flex; height: 150px; overflow-y: auto;margin-bottom:10px">
                <?php $images=explode(',',$val->floorplan7); foreach($images as $image){  ?>
                <img id="blah3" style="height:100px; width:100px; padding-bottom:6px;margin-left:1%" src="<?php echo base_url()?>/uploads/products/<?=$image?>"/>
                <?php }?>
            </div>
            <input type="file" accept="image/png, image/gif, image/jpeg"  class="w-full px-4 py-2 placeholder-secondary-400 border dark:bg-dark-card dark:border-secondary-800 rounded outline-none focus:border-primary-500 dark:focus:border-primary-500 focus:shadow"  name="pimage7" >
            <input type="hidden" name="pimage7p" value="<?=$val->floorplan7?>"/>
        </div>
    </div>
</div>

<div class="grid lg:grid-cols-6 md:grid-cols-2 lg:gap-8 md:gap-8">
    <div class="w-full">
        <div class="mb-4">
            <label class="inline-block mb-2 text-secondary-600 dark:text-white">Total Area 7: *</label>
            <input type="text" value="<?php echo $val->totalarea7?>" class="w-full px-4 py-2 placeholder-secondary-400 border dark:bg-dark-card dark:border-secondary-800 rounded outline-none focus:border-primary-500 dark:focus:border-primary-500 focus:shadow" name="totalarea7" aria-label="Default select example">
        </div>
    </div>
    <div class="w-full">
        <div class="mb-4">
            <label class="inline-block mb-2 text-secondary-600 dark:text-white">Building No 7: *</label>
            <input type="text" value="<?php echo $val->building7?>" class="w-full px-4 py-2 placeholder-secondary-400 border dark:bg-dark-card dark:border-secondary-800 rounded outline-none focus:border-primary-500 dark:focus:border-primary-500 focus:shadow" name="building7" aria-label="Default select example">
        </div>
    </div>
    <!-- Add two more divs to create a total of four columns -->
    <div class="w-full">
        <div class="mb-4">
            <label class="inline-block mb-2 text-secondary-600 dark:text-white">Total Units 7: *</label>
            <input type="text" value="<?php echo $val->totalunits7?>" class="w-full px-4 py-2 placeholder-secondary-400 border dark:bg-dark-card dark:border-secondary-800 rounded outline-none focus:border-primary-500 dark:focus:border-primary-500 focus:shadow" name="totalunits7" aria-label="Default select example">
        </div>
    </div>
    <div class="w-full">
        <div class="mb-4">
            <label class="inline-block mb-2 text-secondary-600 dark:text-white">Available Units 7: *</label>
            <input type="text" value="<?php echo $val->availableunits7?>" class="w-full px-4 py-2 placeholder-secondary-400 border dark:bg-dark-card dark:border-secondary-800 rounded outline-none focus:border-primary-500 dark:focus:border-primary-500 focus:shadow" name="availableunits7" aria-label="Default select example">
        </div>
    </div>
    <div class="w-full">
        <div class="mb-4">
            <label class="inline-block mb-2 text-secondary-600 dark:text-white">Parking Available 7: *</label>
            <input type="text" value="<?php echo $val->parking7?>" class="w-full px-4 py-2 placeholder-secondary-400 border dark:bg-dark-card dark:border-secondary-800 rounded outline-none focus:border-primary-500 dark:focus:border-primary-500 focus:shadow" name="parking7" aria-label="Default select example">
        </div>
    </div>
    <div class="w-full">
        <div class="mb-4">
            <label class="inline-block mb-2 text-secondary-600 dark:text-white">Prices From 7: *</label>
            <input type="text" value="<?php echo $val->price7?>" class="w-full px-4 py-2 placeholder-secondary-400 border dark:bg-dark-card dark:border-secondary-800 rounded outline-none focus:border-primary-500 dark:focus:border-primary-500 focus:shadow" name="price7" aria-label="Default select example">
        </div>
    </div>
</div>
        
            
         <div class="grid lg:grid-cols-2 md:grid-cols-2 lg:gap-8 md:gap-8">
    <div class="w-full">
        <div class="mb-4">
            <label class="inline-block mb-2 text-secondary-600 dark:text-white">Building Name 8:
                *</label>
            <input type="text" value="<?php echo $val->buildingname8?>"  class="w-full px-4 py-2 placeholder-secondary-400 border dark:bg-dark-card dark:border-secondary-800 rounded outline-none focus:border-primary-500 dark:focus:border-primary-500 focus:shadow" name="buildingname8" aria-label="Default select example">
        </div>
    </div>
    <div class="w-full">
        <div class="mb-4">
            <label class="inline-block mb-2 text-secondary-600 dark:text-white ">Plan Photo 8:
                *</label>
            <div style="display: flex; height: 150px; overflow-y: auto;margin-bottom:10px">
                <?php $images=explode(',',$val->floorplan8); foreach($images as $image){  ?>
                <img id="blah3" style="height:100px; width:100px; padding-bottom:6px;margin-left:1%" src="<?php echo base_url()?>/uploads/products/<?=$image?>"/>
                <?php }?>
            </div>
            <input type="file" accept="image/png, image/gif, image/jpeg"  class="w-full px-4 py-2 placeholder-secondary-400 border dark:bg-dark-card dark:border-secondary-800 rounded outline-none focus:border-primary-500 dark:focus:border-primary-500 focus:shadow"  name="pimage8" >
            <input type="hidden" name="pimage8p" value="<?=$val->floorplan8?>"/>
        </div>
    </div>
</div>

<div class="grid lg:grid-cols-6 md:grid-cols-2 lg:gap-8 md:gap-8">
    <div class="w-full">
        <div class="mb-4">
            <label class="inline-block mb-2 text-secondary-600 dark:text-white">Total Area 8: *</label>
            <input type="text" value="<?php echo $val->totalarea8?>" class="w-full px-4 py-2 placeholder-secondary-400 border dark:bg-dark-card dark:border-secondary-800 rounded outline-none focus:border-primary-500 dark:focus:border-primary-500 focus:shadow" name="totalarea8" aria-label="Default select example">
        </div>
    </div>
    <div class="w-full">
        <div class="mb-4">
            <label class="inline-block mb-2 text-secondary-600 dark:text-white">Building No 8: *</label>
            <input type="text" value="<?php echo $val->building8?>" class="w-full px-4 py-2 placeholder-secondary-400 border dark:bg-dark-card dark:border-secondary-800 rounded outline-none focus:border-primary-500 dark:focus:border-primary-500 focus:shadow" name="building8" aria-label="Default select example">
        </div>
    </div>
    <!-- Add two more divs to create a total of four columns -->
    <div class="w-full">
        <div class="mb-4">
            <label class="inline-block mb-2 text-secondary-600 dark:text-white">Total Units 8: *</label>
            <input type="text" value="<?php echo $val->totalunits8?>" class="w-full px-4 py-2 placeholder-secondary-400 border dark:bg-dark-card dark:border-secondary-800 rounded outline-none focus:border-primary-500 dark:focus:border-primary-500 focus:shadow" name="totalunits8" aria-label="Default select example">
        </div>
    </div>
    <div class="w-full">
        <div class="mb-4">
            <label class="inline-block mb-2 text-secondary-600 dark:text-white">Available Units 8: *</label>
            <input type="text" value="<?php echo $val->availableunits8?>" class="w-full px-4 py-2 placeholder-secondary-400 border dark:bg-dark-card dark:border-secondary-800 rounded outline-none focus:border-primary-500 dark:focus:border-primary-500 focus:shadow" name="availableunits8" aria-label="Default select example">
        </div>
    </div>
    <div class="w-full">
        <div class="mb-4">
            <label class="inline-block mb-2 text-secondary-600 dark:text-white">Parking Available 8: *</label>
            <input type="text" value="<?php echo $val->parking8?>" class="w-full px-4 py-2 placeholder-secondary-400 border dark:bg-dark-card dark:border-secondary-800 rounded outline-none focus:border-primary-500 dark:focus:border-primary-500 focus:shadow" name="parking8" aria-label="Default select example">
        </div>
    </div>
    <div class="w-full">
        <div class="mb-4">
            <label class="inline-block mb-2 text-secondary-600 dark:text-white">Prices From 8: *</label>
            <input type="text" value="<?php echo $val->price8?>" class="w-full px-4 py-2 placeholder-secondary-400 border dark:bg-dark-card dark:border-secondary-800 rounded outline-none focus:border-primary-500 dark:focus:border-primary-500 focus:shadow" name="price8" aria-label="Default select example">
        </div>
    </div>
</div>


<div class="grid lg:grid-cols-2 md:grid-cols-2 lg:gap-8 md:gap-8">
    <div class="w-full">
        <div class="mb-4">
            <label class="inline-block mb-2 text-secondary-600 dark:text-white">Building Name 9:
                *</label>
            <input type="text" value="<?php echo $val->buildingname9?>"  class="w-full px-4 py-2 placeholder-secondary-400 border dark:bg-dark-card dark:border-secondary-800 rounded outline-none focus:border-primary-500 dark:focus:border-primary-500 focus:shadow" name="buildingname9" aria-label="Default select example">
        </div>
    </div>
    <div class="w-full">
        <div class="mb-4">
            <label class="inline-block mb-2 text-secondary-600 dark:text-white ">Plan Photo 9:
                *</label>
            <div style="display: flex; height: 150px; overflow-y: auto;margin-bottom:10px">
                <?php $images=explode(',',$val->floorplan9); foreach($images as $image){  ?>
                <img id="blah3" style="height:100px; width:100px; padding-bottom:6px;margin-left:1%" src="<?php echo base_url()?>/uploads/products/<?=$image?>"/>
                <?php }?>
            </div>
            <input type="file" accept="image/png, image/gif, image/jpeg"  class="w-full px-4 py-2 placeholder-secondary-400 border dark:bg-dark-card dark:border-secondary-800 rounded outline-none focus:border-primary-500 dark:focus:border-primary-500 focus:shadow"  name="pimage9" >
            <input type="hidden" name="pimage9p" value="<?=$val->floorplan9?>"/>
        </div>
    </div>
</div>

<div class="grid lg:grid-cols-6 md:grid-cols-2 lg:gap-8 md:gap-8">
    <div class="w-full">
        <div class="mb-4">
            <label class="inline-block mb-2 text-secondary-600 dark:text-white">Total Area 9: *</label>
            <input type="text" value="<?php echo $val->totalarea9?>" class="w-full px-4 py-2 placeholder-secondary-400 border dark:bg-dark-card dark:border-secondary-800 rounded outline-none focus:border-primary-500 dark:focus:border-primary-500 focus:shadow" name="totalarea9" aria-label="Default select example">
        </div>
    </div>
    <div class="w-full">
        <div class="mb-4">
            <label class="inline-block mb-2 text-secondary-600 dark:text-white">Building No 9: *</label>
            <input type="text" value="<?php echo $val->building9?>" class="w-full px-4 py-2 placeholder-secondary-400 border dark:bg-dark-card dark:border-secondary-800 rounded outline-none focus:border-primary-500 dark:focus:border-primary-500 focus:shadow" name="building9" aria-label="Default select example">
        </div>
    </div>
    <!-- Add two more divs to create a total of four columns -->
    <div class="w-full">
        <div class="mb-4">
            <label class="inline-block mb-2 text-secondary-600 dark:text-white">Total Units 9: *</label>
            <input type="text" value="<?php echo $val->totalunits9?>" class="w-full px-4 py-2 placeholder-secondary-400 border dark:bg-dark-card dark:border-secondary-800 rounded outline-none focus:border-primary-500 dark:focus:border-primary-500 focus:shadow" name="totalunits9" aria-label="Default select example">
        </div>
    </div>
    <div class="w-full">
        <div class="mb-4">
            <label class="inline-block mb-2 text-secondary-600 dark:text-white">Available Units 9: *</label>
            <input type="text" value="<?php echo $val->availableunits9?>" class="w-full px-4 py-2 placeholder-secondary-400 border dark:bg-dark-card dark:border-secondary-800 rounded outline-none focus:border-primary-500 dark:focus:border-primary-500 focus:shadow" name="availableunits9" aria-label="Default select example">
        </div>
    </div>
    <div class="w-full">
        <div class="mb-4">
            <label class="inline-block mb-2 text-secondary-600 dark:text-white">Parking Available 9: *</label>
            <input type="text" value="<?php echo $val->parking9?>" class="w-full px-4 py-2 placeholder-secondary-400 border dark:bg-dark-card dark:border-secondary-800 rounded outline-none focus:border-primary-500 dark:focus:border-primary-500 focus:shadow" name="parking9" aria-label="Default select example">
        </div>
    </div>
    <div class="w-full">
        <div class="mb-4">
            <label class="inline-block mb-2 text-secondary-600 dark:text-white">Prices From 9: *</label>
            <input type="text" value="<?php echo $val->price9?>" class="w-full px-4 py-2 placeholder-secondary-400 border dark:bg-dark-card dark:border-secondary-800 rounded outline-none focus:border-primary-500 dark:focus:border-primary-500 focus:shadow" name="price9" aria-label="Default select example">
        </div>
    </div>
</div>


<div class="grid lg:grid-cols-2 md:grid-cols-2 lg:gap-8 md:gap-8">
    <div class="w-full">
        <div class="mb-4">
            <label class="inline-block mb-2 text-secondary-600 dark:text-white">Building Name 10:
                *</label>
            <input type="text" value="<?php echo $val->buildingname10?>"  class="w-full px-4 py-2 placeholder-secondary-400 border dark:bg-dark-card dark:border-secondary-800 rounded outline-none focus:border-primary-500 dark:focus:border-primary-500 focus:shadow" name="buildingname10" aria-label="Default select example">
        </div>
    </div>
    <div class="w-full">
        <div class="mb-4">
            <label class="inline-block mb-2 text-secondary-600 dark:text-white ">Plan Photo 10:
                *</label>
            <div style="display: flex; height: 150px; overflow-y: auto;margin-bottom:10px">
                <?php $images=explode(',',$val->floorplan10); foreach($images as $image){  ?>
                <img id="blah3" style="height:100px; width:100px; padding-bottom:6px;margin-left:1%" src="<?php echo base_url()?>/uploads/products/<?=$image?>"/>
                <?php }?>
            </div>
            <input type="file" accept="image/png, image/gif, image/jpeg"  class="w-full px-4 py-2 placeholder-secondary-400 border dark:bg-dark-card dark:border-secondary-800 rounded outline-none focus:border-primary-500 dark:focus:border-primary-500 focus:shadow"  name="pimage10" >
            <input type="hidden" name="pimage10p" value="<?=$val->floorplan10?>"/>
        </div>
    </div>
</div>

<div class="grid lg:grid-cols-6 md:grid-cols-2 lg:gap-8 md:gap-8">
    <div class="w-full">
        <div class="mb-4">
            <label class="inline-block mb-2 text-secondary-600 dark:text-white">Total Area 10: *</label>
            <input type="text" value="<?php echo $val->totalarea10?>" class="w-full px-4 py-2 placeholder-secondary-400 border dark:bg-dark-card dark:border-secondary-800 rounded outline-none focus:border-primary-500 dark:focus:border-primary-500 focus:shadow" name="totalarea10" aria-label="Default select example">
        </div>
    </div>
    <div class="w-full">
        <div class="mb-4">
            <label class="inline-block mb-2 text-secondary-600 dark:text-white">Building No 10: *</label>
            <input type="text" value="<?php echo $val->building10?>" class="w-full px-4 py-2 placeholder-secondary-400 border dark:bg-dark-card dark:border-secondary-800 rounded outline-none focus:border-primary-500 dark:focus:border-primary-500 focus:shadow" name="building10" aria-label="Default select example">
        </div>
    </div>
    <!-- Add two more divs to create a total of four columns -->
    <div class="w-full">
        <div class="mb-4">
            <label class="inline-block mb-2 text-secondary-600 dark:text-white">Total Units 10: *</label>
            <input type="text" value="<?php echo $val->totalunits10?>" class="w-full px-4 py-2 placeholder-secondary-400 border dark:bg-dark-card dark:border-secondary-800 rounded outline-none focus:border-primary-500 dark:focus:border-primary-500 focus:shadow" name="totalunits10" aria-label="Default select example">
        </div>
    </div>
    <div class="w-full">
        <div class="mb-4">
            <label class="inline-block mb-2 text-secondary-600 dark:text-white">Available Units 10: *</label>
            <input type="text" value="<?php echo $val->availableunits10?>" class="w-full px-4 py-2 placeholder-secondary-400 border dark:bg-dark-card dark:border-secondary-800 rounded outline-none focus:border-primary-500 dark:focus:border-primary-500 focus:shadow" name="availableunits10" aria-label="Default select example">
        </div>
    </div>
    <div class="w-full">
        <div class="mb-4">
            <label class="inline-block mb-2 text-secondary-600 dark:text-white">Parking Available 10: *</label>
            <input type="text" value="<?php echo $val->parking10?>" class="w-full px-4 py-2 placeholder-secondary-400 border dark:bg-dark-card dark:border-secondary-800 rounded outline-none focus:border-primary-500 dark:focus:border-primary-500 focus:shadow" name="parking10" aria-label="Default select example">
        </div>
    </div>
    <div class="w-full">
        <div class="mb-4">
            <label class="inline-block mb-2 text-secondary-600 dark:text-white">Prices From 10: *</label>
            <input type="text" value="<?php echo $val->price10?>" class="w-full px-4 py-2 placeholder-secondary-400 border dark:bg-dark-card dark:border-secondary-800 rounded outline-none focus:border-primary-500 dark:focus:border-primary-500 focus:shadow" name="price10" aria-label="Default select example">
        </div>
    </div>
</div>


<div class="grid lg:grid-cols-2 md:grid-cols-2 lg:gap-8 md:gap-8">
    <div class="w-full">
        <div class="mb-4">
            <label class="inline-block mb-2 text-secondary-600 dark:text-white">Building Name 11:
                *</label>
            <input type="text" value="<?php echo $val->buildingname11?>"  class="w-full px-4 py-2 placeholder-secondary-400 border dark:bg-dark-card dark:border-secondary-800 rounded outline-none focus:border-primary-500 dark:focus:border-primary-500 focus:shadow" name="buildingname11" aria-label="Default select example">
        </div>
    </div>
    <div class="w-full">
        <div class="mb-4">
            <label class="inline-block mb-2 text-secondary-600 dark:text-white ">Plan Photo 11:
                *</label>
            <div style="display: flex; height: 150px; overflow-y: auto;margin-bottom:10px">
                <?php $images=explode(',',$val->floorplan11); foreach($images as $image){  ?>
                <img id="blah3" style="height:100px; width:100px; padding-bottom:6px;margin-left:1%" src="<?php echo base_url()?>/uploads/products/<?=$image?>"/>
                <?php }?>
            </div>
            <input type="file" accept="image/png, image/gif, image/jpeg"  class="w-full px-4 py-2 placeholder-secondary-400 border dark:bg-dark-card dark:border-secondary-800 rounded outline-none focus:border-primary-500 dark:focus:border-primary-500 focus:shadow"  name="pimage11" >
            <input type="hidden" name="pimage11p" value="<?=$val->floorplan11?>"/>
        </div>
    </div>
</div>

<div class="grid lg:grid-cols-6 md:grid-cols-2 lg:gap-8 md:gap-8">
    <div class="w-full">
        <div class="mb-4">
            <label class="inline-block mb-2 text-secondary-600 dark:text-white">Total Area 11: *</label>
            <input type="text" value="<?php echo $val->totalarea11?>" class="w-full px-4 py-2 placeholder-secondary-400 border dark:bg-dark-card dark:border-secondary-800 rounded outline-none focus:border-primary-500 dark:focus:border-primary-500 focus:shadow" name="totalarea11" aria-label="Default select example">
        </div>
    </div>
    <div class="w-full">
        <div class="mb-4">
            <label class="inline-block mb-2 text-secondary-600 dark:text-white">Building No 11: *</label>
            <input type="text" value="<?php echo $val->building11?>" class="w-full px-4 py-2 placeholder-secondary-400 border dark:bg-dark-card dark:border-secondary-800 rounded outline-none focus:border-primary-500 dark:focus:border-primary-500 focus:shadow" name="building11" aria-label="Default select example">
        </div>
    </div>
    <!-- Add two more divs to create a total of four columns -->
    <div class="w-full">
        <div class="mb-4">
            <label class="inline-block mb-2 text-secondary-600 dark:text-white">Total Units 11: *</label>
            <input type="text" value="<?php echo $val->totalunits11?>" class="w-full px-4 py-2 placeholder-secondary-400 border dark:bg-dark-card dark:border-secondary-800 rounded outline-none focus:border-primary-500 dark:focus:border-primary-500 focus:shadow" name="totalunits11" aria-label="Default select example">
        </div>
    </div>
    <div class="w-full">
        <div class="mb-4">
            <label class="inline-block mb-2 text-secondary-600 dark:text-white">Available Units 11: *</label>
            <input type="text" value="<?php echo $val->availableunits11?>" class="w-full px-4 py-2 placeholder-secondary-400 border dark:bg-dark-card dark:border-secondary-800 rounded outline-none focus:border-primary-500 dark:focus:border-primary-500 focus:shadow" name="availableunits11" aria-label="Default select example">
        </div>
    </div>
    <div class="w-full">
        <div class="mb-4">
            <label class="inline-block mb-2 text-secondary-600 dark:text-white">Parking Available 11: *</label>
            <input type="text" value="<?php echo $val->parking11?>" class="w-full px-4 py-2 placeholder-secondary-400 border dark:bg-dark-card dark:border-secondary-800 rounded outline-none focus:border-primary-500 dark:focus:border-primary-500 focus:shadow" name="parking11" aria-label="Default select example">
        </div>
    </div>
    <div class="w-full">
        <div class="mb-4">
            <label class="inline-block mb-2 text-secondary-600 dark:text-white">Prices From 11: *</label>
            <input type="text" value="<?php echo $val->price11?>" class="w-full px-4 py-2 placeholder-secondary-400 border dark:bg-dark-card dark:border-secondary-800 rounded outline-none focus:border-primary-500 dark:focus:border-primary-500 focus:shadow" name="price11" aria-label="Default select example">
        </div>
    </div>
</div>


<div class="grid lg:grid-cols-2 md:grid-cols-2 lg:gap-8 md:gap-8">
    <div class="w-full">
        <div class="mb-4">
            <label class="inline-block mb-2 text-secondary-600 dark:text-white">Building Name 12:
                *</label>
            <input type="text" value="<?php echo $val->buildingname12?>"  class="w-full px-4 py-2 placeholder-secondary-400 border dark:bg-dark-card dark:border-secondary-800 rounded outline-none focus:border-primary-500 dark:focus:border-primary-500 focus:shadow" name="buildingname12" aria-label="Default select example">
        </div>
    </div>
    <div class="w-full">
        <div class="mb-4">
            <label class="inline-block mb-2 text-secondary-600 dark:text-white ">Plan Photo 12:
                *</label>
            <div style="display: flex; height: 150px; overflow-y: auto;margin-bottom:10px">
                <?php $images=explode(',',$val->floorplan12); foreach($images as $image){  ?>
                <img id="blah3" style="height:100px; width:100px; padding-bottom:6px;margin-left:1%" src="<?php echo base_url()?>/uploads/products/<?=$image?>"/>
                <?php }?>
            </div>
            <input type="file" accept="image/png, image/gif, image/jpeg"  class="w-full px-4 py-2 placeholder-secondary-400 border dark:bg-dark-card dark:border-secondary-800 rounded outline-none focus:border-primary-500 dark:focus:border-primary-500 focus:shadow"  name="pimage12" >
            <input type="hidden" name="pimage12p" value="<?=$val->floorplan12?>"/>
        </div>
    </div>
</div>

<div class="grid lg:grid-cols-6 md:grid-cols-2 lg:gap-8 md:gap-8">
    <div class="w-full">
        <div class="mb-4">
            <label class="inline-block mb-2 text-secondary-600 dark:text-white">Total Area 12: *</label>
            <input type="text" value="<?php echo $val->totalarea12?>" class="w-full px-4 py-2 placeholder-secondary-400 border dark:bg-dark-card dark:border-secondary-800 rounded outline-none focus:border-primary-500 dark:focus:border-primary-500 focus:shadow" name="totalarea12" aria-label="Default select example">
        </div>
    </div>
    <div class="w-full">
        <div class="mb-4">
            <label class="inline-block mb-2 text-secondary-600 dark:text-white">Building No 12: *</label>
            <input type="text" value="<?php echo $val->building12?>" class="w-full px-4 py-2 placeholder-secondary-400 border dark:bg-dark-card dark:border-secondary-800 rounded outline-none focus:border-primary-500 dark:focus:border-primary-500 focus:shadow" name="building12" aria-label="Default select example">
        </div>
    </div>
    <!-- Add two more divs to create a total of four columns -->
    <div class="w-full">
        <div class="mb-4">
            <label class="inline-block mb-2 text-secondary-600 dark:text-white">Total Units 12: *</label>
            <input type="text" value="<?php echo $val->totalunits12?>" class="w-full px-4 py-2 placeholder-secondary-400 border dark:bg-dark-card dark:border-secondary-800 rounded outline-none focus:border-primary-500 dark:focus:border-primary-500 focus:shadow" name="totalunits12" aria-label="Default select example">
        </div>
    </div>
    <div class="w-full">
        <div class="mb-4">
            <label class="inline-block mb-2 text-secondary-600 dark:text-white">Available Units 12: *</label>
            <input type="text" value="<?php echo $val->availableunits12?>" class="w-full px-4 py-2 placeholder-secondary-400 border dark:bg-dark-card dark:border-secondary-800 rounded outline-none focus:border-primary-500 dark:focus:border-primary-500 focus:shadow" name="availableunits12" aria-label="Default select example">
        </div>
    </div>
    <div class="w-full">
        <div class="mb-4">
            <label class="inline-block mb-2 text-secondary-600 dark:text-white">Parking Available 12: *</label>
            <input type="text" value="<?php echo $val->parking12?>" class="w-full px-4 py-2 placeholder-secondary-400 border dark:bg-dark-card dark:border-secondary-800 rounded outline-none focus:border-primary-500 dark:focus:border-primary-500 focus:shadow" name="parking12" aria-label="Default select example">
        </div>
    </div>
    <div class="w-full">
        <div class="mb-4">
            <label class="inline-block mb-2 text-secondary-600 dark:text-white">Prices From 12: *</label>
            <input type="text" value="<?php echo $val->price12?>" class="w-full px-4 py-2 placeholder-secondary-400 border dark:bg-dark-card dark:border-secondary-800 rounded outline-none focus:border-primary-500 dark:focus:border-primary-500 focus:shadow" name="price12" aria-label="Default select example">
        </div>
    </div>
</div>


<div class="grid lg:grid-cols-2 md:grid-cols-2 lg:gap-8 md:gap-8">
    <div class="w-full">
        <div class="mb-4">
            <label class="inline-block mb-2 text-secondary-600 dark:text-white">Building Name 13:
                *</label>
            <input type="text" value="<?php echo $val->buildingname13?>"  class="w-full px-4 py-2 placeholder-secondary-400 border dark:bg-dark-card dark:border-secondary-800 rounded outline-none focus:border-primary-500 dark:focus:border-primary-500 focus:shadow" name="buildingname13" aria-label="Default select example">
        </div>
    </div>
    <div class="w-full">
        <div class="mb-4">
            <label class="inline-block mb-2 text-secondary-600 dark:text-white ">Plan Photo 13:
                *</label>
            <div style="display: flex; height: 150px; overflow-y: auto;margin-bottom:10px">
                <?php $images=explode(',',$val->floorplan13); foreach($images as $image){  ?>
                <img id="blah3" style="height:100px; width:100px; padding-bottom:6px;margin-left:1%" src="<?php echo base_url()?>/uploads/products/<?=$image?>"/>
                <?php }?>
            </div>
            <input type="file" accept="image/png, image/gif, image/jpeg"  class="w-full px-4 py-2 placeholder-secondary-400 border dark:bg-dark-card dark:border-secondary-800 rounded outline-none focus:border-primary-500 dark:focus:border-primary-500 focus:shadow"  name="pimage13" >
            <input type="hidden" name="pimage13p" value="<?=$val->floorplan13?>"/>
        </div>
    </div>
</div>

<div class="grid lg:grid-cols-6 md:grid-cols-2 lg:gap-8 md:gap-8">
    <div class="w-full">
        <div class="mb-4">
            <label class="inline-block mb-2 text-secondary-600 dark:text-white">Total Area 13: *</label>
            <input type="text" value="<?php echo $val->totalarea13?>" class="w-full px-4 py-2 placeholder-secondary-400 border dark:bg-dark-card dark:border-secondary-800 rounded outline-none focus:border-primary-500 dark:focus:border-primary-500 focus:shadow" name="totalarea13" aria-label="Default select example">
        </div>
    </div>
    <div class="w-full">
        <div class="mb-4">
            <label class="inline-block mb-2 text-secondary-600 dark:text-white">Building No 13: *</label>
            <input type="text" value="<?php echo $val->building13?>" class="w-full px-4 py-2 placeholder-secondary-400 border dark:bg-dark-card dark:border-secondary-800 rounded outline-none focus:border-primary-500 dark:focus:border-primary-500 focus:shadow" name="building13" aria-label="Default select example">
        </div>
    </div>
    <!-- Add two more divs to create a total of four columns -->
    <div class="w-full">
        <div class="mb-4">
            <label class="inline-block mb-2 text-secondary-600 dark:text-white">Total Units 13: *</label>
            <input type="text" value="<?php echo $val->totalunits13?>" class="w-full px-4 py-2 placeholder-secondary-400 border dark:bg-dark-card dark:border-secondary-800 rounded outline-none focus:border-primary-500 dark:focus:border-primary-500 focus:shadow" name="totalunits13" aria-label="Default select example">
        </div>
    </div>
    <div class="w-full">
        <div class="mb-4">
            <label class="inline-block mb-2 text-secondary-600 dark:text-white">Available Units 13: *</label>
            <input type="text" value="<?php echo $val->availableunits13?>" class="w-full px-4 py-2 placeholder-secondary-400 border dark:bg-dark-card dark:border-secondary-800 rounded outline-none focus:border-primary-500 dark:focus:border-primary-500 focus:shadow" name="availableunits13" aria-label="Default select example">
        </div>
    </div>
    <div class="w-full">
        <div class="mb-4">
            <label class="inline-block mb-2 text-secondary-600 dark:text-white">Parking Available 13: *</label>
            <input type="text" value="<?php echo $val->parking13?>" class="w-full px-4 py-2 placeholder-secondary-400 border dark:bg-dark-card dark:border-secondary-800 rounded outline-none focus:border-primary-500 dark:focus:border-primary-500 focus:shadow" name="parking13" aria-label="Default select example">
        </div>
    </div>
    <div class="w-full">
        <div class="mb-4">
            <label class="inline-block mb-2 text-secondary-600 dark:text-white">Prices From 13: *</label>
            <input type="text" value="<?php echo $val->price13?>" class="w-full px-4 py-2 placeholder-secondary-400 border dark:bg-dark-card dark:border-secondary-800 rounded outline-none focus:border-primary-500 dark:focus:border-primary-500 focus:shadow" name="price13" aria-label="Default select example">
        </div>
    </div>
</div>


<div class="grid lg:grid-cols-2 md:grid-cols-2 lg:gap-8 md:gap-8">
    <div class="w-full">
        <div class="mb-4">
            <label class="inline-block mb-2 text-secondary-600 dark:text-white">Building Name 14:
                *</label>
            <input type="text" value="<?php echo $val->buildingname14?>"  class="w-full px-4 py-2 placeholder-secondary-400 border dark:bg-dark-card dark:border-secondary-800 rounded outline-none focus:border-primary-500 dark:focus:border-primary-500 focus:shadow" name="buildingname14" aria-label="Default select example">
        </div>
    </div>
    <div class="w-full">
        <div class="mb-4">
            <label class="inline-block mb-2 text-secondary-600 dark:text-white ">Plan Photo 14:
                *</label>
            <div style="display: flex; height: 150px; overflow-y: auto;margin-bottom:10px">
                <?php $images=explode(',',$val->floorplan14); foreach($images as $image){  ?>
                <img id="blah3" style="height:100px; width:100px; padding-bottom:6px;margin-left:1%" src="<?php echo base_url()?>/uploads/products/<?=$image?>"/>
                <?php }?>
            </div>
            <input type="file" accept="image/png, image/gif, image/jpeg"  class="w-full px-4 py-2 placeholder-secondary-400 border dark:bg-dark-card dark:border-secondary-800 rounded outline-none focus:border-primary-500 dark:focus:border-primary-500 focus:shadow"  name="pimage14" >
            <input type="hidden" name="pimage14p" value="<?=$val->floorplan14?>"/>
        </div>
    </div>
</div>

<div class="grid lg:grid-cols-6 md:grid-cols-2 lg:gap-8 md:gap-8">
    <div class="w-full">
        <div class="mb-4">
            <label class="inline-block mb-2 text-secondary-600 dark:text-white">Total Area 14: *</label>
            <input type="text" value="<?php echo $val->totalarea14?>" class="w-full px-4 py-2 placeholder-secondary-400 border dark:bg-dark-card dark:border-secondary-800 rounded outline-none focus:border-primary-500 dark:focus:border-primary-500 focus:shadow" name="totalarea14" aria-label="Default select example">
        </div>
    </div>
    <div class="w-full">
        <div class="mb-4">
            <label class="inline-block mb-2 text-secondary-600 dark:text-white">Building No 14: *</label>
            <input type="text" value="<?php echo $val->building14?>" class="w-full px-4 py-2 placeholder-secondary-400 border dark:bg-dark-card dark:border-secondary-800 rounded outline-none focus:border-primary-500 dark:focus:border-primary-500 focus:shadow" name="building14" aria-label="Default select example">
        </div>
    </div>
    <!-- Add two more divs to create a total of four columns -->
    <div class="w-full">
        <div class="mb-4">
            <label class="inline-block mb-2 text-secondary-600 dark:text-white">Total Units 14: *</label>
            <input type="text" value="<?php echo $val->totalunits14?>" class="w-full px-4 py-2 placeholder-secondary-400 border dark:bg-dark-card dark:border-secondary-800 rounded outline-none focus:border-primary-500 dark:focus:border-primary-500 focus:shadow" name="totalunits14" aria-label="Default select example">
        </div>
    </div>
    <div class="w-full">
        <div class="mb-4">
            <label class="inline-block mb-2 text-secondary-600 dark:text-white">Available Units 14: *</label>
            <input type="text" value="<?php echo $val->availableunits14?>" class="w-full px-4 py-2 placeholder-secondary-400 border dark:bg-dark-card dark:border-secondary-800 rounded outline-none focus:border-primary-500 dark:focus:border-primary-500 focus:shadow" name="availableunits14" aria-label="Default select example">
        </div>
    </div>
    <div class="w-full">
        <div class="mb-4">
            <label class="inline-block mb-2 text-secondary-600 dark:text-white">Parking Available 14: *</label>
            <input type="text" value="<?php echo $val->parking14?>" class="w-full px-4 py-2 placeholder-secondary-400 border dark:bg-dark-card dark:border-secondary-800 rounded outline-none focus:border-primary-500 dark:focus:border-primary-500 focus:shadow" name="parking14" aria-label="Default select example">
        </div>
    </div>
    <div class="w-full">
        <div class="mb-4">
            <label class="inline-block mb-2 text-secondary-600 dark:text-white">Prices From 14: *</label>
            <input type="text" value="<?php echo $val->price14?>" class="w-full px-4 py-2 placeholder-secondary-400 border dark:bg-dark-card dark:border-secondary-800 rounded outline-none focus:border-primary-500 dark:focus:border-primary-500 focus:shadow" name="price14" aria-label="Default select example">
        </div>
    </div>
</div>


<div class="grid lg:grid-cols-2 md:grid-cols-2 lg:gap-8 md:gap-8">
    <div class="w-full">
        <div class="mb-4">
            <label class="inline-block mb-2 text-secondary-600 dark:text-white">Building Name 15:
                *</label>
            <input type="text" value="<?php echo $val->buildingname15?>"  class="w-full px-4 py-2 placeholder-secondary-400 border dark:bg-dark-card dark:border-secondary-800 rounded outline-none focus:border-primary-500 dark:focus:border-primary-500 focus:shadow" name="buildingname15" aria-label="Default select example">
        </div>
    </div>
    <div class="w-full">
        <div class="mb-4">
            <label class="inline-block mb-2 text-secondary-600 dark:text-white ">Plan Photo 15:
                *</label>
            <div style="display: flex; height: 150px; overflow-y: auto;margin-bottom:10px">
                <?php $images=explode(',',$val->floorplan15); foreach($images as $image){  ?>
                <img id="blah3" style="height:100px; width:100px; padding-bottom:6px;margin-left:1%" src="<?php echo base_url()?>/uploads/products/<?=$image?>"/>
                <?php }?>
            </div>
            <input type="file" accept="image/png, image/gif, image/jpeg"  class="w-full px-4 py-2 placeholder-secondary-400 border dark:bg-dark-card dark:border-secondary-800 rounded outline-none focus:border-primary-500 dark:focus:border-primary-500 focus:shadow"  name="pimage15" >
            <input type="hidden" name="pimage15p" value="<?=$val->floorplan15?>"/>
        </div>
    </div>
</div>

<div class="grid lg:grid-cols-6 md:grid-cols-2 lg:gap-8 md:gap-8">
    <div class="w-full">
        <div class="mb-4">
            <label class="inline-block mb-2 text-secondary-600 dark:text-white">Total Area 15: *</label>
            <input type="text" value="<?php echo $val->totalarea15?>" class="w-full px-4 py-2 placeholder-secondary-400 border dark:bg-dark-card dark:border-secondary-800 rounded outline-none focus:border-primary-500 dark:focus:border-primary-500 focus:shadow" name="totalarea15" aria-label="Default select example">
        </div>
    </div>
    <div class="w-full">
        <div class="mb-4">
            <label class="inline-block mb-2 text-secondary-600 dark:text-white">Building No 15: *</label>
            <input type="text" value="<?php echo $val->building15?>" class="w-full px-4 py-2 placeholder-secondary-400 border dark:bg-dark-card dark:border-secondary-800 rounded outline-none focus:border-primary-500 dark:focus:border-primary-500 focus:shadow" name="building15" aria-label="Default select example">
        </div>
    </div>
    <!-- Add two more divs to create a total of four columns -->
    <div class="w-full">
        <div class="mb-4">
            <label class="inline-block mb-2 text-secondary-600 dark:text-white">Total Units 15: *</label>
            <input type="text" value="<?php echo $val->totalunits15?>" class="w-full px-4 py-2 placeholder-secondary-400 border dark:bg-dark-card dark:border-secondary-800 rounded outline-none focus:border-primary-500 dark:focus:border-primary-500 focus:shadow" name="totalunits15" aria-label="Default select example">
        </div>
    </div>
    <div class="w-full">
        <div class="mb-4">
            <label class="inline-block mb-2 text-secondary-600 dark:text-white">Available Units 15: *</label>
            <input type="text" value="<?php echo $val->availableunits15?>" class="w-full px-4 py-2 placeholder-secondary-400 border dark:bg-dark-card dark:border-secondary-800 rounded outline-none focus:border-primary-500 dark:focus:border-primary-500 focus:shadow" name="availableunits15" aria-label="Default select example">
        </div>
    </div>
    <div class="w-full">
        <div class="mb-4">
            <label class="inline-block mb-2 text-secondary-600 dark:text-white">Parking Available 15: *</label>
            <input type="text" value="<?php echo $val->parking15?>" class="w-full px-4 py-2 placeholder-secondary-400 border dark:bg-dark-card dark:border-secondary-800 rounded outline-none focus:border-primary-500 dark:focus:border-primary-500 focus:shadow" name="parking15" aria-label="Default select example">
        </div>
    </div>
    <div class="w-full">
        <div class="mb-4">
            <label class="inline-block mb-2 text-secondary-600 dark:text-white">Prices From 15: *</label>
            <input type="text" value="<?php echo $val->price15?>" class="w-full px-4 py-2 placeholder-secondary-400 border dark:bg-dark-card dark:border-secondary-800 rounded outline-none focus:border-primary-500 dark:focus:border-primary-500 focus:shadow" name="price15" aria-label="Default select example">
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






<script>
     document.addEventListener('DOMContentLoaded', function () {
        var textareas = document.querySelectorAll('textarea.ckeditor');

        textareas.forEach(function (textarea) {
            CKEDITOR.replace(textarea);
        });
    });
</script>

       

<?php include('templates/footer.php');?>



