<?php

use Celeste\Utilities\Icon;
use Twilight\Component;

Component::name( 'Icon' )
    ->schema( [
        'name' => [ 'type' => 'string', 'required' => true ]
    ] )
    ->data( function ( $context ) {
        if ( !empty( $context['attributes'] ) ) {
            $attributes = array_map( function ( $key ) use ( $context ) {
                return sprintf( '%s="%s"', $key, $context['attributes'][ $key ] );
            }, array_keys( $context['attributes'] ) );
        }

        $context['svg'] = Icon::render( $context['name'] );

        if ( isset($attributes) ) {
            $context['svg'] = str_replace( '<svg ', sprintf( '<svg %s', implode( ' ', $attributes ) ), $context['svg'] );
        }

        return $context;
    } )
    ->register();