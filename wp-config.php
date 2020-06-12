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
define( 'DB_NAME', 'wptest_db' );

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
define( 'AUTH_KEY',         'Z%4o>I[#A{|k:kOrrynQjdeAGsaT$1u)X)*A|MVAmiu$m=t5mfvK;h5,K^X7>|#-' );
define( 'SECURE_AUTH_KEY',  'J<^agb[nkdYj-:6?L9:bA:J4*FABSU]#i1[k&O}(l?+!;(bjN!2<Hp~7jx,K2B<x' );
define( 'LOGGED_IN_KEY',    '6BUdEYVtrcBH4o8e!a42<Ki9g1*GJ+4nTQfKQVfg,,uXE>0->^ua}ud:/Nm$+ fo' );
define( 'NONCE_KEY',        ':wf .|p36J<%cTwOXZ7}kmuMGzn;C.TVaY(%0X,=[nAERnjMZ{FlnCYRkc~y, +*' );
define( 'AUTH_SALT',        '~JU)<1t/Dr.03$=VKgYleii[1=C`ZS~~4tMGe%pmV<aQ3/j&e4wEs~uk$6kg[vpc' );
define( 'SECURE_AUTH_SALT', 'fd~Vds?b-Gf_>0x>{Fq!eA_/y8}I(1C.xFR3=t`+YH5eiYhwkp^nllnH1&b4J?}5' );
define( 'LOGGED_IN_SALT',   'b_Z[K},UWR4^:FhxCbg;`f4[~S9y1N|zmL0=:</a^ztzzGT[n=8M#T;%t(fhP)H+' );
define( 'NONCE_SALT',       'VCv10L7ZTJ_+-Ehv@R4yxL;D`q-:|HO%_V:N&a^{nj|^dKC$%5[wI9&!^?5$4WQ9' );

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
