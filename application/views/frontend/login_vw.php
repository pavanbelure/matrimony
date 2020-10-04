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
	  <h5><a href="#">Home</a> <span>//</span>Login</h5>
	  <h1>Login</span> </h1>
	</div>
   </div>
  </div>
 </div>
</section>

<section id="pages">
	<div class="register">
		<div class="col-sm-7">
		<form>
			<h2 class="text-center">Member login</h2>
			<div class="form-group">
				<input type="text" name="username" placeholder="username" class="form-control">
			</div>
			<div class="form-group">
				<input type="text" name="password" placeholder="password" class="form-control">
			</div>
			<input type="button" name="submit" value="Sign In" class="btn btn-primary"><br><br>	
			<h3>Not a member yet?  <a href="register.php">Register Here</a></h3>
		</form>
		</div>
	</div>
</section>
	
<?php $this->load->view('frontend/include/footer'); ?>