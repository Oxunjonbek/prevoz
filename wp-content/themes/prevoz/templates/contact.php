<?php /*
Template Name:Contact template */ ?>
 <?php get_header(); ?>


	<?php get_sidebar(); ?>

		<!-- Start Search Box Modal -->
		<div class="search-wrap">
			<div class="search">
				<button type="button" class="close">×</button>
				<form>
					<input type="search" value="" class="form-control" placeholder="Type Here..." />
					<button type="submit" class="default-btn">
						Search
					</button>
				</form>
			</div>
		</div>
        <!-- End Search Box Modal -->

		<!-- Start Page Title Area -->
		<div class="page-title-area item-bg-1 jarallax"  data-jarallax='{"speed": 0.3}'>
			<div class="container">
				<div class="page-title-content">
					<div class="row align-items-center">
						<div class="col-lg-6 col-sm-6">
							<h2><?php the_title(); ?></h2>
						</div>
						<div class="col-lg-6 col-sm-6">
							<ul>
								<li>
									<a href="index.html">
										Home 
									</a>
								</li>
								<li><?php the_title(); ?> </li>
							</ul>
						</div>
					</div>
				</div>
			</div>
		</div>
		<!-- End Page Title Area -->

		<!-- Start Address Area -->
		<section class="address-area pt-100 pb-70">
			<div class="container">
				<div class="row">
					<div class="col-lg-4 col-md-6">
						<div class="single-address">
							<i class='bx bx-phone-call'></i>
							<h3>Contact</h3>
							<span>Talk to support</span>
							<a href="tel:+6494461709">+800 603 6035</a>
						</div>
					</div>
					<div class="col-lg-4 col-md-6">
						<div class="single-address">
							<i class='bx bx-location-plus'></i>
							<h3>Location</h3>
							<span>Find where we are</span>
							<p>3261 Anmoore Road, NY 11230</p>
						</div>
					</div>
					<div class="col-lg-4 col-md-6 offset-md-3 offset-lg-0">
						<div class="single-address">
							<i class='bx bx-time'></i>
							<h3>Meet Us</h3>
							<span>Available Hours to meet</span>
							<p>9:00 AM – 8:00 PM</p>
						</div>
					</div>
				</div>
			</div>
		</section>
		<!-- End Address Area -->

		<!-- Start Map Area -->
		<div class="contact-map-area">
			<iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d11698.676925086356!2d28.940268188264092!3d41.01719194736328!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x14cc16f5a6399dff%3A0x8ef18e24e78b154d!2sFatih%20Belediyesi%20Fatih%20Merkez%20K%C3%BCt%C3%BCphanesi!5e0!3m2!1str!2str!4v1686323730043!5m2!1str!2str" width="100%" height="450" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>
		</div>
		<!-- End Map Area -->

		<!-- Start Contact Area -->
		<section class="contact-area ptb-100">
			<div class="container">
				<div class="row">
					<div class="col-12">
						<div class="contact-wrap contact-pages mb-0">
							<div class="contact-form">
								<div class="section-title">
									<span class="pumpkin-color">information</span>
									<h2>Drop us a message for any query</h2>
								</div>
								<form id="contactForm">
									<div class="row">
										<div class="col-lg-6 col-sm-6">
											<div class="form-group">
												<input type="text" name="name" id="name" class="form-control" required data-error="Please enter your name" placeholder="Your Name">
												<div class="help-block with-errors"></div>
											</div>
										</div>
			
										<div class="col-lg-6 col-sm-6">
											<div class="form-group">
												<input type="email" name="email" id="email" class="form-control" required data-error="Please enter your email" placeholder="Your Email">
												<div class="help-block with-errors"></div>
											</div>
										</div>
			
										<div class="col-lg-6 col-sm-6">
											<div class="form-group">
												<input type="text" name="phone_number" id="phone_number" required data-error="Please enter your number" class="form-control" placeholder="Your Phone">
												<div class="help-block with-errors"></div>
											</div>
										</div>
			
										<div class="col-lg-6 col-sm-6">
											<div class="form-group">
												<input type="text" name="msg_subject" id="msg_subject" class="form-control" required data-error="Please enter your subject" placeholder="Your Subject">
												<div class="help-block with-errors"></div>
											</div>
										</div>
			
										<div class="col-lg-12 col-md-12">
											<div class="form-group">
												<textarea name="message" class="form-control" id="message" cols="30" rows="5" required data-error="Write your message" placeholder="Your Message"></textarea>
												<div class="help-block with-errors"></div>
											</div>
										</div>
			
										<div class="col-lg-12 col-md-12">
											<button type="submit" class="default-btn btn-two">
												Send Message
											</button>
											<div id="msgSubmit" class="h3 text-center hidden"></div>
											<div class="clearfix"></div>
										</div>
									</div>
								</form>
							</div>
						</div>
					</div>
				</div>
			</div>
		</section>
		<!-- End Contact Area -->

		<!-- Start Subscribe Area -->
		<div class="subscribe-area ptb-100">
			<div class="container">
				<div class="row align-items-center">
					<div class="col-lg-6 col-md-4">
						<div class="tracking-logo">
							<a href="index.html">
								<img src=" <?php bloginfo('template_url') ?>/assets/img/tracking-logo.png" alt="Image">
							</a>
						</div>
					</div>
					<div class="col-lg-6 col-md-8">
						<div class="tracking-body">
							<form class="tracking-wrap newsletter-form" data-toggle="validator">
								<input type="email" class="input-tracking" placeholder="Your Email" name="EMAIL" required autocomplete="off">

								<button class="default-btn active" type="submit">
									Subscribe
								</button>

								<div id="validator-newsletter" class="form-result"></div>
							</form>
						</div>
					</div>
				</div>
			</div>
		</div>
		<!-- End Subscribe Area -->


<?php get_footer(); ?>