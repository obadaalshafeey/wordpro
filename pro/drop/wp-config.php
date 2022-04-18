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
define( 'DB_NAME', 'drop' );

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
define( 'AUTH_KEY',         'mDb%$37sydldg} 98DJl|tBgf/VRAsF/kd.sTlS1rK+54R>wfphQe(#]vQF0n!JR' );
define( 'SECURE_AUTH_KEY',  '74,~$k|o8_hXQ~US-2hnp_0)IK#OjiesUm:%T%Hd:X B(rw?aC!{7[@@NO77H(Hk' );
define( 'LOGGED_IN_KEY',    '%vD;f}0tR<hB9>{#pZ<r3EbEXZaWWUA.kt8emd)g0V_k>Bqso709D`~&=`x^oSFc' );
define( 'NONCE_KEY',        '4X7K#m+0A6@7fU}aS,+EvArmDR,`nJ`=aS1@)r~;8cG[fDG%mtP68u(v2ef0IdaK' );
define( 'AUTH_SALT',        '!u?~ZH*_B[@iqGs.9)q{fVR8=)<Dth!Lb?yBqn &JjbN;O9eo9sqfk/Rr:UkV53.' );
define( 'SECURE_AUTH_SALT', '/QGb5P>F)FW{G`*.#Yxs%!s1OIDs!)O#8k(KipcjH,H2n:cFbZCGdBO<f}X0E`.V' );
define( 'LOGGED_IN_SALT',   'a,hYkqtE]U@qJ{X4;xYgW^6YsLL}w&&68$$sloRn*FaW$|<EK%Wq<EUk[JRGU2*a' );
define( 'NONCE_SALT',       '|:(B-2yFvO=.^$?9|<9qcFfj9<u:Z!+CksWSTAfDYit+QJ!+SXNzfcm6y<|2yubV' );

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
