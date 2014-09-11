<?php
/**
 * The Header for our theme
 *
 * Displays all of the <head> section and everything up till <div id="main">
 *
 * @package WordPress
 * @subpackage Twenty_Fourteen
 * @since Twenty Fourteen 1.0
 */
?><!DOCTYPE html>
<!--[if IE 7]>
<html class="ie ie7" <?php language_attributes(); ?>>
<![endif]-->
<!--[if IE 8]>
<html class="ie ie8" <?php language_attributes(); ?>>
<![endif]-->
<!--[if !(IE 7) | !(IE 8) ]><!-->
<html <?php language_attributes(); ?>>
<!--<![endif]-->
<head>
	<meta charset="<?php bloginfo( 'charset' ); ?>">
	<!-- <meta name="viewport" content="width=device-width"> -->
	<title><?php wp_title( '|', true, 'right' ); ?></title>
	<meta content="<?php echo get_template_directory_uri(); ?>/images/favicon.png" itemprop="image">
	<link rel="icon" href="<?php echo get_template_directory_uri(); ?>/images/favicon.png" type="image/png" />
	<link rel="shortcut icon" href="<?php echo get_template_directory_uri(); ?>/images/favicon.png" type="image/png" />
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="author" content="Libra Design" />
	<meta name="keywords" content="Paulo, Rocha, 131, PT, partido, Pará, Belém, Deputado, Estadual" />
<meta property="og:image" content="<?php echo get_template_directory_uri(); ?>/images/logo-mini.jpg" />
<meta property="og:type" content="website" />
<link rel="profile" href="http://gmpg.org/xfn/11">
<link rel="pingback" href="<?php bloginfo( 'pingback_url' ); ?>">
<link rel="stylesheet" href="<?php echo get_template_directory_uri(); ?>/library/bootstrap/css/bootstrap.min.css">
<link rel="stylesheet" href="<?php echo get_template_directory_uri(); ?>/fonts/stylesheet.css">
<link rel="stylesheet" href="<?php echo get_template_directory_uri(); ?>/images/icon.css">
	<!--[if lt IE 9]>
	<script src="<?php echo get_template_directory_uri(); ?>/js/html5.js"></script>
	<![endif]-->
	<?php wp_head(); ?>
	<script type="text/javascript" src="<?php echo get_template_directory_uri(); ?>/library/cycle2/jquery.cycle2.min.js"></script>
<script type="text/javascript" src="<?php echo get_template_directory_uri(); ?>/library/cycle2/jquery.cycle2.swipe.min.js"></script>
<script type="text/javascript" src="<?php echo get_template_directory_uri(); ?>/library/cycle2/jquery.cycle2.scrollVert.min.js"></script>
<script type="text/javascript" src="<?php echo get_template_directory_uri(); ?>/library/cycle2/jquery.cycle2.carousel.min.js"></script>
<script type="text/javascript" src="<?php echo get_template_directory_uri(); ?>/library/easing/jquery.easing.1.3.js"></script>
<script type="text/javascript" src="<?php echo get_template_directory_uri(); ?>/library/prettyPhoto/js/jquery.prettyPhoto.js"></script>
	<script type="text/javascript" src="<?php echo get_template_directory_uri(); ?>/js/site.js"></script>
</head>

<body <?php body_class(); ?>>
	<a class="screen-reader-text skip-link sr-only" href="#content">Pular para conteúdo</a>
	<div id="page" class="hfeed site">
		<header id="masthead" class="extra-header" role="banner">
			<div class="site-header">
				<div class="container">
					<nav class="navbar navbar-default" role="navigation">
						<div class="container-fluid">
							<!-- Brand and toggle get grouped for better mobile display -->
							<div class="navbar-header">
								<button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#primary-navigation">
									<span class="sr-only">Navegação</span>
									<span class="icon-bar"></span>
									<span class="icon-bar"></span>
									<span class="icon-bar"></span>
								</button>
								<?php if ( get_header_image() ) : ?>
								<a href="<?php echo esc_url( home_url( '/' ) ); ?>" rel="home" class="navbar-brand">
									<img src="<?php header_image(); ?>" width="<?php echo get_custom_header()->width; ?>" height="<?php echo get_custom_header()->height; ?>" alt="<?php bloginfo( 'name' ); ?>">
								</a>
							<?php else: ?>
							<a href="<?php echo esc_url( home_url( '/' ) ); ?>" rel="home" class="navbar-brand"><?php bloginfo( 'name' ); ?></a>
						<?php endif; ?>
					</div> <!-- .navbar-header -->

					<!-- Collect the nav links, forms, and other content for toggling -->
					<div class="collapse navbar-collapse" id="primary-navigation">
						<?php wp_nav_menu( array( 'theme_location' => 'primary', 'menu_class' => 'nav navbar-nav', 'items_wrap' => '<ul id="%1$s" class="%2$s">%3$s</ul>' ) ); ?>
						<div class="pull-left social-header">
							<a href="https://www.youtube.com/channel/UCy_z29Kv2MupiMl2qFODygw" title="Acesse nosso Youtube" target="_blank"><span class="icon-youtube"></span><span class="sr-only">Youtube</span></a>
							<a href="http://instagram.com/paulorochapt131" title="Acesse nosso Instagram" target="_blank"><span class="icon-instagram"></span><span class="sr-only">Instagram</span></a>
							<a href="https://www.facebook.com/paulo.rocha.1865904?fref=ts" title="Acesse nosso Facebook" target="_blank"><span class="icon-facebook"></span><span class="sr-only">Facebook</span></a>
							<a href="paulorochapt131@gmail.com" title="Envie-nos um e-mail" target="_blank"><span class="icon-mail"></span><span class="sr-only">E-mail</span></a>
						</div>
					</div> <!-- #primary-navigation -->
				</div><!-- /.container-fluid -->
			</nav>
		</div> <!-- .container -->
	</div> <!-- .site-header -->
	<div class="site-header-bottom"></div> <!-- .site-header-bottom -->
</header><!-- #masthead -->

<div id="main" class="site-main">
	<div class="container">
		<div class="site-central">
