<?php
/**
 * The base configuration for WordPress
 *
 * The wp-config.php creation script uses this file during the installation.
 * You don't have to use the web site, you can copy this file to "wp-config.php"
 * and fill in the values.
 *
 * This file contains the following configurations:
 *
 * * MySQL settings
 * * Secret keys
 * * Database table prefix
 * * ABSPATH
 *
 * @link https://wordpress.org/support/article/editing-wp-config-php/
 *
 * @package WordPress
 */

// ** MySQL settings - You can get this info from your web host ** //
/** The name of the database for WordPress */
define( 'DB_NAME', 'wordpress' );

/** MySQL database username */
define( 'DB_USER', 'root' );

/** MySQL database password */
define( 'DB_PASSWORD', '' );

/** MySQL hostname */
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
define( 'AUTH_KEY',         'a&Ebap%E&anSGB4<5Y$${?L+Sp&oqzFWSyun1e3fS,z*eZp`+t$CCTjuJLW7+/{{' );
define( 'SECURE_AUTH_KEY',  '(c/yMOTh*5EBrdNQGE8=pgP}2ki+F_AXymtR*{G:lRte5E)?BZ+(efSKp`utv?@;' );
define( 'LOGGED_IN_KEY',    '9=EoaHq:8h( /DO{qSf#cD*f4Pp1x6=[{IYcur()_=+:~ieoGOmMi^T}Bzplx1(m' );
define( 'NONCE_KEY',        '_aPwXZe)-kRP17sP&Jg2UD&OVA1rf8,qYD6h/<|eq(uSJbffk>ldQ?$WL;,%Nd=B' );
define( 'AUTH_SALT',        'J)vs,A!*mx! PDQ*-Mr<g$/kkBL~v`8<~<Z^mjW)~ :_2U--,gI[VC17$Yh|75B.' );
define( 'SECURE_AUTH_SALT', 'Z.#E66WURwO]:$_i6@@J*?WJ|;wHcL|C4KJ5V#KiaSa[h|pW!(q<JE14B^}QYQnF' );
define( 'LOGGED_IN_SALT',   '{EnX~1b^/YQ+H ,OW~I4~#].Skx+4~xSX&v5[D@aY/qX).>wg=-1.:1!:3.re#+|' );
define( 'NONCE_SALT',       'ZhMIfOTw(Ei2WwY,Q75}~6sZ|4qM#%9!mV/)>vZZF,VrQn!*45LQjdQ4X`h1?vBS' );

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
 * @link https://wordpress.org/support/article/debugging-in-wordpress/
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
