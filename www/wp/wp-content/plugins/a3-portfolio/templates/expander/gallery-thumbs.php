<?php
/**
 * The template for displaying portfolio gallery thumbnails container in the expander.
 *
 * Override this template by copying it to yourtheme/portfolios/expander/gallery-thumbs.php
 *
 * @author 		A3 Rev
 * @version     1.0.0
 */

if ( ! defined( 'ABSPATH' ) ) {
	exit; // Exit if accessed directly
}

if ( ! is_array( $gallery ) || count( $gallery ) <= 1 ) return;

$active_class = '';
$class = '';
$i = 0;
$j = 0;
?>

<div class="a3-portfolio-gallery-thumbs-container">

<?php foreach ( $gallery as $attachment_id ) : ?>

	<?php
		$thumb = wp_get_attachment_image_src( $attachment_id,'thumbnail', true );
		$thumb_full_url = wp_get_attachment_image_src( $attachment_id,'full', true );
		$the_caption = get_post_field( 'post_excerpt', $attachment_id );
	?>

	<?php
		$j++;
		if ( $j == 1 ) {
			$class = 'first';
		}
		if($j == 4 || ($j == count( $gallery ) - 1 && count( $gallery ) > 1)){
			$class = 'last';
			$j = 0;
		}

		if ( $i == 0 ) {
			$active_class = 'current_img';
		} else {
			$active_class = '';
		}
		$i++;
	?>

	<div class="pg_grid <?php echo $active_class; ?> <?php echo $class; ?>" id="<?php echo esc_attr( $attachment_id ); ?>">
		<div data-bg="<?php echo $thumb[0]; ?>"
			data-originalfull="<?php echo $thumb_full_url[0]; ?>"
			data-caption="<?php echo $the_caption; ?>"
			class="a3-portfolio-gallery-thumb-lazy pg_grid_content"
			style="background:url(<?php echo $image_blank; ?>) no-repeat center center;"></div>
	</div>

<?php endforeach; ?>

</div>