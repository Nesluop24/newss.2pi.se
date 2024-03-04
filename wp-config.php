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
define( 'DB_NAME', 'news.2pi.se' );

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
define( 'AUTH_KEY',         '#1QTlL0?RW/2RqV?:LH@);O3US,rtL4:@${e&(X}/TrXyAlm$$?W;lj*Sj|;}]=k' );
define( 'SECURE_AUTH_KEY',  'q<%z^dV9#7ZI+c2(pYo>lUsNF?wT=B=. dkvvNjU*kQ^/%#c{`;Dz3R39z:3/fNi' );
define( 'LOGGED_IN_KEY',    'A>A+ShJT./MX}bF3WW_ODW?!U5GK%I,`{/gLE)I+a1Zn|a-jREes4`7{6|$6^SR3' );
define( 'NONCE_KEY',        '{u.ej0Q[HZD}(ON1It1c9~nu77XY(JEshp@vUq%`!Gn9pz:i9G/qF# )~X>>P~3K' );
define( 'AUTH_SALT',        'Y#.5[rVKCk.`?,c{*oQb!o*.*EMf`j[dIJ (eNJ#D)8G)SDiq`A>uK^ozN=1crG%' );
define( 'SECURE_AUTH_SALT', '~MWq  @Zm)#lJ`zJq6M($n3Y4WMW-1$}L[nZG;C^BpS$i)/`tqPuwV~cD`gHE$6A' );
define( 'LOGGED_IN_SALT',   'yM(2|(bE(88,rHAFi8:fJOz]Sr5~?5{9]}^QsB /UX|7(>7Sn>YNeL?>e|{*-Kke' );
define( 'NONCE_SALT',       '0uMYrV&hQ>)~$I$mGWZn}t2P4iD`OyH^}$nx<,)FQ#F`)vVJlTbH(=*FWY24pkNY' );

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
