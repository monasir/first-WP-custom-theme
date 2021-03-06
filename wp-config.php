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
define( 'DB_NAME', 'newtheme' );

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
define( 'AUTH_KEY',         '18z+Z3h?2Co DZbwod!B !h#x^J!C]:{<V1V~gtwq|d;LUTH#KC]NfjDzVpG18Xk' );
define( 'SECURE_AUTH_KEY',  'QI;/_fv0[PV`VKG>9c@(PoMP+=T@;~-KJ!QD|M&,Sc=FIyp_fLG$`dgV0U&Bb2>(' );
define( 'LOGGED_IN_KEY',    '-KQm/b=|S^|):DLCwAs0|6vH:k3}Z!v*B5W!j`#RW/^>gh[;jr> T,3&&fy>*_y7' );
define( 'NONCE_KEY',        'Rc4iazgB@Z%%=si#)y*#bmS,9jp>|i5DE&GO1(O!J/My0s%K|=Ao{IuiF~QpnEz6' );
define( 'AUTH_SALT',        '} qiycm(=Nta*sq!!2k6og19w-d_;3H^1--T`fmt=mbw7Nn %g2=jbmaZ5,ZRQ/i' );
define( 'SECURE_AUTH_SALT', 'xFuFX2rr|UN<K4-.=<@/L|4v;#RdPn{!w]?n*AON#-1:iqZR:JbFN$Xp`@zNd4RH' );
define( 'LOGGED_IN_SALT',   'P@]Oed]HR1*xCnRGMhV0Enu+_|!KX8Ho8Hil+4R2$ymx<`5_s{j0uQCKtotR[M-:' );
define( 'NONCE_SALT',       '8T~VR;OTomq#F6b6BUK@H8=u@.-b>EqiaMWZhS!Vgh |Js>PPV=NfFPs :1oKA5S' );

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
define( 'WP_DEBUG', true );

/* That's all, stop editing! Happy publishing. */

/** Absolute path to the WordPress directory. */
if ( ! defined( 'ABSPATH' ) ) {
	define( 'ABSPATH', __DIR__ . '/' );
}

/** Sets up WordPress vars and included files. */
require_once ABSPATH . 'wp-settings.php';
 

set_time_limit(300);