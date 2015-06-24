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
										<li><a href="mi-vehiculo.php"><i class="fa fa-automobile"></i><span>Mi vehículo</span></a></li>
										<li class="active"><a href="mi-contrasena.php"><i class="fa fa-key"></i><span>Mi cotraseña</span></a></li>
									</ul>
								</aside>
							</section>
						</div>
						<div class="col-md-9 col-sm-10">
							<section id="profile">
								<header><h1>Mi contraseña</h1></header>
								<div>
									<div class="row" style="margin-right: 0px; margin-left: 0px;">
										<div>
											<div class="col-md-12 col-sm-12" style="margin-top: 0px; padding: 0px;">
												<h3>Cambia tus configuraciones básicas de cuenta</h3>
													<form role="form" id="form-contact-agent" method="post"  class="form-horizontal clearfix">
														<div class="well well-sm"><strong><span class="glyphicon glyphicon-asterisk"></span>Required Field</strong></div>
														<div class="form-group">
															<label class="col-sm-3 control-label">texto</label>
															<div class="col-sm-9 input-requerido">
																<input type="text" class="form-control" id="texto" placeholder="" require>
																<span class="input-group-addon"><span class="glyphicon glyphicon-asterisk"></span></span>
															</div>
														</div>
														<div class="form-group">
															<label class="col-sm-3 control-label">Usuario</label>
															<div class="col-sm-9 input-requerido">
																<div class="input-group">
																	<span class="input-group-addon"><i class="glyphicon glyphicon-user"></i></span>
																	<input type="text" class="form-control" placeholder="Username">
																</div>
																<span class="input-group-addon"><span class="glyphicon glyphicon-asterisk"></span></span>
															</div>
														</div>
														<div class="form-group">
															<label class="col-sm-3 control-label">Usuario</label>
															<div class="col-sm-9 input-requerido">
																<div class="input-group">
																	<span class="input-group-addon"><i class="glyphicon glyphicon-lock"></i></span>
																	<input id="login-password" type="password" class="form-control" name="password" placeholder="password">
																</div>
																<span class="input-group-addon"><span class="glyphicon glyphicon-asterisk"></span></span>
															</div>
														</div>
														<div class="form-group">
															<label class="col-sm-3 control-label">Contraseña</label>
															<div class="col-sm-9">
																<input type="password" class="form-control" id="contraseña" placeholder="">
															</div>
														</div>
														<div class="form-group">
															<label class="col-sm-3 control-label">E-mail</label>
															<div class="col-sm-9">
																<input type="email" class="form-control" id="email" placeholder="">
															</div>
														</div>
														<div class="form-group">
															<label class="col-sm-3 control-label">Teléfono</label>
															<div class="col-sm-9">
																<input type="tel" class="form-control" id="telefono" placeholder="">
															</div>
														</div>
														<div class="form-group">
															<label class="col-sm-3 control-label">Número</label>
															<div class="col-sm-9">
																<input type="number" class="form-control" id="numero" placeholder="">
															</div>
														</div>
														<div class="form-group">
															<label class="col-sm-3 control-label">Buscar</label>
															<div class="col-sm-9">
																<input type="search" class="form-control" id="buscar" placeholder="">
															</div>
														</div>
														<div class="form-group">
															<label class="col-sm-3 control-label">Checkbox</label>
															<div class="checkbox espacio col-sm-9">
																<label><input type="checkbox" value="" id="checkbox"></label>
															</div>
														</div>
														<div class="form-group">
															<label class="col-sm-3 control-label">Radio</label>
															<div class="radio espacio col-sm-9">
																<label><input name="RadioGroup1" type="radio" value="opción" id="RadioGroup1_0"></label>
																<label><input name="RadioGroup1" type="radio" value="opción" id="RadioGroup1_1"></label>
															</div>
														</div>
														<div class="form-group">
															<label class="col-sm-3 control-label">Selector</label>
															<div class="col-sm-9">
																<select name="marcas" size="1">
																	<option value="0" selected>select</option>
																	<option value="1">1</option>
																	<option value="2">2</option>
																	<option value="3">3</option>
																</select>
															</div>
														</div>
														<div class="form-group">
															<label class="col-sm-3 control-label">Área de texto</label>
															<div class="col-sm-offset-3 col-sm-9">
																<textarea class="form-control" id="form-contact-agent-message" rows="5" name="form-contact-agent-message">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Cr
																</textarea>
															</div>
														</div>
														<div class="form-group">
															<label class="col-sm-3 control-label">Botón rojo</label>
															<div class="col-sm-9">
																<button type="submit" class="btn btn-default">boton</button>
															</div>
														</div>
														<div class="form-group">
															<label class="col-sm-3 control-label">Botón verde</label>
															<div class="col-sm-9">
																<button type="submit" class="btn btn-verde">boton</button>
															</div>
														</div>
														<div class="form-group">
															<label class="col-sm-3 control-label">Botón azul</label>
															<div class="col-sm-9">
																<button type="submit" class="btn btn-azul">boton</button>
															</div>
														</div>
														<div class="form-group">
															<label class="col-sm-3 control-label">Botón azul</label>
															<div class="col-sm-9">
																<button type="submit" class="btn btn-orange">boton</button>
															</div>
														</div>												
														<div class="form-group">
															<label class="col-sm-3 control-label">Tablas</label>
															<div class="col-sm-9">
																<div class="tablas">
																	<div id="description-table" class="no-border">
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
																	</div>
																</div>
															</div>
														</div>															
													</form>
													<form role="form" id="form-contact-agent" method="post"  class="clearfix">
														<div class="form-group">
															<label for="validate-text">Validate Text</label>
															<div class="input-group">
																<input type="text" class="form-control" name="validate-text" id="validate-text" placeholder="Validate Text" required>
																<span class="input-group-addon danger"><span class="glyphicon glyphicon-remove"></span></span>
															</div>
														</div>
														<div class="form-group">
															<label for="validate-optional">Optional</label>
															<div class="input-group">
																<input type="text" class="form-control" name="validate-optional" id="validate-optional" placeholder="Optional">
																<span class="input-group-addon info"><span class="glyphicon glyphicon-asterisk"></span></span>
															</div>
														</div>
														<div class="form-group">
															<label for="validate-optional">Already Validated!</label>
															<div class="input-group">
																<input type="text" class="form-control" name="validate-text" id="validate-text" placeholder="Validate Text" value="Validated!" required>
																<span class="input-group-addon danger"><span class="glyphicon glyphicon-remove"></span></span>
															</div>
														</div>
														<div class="form-group">
															<label for="validate-email">Validate Email</label>
															<div class="input-group" data-validate="email">
																<input type="text" class="form-control" name="validate-email" id="validate-email" placeholder="Validate Email" required>
																<span class="input-group-addon danger"><span class="glyphicon glyphicon-remove"></span></span>
															</div>
														</div>
														<div class="form-group">
															<label for="validate-phone">Validate Phone</label>
															<div class="input-group" data-validate="phone">
																<input type="text" class="form-control" name="validate-phone" id="validate-phone" placeholder="(814) 555-1234" required>
																<span class="input-group-addon danger"><span class="glyphicon glyphicon-remove"></span></span>
															</div>
														</div>
														<div class="form-group">
															<label for="validate-length">Minimum Length</label>
															<div class="input-group" data-validate="length" data-length="5">
																<textarea type="text" class="form-control" name="validate-length" id="validate-length" placeholder="Validate Length" required></textarea>
																<span class="input-group-addon danger"><span class="glyphicon glyphicon-remove"></span></span>
															</div>
														</div>
														<div class="form-group">
															<label for="validate-select">Validate Select</label>
															<div class="input-group">
																<select class="form-control" name="validate-select" id="validate-select" placeholder="Validate Select" required>
																	<option value="">Select an item</option>
																	<option value="item_1">Item 1</option>
																	<option value="item_2">Item 2</option>
																	<option value="item_3">Item 3</option>
																</select>
																<span class="input-group-addon danger"><span class="glyphicon glyphicon-remove"></span></span>
															</div>
														</div>
														<div class="form-group">
															<label for="validate-number">Validate Number</label>
															<div class="input-group" data-validate="number">
																<input type="text" class="form-control" name="validate-number" id="validate-number" placeholder="Validate Number" required>
																<span class="input-group-addon danger"><span class="glyphicon glyphicon-remove"></span></span>
															</div>
														</div>
														<div class="form-group">
															<label class="col-sm-3 control-label">Botón azul</label>
															<div class="col-sm-9">
																<button type="submit" class="btn btn-azul">boton</button>
															</div>
															<a href="http://bootsnipp.com/snippets/featured/input-validation-colorful-input-groups">enlace</a>
														</div>
													</form>
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
		<!-- validador -->
		<script type="text/javascript" src="assets/js/validador.js"></script>
		<!-- validador -->
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