<?php
/**
 * The template for displaying 404 pages (Not Found).
 *
 * @package Scary Halloween 
 */

get_header(); ?>

<main id="maincontent" role="main" class="content-vw">
	<div class="container">
		<div class="page-content">
	    	<h1><?php echo esc_html(get_theme_mod('scary_halloween_404_page_title',__('404 Not Found','scary-halloween')));?></h1>
			<p class="text-404"><?php echo esc_html(get_theme_mod('scary_halloween_404_page_content',__('Looks like you have taken a wrong turn, Dont worry, it happens to the best of us.','scary-halloween')));?></p>
			<?php if( get_theme_mod('scary_halloween_404_page_button_text','Go Back') != ''){ ?>
				<div class="more-btn">
			        <a href="<?php echo esc_url(home_url()); ?>"><?php echo esc_html(get_theme_mod('scary_halloween_404_page_button_text',__('Go Back','scary-halloween')));?><span class="screen-reader-text"><?php echo esc_html(get_theme_mod('scary_halloween_404_page_button_text',__('Go Back','scary-halloween')));?></span></a>
			    </div>
			<?php } ?>
		</div>
		<div class="clearfix"></div>
	</div>
</main>


<?php get_footer(); ?>