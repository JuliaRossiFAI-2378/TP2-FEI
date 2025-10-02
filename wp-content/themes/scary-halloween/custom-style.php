<?php

	$scary_halloween_custom_css= "";

	/*-------------------- Highlight Color -------------------*/

	$scary_halloween_first_color = get_theme_mod('scary_halloween_first_color');

	if($scary_halloween_first_color != false){
		$scary_halloween_custom_css .='#sidebar .wp-block-tag-cloud a:hover, #footer, .custom-about-us a.custom_read_more, #footer .wp-block-tag-cloud a:hover, table.compare-list .add-to-cart td a:not(.unstyled_button), .serach_outer i, .top-header, .home-page-header .contact-info, .home-page-header .topbar-btn a:hover, .home-page-header .search-box i, #sidebar .wp-block-search .wp-block-search__button:hover, #slider .carousel-caption .event-btn a:hover, #slider .carousel-control-prev i, #slider .carousel-control-next i, .more-btn a , #comments input[type="submit"],#comments a.comment-reply-link,input[type="submit"],.woocommerce #respond input#submit, .woocommerce button.button, .woocommerce input.button,.woocommerce #respond input#submit.alt, .woocommerce a.button.alt, .woocommerce button.button.alt, .woocommerce input.button.alt,.pro-button a, .woocommerce a.added_to_cart.wc-forward, .page-template-custom-home-page .topbar i.fas.fa-phone.me-2:hover, .topbar i.fas.fa-phone.me-2:hover,.post-nav-links span:hover, .post-nav-links a:hover, #comments input[type="submit"]:hover, #comments a.comment-reply-link:hover, .more-btn a:hover, #comments a.comment-reply-link:hover,.pagination a:hover,#footer .tagcloud a:hover, .pro-button a:hover, #preloader, #footer-2, #footer .wp-block-search .wp-block-search__button, #sidebar .wp-block-search .wp-block-search__button, .copyright .custom-social-icons i:hover, .bradcrumbs a, .post-categories li a, .bradcrumbs a:hover, .post-categories li a:hover, .bradcrumbs span, nav.navigation.posts-navigation .nav-previous a, nav.navigation.posts-navigation .nav-next a, #sidebar .custom-social-icons a, #sidebar .custom-social-icons a:hover, #footer .custom-social-icons a:hover, #sidebar h3:before,#sidebar .widget_block h3:before, #sidebar h2:before, #sidebar label.wp-block-search__label:before, #sidebar .tagcloud a:hover, .pagination span, .pagination a, .post-nav-links span, .post-nav-links a, .pagination a:hover, .pagination .current, .woocommerce span.onsale, nav.woocommerce-MyAccount-navigation ul li, nav.woocommerce-MyAccount-navigation ul li:hover, .woocommerce ul.products li.product .button, .woocommerce a.added_to_cart.wc-forward,a.added_to_cart.wc-forward, .wishlist-items-wrapper .product-add-to-cart a, .wishlist_table.mobile .product-add-to-cart a, a.button.product_type_simple.add_to_cart_button.ajax_add_to_cart:hover, a.button.product_type_simple.add_to_cart_button.ajax_add_to_cart, header.woocommerce-Address-title.title a, .wp-block-button__link{';
			$scary_halloween_custom_css .='background: '.esc_attr($scary_halloween_first_color).';';
		$scary_halloween_custom_css .='}';
	}

	if($scary_halloween_first_color != false){
		$scary_halloween_custom_css .='.single-mep_events .mep-default-sidrbar-events-schedule ul li i, .single-mep_events .mep-ev-start-date, .single-mep_events h3.mep_list_date i, .single-mep_events .df-ico i, .single-mep_events .mep-default-sidrbar-address ul li i, .single-mep_events .mep-default-sidrbar-social ul li a, .single-mep_events button.mep-cat-control, .single-mep_events .pagination-sec a, .single-mep_events .mep-tem3-title-sec.mep_single_date_btn,.single-mep_events .mep-default-feature-cart-sec h3, .single-mep_events .mep-event-theme-1 h3.ex-sec-title, .single-mep_events .mep-tem3-mid-sec h3.ex-sec-title, .single-mep_events .mep-tem3-title-sec, .single-mep_events .royal_theme h3.ex-sec-title, .single-mep_events .mep-events-wrapper .royal_theme table.mep_event_add_cart_table, .single-mep_events .vanilla_theme.mep-default-theme div.mep-default-feature-date, .single-mep_events .vanilla_theme.mep-default-theme div.mep-default-feature-time, .single-mep_events .vanilla_theme.mep-default-theme div.mep-default-feature-location, .single-mep_events .vanilla_theme h3.ex-sec-title, .single-mep_events .vanilla_theme div.df-dtl h3, .single-mep_events .vanilla_theme div.df-dtl p, .single-mep_events .ex-sec-title, .single-mep_events .mep_everyday_date_secs,.single-mep_events button.mpwemasp_get_sp, .single-mep_events .mep-default-feature-cart-sec button.single_add_to_cart_button.button.alt.btn-mep-event-cart, .single-mep_events .mep-event-theme-1 .single-mep_events .btn-mep-event-cart, .single-mep_events .mep-template-2-hamza .btn-mep-event-cart, .single-mep_events .mep-tem3-mid-sec .btn-mep-event-cart, .single-mep_events .button.button-default.woocommerce.button.alt.button.alt.btn-mep-event-cart,.single-mep_events #mep_add_calender_button.mep-add-calender,.mep-ev-start-date,.pagination_area button[class*="defaultButton_xs"], .list_with_filter_section [class*="defaultButton"], div.item_hover_effect a,.mep_list_thumb .mep-tem3-title-sec,#mep_add_calender_button, ul#mep_add_calender_links li a, .woocommerce-pagination .page-numbers.current, .woocommerce-pagination a.page-numbers:hover, a.added_to_cart.wc-forward:hover,header.woocommerce-Address-title.title a:hover,#tag-cloud-sec .tag-cloud-link:hover,.wc-block-grid__product-add-to-cart.wp-block-button .wp-block-button__link:hover, #sidebar ul li::before, .wc-block-grid__product-onsale, .wp-block-woocommerce-cart .wc-block-cart__submit-button, .wc-block-components-checkout-place-order-button, .wc-block-components-totals-coupon__button, .wp-block-woocommerce-cart .wc-block-cart__submit-button:hover, .wc-block-components-checkout-place-order-button:hover, .wc-block-components-totals-coupon__button:hover, .wp-block-woocommerce-cart .wc-block-components-product-badge, .wc-block-components-order-summary-item__quantity, header.woocommerce-Address-title.title a:hover,#tag-cloud-sec .tag-cloud-link:hover,.wc-block-grid__product-add-to-cart.wp-block-button .wp-block-button__link:hover, #tag-cloud-sec .tag-cloud-link{';
			$scary_halloween_custom_css .='background: '.esc_attr($scary_halloween_first_color).'!important;';
		$scary_halloween_custom_css .='}';
	}

	if($scary_halloween_first_color != false){
		$scary_halloween_custom_css .='a, a:hover, .sticky .post-main-box h2:before, .menu-bar-sec i, #slider .carousel-caption .event-btn a i, #event-section .section-content .section-text, #event-section .list_with_filter_section .mep_list_event_date .evl-cc h5:first-child, #event-section .list_with_filter_section .mep_list_event_date .evl-cc h5:last-child, .main-navigation ul ul li a:hover, .main-navigation li a:focus, .main-navigation ul ul a:focus, .main-navigation ul ul a:hover, .page-template-custom-home-page .home-page-header .main-navigation a:hover, .page-template-custom-home-page .home-page-header .main-navigation .current_page_item a, .main-navigation .current_page_item a, .main-navigation a:hover, .scrollup i, .post-main-box:hover h2 a, .post-main-box:hover .post-info span a, .single-post .post-info:hover a, .middle-bar h6, .grid-post-main-box:hover h2 a, .grid-post-main-box:hover .post-info span a, #sidebar ul li:hover, .woocommerce-error::before, .post-navigation span.meta-nav:hover, .yith-wcwl-wishlistaddedbrowse span.feedback, .yith-wcwl-wishlistexistsbrowse span.feedback, .wishlist_table .product-name a, .wishlist_table.mobile .product-name a, .woocommerce-message::before,.woocommerce-info::before, #slider .carousel-caption h1 .title-text, .wp-block-quote, .wp-block-quote:not(.is-large):not(.is-style-large), .wp-block-pullquote{';
			$scary_halloween_custom_css .='color: '.esc_attr($scary_halloween_first_color).';';
		$scary_halloween_custom_css .='}';
	}

	if($scary_halloween_first_color != false){
		$scary_halloween_custom_css .='.single-mep_events .mep-default-sidrbar-meta p a, .single-mep_events .mep-default-sidrbar-events-schedule h3 i, .single-mep_events .mep_event_list .mep_list_date, .single-mep_events .mep-event-theme-1 .mep-social-share li a, .single-mep_events .mep-template-2-hamza .mep-social-share li a,.single-mep_events .mep-default-sidrbar-meta .fa-list-alt, .single-mep_events .mep-list-footer ul li i, .mep-default-sidrbar-events-schedule h3 i, .mep_event_list .mep_list_date, .mep-event-theme-1 .mep-social-share li a, .mep-template-2-hamza .mep-social-share li a, .mep-default-sidrbar-meta .fa-list-alt, .mep-list-footer ul li i, .mep_event_list div.search_result_empty, .tags-bg a:hover, #footer .custom-social-icons a:hover{';
			$scary_halloween_custom_css .='color: '.esc_attr($scary_halloween_first_color).'!important;';
		$scary_halloween_custom_css .='}';
	}

	if($scary_halloween_first_color != false){
		$scary_halloween_custom_css .='#footer .custom-social-icons a:hover{';
			$scary_halloween_custom_css .='outline: 6px double  '.esc_attr($scary_halloween_first_color).';';
		$scary_halloween_custom_css .='}';
	}

	if($scary_halloween_first_color != false){
		$scary_halloween_custom_css .='.search_sort_code div.filter_input_area, .search_sort_code div.filter_input_area label, .post-main-box, .grid-post-main-box, #sidebar .widget{';
			$scary_halloween_custom_css .='border-color: '.esc_attr($scary_halloween_first_color).';';
		$scary_halloween_custom_css .='}';
	}

	if($scary_halloween_first_color != false){
		$scary_halloween_custom_css .='.page-template-default .mep_event_list_item .mep-list-header:before, .page-template-default .mep_event_grid_item .mep-list-header:before, .page-template-default .mep_event_list_item:hover, .list_with_filter_section .sort_code_search_box{';
			$scary_halloween_custom_css .='border-color: '.esc_attr($scary_halloween_first_color).'!important;';
		$scary_halloween_custom_css .='}';
	}

	if($scary_halloween_first_color != false){
		$scary_halloween_custom_css .='.header-fixed, .main-navigation ul ul, #sidebar .widget{';
			$scary_halloween_custom_css .='border-bottom-color: '.esc_attr($scary_halloween_first_color).';';
		$scary_halloween_custom_css .='}';
	}

	if($scary_halloween_first_color != false){
		$scary_halloween_custom_css .='.main-navigation ul ul, #sidebar .widget, .woocommerce-error, .woocommerce-message,.woocommerce-info{';
			$scary_halloween_custom_css .='border-top-color: '.esc_attr($scary_halloween_first_color).';';
		$scary_halloween_custom_css .='}';
	}

	if($scary_halloween_first_color != false){
		$scary_halloween_custom_css .='#sidebar .widget{';
			$scary_halloween_custom_css .='border-right-color: '.esc_attr($scary_halloween_first_color).';';
		$scary_halloween_custom_css .='}';
	}

	if($scary_halloween_first_color != false){
		$scary_halloween_custom_css .='#sidebar .widget, .wp-block-quote, .wp-block-quote:not(.is-large):not(.is-style-large), .wp-block-pullquote{';
			$scary_halloween_custom_css .='border-left-color: '.esc_attr($scary_halloween_first_color).';';
		$scary_halloween_custom_css .='}';
	}

	if($scary_halloween_first_color != false){
		$scary_halloween_custom_css .='#slider .carousel-caption .slider-word{';
			$scary_halloween_custom_css .='background: linear-gradient(to right, '.esc_attr($scary_halloween_first_color).' 15%, #fff0 25%, '.esc_attr($scary_halloween_first_color).' 85%, #fff0 95%); background-color: transparent; -webkit-background-clip: text; text-fill-color: transparent; background-size: 200% 100%;';
		$scary_halloween_custom_css .='}';
	}

	if($scary_halloween_first_color != false){
		$scary_halloween_custom_css .='@media screen and (max-width:1000px) {';
		$scary_halloween_custom_css .='.toggle-nav i, .toggle-nav i{';
			$scary_halloween_custom_css .='background: '.esc_attr($scary_halloween_first_color).'!important;';
		$scary_halloween_custom_css .='} }';

		$scary_halloween_custom_css .='@media screen and (max-width:1000px) {';
		$scary_halloween_custom_css .='.main-navigation a:hover{';
			$scary_halloween_custom_css .='color: '.esc_attr($scary_halloween_first_color).'!important;';
		$scary_halloween_custom_css .='} }';
	}

	/*---------------------------Width Layout -------------------*/

	$scary_halloween_theme_lay = get_theme_mod( 'scary_halloween_width_option','Full Width');
    if($scary_halloween_theme_lay == 'Boxed'){
		$scary_halloween_custom_css .='body{';
			$scary_halloween_custom_css .='max-width: 1140px; width: 100%; margin-right: auto; margin-left: auto;';
		$scary_halloween_custom_css .='}';
		$scary_halloween_custom_css .='.scrollup i{';
			$scary_halloween_custom_css .='right: 100px;';
		$scary_halloween_custom_css .='}';
		$scary_halloween_custom_css .='.row.outer-logo{';
			$scary_halloween_custom_css .='margin-left: 0px;';
		$scary_halloween_custom_css .='}';
	}else if($scary_halloween_theme_lay == 'Wide Width'){
		$scary_halloween_custom_css .='body{';
			$scary_halloween_custom_css .='width: 100%;padding-right: 15px;padding-left: 15px;margin-right: auto;margin-left: auto;';
		$scary_halloween_custom_css .='}';
		$scary_halloween_custom_css .='.scrollup i{';
			$scary_halloween_custom_css .='right: 30px;';
		$scary_halloween_custom_css .='}';
		$scary_halloween_custom_css .='.row.outer-logo{';
			$scary_halloween_custom_css .='margin-left: 0px;';
		$scary_halloween_custom_css .='}';
	}else if($scary_halloween_theme_lay == 'Full Width'){
		$scary_halloween_custom_css .='body{';
			$scary_halloween_custom_css .='max-width: 100%;';
		$scary_halloween_custom_css .='}';
	}

	/*-------------- Sticky Header Padding ----------------*/

	$scary_halloween_sticky_header_padding = get_theme_mod('scary_halloween_sticky_header_padding');
	if($scary_halloween_sticky_header_padding != false){
		$scary_halloween_custom_css .='.header-fixed{';
			$scary_halloween_custom_css .='padding: '.esc_attr($scary_halloween_sticky_header_padding).';';
		$scary_halloween_custom_css .='}';
	}

	/*----------------Responsive Media -----------------------*/

	$scary_halloween_resp_stickyheader = get_theme_mod( 'scary_halloween_stickyheader_hide_show',false);
	if($scary_halloween_resp_stickyheader == true && get_theme_mod( 'scary_halloween_sticky_header',false) != true){
    	$scary_halloween_custom_css .='.header-fixed{';
			$scary_halloween_custom_css .='position:static;';
		$scary_halloween_custom_css .='} ';
	}
    if($scary_halloween_resp_stickyheader == true){
    	$scary_halloween_custom_css .='@media screen and (max-width:575px) {';
		$scary_halloween_custom_css .='.header-fixed{';
			$scary_halloween_custom_css .='position:fixed;';
		$scary_halloween_custom_css .='} }';
	}else if($scary_halloween_resp_stickyheader == false){
		$scary_halloween_custom_css .='@media screen and (max-width:575px){';
		$scary_halloween_custom_css .='.header-fixed{';
			$scary_halloween_custom_css .='position:static;';
		$scary_halloween_custom_css .='} }';
	}

	$scary_halloween_resp_topbar_hide_show = get_theme_mod('scary_halloween_resp_topbar_hide_show',true);
	if($scary_halloween_resp_topbar_hide_show == true && get_theme_mod('scary_halloween_topbar_section_hide_show',true) == false){
		$scary_halloween_custom_css .='@media screen and (min-width:575px){
			.contact-info{';
			$scary_halloween_custom_css .='display:none !important;';
		$scary_halloween_custom_css .='} }';
	}

	if($scary_halloween_resp_topbar_hide_show == false){
		$scary_halloween_custom_css .='@media screen and (max-width:575px){
			.contact-info{';
			$scary_halloween_custom_css .='display:none !important;';
		$scary_halloween_custom_css .='} }';
	}

	$scary_halloween_resp_sidebar = get_theme_mod( 'scary_halloween_sidebar_hide_show',true);
    if($scary_halloween_resp_sidebar == true){
    	$scary_halloween_custom_css .='@media screen and (max-width:575px) {';
		$scary_halloween_custom_css .='#sidebar{';
			$scary_halloween_custom_css .='display:block;';
		$scary_halloween_custom_css .='} }';
	}else if($scary_halloween_resp_sidebar == false){
		$scary_halloween_custom_css .='@media screen and (max-width:575px) {';
		$scary_halloween_custom_css .='#sidebar{';
			$scary_halloween_custom_css .='display:none;';
		$scary_halloween_custom_css .='} }';
	}

	$scary_halloween_responsive_preloader_hide = get_theme_mod('scary_halloween_responsive_preloader_hide',false);
	if($scary_halloween_responsive_preloader_hide == true && get_theme_mod('scary_halloween_loader_enable',false) == false){
		$scary_halloween_custom_css .='@media screen and (min-width:575px){
			#preloader{';
			$scary_halloween_custom_css .='display:none !important;';
		$scary_halloween_custom_css .='} }';
	}

	if($scary_halloween_responsive_preloader_hide == false){
		$scary_halloween_custom_css .='@media screen and (max-width:575px){
			#preloader{';
			$scary_halloween_custom_css .='display:none !important;';
		$scary_halloween_custom_css .='} }';
	}

	$scary_halloween_resp_scroll_top = get_theme_mod( 'scary_halloween_resp_scroll_top_hide_show',true);
	if($scary_halloween_resp_scroll_top == true && get_theme_mod( 'scary_halloween_hide_show_scroll',true) == false){
    	$scary_halloween_custom_css .='.scrollup i{';
			$scary_halloween_custom_css .='visibility:hidden !important;';
		$scary_halloween_custom_css .='} ';
	}
    if($scary_halloween_resp_scroll_top == true){
    	$scary_halloween_custom_css .='@media screen and (max-width:575px) {';
		$scary_halloween_custom_css .='.scrollup i{';
			$scary_halloween_custom_css .='visibility:visible !important;';
		$scary_halloween_custom_css .='} }';
	}else if($scary_halloween_resp_scroll_top == false){
		$scary_halloween_custom_css .='@media screen and (max-width:575px){';
		$scary_halloween_custom_css .='.scrollup i{';
			$scary_halloween_custom_css .='visibility:hidden !important;';
		$scary_halloween_custom_css .='} }';
	}

	/*---------------------------Slider Height ------------*/

	$scary_halloween_slider_height = get_theme_mod('scary_halloween_slider_height');
	if($scary_halloween_slider_height != false){
		$scary_halloween_custom_css .='#slider img{';
			$scary_halloween_custom_css .='height: '.esc_attr($scary_halloween_slider_height).';';
		$scary_halloween_custom_css .='}';
	}
	
	/*------------- Slider Content Padding Settings ------------------*/

	$scary_halloween_slider_content_padding_top_bottom = get_theme_mod('scary_halloween_slider_content_padding_top_bottom');
	$scary_halloween_slider_content_padding_left_right = get_theme_mod('scary_halloween_slider_content_padding_left_right');
	if($scary_halloween_slider_content_padding_top_bottom != false || $scary_halloween_slider_content_padding_left_right != false){
		$scary_halloween_custom_css .='#slider .carousel-caption{';
			$scary_halloween_custom_css .='top: '.esc_attr($scary_halloween_slider_content_padding_top_bottom).'; bottom: '.esc_attr($scary_halloween_slider_content_padding_top_bottom).';left: '.esc_attr($scary_halloween_slider_content_padding_left_right).';right: '.esc_attr($scary_halloween_slider_content_padding_left_right).';';
		$scary_halloween_custom_css .='}';
	}

	// spider img

	$scary_halloween_spider_img = get_theme_mod('scary_halloween_spider_img');
	if($scary_halloween_spider_img != false){
		$scary_halloween_custom_css .='.page-template-custom-home-page .home-page-header .main-topbar:before{';
			$scary_halloween_custom_css .='background: url('.esc_attr($scary_halloween_spider_img).')no-repeat;';
		$scary_halloween_custom_css .='}';
	}
	
	/*-------------- Copyright Alignment ----------------*/
	$scary_halloween_copyright_alingment = get_theme_mod('scary_halloween_copyright_alingment');
	if($scary_halloween_copyright_alingment != false){
		$scary_halloween_custom_css .='.copyright p{';
			$scary_halloween_custom_css .='text-align: '.esc_attr($scary_halloween_copyright_alingment).';';
		$scary_halloween_custom_css .='}';
		$scary_halloween_custom_css .='
		@media screen and (max-width:720px) {
			.copyright p{';
			$scary_halloween_custom_css .='text-align: center;} }';
	}

	$scary_halloween_align_footer_social_icon = get_theme_mod('scary_halloween_align_footer_social_icon');
	if($scary_halloween_align_footer_social_icon != false){
		$scary_halloween_custom_css .='.copyright .widget{';
			$scary_halloween_custom_css .='text-align: '.esc_attr($scary_halloween_align_footer_social_icon).';';
		$scary_halloween_custom_css .='}';
		$scary_halloween_custom_css .='
		@media screen and (max-width:720px) {
			.copyright .widget{';
			$scary_halloween_custom_css .='text-align: center;} }';
	}

	$scary_halloween_resp_stickycopyright = get_theme_mod( 'scary_halloween_stickycopyright_hide_show',false);
	if($scary_halloween_resp_stickycopyright == true && get_theme_mod( 'scary_halloween_copyright_sticky',false) != true){
    	$scary_halloween_custom_css .='.copyright-sticky{';
			$scary_halloween_custom_css .='position:static;';
		$scary_halloween_custom_css .='} ';
	}

	$scary_halloween_footer_social_icons_font_size = get_theme_mod('scary_halloween_footer_social_icons_font_size','16');
	$scary_halloween_custom_css .='.copyright .widget i{';
		$scary_halloween_custom_css .='font-size: '.esc_attr($scary_halloween_footer_social_icons_font_size).'px;';
	$scary_halloween_custom_css .='}';

	$scary_halloween_footer_background_color = get_theme_mod('scary_halloween_footer_background_color');
	if($scary_halloween_footer_background_color != false){
		$scary_halloween_custom_css .='#footer{';
			$scary_halloween_custom_css .='background-color: '.esc_attr($scary_halloween_footer_background_color).';';
		$scary_halloween_custom_css .='}';
	}

	/*------------- Preloader Background Color  -------------------*/

	$scary_halloween_preloader_bg_color = get_theme_mod('scary_halloween_preloader_bg_color');
	if($scary_halloween_preloader_bg_color != false){
		$scary_halloween_custom_css .='#preloader{';
			$scary_halloween_custom_css .='background-color: '.esc_attr($scary_halloween_preloader_bg_color).';';
		$scary_halloween_custom_css .='}';
	}

	$scary_halloween_preloader_border_color = get_theme_mod('scary_halloween_preloader_border_color');
	if($scary_halloween_preloader_border_color != false){
		$scary_halloween_custom_css .='.loader-line{';
			$scary_halloween_custom_css .='border-color: '.esc_attr($scary_halloween_preloader_border_color).'!important;';
		$scary_halloween_custom_css .='}';
	}

	$scary_halloween_preloader_bg_img = get_theme_mod('scary_halloween_preloader_bg_img');
	if($scary_halloween_preloader_bg_img != false){
		$scary_halloween_custom_css .='#preloader{';
			$scary_halloween_custom_css .='background: url('.esc_attr($scary_halloween_preloader_bg_img).');-webkit-background-size: cover; -moz-background-size: cover; -o-background-size: cover; background-size: cover;';
		$scary_halloween_custom_css .='}';
	}

	/*---------------------- Slider Image Overlay ------------------------*/

	$scary_halloween_slider_image_overlay = get_theme_mod('scary_halloween_slider_image_overlay', true);
	if($scary_halloween_slider_image_overlay == false){
		$scary_halloween_custom_css .='#slider img{';
			$scary_halloween_custom_css .='opacity:1;';
		$scary_halloween_custom_css .='}';
	}

	$scary_halloween_slider_image_overlay_color = get_theme_mod('scary_halloween_slider_image_overlay_color', true);
	if($scary_halloween_slider_image_overlay_color != false){
		$scary_halloween_custom_css .='#slider{';
			$scary_halloween_custom_css .='background-color: '.esc_attr($scary_halloween_slider_image_overlay_color).';';
		$scary_halloween_custom_css .='}';
	}

	$scary_halloween_copyright_background_color = get_theme_mod('scary_halloween_copyright_background_color');
	if($scary_halloween_copyright_background_color != false){
		$scary_halloween_custom_css .='#footer-2{';
			$scary_halloween_custom_css .='background-color: '.esc_attr($scary_halloween_copyright_background_color).';';
		$scary_halloween_custom_css .='}';
	}

	$scary_halloween_footer_background_image = get_theme_mod('scary_halloween_footer_background_image');
	if($scary_halloween_footer_background_image != false){
		$scary_halloween_custom_css .='#footer{';
			$scary_halloween_custom_css .='background: url('.esc_attr($scary_halloween_footer_background_image).')no-repeat;background-size:cover';
		$scary_halloween_custom_css .='}';
	}

	$scary_halloween_theme_lay = get_theme_mod( 'scary_halloween_img_footer','scroll');
	if($scary_halloween_theme_lay == 'fixed'){
		$scary_halloween_custom_css .='#footer{';
			$scary_halloween_custom_css .='background-attachment: fixed !important; background-position: center !important;';
		$scary_halloween_custom_css .='}';
	}elseif ($scary_halloween_theme_lay == 'scroll'){
		$scary_halloween_custom_css .='#footer{';
			$scary_halloween_custom_css .='background-attachment: scroll !important; background-position: center !important;';
		$scary_halloween_custom_css .='}';
	}

	$scary_halloween_footer_img_position = get_theme_mod('scary_halloween_footer_img_position','center center');
	if($scary_halloween_footer_img_position != false){
		$scary_halloween_custom_css .='#footer{';
			$scary_halloween_custom_css .='background-position: '.esc_attr($scary_halloween_footer_img_position).'!important;';
		$scary_halloween_custom_css .='}';
	}

	$scary_halloween_footer_widgets_heading = get_theme_mod( 'scary_halloween_footer_widgets_heading','Left');
    if($scary_halloween_footer_widgets_heading == 'Left'){
		$scary_halloween_custom_css .='#footer h3, #footer .wp-block-search .wp-block-search__label{';
		$scary_halloween_custom_css .='text-align: left;';
		$scary_halloween_custom_css .='}';
	}else if($scary_halloween_footer_widgets_heading == 'Center'){
		$scary_halloween_custom_css .='#footer h3, #footer .wp-block-search .wp-block-search__label{';
			$scary_halloween_custom_css .='text-align: center;';
		$scary_halloween_custom_css .='}';
	}else if($scary_halloween_footer_widgets_heading == 'Right'){
		$scary_halloween_custom_css .='#footer h3, #footer .wp-block-search .wp-block-search__label{';
			$scary_halloween_custom_css .='text-align: right;';
		$scary_halloween_custom_css .='}';
	}

	$scary_halloween_footer_widgets_content = get_theme_mod( 'scary_halloween_footer_widgets_content','Left');
    if($scary_halloween_footer_widgets_content == 'Left'){
		$scary_halloween_custom_css .='#footer .widget{';
		$scary_halloween_custom_css .='text-align: left;';
		$scary_halloween_custom_css .='}';
	}else if($scary_halloween_footer_widgets_content == 'Center'){
		$scary_halloween_custom_css .='#footer .widget{';
			$scary_halloween_custom_css .='text-align: center;';
		$scary_halloween_custom_css .='}';
	}else if($scary_halloween_footer_widgets_content == 'Right'){
		$scary_halloween_custom_css .='#footer .widget{';
			$scary_halloween_custom_css .='text-align: right;';
		$scary_halloween_custom_css .='}';
	}

	$scary_halloween_copyright_font_size = get_theme_mod('scary_halloween_copyright_font_size');
	if($scary_halloween_copyright_font_size != false){
		$scary_halloween_custom_css .='#footer-2 a, #footer-2 p{';
			$scary_halloween_custom_css .='font-size: '.esc_attr($scary_halloween_copyright_font_size).';';
		$scary_halloween_custom_css .='}';
	}

	$scary_halloween_copyright_padding_top_bottom = get_theme_mod('scary_halloween_copyright_padding_top_bottom');
	if($scary_halloween_copyright_padding_top_bottom != false){
		$scary_halloween_custom_css .='#footer-2{';
			$scary_halloween_custom_css .='padding-top: '.esc_attr($scary_halloween_copyright_padding_top_bottom).'; padding-bottom: '.esc_attr($scary_halloween_copyright_padding_top_bottom).';';
		$scary_halloween_custom_css .='}';
	}

	$scary_halloween_footer_padding = get_theme_mod('scary_halloween_footer_padding');
	if($scary_halloween_footer_padding != false){
		$scary_halloween_custom_css .='#footer{';
			$scary_halloween_custom_css .='padding: '.esc_attr($scary_halloween_footer_padding).' 0;';
		$scary_halloween_custom_css .='}';
	}

	/*----------------Scroll to top Settings ------------------*/

	$scary_halloween_scroll_to_top_font_size = get_theme_mod('scary_halloween_scroll_to_top_font_size');
	if($scary_halloween_scroll_to_top_font_size != false){
		$scary_halloween_custom_css .='.scrollup i{';
			$scary_halloween_custom_css .='font-size: '.esc_attr($scary_halloween_scroll_to_top_font_size).';';
		$scary_halloween_custom_css .='}';
	}

	$scary_halloween_scroll_to_top_padding = get_theme_mod('scary_halloween_scroll_to_top_padding');
	$scary_halloween_scroll_to_top_padding = get_theme_mod('scary_halloween_scroll_to_top_padding');
	if($scary_halloween_scroll_to_top_padding != false){
		$scary_halloween_custom_css .='.scrollup i{';
			$scary_halloween_custom_css .='padding-top: '.esc_attr($scary_halloween_scroll_to_top_padding).';padding-bottom: '.esc_attr($scary_halloween_scroll_to_top_padding).';';
		$scary_halloween_custom_css .='}';
	}

	$scary_halloween_scroll_to_top_width = get_theme_mod('scary_halloween_scroll_to_top_width');
	if($scary_halloween_scroll_to_top_width != false){
		$scary_halloween_custom_css .='.scrollup i{';
			$scary_halloween_custom_css .='width: '.esc_attr($scary_halloween_scroll_to_top_width).';';
		$scary_halloween_custom_css .='}';
	}

	$scary_halloween_scroll_to_top_height = get_theme_mod('scary_halloween_scroll_to_top_height');
	if($scary_halloween_scroll_to_top_height != false){
		$scary_halloween_custom_css .='.scrollup i{';
			$scary_halloween_custom_css .='height: '.esc_attr($scary_halloween_scroll_to_top_height).';';
		$scary_halloween_custom_css .='}';
	}

	$scary_halloween_scroll_to_top_border_radius = get_theme_mod('scary_halloween_scroll_to_top_border_radius');
	if($scary_halloween_scroll_to_top_border_radius != false){
		$scary_halloween_custom_css .='.scrollup i{';
			$scary_halloween_custom_css .='border-radius: '.esc_attr($scary_halloween_scroll_to_top_border_radius).'px;';
		$scary_halloween_custom_css .='}';
	}

	/*------------------ Logo  -------------------*/

	$scary_halloween_logo_padding = get_theme_mod('scary_halloween_logo_padding');
	if($scary_halloween_logo_padding != false){
		$scary_halloween_custom_css .='.logo{';
			$scary_halloween_custom_css .='padding: '.esc_attr($scary_halloween_logo_padding).' !important;';
		$scary_halloween_custom_css .='}';
	}

	$scary_halloween_logo_margin = get_theme_mod('scary_halloween_logo_margin');
	if($scary_halloween_logo_margin != false){
		$scary_halloween_custom_css .='.logo{';
			$scary_halloween_custom_css .='margin: '.esc_attr($scary_halloween_logo_margin).';';
		$scary_halloween_custom_css .='}';
	}

	// Site title Font Size
	$scary_halloween_site_title_font_size = get_theme_mod('scary_halloween_site_title_font_size');
	if($scary_halloween_site_title_font_size != false){
		$scary_halloween_custom_css .='.logo p.site-title, .logo h1{';
			$scary_halloween_custom_css .='font-size: '.esc_attr($scary_halloween_site_title_font_size).';';
		$scary_halloween_custom_css .='}';
	}

	// Site tagline Font Size
	$scary_halloween_site_tagline_font_size = get_theme_mod('scary_halloween_site_tagline_font_size');
	if($scary_halloween_site_tagline_font_size != false){
		$scary_halloween_custom_css .='.logo p.site-description{';
			$scary_halloween_custom_css .='font-size: '.esc_attr($scary_halloween_site_tagline_font_size).';';
		$scary_halloween_custom_css .='}';
	}

	$scary_halloween_site_title_color = get_theme_mod('scary_halloween_site_title_color');
	if($scary_halloween_site_title_color != false){
		$scary_halloween_custom_css .='p.site-title a, .logo h1 a{';
			$scary_halloween_custom_css .='color: '.esc_attr($scary_halloween_site_title_color).'!important;';
		$scary_halloween_custom_css .='}';
	}

	$scary_halloween_site_tagline_color = get_theme_mod('scary_halloween_site_tagline_color');
	if($scary_halloween_site_tagline_color != false){
		$scary_halloween_custom_css .='.logo p.site-description{';
			$scary_halloween_custom_css .='color: '.esc_attr($scary_halloween_site_tagline_color).';';
		$scary_halloween_custom_css .='}';
	}

	$scary_halloween_logo_width = get_theme_mod('scary_halloween_logo_width');
	if($scary_halloween_logo_width != false){
		$scary_halloween_custom_css .='.logo img{';
			$scary_halloween_custom_css .='width: '.esc_attr($scary_halloween_logo_width).';';
		$scary_halloween_custom_css .='}';
	}

	$scary_halloween_logo_height = get_theme_mod('scary_halloween_logo_height');
	if($scary_halloween_logo_height != false){
		$scary_halloween_custom_css .='.logo img{';
			$scary_halloween_custom_css .='height: '.esc_attr($scary_halloween_logo_height).';object-fit:cover;';
		$scary_halloween_custom_css .='}';
	}

	// Header Background Color
	$scary_halloween_header_background_color = get_theme_mod('scary_halloween_header_background_color');
	if($scary_halloween_header_background_color != false){
		$scary_halloween_custom_css .='.page-template-custom-home-page .home-page-header, .home-page-header{';
			$scary_halloween_custom_css .='background-color: '.esc_attr($scary_halloween_header_background_color).';';
		$scary_halloween_custom_css .='}';
	}

	$scary_halloween_header_img_position = get_theme_mod('scary_halloween_header_img_position','center top');
	if($scary_halloween_header_img_position != false){
		$scary_halloween_custom_css .='.page-template-custom-home-page .home-page-header, .home-page-header{';
			$scary_halloween_custom_css .='background-position: '.esc_attr($scary_halloween_header_img_position).'!important;';
		$scary_halloween_custom_css .='}';
	}

	/*---------------------------Blog Layout -------------------*/

	$scary_halloween_theme_lay = get_theme_mod( 'scary_halloween_blog_layout_option','Default');
    if($scary_halloween_theme_lay == 'Default'){
		$scary_halloween_custom_css .='.post-main-box{';
			$scary_halloween_custom_css .='';
		$scary_halloween_custom_css .='}';
	}else if($scary_halloween_theme_lay == 'Center'){
		$scary_halloween_custom_css .='.post-main-box, .post-main-box h2, .post-info, .new-text p, .content-bttn{';
			$scary_halloween_custom_css .='text-align:center;';
		$scary_halloween_custom_css .='}';
		$scary_halloween_custom_css .='.post-info{';
			$scary_halloween_custom_css .='margin-top:10px;';
		$scary_halloween_custom_css .='}';
		$scary_halloween_custom_css .='.post-info hr{';
			$scary_halloween_custom_css .='margin:15px auto;';
		$scary_halloween_custom_css .='}';
	}else if($scary_halloween_theme_lay == 'Left'){
		$scary_halloween_custom_css .='.post-main-box, .post-main-box h2, .post-info, .new-text p, .content-bttn, #our-services p{';
			$scary_halloween_custom_css .='text-align:Left;';
		$scary_halloween_custom_css .='}';
		$scary_halloween_custom_css .='.post-info hr{';
			$scary_halloween_custom_css .='margin-bottom:10px;';
		$scary_halloween_custom_css .='}';
		$scary_halloween_custom_css .='.post-main-box h2{';
			$scary_halloween_custom_css .='margin-top:10px;';
		$scary_halloween_custom_css .='}';
		$scary_halloween_custom_css .='.service-text .more-btn{';
			$scary_halloween_custom_css .='display:inline-block;';
		$scary_halloween_custom_css .='}';
	}

	/*--------------------- Blog Page Posts -------------------*/

	$scary_halloween_blog_page_posts_settings = get_theme_mod( 'scary_halloween_blog_page_posts_settings','Into Blocks');
    if($scary_halloween_blog_page_posts_settings == 'Without Blocks'){
		$scary_halloween_custom_css .='.post-main-box{';
			$scary_halloween_custom_css .='box-shadow: none; border: none; margin:30px 0;';
		$scary_halloween_custom_css .='}';
	}

	// featured image dimention
	$scary_halloween_blog_post_featured_image_dimension = get_theme_mod('scary_halloween_blog_post_featured_image_dimension', 'default');
	$scary_halloween_blog_post_featured_image_custom_width = get_theme_mod('scary_halloween_blog_post_featured_image_custom_width',250);
	$scary_halloween_blog_post_featured_image_custom_height = get_theme_mod('scary_halloween_blog_post_featured_image_custom_height',250);
	if($scary_halloween_blog_post_featured_image_dimension == 'custom'){
		$scary_halloween_custom_css .='.post-main-box img{';
			$scary_halloween_custom_css .='width: '.esc_attr($scary_halloween_blog_post_featured_image_custom_width).'!important; height: '.esc_attr($scary_halloween_blog_post_featured_image_custom_height).';';
		$scary_halloween_custom_css .='}';
	}

	/*---------------- Posts Settings ------------------*/

	$scary_halloween_featured_image_border_radius = get_theme_mod('scary_halloween_featured_image_border_radius', 0);
	if($scary_halloween_featured_image_border_radius != false){
		$scary_halloween_custom_css .='.box-image img, .feature-box img{';
			$scary_halloween_custom_css .='border-radius: '.esc_attr($scary_halloween_featured_image_border_radius).'px;';
		$scary_halloween_custom_css .='}';
	}

	$scary_halloween_featured_image_box_shadow = get_theme_mod('scary_halloween_featured_image_box_shadow',0);
	if($scary_halloween_featured_image_box_shadow != false){
		$scary_halloween_custom_css .='.box-image img, .feature-box img, #content-vw img{';
			$scary_halloween_custom_css .='box-shadow: '.esc_attr($scary_halloween_featured_image_box_shadow).'px '.esc_attr($scary_halloween_featured_image_box_shadow).'px '.esc_attr($scary_halloween_featured_image_box_shadow).'px #cccccc;';
		$scary_halloween_custom_css .='}';
	}

	$scary_halloween_singlepost_image_box_shadow = get_theme_mod('scary_halloween_singlepost_image_box_shadow',0);
	if($scary_halloween_singlepost_image_box_shadow != false){
		$scary_halloween_custom_css .='.single-post .feature-box img{';
			$scary_halloween_custom_css .='box-shadow: '.esc_attr($scary_halloween_singlepost_image_box_shadow).'px '.esc_attr($scary_halloween_singlepost_image_box_shadow).'px '.esc_attr($scary_halloween_singlepost_image_box_shadow).'px #cccccc;';
		$scary_halloween_custom_css .='}';
	}

	$scary_halloween_related_image_box_shadow = get_theme_mod('scary_halloween_related_image_box_shadow',0);
	if($scary_halloween_related_image_box_shadow != false){
		$scary_halloween_custom_css .='.related-post .box-image img{';
			$scary_halloween_custom_css .='box-shadow: '.esc_attr($scary_halloween_related_image_box_shadow).'px '.esc_attr($scary_halloween_related_image_box_shadow).'px '.esc_attr($scary_halloween_related_image_box_shadow).'px #cccccc;';
		$scary_halloween_custom_css .='}';
	}

	/*---------------- Button Settings ------------------*/

	$scary_halloween_button_letter_spacing = get_theme_mod('scary_halloween_button_letter_spacing');
	$scary_halloween_custom_css .='.post-main-box .more-btn{';
		$scary_halloween_custom_css .='letter-spacing: '.esc_attr($scary_halloween_button_letter_spacing).';';
	$scary_halloween_custom_css .='}';

	$scary_halloween_button_border_radius = get_theme_mod('scary_halloween_button_border_radius');
	if($scary_halloween_button_border_radius != false){
		$scary_halloween_custom_css .='.post-main-box .more-btn a{';
			$scary_halloween_custom_css .='border-radius: '.esc_attr($scary_halloween_button_border_radius).'px !important;';
		$scary_halloween_custom_css .='}';
	}

	$scary_halloween_button_top_bottom_padding = get_theme_mod('scary_halloween_button_top_bottom_padding');
	$scary_halloween_button_left_right_padding = get_theme_mod('scary_halloween_button_left_right_padding');
	if($scary_halloween_button_top_bottom_padding != false || $scary_halloween_button_left_right_padding != false){
		$scary_halloween_custom_css .='.post-main-box .more-btn{';
			$scary_halloween_custom_css .='padding-top: '.esc_attr($scary_halloween_button_top_bottom_padding).'!important; padding-bottom: '.esc_attr($scary_halloween_button_top_bottom_padding).'!important;padding-left: '.esc_attr($scary_halloween_button_left_right_padding).'!important;padding-right: '.esc_attr($scary_halloween_button_left_right_padding).'!important;';
		$scary_halloween_custom_css .='}';
	}

	$scary_halloween_button_font_size = get_theme_mod('scary_halloween_button_font_size',14);
	$scary_halloween_custom_css .='.post-main-box .more-btn a{';
		$scary_halloween_custom_css .='font-size: '.esc_attr($scary_halloween_button_font_size).';';
	$scary_halloween_custom_css .='}';

	$scary_halloween_theme_lay = get_theme_mod( 'scary_halloween_button_text_transform','Capitalize');
	if($scary_halloween_theme_lay == 'Capitalize'){
		$scary_halloween_custom_css .='.post-main-box .more-btn a{';
			$scary_halloween_custom_css .='text-transform:Capitalize;';
		$scary_halloween_custom_css .='}';
	}
	if($scary_halloween_theme_lay == 'Lowercase'){
		$scary_halloween_custom_css .='.post-main-box .more-btn a{';
			$scary_halloween_custom_css .='text-transform:Lowercase;';
		$scary_halloween_custom_css .='}';
	}
	if($scary_halloween_theme_lay == 'Uppercase'){
		$scary_halloween_custom_css .='.post-main-box .more-btn a{';
			$scary_halloween_custom_css .='text-transform:Uppercase;';
		$scary_halloween_custom_css .='}';
	}

	/*---------------- Single Blog Page Settings ------------------*/

	$scary_halloween_single_blog_comment_button_text = get_theme_mod('scary_halloween_single_blog_comment_button_text', 'Post Comment');
	if($scary_halloween_single_blog_comment_button_text == ''){
		$scary_halloween_custom_css .='#comments p.form-submit {';
			$scary_halloween_custom_css .='display: none;';
		$scary_halloween_custom_css .='}';
	}

	$scary_halloween_comment_width = get_theme_mod('scary_halloween_single_blog_comment_width');
	if($scary_halloween_comment_width != false){
		$scary_halloween_custom_css .='#comments textarea{';
			$scary_halloween_custom_css .='width: '.esc_attr($scary_halloween_comment_width).';';
		$scary_halloween_custom_css .='}';
	}

	$scary_halloween_single_blog_post_navigation_show_hide = get_theme_mod('scary_halloween_single_blog_post_navigation_show_hide',true);
	if($scary_halloween_single_blog_post_navigation_show_hide != true){
		$scary_halloween_custom_css .='.post-navigation{';
			$scary_halloween_custom_css .='display: none;';
		$scary_halloween_custom_css .='}';
	}

	/*--------------------- Grid Posts Posts -------------------*/

	$scary_halloween_display_grid_posts_settings = get_theme_mod( 'scary_halloween_display_grid_posts_settings','Into Blocks');
    if($scary_halloween_display_grid_posts_settings == 'Without Blocks'){
		$scary_halloween_custom_css .='.grid-post-main-box{';
			$scary_halloween_custom_css .='box-shadow: none; border: none; margin:30px 0;';
		$scary_halloween_custom_css .='}';
	}

	$scary_halloween_grid_featured_image_border_radius = get_theme_mod('scary_halloween_grid_featured_image_border_radius', 0);
	if($scary_halloween_grid_featured_image_border_radius != false){
		$scary_halloween_custom_css .='.grid-post-main-box .box-image img, .grid-post-main-box .feature-box img{';
			$scary_halloween_custom_css .='border-radius: '.esc_attr($scary_halloween_grid_featured_image_border_radius).'px;';
		$scary_halloween_custom_css .='}';
	}

	/*----------------Woocommerce Products Settings ------------------*/

	$scary_halloween_related_product_show_hide = get_theme_mod('scary_halloween_related_product_show_hide',true);
	if($scary_halloween_related_product_show_hide != true){
		$scary_halloween_custom_css .='.related.products{';
			$scary_halloween_custom_css .='display: none;';
		$scary_halloween_custom_css .='}';
	}

	/*----------------Woocommerce Products Settings ------------------*/

	$scary_halloween_products_padding_top_bottom = get_theme_mod('scary_halloween_products_padding_top_bottom');
	if($scary_halloween_products_padding_top_bottom != false){
		$scary_halloween_custom_css .='.woocommerce ul.products li.product, .woocommerce-page ul.products li.product{';
			$scary_halloween_custom_css .='padding-top: '.esc_attr($scary_halloween_products_padding_top_bottom).'!important; padding-bottom: '.esc_attr($scary_halloween_products_padding_top_bottom).'!important;';
		$scary_halloween_custom_css .='}';
	}

	$scary_halloween_products_padding_left_right = get_theme_mod('scary_halloween_products_padding_left_right');
	if($scary_halloween_products_padding_left_right != false){
		$scary_halloween_custom_css .='.woocommerce ul.products li.product, .woocommerce-page ul.products li.product{';
			$scary_halloween_custom_css .='padding-left: '.esc_attr($scary_halloween_products_padding_left_right).'!important; padding-right: '.esc_attr($scary_halloween_products_padding_left_right).'!important;';
		$scary_halloween_custom_css .='}';
	}

	$scary_halloween_products_box_shadow = get_theme_mod('scary_halloween_products_box_shadow');
	if($scary_halloween_products_box_shadow != false){
		$scary_halloween_custom_css .='.woocommerce ul.products li.product, .woocommerce-page ul.products li.product{';
				$scary_halloween_custom_css .='box-shadow: '.esc_attr($scary_halloween_products_box_shadow).'px '.esc_attr($scary_halloween_products_box_shadow).'px '.esc_attr($scary_halloween_products_box_shadow).'px #ddd;';
		$scary_halloween_custom_css .='}';
	}

	$scary_halloween_products_border_radius = get_theme_mod('scary_halloween_products_border_radius');
	if($scary_halloween_products_border_radius != false){
		$scary_halloween_custom_css .='.woocommerce ul.products li.product, .woocommerce-page ul.products li.product{';
			$scary_halloween_custom_css .='border-radius: '.esc_attr($scary_halloween_products_border_radius).'px;';
		$scary_halloween_custom_css .='}';
	}

	$scary_halloween_products_btn_padding_top_bottom = get_theme_mod('scary_halloween_products_btn_padding_top_bottom');
	if($scary_halloween_products_btn_padding_top_bottom != false){
		$scary_halloween_custom_css .='.woocommerce a.button{';
			$scary_halloween_custom_css .='padding-top: '.esc_attr($scary_halloween_products_btn_padding_top_bottom).' !important; padding-bottom: '.esc_attr($scary_halloween_products_btn_padding_top_bottom).' !important;';
		$scary_halloween_custom_css .='}';
	}

	$scary_halloween_products_btn_padding_left_right = get_theme_mod('scary_halloween_products_btn_padding_left_right');
	if($scary_halloween_products_btn_padding_left_right != false){
		$scary_halloween_custom_css .='.woocommerce a.button{';
			$scary_halloween_custom_css .='padding-left: '.esc_attr($scary_halloween_products_btn_padding_left_right).' !important; padding-right: '.esc_attr($scary_halloween_products_btn_padding_left_right).' !important;';
		$scary_halloween_custom_css .='}';
	}

	$scary_halloween_products_button_border_radius = get_theme_mod('scary_halloween_products_button_border_radius', 0);
	if($scary_halloween_products_button_border_radius != false){
		$scary_halloween_custom_css .='.woocommerce ul.products li.product .button, a.checkout-button.button.alt.wc-forward,.woocommerce #respond input#submit, .woocommerce a.button, .woocommerce button.button, .woocommerce input.button, .woocommerce #respond input#submit.alt, .woocommerce a.button.alt, .woocommerce button.button.alt, .woocommerce input.button.alt,.woocommerce a.button{';
			$scary_halloween_custom_css .='border-radius: '.esc_attr($scary_halloween_products_button_border_radius).'px !important;';
		$scary_halloween_custom_css .='}';
	}

	$scary_halloween_woocommerce_sale_position = get_theme_mod( 'scary_halloween_woocommerce_sale_position','right');
    if($scary_halloween_woocommerce_sale_position == 'left'){
		$scary_halloween_custom_css .='.woocommerce ul.products li.product .onsale{';
			$scary_halloween_custom_css .='left: 14px !important; right: auto !important;';
		$scary_halloween_custom_css .='}';
	}else if($scary_halloween_woocommerce_sale_position == 'right'){
		$scary_halloween_custom_css .='.woocommerce ul.products li.product .onsale{';
			$scary_halloween_custom_css .='left: auto!important; right: 14px !important;';
		$scary_halloween_custom_css .='}';
	}

	$scary_halloween_slider_height = get_theme_mod('scary_halloween_slider_height');
	if($scary_halloween_slider_height != false){
		$scary_halloween_custom_css .='#slider img{';
			$scary_halloween_custom_css .='height: '.esc_attr($scary_halloween_slider_height).'px;';
		$scary_halloween_custom_css .='}';
	}

	$scary_halloween_woocommerce_sale_font_size = get_theme_mod('scary_halloween_woocommerce_sale_font_size');
	if($scary_halloween_woocommerce_sale_font_size != false){
		$scary_halloween_custom_css .='.woocommerce span.onsale{';
			$scary_halloween_custom_css .='font-size: '.esc_attr($scary_halloween_woocommerce_sale_font_size).';';
		$scary_halloween_custom_css .='}';
	}

	$scary_halloween_woocommerce_sale_padding_top_bottom = get_theme_mod('scary_halloween_woocommerce_sale_padding_top_bottom');
	if($scary_halloween_woocommerce_sale_padding_top_bottom != false){
		$scary_halloween_custom_css .='.woocommerce span.onsale{';
			$scary_halloween_custom_css .='padding-top: '.esc_attr($scary_halloween_woocommerce_sale_padding_top_bottom).'; padding-bottom: '.esc_attr($scary_halloween_woocommerce_sale_padding_top_bottom).';';
		$scary_halloween_custom_css .='}';
	}

	$scary_halloween_woocommerce_sale_padding_left_right = get_theme_mod('scary_halloween_woocommerce_sale_padding_left_right');
	if($scary_halloween_woocommerce_sale_padding_left_right != false){
		$scary_halloween_custom_css .='.woocommerce span.onsale{';
			$scary_halloween_custom_css .='padding-left: '.esc_attr($scary_halloween_woocommerce_sale_padding_left_right).'; padding-right: '.esc_attr($scary_halloween_woocommerce_sale_padding_left_right).';';
		$scary_halloween_custom_css .='}';
	}

	$scary_halloween_woocommerce_sale_border_radius = get_theme_mod('scary_halloween_woocommerce_sale_border_radius', 0);
	if($scary_halloween_woocommerce_sale_border_radius != false){
		$scary_halloween_custom_css .='.woocommerce span.onsale{';
			$scary_halloween_custom_css .='border-radius: '.esc_attr($scary_halloween_woocommerce_sale_border_radius).'px;';
		$scary_halloween_custom_css .='}';
	}

	/*-------------- Sticky Header Padding ----------------*/

	$scary_halloween_sticky_header_padding = get_theme_mod('scary_halloween_sticky_header_padding');
	if($scary_halloween_sticky_header_padding != false){
		$scary_halloween_custom_css .='.header-fixed{';
			$scary_halloween_custom_css .='padding: '.esc_attr($scary_halloween_sticky_header_padding).';';
		$scary_halloween_custom_css .='}';
	}

	/*----------------Social Icons Settings ------------------*/

	$scary_halloween_social_icon_font_size = get_theme_mod('scary_halloween_social_icon_font_size');
	if($scary_halloween_social_icon_font_size != false){
		$scary_halloween_custom_css .='#sidebar .custom-social-icons i, #footer .custom-social-icons i{';
			$scary_halloween_custom_css .='font-size: '.esc_attr($scary_halloween_social_icon_font_size).';';
		$scary_halloween_custom_css .='}';
	}

	$scary_halloween_social_icon_padding = get_theme_mod('scary_halloween_social_icon_padding');
	if($scary_halloween_social_icon_padding != false){
		$scary_halloween_custom_css .='#sidebar .custom-social-icons i, #footer .custom-social-icons i{';
			$scary_halloween_custom_css .='padding: '.esc_attr($scary_halloween_social_icon_padding).';';
		$scary_halloween_custom_css .='}';
	}

	$scary_halloween_social_icon_width = get_theme_mod('scary_halloween_social_icon_width');
	if($scary_halloween_social_icon_width != false){
		$scary_halloween_custom_css .='#sidebar .custom-social-icons i, #footer .custom-social-icons i{';
			$scary_halloween_custom_css .='width: '.esc_attr($scary_halloween_social_icon_width).';';
		$scary_halloween_custom_css .='}';
	}

	$scary_halloween_social_icon_height = get_theme_mod('scary_halloween_social_icon_height');
	if($scary_halloween_social_icon_height != false){
		$scary_halloween_custom_css .='#sidebar .custom-social-icons i, #footer .custom-social-icons i{';
			$scary_halloween_custom_css .='height: '.esc_attr($scary_halloween_social_icon_height).';';
		$scary_halloween_custom_css .='}';
	}

	$scary_halloween_social_icon_border_radius = get_theme_mod('scary_halloween_social_icon_border_radius');
	if($scary_halloween_social_icon_border_radius != false){
		$scary_halloween_custom_css .='#sidebar .custom-social-icons i, #footer .custom-social-icons i{';
			$scary_halloween_custom_css .='border-radius: '.esc_attr($scary_halloween_social_icon_border_radius).'px;';
		$scary_halloween_custom_css .='}';
	}

	$scary_halloween_resp_menu_toggle_btn_bg_color = get_theme_mod('scary_halloween_resp_menu_toggle_btn_bg_color');
	if($scary_halloween_resp_menu_toggle_btn_bg_color != false){
		$scary_halloween_custom_css .='.toggle-nav i{';
			$scary_halloween_custom_css .='background: '.esc_attr($scary_halloween_resp_menu_toggle_btn_bg_color).';';
		$scary_halloween_custom_css .='}';
	}

	$scary_halloween_grid_featured_image_box_shadow = get_theme_mod('scary_halloween_grid_featured_image_box_shadow',0);
	if($scary_halloween_grid_featured_image_box_shadow != false){
		$scary_halloween_custom_css .='.grid-post-main-box .box-image img, .grid-post-main-box .feature-box img, #content-vw img{';
			$scary_halloween_custom_css .='box-shadow: '.esc_attr($scary_halloween_grid_featured_image_box_shadow).'px '.esc_attr($scary_halloween_grid_featured_image_box_shadow).'px '.esc_attr($scary_halloween_grid_featured_image_box_shadow).'px #cccccc;';
		$scary_halloween_custom_css .='}';
	}

	/*-------------- Menus Setings ----------------*/

	$scary_halloween_navigation_menu_font_size = get_theme_mod('scary_halloween_navigation_menu_font_size');
	if($scary_halloween_navigation_menu_font_size != false){
		$scary_halloween_custom_css .='.main-navigation ul a{';
			$scary_halloween_custom_css .='font-size: '.esc_attr($scary_halloween_navigation_menu_font_size).';';
		$scary_halloween_custom_css .='}';
	}

	$scary_halloween_navigation_menu_font_weight = get_theme_mod('scary_halloween_navigation_menu_font_weight','400');
	if($scary_halloween_navigation_menu_font_weight != false){
		$scary_halloween_custom_css .='.main-navigation ul a{';
			$scary_halloween_custom_css .='font-weight: '.esc_attr($scary_halloween_navigation_menu_font_weight).';';
		$scary_halloween_custom_css .='}';
	}

	$scary_halloween_header_menus_hover_color = get_theme_mod('scary_halloween_header_menus_hover_color');
	if($scary_halloween_header_menus_hover_color != false){
		$scary_halloween_custom_css .='.main-navigation ul a:hover{';
			$scary_halloween_custom_css .='color: '.esc_attr($scary_halloween_header_menus_hover_color).';';
		$scary_halloween_custom_css .='}';
	}

	$scary_halloween_header_submenus_color = get_theme_mod('scary_halloween_header_submenus_color');
	if($scary_halloween_header_submenus_color != false){
		$scary_halloween_custom_css .='.main-navigation ul ul a{';
			$scary_halloween_custom_css .='color: '.esc_attr($scary_halloween_header_submenus_color).';';
		$scary_halloween_custom_css .='}';
	}

	$scary_halloween_header_submenus_hover_color = get_theme_mod('scary_halloween_header_submenus_hover_color');
	if($scary_halloween_header_submenus_hover_color != false){
		$scary_halloween_custom_css .='.main-navigation ul.sub-menu a:hover{';
			$scary_halloween_custom_css .='color: '.esc_attr($scary_halloween_header_submenus_hover_color).'!important;';
		$scary_halloween_custom_css .='}';
	}

	$scary_halloween_menus_item = get_theme_mod( 'scary_halloween_menus_item_style','None');
    if($scary_halloween_menus_item == 'None'){
		$scary_halloween_custom_css .='.main-navigation ul a{';
			$scary_halloween_custom_css .='';
		$scary_halloween_custom_css .='}';
	}else if($scary_halloween_menus_item == 'Zoom In'){
		$scary_halloween_custom_css .='.main-navigation ul a:hover{';
			$scary_halloween_custom_css .='transition: all 0.3s ease-in-out !important; transform: scale(1.2) !important;';
		$scary_halloween_custom_css .='}';
	}

	/*---------------------------Footer Style -------------------*/

	$scary_halloween_theme_lay = get_theme_mod( 'scary_halloween_footer_template','scary_halloween-footer-one');
    if($scary_halloween_theme_lay == 'scary_halloween-footer-one'){
		$scary_halloween_custom_css .='#footer{';
			$scary_halloween_custom_css .='';
		$scary_halloween_custom_css .='}';

	}else if($scary_halloween_theme_lay == 'scary_halloween-footer-two'){
		$scary_halloween_custom_css .='#footer{';
			$scary_halloween_custom_css .='background: linear-gradient(to right, #f9f8ff, #dedafa);';
		$scary_halloween_custom_css .='}';
		$scary_halloween_custom_css .='#footer p, #footer li a, #footer, #footer h3, #footer a.rsswidget, #footer #wp-calendar a, .copyright a, #footer .custom_details, #footer ins span, #footer .tagcloud a, .main-inner-box span.entry-date a, nav.woocommerce-MyAccount-navigation ul li:hover a, #footer ul li a, #footer table, #footer th, #footer td, #footer caption, #sidebar caption,#footer nav.wp-calendar-nav a,#footer .search-form .search-field{';
			$scary_halloween_custom_css .='color:#000;';
		$scary_halloween_custom_css .='}';
		$scary_halloween_custom_css .='#footer ul li::before{';
			$scary_halloween_custom_css .='background:#000;';
		$scary_halloween_custom_css .='}';
		$scary_halloween_custom_css .='#footer table, #footer th, #footer td,#footer .search-form .search-field,#footer .tagcloud a{';
			$scary_halloween_custom_css .='border: 1px solid #000;';
		$scary_halloween_custom_css .='}';

	}else if($scary_halloween_theme_lay == 'scary_halloween-footer-three'){
		$scary_halloween_custom_css .='#footer{';
			$scary_halloween_custom_css .='background: #232524;';
		$scary_halloween_custom_css .='}';
	}
	else if($scary_halloween_theme_lay == 'scary_halloween-footer-four'){
		$scary_halloween_custom_css .='#footer{';
			$scary_halloween_custom_css .='background: #E3652D;';
		$scary_halloween_custom_css .='}';
		$scary_halloween_custom_css .='#footer p, #footer li a, #footer, #footer h3, #footer a.rsswidget, #footer #wp-calendar a, .copyright a, #footer .custom_details, #footer ins span, #footer .tagcloud a, .main-inner-box span.entry-date a, nav.woocommerce-MyAccount-navigation ul li:hover a, #footer ul li a, #footer table, #footer th, #footer td, #footer caption, #sidebar caption,#footer nav.wp-calendar-nav a,#footer .search-form .search-field{';
			$scary_halloween_custom_css .='color:#fff;';
		$scary_halloween_custom_css .='}';
		$scary_halloween_custom_css .='#footer ul li::before{';
			$scary_halloween_custom_css .='background:#fff;';
		$scary_halloween_custom_css .='}';
		$scary_halloween_custom_css .='#footer table, #footer th, #footer td,#footer .search-form .search-field,#footer .tagcloud a{';
			$scary_halloween_custom_css .='border: 1px solid #fff;';
		$scary_halloween_custom_css .='}';
	}
	else if($scary_halloween_theme_lay == 'scary_halloween-footer-five'){
		$scary_halloween_custom_css .='#footer{';
			$scary_halloween_custom_css .='background: linear-gradient(to right, #01093a, #2d0b00);';
		$scary_halloween_custom_css .='}';
	}

	/*---------------- Footer Settings ------------------*/

	$scary_halloween_button_footer_heading_letter_spacing = get_theme_mod('scary_halloween_button_footer_heading_letter_spacing',1);
	$scary_halloween_custom_css .='#footer h3, a.rsswidget.rss-widget-title{';
		$scary_halloween_custom_css .='letter-spacing: '.esc_attr($scary_halloween_button_footer_heading_letter_spacing).'px;';
	$scary_halloween_custom_css .='}';

	$scary_halloween_button_footer_font_size = get_theme_mod('scary_halloween_button_footer_font_size','30');
	$scary_halloween_custom_css .='#footer h3, a.rsswidget.rss-widget-title{';
		$scary_halloween_custom_css .='font-size: '.esc_attr($scary_halloween_button_footer_font_size).'px;';
	$scary_halloween_custom_css .='}';

	$scary_halloween_theme_lay = get_theme_mod( 'scary_halloween_button_footer_text_transform','Capitalize');
	if($scary_halloween_theme_lay == 'Capitalize'){
		$scary_halloween_custom_css .='#footer h3{';
			$scary_halloween_custom_css .='text-transform:Capitalize;';
		$scary_halloween_custom_css .='}';
	}
	if($scary_halloween_theme_lay == 'Lowercase'){
		$scary_halloween_custom_css .='#footer h3, a.rsswidget.rss-widget-title{';
			$scary_halloween_custom_css .='text-transform:Lowercase;';
		$scary_halloween_custom_css .='}';
	}
	if($scary_halloween_theme_lay == 'Uppercase'){
		$scary_halloween_custom_css .='#footer h3, a.rsswidget.rss-widget-title{';
			$scary_halloween_custom_css .='text-transform:Uppercase;';
		$scary_halloween_custom_css .='}';
	}

	$scary_halloween_footer_heading_weight = get_theme_mod('scary_halloween_footer_heading_weight','500');
	if($scary_halloween_footer_heading_weight != false){
		$scary_halloween_custom_css .='#footer h3, a.rsswidget.rss-widget-title{';
			$scary_halloween_custom_css .='font-weight: '.esc_attr($scary_halloween_footer_heading_weight).';';
		$scary_halloween_custom_css .='}';
	}
	
	$scary_halloween_slider_first_color = get_theme_mod('scary_halloween_slider_first_color');

	$scary_halloween_slider_second_color = get_theme_mod('scary_halloween_slider_second_color');

	if($scary_halloween_slider_first_color != false || $scary_halloween_slider_second_color != false){
		$scary_halloween_custom_css .='.box{
		background: linear-gradient(to top, '.esc_attr($scary_halloween_slider_first_color).', '.esc_attr($scary_halloween_slider_second_color).');
		}';
	}

	$scary_halloween_services_icon_color = get_theme_mod('scary_halloween_services_icon_color');
	if($scary_halloween_services_icon_color != false){
		$scary_halloween_custom_css .='#about-sec i{';
			$scary_halloween_custom_css .='color: '.esc_attr($scary_halloween_services_icon_color).';';
		$scary_halloween_custom_css .='}';
	}

	$scary_halloween_bradcrumbs_alignment = get_theme_mod( 'scary_halloween_bradcrumbs_alignment','Left');
    if($scary_halloween_bradcrumbs_alignment == 'Left'){
    	$scary_halloween_custom_css .='@media screen and (min-width:768px) {';
		$scary_halloween_custom_css .='.bradcrumbs{';
			$scary_halloween_custom_css .='text-align:start;';
		$scary_halloween_custom_css .='}}';
	}else if($scary_halloween_bradcrumbs_alignment == 'Center'){
		$scary_halloween_custom_css .='@media screen and (min-width:768px) {';
		$scary_halloween_custom_css .='.bradcrumbs{';
			$scary_halloween_custom_css .='text-align:center;';
		$scary_halloween_custom_css .='}}';
	}else if($scary_halloween_bradcrumbs_alignment == 'Right'){
		$scary_halloween_custom_css .='@media screen and (min-width:768px) {';
		$scary_halloween_custom_css .='.bradcrumbs{';
			$scary_halloween_custom_css .='text-align:end;';
		$scary_halloween_custom_css .='}}';
	}