<?php

use Twilight\Component;

Component::name( 'DesignedBy' )
    ->schema( [
        'logo' => [
            'type' => 'enum',
            'values' => [ 'start', 'center', 'end' ],
            'default' => 'center'
        ]
    ] )
    ->register();