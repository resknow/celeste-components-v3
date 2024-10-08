<?php

use Celeste\Context;
use Twilight\Component;

Component::name( 'Menu' )
    ->schema( [
        'menu' => [ 'type' => 'string', 'required' => true ],
    ] )
    ->data( function( $context ) {
        $context['menu'] = Context::get( 'globals.menus.' . $context['menu'] );
        return $context;
    } )
    ->register();