<!DOCTYPE html>
<html lang="en">

<head>
<meta charset="utf-8">
<title>Prime Developers</title>
<!-- Stylesheets -->
<link href="<?php echo base_url()?>assets/css/bootstrap.css" rel="stylesheet">
<link href="<?php echo base_url()?>assets/css/style.css" rel="stylesheet">
<link href="<?php echo base_url()?>assets/css/responsive.css" rel="stylesheet">   
<!--Color Switcher Mockup-->
<link href="<?php echo base_url()?>assets/css/color-switcher-design.css" rel="stylesheet">
<!--Color Themes-->
<link id="theme-color-file" href="<?php echo base_url()?>assets/css/color-themes/default-theme.css" rel="stylesheet">

<link rel="shortcut icon" href="<?php echo base_url()?>assets/images/favicon.png" type="image/x-icon">
<link rel="icon" href="<?php echo base_url()?>assets/images/favicon.png" type="image/x-icon">
<!-- Responsive -->
<meta http-equiv="X-UA-Compatible" content="IE=edge">
<meta name="viewport" content="width=device-width, initial-scale=1">

<!--[if lt IE 9]><script src="https://cdnjs.cloudflare.com/ajax/libs/html5shiv/3.7.3/html5shiv.js"></script><![endif]-->
<!--[if lt IE 9]><script src="<?php echo base_url()?>assets/js/respond.js"></script><![endif]-->
</head>
<style>
.main-menu .navigation > li > ul {
    width: max-content;
    }
@media only screen and (max-width: 767px){
    .main-menu .navbar-collapse > .navigation > li > a{
        background: #25262c !important;
    }
}

/* WebKit (Safari, Chrome) */
::-webkit-scrollbar {
    width: 2px  !important; /* width of the scrollbar */
}

::-webkit-scrollbar-track {
    background: #f1f1f1; /* color of the track */
}

::-webkit-scrollbar-thumb {
    background: #009bde  !important; /* color of the thumb */
    border-radius: 10px !important; /* roundness of the thumb */
}
::-webkit-scrollbar-button {
    display: none;
}
/* Firefox */
/* This will hide the scrollbar, but you can style it similarly to WebKit if you want */
* {
    scrollbar-width: thin; /* "auto" or "thin" */
}

*::-webkit-scrollbar {
    width: 0; /* hide scrollbar on Firefox */
}




/* === Popup Overlay === */
.form-section {
  display: none;
  position: fixed;
  top: 0; left: 0;
  width: 100%; height: 100%;
  background: rgba(0, 0, 0, 0.5);
  z-index: 9999;
  justify-content: center;
  align-items: center;
}

/* === Popup Box === */
.form-popup {
  /* background: #2f2f2f; */
  /* padding: 25px 30px; */
  border-radius: 12px;
  width: 100%;
  max-width: 400px;
  box-shadow: 0 4px 12px rgba(0,0,0,0.2);
  position: relative;
  animation: fadeIn 0.3s ease;
  /* box-shadow: 0 0 5px rgba(66,133,244,0.4); */
}

/* === Inputs & Button === */
.form-popup input {
  width: 100%;
  margin-bottom: 0px;
  padding: 10px;
  font-size: 16px;
  border-radius: 6px;
  border: 1px solid #ccc;
  background: #2f2f2f;
  color: #fff;
  outline: none;
  box-shadow: 0 0 5px rgba(66,133,244,0.4); 
  
}
.form-popup input:focus {
  border-color: #4285F4;
  
}
.form-popup button {
  width: 10%;
  background: transparent;
  color: #fff;
  font-weight: bold;
  position: relative;
  right: 40px;
  cursor: pointer;
  transition: background 0.2s;
}
.form-popup button:hover {
  background-color: #2f2f2f49;
}

/* === Close Button === */
.close-btn {
  position: absolute;
  top: 10px; right: 15px;
  font-size: 22px;
  color: #333;
  cursor: pointer;
}

/* === Overlay Click Area === */
.form-overlay {
  position: absolute;
  top: 0; left: 0;
  width: 100%; height: 100%;
  background: transparent;
}

/* === Animation === */
@keyframes fadeIn {
  from { transform: translateY(-15px); opacity: 0; }
  to { transform: translateY(0); opacity: 1; }
}


</style>

<body>

