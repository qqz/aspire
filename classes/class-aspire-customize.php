<?php
/**
 * Customizer settings for this theme.
 */

if ( ! class_exists( 'Aspire_Customize' ) ) {

    class Aspire_Customize {

        public function __construct() {
            add_action( 'customize_register', array( $this, 'register' ));
        }

        public function register( $wp_customize ) {

            /**
            * Hide default Customize elements that are irrelevant to theme
            */

            $wp_customize->get_section( 'colors' )->active_callback = '__return_false';
            $wp_customize->get_section( 'header_image' )->active_callback = '__return_false';
            $wp_customize->get_section( 'background_image' )->active_callback = '__return_false';
            $wp_customize->remove_control('blogdescription');
            $wp_customize->remove_panel('primary_menu');

            /**
            * Change underline hover color
            */

			$wp_customize->add_section(
				'accent_color',
				array(
					'title'         => esc_html__( 'Accent Color', 'aspire' ),
                    'description'   => __( 'Color on hover for navigation bar' ),
					'capability'    => 'edit_theme_options',
                    'priority'      => 30,
				)
			);

            $wp_customize->add_setting(
                'hover_accent_color',
                array(
                    'type'        => 'theme_mod',
                )
            );

            $wp_customize->add_control(
                'hover_accent_color',
                array(
                    'type'    => 'color',
                    'section' => 'accent_color',
                    'label'   => __( 'Hover Color', 'aspire' ),
                    'priority' => 10,
                )
            );

        }

    }

}