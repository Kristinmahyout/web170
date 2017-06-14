<!--start of header.php-->
<?php get_header(); ?>
<!--end of header.php-->
<div id="content.front">
    
    <main class="page1">
        
        <!--flexslider-->
        <div class="container">
            
                <div class="col-md-5 col-md-offset-1">
                    <img class="img-responsive hawaii" src="<?php echo get_stylesheet_directory_uri() ?>/images/hawaiianprint.jpg" />
                    </div>
                
                <div class="col-md-5">
                    <img class="img-responsive cow" src="<?php echo get_stylesheet_directory_uri() ?>/images/caos.jpg" alt="illustrated caos" />
                </div>
        </div>
        
        <div class="container one">
               
                <div class="col-md-5 col-md-offset-1">
                    <img class="img-responsive" src="<?php echo get_stylesheet_directory_uri() ?>/images/fulltilt2015.jpg">
                </div>
                
                <div class="col-md-5"> 
                    <img class="img-responsive cherdonna" src="<?php echo get_stylesheet_directory_uri() ?>/images/Cherdonna24x36.jpg" alt="velocity" />
                </div>
                
        </div>
        <!--end flexslider-->
    </main>

   
    
     <!--start the "Loop"-->  
    
    <!--homepage paragraph-->
    <div class="container">
        <div class="col-md-8 col-med-offset-2">
    <?php if ( have_posts() ) : while( have_posts() ) : the_post(); // start loop one ?>
    <?php the_content(''); // get the home page's content ?>
    <?php endwhile; endif; // end loop one ?>
    <!--end homepage paragraph-->
        </div><!--end col-md-8-->
    </div><!--end col-container-->
     
    <!--Start Recent Posts-->
        <h2>Recent Posts</h2>
        <?php rewind_posts(); // stop loop one ?>
        <?php query_posts('showposts=4'); // give directions to loop two ?>
        <?php while (have_posts()) : the_post(); // start loop two ?>
        <li class="blog"><a href="<?php the_permalink(); ?>"><?php the_title(); ?></a></li>
        <?php endwhile; // end loop two ?>
        
        <small>front-page.php</small>
        <!--end the "Loop"-->
    <?php if(is_404()) { echo '404 Error. This page does not exist.';} ?>
    <?php get_footer(); ?>