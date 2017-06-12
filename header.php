<!DOCTYPE html>
<html <?php language_attributes(); ?>>
<head>
    <title><?php get_my_title_tag(); ?></title>
    <meta http-equiv="Content-Type" content="<?php bloginfo( 'html_type' ); ?>; charset=<?php bloginfo( 'charset' ); ?>">


<!--Remy Sharp Shim --> 
<!--[if lte IE 9]> 
<script src="https://oss.maxcdn.com/html5shiv/3.7.2/html5shiv.min.js" >
</script> 
<![endif]-->
<meta name="description" content="<?php echo strip_tags(get_the_excerpt()); ?>" />

<link href="<?php bloginfo('template_directory');?>/css/font-awesome.min.css" type="text/css" rel="stylesheet" >
<link href="<?php bloginfo('template_directory');?>/flexslider.css" type="text/css" rel="stylesheet">
<link href="<?php bloginfo('template_directory');?>/jquery.flexslider.js" type="text/css" rel="stylesheet">
<link href="https://fonts.googleapis.com/css?family=Poppins:300" rel="stylesheet">
<link href="https://fonts.googleapis.com/css?family=Lora" rel="stylesheet">
<meta name="viewport" content="width=device-width, initial-scale=1">
<!--<script src="dropdown.js"></script>-->
<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.7.2/jquery.min.js"></script>
    
<script>

    // flexslider
    $(document).ready() {
    $('.flexslider').flexslider({
    animation: "slide"
         });
    });
	
    
</script>
		
	    <!-- Modernizer -->
  
<link rel="stylesheet" type="text/css" href="<?php bloginfo( 'stylesheet_url' ); ?>" >
    
<?php wp_head(); ?>

</head>
    <body <?php body_class();?>> 
           
<div id="wrapper">
<!--Begin WordPress Menu -->
        <?php wp_nav_menu(array('theme_location' => 'main', 'container' => 'div', 'container_id' => 'nav',)); ?>
<!--End WordPress Menu-->

<header>
    <h1 class="head"><a href="<?php echo get_settings('home');?>"><?php bloginfo( 'name' ); ?></a></h1> 
    <h2 class="head"><?php bloginfo( 'description' ); ?></h2>
</header>