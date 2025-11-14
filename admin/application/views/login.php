
<!doctype html>
<html lang="en" class="scroll-smooth"  x-bind:dir="setting.theme_scheme_direction" x-bind:class="setting.theme_font_size" x-data="settingInit">


<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <title >Prime Developers Admin Panel</title>
  
  <!-- Google Font -->
  <link rel="preconnect" href="https://fonts.googleapis.com/">
  <link rel="preconnect" href="https://fonts.gstatic.com/" crossorigin>
  <link href="https://fonts.googleapis.com/css2?family=Heebo&amp;display=swap" rel="stylesheet">
  
  <!-- Config Options -->
  <meta name="setting_options" content='{&quot;saveLocal&quot;:&quot;sessionStorage&quot;,&quot;storeKey&quot;:&quot;quisetting-tailwind&quot;,&quot;setting&quot;:{&quot;app_name&quot;:&quot;Qompac UI&quot;,&quot;theme_scheme_direction&quot;:&quot;ltr&quot;,&quot;theme_scheme&quot;:&quot;light&quot;,&quot;theme_style_appearance&quot;:[],&quot;theme_font_size&quot;:&quot;theme-fs-md&quot;,&quot;page_layout&quot;:&quot;container&quot;,&quot;sidebar_color&quot;:&quot;sidebar-white&quot;,&quot;sidebar_type&quot;:[],&quot;sidebar_menu_style&quot;:&quot;sidebar-default navs-rounded-all&quot;}}'>
  
  <!-- Favicon -->
  <link rel="shortcut icon" href="https://templates.iqonic.design/product/qompac-ui-tailwind/tailwind/dist/assets/images/favicon.png" />
  
  <!-- SwiperSlider css -->
  <link rel="stylesheet" href="<?php echo base_url()?>assets/vendor/swiper-slider/swiper-bundle.min.css"/>
  <link rel="stylesheet" href="<?php echo base_url()?>assets/vendor/swiper-slider/swiper-bundle.min.css"/>
  
  <!-- SweetAlert2 css -->
  <link rel="stylesheet" href="<?php echo base_url()?>assets/vendor/sweetalert2/dist/sweetalert2.min.css"/>
  
  <!-- Uppy css -->
  <link rel="stylesheet" href="<?php echo base_url()?>assets/vendor/uppy/uppy.min.css"/>
  
  <!-- QuillEditor css -->
  <link rel="stylesheet" href="<?php echo base_url()?>assets/vendor/quill/quill.snow.css"/>
  
  <!-- Flatpickr css -->
  <link rel="stylesheet" href="<?php echo base_url()?>assets/vendor/flatpickr/dist/flatpickr.min.css" />
  
  
  
  
  
  <link rel="stylesheet" href="<?php echo base_url()?>assets/css/core/libs.min.css">
  <link rel="stylesheet" href="<?php echo base_url()?>assets/css/tailwinde209.css?v=1.0.0">
  <link rel="stylesheet" href="<?php echo base_url()?>assets/css/responsivee209.css?v=1.0.0">
</head>
<style>
    input:focus {
    --tw-border-opacity: 0 !important;
     border-color: transparent !important; 
}


</style>
<body class="overflow-x-hidden text-body bg-body dark:bg-dark-bg" x-bind:class="[setting.theme_scheme, setting.theme_transition, setting.theme_style_appearance.join(' ')]">
  <!-- loader Start -->
  <!-- <div id="loading">-->
  <!--  <div class="loader simple-loader">-->
  <!--      <div class="loader-body scroll-auto">-->
  <!--          <img src="<?php echo base_url()?>assets/images/loader.gif" alt="loader" class="image-loader img-fluid ">-->
  <!--      </div>-->
  <!--  </div>  </div>-->
  <!-- loader END -->
  <div id="bg-body-wrapper" class="bg-body wrapper dark:bg-dark-bg">
