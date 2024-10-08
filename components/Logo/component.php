<?php

use Twilight\Component;

Component::name( 'Logo' )
    ->schema( [
        'href' => [ 'type' => 'string', 'default' => home_url() ],
    ] )
    ->data( function( $context ) {
        $context['theme_version'] = CELESTE_VERSION;
        return $context;
    } )
    ->register();