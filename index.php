<!--start of header.php-->
<?php get_header(); ?>
<!--end of header.php-->
<div id="content">
    <?php if ( have_posts() ) : while ( have_posts() )
: the_post(); ?>
    <article id="article-<?php the_ID(); ?>" class="article">
        <h2>
            <a href="<?php the_permalink(); ?>" <?php the_title(); ?> 
            </a>
        </h2>
        <?php the_content(); ?>
    </article>
    <?php endwhile; endif; ?>
    <small>index.php</small>
    <aside class="page1">   
        <p class="about">Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim adminim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur.</p> 
    </aside>

    <main class="page1">
        <div class="box1">
  	    	    <img class="slides2" src="<?php echo get_stylesheet_directory_uri()?>/images/hawaiianprint.jpg" alt="hawaiian">
  	    	    <img class="slides3" src="<?php echo get_stylesheet_directory_uri()?>/images/ethos-digitaldump.jpg" alt="ethos">
  	    	   <img class="slides5" src="<?php echo get_stylesheet_directory_uri()?>/images/caos.jpg" alt="illustrated caos" >
        </div><!--end box 1-->
        <div class="box2">
  	    	    <img class="slides1" src="<?php echo get_stylesheet_directory_uri()?>/images/ksremoveposter.png" alt="karin stevens">
  	    	    <img class="slides4" src="<?php echo get_stylesheet_directory_uri()?>/images/Cherdonna24x36.jpg" alt="velocity" >
        </div><!--end box 2-->
    </main>
    </div> <!--end of wrapper-->

<footer>
    <div id="inner-footer">
        <div id="left">
            <div class="left">
                <p> Maris Antolin</p>
                <p> (206) 999-9999</p>
                <p> 56 Address St.</p>
                <p> Seattle, WA</p>
            </div>  <!--end  CLASS left-->
            <div class="right">
                <ul id="social">
                    <li> 
                        <a href=""><i class="fa fa-facebook-square"></i></a>
                    </li>
                    <li> 
                        <a href=""><i class="fa fa-instagram"></i></a>
                    </li>
                    <li> 
                        <a href=""><i class="fa fa-twitter"></i></a>
                    </li>
                </ul>
            </div>  <!--end  CLASS right-->
        </div>  <!--end div #left-->


        <div id="right">
            <form action="formhandler.php" method="post" >
                <fieldset>
                    <legend>Give Maris A Shout!</legend>
                    <input type="text" name="name" placeholder="Your Name">
                    <input type="email" name="email" placeholder="Your Email" >
                    <textarea name="comments" rows="4" placeholder="Questions"></textarea>
                    <input type="submit" value="Contact Maris" >
                </fieldset>
            </form>
        </div>  <!--end div #right-->

    </div>  <!--close inner footer-->
</footer>

<div id="copyright">
    <ul>
        <li>
            <a href="https://validator.w3.org/nu/?doc=http%3A%2F%2Fedison.seattlecentral.edu%2F~Kristin.Delviscio%2Fweb120%2Ffinal%2Findex.php">HTML</a>
        </li>
        <li>
            <a href="https://jigsaw.w3.org/css-validator/validator?uri=http%3A%2F%2Fedison.seattlecentral.edu%2F~Kristin.Delviscio%2Fweb120%2Ffinal%2Findex.php&profile=css3&usermedium=all&warning=1&vextwarning=&lang=en">CSS</a>
        </li>
        <li>
            <a href="">Designed by Kristin</a>
        </li>
        <li>
            <a href="">©copyright 2016</a>
        </li>
    </ul>
</div>  <!--end copyright-->

<!--start wp footer-->
<?php wp_footer(); ?>
<!--end wp footer-->

</body>
</html>