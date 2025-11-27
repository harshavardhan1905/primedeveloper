</div><?php include('templates/header.php');?>
    <!--<link rel="stylesheet" href="<?php echo base_url()?>assets/assets1/vendors/bootstrap/css/bootstrap.min.css" />-->
    <link rel="stylesheet" href="<?php echo base_url()?>assets/assets1/vendors/animate/animate.min.css" />
    <link rel="stylesheet" href="<?php echo base_url()?>assets/assets1/vendors/animate/custom-animate.css" />
    <link rel="stylesheet" href="<?php echo base_url()?>assets/assets1/vendors/fontawesome/css/all.min.css" />
    <link rel="stylesheet" href="<?php echo base_url()?>assets/assets1/vendors/jarallax/jarallax.css" />
    <link rel="stylesheet" href="<?php echo base_url()?>assets/assets1/vendors/jquery-magnific-popup/jquery.magnific-popup.css" style="important"/>
    <link rel="stylesheet" href="<?php echo base_url()?>assets/assets1/vendors/nouislider/nouislider.min.css" />
    <link rel="stylesheet" href="<?php echo base_url()?>assets/assets1/vendors/nouislider/nouislider.pips.css" />
    <link rel="stylesheet" href="<?php echo base_url()?>assets/assets1/vendors/odometer/odometer.min.css" />
    <link rel="stylesheet" href="<?php echo base_url()?>assets/assets1/vendors/swiper/swiper.min.css" />
    <link rel="stylesheet" href="<?php echo base_url()?>assets/assets1/vendors/aports-icons/style.css">
    <link rel="stylesheet" href="<?php echo base_url()?>assets/assets1/vendors/tiny-slider/tiny-slider.min.css" />
    <link rel="stylesheet" href="<?php echo base_url()?>assets/assets1/vendors/reey-font/stylesheet.css" />
    <!--<link rel="stylesheet" href="<?php echo base_url()?>assets/assets1/vendors/owl-carousel/owl.carousel.min.css" />-->
    <!--<link rel="stylesheet" href="<?php echo base_url()?>assets/assets1/vendors/owl-carousel/owl.theme.default.min.css" />-->
    <link rel="stylesheet" href="<?php echo base_url()?>assets/assets1/vendors/bxslider/jquery.bxslider.css" />
    <link rel="stylesheet" href="<?php echo base_url()?>assets/assets1/vendors/bootstrap-select/css/bootstrap-select.min.css" />
    <link rel="stylesheet" href="<?php echo base_url()?>assets/assets1/vendors/vegas/vegas.min.css" />
    <link rel="stylesheet" href="<?php echo base_url()?>assets/assets1/vendors/jquery-ui/jquery-ui.css" />
    <link rel="stylesheet" href="<?php echo base_url()?>assets/assets1/vendors/timepicker/timePicker.css" />
    <link rel="stylesheet" href="<?php echo base_url()?>assets/assets1/css/aports.css"  style="important"/>
    
        <!-- template styles -->
    <link rel="stylesheet" href="<?php echo base_url()?>assets/assets1/css/aports.css" />
    <link rel="stylesheet" href="<?php echo base_url()?>assets/assets1/css/aports-responsive.css" />
    
    <style>
    .about-one__img-one img{
        min-height:711px;
        object-fit:cover;
    }
    .about-one__img-two img{
        max-width:353px;
        height:419px;
        object-fit:cover;
    }
    .feature-one__single:hover .feature-one__text{
        color:white;
    }
    li{
        color:#555555;
    }
    .feature-one__right {
    margin-right: 0px;}
    /*.mfp-bg{*/
    /*    height:100vh !important;*/
    /*}*/
    .feature-one__single-inner {
    height: 90%;}
    .main-menu .navigation > li > ul {
    width: max-content;
    }
        .fa.old {
    font: normal normal normal 14px/1 FontAwesome;
    font-size: inherit;
    padding:5px;
        }
        .mfp-iframe-holder {
            width:98%;
        }
        .mfp-iframe-holder .mfp-content {
    line-height: 0;
    width: 90%;
    max-width: 90%;
        }
        .mfp-wrap{
            height:100% !important;
        }
        .apartments-one__img:before{
            background:none;
        }
        
.specialize-section-two.alternate .carousel-outer .thumbs-carousel .owl-nav {
    /* position: absolute; */
    position: relative;
    left: 96%;
    bottom: auto;
    top: -542%;
    transform: rotate(-90deg);
}
.neighborhoods {
    margin-top:60px !important;
}
.swiper-wrapper {
      width: 161.667px !important;
        height: 100px !important;
        gap: 20px;
    /* padding: 10px; */
}
.custom-slide {
    padding: 25px;
    width: 161.667px !important;
    height: 90px !important;
    border: 1px solid #ddd;
    box-shadow: 0 2px 4px rgba(0, 0, 0, 0.1);
}
.brand-one__single{
    display: flex;
    justify-content: center;
    align-items: center;
    padding: 10px;
    width: 161.667px;
    height: 200px;
    gap: 10px;
}
.brand-one__single img{
    max-height: 74px;
    max-width: 100%;
    object-fit: contain;
}
@media only screen and (max-width: 767px){
    .about-one__img-one img{
        height:unset;
        object-fit:cover;
    }
.main-menu .navbar-collapse > .navigation li.dropdown .dropdown-btn {
    display: flex;
    justify-content: center;
    align-items: center;
}}

