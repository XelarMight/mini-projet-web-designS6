<?php $this->load->helper("url"); ?>
<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <link rel="stylesheet" type="text/css" href="<?php echo(site_url("assets/css/bootstrap.min.css")); ?>">

    <!-- Goggle Font -->
    <link rel="stylesheet" type="text/css" href="http://fonts.googleapis.com/css?family=Roboto:400,100,300,500">

    <!-- Font Css -->
    <link rel="stylesheet" type="text/css" href="<?php echo(site_url("assets/css/font-awesome.min.css")) ?>">

    <!-- Custom CSS -->
    <link rel="stylesheet" type="text/css" href="<?php echo(site_url("assets/css/style.css")) ?>">

    <!-- Animation Css -->
    <link rel="stylesheet" href="<?php echo(site_url("assets/css/animate.css")) ?>">
  </head>
<body>
<!-- Header -->
<div class="header-div">

<nav class="navbar navbar-default">
<div class="container">
  <!-- Brand and toggle get grouped for better mobile display -->
  <div class="navbar-header logo-div bounceInLeft wow" data-wow-duration="2s">
    <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1" aria-expanded="false">
      <span class="sr-only">Toggle navigation</span>
      <span class="icon-bar"></span>
      <span class="icon-bar"></span>
      <span class="icon-bar"></span>
    </button>
    <a class="navbar-brand" href="<?php echo(base_url()); ?>">Awesome</a>
  </div>
  <!-- Collect the nav links, forms, and other content for toggling -->
  <div class="collapse navbar-collapse top-right-menu-ul bounceInRight wow" id="bs-example-navbar-collapse-1" data-wow-duration="4s">
    <ul class="nav navbar-nav navbar-right">
      <li><a href="#features">Features</a></li>
      <li><a href="#Services">Services</a></li>
      <li><a href="<?php echo(site_url("Symptome-du-covid-19")); ?>">Symptome du <strong>covid-19</strong></a></li>
      <li><a href="<?php echo(site_url("Statistiques-des-cas-covid-19")); ?>">Statistiques des cas</a></li>
      <li><a href="<?php echo(site_url("Information-Vaccin")); ?>"><strong>Information</strong> sur les Vaccins</a></li>
      <li><a href="#">Button</a></li>
    </ul>
  </div><!-- End navbar-collapse -->
</div><!-- End container -->
</nav>

<div class="container wow bounceInDown" data-wow-duration="5s">
<div class="row">
  <div class="col-md-offset-2 col-md-8 text-center slide-text">
    <h1><?php echo($header_title); ?></h1>
    <p><?php echo($header_description); ?></p>
  </div><!-- End col-md-8-->
  <div class="col-md-offset-2"></div><!-- End col-md-offset-2 -->
</div><!-- End Row -->
</div><!-- End Contanier -->

</div><!-- End header-div -->

<!-- Feature -->

<div class="container" id="features">
	<div class="row">
		<div class="col-md-12">
			<div class="main_heading">
				<h1>Features</h1>
				<div  class="text-center"><span class="underline"></span></div>
			</div>
		</div><!-- End col-md-12 -->
	</div><!-- End row -->

	<div class="row">
		<div class="col-md-3 col-sm-6">
			<div class="features-div">
			   <i class="fa fa-mobile"></i>
			   <h4>Responsive Design</h4>
			   <p>Vous pouvez acc&eacute;der &#224; ce site sur tous vos appareils</p>
			</div>
		</div><!-- End col-md-3-->
		<div class="col-md-3 col-sm-6">
			<div class="features-div">
			   <i class="fa fa-code"></i>
			   <h4>Espace commentaire</h4>
			   <p>Vous pouvez acc&eacute;der aux d&#232; nouvelles sur le <strong>covid-19</strong></p>
			</div>
		</div><!-- End col-md-3-->
		<div class="col-md-3 col-sm-6">
			<div class="features-div">
			   <i class="fa fa-life-ring"></i>
			   <h4>24/7 Support</h4>
			   <p>L'espace support est disponible &#224; toute heure</p>
			</div>
		</div><!-- End col-md-3-->
		<div class="col-md-3 col-sm-6">
			<div class="features-div">
			   <i class="fa fa-pencil"></i>
			   <h4>Modern Design</h4>
			   <p>Vous pouvez nous aidez pour les informations du <strong>covid-19</strong></p>
			</div>
		</div><!-- End col-md-3-->
	</div><!-- End row -->
</div><!-- End Container -->


<!-- End Feature -->
