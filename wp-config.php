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
define( 'DB_NAME', 'portfolio' );

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
define( 'AUTH_KEY',         'I?4q4n0W9{hPHG{N+Iml<//1{~^SU<M*i9DTvU^$J<D60#Q=& 7SR8}aR7`WW#B=' );
define( 'SECURE_AUTH_KEY',  '<?ebLR9*Mopdl j4bhq)u@G;v;ni1cy$+Z4X?#Y6VjJvRTLptb/36,X=S|3+)0 ;' );
define( 'LOGGED_IN_KEY',    'Ahy>WQ.vyO6drA!gwbR5}clxNFDadYdwtw:L,)sbwa6rvs(2@9*#}7GThme>!Gak' );
define( 'NONCE_KEY',        '1;(TLk=tv6`L>G8JKoQj;{ul&]hC xdbxObnwZ,j;];g40!!B@RQ+n*W:!Sw<1Jc' );
define( 'AUTH_SALT',        '@qi_b-R>.y-&Rzk4vCHJ~1E]^{ %nE<.s.Le/{ >`3iov}Y|Aq:2hpOm_, QfKz`' );
define( 'SECURE_AUTH_SALT', 'L;C=W@CE(-<Nn4v}|GuXcam&2TMoi60www(#O?2Z`rxNA&ZA,8Wusc}c*l%&3 @d' );
define( 'LOGGED_IN_SALT',   'hoq6F<L4BGV4vkOh.46wPG#C5W5NIAs.pxEMf,[cn.0WA^LNqg^9SgPXhwDAu5yQ' );
define( 'NONCE_SALT',       '0Zh$p7t_K1rjGr_K@V0`IUR)}LJ,wfm|L^X_Tf(uSh|O-]XOxJe<DAS2/QD>]]}w' );

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
