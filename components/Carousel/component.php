<?php

use Twilight\Component;

Component::name( 'Carousel' )
    ->schema( [
        'is' => [
            'type' => 'string',
            'default' => 'div'
        ],
        'id' => [
            'type' => 'string',
            'required' => true
        ],
        'class' => [
            'type' => 'string'
        ],
        'preview' => [
            'type' => 'boolean',
            'default' => false
        ],
        'name' => [
            'type' => 'string',
            'required' => true
        ],
        'options' => [
            'type' => 'array'
        ],
    ] )
    ->data( function( $context ) {
        $context['options'] = isset( $context['options'] )
            ? esc_attr( json_encode( $context['options'] ) )
            : null;

        return $context;
    } )
    ->register();

Component::name( 'Carousel.Item' )
    ->schema( [
        'class' => [ 'type' => 'string' ],
        'preview' => [ 'type' => 'boolean', 'default' => false ],
    ] )
    ->register();