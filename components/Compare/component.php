<?php

use Twilight\Component;

Component::name( 'Compare' )
    ->schema( [
        'class' => [ 'type' => 'string' ],
        'orientation' => [
            'type' => 'enum',
            'values' => [ 'horizontal', 'vertical' ],
            'default' => 'horizontal',
        ],
    ] )
    ->register();