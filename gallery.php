<?php require_once("header.php"); ?>
		
		<!-- Breadcrumbs Start -->
		<div class="rs-breadcrumbs bg7 breadcrumbs-overlay">
		    <div class="breadcrumbs-inner">
		        <div class="container">
		            <div class="row">
		                <div class="col-md-12 text-center">
		                    <h1 class="page-title">OUR GALLERY</h1>
		                    <ul>
		                        <li>
		                            <a class="active" href="index">Home</a>
		                        </li>
		                        <li>Gallery</li>
		                    </ul>
		                </div>
		            </div>
		        </div>
		    </div>
		</div>
		<!-- Breadcrumbs End -->

		<!-- Gallery Start -->
        <div class="rs-gallery-4 rs-gallery sec-spacer">
            <div class="container">
            	<div class="row">
				<?php $jpegs = glob("assets/img/gallery/*.jpg");
						foreach ($jpegs as $jpg) { ?>
            		<div class="col-lg-3 col-md-6 mb-2">
            			<div class="gallery-item">
            			    <img src="<?= $jpg ?>" alt="Gallery Image" />
            			    <div class="gallery-desc">
            					<!-- <h3><a href="#">Photo Title Here</a></h3> -->
            					<!-- <p>There are many variations of Lorem Ipsum available</p> -->
            					<a class="image-popup" href="<?= $jpg ?>" title="Photo Title Here">
            						<i class="fa fa-search"></i>
            					</a>
            			    </div>
            			</div>
            		</div>
					<?php }?> 
            	</div>
            </div>
        </div>
        <!-- Gallery End -->
				
<?php require_once("footer.php"); ?>