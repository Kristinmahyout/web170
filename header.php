<!DOCTYPE html>
<html <?php language_attributes(); ?>>
<head>
    <title><?php bloginfo(); ?></title>
    <meta http-equiv="Content-Type" content="<?php bloginfo( 'html_type' ); ?>; charset=<?php bloginfo( 'charset' ); ?>">


<!--Remy Sharp Shim --> 
<!--[if lte IE 9]> 
<script src="https://oss.maxcdn.com/html5shiv/3.7.2/html5shiv.min.js" >
</script> 
<![endif]-->

<link href="<?php bloginfo('template_directory');?>/css/font-awesome.min.css" type="text/css" rel="stylesheet" >
<link href="https://fonts.googleapis.com/css?family=Poppins:300" rel="stylesheet">
<link href="https://fonts.googleapis.com/css?family=Lora" rel="stylesheet">
<meta name="viewport" content="width=device-width, initial-scale=1">
<!--<script src="dropdown.js"></script>-->
<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.7.2/jquery.min.js"></script>
    
		
	    <!-- Modernizer -->
  
<link rel="stylesheet" type="text/css" href="<?php bloginfo( 'stylesheet_url' ); ?>" >
    
<?php wp_head(); ?>

</head>
    <body <?php body_class();?>> 
        <div id="wrapper">   
        <!--Being Static Navigation
            
            <nav>
                <ul class="nav">
                    <li class="nav<!--?php if ($page == 'contact.php') { print '-on'; }?>"><a href="contact.php">Contact</a></li>
                    <li class="dropdown"><a href="javascript:void(0)" class="dropbtn" onclick="myFunction()">Portfolio</a>
  	     <div class="dropdown-content" id="myDropdown">
		      <a href="karin.php">Karin Stevens</a>
              <a href="illustrations.php">Illustrations</a>
              <a href="velocity.php">Velocity</a>
         </div><!--end of dropdown-->
        <!--
                    </li>
                    <li class="nav<!--?php if ($page == 'blog.php') { print '-on'; }?>"><a href="blog.php">Blog</a></li>
                    <li class="nav<!--?php if ($page == 'resume.php') { print '-on'; }?>"><a href="resume.php">Resume</a></li>
                </ul><!--end of nav-->
           <!-- </nav>

<script>
/* When the user clicks on the button, 
toggle between hiding and showing the dropdown content */
function myFunction() {
    document.getElementById("myDropdown").classList.toggle("show");
}
// Close the dropdown if the user clicks outside of it
window.onclick = function(e) {
  if (!e.target.matches('.dropbtn')) {
    var dropdowns = document.getElementsByClassName("dropdown-content");
    for (var d = 0; d < dropdowns.length; d++) {
      var openDropdown = dropdowns[d];
      if (openDropdown.classList.contains('show')) {
        openDropdown.classList.remove('show');
      }
    }
  }
}
</script>


<!--Start Mobile Nav-->
     <!--   <button class="nav-button">Toggle Navigation</button>

		<ul class="primary-nav">
			        <li><a href="index.php">Home</a></li>
			        <li class="parent"><a href="resume.php">Resume</a>
					<li><a href="karin.php">Karin Stevens</a></li>
					<li><a href="illustrations.php">Illustrations</a></li>
					<li><a href="velocity.php">Velocity</a></li>
					<li><a href="ethos.php">Ethos Mag</a></li>
                    <li><a href="contact.php">Contact</a></li>
		</ul>
<!--End Mobile Nav-->
        
        <!--End Static Navigation-->
            
<!--Begin WordPress Menu-->
        <?php wp_nav_menu(array('theme_location' => 'main-menu', 'container' => 'div', 'container_id' => 'nav',)); ?>
<!--End WordPress Menu-->

<header>
<h1 class="head"><?php bloginfo( 'name' ); ?></h1> 
    <h2 class="head"><?php bloginfo( 'description' ); ?></h2>
</header>