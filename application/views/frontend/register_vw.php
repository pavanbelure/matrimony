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
					<h5><a href="#">Home</a> <span>//</span>Register</h5>
					<h1>Register</span> </h1>
				</div>
			</div>
		</div>
	</div>
</section>

<section id="register" class="clearfix">
	<div class="register clearfix">
		<div class="col-sm-7">
			<div class="register_right">
				<h3 class="text-center">Register</h3>
				<div class="register_right_inner clearfix">
				  	<div class="clearfix clear_1">
					    <div class="col-sm-6 register_right_inner_1 space_left">
					  		<input type="text" class="form-control" placeholder="First Name *">
					 	</div>
					    <div class="col-sm-6 register_right_inner_1 space_left">
					   		<input type="text" class="form-control" placeholder="Last Name *">
					 	</div>
				 	</div>
				  	<div class="clearfix clear_1">
					    <div class="col-sm-6 register_right_inner_1 space_left">
					   		<input type="text" class="form-control" placeholder="Email *">
					 	</div>
					    <div class="col-sm-6 register_right_inner_1 space_left">
					   		<input type="text" class="form-control" placeholder="Mobile *">
					 	</div>
				 	</div>
				  	<div class="clearfix clear_1">
					    <div class="col-sm-6 register_right_inner_1 space_left">
					    	<input type="text" class="form-control" placeholder="Location *">
						</div>
					    <div class="col-sm-6 register_right_inner_1 space_left">
					   		<input type="text" class="form-control" id="cal_1" placeholder="Date of Birth">
					 	</div>
				 	</div>
				  	<div class="clearfix clear_1">
					    <div class="col-sm-6 register_right_inner_1 space_left">
						    <select class="form-control">
							<option>Search For</option>
							<option>Lorem</option>
							<option>Ipsum </option>
							<option>Dolor</option>
							<option>Amet</option>
							<option>Consectetur </option>
							<option>Elit</option>
						   	</select>
					    </div>
					    <div class="col-sm-6 register_right_inner_1 space_left">
						   	<select class="form-control">
							<option value="Religion">Religion</option>
							<option>Lorem</option>
							<option>Ipsum </option>
							<option>Dolor</option>
							<option>Amet</option>
							<option>Consectetur </option>
							<option>Elit</option>
							</select>
						</div>
					</div>
				  	<div class="clearfix clear_1">
					    <div class="col-sm-6 register_right_inner_1 space_left">
					    	<input type="text" class="form-control" placeholder="Caste">
					    </div>
					    <div class="col-sm-6 register_right_inner_1 space_left">
						   	<select class="form-control">
								<option value="Gender">Gender</option>
								<option value="Male">Male</option>
								<option value="Female">Female</option>
					      	</select>
					 	</div>
				 	</div>
				 	<div class="clearfix clear_1">
					    <div class="col-sm-6 register_right_inner_1 space_left">
						    <select class="form-control">
								<option value="Marital Status">Marital Status</option>
								<option value="Married">Married</option>
								<option value="Single">Single</option>
							</select>
					    </div>
				   		<div class="col-sm-6 register_right_inner_1 space_left">
						    <select class="form-control">
								<option value="Gender">Upload Photo</option>
								<option value="Male">Lorem</option>
								<option value="Female">Ipsum</option>
					        </select>
				 		</div>
					</div>
					<div class="clearfix clear_1">
						<div class="col-sm-6 register_right_inner_1 space_left">
							<input type="text" class="form-control" placeholder="Captcha Code">
						</div>
						<div class="col-sm-6 register_right_inner_1 space_left">
							<h4>FBGRE</h4>
						</div>
					</div>
					<div class="clearfix col-sm-12 clear_2">
						<p><a href="#">SUBMIT</a></p>
					</div>
				</div>
			</div>
		</div>
	</div>
</section>

<?php $this->load->view('frontend/include/footer'); ?>