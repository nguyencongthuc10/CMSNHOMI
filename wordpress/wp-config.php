<?php
/**
 * The base configuration for WordPress
 *
 * The wp-config.php creation script uses this file during the
 * installation. You don't have to use the web site, you can
 * copy this file to "wp-config.php" and fill in the values.
 *
 * This file contains the following configurations:
 *
 * * MySQL settings
 * * Secret keys
 * * Database table prefix
 * * ABSPATH
 *
 * @link https://wordpress.org/support/article/editing-wp-config-php/
 *
 * @package WordPress
 */

// ** MySQL settings - You can get this info from your web host ** //
/** The name of the database for WordPress */
define( 'DB_NAME', 'cms1' );

/** MySQL database username */
define( 'DB_USER', 'root' );

/** MySQL database password */
define( 'DB_PASSWORD', '' );

/** MySQL hostname */
define( 'DB_HOST', 'localhost' );

/** Database Charset to use in creating database tables. */
define( 'DB_CHARSET', 'utf8mb4' );

/** The Database Collate type. Don't change this if in doubt. */
define( 'DB_COLLATE', '' );

/**#@+
 * Authentication Unique Keys and Salts.
 *
 * Change these to different unique phrases!
 * You can generate these using the {@link https://api.wordpress.org/secret-key/1.1/salt/ WordPress.org secret-key service}
 * You can change these at any point in time to invalidate all existing cookies. This will force all users to have to log in again.
 *
 * @since 2.6.0
 */
define( 'AUTH_KEY',         'tyD}/lt!LQsurK{(<1~~Ms26&C,*(k%GS|83GGsZW!.uTL$S/gk_KcCQbR/u_Gz_' );
define( 'SECURE_AUTH_KEY',  '$AQB;Q}r}*GJMeX.,I5OzS/{!CB-Ft7`C2cJx(4iu?AB^oApqJ<]bzZ$r-vy0MUF' );
define( 'LOGGED_IN_KEY',    'i}Q7>8d}WkbzEGM}D%gBI=8VAQ01mtu[YQ$o>}FA$AA N)DjBjt}5:E+n5Epoh$I' );
define( 'NONCE_KEY',        '70Fdk5Zm^z)P1e2G7?v} oIRtA@;zhV|@H#Yp1hU{Bm>? lB>5daiQ2+x/#,KbSK' );
define( 'AUTH_SALT',        'n*N9~B)eCgvH<!L#-7znfT%iMR=RN9j99_!:x0=BHBlRZ&-}Is)(<L|ljSXjTdm;' );
define( 'SECURE_AUTH_SALT', 'w%,3M6,n+U^NlY11Hg^34qO(|1(1C<;k$ `whT%#ptuxK{Z0*7jaWBj(gO;/WP..' );
define( 'LOGGED_IN_SALT',   'i72#l400pxiV)?j`6hwbn8%`qvV}fBVV02cKTxX73AfG*C{}iTk=5eO<sJrG,<e{' );
define( 'NONCE_SALT',       'k4@SO_dz:&?>a{QG}AKaNVs2L@8|ET!b?o`72DJ3:11jv`v5<;@A&O81A~qbn~dS' );

/**#@-*/

/**
 * WordPress Database Table prefix.
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

/* That's all, stop editing! Happy publishing. */

/** Absolute path to the WordPress directory. */
if ( ! defined( 'ABSPATH' ) ) {
	define( 'ABSPATH', __DIR__ . '/' );
}

/** Sets up WordPress vars and included files. */
require_once ABSPATH . 'wp-settings.php';
