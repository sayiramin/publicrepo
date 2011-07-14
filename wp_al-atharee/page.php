<?php get_header(); ?>
	<div id="wppages">
		<h1><?php the_title()?></h1> 
		<?php edit_post_link(_('Edit Post'));?>

		<p><?php if (have_posts()) : while (have_posts()) : the_post();
		the_content();
		endwhile; endif;
		?>
		</p>
	</div>
	<?php get_footer(); ?>