.owl-nav{
    text-align:center;
    position: absolute;
    top: -29%;
    right: 20px;
    > button{
        padding: 5px;
    border: 2px solid black;
    border-radius: 50%;
    width: 30px;
    height: 30px;
    margin:3px;
    }
}
.social-icon-two .fa{
    font:normal normal normal 14px/1 FontAwesome;
    font-weight:unset;
}
.about-one__text-box{
    height: 30vh;
    overflow-x:scroll;
    /* box-shadow: 0 4px 8px rgba(0, 0, 0, 0.1); */
}






    </style>
    <?php foreach($vals as $val){?>
	            <!--Page Title-->
                <section class="page-title" style="background-image:url(<?php echo base_url()?>admin/uploads/products/<?=$val->retail3dview?>);background-position: left center;">
                    <div class="auto-container">
                        <div class="inner-container clearfix">
                            <div class="title-box">
                                <h1><?=$val->name?></h1>
                                <span class="title"><?=$val->location?></span>
                            </div>
                            
                        </div>
                    </div>
                </section>
                <!--End Page Title-->

    <div class="page-wrapper">
        <!--About One Start-->
        <section class="about-one">
            <div class="container">
                <div class="row">

                    <div class="col-xl-6">
                        <div class="about-one__left wow slideInLeft" data-wow-delay="100ms" data-wow-duration="2500ms">
                            <div class="about-one__big-text">Apartments</div>
                            <div class="about-one__img-box">
      
                                <div class="about-one__img-one">
                                    <img src="<?php echo base_url()?>admin/uploads/products/<?=$val->floorplansretail?>" alt="">
                                </div>
      
                                <div class="about-one__img-two">
                                    <img src="<?php echo base_url()?>admin/uploads/products/<?=$val->floorplansoffice?>" alt="">
                                </div>
      
                                <div class="about-one__shape-1 float-bob-y"></div>
                                <div class="about-one__shape-2">
                                    <img src="<?php echo base_url()?>assets/assets1/images/shapes/about-one-shape-2.png" alt="">
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-xl-6">
                        <div class="about-one__right">
                            <div class="section-title text-left">
                                <span class="section-title__tagline"><?=$val->abouttag?></span>
                                <h4 class="section-title__title"><?=$val->aboutheading?></h4>
                            </div>
                            <div class="about-one__text-box">
                                <p class="about-one__text"><?=$val->highlights?></p>
                            </div>
                            <!-- Popup Form Section -->
                         <section id="viewer-details-form" class="form-popup" style="display:none;">

                        <div class="form-overlay" onclick="closeForm()"></div>

                        <div class="form-popup">
                            <span class="close-btn " style="color: red;" onclick="closeForm()">Close</span>

                            <form id="googleForm"
                                action="https://docs.google.com/forms/d/e/1FAIpQLScDUCKiZt7U8i1wzQDygDi3gvoJdbR7pR5hpA-KPmBdfCO6cw/formResponse"
                                method="POST"
                                style="display:flex; flex-direction:column;"
                                target="_self">

                                <input name="entry.546632381" type="text" placeholder="Email" required>
                                <input name="entry.1822920815" type="text" placeholder="Your Name" required>

                                <input name="entry.916343259" type="hidden" id="projectName">
                                <input name="entry.969595411" type="hidden" id="currentDate"> <br>

                                <button type="submit" class="thm-btn about-one__btn my-2">View</button>
                            </form>
                        </div>

                    </section>
                        <!-- End of Popup Form Section --> 
                          
                           <!-- <a href="<?php echo base_url()?>admin/uploads/products/<?=$val->flyer?>" class="thm-btn about-one__btn pdf-popup my-2"  >View Flyer</a> -->
                           <a href="javascript:void(0);" 
                                onclick="openForm('<?= base_url("admin/uploads/products/".$val->flyer) ?>', '<?= $val->name ?>')"
                                class="thm-btn about-one__btn my-2">
                                View Flyer
                                </a>
                                 
                        </div>
                        
                    </div>
                </div>
            </div>
            
        </section>
        <script>
            let flyerUrl = "";

            // When user clicks the button
            function openForm(url , projectName) {
                flyerUrl = url;
                document.getElementById("viewer-details-form").style.display = "flex";

                // Auto-fill hidden fields
                document.getElementById("projectName").value = projectName;
                document.getElementById("currentDate").value = new Date().toISOString().split('T')[0];
            }

            // Close form popup
            function closeForm() {
                document.getElementById("viewer-details-form").style.display = "none";
            }

            // Handle Google Form submit silently
            document.addEventListener("DOMContentLoaded", () => {
                document.getElementById("googleForm").addEventListener("submit", async function(e) {
                    e.preventDefault();

                    const formData = new FormData(this);

                    await fetch("https://docs.google.com/forms/d/e/1FAIpQLScDUCKiZt7U8i1wzQDygDi3gvoJdbR7pR5hpA-KPmBdfCO6cw/formResponse", {
                        method: "POST",
                        mode: "no-cors",
                        body: formData
                    });

                    // Hide popup
                    closeForm();

                    // NOW open the original flyer
                    window.location.href = flyerUrl;
                });
            });
</script>
        <!--About One End-->

        <!--Counter One Start-->
        <section class="counter-one pb-0">
            <div class="container">
                <div class="row">
                    <div class="col-xl-12">
                        <div class="counter-one__inner">
                            <ul class="list-unstyled counter-one__list">
                                <?php if($val->projectsize){ ?>
                                <li class="counter-one__single wow fadeInLeft" data-wow-delay="100ms">
                                    <div class="counter-one__icon">
                                        <span class="icon-size"></span>
                                    </div>
                                    <div class="counter-one__content-box count-box">
                                        <h3 class="count-text" data-stop="<?=$val->projectsize?>" data-speed="1500"></h3>
                                        <p class="counter-one__text">Sft Project Size</p>
                                    </div>
                                </li>
                                <?php }?>
                                <?php if($val->acres){ ?>
                                <li class="counter-one__single wow fadeInLeft" data-wow-delay="200ms">
                                    <div class="counter-one__icon">
                                        <span class="icon-area"></span>
                                    </div>
                                    <div class="counter-one__content-box count-box">
                                        <h3 class="count-text" data-stop="<?=$val->acres?>" data-speed="1500"></h3>
                                        <p class="counter-one__text"> Acres </p>
                                    </div>
                                </li>
                                <?php }?>
                                <li class="counter-one__single wow fadeInLeft" data-wow-delay="300ms">
                                    <div class="counter-one__icon">
                                        <span class="icon-town"></span>
                                    </div>
                                    <div class="counter-one__content-box count-box">
                                        <h3 class="count-text" data-stop="<?=$val->totalunits?>" data-speed="1500"></h3>
                                        <p class="counter-one__text">Total <?php if($val->name=='Rio Ranch Commercial Lots' || $val->name=='Rio Ranch 1 Acre Lots'){ echo 'Lots'; } else{ echo 'Units';} ?></p>
                                    </div>
                                </li>
                                <li class="counter-one__single wow fadeInLeft" data-wow-delay="400ms">
                                    <div class="counter-one__icon">
                                        <span class="icon-location"></span>
                                    </div>
                                    <div class="counter-one__content-box count-box">
                                        <h3 class="count-text" data-stop="<?=$val->availableunits?>" data-speed="1500"></h3>
                                        <p class="counter-one__text">Available <?php if($val->name=='Rio Ranch Commercial Lots' || $val->name=='Rio Ranch 1 Acre Lots'){ echo 'Lots'; } else{ echo 'Units';} ?></p>
                                    </div>
                                </li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <!--Counter One End-->
        
                <!--Brand One Start-->
<section class="brand-one bg-white">
    <div class="container">
        <div class="row">
            <div class="col-xl-12">
                <div class="brand-one__inner">
                    <div class="thm-swiper__slider swiper-container" data-swiper-options='{"spaceBetween": 100, "slidesPerView": 5, "autoplay": { "delay": 5000 }, "breakpoints": {
                        "0": {
                            "spaceBetween": 0,
                            "slidesPerView": 2
                        },
                        "375": {
                            "spaceBetween": 0,
                            "slidesPerView": 2
                        },
                        "575": {
                            "spaceBetween": 30,
                            "slidesPerView": 3
                        },
                        "767": {
                            "spaceBetween": 50,
                            "slidesPerView": 3
                        },
                        "991": {
                            "spaceBetween": 50,
                            "slidesPerView": 5
                        },
                        "1199": {
                            "spaceBetween": 100,
                            "slidesPerView": 6
                        }
                    }}'>
                        <div class="swiper-wrapper">
                            <?php
                            $pid=$val->id;
                            $query = $this->db->select('cname')
                                ->from('projectclients')
                                ->where('pid', $pid)
                                ->get();
                            $clients = $query->result();

                            // Outputting the fetched data using a foreach loop
                            foreach ($clients as $client) {
                                $cname = $client->cname;
                            ?>
                            <div class="swiper-slide mx-auto brand-one__single custom-slide" >
                                <img src="<?php echo base_url()?>admin/uploads/products/<?=$cname?>" alt="">
                            </div>
                            <?php
                            }
                            ?>

                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>

        <!--Brand One End-->


        <!--Feature One Start-->
        <section class="feature-one">
            
            <div class="feature-one__bg-box">
                <div class="feature-one__bg"
                    style="background-image: url(<?php echo base_url()?>assets/assets1/images/backgrounds/feature-one-bg.jpg);"></div>
            </div>
            <div class="feature-one__shape-1 float-bob-x">
                <img src="<?php echo base_url()?>assets/assets1/images/shapes/feature-one-shape-1.png" alt="">
            </div>
            <div class="container">
                <div class="row">
                    <div class="col-xl-5">
                        <div class="feature-one__left">
                            <div class="section-title text-left">
                                <span class="section-title__tagline"><?=$val->projecttag?></span>
                                <h2 class="section-title__title"><?=$val->projectheading?></h2>
                            </div>
                            <p class="feature-one__text"><?=$val->facts?></p>
                            <div class="feature-one__video-link">
                               
                            </div>
                            <div class="feature-one__counter-box">
                                <ul class="feature-one__counter-list list-unstyled">
                                    <li>
                                        <div class="feature-one__counter-content-box">
                                            <div class="feature-one__counter-count-box count-box">
                                                <h3 class="count-text" data-stop="<?=$val->buildingsize?>" data-speed="1500"></h3>
                                                <span class="feature-one__counter-plus">+</span>
                                            </div>
                                            <p class="feature-one__counter-text"><?=$val->buildingsizeheading?></p>
                                        </div>
                                    </li>
                                    <li>
                                        <div class="feature-one__counter-content-box">
                                            <div class="feature-one__counter-count-box count-box">
                                                <h3 class="count-text" data-stop="<?=$val->floorsize?>" data-speed="1500"></h3>
                                                <span class="feature-one__counter-plus">+</span>
                                            </div>
                                            <p class="feature-one__counter-text"><?=$val->floorsizeheading?></p>
                                        </div>
                                    </li>
                                </ul>
                            </div>
                        </div>
                    </div>
                    <div class="col-xl-7">
                        <div class="feature-one__right">
                            <div class="row">
                                <!--Feature One Single Start-->
                                <div class="col-xl-6 col-lg-6 col-md-6 wow fadeInUp" data-wow-delay="100ms">
                                    <div class="feature-one__single">
                                        <div class="feature-one__single-inner">
                                            <!--<div class="feature-one__icon">-->
                                            <!--    <span class=""><img style="width:62px" src="<?php echo base_url()?>assets/images/automobile.png"/></span>-->
                                            <!--</div>-->
                                            <h3 class="feature-one__title"><a href=""><?=$val->ptrafficheading?></a></h3>
                                            <p class="feature-one__text"><?=$val->ptraffic?></p>
                                            <!--<div class="feature-one__btn">-->
                                            <!--    <a href=""> <i class="fa fa-arrow-right"></i>Read More</a>-->
                                            <!--</div>-->
                                        </div>
                                    </div>
                                </div>
                                <!--Feature One Single End-->
                                <!--Feature One Single Start-->
                                <div class="col-xl-6 col-lg-6 col-md-6 wow fadeInUp" data-wow-delay="200ms">
                                    <div class="feature-one__single">
                                        <div class="feature-one__single-inner">
                                            <!--<div class="feature-one__icon">-->
                                            <!--    <span class="icon-sustainable"></span>-->
                                            <!--</div>-->
                                            <h3 class="feature-one__title"><a href=""><?=$val->putilitiesheading?></a>
                                            </h3>
                                            <p class="feature-one__text"><?=$val->putilities?></p>
                                            <!--<div class="feature-one__btn">-->
                                            <!--    <a href=""> <i class="fa fa-arrow-right"></i>Read More</a>-->
                                            <!--</div>-->
                                        </div>
                                    </div>
                                </div>
                                <!--Feature One Single End-->
                                <!--Feature One Single Start-->
                                <div class="col-xl-6 col-lg-6 col-md-6 wow fadeInUp" data-wow-delay="300ms">
                                    <div class="feature-one__single">
                                        <div class="feature-one__single-inner">
                                            <!--<div class="feature-one__icon">-->
                                            <!--    <span class=""><img style="width:62px" src="<?php echo base_url()?>assets/images/park.png"/></span>-->
                                            <!--</div>-->
                                            <h3 class="feature-one__title"><a href=""><?=$val->paccessheading?></a></h3>
                                            <p class="feature-one__text"><?=$val->paccess?></p>
                                            <!--<div class="feature-one__btn">-->
                                            <!--    <a href=""> <i class="fa fa-arrow-right"></i>Read More</a>-->
                                            <!--</div>-->
                                        </div>
                                    </div>
                                </div>
                                <!--Feature One Single End-->
                                <!--Feature One Single Start-->
                                <div class="col-xl-6 col-lg-6 col-md-6 wow fadeInUp" data-wow-delay="400ms">
                                    <div class="feature-one__single">
                                        <div class="feature-one__single-inner">
                                            <!--<div class="feature-one__icon">-->
                                            <!--    <span class=""><img style="width:62px" src="<?php echo base_url()?>assets/images/location.png"/></span>-->
                                            <!--</div>-->
                                            <h3 class="feature-one__title"><a href=""><?=$val->plocationheading?></a>
                                            </h3>
                                            <p class="feature-one__text"><?=$val->plocation?></p>
                                            <!--<div class="feature-one__btn">-->
                                            <!--    <a href=""> <i class="fa fa-arrow-right"></i>Read More</a>-->
                                            <!--</div>-->
                                        </div>
                                    </div>
                                </div>
                                <!--Feature One Single End-->
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <!--Feature One End-->

        <!--Floor Plan Start-->
        <section class="floor-plan py-5">
            <div class="container">
                <div class="section-title text-center">
                    <span class="section-title__tagline">FLOOR PLANS</span>
                    <h2 class="section-title__title"><?=$val->floorplanheading?></h2>
                    <p class="floor-plan__text"><?=$val->floorplancontent?></p>
                </div>
                <div class="floor-plan__main-tab-box tabs-box">
                    <ul class="tab-buttons clearfix list-unstyled">
                        <!-- <li data-tab="#penthouse" class="tab-btn active-btn"><span><?=$val->buildingname1?></span></li> -->
                        <?php if($val->buildingname1){?><li data-tab="#penthouse" class="tab-btn active-btn"><span><?=$val->buildingname1?></span></li><?php }?>
                        <?php if($val->buildingname2){?><li data-tab="#stuido" class="tab-btn"><span><?=$val->buildingname2?></span></li><?php }?>
                        <?php if($val->buildingname3){?><li data-tab="#stuido3" class="tab-btn"><span><?=$val->buildingname3?></span></li><?php }?>
                        <?php if($val->buildingname4){?><li data-tab="#stuido4" class="tab-btn"><span><?=$val->buildingname4?></span></li><?php }?>
                        <?php if($val->buildingname5){?><li data-tab="#stuido5" class="tab-btn"><span><?=$val->buildingname5?></span></li><?php }?>
                        <?php if($val->buildingname6){?><li data-tab="#stuido6" class="tab-btn"><span><?=$val->buildingname6?></span></li><?php }?>
                        <?php if($val->buildingname7){?><li data-tab="#stuido7" class="tab-btn"><span><?=$val->buildingname7?></span></li><?php }?>
                        <?php if($val->buildingname8){?><li data-tab="#stuido8" class="tab-btn"><span><?=$val->buildingname8?></span></li><?php }?>
                        <?php if($val->buildingname9){?><li data-tab="#stuido9" class="tab-btn"><span><?=$val->buildingname9?></span></li><?php }?>
                        <?php if($val->buildingname10){?><li data-tab="#stuido10" class="tab-btn"><span><?=$val->buildingname10?></span></li><?php }?>
                        <?php if($val->buildingname11){?><li data-tab="#stuido11" class="tab-btn"><span><?=$val->buildingname11?></span></li><?php }?>
                        <?php if($val->buildingname12){?><li data-tab="#stuido12" class="tab-btn"><span><?=$val->buildingname12?></span></li><?php }?>
                        <?php if($val->buildingname13){?><li data-tab="#stuido13" class="tab-btn"><span><?=$val->buildingname13?></span></li><?php }?>
                        <?php if($val->buildingname14){?><li data-tab="#stuido14" class="tab-btn"><span><?=$val->buildingname14?></span></li><?php }?>
                        <?php if($val->buildingname15){?><li data-tab="#stuido15" class="tab-btn"><span><?=$val->buildingname15?></span></li><?php }?>
                        <!--<li data-tab="#duplex" class="tab-btn"><span>Available Units</span></li>-->
                        <a href="<?=$val->website?>" class="thm-btn tab-btn" onclick="window.open('<?=$val->website?>', '_blank')">Unit Specifications</a>


                    </ul>
                    <div class="tabs-content">
                        <!--tab-->
                        <div class="tab active-tab" id="penthouse">
                            <div class="floor-plan__tab-content-inner row">
                                <div class="floor-plan__tab-content-left col-lg-5">
                                    <ul class="list-unstyled floor-plan__tab-content-details">
                                        <li>
                                            <p>Total Area</p>
                                            <span><?=$val->totalarea1?></span>
                                        </li>
                                        <li>
                                            <p><?php if($val->name=='Rio Ranch Commercial Lots' || $val->name=='Rio Ranch 1 Acre Lots'){ echo 'Lot No'; } else{ echo 'Building No';} ?>.</p>
                                            <span><?=$val->building1?></span>
                                        </li>
                                        <li>
                                            <p>Total <?php if($val->name=='Rio Ranch Commercial Lots' || $val->name=='Rio Ranch 1 Acre Lots'){ echo 'Lots'; } else{ echo 'Units';} ?></p>
                                            <span><?=$val->totalunits1?></span>
                                        </li>
                                        <li>
                                            <p>Available <?php if($val->name=='Rio Ranch Commercial Lots' || $val->name=='Rio Ranch 1 Acre Lots'){ echo 'Lots'; } else{ echo 'Units';} ?></p>
                                            <span><?=$val->availableunits1?></span>
                                        </li>
                                        <li>
                                            <p>Parking Available</p>
                                            <span><?=$val->parking1?></span>
                                        </li>
                                        <!-- <li>
                                            <p>Prices From</p>
                                            <span><?=$val->price1?></span>
                                        </li> -->
                                    </ul>
                                </div>
                                <div class="floor-plan__tab-content-righ m-0 col-lg-7">
                                    <img class="w-100"  src="<?php echo base_url()?>admin/uploads/products/<?=$val->floorplan1?>" alt="">
                                </div>
                            </div>
                        </div>
                        <!--tab-->
                        <div class="tab " id="stuido">
                            <div class="floor-plan__tab-content-inner row">
                                <div class="floor-plan__tab-content-left col-lg-5">
                                    <ul class="list-unstyled floor-plan__tab-content-details">
                                        <li>
                                            <p>Total Area</p>
                                            <span><?=$val->totalarea2?></span>
                                        </li>
                                        <li>
                                            <p><?php if($val->name=='Rio Ranch Commercial Lots' || $val->name=='Rio Ranch 1 Acre Lots'){ echo 'Lot No'; } else{ echo 'Building No';} ?>.</p>
                                            <span><?=$val->building2?></span>
                                        </li>
                                        <li>
                                            <p>Total <?php if($val->name=='Rio Ranch Commercial Lots' || $val->name=='Rio Ranch 1 Acre Lots'){ echo 'Lots'; } else{ echo 'Units';} ?></p>
                                            <span><?=$val->totalunits2?></span>
                                        </li>
                                        <li>
                                            <p>Available <?php if($val->name=='Rio Ranch Commercial Lots' || $val->name=='Rio Ranch 1 Acre Lots'){ echo 'Lots'; } else{ echo 'Units';} ?></p>
                                            <span><?=$val->availableunits2?></span>
                                        </li>
                                        <li>
                                            <p>Parking Available</p>
                                            <span><?=$val->parking2?></span>
                                        </li>
                                        <!-- <li>
                                            <p>Prices From</p>
                                            <span><?=$val->price2?></span>
                                        </li> -->
                                    </ul>
                                </div>
                                <div class="floor-plan__tab-content-righ col-lg-7">
                                    <img class="w-100" style=" max-width:100%;" src="<?php echo base_url()?>admin/uploads/products/<?=$val->floorplan2?>" alt="">
                                </div>
                            </div>
                        </div>
                        <!--tab-->
                        <?php if($val->buildingname3){?>
                        <div class="tab " id="stuido3">
                            <div class="floor-plan__tab-content-inner row">
                                <div class="floor-plan__tab-content-left col-lg-5">
                                    <ul class="list-unstyled floor-plan__tab-content-details">
                                        <li>
                                            <p>Total Area</p>
                                            <span><?=$val->totalarea3?></span>
                                        </li>
                                        <li>
                                            <p><?php if($val->name=='Rio Ranch Commercial Lots' || $val->name=='Rio Ranch 1 Acre Lots'){ echo 'Lot No'; } else{ echo 'Building No';} ?>.</p>
                                            <span><?=$val->building3?></span>
                                        </li>
                                        <li>
                                            <p>Total <?php if($val->name=='Rio Ranch Commercial Lots' || $val->name=='Rio Ranch 1 Acre Lots'){ echo 'Lots'; } else{ echo 'Units';} ?></p>
                                            <span><?=$val->totalunits3?></span>
                                        </li>
                                        <li>
                                            <p>Available <?php if($val->name=='Rio Ranch Commercial Lots' || $val->name=='Rio Ranch 1 Acre Lots'){ echo 'Lots'; } else{ echo 'Units';} ?></p>
                                            <span><?=$val->availableunits3?></span>
                                        </li>
                                        <li>
                                            <p>Parking Available</p>
                                            <span><?=$val->parking3?></span>
                                        </li>
                                        <!-- <li>
                                            <p>Prices From</p>
                                            <span><?=$val->price3?></span>
                                        </li> -->
                                    </ul>
                                </div>
                                <div class="floor-plan__tab-content-righ col-lg-7">
                                    <img class="w-100" style=" max-width:100%;" src="<?php echo base_url()?>admin/uploads/products/<?=$val->floorplan3?>" alt="">
                                </div>
                            </div>
                        </div>
                        <?php } ?>
                        <!--tab-->
                        <?php if($val->buildingname4){?>
                        <div class="tab " id="stuido4">
                            <div class="floor-plan__tab-content-inner row">
                                <div class="floor-plan__tab-content-left col-lg-5">
                                    <ul class="list-unstyled floor-plan__tab-content-details">
                                        <li>
                                            <p>Total Area</p>
                                            <span><?=$val->totalarea4?></span>
                                        </li>
                                        <li>
                                            <p><?php if($val->name=='Rio Ranch Commercial Lots' || $val->name=='Rio Ranch 1 Acre Lots'){ echo 'Lot No'; } else{ echo 'Building No';} ?>.</p>
                                            <span><?=$val->building4?></span>
                                        </li>
                                        <li>
                                            <p>Total <?php if($val->name=='Rio Ranch Commercial Lots' || $val->name=='Rio Ranch 1 Acre Lots'){ echo 'Lots'; } else{ echo 'Units';} ?></p>
                                            <span><?=$val->totalunits4?></span>
                                        </li>
                                        <li>
                                            <p>Available <?php if($val->name=='Rio Ranch Commercial Lots' || $val->name=='Rio Ranch 1 Acre Lots'){ echo 'Lots'; } else{ echo 'Units';} ?></p>
                                            <span><?=$val->availableunits4?></span>
                                        </li>
                                        <li>
                                            <p>Parking Available</p>
                                            <span><?=$val->parking4?></span>
                                        </li>
                                      
                                    </ul>
                                </div>
                                <div class="floor-plan__tab-content-righ col-lg-7">
                                    <img class="w-100" style=" max-width:100%;" src="<?php echo base_url()?>admin/uploads/products/<?=$val->floorplan4?>" alt="">
                                </div>
                            </div>
                        </div>
                        <?php } ?>
                        <!--tab-->
                        <?php if($val->buildingname5){?>
                        <div class="tab " id="stuido5">
                            <div class="floor-plan__tab-content-inner row">
                                <div class="floor-plan__tab-content-left col-lg-5">
                                    <ul class="list-unstyled floor-plan__tab-content-details">
                                        <li>
                                            <p>Total Area</p>
                                            <span><?=$val->totalarea5?></span>
                                        </li>
                                        <li>
                                            <p><?php if($val->name=='Rio Ranch Commercial Lots' || $val->name=='Rio Ranch 1 Acre Lots'){ echo 'Lot No'; } else{ echo 'Building No';} ?>.</p>
                                            <span><?=$val->building5?></span>
                                        </li>
                                        <li>
                                            <p>Total <?php if($val->name=='Rio Ranch Commercial Lots' || $val->name=='Rio Ranch 1 Acre Lots'){ echo 'Lots'; } else{ echo 'Units';} ?></p>
                                            <span><?=$val->totalunits5?></span>
                                        </li>
                                        <li>
                                            <p>Available <?php if($val->name=='Rio Ranch Commercial Lots' || $val->name=='Rio Ranch 1 Acre Lots'){ echo 'Lots'; } else{ echo 'Units';} ?></p>
                                            <span><?=$val->availableunits5?></span>
                                        </li>
                                        <li>
                                            <p>Parking Available</p>
                                            <span><?=$val->parking5?></span>
                                        </li>
                                        
                                    </ul>
                                </div>
                                <div class="floor-plan__tab-content-righ col-lg-7">
                                    <img class="w-100" style=" max-width:100%;" src="<?php echo base_url()?>admin/uploads/products/<?=$val->floorplan5?>" alt="">
                                </div>
                            </div>
                        </div>
                        <?php } ?>
                        <!--tab-->
                        <?php if($val->buildingname6){?>
                        <div class="tab " id="stuido6">
                            <div class="floor-plan__tab-content-inner row">
                                <div class="floor-plan__tab-content-left col-lg-5">
                                    <ul class="list-unstyled floor-plan__tab-content-details">
                                        <li>
                                            <p>Total Area</p>
                                            <span><?=$val->totalarea6?></span>
                                        </li>
                                        <li>
                                            <p><?php if($val->name=='Rio Ranch Commercial Lots' || $val->name=='Rio Ranch 1 Acre Lots'){ echo 'Lot No'; } else{ echo 'Building No';} ?>.</p>
                                            <span><?=$val->building6?></span>
                                        </li>
                                        <li>
                                            <p>Total <?php if($val->name=='Rio Ranch Commercial Lots' || $val->name=='Rio Ranch 1 Acre Lots'){ echo 'Lots'; } else{ echo 'Units';} ?></p>
                                            <span><?=$val->totalunits6?></span>
                                        </li>
                                        <li>
                                            <p>Available <?php if($val->name=='Rio Ranch Commercial Lots' || $val->name=='Rio Ranch 1 Acre Lots'){ echo 'Lots'; } else{ echo 'Units';} ?></p>
                                            <span><?=$val->availableunits6?></span>
                                        </li>
                                        <li>
                                            <p>Parking Available</p>
                                            <span><?=$val->parking6?></span>
                                        </li>
                                      
                                    </ul>
                                </div>
                                <div class="floor-plan__tab-content-righ col-lg-7">
                                    <img class="w-100" style=" max-width:100%;" src="<?php echo base_url()?>admin/uploads/products/<?=$val->floorplan6?>" alt="">
                                </div>
                            </div>
                        </div>
                        <?php } ?>
                        <!--tab-->
                        <?php if($val->buildingname7){?>
                        <div class="tab " id="stuido7">
                            <div class="floor-plan__tab-content-inner row">
                                <div class="floor-plan__tab-content-left col-lg-5">
                                    <ul class="list-unstyled floor-plan__tab-content-details">
                                        <li>
                                            <p>Total Area</p>
                                            <span><?=$val->totalarea7?></span>
                                        </li>
                                        <li>
                                            <p><?php if($val->name=='Rio Ranch Commercial Lots' || $val->name=='Rio Ranch 1 Acre Lots'){ echo 'Lot No'; } else{ echo 'Building No';} ?>.</p>
                                            <span><?=$val->building7?></span>
                                        </li>
                                        <li>
                                            <p>Total <?php if($val->name=='Rio Ranch Commercial Lots' || $val->name=='Rio Ranch 1 Acre Lots'){ echo 'Lots'; } else{ echo 'Units';} ?></p>
                                            <span><?=$val->totalunits7?></span>
                                        </li>
                                        <li>
                                            <p>Available <?php if($val->name=='Rio Ranch Commercial Lots' || $val->name=='Rio Ranch 1 Acre Lots'){ echo 'Lots'; } else{ echo 'Units';} ?></p>
                                            <span><?=$val->availableunits7?></span>
                                        </li>
                                        <li>
                                            <p>Parking Available</p>
                                            <span><?=$val->parking7?></span>
                                        </li>
                                        <li>
                                            <p>Prices From</p>
                                            <span><?=$val->price7?></span>
                                        </li>
                                    </ul>
                                </div>
                                <div class="floor-plan__tab-content-righ col-lg-7">
                                    <img class="w-100" style=" max-width:100%;" src="<?php echo base_url()?>admin/uploads/products/<?=$val->floorplan7?>" alt="">
                                </div>
                            </div>
                        </div>
                        <?php } ?>
                        <!--tab-->
                        <?php if($val->buildingname8){?>
                        <div class="tab " id="stuido8">
                            <div class="floor-plan__tab-content-inner row">
                                <div class="floor-plan__tab-content-left col-lg-5">
                                    <ul class="list-unstyled floor-plan__tab-content-details">
                                        <li>
                                            <p>Total Area</p>
                                            <span><?=$val->totalarea8?></span>
                                        </li>
                                        <li>
                                            <p><?php if($val->name=='Rio Ranch Commercial Lots' || $val->name=='Rio Ranch 1 Acre Lots'){ echo 'Lot No'; } else{ echo 'Building No';} ?>.</p>
                                            <span><?=$val->building8?></span>
                                        </li>
                                        <li>
                                            <p>Total <?php if($val->name=='Rio Ranch Commercial Lots' || $val->name=='Rio Ranch 1 Acre Lots'){ echo 'Lots'; } else{ echo 'Units';} ?></p>
                                            <span><?=$val->totalunits8?></span>
                                        </li>
                                        <li>
                                            <p>Available <?php if($val->name=='Rio Ranch Commercial Lots' || $val->name=='Rio Ranch 1 Acre Lots'){ echo 'Lots'; } else{ echo 'Units';} ?></p>
                                            <span><?=$val->availableunits8?></span>
                                        </li>
                                        <li>
                                            <p>Parking Available</p>
                                            <span><?=$val->parking8?></span>
                                        </li>
                                        <li>
                                            <p>Prices From</p>
                                            <span><?=$val->price8?></span>
                                        </li>
                                    </ul>
                                </div>
                                <div class="floor-plan__tab-content-righ col-lg-7">
                                    <img class="w-100" style=" max-width:100%;" src="<?php echo base_url()?>admin/uploads/products/<?=$val->floorplan8?>" alt="">
                                </div>
                            </div>
                        </div>
                        <?php } ?>
                        <!--tab-->
                        <?php if($val->buildingname9){?>
                        <div class="tab " id="stuido9">
                            <div class="floor-plan__tab-content-inner row">
                                <div class="floor-plan__tab-content-left col-lg-5">
                                    <ul class="list-unstyled floor-plan__tab-content-details">
                                        <li>
                                            <p>Total Area</p>
                                            <span><?=$val->totalarea9?></span>
                                        </li>
                                        <li>
                                            <p><?php if($val->name=='Rio Ranch Commercial Lots' || $val->name=='Rio Ranch 1 Acre Lots'){ echo 'Lot No'; } else{ echo 'Building No';} ?>.</p>
                                            <span><?=$val->building9?></span>
                                        </li>
                                        <li>
                                            <p>Total <?php if($val->name=='Rio Ranch Commercial Lots' || $val->name=='Rio Ranch 1 Acre Lots'){ echo 'Lots'; } else{ echo 'Units';} ?></p>
                                            <span><?=$val->totalunits9?></span>
                                        </li>
                                        <li>
                                            <p>Available <?php if($val->name=='Rio Ranch Commercial Lots' || $val->name=='Rio Ranch 1 Acre Lots'){ echo 'Lots'; } else{ echo 'Units';} ?></p>
                                            <span><?=$val->availableunits9?></span>
                                        </li>
                                        <li>
                                            <p>Parking Available</p>
                                            <span><?=$val->parking9?></span>
                                        </li>
                                        <li>
                                            <p>Prices From</p>
                                            <span><?=$val->price9?></span>
                                        </li>
                                    </ul>
                                </div>
                                <div class="floor-plan__tab-content-righ col-lg-7">
                                    <img class="w-100" style=" max-width:100%;" src="<?php echo base_url()?>admin/uploads/products/<?=$val->floorplan9?>" alt="">
                                </div>
                            </div>
                        </div>
                        <?php } ?>
                        <!--tab-->
                        <?php if($val->buildingname10){?>
                        <div class="tab " id="stuido10">
                            <div class="floor-plan__tab-content-inner row">
                                <div class="floor-plan__tab-content-left col-lg-5">
                                    <ul class="list-unstyled floor-plan__tab-content-details">
                                        <li>
                                            <p>Total Area</p>
                                            <span><?=$val->totalarea10?></span>
                                        </li>
                                        <li>
                                            <p><?php if($val->name=='Rio Ranch Commercial Lots' || $val->name=='Rio Ranch 1 Acre Lots'){ echo 'Lot No'; } else{ echo 'Building No';} ?>.</p>
                                            <span><?=$val->building10?></span>
                                        </li>
                                        <li>
                                            <p>Total <?php if($val->name=='Rio Ranch Commercial Lots' || $val->name=='Rio Ranch 1 Acre Lots'){ echo 'Lots'; } else{ echo 'Units';} ?></p>
                                            <span><?=$val->totalunits10?></span>
                                        </li>
                                        <li>
                                            <p>Available <?php if($val->name=='Rio Ranch Commercial Lots' || $val->name=='Rio Ranch 1 Acre Lots'){ echo 'Lots'; } else{ echo 'Units';} ?></p>
                                            <span><?=$val->availableunits10?></span>
                                        </li>
                                        <li>
                                            <p>Parking Available</p>
                                            <span><?=$val->parking10?></span>
                                        </li>
                                        <li>
                                            <p>Prices From</p>
                                            <span><?=$val->price10?></span>
                                        </li>
                                    </ul>
                                </div>
                                <div class="floor-plan__tab-content-righ col-lg-7">
                                    <img class="w-100" style=" max-width:100%;" src="<?php echo base_url()?>admin/uploads/products/<?=$val->floorplan10?>" alt="">
                                </div>
                            </div>
                        </div>
                        <?php } ?>
                        <!--tab-->
                        <?php if($val->buildingname11){?>
                        <div class="tab " id="stuido11">
                            <div class="floor-plan__tab-content-inner row">
                                <div class="floor-plan__tab-content-left col-lg-5">
                                    <ul class="list-unstyled floor-plan__tab-content-details">
                                        <li>
                                            <p>Total Area</p>
                                            <span><?=$val->totalarea11?></span>
                                        </li>
                                        <li>
                                            <p><?php if($val->name=='Rio Ranch Commercial Lots' || $val->name=='Rio Ranch 1 Acre Lots'){ echo 'Lot No'; } else{ echo 'Building No';} ?>.</p>
                                            <span><?=$val->building11?></span>
                                        </li>
                                        <li>
                                            <p>Total <?php if($val->name=='Rio Ranch Commercial Lots' || $val->name=='Rio Ranch 1 Acre Lots'){ echo 'Lots'; } else{ echo 'Units';} ?></p>
                                            <span><?=$val->totalunits11?></span>
                                        </li>
                                        <li>
                                            <p>Available <?php if($val->name=='Rio Ranch Commercial Lots' || $val->name=='Rio Ranch 1 Acre Lots'){ echo 'Lots'; } else{ echo 'Units';} ?></p>
                                            <span><?=$val->availableunits11?></span>
                                        </li>
                                        <li>
                                            <p>Parking Available</p>
                                            <span><?=$val->parking11?></span>
                                        </li>
                                        <li>
                                            <p>Prices From</p>
                                            <span><?=$val->price11?></span>
                                        </li>
                                    </ul>
                                </div>
                                <div class="floor-plan__tab-content-righ col-lg-7">
                                    <img class="w-100" style=" max-width:100%;" src="<?php echo base_url()?>admin/uploads/products/<?=$val->floorplan11?>" alt="">
                                </div>
                            </div>
                        </div>
                        <?php } ?>
                        <!--tab-->
                        <?php if($val->buildingname12){?>
                        <div class="tab " id="stuido12">
                            <div class="floor-plan__tab-content-inner row">
                                <div class="floor-plan__tab-content-left col-lg-5">
                                    <ul class="list-unstyled floor-plan__tab-content-details">
                                        <li>
                                            <p>Total Area</p>
                                            <span><?=$val->totalarea12?></span>
                                        </li>
                                        <li>
                                            <p><?php if($val->name=='Rio Ranch Commercial Lots' || $val->name=='Rio Ranch 1 Acre Lots'){ echo 'Lot No'; } else{ echo 'Building No';} ?>.</p>
                                            <span><?=$val->building12?></span>
                                        </li>
                                        <li>
                                            <p>Total <?php if($val->name=='Rio Ranch Commercial Lots' || $val->name=='Rio Ranch 1 Acre Lots'){ echo 'Lots'; } else{ echo 'Units';} ?></p>
                                            <span><?=$val->totalunits12?></span>
                                        </li>
                                        <li>
                                            <p>Available <?php if($val->name=='Rio Ranch Commercial Lots' || $val->name=='Rio Ranch 1 Acre Lots'){ echo 'Lots'; } else{ echo 'Units';} ?></p>
                                            <span><?=$val->availableunits12?></span>
                                        </li>
                                        <li>
                                            <p>Parking Available</p>
                                            <span><?=$val->parking12?></span>
                                        </li>
                                        <li>
                                            <p>Prices From</p>
                                            <span><?=$val->price12?></span>
                                        </li>
                                    </ul>
                                </div>
                                <div class="floor-plan__tab-content-righ col-lg-7">
                                    <img class="w-100" style=" max-width:100%;" src="<?php echo base_url()?>admin/uploads/products/<?=$val->floorplan12?>" alt="">
                                </div>
                            </div>
                        </div>
                        <?php } ?>
                        <!--tab-->
                        <?php if($val->buildingname13){?>
                        <div class="tab " id="stuido13">
                            <div class="floor-plan__tab-content-inner row">
                                <div class="floor-plan__tab-content-left col-lg-5">
                                    <ul class="list-unstyled floor-plan__tab-content-details">
                                        <li>
                                            <p>Total Area</p>
                                            <span><?=$val->totalarea13?></span>
                                        </li>
                                        <li>
                                            <p><?php if($val->name=='Rio Ranch Commercial Lots' || $val->name=='Rio Ranch 1 Acre Lots'){ echo 'Lot No'; } else{ echo 'Building No';} ?>.</p>
                                            <span><?=$val->building13?></span>
                                        </li>
                                        <li>
                                            <p>Total <?php if($val->name=='Rio Ranch Commercial Lots' || $val->name=='Rio Ranch 1 Acre Lots'){ echo 'Lots'; } else{ echo 'Units';} ?></p>
                                            <span><?=$val->totalunits13?></span>
                                        </li>
                                        <li>
                                            <p>Available <?php if($val->name=='Rio Ranch Commercial Lots' || $val->name=='Rio Ranch 1 Acre Lots'){ echo 'Lots'; } else{ echo 'Units';} ?></p>
                                            <span><?=$val->availableunits13?></span>
                                        </li>
                                        <li>
                                            <p>Parking Available</p>
                                            <span><?=$val->parking13?></span>
                                        </li>
                                        <li>
                                            <p>Prices From</p>
                                            <span><?=$val->price13?></span>
                                        </li>
                                    </ul>
                                </div>
                                <div class="floor-plan__tab-content-righ col-lg-7">
                                    <img class="w-100" style=" max-width:100%;" src="<?php echo base_url()?>admin/uploads/products/<?=$val->floorplan13?>" alt="">
                                </div>
                            </div>
                        </div>
                        <?php } ?>
                        <!--tab-->
                        <?php if($val->buildingname14){?>
                        <div class="tab " id="stuido14">
                            <div class="floor-plan__tab-content-inner row">
                                <div class="floor-plan__tab-content-left col-lg-5">
                                    <ul class="list-unstyled floor-plan__tab-content-details">
                                        <li>
                                            <p>Total Area</p>
                                            <span><?=$val->totalarea14?></span>
                                        </li>
                                        <li>
                                            <p><?php if($val->name=='Rio Ranch Commercial Lots' || $val->name=='Rio Ranch 1 Acre Lots'){ echo 'Lot No'; } else{ echo 'Building No';} ?>.</p>
                                            <span><?=$val->building14?></span>
                                        </li>
                                        <li>
                                            <p>Total <?php if($val->name=='Rio Ranch Commercial Lots' || $val->name=='Rio Ranch 1 Acre Lots'){ echo 'Lots'; } else{ echo 'Units';} ?></p>
                                            <span><?=$val->totalunits14?></span>
                                        </li>
                                        <li>
                                            <p>Available <?php if($val->name=='Rio Ranch Commercial Lots' || $val->name=='Rio Ranch 1 Acre Lots'){ echo 'Lots'; } else{ echo 'Units';} ?></p>
                                            <span><?=$val->availableunits14?></span>
                                        </li>
                                        <li>
                                            <p>Parking Available</p>
                                            <span><?=$val->parking14?></span>
                                        </li>
                                        <li>
                                            <p>Prices From</p>
                                            <span><?=$val->price14?></span>
                                        </li>
                                    </ul>
                                </div>
                                <div class="floor-plan__tab-content-righ col-lg-7">
                                    <img class="w-100" style=" max-width:100%;" src="<?php echo base_url()?>admin/uploads/products/<?=$val->floorplan14?>" alt="">
                                </div>
                            </div>
                        </div>
                        <?php } ?>
                        <!--tab-->
                        <?php if($val->buildingname15){?>
                        <div class="tab " id="stuido15">
                            <div class="floor-plan__tab-content-inner row">
                                <div class="floor-plan__tab-content-left col-lg-5">
                                    <ul class="list-unstyled floor-plan__tab-content-details">
                                        <li>
                                            <p>Total Area</p>
                                            <span><?=$val->totalarea15?></span>
                                        </li>
                                        <li>
                                            <p><?php if($val->name=='Rio Ranch Commercial Lots' || $val->name=='Rio Ranch 1 Acre Lots'){ echo 'Lot No'; } else{ echo 'Building No';} ?>.</p>
                                            <span><?=$val->building15?></span>
                                        </li>
                                        <li>
                                            <p>Total <?php if($val->name=='Rio Ranch Commercial Lots' || $val->name=='Rio Ranch 1 Acre Lots'){ echo 'Lots'; } else{ echo 'Units';} ?></p>
                                            <span><?=$val->totalunits15?></span>
                                        </li>
                                        <li>
                                            <p>Available <?php if($val->name=='Rio Ranch Commercial Lots' || $val->name=='Rio Ranch 1 Acre Lots'){ echo 'Lots'; } else{ echo 'Units';} ?></p>
                                            <span><?=$val->availableunits15?></span>
                                        </li>
                                        <li>
                                            <p>Parking Available</p>
                                            <span><?=$val->parking15?></span>
                                        </li>
                                        <li>
                                            <p>Prices From</p>
                                            <span><?=$val->price15?></span>
                                        </li>
                                    </ul>
                                </div>
                                <div class="floor-plan__tab-content-righ col-lg-7">
                                    <img class="w-100" style=" max-width:100%;" src="<?php echo base_url()?>admin/uploads/products/<?=$val->floorplan15?>" alt="">
                                </div>
                            </div>
                        </div>
                        <?php } ?>
                        <!--tab-->
                        <div class="tab " id="duplex">
                            <div class="floor-plan__tab-content-inner row">
                                <div class="floor-plan__tab-content-left col-lg-5">
                                    <ul class="list-unstyled floor-plan__tab-content-details">
                                        <li>
                                            <p>Total area</p>
                                            <span>2800 Sq. Ft</span>
                                        </li>
                                        <li>
                                            <p>Floor no.</p>
                                            <span>2nd</span>
                                        </li>
                                        <li>
                                            <p>Current status</p>
                                            <span>Available</span>
                                        </li>
                                        <li>
                                            <p>No. of rooms</p>
                                            <span>04</span>
                                        </li>
                                        <li>
                                            <p>Parking available</p>
                                            <span>Yes</span>
                                        </li>
                                        <li>
                                            <p>Price from</p>
                                            <span>$4500</span>
                                        </li>
                                    </ul>
                                </div>
                                <div class="floor-plan__tab-content-righ col-lg-7">
                                    <img src="<?php echo base_url()?>assets/assets1/images/resources/floor-plan-tab-content-img-1.png" alt="">
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <!--Floor Plan End-->
        
           <section class="specialize-section-two alternate mb-5 pt-0 mt-0" >
        <div class="auto-container">
            <div class="row">
                <!-- Title Column -->
                <div class="title-column col-lg-5 col-md-12 col-sm-12">
                    <div class="inner-column">
                        <div class="sec-title">
                            <span class="float-text"><?=$val->gallerybehind?></span>
                            <h2><?=$val->galleryheading?></h2>
                        </div>

                        <div class="text-box">
                            <h4><?=$val->gallerysubheading?></h4>
                            <p><?=$val->amenities?></p>
                          </div>
                        <!--<div class="link-box">-->
                        <!--    <a href="#">Read More <i class="fa fa-angle-double-right"></i></a>-->
                        <!--</div>-->
                    </div>
                </div>
                
                <!-- Carousel Column -->
                <div class="carousel-column col-lg-7 col-md-12 col-sm-12">
                    <div class="inner-column">
                        <div class="carousel-outer">
                            <ul class="image-carousel owl-carousel owl-theme">
                                <?php
                                $photos=explode(',',$val->photos);
                                foreach($photos as $photo){
                                ?>
    
                                <li><a href="<?php echo base_url()?>admin/uploads/products/<?=$photo?>" class="lightbox-image" title="Image Caption Here"><img src="<?php echo base_url()?>admin/uploads/products/<?=$photo?>" style="height: 400px;" alt=""></a></li>
          <?php } ?>                      
                              </ul>
                            
                            <ul class="thumbs-carousel owl-carousel owl-theme">
                                <?php
                                foreach($photos as $photo){
?>
                                <li class="thumb-box">
                                    <figure><img src="<?php echo base_url()?>admin/uploads/products/<?=$photo?>" alt=""></figure>
                                    <div class="overlay"><span class="icon fa fa-search"></span></div>
                                </li>
                             <?php } ?>   
                            </ul>
                        </div>
                    </div>
                </div>
            </div>

        </div>
    </section>

        <!--Apartments One Start-->
        <section class="apartments-one">
    <div class="container">
        <div class="section-title text-center">
            <span class="section-title__tagline">ESTABLISHED SITES</span>
            <h2 class="section-title__title">Transforming Properties Into Unique Visions</h2>
        </div>
        <div class="thm-swiper__slider swiper-container" style="height:300px;" data-swiper-options='{"spaceBetween": 30, "slidesPerView": 1,"loop": true, "autoplay": { "delay": 5000 }, "breakpoints": {
            "575": {
                "spaceBetween": 30,
                "slidesPerView": 2
            },
            "767": {
                "spaceBetween": 50,
                "slidesPerView": 3
            },
            "991": {
                "spaceBetween": 50,
                "slidesPerView": 4
            }
        }}'>
            <div class="swiper-wrapper">
                <!--Apartments One Single Start-->
               <?php
                                    $pid=$val->id;
                                    $query2 = $this->db->select('sname')
                  ->from('projectsites')
                  ->where('pid', $pid)
                  ->get();
