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
 * * Localized language
 * * ABSPATH
 *
 * @link https://wordpress.org/support/article/editing-wp-config-php/
 *
 * @package WordPress
 */

// ** Database settings - You can get this info from your web host ** //

if (strstr($_SERVER["SERVER_NAME"], "fictional-university.local")) {

/** The name of the database for WordPress */
define( 'DB_NAME', 'local' );

/** Database username */
define( 'DB_USER', 'root' );

/** Database password */
define( 'DB_PASSWORD', 'root' );

/** Database hostname */
define( 'DB_HOST', 'localhost' );
} else {

	
/** The name of the database for WordPress */
define( 'DB_NAME', 'if0_36277787_wp963' );

/** Database username */
define( 'DB_USER', 'if0_36277787' );

/** Database password */
define( 'DB_PASSWORD', '6484767hdlhk' );

/** Database hostname */
define( 'DB_HOST', 'sql210.infinityfree.com' );
}



/** Database charset to use in creating database tables. */
define( 'DB_CHARSET', 'utf8' );

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
define( 'AUTH_KEY',          'QWf+9lh4$_f`LWuz1%+4}X;{-h7=@@!k/q|)cQMxR9[W4;wOrOR;.4{4rNY|A,xo' );
define( 'SECURE_AUTH_KEY',   'B(Iu0wD-Hm7DV<DRt_pxH|FabC`5e#)I1H]hSkE rD.mU]b3cvSNRy] AC@UzEEo' );
define( 'LOGGED_IN_KEY',     ':%NudYD,T!Z(ZDJ^s/34#n4?X0_C(d.Tr]fc?~>e_IDD{y6Pc<AHa33aPr)gcsf9' );
define( 'NONCE_KEY',         '?:|FvubRcB60Q6lm+M0l%^N%C7@U8(wLZ;f,.l7jLU,CC(*_4!/1MxA>:R?9i=kY' );
define( 'AUTH_SALT',         '9PMq*ii.#:6zR|.;(Y~odnBCv$vis:&VWSz9h6$_BY eO<;w)5rpOG1+?qL9SB^0' );
define( 'SECURE_AUTH_SALT',  ')NZ4 ogNyp]m*dJ^/86Q/AvYfZl0`[L|m]wVD}{Vr_^vQ?,9%3nk|n/2T.6K;iIp' );
define( 'LOGGED_IN_SALT',    'eAq_%LlFf<^(-1dR<.,r}`2vK^ ;`W_VZtxeO1~z]2 ,~rM(hIA3-,r1ezLx 1/6' );
define( 'NONCE_SALT',        'g&4eoe(e.1gi|qePj_TI5qiR%Dr)U/+]34>TYV#wY3Y+.8MqZVXZ@=XU>-hcmBfH' );
define( 'WP_CACHE_KEY_SALT', '6?c,$d!m1s&RiuD5To~{HxLU|^$u?]GSQH9:&U:k4.eZ(jq4:Be?tIV_6oRp|`r1' );


/**#@-*/

/**
 * WordPress database table prefix.
 *
 * You can have multiple installations in one database if you give each
 * a unique prefix. Only numbers, letters, and underscores please!
 */
$table_prefix = 'wp_';


/* Add any custom values between this line and the "stop editing" line. */



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
if ( ! defined( 'WP_DEBUG' ) ) {
	define( 'WP_DEBUG', false );
}

define( 'WP_ENVIRONMENT_TYPE', 'local' );
/* That's all, stop editing! Happy publishing. */

/** Absolute path to the WordPress directory. */
if ( ! defined( 'ABSPATH' ) ) {
	define( 'ABSPATH', __DIR__ . '/' );
}

/** Sets up WordPress vars and included files. */
require_once ABSPATH . 'wp-settings.php';
