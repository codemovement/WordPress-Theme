<?php
/**
 * materializedmasonrypk Theme Customizer
 *
 * @package materializedmasonrypk
 */

/**
 * Add postMessage support for site title and description for the Theme Customizer.
 *
 * @param WP_Customize_Manager $wp_customize Theme Customizer object.
 */
function materializedmasonrypk_customize_register( $wp_customize ) {
	$wp_customize->get_setting( 'blogname' )->transport         = 'postMessage';
	$wp_customize->get_setting( 'blogdescription' )->transport  = 'postMessage';
	$wp_customize->get_setting( 'header_textcolor' )->transport = 'postMessage';

	$wp_customize->add_setting( 'navigation_background_color',
         array(
            'default' => '#3f51b5',
            'type' => 'theme_mod',
            'capability' => 'edit_theme_options',
            'transport' => 'postMessage',
			 'sanitize_callback' => 'sanitize_hex_color',
        )
    );

    $wp_customize->add_setting( 'complimentary_color',
         array(
            'default' => '#ff5722',
            'type' => 'theme_mod',
            'capability' => 'edit_theme_options',
            'transport' => 'postMessage',
			'sanitize_callback' => 'sanitize_hex_color',
        )
    );

    $wp_customize->add_setting( 'link_color',
         array(
            'default' => '#3f51b5',
            'type' => 'theme_mod',
            'capability' => 'edit_theme_options',
            'transport' => 'postMessage',
			'sanitize_callback' => 'sanitize_hex_color',
        )
    );

    $wp_customize->add_setting( 'footer_background_color',
         array(
            'default' => '#3f51b5',
            'type' => 'theme_mod',
            'capability' => 'edit_theme_options',
            'transport' => 'postMessage',
			'sanitize_callback' => 'sanitize_hex_color',
        )
    );

    $wp_customize->add_control( new WP_Customize_Color_Control($wp_customize, 'navigation_background_color', array(
		'label' => __( 'Navigation Background Color', 'materializedmasonrypk' ),
		'section' => 'colors',
		'settings' => 'navigation_background_color',
	)));

	$wp_customize->add_control( new WP_Customize_Color_Control($wp_customize, 'complimentary_color', array(
		'label' => __( 'Complimentary Color', 'materializedmasonrypk' ),
		'section' => 'colors',
		'settings' => 'complimentary_color',
	)));

	$wp_customize->add_control( new WP_Customize_Color_Control($wp_customize, 'link_color', array(
		'label' => __( 'Link Color', 'materializedmasonrypk' ),
		'section' => 'colors',
		'settings' => 'link_color',
	)));

    $wp_customize->add_control( new WP_Customize_Color_Control($wp_customize, 'footer_background_color', array(
        'label' => __( 'Footer Background Color', 'materializedmasonrypk' ),
        'section' => 'colors',
        'settings' => 'footer_background_color',
    )));
}
add_action( 'customize_register', 'materializedmasonrypk_customize_register' );

/**
 * Binds JS handlers to make Theme Customizer preview reload changes asynchronously.
 */
function materializedmasonrypk_customize_preview_js() {
	wp_enqueue_script( 'materializedmasonrypk_customizer', get_template_directory_uri() . '/js/customizer.js', array( 'customize-preview' ), '20130508', true );
}
add_action( 'customize_preview_init', 'materializedmasonrypk_customize_preview_js' );

function materializedmasonrypk_customize_colors(){

?>
<style type="text/css">
.navbar-inverse.navbar { background-color: <?php echo get_theme_mod('navigation_background_color'); ?>; }
.panel-warning>.panel-heading { background-color: <?php echo get_theme_mod('complimentary_color'); ?>; }
.btn-warning:not(.btn-link):not(.btn-flat), .btn-warning:hover:not(.btn-link):not(.btn-flat), .btn-warning:active:not(.btn-link):not(.btn-flat) { background-color: <?php echo get_theme_mod('complimentary_color'); ?>; }
.entry-content a, .panel a { color: <?php echo get_theme_mod('link_color'); ?>; }
.entry-content a:hover, .entry-content a:focus, .entry-content a:active, .panel a:hover, .panel a:focus, .panel a:active; { color: <?php echo get_theme_mod('link_color'); ?>; }
.site-footer { background-color: <?php echo get_theme_mod('footer_background_color'); ?>; }
</style>
<?php
}
add_action( 'wp_head', 'materializedmasonrypk_customize_colors' );
