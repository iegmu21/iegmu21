<?php
/**
 * Overwrite all of parent theme defaults to child theme.
 *
 */

if ( ! defined( 'ABSPATH' ) ) {
	exit; // Exit if accessed directly.
}

if ( ! function_exists( 'lalita_get_defaults' ) ) {
	/**
	 * Set default options
	 *
	 */
	function lalita_get_defaults() {
		$lalita_defaults = array(
			'hide_title' => '',
			'hide_tagline' => true,
			'top_bar_width' => 'full',
			'top_bar_inner_width' => 'full',
			'top_bar_alignment' => 'left',
			'container_width' => '2000',
			'header_layout_setting' => 'fluid-header',
			'header_inner_width' => 'full-width',
			'nav_alignment_setting' => 'right',
			'header_alignment_setting' => 'left',
			'nav_layout_setting' => 'fluid-nav',
			'nav_inner_width' => 'full-width',
			'nav_position_setting' => 'nav-float-right',
			'nav_dropdown_type' => 'hover',
			'nav_search' => 'enable',
			'nav_effect' => 'none',
			'content_layout_setting' => 'one-container',
			'layout_setting' => 'no-sidebar',
			'blog_layout_setting' => 'right-sidebar',
			'single_layout_setting' => 'right-sidebar',
			'fixed_side_content' => '',
			'blog_header_image' => '',
			'blog_header_title' => '',
			'blog_header_text' => '',
			'blog_header_button_text' => '',
			'blog_header_button_url' => '',
			'post_content' => 'excerpt',
			'footer_layout_setting' => 'fluid-footer',
			'footer_widgets_inner_width' => 'full-width',
			'footer_inner_width' => 'full-width',
			'footer_widget_setting' => '3',
			'footer_bar_alignment' => 'right',
			'back_to_top' => 'enable',
			'socials_display_side' => false,
			'socials_display_top' => false,
			'socials_facebook_url' => '',
			'socials_twitter_url' => '',
			'socials_google_url' => '',
			'socials_tumblr_url' => '',
			'socials_pinterest_url' => '',
			'socials_youtube_url' => '',
			'socials_linkedin_url' => '',
			'socials_custom_icon_1' => '',
			'socials_custom_icon_2' => '',
			'socials_custom_icon_3' => '',
			'socials_custom_icon_url_1' => '',
			'socials_custom_icon_url_2' => '',
			'socials_custom_icon_url_3' => '',
			'socials_mail_url' => '',
			'button_rotate' => '0',
			'button_border' => '0',
			'button_frame' => 'none',
			'button_radius' => 'none',
			'side_inside_color' => '#f5eeec',
			'text_color' => '#404040',
			'link_color' => '#202020',
			'link_color_hover' => '#eea497',
			'link_color_visited' => '',
			'font_awesome_essentials' => true,
		);
	
		return apply_filters( 'lalita_option_defaults', $lalita_defaults );
	}
}

