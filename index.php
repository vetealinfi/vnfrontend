<!DOCTYPE html>

<html lang="en-US">
	<?php
		include('head.php');
	?>
	<body class="navigation-fixed-top">
		<?php include_once("analyticstracking.php") ?>
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
										<img src="assets/img/slide-home.gif" class="" alt="venta neumaticos" />
										<div class="carousel-caption">
										...
										</div>
									</div>
									<div class="item">
										<img src="assets/img/slide-home.gif" class="" alt="venta neumaticos" />
										<div class="carousel-caption">
										...
										</div>
									</div>
									<div class="item">
										<img src="assets/img/slide-home.gif" alt="venta neumaticos" />
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
											<div class="col-md-12">
												<div class="center ayuda-index col-md-12">
													<a href="#" data-toggle="modal" data-target=".inicio"><i class="fa fa-question"></i></a>
												</div>
											</div>
										</div>
										<div class="row parrent media-body">
											<div class="tab-content">
												<div class="tab-pane active" id="tab1">
													<div class="col-md-12 col-sm-12">
														<section id="sidebar">
															<aside id="edit-search">
																<form role="form" id="form-sidebar" class="form-search" action="properties-listing.html">
																	<div class="form-group form-right col-xs-4" style="padding-right: 6px;">
																		<select name="marcas" size="3">
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
																	<div class="form-group form-center col-xs-4" style="padding-right: 3px; padding-left: 3px;">
																		<select name="marcas" size="1">
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
																	<div class="form-group form-left col-xs-4" style="padding-left: 6px;">
																		<select name="marcas" size="1">
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
																		<select name="marcas" size="1">
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
																		<select name="marcas" size="1">
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
																		<select name="marcas" size="3">
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
																		<select name="marcas" size="1">
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
																		<select name="marcas" size="1">
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
			<section id="publicidad" class="block back-service">
				<section id="our-services" class="block back-service0">
					<div class="container">
						<div class="row">
							<div class="ads">
								<div class="col-md-4 col-sm-12 col-xs-12">
									<div class="row">
										<div class="ads-300  hidden-sm  hidden-xs">ads</div>
										<div class="ads-728  hidden-lg hidden-md hidden-xs">ads</div>
										<div class="ads-320  hidden-lg hidden-md hidden-sm">ads</div>
									</div>
								</div>
								<div class="col-md-4 col-sm-12 col-xs-12">
									<div class="row">
										<div class="ads-300  hidden-sm  hidden-xs">ads</div>
										<div class="ads-728  hidden-lg hidden-md hidden-xs">ads</div>
										<div class="ads-320  hidden-lg hidden-md hidden-sm">ads</div>
									</div>
								</div>
								<div class="col-md-4 col-sm-12 col-xs-12">
									<div class="row">
										<div class="ads-300  hidden-sm  hidden-xs"></div>
										<div class="ads-728  hidden-lg hidden-md hidden-xs"></div>
										<div class="ads-320  hidden-lg hidden-md hidden-sm"></div>
									</div>
								</div>
							</div>
						</div>
					</div>
				</section>
				<section id="our-services" class="block back-service1">
					<div class="container">
						<header class="section-title"><h1>Servicios Venta Neumáticos en todo Chile</h1></header>
						<div class="row">
							<div class="col-md-4 col-sm-4 col-xs-12">
								<div class="feature-box col-md-4 col-sm-6 col-xs-3">
									<figure class="icon"><img src="assets/img/vendedores-en-todo-chile.png" alt="vendedores en todo Chile"></figure>
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
									<figure class="icon"><img src="assets/img/facturas-rapidas.png" alt="cotizaciones rapidas en neumaticos"></figure>
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
									<figure class="icon"><img src="assets/img/variedad-marcas.png" alt="variedad de marcas de neumaticos"></figure>
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
					</section>
				</section>
			</section>
			<section id="partners" class="block">
				<div class="container">
					<header class="section-title-2"><h2>Our Partners</h2></header>
					<div class="logos">
						<div class="logo"><a href=""><img src="assets/img/logo-partner-01.png" alt="partner 1"></a></div>
						<div class="logo"><a href=""><img src="assets/img/logo-partner-02.png" alt="partner 2"></a></div>
						<div class="logo"><a href=""><img src="assets/img/logo-partner-03.png" alt="partner 3"></a></div>
						<div class="logo"><a href=""><img src="assets/img/logo-partner-04.png" alt="partner 4 "></a></div>
						<div class="logo"><a href=""><img src="assets/img/logo-partner-05.png" alt="partner 5"></a></div>
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
			<div class="modal fade inicio" role="dialog" aria-labelledby="gridSystemModalLabel" aria-hidden="true">
				<div class="modal-dialog">
					<div class="modal-content">
						<div class="modal-header">
							<button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
							<h4 class="center modal-title" id="gridSystemModalLabel">¿CÓMO BUSCAR NEUMÁTICOS?</h4>
						</div>
						<div class="modal-body">
							<div class="container-fluid">
								<div class="row">
									<div class="center col-lg-12">
										<div class="center col-md-12">
											Busca por la medida del neumático
										</div>
										<img alt="medida de neumatico" src="assets/img/medida.png" style="margin-top: 10px; margin-bottom: 10px; max-width: 230px;">
										<div class="col-lg-12">
										  <section id="description">
												<p style="margin-top: 10px;">Al fin una llanta que permite a los conductores de cualquier vehículo, en cualquier carretera, maximizar el placer de conducir.
												</p>
											</section>
										</div>
										<div class="center borde-registrar col-md-12">
											Busca por el vehículo
										</div>
										<div class="col-lg-12">
											<section id="description">
												<p style="margin-top: 10px;">Al fin una llanta que permite a los conductores de cualquier vehículo, en cualquier carretera, maximizar el placer de conducir.
												</p>
											</section>
										</div>
									</div>
								</div>
							</div>
						</div>
					</div><!-- /.modal-content -->
				</div><!-- /.modal-dialog -->
			</div><!-- /.modal -->
			
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
		
		<script type="text/javascript" src="assets/js/waypoints.min.js"></script>
		<script type="text/javascript" src="assets/js/jquery.countTo.js"></script>
		
	</body>
</html>