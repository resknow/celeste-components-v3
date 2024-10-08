<?php

use Twilight\Component;

Component::name( 'Carousel' )
    ->schema( [
        'class' => [ 'type' => 'string' ],
        'preview' => [ 'type' => 'boolean', 'default' => false ],
        'withDots' => [ 'type' => 'boolean', 'default' => false ],
        'withArrows' => [ 'type' => 'boolean', 'default' => false ],
        'autoplay' => [ 'type' => 'boolean', 'default' => false ],
        'autoplaySpeed' => [ 'type' => 'number', 'default' => 5000 ],
    ] )
    ->register();

Component::name( 'Carousel.Item' )
    ->schema( [
        'class' => [ 'type' => 'string' ],
        'preview' => [ 'type' => 'boolean', 'default' => false ],
    ] )
    ->register();