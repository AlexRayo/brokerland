<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, height=device-height, initial-scale=1, user-scalable=no"/>
	<meta name="robots" content="index, follow" />
	<meta name="keywords" content="hosting España, sitio web, tráfico ilimitado, hosting rápido, hosting seguro" />
	<meta name="author" content="Formación y empleo" />
	<meta name="Description" content="Hosting España rápido, seguro y tráfico web ilimitado con múltitples beneficios">
	<link rel="preconnect" href="https://fonts.gstatic.com/" crossorigin />
    <link rel="dns-prefetch" href="https://fonts.gstatic.com/" />
	<link href="https://fonts.googleapis.com/css?family=Noto+Sans+JP:400,700&display=swap" rel="stylesheet">

</head>

<?php wp_head(); ?>
<body>
	<header class="position-fixed w-100 transition bg-white" id="header">
	
		<div class="container-fluid px-4 px-md-5 mx-auto top-bar d-flex justify-content-between align-items-center h-100" id="top-bar">			
			<div>
				<?php if( has_custom_logo() ) { 
				the_custom_logo(); 
					} else { ?>
					<h1 class="navbar-brand mb-0"><a href="<?php echo esc_url( home_url( '/' ) ); ?>" rel="home"><?php bloginfo( 'name' ); ?></a></h1>
				<?php } ?>
			</div>

			<div class="icon-menu pointer" id="icon-menu">
				<span class="icon-line"></span>
				<span class="icon-line"></span>
				<span class="icon-line"></span>
			</div>
							
			<div class="transition">					
				<?php 
				$args = array(
					'theme_location'  => 'menu_principal',
					'container'       => 'nav',
					'container_id'    => 'menu',
					);
				wp_nav_menu($args);
				?>
			</div>				
		</div>	

	</header>
