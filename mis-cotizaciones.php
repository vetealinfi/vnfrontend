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
										<li class="active"><a href="mis-cotizaciones.php"><i class="fa fa-inbox"></i><span>Mis cotizaciones</span></a></li>
										<li><a href="mis-favoritos.php"><i class="fa fa-heart"></i><span>Mis favoritos</span></a></li>
										<li><a href="mi-perfil.php"><i class="fa fa-user"></i><span>Mi perfil</span></a></li>
										<li><a href="mi-vehiculo.php"><i class="fa fa-automobile"></i><span>Mi vehículo</span></a></li>
										<li><a href="mi-contrasena.php"><i class="fa fa-key"></i><span>Mi cotraseña</span></a></li>
									</ul>
								</aside>
							</section>
						</div>
						<div class="col-md-9 col-sm-10">
							<section id="profile">
								<header><h1>Mis cotizaciones</h1></header>
								<div class="producto col-lg-12 col-md-12 col-sm-12">
									<div class="marco">
										<div class="margen2 col-md-3 col-sm-3 col-xs-6">
											<figure class="ribbon">30% dcto</figure>
											<a href="ficha-producto.html">
												<img alt="" src="assets/img/properties/property-03.jpg">
											</a>
										</div>
										<div class="detalles col-md-3 col-sm-3 col-xs-6">
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
										</div>
										<div class="detalles col-md-3 col-sm-3 col-xs-12">
											<header>
												<figure>SERVICIOS ASOCIADOS DEL VENDEDOR</figure>
											</header>
											
											<aside>
												<dl><div class="detalles col-md-12 col-sm-12 col-xs-6">
													<dt>Instalación</dt>
													<dd>SI</dd>
													<dt>Balanceo</dt>
													<dd>SI</dd>
													</div>
													<div class="detalles col-md-12 col-sm-12 col-xs-6">
														<dt>Alineación</dt>
														<dd>SI</dd>
														<dt>Despacho</dt>
														<dd>SI</dd>
													</div>
												</dl>
											</aside>
										</div>
										<div class="detalles col-md-3 col-sm-3">
											<div class="precio">$100.000</div>
											<div class="precio-back">Antes $100.000</div>
											<div class="btn-detalles taller col-md-12 col-sm-12 col-xs-6"><a href="cotizacion.php"><i class="fa fa-search-plus"></i> Ver detalles</a></div>
											<div class="btn-detalles taller col-md-12 col-sm-12 col-xs-6"><a href="#"><i class="fa fa-trash-o"></i> Eliminar</a></div>
										</div>
									</div>
								</div><!-- /.property -->
							</section>
							<div class="invoice">
								<section>
									<h4>Nota:</h4>
									<p>Cotizaciónes por verificar con vendedor, no válidas como orden de compra o reservación de productos. Los precios o stock pueden variar sin previo aviso según disponga el vendedor. Los productos y sus precios pueden aparecer en el sistema, pero no necesariamente disponibles por el vendedor.
									</p>
								</section>
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