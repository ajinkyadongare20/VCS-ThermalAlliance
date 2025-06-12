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
define( 'DB_NAME', 'vcs_thermalalliance' );

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
define( 'AUTH_KEY',         '9lV,5#*n%?|-=enKB<x=j?]&: a>c#HA.6|1ZNo7n|TqGH_cbQ@PJMMbXWflTCu]' );
define( 'SECURE_AUTH_KEY',  'wx$rYC(G>`UbB9}6{_1,wLP=T~k8^_7PJ$DJkBs(rnnf{^5`O.r,bD+t[D3P0fnQ' );
define( 'LOGGED_IN_KEY',    ')Asx.o:ks~l_.6Z[g@e/:|~(c 2p29!,c1g.VqV}7bGRUTgm:MwujR0oMr27{3O|' );
define( 'NONCE_KEY',        'Qk;IP$x5n/FW^`!B llzF]2L{&v<c/p6g&6D|2!V1R/|g~Se<2ySF`Gie?W$em|&' );
define( 'AUTH_SALT',        ')zo7bhIwN!ka1-S?&ZX?i*vP}=ZPJ!RTc5@R<)OB.aXTszSuA?p]PtA^5S|Vg4_M' );
define( 'SECURE_AUTH_SALT', 'SXp*0lY2L0 kkL@uRObQo)7VdAO.. {IUWpZ:uz>aSs[%uoU@&]uG0-_XEr 1/R@' );
define( 'LOGGED_IN_SALT',   'uCdlbWwvs)0mW!*R,H^H)4?d2aPAaU)]4R5dEX^QRCAha%qSQV;xK!%(`hqJ;D=J' );
define( 'NONCE_SALT',       'qwLo)&m2te@Kjq/Nbe^N#N95TPT8S0Nr`w4r?jpq]eYibPY/[Lp iCDC sl75!?l' );

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
