<?php include('templates/header.php');?>
        <style>
        .fact-counter .count-box:before {
            position: absolute;
            left: 50px;
        }
    .project-card img{
        height: 450px;
    object-fit: cover;
    }
    @media only screen and (max-width: 1023px){
.about-section .image-column .image-box .alphabet-img {
    position: absolute;
    display: inline-block;
    width:70vw;
}
.about-section .image-column .image-box .alphabet-img-2 {
    width:70vw;
    float:right;
}
.about-section .image-column .image-box {
    padding-top:0px;
}
.about-section .content-column .inner-column{
    margin-top:-80px;
}
}
.property--content{
    box-shadow: 0px 5px 15px 0px rgba(52, 73, 94, 0.07)
}
/*	gallery */

.gallery-title{
    font-size: 36px;
    color: #a05e00;
    text-align: center;
    font-weight: 500;
    margin-bottom: 70px;
}
.filter-button {
    font-size: 16px;
    margin-right:20px;
    border: 0;
    border-radius: 100px;
    padding: 7px 20px;
    text-align: center;
    color: black;
       box-shadow: rgba(0, 155, 222, 0.2) 0 -25px 18px -14px inset, rgba(0, 155, 222, 0.15) 0 1px 2px, rgba(0, 155, 222, 0.15) 0 2px 4px, rgba(0, 155, 222, 0.15) 0 4px 8px, rgba(0, 155, 222, 0.15) 0 8px 16px, rgba(0, 155, 222, 0.15) 0 16px 32px;
 cursor: pointer;
    display: inline-block;
    text-decoration: none;
    transition: all 250ms;
    user-select: none;
    -webkit-user-select: none;
    touch-action: manipulation;
    outline: none; /* Remove outline when button is focused */
}

.filter-button:hover,
.filter-button:focus,
.filter-button.active {
    color: #ffffff;
    background-color: #0073a4;
    outline: none;
}





.img-info h4, .img-info p {
    color:white;
}



@media only screen and (max-width: 600px) {
 .filter-button { 
    margin-bottom: 10px;
  }
}

 .filter-button { 
    margin-bottom: 10px;
  }






</style>
   <style>
   @media only screen and (max-width: 600px) {
 #tabit{
     display: grid !important;
    grid-template-columns: repeat(3, 1fr) !important;
    border-bottom:0px !important;
 }
#tabit li{
    width:fit-content !important;
}
}
    .property-item {
	background-color: #ffffff;
	-webkit-border-radius: 4px;
	-moz-border-radius: 4px;
	border-radius: 4px;
	-webkit-transition: all 0.5s ease;
	-moz-transition: all 0.5s ease;
	-o-transition: all 0.5s ease;
	transition: all 0.5s ease;
	margin-bottom: 30px;
}

.property-item:hover {
	-webkit-box-shadow: 0px 10px 30px 0px rgba(52, 73, 94, 0.07);
	box-shadow: 0px 10px 30px 0px rgba(52, 73, 94, 0.07);
}

.property-item .property--img {
	position: relative;
	overflow: hidden;
}

.property-item .property--status {
	position: absolute;
	top: 25px;
	left: 25px;
	background-color: #34495e;
	color: #ffffff;
	font-size: 10px;
	-webkit-border-radius: 2px;
	-moz-border-radius: 2px;
	border-radius: 2px;
	padding: 5px 10px;
	display: block;
}

.property-item .property--info {
	padding: 22px 25px 25px;
}

.property-item .property--title {
	color: #34495e;
	font-size: 18px;
	font-weight: 500;
	line-height: 28px;
	text-transform: capitalize;
	margin-bottom: 2px;
}

.property-item .property--title a {
	color: #34495e;
}

.property-item .property--title a:hover {
	color: #0073a4;
}

.property-item .property--location {
	color: #aaaaaa;
	font-size: 12px;
	font-weight: 400;
	line-height: 20px;
	margin-bottom: 16px;
}

.property-item .property--location i {
	margin-right: 7px;
}

.property-item .property--price {
	color: #0073a4;
	font-size: 30px;
	font-weight: 500;
	display: block;
	line-height: 1;
	margin-bottom: 0;
}

.property-item .property--price span {
	margin-left: 8px;
	position: relative;
	font-weight: 400;
	font-size: 14px;
	vertical-align: middle;
	padding-left: 5px;
}

.property-item .property--price span:before {
	content: "/";
	position: absolute;
	top: 3px;
	left: -2px;
}

.property-item .property--features {
	padding: 25px;
	border-top: 1px solid #eeeeee;
	position: relative;
}

.property-item .property--features ul {
	padding: 0;
	list-style: none;
	margin-bottom: 0;
}

.property-item .property--features li {
	color: #aaaaaa;
	font-size: 14px;
	display: inline-block;
	margin-right: 25px;
}

.property-item .property--features li:last-of-type {
	margin-right: 0;
}

.property-item .property--features li span {
	display: block;
}

.property-item .property--features li .feature {
	color: #34495e;
}

.property-item .edit--btn {
	position: absolute;
	right: 30px;
	top: 30px;
	font-size: 14px;
	color: #aaaaaa;
}

