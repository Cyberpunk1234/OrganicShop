<?php
/**
 * The base configuration for WordPress
 *
 * The wp-config.php creation script uses this file during the
 * installation. You don't have to use the web site, you can
 * copy this file to "wp-config.php" and fill in the values.
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
define( 'DB_NAME', 'apple' );

/** MySQL database username */
define( 'DB_USER', 'root' );

/** MySQL database password */
define( 'DB_PASSWORD', '' );

/** MySQL hostname */
define( 'DB_HOST', 'localhost' );

/** Database Charset to use in creating database tables. */
define( 'DB_CHARSET', 'utf8mb4' );

/** The Database Collate type. Don't change this if in doubt. */
define( 'DB_COLLATE', '' );

/**#@+
 * Authentication Unique Keys and Salts.
 *
 * Change these to different unique phrases!
 * You can generate these using the {@link https://api.wordpress.org/secret-key/1.1/salt/ WordPress.org secret-key service}
 * You can change these at any point in time to invalidate all existing cookies. This will force all users to have to log in again.
 *
 * @since 2.6.0
 */
define( 'AUTH_KEY',         '4a*9&_kW8tdioVW3:,[[zvCxgt_mLss@u2+3iW9kjO_nu4-PuH%SLb7)?Q5:hf}~' );
define( 'SECURE_AUTH_KEY',  'zrxGEU6+hdix7eDqkguby9oK]&9Zjdw*4,SB~fol3-=zR#-JyNLMWogH!3do-tSF' );
define( 'LOGGED_IN_KEY',    ';Onj$ q<(J}Q5,c]^B<W367w!9)C]4IT[.2 YTeL0&YEKJWR.48<I8?_/4R>=md)' );
define( 'NONCE_KEY',        'Bi!LzeII~W.K5y1Wi3I;H5K@9kMG`60=,.bZ%er&R)93`+ce49$<0/&x6ty5pnQe' );
define( 'AUTH_SALT',        'mjuk9wf;q]2$)/T`QqPF_Vs<Ni0E}=Ua?Hq uv0}U<Gq)3z_#aN~^FFxO5^;c|v5' );
define( 'SECURE_AUTH_SALT', '_~EXO=dTtT6R`Ax};XBw!,|[UgjS7>TCC!B|XL&{k`oK|w>6qP cOsKl](C.X7%l' );
define( 'LOGGED_IN_SALT',   'Dlw]Mmb|~lp/;ovtyecod:0||:R]z|.|ZZ9[m$RN-6LmzP0qX)GV1{`D5<tc@x%O' );
define( 'NONCE_SALT',       '%b([i+uTF+px7P[_fCg]3r3XwE1[u)SgVY9S]p`ik=Tg;YbeyE,_MX#b56R>l~SF' );

/**#@-*/

/**
 * WordPress Database Table prefix.
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

/* That's all, stop editing! Happy publishing. */

/** Absolute path to the WordPress directory. */
if ( ! defined( 'ABSPATH' ) ) {
	define( 'ABSPATH', __DIR__ . '/' );
}

/** Sets up WordPress vars and included files. */
require_once ABSPATH . 'wp-settings.php';
