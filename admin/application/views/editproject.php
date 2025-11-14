
<?php include('templates/header.php');?>
<style>
    .deleteblah {
        display:none;
    }
    .blah3:hover .deleteblah {
        display: flex;
    align-items: center;
    justify-content: center;
        height:100px; width:100px;position:absolute;top:0px;left:0px;
        background: #00000070;
    }
</style>

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
                <img class="img-fluid w-100" styl="width:100%" src="<?php echo base_url()?>assets/images/hintpicks/1.jpg"/>
            <div class="mt-3" style="color:red;text-align:center"><?php echo validation_errors(); ?></div>
              <p style="color:green"><?= $this->session->flashdata('success_msg');?></p>
              
              <?php

                       foreach($vals as $val){?>
                          <form action="" method="post" enctype="multipart/form-data" id="myform">
                            
        <div class="grid lg:grid-cols-3 md:grid-cols-3 lg:gap-8 md:gap-8">
                    <div class="w-full">
                        
                            <div class="mb-4">
                                <label class="inline-block mb-2 text-secondary-600 dark:text-white">Project Name:
                                    *</label>
                             <input type="text" value="<?php echo $val->name?>"  class="w-full px-4 py-2 placeholder-secondary-400 border dark:bg-dark-card dark:border-secondary-800 rounded outline-none focus:border-primary-500 dark:focus:border-primary-500 focus:shadow" name="name" aria-label="Default select example">
                       
                            </div>
                        
                    </div>
                    <div class="w-full">
                    
                            <div class="mb-4">
                                
                                <label class="inline-block mb-2 text-secondary-600 dark:text-white ">Banner Tag Line:
                                    </label>
                                    
              
                                            <input type="text" value="<?=$val->location?>"   class="w-full px-4 py-2 placeholder-secondary-400 border dark:bg-dark-card dark:border-secondary-800 rounded outline-none focus:border-primary-500 dark:focus:border-primary-500 focus:shadow" name="location" >
        
                                </div>
                        
                    </div>
                    <div class="w-full">
                        
                            <div class="mb-4">
                                <label class="inline-block mb-2 text-secondary-600 dark:text-white ">Banner Image (1920px*685px):
                                    </label>
              <div style="display:flex">
                  <?php if($val->retail3dview){?>
                                <a href="<?php echo base_url()?>/uploads/products/<?=$val->retail3dview?>" target="_blank" style="color:green">View File </a>
              <?php } else{ ?>
              <p style="color:red">No File Uploaded</p>
              <?php } ?>
              </div>
                                            <input type="file"   class="w-full px-4 py-2 placeholder-secondary-400 border dark:bg-dark-card dark:border-secondary-800 rounded outline-none focus:border-primary-500 dark:focus:border-primary-500 focus:shadow" name="retail3dview" >
                    <input type="hidden" name="retail3dview1" value="<?=$val->retail3dview?>"/>
                                </div>
                        
                    </div>
                    
                </div>
                
                <hr class="mb-5 " style="height:20px;background-color: rgb(0 155 222);"/>
                <img class="img-fluid w-100" styl="width:100%" src="<?php echo base_url()?>assets/images/hintpicks/2.jpg"/>
                   <div class="grid lg:grid-cols-2 md:grid-cols-2 lg:gap-8 md:gap-8 mt-3">
                    
                    <div class="w-full">
                    
                            <div class="mb-4">
                                
                                <label class="inline-block mb-2 text-secondary-600 dark:text-white ">About Back Image (470px*711px) :
                                    </label>
              <div style="display:flex">
                  <?php if($val->floorplansretail){?>
                                <a href="<?php echo base_url()?>/uploads/products/<?=$val->floorplansretail?>" target="_blank" style="color:green">View File </a>
              <?php } else{ ?>
              <p style="color:red">No File Uploaded</p>
              <?php } ?>
              </div>
                                            <input type="file"   class="w-full px-4 py-2 placeholder-secondary-400 border dark:bg-dark-card dark:border-secondary-800 rounded outline-none focus:border-primary-500 dark:focus:border-primary-500 focus:shadow" name="floorplansretail" >
                    <input type="hidden" name="floorplansretail1" value="<?=$val->floorplansretail?>"/>
                                </div>
                        
                    </div>
                    
                    <div class="w-full">
                    
                            <div class="mb-4">
                                
                                <label class="inline-block mb-2 text-secondary-600 dark:text-white ">About Front Image (353px*419px):
                                    </label>
              <div style="display:flex">
                  <?php if($val->floorplansoffice){?>
                                <a href="<?php echo base_url()?>/uploads/products/<?=$val->floorplansoffice?>" target="_blank" style="color:green">View File </a>
              <?php } else{ ?>
              <p style="color:red">No File Uploaded</p>
              <?php } ?>
              </div>
                                            <input type="file"   class="w-full px-4 py-2 placeholder-secondary-400 border dark:bg-dark-card dark:border-secondary-800 rounded outline-none focus:border-primary-500 dark:focus:border-primary-500 focus:shadow" name="floorplansoffice" >
                    <input type="hidden" name="floorplansoffice1" value="<?=$val->floorplansoffice?>"/>
                                </div>
                        
                    </div>
                </div>
                

                
                 <div class="grid lg:grid-cols-2 md:grid-cols-2 lg:gap-8 md:gap-8">
                    <div class="w-full">
                        
                            <div class="mb-4">
                                <label class="inline-block mb-2 text-secondary-600 dark:text-white">About Tag Line:
                                    *</label>
                             <input type="text" value="<?php echo $val->abouttag?>"  class="w-full px-4 py-2 placeholder-secondary-400 border dark:bg-dark-card dark:border-secondary-800 rounded outline-none focus:border-primary-500 dark:focus:border-primary-500 focus:shadow" name="abouttag" aria-label="Default select example">
                       
                            </div>
                        
                    </div>
                    <div class="w-full">
                    
                        <div class="mb-4">
                                <label class="inline-block mb-2 text-secondary-600 dark:text-white">About Heading:
                                    *</label>
                             <input type="text" value="<?php echo $val->aboutheading?>"  class="w-full px-4 py-2 placeholder-secondary-400 border dark:bg-dark-card dark:border-secondary-800 rounded outline-none focus:border-primary-500 dark:focus:border-primary-500 focus:shadow" name="aboutheading" aria-label="Default select example">
                       
                            </div>
                        
                    </div>
                </div>
                
                <div class="grid lg:grid-cols-1 md:grid-cols-1 lg:gap-8 md:gap-8">
                    <div class="w-full">
                        
                            <div class="mb-4">
                                <label class="inline-block mb-2 text-secondary-600 dark:text-white">About Content:
                                    *</label>
                       <textarea rows="10"  class="ckeditor w-full px-4 py-2 placeholder-secondary-400 border dark:bg-dark-card dark:border-secondary-800 rounded outline-none focus:border-primary-500 dark:focus:border-primary-500 focus:shadow" name="highlights"><?php echo $val->highlights?></textarea>
                            </div>
                        
                    </div>
                    <input type="hidden" name="summary" value="">
                            
                </div>
                
                
                  <div class="grid lg:grid-cols-4 md:grid-cols-2 lg:gap-8 md:gap-8">
    <div class="w-full">
        <div class="mb-4">
            <label class="inline-block mb-2 text-secondary-600 dark:text-white">SFT PROJECT SIZE: *</label>
            <input type="text" value="<?php echo $val->projectsize?>" class="w-full px-4 py-2 placeholder-secondary-400 border dark:bg-dark-card dark:border-secondary-800 rounded outline-none focus:border-primary-500 dark:focus:border-primary-500 focus:shadow" name="projectsize" aria-label="Default select example">
        </div>
    </div>
    <div class="w-full">
        <div class="mb-4">
            <label class="inline-block mb-2 text-secondary-600 dark:text-white">ACRES: *</label>
            <input type="text" value="<?php echo $val->acres?>" class="w-full px-4 py-2 placeholder-secondary-400 border dark:bg-dark-card dark:border-secondary-800 rounded outline-none focus:border-primary-500 dark:focus:border-primary-500 focus:shadow" name="acres" aria-label="Default select example">
        </div>
    </div>
    <!-- Add two more divs to create a total of four columns -->
    <div class="w-full">
       <div class="mb-4">
            <label class="inline-block mb-2 text-secondary-600 dark:text-white">TOTAL UNITS: *</label>
            <input type="text" value="<?php echo $val->totalunits?>" class="w-full px-4 py-2 placeholder-secondary-400 border dark:bg-dark-card dark:border-secondary-800 rounded outline-none focus:border-primary-500 dark:focus:border-primary-500 focus:shadow" name="totalunits" aria-label="Default select example">
        </div>
    </div>
    <div class="w-full">
        <div class="mb-4">
            <label class="inline-block mb-2 text-secondary-600 dark:text-white">AVAILABLE UNITS: *</label>
            <input type="text" value="<?php echo $val->availableunits?>" class="w-full px-4 py-2 placeholder-secondary-400 border dark:bg-dark-card dark:border-secondary-800 rounded outline-none focus:border-primary-500 dark:focus:border-primary-500 focus:shadow" name="availableunits" aria-label="Default select example">
        </div>
    </div>
</div>

                
                <hr class="mb-5 " style="height:20px;background-color: rgb(0 155 222);"/>
                <img class="img-fluid w-100" styl="width:100%" src="<?php echo base_url()?>assets/images/hintpicks/3.jpg"/>

                
                  <div class="grid lg:grid-cols-2 md:grid-cols-2 lg:gap-8 md:gap-8 mt-3">
                    <div class="w-full">
                        
                            <div class="mb-4">
                                <label class="inline-block mb-2 text-secondary-600 dark:text-white">Project Highlights Tag Line:
                                    *</label>
                             <input type="text" value="<?php echo $val->projecttag?>"  class="w-full px-4 py-2 placeholder-secondary-400 border dark:bg-dark-card dark:border-secondary-800 rounded outline-none focus:border-primary-500 dark:focus:border-primary-500 focus:shadow" name="projecttag" aria-label="Default select example">
                       
                            </div>
                        
                    </div>
                    <div class="w-full">
                    
                        <div class="mb-4">
                                <label class="inline-block mb-2 text-secondary-600 dark:text-white">Project Highlights Heading:
                                    *</label>
                             <input type="text" value="<?php echo $val->projectheading?>"  class="w-full px-4 py-2 placeholder-secondary-400 border dark:bg-dark-card dark:border-secondary-800 rounded outline-none focus:border-primary-500 dark:focus:border-primary-500 focus:shadow" name="projectheading" aria-label="Default select example">
                       
                            </div>
                        
                    </div>
                </div>
                
                                <div class="grid lg:grid-cols-1 md:grid-cols-1 lg:gap-8 md:gap-8">

                    <div class="w-full">
                    
                            <div class="mb-4">
                                <label class="inline-block mb-2 text-secondary-600 dark:text-white">Project Highlights Content:
                                    *</label>
                           <textarea class="ckeditor w-full px-4 py-2 placeholder-secondary-400 border dark:bg-dark-card dark:border-secondary-800 rounded outline-none focus:border-primary-500 dark:focus:border-primary-500 focus:shadow" name="facts" id="editor">
     
<?=$val->facts?>
                               </textarea>
     </div>
                        
                    </div>
                </div>
                
                
                <div class="grid lg:grid-cols-2 md:grid-cols-2 lg:gap-8 md:gap-8">
                    <div class="w-full">
                        
                            <div class="mb-4">
                                <label class="inline-block mb-2 text-secondary-600 dark:text-white">Total Building Size Heading:
                                    *</label>
                             <input type="text" value="<?php echo $val->buildingsizeheading?>"  class="w-full px-4 py-2 placeholder-secondary-400 border dark:bg-dark-card dark:border-secondary-800 rounded outline-none focus:border-primary-500 dark:focus:border-primary-500 focus:shadow" name="buildingsizeheading" aria-label="Default select example">
                       
                            </div>
                        
                    </div>
                    <div class="w-full">
                    
                        <div class="mb-4">
                                <label class="inline-block mb-2 text-secondary-600 dark:text-white">Typical Floor Size Heading:
                                    *</label>
                             <input type="text" value="<?php echo $val->floorsizeheading?>"  class="w-full px-4 py-2 placeholder-secondary-400 border dark:bg-dark-card dark:border-secondary-800 rounded outline-none focus:border-primary-500 dark:focus:border-primary-500 focus:shadow" name="floorsizeheading" aria-label="Default select example">
                       
                            </div>
                        
                    </div>
                </div> 
                
                <div class="grid lg:grid-cols-2 md:grid-cols-2 lg:gap-8 md:gap-8">
                    <div class="w-full">
                        
                            <div class="mb-4">
                                <label class="inline-block mb-2 text-secondary-600 dark:text-white">Total Building Size:
                                    *</label>
                             <input type="text" value="<?php echo $val->buildingsize?>"  class="w-full px-4 py-2 placeholder-secondary-400 border dark:bg-dark-card dark:border-secondary-800 rounded outline-none focus:border-primary-500 dark:focus:border-primary-500 focus:shadow" name="buildingsize" aria-label="Default select example">
                       
                            </div>
                        
                    </div>
                    <div class="w-full">
                    
                        <div class="mb-4">
                                <label class="inline-block mb-2 text-secondary-600 dark:text-white">Typical Floor Size:
                                    *</label>
                             <input type="text" value="<?php echo $val->floorsize?>"  class="w-full px-4 py-2 placeholder-secondary-400 border dark:bg-dark-card dark:border-secondary-800 rounded outline-none focus:border-primary-500 dark:focus:border-primary-500 focus:shadow" name="floorsize" aria-label="Default select example">
                       
                            </div>
                        
                    </div>
                </div>                
                
                
                     <div class="grid lg:grid-cols-2 md:grid-cols-2 lg:gap-8 md:gap-8">
                    <div class="w-full">
                        
                            <div class="mb-4">
                                <label class="inline-block mb-2 text-secondary-600 dark:text-white">Traffic Heading:
                                    *</label>
                             <input type="text" value="<?php echo $val->ptrafficheading?>"  class="w-full px-4 py-2 placeholder-secondary-400 border dark:bg-dark-card dark:border-secondary-800 rounded outline-none focus:border-primary-500 dark:focus:border-primary-500 focus:shadow" name="ptrafficheading" aria-label="Default select example">
                       
                            </div>
                        
                    </div>
                    <div class="w-full">
                    
                        <div class="mb-4">
                                <label class="inline-block mb-2 text-secondary-600 dark:text-white">Utilities Heading:
                                    *</label>
                             <input type="text" value="<?php echo $val->putilitiesheading?>"  class="w-full px-4 py-2 placeholder-secondary-400 border dark:bg-dark-card dark:border-secondary-800 rounded outline-none focus:border-primary-500 dark:focus:border-primary-500 focus:shadow" name="putilitiesheading" aria-label="Default select example">
                       
                            </div>
                        
                    </div>
                </div>
                
                
                
                <div class="grid lg:grid-cols-2 md:grid-cols-2 lg:gap-8 md:gap-8">
                    <div class="w-full">
                        
                            <div class="mb-4">
                                <label class="inline-block mb-2 text-secondary-600 dark:text-white">Access Heading:
                                    *</label>
                             <input type="text" value="<?php echo $val->paccessheading?>"  class="w-full px-4 py-2 placeholder-secondary-400 border dark:bg-dark-card dark:border-secondary-800 rounded outline-none focus:border-primary-500 dark:focus:border-primary-500 focus:shadow" name="paccessheading" aria-label="Default select example">
                       
                            </div>
                        
                    </div>
                    <div class="w-full">
                    
                        <div class="mb-4">
                                <label class="inline-block mb-2 text-secondary-600 dark:text-white">Location Heading:
                                    *</label>
                             <input type="text" value="<?php echo $val->plocationheading?>"  class="w-full px-4 py-2 placeholder-secondary-400 border dark:bg-dark-card dark:border-secondary-800 rounded outline-none focus:border-primary-500 dark:focus:border-primary-500 focus:shadow" name="plocationheading" aria-label="Default select example">
                       
                            </div>
                        
                    </div>
                </div>
                
                
                
                <div class="grid lg:grid-cols-2 md:grid-cols-2 lg:gap-8 md:gap-8">
                    <div class="w-full">
                        
                            <div class="mb-4">
                                <label class="inline-block mb-2 text-secondary-600 dark:text-white">Traffic:
                                    *</label>
                             <input type="text" value="<?php echo $val->ptraffic?>"  class="w-full px-4 py-2 placeholder-secondary-400 border dark:bg-dark-card dark:border-secondary-800 rounded outline-none focus:border-primary-500 dark:focus:border-primary-500 focus:shadow" name="ptraffic" aria-label="Default select example">
                       
                            </div>
                        
                    </div>
                    <div class="w-full">
                    
                        <div class="mb-4">
                                <label class="inline-block mb-2 text-secondary-600 dark:text-white">Utilities:
                                    *</label>
                             <input type="text" value="<?php echo $val->putilities?>"  class="w-full px-4 py-2 placeholder-secondary-400 border dark:bg-dark-card dark:border-secondary-800 rounded outline-none focus:border-primary-500 dark:focus:border-primary-500 focus:shadow" name="putilities" aria-label="Default select example">
                       
                            </div>
                        
                    </div>
                </div>
                
                
                
                <div class="grid lg:grid-cols-2 md:grid-cols-2 lg:gap-8 md:gap-8">
                    <div class="w-full">
                        
                            <div class="mb-4">
                                <label class="inline-block mb-2 text-secondary-600 dark:text-white">Access:
                                    *</label>
                             <input type="text" value="<?php echo $val->paccess?>"  class="w-full px-4 py-2 placeholder-secondary-400 border dark:bg-dark-card dark:border-secondary-800 rounded outline-none focus:border-primary-500 dark:focus:border-primary-500 focus:shadow" name="paccess" aria-label="Default select example">
                       
                            </div>
                        
                    </div>
                    <div class="w-full">
                    
                        <div class="mb-4">
                                <label class="inline-block mb-2 text-secondary-600 dark:text-white">Location:
                                    *</label>
                             <input type="text" value="<?php echo $val->plocation?>"  class="w-full px-4 py-2 placeholder-secondary-400 border dark:bg-dark-card dark:border-secondary-800 rounded outline-none focus:border-primary-500 dark:focus:border-primary-500 focus:shadow" name="plocation" aria-label="Default select example">
                       
                            </div>
                        
                    </div>
                </div>
                
                
                

                
                <hr class="mb-5 " style="height:20px;background-color: rgb(0 155 222);"/>
                <img class="img-fluid w-100" styl="width:100%" src="<?php echo base_url()?>assets/images/hintpicks/4.jpg"/>
                  <div class="grid lg:grid-cols-3 md:grid-cols-3 lg:gap-8 md:gap-8 mt-3">
                    <div class="w-full">
                        
                            <div class="mb-4">
                                <label class="inline-block mb-2 text-secondary-600 dark:text-white">Gallery Heading:
                                    *</label>
                             <input type="text" value="<?php echo $val->galleryheading?>"  class="w-full px-4 py-2 placeholder-secondary-400 border dark:bg-dark-card dark:border-secondary-800 rounded outline-none focus:border-primary-500 dark:focus:border-primary-500 focus:shadow" name="galleryheading" aria-label="Default select example">
                       
                            </div>
                        
                    </div>
                    <div class="w-full">
                    
                        <div class="mb-4">
                                <label class="inline-block mb-2 text-secondary-600 dark:text-white">Gallery Behind Text:
                                    *</label>
                             <input type="text" value="<?php echo $val->gallerybehind?>"  class="w-full px-4 py-2 placeholder-secondary-400 border dark:bg-dark-card dark:border-secondary-800 rounded outline-none focus:border-primary-500 dark:focus:border-primary-500 focus:shadow" name="gallerybehind" aria-label="Default select example">
                       
                            </div>
                        
                    </div>
                    <div class="w-full">
                    
                        <div class="mb-4">
                                <label class="inline-block mb-2 text-secondary-600 dark:text-white">Gallery Sub Heading:
                                    *</label>
                             <input type="text" value="<?php echo $val->gallerysubheading?>"  class="w-full px-4 py-2 placeholder-secondary-400 border dark:bg-dark-card dark:border-secondary-800 rounded outline-none focus:border-primary-500 dark:focus:border-primary-500 focus:shadow" name="gallerysubheading" aria-label="Default select example">
                       
                            </div>
                        
                    </div>
                </div>
                
                
                
                 <div class="grid lg:grid-cols-2 md:grid-cols-2 lg:gap-8 md:gap-8">
                     <div class="w-full">
                        
                            <div class="mb-4">
                                <label class="inline-block mb-2 text-secondary-600 dark:text-white">Gallery Content:
                                    *</label>
                       <textarea  rows="10" class="ckeditor w-full px-4 py-2 placeholder-secondary-400 border dark:bg-dark-card dark:border-secondary-800 rounded outline-none focus:border-primary-500 dark:focus:border-primary-500 focus:shadow" name="amenities"><?php echo $val->amenities?></textarea>
                            </div>
                        
                    </div>
                    <div class="w-full">
                    
                            <div class="mb-4">
                                <label class="inline-block mb-2 text-secondary-600 dark:text-white ">Photos (597px*1000px):
                                    *</label>
              <div style="display: flex; height: 150px; overflow-y: auto;margin-bottom:10px">
                                             <?php $images=explode(',',$val->photos); foreach($images as $image){  ?>
                                             <div class="blah3" id="blah3" style="width:100px;position:relative;margin-left:1%;">
                                <img style="height:100px; width:100px;max-width:unset; margin-bottom:6px;" src="<?php echo base_url()?>/uploads/products/<?=$image?>"/>
                                <!--<div class="deleteblah text-center" >-->
                                <!--    <a class="" href="">-->
                                <!--        <svg width="24px" height="24px" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg"> <path d="M3 6H5H21" stroke="white" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"/><path d="M8 6V4C8 3.46957 8.21071 2.96086 8.58579 2.58579C8.96086 2.21071 9.46957 2 10 2H14C14.5304 2 15.0391 2.21071 15.4142 2.58579C15.7893 2.96086 16 3.46957 16 4V6M19 6V20C19 20.5304 18.7893 21.0391 18.4142 21.4142C18.0391 21.7893 17.5304 22 17 22H7C6.46957 22 5.96086 21.7893 5.58579 21.4142C5.21071 21.0391 5 20.5304 5 20V6H19Z" stroke="white" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"/>  <path d="M10 11V17" stroke="white" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"/> <path d="M14 11V17" stroke="white" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"/>-->
                                <!--    </svg></a>-->
                                <!--</div>-->
                                </div>
                                
              <?php }?>
              </div>
                                            <input type="file" accept="image/png, image/gif, image/jpeg" id="myfile" class="w-full px-4 py-2 placeholder-secondary-400 border dark:bg-dark-card dark:border-secondary-800 rounded outline-none focus:border-primary-500 dark:focus:border-primary-500 focus:shadow" multiple name="pimage[]" >
                    <input type="hidden" name="pimage1p" value="<?=$val->photos?>"/>
                                </div>
                        
                    </div>
                    
                    
                </div>
                
                
                
                 <div class="grid lg:grid-cols-3 md:grid-cols-3 lg:gap-8 md:gap-8">
                    <div class="w-full">
                        
                            <div class="mb-4">
                                <label class="inline-block mb-2 text-secondary-600 dark:text-white">Youtube Video 1:
                                    *</label>
                             <input type="text" value="<?php echo $val->y1?>"  class="w-full px-4 py-2 placeholder-secondary-400 border dark:bg-dark-card dark:border-secondary-800 rounded outline-none focus:border-primary-500 dark:focus:border-primary-500 focus:shadow" name="y1" aria-label="Default select example">
                       
                            </div>
                        
                    </div>
                    
                     <div class="w-full">
                        
                            <div class="mb-4">
                                <label class="inline-block mb-2 text-secondary-600 dark:text-white">Youtube Video 2:
                                    *</label>
                             <input type="text" value="<?php echo $val->y2?>"  class="w-full px-4 py-2 placeholder-secondary-400 border dark:bg-dark-card dark:border-secondary-800 rounded outline-none focus:border-primary-500 dark:focus:border-primary-500 focus:shadow" name="y2" aria-label="Default select example">
                       
                            </div>
                        
                    </div>
                    
                     <div class="w-full">
                        
                            <div class="mb-4">
                                <label class="inline-block mb-2 text-secondary-600 dark:text-white">Youtube Video 3:
                                    *</label>
                             <input type="text" value="<?php echo $val->y3?>"  class="w-full px-4 py-2 placeholder-secondary-400 border dark:bg-dark-card dark:border-secondary-800 rounded outline-none focus:border-primary-500 dark:focus:border-primary-500 focus:shadow" name="y3" aria-label="Default select example">
                       
                            </div>
                        
                    </div>
                   
                 
                    
                </div>
                
                 <div class="grid lg:grid-cols-3 md:grid-cols-3 lg:gap-8 md:gap-8">
                    <div class="w-full">
                        
                            <div class="mb-4">
                                <label class="inline-block mb-2 text-secondary-600 dark:text-white">Youtube Video 4:
                                    *</label>
                             <input type="text" value="<?php echo $val->y4?>"  class="w-full px-4 py-2 placeholder-secondary-400 border dark:bg-dark-card dark:border-secondary-800 rounded outline-none focus:border-primary-500 dark:focus:border-primary-500 focus:shadow" name="y4" aria-label="Default select example">
                       
                            </div>
                        
                    </div>
                    
                     <div class="w-full">
                        
                            <div class="mb-4">
                                <label class="inline-block mb-2 text-secondary-600 dark:text-white">Youtube Video 5:
                                    *</label>
                             <input type="text" value="<?php echo $val->y5?>"  class="w-full px-4 py-2 placeholder-secondary-400 border dark:bg-dark-card dark:border-secondary-800 rounded outline-none focus:border-primary-500 dark:focus:border-primary-500 focus:shadow" name="y5" aria-label="Default select example">
                       
                            </div>
                        
                    </div>
                    
                     <div class="w-full">
                        
                            <div class="mb-4">
                                <label class="inline-block mb-2 text-secondary-600 dark:text-white">Youtube Video 6:
                                    *</label>
                             <input type="text" value="<?php echo $val->y6?>"  class="w-full px-4 py-2 placeholder-secondary-400 border dark:bg-dark-card dark:border-secondary-800 rounded outline-none focus:border-primary-500 dark:focus:border-primary-500 focus:shadow" name="y6" aria-label="Default select example">
                       
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



