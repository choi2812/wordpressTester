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
define( 'DB_NAME', 'wordpressTester' );

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
define( 'AUTH_KEY',         '<gcu+YhZAS]|bjS!d:Vdc)$6BX*fg*+V1Fb iK1vSn6^]TX9rl;k>Jh(?cz+Ys]~' );
define( 'SECURE_AUTH_KEY',  'x4nE~ism;v^*NxPyCxa^)9g|/Qfl)<y E-!vhZAi[vC4iccFA(]V[X)Z&g5<lz@#' );
define( 'LOGGED_IN_KEY',    '_8k8$-pN7izF/ltR]orY&Gy2z@WLfyvK<#s$.IYQ.~aF($|q1,yB3P9|%,($=%#)' );
define( 'NONCE_KEY',        'F=Uzn.L?n#s!(p/KYc9gC4%w;t63lItMfV>B$+B~wq}x)Pws{J=Ii*Z{Qh8fP%=F' );
define( 'AUTH_SALT',        'pL/jFOTbGGhAK7Zvsj~6xgT#MyLiO;z|p>LD98!j?b<SMF9SD|yfIW/w|;+ui_)^' );
define( 'SECURE_AUTH_SALT', 'f@U29}P{o#r7L8p-).+)u~wN!S*u`Zx)86 n?B804TNs;eFm>||t[vHJB-s/NMh%' );
define( 'LOGGED_IN_SALT',   'X>nPwI$&?xk$mKD~w;9RY1y2ezPtNzLy-seumui[U_Ic>3vmFo8xghM*Q.q`k5>]' );
define( 'NONCE_SALT',       '},&5gYxR$+0Kb~6WqfQh >@y54upE>~{%Y$AK;lylA{^lJr<!Eibi!(<J$b(sV-+' );

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
