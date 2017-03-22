
<!--=======footer=================================-->
<footer id="footer">
	<div class="container">
		<div class="row">
		<div class="grid_12">
			<div class="copyright">
				<pre>©SUU <span id="copyright-year"></span> |  Privacy Policy</pre>
			</div>
		</div>
	</div>
	</div>
	<div class="footer_bottom"><p>Designed by Jared, Matt, Sara, Trevor, Nathan, and Dallen</p></div>
</footer>
<script>
	jQuery(function(){
		jQuery('#camera_wrap').camera({
			height: '68.125%',
			thumbnails: false,
			pagination: true,
			fx: 'simpleFade',
			loader: 'none',
			hover: false,
			navigation: false,
			playPause: false,
			minHeight: "975px",
		});
	});
</script>
<!--script>
	var $container = $('.isotope');
	// init
	$container.on( 'click', '.iso-item', function( event ) {
	  // change size of item via class
	  $( event.target ).toggleClass('gigante');
	  // trigger layout
	  $container.packery();
	  /*$container.packery({
		  itemSelector: 'iso-.item',
		  gutter: 10*/

	});
</script-->
<script>
	$(document).ready(function() {
			if ($('html').hasClass('desktop')) {
				$.stellar({
					horizontalScrolling: false,
					verticalOffset: 20,
					resposive: true,
					hideDistantElements: true,
				});
			}
		});
</script>

<script>
	$(function(){
		$('.isotope a').touchTouch();
	});
</script>

</body>
</html>
