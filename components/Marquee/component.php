<?php

use Twilight\Component;

Component::name( 'Marquee' )
    ->schema( [
        'class' => [ 'type' => 'string' ],
        'gap' => [ 'type' => 'string' ],
        'pauseOnHover' => [ 'type' => 'boolean', 'default' => false ],
        'speed' => [ 'type' => 'string' ],
    ] )
    ->data( function( $context ) {
        $inline_styles = [];

        if ( isset( $context['gap'] ) ) {
            $inline_styles[] = sprintf( '--marquee-gap: %s', $context['gap'] );
        }

        if ( isset( $context['speed'] ) ) {
            $inline_styles[] = sprintf( '--marquee-speed: %s', $context['speed'] );
        }

        $styles = !empty( $inline_styles ) ? implode( ';', $inline_styles ) : null;

        if ( $styles ) {
            $context['attributes']['style'] = isset( $context['attributes']['style'] )
                ? sprintf( '%s; %s', $context['attributes']['style'], $styles )
                : $styles;
        }

        return $context;
    } )
    ->register();