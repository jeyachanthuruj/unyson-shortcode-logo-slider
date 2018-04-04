<?php if (!defined('FW')) die('Forbidden');

$shortcodes_extension = fw_ext('shortcodes');
wp_enqueue_style(
	'fw-slick',
	$shortcodes_extension->get_uri('/shortcodes/e25_icon_slider/static/css/slick.css')
);
wp_enqueue_style(
	'fw-shortcode-icon-slider-slick-theme',
	$shortcodes_extension->get_uri('/shortcodes/e25_icon_slider/static/css/slick-theme.css')
);

wp_enqueue_script(
	'fw-shortcode-jquery',
	$shortcodes_extension->get_uri('/shortcodes/e25_icon_slider/static/js/jquery.min.js')
);

wp_enqueue_script(
	'fw-slick',
	$shortcodes_extension->get_uri('/shortcodes/e25_icon_slider/static/js/slick.js')
);
