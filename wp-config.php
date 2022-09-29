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
define( 'DB_NAME', 'PassionforTechnology' );

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
define( 'AUTH_KEY',         '94>v{fo@dE#5aI}z?1fq)^*egt9>b5}EHsn4>!lSZ]d;%S5><m]Yo#Zcf[e{(o5[' );
define( 'SECURE_AUTH_KEY',  '*m?0D?{l(pT=;I0*k}xv%; UJSp>;aE1I>d}lA5GHF;ZFoc 0K>K]66Uer2QFRkM' );
define( 'LOGGED_IN_KEY',    'y;4~t$fIUnF{OwFF:AAVaxb3j?WAWTj&#([k-dl#^5!TV(!c/G^QAH.PZx3!1<>$' );
define( 'NONCE_KEY',        'De&!i6Ei@6)sPe +@Q8cpPjywYlJ{!p)|sgJe6W!1/N1{4.2sXwZvQ_0wySXhafT' );
define( 'AUTH_SALT',        'S&X2;j+Y[x~c(EZMfgc0T9-(CIJvjrZlSA73J(62xpNc4gD&nP^O6,]GD}XloFK(' );
define( 'SECURE_AUTH_SALT', '&Mz@pD8]bjxme2N<!BNX=X|n4KfqK~woJ#uf1qCuBR,4[Yi#SgXos!IYQt,5alH&' );
define( 'LOGGED_IN_SALT',   '_^M!?I`CZHAO2*+5SrVFXPl}o?#afk^m#zi]Z~%*j(Rp)Nk`GtwN^0l[rOvKt;kB' );
define( 'NONCE_SALT',       '~E(RoX737d|&#`@s=zS^G22-%e#w>meh01!CB$JKYH4<Z/dH;7k:,M0AK}hVk.^-' );

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