.property-item .edit--btn:before {
	content: "";
	position: absolute;
	left: 0;
	bottom: 0;
	width: 100%;
	height: 2px;
	background-color: #aaaaaa;
	-webkit-transition: all 0.8s ease;
	-moz-transition: all 0.8s ease;
	-o-transition: all 0.8s ease;
	transition: all 0.8s ease;
}

.property-item .edit--btn:after {
	content: "";
	position: absolute;
	left: 0;
	bottom: 0;
	width: 0;
	height: 2px;
	background-color: #0073a4;
	-webkit-transition: all 0.8s ease;
	-moz-transition: all 0.8s ease;
	-o-transition: all 0.8s ease;
	transition: all 0.8s ease;
}

.property-item .edit--btn:hover:after {
	width: 100%;
}

.property-item .edit--btn i {
	margin-right: 5px;
}

.property-item .edit--btn:hover,
.property-item .edit--btn:hover i {
	color: #0073a4;
}

/* Custom, iPhone Retina */
@media only screen and (min-width: 320px) and (max-width: 400px) {

.property-item .property--features li {
	margin-right: 6px;
}
}

@media only screen and (min-width: 320px) and (max-width: 767px) {

.property-item .property--features ul {
	margin-bottom: 20px;
}

.property-item .edit--btn {
	position: relative;
	top: 0;
	right: auto;
	left: 0;
	padding-top: 40px;
}
}

/* Small Devices, Tablets */
@media only screen and (min-width: 768px) and (max-width: 991px) {

.my-properties.properties-list .property-item {
	display: block;
}

.my-properties.properties-list .property-item .property--content {
	width: 100%;
}
}


#tabit .filter{
    border:0;
    border-radius: 100px;
    padding: 7px 20px;
    text-align: center;
    color: black;
   box-shadow: rgba(0, 155, 222, 0.2) 0 -25px 18px -14px inset, rgba(0, 155, 222, 0.15) 0 1px 2px, rgba(0, 155, 222, 0.15) 0 2px 4px, rgba(0, 155, 222, 0.15) 0 4px 8px, rgba(0, 155, 222, 0.15) 0 8px 16px, rgba(0, 155, 222, 0.15) 0 16px 32px;
 cursor: pointer;
    display: inline-block;
    text-decoration: none;
    transition: all 250ms;
    user-select: none;
    -webkit-user-select: none;
    touch-action: manipulation;
    outline: none;
}

#tabit .filter:hover,
#tabit .filter:focus,
 #tabit.filter.active {
    color: #ffffff;
    background-color: #0073a4;
    outline: none;
}

