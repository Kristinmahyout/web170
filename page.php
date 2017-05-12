<!--start of header.php-->
<?php get_header(); ?>
<!--end of header.php-->
<div id="content">
    
   <!-- <aside class="page1">   
        <p class="about">Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim adminim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur.</p> 
    </aside>

    <main class="page1">
        <div class="box1">
  	    	    <img class="slides2" src="<?php //echo get_stylesheet_directory_uri()?>/images/hawaiianprint.jpg" alt="hawaiian">
  	    	    <img class="slides3" src="<?php //echo get_stylesheet_directory_uri()?>/images/ethos-digitaldump.jpg" alt="ethos">
  	    	   <img class="slides5" src="<?php //echo get_stylesheet_directory_uri()?>/images/caos.jpg" alt="illustrated caos" >
        </div><!--end box 1-->
       <!-- <div class="box2">
  	    	    <img class="slides1" src="<?php //echo get_stylesheet_directory_uri()?>/images/ksremoveposter.png" alt="karin stevens">
  	    	    <img class="slides4" src="<?php //echo get_stylesheet_directory_uri()?>/images/Cherdonna24x36.jpg" alt="velocity" >
        </div><!--end box 2--> <!--
    </main> -->
    
     <!--start the "Loop"-->
    <?php if ( have_posts() ) : while ( have_posts() ) : the_post(); ?>
        <article id="article-<?php the_ID(); ?>" class="article">
            <h2>
                <a href="<?php the_permalink(); ?>"> <?php the_title(); ?></a> 
            </h2>
    <?php the_content(); ?>
        </article>
            <?php endwhile; endif; ?>
        <small>page.php</small>
        <!--end the "Loop"-->
    <?php if(is_404()) { echo '404 Error. This page does not exist.';} ?>
    
    <?php get_sidebar(); ?>

   <?php get_footer(); ?>