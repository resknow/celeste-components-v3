<?php

use Twilight\Component;

Component::name( 'CheckboxGroup' )
    ->schema( [
        'class' => [ 'type' => 'string' ],
        'label' => [ 'type' => 'string', 'required' => true ],
    ] )
    ->register();