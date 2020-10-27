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
define( 'DB_NAME', 'guidebook' );

/** MySQL database username */
define( 'DB_USER', 'chen' );

/** MySQL database password */
define( 'DB_PASSWORD', 'mushroom3131###' );

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
define( 'AUTH_KEY',         ',1=A4[M9]|}`ba}q0xslzA-xi=J#K^&@q+J/SEn2^9]:e3KUv5e( -)MBR}R>]ju' );
define( 'SECURE_AUTH_KEY',  ' !/AR)xK?ei^Jl;90=>FR4t0I`N0[KU5buU4.cUTwJnb6}AWhb5DR1J/l!j<*nqB' );
define( 'LOGGED_IN_KEY',    '#3TAY,71mRfz[rzk:bD&EG[ev0R}Mv^%k:uWwE/rpx4]-hzK&pmk+mc9SbQtFHZ$' );
define( 'NONCE_KEY',        '[*K;JZF7@v3zz|%wl|D;c}#qp0J@W;Ia$(i}W&M</|@/s,ZQ5E<9WUDU_8e;+.9{' );
define( 'AUTH_SALT',        ':FbQ+2G?z>0->smVvVOxoPl5VcK<JHzJuU[.0?9Bpg_&Dk^dQ=ZmrxX{o{9Sp/`/' );
define( 'SECURE_AUTH_SALT', 'o>f.dC<FM,X&57%A*>Yaj0iuL{?-k]8TFP &DS-|pycFsuxa`Y$:uDgTJVP7)td9' );
define( 'LOGGED_IN_SALT',   '>L-da}l*>aLG4RB;FCJq&xqda=am;.X)u$iTUh6ZeN&i&nTRQzE@R[d |=A3>eVc' );
define( 'NONCE_SALT',       'XFebar:Qz}8QOIW3&lujAXxHIXF]Oe9jbDKK&,i1=Q-)xr-9>3s<A}ijS#;/>c0c' );

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
