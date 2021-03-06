@extends('main')
@section('pagecontent')
<div class="page-wrapper">

	<!-- Preloader -->
	<div class="preloader"></div>

	<!-- Main Header / Header Style One-->
	@include('partials.elements.nav')
	<!--End Main Header -->


	<!--Page Title-->
	<section class="page-title" style="background-image:url(images/background/page-title-1.jpg);">
		<div class="auto-container">
			<h1>Contact Us</h1>
			<div class="bread-crumb-outer">
				<ul class="bread-crumb clearfix">
					<li><a href="/index.php">Home</a></li>
					<li class="active">Contact Us</li>
				</ul>
			</div>
		</div>
	</section>

	<!--Map Section-->
	<section class="map-section">
		<div class="map-outer">

			<!--Map Canvas-->
			<div class="map-canvas"	data-zoom="14"
			data-lat="-37.817085"
			data-lng="144.955631"
			data-type="roadmap"
			data-hue="#ffc400"
			data-title="Envato"
			data-content="Melbourne VIC 3000, Australia<br><a href='mailto:info@youremail.com'>info@youremail.com</a>"
			style="height:480px;">
		</div>

	</div>
</section>


<!--Contact Section-->
<section class="contact-section">
	<div class="auto-container">

		<div class="contact-info">
			<div class="sec-title">
				<h2>Contact Information</h2>
				<div class="desc-text">The weather started getting rough the tiny ship was tossed if not for the courage</div>
			</div>

			<div class="row clearfix">
				<!--Info Column-->
				<div class="info-column col-md-4 col-sm-6 col-xs-12">
					<h3>Head Office</h3>
					<ul>
						<li><span class="icon flaticon-construction"></span> 123A, Mainbridge, Lotopride, United States.</li>
						<li><span class="icon flaticon-technology-5"></span> +1800 - 2374 - 190  /  +1800 - 2374 - 190</li>
						<li><span class="icon flaticon-envelope"></span> valencia@support.com</li>
						<li><span class="icon flaticon-earth-1"></span> www.valencia.com</li>
					</ul>
				</div>

				<!--Info Column-->
				<div class="info-column col-md-4 col-sm-6 col-xs-12">
					<h3>Los Angeles Office</h3>
					<ul>
						<li><span class="icon flaticon-construction"></span> 123A, Mainbridge, Lotopride, United States.</li>
						<li><span class="icon flaticon-technology-5"></span> +1800 - 2374 - 190  /  +1800 - 2374 - 190</li>
						<li><span class="icon flaticon-envelope"></span> valencia@support.com</li>
						<li><span class="icon flaticon-earth-1"></span> www.valencia.com</li>
					</ul>
				</div>

				<!--Info Column-->
				<div class="info-column col-md-4 col-sm-6 col-xs-12">
					<h3>Melbourne Office</h3>
					<ul>
						<li><span class="icon flaticon-construction"></span> 123A, Mainbridge, Lotopride, United States.</li>
						<li><span class="icon flaticon-technology-5"></span> +1800 - 2374 - 190  /  +1800 - 2374 - 190</li>
						<li><span class="icon flaticon-envelope"></span> valencia@support.com</li>
						<li><span class="icon flaticon-earth-1"></span> www.valencia.com</li>
					</ul>
				</div>

			</div>
		</div>

		<!--Form Container -->
		<div class="form-container">
			<div class="sec-title"><h2>Fill the Form</h2></div>

			<!--Contact Form-->
			<div class="contact-form default-form">
				<form method="post" action="sendemail.php" id="contact-form">
					<div class="row clearfix">

						<div class="form-group col-md-6 col-sm-6 col-xs-12">
							<div class="field-label">First Name <span class="req">*</span></div>
							<input type="text" name="firstname" value="" placeholder="Your First Name">
						</div>

						<div class="form-group col-md-6 col-sm-6 col-xs-12">
							<div class="field-label">Last Name <span class="req">*</span></div>
							<input type="text" name="lastname" value="" placeholder="Your Last Name">
						</div>

						<div class="form-group col-md-6 col-sm-6 col-xs-12">
							<div class="field-label">Email Address <span class="req">*</span></div>
							<input type="email" name="email" value="">
						</div>

						<div class="form-group col-md-6 col-sm-6 col-xs-12">
							<div class="field-label">Phone <span class="req">*</span></div>
							<input type="text" name="phone" value="">
						</div>

						<div class="form-group col-md-12 col-sm-12 col-xs-12">
							<div class="field-label">Message <span class="req">*</span></div>
							<textarea name="message" placeholder="Write Your Message"></textarea>
						</div>
						<div class="form-group col-md-12 col-sm-12 col-xs-12">
							<button type="submit" class="theme-btn btn-style-four">SUBMIT </button>
						</div>
					</div>
				</form>
			</div>
		</div>

	</div>
</section>


