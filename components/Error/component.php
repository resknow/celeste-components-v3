<?php

use Celeste\Assets;
use Twilight\Component;

/**
 * The compiler won't know when the Error component comes up, so we'll make sure the styles
 * are always enqueued
 */
add_action( 'wp_enqueue_scripts', function() {
    Assets::component( 'Error', 'style' );
} );

Component::name( 'Error' )
    ->schema( [
        'env' => [ 'type' => 'string', 'default' => 'production' ],
        'component' => [ 'type' => 'string' ],
        'error' => [ 'type' => 'object' ]
    ] )
    ->data( function( $context ) {
        $context['component'] = str_replace( '_', '.', $context['component'] );
        return $context;
    } )
    ->register();

Component::name( 'Error/TraceLine' )
    ->schema( [
        'trace' => [ 'type' => 'object' ],
        'root' => [ 'type' => 'string' ]
    ] )
    ->data( function( $context ) {
        if ( isset( $context['root'] ) ) {
            $context['trace']['path'] = str_replace( $context['root'], '', $context['trace']['file'] );
        }

        return $context;
    } )
    ->register();