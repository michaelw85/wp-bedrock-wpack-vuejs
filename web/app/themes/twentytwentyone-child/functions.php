<?php

use WPackio\Enqueue;

$enqueue = new Enqueue('app', 'dist', '1.0.0', 'theme', false, 'child');
add_action('wp_enqueue_scripts', function () use ($enqueue) {
    $enqueue->enqueue('app', 'main', []);
});
