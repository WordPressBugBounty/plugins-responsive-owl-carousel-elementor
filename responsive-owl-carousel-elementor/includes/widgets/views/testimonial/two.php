<?php
/**
 * @var array  $settings
 * @var string $item_hover_animation_class
 * @var string $field_prefix
 */

defined( 'ABSPATH' ) || exit;

if ( ! empty( $settings ) ) :
	if ( $settings['items_list'] ) :
		$item_count = 0;
		foreach ( $settings['items_list'] as $item ) : ?>
			<?php
			$link_start = '';
			$link_end   = '';
			if ( ! empty( $item['item_url']['url'] ) ) {
				$link_html  = owce_get_item_link( $this, $item, $item_count );
				$link_start = $link_html[0] ?? '';
				$link_end   = $link_html[1] ?? '';
			}
			$item_count++;
			?>
			<div class="item carousel-item-<?php echo esc_attr( $item['_id'] . ' ' . $item_hover_animation_class ); ?>">
				<?php
				echo wp_kses_post( $link_start );
                    require OWCE_PLUGIN_PATH . '/includes/widgets/views/thumbnail.php';
                    require OWCE_PLUGIN_PATH . '/includes/widgets/views/rating.php';
                    require OWCE_PLUGIN_PATH . '/includes/widgets/views/quote.php';
                    require OWCE_PLUGIN_PATH . '/includes/widgets/views/content.php';
                    require OWCE_PLUGIN_PATH . '/includes/widgets/views/title.php';
                    require OWCE_PLUGIN_PATH . '/includes/widgets/views/subtitle.php';
				echo wp_kses_post( $link_end );
				?>
			</div>
		<?php
		endforeach;
	endif;
endif;
