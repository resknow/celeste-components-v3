<?php

use Twilight\Component;

Component::name( 'Navigation' )
	->schema( [
		'class' => [ 'type' => 'string' ],
	] )
	->register();

Component::name( 'Navigation.Link' )
	->schema( [
		'class' => [ 'type' => 'string' ],
		'href' => [ 'type' => 'string', 'required' => true ],
		'icon' => [ 'type' => 'string' ],
	] )
	->register();

Component::name( 'Navigation.Dropdown' )
	->schema( [
		'class' => [ 'type' => 'string' ],
	] )
	->register();