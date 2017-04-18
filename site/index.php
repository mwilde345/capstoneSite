<!DOCTYPE html>
<?php include("./header.php");?>
<script type="text/javascript">
jQuery("nav .sf-menu li[class='current']").attr('class','');
jQuery("nav .sf-menu li").filter(":contains('Home')").attr('class','current');
</script>
<!--=======content================================-->

<section id="content">
	<div class="full-width-container block-1">
		<div class="camera_container">
			<div id="camera_wrap">
				<div class="item" data-src="images/sheetmetal.jpg">
					<div class="camera_caption fadeIn">
						<h3>Top Quality Work</h3>
					</div>
				</div>
				<div class="item" data-src="images/modernbuilding.jpg">
					<div class="camera_caption fadeIn">
						<h3>Modern Knowledge and Skills</h3>
					</div>
				</div>
				<div class="item" data-src="images/hvactechnician.jpg">
					<div class="camera_caption fadeIn">
						<h3>Expert Technicians</h3>
					</div>
				</div>
			</div>
		</div>
	</div>
	<!-- <div class="full-width-container block-2">
		<div class="container">
			<div class="row">
				<div class="grid_12">
					<header>
						<h2><span>Past Projects</span></h2>
					</header>
					<div class="isotope clearfix">
						<a href="images/index_img-1-big.jpg" class="item-1 w-1"><div class="img_block"><img src="images/index_img-1.jpg" alt="img"></div><i>+</i></a>
						<a href="images/index_img-2-big.jpg" class="item-2 w-2"><div class="img_block"><img src="images/index_img-2.jpg" alt="img"></div><i>+</i></a>
						<a href="images/index_img-3-big.jpg" class="item-3 w-1"><div class="img_block"><img src="images/index_img-3.jpg" alt="img"></div><i>+</i></a>
						<a href="images/index_img-4-big.jpg" class="item-4 w-2"><div class="img_block"><img src="images/index_img-4.jpg" alt="img"></div><i>+</i></a>
						<a href="images/index_img-5-big.jpg" class="item-5 w-1"><div class="img_block"><img src="images/index_img-5.jpg" alt="img"></div><i>+</i></a>
						<a href="images/index_img-6-big.jpg" class="item-6 w-1"><div class="img_block"><img src="images/index_img-6.jpg" alt="img"></div><i>+</i></a>
					</div>
					<a href="#" class="btn">more</a>
				</div>
			</div>
		</div>
	</div> -->
	<div class="full-width-container block-2">
		<div class="container">
			<div class="row">
				<div class="grid_12">
					<header>
						<h2><span>About our Company</span></h2>
					</header>
					<div class="img_block"><img src="images/modernbuilding.jpg" alt=""></div>
					<p>Gamus at magna non nunc tristique rhoncuseri tym. Aliquam nibh ante, egestas id dictum aterert commodo re luctus libero. Praesent faucibus malesuada cibuste. Donec laoreet metus id laoreet malesuada. Lorem ipsum dolor sit amet, consectetur adipiscing elit. Nullam consectetur orci sed <br><br>Gamus at magna non nunc tristique rhoncuseri tym. Aliquam nibh ante, egestas id dictum aterert commodo re luctus libero. Praesent faucibus malesuada cibuste. Donec laoreet metus id laoreet malesuada. Lorem ipsum dolor sit amet, consectetur</p>
					<a href="#" class="btn">more</a>
				</div>
			</div>
		</div>
	</div>
	<div class="full-width-container block-4  parallax-block" data-stellar-background-ratio="0.5">
		<span class="el-1">Your best</span>
		<span class="el-2">projects</span>
		<a href="#" class="btn">more</a>
	</div>
	<div class="full-width-container block-5">
		<div class="container">
			<div class="row">
				<div class="item-1 clearfix">
					<div class="grid_2">
						<div class="img_block"><img src="images/index_img-8.jpg" alt=""></div>
					</div>
					<div class="grid_10">
						<div class="text">Gamus at magna non nunc tristique rhoncuseri tym. Aliquam nibh ante, egestas id dictum aterert commodo re luctus libero. Praesent faucibus malesuada cibuste. <br><br>Donec laoreet metus id laoreet malesuada. Lorem ipsum dolor sit amet, consectetur adipiscing elit. Nullam consectetur rci sed r vel lorem sit amet nulla ullamcorper fermentum.</div>
					</div>
				</div>
				<div class="item-2 clearfix">
					<div class="grid_10">
						<div class="text">Tamus at magna non nunc tristique rhoncuseri tym. Aliquam nibh ante, egestas id dictum aterert commodo re luctus libero. Praesent faucibus malesuada cibuste. <br><br>Donec laoreet metus id laoreet malesuada. Lorem ipsum dolor sit amet, consectetur adipiscing elit. Nullam consectetur rci sed r vel lorem sit amet nulla ullamcorper fermentu.</div>
					</div>
					<div class="grid_2">
						<div class="img_block"><img src="images/index_img-9.jpg" alt=""></div>
					</div>
				</div>
			</div>
		</div>
	</div>
	<div class="full-width-container block-6">
		<div class="google-map-api">
			<div id="map-canvas" class="gmap"></div>
		</div>
	</div>
</section>
<script type="text/javascript">
		google_api_map_init();
		function google_api_map_init(){
			var map;
			var coordData = new google.maps.LatLng(parseFloat(40.6894388), parseFloat(-73.9036233,10));

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
<?php include("./footer.php");?>
