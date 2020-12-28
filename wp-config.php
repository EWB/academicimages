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
define( 'DB_NAME', 'academicimages' );

/** MySQL database username */
define( 'DB_USER', 'root' );

/** MySQL database password */
define( 'DB_PASSWORD', 'root' );

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
define( 'AUTH_KEY',         '>SX7Rx|qDfUwn`kgT~DZZdNCVA@a(k+=]jy#UcSil<K~Eb?A`? Pu5D$c@>UB:^=' );
define( 'SECURE_AUTH_KEY',  '6Gl8H~yotZ+C{IJlLV^&h !]sDb$W98/-d{}tbVWy=V{iA>.=/QtZ O%~ pO+x[-' );
define( 'LOGGED_IN_KEY',    'bjRbtx]V[;B`?N3TDb4>03J{.g?4_88R-|FPV{K}y<qxP})@R&psXgs(O;vx5GN0' );
define( 'NONCE_KEY',        '!:j%|UtQRet-g!HmW(l[9_ [K,AgisVmWX0D98NhZuH3chz?>#epAs9#3(6v?S%a' );
define( 'AUTH_SALT',        'et_*gQDy#;eYr?}u[F!]6U.6op=4IZP}bNQ<|?H+2k|=7(fIC8w-N5^T_F+>Ob0:' );
define( 'SECURE_AUTH_SALT', ';~s49()-jIN~BZl`&*`Hn13yo4a@d9&4)w (ot/apg_P8:|Z:|Mb{-?rh.!@A^l1' );
define( 'LOGGED_IN_SALT',   'Tfvy8m]vC:{5D!UE:*/4*b0>vu4 d7D_:JI~7}W/94*(Z*ofn!N>d{e,$;1fS;qV' );
define( 'NONCE_SALT',       '0p{$;iMnKtEp:_%0?yMJ4sUFpf1N4:Ss1Sggy_&OVELc5K}?XHgq)oQ|h7%+=*ta' );

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
