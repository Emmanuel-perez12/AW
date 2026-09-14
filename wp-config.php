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
define( 'DB_NAME', 'tarea2' );

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
define( 'AUTH_KEY',         '.MCB,SmWy;Wa(Lp+8tfIcJ-cx.u#8TB !Tq[w:3hXCQML-R!EX+ >7y2B65c|_[%' );
define( 'SECURE_AUTH_KEY',  '5~*<mFoghMuB]vij59hTW|iKcS>d[iZvT+UMLw:oI^}&F&S6m@@N:Aq1),B2>w5Q' );
define( 'LOGGED_IN_KEY',    'L3B>I+h&X! u~0KQ%UV_Q%z#UKkU(QCgEp/ Dj@>rPi[ *3a)BO_[0z%zv]fpV#H' );
define( 'NONCE_KEY',        'Hc^h[ba(,*RMaVYI2{-aeez%Fz DHGn]`zJ5^X:FUrsm(lU?/M`NQO/&vC&]kS2P' );
define( 'AUTH_SALT',        'm<#<,VjMp/;MO>$6X&7p-I?M$! vim1U{Jx;:n#k;RtU.3L]?hWG]K~u3g?p>_j_' );
define( 'SECURE_AUTH_SALT', 'nJ{9,c[~z MqgPo;Hw~|1Kr*PR?<[X|Wt-(Z|wS_a0N=%!kztSM03q(nxY U-KGI' );
define( 'LOGGED_IN_SALT',   '3$=/dza%HvC}xp^8*`EIiRo8_x0$8yh/8?x,G41a;@L@8@a1L]KOwj)0-/wtX;=I' );
define( 'NONCE_SALT',       'G*x|Y:(S_uj!,z?`s@IxE#[!o@$uhvMi?BccE2T6wM^6vhXQ<)C]zzKTKR#CmA7=' );

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
