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
define( 'DB_NAME', 'chandra' );

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
define( 'AUTH_KEY',         'woH :7H!SEXs[R[`a[2,v>qCPYtF4BkvN.T=dhub}(O7)9Xu*s{epBN*e5kM@J/H' );
define( 'SECURE_AUTH_KEY',  '$~2QYA<OcA+i]Af^f{EC<&_Y/Q>k<kgU8RYlnvFRoK/[g)K?yC7~3R|on{!WWu-t' );
define( 'LOGGED_IN_KEY',    'cv8NHX3W*?),@:4s.Pn+M~3OwKf_zx2bUXA~4+O!VM^LEOLY^JVc! *DKb9Lg;2_' );
define( 'NONCE_KEY',        'tV/XW#0!1U3}U+Bv#e-*CABf^RkoKxJxrZ8w~`8rV6l:(qU^R%v=8[?*a,M*9jd1' );
define( 'AUTH_SALT',        'yA+TgIu^40jM<cm@7EW6d1b_lZ>F^/)7*=m%f=0X(Xvp6{~XR)uU^KnR@GVq`,QR' );
define( 'SECURE_AUTH_SALT', 'hQwRfH -YC(H41DL.2g@86[,ZP[nG?Ne;&Oq)Q3oLHpNb}Vp$OPf}:1dZKM1+mW&' );
define( 'LOGGED_IN_SALT',   '~t&r zh8w*/@*,R$itb:C&5~LN0{v(H5@k#tUMlnfN-I@R-dJdz0 l[a(CR_Zx>Q' );
define( 'NONCE_SALT',       'kZWZfI?i~e%X/?_[Qw[c!__rQ! >I0,hYR/@o2yoXy2b28Vlb,(5GOv<pT8^}mOy' );

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
