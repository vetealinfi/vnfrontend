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
						<div class="col-lg-3 col-md-4 col-sm-4 col-xs-12">
							<section id="sidebar">
								<aside id="edit-search">
									<header><h3>Search Properties</h3></header>
									<form role="form" id="form-sidebar" class="form-search" action="properties-listing.html">
										<div class="form-group">
											<select name="type">
												<option value="">Status</option>
												<option value="1">Rent</option>
												<option value="2">Sale</option>
											</select>
										</div>
										<div class="form-group">
											<select name="country">
												<option value="">Country</option>
												<option value="1">France</option>
												<option value="2">Great Britain</option>
												<option value="3">Spain</option>
												<option value="4">Russia</option>
												<option value="5">United States</option>
											</select>
										</div>
										<div class="form-group">
											<select name="city">
												<option value="">City</option>
												<option value="1">New York</option>
												<option value="2">Los Angeles</option>
												<option value="3">Chicago</option>
												<option value="4">Houston</option>
												<option value="5">Philadelphia</option>
											</select>
										</div>
										<div class="form-group">
											<select name="district">
												<option value="">District</option>
												<option value="1">Manhattan</option>
												<option value="2">The Bronx</option>
												<option value="3">Brooklyn</option>
												<option value="4">Queens</option>
												<option value="5">Staten Island</option>
											</select>
										</div>
										<div class="form-group">
											<select name="property-type">
												<option value="">Property Type</option>
												<option value="1">Apartment</option>
												<option value="2">Condominium</option>
												<option value="3">Cottage</option>
												<option value="4">Flat</option>
												<option value="5">House</option>
											</select>
										</div>
										<div class="form-group">
											<div class="price-range">
												<input id="price-input" type="text" name="price" value="1000;299000">
											</div>
										</div>
										<div class="form-group">
											<button type="submit" class="btn btn-default">Search Now</button>
										</div>
									</form>
								</aside>
							</section>
						</div>
						<div class="col-lg-9 col-md-8 col-sm-8 col-xs-12">
							<section id="agencies-listing">
								<header><h1>Vendedores de neumáticos</h1></header>
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