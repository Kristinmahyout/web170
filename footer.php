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