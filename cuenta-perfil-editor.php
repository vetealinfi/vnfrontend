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
										<li class="active"><a href="profile.html"><i class="fa fa-user"></i><span>Perfil</span></a></li>
										<li><a href="my-properties.html"><i class="fa fa-home"></i><span>Mis Productos</span></a></li>
										<li><a href="bookmarked.html"><i class="fa fa-heart"></i><span>Bookmarked Properties</span></a></li>
									</ul>
								</aside>
							</section>
						</div>
						<div class="col-md-9 col-sm-10">
							<section id="profile">
								<header><h1>Editar Perfil</h1></header>
								<form role="form" id="form-submit" class="form-submit" action="thank-you.html">
									<section id="nombre-empresa">
										<div class="col-md-8 col-sm-12">
											<h3>Nombre de la Empresa</h3>
											<div class="form-group">
												<input type="text" class="form-control" id="submit-nombreempresa" name="nombreempresa">
											</div><!-- /.form-group -->
										</div>
									</section>
									<section id="logotipo">
										<div class="col-md-4">
											<h3>Logotipo</h3>
										</div>
										<div class="center col-md-4 col-sm-12">
											<div class="form-group">
												<input id="file-upload" type="file" class="file" multiple="true" data-show-upload="false" data-show-caption="false" data-show-remove="false" accept="image/jpeg,image/png" data-browse-class="btn btn-default" data-browse-label="Buscar Imagen">
												<figure class="note"><strong>Hint:</strong> You can upload all images at once!</figure>
											</div>
										</div>
									</section>
									<section id="carusel">
										<div class="col-md-12">
											<h3>Carrusel</h3>
										</div>
										<div class="center col-md-4 col-sm-12">
											<div class="form-group">
												<input id="file-upload" type="file" class="file" multiple="true" data-show-upload="false" data-show-caption="false" data-show-remove="false" accept="image/jpeg,image/png" data-browse-class="btn btn-default" data-browse-label="Buscar Imagen">
												<figure class="note"><strong>Hint:</strong> You can upload all images at once!</figure>
											</div>
										</div>
										<div class="center col-md-4 col-sm-12">
											<div class="form-group">
												<input id="file-upload" type="file" class="file" multiple="true" data-show-upload="false" data-show-caption="false" data-show-remove="false" accept="image/jpeg,image/png" data-browse-class="btn btn-default" data-browse-label="Buscar Imagen">
												<figure class="note"><strong>Hint:</strong> You can upload all images at once!</figure>
											</div>
										</div>
										<div class="center col-md-4 col-sm-12">
											<div class="form-group">
												<input id="file-upload" type="file" class="file" multiple="true" data-show-upload="false" data-show-caption="false" data-show-remove="false" accept="image/jpeg,image/png" data-browse-class="btn btn-default" data-browse-label="Buscar Imagen">
												<figure class="note"><strong>Hint:</strong> You can upload all images at once!</figure>
											</div>
										</div>
									</section>
									<hr class="thick" style="margin-top: 20px;">
									<section class="col-md-6 col-sm-12" id="about-me">
										<h3>Información Básica</h3>
										<div class="form-group">
										  <textarea class="form-control" id="form-contact-agent-message" rows="6" name="form-contact-agent-message">
												Lorem ipsum dolor sit amet, consectetur adipiscing elit. Cras et dui vestibulum, bibendum purus sit amet, vulputate mauris. Ut adipiscing gravida tincidunt. Duis euismod placerat rhoncus.
												Phasellus mollis imperdiet placerat. Sed ac turpis nisl. Mauris at ante mauris. Aliquam posuere fermentum lorem, a aliquam mauris rutrum.</textarea>
										</div>
									</section>
									<section class="col-md-6 col-sm-12" id="social">
										<h3>Información Redes Sociales</h3>
										<div class="form-group">
											<div class="input-group">
												<span class="input-group-addon">
													<i class="fa fa-twitter"></i>
												</span>
												<input type="text" class="form-control" id="account-social-twitter" name="account-social-twitter">
											</div>
										</div>
										<div class="form-group">
											<div class="input-group">
												<span class="input-group-addon">
													<i class="fa fa-facebook"></i>
												</span>
												<input type="text" class="form-control" id="account-social-facebook" name="account-social-facebook">
											</div>
										</div>
										<div class="form-group">
											<div class="input-group">
												<span class="input-group-addon">
													<i class="fa fa-pinterest"></i>
												</span>
												<input type="text" class="form-control" id="account-social-pinterest" name="account-social-pinterest">
											</div>
										</div>
									</section>
									<hr class="thick" style="margin-top: 20px;">
									<section class="col-md-6 col-sm-12" id="place-on-map">
										<h3>Ubicación en Mapa</h3>
										<span class="link-arrow geo-location">Ir a mi bicación</span>
										<div class="form-group">
											<input type="text" class="form-control" id="address-map" name="address">
										</div>
										<label for="address-map">Y/O arrastra el marcador a la posición a la ubicación</label>
										<div id="submit-map"></div>
										<div class="row">
											<div class="col-md-6">
												<div class="form-group">
													<input type="text" class="form-control" id="latitude" name="latitude" readonly>
												</div>
											</div>
											<div class="col-md-6">
												<div class="form-group">
													<input type="text" class="form-control" id="longitude" name="longitude" readonly>
												</div>
											</div>
										</div>
									</section>
									<section class="col-md-6 col-sm-12" id="summary">
										<h3>Datos de Contacto</h3>
										<div class="form-group">
											<label for="submit-location">Región</label>
											<select name="type" id="submit-location">
												<option value="1">Selecciona una Región</option>
												<option value="2">Los Angeles</option>
											</select>
										</div>
										<div class="form-group">
											<label for="submit-location">Comuna</label>
											<select name="type" id="submit-location">
												<option value="1">Selecciona una Comuna</option>
												<option value="2">Los Angeles</option>
											</select>
										</div>
										<div class="row">
											<div class="col-md-9 col-sm-12">
												<div class="form-group">
													<label for="submit-direccion">Dirección</label>
													<div class="input-group">
														<input type="text" class="form-control" id="submit-direccion" name="direccion" >
													</div>
												</div>
											</div>
											<div class="col-md-3 col-sm-12">
												<div class="form-group">
													<label for="submit-numero">Número</label>
													<input type="text" class="form-control" id="submit-numero" name="numero">
												</div>
											</div>
										</div>
										<div class="row">
											<div class="col-md-12 col-sm-12">
												<div class="form-group">
													<label for="submit-telefono">Teléfono</label>
													<div class="input-group">
														<input type="text" class="form-control" id="submit-telefono" name="telefono">
													</div>
												</div>
											</div>
											<div class="col-md-12 col-sm-12">
												<div class="form-group">
													<label for="submit-celular">Celular</label>
													<input type="text" class="form-control" id="submit-celular" name="celular">
												</div>
											</div>
											<div class="col-md-12 col-sm-12">
												<div class="form-group">
													<label for="submit-email">Email</label>
													<input type="text" class="form-control" id="submit-email" name="email">
												</div>
											</div>
										</div>
										<div class="checkbox">
											<label>
												<input type="checkbox">Allow user rating <i class="fa fa-question-circle tool-tip"  data-toggle="tooltip" data-placement="right" title="Users can give you a stars rating which is displayed in property detail"></i>
											</label>
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
<script type="text/javascript" src="http://maps.google.com/maps/api/js?sensor=false&libraries=places"></script>
<script type="text/javascript" src="assets/js/markerwithlabel_packed.js"></script>
<script type="text/javascript" src="assets/bootstrap/js/bootstrap.min.js"></script>
<script type="text/javascript" src="assets/js/smoothscroll.js"></script>
<script type="text/javascript" src="assets/js/owl.carousel.min.js"></script>
<script type="text/javascript" src="assets/js/bootstrap-select.min.js"></script>
<script type="text/javascript" src="assets/js/jquery.validate.min.js"></script>
<script type="text/javascript" src="assets/js/icheck.min.js"></script>
<script type="text/javascript" src="assets/js/retina-1.1.0.min.js"></script>
<script type="text/javascript" src="assets/js/jquery.magnific-popup.min.js"></script>
<script type="text/javascript" src="assets/js/fileinput.min.js"></script>
<script type="text/javascript" src="assets/js/custom-map.js"></script>
<script type="text/javascript" src="assets/js/custom.js"></script>
<!--[if gt IE 8]>
<script type="text/javascript" src="assets/js/ie.js"></script>
<![endif]-->
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