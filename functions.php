<?php

    add_theme_support( 'title-tag' );
    add_theme_support( 'post-thumbnails' );
    add_theme_support( 'post-formats', ['aside', 'gallery', 'link', 'image', 'quote', 'status', 'video', 'audio', 'chat' ]);
    add_theme_support( 'html5' );
    add_theme_support( 'custom-header' );
    add_theme_support( 'editor-styles' );

    register_nav_menus( [
        'main' => 'Main',
    ] );

    class aspire_nav_walker extends Walker_Nav_Menu {

        function start_el( &$output, $item, $depth = 0, $args = array(), $current_page = 0 ) {
            $indent = str_repeat("\t", $depth);
            if ($depth == 0) {
                $output .= "\n$indent<li>\n\t$indent<a class='main-menu-link' href='".$item->url."'>". $item->title ."</a>";
            } 
         }

        function end_el(&$output, $item, $depth=0, $args=array()) {
            $output .= "\n";
        }

        function display_element($element, &$children_elements, $max_depth, $depth=0, $args, &$output) {
            $id_field = $this->db_fields['id'];
            if (!empty($children_elements[$element->$id_field])) { 
                $element->classes[] = 'parent'; 
            }
            Walker_Nav_Menu::display_element($element, $children_elements, $max_depth, $depth, $args, $output);
         }
    }

    // Customizer additions.
    require get_template_directory() . '/classes/class-aspire-customize.php';
    new Aspire_Customize();
?>