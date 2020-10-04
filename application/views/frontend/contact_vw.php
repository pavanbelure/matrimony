<?php $this->load->view('frontend/include/header');?>

<div class="about_main clearfix">
	<section id="about">
	<img src="<?php echo base_url('assets/frontend/img/mr1.jpeg')?>" width="100%" height="500px">
	</section>
	<section id="about_top">
	<div class="container">
	<div class="row">
	<div class="col-sm-12"></div>
	</div>
	</div>
	</section>
	<section id="about_bottom">
	<div class="container">
	<div class="row">
	<div class="col-sm-12"></div>
	</div>
	</div>
	</section>
</div>

<section id="about_heading" class="about_register">
 <div class="container">
  <div class="row">
   <div class="col-sm-12">
    <div class="about_heading">
	  <h5><a href="#">Home</a> <span>//</span>Contact Us</h5>
	  <h1>Contact <span>  Us</span> </h1>
	</div>
   </div>
  </div>
 </div>
</section>

<section id="contact">
 <div class="container">
  <div class="row">
   <div class="contact clearfix">
    <div class="col-sm-4">
	 <div class="contact_inner text-center">
	  <h1><i class="fa fa-map-marker"></i></h1>
	  <h2>Address</h2>
	  <h3>MATRIMONIAL WEBSITE</h3>
	  <p>
	   Office No. B-10, 1st Floor, Lorem Amet,<br>
       Consectetur Adipiscing, Integer  Zone, <br>
       Delhi-123456, Praesent , India
	  </p>
	 </div>
	</div>
	<div class="col-sm-4">
	 <div class="contact_inner icon_2 text-center">
	  <h1><i class="fa fa-envelope"></i></h1>
	  <h2>Email</h2>
	  <p>
	   <a href="#"> info@gmail.com</a><br>
		<a href="#">info@gmail.com</a><br>
		<a href="#">info@gmail.com</a><br>
		<a href="#">info@gmail.com</a>
	  </p>
	 </div>
	</div>
	<div class="col-sm-4">
	 <div class="contact_inner icon_3 text-center">
	  <h1><i class="fa fa-phone"></i></h1>
	  <h2>Contact No.</h2>
	  <span class="span_1"><i class="fa fa-phone-square"></i>  +91 - 1234-567-890  </span>
	  <span class="span_2"> <i class="fa fa-whatsapp"></i>  +91 - 1234-567-890  </span>
	 </div>
	</div>
   </div>
  </div>
 </div>
</section>

<section id="contact_us">
		<div class="container">
		<div class="row">
		<div class="col-sm-12">
		<div class="row">
			<div class="col-lg-12 text-center">
				<h1 class="port">CONTACT</h1>
			</div>
		</div>
		<div class="row">
			<div class="col-lg-6 col-lg-offset-0">
				<!-- To configure the contact form email address, go to mail/contact_me.php and update the email address in the PHP file on line 19. -->
				<!-- The form should work on most web servers, but if the form is not working you may need to configure your web server differently. -->
				<form name="sentMessage" id="contactForm" novalidate="">
					<div class="row control-group">
						<div class="form-group col-xs-12 floating-label-form-group controls">
							<label>Name</label>
							<input type="text" class="form-control" placeholder="Name" id="name" required="" data-validation-required-message="Please enter your name.">
							<p class="help-block text-danger"></p>
						</div>
					</div>
					<div class="row control-group">
						<div class="form-group col-xs-12 floating-label-form-group controls">
							<label>Email Address</label>
							<input type="email" class="form-control" placeholder="Email Address" id="email" required="" data-validation-required-message="Please enter your email address.">
							<p class="help-block text-danger"></p>
						</div>
					</div>
					<div class="row control-group">
						<div class="form-group col-xs-12 floating-label-form-group controls">
							<label>Phone Number</label>
							<input type="tel" class="form-control" placeholder="Phone Number" id="phone" required="" data-validation-required-message="Please enter your phone number.">
							<p class="help-block text-danger"></p>
						</div>
					</div>
					<div class="row control-group">
						<div class="form-group col-xs-12 floating-label-form-group controls">
							<label>Message</label>
							<textarea rows="5" class="form-control" placeholder="Message" id="message" required="" data-validation-required-message="Please enter a message."></textarea>
							<p class="help-block text-danger"></p>
						</div>
					</div>
					<div class="row">
						<div class="form-group col-xs-12">
							<button type="submit" class="btn btn-success btn-lg">Send</button>
						</div>
					</div>
				</form>
			</div>
			<div class="col-lg-6 col-lg-offset-0">
			 <div class="contact_main">
			   <a href="#"><img src="img/56.jpg"></a>
			 </div>
			</div>
		</div>
		</div>
		</div>
		</div>
		</section>

<?php $this->load->view('frontend/include/footer'); ?>