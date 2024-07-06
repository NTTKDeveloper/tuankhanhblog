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
 * @link https://wordpress.org/documentation/article/editing-wp-config-php/
 *
 * @package WordPress
 */

// ** Database settings - You can get this info from your web host ** //
/** The name of the database for WordPress */
define( 'DB_NAME', 'wordpress' );

/** Database username */
define( 'DB_USER', 'tuankhanh' );

/** Database password */
define( 'DB_PASSWORD', '0334474324@' );

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
define( 'AUTH_KEY',         '*TA$<VoSTa~E4*^7Djc.!aq?a+vrGSJ ^QrcgU&ej3F<Qz5@oJ*r}i{8_]`xGQtZ' );
define( 'SECURE_AUTH_KEY',  'h{uf[|X4d!%(vNV~&RQ!1#]Sh9gD[,Dc5-Jv<-lC-G&<@ZUCT^SCadp*Zpt/kI3A' );
define( 'LOGGED_IN_KEY',    ');0FoNd{#yo%H#TfwU#SE:Ns$g,x^A!hb-id#v5@/2cYYW*h8)Bwo3X$^%3+M,Yn' );
define( 'NONCE_KEY',        '=p-}nH`)a[g;ij9rCDWO8i,jXkeWIh|U}uKgYx&y(q13>Wcsc1}%*r0@<|R+g@B?' );
define( 'AUTH_SALT',        'Dy~vuo`!5GR,(V@}tu%5D>{YXPeACA9<:}r~vw<mZ +j-M(rDoPBcq9**Zm+OY()' );
define( 'SECURE_AUTH_SALT', 'i@#LZ>@)pr}`gzYTg$Jk&Og_}y*A9Q ]f/3N?-szz?$-{eD/M6Pp9|SKFK_HI!y*' );
define( 'LOGGED_IN_SALT',   'wM ZVNPM*Z`x(/Dvk09ks`?W_e[ PuBx_kT80emf0C;>aaogt6}oBnhF[/{3QBTt' );
define( 'NONCE_SALT',       '7`=V+&*5`Gskar-ukEsXek4.k8pu3B `Jt/WA3kww#3i&UyjHmiA}~aU.$JT+kCH' );

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
