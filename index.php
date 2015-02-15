<!DOCTYPE html>
<html>
<head>
	<title><?php bloginfo('name'); ?></title>
	<script src="http://use.edgefonts.net/josefin-slab.js"></script>
	<script src="http://use.edgefonts.net/merriweather.js"></script>
	<link rel="stylesheet" href="http://localhost/wk2/wordpress/wp-content/themes/pressed/style.css"/>
</head>
	<body>
		<header>
			<h1>><?php bloginfo('name'); ?> | <?php bloginfo('description'); ?></h1>
			<nav>
				<ul>
					<?php wp_nav_menu(  array('menu' => 'Main Nav')); ?>
				</ul>
			</nav>
		</header>
		<section>
			<img src="http://localhost/wk2/wordpress/wp-content/themes/pressed/images/hero.jpg" />
				<?php if ( have_posts()) : while ( have_posts () ) : the_post(); ?>
			<article>
				<h2><a href="<?php the_permalink(); ?>" title="For more info on <?php the_title_attribute(); ?>"><?php the_title(); ?></a></h2>
				<?php the_content(); ?>
			</article>
				<?php endwhile; else: ?>
			<p><?php _e('Sorry, no posts matched your criteria.' ); ?></p>
		<?php endif; ?>
		</section>
		<footer>
			<h1>Contact Us</h1>
			<p>Pressed and Squeezed</p>
			<p>2525 Orange Way, Orchard, CA 91104</p>
			<p>Phone: (800) 424-3232</p>
		</footer>
	</body>
</html>