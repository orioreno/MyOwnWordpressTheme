<!DOCTYPE html>
<html lang="id">
<head>
	<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<meta name="description" content="<?php echo get_bloginfo( 'description' ); ?>">
	<meta name="author" content="Andy Januar Wicaksono">
	<link rel="stylesheet" href="<?php bloginfo('stylesheet_url'); ?>">
	<?php wp_head(); ?>
</head>
<body>
	<div id="header">
		<div class="header-container">
			<a href="<?php bloginfo('wpurl');?>" title="<?php echo get_bloginfo( 'name' ); ?>" class="brand">
				<h1><?php echo get_bloginfo( 'name' ); ?></h1>
			</a>
			<?php wp_nav_menu(); ?>
		</div>
	</div>