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
define( 'DB_NAME', 'dac_test' );

/** MySQL database username */
define( 'DB_USER', 'root' );

/** MySQL database password */
define( 'DB_PASSWORD', 'root' );

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
define( 'AUTH_KEY',         'S?z(D!H-1wf>zv]rgY!0h2}6QS*n|zci(l}Fs)^*)vw uA&hmHgE}64]4K~BbE*o' );
define( 'SECURE_AUTH_KEY',  '7D!?d8?;XxM~b|=bc2PPfD)oQ%H6.8xRh&09e0(wV8AmnHPAsq,<n5b;=x7[vA.!' );
define( 'LOGGED_IN_KEY',    '*jw=Pq{wl.[UKiNB#4B,l@n7eSkTi(A:&^b{1?s#0uh7I%8AE`p`lOI+U k7l,u0' );
define( 'NONCE_KEY',        'p`cCBe2~:I2OPpRbK]8_Cb~}j(:g25}:)S<NT(1tBSycyOwDC.l#M;@ <_R5iLMa' );
define( 'AUTH_SALT',        ']961&!pZtI3e<2@!SxS{!B]M:/0@f*S$ _36nyPzv_w) 2K;df`x2LWD*%oR>.f$' );
define( 'SECURE_AUTH_SALT', 'e#h44lmsh*/Nb[V T*4W[^DwOKO6rhb{3vTqy<(LMU?Zd,GC9.x}m(H/!WEqmT=h' );
define( 'LOGGED_IN_SALT',   'ek:Q7tc-aZ&4SJKWHC&_mU1R-Dsp&CbReU$x~D*qNrpUM$0@2`ik|{o_dVP6qTxZ' );
define( 'NONCE_SALT',       'FK@S`p?&!=VZJCpf)FVU$/>}5`zuwk,:0S__`!,HW%H gpYB+W?{uU_8jhM,2MR9' );

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
