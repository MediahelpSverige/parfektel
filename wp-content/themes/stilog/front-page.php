<?php 



get_header();

?>





<section class="section-white">



	<div class="container">

	<div class="row">

	<div class="col-md-8 col-sm-8">

	<div id="homeslider" class="owl-carousel">

		<div class="item" style="background-image:url('<?php bloginfo('template_url')?>/img/slide1.jpg');"></div>

		<div class="item" style="background-image:url('<?php bloginfo('template_url')?>/img/slide2.jpg');"></div>

		<div class="item" style="background-image:url('<?php bloginfo('template_url')?>/img/slide3.jpg');"></div>

		<div class="item" style="background-image:url('<?php bloginfo('template_url')?>/img/bkpam235483_mixerbord.jpg');"></div>

	</div>

	</div>



	

	<div class="col-md-4 col-sm-4">

			<iframe src="https://www.google.com/maps/embed?pb=!1m14!1m8!1m3!1d8084.856018982554!2d17.553732!3d59.562844!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x0%3A0x8ad8ddb4cc50248d!2sP%C3%A4rfekt+Elservice+i+B%C3%A5lsta+AB!5e0!3m2!1sen!2sse!4v1472556362115" width="600" height="450" frameborder="0" style="border:0" allowfullscreen></iframe>
		
	</div>
	</div>

	<div class="row" style="margin-top:30px;">

	<div class="col-md-6">


	<div class="text-section">

		<h2>Kontrollera ditt hems elsäkerhet</h2>

		<p>med några enkla klick och få en fingervisning om du och dina nära och kära är i riskzon.</p>

		<a href="http://www.eio-eltest.se/sjalvtest/">EIO:S Självtest för elsäkerhet, så

 klickar du här</a>

		<p>Om resultatet av självtesten visar att du bör snarast genomföra ett EIO Eltest, så kan vi självklart hjälpa dej.</p>

		<p></p>

	</div>

	</div>



<div class="col-md-6">
<div class="text-section">

<h2>Om Pärfekt elservice</h2>

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
	</div>

		<div class="row">

<div class="col-md-6">

	<div class="text-section">
	<h2>Arbete i Stockholms tunnelbana</h2>
<iframe width="560" height="315" src="https://www.youtube.com/embed/JRG3qitVJgo?rel=0&amp;controls=0&amp;showinfo=0" frameborder="0" allowfullscreen></iframe>

	</div>
	</div>

</div>

	</div>


	</section>


<?php get_footer(); ?>