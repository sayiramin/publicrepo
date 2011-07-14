<?php get_header(); ?>
	<div id="main" role="main">
		<div class="div1">
			<section class="sec1">
				<h1>Welcome to Al-Atharee</h1>
				<p>Welcome to our website. we hope hat you enjoy reading about our Grass Root initiative here in The Gambia, West Africa and that it may inspire you to likewise care and share and help make our vision for the 95% Muslim population become a reality.</p>
				
				<p>our association seeks to make accessible, the means of learning authentic knowledge of islam, inviting others to it and promoting its peaceful, holistic and righteous way of life amongst all sectors of the Gambian population.<a href="#">read more..</a></p>
			</section>
			
			<section class="sec2">
				<p>if you wish to donate for this noble cause, you can make your donations online, just click the donate button and follow the instructions.</p>
				<a href="<?php bloginfo('url'); ?>/donate"><img src="<?php bloginfo('template_url'); ?>/img/donate-btn.jpg" alt="donate"></a>
			</section>
			
			<div style="clear:both;"></div> <!-- clear the floats -->
		</div>
		
		<div class="div2">
			<a href="#"><img src="<?php bloginfo('template_url'); ?>/img/ib1.jpg" alt="image-banner"></a>
			<a href="#"><img src="<?php bloginfo('template_url'); ?>/img/ib2.jpg" alt="image-banner"></a>
			<a href="#"><img src="<?php bloginfo('template_url'); ?>/img/ib3.jpg" alt="image-banner"></a>
			<a href="#"><img src="<?php bloginfo('template_url'); ?>/img/ib4.jpg" alt="image-banner"></a>
		</div>
		
		<div class="div3">
			<section class="rel-boxes">
				<h1>
					<img src="<?php bloginfo('template_url'); ?>/img/articles_img.png" alt="articles-image"> <span>Articles</span>
				</h1>
				<ul>
					<?php query_posts('category_name=articles&showposts=5');?>
					<?php while(have_posts()):the_post();?>
						<li><a href="<?php the_permalink();?>"><?php the_title();?></a></li>
					<?php endwhile;?>
				</ul>
				<?php wp_reset_query();?>
				
				
				<div style="clear:both;"></div> <!-- clear the floats -->
				
				<a href="#" class="link-to-cat">more articles...</a>
				<div style="clear:both;"></div> <!-- clear the floats -->
			</section>
			
			<section class="rel-boxes">
				<h1>
					<img src="<?php bloginfo('template_url'); ?>/img/video_img.png" alt="video-image"> <span>Videos</span>
				</h1>
				<div style="clear:both;"></div> <!-- clear the floats -->
			
				<ul>
					<li style="list-style:none;"><img src="<?php bloginfo('template_url'); ?>/img/video-preview.jpg" alt="video-image"></li>
					<?php query_posts('category_name="videos"&showposts=2');?>
					<?php while(have_posts()):the_post();?>
						<li><a href="<?php the_permalink();?>"><?php the_title();?></a></li>
					<?php endwhile;?>
				</ul>
				
				
				<?php wp_reset_query();?>
				<a href="#" class="link-to-cat">more videos...</a>
				<div style="clear:both;"></div> <!-- clear the floats -->
			</section>
			
			<section class="rel-boxes" id="rel-box3">
				<h1>
					<img src="<?php bloginfo('template_url'); ?>/img/rss_circle_img.png" alt="rss-image"> <span>RSS Feed</span>
				</h1>
				<div style="clear:both;"></div> <!-- clear the floats -->
				
				<ul>
					<?php query_posts('showposts=7');?>
					<?php while(have_posts()):the_post();?>
						<li><a href="<?php the_permalink();?>"><?php the_title();?></a></li>
					<?php endwhile;?>
					<?php wp_reset_query();?>
				</ul>
				
				
				
				<a href="#" class="link-to-cat">more...</a>
				<div style="clear:both;"></div> <!-- clear the floats -->
			</section>
			
			<div style="clear:both;"></div> <!-- clear the floats -->
		</div>
	</div>
<?php get_footer();?>