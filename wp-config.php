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
define( 'DB_NAME', 'anthony' );

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
define( 'AUTH_KEY',         'Ea*f&BJaE/x2F Z`[5sHiO{$B.LL#*))+2J;{^kHR-syW$6_fISI2=7r}D~1E$hq' );
define( 'SECURE_AUTH_KEY',  'ndN!mg*w(`|adNDbkv1A=4~-rxzldx~]>QPjR;2/GjJxb(@@;k@HugCXL_#Sd=U5' );
define( 'LOGGED_IN_KEY',    '-Mq*l6[6EN(K-N18,EZ4_ce%c0{E7a0ql6*w*XK9%|;=D@vs:`I2bMvQ,Ca_gM=s' );
define( 'NONCE_KEY',        'fpwvfItqMg29zhw$^b%ElgfsrSg%~C4*oby2&a:tbxRvm:e4a!uO/hSHKn_@XsV1' );
define( 'AUTH_SALT',        'VS/kMFcDFYG{eurp9 k-^y+CG9A]OQc)ht}8X1^7)Z,Ca&sKj;wS}L3M4D;2pq=Q' );
define( 'SECURE_AUTH_SALT', '~_YuNBf<KTWJ?LIRNHz(mlU1w=r9, K,CSKs4>zH>TPC;.zt~BFn|s[{1!~oaaPT' );
define( 'LOGGED_IN_SALT',   '<2z:OUIe.JW%*>LiK%gnA@BaA]>FT9VlN?!.p:b|De|1Y,<v78C#ZeLAzdOZy:Y~' );
define( 'NONCE_SALT',       '3*$by-dgl .DZKI5+mT5_PtWu3mR{bi-*dq=?$JpTYYa,n[%==b~2mhD@SR~vTNw' );

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