</style>
<!-- CSS for Sponsors/client section -->
 <style>
            /* Client images uniform sizing */
            .sponsors-carousel .slide-item {
                display: flex;
                align-items: center;
                justify-content: center;
                padding: 15px;
            }
            
            .sponsors-carousel .image-box {
                width: 200px;
                height: 120px;
                display: flex;
                box-shadow: 1px 1px 4px 1px red;
                align-items: center;
                justify-content: center;
                overflow: hidden;
                background-color: #f9f9f9;
                border-radius: 5px;
            }
            .transparant-bg-img{
                background-color: #2f2f2f !important;
            }
            
            .sponsors-carousel .image-box a {
                width: 100%;
                height: 100%;
                display: flex;
                align-items: center;
                justify-content: center;
            }
            
            .sponsors-carousel .image-box img {
                width: 100%;
                height: 100%;
                object-fit: contain;
                padding: 10px;
            }
            
            /* Responsive sizing for smaller screens */
            @media only screen and (max-width: 768px) {
                .sponsors-carousel .image-box {
                    width: 150px;
                    height: 90px;
                }
            }
            
            @media only screen and (max-width: 480px) {
                .sponsors-carousel .image-box {
                    width: 120px;
                    height: 70px;
                }
            }
        </style>
    
    <!-- Bnner Section -->
    <section class="banner-section">
        <div class="banner-carousel owl-carousel owl-theme">
            <div class="slide-item" style="background-image: url(<?php echo base_url()?>assets/images/main-slider/image-1.jpg);">
                <div class="auto-container">
                    <div class="content-box">
                        <h2>Shaping Skylines, <br>Building Dreams in Texas!</h2>
                        <div class="text">Pioneering real estate projects that redefine the Texan landscape.</div>
                        <div class="link-box">
                            <!-- <a href="<?php echo base_url()?>homecontroller/allprojects" class="theme-btn btn-style-one">View Projects</a> -->
                            <a href="<?php echo site_url('allprojects')?>" class="theme-btn btn-style-one">View Projects</a>
                        </div>
                    </div>
                </div>
            </div>

            <div class="slide-item" style="background-image: url(<?php echo base_url()?>assets/images/main-slider/image-2.jpg);">
                <div class="auto-container">
                    <div class="content-box">
                        <h2>Iconic Properties, <br>Enduring Quality!</h2>
                        <div class="text">Crafting commercial and residential spaces with timeless appeal.</div>
                        <div class="link-box">
                            <!-- <a href="<?php echo base_url()?>homecontroller/allprojects" class="theme-btn btn-style-one">View Projects</a> -->
                             <a href="<?php echo site_url('allprojects')?>" class="theme-btn btn-style-one">View Projects</a>
                        </div>
                    </div>
                </div>
            </div>

            <div class="slide-item" style="background-image: url(<?php echo base_url()?>assets/images/main-slider/image-3.jpg);">
                <div class="auto-container">
                    <div class="content-box">
                        <h2>Where Innovation Meets <br>Investment in Real Estate!</h2>
                        <div class="text">Transformative solutions and dedicated expertise for unparalleled property development.</div>
                        <div class="link-box">
                            <!-- <a href="<?php echo base_url()?>homecontroller/allprojects" class="theme-btn btn-style-one">View Projects</a> -->
                            <a href="<?php echo site_url('allprojects')?>" class="theme-btn btn-style-one">View Projects</a>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <div class="bottom-box">
            <div class="auto-container clearfix">
                <ul class="contact-info">
                    <li><span>Phone :</span><a href="tel:+15127618025">+1 512-761-8025</a> </li>
                    <li><span>EMAIL :</span> <a href="mailto:sales@theprimedeveloper.com">sales@theprimedeveloper.com</a></li>
                    <li><span>Instagram : </span><a target="_blank" href="https://www.instagram.com/theprimedeveloper_official/">@primedeveloper_official</a> </li> <br>
                    <li><span>Facebook : </span><a target="_blank" href="https://www.facebook.com/people/The-Prime-Developers/61557388995595/?mibextid=ibOpuV&rdid=16CGDWij1G7r6P71&share_url=https%3A%2F%2Fwww.facebook.com%2Fshare%2FbZwnfyV4eXcyK3Sf%2F%3Fmibextid%3DibOpuV">The Prime Developers </a> </li>
                    <li><span>Linkedin : </span><a target="_blank" href="https://www.linkedin.com/company/the-prime-developers/">@the-prime-developers</a> </li>
                    <li><span>Youtube : </span><a target="_blank" href="https://www.youtube.com/@theprimedeveloper6986">@theprimedeveloper6986</a> </li>
                </ul>
            </div>
        </div>
    </section>
    <!-- End Bnner Section -->

    <!-- About Section -->
    <section class="about-section pb-0 pt-5" style="background-image: url(<?php echo base_url()?>assets/images/background/0.jpg);">
        <div class="auto-container">
            <div class="row no-gutters">
                <!-- Image Column -->
                <div class="image-column col-lg-6 col-md-12 col-sm-12">
                    <div class="inner-column">
                        <div class="title-box wow fadeInLeft" data-wow-delay='1200ms'>
                            <!-- <h2>ABOUT <br> US</h2> -->
                        </div>
                        <div class="image-box">
                            <figure class="alphabet-img wow fadeInRight"><img src="<?php echo base_url()?>assets/images/resource/alphabet-image.png" alt=""></figure>
                            <figure class="alphabet-img-2 wow fadeInRight" data-wow-delay='600ms'><img src="<?php echo base_url()?>assets/images/resource/image-1.png" alt=""></figure>
                        </div>
                    </div>
                </div>

                <!-- Content Column -->
                <div class="content-column col-lg-6 col-md-12 col-sm-12">
                    <div class="inner-column wow fadeInLeft pt-0">
                        <div class="content-box">
                            <div class="title">
                                <h2>Experienced Professionals <br>Crafting Iconic Properties</h2>
                            </div>
                            <div class="text">Prime Developer, a rapidly expanding real estate developer, has been offering services since 2017. Specializing in iconic commercial and residential properties, we own and operate in the vibrant Texas market. Our team comprises dedicated and experienced professionals with a proven track record in large-scale, intricate property development and investment.</div>
                            <!-- <div class="link-box"><a href="<?php echo base_url()?>aboutus" class="theme-btn btn-style-one">About Us</a></div> -->
                            <div class="link-box"><a href="<?php echo site_url('aboutus')?>" class="theme-btn btn-style-one">About Us</a></div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!--End About Section -->
    <hr class="m-0"/>
            <!--Clients Section-->
    <section class="clients-section">
        
        <div class="inner-container">
            <div class="sponsors-outer">
                <!--Sponsors Carousel-->
                <ul class="sponsors-carousel owl-carousel owl-theme">
                   <li class="slide-item"><figure class="image-box"><a href="#"><img src="<?php echo base_url()?>assets/images/clients/5.png" alt=""></a></figure></li>-->
                    <li class="slide-item"><figure class="image-box"><a href="#"><img src="<?php echo base_url()?>assets/images/clients/1.png" alt=""></a></figure></li>
                    <li class="slide-item"><figure class="image-box"><a href="#"><img src="<?php echo base_url()?>assets/images/clients/2.png" alt=""></a></figure></li>
                    <li class="slide-item"><figure class="image-box"><a href="#"><img src="<?php echo base_url()?>assets/images/clients/3.png" alt=""></a></figure></li>
                    <li class="slide-item"><figure class="image-box"><a href="#"><img src="<?php echo base_url()?>assets/images/clients/4.png" alt=""></a></figure></li>
                    <li class="slide-item"><figure class="image-box"><a href="#"><img src="<?php echo base_url()?>assets/images/clients/5.png" alt=""></a></figure></li>
                    <li class="slide-item"><figure class="image-box"><a href="#"><img class="transparant-bg-img" src="<?php echo base_url()?>assets/images/clients/6.png" alt=""></a></figure></li>
                    <li class="slide-item"><figure class="image-box"><a href="#"><img class="transparant-bg-img" src="<?php echo base_url()?>assets/images/clients/7.png" alt=""></a></figure></li>
                    <li class="slide-item"><figure class="image-box"><a href="#"><img class="transparant-bg-img" src="<?php echo base_url()?>assets/images/clients/8.png" alt=""></a></figure></li>
                    <li class="slide-item"><figure class="image-box"><a href="#"><img class="transparant-bg-img" src="<?php echo base_url()?>assets/images/clients/9.png" alt=""></a></figure></li>
                    <li class="slide-item"><figure class="image-box"><a href="#"><img class="transparant-bg-img" src="<?php echo base_url()?>assets/images/clients/10.png" alt=""></a></figure></li>
                    <li class="slide-item"><figure class="image-box"><a href="#"><img src="<?php echo base_url()?>assets/images/clients/11.png" alt=""></a></figure></li>
                    <li class="slide-item"><figure class="image-box"><a href="#"><img src="<?php echo base_url()?>assets/images/clients/12_1.png" alt=""></a></figure></li>
                    <li class="slide-item"><figure class="image-box"><a href="#"><img src="<?php echo base_url()?>assets/images/clients/13_12.png" alt=""></a></figure></li>
                    <li class="slide-item"><figure class="image-box"><a href="#"><img src="<?php echo base_url()?>assets/images/clients/14.png" alt=""></a></figure></li>
                    <li class="slide-item"><figure class="image-box"><a href="#"><img src="<?php echo base_url()?>assets/images/clients/16.png" alt=""></a></figure></li>
                    <li class="slide-item"><figure class="image-box"><a href="#"><img src="<?php echo base_url()?>assets/images/clients/17.png" alt=""></a></figure></li>
                    <li class="slide-item"><figure class="image-box"><a href="#"><img src="<?php echo base_url()?>assets/images/clients/18.png" alt=""></a></figure></li>
                    <li class="slide-item"><figure class="image-box"><a href="#"><img src="<?php echo base_url()?>assets/images/clients/19.png" alt=""></a></figure></li>
                    <li class="slide-item"><figure class="image-box"><a href="#"><img src="<?php echo base_url()?>assets/images/clients/20.png" alt=""></a></figure></li>
                    <li class="slide-item"><figure class="image-box"><a href="#"><img src="<?php echo base_url()?>assets/images/clients/21.png" alt=""></a></figure></li>
                    <li class="slide-item"><figure class="image-box"><a href="#"><img src="<?php echo base_url()?>assets/images/clients/22.png" alt=""></a></figure></li>
                    <!-- <li class="slide-item"><figure class="image-box"><a href="#"><img src="<?php echo base_url()?>assets/images/clients/23.png" alt=""></a></figure></li> -->
                    <li class="slide-item"><figure class="image-box"><a href="#"><img src="<?php echo base_url()?>assets/images/clients/24.png" alt=""></a></figure></li>
                    <li class="slide-item"><figure class="image-box"><a href="#"><img src="<?php echo base_url()?>assets/images/clients/luxe.png" alt=""></a></figure></li>
                    <li class="slide-item"><figure class="image-box"><a href="#"><img src="<?php echo base_url()?>assets/images/clients/ohwah.png" alt=""></a></figure></li>
                    <li class="slide-item"><figure class="image-box"><a href="#"><img src="<?php echo base_url()?>assets/images/clients/tuffipuff.jpg" alt=""></a></figure></li>
                    <li class="slide-item"><figure class="image-box"><a href="#"><img src="<?php echo base_url()?>assets/images/clients/williamson.png" alt=""></a></figure></li>
                    <li class="slide-item"><figure class="image-box"><a href="#"><img src="<?php echo base_url()?>assets/images/clients/lego.png" alt=""></a></figure></li>
                    <li class="slide-item"><figure class="image-box"><a href="#"><img src="<?php echo base_url()?>assets/images/clients/threewheels.png" alt=""></a></figure></li>

                    <li class="slide-item"><figure class="image-box"><a href="#"><img src="<?php echo base_url()?>assets/images/clients/bestbrains.png" alt=""></a></figure></li>
                    <li class="slide-item"><figure class="image-box"><a href="#"><img src="<?php echo base_url()?>assets/images/clients/cara_denstiry.png" alt=""></a></figure></li>
                    <li class="slide-item"><figure class="image-box"><a href="#"><img src="<?php echo base_url()?>assets/images/clients/ion.jpg" alt=""></a></figure></li>
                    <li class="slide-item"><figure class="image-box"><a href="#"><img src="<?php echo base_url()?>assets/images/clients/keds.png" alt=""></a></figure></li>
                    <li class="slide-item"><figure class="image-box"><a href="#"><img src="<?php echo base_url()?>assets/images/clients/niva_dental.jpg" alt=""></a></figure></li>
                    <li class="slide-item"><figure class="image-box"><a href="#"><img src="<?php echo base_url()?>assets/images/clients/shipley.png" alt=""></a></figure></li>
                    <li class="slide-item"><figure class="image-box"><a href="#"><img src="<?php echo base_url()?>assets/images/clients/thebrace.png" alt=""></a></figure></li>
                    <li class="slide-item"><figure class="image-box"><a href="#"><img src="<?php echo base_url()?>assets/images/clients/thelearning.jpg" alt=""></a></figure></li>
                    <li class="slide-item"><figure class="image-box"><a href="#"><img src="<?php echo base_url()?>assets/images/clients/ups.png" alt=""></a></figure></li>



                </ul>
            </div>
        </div>
    </section>
    <!--End Clients Section-->

    <!-- Services Section -->
    <section class="projects-section-two" style="margin-top:-5%">
    <div class="auto-container">
        <div class="upper-box clearfix">
            <div class="sec-title">
                <span class="float-text">Project</span>
                <h2>Our Best Work</h2>
            </div>
            <!-- <div class="link-box"><a href="<?php echo base_url()?>allprojects">All Project <i class="fa fa-long-arrow-right"></i></a></div> -->
            <div class="link-box"><a href="<?php echo site_url("allprojects")?>">All Project <i class="fa fa-long-arrow-right"></i></a></div>
            
        </div>
        
        
    
 <div class="row justify-content-center">

    

        <div align="center" style="padding-bottom:20px"> 
            <button class="filter-button active" data-filter="all">All</button>
            <button class="filter-button" data-filter="retail">Retail</button>
            <button class="filter-button" data-filter="flex">Flex</button>
            <button class="filter-button" data-filter="office">Office</button>
            <button class="filter-button" data-filter="plots">Open Plots</button>
        </div>
        
        <br/>
        
