<?php include("./header.php");?>
<script type="text/javascript">
jQuery("nav .sf-menu li[class='current']").attr('class','');
jQuery("nav .sf-menu li").filter(":contains('Services')").attr('class','current');
jQuery("body").attr('class','index-1');
</script>
<!--=======content================================-->

<section id="content">
	<div class="full-width-container block-1">
		<div class="container">
			<div class="row">
				<div class="grid_12">
					<header>
						<h2><span>Services</span></h2>
					</header>
				</div>
				<div id="touch_gallery">
					<div class="grid_4">
						<div class="img_block"><a href="images/index-1_img-1-big.jpg"><img src="images/index-1_img-1.jpg" alt="Services"><i>+</i></a></div>
						<article>
							<h4>Air & Water Balance</h4>
							<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.</p>
							<a class="button request_services">Request Service</a>
						</article>
					</div>
					<div class="grid_4">
						<div class="img_block"><a href="images/index-1_img-2-big.jpg"><img src="images/index-1_img-2.jpg" alt="Services"><i>+</i></a></div>
						<article>
							<h4>HVAC Systems Analysis</h4>
							<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.</p>
							<a class="button request_services">Request Service</a>
						</article>
					</div>
					<div class="grid_4">
						<div class="img_block"><a href="images/index-1_img-3-big.jpg"><img src="images/index-1_img-3.jpg" alt="Services"><i>+</i></a></div>
						<article>
							<h4>HVAC Systems Design</h4>
							<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.</p>
							<a class="button request_services">Request Service</a>
						</article>
					</div>
					<div class="grid_4">
						<div class="img_block"><a href="images/index-1_img-4-big.jpg"><img src="images/index-1_img-4.jpg" alt="Services"><i>+</i></a></div>
						<article>
							<h4>HAC Systems Commissioning</h4>
							<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.</p>
							<a class="button request_services">Request Service</a>
						</article>
					</div>
					
				</div>
			</div>
		</div>

	</div>
</section>
<style>
a.button.request_services {
    text-align: center;
    display: block;
    font-size: 24px;
    background-color: #d94d3a;
    margin: 20px;
    padding: 20px;
    color: white;
    text-transform: uppercase;
    cursor: pointer;
}
</style>

<?php include("./footer.php");?>
