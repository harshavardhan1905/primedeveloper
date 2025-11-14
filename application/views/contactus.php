<?php include('templates/header.php');?>

<style>
    .info-block{
        padding: 0 0 30px 50px;
        position:relative;
        > i {
                width: 40px;
    height: 40px;
    background: #009BDE;
    line-height: 40px;
    text-align: center;
    color: #fff;
    font-size: 20px;
    border-radius: 40px;
    position: absolute;
    left: 0;
    top: 5px;
        }
    }
    .info-block:not(:last-child)::after {
  content: "";
  background: #000;
  width: 2px;
  height: 100%;
  position: absolute;
  left: 17px;
  top: 6px;
  z-index: -1;
  bottom: 0;
  opacity: .2;
}
    .sec-title .float-text {
        left:20px;
    }
</style>
    
    <!--Page Title-->
    <section class="page-title" style="background-image:url(<?php echo base_url()?>assets/images/background/10.jpg);">
        <div class="auto-container">
            <div class="inner-container clearfix">
                <div class="title-box">
                    <h1>Contact Us</h1>
                    <span class="title">Experienced Texas Property Leaders!</span>
                </div>
                
            </div>
        </div>
    </section>
    <!--End Page Title-->

    <!-- Contact Page Section -->
    <section class="contact-page-section mt-4">
        <div class=" auto-container sec-title p-3">
                            <span class="float-text">Contact Us</span>
                
        </div>
        <div class="auto-container mt-4">
            <div class="row m-0">
                
                
                <div class="col-lg-5 col-md-12 col-sm-12">
                    <div class="contact-info mt-5">
                            <div class="row ">
                                <div class="info-block mb-0 pb-5 col-lg-12 col-md-12 col-sm-12">
                                    <i class="fa fa-location-arrow"></i>
                                    <div class="inner">
                                        <h4>Location</h4>
                                        <p>Texas</p>
                                    </div>
                                </div>

                                <div class="info-block mb-0 pb-5 col-lg-12 col-md-12 col-sm-12">
                                    <i class="fa fa-phone"></i>
                                    <div class="inner">
                                        <h4>Call Us</h4>
                                        <p><a href="tel:+15127618025">+1 512-761-8025</a></p>
                                        <!--<p>+88 165 358 5678</p>-->
                                    </div>

                                </div>

                                <div class="info-block mb-0 pb-5 col-lg-12 col-md-12 col-sm-12">
                                    <i class="fa "><svg  style="height:18px; margin-top:3px" fill="#fff"  xmlns="http://www.w3.org/2000/svg" viewBox="0 0 512 512"><!--!Font Awesome Free 6.5.1 by @fontawesome - https://fontawesome.com License - https://fontawesome.com/license/free Copyright 2024 Fonticons, Inc.--><path style="width:20px" fill="#fff" d="M48 64C21.5 64 0 85.5 0 112c0 15.1 7.1 29.3 19.2 38.4L236.8 313.6c11.4 8.5 27 8.5 38.4 0L492.8 150.4c12.1-9.1 19.2-23.3 19.2-38.4c0-26.5-21.5-48-48-48H48zM0 176V384c0 35.3 28.7 64 64 64H448c35.3 0 64-28.7 64-64V176L294.4 339.2c-22.8 17.1-54 17.1-76.8 0L0 176z"/></svg></i>
                                    <div class="inner">
                                        <h4>Email</h4>
                                        <!-- <p><a href="mailto:mallik@theprimedeveloper.com">mallik@theprimedeveloper.com</a></p> -->
                                        <p><a href="mailto:sales@theprimedeveloper.com">sales@theprimedeveloper.com</a></p>
                                        <!--<p><a href="#">info@contra.com</a></p>-->
                                    </div>
                                </div>
                            </div>
                        </div>
                </div>
                
                <!-- Form Column -->
                <div class="form-column col-lg-7 col-md-12 col-sm-12">
                    <div class=" card">
                        <div class="sec-title p-3" style="background-color: #009BDE;">
                            <h2 class="text-white">Explore Options with Us Today.</h2>
                        </div>

                        <div class="contact-form mb-0 p-3">
                            <form method="post" action="#" id="contact-form">
                                <div class="row">
                                    <div class="form-group col-lg-6 col-md-12 col-sm-12">
                                        <input type="text" name="username" placeholder="Name" required="">
                                    </div>
                                    
                                    <div class="form-group col-lg-6 col-md-12 col-sm-12">
                                        <input type="text" name="phone" placeholder="Phone" required="">
                                    </div>

                                    <div class="form-group col-lg-6 col-md-12 col-sm-12">
                                        <input type="text" name="company" placeholder="Company">
                                    </div>

                                    <div class="form-group col-lg-6 col-md-12 col-sm-12">
                                        <input type="email" name="email" placeholder="Email" required="">
                                    </div>

                                    <div class="form-group col-lg-12 col-md-12 col-sm-12">
                                        <textarea name="message" placeholder="Message"></textarea>
                                    </div>

                                    <div class="form-group col-lg-12 col-md-12 col-sm-12">
                                        <button class="theme-btn btn-style-three" type="submit" name="submit-form">Submit</button>
                                    </div>
                                </div>
                            </form>
                        </div>

                    </div>
                </div>
                
                

                <!--<div class="map-column col-lg-5 col-md-12 col-sm-12">-->
                <!--    <div class="inner-column">-->
                <!--         <div class="map-outer">-->
                <!--            <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d10102087.513570674!2d-99.67073234199506!3d30.849846747536517!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x864070360b823249%3A0x16eb1c8f1808de3c!2sTexas%2C%20USA!5e0!3m2!1sen!2sin!4v1707466119119!5m2!1sen!2sin" height="900"></iframe>-->
                <!--        </div>-->
                <!--    </div>-->
                <!--</div>-->
            </div>
        </div>
    </section>
    <!--End Contact Page Section -->

    <!--Clients Section-->
    <!--<section class="clients-section style-two ">-->
    <!--    <div class="auto-container">-->
    <!--        <div class="sponsors-outer">-->
                <!--Sponsors Carousel-->
    <!--            <ul class="sponsors-carousel owl-carousel owl-theme">-->
    <!--                <li class="slide-item"><figure class="image-box"><a href="#"><img src="<?php echo base_url()?>assets/images/clients/1.png" alt=""></a></figure></li>-->
    <!--                <li class="slide-item"><figure class="image-box"><a href="#"><img src="<?php echo base_url()?>assets/images/clients/2.png" alt=""></a></figure></li>-->
    <!--                <li class="slide-item"><figure class="image-box"><a href="#"><img src="<?php echo base_url()?>assets/images/clients/3.png" alt=""></a></figure></li>-->
    <!--                <li class="slide-item"><figure class="image-box"><a href="#"><img src="<?php echo base_url()?>assets/images/clients/4.png" alt=""></a></figure></li>-->
    <!--                <li class="slide-item"><figure class="image-box"><a href="#"><img src="<?php echo base_url()?>assets/images/clients/5.png" alt=""></a></figure></li>-->
    <!--                <li class="slide-item"><figure class="image-box"><a href="#"><img src="<?php echo base_url()?>assets/images/clients/1.png" alt=""></a></figure></li>-->
    <!--                <li class="slide-item"><figure class="image-box"><a href="#"><img src="<?php echo base_url()?>assets/images/clients/2.png" alt=""></a></figure></li>-->
    <!--                <li class="slide-item"><figure class="image-box"><a href="#"><img src="<?php echo base_url()?>assets/images/clients/3.png" alt=""></a></figure></li>-->
    <!--                <li class="slide-item"><figure class="image-box"><a href="#"><img src="<?php echo base_url()?>assets/images/clients/4.png" alt=""></a></figure></li>-->
    <!--                <li class="slide-item"><figure class="image-box"><a href="#"><img src="<?php echo base_url()?>assets/images/clients/5.png" alt=""></a></figure></li>-->
    <!--            </ul>-->
    <!--        </div>-->
    <!--    </div>-->
    <!--</section>-->
    <!--End Clients Section-->
    
    <div class="map-column m-0 p-0 mt-5 col-lg-12 col-md-12 col-sm-12">
                   <div class="inner-column">
                         <div class="map-outer" style="height:400px">
                            <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d10102087.513570674!2d-99.67073234199506!3d30.849846747536517!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x864070360b823249%3A0x16eb1c8f1808de3c!2sTexas%2C%20USA!5e0!3m2!1sen!2sin!4v1707466119119!5m2!1sen!2sin" height="400px"></iframe>
                        </div>
                    </div>
    </div>

 <!--<div style="margin-top: 100px;"></div>-->


<?php include('templates/footer.php');?>