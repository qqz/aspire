<?php get_header(); ?>

<main id="site-content" class="centered" role="main"> 
	<article class="single">
		<div>
		<?php
			if ( have_posts() ) {
				the_post();
				the_title( '<h1 class="entry-title">', '</h1>' );
				the_content();
			} else {
				echo "No text defined.";
			}
		?>
		</div>
	</article>
</main>

<?php get_footer(); ?>