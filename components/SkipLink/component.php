<?php

use Twilight\Component;

Component::name( 'SkipLink' )
    ->schema( [
        'class' => [ 'type' => 'string' ],
        'href' => [ 'type' => 'string', 'default' => '#content' ],
        'label' => [ 'type' => 'string', 'default' => 'Skip to Content' ],
    ] )
    ->register();