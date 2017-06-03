<!--start of header.php-->
<?php get_header(); ?>
<!--end of header.php-->

<div id="content">
    
     <!--start the "Loop"-->
    <?php if ( have_posts() ) : while ( have_posts() ) : the_post(); ?>
        <article class="post-excerpt">
            <h2>
                <a href="<?php the_permalink(); ?>"> <?php the_title(); ?></a> 
            </h2>
        <small>Posted on <?php the_time('F j, Y'); ?> </small><br>
    <?php the_post_thumbnail( 'thumbnail' ); ?> <!--thumbnail picture-->
    <?php the_excerpt(); //allows us to get our posting's excerpt ?>
    <p class="readmore"><a href="<?php the_permalink(); ?>">Read More >></a></p>
        </article>
            <?php endwhile; endif; ?>
        <small>index.php</small>
        <!--end the "Loop"-->
    <?php if(is_404()) { echo '404 Error. This page does not exist.';} ?>
</div>
<?php get_sidebar(); ?>

    <?php get_footer(); ?>