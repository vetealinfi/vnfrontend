<!DOCTYPE html>

<html lang="en-US">
	<?php
		include('head.php');
	?>
	<body class="navigation-fixed-top page-invoice">
		<div class="wrapper">
			<?php
				include('header.php');
			?>
			<div id="page-content">
				<div class="container">
					<ol class="breadcrumb">
						<li><a href="#">Home</a></li>
						<li class="active">Invoice</li>
					</ol>
				</div>
				<div class="container">
					<div class="row">
						<div class="col-md-8 col-md-offset-2">
							<div class="row">
								<div class="right col-md-12 hidden-sm hidden-xs">
									<a href="javascript:window.print()" class="button-icon btn btn-default"><i class="fa fa-print"></i>Imprimir cotización</a>
								</div>
							</div>
							<div class="invoice">
								<section>
									<table>
										<tr>
											<td><h1>Cotización</h1></td>
											<td id="number" class="text-align-right hidden-xs">
												<figure>Número:</figure>
												<h3>05834</h3>
											</td>
											<td id="date" class="text-align-right hidden-xs">
												<figure>Fecha:</figure>
												<h3>12/06/15</h3>
											</td>
										</tr>
									</table>
									<table class="hidden-lg hidden-md hidden-sm">
										<tr>
											<td id="number" class="text-align-right">
												<figure>Número:</figure>
												<h3>05834</h3>
											</td>
											<td id="date" class="text-align-right">
												<figure>Fecha:</figure>
												<h3>12/06/15</h3>
											</td>
										</tr>
									</table>
								</section>
								<section>
									<div class="row">
											<div class="detalle col-md-6 col-sm-6 col-xs-6">
												<aside>
													<h2>De</h2>
													<address>
														<div class="title">Juan</div>
														<div class="address-line">4635 Deans Lane</div>
														<div class="address-line">New York, NY 10019</div>
													</address>
													<div class="contact-info">
														<dl>
															<dt>Phone:</dt>
															<dd>914-740-1421</dd>
															<dt>Email:</dt>
															<dd>your.company@example.com</dd>
															<dt>Website:</dt>
															<dd>www.example.com</dd>
														</dl>
													</div>
												</aside>
											</div>
											<div class="detalle col-md-6 col-sm-6  col-xs-6">
												<aside>
													<div id="contact-map"></div>
												</aside>
											</div>
									</div>
								</section>
								<div class="row">
									<div class="col-md-4 col-sm-4 col-xs-6">	
										<section class="center no-border" id="description">
											<img src="assets/img/properties/property-03-print.jpg" alt="" style="max-width: 100%;">
										</section>
									</div>
									<div class="col-md-8 col-sm-8 col-xs-6">
										<section class="no-border" id="description">
											<h2>Detalle producto</h2>
											<dl>
												<dt>MARCA</dt>
												<dd><div class="property imagen-marca-ficha"><img alt="" src="assets/img/logo-bridgestone.jpg"></div></dd>
												<dt>FAMILIA</dt>
												<dd>Turanza</dd>
												<dt>MODELO</dt>
												<dd>4763 Capitol Avenue</dd>
												<dt>MEDIDAS</dt>
												<dd>Indianapolis</dd>
												<dt>ÍNDICE DE CARGA/VEL.</dt>
												<dd>IN</dd>
												<dt>ESTACIÓN</dt>
												<dd>46278</dd>
												<dt>TIPO DE TERRENO</dt>
												<dd>46278</dd>
												<dt>ANTIPINCHAZO</dt>
												<dd>46278</dd>
												<dt>REFORZADO</dt>
												<dd>46278</dd>
											</dl>
										</section>
									</div>
								</div>
								<section id="description-table" class="no-border">
									<table>
										<thead>
										<tr>
											<th>Descripcion</th>
											<th>Catidad</th>
											<th>Precio unidad</th>
											<th>% DCTO.</th>
											<th>Precio total</th>
										</tr>
										</thead>
										<tbody>
										<tr>
											<td>Bridgestone Turanza...</td>
											<td class="center">1</td>
											<td>$8,000</td>
											<td class="center">0%</td>
											<td>$8,000</td>
										</tr>
										</tbody>
									</table>
								</section>
								<section class="text-align-right" id="subtotal">
									<aside>
										<figure><strong>Subtotal:</strong></figure>
										<figure><strong>Total descuento:</strong></figure>
									</aside>
									<aside>
										<figure>$86,000</figure>
										<figure>$7000</figure>
									</aside>
								</section>
								<section id="summary">
									<h2 class="no-bottom-margin">Total:</h2>
									<figure>$79,000</figure>
								</section>
								<section>
									<h4>Nota:</h4>
									<p>Los precios pueden variar sin previo aviso según disponga el vendedor. Cotización no válida como orden de compra.
									</p>
								</section>
							</div>
						</div>
					</div><!-- /.row -->
				</div><!-- /.container -->
			</div>
			<!-- end Page Content -->
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