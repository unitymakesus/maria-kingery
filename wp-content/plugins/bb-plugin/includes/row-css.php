<?php if ( ! empty( $row->settings->text_color ) ) : // Text Color ?>
.fl-node-<?php echo $row->node; ?> {
	color: #<?php echo $row->settings->text_color; ?>;
}
.fl-builder-content .fl-node-<?php echo $row->node; ?> *:not(input):not(textarea):not(select):not(a):not(h1):not(h2):not(h3):not(h4):not(h5):not(h6):not(.fl-menu-mobile-toggle) {
	color: inherit;
}
<?php endif; ?>

<?php if ( ! empty( $row->settings->link_color ) ) : // Link Color ?>
.fl-builder-content .fl-node-<?php echo $row->node; ?> a {
	color: #<?php echo $row->settings->link_color; ?>;
}
<?php elseif ( ! empty( $row->settings->text_color ) ) : ?>
.fl-builder-content .fl-node-<?php echo $row->node; ?> a {
	color: #<?php echo $row->settings->text_color; ?>;
}
<?php endif; ?>

<?php if ( ! empty( $row->settings->hover_color ) ) : // Link Hover Color ?>
.fl-builder-content .fl-node-<?php echo $row->node; ?> a:hover {
	color: #<?php echo $row->settings->hover_color; ?>;
}
<?php elseif ( ! empty( $row->settings->text_color ) ) : ?>
.fl-builder-content .fl-node-<?php echo $row->node; ?> a:hover {
	color: #<?php echo $row->settings->text_color; ?>;
}
<?php endif; ?>

<?php if ( ! empty( $row->settings->heading_color ) ) : // Heading Color ?>
.fl-builder-content .fl-node-<?php echo $row->node; ?> h1,
.fl-builder-content .fl-node-<?php echo $row->node; ?> h2,
.fl-builder-content .fl-node-<?php echo $row->node; ?> h3,
.fl-builder-content .fl-node-<?php echo $row->node; ?> h4,
.fl-builder-content .fl-node-<?php echo $row->node; ?> h5,
.fl-builder-content .fl-node-<?php echo $row->node; ?> h6,
.fl-builder-content .fl-node-<?php echo $row->node; ?> h1 a,
.fl-builder-content .fl-node-<?php echo $row->node; ?> h2 a,
.fl-builder-content .fl-node-<?php echo $row->node; ?> h3 a,
.fl-builder-content .fl-node-<?php echo $row->node; ?> h4 a,
.fl-builder-content .fl-node-<?php echo $row->node; ?> h5 a,
.fl-builder-content .fl-node-<?php echo $row->node; ?> h6 a {
	color: #<?php echo $row->settings->heading_color; ?>;
}
<?php elseif ( ! empty( $row->settings->text_color ) ) : ?>
.fl-builder-content .fl-node-<?php echo $row->node; ?> h1,
.fl-builder-content .fl-node-<?php echo $row->node; ?> h2,
.fl-builder-content .fl-node-<?php echo $row->node; ?> h3,
.fl-builder-content .fl-node-<?php echo $row->node; ?> h4,
.fl-builder-content .fl-node-<?php echo $row->node; ?> h5,
.fl-builder-content .fl-node-<?php echo $row->node; ?> h6,
.fl-builder-content .fl-node-<?php echo $row->node; ?> h1 a,
.fl-builder-content .fl-node-<?php echo $row->node; ?> h2 a,
.fl-builder-content .fl-node-<?php echo $row->node; ?> h3 a,
.fl-builder-content .fl-node-<?php echo $row->node; ?> h4 a,
.fl-builder-content .fl-node-<?php echo $row->node; ?> h5 a,
.fl-builder-content .fl-node-<?php echo $row->node; ?> h6 a {
	color: #<?php echo $row->settings->text_color; ?>;
}
<?php endif; ?>

<?php if ( in_array( $row->settings->bg_type, array( 'color', 'photo', 'parallax', 'slideshow', 'video' ) ) && ! empty( $row->settings->bg_color ) ) : // Background Color ?>
.fl-node-<?php echo $row->node; ?> > .fl-row-content-wrap {
	background-color: #<?php echo $row->settings->bg_color; ?>;
	background-color: rgba(<?php echo implode( ',', FLBuilderColor::hex_to_rgb( $row->settings->bg_color ) ) ?>, <?php echo $row->settings->bg_opacity / 100; ?>);
}
<?php endif; ?>

