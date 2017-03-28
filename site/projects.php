<!DOCTYPE html>
<?php include("./header.php");?>
<script type="text/javascript">
jQuery("nav .sf-menu li[class='current']").attr('class','');
jQuery("nav .sf-menu li").filter(":contains('Projects')").attr('class','current');
jQuery("body").attr('class','index-2');
</script>

<!--=======content================================-->

<section id="content">
	<div class="full-width-container block-1">
		<div class="container">
			<div class="row">
				<div class="grid_12">
					<header>
						<h2><span>Our Projects</span></h2>
					</header>
				</div>
				<div id="touch_gallery">
					<div class="grid_4">
						<div class="img_block"><a target="__blank" href="images/projects/byu_life_science_large.jpg"><img src="images/projects/byu_life_science.jpg" alt="Projects"><i></i></a></div>
						<article>
							<h4>BYU Life Sciences Building</h4>
							<p>Dorem ipsum dolor sit amet, consectetur adipiscing elit. In mollis erat mattis neque facilisis, sit amet ultricies erat rutrum. Cras facilisis, nulla vel viverra auctor, leo magna sodales felis, quis malesuada nibh odio ut</p>
						</article>
					</div>
					<div class="grid_4">
						<div class="img_block"><a target="__blank" href="images/projects/byu_auditorium_large.jpg"><img src="images/projects/byu_auditorium.jpg" alt="Projects"><i></i></a></div>
						<article>
							<h4>BYU Idaho Auditorium</h4>
							<p>Dorem ipsum dolor sit amet, consectetur adipiscing elit. In mollis erat mattis neque facilisis, sit amet ultricies erat rutrum. Cras facilisis, nulla vel viverra auctor, leo magna sodales felis, quis malesuada nibh odio ut</p>
						</article>
					</div>
					<div class="grid_4">
						<div class="img_block"><a target="__blank" href="images/projects/mortec_large.jpg"><img src="images/projects/mortec.jpg" alt="Projects"><i></i></a></div>
						<article>
							<h4>Mortec</h4>
							<p>Dorem ipsum dolor sit amet, consectetur adipiscing elit. In mollis erat mattis neque facilisis, sit amet ultricies erat rutrum. Cras facilisis, nulla vel viverra auctor, leo magna sodales felis, quis malesuada nibh odio ut</p>
						</article>
					</div>
					<div class="grid_4">
						<div class="img_block"><a target="__blank" href="images/projects/century_link_large.jpg"><img src="images/projects/century_link.jpg" alt="Projects"><i></i></a></div>
						<article>
							<h4>Century Link Telecom Systems</h4>
							<p>Dorem ipsum dolor sit amet, consectetur adipiscing elit. In mollis erat mattis neque facilisis, sit amet ultricies erat rutrum. Cras facilisis, nulla vel viverra auctor, leo magna sodales felis, quis malesuada nibh odio ut</p>
						</article>
					</div>

				</div>
				<!-- <div class="grid_12">
					<div class="pagination"><a href="#" class="active">1</a><a href="#">2</a></div>
				</div> -->
			</div>
		</div>

	</div>
</section>

<?php include("./footer.php");?>
