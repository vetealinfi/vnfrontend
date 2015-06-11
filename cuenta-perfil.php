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
						<li><a href="#">Inicio</a></li>
						<li><a href="#">Cuenta</a></li>
						<li class="active">Perfil</li>
					</ol>
				</div>
				<div class="container">
					<div class="row">
						<div class="col-md-3 col-sm-2">
							<section id="sidebar">
								<header><h2>Cuenta</h2></header>
								<aside>
									<ul class="sidebar-navigation">
										<li class="active"><a href="profile.html"><i class="fa fa-user"></i><span>Perfil</span></a></li>
										<li><a href="my-properties.html"><i class="fa fa-home"></i><span>Mis Productos</span></a></li>
										<li><a href="bookmarked.html"><i class="fa fa-heart"></i><span>Bookmarked Properties</span></a></li>
									</ul>
								</aside>
							</section>
						</div>
						<div class="col-md-9 col-sm-10">
							<section id="profile">
								<header><h1>Perfil</h1></header>
								<div class="account-profile">
									<div class="row" style="margin-top: 20px;margin-right: 0px; margin-left: 0px;">
										<div class="row" style="border: 1px solid #ddd; margin: 0px; background-color: #fff;">
											<div class="col-md-3 col-sm-3">
												<section id="logotipo-vendedor">
													<figure class="agency-image" style="text-align: center;"><img alt="" src="assets/img/logo-cuadrado.jpg"></figure>
												</section>
											</div>
											<div class="col-md-9 col-sm-9" style="padding: 0px;">
												<div id="carousel-example-generic" class="carousel slide" data-ride="carousel">
													<ol class="carousel-indicators">
														<li data-target="#carousel-example-generic" data-slide-to="0" class="active"></li>
														<li data-target="#carousel-example-generic" data-slide-to="1"></li>
														<li data-target="#carousel-example-generic" data-slide-to="2"></li>
													</ol>
													<div class="carousel-inner" role="listbox">
														<div class="item active" style="margin-bottom: -30px;">
															<img src="assets/img/slide-01.jpg" class="" alt="..." />
															<div class="carousel-caption">
															...
															</div>
														</div>
														<div class="item" style="margin-bottom: -30px;">
															<img src="assets/img/slide-02.jpg" class="" alt="..." />
															<div class="carousel-caption">
															...
															</div>
														</div>
														<div class="item" style="margin-bottom: -30px;">
															<img src="assets/img/slide-03.jpg" alt="..." />
															<div class="carousel-caption">
															...
															</div>
														</div>
													</div>
													<a class="left carousel-control" href="#carousel-example-generic" role="button" data-slide="prev">
														<span class="glyphicon glyphicon-chevron-left" aria-hidden="true"></span>
														<span class="sr-only">Previous</span>
													</a>
													<a class="right carousel-control" href="#carousel-example-generic" role="button" data-slide="next">
														<span class="glyphicon glyphicon-chevron-right" aria-hidden="true"></span>
														<span class="sr-only">Next</span>
													</a>
												</div>
											</div>
										</div>
										<hr class="thick" style="margin-top: 20px;">
										<div>
											<section id="description" style="margin-top: 40px;">
												<h2>Información del Taller</h2>
												<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Cras et dui vestibulum,
													bibendum purus sit amet, vulputate mauris. Ut adipiscing gravida tincidunt.
													Duis euismod placerat rhoncus. Phasellus mollis imperdiet placerat.
												purus sit amet, vulputate mauris. Ut adipiscing gravida tincidunt.
												Duis euismod placerat rhoncus. Phasellus mollis imperdiet placerat. purus sit amet, vulputate mauris. Ut adipiscing gravida tincidunt.
												Duis euismod placerat rhoncus. Phasellus mollis imperdiet placerat.</p>
												<div id="social">
													<div class="agent-social">
													  <a href="#" class="fa fa-twitter btn btn-grey-dark"></a>
													  <a href="#" class="fa fa-facebook btn btn-grey-dark"></a>
													  <a href="#" class="fa fa-linkedin btn btn-grey-dark"></a>
													</div>
												</div>
											</section>
											<hr class="thick" style="margin-top: 20px;">
											<section id="description" class="col-md-6 col-sm-6" style="margin-top: 0px; padding-left: 0px;">
												<h2>Mapa del Taller</h2>
												<div id="contact-map"></div>
											</section>
											<section id="description" class="col-md-6 col-sm-6" style="margin-top: 0px; padding: 0px;">
												<h2>Datos de Contacto</h2>
												<address>
													
													<strong>Genius Properties</strong><br>
													4877 Spruce Drive<br>
													West Newton, PA 15089
												</address>
												<dl>
													<dt>Phone:</dt>
													<dd>(123) 456 789</dd>
													<dt>Mobile:</dt>
													<dd>888 123 456 789</dd>
													<dt>Email:</dt>
													<dd><a href="mailto:#">agency@example.com</a></dd>
													<dt>Skype:</dt>
													<dd>genius.properties</dd>
												</dl>
											</section>
											<div class="col-md-12 col-sm-12" style="margin-top: 0px; padding: 0px;">
												<h2>Enviar Mensaje</h2>
												<div class="agent-form">
													<form role="form" id="form-contact-agent" method="post"  class="clearfix">
														<div class="row">
															<div class="col-md-6">
																<div class="form-group">
																	<label for="form-contact-agent-name">Your Name<em>*</em></label>
																	<input type="text" class="form-control" id="form-contact-agent-name" name="form-contact-agent-name" required>
																</div>
															</div>
															<div class="col-md-6">
																<div class="form-group">
																	<label for="form-contact-agent-email">Your Email<em>*</em></label>
																	<input type="email" class="form-control" id="form-contact-agent-email" name="form-contact-agent-email" required>
																</div>
															</div>
														</div>
														<div class="row">
															<div class="col-md-12">
																<div class="form-group">
																	<label for="form-contact-agent-message">Your Message<em>*</em></label>
																	<textarea class="form-control" id="form-contact-agent-message" rows="5" name="form-contact-agent-message" required></textarea>
																</div>
															</div>
														</div>
														<div class="form-group clearfix">
															<button type="submit" class="btn pull-right btn-default" id="form-contact-agent-submit">Send a Message</button>
														</div>
														<div id="form-rating-status"></div>
													</form>
												</div>
											</div>
										</div>
									</div>
								</div>
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