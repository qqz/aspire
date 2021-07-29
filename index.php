<?php get_header(); ?>

<main id="site-content" class="centered" role="main"> 
    <?php
        
        if ( have_posts() ) {
            wp_reset_query();

            while ( have_posts() ) {
                the_post();
                ?>
				<article id="post-<?php the_ID(); ?>" <?php post_class(); ?> >
					<header class="entry-header">
						<?php 
                            the_title( sprintf( '<h2 class="entry-title default-max-width"><a href="%s">', esc_url( get_permalink() ) ), '</a></h2>' ); 
                            the_date( '', '<div class="datetime">','</div>'); 
                            the_excerpt(); 
                        ?>
					</header>
				</article>
                <?
            }

        } else {
            echo "No text defined.";
        }
    ?>
    </div>
</main>

<?php get_footer(); ?>