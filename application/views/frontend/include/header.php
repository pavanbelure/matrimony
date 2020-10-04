<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <title>Matrimonial</title>
  <link href="<?php echo base_url('assets/frontend/css/bootstrap.min.css');?>" rel="stylesheet">
  <link href="<?php echo base_url('assets/frontend/css/style.css')?>" rel="stylesheet">
  <link rel="stylesheet" type="text/css" href="<?php echo base_url('assets/frontend/css/font-awesome.min.css')?>" />
  <script src="<?php echo base_url('assets/frontend/js/jquery-2.1.1.min.js')?>"></script>
  <script src="<?php echo base_url('assets/frontend/js/bootstrap.min.js')?>"></script>
  <link rel="stylesheet" type="text/css" href="<?php echo base_url('assets/frontend/js/codebase/dhtmlxcalendar.css')?>"/>
  <script src="<?php echo base_url('assets/frontend/js/codebase/dhtmlxcalendar.js')?>"></script>
</head>
  
<body onload="doOnLoad();">
  <section id="top">
    <div class="container">
      <div class="row">
        <div class="top clearfix">
          <div class="col-sm-6">
            <div class="top_left">
              <p>Hello world! Lorem ipsum dolor sit adipiscing elit</p>
            </div>
          </div>
          <div class="col-sm-6">
            <div class="top_right clearfix text-right">
              <span class="span_1"><i class="fa fa-phone-square"></i>  +91 - 1243-545-423  </span>
              <span class="span_2"> <i class="fa fa-whatsapp"></i>  +91 - 2132-544-434 </span>
            </div>
          </div>
        </div>
      </div>
    </div>
  </section>

  <section id="header" class="cd-secondary-nav">
    <div class="container">
      <div class="row">
        <div class="col-sm-12">
          <nav class="navbar navbar-default" role="navigation">
            <!-- Brand and toggle get grouped for better mobile display -->
            <div class="navbar-header">
              <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1">
                <span class="sr-only">Toggle navigation</span>
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
              </button>
              <a class="navbar-brand" href="<?php echo base_url('home');?>">Matrimonial <br><span>Best Matrimony Website</span></a>
            </div>
            <!-- Collect the nav links, forms, and other content for toggling -->
            <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
              <ul class="nav navbar-nav navbar-right">
                <li><a class="color_1 active_1" href="<?php echo base_url('home');?>">Home</a></li>                  
                <li><a class="color_1" href="<?php echo base_url('about');?>">About Us</a></li>
                <li><a class="color_1" href="<?php echo base_url('services');?>">Services</a></li>
                <li><a class="color_1" href="<?php echo base_url('login');?>">Login</a></li>
                <li><a class="color_1" href="<?php echo base_url('register');?>">Register</a></li>
                <li><a class="color_1" href="<?php echo base_url('contact');?>">Contact Us</a></li>
                <li><a class="color_1" href="<?php echo base_url('multi_register');?>">Complete profile</a></li>
              </ul>
            </div>
            <!-- /.navbar-collapse -->
          </nav>
        </div>
      </div>
    </div>
  </section>
