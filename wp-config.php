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
define( 'DB_NAME', 'sql10580165' );

/** Database username */
define( 'DB_USER', 'sql10580165' );

/** Database password */
define( 'DB_PASSWORD', 'Ht4Bw86rgc' );

/** Database hostname */
define( 'DB_HOST', 'sql10.freesqldatabase.com' );

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
define( 'AUTH_KEY',         '+)97KFGH(WPOUe^POX~KBfo*baH-bV9xb)}od}DWJIwVe*#2hW~5>]6_2o(YF8P}' );
define( 'SECURE_AUTH_KEY',  ';!W=a,GG9FEK;X:@j!_3WKm=/g+dZLgfmpqHT|UR$F-/9m51l1Bm+i/>i@]#jAJ<' );
define( 'LOGGED_IN_KEY',    'Yifhob&o5Jr}ZohkO5z<Nhlp5^SG#jxhcQP.t[O@g$J~HwO}vq|)64QSx9yVK38I' );
define( 'NONCE_KEY',        'p$5DJStbs~O+ip`?,/p&sIjXGvH<f,6,rexGY`yEo$=;?zP@1/9e XNBTWU9[]k!' );
define( 'AUTH_SALT',        'AHQNX@HR8)`{X,QFnJ$-*[HV%9~9SQyqBg3vj2=M:I%%$_ET_turuH4g8SM(vLFW' );
define( 'SECURE_AUTH_SALT', 'dwXi]F,wT9pn?Z`_AH[DVtG}MH@ gxPR^kz!Ol{%Fc[2H!~FM?q8I7q9=8[-<t^G' );
define( 'LOGGED_IN_SALT',   '~MY|Z|_XQnq$M4r;6gxgtvYq{]n !uv/7)U`Uw8UF+=xgjfkFVJJrPPV=]W,Nc1N' );
define( 'NONCE_SALT',       '6Aj NC?*V[7D6q^y8v8JQ~t,z(wcM3T642fp55&X-j;#GT1PHUG})Z=wqZ5yD>s8' );

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