$sites = $query2->result();

// Outputting the fetched data using a foreach loop
foreach ($sites as $site) {
    $sname = $site->sname;
                                    ?>
                <div class="swiper-slide">
                    <div class="apartments-one__single">
                        <div class="apartments-one__img" style="height:300px; display:flex; align-items:center; justify-content:center; overflow:hidden;">
                            <img src="<?php echo base_url()?>admin/uploads/products/<?=$sname?>" alt="" style="height:inherit;">
                        </div>
                    </div>
                </div>
          <?php } ?>
            </div>
        </div>
    </div>
</section>

        <!--Apartments One End-->

        <!--Neighborhoods Start-->
        <section class="neighborhoods pt-5">
            <div class="neighborhoods-bg"
                style="background-image: url(<?php echo base_url()?>assets/assets1/images/backgrounds/neighborhoods-bg.jpg);"></div>
            <div class="container">
                <div class="section-title text-center">
                    <span class="section-title__tagline">NEAR BY AREAS</span>
                    <h2 class="section-title__title">Neighborhoods</h2>
                </div>
                <div class="row">
                    <div class="col-xl-4 col-lg-5">
                        <div class="neighborhoods__left">
                            <div class="neighborhoods__faq">
                                <div class="accrodion-grp" data-grp-name="faq-one-accrodion">
                                    <div class="accrodion active">
                                        <div class="accrodion-title">
                                            <h4>Castle Hills Residential Community</h4>
                                        </div>
                                        <div class="accrodion-content">
                                            <div class="inner">
                                                <p>TX: 2,900-acre award-winning community with 4,300+ homes, fostering living, working, playing, and thriving.</p>
                                            </div><!-- /.inner -->
                                        </div>
                                    </div>
                                    <div class="accrodion">
                                        <div class="accrodion-title">
                                            <h4>Walmart Super Centre Lewisville</h4>
                                        </div>
                                        <div class="accrodion-content">
                                            <div class="inner">
                                                <p>Conveniently located, find all you need at Lewisville Walmart: furniture, bikes, toys, clothing, and more.</p>
                                            </div><!-- /.inner -->
                                        </div>
                                    </div>
                                    <div class="accrodion">
                                        <div class="accrodion-title">
                                            <h4>Nebraska Furniture Mart</h4>
                                        </div>
                                        <div class="accrodion-content">
                                            <div class="inner">
                                                <p>Selling cheap, telling truth, offering selection, and service, improving people's lifestyles since inception.</p>
                                            </div><!-- /.inner -->
                                        </div>
                                    </div>
                                    <div class="accrodion last-child">
                                        <div class="accrodion-title">
                                            <h4>The Colony High School</h4>
                                        </div>
                                        <div class="accrodion-content">
                                            <div class="inner">
                                                <p>Cougar Nation empowers students for academic excellence and caring, responsible citizenship in a nurturing environment.</p>
                                            </div><!-- /.inner -->
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-xl-8 col-lg-7">
                        <div class="neighborhoods__right">
                            <div class="neighborhoods__img-box">
                                <div class="neighborhoods__img">
                                    <!-- <img src="<?php echo base_url()?>assets/assets1/images/resources/neighborhoods-img-1.jpg" alt=""> -->
                                    <!-- <img src="<?php echo base_url()?>assets/assets1/images/resources/neighborhoods-img-1.jpg" alt=""> -->
                                     <?php
                                        $pid = $val->id;

                                        // Fetch the single project row
                                        $project = $this->db->select('nearby')
                                                            ->from('projects')
                                                            ->where('id', $pid)
                                                            ->get()
                                                            ->row();

                                        if ($project && !empty($project->nearby)) { ?>
                                            
                                            <img src="<?php echo base_url('admin/uploads/products/'.$project->nearby); ?>" alt="" style="width:100%; height:92%;">

                                        <?php } else { ?>

                                            <!-- Fallback image -->
                                            <img src="<?php echo base_url('assets/assets1/images/resources/neighborhoods-img-1.jpg'); ?>" alt="" >

                                        <?php } ?>

                                </div>
                                <!-- 
