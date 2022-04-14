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
 * @link https://wordpress.org/support/article/editing-wp-config-php/
 *
 * @package WordPress
 */

// ** Database settings - You can get this info from your web host ** //
/** The name of the database for WordPress */
define( 'DB_NAME', 'restaurants' );

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
define( 'AUTH_KEY',         'k=#9]3$b/3x13~o}an}1Es}ku^3MVQ9oLr`~:h.1A+veJ{|Mw:sg+x}jDMZfGgjb' );
define( 'SECURE_AUTH_KEY',  '8{!Td5!N1T~u^9AZM)b0VK0k%4ouc{qy6<!u,qw Pxz@Lc35B:{Dh?zC8cjoXGWM' );
define( 'LOGGED_IN_KEY',    't^g.w|-V21m; E{`.*pa*da]HJR_[g)nXP1v/RF22<d1Aq &_PmJhBs61B+C&vNM' );
define( 'NONCE_KEY',        ';|X>ZyTuw:Jb?Q.4Dh.&a4H#B]R|IcY6kA%(*k`r0`CiWk]D=/rW%^@=oKz;!${~' );
define( 'AUTH_SALT',        '^3H}tS*iCnN;n)23Slkmd)}XTa:_qwBI8h]WC^.Zkl{s!h( bPRP)a~;-qp7>V,x' );
define( 'SECURE_AUTH_SALT', '!W/8|e}`0GhyTv[}>G1+4w;D-FC-BFT<yh+7tFxL; C >xuE566?s*9,LIyo$W81' );
define( 'LOGGED_IN_SALT',   'v o<5`n_Amvb,fexGJ7|.B8X5;bQSWo=}egTca>VUub@1uETRxQaSE_)Sa_9NJB<' );
define( 'NONCE_SALT',       'TqY1UgiQqCq.x@W=rzzpFzn8:A_9kz_]63Vk|A+D9<]*DvunN+DAeW4Dqk1e|Ycr' );

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
 * @link https://wordpress.org/support/article/debugging-in-wordpress/
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
