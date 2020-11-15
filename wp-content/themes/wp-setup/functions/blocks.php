<?php

add_filter( 'block_categories', function( $categories, $post ) {
    return array_merge(
        $categories,
        [
            [
                'slug'  => 'contentelements',
                'title' => 'Inhaltselemente',
            ]
        ]
    );
}, 10, 2 );

function my_acf_block_types() {

    // Check function exists.
    if( function_exists('acf_register_block_type') ) {

        acf_register_block_type([
            'name'              => 'intro',
            'title'             => __('Intro'),
            'description'       => __('Intro'),
            'render_template'   => 'blocks/intro.php',
            'category'          => 'contentelements',
            'icon'              => 'editor-alignleft',
            'mode'              => 'preview',
            'align'             => 'center',
            'keywords'          => [],
        ]);

        acf_register_block_type([
            'name'              => 'text',
            'title'             => __('Text'),
            'description'       => __('Simple Text'),
            'render_template'   => 'blocks/text.php',
            'category'          => 'contentelements',
            'icon'              => 'editor-alignleft',
            'mode'              => 'preview',
            'align'             => 'center',
            'keywords'          => [],
        ]);

        acf_register_block_type([
            'name'              => 'imgtxt',
            'title'             => __('Text Bild Kombo'),
            'description'       => __('Text Bild Kombo'),
            'render_template'   => 'blocks/imgtxt.php',
            'category'          => 'contentelements',
            'icon'              => 'editor-alignleft',
            'mode'              => 'preview',
            'align'             => 'center',
            'keywords'          => [],
        ]);

    }
}
add_action('acf/init', 'my_acf_block_types');

function allowed_block_types( $allowed_block_types, $post ) {
    return [
        'acf/intro',
        'acf/text',
        'acf/imgtxt',
    ];
}
add_filter( 'allowed_block_types', 'allowed_block_types', 10, 2 );
