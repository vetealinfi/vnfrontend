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
			<div id="page-content" class="back-buscador">
				<div class="container">
					<div class="row">
						<div class="col-lg-5 col-md-4 col-sm-12"></div>
						<div class="col-lg-7 col-md-8 col-sm-12">
							<div id="carousel-example-generic" class="carousel-slide slide" data-ride="carousel">
								<ol class="carousel-indicators">
									<li data-target="#carousel-example-generic" data-slide-to="0" class="active"></li>
									<li data-target="#carousel-example-generic" data-slide-to="1"></li>
									<li data-target="#carousel-example-generic" data-slide-to="2"></li>
								</ol>
								<div class="carousel-inner" role="listbox">
									<div class="item active">
										<img src="assets/img/slide-home.gif" class="" alt="..." />
										<div class="carousel-caption">
										...
										</div>
									</div>
									<div class="item">
										<img src="assets/img/slide-home.gif" class="" alt="..." />
										<div class="carousel-caption">
										...
										</div>
									</div>
									<div class="item">
										<img src="assets/img/slide-home.gif" alt="..." />
										<div class="carousel-caption">
										...
										</div>
									</div>
								</div>
							</div>          
						</div>
					</div>
				</div>
			</div>
			<div id="page-content-slide" style="background-color: #202020; padding-bottom: 0px; margin-top: -15px;">
				<div class="container">
					<div class="row">
						<div class="col-md-12 col-sm-12">
							<div class="row">
								<div class="tab-wrap buscador-index col-lg-5 col-md-4">
									<div class="buscador-top hidden-sm hidden-xs"></div>
										<div class="media fondo-buscador">
											<div class="row">
												<div class="col-md-12">
													<ul class="nav nav-tabs col-md-12 col-sm-12">
														<li class="active nav-right col-md-6 col-sm-6 col-xs-6"><a href="#tab1" data-toggle="tab" class="tehnical">Buscar por Medida</a></li>
														<li class="nav-left col-md-6 col-sm-6 col-xs-6"><a href="#tab2" data-toggle="tab" class="tehnical">Buscar por Vehículo</a></li>
													</ul>
												</div>
											</div>
										<div class="row parrent media-body">
											<div class="tab-content">
												<div class="tab-pane active" id="tab1">
													<div class="col-md-12 col-sm-12">
														<section id="sidebar">
															<aside id="edit-search">
																<form role="form" id="form-sidebar" class="form-search" action="properties-listing.html">
																	<div class="form-group col-md-4 col-sm-4 col-xs-4" style="padding-right: 6px;">
																		<select name="marcas" size="3" multiple>
																			<option value="0" selected>Ancho</option>
																			<option value="1">Bridgestone</option>
																			<option value="2">Pirelli</option>
																			<option value="3">Michelin</option>
																			<option value="4">Continental</option>
																			<option value="5">Firestone</option>
																			<option value="6">Kumho</option>
																			<option value="7">Continental</option>
																			<option value="8">Maxxis</option>
																			<option value="9">Hankook</option>
																			<option value="10">Nexen</option>
																			<option value="11">General Tire</option>
																			<option value="12">Westlake</option>
																			<option value="13">Dunlop</option>
																			<option value="14">Yokohama</option>
																			<option value="15">Cooper</option>
																			<option value="16">Sumitomo</option>
																			<option value="17">Bfgoodrich</option>
																			<option value="18">Fuzion</option>
																			<option value="19">Sonar</option>
																			<option value="20">Goodride</option>
																			<option value="21">Ling Long</option>
																		</select>
																	</div>
																	<div class="form-group col-md-4 col-sm-4 col-xs-4" style="padding-right: 3px; padding-left: 3px;">
																		<select name="marcas" size="1" multiple>
																			<option value="0" selected>Perfil</option>
																			<option value="1">Bridgestone</option>
																			<option value="2">Pirelli</option>
																			<option value="3">Michelin</option>
																			<option value="4">Continental</option>
																			<option value="5">Firestone</option>
																			<option value="6">Kumho</option>
																			<option value="7">Continental</option>
																			<option value="8">Maxxis</option>
																			<option value="9">Hankook</option>
																			<option value="10">Nexen</option>
																			<option value="11">General Tire</option>
																			<option value="12">Westlake</option>
																			<option value="13">Dunlop</option>
																			<option value="14">Yokohama</option>
																			<option value="15">Cooper</option>
																			<option value="16">Sumitomo</option>
																			<option value="17">Bfgoodrich</option>
																			<option value="18">Fuzion</option>
																			<option value="19">Sonar</option>
																			<option value="20">Goodride</option>
																			<option value="21">Ling Long</option>
																		</select>
																	</div>
																	<div class="form-group col-md-4 col-sm-4 col-xs-4" style="padding-left: 6px;">
																		<select name="marcas" size="1" multiple>
																			<option value="0" selected>Aro</option>
																			<option value="1">Bridgestone</option>
																			<option value="2">Pirelli</option>
																			<option value="3">Michelin</option>
																			<option value="4">Continental</option>
																			<option value="5">Firestone</option>
																			<option value="6">Kumho</option>
																			<option value="7">Continental</option>
																			<option value="8">Maxxis</option>
																			<option value="9">Hankook</option>
																			<option value="10">Nexen</option>
																			<option value="11">General Tire</option>
																			<option value="12">Westlake</option>
																			<option value="13">Dunlop</option>
																			<option value="14">Yokohama</option>
																			<option value="15">Cooper</option>
																			<option value="16">Sumitomo</option>
																			<option value="17">Bfgoodrich</option>
																			<option value="18">Fuzion</option>
																			<option value="19">Sonar</option>
																			<option value="20">Goodride</option>
																			<option value="21">Ling Long</option>
																		</select>
																	</div>
																	<div class="form-group col-md-12 col-sm-12">
																		<select name="marcas" size="1" multiple>
																			<option value="0" selected>Región</option>
																			<option value="1">Bridgestone</option>
																			<option value="2">Pirelli</option>
																			<option value="3">Michelin</option>
																			<option value="4">Continental</option>
																			<option value="5">Firestone</option>
																			<option value="6">Kumho</option>
																			<option value="7">Continental</option>
																			<option value="8">Maxxis</option>
																			<option value="9">Hankook</option>
																			<option value="10">Nexen</option>
																			<option value="11">General Tire</option>
																			<option value="12">Westlake</option>
																			<option value="13">Dunlop</option>
																			<option value="14">Yokohama</option>
																			<option value="15">Cooper</option>
																			<option value="16">Sumitomo</option>
																			<option value="17">Bfgoodrich</option>
																			<option value="18">Fuzion</option>
																			<option value="19">Sonar</option>
																			<option value="20">Goodride</option>
																			<option value="21">Ling Long</option>
																		</select>
																	</div>
																	<div class="form-group col-lg-12 col-sm-12">
																		<select name="marcas" size="1" multiple>
																			<option value="0" selected>Comuna</option>
																			<option value="1">Bridgestone</option>
																			<option value="2">Pirelli</option>
																			<option value="3">Michelin</option>
																			<option value="4">Continental</option>
																			<option value="5">Firestone</option>
																			<option value="6">Kumho</option>
																			<option value="7">Continental</option>
																			<option value="8">Maxxis</option>
																			<option value="9">Hankook</option>
																			<option value="10">Nexen</option>
																			<option value="11">General Tire</option>
																			<option value="12">Westlake</option>
																			<option value="13">Dunlop</option>
																			<option value="14">Yokohama</option>
																			<option value="15">Cooper</option>
																			<option value="16">Sumitomo</option>
																			<option value="17">Bfgoodrich</option>
																			<option value="18">Fuzion</option>
																			<option value="19">Sonar</option>
																			<option value="20">Goodride</option>
																			<option value="21">Ling Long</option>
																		</select>
																	</div>
																	<div class="form-group col-lg-12">
																		<button type="submit" class="buscar">Ver Resultados</button>
																	</div>
																</form>
															</aside>
							
														</section>
													</div>
												</div>
												<div class="tab-pane" id="tab2">
													<div class="col-md-12 col-sm-12">
														<section id="sidebar">
															<aside id="edit-search">
																<form role="form" id="form-sidebar" class="form-search" action="properties-listing.html">
																	<div class="form-group col-md-12 col-sm-12">
																		<select name="marcas" size="3" multiple>
																			<option value="0" selected>Ancho</option>
																			<option value="1">Bridgestone</option>
																			<option value="2">Pirelli</option>
																			<option value="3">Michelin</option>
																			<option value="4">Continental</option>
																			<option value="5">Firestone</option>
																			<option value="6">Kumho</option>
																			<option value="7">Continental</option>
																			<option value="8">Maxxis</option>
																			<option value="9">Hankook</option>
																			<option value="10">Nexen</option>
																			<option value="11">General Tire</option>
																			<option value="12">Westlake</option>
																			<option value="13">Dunlop</option>
																			<option value="14">Yokohama</option>
																			<option value="15">Cooper</option>
																			<option value="16">Sumitomo</option>
																			<option value="17">Bfgoodrich</option>
																			<option value="18">Fuzion</option>
																			<option value="19">Sonar</option>
																			<option value="20">Goodride</option>
																			<option value="21">Ling Long</option>
																		</select>
																	</div>
																	<div class="form-group col-md-12 col-sm-12">
																		<select name="marcas" size="1" multiple>
																			<option value="0" selected>Región</option>
																			<option value="1">Bridgestone</option>
																			<option value="2">Pirelli</option>
																			<option value="3">Michelin</option>
																			<option value="4">Continental</option>
																			<option value="5">Firestone</option>
																			<option value="6">Kumho</option>
																			<option value="7">Continental</option>
																			<option value="8">Maxxis</option>
																			<option value="9">Hankook</option>
																			<option value="10">Nexen</option>
																			<option value="11">General Tire</option>
																			<option value="12">Westlake</option>
																			<option value="13">Dunlop</option>
																			<option value="14">Yokohama</option>
																			<option value="15">Cooper</option>
																			<option value="16">Sumitomo</option>
																			<option value="17">Bfgoodrich</option>
																			<option value="18">Fuzion</option>
																			<option value="19">Sonar</option>
																			<option value="20">Goodride</option>
																			<option value="21">Ling Long</option>
																		</select>
																	</div>
																	<div class="form-group col-lg-12 col-sm-12">
																		<select name="marcas" size="1" multiple>
																			<option value="0" selected>Comuna</option>
																			<option value="1">Bridgestone</option>
																			<option value="2">Pirelli</option>
																			<option value="3">Michelin</option>
																			<option value="4">Continental</option>
																			<option value="5">Firestone</option>
																			<option value="6">Kumho</option>
																			<option value="7">Continental</option>
																			<option value="8">Maxxis</option>
																			<option value="9">Hankook</option>
																			<option value="10">Nexen</option>
																			<option value="11">General Tire</option>
																			<option value="12">Westlake</option>
																			<option value="13">Dunlop</option>
																			<option value="14">Yokohama</option>
																			<option value="15">Cooper</option>
																			<option value="16">Sumitomo</option>
																			<option value="17">Bfgoodrich</option>
																			<option value="18">Fuzion</option>
																			<option value="19">Sonar</option>
																			<option value="20">Goodride</option>
																			<option value="21">Ling Long</option>
																		</select>
																	</div>
																	<div class="form-group col-lg-12">
																		<button type="submit" class="buscar">Ver Resultados</button>
																	</div>
																</form>
															</aside>
														</section>
													</div>
												</div>
											</div>
										</div>
									</div>
								</div>           
							</div>
						</div>
					</div>
				</div>
			</div>
			<section id="our-services" class="block back-service">
				<section id="our-services" class="block back-service0">
					<div class="container">
						<div class="row">
							<div class="ads">
								<div class="col-md-4 col-sm-12 col-xs-12">
									<div class="row">
										<div class="ads-300 hidden-sm">ads</div>
										<div class="ads-728  hidden-lg hidden-md hidden-xs">ads</div>
									</div>
								</div>
								<div class="col-md-4 col-sm-12 col-xs-12">
									<div class="row">
										<div class="ads-300 hidden-sm">ads</div>
										<div class="ads-728  hidden-lg hidden-md hidden-xs">ads</div>
									</div>
								</div>
								<div class="col-md-4 col-sm-12 col-xs-12">
									<div class="row">
										<div class="ads-300 hidden-sm">ads</div>
										<div class="ads-728  hidden-lg hidden-md hidden-xs">ads</div>
									</div>
								</div>
							</div>
						</div>
					</div>
				</section>
				<section id="our-services" class="block back-service1">
					<div class="container">
						<header class="section-title"><h2>Nuestros Servicios</h2></header>
						<div class="row">
							<div class="col-md-4 col-sm-4 col-xs-12">
								<div class="feature-box col-md-4 col-sm-6 col-xs-3">
									<figure class="icon"><img src="assets/img/vendedores-en-todo-chile.png"></figure>
								</div>
								<div class="feature-box col-md-8 col-sm-12 col-xs-9">
									<aside class="description">
										<header><h3>VENDEDORES EN TODO CHILE</h3></header>
										<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit</p>
										<a href="properties-listing.html" class="link-arrow">Read More</a>
									</aside>
								</div>
							</div>
							<div class="col-md-4 col-sm-4 col-xs-12">
								<div class="feature-box col-md-4 col-sm-6 col-xs-3">
									<figure class="icon"><img src="assets/img/facturas-rapidas.png"></figure>
								</div>
								<div class="feature-box col-md-8 col-sm-12 col-xs-9">
									<aside class="description">
										<header><h3>COTIZACIONES RÁPIDAS</h3></header>
										<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit</p>
										<a href="properties-listing.html" class="link-arrow">Read More</a>
									</aside>
								</div>
							</div>
							<div class="col-md-4 col-sm-4 col-xs-12">
								<div class="feature-box col-md-4 col-sm-6 col-xs-3">
									<figure class="icon"><img src="assets/img/variedad-marcas.png"></figure>
								</div>
								<div class="feature-box col-md-8 col-sm-12 col-xs-9">
									<aside class="description">
										<header><h3>VARIEDAD EN MARCAS Y MEDIDAS</h3></header>
										<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit</p>
										<a href="properties-listing.html" class="link-arrow">Read More</a>
									</aside>
								</div>
							</div>
						</div>
					</div>
				</section>
				<section id="our-services" class="block back-service2">
					<section id="fun-facts" class="container block counting-numbers">
						<div class="row">
							<div class="fun-facts">
								<div class="col-md-3 col-sm-3">
									<div class="number-wrapper">
										<div class="number" data-from="1" data-to="10000">10000</div>
										<figure>Productos</figure>
									</div>
								</div>
								<div class="col-md-3 col-sm-3">
									<div class="number-wrapper">
										<div class="number" data-from="1" data-to="500">500</div>
										<figure>Medidas</figure>
									</div>
								</div>
								<div class="col-md-3 col-sm-3">
									<div class="number-wrapper">
										<div class="number" data-from="1" data-to="20">20</div>
										<figure>Marcas</figure>
									</div>
								</div>
								<div class="col-md-3 col-sm-3">
									<div class="number-wrapper">
										<div class="number" data-from="1" data-to="100">100</div>
										<figure>Proveedores</figure>
									</div>
								</div>
							</div>
						</div>
					</section>
				</section>
			</section>
			<section id="partners" class="block">
				<div class="container">
					<header class="section-title-2"><h2>Our Partners</h2></header>
					<div class="logos">
						<div class="logo"><a href=""><img src="assets/img/logo-partner-01.png" alt=""></a></div>
						<div class="logo"><a href=""><img src="assets/img/logo-partner-02.png" alt=""></a></div>
						<div class="logo"><a href=""><img src="assets/img/logo-partner-03.png" alt=""></a></div>
						<div class="logo"><a href=""><img src="assets/img/logo-partner-04.png" alt=""></a></div>
						<div class="logo"><a href=""><img src="assets/img/logo-partner-05.png" alt=""></a></div>
					</div>
				</div>
			</section>
			<footer id="page-footer">
				<div class="inner">
					<aside id="footer-main">
						<div class="container">
							<div class="row">
								<div class="col-md-3 col-sm-3">
									<article>
										<h3>Marcas de Neumáticos</h3>
										<ul class="list-unstyled list-links">
											<li><a href="#">Neumáticos Bridgestone</a></li>
											<li><a href="#">Neumáticos Pirelli</a></li>
											<li><a href="#">Neumáticos Michelin</a></li>
											<li><a href="#">Neumaticos Continental</a></li>
											<li><a href="#">Neumaticos Firestone</a></li>
											<li><a href="#">Neumaticos Kumho</a></li>
											<li><a href="#">Neumaticos Continental</a></li>
											<li><a href="#">Neumaticos Maxxis</a></li>
											<li><a href="#">Neumaticos Hankook</a></li>
											<li><a href="#">Neumaticos Nexen</a></li>
											<li><a href="#">Neumaticos General Tire</a></li>
											<li><a href="#">Neumaticos Westlake</a></li>
											<li><a href="#">Neumaticos Dunlop</a></li>
											<li><a href="#">Neumaticos Yokohama</a></li>
											<li><a href="#">Neumaticos Cooper</a></li>
											<li><a href="#">Neumaticos Sumitomo</a></li>
											<li><a href="#">Neumaticos Bfgoodrich</a></li>
											<li><a href="#">Neumaticos Fuzion</a></li>
											<li><a href="#">Neumaticos Sonar</a></li>
											<li><a href="#">Neumaticos Goodride</a></li>
											<li><a href="#">Neumaticos Ling Long</a></li>
										</ul>
									</article>
								</div>
								<div class="col-md-3 col-sm-3">
									<article>
										<h3>Medidas más buscadas</h3>
										<ul class="list-unstyled list-links">
											<li><a href="#">Neumaticos 205/55 R16</a></li>
											<li><a href="#">Neumaticos 215/65 R16</a></li>
											<li><a href="#">Neumaticos 225/65 R17</a></li>
											<li><a href="#">Neumaticos 235/65 R17</a></li>
											<li><a href="#">Neumaticos 175/65 R14</a></li>
											<li><a href="#">Neumaticos 195/65 R15</a></li>
											<li><a href="#">Neumaticos 165/60 R14</a></li>
											<li><a href="#">Neumaticos 185/65 R15</a></li>
											<li><a href="#">Neumaticos 215/45 R17</a></li>
											<li><a href="#">Neumaticos 185/65 R14</a></li>
											<li><a href="#">Neumaticos 185/60 R14</a></li>
											<li><a href="#">Neumaticos 195/55 R15</a></li>
											<li><a href="#">Neumaticos 225/70 R16</a></li>
											<li><a href="#">Neumaticos 245/65 R17</a></li>
										</ul>
									</article>
								</div>
								<div class="col-md-3 col-sm-3">
									<article>
										<h3>Tipos de neumáticos</h3>
										<ul class="list-unstyled list-links">
											<li><a href="#">Neumáticos Autos</a></li>
											<li><a href="#">Neumáticos Motos</a></li>
											<li><a href="#">Neumáticos Camionetas</a></li>
											<li><a href="#">Neumáticos Camiónes</a></li>
											<li><a href="#">Neumáticos Agrícolas</a></li>
											<li><a href="#">Neumáticos Forestales</a></li>
											<li><a href="#">Neumáticos Buses</a></li>
											<li><a href="#">Neumáticos Grúas Horquilla</a></li>
											<li><a href="#">Neumáticos Maquinaria Pesada</a></li>
										</ul>
									</article>
								</div>
								<div class="col-md-3 col-sm-3">
									<article>
										<h3>Servicios sobre neumáticos</h3>
										<ul class="list-unstyled list-links">
											<li><a href="#">Instación de Neumaticos</a></li>
											<li><a href="#">Balanceo de Neumaticos</a></li>
											<li><a href="#">Alineación de Neumaticos</a></li>
											<li><a href="#">Despacho de Neumaticos</a></li>
										</ul>
									</article>
								</div>
							</div>
						</div>
					</aside>
				</div>
			</footer>
			<?php
				include('footer.php');
			?>
		</div>
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
		
		<script type="text/javascript" src="assets/js/waypoints.min.js"></script>
		<script type="text/javascript" src="assets/js/jquery.countTo.js"></script>
		
		<script>
			var _latitude = 48.87;
			var _longitude = 2.29;

			google.maps.event.addDomListener(window, 'load', initSubmitMap(_latitude,_longitude));
			function initSubmitMap(_latitude,_longitude){
				var mapCenter = new google.maps.LatLng(_latitude,_longitude);
				var mapOptions = {
					zoom: 15,
					center: mapCenter,
					disableDefaultUI: false,
					//scrollwheel: false,
					styles: mapStyles
				};
				var mapElement = document.getElementById('submit-map');
				var map = new google.maps.Map(mapElement, mapOptions);
				var marker = new MarkerWithLabel({
					position: mapCenter,
					map: map,
					icon: 'assets/img/marker.png',
					labelAnchor: new google.maps.Point(50, 0),
					draggable: true
				});
				$('#submit-map').removeClass('fade-map');
				google.maps.event.addListener(marker, "mouseup", function (event) {
					var latitude = this.position.lat();
					var longitude = this.position.lng();
					$('#latitude').val( this.position.lat() );
					$('#longitude').val( this.position.lng() );
				});

		//      Autocomplete
				var input = /** @type {HTMLInputElement} */( document.getElementById('address-map') );
				var autocomplete = new google.maps.places.Autocomplete(input);
				autocomplete.bindTo('bounds', map);
				google.maps.event.addListener(autocomplete, 'place_changed', function() {
					var place = autocomplete.getPlace();
					if (!place.geometry) {
						return;
					}
					if (place.geometry.viewport) {
						map.fitBounds(place.geometry.viewport);
					} else {
						map.setCenter(place.geometry.location);
						map.setZoom(17);
					}
					marker.setPosition(place.geometry.location);
					marker.setVisible(true);
					$('#latitude').val( marker.getPosition().lat() );
					$('#longitude').val( marker.getPosition().lng() );
					var address = '';
					if (place.address_components) {
						address = [
							(place.address_components[0] && place.address_components[0].short_name || ''),
							(place.address_components[1] && place.address_components[1].short_name || ''),
							(place.address_components[2] && place.address_components[2].short_name || '')
						].join(' ');
					}
				});

			}

			function success(position) {
				initSubmitMap(position.coords.latitude, position.coords.longitude);
				$('#latitude').val( position.coords.latitude );
				$('#longitude').val( position.coords.longitude );
			}

			$('.geo-location').on("click", function() {
				if (navigator.geolocation) {
					$('#submit-map').addClass('fade-map');
					navigator.geolocation.getCurrentPosition(success);
				} else {
					error('Geo Location is not supported');
				}
			});
		</script>
	</body>
</html>