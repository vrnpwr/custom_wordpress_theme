<!DOCTYPE html>
<html lang="en">
  <head>
  <title><?php bloginfo("title"); ?></title>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <!--<link rel="stylesheet" href="<?php echo get_template_directory_uri();?>/css/bootstrap.min.css" >-->

	<link rel="stylesheet" href="<?php bloginfo('stylesheet_url'); ?>" >





	<link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css" rel="stylesheet">

	
  
	
	<!-- Start WOWSlider.com HEAD section --> <!-- add to the <head> of your page -->
	<link rel="stylesheet" type="text/css" href="<?php echo get_template_directory_uri();?>/engine0/style.css" />
	<script type="text/javascript" src="<?php echo get_template_directory_uri();?>/engine0/jquery.js"></script>
	<!-- End WOWSlider.com HEAD section -->
	
	<?php wp_head(); ?>
	</head>
  <body>

	<div class="wrapper">
	<!--header start--->
		<header>
			<div class="top-header">

				<div class="container-fluid">
					<div class="row">	
						<div class="col-sm-9 col-md-9">
						<h5 class="wel">WELCOME TO OUR SITES</h5>
						</div>
						<div class="col-sm-3 col-md-3">
							<div class="row">
								</div>

						
						</div>
						

					</div>
				
				
				</div>
			</div>
			
			<div class="top-mid-header">
					<div class="container-fluid">
					<div class="row">	
						
						<div class="col-sm-12 col-md-12">
							
									<nav class="navbar navbar-toggleable-md navbar-light bg-faded" id="new">
									  <button class="navbar-toggler navbar-toggler-right" type="button" data-toggle="collapse" data-target="#navbarNavDropdown" aria-controls="navbarNavDropdown" aria-expanded="false" aria-label="Toggle navigation">
										<span class="navbar-toggler-icon"></span>
									  </button>
									  <a class="navbar-brand" href="#" id="a">
									   <?php bloginfo("name"); ?></a>
									  <div class="collapse navbar-collapse" id="navbarNavDropdown">
										<!--<ul class="navbar-nav col-md-offset-3" id="nav">
										  <li class="nav-item active">
											<a class="nav-link" href="#" id="homeactive">Home <span class="sr-only">(current)</span></a>
										  </li>
										  <li class="nav-item">
											<a class="nav-link" href="#" id="home">About</a>
										  </li>
										  <li class="nav-item">
											<a class="nav-link" href="#" id="home">Gallery</a>
										  </li>
										  <li class="nav-item">
											<a class="nav-link" href="#" id="home">Blog</a>
										  </li>
										  <li class="nav-item">
											<a class="nav-link" href="#" id="home">Services</a>
										  </li>
										  <li class="nav-item dropdown">
											<a class="nav-link dropdown-toggle" href="http://example.com" id="home" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
											  Dropdown link
											</a>
											<div class="dropdown-menu" aria-labelledby="navbarDropdownMenuLink">
											  <a class="dropdown-item" href="#">Action</a>
											  <a class="dropdown-item" href="#">Another action</a>
											  <a class="dropdown-item" href="#">Something else here</a>
											</div>
										  </li>
										  <li class="nav-item">
											<a class="nav-link" href="#" id="home">Contact</a>
										  </li>
										</ul>
									  
									  --->
									  
									  
									  <!--hp wp_nav_menu( array( 'theme_location' => 'primary_menu' ) ); ?>
									 -->
									 
									 <?php
            wp_nav_menu( array(
            'theme_location'    => 'primary_menu',
            'depth'             => 2,
            'container'         => 'div',
            'container_class'   => 'collapse navbar-collapse',
            'container_id'      => 'bs-example-navbar-collapse-1',
            'menu_class'        => 'nav navbar-nav',
            'fallback_cb'       => 'WP_Bootstrap_Navwalker::fallback',
            'walker'            => new WP_Bootstrap_Navwalker())
        );
        ?>
									 </div>
									</nav>
							

						
						</div>
						

					</div>
				
				
				</div>
			</div>
		</header>
		<!--header end--->