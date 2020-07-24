<?php get_header(); ?>
		<!--banner start--->
		<div class="slider">
	
	
			<div class="container-fluid">
				<div class="row">
					<!-- Start WOWSlider.com BODY section --> <!-- add to the <body> of your page -->
							<div id="wowslider-container0">
							<div class="ws_images"><ul>
								<li><img src="<?php echo get_template_directory_uri();?>/data0/images/digitalmarketing1.jpg" alt="Digital-Marketing-1" title="Digital-Marketing-1" id="wows0_0"/></li>
								<li><a href="http://wowslider.com"><img src="<?php echo get_template_directory_uri();?>/data0/images/bann.png" alt="jquery slider" title="bann" id="wows0_1"/></a></li>
								<li><img src="data0/images/pic.jpg" alt="pic" title="pic" id="wows0_2"/></li>
							</ul></div>
							<div class="ws_bullets"><div>
								<a href="#" title="Digital-Marketing-1"><span><img src="<?php echo get_template_directory_uri();?>/data0/tooltips/digitalmarketing1.jpg" alt="Digital-Marketing-1"/>1</span></a>
								<a href="#" title="bann"><span><img src="<?php echo get_template_directory_uri();?>/data0/tooltips/bann.png" alt="bann"/>2</span></a>
								<a href="#" title="pic"><span><img src="<?php echo get_template_directory_uri();?>/data0/tooltips/pic.jpg" alt="pic"/>3</span></a>
							</div></div><div class="ws_script" style="position:absolute;left:-99%"><a href="http://wowslider.com/vi">css slider</a> by WOWSlider.com v8.7</div>
							<div class="ws_shadow"></div>
							</div>	
							<script type="text/javascript" src="<?php echo get_template_directory_uri();?>/engine0/wowslider.js"></script>
							<script type="text/javascript" src="<?php echo get_template_directory_uri();?>/engine0/script.js"></script>
	<!-- End WOWSlider.com BODY section -->
				
					
				</div>
			</div>
		</div>
		<!--banner end--->
		<!--About start--->
		<div class="about">
			<div class="container-fluid">
				<div class="row">
					<div class="col-md-12" id="ab">ABOUT
					<hr class="line"></hr>
					</div>
				</div>
				<div class="row">
					<div class="col-md-5 col-md-offset-1 aboutleft">
						<h2>INTRODUCTION ABOUT COMPANY</h2>
						<p id="aboutpara">THIS IS COMPANY THEMETHIS IS COMPANY THEMETHIS IS COMPANY THEMETHIS
						THIS IS COMPANY THEMETHIS IS COMPANY THEMETHIS IS COMPANY THEME
						THIS IS COMPANY THEMETHIS IS COMPANY THEMETHIS IS COMPANY THEMETHIS IS COMPANY THEMETHIS
						THIS IS COMPANY THEMETHIS IS COMPANY THEMETHIS IS COMPANY THEME
						THIS IS COMPANY THEMETHIS IS COMPANY THEMETHIS IS COMPANY THEME
						</p>
					</div>
					<div class="col-md-6 aboutright">
					
						<!--<img src="<?php echo get_template_directory_uri();?>/img/a.png" class="img img-responsive abcom"/>-->
						<img src="<?php echo get_theme_mod('about_pic'); ?>" class="img img-responsive abcom"/>
					</div>
				</div>
			</div>
		</div>
		<!--About end--->
		
				<!--Services start--->
		<div class="services">
			<div class="container-fluid">
				<div class="row">
					<div class="col-md-12" id="ab">SERVICES</div>
				</div>
				<div class="row">
					<div class="col-md-3" id="s1">
						<p id="ab1"></p>
						<h2>FULL RESPONSIVE</h2>
						<p>This is paragraph.This is paragraph</p>
						
					</div>
					<div class="col-md-3" id="s2">
						<p id="ab1"></p>
						<h2>FULL RESPONSIVE</h2>
						<p>This is paragraph.This is paragraph</p>
					</div>
					<div class="col-md-3" id="s3">
						<p id="ab1"></p>
						<h2>FULL RESPONSIVE</h2>
						<p>This is paragraph.This is paragraph</p>
					</div>
					<div class="col-md-3" id="s4">
						<p id="ab1"></p>
						<h2>FULL RESPONSIVE</h2>
						<p>This is paragraph.This is paragraph</p>
					</div>
				</div>
			</div>
		</div>
		<!--Services end--->
		
		<!--NEWS start--->
		<div class="news">
			<div class="container-fluid">
				<div class="row">
					<div class="col-md-12" id="ab">LATEST NEWS</div>
				</div>
				<div class="row">
				
	
<?php
				if(have_posts())
				{
					while(have_posts())
					{
						the_post();
?>
					<div class="col-md-4">
						
						<img src="<?php echo get_template_directory_uri();?>/img/4.jpg" class="img-responsive"/>
                         <h2><?php echo the_content(); ?></h2>
						<p><?php echo the_author(); ?></p>						
					</div>
				<?php
					}
				}
				?>
					
					
				</div>
			</div>
		</div>
		<!--NEWS end--->
		
		
		
		<!--post start--->
		<div class="news">
			<div class="container-fluid">
				<div class="row">
					<div class="col-md-12" id="ab">LATEST NEWS 2</div>
				</div>
				<div class="row">
					<div class="col-md-4">
						
						<img src="<?php echo get_template_directory_uri();?>/img/4.jpg" class="img-responsive"/>
                         <h2>FULL RESPONSIVE</h2>
						<p>This is paragraph.This is paragraph</p>						
					</div>
					<div class="col-md-4">
					<img src="<?php echo get_template_directory_uri();?>/img/4.jpg" class="img-responsive"/>
					<h2>FULL RESPONSIVE</h2>
						<p>This is paragraph.This is paragraph</p>	
						
					</div>
					<div class="col-md-4">
					<img src="<?php echo get_template_directory_uri();?>/img/4.jpg" class="img-responsive"/>
					<h2>FULL RESPONSIVE</h2>
						<p>This is paragraph.This is paragraph</p>	
						
					</div>
					
				</div>
			</div>
		</div>
		<!--For Post end--->
		
		<!--background start--->
		<div class="newsletter">
			<div class="container-fluid">
				<div class="row">
					<div class="col-md-12" id="ab">SUBSCRIBE HERE</div>
				</div>
				<div class="row">
				<div class="col-md-4"></div>
					<div class="col-sm 4 col-md-4">
					<form>
					<input type="email" class="form-control"/>
					
					</div>
					<div class="col-sm 4 col-md-4">
					<input type="submit" Value="Subscribe" class="btn btn-danger">
					</form>
					</div>
				</div>
				
			</div>
		</div>
		<!--background end
		
		
		
		<?php get_footer(); ?>