<div class="neighborhoods__location-1">
    <div class="neighborhoods__map-markar"></div>
    <div class="neighborhoods__popup-box">
        <div class="neighborhoods__popup">
            <div class="neighborhoods__popup-inner">
                <h5 class="neighborhoods__popup-title">
                    <img style="width:50px" src="<?php echo base_url()?>assets/assets1/images/resources/tchslogo.png"/>
                </h5>
                <p class="neighborhoods__popup-text">
                    Cougar Nation empowers students for academic excellence and caring, responsible citizenship in a nurturing environment.
                </p>
                <!-- <span class="neighborhoods__popup-km">13.5KM</span> -->
            <!--</div>
        </div>
    </div>
</div>
-->

<!-- 
<div class="neighborhoods__location-1 neighborhoods__location-2">
    <div class="neighborhoods__map-markar neighborhoods__map-markar-2"></div>
    <div class="neighborhoods__popup-box">
        <div class="neighborhoods__popup">
            <div class="neighborhoods__popup-inner">
                <h5 class="neighborhoods__popup-title">
                    <img style="width:60px" src="<?php echo base_url()?>assets/assets1/images/resources/nfmlogo.png"/>
                </h5>
                <p class="neighborhoods__popup-text">
                    Selling cheap, telling truth, offering selection, and service, improving people's lifestyles since inception.
                </p>
                <!-- <span class="neighborhoods__popup-km">13.5KM</span> -->
           <!-- </div>
        </div>
    </div>