</div>		

<div class="row justify-content-center">
<?php foreach($homeprojects as $homi){?>
<div class="gallery_product col-xs-12 col-sm-12 col-md-4 filter <?=$homi->category?>">
                        <div class="property-item">
                            <div class="property--img">
                                <a href="<?=$homi->urlt?>">
                        <img src="<?php echo base_url()?>admin/uploads/products/<?=$homi->pimage?>" alt="property image" class="img-responsive">
                        <!--<span class="property--status">For Rent</span>-->
                        </a>
                            </div>
                            <a href="<?=$homi->urlt?>">
                            <div class="property--content">
                                <div class="property--info">
                                    <h5 class="property--title"><?=$homi->name?></h5>
                                    <p class="property--location mb-0"><?=$homi->location?></p>
                                    <!--<p class="property--price">$1,550<span class="time">month</span></p>-->
                                </div>
                                <!-- .property-info end -->
                                <div class="property--features">
                                    <ul class="list-unstyled mb-0">
                                        <li><span class="feature">Total Buildings:</span><span class="feature-num"><?=$homi->totalbuildings?></span></li>
                                        <li><span class="feature">Units Sold:</span><span class="feature-num"><?=$homi->unitsold?></span></li>
                                        <li><span class="feature">Available:</span><span class="feature-num"><?=$homi->available?></span></li>
                                    </ul>
                                </div>
                                <!-- .property-features end -->
                            </div>
                            </a>
                        </div>
                        </div>
    
<?php } ?>
      

    </div>
    </div>
