
<!doctype html>
<html lang="en" class="scroll-smooth selection:text-white selection:bg-primary-500"  x-bind:dir="setting.theme_scheme_direction" x-bind:class="[setting.theme_font_size, setting.theme_scheme]" x-data="settingInit">
  
<head>
    <meta charset="utf-8">
      <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
      <title >Prime Developers Admin</title>
      
      <!-- Google Font -->
      <link rel="preconnect" href="https://fonts.googleapis.com/">
      <link rel="preconnect" href="https://fonts.gstatic.com/" crossorigin>
      <link href="https://fonts.googleapis.com/css2?family=Heebo&amp;display=swap" rel="stylesheet">
      
      <!-- Config Options -->
      <meta name="setting_options" content='{&quot;saveLocal&quot;:&quot;sessionStorage&quot;,&quot;storeKey&quot;:&quot;quisetting-tailwind&quot;,&quot;setting&quot;:{&quot;app_name&quot;:&quot;Qompac UI&quot;,&quot;theme_scheme_direction&quot;:&quot;ltr&quot;,&quot;theme_scheme&quot;:&quot;light&quot;,&quot;theme_style_appearance&quot;:[],&quot;theme_font_size&quot;:&quot;theme-fs-md&quot;,&quot;page_layout&quot;:&quot;container&quot;,&quot;sidebar_color&quot;:&quot;sidebar-white&quot;,&quot;sidebar_type&quot;:[],&quot;sidebar_menu_style&quot;:&quot;sidebar-default navs-rounded-all&quot;}}'>
      
      <!-- Favicon -->
      <link rel="shortcut icon" href="<?php echo base_url()?>assets/images/favicon.png" />
      
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
      
      
      <!-- Choisejs css -->
      <link rel="stylesheet" href="<?php echo base_url()?>assets/vendor/choicejs/style/choices.min.css">
      
      <link rel="stylesheet" href="<?php echo base_url()?>assets/vendor/sheperd/dist/css/sheperd.css">
      
      
      <link rel="stylesheet" href="<?php echo base_url()?>assets/css/core/libs.min.css">
      <link rel="stylesheet" href="<?php echo base_url()?>assets/css/tailwinde209.css?v=1.0.0">
      <link rel="stylesheet" href="<?php echo base_url()?>assets/css/responsivee209.css?v=1.0.0">
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
<style>
    .nav-link:hover .icon-20 path{
        fill:#fff
    }
</style>

  </head>
  <body class="overflow-x-hidden text-body bg-body dark:bg-dark-bg" x-bind:class="[setting.theme_transition, setting.theme_style_appearance.join(' ')]">
    <!-- loader Start -->
  
    <!-- loader END -->
