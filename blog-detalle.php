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
						<li class="active">Blog Detail</li>
					</ol>
				</div>
				<div class="container">
					<div class="row">
						<div class="col-lg-9 col-md-8 col-sm-7">
							<section id="content">
								<header><h1>Article Detail</h1></header>
								<article class="blog-post">
									<a href="blog-detail.html"><img src="assets/img/properties/property-detail-02.jpg"></a>
									<header><a href="blog-detail.html"><h2>Vivamus porta orci eu turpis vulputate ornare fusce hendrerit arcu risu</h2></a></header>
									<figure class="meta">
										<a href="#" class="link-icon"><i class="fa fa-user"></i>Admin</a>
										<a href="#" class="link-icon"><i class="fa fa-calendar"></i>06/04/2014</a>
										<div class="tags">
											<a href="#" class="tag article">Architecture</a>
											<a href="#" class="tag article">Design</a>
											<a href="#" class="tag article">Trend</a>
										</div>
									</figure>
									<p>Fusce quis nulla volutpat, rhoncus ligula ut, pulvinar nisi. In dapibus urna sit amet accumsan
										tristique. Donec odio ligula, luctus venenatis varius id, tincidunt ac ipsum. Cras commodo,
										velit nec aliquam dictum, tortor velit dictum ipsum, sed ornare nunc leo nec ipsum. Vestibulum
										sagittis sapien vitae tristique mollis. Aliquam hendrerit nulla semper, viverra mi et,
										hendrerit mauris. Maecenas hendrerit congue ultrices. In laoreet erat blandit eros aliquet,
										in malesuada sem rutrum. In placerat porta egestas.
									</p>
									<h3>Parahraph Headline</h3>
									<p>
										Phasellus metus ipsum, sollicitudin lacinia turpis in, pellentesque pulvinar diam.
										Cras ultricies augue sapien, aliquam hendrerit mi suscipit at. Suspendisse vulputate felis eget
										felis convallis fermentum et eu nulla. Donec sagittis sit amet erat non eleifend. Mauris at convallis
										magna. Quisque pellentesque id mauris vitae placerat. Mauris facilisis odio nec metus cursus commodo.
										Integer vel libero nunc. Donec ac lorem commodo, laoreet elit eget, tempus ante. Quisque eu nunc blandit
										erat rutrum feugiat ac sed arcu. In nisi risus, molestie a sem adipiscing, porta volutpat velit.
										Pellentesque nec felis sit amet nunc porta tincidunt sit amet et justo.
									</p>
								</article>
								<section id="about-author">
									<header><h3>About the Author</h3></header>
									<div class="post-author">
										<img src="assets/img/member-04.jpg">
										<div class="wrapper">
											<header>Maria Scott</header>
											<p>Phasellus metus ipsum, sollicitudin lacinia turpis in, pellentesque pulvinar diam.
												Cras ultricies augue sapien, aliquam hendrerit mi suscipit at. Suspendisse vulputate felis eget
											</p>
										</div>
									</div>
								</section>
							</section>
							<section id="comments">
								<header><h2 class="no-border">Comments</h2></header>
								<ul class="comments">
									<li class="comment">
										<figure>
											<div class="image">
												<img alt="" src="assets/img/client-01.jpg">
											</div>
										</figure>
										<div class="comment-wrapper">
											<div class="name pull-left">Catherine Brown</div>
											<span class="date pull-right"><span class="fa fa-calendar"></span>12.05.2014</span>
											<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Nulla vestibulum, sem ut sollicitudin consectetur,
												augue diam ornare massa, ac vehicula leo turpis eget purus. Nunc pellentesque vestibulum mauris, eget suscipit
												mauris imperdiet vel. Nulla et massa metus. Nam porttitor quam eget ante elementum consectetur. Aenean ac nisl
												et nulla placerat suscipit eu a mauris. Curabitur quis augue condimentum, varius mi in, ultricies velit.
												Suspendisse potenti.
											</p>
											<a href="#" class="reply"><span class="fa fa-reply"></span>Reply</a>
											<hr>
										</div>
									</li>
									<li>
										<ul class="comments-child">
											<li class="comment">
												<figure>
													<div class="image">
														<img alt="" src="assets/img/agent-01.jpg">
													</div>
												</figure>
												<div class="comment-wrapper">
													<div class="name">John Doe</div>
													<span class="date"><span class="fa fa-calendar"></span>24.06.2014</span>
													<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Nulla vestibulum, sem ut sollicitudin consectetur,
														augue diam ornare massa, ac vehicula leo turpis eget purus. Nunc pellentesque vestibulum mauris, eget suscipit
														mauris.
													</p>
													<a href="#" class="reply"><span class="fa fa-reply"></span>Reply</a>
													<hr>
												</div>
											</li>
										</ul>
									</li>
									<li class="comment">
										<figure>
											<div class="image">
												<img alt="" src="assets/img/user-02.jpg">
											</div>
										</figure>
										<div class="comment-wrapper">
											<div class="name">John Doe</div>
											<span class="date"><span class="fa fa-calendar"></span>08.05.2014</span>
											<p>Quisque iaculis neque at dui cursus posuere. Sed tristique pharetra orci, eu malesuada ante tempus nec.
												Phasellus enim odio, facilisis et ante vel, tempor congue sapien. Praesent eget ligula
												eu libero cursus facilisis vel non arcu. Sed vitae quam enim.
											</p>
											<a href="#" class="reply"><span class="fa fa-reply"></span>Reply</a>
											<hr>
										</div>
									</li>
								</ul>
							</section>
							<section id="leave-reply">
								<header><h2 class="no-border">Leave a Reply</h2></header>
								<form role="form" id="form-blog-reply" method="post"  class="clearfix">
									<div class="row">
										<div class="col-md-6">
											<div class="form-group">
												<label for="form-blog-reply-name">Your Name<em>*</em></label>
												<input type="text" class="form-control" id="form-blog-reply-name" name="form-blog-reply-name" required>
											</div>
										</div>
										<div class="col-md-6">
											<div class="form-group">
												<label for="form-blog-reply-email">Your Email<em>*</em></label>
												<input type="email" class="form-control" id="form-blog-reply-email" name="form-blog-reply-email" required>
											</div>
										</div>
									</div>
									<div class="row">
										<div class="col-md-12">
											<div class="form-group">
												<label for="form-blog-reply-message">Your Message<em>*</em></label>
												<textarea class="form-control" id="form-blog-reply-message" rows="5" name="form-blog-reply-message" required></textarea>
											</div>
										</div>
									</div>
									<div class="form-group clearfix">
										<button type="submit" class="btn pull-right btn-default" id="form-blog-reply-submit">Leave a Reply</button>
									</div>
									<div id="form-rating-status"></div>
								</form>
							</section>
						</div>
						<div class="col-lg-3 col-md-4 col-sm-5">
							<section id="sidebar">
								<aside id="our-guides">
									<header><h3>Our Guides</h3></header>
									<a href="#" class="universal-button">
										<figure class="fa fa-home"></figure>
										<span>Buying Guide</span>
										<span class="arrow fa fa-angle-right"></span>
									</a>
									<a href="#" class="universal-button">
										<figure class="fa fa-umbrella"></figure>
										<span>Right Insurance for You</span>
										<span class="arrow fa fa-angle-right"></span>
									</a>
								</aside>
								<aside id="search">
									<header><h3>Search</h3></header>
									<div class="input-group">
										<input type="text" class="form-control" placeholder="Enter Keyword">
										<span class="input-group-btn"><button class="btn btn-default search" type="button"><i class="fa fa-search"></i></button></span>
									</div>
								</aside>
								<aside id="post-archive">
									<header><h3>Últimos Post</h3></header>
									<a href="#">
										<div class="ultimo-post col-lg-12 col-md-12 col-sm-12">
											<div class="imagen-post col-md-5 col-sm-6 col-xs-6">
												<img alt="" src="assets/img/2016-skoda-superb-combi-1.jpg">
											</div>
											<div class="titulo-post col-md-7 col-sm-6 col-xs-6">2015 Toyota Aurion pricing and specifications</div>
										</div>
									</a>
									<a href="#">
										<div class="ultimo-post col-lg-12 col-md-12 col-sm-12">
											<div class="imagen-post col-md-5 col-sm-6 col-xs-6">
												<img alt="" src="assets/img/2016-skoda-superb-combi-1.jpg">
											</div>
											<div class="titulo-post col-md-7 col-sm-6 col-xs-6">2015 Toyota Aurion pricing and specifications</div>
										</div>
									</a>
									<a href="#">
										<div class="ultimo-post col-lg-12 col-md-12 col-sm-12">
											<div class="imagen-post col-md-5 col-sm-6 col-xs-6">
												<img alt="" src="assets/img/2016-skoda-superb-combi-1.jpg">
											</div>
											<div class="titulo-post col-md-7 col-sm-6 col-xs-6">2015 Toyota Aurion pricing and specifications</div>
										</div>
									</a>
								</aside>
								<div class="ads">
									<div class="ads-250">ads
									</div>
									<div class="ads-250">ads
									</div>
									<div class="ads-250">ads
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