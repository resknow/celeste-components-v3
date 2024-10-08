<?php

use Twilight\Component;

Component::name( 'Checkbox' )
    ->schema( [
        'class' => [ 'type' => 'string' ],
        'id' => [ 'type' => 'string' ],
        'name' => [ 'type' => 'string', 'required' => true ],
        'label' => [ 'type' => 'string', 'required' => true ],
        'checked' => [ 'type' => 'boolean' ],
        'type' => [
            'type' => 'enum',
            'values' => [ 'checkbox', 'radio' ]
        ],
    ] )
    ->register();