</div>
-->

<!-- 
<div class="neighborhoods__location-1 neighborhoods__location-3">
    <div class="neighborhoods__map-markar neighborhoods__map-markar-3"></div>
    <div class="neighborhoods__popup-box">
        <div class="neighborhoods__popup">
            <div class="neighborhoods__popup-inner">
                <h5 class="neighborhoods__popup-title">
                    <img style="width:100px" src="<?php echo base_url()?>assets/assets1/images/resources/castlelogo.png"/>
                </h5>
                <p class="neighborhoods__popup-text">
                    TX: 2,900-acre award-winning community with 4,300+ homes, fostering living, working, playing, and thriving.
                </p>
                <!-- <span class="neighborhoods__popup-km">13.5KM</span> -->
            <!--</div>
        </div>
    </div>
</div>
-->

<!-- 
<div class="neighborhoods__location-1 neighborhoods__location-4">
    <div class="neighborhoods__map-markar neighborhoods__map-markar-4"></div>
    <div class="neighborhoods__popup-box">
        <div class="neighborhoods__popup">
            <div class="neighborhoods__popup-inner">
                <h5 class="neighborhoods__popup-title">
                    <img style="width:100px" src="<?php echo base_url()?>assets/assets1/images/resources/wallmart.png"/>
                </h5>
                <p class="neighborhoods__popup-text">
                    Conveniently located, find all you need at Lewisville Walmart: furniture, bikes, toys, clothing, and more.
                </p>
                <!-- <span class="neighborhoods__popup-km">13.5KM</span> -->
           <!-- </div>
        </div>
    </div>
