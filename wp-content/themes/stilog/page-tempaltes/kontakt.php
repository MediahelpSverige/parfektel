<?php

/*

Template name: kontakt

*/

get_header();

?>


<section class="section-white single">

	<div class="container">

	<div class="text-section">

	<div class="kontakt-info">

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

<?php $query8 = new WP_Query(array( 'post_type' => 'arbetare', 'post_per_page' => -1) );

//print_r($query8);

					  while ( $query8->have_posts() ) : $query8->the_post(); ?>



					  <div class="coworker">



		<?php the_title('<h4>', '</h4>');  ?>



		<?php the_content();?>

		</div>

	    <?php endwhile; wp_reset_postdata();?>

</div>



	<div class="map">

<iframe src="https://www.google.com/maps/embed?pb=!1m14!1m8!1m3!1d8084.856018982554!2d17.553732!3d59.562844!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x0%3A0x8ad8ddb4cc50248d!2sP%C3%A4rfekt+Elservice+i+B%C3%A5lsta+AB!5e0!3m2!1sen!2sse!4v1473080870135" width="600" height="450" frameborder="0" style="border:0" allowfullscreen></iframe>




	</div>

	<div class="clearfix"></div>

	</div>



	</div>

</section>





<?php get_footer(); ?>