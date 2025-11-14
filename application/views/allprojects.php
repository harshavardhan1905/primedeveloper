<?php include('templates/header.php');?>

<style>
    select {
        -webkit-appearance: none;
        -moz-appearance: none;
        appearance: none;
    }
    .inner-box:hover  .icon img{
      filter: brightness(0) invert(1);
    }
    
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
    .project-card img{
        height: 450px;
    object-fit: cover;
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
    <!--Page Title-->
    <section class="page-title" style="background-image:url(<?php echo base_url()?>assets/images/background/12.jpg);background-position:top;">
        <div class="auto-container">
            <div class="inner-container clearfix">
                <div class="title-box">
                    <h1>All Projects</h1>
                    <span class="title">Innovating Spaces, Building Dreams!</span>
                </div>
                <!--<ul class="bread-crumb clearfix">-->
                <!--    <li><a href="<?php echo base_url()?>">Home</a></li>-->
                <!--    <li>All Projects</li>-->
                <!--</ul>-->
            </div>
        </div>
    </section>
    <!--End Page Title-->

    <!-- About Section -->
  
      <!-- Services Section -->
    <section class="projects-section-two" style="margin-top:-5%">
    <div class="auto-container">
        <div class="upper-box clearfix">
            <div class="sec-title">
                <span class="float-text">Project</span>
                <h2>Our Best Work</h2>
            </div>
            <!--<div class="link-box"><a href="<?php echo base_url()?>aboutus">All Project <i class="fa fa-long-arrow-right"></i></a></div>-->
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