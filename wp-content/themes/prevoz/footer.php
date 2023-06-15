<!-- Start Footer Top Area -->
		<footer class="footer-top-area pt-100 pb-70">

			<div class="container">
				<div class="row">
					<div class="col-lg-3 col-md-6">
					<?php $footer_menu = array(
										'menu_class'     => 'single-widget',
										'theme_location' => 'footer_menu',
										'depth'			 =>  2,
										'walker'         => new WP_Bootstrap_Navwalker()
									); 
									wp_nav_menu($footer_menu);
									?>
									</div>
					<!-- <div class="col-lg-3 col-md-6">

						<div class="single-widget">
							<h3>What We Do</h3>
							<ul>
								<li><a href="#">Warehousing</a></li>
								<li><a href="#">Air Freight</a></li>
								<li><a href="#">Ocean Freight</a></li>
								<li><a href="#">Road Freight</a></li>
								<li><a href="#">Supply Chain</a></li>
								<li><a href="#">Packaging</a></li>
							</ul>
						</div>
					</div>
					<div class="col-lg-3 col-md-6">
						<div class="single-widget">
							<h3>Industries</h3>
							<ul>
								<li><a href="#">Chemicals</a></li>
								<li><a href="#">DIY</a></li>
								<li><a href="#">Automotive</a></li>
								<li><a href="#">Consumer Goods</a></li>
								<li><a href="#">Life Science</a></li>
								<li><a href="#">Foreign Trade</a></li>
							</ul>
						</div>
					</div>
					<div class="col-lg-3 col-md-6">
						<div class="single-widget">
							<h3>What We Do</h3>
							<ul>
								<li><a href="#">About Us</a></li>
								<li><a href="team.html">Meet Our Team</a></li>
								<li><a href="blog.html">News & Media</a></li>
								<li><a href="#">Case Studies</a></li>
								<li><a href="contact.html">Contact Us</a></li>
								<li><a href="service.details">Work With Us </a></li>
							</ul>
						</div>
					</div>
					<div class="col-lg-3 col-md-6">
						<div class="single-widget">
							<h3>Company </h3>
							<ul>
								<li><a href="#">About</a></li>
								<li><a href="#">Approach</a></li>
								<li><a href="#">Sustainability</a></li>
								<li><a href="#">News</a></li>
								<li><a href="#">Supply Chain</a></li>
								<li><a href="#">Packaging</a></li>
							</ul>
						</div>
					</div> -->
				</div>
			</div>
		</footer>
		<!-- End Footer Top Area -->

		<!-- Start Footer Bottom Area -->
		<footer class="footer-bottom-area fun-blue-bg">
			<div class="container">
				<div class="row align-items-center">
					<div class="col-lg-5">
						<div class="single-widget-bottom">							
							<ul>
								<li>
									<a href="terms.html">Terms & Conditions</a>
								</li>
								<li>
									<a href="privacy.html">Privacy &Policy</a>
								</li>
								<li>
									<a href="log-in.html">Employee login</a>
								</li>
							</ul>
						</div>
					</div>
					<div class="col-lg-4">
						<div class="single-widget-bottom">
							<p>Copyright <i class="bx bx-copyright"></i> 2020 <a href="index.html">Prevoz</a>. All rights reserved</p>
						</div>
					</div>
					<div class="col-lg-3">
						<div class="single-widget-bottom">
							<ul class="social-link">
								<li>
									<a href="#">
										<i class='bx bxl-twitter'></i>
									</a>
								</li>
								<li>
									<a href="#">
										<i class='bx bxl-facebook'></i>
									</a>
								</li>
								<li>
									<a href="#">
										<i class='bx bxl-instagram'></i>
									</a>
								</li>
								<li>
									<a href="#">
										<i class='bx bxl-linkedin'></i>
									</a>
								</li>
								<li>
									<a href="#">
										<i class='bx bxl-youtube'></i>
									</a>
								</li>
							</ul>
						</div>
					</div>
				</div>
			</div>
		</footer>
		<!-- End Footer Bottom Area -->

		<!-- Start Go Top Area -->
		<div class="go-top">
			<i class='bx bx-chevrons-up bx-fade-up'></i>
			<i class='bx bx-chevrons-up bx-fade-up'></i>
		</div>
		<!-- End Go Top Area --> 

        
        <!-- Jquery Slim JS -->
        <script src="<?php bloginfo('template_url');?>/assets/js/jquery.min.js"></script>
        <!-- Popper JS -->
        <script src="<?php bloginfo('template_url');?>/assets/js/popper.min.js"></script>
        <!-- Bootstrap JS -->
        <script src="<?php bloginfo('template_url');?>/assets/js/bootstrap.min.js"></script>
        <!-- Meanmenu JS -->
		<script src="<?php bloginfo('template_url');?>/assets/js/jquery.meanmenu.js"></script>
        <!-- Wow JS -->
        <script src="<?php bloginfo('template_url');?>/assets/js/wow.min.js"></script>
        <!-- Owl Carousel JS -->
		<script src="<?php bloginfo('template_url');?>/assets/js/owl.carousel.js"></script>
        <!-- Owl Magnific JS -->
		<script src="<?php bloginfo('template_url');?>/assets/js/jquery.magnific-popup.min.js"></script>
        <!-- Nice Select JS -->
		<script src="<?php bloginfo('template_url');?>/assets/js/jquery.nice-select.min.js"></script>
		<!-- Appear JS --> 
        <script src="<?php bloginfo('template_url');?>/assets/js/jquery.appear.js"></script>
		<!-- Odometer JS --> 
		<script src="<?php bloginfo('template_url');?>/assets/js/odometer.min.js"></script>
		<!-- Parallax JS --> 
        <script src="<?php bloginfo('template_url');?>/assets/js/parallax.min.js"></script>
		<!-- Form Ajaxchimp JS -->
		<script src="<?php bloginfo('template_url');?>/assets/js/jquery.ajaxchimp.min.js"></script>
		<!-- Form Validator JS -->
		<script src="<?php bloginfo('template_url');?>/assets/js/form-validator.min.js"></script>
		<!-- Contact JS -->
		<script src="<?php bloginfo('template_url');?>/assets/js/contact-form-script.js"></script>
		<!-- Map JS FILE -->
        <script src="<?php bloginfo('template_url');?>/assets/js/map.js"></script>
        <!-- Custom JS -->
		<script src="<?php bloginfo('template_url');?>/assets/js/custom.js"></script>
    </body>
</html>