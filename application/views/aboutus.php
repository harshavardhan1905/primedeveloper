<?php include('templates/header.php');?>

<style>
.name{
    background:transparent !important;
    text-align:center;
    > a{
        color: #222222 !important;
        font-size: 15px !important;
    line-height: 19px !important;
    padding: 0px 0px !important;
        min-width:unset !important;
    }
}
    select {
        -webkit-appearance: none;
        -moz-appearance: none;
        appearance: none;
    }
    .inner-box:hover  .icon img{
      filter: brightness(0) invert(1);
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
</style>
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
    <!--Page Title-->
    <section class="page-title" style="background-image:url(<?php echo base_url()?>assets/images/background/12.jpg);background-position:top;">
        <div class="auto-container">
            <div class="inner-container clearfix">
                <div class="title-box">
                    <h1>About Us</h1>
                    <span class="title">Innovating Spaces, Building Dreams!</span>
                </div>
                <!--<ul class="bread-crumb clearfix">-->
                <!--    <li><a href="<?php echo base_url()?>">Home</a></li>-->
                <!--    <li>About Us</li>-->
                <!--</ul>-->
            </div>
        </div>
    </section>
    <!--End Page Title-->

    <!-- About Section -->
    <section class="about-section" style="background-image: url(<?php echo base_url()?>assets/images/background/0.jpg);">
        <div class="auto-container">
            <div class="row no-gutters">
                <!-- Image Column -->
                <div class="image-column col-lg-6 col-md-12 col-sm-12">
                    <div class="inner-column">
                        <div class="title-box wow fadeInLeft" data-wow-delay='1200ms'>
                            <!--<h2>ABOUT <br> US</h2>-->
                        </div>
                        <div class="image-box wow fadeInRight" data-wow-delay='600ms'>
                            <figure class="alphabet-img"><img src="<?php echo base_url()?>assets/images/resource/alphabet-image.png" alt=""></figure>
                            <figure class="alphabet-img-2"><img src="<?php echo base_url()?>assets/images/resource/image-1.png" alt=""></figure>
                        </div>
                    </div>
                </div>

                <!-- Content Column -->
                <div class="content-column col-lg-6 col-md-12 col-sm-12">
                    <div class="inner-column wow fadeInLeft">
                        <div class="content-box">
                            <div class="title">
                                <h2>Experienced Professionals <br>Crafting Iconic Properties</h2>
                            </div>
                            <div class="text">Prime Developer, a rapidly expanding real estate developer, has been offering services since 2017. Specializing in iconic commercial and residential properties, we own and operate in the vibrant Texas market. Our team comprises dedicated and experienced professionals with a proven track record in large-scale, intricate property development and investment.</div>
                            <div class="link-box"><a href="<?php echo base_url()?>homecontroller/allprojects" class="theme-btn btn-style-one">View Projects</a></div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!--End About Section -->

    <!-- Fun Fact And Features -->
    <section class="fun-fact-and-features alternate"  style="background-image: url(<?php echo base_url()?>assets/images/background/3.jpg);">
        <div class="outer-box">
            <div class="auto-container">
                <!-- Fact Counter -->
                <div class="fact-counter">
                    <div class="row">
                        <!--Column-->
                        <div class="counter-column col-lg-3 col-md-6 col-sm-12 wow fadeInUp">
                            <div class="count-box">
                                <div class="count"><span class="count-text" data-speed="5000" data-stop="9">0</span></div>
                                <h4 class="counter-title">Years of <br>Experience</h4>
                            </div>
                        </div>

                        <!--Column-->
                        <div class="counter-column col-lg-3 col-md-6 col-sm-12 wow fadeInUp" data-wow-delay="400ms">
                            <div class="count-box">
                                <div class="count"><span class="count-text" data-speed="5000" data-stop="<?php
                                $query = $this->db->get('projects');
                                echo $query->num_rows();
                                ?>">0</span></div>
                                    <h4 class="counter-title">Project <br>Taken</h4>
                            </div>
                        </div>

                        <!--Column-->
                        <div class="counter-column col-lg-3 col-md-6 col-sm-12 wow fadeInUp" data-wow-delay="800ms">
                            <div class="count-box">
                                <div class="count"><span class="count-text" data-speed="5000" data-stop="11">0</span>K</div>
                                <h4 class="counter-title">Twitter <br> Follower</h4>
                            </div>
                        </div>

                        <!--Column-->
                        <div class="counter-column col-lg-3 col-md-6 col-sm-12 wow fadeInUp" data-wow-delay="1200ms">
                            <div class="count-box">
                                <div class="count"><span class="count-text" data-speed="5000" data-stop="12">0</span></div>
                                <h4 class="counter-title">Awards<br>won</h4>
                            </div>
                        </div>
                    </div>
                </div>

                <!-- Features -->
                <div class="features">
                    <div class="row">
                        <!-- Feature Block -->
                        <div class="feature-block col-lg-4 col-md-6 col-sm-12">
                            <div class="inner-box">
                                <div class="icon-box"><span class="icon"><img style="width:60px" src="<?php echo base_url()?>assets/images/icons/mission.png"/></span></div>
                                <h3><a href="#">Our Mission</a></h3>
                                <div class="text">Offering a comprehensive investment opportunity for everyone, providing an ultimate solution encompassing land acquisition, design, and sales, leading to exceptional return on investment.</div>
                                <!--<div class="link-box"><a href="#">Read More</a></div>-->
                            </div>
                        </div>

                        <!-- Feature Block -->
                        <div class="feature-block col-lg-4 col-md-6 col-sm-12">
                            <div class="inner-box">
                                <div class="icon-box"><span class="icon"><img style="width:60px" src="<?php echo base_url()?>assets/images/icons/leadership.png"/></span></div>
                                <h3><a href="#">Our Leadership</a></h3>
                                <div class="text">Our exceptional leaders are committed to a guaranteed, intuitive, and proven approach to financing, hands-on value creation, and ethical practices that positively impact our society.</div>
                                <!--<div class="link-box"><a href="#">Read More</a></div>-->
                            </div>
                        </div>

                        <!-- Feature Block -->
                        <div class="feature-block col-lg-4 col-md-6 col-sm-12">
                            <div class="inner-box">
                                <div class="icon-box"><span class="icon"><img style="width:60px" src="<?php echo base_url()?>assets/images/icons/vision.png"/></span></div>
                                <h3><a href="#">Our Vision</a></h3>
                                <div class="text">Prime Developers is devoted to crafting distinctive, state-of-the-art architecture that transcends conventional human experience, offering flexibility and financial freedom to enhance lifestyles.</div>
                                <!--<div class="link-box"><a href="#">Read More</a></div>-->
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!--End Fun Fact Section -->

    <!-- Testimonial Section Two-->
    <section class="testimonial-section-two">
        <div class="auto-container">
            <div class="sec-title">
                <span class="float-text">Testimonials</span>
                <h2>What Our Client Voice Out</h2>
            </div>

            <div class="testimonial-carousel-two owl-carousel owl-theme">
                <!-- Testimonial block two -->
                <div class="testimonial-block-two">
                    <div class="inner-box">
                        <img src="<?php echo base_url()?>admin/uploads/products/24.jpg" alt="">
                        <div class="text">Prime Developer exceeded our expectations! The flexibility of their flex space buildings perfectly accommodated our growing startup. The modern facilities and strategic location have been instrumental in our success.</div>
                        <div class="info-box">
                            <div class="thumb"><img src="<?php echo base_url()?>assets/images/resource/thumb-3.jpg" alt=""></div>
                            <h5 class="name">Sophia Rodriguez</h5>
                            <span class="date">Centro Plaza</span>
                        </div>
                    </div>
                </div>

                <!-- Testimonial block two -->
                <div class="testimonial-block-two">
                    <div class="inner-box">
                        <img src="<?php echo base_url()?>admin/uploads/products/attachment(1).jpg" alt="">
                        <div class="text">Choosing Prime Developer was the best decision for our expanding business. The state-of-the-art flex spaces on Tract 2 provided the ideal environment for our operations. Their commitment to excellence is truly commendable.</div>
                        <div class="info-box">
                            <div class="thumb"><img src="<?php echo base_url()?>assets/images/resource/thumb-3.jpg" alt=""></div>
                            <h5 class="name">Jamal Khan</h5>
                            <span class="date">POW Lewisville Phase I</span>
                        </div>
                    </div>
                </div>

                <!-- Testimonial block two -->
                <div class="testimonial-block-two">
                    <div class="inner-box">
                        <img src="<?php echo base_url()?>admin/uploads/products/13.jpg" alt="">
                        <div class="text">We are thrilled with our decision to partner with Prime Developer. The versatile spaces they offered were exactly what our established business needed for expansion. The professionalism and quality of service have been outstanding.</div>
                        <div class="info-box">
                            <div class="thumb"><img src="<?php echo base_url()?>assets/images/resource/thumb-3.jpg" alt=""></div>
                            <h5 class="name">Isabella Chen</h5>
                            <span class="date">Prime Spur HWY 183</span>
                        </div>
                    </div>
                </div>

                
            </div>
        </div>
    </section>
    <!--End Testimonial Section Two-->

    <!--Clients Section-->
    <section class="clients-section style-two">
        <div class="auto-container">
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

     <!-- Process Section -->
    <section class="process-section" style="background-image: url(<?php echo base_url()?>assets/images/background/8.jpg);">
        <div class="auto-container">
            <div class="sec-title light">
                <span class="float-text">HOW WE WORK</span>
                <h2>Path To Prosperity on top of How We Work</h2>
            </div>
            <div class="row">
                <!-- Process Block -->
                <div class="process-block col-lg-3 col-md-6 col-sm-12">
                    <div class="inner-box">
                        <span class="count">01</span>
                        <h4><a href="#">Explore Options</a></h4>
                        <div class="text">Discover our diverse portfolio of properties and investment opportunities in various fields.</div>
                        <!--<div class="link-box"><a href="#">Read More</a></div>-->
                    </div>
                </div>

                <!-- Process Block -->
                <div class="process-block col-lg-3 col-md-6 col-sm-12">
                    <div class="inner-box">
                        <span class="count">02</span>
                        <h4><a href="#">Tailored Solutions</a></h4>
                        <div class="text">Work with our experts to customize your investment plan, whether in land, retail, or office spaces.</div>
                        <!--<div class="link-box"><a href="#">Read More</a></div>-->
                    </div>
                </div>

                <!-- Process Block -->
                <div class="process-block col-lg-3 col-md-6 col-sm-12">
                    <div class="inner-box">
                        <span class="count">03</span>
                        <h4><a href="#">Seamless Execution</a></h4>
                        <div class="text">Experience a smooth process from acquisition to design, guided by our dedicated team.</div>
                        <!--<div class="link-box"><a href="#">Read More</a></div>-->
                    </div>
                </div>

                <!-- Process Block -->
                <div class="process-block col-lg-3 col-md-6 col-sm-12">
                    <div class="inner-box">
                        <span class="count">04</span>
                        <h4><a href="#">Thriving Together</a></h4>
                        <div class="text">Watch your investment flourish as we create spaces that redefine success and enhance lifestyles.</div>
                        <!--<div class="link-box"><a href="#">Read More</a></div>-->
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!--End Process Section -->

    <!-- Team Section -->
    <section class="team-section">
        <div class="auto-container">
            <!--<div class="sec-title text-center">-->
                <!--<span class="title">Our Team</span>-->
            <!--    <h2>Founders</h2>-->
            <!--</div>-->

            <div class="row clearfix justify-content-center">
                
                <!-- Team Block -->
                <div class="team-block col-lg-6 col-md-7 col-sm-6 col-12 mb-0">
                    <div class="content-box">
                            <div class="sec-title mb-0 pb-0">
                <!--<span class="title">Our Team</span>-->
                <h2>Founders</h2>
                </div>
                            <div class="text my-2">Our mission is to democratize investment opportunities, ensuring exceptional ROI from land acquisition to sale. As founders, we're committed to innovative financing and value creation, aiming for a positive societal impact. At Prime Developers, our vision is to create architecture that enhances lifestyles and enriches human experiences.</div>
                            <!--<div class="text">we own and operate in the vibrant Texas market. Our team comprises dedicated and experienced professionals with a proven track record in large-scale, intricate property development and investment.</div>-->
                            <!--<div class="link-box"><a href="<?php echo base_url()?>homecontroller/projectdetails" class="theme-btn btn-style-one">View Projects</a></div>-->
                        </div>
                </div>
                
                <!-- Team Block -->
                <div class="team-block col-lg-2 col-md-2 col-sm-3 col-6 p-3 pl-5">
                    <div class="inner-box">
                        <div class="image-box">
                            <div class="image"><a href="#"><img src="<?php echo base_url()?>assets/images/resource/team-1.jpg" alt=""></a></div>
                            
                            <h3 class="name"><a href="#">Raju Padigala</a></h3>
                        </div>
                        <!--<span class="designation">designation</span>-->
                    </div>
                </div>

                <!-- Team Block -->
                <div class="team-block col-lg-2 col-md-2 col-sm-3 col-6 p-3 pl-5">
                    <div class="inner-box">
                        <div class="image-box">
                            <div class="image"><a href="#"><img src="<?php echo base_url()?>assets/images/resource/team-2.jpg" alt=""></a></div>
                            
                            <h3 class="name"><a href="#">Mallikarjuna Gilakattula</a></h3>
                        </div>
                        <!--<span class="designation">designation</span>-->
                    </div>
                </div>

                

            </div>
        </div>
    </section>
    <!--End Team Section -->

    <!-- Offer Section -->
    <section class="offer-section" style="background-image: url(<?php echo base_url()?>assets/images/background/6.jpg);">
        <div class="auto-container">
            <div class="row">
                <div class="content-column col-lg-5 col-md-12 col-sm-12">
                    <div class="inner-column">
                        <span class="title">Discover Your Ideal Investment</span>
                        <h2><span>RANGE OF <br>VISIONARY PROJECTS </span> <br>tailored to elevate your portfolio!</h2>
                        <!--<span class="discount">50%</span>-->
                        <div class="text">Our team is ready to guide you through the journey <br>of securing your future in thriving real estate ventures, <br>turning your inquiries into exceptional investments!</div>
                    </div>
                </div> 

                <div class="form-column order-last col-lg-7 col-md-12 col-sm-12">
                    <div class="inner-column">
                        <div class="discount-form">
                            <!--Comment Form-->
                            <form method="post" action="#">
                                <div class="row">
                                    <div class="col-lg-12 col-md-12 col-sm-12 form-group">
                                        <input type="text" name="username" placeholder="Name" required>
                                    </div>
                                    
                                    <div class="col-lg-12 col-md-12 col-sm-12 form-group">
                                        <input type="email" name="email" placeholder="Email" required>
                                    </div>

                                    <div class="col-lg-12 col-md-12 col-sm-12 form-group">
                                        <input type="text" name="phone" placeholder="Phone" required>
                                    </div>
                                    
                                    <div class="col-lg-12 col-md-12 col-sm-12 form-group">
                                        <select id="dropdownInput" name="dropdownInput">
        <option value="option1">Project Type</option>
        <option value="POW Lewisville Phase I">POW Lewisville Phase I</option>
        <option value="POW Lewisville Phase II">POW Lewisville Phase I</option>
        <option value="Centro Plaza">Centro Plaza</option>
        <option value="Spur Plaza">Spur Plaza</option>
        <option value="Reagan Crossing Phase I">Reagan Crossing Phase I</option>
        <option value="Reagan Crossing Phase II">Reagan Crossing Phase II</option>
        <option value="POW Leander">POW Leander</option>
        <option value="Rio Ranch Commercial Lots">Rio Ranch Commercial Lots</option>
    </select>
                                    </div>
                                    
                                    <div class="col-lg-12 col-md-12 col-sm-12 form-group">
                                        <textarea name="message" placeholder="Message"></textarea>
                                    </div>
                                    
                                    <div class="col-lg-12 col-md-12 col-sm-12 form-group text-center">
                                        <button class="theme-btn btn-style-one" type="submit" name="submit-form">send Now</button>
                                    </div>
                                </div>
                            </form>
                        </div>
                    </div>
                </div> 
            </div>
        </div>
    </section>
    <!--End Offer Section -->

    <!-- Video Section -->
    <section class="video-section style-two">
        <div class="outer-box">
            <div class="auto-container">
                <div class="row">
                    <div class="content-column col-lg-6 col-md-12 col-sm-12">
                        <div class="inner-column">
                            <div class="sec-title">
                                <span class="float-text">Site Video</span>
                                <h2>Project Lewisville</h2>
                            </div>
                            <span class="title">POW's Visual Journey</span>
                            <div class="text">Immerse yourself in our portfolio through an exclusive video showcasing our diverse projects and prime locations. Witness the innovation and excellence that define each site as we invite you to envision your business's future with us!</div> 
                        </div>
                    </div>

                    <!-- Video Column -->
                    <div class="video-column col-lg-6 col-md-12 col-sm-12">
                        <div class="inner-column">
                            <div class="video-box">
                                 <figure class="image">
                                     <!--<img src="<?php echo base_url()?>assets/images/resource/video-img.jpg" alt="">-->
                                    <!--<a href="<?php echo base_url()?>assets/video.mp4" class="link" data-fancybox="gallery" data-caption=""><span class="icon fa fa-play"></span></a>-->
                               <video style="width:100%" controls poster="<?php echo base_url()?>assets/images/Thumbnail.png">
    <source src="<?php echo base_url()?>assets/images/video.mp4" type="video/mp4">
    Your browser does not support the video tag.
</video>
                                </figure>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!--End Video Section -->

   



<?php include('templates/footer.php');?>