<?php if ( 'photo' == $row->settings->bg_type && ! empty( $row->settings->bg_image_src ) ) : // Background Photo ?>
.fl-node-<?php echo $row->node; ?> > .fl-row-content-wrap {
	background-image: url(<?php echo $row->settings->bg_image_src; ?>);
	background-repeat: <?php echo $row->settings->bg_repeat; ?>;
	background-position: <?php echo $row->settings->bg_position; ?>;
	background-attachment: <?php echo $row->settings->bg_attachment; ?>;
	background-size: <?php echo $row->settings->bg_size; ?>;
}
<?php endif; ?>

<?php if ( in_array( $row->settings->bg_type, array( 'photo', 'parallax', 'slideshow', 'video' ) ) && ! empty( $row->settings->bg_overlay_color ) ) : // Background Color Overlay ?>
.fl-node-<?php echo $row->node; ?> > .fl-row-content-wrap:after {
	background-color: #<?php echo $row->settings->bg_overlay_color; ?>;
	background-color: rgba(<?php echo implode( ',', FLBuilderColor::hex_to_rgb( $row->settings->bg_overlay_color ) ) ?>, <?php echo $row->settings->bg_overlay_opacity / 100; ?>);
}
<?php endif; ?>

<?php if ( 'parallax' == $row->settings->bg_type && ! empty( $row->settings->bg_parallax_image_src ) ) : // Parallax Background ?>
.fl-node-<?php echo $row->node; ?> > .fl-row-content-wrap {
	background-repeat: no-repeat;
	background-position: center center;
	background-attachment: fixed;
	background-size: cover;
}
.fl-builder-mobile .fl-node-<?php echo $row->node; ?> > .fl-row-content-wrap {
	background-image: url(<?php echo $row->settings->bg_parallax_image_src; ?>);
	background-attachment: scroll;
	background-position: center center;
}
<?php endif; ?>

<?php if ( ! empty( $row->settings->border_type ) ) : // Border ?>
.fl-node-<?php echo $row->node; ?> > .fl-row-content-wrap {
	border-style: <?php echo $row->settings->border_type; ?>;
	border-width: 0;
	<?php if ( ! empty( $row->settings->border_color ) ) : ?>
	border-color: #<?php echo $row->settings->border_color; ?>;
	border-color: rgba(<?php echo implode( ',', FLBuilderColor::hex_to_rgb( $row->settings->border_color ) ) ?>, <?php echo $row->settings->border_opacity / 100; ?>);
	<?php endif; ?>
}
<?php endif; ?>

<?php
// Row resize support
$has_max_width = ! empty( $row->settings->max_content_width );
$is_row_fixed = ( 'fixed' === $row->settings->width );
$is_row_content_fixed = ( 'fixed' === $row->settings->content_width );
$are_both_full_width = ( ! $is_row_fixed && ! $is_row_content_fixed );

if ( $has_max_width && ! $are_both_full_width ) {
	if ( $is_row_fixed ) {
		print '.fl-node-' . $row->node . ".fl-row-fixed-width,\n .fl-node-" . $row->node . " .fl-row-fixed-width {\n";
	} else {
		print '.fl-node-' . $row->node . " .fl-row-content {\n";
	}
	print "\tmax-width: " . $row->settings->max_content_width . "px;\n";
	print "}\n";
}
?>

<?php if ( $row->settings->bg_video_audio ) : ?>
.fl-node-<?php echo $row->node; ?> .fl-bg-video-audio {
	display: none;
	cursor: pointer;
	position: absolute;
	bottom: 20px;
	right: 20px;
	z-index: 5;
	width: 20px;
}
.fl-node-<?php echo $row->node; ?> .fl-bg-video-audio .fl-audio-control {
	font-size: 20px;
}
.fl-node-<?php echo $row->node; ?> .fl-bg-video-audio .fa-times {
	font-size: 10px;
	vertical-align: middle;
	position: absolute;
	top: 5px;
	left: 11px;
	bottom: 0;
}
<?php endif; ?>
