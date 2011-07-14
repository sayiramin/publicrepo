<?php get_header(); ?>

    
	<div id="wppages">
		
		<?php if(have_posts()):?>
			<?php while(have_posts()):the_post()?>
			<a href="<?php the_permalink();?>">
			<h1><?php the_title();?></h1></a>
			<p>	<?php the_content();?>
				<?php the_category();?>
				<?php wp_meta();?>
			</p>
			<?php endwhile;?>
		<?php endif;?>
		
	 </div>
    
<?php get_footer();?>