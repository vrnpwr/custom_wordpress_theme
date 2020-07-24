<?php
// Register Custom Navigation Walker
require_once get_template_directory() . '/wp-bootstrap-navwalker-master/wp-bootstrap-navwalker.php';

//If you encounter errors with the above code use a check like this to return clean errors to help diagnose the problem.

if ( ! file_exists( get_template_directory() . '/wp-bootstrap-navwalker-master/wp-bootstrap-navwalker.php' ) ) {
	// file does not exist... return an error.
	return new WP_Error( 'wp-bootstrap-navwalker-missing', __( 'It appears the wp-bootstrap-navwalker.php file may be missing.', 'wp-bootstrap-navwalker' ) );
} else {
	// file exists... require it.
    require_once get_template_directory() . '/wp-bootstrap-navwalker-master/wp-bootstrap-navwalker.php';
}

function anita()
{
	register_nav_menus( array(
	'primary_menu' => 'Navigation Menu',
	'footer_menu' => 'My Custom Footer Menu',
	'socila_menu' => 'My social Footer Menu',
) );

add_theme_support( 'post-thumbnails' ); 

}
add_action('init','anita');






/////Customization ////




function mytheme_customize_register( $wp_customize ) {
   //All our sections, settings, and controls will be added here
   
   ////only about////
   $wp_customize->add_setting( 'about_textcolor' , array(
    'default'   => '#999999',
    'transport' => 'refresh',
) );

$wp_customize->add_section( 'mytheme_about' , array(
    'title'      => __( 'About', 'mytheme' ),
    'priority'   => 30,
) );


$wp_customize->add_control( new WP_Customize_Color_Control( $wp_customize, 'link_color', array(
	'label'      => __( 'About Color', 'mytheme' ),
	'section'    => 'mytheme_about',
	'settings'   => 'about_textcolor',
) ) );


$wp_customize->add_setting( 'about_pic' , array(
   
) );

$wp_customize->add_control(
       new WP_Customize_Image_Control(
           $wp_customize,
           'pic',
           array(
               'label'      => __( 'Upload a pic', 'mytheme' ),
               'section'    => 'mytheme_about',
               'settings'   => 'about_pic',
            
           )
       )
   );


/////end about////

}
add_action( 'customize_register', 'mytheme_customize_register' );







///////for cssss/





function mytheme_customize_css()
{
    ?>
         <style type="text/css">
             #ab { color: <?php echo get_theme_mod('about_textcolor', '#000000'); ?>; }
         </style>
    <?php
}
add_action( 'wp_head', 'mytheme_customize_css');
?>