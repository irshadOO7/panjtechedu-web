<?php require_once("header.php") ?>	
<style>
.contact-page-section .contact-comment-section form .form-group input, .contact-page-section .contact-comment-section form .form-group textarea {
    border-radius: 4px;
    background: #1e1a1a54;
}
</style>
		<!-- Contact Section Start -->
		<div class="contact-page-section sec-spacer">
		     <center class="text-success"><h2><?= $_SESSION['msg']?></h2></center>
        	<div class="container">
            <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d7198.01125544674!2d85.07236857464504!3d25.57147953489391!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x39f2a82f79f1a7b7%3A0x1dd69d5b1858c07c!2sAlba%20Colony%2C%20Phulwari%20Sharif%2C%20Patna%2C%20Bihar%20801505!5e0!3m2!1sen!2sin!4v1653567196496!5m2!1sen!2sin" width="1110" height="400" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>
        		<div class="row contact-address-section">
    				<div class="col-md-4 pl-0">
    					<div class="contact-info contact-address">
    						<i class="fa fa-map-marker"></i>
    						<h4>Address</h4>
    						<?= $inst_address1 ?><br>
							<?= $inst_address2 ?>
    					</div>
    				</div>
    				<div class="col-md-4">
    					<div class="contact-info contact-phone">
    						<i class="fa fa-phone"></i>
    						<h4>Phone Number</h4>
    						<a href="tel:<?= $inst_contact ?>"><?= $inst_contact ?></a>
							<a href="tel:<?= $inst_contact2 ?>"><?= $inst_contact2 ?></a>
								
    					</div>
    				</div>
    				<div class="col-md-4 pr-0">
    					<div class="contact-info contact-email">
    						<i class="fa fa-envelope"></i>
    						<h4>Email Address</h4>
    						<a href="mailto:<?= $inst_email ?>"><?= $inst_email ?></a>
                            <a href="<?= $inst_url ?>"><?= $inst_url ?></a>
        				</div>
        			</div>
        		</div>

        		<div class="contact-comment-section">
        			<h3>Contact Us</h3>
                    <div id="form-messages"></div>
					<form id="contact-form" method="post" action="">
						<fieldset>
							<div class="row">                                      
								<div class="col-md-6 col-sm-12">
									<div class="form-group">
										<label>Name*</label>
										<input name="e_name" class="form-control" type="text" required>
									</div>
								</div>
								<div class="col-md-6 col-sm-12">
									<div class="form-group">
										<label>Number*</label>
										<input name="e_mobile"  class="form-control" type="number" maxlength="10" required>
									</div>
								</div>
							</div>
							<div class="row">
								<div class="col-md-6 col-sm-12">
									<div class="form-group">
										<label>Email*</label>
										<input name="e_email" class="form-control" type="email" required>
									</div>
								</div>
								<div class="col-md-6 col-sm-12">
									<div class="form-group">
										<label>Subject *</label>
										<input name="e_question"  class="form-control" type="text" required>
									</div>
								</div>
							</div>
							<div class="row"> 
								<div class="col-md-12 col-sm-12">    
									<div class="form-group">
										<label>Message *</label>
										<textarea cols="40" rows="10" name="e_purpose" class="textarea form-control"></textarea>
									</div>
								</div>
							</div>							        
							<div class="form-group mb-0">
								<input class="btn-send" type="submit" value="Submit Now">
							</div>
							   
						</fieldset>
					</form>	
        		</div>
        	</div>
        </div>
        <!-- Contact Section End -->     
<?php require_once("footer.php");
if(isset($_POST)){
extract($_POST);

$schoolSms = "New enquiry From Name = $e_name , Email = $e_email ,Number = $e_mobile ,Subject = $e_question and Message = $e_purpose";
$sms = "Thank you for your enquiry we will contact you soon. from $inst_name.";
$res = mail($inst_email,"WebSite Enquiry",$schoolSms);
mail($e_email,"No Reply : $name",$sms);
insert_data('enquiry',$_POST);
if($res == true){
    $_SESSION['msg'] = "Message Sent Successfully.";
}else{
    $_SESSION['msg'] = "Sorry Message not sent.";
}
}