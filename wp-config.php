<?php
/**
 * The base configuration for WordPress
 *
 * The wp-config.php creation script uses this file during the installation.
 * You don't have to use the website, you can copy this file to "wp-config.php"
 * and fill in the values.
 *
 * This file contains the following configurations:
 *
 * * Database settings
 * * Secret keys
 * * Database table prefix
 * * ABSPATH
 *
 * @link https://developer.wordpress.org/advanced-administration/wordpress/wp-config/
 *
 * @package WordPress
 */

// ** Database settings - You can get this info from your web host ** //
/** The name of the database for WordPress */
define( 'DB_NAME', 'alhomidi' );

/** Database username */
define( 'DB_USER', 'root' );

/** Database password */
define( 'DB_PASSWORD', '' );

/** Database hostname */
define( 'DB_HOST', 'localhost' );

/** Database charset to use in creating database tables. */
define( 'DB_CHARSET', 'utf8mb4' );

/** The database collate type. Don't change this if in doubt. */
define( 'DB_COLLATE', '' );

/**#@+
 * Authentication unique keys and salts.
 *
 * Change these to different unique phrases! You can generate these using
 * the {@link https://api.wordpress.org/secret-key/1.1/salt/ WordPress.org secret-key service}.
 *
 * You can change these at any point in time to invalidate all existing cookies.
 * This will force all users to have to log in again.
 *
 * @since 2.6.0
 */
define( 'AUTH_KEY',         '8v4]Z5~Ob}8e0ju~ETFL]0%.L>mSLO^(A|&=,H{@87rWP3T+pg4@`ZSvYWY6FVO$' );
define( 'SECURE_AUTH_KEY',  'S&pb)NO#FrYfz}Nv3?@JY@vb}YP>baz?Egn@W&I)70[uTPU;fEb549n UI|k,FUC' );
define( 'LOGGED_IN_KEY',    'vM%?$0XN<a`4aDEY25e6_y^R([Kn<kxv3n<K?i5thFq-(<ZFg,Zf}Ps^t>3G2yF$' );
define( 'NONCE_KEY',        '.&lb68F}l7Lkjuwvle7NtRP>1)v^4s 7EAR9R.Pn3EC2#O`>a(a;dCh3iL{#mZLz' );
define( 'AUTH_SALT',        'dotrxfe|Rhbe|PHl ~8:bY^*>)r]@EoSrHLab[/WCYm~=O`oA(hmPs0QB%JTS#k*' );
define( 'SECURE_AUTH_SALT', 'DrEe>X16py>PYuo:nQ9XK;GN,L1DhCYRw_BHM@weU4J!q}EdL}psL(q9VAYd^Lpn' );
define( 'LOGGED_IN_SALT',   'V(a80GX0$C 9)%_OCPo?HaSZ` pVpoqM=k~t&=<h0iv{rgbwv2on-[ 4HSABqL~<' );
define( 'NONCE_SALT',       '/Qbu~466$f ^B(buJ)HqRU6!BJqNzf5s!6S;~]1I~mwi|TC.II3J4&^ycu/nc6a[' );

/**#@-*/

/**
 * WordPress database table prefix.
 *
 * You can have multiple installations in one database if you give each
 * a unique prefix. Only numbers, letters, and underscores please!
 */
$table_prefix = 'wp_';

/**
 * For developers: WordPress debugging mode.
 *
 * Change this to true to enable the display of notices during development.
 * It is strongly recommended that plugin and theme developers use WP_DEBUG
 * in their development environments.
 *
 * For information on other constants that can be used for debugging,
 * visit the documentation.
 *
 * @link https://developer.wordpress.org/advanced-administration/debug/debug-wordpress/
 */
define( 'WP_DEBUG', false );

/* Add any custom values between this line and the "stop editing" line. */



/* That's all, stop editing! Happy publishing. */

/** Absolute path to the WordPress directory. */
if ( ! defined( 'ABSPATH' ) ) {
	define( 'ABSPATH', __DIR__ . '/' );
}

/** Sets up WordPress vars and included files. */
require_once ABSPATH . 'wp-settings.php';
