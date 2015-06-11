<!DOCTYPE html>

<html lang="en-US">
	<?php
		include('head.php');
	?>
	<body class="navigation-fixed-top">
		<div class="wrapper">
			<?php
				include('header.php');
			?>
			<div id="page-content">
				<div class="container">
					<ol class="breadcrumb">
						<li><a href="#">Home</a></li>
						<li class="active">Contact</li>
					</ol>
				</div>
				<div class="container">
					<div class="row">
						<div class="col-md-12">
							<section id="agent-detail">
								<header><h1>Contacto</h1></header>
								<section id="contact-information">
									<div class="row">
										<div class="col-md-5 col-sm-8">
											<header><h3>Where We Are</h3></header>
											<div id="contact-map"></div>
										</div>
										<div class="col-md-3 col-sm-4">
											<section id="address">
												<header><h3>Address</h3></header>
												<address>
													<strong>Your Company</strong><br>
													4877 Spruce Drive<br>
													West Newton, PA 15089<br><br>
												
												+1 (734) 123-4567<br>
												<a href="#">hello@example.com</a><br>
												<strong>skype: </strong>your.company
												</address>
											</section>
											<section id="social">
												<header><h3>Social Profiles</h3></header>
												<div class="agent-social">
													<a href="#" class="fa fa-twitter btn btn-grey-dark"></a>
													<a href="#" class="fa fa-facebook btn btn-grey-dark"></a>
													<a href="#" class="fa fa-linkedin btn btn-grey-dark"></a>
												</div>
											</section>
										</div>
										<div class="col-md-4 col-sm-12">
											<section id="form">
												<header><h3>Send Us a Message</h3></header>
												<form role="form" id="form-contact" method="post"  class="clearfix">
													<div class="row">
														<div class="col-md-6">
															<div class="form-group">
																<label for="form-contact-name">Your Name<em>*</em></label>
																<input type="text" class="form-control" id="form-contact-name" name="form-contact-name" required>
															</div>
														</div>
														<div class="col-md-6">
															<div class="form-group">
																<label for="form-contact-email">Your Email<em>*</em></label>
																<input type="email" class="form-control" id="form-contact-email" name="form-contact-email" required>
															</div>
														</div>
													</div>
													<div class="row">
														<div class="col-md-12">
															<div class="form-group">
																<label for="form-contact-message">Your Message<em>*</em></label>
																<textarea class="form-control" id="form-contact-message" rows="4" name="form-contact-message" required></textarea>
															</div>
														</div>
													</div>
													<div class="form-group clearfix">
														<button type="submit" class="btn pull-right btn-default" id="form-contact-submit">Send a Message</button>
													</div>
													<div id="form-status"></div>
												</form>
											</section>
										</div>
									</div>
								</section>
							</section>
						</div>
					</div>
				</div>
			</div>
			<?php
				include('footer.php');
			?>
		</div>
		<!-- script unicos -->
		<script type="text/javascript" src="http://maps.google.com/maps/api/js?sensor=false"></script>
		<script type="text/javascript" src="assets/js/markerwithlabel_packed.js"></script>
		<script type="text/javascript" src="assets/js/infobox.js"></script>
		<script type="text/javascript" src="assets/js/jshashtable-2.1_src.js"></script>
		<!-- script unicos fin -->
		<script type="text/javascript" src="assets/js/jquery-2.1.0.min.js"></script>
		<script type="text/javascript" src="assets/js/jquery-migrate-1.2.1.min.js"></script>
		<script type="text/javascript" src="assets/bootstrap/js/bootstrap.min.js"></script>
		<script type="text/javascript" src="assets/js/smoothscroll.js"></script>
		<script type="text/javascript" src="assets/js/owl.carousel.min.js"></script>
		<script type="text/javascript" src="assets/js/bootstrap-select.min.js"></script>
		<script type="text/javascript" src="assets/js/jquery.validate.min.js"></script>
		<script type="text/javascript" src="assets/js/icheck.min.js"></script>
		<script type="text/javascript" src="assets/js/retina-1.1.0.min.js"></script>
		<script type="text/javascript" src="assets/js/jquery.magnific-popup.min.js"></script>
		<script type="text/javascript" src="assets/js/jshashtable-2.1_src.js"></script>
		<script type="text/javascript" src="assets/js/jquery.numberformatter-1.2.3.js"></script>
		<script type="text/javascript" src="assets/js/tmpl.js"></script>
		<script type="text/javascript" src="assets/js/jquery.dependClass-0.1.js"></script>
		<script type="text/javascript" src="assets/js/draggable-0.1.js"></script>
		<script type="text/javascript" src="assets/js/jquery.slider.js"></script>
		<script type="text/javascript" src="assets/js/custom.js"></script>
		<script type="text/javascript" src="http://maps.google.com/maps/api/js?sensor=false&libraries=places"></script>
		<script type="text/javascript" src="assets/js/markerwithlabel_packed.js"></script>
		<script type="text/javascript" src="assets/js/fileinput.min.js"></script>
		<script type="text/javascript" src="assets/js/custom-map.js"></script>

		<!--[if gt IE 8]>
		<script type="text/javascript" src="assets/js/ie.js"></script>
		<![endif]-->
		<script>
			_latitude = 48.87;
			_longitude = 2.29;
			google.maps.event.addDomListener(window, 'load', contactUsMap(_latitude,_longitude));
		</script>
	</body>
</html>