<aside x-data="{ isSidebarMini: window.innerWidth <= 767 && sidebarMini() }" x-bind:class="[setting.sidebar_menu_style, setting.sidebar_color, setting.sidebar_type.join(' '), isSidebarMini ? 'sidebar-mini' : '']" class="z-50 sidebar shadow-lg sidebar-base sidebar-default " data-toggle="main-sidebar" @resize.window="isSidebarMini = window.innerWidth <= 767 && sidebarMini()" id="first-tour">

        <div class="sidebar-header relative flex items-center justify-start mb-3 border-b dark:border-gray-700 z-0">
            <a href="<?php echo base_url()?>dashboard" class="flex px-5 py-4 mr-4 rtl:ml-4 rtl:mr-0 text-xl whitespace-nowrap  overflow-hidden">
                <img style="max-width:170px" src="<?php echo base_url()?>assets/images/logo-1.png"/>
            </a>
            <div class="sidebar-toggle p-2" x-on:click="sidebarMini" data-toggle="sidebar" data-active="true">
                    <i class="icon">
                        <svg class="icon-10" width="10" height="10" viewBox="0 0 8 8" fill="none" xmlns="http://www.w3.org/2000/svg">
                            <path
                                d="M7.29853 8C7.11974 8 6.94002 7.93083 6.80335 7.79248L3.53927 4.50446C3.40728 4.37085 3.33333 4.18987 3.33333 4.00036C3.33333 3.81179 3.40728 3.63081 3.53927 3.4972L6.80335 0.207279C7.07762 -0.069408 7.52132 -0.069408 7.79558 0.209174C8.06892 0.487756 8.06798 0.937847 7.79371 1.21453L5.02949 4.00036L7.79371 6.78618C8.06798 7.06286 8.06892 7.51201 7.79558 7.79059C7.65892 7.93083 7.47826 8 7.29853 8Z"
                                fill="white"></path>
                            <path
                                d="M3.96552 8C3.78673 8 3.60701 7.93083 3.47034 7.79248L0.206261 4.50446C0.0742745 4.37085 0.000325203 4.18987 0.000325203 4.00036C0.000325203 3.81179 0.0742745 3.63081 0.206261 3.4972L3.47034 0.207279C3.74461 -0.069408 4.18831 -0.069408 4.46258 0.209174C4.73591 0.487756 4.73497 0.937847 4.4607 1.21453L1.69649 4.00036L4.4607 6.78618C4.73497 7.06286 4.73591 7.51201 4.46258 7.79059C4.32591 7.93083 4.14525 8 3.96552 8Z"
                                fill="white"></path>
                        </svg>
                    </i>
            </div>
        </div>
        <div class="sidebar-body data-scrollbar">
          <ul class="sidebar-main-menu">
              
              <li class="nav-item ">
                  <a class="nav-link" aria-current="page"
                      href="<?php echo base_url()?>dashboard">
                      <i class="icon" data-tp-toggle="tooltip" data-tp-placement="left" data-tp-title="Dashboard">
                          <svg width="20" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
                              <path opacity="0.4"
                                  d="M16.0756 2H19.4616C20.8639 2 22.0001 3.14585 22.0001 4.55996V7.97452C22.0001 9.38864 20.8639 10.5345 19.4616 10.5345H16.0756C14.6734 10.5345 13.5371 9.38864 13.5371 7.97452V4.55996C13.5371 3.14585 14.6734 2 16.0756 2Z"
                                  fill="currentColor"></path>
                              <path fill-rule="evenodd" clip-rule="evenodd"
                                  d="M4.53852 2H7.92449C9.32676 2 10.463 3.14585 10.463 4.55996V7.97452C10.463 9.38864 9.32676 10.5345 7.92449 10.5345H4.53852C3.13626 10.5345 2 9.38864 2 7.97452V4.55996C2 3.14585 3.13626 2 4.53852 2ZM4.53852 13.4655H7.92449C9.32676 13.4655 10.463 14.6114 10.463 16.0255V19.44C10.463 20.8532 9.32676 22 7.92449 22H4.53852C3.13626 22 2 20.8532 2 19.44V16.0255C2 14.6114 3.13626 13.4655 4.53852 13.4655ZM19.4615 13.4655H16.0755C14.6732 13.4655 13.537 14.6114 13.537 16.0255V19.44C13.537 20.8532 14.6732 22 16.0755 22H19.4615C20.8637 22 22 20.8532 22 19.44V16.0255C22 14.6114 20.8637 13.4655 19.4615 13.4655Z"
                                  fill="currentColor"></path>
                          </svg>
                      </i>
                      <span class="item-name">Dashboard</span>
                  </a>
              </li>
              <li class="nav-item ">
                  <a class="nav-link " aria-current="page"
                      href="<?php echo base_url()?>homecontroller/projects">
                      <i class="icon" data-tp-toggle="tooltip" data-tp-placement="left" data-tp-title="Projects">
                          <svg width="20" height="20" class="icon-20" viewBox="0 0 16 16" fill="none"
                              xmlns="http://www.w3.org/2000/svg">
                              <path fill-rule="evenodd" clip-rule="evenodd"
                                  d="M10.1615 3.15833C10.1615 4.639 11.3636 5.83931 12.8464 5.83931C13.0097 5.83851 13.1726 5.82283 13.333 5.79248V11.1076C13.333 13.3437 12.014 14.6666 9.77463 14.6666H4.89725C2.65201 14.6666 1.33301 13.3437 1.33301 11.1076V6.23736C1.33301 4.00126 2.65201 2.66663 4.89725 2.66663H10.2084C10.1769 2.82863 10.1612 2.9933 10.1615 3.15833ZM8.76632 9.93102L10.6716 7.47248V7.46077C10.8347 7.2416 10.793 6.93255 10.5778 6.76419C10.4736 6.68375 10.3411 6.64893 10.2108 6.66768C10.0804 6.68644 9.96324 6.75716 9.88601 6.8637L8.27976 8.93004L6.45074 7.49004C6.34632 7.40869 6.21348 7.37277 6.08221 7.39039C5.95095 7.40802 5.83233 7.47769 5.75313 7.5837L3.78342 10.1242C3.71419 10.2105 3.67691 10.318 3.6779 10.4286C3.66647 10.6521 3.80759 10.855 4.02126 10.9225C4.23493 10.9899 4.46726 10.9048 4.58655 10.7154L6.23384 8.58467L8.06286 10.0188C8.16689 10.1027 8.3006 10.1407 8.43327 10.1242C8.56594 10.1076 8.68617 10.0379 8.76632 9.93102Z"
                                  fill="currentColor"></path>
                              <ellipse opacity="0.4" cx="12.9997" cy="2.99998" rx="1.66667" ry="1.66667" fill="currentColor">
                              </ellipse>
                          </svg>
                      </i>
                      <span class="item-name">Projects</span>
                  </a>
              </li>
              <li class="nav-item ">
                  <a class="nav-link " aria-current="page"
                      href="<?php echo base_url()?>homeprojects">
                      <i class="icon" data-tp-toggle="tooltip" data-tp-placement="left" data-tp-title="Home Projects">
                          <svg class="icon-20"  xmlns="http://www.w3.org/2000/svg" fill-rule="evenodd" clip-rule="evenodd" width="20" height="20" viewBox="0 0 24 24"><path fill="#6c757d" d="m12.707 2.293l9 9c.63.63.184 1.707-.707 1.707h-1v6a3 3 0 0 1-3 3h-1v-7a3 3 0 0 0-2.824-2.995L13 12h-2a3 3 0 0 0-3 3v7H7a3 3 0 0 1-3-3v-6H3c-.89 0-1.337-1.077-.707-1.707l9-9a1 1 0 0 1 1.414 0M13 14a1 1 0 0 1 1 1v7h-4v-7a1 1 0 0 1 .883-.993L11 14z"/></svg>
                      </i>
                      <span class="item-name">Home Projects</span>
                  </a>
              </li>
              
               <li class="nav-item ">
                  <a class="nav-link " aria-current="page"
                      href="<?php echo base_url()?>blogs">
                      <i class="icon" data-tp-toggle="tooltip" data-tp-placement="left" data-tp-title="Blogs">
                          <svg class="icon-20" xmlns="http://www.w3.org/2000/svg" width="20" height="20" viewBox="0 0 24 24"><path fill="#6c757d" d="M9.71 10.46h2.239a.77.77 0 1 0 0-1.542H9.71a.77.77 0 1 0 0 1.542m9.718-8.458H4.555a2.573 2.573 0 0 0-2.563 2.563v14.873a2.573 2.573 0 0 0 2.563 2.564h14.873a2.573 2.573 0 0 0 2.564-2.564V4.565a2.573 2.573 0 0 0-2.564-2.563m-1.072 9.678l-.02 2.675a4.052 4.052 0 0 1-4.038 4.022h-4.64a4.05 4.05 0 0 1-4.041-4.025V9.657a4.053 4.053 0 0 1 4.042-4.03h2.823a4.46 4.46 0 0 1 3.12 2.2a3.156 3.156 0 0 1 .362 1.367c.068.506.103.881.33 1.09c.32.289 1.508.094 1.743.278l.178.14l.11.221l.035.178Zm-4.097 1.863H9.71a.75.75 0 1 0 0 1.5h4.549a.75.75 0 1 0 0-1.5"/></svg>
                      </i>
                      <span class="item-name">Blogs</span>
                  </a>
              </li>
              
                <li class="nav-item ">
                  <a class="nav-link " aria-current="page"
                      href="<?php echo base_url()?>registrations">
                      <i class="icon" data-tp-toggle="tooltip" data-tp-placement="left" data-tp-title="Registrations">
                          <svg class="icon-20" xmlns="http://www.w3.org/2000/svg" width="20" height="20" viewBox="0 0 20 20"><path fill="#6c757d" d="M6.5 10a.5.5 0 1 0 0-1a.5.5 0 0 0 0 1m.5 3.5a.5.5 0 1 1-1 0a.5.5 0 0 1 1 0M3 6a3 3 0 0 1 3-3h8a3 3 0 0 1 3 3v8a3 3 0 0 1-3 3H6a3 3 0 0 1-3-3zm2.5-1a.5.5 0 0 0 0 1h9a.5.5 0 0 0 0-1zm1 6a1.5 1.5 0 1 0 0-3a1.5 1.5 0 0 0 0 3M8 13.5a1.5 1.5 0 1 0-3 0a1.5 1.5 0 0 0 3 0m1-4a.5.5 0 0 0 .5.5h5a.5.5 0 0 0 0-1h-5a.5.5 0 0 0-.5.5m.5 3.5a.5.5 0 0 0 0 1h5a.5.5 0 0 0 0-1z"/></svg>
                      </i>
                      <span class="item-name">Registrations</span>
                  </a>
              </li>
              
              
          
       
          
              
          </ul>    </div>
    </aside>
    <main class="main-content " x-data="{ data: true }">
    <div class="relative">
        <!--Nav Start-->
        <nav class="z-40 bg-white dark:bg-dark-card nav shadow-lg navbar navbar-expand-xl navbar-light iq-navbar py-0"
            x-data="{ selected: null }" x-bind:class="setting.header_navbar">
            <div class="w-full px-7 py-2">
                <div class="relative">
                    <!-- Mobile menu button-->
                    <div class="absolute flex items-center px-2 py-1 text-xl border border-secondary-500 rounded lg:hidden"
                        :class="setting.theme_scheme_direction == 'ltr' ? 'right-0' : 'left-0'">
                        <button type="button" @click="selected == 1 ? selected = null : selected = 1"
                            class="inline-flex items-center justify-center text-xl text-secondary-500 rounded"
                            onclick="toggleNavbar('cancel', 'mobileicon')">
                            <span class="sr-only">Open main menu</span>
                            <svg class="block w-8 h-8" id="mobileicon" xmlns="http://www.w3.org/2000/svg" fill="none"
                                viewBox="0 0 24 24" stroke="currentColor">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                    d="M4 6h16M4 12h16M4 18h16" />
                            </svg>
                            <svg class="hidden w-6 h-6" id="cancel" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 16 16"
                                fill="gray">
                                <path
                                    d="M.293.293a1 1 0 011.414 0L8 6.586 14.293.293a1 1 0 111.414 1.414L9.414 8l6.293 6.293a1 1 0 01-1.414 1.414L8 9.414l-6.293 6.293a1 1 0 01-1.414-1.414L6.586 8 .293 1.707a1 1 0 010-1.414z">
                                </path>
                            </svg>
                        </button>
                    </div>
                    <!-- Mobile menu button END-->
                    <div class="flex">
                        <div class="flex items-center xl:hidden gap-2 display-none">
                            <div class="btn btn-primary btn-icon btn-sm rounded-full" data-toggle="sidebar"
                                x-on:click="sidebarMini" data-active="true">
                                <span class="btn-inner">
                                    <svg width="20px" height="20px" viewBox="0 0 24 24">
                                        <path fill="currentColor"
                                            d="M4,11V13H16L10.5,18.5L11.92,19.92L19.84,12L11.92,4.08L10.5,5.5L16,11H4Z">
                                        </path>
                                    </svg>
                                    </s>
                            </div>
                            <a href="index.html" class="flex items-center whitespace-nowrap gap-4">
                                <img style="max-width:150px" src="<?php echo base_url()?>assets/images/logo-1.png"/>
                            </a href="#">
                        </div>
                        <div class="breadcrumb-title xl:flex sm:hidden justify-center items-center lg:flex ml-2">
                            <small
                                class="capitalize hidden md:block mr-3 pr-3 border-r border-secondary-300 dark:border-secondary-700 dark:text-white">Home</small>
                        </div>
                        <div class="offcanvas-body">
                            <ul class="iq-nav-menu header-menu w-full lg:w-auto list-unstyled ml-2 rtl:mr-2 rtl:ml-0">
                              
                                
                                
                            
                            </ul>
                        </div>
        
                        <div class="hidden lg:flex lg:flex-grow transition-all duration-700 ease-in-out">
                            <ul class="flex items-center mb-2 ml-auto rtl:ml-0 rtl:mr-auto lg:mb-0">
                               
                        
                                <li class="nav-item iq-full-screen sm:hidden xl:block border-r" id="fullscreen-item">
                                    <a class="flex items-center p-2 hover:text-primary-500 focusa text-secondary-600"
                                        x-data="fullscreen" href="#" @click="toggle">
                                        <div class="w-8 rounded-full">
                                            <span class="btn-inner">
                                                <svg class="normal-screen icon-32" :class="fullscreen ? 'hidden' : ''"
                                                    width="32" height="24" viewBox="0 0 24 24" fill="none"
                                                    xmlns="http://www.w3.org/2000/svg">
                                                    <path d="M18.5528 5.99656L13.8595 10.8961" stroke="currentColor"
                                                        stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round">
                                                    </path>
                                                    <path d="M14.8016 5.97618L18.5524 5.99629L18.5176 9.96906"
                                                        stroke="currentColor" stroke-width="1.5" stroke-linecap="round"
                                                        stroke-linejoin="round"></path>
                                                    <path d="M5.8574 18.896L10.5507 13.9964" stroke="currentColor"
                                                        stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round">
                                                    </path>
                                                    <path d="M9.60852 18.9164L5.85775 18.8963L5.89258 14.9235"
                                                        stroke="currentColor" stroke-width="1.5" stroke-linecap="round"
                                                        stroke-linejoin="round"></path>
                                                </svg>
                                                <svg class="full-normal-screen icon-24" :class="!fullscreen ? 'hidden' : ''"
                                                    width="32" height="24" viewBox="0 0 24 24" fill="none"
                                                    xmlns="http://www.w3.org/2000/svg">
                                                    <path d="M13.7542 10.1932L18.1867 5.79319" stroke="white" stroke-width="1.5"
                                                        stroke-linecap="round" stroke-linejoin="round"></path>
                                                    <path d="M17.2976 10.212L13.7547 10.1934L13.7871 6.62518"
                                                        stroke="currentColor" stroke-width="1.5" stroke-linecap="round"
                                                        stroke-linejoin="round"></path>
                                                    <path d="M10.4224 13.5726L5.82149 18.1398" stroke="white" stroke-width="1.5"
                                                        stroke-linecap="round" stroke-linejoin="round"></path>
                                                    <path d="M6.74391 13.5535L10.4209 13.5723L10.3867 17.2755"
                                                        stroke="currentColor" stroke-width="1.5" stroke-linecap="round"
                                                        stroke-linejoin="round"></path>
                                                </svg>
                                            </span>
                                        </div>
                                    </a>
                                </li>
                                <li x-data="{ open: false }" id="itemdropdown1">
                                    <a class="py-0 flex items-center p-2 ml-2 hover:text-primary-500 active:text-primary-500 focus:text-primary-500 focus" href="#" id="profile-setting"
                                        @click="open = !open" aria-expanded="false">
                                        <img src="<?php echo base_url()?>assets/images/avatars/01.png" alt="User-Profile"
                                            class="h-12 w-12 rounded-full truncate" loading="lazy">
                                        <div class="caption ml-3 d-none d-md-block ">
                                            <h6 class="mb-0 caption-title mr-4">Prime Developers</h6>
                                            <p class="mb-0 caption-sub-title focusa active:text-primary-500  focus:text-primary-500 hover:text-primary-500 text-black mr-4">Superadmin</p>
                                        </div>
                                    </a>
                                    <ul x-show="open"
                                        class="absolute z-40 w-40 p-2  rounded bg-white shadow-lg right-4 dark:bg-dark-card"
                                        @click.outside="open = false" x-transition:enter="transition ease-in duration-500"
                                        x-transition:enter-start="opacity-0 transform translate-y-16"
                                        x-transition:enter-end="opacity-100 transform translate-y-0"
                                        x-transition:leave="transition ease-out duration-500"
                                        x-transition:leave-start="opacity-100 transform translate-y-0"
                                        x-transition:leave-end="opacity-0 transform translate-y-0">
                                       
                                        <li>
                                            <hr class="dark:border-secondary-700 my-4 dark:m-0">
                                        </li>
                                        <li><a class="dropdown-item text-md text-secondary-600 p-1 dark:text-secondary-600 hover:bg-primary-500/[0.1] hover:text-primary-500 hover:rounded hover:ease-in-out duration-300 dark:hover:text-primary-500 rounded-b"
                                                href="<?php echo base_url()?>homecontroller/logout">Logout</a></li>
                                    </ul>
                                </li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
            <div id="headsm" class="md:mt-0 overflow-hidden  lg:hidden flex w-full bg-white top-12 px-7 transition-all duration-700 max-h-0 pb-2 dark:bg-dark-card"  style="" x-ref="container1" x-bind:style="selected == 1 ? 'max-height:' + $refs.container1.scrollHeight + 'px' : ''">
                 <ul class="flex items-center mb-4 mt-5 ml-auto rtl:ml-0 rtl:mr-auto lg:mb-0">
                           
                                    <li><a class="dropdown-item text-md text-secondary-600 p-1 dark:text-secondary-600 hover:bg-primary-500/[0.1] hover:text-primary-500 hover:rounded hover:ease-in-out duration-300 dark:hover:text-primary-500 rounded-b"
                                                    href="<?php echo base_url()?>homecontroller/logout">Logout</a></li>
                        </ul>
              </div>
        </nav>        <!--Nav End-->
    </div>

