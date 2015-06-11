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
										<li><a href="profile.html"><i class="fa fa-user"></i><span>Perfil</span></a></li>
										<li class="active"><a href="my-properties.html"><i class="fa fa-home"></i><span>Mis Productos</span></a></li>
										<li><a href="bookmarked.html"><i class="fa fa-heart"></i><span>Bookmarked Properties</span></a></li>
									</ul>
								</aside>
							</section>
						</div>
						<div class="col-md-9 col-sm-10">
							<section id="results">
								<header><h1>Mis Productos</h1></header>
								<div class="row">
									<div class="col-md-12 col-sm-12">
										<h2>Filtro de Busqueda</h2>
										<div class="row">
											<section id="sidebar">
												<aside id="edit-search">
													<form role="form" id="form-sidebar" class="form-search" action="properties-listing.html">
														<div class="form-group col-md-2 col-sm-4 col-xs-4">
															<select name="ancho" size="1">
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
														<div class="form-group col-md-2 col-sm-4 col-xs-4">
															<select name="perfil" size="1">
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
														<div class="form-group col-md-2 col-sm-4 col-xs-4">
															<select name="aro" size="1">
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
														<div class="form-group col-md-6 col-sm-6">
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
														<div class="form-group col-md-4 col-sm-6">
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
														<div class="form-group col-md-4 col-sm-6">
															<select name="especifico">
																<option value="">Neumáticos Específicos</option>
																<option value="1">Antipinchazos</option>
																<option value="2">No antipinchazos</option>
																<option value="3">Reforzados</option>
																<option value="4">No reforzados</option>
															</select>
														</div>
														<div class="form-group col-md-4 col-sm-6">
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
														<div class="form-group col-md-12 col-sm-12">
															<button type="submit" class="btn btn-default">Search Now</button>
														</div>
													</form>
												</aside>
											</section>
										</div>
									</div>
								</div>
								<div class="row col-lg-6 col-md-6 col-sm-6">
									<section id="search-filter">
										<figure><h3><i class="fa fa-search"></i>Search Results:</h3>
											<span class="search-count">28</span>
										</figure>
									</section>
								</div>
								<div class="row col-lg-6 col-md-6 col-sm-6">
									<div class="ingresar-producto"><a href="property-detail.html"><i class="fa fa-plus-square"></i> Ingresar nuevo producto</a></div>
								</div>
								<section id="properties" class="display-lines">
									<div class="producto col-lg-12 col-md-12 col-sm-12">
										<div class="marco">
											<div class="margen col-md-3 col-sm-3 col-xs-6">
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
												<div class="checkbox">
													<label>
														<input type="checkbox">
														comparar
													</label>
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
												<div class="btn-detalles taller col-md-12 col-sm-12 col-xs-6"><a href="property-detail.html"><i class="fa fa-edit"></i> Editar</a></div>
												<div class="btn-detalles taller col-md-12 col-sm-12 col-xs-6"><a href="property-detail.html"><i class="fa fa-trash-o"></i> Eliminar</a></div>
											</div>
										</div>
									</div>
									<div class="col-md-12 col-sm-12">
										<div class="center">
											<ul class="pagination">
												<li class="active"><a href="#">1</a></li>
												<li><a href="#">2</a></li>
												<li><a href="#">3</a></li>
												<li><a href="#">4</a></li>
												<li><a href="#">5</a></li>
											</ul>
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
		<script>
			var _latitude = 48.87;
			var _longitude = 2.29;

			google.maps.event.addDomListener(window, 'load', initSubmitMap(_latitude,_longitude));
		</script>
		<script>
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