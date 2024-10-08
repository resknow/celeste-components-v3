<?php

use Twilight\Component;

Component::name( 'Select' )
    ->schema( [
        'class' => [ 'type' => 'string' ],
        'id' => [ 'type' => 'string' ],
        'name' => [ 'type' => 'string', 'required' => true ],
        'label' => [ 'type' => 'string', 'required' => true ],
        'showLabel' => [ 'type' => 'boolean', 'default' => true ],
        'required' => [ 'type' => 'boolean', 'default' => false ],
        'icon' => [ 'type' => 'string' ],
    ] )
    ->register();