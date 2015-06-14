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
						<li class="active">Agencies Listing</li>
					</ol>
				</div>
				<div class="container">
					<div class="row">
						<div class="col-xs-12  hidden-lg hidden-md hidden-sm">
							<header>
							<h1>Vendedores de neumáticos en Santiago</h1></header>
						</div>
						<div class="col-lg-3 col-md-4 col-sm-5 col-xs-12 hidden-xs">
							<section id="sidebar">
								<aside id="edit-search">
									<header><h3>Buscar en otras ciudades</h3></header>
									<form role="form" id="form-sidebar" class="form-search" action="properties-listing.html">
										<div class="form-group">
											<select name="type">
												<option value="">Región Metropolitana</option>
											</select>
										</div>
										<div class="form-group">
											<select name="country">
												<option value="">Santiago</option>
											</select>
										</div>
										<div class="form-group">
											<button type="submit" class="btn btn-default">Buscar</button>
										</div>
									</form>
								</aside>
							</section>
							
							<div class="ads">
								<div class="ads-250">ads
								</div>
								<div class="ads-250">ads
								</div>
							</div>
							<section id="description" class="hidden-xs">
                                <header>
                                <h1>Vendedores de neumáticos en Santiago</h1></header>
								<p>
								Al fin una llanta que permite a los conductores de cualquier vehículo, en cualquier carretera, maximizar el placer de conducir. Desde el momento en que cambie de velocidad y de vuelta al volante, la RE760 Sport entra en acción dándole una rápida respuesta y precisión en el control. Quedará impresionado con su poderoso agarre y estabilidad en condiciones secas y mojadas. Y al combinar el estimulante desempeño en la capa de rodamiento optimizado que reduce el ruido, es probable que se vuelva adicto a las carreteras. • El diseño espectacular y deportivo que esta llanta ofrece, cautiva desde el primer momento</p>
                            </section>
						</div>
						<div class="col-lg-9 col-md-8 col-sm-7 col-xs-12">
							<section id="agencies-listing">
								<div class="hidden-xs">
									<header>
									<h3>Vendedores de neumáticos en Santiago</h3></header>
								</div>
								<?php
									include('taller-box.php');
								?>
								<?php
									include('taller-box.php');
								?>
								<?php
									include('taller-box.php');
								?>
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
						</div>
						<div class="col-lg-3 col-md-4 col-sm-5 col-xs-12 hidden-lg hidden-md hidden-sm">
							<section id="sidebar">
								<aside id="edit-search">
									<header><h3>Buscar en otras ciudades</h3></header>
									<form role="form" id="form-sidebar" class="form-search" action="properties-listing.html">
										<div class="form-group">
											<select name="type">
												<option value="">Región Metropolitana</option>
											</select>
										</div>
										<div class="form-group">
											<select name="country">
												<option value="">Santiago</option>
											</select>
										</div>
										<div class="form-group">
											<button type="submit" class="btn btn-default">Buscar</button>
										</div>
									</form>
								</aside>
							</section>
							
							<div class="ads">
								<div class="ads-250">ads
								</div>
								<div class="ads-250">ads
								</div>
							</div>
							<section id="description">
								<p>
								Al fin una llanta que permite a los conductores de cualquier vehículo, en cualquier carretera, maximizar el placer de conducir. Desde el momento en que cambie de velocidad y de vuelta al volante, la RE760 Sport entra en acción dándole una rápida respuesta y precisión en el control. Quedará impresionado con su poderoso agarre y estabilidad en condiciones secas y mojadas. Y al combinar el estimulante desempeño en la capa de rodamiento optimizado que reduce el ruido, es probable que se vuelva adicto a las carreteras. • El diseño espectacular y deportivo que esta llanta ofrece, cautiva desde el primer momento</p>
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