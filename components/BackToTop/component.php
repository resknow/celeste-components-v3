<?php

use Twilight\Component;

Component::name( 'BackToTop' )
    ->schema( [
        'class' => [ 'type' => 'string' ],
        'href' => [ 'type' => 'string', 'default' => '#top' ],
        'label' => [ 'type' => 'string', 'default' => 'Back to Top' ],
    ] )
    ->register();