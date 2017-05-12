<?php 

/*
Theme Name: Kristin's Web170 Wordpress Theme
Theme URI: http://kristinfiedler.info/wordpress/
Description: My first WordPress theme for Web170
Author: Kristin DelViscio
Author URI: http://kristinfiedler.info/
Version:1.0
*/


//Register Menus
register_nav_menus(array('main' => __('Main'))); 
//

//Register Side Bar
function my_custom_sidebar() {
    register_sidebar(
        array (
            'name' => __( 'Custom', 'your-theme-domain' ),
            'id' => 'custom-side-bar',
            'description' => __( 'Custom Sidebar', 'your-theme-domain' ),
            'before_widget' => '<div class="widget-content">',
            'after_widget' => "</div>",
            'before_title' => '<h3 class="widget-title">',
            'after_title' => '</h3>',
        )
    );
}
add_action( 'widgets_init', 'my_custom_sidebar' );
//

//Script for Navigation
//$script = file-get-contents ('javascriptFile.js');
//echo "<script>". $script . "</script>";


?>