if ( ! function_exists( 'lalita_get_color_defaults' ) ) {
	/**
	 * Set default options
	 */
	function lalita_get_color_defaults() {
		$lalita_color_defaults = array(
			'top_bar_background_color' => '#eea497',
			'top_bar_text_color' => '#202020',
			'top_bar_link_color' => '#202020',
			'top_bar_link_color_hover' => '#ffd64a',
			'header_background_color' => '#eea497',
			'header_text_color' => '#202020',
			'header_link_color' => '#202020',
			'header_link_hover_color' => '#202020',
			'site_title_color' => '#202020',
			'site_tagline_color' => '#202020',
			'navigation_background_color' => '#eea497',
			'navigation_text_color' => '#202020',
			'navigation_background_hover_color' => '',
			'navigation_text_hover_color' => '#ffd64a',
			'navigation_background_current_color' => '',
			'navigation_text_current_color' => '',
			'subnavigation_background_color' => '#eea497',
			'subnavigation_text_color' => '#202020',
			'subnavigation_background_hover_color' => '',
			'subnavigation_text_hover_color' => '#ffd64a',
			'subnavigation_background_current_color' => '',
			'subnavigation_text_current_color' => '',
			'fixed_side_content_background_color' => '#202020',
			'fixed_side_content_text_color' => '#f5eeec',
			'fixed_side_content_link_color' => '#ffd64a',
			'fixed_side_content_link_hover_color' => '#f5eeec',
			'content_background_color' => '',
			'content_text_color' => '',
			'content_link_color' => '',
			'content_link_hover_color' => '',
			'content_title_color' => '',
			'blog_header_bg_color' => '#202020',
			'blog_header_bg_s_color' => '#202020',
			'blog_header_title_color' => '#f5eeec',
			'blog_header_text_color' => '#f5eeec',
			'blog_header_button' => '#202020',
			'blog_header_button_bg' => '#ffd64a',
			'blog_header_button_hover' => '#202020',
			'blog_header_button_hover_bg' => '#f5eeec',
			'blog_post_title_color' => '',
			'blog_post_title_hover_color' => '',
			'entry_meta_text_color' => '',
			'entry_meta_link_color' => '',
			'entry_meta_link_color_hover' => '',
			'h1_color' => '',
			'h2_color' => '',
			'h3_color' => '',
			'h4_color' => '',
			'h5_color' => '',
			'h6_color' => '',
			'sidebar_widget_background_color' => '#ffd64a',
			'sidebar_widget_text_color' => '#404040',
			'sidebar_widget_link_color' => '#202020',
			'sidebar_widget_link_hover_color' => '#88b2cc',
			'sidebar_widget_title_color' => '#202020',
			'footer_widget_background_color' => '#88b2cc',
			'footer_widget_text_color' => '#404040',
			'footer_widget_link_color' => '#202020',
			'footer_widget_link_hover_color' => '#ffd64a',
			'footer_widget_title_color' => '#202020',
			'footer_background_color' => '#88b2cc',
			'footer_text_color' => '#202020',
			'footer_link_color' => '#202020',
			'footer_link_hover_color' => '#ffd64a',
			'form_background_color' => '#ffffff',
			'form_text_color' => '#202020',
			'form_background_color_focus' => '#202020',
			'form_text_color_focus' => '#ffffff',
			'form_border_color' => '#202020',
			'form_border_color_focus' => '#ffffff',
			'form_button_background_color' => '#eea497',
			'form_button_background_color_hover' => '#ffd64a',
			'form_button_text_color' => '#202020',
			'form_button_text_color_hover' => '#202020',
			'back_to_top_background_color' => '#eea497',
			'back_to_top_background_color_hover' => '#ffd64a',
			'back_to_top_text_color' => '#202020',
			'back_to_top_text_color_hover' => '#202020',
		);
	
		return apply_filters( 'lalita_color_option_defaults', $lalita_color_defaults );
	}
}

