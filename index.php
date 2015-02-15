<?php get_header(); ?>
<div class="clearfix">
		<section class="main">
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
</div>
<?php get_footer( ); ?>