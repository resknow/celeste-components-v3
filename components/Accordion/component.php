<?php

use Twilight\Component;

Component::name( 'Accordion' )
    ->schema( [
        'class' => [ 'type' => 'string' ],
        'id' => [ 'type' => 'string', 'default' => 'accordion' ],
    ] )
    ->register();

Component::name( 'Accordion.Content' )
    ->schema( [
        'class' => [ 'type' => 'string' ],
    ] )
    ->register();

Component::name( 'Accordion.Item' )
    ->schema( [
        'class' => [ 'type' => 'string' ],
    ] )
    ->register();

Component::name( 'Accordion.Trigger' )
    ->schema( [
        'class' => [ 'type' => 'string' ],
        'icon' => [ 'type' => 'string', 'default' => 'caret-down' ],
        'is' => [ 'type' => 'string', 'default' => 'h3' ],
    ] )
    ->register();