<?php get_header(); ?>

<main id="site-content" role="main"> 
    <?php
        if ( have_posts() ) {
            wp_reset_query();
            setup_postdata($post); 
            echo esc_attr(htmlentities(the_content()));
        } else {
            echo "No text defined.";
        }
    ?>
</main>

<?php get_footer(); ?>