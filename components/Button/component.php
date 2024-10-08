<?php

use Celeste\Assets;
use Twilight\Component;

/**
 * Always enqueue the Button styles because they can be used outside of the
 * component (the button block uses these styles)
 */
add_action( 'wp_enqueue_scripts', function() {
    Assets::component( 'Button', 'style' );
} );

Component::name( 'Button' )
    ->schema( [
        'class' => [ 'type' => 'string' ],
        'href' => [ 'type' => 'string' ],
        'variant' => [
            'type' => 'enum',
            'values' => [ 'primary', 'secondary', 'tertiary', 'base', 'contrast' ],
            'default' => 'primary'
        ],
        'size' => [
            'type' => 'enum',
            'values' => [ 'sm', 'md', 'lg' ],
            'default' => 'md'
        ],
        'icon' => [ 'type' => 'string' ],
        'iconPosition' => [
            'type' => 'enum',
            'values' => [ 'start', 'end' ],
            'default' => 'start'
        ],
        'type' => [
            'type' => 'enum',
            'values' => [ 'button', 'submit', 'reset' ]
        ],
    ] )
    ->register();