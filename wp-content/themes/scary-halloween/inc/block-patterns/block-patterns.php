<?php
/**
 * Scary Halloween: Block Patterns
 *
 * @package Scary Halloween
 * @since   1.0.0
 */

/**
 * Register Block Pattern Category.
 */
if ( function_exists( 'register_block_pattern_category' ) ) {

	register_block_pattern_category(
		'scary-halloween',
		array( 'label' => __( 'Scary Halloween', 'scary-halloween' ) )
	);
}

/**
 * Register Block Patterns.
 */
if ( function_exists( 'register_block_pattern' ) ) {
	register_block_pattern(
		'scary-halloween/banner-section',
		array(
			'title'      => __( 'Banner Section', 'scary-halloween' ),
			'categories' => array( 'scary-halloween' ),
			'content'    => "<!-- wp:cover {\"url\":\"" . esc_url(get_template_directory_uri()) . "/inc/block-patterns/images/banner.png\",\"id\":128,\"dimRatio\":50,\"customOverlayColor\":\"#00000000\",\"isUserOverlayColor\":true,\"minHeight\":600,\"metadata\":{\"categories\":[\"scary-halloween\"],\"patternName\":\"scary-halloween/banner-section\",\"name\":\"Banner Section\"},\"align\":\"full\",\"className\":\"banner-section\",\"layout\":{\"type\":\"constrained\"}} -->\n<div class=\"wp-block-cover alignfull banner-section\" style=\"min-height:600px\"><span aria-hidden=\"true\" class=\"wp-block-cover__background has-background-dim\" style=\"background-color:#00000000\"></span><img class=\"wp-block-cover__image-background wp-image-128\" alt=\"\" src=\"" . esc_url(get_template_directory_uri()) . "/inc/block-patterns/images/banner.png\" data-object-fit=\"cover\"/><div class=\"wp-block-cover__inner-container\"><!-- wp:columns {\"className\":\"bat-section\"} -->\n<div class=\"wp-block-columns bat-section\"><!-- wp:column -->\n<div class=\"wp-block-column\"><!-- wp:image {\"id\":72,\"width\":\"auto\",\"height\":\"80px\",\"sizeSlug\":\"full\",\"linkDestination\":\"none\",\"className\":\"position-absolute bat-1\"} -->\n<figure class=\"wp-block-image size-full is-resized position-absolute bat-1\"><img src=\"" . esc_url(get_template_directory_uri()) . "/inc/block-patterns/images/bat-1.png\" alt=\"\" class=\"wp-image-72\" style=\"width:auto;height:80px\"/></figure>\n<!-- /wp:image --></div>\n<!-- /wp:column -->\n\n<!-- wp:column -->\n<div class=\"wp-block-column\"><!-- wp:image {\"id\":72,\"width\":\"auto\",\"height\":\"80px\",\"sizeSlug\":\"full\",\"linkDestination\":\"none\",\"className\":\"position-absolute bat-2\"} -->\n<figure class=\"wp-block-image size-full is-resized position-absolute bat-2\"><img src=\"" . esc_url(get_template_directory_uri()) . "/inc/block-patterns/images/bat-1.png\" alt=\"\" class=\"wp-image-72\" style=\"width:auto;height:80px\"/></figure>\n<!-- /wp:image --></div>\n<!-- /wp:column -->\n\n<!-- wp:column -->\n<div class=\"wp-block-column\"><!-- wp:image {\"id\":72,\"width\":\"auto\",\"height\":\"50px\",\"sizeSlug\":\"full\",\"linkDestination\":\"none\",\"className\":\"position-absolute bat-3\"} -->\n<figure class=\"wp-block-image size-full is-resized position-absolute bat-3\"><img src=\"" . esc_url(get_template_directory_uri()) . "/inc/block-patterns/images/bat-1.png\" alt=\"\" class=\"wp-image-72\" style=\"width:auto;height:50px\"/></figure>\n<!-- /wp:image --></div>\n<!-- /wp:column -->\n\n<!-- wp:column -->\n<div class=\"wp-block-column\"><!-- wp:image {\"id\":72,\"width\":\"auto\",\"height\":\"80px\",\"sizeSlug\":\"full\",\"linkDestination\":\"none\",\"className\":\"position-absolute bat-4\"} -->\n<figure class=\"wp-block-image size-full is-resized position-absolute bat-4\"><img src=\"" . esc_url(get_template_directory_uri()) . "/inc/block-patterns/images/bat-1.png\" alt=\"\" class=\"wp-image-72\" style=\"width:auto;height:80px\"/></figure>\n<!-- /wp:image --></div>\n<!-- /wp:column --></div>\n<!-- /wp:columns -->\n\n<!-- wp:columns {\"verticalAlignment\":\"bottom\",\"align\":\"wide\"} -->\n<div class=\"wp-block-columns alignwide are-vertically-aligned-bottom\"><!-- wp:column {\"verticalAlignment\":\"bottom\",\"className\":\"position-absolute banner-content\"} -->\n<div class=\"wp-block-column is-vertically-aligned-bottom position-absolute banner-content\"><!-- wp:heading {\"textAlign\":\"center\",\"level\":1,\"style\":{\"typography\":{\"fontSize\":\"45px\"}}} -->\n<h1 class=\"wp-block-heading has-text-align-center\" style=\"font-size:45px\">Enjoy your&nbsp;Halloween&nbsp;with us and have a great time</h1>\n<!-- /wp:heading -->\n\n<!-- wp:paragraph {\"align\":\"center\",\"style\":{\"typography\":{\"fontSize\":\"18px\"}}} -->\n<p class=\"has-text-align-center\" style=\"font-size:18px\">Lorem Ipsum is simply dummy text of the printing and typesetting industry</p>\n<!-- /wp:paragraph -->\n\n<!-- wp:buttons {\"layout\":{\"type\":\"flex\",\"justifyContent\":\"center\"}} -->\n<div class=\"wp-block-buttons\"><!-- wp:button {\"backgroundColor\":\"white\",\"style\":{\"typography\":{\"fontSize\":\"14px\"},\"color\":{\"text\":\"#292d32\"},\"elements\":{\"link\":{\"color\":{\"text\":\"#292d32\"}}},\"border\":{\"radius\":\"6px\"}}} -->\n<div class=\"wp-block-button has-custom-font-size\" style=\"font-size:14px\"><a class=\"wp-block-button__link has-white-background-color has-text-color has-background has-link-color wp-element-button\" style=\"border-radius:6px;color:#292d32\">Our Events</a></div>\n<!-- /wp:button --></div>\n<!-- /wp:buttons --></div>\n<!-- /wp:column --></div>\n<!-- /wp:columns -->\n\n<!-- wp:paragraph {\"align\":\"center\",\"className\":\"position-absolute slider-text\",\"style\":{\"typography\":{\"fontSize\":\"250px\"}}} -->\n<p class=\"has-text-align-center position-absolute slider-text\" style=\"font-size:250px\">Halloween</p>\n<!-- /wp:paragraph --></div></div>\n<!-- /wp:cover -->",
		)
	);

	register_block_pattern(
		'scary-halloween/event-section',
		array(
			'title'      => __( 'Event Section', 'scary-halloween' ),
			'categories' => array( 'scary-halloween' ),
			'content'    => "<!-- wp:columns {\"metadata\":{\"categories\":[\"scary-halloween\"],\"patternName\":\"scary-halloween/event-section\",\"name\":\"Event Section\"},\"className\":\"event-section mt-4\"} -->\n<div class=\"wp-block-columns event-section mt-4\"><!-- wp:column -->\n<div class=\"wp-block-column\"><!-- wp:paragraph {\"align\":\"center\",\"className\":\"section-text position-relative\",\"style\":{\"typography\":{\"fontSize\":\"18px\"},\"color\":{\"text\":\"#e3652d\"},\"elements\":{\"link\":{\"color\":{\"text\":\"#e3652d\"}}}}} -->\n<p class=\"has-text-align-center section-text position-relative has-text-color has-link-color\" style=\"color:#e3652d;font-size:18px\">Party Events</p>\n<!-- /wp:paragraph -->\n\n<!-- wp:heading {\"textAlign\":\"center\",\"className\":\"section-title\",\"style\":{\"typography\":{\"fontSize\":\"20px\"}}} -->\n<h2 class=\"wp-block-heading has-text-align-center section-title\" style=\"font-size:20px\">Our Events For The Halloween Night</h2>\n<!-- /wp:heading -->\n\n<!-- wp:shortcode -->\n[event-list style=\"list\"]\n<!-- /wp:shortcode --></div>\n<!-- /wp:column --></div>\n<!-- /wp:columns -->",
		)
	);
}