if ( ! function_exists( 'lalita_get_default_fonts' ) ) {
	/**
	 * Set default options.
	 *
	 *
	 * @param bool $filter Whether to return the filtered values or original values.
	 * @return array Option defaults.
	 */
	function lalita_get_default_fonts( $filter = true ) {
		$lalita_font_defaults = array(
			'font_body' => 'Josefin Sans',
			'font_body_category' => '',
			'font_body_variants' => '100,300,regular,600,700',
			'body_font_weight' => '600',
			'body_font_transform' => 'none',
			'body_font_size' => '18',
			'body_line_height' => '1.3', // no unit
			'paragraph_margin' => '1.3', // em
			'font_top_bar' => 'Josefin Sans',
			'font_top_bar_category' => '',
			'font_top_bar_variants' => '100,300,regular,600,700',
			'top_bar_font_weight' => '600',
			'top_bar_font_transform' => 'none',
			'top_bar_font_size' => '18',
			'font_site_title' => 'Playfair Display',
			'font_site_title_category' => '',
			'font_site_title_variants' => 'regular,700,900',
			'site_title_font_weight' => '400',
			'site_title_font_transform' => 'none',
			'site_title_font_size' => '55',
			'mobile_site_title_font_size' => '25',
			'font_site_tagline' => 'inherit',
			'font_site_tagline_category' => '',
			'font_site_tagline_variants' => '',
			'site_tagline_font_weight' => 'normal',
			'site_tagline_font_transform' => 'none',
			'site_tagline_font_size' => '19',
			'font_blog_header_title' => 'Playfair Display',
			'font_blog_header_title_category' => '',
			'font_blog_header_title_variants' => 'regular,700,900',
			'blog_header_title_font_weight' => '400',
			'blog_header_title_font_transform' => 'none',
			'font_blog_header_text' => 'Josefin Sans',
			'font_blog_header_text_category' => '',
			'font_blog_header_text_variants' => '100,300,regular,600,700',
			'blog_header_text_font_weight' => '600',
			'blog_header_text_font_transform' => 'none',
			'font_navigation' => 'Playfair Display',
			'font_navigation_category' => '',
			'font_navigation_variants' => 'regular,700,900',
			'navigation_font_weight' => '700',
			'navigation_font_transform' => 'none',
			'navigation_font_size' => '20',
			'font_widget_title' => 'Playfair Display',
			'font_widget_title_category' => '',
			'font_widget_title_variants' => 'regular,700,900',
			'widget_title_font_weight' => '400',
			'widget_title_font_transform' => 'none',
			'widget_title_font_size' => '30',
			'widget_title_separator' => '18',
			'widget_content_font_size' => '18',
			'font_buttons' => 'Playfair Display',
			'font_buttons_category' => '',
			'font_buttons_variants' => 'regular,700,900',
			'buttons_font_weight' => '700',
			'buttons_font_transform' => 'none',
			'buttons_font_size' => '22',
			'font_heading_1' => 'inherit',
			'font_heading_1_category' => '',
			'font_heading_1_variants' => '',
			'heading_1_weight' => '600',
			'heading_1_transform' => 'none',
			'heading_1_font_size' => '60',
			'heading_1_line_height' => '1.2', // em
			'mobile_heading_1_font_size' => '30',
			'font_heading_2' => 'inherit',
			'font_heading_2_category' => '',
			'font_heading_2_variants' => '',
			'heading_2_weight' => '600',
			'heading_2_transform' => 'none',
			'heading_2_font_size' => '32',
			'heading_2_line_height' => '1.2', // em
			'mobile_heading_2_font_size' => '25',
			'font_heading_3' => 'inherit',
			'font_heading_3_category' => '',
			'font_heading_3_variants' => '',
			'heading_3_weight' => '600',
			'heading_3_transform' => 'none',
			'heading_3_font_size' => '25',
			'heading_3_line_height' => '1.2', // em
			'font_heading_4' => 'inherit',
			'font_heading_4_category' => '',
			'font_heading_4_variants' => '',
			'heading_4_weight' => 'normal',
			'heading_4_transform' => 'none',
			'heading_4_font_size' => '',
			'heading_4_line_height' => '', // em
			'font_heading_5' => 'inherit',
			'font_heading_5_category' => '',
			'font_heading_5_variants' => '',
			'heading_5_weight' => 'normal',
			'heading_5_transform' => 'none',
			'heading_5_font_size' => '',
			'heading_5_line_height' => '', // em
			'font_heading_6' => 'inherit',
			'font_heading_6_category' => '',
			'font_heading_6_variants' => '',
			'heading_6_weight' => 'normal',
			'heading_6_transform' => 'none',
			'heading_6_font_size' => '',
			'heading_6_line_height' => '', // em
			'font_footer' => 'Josefin Sans',
			'font_footer_category' => '',
			'font_footer_variants' => '100,300,regular,600,700',
			'footer_weight' => '600',
			'footer_transform' => 'none',
			'footer_font_size' => '18',
			'font_fixed_side' => 'Josefin Sans',
			'font_fixed_side_category' => '',
			'font_fixed_side_variants' => '100,300,regular,600,700',
			'fixed_side_font_weight' => '600',
			'fixed_side_font_transform' => 'none',
			'fixed_side_font_size' => '22',
		);
	
		if ( $filter ) {
			return apply_filters( 'lalita_font_option_defaults', $lalita_font_defaults );
		}
	
		return $lalita_font_defaults;
	}
}

