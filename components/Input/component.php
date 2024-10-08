<?php

use Twilight\Component;

Component::name( 'Input' )
    ->schema( [
        'class' => [ 'type' => 'string' ],
        'id' => [ 'type' => 'string' ],
        'name' => [ 'type' => 'string', 'required' => true ],
        'label' => [ 'type' => 'string', 'required' => true ],
        'type' => [ 'type' => 'string', 'default' => 'text' ],
        'required' => [ 'type' => 'boolean', 'default' => false ],
        'showLabel' => [ 'type' => 'boolean', 'default' => true ],
    ] )
    ->register();