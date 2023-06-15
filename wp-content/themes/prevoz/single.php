		<?php get_header(); 
		$args = array(
			'post_type'=>'post',
			'post_status'=>'publish',

		);
		$result  = new WP_Query($args);
		// while($result->have_posts()) : $result->the_posts(); 
		// 	endwhile;

		?>
		<?php //get_sidebar(); ?>

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
							<h2><?php the_title(); ?> </h2>
						</div>
						<div class="col-lg-6 col-sm-6">
							<ul>
								<li>
									<a href="<?php bloginfo('url'); ?> ">
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

		<!-- Start What We Offer Area -->
		 <section class="what-offer-area-two pt-100 pb-70">
			<div class="container">
				<div class="row">
					<div class="col-lg-3 col-sm-6 p-0">
						<div class="single-offer">
							<i class="icon flaticon-server"></i>
							<!-- <h3>Warehousing</h3> -->
							<?php the_content(); ?>
							<!-- <p>Lorem ipsum dolor sit amet csectetur adipiscing elit sed do eiusmod tem incididunt</p> -->
							<a class="circle-read-more" href="service-details.html">
								<i class="flaticon-right-1"></i>
							</a>
						</div>
					</div>
					<div class="col-lg-3 col-sm-6 p-0">
						<div class="single-offer">
							<i class="icon flaticon-air-freight"></i>
							<h3>Air Freight</h3>
							<p>Lorem ipsum dolor sit amet csectetur adipiscing elit sed do eiusmod tem incididunt</p>
							<a class="circle-read-more" href="service-details.html">
								<i class="flaticon-right-1"></i>
							</a>
						</div>
					</div>
					<div class="col-lg-3 col-sm-6 p-0">
						<div class="single-offer">
							<i class="icon flaticon-plastic-bottle"></i>
							<h3>Ocean Freight</h3>
							<p>Lorem ipsum dolor sit amet csectetur adipiscing elit sed do eiusmod tem incididunt</p>
							<a class="circle-read-more" href="service-details.html">
								<i class="flaticon-right-1"></i>
							</a>
						</div>
					</div>
					<div class="col-lg-3 col-sm-6 p-0">
						<div class="single-offer">
							<i class="icon flaticon-street"></i>
							<h3>Road  Freight</h3>
							<p>Lorem ipsum dolor sit amet csectetur adipiscing elit sed do eiusmod tem incididunt</p>
							<a class="circle-read-more" href="service-details.html">
								<i class="flaticon-right-1"></i>
							</a>
						</div>
					</div>
				</div>
			</div>
		</section> 
		<!-- End What We Offer Area -->

		<!-- start Service Area -->
		 <section class="service-area service-area-two pb-100">
			<div class="container">
				<div class="section-title">
					<span>We Offer Services </span>
					<h2>Prime logistics services for the world’s logistics companies.</h2>
				</div>
				<div class="row">
					<div class="col-lg-4 col-sm-6">
						<div class="single-service">
							<div class="service-content-wrap">
								<i class="icon flaticon-home"></i>
								<h3>Residential Moves</h3>
								<p>Lorem ipsum dolor, sit amet consectetur adipisicing elit. Harum delectus illo rerum quidem! Nam maiores vel impedit quisquam.</p>
							</div>
							<div class="service-heading">
								<a class="circle-read-more" href="service-details.html">
									<h3>Residential Moves</h3>
									<i class="flaticon-right-1"></i>
								</a>
							</div>
						</div>
					</div>
					<div class="col-lg-4 col-sm-6">
						<div class="single-service">
							<div class="service-content-wrap">
								<i class="icon flaticon-package"></i>
								<h3>Corporate Relocation</h3>
								<p>Lorem ipsum dolor, sit amet consectetur adipisicing elit. Harum delectus illo rerum quidem! Nam maiores vel impedit quisquam.</p>
							</div>
							<div class="service-heading">
								<a class="circle-read-more" href="service-details.html">
									<h3>Corporate Relocation</h3>
									<i class="flaticon-right-1"></i>
								</a>
							</div>
						</div>
					</div>
					<div class="col-lg-4 col-sm-6 offset-sm-3 offset-lg-0">
						<div class="single-service">
							<div class="service-content-wrap">
								<i class="icon flaticon-server"></i>
								<h3>Warehouse & Storage</h3>
								<p>Lorem ipsum dolor, sit amet consectetur adipisicing elit. Harum delectus illo rerum quidem! Nam maiores vel impedit quisquam.</p>
							</div>
							<div class="service-heading">
								<a class="circle-read-more" href="service-details.html">
									<h3>Warehouse & Storage</h3>
									<i class="flaticon-right-1"></i>
								</a>
							</div>
						</div>
					</div>
					<div class="col-12">
						<div class="service-all text-center">
							<p>You can also find our <a href="service-details.html">Schedule An Appointment</a>  to contact get</p>    
						</div>                                           
					</div>
				</div>
			</div>
		</section> 
		<!-- End Service Area -->

		<!-- End Began Area -->
		 <section class="began-area pb-70">
			<div class="container">
				<div class="section-title">
					<span>Began With Roles</span>
					<h2>Please obey the roles to keep safe</h2>
					<p>Quis ipsum suspendice consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Quis ipsum.</p>
				</div>
				<div class="began-top-wrap">
					<div class="row">
						<div class="col-lg-8">
							<div class="began-wrap">
								<h2>Keep safe your products with prevoz</h2>
								<div class="row">
									<div class="col-lg-4 col-sm-6 p-0">
										<div class="single-began">
											<i class="flaticon-fast-delivery"></i>
											<h3>Fast & Efficient Delivery</h3>
										</div>
									</div>
									<div class="col-lg-4 col-sm-6 p-0">
										<div class="single-began">
											<i class="flaticon-lock"></i>
											<h3>Security For Cargo Tools</h3>
										</div>
									</div>
									<div class="col-lg-4 col-sm-6 p-0">
										<div class="single-began">
											<i class="flaticon-stopwatch"></i>
											<h3>Real-Time Tracking</h3>
										</div>
									</div>
									<div class="col-lg-4 col-sm-6 p-0">
										<div class="single-began">
											<i class="flaticon-payment-method"></i>
											<h3>Easy Payment Methods</h3>
										</div>
									</div>
									<div class="col-lg-4 col-sm-6 p-0">
										<div class="single-began">
											<i class="flaticon-warehouse"></i>
											<h3>24/7 Hours Support</h3>
										</div>
									</div>
									<div class="col-lg-4 col-sm-6 p-0">
										<div class="single-began">
											<i class="flaticon-distribution"></i>
											<h3>Warehouse Storage</h3>
										</div>
									</div>
								</div>
							</div>
						</div>
					</div>
				</div>
			</div>
		</section>
		<!-- End Began Area -->

		<!-- Start Why Choose Us Area -->
		<section class="choose-us-area">
			<div class="container">
				<div class="section-title">
					<span>Why Choose Us</span>
					<h2>We are best among them</h2>
				</div>
				<div class="row">
					<div class="col-lg-8 pr-0">
						<div class="choose-tab-wrap">
							<h2>Why our Company is best</h2>
							<div class="tab quote-list-tab choose-tab">
								<ul class="tabs">
									<li>
										<a href="#">
											Our Mission
										</a>
									</li>
									<li>
										<a href="#">
											Our Vision
										</a>
									</li>
									<li>
										<a href="#">
											Our Goal
										</a>
									</li>
								</ul>
								<div class="tab_content">
									<div class="tabs_item">
										<p>Lorem ipsum dolor, sit amet consectetur adipisicing elit. Placeat atque quibusdam fuga natus non necessitatibus eveniet maiores nostrum esse ut voluptates sint dolores, voluptatum consequatur ad est enim perferendis reprehenderit.</p>

										<p>Lorem ipsum dolor sit, amet consectetur adipisicing elit. Perspiciatis, soluta, aspernatur dolorum sequi quisquam ullam in pariatur nihil dolorem cumque excepturi totam. Qui excepturi quasi cumque placeat fuga. Ea, eius?</p>
										<a class="default-btn" href="about-us.html">
											Learn About
										</a>
									</div>

									<div class="tabs_item">
										<p>Lorem ipsum dolor sit, amet consectetur adipisicing elit. Doloremque possimus cupiditate nobis! Adipisci, cupiditate. Pariatur iste qui quasi quae, laboriosam dolore sequi quia recusandae, modi est aliquid suscipit facere. Suscipit.</p>

										<p>Lorem ipsum dolor sit, amet consectetur adipisicing elit. Doloremque possimus cupiditate nobis! Adipisci, cupiditate. Pariatur iste qui quasi quae, laboriosam dolore sequi quia recusandae, modi est aliquid suscipit facere. Suscipit.</p>
										<a class="default-btn" href="about-us.html">
											Learn About
										</a>
									</div>

									<div class="tabs_item">
										<p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Exercitationem asperiores sapiente, soluta eum, aliquid ullam neque tenetur perferendis suscipit praesentium odio voluptas reiciendis! Et, iusto beatae cum similique impedit.</p>

										<p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Exercitationem asperiores sapiente, soluta eum, aliquid ullam neque tenetur perferendis suscipit praesentium odio voluptas reiciendis! Et, iusto beatae cum similique impedit.</p>
										<a class="default-btn" href="about-us.html">
											Learn About
										</a>
									</div>
								</div>
							</div>
						</div>
					</div>
					<div class="col-lg-4 pl-0">
						<div class="choose-img choose-img-two">
							<?php $url = wp_get_attachment_url(get_post_thumbnail_id($post->ID),'thumbnail') ?>
							<img src="<?php echo $url; ?>" alt="">
						</div>
					</div>
				</div>
			</div>
		</section>
		<!-- End Why Choose Us Area -->

		<!-- Start Fun Facts Area -->
		<!-- <section class="fun-facts-area ptb-100">
			<div class="container-fluid p-0">
				<div class="row">
					<div class="col-lg-6">
						<div class="facts-img"></div>
					</div>
					<div class="col-lg-6">
						<div class="skill-bar-wrapper"> 
							<div class="fun-facts-content">
								<span>Fun Facts</span>
								<h2>Providing A Range Of High Services & Solutions Worldwide</h2>
							</div>
							<div class="skill-bar" data-percentage="95%">
								<h4 class="progress-title-holder">
									<span class="progress-title">Warehousing</span>
									<span class="progress-number-wrapper">
										<span class="progress-number-mark">
											<span class="percent"></span>
											<span class="down-arrow"></span>
										</span>
									</span>
								</h4>
								<div class="progress-content-outter">
									<div class="progress-content"></div>
								</div>
							</div>
							<div class="skill-bar" data-percentage="90%">
								<h4 class="progress-title-holder clearfix">
									<span class="progress-title">Supply Chain</span>
									<span class="progress-number-wrapper">
										<span class="progress-number-mark">
											<span class="percent"></span>
											<span class="down-arrow"></span>
										</span>
									</span>
								</h4>
								<div class="progress-content-outter">
									<div class="progress-content"></div>
								</div>
							</div>
							<div class="skill-bar" data-percentage="85%">
								<h4 class="progress-title-holder clearfix">
									<span class="progress-title">Ocean Freight</span>
									<span class="progress-number-wrapper">
										<span class="progress-number-mark">
											<span class="percent"></span>
											<span class="down-arrow"></span>
										</span>
									</span>
								</h4>
								<div class="progress-content-outter">
									<div class="progress-content"></div>
								</div>
							</div> 
							<div class="skill-bar" data-percentage="80%">
								<h4 class="progress-title-holder clearfix">
									<span class="progress-title">Road Freight</span>
									<span class="progress-number-wrapper">
										<span class="progress-number-mark">
											<span class="percent"></span>
											<span class="down-arrow"></span>
										</span>
									</span>
								</h4>
								<div class="progress-content-outter">
									<div class="progress-content"></div>
								</div>
							</div> 
							<div class="skill-bar mb-0" data-percentage="75%">
								<h4 class="progress-title-holder clearfix">
									<span class="progress-title">Air Freight</span>
									<span class="progress-number-wrapper">
										<span class="progress-number-mark">
											<span class="percent"></span>
											<span class="down-arrow"></span>
										</span>
									</span>
								</h4>
								<div class="progress-content-outter">
									<div class="progress-content"></div>
								</div>
							</div> 
						</div>
					</div>
				</div>
			</div>
			<div class="lines">
				<div class="line-two"></div>
				<div class="line-two"></div>
				<div class="line-two"></div>
			</div>
		</section> -->
		<!-- End Fun Facts Area -->

		<!-- Start Subscribe Area -->
		<!-- <div class="subscribe-area ptb-100">
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
		</div> -->
		<!-- End Subscribe Area -->
		<?php 
	
		 get_footer(); ?>