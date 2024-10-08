<?php

use Twilight\Component;

Component::name( 'Welcome' )
	->schema( [
		'class' => [ 'type' => 'string' ],
		'preview' => [ 'type' => 'bool', 'default' => false ],
	] )
	->data( function( $context ) {
		$changelog = sprintf( '%s/changelog.md', CELESTE_PLUGIN_PATH );

		if ( file_exists( $changelog ) ) {
			$parsedown = new Parsedown();
			$markdown = file_get_contents( $changelog );
			$markdown = str_replace( [ '[', ']' ], '**', $markdown );
			$context['changelog'] = $parsedown->text( $markdown );
		}

		$context['theme_version'] = wp_get_theme()->get( 'Version' );

		return $context;
	} )
	->register();