<section class="block overflow-hidden">
    <div class="flex flex-wrap m-0 items-center bg-white dark:bg-dark-card">
        <div class="md:w-1/2 w-full flex-auto">
            <div class="flex justify-center">
                <div class="flex-auto px-5">
                    <div
                        class=" relative flex flex-col overflow-hidden bg-white rounded-lg dark:bg-dark-card  card-transparent shadow xl:px-24 justify-center mb-0">
                        <div class="flex-auto p-8">
                            <a href="../index.html"
                                class="py-1 text-xl whitespace-nowrap mr-4 flex items-center mb-10 justify-center">
                                <img style="width:250px" src="<?php echo base_url()?>assets/images/logo-1.png"/>
                            </a>
                            <h2 class="text-center dark:text-white">Sign In</h2>
                            <p class="text-center mb-4 dark:text-white text-secondary-600">Login to stay connected.</p>
                            <?php
                                if (!empty($success_msg)) {
                                    echo '<p class="status-msg success">' . $success_msg . '</p>';
                                } elseif (!empty($error_msg)) {
                                    echo '<p class="status-msg error" style="color:red">' . $error_msg . '</p>';
                                }
                                ?>
                            <form action="" method="post">
                                <div class="flex flex-wrap">
                                    <div class="flex-auto w-full mb-4">
                                        <label for="email" class="mb-2 inline-block text-secondary-600 dark:text-white">Email</label>
                                        <input type="email" name="email" class="block w-full  py-2 px-4 bg-white rounded border dark:border-secondary-800 outline-none dark:focus:border-primary-500 focus:border-primary-500 focus:shadow dark:bg-dark-card" id="email" aria-describedby="email" placeholder="xyz@example.com" required>
                                    </div>
                                    <div class="flex-auto w-full mb-4">
                                        <label for="password" class="mb-2 inline-block dark:text-white text-secondary-600">Password</label>
                                        <input type="password" name="password" class="block w-full  py-2 px-4 bg-white rounded border dark:border-secondary-800 outline-none dark:focus:border-primary-500 focus:border-primary-500 focus:shadow dark:bg-dark-card" id="password" placeholder="xxxx"
                                            aria-describedby="password" required>
                                    </div>
                                    <div class="flex-auto w-full flex justify-between items-center">
                                        <div class="block pl-6">
                                            <input type="checkbox"
                                                class="rounded -ml-6 mt-1 bg-no-repeat bg-center w-4 h-4 border border-primary-500 float-left"
                                                id="customCheck1">
                                            <label class="form-check-label dark:text-white text-secondary-600" for="customCheck1">
                                                Remember Me
                                            </label>
                                        </div>
                                        <!--<a href="recoverpw.html"-->
                                        <!--    class="text-primary-500 hover:text-primary-600 dark:text-white">Forgot-->
                                        <!--    Password?-->
                                        <!--</a>-->
                                    </div>
                                </div>
                                <div class="flex justify-center mt-4">
                                    <input type="submit" name="loginSubmit"  class="btn btn-primary dark:text-white" type="button">
                    
                                </div>
                                
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="flex-auto lg:w-2/4 lg:block hidden bg-primary-500 p-0 -mt-1  overflow-hidden">
            <img src="<?php echo base_url()?>assets/images/auth/01.png" class="h-full w-full object-cover" alt="images">
        </div>
    </div>
</section>
  </div>
  
  
  <script src="<?php echo base_url()?>assets/js/setting-panel.js"></script>
  <!-- Library Bundle Script -->
  <script src="<?php echo base_url()?>assets/js/core/libs.min.js"></script>
  
  <!-- External Library Bundle Script -->
  <script src="<?php echo base_url()?>assets/js/core/external.min.js"></script>
  
  <!-- mapchart Script -->
  <script src="<?php echo base_url()?>assets/js/charts/vectore-chart.js"></script>
  
  <!-- fslightbox Script -->
  <script src="<?php echo base_url()?>assets/js/plugins/fslightbox.js"></script>
  
  <!-- App Script -->
  <script src="<?php echo base_url()?>assets/js/qompac-ui.js"></script>
  
  <!-- Alpine Js-->
  <script src="<?php echo base_url()?>assets/js/plugins/alpine.js" defer></script>
  
  <!-- Dashboard Chart & Slider -->
  <script src="<?php echo base_url()?>assets/js/charts/dashboard.js" defer></script>
  
</body>


</html>
