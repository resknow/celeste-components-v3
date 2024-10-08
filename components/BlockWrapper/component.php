<?php

use Twilight\Component;

Component::name( 'BlockWrapper' )
    ->schema( [
        'attrs' => [ 'validator' => fn($value) => is_string($value) || is_null($value) ],
        'block' => [ 'type' => 'array' ],
        'is' => [ 'type' => 'string', 'default' => 'div' ],
        'preview' => [ 'type' => 'bool', 'default' => false ],
        'disableEditorInteraction' => [ 'type' => 'bool', 'default' => false ],
    ] )
    ->data( function( $context ) {

        /**
         * If the block itself has a tagName set, we'll use that so long as the user
         * hasn't overridden it with the is attribute. If neither are set, we'll
         * default to a div.
         */
        if ( isset( $context['block']['tagName'] ) ) {
            $context['is'] = $context['block']['tagName'];
        }

        /**
         * Add a data-preview attribute when we're inside the Block Editor and make
         * the additional element display contents to try and avoid CSS issues
         * between the editor and the frontend.
         */
        if ( isset( $context['preview'] ) && $context['preview'] ) {
            $context['attributes'] = ' data-preview="true" style="display: contents;"';
        }

        return $context;
    } )
    ->register();