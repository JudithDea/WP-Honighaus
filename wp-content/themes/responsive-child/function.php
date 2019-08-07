<?php
add_action( ‘wp_enqueue_scripts’, ‘child_theme_enqueue_styles’ );
function child_theme_enqueue_styles() {
wp_enqueue_style( ‘parent-style’, get_template_directory_uri() . ‘/style.css’ );}
?>

<?php
function child_theme_enqueue_styles() {
       $parent_style = 'parent-style'; // This is 'Responsive-style' for the Responsive theme.
       wp_enqueue_style( $parent_style, get_template_directory_uri() . '/style.css' );
       wp_enqueue_style( 'child-style',
                  get_stylesheet_directory_uri() . '/style.css',
                  array( $parent_style ),
                  wp_get_theme()->get('Version')
       );
}
add_action( 'wp_enqueue_scripts', 'child_theme_enqueue_styles' );
?>
