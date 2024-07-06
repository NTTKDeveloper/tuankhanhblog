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
/** The name of the database for WordPress */
define( 'DB_NAME', 'local' );

/** Database username */
define( 'DB_USER', 'root' );

/** Database password */
define( 'DB_PASSWORD', 'root' );

/** Database hostname */
define( 'DB_HOST', 'localhost' );

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
define( 'AUTH_KEY',          'Xmog+CvQ&*6^Dp$=X]J3Oi/9`v5BMe}US-n)RCA70G:RR[paK[12@+chSQW!xM1i' );
define( 'SECURE_AUTH_KEY',   '9{8Ug<9Tk)>tM/s63tpiC.>@7L*{kCVLl-j=i1X*!E$G bt(Q,9K{u+$y.KNID2&' );
define( 'LOGGED_IN_KEY',     'NIj6u@w&dq7WS3*:h>H%{Jti-3kObY&eUn&ZjDN{)J_/h=P_d1*V.^?(=pRcrTm`' );
define( 'NONCE_KEY',         '>x= .<!5,am bn [sPFn+Tqk6h!M/.fQ_Pyb=oG.^WOH^H%%X>;wDkXN<Lln_FZD' );
define( 'AUTH_SALT',         '`[h-8K6(N}yqRB*{T3D2d[/]e%|44v.=mee3&]^]cQ=?1*p:R!i YZ/qrYJvO}rs' );
define( 'SECURE_AUTH_SALT',  'z=KbkPQ:*<78aqtjdh%-KT~{O=IYw~Kk5fs~SD^tKm)~rhYprGj#Gi7/FpD<>j8M' );
define( 'LOGGED_IN_SALT',    '~[{oC;sd1I@Gb_i5Gc,6^=WhrJ#9zax0J$YHPT}}#Me7#m# ^T,_Kh1M*&.}p&2=' );
define( 'NONCE_SALT',        '@212*Q5?F!J_mcLb_jV61;/9&AN ]hGmdrGvr2>h}-b_N3GT^;-L#%|h`V,+k&!!' );
define( 'WP_CACHE_KEY_SALT', '~Ocvm)n6L!@+/QoGXFqzMz%Me-(VJ^4p,jDFM-P~?U<W7V$5t.$+@/Z.*~SG>0?=' );


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
