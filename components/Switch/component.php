<?php

use Twilight\Component;

Component::name( 'Switch' )
    ->schema( [
        'class' => [ 'type' => 'string' ],
        'checked' => [ 'type' => 'boolean', 'default' => false ],
        'id' => [ 'type' => 'string' ],
        'name' => [ 'type' => 'string', 'required' => true ],
    ] )
    ->register();