<div class="page-wrapper">
    <!-- Preloader -->
    <!--<div class="preloader"></div>-->
    
    <!-- Main Header-->
    <header class="main-header header-style-one">
        <div class="auto-container">
            <div class="header-lower">
                <div class="main-box clearfix">
                    <div class="logo-box">
                        <div class="logo"><a href="<?php echo site_url()?>"><img style="width:220px" src="<?php echo base_url()?>assets/images/logo-2.png" alt="" title=""></a></div>
                    </div>

                    <div class="nav-outer clearfix">
                        <!-- Main Menu -->
                        <nav class="main-menu navbar-expand-md ">
                            <div class="navbar-header">
                                <!-- Toggle Button -->      
                                <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
                                    <span class="icon flaticon-menu-button"></span>
                                </button>
                            </div>
                            
                            <div class="collapse navbar-collapse c  learfix" id="navbarSupportedContent">
                                <ul class="navigation clearfix">
                                    <li  class="current"><a href="<?php echo base_url()?>">Home </a>
                                       
                                    </li>
                                    <li><a href="<?php echo site_url('aboutus')?>">About</a>
                                        
                                    </li>
                                    
                                    <li class="dropdown" ><a href="<?php echo site_url('projects')?>">Projects</a>
                                        <ul style="overflow-y: scroll;height: auto;">
                                            <li><a href="<?php echo site_url('allprojects')?>">All Projects</a></li>
                                            <?php 
                                            $projects = $this->category->listprojects();
                                            $homeprojects = $this->category->listhomeprojects();
                                            foreach($projects as $pr){?>
                                            <!-- <li><a href="<?php echo site_url('homecontroller/projectdetails/'.$pr->id)?>"><?=$pr->name?></a></li> -->
                                            <!-- <li><a href="javascript:void(0);" onclick="openForm('<?php echo site_url('homecontroller/projectdetails/'.$pr->id)?>', <?=$pr->name?>)"><?=$pr->name?></a></li> -->
                                            <li>
                                                <a href="javascript:void(0);" 
                                                    onclick="openForm('<?php echo site_url('homecontroller/projectdetails/'.$pr->id); ?>', '<?php echo htmlspecialchars($pr->name, ENT_QUOTES); ?>')">
                                                    <?=$pr->name?>
                                                </a>
                                                </li>

                                            <!-- Hidden Form Popup -->
                                                <section id="viewer-details-form" class="form-section">
                                                <div class="form-overlay" onclick="closeForm()"></div>
                                                <div class="form-popup">
                                                    <!-- <span class="close-btn" onclick="closeForm()">&times;</span> -->
        
                                                    <form id="googleForm"  style="display:flex;"
                                                    action="https://docs.google.com/forms/d/e/1FAIpQLScDUCKiZt7U8i1wzQDygDi3gvoJdbR7pR5hpA-KPmBdfCO6cw/formResponse" 
                                                    method="POST"
                                                    target="_self">

                                                    <!-- Visible field -->
                                                    <input name="entry.1822920815" type="text" placeholder="Your Name" required>

                                                    <!-- Hidden fields (to be auto-filled from DB later) -->
                                                    <input name="entry.916343259" type="hidden" id="projectName">
                                                    <input name="entry.969595411" type="hidden" id="currentDate">

                                                    <button type="submit">-></button>
                                                    </form>
                                                </div>
                                                </section>
                                            
                                            
                                            
                                            
                                            
                                            
                                            
                                            
                                            <?php } ?>
                                                
                                            





                                        </ul>
                                    </li>

                                    <!-- Updated-- blog section removed -->
                                    <!-- <li ><a href="<?php //echo site_url('blogs')?>">Blogs</a>
                                     
                                    </li> -->
                                    
                                    <li><a href="<?php echo site_url('contactus')?>">Contact</a></li>
                                  
                                </ul>
                            </div>
                        </nav><!-- Main Menu End-->                        

                        <!-- Outer Box-->
                        <div class="outer-box">
                            <!--Search Box-->
                            <div class="search-box-outer">
                                <div class="dropdown">
                                    <a target="_blank" href="https://wa.me/15127618025"><button class="search-box-btn " style="background:#25D366; color:white; font-size:18px" type="button" id="dropdownMenu3"><span class="fa old fa-whatsapp "></span></button></a>
                                    <!--<ul class="dropdown-menu pull-right search-panel" aria-labelledby="dropdownMenu3">-->
                                    <!--    <li class="panel-outer">-->
                                    <!--        <div class="form-container">-->
                                    <!--            <form method="post" action="search.php">-->
                                    <!--                <div class="form-group">-->
                                    <!--                    <input type="search" name="field-name" value="" placeholder="Search Here" required>-->
                                    <!--                    <button type="submit" class="search-btn"><span class="fa fa-whatsapp"></span></button>-->
                                    <!--                </div>-->
                                    <!--            </form>-->
                                    <!--        </div>-->
                                    <!--    </li>-->
                                    <!--</ul>-->
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </header>
    <!--End Main Header -->
    
<script>
    // Function to update 'current' class on page load and navigation
    function updateCurrentClass() {
        var currentPageUrl = window.location.href;
        var navItems = document.querySelectorAll('.navigation li');

        // Remove 'current' class from all <li> elements
        navItems.forEach(function(item) {
            item.classList.remove('current');
        });

        // Add 'current' class to the <li> element containing the link that matches the current page URL
        navItems.forEach(function(item) {
            var link = item.querySelector('a');
            if (link && link.href === currentPageUrl) {
                item.classList.add('current');
            } else if (link && link.href.includes('projectdetails')) {
            item.classList.add('current');
        }
        });
    }

    // Call the function to update the 'current' class
    updateCurrentClass();

    // Re-call the function on each click on navigation links
    document.querySelectorAll('.navigation a').forEach(function(link) {
        link.addEventListener('click', function() {
            updateCurrentClass();
        });
    });

    ///////Google form section///////
    let redirectUrl = "";

// Step 1: Open the popup
function openForm(url, projectName) {
  redirectUrl = url;
  document.getElementById("viewer-details-form").style.display = "flex";

  // Auto-fill hidden fields
  document.getElementById("projectName").value = projectName;
  document.getElementById("currentDate").value = new Date().toISOString().split('T')[0];
}

// Step 2: Close popup
function closeForm() {
  document.getElementById("viewer-details-form").style.display = "none";
}

// Step 3: Handle silent submission
document.getElementById("googleForm").addEventListener("submit", async function(e) {
  e.preventDefault(); // stop page reload

  const form = e.target;
  const formData = new FormData(form);

  // Send data silently to Google Form
  await fetch("https://docs.google.com/forms/d/e/1FAIpQLScDUCKiZt7U8i1wzQDygDi3gvoJdbR7pR5hpA-KPmBdfCO6cw/formResponse", {
    method: "POST",
    mode: "no-cors",
    body: formData
  });

  // Hide popup and redirect immediately
  closeForm();
  window.location.href = redirectUrl;
});
    
    
</script>