</div>
-->

                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <!--Neighborhoods End-->



          <!-- News Section -->
    <!-- <section class="news-section pb-4">
        <div class="auto-container">
            <div class="sec-title">
                <span class="float-text">Blogs</span>
                <h2>News & Articles</h2>
            </div>
            <div class="row">
                <!-- News Block -->
                <!-- <div class="news-block col-lg-4 col-md-6 col-sm-12">
                    <div class="inner-box">
                        <div class="caption-box">
                             <div class="image-box">
                            <figure class="image"><img src="<?php echo base_url(); ?>assets/images/resource/news-1.jpg" alt=""></figure>
                            <div class="overlay-box"><a href="#"><i class="fa fa-link"></i></a></div>
                        </div>
                        <ul class="info">
                                <li>06 June 2023,</li>
                                <li>John Smith</li>
                            </ul>
                            <h3><a href="#">In Good Taste: Mark Finlay Architects & Interiors.</a></h3>
                            <p>In Good Taste: Mark Finlay Architects & Interiors.In Good Taste: Mark Finlay Architects & Interior Finlay Architects & Interiors.</p>
                            <div class="link-box">
                                    <a href="#">Read More <i class="fa fa-long-arrow-right"></i></a>
                                </div>
                        </div>
                    </div>
                </div> -->

                <!-- News Block -->
                <!-- <div class="news-block col-lg-4 col-md-6 col-sm-12">
                    <div class="inner-box">
                        <div class="caption-box">
                             <div class="image-box">
                            <figure class="image"><img src="<?php echo base_url(); ?>assets/images/resource/news-1.jpg" alt=""></figure>
                            <div class="overlay-box"><a href="#"><i class="fa fa-link"></i></a></div>
                        </div>
                        <ul class="info">
                                <li>06 June 2023,</li>
                                <li>John Smith</li>
                            </ul>
                            <h3><a href="#">In Good Taste: Mark Finlay Architects & Interiors.</a></h3>
                            <p>In Good Taste: Mark Finlay Architects & Interiors.In Good Taste: Mark Finlay Architects & Interior Finlay Architects & Interiors.</p>
                            <div class="link-box">
                                    <a href="#">Read More <i class="fa fa-long-arrow-right"></i></a>
                                </div>
                        </div>
                    </div>
                </div> -->

                <!-- News Block -->
                <!-- <div class="news-block col-lg-4 col-md-6 col-sm-12">
                    <div class="inner-box">
                        <div class="caption-box">
                             <div class="image-box">
                            <figure class="image"><img src="<?php echo base_url(); ?>assets/images/resource/news-1.jpg" alt=""></figure>
                            <div class="overlay-box"><a href="#"><i class="fa fa-link"></i></a></div>
                        </div>
                        <ul class="info">
                                <li>06 June 2023,</li>
                                <li>John Smith</li>
                            </ul>
                            <h3><a href="#">In Good Taste: Mark Finlay Architects & Interiors.</a></h3>
                            <p>In Good Taste: Mark Finlay Architects & Interiors.In Good Taste: Mark Finlay Architects & Interior  Finlay Architects & Interiors.</p>
                            <div class="link-box">
                                    <a href="#">Read More <i class="fa fa-long-arrow-right"></i></a>
                                </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section> -->
    <!--End News Section -->


        <!--Gallery One Start-->
        <section class="gallery-one">
            <div class="sec-title auto-container">
                <span class="float-text">Youtube</span>
                <h2>Videos</h2>
            </div>
            <div class="gallery-one__container">
                <div class="gallery-one__carousel thm-owl__carousel owl-theme owl-carousel" data-owl-options='{
                    "items": 5,
                    "margin": 0,
                    "smartSpeed": 700,
                    "loop":false,
                    "autoplay": 6000,
                    "nav":true,
                    "dots":false,
                    "navText": ["<span class=\"fa fa-angle-left\"></span>","<span class=\"fa fa-angle-right\"></span>"],
                    "responsive":{
                        "0":{
                            "items":1
                        },
                        "768":{
                            "items":3
                        },
                        "992":{
                            "items": 4
                        },
                        "1200":{
                            "items": 4
                        }
                    }
                }'>
                    
                  <?php if($val->y1){?>
                    <div class="item">
                        <div class="gallery-one__single">
                            <div class="gallery-one__img">
                                <img class="youtube-thumbnail" data-video-url="<?=$val->y1?>" alt="">
                                <div class="gallery-one__icon">
                                    <a class="video-popup" href="<?=$val->y1?>"><span class="fa "><svg xmlns="http://www.w3.org/2000/svg" width="3.43em" height="3em" viewBox="0 0 256 180"><path fill="#f00" d="M250.346 28.075A32.18 32.18 0 0 0 227.69 5.418C207.824 0 127.87 0 127.87 0S47.912.164 28.046 5.582A32.18 32.18 0 0 0 5.39 28.24c-6.009 35.298-8.34 89.084.165 122.97a32.18 32.18 0 0 0 22.656 22.657c19.866 5.418 99.822 5.418 99.822 5.418s79.955 0 99.82-5.418a32.18 32.18 0 0 0 22.657-22.657c6.338-35.348 8.291-89.1-.164-123.134"/><path fill="#fff" d="m102.421 128.06l66.328-38.418l-66.328-38.418z"/></svg></span></a>
                                </div>
                            </div>
                        </div>
                    </div>
                   <?php } if($val->y2){?>
                    <div class="item">
                        <div class="gallery-one__single">
                            <div class="gallery-one__img">
                                <img class="youtube-thumbnail" data-video-url="<?=$val->y2?>" alt="">
                                <div class="gallery-one__icon">
                                    <a class="video-popup" href="<?=$val->y2?>"><span class="fa "><svg xmlns="http://www.w3.org/2000/svg" width="3.43em" height="3em" viewBox="0 0 256 180"><path fill="#f00" d="M250.346 28.075A32.18 32.18 0 0 0 227.69 5.418C207.824 0 127.87 0 127.87 0S47.912.164 28.046 5.582A32.18 32.18 0 0 0 5.39 28.24c-6.009 35.298-8.34 89.084.165 122.97a32.18 32.18 0 0 0 22.656 22.657c19.866 5.418 99.822 5.418 99.822 5.418s79.955 0 99.82-5.418a32.18 32.18 0 0 0 22.657-22.657c6.338-35.348 8.291-89.1-.164-123.134"/><path fill="#fff" d="m102.421 128.06l66.328-38.418l-66.328-38.418z"/></svg></span></a>
                                </div>
                            </div>
                        </div>
                    </div>
                    <?php } if($val->y3){?>
                    <div class="item">
                        <div class="gallery-one__single">
                            <div class="gallery-one__img">
                                <img class="youtube-thumbnail" data-video-url="<?=$val->y3?>" alt="">
                                <div class="gallery-one__icon">
                                    <a class="video-popup" href="<?=$val->y3?>"><span class="fa "><svg xmlns="http://www.w3.org/2000/svg" width="3.43em" height="3em" viewBox="0 0 256 180"><path fill="#f00" d="M250.346 28.075A32.18 32.18 0 0 0 227.69 5.418C207.824 0 127.87 0 127.87 0S47.912.164 28.046 5.582A32.18 32.18 0 0 0 5.39 28.24c-6.009 35.298-8.34 89.084.165 122.97a32.18 32.18 0 0 0 22.656 22.657c19.866 5.418 99.822 5.418 99.822 5.418s79.955 0 99.82-5.418a32.18 32.18 0 0 0 22.657-22.657c6.338-35.348 8.291-89.1-.164-123.134"/><path fill="#fff" d="m102.421 128.06l66.328-38.418l-66.328-38.418z"/></svg></span></a>
                                </div>
                            </div>
                        </div>
                    </div>
                    <?php } if($val->y4){?>
                    <div class="item">
                        <div class="gallery-one__single">
                            <div class="gallery-one__img">
                                <img class="youtube-thumbnail" data-video-url="<?=$val->y4?>" alt="">
                                <div class="gallery-one__icon">
                                    <a class="video-popup" href="<?=$val->y4?>"><span class="fa "><svg xmlns="http://www.w3.org/2000/svg" width="3.43em" height="3em" viewBox="0 0 256 180"><path fill="#f00" d="M250.346 28.075A32.18 32.18 0 0 0 227.69 5.418C207.824 0 127.87 0 127.87 0S47.912.164 28.046 5.582A32.18 32.18 0 0 0 5.39 28.24c-6.009 35.298-8.34 89.084.165 122.97a32.18 32.18 0 0 0 22.656 22.657c19.866 5.418 99.822 5.418 99.822 5.418s79.955 0 99.82-5.418a32.18 32.18 0 0 0 22.657-22.657c6.338-35.348 8.291-89.1-.164-123.134"/><path fill="#fff" d="m102.421 128.06l66.328-38.418l-66.328-38.418z"/></svg></span></a>
                                </div>
                            </div>
                        </div>
                    </div>
                    <?php } if($val->y5){?>
                     <div class="item">
                        <div class="gallery-one__single">
                            <div class="gallery-one__img">
                                <img class="youtube-thumbnail" data-video-url="<?=$val->y5?>" alt="">
                                <div class="gallery-one__icon">
                                    <a class="video-popup" href="<?=$val->y5?>"><span class="fa "><svg xmlns="http://www.w3.org/2000/svg" width="3.43em" height="3em" viewBox="0 0 256 180"><path fill="#f00" d="M250.346 28.075A32.18 32.18 0 0 0 227.69 5.418C207.824 0 127.87 0 127.87 0S47.912.164 28.046 5.582A32.18 32.18 0 0 0 5.39 28.24c-6.009 35.298-8.34 89.084.165 122.97a32.18 32.18 0 0 0 22.656 22.657c19.866 5.418 99.822 5.418 99.822 5.418s79.955 0 99.82-5.418a32.18 32.18 0 0 0 22.657-22.657c6.338-35.348 8.291-89.1-.164-123.134"/><path fill="#fff" d="m102.421 128.06l66.328-38.418l-66.328-38.418z"/></svg></span></a>
                                </div>
                            </div>
                        </div>
                    </div>
                    <?php } if($val->y6){?>
                     <div class="item">
                        <div class="gallery-one__single">
                            <div class="gallery-one__img">
                                <img class="youtube-thumbnail" data-video-url="<?=$val->y6?>" alt="">
                                <div class="gallery-one__icon">
                                    <a class="video-popup" href="<?=$val->y6?>"><span class="fa"><svg xmlns="http://www.w3.org/2000/svg" width="3.43em" height="3em" viewBox="0 0 256 180"><path fill="#f00" d="M250.346 28.075A32.18 32.18 0 0 0 227.69 5.418C207.824 0 127.87 0 127.87 0S47.912.164 28.046 5.582A32.18 32.18 0 0 0 5.39 28.24c-6.009 35.298-8.34 89.084.165 122.97a32.18 32.18 0 0 0 22.656 22.657c19.866 5.418 99.822 5.418 99.822 5.418s79.955 0 99.82-5.418a32.18 32.18 0 0 0 22.657-22.657c6.338-35.348 8.291-89.1-.164-123.134"/><path fill="#fff" d="m102.421 128.06l66.328-38.418l-66.328-38.418z"/></svg></span></a>
                                </div>
                            </div>
                        </div>
                    </div>
                    <?php } ?>
                </div>
            </div>
        </section>
        <?php } ?>
        <!--Gallery One End-->
