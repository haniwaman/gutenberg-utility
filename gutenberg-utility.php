<?php
/*
Plugin Name: Gutenberg Utility
Description: Gutenbergでちょっとした調整を行いたい時に使えるUtilityクラス。
License: GPLv2
Version: 1.0.0
*/

function gu_enqueue_style() {
    wp_enqueue_style( 'gu-utility', plugins_url('assets/css/style.css', __FILE__), array(), '1.0.1', 'all' );
}
add_action( 'wp_enqueue_scripts', 'gu_enqueue_style' );

function gu_enqueue_editor() {
  wp_enqueue_style( 'theme-editor-style', plugins_url('assets/css/style.css', __FILE__), array(), '1.0.1', 'all' );
}
add_action( 'enqueue_block_editor_assets', 'gu_enqueue_editor' );
