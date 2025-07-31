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
define( 'DB_NAME', 'mightyrep_wp' );

/** Database username */
define( 'DB_USER', 'mightyrep_wp' );

/** Database password */
define( 'DB_PASSWORD', '-vgvuT2£1H47-P7r' );

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
define( 'AUTH_KEY',         'rDJp!%LsZ_TJ%7A*U/gw`HDJXV9oTJ=K/SpN!o3H#0kM)RSCZCy+0n6_1m[Z@k}8' );
define( 'SECURE_AUTH_KEY',  ')qx,:{@yC S;{Mw:r3W$`vZfc;IY3*+tU7#cFJkBn3&Whpc;(SnW=BX +B%o{8>-' );
define( 'LOGGED_IN_KEY',    ':qX%??uL:>{uZ-)PjLaw9hmip;WnlTK$ZZhjD3!`m;u6-sl<0vO%+iaB`fAkjTt;' );
define( 'NONCE_KEY',        'm}O?-uXpH@6&n[^uH4Ar&V#&n@OlI8(Gze/0}gJyIQcVz 6=Kgn(dD2B>GQhs13-' );
define( 'AUTH_SALT',        'U3`46uumhcdg7!HXu9u2JSlp+?XK00oKk~:.c0C6_,nC]s(O}D7^TL!yg,Kav*GZ' );
define( 'SECURE_AUTH_SALT', ',^5)T.cLl:YVQnyGmShlBP@ZqPmM,G2N!iK@%a3@wI{Q{r=W PfFRP9~*_9dX$jP' );
define( 'LOGGED_IN_SALT',   'wvd@G^TICaawkUb`!_iUr8SkC,lh)IS4l5z@*u2X*kbMo9cF:O!~n d&tK[o6t`p' );
define( 'NONCE_SALT',       'TB~&IW8,h+:3Vq#dNY(}::{S!j/(K]j{Q4>[cCh]NfrkA*Tk}Ob;&!5@:fJuZWVI' );

/**#@-*/

/**
 * WordPress database table prefix.
 *
 * You can have multiple installations in one database if you give each
 * a unique prefix. Only numbers, letters, and underscores please!
 *
 * At the installation time, database tables are created with the specified prefix.
 * Changing this value after WordPress is installed will make your site think
 * it has not been installed.
 *
 * @link https://developer.wordpress.org/advanced-administration/wordpress/wp-config/#table-prefix
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