if ( ! function_exists( 'lalita_spacing_get_defaults' ) ) {
	/**
	 * Set the default options.
	 *
	 *
	 * @param bool $filter Whether to return the filtered values or original values.
	 * @return array Option defaults.
	 */
	function lalita_spacing_get_defaults( $filter = true ) {
		$lalita_spacing_defaults = array(
			'top_bar_top' => '10',
			'top_bar_right' => '40',
			'top_bar_bottom' => '0',
			'top_bar_left' => '40',
			'header_top' => '0',
			'header_right' => '35',
			'header_bottom' => '5',
			'header_left' => '40',
			'fixed_side_margin_top' => '150',
			'fixed_side_margin_right'=> '0',
			'fixed_side_margin_bottom' => '0',
			'fixed_side_margin_left' => '0',
			'fixed_side_top' => '10',
			'fixed_side_right' => '5',
			'fixed_side_bottom' => '10',
			'fixed_side_left' => '5',
			'button_top' => '12',
			'button_right' => '25',
			'button_bottom' => '12',
			'button_left' => '25',
			'menu_item' => '10',
			'menu_item_height' => '72',
			'sub_menu_item_height' => '10',
			'content_top' => '25',
			'content_right' => '40',
			'content_bottom' => '20',
			'content_left' => '40',
			'mobile_content_top' => '15',
			'mobile_content_right' => '15',
			'mobile_content_bottom' => '15',
			'mobile_content_left' => '15',
			'side_top' => '10',
			'side_right' => '10',
			'side_bottom' => '10',
			'side_left' => '10',
			'mobile_side_top' => '2',
			'mobile_side_right' => '2',
			'mobile_side_bottom' => '2',
			'mobile_side_left' => '2',
			'separator' => '15',
			'left_sidebar_width' => '25',
			'right_sidebar_width' => '25',
			'widget_top' => '20',
			'widget_right' => '20',
			'widget_bottom' => '20',
			'widget_left' => '20',
			'footer_widget_container_top' => '40',
			'footer_widget_container_right' => '40',
			'footer_widget_container_bottom' => '40',
			'footer_widget_container_left' => '40',
			'footer_widget_separator' => '30',
			'footer_top' => '10',
			'footer_right' => '40',
			'footer_bottom' => '10',
			'footer_left' => '40',
		);
	
		if ( $filter ) {
			return apply_filters( 'lalita_spacing_option_defaults', $lalita_spacing_defaults );
		}
	
		return $lalita_spacing_defaults;
	}
}

if ( ! function_exists( 'lalita_get_default_color_palettes' ) ) {
	/**
	 * Set up our colors for the color picker palettes and filter them so you can change them.
	 *
	 */
	function lalita_get_default_color_palettes() {
		$palettes = array(
			'#202020',
			'#404040',
			'#f5eeec',
			'#ffd64a',
			'#eea497',
			'#88b2cc'
		);
	
		return apply_filters( 'lalita_default_color_palettes', $palettes );
	}
}

if ( ! function_exists( 'lalita_typography_default_fonts' ) ) {
	/**
	 * Set the default system fonts.
	 *
	 */
	function lalita_typography_default_fonts() {
		$fonts = array(
			'inherit',
			'System Stack',
			'Arial, Helvetica, sans-serif',
			'Courier New',
			'Georgia, Times New Roman, Times, serif',
			'Trebuchet MS, Helvetica, sans-serif',
			'Verdana, Geneva, sans-serif',
			'Josefin Sans',
			'Playfair Display'
		);
	
		return apply_filters( 'lalita_typography_default_fonts', $fonts );
	}
}

define( 'LALITA_DEFAULT_FONTS' , '//fonts.googleapis.com/css?family=Josefin+Sans:100,300,regular,600,700|Playfair+Display:regular,700,900' );
