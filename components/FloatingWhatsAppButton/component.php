<?php

use Twilight\Component;

Component::name( 'FloatingWhatsAppButton' )
    ->schema( [
        'number' => [ 'type' => 'string', 'required' => true ],
    ] )
    ->data( function( $context ) {
        /**
         * Format number for WhatsApp link
         * e.g. 07258 358358 -> 447258358358
         */
        $context['number'] = '44' . preg_replace( '/\s/', '', ltrim( $context['number'], '0' ) );
        return $context;
    } )
    ->register();