<?php include("./header.php");?>
<script type="text/javascript">
jQuery("nav .sf-menu li[class='current']").attr('class','');
jQuery("nav .sf-menu li").filter(":contains('Contact')").attr('class','current');
jQuery("body").attr('class','index-4');
</script>
<!--=======content================================-->

<section id="content">
	<div class="full-width-container block-1">
		<div class="container">
			<div class="row">
				<div class="grid_12">
					<header>
						<h2><span>Our Location</span></h2>
						<h4><span>Payson Sheet Metal<br>447 N. Main St. Payson, UT 84651<br>801-465-3018</span></h4>
					</header>
					<div class="content_map">
						<div class="google-map-api">
							<div id="map-canvas" class="gmap"></div>
						</div>
					</div>
				</div>
			</div>
		</div>
	</div>

</section>

<?php include("./footer.php");?>
<script type="text/javascript">
		google_api_map_init();
		function google_api_map_init(){
			var map;
			var coordData = new google.maps.LatLng(parseFloat(40.049785), parseFloat(-111.732582));

			var styleArray = [
				{"featureType":"water","stylers":[{"color":"#021019"}]},
				{"featureType":"landscape","stylers":[{"color":"#08304b"}]},
				{"featureType":"poi","elementType":"geometry","stylers":[{"color":"#0c4152"},{"lightness":5}]},
				{"featureType":"road.highway","elementType":"geometry.fill","stylers":[{"color":"#000000"}]},
				{"featureType":"road.highway","elementType":"geometry.stroke","stylers":[{"color":"#0b434f"},{"lightness":25}]},
				{"featureType":"road.arterial","elementType":"geometry.fill","stylers":[{"color":"#000000"}]},
				{"featureType":"road.arterial","elementType":"geometry.stroke","stylers":[{"color":"#0b3d51"},{"lightness":16}]},
				{"featureType":"road.local","elementType":"geometry","stylers":[{"color":"#000000"}]},
				{"elementType":"labels.text.fill","stylers":[{"color":"#ffffff"}]},
				{"elementType":"labels.text.stroke","stylers":[{"color":"#000000"},{"lightness":13}]},
				{"featureType":"transit","stylers":[{"color":"#146474"}]},
				{"featureType":"administrative","elementType":"geometry.fill","stylers":[{"color":"#000000"}]},
				{"featureType":"administrative","elementType":"geometry.stroke","stylers":[{"color":"#144b53"},{"lightness":14},{"weight":1.4}]}
				]

			function initialize() {
			  var mapOptions = {
				zoom: 12,
				center: coordData,
				scrollwheel: false,
				styles: styleArray
			  }

			  var contentString = "<div></div>";
			  var infowindow = new google.maps.InfoWindow({
				content: contentString,
				maxWidth: 200
			  });

			  var map = new google.maps.Map(document.getElementById("map-canvas"), mapOptions);


			google.maps.event.addDomListener(window, 'resize', function() {

			  map.setCenter(coordData);

			  var center = map.getCenter();
			});
		}

			google.maps.event.addDomListener(window, "load", initialize);

		}
</script>
