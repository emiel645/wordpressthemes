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
 * * Database settings
 * * Secret keys
 * * Database table prefix
 * * ABSPATH
 *
 * @link https://wordpress.org/documentation/article/editing-wp-config-php/
 *
 * @package WordPress
 */

// ** Database settings - You can get this info from your web host ** //
/** The name of the database for WordPress */
define( 'DB_NAME', 'themebuilder' );

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
define( 'AUTH_KEY',         '#P5YJyu*=;WA]0~`0f4g$qmB.%NaR``Z*phLRX~r9{edE8I/JJ1~:{_<$~$fGJvY' );
define( 'SECURE_AUTH_KEY',  'sf,`4M`[Q%Ll)wRM~rmEXI+^BVIWEK!Cf8@ TQ:7wBUGHWL|:Qu/g=0kJ0Y-oHo5' );
define( 'LOGGED_IN_KEY',    '?ZK^I% n XWQxMvNJ&j 9a#!y&)}U/:K2GD)[[dbF1t?D!$N=H*C|,8-Er2tbM~b' );
define( 'NONCE_KEY',        '1]]1A<KxbY9p!{=LuW^I:$(iU*I^?#z`1{mDD%&U$mU=zYm@!>&Is_AN$p&wVQ!]' );
define( 'AUTH_SALT',        'lb29)/X@5zA1HyBnv`9IAGpT`ch$l1N;@,^01L Ci ?ha~gyv>tb^R1jBIRp?_)6' );
define( 'SECURE_AUTH_SALT', 'EI=TpQj[84>*=R_Qpv_9R%+DMFz*45BmT!h#_Q8!B9e4CATn#;Hec!8h6Gi$nE%$' );
define( 'LOGGED_IN_SALT',   'I-QNyR8|5z_[fu{W]}1YGLwUOh)}A8r%%~_2QoG8{Hr&g;Hz.5i6=&fOFx!76h,0' );
define( 'NONCE_SALT',       'H:u,KX_,9C`FLVk`yGrd(XrPNanW4rRQ1]Kq:3aH7$%WAdDl>*8r./3,6P6Pg1$m' );

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
 * @link https://wordpress.org/documentation/article/debugging-in-wordpress/
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
