<!doctype html>
<html>
<head>
	<meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">

<title>Pinners Utah: <?php wp_title(); ?></title>
	 <link rel="stylesheet" href="<?php echo get_template_directory_uri();?>/node_modules/bootstrap/dist/css/bootstrap.css">
    <link rel="stylesheet" href="<?php echo get_template_directory_uri();?>/css/main.css">
	<link type="text/css" rel="stylesheet" href="style.css">
	
	<!-- DOWNLOAD GOOGLE FONT -->
	<link href="https://fonts.googleapis.com/css?family=Montserrat" rel="stylesheet">
	<!-- DOWNLOAD FONT AWESOME  -->
	<link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.0.10/css/all.css" integrity="sha384-+d0P83n9kaQMCwj8F4RJB66tzIwOKmrdb46+porD/OvrJ+37WqIM7UoBtwHO6Nlg" crossorigin="anonymous">
	
<?php remove_filter( 'the_content', 'wpautop' ); ?>
</head>

<body>
<header>
	<div class="container-nav">
<nav>
<?php wp_nav_menu(array('menu_class' => 'primary-nav')); ?>
	
<!--	phone navigation button-->
	<button class="nav-button">Toggle Navigation</button>
	
</nav>
	
	 <a class="navbar-brand" href="#"><img class="logo" src="<?php echo get_template_directory_uri();?>/img/logo.png" alt="logo"></a>
	<div class="row infoBar">
       
        <div class="col infoItem dates">
            November 2-3, 2018
        </div>
        <div class="col infoItem">

        </div>
        <div class="col infoItem" id="social">
			<div class="tandy">
                <img src="<?php echo get_template_directory_uri();?>/img/tandy_leather.png" alt="tandy">
            </div>
		<div class="social">
            <a  href="#" id="nav-link"><i class="fab fa-facebook-f"></i></a>
            <a  href="#" id="nav-link"><i class="fab fa-instagram"></i></a>
            <a href="#" id="nav-link"><i class="fab fa-pinterest-p"></i></a>
        </div>
    </div>

</div>
</div> 
<!--	end of conatiner-->
	</header
	