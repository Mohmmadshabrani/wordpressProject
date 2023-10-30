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
define( 'DB_NAME', 'wordpress-ecommerce' );

/** Database username */
define( 'DB_USER', 'root' );

/** Database password */
define( 'DB_PASSWORD', '' );

/** Database hostname */
define( 'DB_HOST', 'localhost:4306' );

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
define( 'AUTH_KEY',         'R{lTXu8#z8_GUdJxnbJNa(aF!Cb?G&zzGtXc,^:c<K~j#8;Y0d[kSxGnEi|:zW+H' );
define( 'SECURE_AUTH_KEY',  '&Bm/FK+~kgU+d9wibj!7(*,cup)l-+[JyXBh~!gCC-&.gbR#(j_]~Y!z!Z)0i>MN' );
define( 'LOGGED_IN_KEY',    'sAouUCHfn8U}1y]R&HO,~gZ^AsGyGFmL5#Abgiucs5(J:p9R650NJ}i++=g~^eK5' );
define( 'NONCE_KEY',        'W)AWT6LhPI:bB[y>YH?>acp!~(+;%E6Wj-</M$8DW0wp|(FHN<kqce# 0r: GH[V' );
define( 'AUTH_SALT',        '-ZCa1oGW=$as*9rTKKj5zOH=ilb<N)mlSW885w/fF*$B@)9cZgP8I6u.cJ9X5,~e' );
define( 'SECURE_AUTH_SALT', '9N//8l.J^}tcw1l6Rc4?tH~J9D;?<$!!y~}0&&TaBCOqmAD[RFy#O>`4ku2~yRnS' );
define( 'LOGGED_IN_SALT',   '8+IK=f*1|4mtENU[/pOvA26o4oc4nZY/P.CY<-NwY.lg97CUx$KzqS(i9/?1+[FD' );
define( 'NONCE_SALT',       '|sIV0%>p$@lH`Vl^~ia FzPDzNP/>F)M#3y8EZE%|VK[W`sh+>[H#jVS%5*w>H8=' );

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
