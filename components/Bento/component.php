<?php

use Twilight\Component;

Component::name( 'Bento' )
	->schema( [
		'class' => [ 'type' => 'string' ],
	] )
	->register();