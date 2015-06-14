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
										<li><a href="mis-cotizaciones.php"><i class="fa fa-inbox"></i><span>Mis cotizaciones</span></a></li>
										<li><a href="mis-favoritos.php"><i class="fa fa-heart"></i><span>Mis favoritos</span></a></li>
										<li><a href="mi-perfil.php"><i class="fa fa-user"></i><span>Mi perfil</span></a></li>
										<li class="active"><a href="mi-vehculo.php"><i class="fa fa-automobile"></i><span>Mi vehículo</span></a></li>
										<li><a href="mi-contrasena.php"><i class="fa fa-key"></i><span>Mi Cotraseña</span></a></li>
									</ul>
								</aside>
							</section>
						</div>
						<div class="col-md-9 col-sm-10">
							<section id="profile">
								<header><h1>Mi vehículo</h1></header>
								<div class="account-profile">
									<div class="row" style="margin-right: 0px; margin-left: 0px;">
										<div>
											<div class="col-md-12 col-sm-12" style="margin-top: 0px; padding: 0px;">
												<h3>Ingresa la información de tu vehículo</h3>
												<div class="agent-form">
													<form role="form" id="form-contact-agent" method="post"  class="form-horizontal clearfix">
														<div class="form-group">
															<label for="inputEmail3" class="col-sm-3 control-label">Marca</label>
															<div class="col-sm-9">
																<select name="marcas" size="1">
																	<option value="0" selected>Seleccionar marca</option>
																	<option value="1">02</option>
																</select>
															</div>
														</div>
														<div class="form-group">
															<label for="inputEmail3" class="col-sm-3 control-label">Modelo</label>
															<div class="col-sm-9">
																<select name="marcas" size="1">
																	<option value="0" selected>Seleccionar modelo</option>
																	<option value="1">02</option>
																</select>
															</div>
														</div>
														<div class="form-group">
															<label for="inputPassword3" class="col-sm-3 control-label">Versión</label>
															<div class="col-sm-9">
																<select name="marcas" size="1">
																	<option value="0" selected>Seleccionar versión</option>
																	<option value="1">02</option>
																</select>
															</div>
														</div>
														<div class="form-group">
															<label for="inputPassword3" class="col-sm-3 control-label">Año</label>
															<div class="col-sm-9">
																<select name="marcas" size="1">
																	<option value="0" selected>Seleccionar año</option>
																	<option value="1">02</option>
																</select>
															</div>
														</div>
														<div class="form-group">
															<div class="col-sm-offset-3 col-sm-9">
																<button type="submit" class="btn btn-default">Guardar cambios</button>
															</div>
														</div>
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