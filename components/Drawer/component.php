<?php

use Twilight\Component;

Component::name( 'Drawer' )
    ->schema( [
        'isOpen' => [
            'type' => 'boolean',
            'default' => false,
        ],
        'toggleText' => [
            'type' => 'string',
            'default' => 'Toggle Drawer',
        ],
        'closeText' => [
            'type' => 'string',
            'default' => 'Close Drawer',
        ],
        'size' => [
            'type' => 'enum',
            'values' => [ 'sm', 'base', 'lg', 'xl' ],
            'default' => 'base',
        ]
    ] )
    ->register();