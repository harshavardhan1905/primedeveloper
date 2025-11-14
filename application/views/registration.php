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
    
</style>
    
    <!--Page Title-->
    <section class="page-title" style="background-image:url(<?php echo base_url()?>assets/images/background/10.jpg);">
        <div class="auto-container">
            <div class="inner-container clearfix">
                <div class="title-box">
                    <h1>Registration</h1>
                    <span class="title">Experienced Texas Property Leaders!</span>
                </div>
                
            </div>
        </div>
    </section>
    <!--End Page Title-->

    <!-- Contact Page Section -->
    <section class="contact-page-section mt-4">
        <div class=" auto-container sec-title p-3">
                            <span class="float-text text-center">Registration</span>
                
        </div>
        <div class="auto-container mt-4">
            <div class="row" style="justify-content:center;text-align:center">
                
                
                
                
                <!-- Form Column -->
                <div class="form-column col-lg-7 col-md-12 col-sm-12">
                    <div class=" card">
                        <div class="sec-title p-3" style="background-color: #009BDE;">
                            <h2 class="text-white">Explore Options with Us Today.</h2>
                        </div>

                        <div class="contact-form mb-0 p-3">
                            <form method="post" action="#" >
                                <div class="row">
                                    <div class="form-group col-lg-6 col-md-12 col-sm-12">
                                        <input type="text" name="username" placeholder="Name" required="">
                                        <input type="hidden" value="<?=date('Y-m-d')?>" name="dater">
                                    </div>
                                    
                                    <div class="form-group col-lg-6 col-md-12 col-sm-12">
                                        <input type="text" name="phone" placeholder="Phone" required="">
                                    </div>
                                    
                                    <div class="form-group col-lg-6 col-md-12 col-sm-12">
                                        <input type="email" name="email" placeholder="Email" required="">
                                    </div>

                                    <div class="form-group col-lg-6 col-md-12 col-sm-12">
                                        <input type="text" name="company" placeholder="Company">
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
                            <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d10102087.513570674!2d-99.67073234199506!3d30.849846747536517!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x864070360b823249%3A0x16eb1c8f1808de3c!2sTexas%2C%20USA!5e0!3m2!1sen!2sin!4v1707466119119!5m2!1sen!2sin" height="1900px"></iframe>
                        </div>
                    </div>
    </div>

 <!--<div style="margin-top: 100px;"></div>-->


<?php include('templates/footer.php');?>