</section>

      
    <!-- Fun Fact Section -->
    <section class="fun-fact-section">
        <div class="outer-box" style="background-image: url(<?php echo base_url()?>assets/images/background/3.jpg);">
            <div class="auto-container">
                <div class="fact-counter">
                    <div class="row justify-content-center">
                        <!--Column-->
                        <div class="counter-column col-lg-3 col-md-6 col-sm-12 wow fadeInUp">
                            <div class="count-box d-flex justify-content-center">
                                <!-- Updated the Years 7 to 9 -->
                                <div class="count"><span class="count-text" data-speed="5000" data-stop="9">0</span>+</div>
                                <h4 class="counter-title"  style="font-weight:500">Years of <br>Experience</h4>
                            </div>
                        </div>

                        <!--Column-->
                        <div class="counter-column col-lg-3 col-md-6 col-sm-12 wow fadeInUp" data-wow-delay="400ms">
                            <div class="count-box d-flex justify-content-center">
                                <!-- Updated the Projects 8 to 11 -->
                                <div class="count"><span class="count-text" data-speed="5000" data-stop="<?php
                                $query = $this->db->get('projects');
                                echo $query->num_rows();
                                ?>">0</span>+</div>
                                <h4 class="counter-title" style="font-weight:500">Projects <br>Completed</h4>
                            </div>
                        </div>

                        <!--Column-->
                        <!--<div class="counter-column col-lg-3 col-md-6 col-sm-12 wow fadeInUp" data-wow-delay="800ms">-->
                        <!--    <div class="count-box">-->
                        <!--        <div class="count"><span class="count-text" data-speed="5000" data-stop="11">0</span>K</div>-->
                        <!--        <h4 class="counter-title">Twitter <br> Follower</h4>-->
                        <!--    </div>-->
                        <!--</div>-->

                        <!--Column-->
                        <!--<div class="counter-column col-lg-3 col-md-6 col-sm-12 wow fadeInUp" data-wow-delay="1200ms">-->
                        <!--    <div class="count-box">-->
                        <!--        <div class="count"><span class="count-text" data-speed="5000" data-stop="12">0</span></div>-->
                        <!--        <h4 class="counter-title">Awards<br>won</h4>-->
                        <!--    </div>-->
                        <!--</div>-->
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!--End Fun Fact Section -->

    <!-- Project Section -->
    <section class="projects-section">
        <div class="auto-container">
            <div class="sec-title text-right">
                <span class="float-text">Projects</span>
                <h2>Established</h2>
            </div>
        </div>
        
        <div class="inner-container">
            <div class="projects-carousel owl-carousel owl-theme">
                <!-- Project Block -->
                <div class="project-block">
                    <div class="image-box">
                        <!-- <figure class="image"><img src="<?php echo base_url()?>assets/images/gallery/1.jpg" alt=""></figure> -->
                        <figure class="image"><img src="<?php echo base_url()?>assets/images/gallery/1_2.jpg" alt=""></figure>
                        <div class="overlay-box">
                            <h4><a href="#">Centro Plasa</a></h4>
                            <div class="btn-box">
                                <!-- <a href="<?php echo base_url()?>assets/images/gallery/1.jpg" class="lightbox-image" data-fancybox="gallery"><i class="fa fa-search"></i></a> -->
                                <a href="<?php echo base_url()?>assets/images/gallery/1_2.jpg" class="lightbox-image" data-fancybox="gallery"><i class="fa fa-search"></i></a>
                                <!--<a href="#"><i class="fa fa-external-link"></i></a>-->
                            </div>
                            <span class="tag"></span>
                        </div>
                    </div>
                </div>

                <!-- Project Block -->
                <!-- <div class="project-block">
                    <div class="image-box">
                        <figure class="image"><img src="<?php //echo base_url()?>assets/images/gallery/2.jpg" alt=""></figure>
                        <div class="overlay-box">
                            <h4><a href="#">Rio Ranch Texas</a></h4>
                            <div class="btn-box">
                                <a href="<?php //echo base_url()?>assets/images/gallery/2.jpg" class="lightbox-image" data-fancybox="gallery"><i class="fa fa-search"></i></a>
                                <!--<a href="#"><i class="fa fa-external-link"></i></a>-->
                            <!-- </div>
                            
                        </div>
                    </div>
                </div> --> -->

                <!-- Project Block -->
                <!-- <div class="project-block">
                    <div class="image-box">
                        <figure class="image"><img src="<?php //echo base_url()?>assets/images/gallery/3.jpg" alt=""></figure>
                        <div class="overlay-box">
                            <h4><a href="#">POW Leander</a></h4>
                            <div class="btn-box">
                                <a href="<?php// echo base_url()?>assets/images/gallery/3.jpg" class="lightbox-image" data-fancybox="gallery"><i class="fa fa-search"></i></a> -->
                                <!--<a href="#"><i class="fa fa-external-link"></i></a>-->
                            <!-- </div>
                            
                        </div>
                    </div>
                </div> -->

                <!-- Project Block -->
                <div class="project-block">
                    <div class="image-box">
                        <figure class="image"><img src="<?php echo base_url()?>assets/images/gallery/4.jpg" alt=""></figure>
                        <div class="overlay-box">
                            <h4><a href="#">POW Lewisville Phase I</a></h4>
                            <div class="btn-box">
                                <a href="<?php echo base_url()?>assets/images/gallery/4.jpg" class="lightbox-image" data-fancybox="gallery"><i class="fa fa-search"></i></a>
                                <!--<a href="#"><i class="fa fa-external-link"></i></a>-->
                            </div>
                            
                        </div>
                    </div>
                </div>

                <!-- Project Block -->
                <div class="project-block">
                    <div class="image-box">
                        <figure class="image"><img src="<?php echo base_url()?>assets/images/gallery/5.jpg" alt=""></figure>
                        <div class="overlay-box">
                            <h4><a href="#">POW Lewisville Phase II</a></h4>
                            <div class="btn-box">
                                <a href="<?php echo base_url()?>assets/images/gallery/5.jpg" class="lightbox-image" data-fancybox="gallery"><i class="fa fa-search"></i></a>
                                <!--<a href="#"><i class="fa fa-external-link"></i></a>-->
                            </div>
                            
                        </div>
                    </div>
                </div>

                <!-- Project Block -->
                <div class="project-block">
                    <div class="image-box">
                        <!-- <figure class="image"><img src="<?php echo base_url()?>assets/images/gallery/6.jpg" alt=""></figure> -->
                        <figure class="image"><img src="<?php echo base_url()?>assets/images/gallery/6_1.png" alt=""></figure>
                        <div class="overlay-box">
                            <h4><a href="#">Reagan Crossing Phase I</a></h4>
                            <div class="btn-box">
                                <!-- <a href="<?php echo base_url()?>assets/images/gallery/6.jpg" class="lightbox-image" data-fancybox="gallery"><i class="fa fa-search"></i></a> -->
                                <a href="<?php echo base_url()?>assets/images/gallery/6_1.png" class="lightbox-image" data-fancybox="gallery"><i class="fa fa-search"></i></a>
                                <!--<a href="#"><i class="fa fa-external-link"></i></a>-->
                            </div>
                            
                        </div>
                    </div>
                </div>
                
                <!-- Project Block -->
                <div class="project-block">
                    <div class="image-box">
                        <figure class="image"><img src="<?php echo base_url()?>assets/images/gallery/7.jpg" alt=""></figure>
                        <div class="overlay-box">
                            <h4><a href="#">Reagan Crossing Phase II</a></h4>
                            <div class="btn-box">
                                <a href="<?php echo base_url()?>assets/images/gallery/7.jpg" class="lightbox-image" data-fancybox="gallery"><i class="fa fa-search"></i></a>
                                <!--<a href="#"><i class="fa fa-external-link"></i></a>-->
                            </div>
                            
                        </div>
                    </div>
                </div>
                
                <!-- Project Block -->
                <div class="project-block">
                    <div class="image-box">
                        <figure class="image"><img src="<?php echo base_url()?>assets/images/gallery/8.jpg" alt=""></figure>
                        <div class="overlay-box">
                            <h4><a href="#">POW Lewisville Phase I</a></h4>
                            <div class="btn-box">
                                <a href="<?php echo base_url()?>assets/images/gallery/8.jpg" class="lightbox-image" data-fancybox="gallery"><i class="fa fa-search"></i></a>
                                <!--<a href="#"><i class="fa fa-external-link"></i></a>-->
                            </div>
                            <!--<span class="tag">Architecture</span>-->
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!--End Project Section -->

    <!-- Team Section -->
    <!--<section class="team-section">-->
    <!--    <div class="auto-container">-->
    <!--        <div class="sec-title text-center">-->
                <!--<span class="title">Our Team</span>-->
    <!--            <h2>Founders</h2>-->
    <!--        </div>-->

    <!--        <div class="row clearfix justify-content-center">-->
                <!-- Team Block -->
    <!--            <div class="team-block col-lg-4 col-md-6 col-sm-12">-->
    <!--                <div class="inner-box">-->
    <!--                    <div class="image-box">-->
    <!--                        <div class="image"><a href="#"><img src="<?php echo base_url()?>assets/images/resource/team-1.jpg" alt=""></a></div>-->
                            <!--<ul class="social-links">-->
                            <!--    <li><a href="#"><i class="fa fa-facebook"></i></a></li>-->
                            <!--    <li><a href="#"><i class="fa fa-twitter"></i></a></li>-->
                            <!--    <li><a href="#"><i class="fa fa-google-plus"></i></a></li>-->
                            <!--    <li><a href="#"><i class="fa fa-instagram"></i></a></li>-->
                            <!--    <li><a href="#"><i class="fa fa-whatsapp"></i></a></li>-->
                            <!--</ul>-->
    <!--                        <h3 class="name"><a href="#">Raju Padigala</a></h3>-->
    <!--                    </div>-->
                        <!--<span class="designation">designation</span>-->
    <!--                </div>-->
    <!--            </div>-->

                <!-- Team Block -->
    <!--            <div class="team-block col-lg-4 col-md-6 col-sm-12">-->
    <!--                <div class="inner-box">-->
    <!--                    <div class="image-box">-->
    <!--                        <div class="image"><a href="#"><img src="<?php echo base_url()?>assets/images/resource/team-2.jpg" alt=""></a></div>-->
                            <!--<ul class="social-links">-->
                            <!--    <li><a href="#"><i class="fa fa-facebook"></i></a></li>-->
                            <!--    <li><a href="#"><i class="fa fa-twitter"></i></a></li>-->
                            <!--    <li><a href="#"><i class="fa fa-google-plus"></i></a></li>-->
                            <!--    <li><a href="#"><i class="fa fa-instagram"></i></a></li>-->
                            <!--    <li><a href="#"><i class="fa fa-whatsapp"></i></a></li>-->
                            <!--</ul>-->
    <!--                        <h3 class="name"><a href="#">Mallikarjuna Gilakattula</a></h3>-->
    <!--                    </div>-->
                        <!--<span class="designation">designation</span>-->
    <!--                </div>-->
    <!--            </div>-->

                <!-- Team Block -->
                <!--<div class="team-block col-lg-4 col-md-6 col-sm-12">-->
                <!--    <div class="inner-box">-->
                <!--        <div class="image-box">-->
                <!--            <div class="image"><a href="#"><img src="<?php echo base_url()?>assets/images/resource/team-3.jpg" alt=""></a></div>-->
                            <!--<ul class="social-links">-->
                            <!--    <li><a href="#"><i class="fa fa-facebook"></i></a></li>-->
                            <!--    <li><a href="#"><i class="fa fa-twitter"></i></a></li>-->
                            <!--    <li><a href="#"><i class="fa fa-google-plus"></i></a></li>-->
                            <!--    <li><a href="#"><i class="fa fa-instagram"></i></a></li>-->
                            <!--    <li><a href="#"><i class="fa fa-whatsapp"></i></a></li>-->
                            <!--</ul>-->
                <!--            <h3 class="name"><a href="#">name</a></h3>-->
                <!--        </div>-->
                        <!--<span class="designation">designation</span>-->
                <!--    </div>-->
                <!--</div>-->

    <!--        </div>-->
    <!--    </div>-->
    <!--</section>-->
    <!--End Team Section -->

    <!-- Testimonial Section -->
    <section class="testimonial-section mt-5">
        <div class="outer-container clearfix">
            <!-- Title Column -->
            <div class="title-column clearfix">
                <div class="inner-column">
                    <div class="sec-title">
                        <span class="float-text">Testimonials </span>
                        <h2>What Our Client Voice Out</h2>
                    </div>
                    <div class="text">Discover why businesses thrive with Prime Developer – where satisfaction transforms into success.</div>
                </div>
            </div>

            <!-- Testimonial Column -->
            <div class="testimonial-column clearfix" style="background-image: url(<?php echo base_url()?>assets/images/background/4.jpg);">
                <div class="inner-column">
                    <div class="testimonial-carousel owl-carousel owl-theme">
                        <!-- Testimonial Block -->
                        <div class="testimonial-block">
                            <div class="inner-box">
                                <div class="image-box"><img class="rounded" src="<?php echo base_url()?>assets/images/resource/thumb-1.jpg" alt=""></div>
                                <!-- <div class="image-box"><img class="rounded" src="<?php echo base_url()?>assets/images/resource/new_brand1.png" alt=""></div> -->
                                <div class="text">"Prime Developer delivered our mixed-use Centro Plaza on time and 6% under budget. Their project management minimized downtime and helped us achieve 85% occupancy within six months."</div>
                                <div class="info-box">
                                    <h4 class="name">Sophia Rodriguez</h4>
                                    <span class="designation">COO — Centro Plaza</span>
                                </div>
                            </div>
                        </div>

                        <!-- Testimonial Block -->
                        <div class="testimonial-block">
                            <div class="inner-box">
                                <div class="image-box"><img class="rounded" src="<?php echo base_url()?>assets/images/resource/thumb-1.jpg" alt=""></div>
                                <div class="text">"The flexible units at POW Lewisville gave our operations the ramp space we needed. Clear timelines and weekly updates made the rollout smooth and predictable."</div>
                                <div class="info-box">
                                    <h4 class="name">Jamal Khan</h4>
                                    <span class="designation">Operations Director — POW Lewisville</span>
                                </div>
                            </div>
                        </div>

                        <!-- Testimonial Block -->
                        <div class="testimonial-block">
                            <div class="inner-box">
                                <div class="image-box"><img class="rounded" src="<?php echo base_url()?>assets/images/resource/thumb-1.jpg" alt=""></div>
                                <div class="text">"From permitting through handover, Prime Developer handled every complexity professionally. Tenant satisfaction and retention improved significantly after move-in."</div>
                                <div class="info-box">
                                    <h4 class="name">Isabella Chen</h4>
                                    <span class="designation">Head of Real Estate — Spur Logistics</span>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!--End Testimonial Section -->
    


    <!-- News Section -->
    <!-- <section class="news-section">
        <div class="auto-container">
            <div class="sec-title">
                <span class="float-text">Blogs</span>
                <h2>News & Articles</h2>
            </div>
            <div class="row"> -->
                <!-- News Block -->
                <!-- <div class="news-block col-lg-4 col-md-6 col-sm-12">
                    <div class="inner-box">
                        <div class="caption-box">
                             <div class="image-box">
                            <figure class="image"><img src="<?php echo base_url(); ?>assets/images/resource/news-1.jpg" alt=""></figure>
                            <div class="overlay-box"><a ><i class="fa fa-link"></i></a></div>
                        </div>
                        <ul class="info">
                                <li>06 June 2023,</li>
                                <li>John Smith</li>
                            </ul>
                            <h3><a >In Good Taste: Mark Finlay Architects & Interiors.</a></h3>
                            <p>In Good Taste: Mark Finlay Architects & Interiors.In Good Taste: Mark Finlay Architects & Interior Finlay Architects & Interiors.</p>
                            <div class="link-box">
                                    <a >Read More <i class="fa fa-long-arrow-right"></i></a>
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
                            <div class="overlay-box"><a ><i class="fa fa-link"></i></a></div>
                        </div>
                        <ul class="info">
                                <li>06 June 2023,</li>
                                <li>John Smith</li>
                            </ul>
                            <h3><a >In Good Taste: Mark Finlay Architects & Interiors.</a></h3>
                            <p>In Good Taste: Mark Finlay Architects & Interiors.In Good Taste: Mark Finlay Architects & Interior Finlay Architects & Interiors.</p>
                            <div class="link-box">
                                    <a >Read More <i class="fa fa-long-arrow-right"></i></a>
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
                            <div class="overlay-box"><a ><i class="fa fa-link"></i></a></div>
                        </div>
                        <ul class="info">
                                <li>06 June 2023,</li>
                                <li>John Smith</li>
                            </ul>
                            <h3><a >In Good Taste: Mark Finlay Architects & Interiors.</a></h3>
                            <p>In Good Taste: Mark Finlay Architects & Interiors.In Good Taste: Mark Finlay Architects & Interior  Finlay Architects & Interiors.</p>
                            <div class="link-box">
                                    <a >Read More <i class="fa fa-long-arrow-right"></i></a>
                                </div>
                        </div>
                    </div>
                </div>
            </div>
        </div> -->
    <!-- </section> -->
    <!--End News Section -->




 
       <?php include('templates/footer.php');?>
           <script>
              /*	gallery */
$(document).ready(function(){

    $(".filter-button").click(function(){
        var value = $(this).attr('data-filter');
        
        if(value == "all")
        {
            $('.filter').show('1000');
        }
        else
        {
            $(".filter").not('.'+value).hide('3000');
            $('.filter').filter('.'+value).show('3000');
            
        }

	        	if ($(".filter-button").removeClass("active")) {
			$(this).removeClass("active");
		    }
		    	$(this).addClass("active");
	    	});
});
/*	end gallery */

$(document).ready(function(){
    $(".fancybox").fancybox({
        openEffect: "none",
        closeEffect: "none"
    });
});
   
  
          </script>
