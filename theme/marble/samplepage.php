<?php
//  Display the student zone page.

	require_once('../../config.php'); 
	$PAGE->set_context(context_system::instance(0));
	$PAGE->set_url('/theme/marble/samplepage.php'); 
	
	$PAGE->set_title('Sample');
	$PAGE->set_heading('Sample Pages');
	
	$PAGE->set_pagelayout('columns2');        

	echo $OUTPUT->header();	
	?>	
    
	   
 
	<!-- content 
			================================================== -->
		<div id="content">
			
			<!-- page-banner 
				================================================== -->
	

			<!-- shortcodes-section
				================================================== -->
			<div class="section-content shortcodes-section">
				<div class="container">
					<div class="shortcodes-elem">
						<h1>Boxes left</h1>
						<div class="row">
							<div class="span4">
								<ul class="feature-list2">
									<li>
										<span><i class="fa fa-leaf"></i></span>
										<div class="list-cont">
											<h3>Email Marketing</h3>
											<p>Donec nec justo eget felis facilisis fermentum. Aliquam porttitor mauris </p>
										</div>
									</li>
									<li>
										<span><i class="fa fa-bar-chart-o"></i></span>
										<div class="list-cont">
											<h3>Business</h3>
											<p>Donec nec justo eget felis facilisis fermentum. Aliquam porttitor mauris </p>
										</div>
									</li>
								</ul>
							</div>
							<div class="span4">
								<ul class="feature-list2">
									<li>
										<span><i class="fa fa-coffee"></i></span>
										<div class="list-cont">
											<h3>Premium Design</h3>
											<p>Donec nec justo eget felis facilisis fermentum. Aliquam porttitor mauris </p>
										</div>
									</li>
									<li>
										<span><i class="fa fa-heart"></i></span>
										<div class="list-cont">
											<h3>Made with Love</h3>
											<p>Donec nec justo eget felis facilisis fermentum. Aliquam porttitor mauris </p>
										</div>
									</li>
								</ul>
							</div>
							<div class="span4">
								<ul class="feature-list2">
									<li>
										<span><i class="fa fa-cog"></i></span>
										<div class="list-cont">
											<h3>Clean Design</h3>
											<p>Donec nec justo eget felis facilisis fermentum. Aliquam porttitor mauris </p>
										</div>
									</li>
									<li>
										<span><i class="fa fa-trophy"></i></span>
										<div class="list-cont">
											<h3>Psd Theme</h3>
											<p>Donec nec justo eget felis facilisis fermentum. Aliquam porttitor mauris </p>
										</div>
									</li>
								</ul>
							</div>
						</div>
					</div>

					<div class="shortcodes-elem">
						<h1>Black services icon</h1>
						<div class="row">
							<div class="span4">
								<ul class="feature-list3">
									<li>
										<span><i class="fa fa-heart"></i></span>
										<div class="list-cont">
											<h3>Made with Love</h3>
											<p>Donec odio. Quisque volutpat mattis eros. Nullam malesuada erat ut turpis. </p>
										</div>
									</li>
									<li>
										<span><i class="fa fa-leaf"></i></span>
										<div class="list-cont">
											<h3>Email Marketing</h3>
											<p>Donec odio. Quisque volutpat mattis eros. Nullam malesuada erat ut turpis. </p>
										</div>
									</li>
								</ul>
							</div>
							<div class="span4">
								
								<ul class="feature-list3">
									<li>
										<span><i class="fa fa-bar-chart-o"></i></span>
										<div class="list-cont">
											<h3>Business</h3>
											<p>Donec odio. Quisque volutpat mattis eros. Nullam malesuada erat ut turpis. </p>
										</div>
									</li>
									<li>
										<span><i class="fa fa-coffee"></i></span>
										<div class="list-cont">
											<h3>Premium Design</h3>
											<p>Donec odio. Quisque volutpat mattis eros. Nullam malesuada erat ut turpis. </p>
										</div>
									</li>
								</ul>
							</div>
							<div class="span4">
								
								<ul class="feature-list3">
									<li>
										<span><i class="fa fa-heart"></i></span>
										<div class="list-cont">
											<h3>Made with Love</h3>
											<p>Donec odio. Quisque volutpat mattis eros. Nullam malesuada erat ut turpis. </p>
										</div>
									</li>
									<li>
										<span><i class="fa fa-coffee"></i></span>
										<div class="list-cont">
											<h3>Premium Design</h3>
											<p>Donec odio. Quisque volutpat mattis eros. Nullam malesuada erat ut turpis. </p>
										</div>
									</li>
								</ul>
							</div>
						</div>
					</div>

					<div class="shortcodes-elem">
						<h1>White services icon</h1>
						<div class="back-col">
							<div class="row-fluid">
								<div class="span4">
									<ul class="feature-list2 white">
										<li>
											<span><i class="fa fa-heart"></i></span>
											<div class="list-cont">
												<h3>Made with Love</h3>
												<p>Donec odio. Quisque volutpat mattis eros. Nullam malesuada erat ut turpis. </p>
											</div>
										</li>
										<li>
											<span><i class="fa fa-leaf"></i></span>
											<div class="list-cont">
												<h3>Email Marketing</h3>
												<p>Donec odio. Quisque volutpat mattis eros. Nullam malesuada erat ut turpis. </p>
											</div>
										</li>
									</ul>
								</div>
								<div class="span4">
									
									<ul class="feature-list2 white">
										<li>
											<span><i class="fa fa-bar-chart-o"></i></span>
											<div class="list-cont">
												<h3>Business</h3>
												<p>Donec odio. Quisque volutpat mattis eros. Nullam malesuada erat ut turpis. </p>
											</div>
										</li>
										<li>
											<span><i class="fa fa-coffee"></i></span>
											<div class="list-cont">
												<h3>Premium Design</h3>
												<p>Donec odio. Quisque volutpat mattis eros. Nullam malesuada erat ut turpis. </p>
											</div>
										</li>
									</ul>
								</div>
								<div class="span4">
									
									<ul class="feature-list2 white">
										<li>
											<span><i class="fa fa-heart"></i></span>
											<div class="list-cont">
												<h3>Made with Love</h3>
												<p>Donec odio. Quisque volutpat mattis eros. Nullam malesuada erat ut turpis. </p>
											</div>
										</li>
										<li>
											<span><i class="fa fa-coffee"></i></span>
											<div class="list-cont">
												<h3>Premium Design</h3>
												<p>Donec odio. Quisque volutpat mattis eros. Nullam malesuada erat ut turpis. </p>
											</div>
										</li>
									</ul>
								</div>
							</div>							
						</div>
					</div>

					
					
					<div class="shortcodes-elem">
						<h1>Our pricing table</h1>
						<div class="pricing-box">
							<div class="pricing-item">
								<ul class="pricing-table basic">
									<li class="title">
										<h1>Basic</h1>
										<p>$ <span>99</span> month</p>
									</li>
									<li>
										<p>Free Setup</p>
									</li>
									<li>
										<p>10 GB Storage</p>
									</li>
									<li>
										<p>Unlmited Users</p>
									</li>
									<li>
										<p>20 GB Bandwith</p>
									</li>
									<li>
										<a href="#" class="button-third">Choose plan</a>
									</li>
								</ul>							
							</div>
							<div class="pricing-item">
								<ul class="pricing-table basic">
									<li class="title">
										<h1>Standard</h1>
										<p>$ <span>199</span> month</p>
									</li>
									<li>
										<p>Free Setup</p>
									</li>
									<li>
										<p>10 GB Storage</p>
									</li>
									<li>
										<p>Unlmited Users</p>
									</li>
									<li>
										<p>20 GB Bandwith</p>
									</li>
									<li>
										<a href="#" class="button-third">Choose plan</a>
									</li>
								</ul>							
							</div>
							<div class="pricing-item">
								<ul class="pricing-table basic">
									<li class="title">
										<h1>Advanced</h1>
										<p>$ <span>299</span> month</p>
									</li>
									<li>
										<p>Free Setup</p>
									</li>
									<li>
										<p>10 GB Storage</p>
									</li>
									<li>
										<p>Unlmited Users</p>
									</li>
									<li>
										<p>20 GB Bandwith</p>
									</li>
									<li>
										<a href="#" class="button-third">Choose plan</a>
									</li>
								</ul>							
							</div>
							<div class="pricing-item">
								<ul class="pricing-table basic">
									<li class="title">
										<h1>Premium</h1>
										<p>$ <span>399</span> month</p>
									</li>
									<li>
										<p>Free Setup</p>
									</li>
									<li>
										<p>10 GB Storage</p>
									</li>
									<li>
										<p>Unlmited Users</p>
									</li>
									<li>
										<p>20 GB Bandwith</p>
									</li>
									<li>
										<a href="#" class="button-third">Choose plan</a>
									</li>
								</ul>							
							</div>
						</div>
					</div>

					
					<div class="shortcodes-elem">
						<h1>Testimonial style 1</h1>
						<div class="back-col">
							<div class="row-fluid">
								<div class="span4">
									<div class="testimonial-post">
										<img src="http://placehold.it/100x100" alt="">
										<h2> Jone Doe - Co-Founder </h2>
										<p> “ Lorem ipsum dolor sit amet, consectetuer adipiscing elit. Donec odio. Quisque volutpat mattis eros. ”</p>
									</div>
								</div>
								<div class="span4">
									<div class="testimonial-post">
										<img src="http://placehold.it/100x100" alt="">
										<h2> Jone Doe - Co-Founder </h2>
										<p> “ Lorem ipsum dolor sit amet, consectetuer adipiscing elit. Donec odio. Quisque volutpat mattis eros. ”</p>
									</div>
								</div>
								<div class="span4">
									<div class="testimonial-post">
										<img src="http://placehold.it/100x100" alt="">
										<h2> Jone Doe - Co-Founder </h2>
										<p> “ Lorem ipsum dolor sit amet, consectetuer adipiscing elit. Donec odio. Quisque volutpat mattis eros. ”</p>
									</div>
								</div>
							</div>							
						</div>
					</div>

					<div class="shortcodes-elem">
						<h1>Testimonial style 2</h1>
						<div class="testimonials-section transparent-back">
							<div class="row">
								<div class="span4">
									<div class="testimonial-post">
										<img src="http://placehold.it/100x100" alt="">
										<h2> Jone Doe - Co-Founder </h2>
										<p> “ Lorem ipsum dolor sit amet, consectetuer adipiscing elit. Donec odio. Quisque volutpat mattis eros. ”</p>
									</div>
								</div>
								<div class="span4">
									<div class="testimonial-post">
										<img src="http://placehold.it/100x100" alt="">
										<h2> Jone Doe - Co-Founder </h2>
										<p> “ Lorem ipsum dolor sit amet, consectetuer adipiscing elit. Donec odio. Quisque volutpat mattis eros. ”</p>
									</div>
								</div>
								<div class="span4">
									<div class="testimonial-post">
										<img src="http://placehold.it/100x100" alt="">
										<h2> Jone Doe - Co-Founder </h2>
										<p> “ Lorem ipsum dolor sit amet, consectetuer adipiscing elit. Donec odio. Quisque volutpat mattis eros. ”</p>
									</div>
								</div>
							</div>							
						</div>
					</div>

					<div class="shortcodes-elem">
						<h1>Testimonial style 3</h1>
						<div class="back-col">
							<div class="testimonial-post">
								<img src="http://placehold.it/100x100" alt="">
								<h2> Jone Doe - Co-Founder </h2>
								<p>  “ Donec nec justo eget felis facilisis fermentum. Aliquam porttitor mauris sit amet orci. Aenean dignissim pellentesque felis. Donec odio. Quisque volutpat mattis eros. Nullam malesuada erat ut turpis. Suspendisse urna nibh, viverra non ” </p>
							</div>						
						</div>
					</div>

					<div class="shortcodes-elem">
						<h1>Testimonial style 4</h1>
						<div class="testimonials-section transparent-back">
							<div class="testimonial-post">
								<img src="http://placehold.it/100x100" alt="">
								<h2> Jone Doe - Co-Founder </h2>
								<p>  “ Donec nec justo eget felis facilisis fermentum. Aliquam porttitor mauris sit amet orci. Aenean dignissim pellentesque felis. Donec odio. Quisque volutpat mattis eros. Nullam malesuada erat ut turpis. Suspendisse urna nibh, viverra non ” </p>
							</div>						
						</div>
					</div>

					<div class="shortcodes-elem">
						<div class="row">
							<div class="span6">
								<div class="buttons-area">
									<h1>Buttons</h1>
									<div class="button-area">
										<a class="button-large" href="#">large button</a>
									</div>
									<div class="button-area">
										<a class="button-two" href="#"><span>Medium button</span><i class="fa fa-angle-right"></i></a>
									</div>
									<div class="button-area">
										<a class="button-third" href="#">Small button</a>
									</div>
									<div class="button-area">
										<a class="small-btn" href="#">Small</a>
									</div>
									<div class="button-area">
										<a href="#" class="button-third"><i class="fa fa-angle-left"></i> Prev</a>
										<a href="#" class="button-third">Next <i class="fa fa-angle-right"></i></a>
									</div>
									<div class="button-area">
										<a class="button-third" href="#"><i class="fa fa-angle-left"></i></a>
										<a class="button-third" href="#"><i class="fa fa-angle-right"></i></a>
									</div>
									<div class="button-area">
										<a class="button-third load-more" href="#"><i class="fa fa-arrow-circle-o-down"></i>Button</a>
									</div>
									<div class="button-area">
										<a class="button-fourth" href="#"><i class="fa fa-arrow-circle-o-up"></i></a>
									</div>
								</div>
							</div>
							
						</div>
					</div>

				</div>
			</div>

		</div>
		<!-- End content -->

<?php		
	echo $OUTPUT->footer();
?>
<script>
jQuery(document).ready(function($) {

$('body').addClass('zoomin');

});
</script>	