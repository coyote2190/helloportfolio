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
 * @link https://developer.wordpress.org/advanced-administration/wordpress/wp-config/
 *
 * @package WordPress
 */

// ** Database settings - You can get this info from your web host ** //
/** The name of the database for WordPress */
define( 'DB_NAME', 'yklicfqlotr' );

/** Database username */
define( 'DB_USER', 'yklicfqlotr' );

/** Database password */
define( 'DB_PASSWORD', '6Uam9346fyZxRD' );

/** Database hostname */
define( 'DB_HOST', 'yklicfqlotr.mysql.db' );

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
define( 'AUTH_KEY',         'SP[KH9Gp?; ~T]Vdw0Q$8zJ=^AI(V#%Is%|)8v/6xR1$#dnoW2Ev6v^KR&`N}=Kw' );
define( 'SECURE_AUTH_KEY',  'oe2}&iGWlRW`8qX-3eKPJU5X&q@T2}|v>!`v`r/7&7^CV?E9 n2(r<iCHuoC6_yf' );
define( 'LOGGED_IN_KEY',    '}Kly3FM9!&R1(nWBtfa,<Y~T+`=mQND)hQm@HU@)0Mqt%R9zPZXpfymw?c4BSl a' );
define( 'NONCE_KEY',        '6(9^2$+mQCg~mNn|JV5R=0@ iQRO_fQ)qlIvxmk2$&W9d~[7w4Ku@XC3/7N|0~hE' );
define( 'AUTH_SALT',        'e$z5pcfr{x;G;CeADD!}R)jj[9#UQ~tR4},+>a]F`BB[rE+bLRKj:T_;;c*~BQXH' );
define( 'SECURE_AUTH_SALT', 'oY0fK*F;#Yn:Vn;x>#_x~%>7D}EU^*gwc*h}](bT|d#pzM41|,::?}^|c^&f2Y/[' );
define( 'LOGGED_IN_SALT',   '5y59meA7$_ewMC#C,F+F^79URBlgus2BH3Bq0`CxEC#Knxz<BH<l[^E7CF@ma]=U' );
define( 'NONCE_SALT',       'N-#B<`Tw9mx@E4~tas19,W{JMe9Bd5i2k4)nI,J!`41J%s Q7;`NvLs<*!A`5S{s' );

/**#@-*/

/**
 * WordPress database table prefix.
 *
 * You can have multiple installations in one database if you give each
 * a unique prefix. Only numbers, letters, and underscores please!
 *
 * At the installation time, database tables are created with the specified prefix.
 * Changing this value after WordPress is installed will make your site think
 * it has not been installed.
 *
 * @link https://developer.wordpress.org/advanced-administration/wordpress/wp-config/#table-prefix
 */
$table_prefix = 'wpvafc_';

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
 * @link https://developer.wordpress.org/advanced-administration/debug/debug-wordpress/
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
