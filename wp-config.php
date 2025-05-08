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
define( 'DB_NAME', 'wordpress_db' );

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
define( 'AUTH_KEY',         'W)tQJ.,@{}F<T60I/+r,Gkys1P@(_q0VGfxi2>ZO)NM$Dcj=LnW-`aH: }e.+u{#' );
define( 'SECURE_AUTH_KEY',  '<XmIzu~G4!pgiaj&&^G?Z <$9aOBg2sL},E@38j[VNI~_[FK0:LIVk#ylUeW<3ZF' );
define( 'LOGGED_IN_KEY',    'Rpc-ZgCbBWY!K+~@icj8yG;}nE.-mT+e5js8{8EZ3SET- km8!A)aqE[C7zhKyvN' );
define( 'NONCE_KEY',        'm{-~7>$lXzb,/&]2e5Q-sXrRel)EqH%Gkx$q:%%2-V8<406C3M;A~h{{ZX!lI^Zc' );
define( 'AUTH_SALT',        'n#HH8b8Fvz]C!;^cPLaF]52FPIE!K[nq@1bR *I|c[zR<!yzg/xGOHJ.[2]v0vF;' );
define( 'SECURE_AUTH_SALT', '{b?;9OsnraceRih%}K3q^~a;$N(ufNsAz8qlmz(Jgp7hV66N-XTLTTrF/){A6JR2' );
define( 'LOGGED_IN_SALT',   ':P@27t7LtUZj]{o2p1G+7#j 0-KP0~Mu`*p}FvE@%u:=]CGn/e?AP8-Sw}_;_%ue' );
define( 'NONCE_SALT',       '1An!1wXF2Ii&z##1y:^#Q s9xN`b=wGR91L*`_IcJ!9zUn`iKjU1Av9&a*_{|^uA' );

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
