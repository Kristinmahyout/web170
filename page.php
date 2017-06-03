<!--start of header.php-->
<?php get_header(); ?>
<!--end of header.php-->

<div id="content-page">
<!--Start Text "Loop"-->
    
    <!--start the "Loop"-->
    <?php if ( have_posts() ) : while ( have_posts() ) : the_post(); ?>
    <article id="article-<?php the_ID(); ?>" class="article">
    <!--<article id="article-<?//php the_ID(); ?>" class="article"> -->
    <h2>
        <a href="<?php the_permalink(); ?>"> <?php the_title(); ?></a> 
    </h2>
    <?php the_content(); ?>
    </article>
    <?php endwhile; endif; ?>
<!--end Text "Loop"-->
        
<!--404 page-->       
    <?php if(is_404()) { echo '404 Error. This page does not exist.';} ?>
<!--end 404 page-->
        
    <small>page.php</small>
</div>     
<!--Start SideBar-->

    <?php get_sidebar(); ?>

<!--End SideBar-->


<!--Start footer-->
   <?php get_footer(); ?>
<!--End footer-->