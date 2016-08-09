<?php 

get_header();
?>


<section class="section-white">

	<div class="container">
	<div id="homeslider" class="owl-carousel">
		<div class="item" style="background-image:url('<?php bloginfo('template_url')?>/img/slide1.jpg');"></div>
		<div class="item" style="background-image:url('<?php bloginfo('template_url')?>/img/slide2.jpg');"></div>
		<div class="item" style="background-image:url('<?php bloginfo('template_url')?>/img/slide3.jpg');"></div>
		<div class="item" style="background-image:url('<?php bloginfo('template_url')?>/img/bkpam235483_mixerbord.jpg');"></div>
	</div>
	<div class="banner-left">
		<div class="movie"><iframe width="560" height="315" src="https://www.youtube.com/embed/JRG3qitVJgo" frameborder="0" allowfullscreen></iframe></div>
		<div class="text-section">
			<h2>Lorem Ipsum</h2>
			<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. </p>
		</div>
	</div>
	<div class="left-side-text">
	
<div class="main-text-wrap welcome">
		<?php 
			if ( have_posts() ) {
				while ( have_posts() ) {
					the_post(); 
					//
					// Post Content here
					the_content();
					//
				} // end while
			} // end if
?>
</div>
</div>
<div class="sidebar-om">
	<div class="text-section">
		<h2>Om oss</h2>
		<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur.</p>
		<p></p>
	</div>
</div>
	</div>
	</section>
<!--
	<section class="section-blue">
		<div class="container"><div class="main-text-wrap"><i class="fa fa-clock-o"></i><h2>Vårt kontor i Bålsta har öppet vardagar 08:30-16:30.</h2></div></div>
	</section>
-->
<?php get_footer(); ?>