</div>

<style>
    .gallery-one__icon a,.gallery-one__icon a:hover {
        border: 0px solid var(--aports-white);
  -webkit-transform: scale(1);
  transform: scale(1);
  opacity: 1;
    }
</style>
<script src="<?php echo base_url()?>assets/assets1/vendors/jquery/jquery-3.6.0.min.js"></script>
    <script src="<?php echo base_url()?>assets/assets1/vendors/bootstrap/js/bootstrap.bundle.min.js"></script>
    <script src="<?php echo base_url()?>assets/assets1/vendors/jarallax/jarallax.min.js"></script>
    <script src="<?php echo base_url()?>assets/assets1/vendors/jquery-ajaxchimp/jquery.ajaxchimp.min.js"></script>
    <script src="<?php echo base_url()?>assets/assets1/vendors/jquery-appear/jquery.appear.min.js"></script>
    <script src="<?php echo base_url()?>assets/assets1/vendors/jquery-circle-progress/jquery.circle-progress.min.js"></script>
    
    <script src="<?php echo base_url()?>assets/assets1/vendors/jquery-validate/jquery.validate.min.js"></script>
    <script src="<?php echo base_url()?>assets/assets1/vendors/nouislider/nouislider.min.js"></script>
    <script src="<?php echo base_url()?>assets/assets1/vendors/odometer/odometer.min.js"></script>
    <script src="<?php echo base_url()?>assets/assets1/vendors/swiper/swiper.min.js"></script>
    <script src="<?php echo base_url()?>assets/assets1/vendors/tiny-slider/tiny-slider.min.js"></script>
    <script src="<?php echo base_url()?>assets/assets1/vendors/wnumb/wNumb.min.js"></script>
    <script src="<?php echo base_url()?>assets/assets1/vendors/wow/wow.js"></script>
    <script src="<?php echo base_url()?>assets/assets1/vendors/isotope/isotope.js"></script>
    <script src="<?php echo base_url()?>assets/assets1/vendors/countdown/countdown.min.js"></script>
    <script src="<?php echo base_url()?>assets/assets1/vendors/owl-carousel/owl.carousel.min.js"></script>
    <script src="<?php echo base_url()?>assets/assets1/vendors/bxslider/jquery.bxslider.min.js"></script>
    <script src="<?php echo base_url()?>assets/assets1/vendors/bootstrap-select/js/bootstrap-select.min.js"></script>
    <script src="<?php echo base_url()?>assets/assets1/vendors/vegas/vegas.min.js"></script>
    <script src="<?php echo base_url()?>assets/assets1/vendors/jquery-ui/jquery-ui.js"></script>
    <script src="<?php echo base_url()?>assets/assets1/vendors/timepicker/timePicker.js"></script>
    <script src="<?php echo base_url()?>assets/assets1/vendors/circleType/jquery.circleType.js"></script>
    <script src="<?php echo base_url()?>assets/assets1/vendors/circleType/jquery.lettering.min.js"></script>
    <script src="<?php echo base_url()?>assets/assets1/vendors/jquery-magnific-popup/jquery.magnific-popup.min.js" style="important"></script>

