<?php

use Celeste\Query\Post;
use Twilight\Component;

Component::name( 'PostCard' )
    ->schema( [
        'id' => [ 'type' => 'number' ]
    ] )
    ->data( function( $context ) {
        if ( get_post_status( $context['id'] ) === false ) {
            throw new Exception( sprintf( 'Post with ID <code>`%s`</code> does not exist.', $context['id'] ) );
            return $context;
        }

        $context['post'] = Post::id($context['id'])
            ->with_featured_image()
            ->get();

        return $context;
    } )
    ->register();