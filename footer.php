      <!-- Footer Start -->
        <footer id="rs-footer" class="bg3 rs-footer">
			<div class="container">
				<!-- Footer Address -->
				<div>
					<div class="row footer-contact-desc">
						<div class="col-md-4">
							<div class="contact-inner">
								<i class="fa fa-map-marker"></i>
								<h4 class="contact-title">Address</h4>
								<p class="contact-desc">
									<?= $inst_address1 ?><br>
									<?= $inst_address2 ?>
								</p>
							</div>
						</div>
						<div class="col-md-4">
							<div class="contact-inner">
								<i class="fa fa-phone"></i>
								<h4 class="contact-title">Phone Number</h4>
								<p class="contact-desc">
									<a href="tel:<?= $inst_contact ?>"><?= $inst_contact ?></a><br>
									<a href="tel:<?= $inst_contact2 ?>"><?= $inst_contact2 ?></a>
								</p>
							</div>
						</div>
						<div class="col-md-4">
							<div class="contact-inner">
								<i class="fa fa-map-marker"></i>
								<h4 class="contact-title">Email Address</h4>
								<p class="contact-desc">
                                <a href="mailto:<?= $inst_email ?>"><?= $inst_email ?></a><br>
                                <a href="<?= $inst_url ?>"><?= $inst_url ?></a>
								</p>
							</div>
						</div>
					</div>					
				</div>
			</div>
			
			<!-- Footer Top -->
            <div class="footer-top">
                <div class="container">
                    <div class="row">
                        <div class="col-lg-4 col-md-12">
                            <div class="about-widget">
                            <h5 class="footer-title"><?= $inst_name ?></h5>
                                <p style="text-align: justify;"><?= $inst_fullabout ?></p>
                            </div>
                        </div>
                        <div class="col-lg-4 col-md-12">
                            <h5 class="footer-title">RECENT POSTS</h5>
                            <div class="recent-post-widget">
                                <?php 
            				      $notice = get_all('notice',"*",['status'=>'SHOW'])['data'];
            				      if($notice){
            				      $i =0;
            				      foreach($notice as $e){
            				      if($i < 3 ){
                                  $date = date('d', strtotime($e['notice_date'])); 
                                  $m = date('M', strtotime($e['notice_date']));
                                  $d = html_entity_decode($n['notice_details']);
                                //   echo $d = substr($d,48);
            				    ?>
            				    <a href="#rs-latest-news">
                                <div class="post-item mb-1">
                                    <div class="post-date">
                                        <span><?= $date ?></span>
                                        <span><?= $m ?></span>
                                    </div>
                                    <div class="post-desc">
                                        <h5 class="post-title"><a href="javascript:void()"><?= $e['notice_title'] ?></a></h5>
                                        <!--<span class="post-category">abc</span>-->
                                    </div>
                                </div>
                                </a>
                                <?php } $i++; }}else{
                                 echo "<center>No Event Available</center>";
                                 } ?>
                            </div>
                        </div>
                        <div class="col-lg-4 col-md-12">
                            <h5 class="footer-title">OUR SITEMAP</h5>
                            <ul class="sitemap-widget">
                                <li class="active"><a href="index"><i class="fa fa-angle-right" aria-hidden="true"></i>Home</a></li>
                                <li class="active"><a href="about"><i class="fa fa-angle-right" aria-hidden="true"></i>ABOUT</a></li>
                                <li class="active"><a href="course"><i class="fa fa-angle-right" aria-hidden="true"></i>COURSE</a></li>
                                <li class="active"><a href="gallery"><i class="fa fa-angle-right" aria-hidden="true"></i>GALLERY</a></li>
                                <li class="active"><a href="contact"><i class="fa fa-angle-right" aria-hidden="true"></i>CONTACT</a></li>
                                <li class="active"><a href="https://panjtechedu.com/apprise/login.php"><i class="fa fa-angle-right" aria-hidden="true"></i>Login</a></li>
                            </ul>
                        </div>
                    </div>
                    <div class="footer-share">
                        <ul>
                            <li><a href="javascript:void()"><i class="fa fa-facebook"></i></a></li>
                            <li><a href="javascript:void()"><i class="fa fa-google-plus"></i></a></li>
                            <li><a href="javascript:void()"><i class="fa fa-twitter"></i></a></li>
                            <li><a href="javascript:void()"><i class="fa fa-pinterest-p"></i></a></li>
                            <li><a href="javascript:void()"><i class="fa fa-vimeo"></i></a></li>    
                        </ul>
                    </div>                                
                </div>
            </div>

            <!-- Footer Bottom -->
            <div class="footer-bottom">
                <div class="container">
                    <div class="copyright">
                        <p>© 2022 <?= $inst_name ?>. All Rights Reserved.<br>Made with <i class="fa fa-heart pulse"></i> <a href="https://offerplant.com/" target="_blank">OfferPlant</a></p>
                    </div>
                </div>
            </div>
        </footer>
        <!-- Footer End -->

        <!-- start scrollUp  -->
        <div id="scrollUp">
            <i class="fa fa-angle-up"></i>
        </div>
		
		<!-- Canvas Menu start -->
        <nav class="right_menu_togle">
        	<div class="close-btn"><span id="nav-close" class="text-center">x</span></div>
            <div class="canvas-logo">
                <a href="assets/index.html"><img src="assets/images/logo-white.png" alt="logo"></a>
            </div>
        	<ul class="sidebarnav_menu list-unstyled main-menu">
                <!--Home Menu Start-->
                <li class="current-menu-item menu-item-has-children"><a href="javascript:void()">Home</a>
                    <ul class="list-unstyled">
                        <li class="sub-nav active"><a href="assets/index.html">Home One<span class="icon"></span></a></li>
                        <li class="sub-nav"><a href="assets/index2.html">Home Two<span class="icon"></span></a></li>
                        <li class="sub-nav"><a href="assets/index3.html">Home Three<span class="icon"></span></a></li>
                        <li class="sub-nav"><a href="assets/index4.html">Home Four<span class="icon"></span></a></li>
                    </ul>
                </li>
                <!--Home Menu End-->
                
                <!--About Menu Start-->
                <li class="menu-item-has-children"><a href="javascript:void()">About Us</a>
                    <ul class="list-unstyled">
                        <li class="sub-nav active"><a href="assets/index.html">About One<span class="icon"></span></a></li>
                        <li class="sub-nav"><a href="assets/index2.html">About Two<span class="icon"></span></a></li>
                        <li class="sub-nav"><a href="assets/index3.html">About Three<span class="icon"></span></a></li>
                    </ul>
                </li>
                <!--About Menu End-->
                
                <!--Pages Menu Start-->
                <li class="menu-item-has-children"><a href="javascript:void()">Pages</a>
                    <ul class="list-unstyled">
                        <li class="sub-nav active"><a href="assets/teachers.html">Teachers<span class="icon"></span></a></li>
                        <li class="sub-nav"><a href="assets/teachers-without-filter.html">Teachers Without Filter<span class="icon"></span></a></li>
                        <li class="sub-nav"><a href="assets/teachers-single.html">Teachers Single<span class="icon"></span></a></li>
                        <li class="sub-nav"><a href="assets/gallery.html">Gallery One<span class="icon"></span></a></li>
                        <li class="sub-nav"><a href="assets/gallery2.html">Gallery Two<span class="icon"></span></a></li>
                        <li class="sub-nav"><a href="assets/gallery3.html">Gallery Three<span class="icon"></span></a></li>
                        <li class="sub-nav"><a href="assets/shop.html">Shop<span class="icon"></span></a></li>
                        <li class="sub-nav"><a href="assets/shop-details.html">Shop Details<span class="icon"></span></a></li>
                        <li class="sub-nav"><a href="assets/cart.html">Cart<span class="icon"></span></a></li>
                        <li class="sub-nav"><a href="assets/shop.html">Shop<span class="icon"></span></a></li>
                        <li class="sub-nav"><a href="assets/error-404.html">Error 404<span class="icon"></span></a></li>
                    </ul>
                </li>
                <!--Pages Menu End-->
                
                <!--Courses Menu Star-->
                <li class="menu-item-has-children"><a href="javascript:void()">Courses</a>
                    <ul class="list-unstyled">
                        <li class="sub-nav"><a href="assets/courses.html">Courses<span class="icon"></span></a></li>
                        <li class="sub-nav"><a href="assets/courses2.html">Courses Two<span class="icon"></span></a></li>
                        <li class="sub-nav"><a href="assets/courses-details.html">Courses Details<span class="icon"></span></a></li>
                    </ul>
                </li>
                <!--Courses Menu End-->
                
                <!--Events Menu Star-->
                <li class="menu-item-has-children"><a href="javascript:void()">Events</a>
                    <ul class="list-unstyled">
                        <li class="sub-nav"><a href="assets/events.html">Events<span class="icon"></span></a></li>
                        <li class="sub-nav"><a href="assets/events-details.html">Events Details<span class="icon"></span></a></li>
                    </ul>
                </li>
                <!--Events Menu End-->
                
                <!--blog Menu Star-->
                <li class="menu-item-has-children"><a href="javascript:void()">Blog</a>
                    <ul class="list-unstyled">
                        <li class="sub-nav"><a href="assets/blog.html">Blog<span class="icon"></span></a></li>
                        <li class="sub-nav"><a href="assets/blog-details.html">Blog Details<span class="icon"></span></a></li>
                    </ul>
                </li>
                <!--blog Menu End-->
                <li><a href="assets/contact.html">Contact<span class="icon"></span></a></li>
        	</ul>
            <div class="search-wrap"> 
                <label class="screen-reader-text">Search for:</label> 
                <input type="search" placeholder="Search..." name="s" class="search-input" value=""> 
                <button type="submit" value="Search"><i class="fa fa-search"></i></button>
            </div>
        </nav>
        <!-- Canvas Menu end -->
        
        <!-- Search Modal Start -->
        <div aria-hidden="true" class="modal fade search-modal" role="dialog" tabindex="-1">
        	<button type="button" class="close" data-dismiss="modal" aria-label="Close">
	          <span aria-hidden="true" class="fa fa-close"></span>
	        </button>
            <div class="modal-dialog modal-dialog-centered">
                <div class="modal-content">
                    <div class="search-block clearfix">
                        <form>
                            <div class="form-group">
                                <input class="form-control" placeholder="eg: Computer Technology" type="text">
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
        <!-- Search Modal End --> 
        
        <!-- modernizr js -->
        <script src="assets/js/modernizr-2.8.3.min.js"></script>
        <!-- jquery latest version -->
        <script src="assets/js/jquery.min.js"></script>
        <!-- bootstrap js -->
        <script src="assets/js/bootstrap.min.js"></script>
        <!-- owl.carousel js -->
        <script src="assets/js/owl.carousel.min.js"></script>
		<!-- slick.min js -->
        <script src="assets/js/slick.min.js"></script>
        <!-- isotope.pkgd.min js -->
        <script src="assets/js/isotope.pkgd.min.js"></script>
        <!-- imagesloaded.pkgd.min js -->
        <script src="assets/js/imagesloaded.pkgd.min.js"></script>
        <!-- wow js -->
        <script src="assets/js/wow.min.js"></script>
        <!-- counter top js -->
        <script src="assets/js/waypoints.min.js"></script>
        <script src="assets/js/jquery.counterup.min.js"></script>
        <!-- magnific popup -->
        <script src="assets/js/jquery.magnific-popup.min.js"></script>
        <!-- rsmenu js -->
        <script src="assets/js/rsmenu-main.js"></script>
        <!-- plugins js -->
        <script src="assets/js/plugins.js"></script>
		 <!-- main js -->
        <script src="assets/js/main.js"></script>
    </body>
</html>