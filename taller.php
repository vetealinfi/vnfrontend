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
						<li><a href="#">Agencies</a></li>
						<li class="active">Agency Detail</li>
					</ol>
				</div>
				<div class="container">
					<div class="row">
						<div class="col-md-12 col-sm-12">
							<div class="row" style="border: 1px solid #ddd; margin: 0px; background-color: #fff;">	
								<div class="col-md-12 col-sm-12" style="padding: 0px;">
									<div id="carousel-example-generic" class="carousel slide" data-ride="carousel">
										<ol class="carousel-indicators">
											<li data-target="#carousel-example-generic" data-slide-to="0" class="active"></li>
											<li data-target="#carousel-example-generic" data-slide-to="1"></li>
											<li data-target="#carousel-example-generic" data-slide-to="2"></li>
										</ol>
										<div class="carousel-inner" role="listbox">
											<div class="item active">
												<img src="assets/img/slide-01.jpg" class="" alt="..." />
												<div class="carousel-caption">
												...
												</div>
											</div>
											<div class="item">
												<img src="assets/img/slide-02.jpg" class="" alt="..." />
												<div class="carousel-caption">
												...
												</div>
											</div>
											<div class="item">
												<img src="assets/img/slide-03.jpg" alt="..." />
												<div class="carousel-caption">
												...
												</div>
											</div>
										</div>
									</div>
								</div>
							</div>
							<div>
								<div class="tab-wrap">
									<div class="media">
										<div class="row">
											<div class="col-md-12">
												<div class="col-md-3 col-sm-3">
													<div class="logo-taller-lg hidden-md hidden-sm hidden-xs">
														<div class="logo-taller">
															<img alt="" src="assets/img/logo-cuadrado.jpg">
														</div>
													</div>
													<div class="logo-taller-md hidden-lg hidden-sm hidden-xs">
														<div class="logo-taller">
															<img alt="" src="assets/img/logo-cuadrado.jpg">
														</div>
													</div>
													<div class="logo-taller-sm hidden-lg hidden-md hidden-xs">
														<div class="logo-taller">
															<img alt="" src="assets/img/logo-cuadrado.jpg">
														</div>
													</div>
													<div class="logo-taller-xs hidden-lg hidden-md hidden-sm">
														<div class="logo-tallerxs">
															<img alt="" src="assets/img/logo-cuadrado.jpg">
														</div>
													</div>
												</div>
												<ul class="nav nav-tabs col-md-9 col-sm-9">
													  <li class="active col-md-4 col-sm-4 col-xs-4"><a href="#tab1" data-toggle="tab" class="tehnical"><i class="fa fa-shopping-cart"></i> Productos</a></li>
													  <li class="col-md-4 col-sm-4 col-xs-4"><a href="#tab2" data-toggle="tab" class="tehnical"><i class="fa fa-align-left"></i>  Información</a></li>
													  <li class="col-md-4 col-sm-4 col-xs-4"><a href="#tab3" data-toggle="tab" class="tehnical"><i class="fa fa-map-marker"></i> Contacto</a></li>
												</ul>
											</div>
										</div>
										<hr class="thick">
										<div class="row parrent media-body">
											<div class="tab-content">
												<div class="tab-pane active" id="tab1">
													<div class="col-md-3 col-sm-12">
														<section id="sidebar">
															<aside id="edit-search">
																<header><h2>Buscador / Filtro</h2></header>
																<div class="col-sm-4 col-md-12 col-lg-12"><img alt="" src="assets/img/medida.png" style="margin-top: 10px; margin-bottom: 10px; width: 100%;"></div>
																<section id="description" class="hidden-lg hidden-md hidden-xs col-sm-8 col-lg-12">
																	<p style="margin-top: 10px;">Al fin una llanta que permite a los conductores de cualquier vehículo, en cualquier carretera, maximizar el placer de conducir.
																	</p>
																</section>
																<form role="form" id="form-sidebar" class="form-search" action="properties-listing.html">
																	<div class="form-group">
																		<select name="marcas" size="1" multiple>
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
																	<div class="form-group">
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
																	<div class="form-group">
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
																	<div class="form-group">
																		<div class="price-range">
																			<input id="price-input" type="text" name="price" value="1000;299000">
																		</div>
																	</div>
																	<div class="form-group">
																		<select name="marcas" size="1" multiple>
																			<option value="0" selected>Todas las Marcas</option>
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
																	<div class="form-group">
																		<select name="indice" size="1" multiple>
																			<option value="0" selected>Todos Índices Carga/Velocidad</option>
																			<option value="1">91H</option>
																			<option value="2">91V</option>
																			<option value="3">94W</option>
																			<option value="4">89V</option>
																			<option value="5">91W</option>
																			<option value="6">H</option>
																			<option value="7">91Y</option>
																		</select>
																	</div>
																	<div class="form-group">
																		<select name="especifico">
																			<option value="">Neumáticos Específicos</option>
																			<option value="1">Antipinchazos</option>
																			<option value="2">No antipinchazos</option>
																			<option value="3">Reforzados</option>
																			<option value="4">No reforzados</option>
																		</select>
																	</div>
																	<div class="form-group">
																		<select name="Tipo de vehículo">
																			<option value=""> Todos los tipos</option>
																			<option value="1">Auto</option>
																			<option value="2">Moto</option>
																			<option value="3">Camioneta</option>
																			<option value="4">Camión</option>
																			<option value="5">Agrícola</option>
																			<option value="4">Forestal</option>
																			<option value="5">Bus</option>
																			<option value="4">Grúa Horquilla</option>
																			<option value="5">Maquinaria Pesada</option>
																		</select>
																	</div>
																	<div class="form-group">
																		<button type="submit" class="buscar">BUSCAR</button>
																	</div>
																</form>
															</aside>
														</section>
													</div>
													<div class="col-md-9 col-sm-12">
														<section id="results">
															<header><h2>Productos</h2></header>
															<section id="search-filter">
																<figure><h3><i class="fa fa-search"></i>Search Results:</h3>
																	<span class="search-count">28</span>
																	<div class="sorting">
																		<div class="form-group">
																			<select name="sorting">
																				<option value="">Sort By</option>
																				<option value="1">Lowest price first</option>
																				<option value="2">Highest price first</option>
																				<option value="3">Date added</option>
																			</select>
																		</div>
																	</div>
																</figure>
															</section>
															<section id="properties">
																<div class="producto col-lg-4 col-md-4 col-sm-4">
																	<div class="marco">
																		<div class="margen col-md-6 col-sm-6 col-xs-6">
																			<figure class="ribbon">30% dcto</figure>
																			<a href="ficha-producto.html"><img alt="" src="assets/img/properties/property-03.jpg"></a>
																		</div>
																		<div class="detalles col-md-6 col-sm-6 col-xs-6">
																			<header>
																				<div class="property imagen-marca"><img alt="" src="assets/img/logo-bridgestone.jpg"></div>
																				<div class="familia-modelo">POTENZA RE760</div>
																				<figure>205/55 R16 91H</figure>
																			</header>
																			<div class="rft tool-tip"  data-toggle="tooltip" data-placement="top" title="Neumático Runflat">RFT</div>
																			<div class="imagen-moto tool-tip"  data-toggle="tooltip" data-placement="top" title="Neumático para moto"></div>
																			<div class="imagen-auto tool-tip"  data-toggle="tooltip" data-placement="top" title="Neumático para auto"></div>
																			<div class="imagen-camioneta tool-tip"  data-toggle="tooltip" data-placement="top" title="Neumático para camioneta"></div>
																			<div class="imagen-camion tool-tip"  data-toggle="tooltip" data-placement="top" title="Neumático para camión"></div>
																			<div class="imagen-agricola tool-tip"  data-toggle="tooltip" data-placement="top" title="Neumático agrícola"></div>
																			<div class="imagen-forestal tool-tip"  data-toggle="tooltip" data-placement="top" title="Neumático forestal"></div>
																			<div class="imagen-horquilla tool-tip"  data-toggle="tooltip" data-placement="top" title="Neumático para grúa horquilla"></div>
																			<div class="ec-stars-wrapper">
																				<a href="#" data-value="1" title="Votar con 1 estrellas">&#9733;</a>
																				<a href="#" data-value="2" title="Votar con 2 estrellas">&#9733;</a>
																				<a href="#" data-value="3" title="Votar con 3 estrellas">&#9733;</a>
																				<a href="#" data-value="4" title="Votar con 4 estrellas">&#9733;</a>
																				<a href="#" data-value="5" title="Votar con 5 estrellas">&#9733;</a>
																			</div>
																			<div class="checkbox">
																				<label>
																					<input type="checkbox">
																					comparar
																				</label>
																			</div>
																		</div>
																		<div class="detalles col-md-12 col-sm-12 col-xs-12">
																			<header><figure>SERVICIOS ASOCIADOS DEL VENDEDOR</figure></header>
																			<aside>
																				<dl><div class="detalles col-md-6 col-sm-6 col-xs-6">
																					<dt>Instalación</dt>
																					<dd>SI</dd>
																					<dt>Balanceo</dt>
																					<dd>SI</dd>
																					</div>
																					<div class="detalles col-md-6 col-sm-6 col-xs-6">
																						<dt>Alineación</dt>
																						<dd>SI</dd>
																						<dt>Despacho</dt>
																						<dd>SI</dd>
																					</div>
																				</dl>
																			</aside>
																		</div>
																		<div class="detalles col-md-12 col-sm-12">
																			<div class="precio">$100.000</div>
																			<div class="precio-back">Antes $100.000</div>
																			<div class="btn-detalles taller col-md-6 col-sm-6 col-xs-6"><a href="property-detail.html"><i class="fa fa-external-link-square"></i> vendedor</a></div>
																			<div class="btn-detalles taller col-md-6 col-sm-6 col-xs-6"><a href="property-detail.html"><i class="fa fa-shopping-cart"></i> Cotizar</a></div>
																		</div>
																	</div>
																</div>
																<div class="ads">
																	<div class="ads-728 hidden-xs hidden-md">ads</div>
																	<div class="ads-468 hidden-xs hidden-sm hidden-lg">ads</div>
																	<div class="ads-250 hidden-sm hidden-md hidden-lg">ads</div>
																</div>
																<div class="center">
																	<ul class="pagination">
																		<li class="active"><a href="#">1</a></li>
																		<li><a href="#">2</a></li>
																		<li><a href="#">3</a></li>
																		<li><a href="#">4</a></li>
																		<li><a href="#">5</a></li>
																	</ul>
																</div>
															</section>
														</section>
													</div>
												</div>
												<div class="tab-pane" id="tab2">
													<section id="description" class="col-md-12" style="padding-bottom: 20px;">
														<header><h2>Información del Taller</h2></header>
														<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Cras et dui vestibulum,
															bibendum purus sit amet, vulputate mauris. Ut adipiscing gravida tincidunt.
															Duis euismod placerat rhoncus. Phasellus mollis imperdiet placerat.
														purus sit amet, vulputate mauris. Ut adipiscing gravida tincidunt.
														Duis euismod placerat rhoncus. Phasellus mollis imperdiet placerat. purus sit amet, vulputate mauris. Ut adipiscing gravida tincidunt.
														Duis euismod placerat rhoncus. Phasellus mollis imperdiet placerat.
														</p>
													</section>
												</div>
												<div class="tab-pane" id="tab3">
													<div class="col-md-12" style="padding-bottom: 20px;">
														<section id="agent-detail">
															<header><h2>Contacto</h2></header>
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
									</div>     
								</div>               
							</div>
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