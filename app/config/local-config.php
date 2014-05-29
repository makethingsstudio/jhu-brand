<?php

ini_set( 'display_errors', 0 );
define( 'WP_DEBUG_DISPLAY', false );

// define( 'SAVEQUERIES', true );
// define( 'WP_DEBUG', true );

define('WP_POST_REVISIONS', false);

define('WP_HOME', 'http://' . $_SERVER['HTTP_HOST']);
define('WP_SITEURL', 'http://' . $_SERVER['HTTP_HOST'] . '/wp');

define( 'DB_NAME', 'p0270' );
define( 'DB_USER', 'root' );
define( 'DB_PASSWORD', 'root' );
define( 'DB_HOST', '127.0.0.1:8889' ); // Probably 'localhost'

define( 'WP_CONTENT_DIR', PUBLIC_ROOT . '/content' );
define( 'WP_CONTENT_URL', 'http://' . $_SERVER['HTTP_HOST'] . '/content' );

define('WPMU_PLUGIN_DIR', PUBLIC_ROOT . '/content/mu-plugins');
define('WPMU_PLUGIN_URL', 'http://' . $_SERVER['HTTP_HOST'] . '/content/mu-plugins');
