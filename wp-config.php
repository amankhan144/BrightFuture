<?php
define( 'WP_CACHE', true );
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
define( 'DB_NAME', 'SCHOOL' );

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
define( 'AUTH_KEY',         '1bbBC># +Ok,OrQr&oy_IXnU#Ilrng{b!4X*0kLCQ0^0!05CicDXlAD:_3Z-(5 z' );
define( 'SECURE_AUTH_KEY',  'Gid;:#5H=(%u8O2qnM3YXXzYD!:I;_Ux)[alh-%NdaTlAx$?X,c0B@R.L/,sD{3<' );
define( 'LOGGED_IN_KEY',    '{pqB?V+E9(e_4a*?lS~C<~[3kCaSt%EkY%wb8b.>:FR(txpvFxD%-mRx!W|Y,*9=' );
define( 'NONCE_KEY',        '3R9+U59Fljn6aRMvFl$A:@5bON[~+,wg/ggw tWsQTzGhk6J#{]h,@ZU8KsfO_#D' );
define( 'AUTH_SALT',        'ZgNoCVzxsMC*CS]o6C-r}?m.@QtKGHaG||FA2$d].sb;lbc/V*+Hd~j,e5Kjn!;0' );
define( 'SECURE_AUTH_SALT', 'r]wUKOuoVy.o78awH+u@=FQXR&,hCyb6YyNWnDa`T6C?&C1kBDtDdB!bv@,T&!%E' );
define( 'LOGGED_IN_SALT',   'H 02,ZR5vLq<gLZ^M5dONl_pQRc/h].&AX#H~45Av!mu 5x@vm,vC~~V}~Od;/n3' );
define( 'NONCE_SALT',       '_>?T*A@bUK_`bCSPdalNy?$K@%_SsA,M}m$ #<VK>}[B2{X|ChP@Q|0lKnXBVIr5' );

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
