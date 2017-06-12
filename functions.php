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

//Register Side Bars

    register_sidebars(3,array ('before_widget' => '<div id="%1$s" class="widget %2$s">',
           'after_widget' => "</div>",
           'before_title' => '<h3 class="widget-title">',
           'after_title' => '</h3>',
       )
   );


//get the title tag
function get_my_title_tag(){
    
    global $post;
    
    if ( is_front_page() ){ //if user is on front-page
        bloginfo('description');//retrieve the description
    }
    
    elseif (is_page() || is_single() ) { //pages or postings
        
        the_title(); //get the page or postint title
    }
    
    else { //if you're on all other pages
        bloginfo('description'); //get the tagline
    }
    
    if ( $post->post_parent) { //parent pages
        echo ' | ';
        echo get_the_title($post-post_parent); //get parent page title
    }
    
    echo ' | ';
    bloginfo('name'); //get site name
    echo ' | ';
    echo 'Seattle, WA.'; //location
    }

//add post page excerpts
add_post_type_support( 'page', 'excerpt' );

//Post Thumbnail Images
add_theme_support( 'post-thumbnails' );
//Script for Navigation
//$script = file-get-contents ('javascriptFile.js');
//echo "<script>". $script . "</script>";


?>