<script>
var thumbnails = document.querySelectorAll(".youtube-thumbnail");

// Loop through each thumbnail element
thumbnails.forEach(function(thumbnail) {
    // Get the video URL from the data-video-url attribute
    var videoUrl = thumbnail.getAttribute("data-video-url");
    // Extract the video ID from the video URL
    var videoId = videoUrl.split('v=')[1];
    // Construct the thumbnail URL
    var thumbnailUrl = "https://img.youtube.com/vi/" + videoId + "/0.jpg";
    // Set the thumbnail as the source of the image
    thumbnail.src = thumbnailUrl;

    // Bind the popup event to each thumbnail
    $(thumbnail).closest('.video-popup').magnificPopup({
        type: "iframe",
        mainClass: "mfp-fade",
        removalDelay: 160,
        preloader: true,
        fixedContentPos: false
    });
});

  
  if ($(".pdf-popup").length) {
    $(".pdf-popup").magnificPopup({
        type: "iframe",
        mainClass: "mfp-fade",
        removalDelay: 160,
        preloader: true,
        fixedContentPos: false,
        iframe: {
            markup: '<div class="mfp-iframe-scaler">' +
                '<div class="mfp-close"></div>' +
                '<iframe class="mfp-iframe" frameborder="0" allowfullscreen></iframe>' +
                '</div>',
            patterns: {
                pdf: {
                    index: '/path_to_magnific_popup_js/magnific-popup.js',
                    src: 'path_to_your_pdf_file.pdf'
                }
            }
        }
    });
}

</script>


    <!-- template js -->
    <script src="<?php echo base_url()?>assets/assets1/js/aports.js"></script>
<?php include('templates/footer.php');?>