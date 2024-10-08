<?php
/**
 * @var array  $settings
 * @var array  $item
 * @var string $field_prefix
 */

defined( 'ABSPATH' ) || exit;

if ( ! $settings[ $field_prefix . 'subtitle_hide' ] ) {
	echo owce_get_text_with_tag( $this, $settings[ $field_prefix . 'subtitle_tag' ], $item['item_subtitle'], [
		'class'        => 'owl-subtitle',
		'data-setting' => 'item_subtitle'
	] );
}
