<html lang="en">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width,initial-scale=1">
        <title>
            <?php 
                if (is_front_page()) {
                    echo get_bloginfo('name');
                }
                else {
                    echo get_bloginfo('name');
                    echo ' ';
                    echo wp_title();
                }
            ?>
        </title>
        <meta name="description" content="<?php get_bloginfo('description'); ?>">
        <link rel="preconnect" href="https://fonts.gstatic.com">
        <link href="https://fonts.googleapis.com/css2?family=Itim&family=Open+Sans&display=swap" rel="stylesheet">  
        <link rel="preconnect" href="https://fonts.googleapis.com">
        <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
        <link href="https://fonts.googleapis.com/css2?family=Playfair+Display:ital,wght@0,400..900;1,400..900&family=Poppins:ital,wght@0,100;0,200;0,300;0,400;0,500;0,600;0,700;0,800;0,900;1,100;1,200;1,300;1,400;1,500;1,600;1,700;1,800;1,900&family=Quicksand:wght@300..700&family=Space+Mono:ital,wght@0,400;0,700;1,400;1,700&display=swap" rel="stylesheet">
        <link rel="stylesheet" href="<?php bloginfo( 'stylesheet_url' ); ?>" type="text/css" media="screen" />
        <script src="https://kit.fontawesome.com/c254a9fef3.js" crossorigin="anonymous"></script>
        <style>
            .menu a::before {
                background-color: <?php echo get_theme_mod('hover_accent_color'); ?>;
            }
            #site-content a {
                border-color: <?php echo get_theme_mod('hover_accent_color'); ?>;
            }
            #site-content a:hover,
            #site-content a:focus,
            #site-content a:active { 
                background:<?php echo get_theme_mod('hover_accent_color'); ?>;
            }
            article.single h1 {
                border-color: <?php echo get_theme_mod('hover_accent_color'); ?>;
            }
            #site-content .wp-block-media-text h2 {
                text-decoration-color: <?php echo get_theme_mod('hover_accent_color'); ?>;
            }
        </style>
        <?php wp_head(); ?>
    </head>
    <body <?php body_class(); ?>>
        <main>
            <nav class="navbar" id="main-navigation">
                <span class="navbar-toggle" id="js-navbar-toggle">
                    <i class="fas fa-bars"></i>
                    <i class="fas fa-times"></i>
                </span>
                <span class="placeholder"></span>
                <?php 
                    if ( has_nav_menu( 'main' ) ):
                        wp_nav_menu (  
                            array (
                                'theme_location'     => 'main',
                                'walker'             => new aspire_nav_walker(),
                            )
                        );
                    endif;
                ?>
            </nav>
        </main>
            