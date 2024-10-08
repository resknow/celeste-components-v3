<?php

use Celeste\Assets;
use Twilight\Component;

Component::name( 'Goform' )
    ->schema( [
        'class' => [ 'type' => 'string' ],
        'id' => [ 'type' => 'string', 'required' => true ],
    ] )
    ->present( function() {
        Assets::add( 'script', 'goform', 'https://goform.app/wc.js' );
    } )
    ->register();