<?php
// ===================================================
// Load database info and local development parameters
// ===================================================
define('APP_ROOT', dirname(__DIR__));
define('PUBLIC_ROOT', APP_ROOT . '/public');
// define('APP_ENV', getenv('APPLICATION_ENV'));

/** Require environment-specific configuration */
if (file_exists(APP_ROOT . '/config/local-config.php')) {
    require APP_ROOT . '/config/local-config.php';
} else if (APP_ENV) {
    require APP_ROOT . '/config/' . APP_ENV . '-config.php';
} else {
    require APP_ROOT . '/config/dev-config.php';
}

if(isset( $_GET['debug'] ) && APP_ENV != 'production') :
    die( 'APP Root is:' . WPMU_PLUGIN_DIR);
endif;

// ================================================
// You almost certainly do not want to change these
// ================================================
define( 'DB_CHARSET', 'utf8' );
define( 'DB_COLLATE', '' );

// ==============================================================
// Salts, for security
// Grab these from: https://api.wordpress.org/secret-key/1.1/salt
// ==============================================================
define('AUTH_KEY',         '{!skk*qvA{X|9`FkQt7+XmK]`.iQ@+QQQeF-y(Yp)];HSd#r<,@)6=ohq{B7tH+T');
define('SECURE_AUTH_KEY',  '[6lU.XK$oezb0fUqmb.c3L$U$-m j_qN+h>Dq:RIavT`RPpBo?o*Hzhk?n;Nes3f');
define('LOGGED_IN_KEY',    'DurgClAYN|%B*p+,Po7*Qoz&}%_S#?b}5n))<-{xe,~=w.AM-HE]4|JXy5jKRKMm');
define('NONCE_KEY',        'eL+LD@was6R` 2Elf>kao,h!fhht|P-HW|t,4Tr`wm`$x8hJ5|!B0gMGT3q7Lt%R');
define('AUTH_SALT',        'vA8.~r;+:ZfxtF-fJ4kMZGQ:Ev8[Q)[7V7`x |AOBC]NRZmT3|YV,{d1&|%$A6@d');
define('SECURE_AUTH_SALT', '<>l}hu6O$R:*peL;{$-L.Er|p?*QXv=gu;I-#{Tq?E+w;kaHT(o&O+?,TwKXS%A{');
define('LOGGED_IN_SALT',   'o~<3/Q5>W*}o^}BQ%RnZ.p<9U?J+T9D+_8!x&gX%|hxT6>i:Sf],Pr_07uLK#V[P');
define('NONCE_SALT',       'f6 ]<emy@nuqw+|rm~LK`^yO]c^<^}pFKffg(^K-QkK1c;Gw!%zGMZ0qngl9S-)!');

// ==============================================================
// Table prefix
// Change this if you have multiple installs in the same database
// ==============================================================
$table_prefix  = 'wp_';

// ================================
// Language
// Leave blank for American English
// ================================
define( 'WPLANG', '' );

// ======================================
// Load a Memcached config if we have one
// ======================================
if ( file_exists( dirname( __FILE__ ) . '/memcached.php' ) )
	$memcached_servers = include( dirname( __FILE__ ) . '/memcached.php' );

// ===========================================================================================
// This can be used to programatically set the stage when deploying (e.g. production, staging)
// ===========================================================================================
define( 'WP_STAGE', '%%WP_STAGE%%' );
define( 'STAGING_DOMAIN', '%%WP_STAGING_DOMAIN%%' ); // Does magic in WP Stack to handle staging domain rewriting

// ===================
// Bootstrap WordPress
// ===================
if ( !defined( 'ABSPATH' ) )
	define( 'ABSPATH', dirname( __FILE__ ) . '/wp/' );
require_once( ABSPATH . 'wp-settings.php' );
