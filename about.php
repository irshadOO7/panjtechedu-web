<?php require_once("header.php"); ?>
		
		<!-- Breadcrumbs Start -->
		<div class="rs-breadcrumbs bg7 breadcrumbs-overlay">
		    <div class="breadcrumbs-inner">
		        <div class="container">
		            <div class="row">
		                <div class="col-md-12 text-center">
		                    <h1 class="page-title">About Us</h1>
		                    <ul>
		                        <li>
		                            <a class="active" href="index">Home</a>
		                        </li>
		                        <li>About Us</li>
		                    </ul>
		                </div>
		            </div>
		        </div>
		    </div>
		</div>
		<!-- Breadcrumbs End -->
		
		<!-- History Start -->
        <div class="rs-history sec-spacer">
            <div class="container">
                <div class="row">
                    <div class="col-lg-6 col-md-12 rs-vertical-bottom mobile-mb-50">
                    	<a href="javascript:void()">
							<img src="assets/img/history.jpg" alt="History Image"/>
                    	</a>
                    </div>
                    <div class="col-lg-6 col-md-12">
		                <div class="abt-title">
		                    <h2>OUR HISTORY</h2>
		                </div>
                    	<div class="about-desc">
                			<p><?= $inst_his ?></p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- History End -->

        <!-- Mission Start -->
        <div class="rs-mission sec-color sec-spacer">
            <div class="container">
                <div class="row">
                    <div class="col-lg-6 col-md-12 mobile-mb-50">
		                <div class="abt-title">
		                    <h2>OUR MISSION</h2>
		                </div>
                    	<div class="about-desc">
                        <p><?= $inst_mission ?></p>
                        </div>
                    </div>
                    <div class="col-lg-6 col-md-12">
                    	<div class="row">
                    		<div class="col-md-12 mobile-mb-30">
                    			<a href="javascript:void()">
									<img src="assets/img/mission.jpg" alt="Mission Image"/>
		                    	</a> 
                    		</div>
                    	</div>
                    </div>
                </div>
            </div>
        </div>
        <!-- Mission End -->

        <!-- Vision Start -->
        <div class="rs-vision sec-spacer">
            <div class="container">
                <div class="row">
                    <div class="col-lg-6 col-md-12 mobile-mb-50">
                        <div class="vision-img rs-animation-hover">
							<img src="assets/img/vision.jpg" alt="img02"/>
							<div class="overly-border"></div>
						</div>
                    </div>
                    <div class="col-lg-6 col-md-12">
		                <div class="abt-title">
		                    <h2>OUR VISION</h2>
		                </div>
                    	<div class="vision-desc">
                        <p><?= $inst_vision ?></p>
                		</div>
                    </div>
                </div>
            </div>
        </div>
        <!-- Vision End -->
<?php require_once("footer.php"); ?>