<html>
<head>
	<meta charset="UTF-8">
		<title><?php bloginfo ( 'name' ); ?></title>
	<meta content='width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=0' name='viewport'/>
	<link rel="pingback" href="<?php bloginfo( 'pingback_url' ); ?>">
<script src="<?php bloginfo( 'template_url' ); ?>/js/jquery-1.12.0.min.js"></script>
<script src="<?php bloginfo( 'template_url' ); ?>/js/parallax.min.js"></script>
<!--Custom stylesheet-->
<link rel="stylesheet" href="<?php bloginfo( 'template_url' ); ?>/css/bootstrap.css">
<link rel="stylesheet" href="<?php bloginfo( 'template_url' ); ?>/style.css">


<!-- Optional theme -->
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.5/css/bootstrap-theme.min.css">
<link rel="stylesheet" href="<?php bloginfo( 'template_url' ); ?>/css/custom.css">
<link rel="stylesheet" href="<?php bloginfo( 'template_url' ); ?>/css/responsive.css">

<!-- Latest compiled and minified JavaScript -->
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.5/js/bootstrap.min.js"></script>


<!--OWL-->
<link rel="stylesheet" href="<?php bloginfo( 'template_url' ); ?>/css/owl.carousel.css">
<link rel="stylesheet" href="<?php bloginfo( 'template_url' ); ?>/css/owl.transitions.css">
<link rel="stylesheet" href="<?php bloginfo( 'template_url' ); ?>/css/owl.theme.css">
<link rel="icon" href="<?php bloginfo( 'template_url' ); ?>/img/icon.png">
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.5.0/css/font-awesome.min.css">
<link href='https://fonts.googleapis.com/css?family=Ubuntu:300,400,700|Lora:400,700' rel='stylesheet' type='text/css'>
<link href='https://fonts.googleapis.com/css?family=Montserrat:400,700|Cardo|Crimson+Text:400,400italic,700' rel='stylesheet' type='text/css'>

<script src="<?php bloginfo( 'template_url' ); ?>/js/owl.carousel.min.js"></script>
<script src="//use.edgefonts.net/passion-one:n4,n7,n9;neuton;source-sans-pro.js"></script>
<script type="text/javascript">
	


</script>
<?php wp_head(); ?>
</head>
<body <?php body_class( $class ); ?>>
<header>
<div class="container">
<div class="bottom-header-wrap">

<div class="top-header-logo">
	<a href="<?php bloginfo('url');?>"><img src="<?php echo esc_url( get_theme_mod( 'themeslug_logo' ) ); ?>"></a>
	</div>

	<div class="nav-menu">
			<div class="header-info-wrap">
		<div class="hours"><i class="fa fa-clock-o"></i><span>Vardagar 08:30 - 16:30</span></div>
		<div class="mail"><i class="fa fa-envelope-o"></i><a href="mailto:parfektel@gmail.com">parfektel@gmail.com</a></div>
		<div class="phone"><i class="fa fa-mobile"></i><span>020-303 500</span></div> 
		</div>
			<?php wp_nav_menu( array( 'theme_location' => 'main_nav', 'menu_class' => 'nav-menu', 'menu_class' => 'site_nav', 'container_class' => 'menu-main-menu-container') ); ?>
		
			<div class="menu-toggle"></div>
		</div>
	</div>

</div>


</header>