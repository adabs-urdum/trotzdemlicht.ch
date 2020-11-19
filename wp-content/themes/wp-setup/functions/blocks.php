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
            'name'              => 'otherxmas',
            'title'             => __('Andere Weihnachten'),
            'description'       => __('Andere Weihnachten'),
            'render_template'   => 'blocks/otherxmas.php',
            'category'          => 'contentelements',
            'icon'              => 'editor-alignleft',
            'mode'              => 'preview',
            'align'             => 'center',
            'keywords'          => [],
        ]);

        acf_register_block_type([
            'name'              => 'inspiration',
            'title'             => __('Inspiration'),
            'description'       => __('Inspiration'),
            'render_template'   => 'blocks/inspiration.php',
            'category'          => 'contentelements',
            'icon'              => 'editor-alignleft',
            'mode'              => 'preview',
            'align'             => 'center',
            'keywords'          => [],
        ]);

        acf_register_block_type([
            'name'              => 'footer',
            'title'             => __('Footer'),
            'description'       => __('Footer'),
            'render_template'   => 'blocks/footer.php',
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
        'acf/otherxmas',
        'acf/inspiration',
        'acf/footer',
    ];
}
add_filter( 'allowed_block_types', 'allowed_block_types', 10, 2 );
