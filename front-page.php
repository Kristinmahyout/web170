<!--start of header.php-->
<?php get_header(); ?>
<!--end of header.php-->
<div id="content.front">
    
    <aside class="page1">
        
        <!--flexslider-->
        <div class="flexslider">
            <ul class="slides">
                <li>
                    <img src="<?php echo get_stylesheet_directory_uri() ?>/images/hawaiianprint.jpg" />
                </li>
                <li>
                    <img src="<?php echo get_stylesheet_directory_uri() ?>/images/ethos-digitaldump.jpg" alt="ethos" />
                </li>
                <li>
                    <img src="<?php echo get_stylesheet_directory_uri() ?>/images/caos.jpg" alt="illustrated caos" />
                </li>
                <li>
                    <img src="<?php echo get_stylesheet_directory_uri() ?>/images/Cherdonna24x36.jpg" alt="velocity" />
                </li>
            </ul>
        </div>
        <!--end flexslider-->
    </aside>

   
    
     <!--start the "Loop"-->  
    
    <!--homepage paragraph-->
    <?php if ( have_posts() ) : while( have_posts() ) : the_post(); // start loop one ?>
    <?php the_content(''); // get the home page's content ?>
    <?php endwhile; endif; // end loop one ?>
    <!--end homepage paragraph-->
     
        <?php rewind_posts(); // stop loop one ?>
        <?php query_posts('showposts=4'); // give directions to loop two ?>
        <?php while (have_posts()) : the_post(); // start loop two ?>
        <li><a href="<?php the_permalink(); ?>"><?php the_title(); ?></a></li>
        <?php endwhile; // end loop two ?>
        
        <small>front-page.php</small>
        <!--end the "Loop"-->
    <?php if(is_404()) { echo '404 Error. This page does not exist.';} ?>
    <?php get_footer(); ?>