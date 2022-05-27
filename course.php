<?php require_once("header.php"); ?>
<!-- Breadcrumbs Start -->
		<div class="rs-breadcrumbs bg7 breadcrumbs-overlay">
		    <div class="breadcrumbs-inner">
		        <div class="container">
		            <div class="row">
		                <div class="col-md-12 text-center">
		                    <h1 class="page-title">OUR COURSES</h1>
		                    <ul>
		                        <li>
		                            <a class="active" href="index.html">Home</a>
		                        </li>
		                        <li>Our Courses</li>
		                    </ul>
		                </div>
		            </div>
		        </div>
		    </div>
		</div>
		<!-- Breadcrumbs End -->

		<!-- Courses Start -->
        <div id="rs-courses-3" class="rs-courses-3 sec-spacer">
			<div class="container">
				<div class="abt-title">
				    <h2>OUR COURSES</h2>
				</div>
				<div class="row">
			        <div class="col-md-12">
					<?php 
						$jpegs = glob("assets/img/course/*.jpg");
						foreach ($jpegs as $jpg) { ?>
						<div class="rs-carousel owl-carousel mb-2" data-loop="true" data-items="3" data-margin="30" data-autoplay="false" data-autoplay-timeout="5000" data-smart-speed="1200" data-dots="true" data-nav="true" data-nav-speed="false" data-mobile-device="1" data-mobile-device-nav="true" data-mobile-device-dots="true" data-ipad-device="2" data-ipad-device-nav="true" data-ipad-device-dots="true" data-md-device="3" data-md-device-nav="true" data-md-device-dots="true">
			                <div class="event-item">
			                    <div class="event-img">
			                        <img src="<?= $jpg ?>" alt="" />
                                    <a class="image-link" href="assets/brouser.pdf" target="_blank" title="DOWNLOAD">
                                        <i class="fa fa-download"></i>
                                    </a>
			                    </div>
		                    
			                </div>
			            </div>
					    <?php } ?>
			</div>
        </div>
		</div>
    </div>
        <!-- Courses End -->
				
<?php require_once("footer.php"); ?>