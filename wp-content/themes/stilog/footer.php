<footer>
	<div class="container">
	<div class="footer-field">
		<h4>Adress</h4>
		<p>vikingavägen 4</p>
		<p>74650 Bålsta</p>
	</div>
	<div class="footer-field">
		<h4>Telefon</h4>
		<p>vikingavägen 4</p>
		<p>74650 Bålsta</p>
	</div>
	<div class="footer-field">
		<h4>Epost</h4>
		<a href="mailto:parfektel@gmail.com">parfektel@gmail.com</a>

	</div>
	<div class="footer-field">
		<h4>Har F-skattsedel</h4>

	</div>
		<?php dynamic_sidebar('footer-adress'); ?>
		<?php dynamic_sidebar('opening-hours'); ?>
	</div>
</footer>
<script type="text/javascript">
	$(document).ready(function(){
		var owl = $('#homeslider');

		owl.owlCarousel({
		    items:1,
		    loop:true,
		    margin:0,
		    autoplay:true,
		    autoplayTimeout:6000,
		    animateOut: 'fadeOut',
		    autoplayHoverPause:true

		});

		
		$('.menu-toggle').click(function(){
			$('.site_nav').slideToggle();
		})

		$('.dropbtn').click(function(){
			$('.dropdown-content').slideToggle();
		})
	});
</script>
<?php wp_footer(); ?>
</body>
</html>