<?php
/**
 * @var array  $settings
 * @var array  $item
 * @var string $field_prefix
 */

defined( 'ABSPATH' ) || exit;

if ( ! $settings[ $field_prefix . 'content_hide' ] ) {
	echo owce_get_text_with_tag( $this, $settings[ $field_prefix . 'content_tag' ], $item['item_content'], [
		'class'        => 'owl-content',
		'data-setting' => 'item_content'
	] );
}
