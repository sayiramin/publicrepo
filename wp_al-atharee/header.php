<?php
/* echo 'how are you'; */
?>
<!doctype html>
<!--[if lt IE 7 ]> <html class="no-js ie6" lang="en"> <![endif]-->
<!--[if IE 7 ]>    <html class="no-js ie7" lang="en"> <![endif]-->
<!--[if IE 8 ]>    <html class="no-js ie8" lang="en"> <![endif]-->
<!--[if (gte IE 9)|!(IE)]><!--> <html class="no-js" lang="en"> <!--<![endif]-->

<head>
  <meta charset="<?php bloginfo('charset');?>">
  <title><?php bloginfo('name');?></title>
  <meta name="description" content="<?php bloginfo('description');?>">
  <meta name="author" content="al-atharee| association of gambia">

  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link rel="shortcut icon" href="<?php bloginfo('template_url'); ?>/favicon.png">
  <link rel="apple-touch-icon" href="<?php bloginfo('template_url'); ?>/apple-touch-icon.png">
  <link rel="stylesheet" href="<?php bloginfo('template_url'); ?>/css/style.css">
  <link href='http://fonts.googleapis.com/css?family=Anton&amp;v1' rel='stylesheet'>
  <link href='http://fonts.googleapis.com/css?family=Droid+Sans&amp;v1' rel='stylesheet'>
  <link href='http://fonts.googleapis.com/css?family=Caudex:italic&amp;v1' rel='stylesheet'>
  <script src="<?php bloginfo('template_url'); ?>/js/libs/modernizr-1.7.min.js"></script>
  <?php wp_head(); ?>

</head>


<body>
  <div id="container">
    <header>
		<section id="branding-top">
			<hgroup id="logo-tagline">
				<h1><img src="<?php bloginfo('template_url'); ?>/img/logo.png" alt="al-atharee logo image"></h1>
				<h2>our association seeks to make accessible , the means of learning authentic knowledge of islam, inviting others to it and promoting its peaceful, holistic and righteous way of life amongst all sectors of the Gambian population.</h2>
			</hgroup>
			
			
			
			
			<div id="socialize">
				<a href="http://www.facebook.com/AlAthareeGambia" target="_blank"><img src="<?php bloginfo('template_url'); ?>/img/social_facebook.png" alt="social image"></a>
				<a href="https://twitter.com/AlAthareeGambia" target="_blank"><img src="<?php bloginfo('template_url'); ?>/img/social_twitter_bird.png" alt="social image"></a>
				<a href="http://www.youtube.com/user/AlAthareeGambia" target="_blank"><img src="<?php bloginfo('template_url'); ?>/img/social_you_tube.png" alt="social image"></a>
			</div>
			
			<input id="top-search" type="text" value="search..">
			<div style="clear:both;"></div> <!-- clear the floats -->
		</section>
		
		<nav id="main-navigation">
			<ul class="nav1">
				<li><a href="<?php bloginfo('url'); ?>">home</a></li>
				<li><a href="<?php bloginfo('url'); ?>/image-gallery">gallery</a></li>
				<li><a href="<?php bloginfo('url'); ?>/the-gambia">the gambia</a></li>
				<li><a href="<?php bloginfo('url'); ?>/our-projects">our projects</a></li>
				<li><a href="<?php bloginfo('url'); ?>/donate">donate</a></li>
				<li><a href="<?php bloginfo('url'); ?>/our-orphans">our orphans</a></li>
				<li><a href="<?php bloginfo('url'); ?>/about-us">about us</a></li>
			</ul>
			
			<ul class="nav2"> 
				<li><a href="mailto:alathareegambia@gmail.com" target="_blank"><img src="<?php bloginfo('template_url'); ?>/img/mail_plain.png" alt="Mail"><span>contact us</span></a></li>
				<li><a href="<?php bloginfo('rss2_url'); ?>"><img src="<?php bloginfo('template_url'); ?>/img/rss_alternate.png" alt="RSS"><span>subscribe rss</span></a></li>
			</ul>
			
			<div style="clear:both;"></div> <!-- clear the floats -->
		</nav>
    </header>
    <!-- /header  -->