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
							<section id="profile">
								<header><h1>Ingresar/Editar Producto</h1></header>
								<form role="form" id="form-submit" class="form-submit" action="thank-you.html">
									<section id="producto">
										<div class="col-md-12">
												<h3>Producto</h3>
										</div>
										<div class="form-group col-md-4 col-sm-4 col-xs-12">
											<select name="type" id="submit-location">
												<option value="1">Marca</option>
												<option value="2">Los Angeles</option>
											</select>
										</div>
										<div class="form-group col-md-4 col-sm-4 col-xs-12">
											<select name="type" id="submit-location">
												<option value="1">Familia</option>
												<option value="2">Los Angeles</option>
											</select>
										</div>
										<div class="form-group col-md-4 col-sm-4 col-xs-12">
											<select name="type" id="submit-location">
												<option value="1">Modelo</option>
												<option value="2">Los Angeles</option>
											</select>
										</div>
										<div class="form-group col-md-3 col-sm-3 col-xs-4">
											<select name="type" id="submit-location">
												<option value="1">Ancho</option>
												<option value="2">Los Angeles</option>
											</select>
										</div>
										<div class="form-group col-md-3 col-sm-3 col-xs-4">
											<select name="type" id="submit-location">
												<option value="1">Perfil</option>
												<option value="2">Los Angeles</option>
											</select>
										</div>
										<div class="form-group col-md-3 col-sm-3 col-xs-4">
											<select name="type" id="submit-location">
												<option value="1">Aro</option>
												<option value="2">Los Angeles</option>
											</select>
										</div>
										<div class="form-group col-md-3 col-sm-3 col-xs-12">
											<select name="type" id="submit-location">
												<option value="1">Carga/Velocidad</option>
												<option value="2">Los Angeles</option>
											</select>
										</div>
									</section>
									<section id="servicios-vendedor">
										<div class="col-md-12">
											<h3>Servicios asociados del vendedor</h3>
										</div>
										<div class="form-group col-md-3 col-sm-3 col-xs-6">
											<select name="type" id="submit-location">
												<option value="1">Instalación</option>
												<option value="2">Los Angeles</option>
											</select>
										</div>
										<div class="form-group col-md-3 col-sm-3 col-xs-6">
											<select name="type" id="submit-location">
												<option value="1">Balanceo</option>
												<option value="2">Los Angeles</option>
											</select>
										</div>
										<div class="form-group col-md-3 col-sm-3 col-xs-6">
											<select name="type" id="submit-location">
												<option value="1">Alineación</option>
												<option value="2">Los Angeles</option>
											</select>
										</div>
												<div class="form-group col-md-3 col-sm-3 col-xs-6">
											<select name="type" id="submit-location">
												<option value="1">Despacho</option>
												<option value="2">Los Angeles</option>
											</select>
										</div>
									</section>
									<section id="precio">
										<div class="col-md-12">
											<h3>Precio</h3>
										</div>
										<div class="form-group col-md-6 col-sm-6">
											<label for="submit-email">Precio Normal</label>
											<input type="text" class="form-control" id="submit-email" name="email">
										</div>
										<div class="form-group col-md-6 col-sm-6">
											<label for="submit-email">Precio Descuento</label>
											<input type="text" class="form-control" id="submit-email" name="email">
										</div>
										<div class="col-md-12">
											<div class="checkbox">
												<label>
													<input type="checkbox">
													Acepto los cambios o creación de este producto <i class="fa fa-question-circle tool-tip"  data-toggle="tooltip" data-placement="right" title="Users can give you a stars rating which is displayed in property detail"></i>
												</label>
											</div>
										</div>
									</section>
									<hr class="thick" style="margin-top: 20px;">
									<div class="row">
										<div class="col-md-12 col-sm-12">
											<div class="center">
												<div class="form-group col-md-6 col-sm-6">
													<button type="submit" class="btn btn-default large">Cancelar</button>
												</div>
											</div>
											<div class="center">
												<div class="form-group col-md-6 col-sm-6">
													<button type="submit" class="btn btn-default large">Guardar Cambios</button>
												</div>
											</div>
										</div>
									</div>
								</form>
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