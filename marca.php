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
												<img src="assets/img/br-01.jpg" class="" alt="..." />
												<div class="carousel-caption">
												...
												</div>
											</div>
											<div class="item">
												<img src="assets/img/br-02.jpg" class="" alt="..." />
												<div class="carousel-caption">
												...
												</div>
											</div>
											<div class="item">
												<img src="assets/img/br-03.jpg" alt="..." />
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
															<img alt="" src="assets/img/logo-cuadrado-br.jpg">
														</div>
													</div>
													<div class="logo-taller-md hidden-lg hidden-sm hidden-xs">
														<div class="logo-taller">
															<img alt="" src="assets/img/logo-cuadrado-br.jpg">
														</div>
													</div>
													<div class="logo-taller-sm hidden-lg hidden-md hidden-xs">
														<div class="logo-taller">
															<img alt="" src="assets/img/logo-cuadrado-br.jpg">
														</div>
													</div>
													<div class="logo-taller-xs hidden-lg hidden-md hidden-sm">
														<div class="logo-tallerxs">
															<img alt="" src="assets/img/logo-cuadrado-br.jpg">
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
													<div class="col-lg-3 col-md-4 col-sm-12">
														<section id="sidebar">
															<aside id="edit-search">
																<header><h2>Buscador / Filtro</h2></header>
																<div class="row">
																	<div class="col-lg-12 col-md-12 col-sm-6 col-xs-12">
																		<div class="center box-ingreso">
																			<img alt="" src="assets/img/medida.png" style="margin-top: 10px; margin-bottom: 10px; max-width: 230px;">
																			<section id="description">
																				<p style="margin-top: 10px;">Al fin una llanta que permite a los conductores de cualquier vehículo, en cualquier carretera, maximizar el placer de conducir.
																				</p>
																			</section>
																		</div>
																	</div>
																	<div class="col-lg-12 col-md-12 col-sm-6 col-xs-12">
																		<form role="form" id="form-sidebar" class="form-search" action="properties-listing.html">
																			<div class="row">
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
																	</div>
																</div>
															</aside>
														</section>
													</div>
													<div class="col-lg-9 col-md-8 col-sm-12">
														<section id="results">
															<header><h2>Productos</h2></header>
															<section id="search-filter">
																<figure><h3><i class="fa fa-search"></i>Search Results:</h3>
																	<span class="search-count">28</span>
																	<div class="sorting">
																		<div class="form-group">
																			<select name="sorting">
																				<option value="">Ordenar por</option>
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
																		<div class="detalles col-md-12 col-sm-12">	
																			<div class="btn-detalles taller col-md-12 col-sm-12 col-xs-12"><a href="property-detail.html"><i class="fa fa-shopping-cart"></i> Buscar vendedores</a></div>
																		</div>
																	</div>
																</div>
																<div class="center col-md-12 col-sm-12">
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
													<section id="description" class="col-md-9 col-sm-8 col-xs-12" style="padding-bottom: 20px;">
														<header><h1>Neumáticos Bridgestone Chile</h1></header>
														<p>Nuestra historia comienza cuando Firestone inicia sus operaciones en Chile hace varias décadas, convirtiéndose en uno de los únicos fabricantes de neumáticos del país. Posteriormente la empresa dejó el mercado vendiendo sus activos a diferentes entidades, incluida la fábrica ubicada en la cuarta región.
														</p>
														<p>Ya en 1983 se crea Neumáticos de Chile S.A., empresa que recuperó la fábrica ubicada en Alto Peñuelas, Coquimbo. Gracias a lo anterior se exportan cantidades significativas de neumáticos radiales textiles y convencionales de automóvil, camioneta y camión a Argentina, Bolivia, Ecuador, Estados Unidos, Perú y países del Caribe, cumpliendo con estrictas normas de seguridad.
														</p>
														<p>A finales del siglo anterior, más específicamente en 1997, Firestone vuelve a Chile y adquiere el total de los activos de Neumáticos de Chile S.A.
														</p>
														<p>Ya en el año 2000, y respondiendo a cambios a nivel global, la empresa cambia su razón social a Bridgestone-Firestone Chile, entidad que además está a cargo del mercado peruano y boliviano.
														</p>
														<p>El 2006 es un año hito para Bridgestone-Firestone Chile ya que se concreta el cierre definitivo de la planta de Alto Peñuelas, trasladando la producción a una planta de última generación en Brasil. Lo anterior marca un profundo proceso de reestructuración de la compañía en Chile, enfatizando en la importación de neumáticos desde principalmente Argentina, Brasil, Costa Rica, Estados Unidos, Japón y México.
														</p>
														<p>En 2009 la filial chilena simplifica su nombre a Bridgestone Chile.
														</p>
														<p>En el 2010 Bridgestone Corporation decide dejar de auspiciar a la Formula 1, orientando recursos publicitarios hacia el futbol, deporte que en América Latina representa ser una pasión de multitudes. Por esto que en los años 2011 y 2012 Bridgestone se transformó en sponsor oficial de la Copa Bridgestone Sudamericana, siendo el 2011 un año clave para Chile, ya que el campeón fue la Universidad de Chile. Lo anterior se complemento por el auspicio que la marca hizo en Chile a diferentes clubes del campeonato nacional.
														</p>
														<p>Hoy la compañía es orgulloso patrocinador oficial de la Copa Bridgestone Libertadores 2013, lo cual genera un positivo impacto en nuestros clientes, aficionados al futbol y medios especializados.
														</p>
													</section>
													<div class="col-md-3 col-sm-4 col-xs-12" style="padding-bottom: 20px;">
														<img alt="" style="width: 100%;" src="assets/img/br-logo-text.jpg">
													</div>
												</div>
												<div class="tab-pane" id="tab3">
													<div class="col-md-12" style="padding-bottom: 20px;">
														<section id="agent-detail">
															<header><h2>Contacto</h2></header>
															<section id="contact-information">
																<div class="row">
																	<div class="col-md-5 col-sm-8">
																		<header><h3>Mapa</h3></header>
																		<div id="contact-map"></div>
																	</div>
																	<div class="col-md-3 col-sm-4">
																		<section id="address">
																			<header><h3>Direción</h3></header>
																			<address>
																				<strong>Dirección</strong><br>
																				Avenida Presidente Kennedy 5735<br>
																				Las Condes, Santiago<br><br>
																				(2) 460 72 00 <br>
																				<a href="mailto:servicioalcliente-Chile@la-bridgestone.com">servicioalcliente-Chile@la-bridgestone.com</a><br>
																			</address>
																		</section>
																		<section id="social">
																			<header><h3>Perfiles sociales</h3></header>
																			<div class="agent-social">
																				<a href="#" class="fa fa-twitter btn btn-grey-dark"></a>
																				<a href="#" class="fa fa-facebook btn btn-grey-dark"></a>
																				<a href="#" class="fa fa-linkedin btn btn-grey-dark"></a>
																			</div>
																		</section>
																	</div>
																	<div class="col-md-4 col-sm-12">
																		<section id="form">
																			<header><h3>Enviarle un mensaje</h3></header>
																			<form role="form" id="form-contact" method="post"  class="clearfix">
																				<div class="row">
																					<div class="col-md-6">
																						<div class="form-group">
																							<label for="form-contact-name">Nombre<em>*</em></label>
																							<input type="text" class="form-control" id="form-contact-name" name="form-contact-name" required>
																						</div>
																					</div>
																					<div class="col-md-6">
																						<div class="form-group">
																							<label for="form-contact-email">Email<em>*</em></label>
																							<input type="email" class="form-control" id="form-contact-email" name="form-contact-email" required>
																						</div>
																					</div>
																				</div>
																				<div class="row">
																					<div class="col-md-12">
																						<div class="form-group">
																							<label for="form-contact-message">Mensaje<em>*</em></label>
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