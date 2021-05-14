<html lang="en">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width,initial-scale=1">
        <title>QQZ Online Portfolio</title>
        <meta name="description" content="Online portfolio of web developer Qianqian Zhao">
        <link rel="preconnect" href="https://fonts.gstatic.com">
        <link href="https://fonts.googleapis.com/css2?family=Itim&family=Open+Sans&display=swap" rel="stylesheet">  
        <link rel="stylesheet" href="<?php bloginfo( 'stylesheet_url' ); ?>" type="text/css" media="screen" />
        <script src="https://kit.fontawesome.com/c254a9fef3.js" crossorigin="anonymous"></script>
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
            