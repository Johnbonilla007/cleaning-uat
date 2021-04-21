<?php
/**
 * @author  RadiusTheme
 * @since   1.0
 * @version 1.0
 */

$clenix_has_entry_meta  = ( ClenixTheme::$options['blog_author_name'] || ClenixTheme::$options['blog_date'] || ClenixTheme::$options['blog_cats'] || ClenixTheme::$options['blog_comment_num'] ||  ClenixTheme::$options['blog_view'] && function_exists( 'clenix_views' ) || ClenixTheme::$options['blog_length'] && function_exists( 'clenix_reading_time' ) ) ? true : false;

$thumb_size = 'clenix-size3';
$clenix_comments_number = number_format_i18n( get_comments_number() );
$clenix_comments_html = $clenix_comments_number == 1 ? esc_html__( 'Comment' , 'clenix' ) : esc_html__( 'Comments' , 'clenix' );
$clenix_comments_html = '<span class="comment-number">'. $clenix_comments_number .'</span> '. $clenix_comments_html;

$thumbnail = false;
$post_image = '';
$post_layout_class = '';
if ( ( !has_post_thumbnail() ) && ClenixTheme::$options['display_no_preview_image'] == '0' ) {
	$post_layout_class = 'col-lg-12 col-md-12';	
} else {
	$post_layout_class = 'col-lg-7 col-md-12';	
}
if ( ClenixTheme::$layout != 'full-width' ) {	
	$post_image = 'col-lg-5 col-md-12 col-sm-12 col-12';	
} else {
	$post_image = 'col-lg-5 col-md-5 col-sm-4 col-12';
}

$id = get_the_ID();
$content = get_the_content();
$content = apply_filters( 'the_content', $content );
$content = wp_trim_words( get_the_excerpt(), ClenixTheme::$options['post_content_limit'], '' );

?>
<div id="post-<?php the_ID(); ?>" <?php post_class( 'row blog-layout-2' ); ?>>
	<?php if ( has_post_thumbnail() || ClenixTheme::$options['display_no_preview_image'] == '1'  ) { ?>
		<div class="<?php echo esc_attr( $post_image ); ?>">
			<div class="blog-img-holder">
				<div class="blog-img">
					<a href="<?php the_permalink(); ?>" class="img-opacity-hover"><?php if ( has_post_thumbnail() ) { ?>
						<?php the_post_thumbnail( $thumb_size, ['class' => 'img-responsive'] ); ?>
						<?php } else {
						if ( ClenixTheme::$options['display_no_preview_image'] == '1' ) {
							if ( !empty( ClenixTheme::$options['no_preview_image']['id'] ) ) {
								$thumbnail = wp_get_attachment_image( ClenixTheme::$options['no_preview_image']['id'], $thumb_size );						
							}
							elseif ( empty( ClenixTheme::$options['no_preview_image']['id'] ) ) {
								$thumbnail = '<img class="wp-post-image" src="'.CLENIX_IMG_URL.'noimage_450X330.jpg" alt="'. the_title_attribute( array( 'echo'=> false ) ) .'">';
							}
							echo wp_kses( $thumbnail , 'alltext_allow' );
						}
					}
					?>
					</a>
				</div>
			</div>
		</div>
	<?php } ?>
	<div class="<?php echo esc_attr( $post_layout_class ); ?>">
		<div class="entry-content">
			<h3><a href="<?php the_permalink();?>"><?php the_title();?></a></h3>
			<?php if ( $clenix_has_entry_meta ) { ?>
			<div class="entry-meta">
				<ul>
					<?php if ( ClenixTheme::$options['blog_author_name'] ) { ?>
					<li class="item-author"><i class="fa fa-user" aria-hidden="true"></i><?php esc_html_e( 'by ', 'clenix' );?><?php the_author_posts_link(); ?></li>
					<?php } if ( ClenixTheme::$options['blog_date'] ) { ?>
					<li><i class="fa fa-calendar" aria-hidden="true"></i><?php echo get_the_date(); ?></li>
					<?php } if ( ClenixTheme::$options['blog_cats'] ) { ?>			
					<li class="blog-cat"><i class="fa fa-tag" aria-hidden="true"></i><?php echo the_category( ', ' );?></li>
					<?php } if ( ClenixTheme::$options['blog_comment_num'] ) { ?>
					<li><i class="fa fa-comment" aria-hidden="true"></i><a href="<?php echo get_comments_link( get_the_ID() ); ?>"><?php echo wp_kses( $clenix_comments_html , 'alltext_allow' );?></a></li>
					<?php } if ( ClenixTheme::$options['blog_view'] && function_exists( 'clenix_views' ) ) { ?>
					<li><i class="fa fa-heart" aria-hidden="true"></i><span class="meta-views meta-item "><?php echo clenix_views(); ?></span></li>
					<?php } if ( ClenixTheme::$options['blog_length'] && function_exists( 'clenix_reading_time' ) ) { ?>
					<li class="meta-reading-time meta-item"><i class="fa fa-clock-o" aria-hidden="true"></i><?php echo clenix_reading_time(); ?></li>
					<?php } ?>
				</ul>
			</div>
			<?php } ?>			
			<div class="blog-text"><p><?php echo wp_kses( $content , 'alltext_allow' ); ?></p></div>
			<a class="post-grid-more" href="<?php the_permalink();?>"><?php esc_html_e( 'READ MORE ', 'clenix' );?><i class="fa fa-long-arrow-right" aria-hidden="true"></i></a>
		</div>
	</div>	
</div>