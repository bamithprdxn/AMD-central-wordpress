<?php
	$siteTitle = get_bloginfo('name');
	$siteTagLine =  get_bloginfo('description');
?>

<!DOCTYPE html>
<html>
<head>
	<title><?php echo $siteTitle ." - " . $siteTagLine; ?></title>
	<?php wp_head(); ?>
</head>
<body>
	<header class="header">
		<div class="wrapper">
			<h1 class="header_heading"><a href="<?php echo get_home_url(); ?>" title="<?php echo $siteTitle; ?>" class="header_heading_link"><?php echo $siteTitle; ?></a></h1>
			<?php
				wp_nav_menu(
					array(
						'theme_location' => 'top-menu',
						'menu_class' => 'navigation'
					)
				);
			?>
		</div>
	</header>
