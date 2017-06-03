<!--start of header.php-->
<?php get_header(); ?>
<!--end of header.php-->
<div id="content">
    
     <!--start the "Loop"-->
    <?php if ( have_posts() ) : while ( have_posts() ) : the_post(); ?>
    <article id="post-<?php the_ID(); ?>" class="post">
        <h2>
            <a href="<?php the_permalink(); ?>"> <?php the_title(); ?> </a> 
        </h2>
        
    <small><?php the_time('F j, Y');?></small> <br>
        
    <?php the_post_thumbnail( 'large' ); ?> <!--thumbnail picture-->
    <?php the_content(); ?>
    </article>
    <?php endwhile; endif; ?>
    
    <small>single.php</small>
        <!--end the "Loop"-->
    <?php if(is_404()) { echo '404 Error. This page does not exist.';} ?>
</div>
<aside><?php get_sidebar(); ?></aside>
</div>
   <?php get_footer(); ?>