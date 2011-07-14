<?php get_header(); ?>
	<article id="wppages">
		<h1><?php the_title()?></h1>
		<p><?php if (have_posts()) : while (have_posts()) : the_post();?>
		posted by <strong><?php the_author();?></strong> on <?php the_time('M d Y');?>	|	
		<?php comments_popup_link();?>	|	
		<?php edit_post_link(_('Edit Post'));?>
		<?php the_content();?>
		<?php endwhile; endif;?>
		</p>
	</article>
	
	<article class="syr_wpcomments">
		<?php comments_template();?>
	</article>
<?php get_footer(); ?>