<?php
/**
 * @author  RadiusTheme
 * @since   1.0
 * @version 1.0
 */

namespace radiustheme\Clenix_Core;
use radiustheme\Lib\WP_SVG;
$attr = '';
if ( !empty( $data['url']['url'] ) ) {
	$attr  = 'href="' . $data['url']['url'] . '"';
	$attr .= !empty( $data['url']['is_external'] ) ? ' target="_blank"' : '';
	$attr .= !empty( $data['url']['nofollow'] ) ? ' rel="nofollow"' : '';
	$title = '<a ' . $attr . '>' . $data['title'] . '</a>';
	
}
else {
	$title = $data['title'];
}
// icon , image
if ( $data['icontype'] == 'icon' || $data['icontype'] == 'image' ) {
	$size = CLENIX_CORE_THEME_PREFIX . '-size2';
	if ( $attr ) {
		$img = '<a ' . $attr . '>' . wp_get_attachment_image( $data['image']['id'], $size ) . '</a>';
	}
	else {
		$img = wp_get_attachment_image( $data['image']['id'], $size );
	}
}

?>
<div class="info-box info-<?php echo esc_attr( $data['style'] );?> <?php echo esc_attr( $data['backg_color'] ); ?>">
	<div class="rtin-item rtin-<?php echo esc_attr( $data['icontype'] );?>">
		<div class="rtin-media">
			<span>
				<?php if ( $data['icontype'] == 'image' ) : ?>
					<?php if( WP_SVG::is_svg( $data['image']['id'] ) ) {
						$icon = WP_SVG::get_svg( $data['image']['id'] );
					} else {
						$icon = wp_get_attachment_image( $data['image']['id'] );
					} ?>
					<?php if ( !empty( $icon ) ) { ?>
					<span class="image-svg"><?php echo $icon; ?></span>
					<?php } ?>
				<?php else: ?>
					<i class="<?php echo esc_attr( $data['icon'] );?>" aria-hidden="true"></i>
				<?php endif; ?>
			</span>
		</div>	
		<div class="rtin-content">
			<?php if ( !empty( $data['title'] ) ) { ?>
			<h3 class="rtin-item-title"><?php echo wp_kses_post( $title );?></h3>
			<?php } ?>
		</div>
	</div>
</div>