<!--Call To Action Footer-->
<div class="call-to-action-footer">
	<div class="auto-container">
		<div class="row clearfix">
			<!--Left Column-->
			<div class="left-column col-lg-5 col-md-12 col-sm-12 col-xs-12">
				<div class="inner-box"><div class="icon-box"><span class="fa fa-phone"></span></div> Book by Phone:  <strong>+1-800-91234-890</strong></div>
			</div>
			<!--Right Column-->
			<div class="right-column col-lg-7 col-md-12 col-sm-12 col-xs-12">
				<div class="inner-box">
					<div class="content-box">
						<figure class="logo-box"><a href="index.php"><img src="images/logo-5.png" alt=""></a></figure>
						<div class="text">The weather started getting rough the tiny ship was lost the min ting anti maxi security road and back stock a against ade lost the minnow ther started getting rough the tiny ship minnow.</div>
					</div>
				</div>
			</div>
		</div>
	</div>
</div>

<!--Main Footer-->
<footer class="main-footer">

	<!--Widgets Section-->
	<div class="widgets-section">
		<div class="auto-container">
			<div class="row clearfix">
				<!--Big Column-->
				<div class="big-column col-md-6 col-sm-12 col-xs-12">
					<div class="row clearfix">

						<!--Footer Column-->
						<div class="footer-column col-md-7 col-sm-6 col-xs-12">
							<div class="footer-widget work-hours-widget">
								<h2>Opening Hours</h2>
								<div class="widget-content">
									<div class="text">The weather started getting rough the tiny ship was lost the min ting a maximum.</div>
									<ul class="hours-info">
										<li class="clearfix"><div class="pull-left">Monday - Friday</div><div class="pull-right">9.00am to 8.00pm</div></li>
										<li class="clearfix"><div class="pull-left">Saturday</div><div class="pull-right">10.00am to 7.30pm</div></li>
										<li class="clearfix"><div class="pull-left">Sunday</div><div class="pull-right">11.00am to 6.00pm</div></li>
									</ul>
								</div>
							</div>
						</div>

						<!--Footer Column-->
						<div class="footer-column col-md-5 col-sm-6 col-xs-12">
							<div class="footer-widget links-widget">
								<h2>Explore</h2>
								<div class="widget-content">
									<ul class="list">
										<li><a href="#">About Us</a></li>
										<li><a href="#">Service Rates</a></li>
										<li><a href="#">Our Cars</a></li>
										<li><a href="#">Portfolio</a></li>
										<li><a href="#">Contact Us</a></li>
									</ul>
								</div>
							</div>
						</div>

					</div>
				</div>

				<!--Big Column-->
				<div class="big-column col-md-6 col-sm-12 col-xs-12">
					<div class="row clearfix">

						<!--Footer Column-->
						<div class="footer-column col-md-6 col-sm-6 col-xs-12">
							<div class="footer-widget gallery-widget">
								<h2>Flicker Photos</h2>
								<div class="widget-content">
									<div class="images-outer clearfix">
										<!--Image Box-->
										<figure class="image-box"><a href="images/background/image-2.jpg" class="lightbox-image" title="Image Title Here" data-fancybox-group="footer-gallery"><img src="images/gallery/footer-thumb-1.jpg" alt=""></a></figure>
										<!--Image Box-->
										<figure class="image-box"><a href="images/background/image-2.jpg" class="lightbox-image" title="Image Title Here" data-fancybox-group="footer-gallery"><img src="images/gallery/footer-thumb-2.jpg" alt=""></a></figure>
										<!--Image Box-->
										<figure class="image-box"><a href="images/background/image-2.jpg" class="lightbox-image" title="Image Title Here" data-fancybox-group="footer-gallery"><img src="images/gallery/footer-thumb-3.jpg" alt=""></a></figure>
										<!--Image Box-->
										<figure class="image-box"><a href="images/background/image-2.jpg" class="lightbox-image" title="Image Title Here" data-fancybox-group="footer-gallery"><img src="images/gallery/footer-thumb-4.jpg" alt=""></a></figure>
										<!--Image Box-->
										<figure class="image-box"><a href="images/background/image-2.jpg" class="lightbox-image" title="Image Title Here" data-fancybox-group="footer-gallery"><img src="images/gallery/footer-thumb-5.jpg" alt=""></a></figure>
										<!--Image Box-->
										<figure class="image-box"><a href="images/background/image-2.jpg" class="lightbox-image" title="Image Title Here" data-fancybox-group="footer-gallery"><img src="images/gallery/footer-thumb-6.jpg" alt=""></a></figure>
									</div>
								</div>
							</div>
						</div>

						<!--Footer Column-->
						<div class="footer-column col-md-6 col-sm-6 col-xs-12">
							<div class="footer-widget subscribe-widget">
								<h2>Newsletter</h2>
								<div class="widget-content">
									<div class="text">The weather started getting rough tining</div>
									<div class="newsletter-form">
										<form method="post" action="contact.php">
											<div class="form-group">
												<input type="email" name="email" value="" placeholder="Email Address..." required>
											</div>
											<div class="form-group">
												<button type="submit" class="theme-btn btn-style-one">SUBSCRIBE NOW</button>
											</div>
										</form>
									</div>
								</div>
							</div>
						</div>

					</div>
				</div>

			</div>
		</div>
	</div>

	<!--Footer Bottom-->
	<div class="footer-bottom">
		<div class="auto-container">
			<div class="text">Copyrights &copy; 2017 <a href="#">Valencia</a>. All Rights Reserved</div>
		</div>
	</div>

</footer>


</div>
<!--End pagewrapper-->

<!--Scroll to top-->
@stop
