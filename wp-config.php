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
define( 'DB_NAME', 'IglesiaJesusDivinoPastor' );

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
define( 'AUTH_KEY',         '~9(T4(w>*q^{hn.mhoUk7>5`tT)345%):G8o{Mnx#a6l<A.d}0Sa!q#zNz?FwtV&' );
define( 'SECURE_AUTH_KEY',  'P{t7AY=dvW5WkgQc<K(kE@Je9#@rx#C`%PGSJ2Y-oB}/:SU|]>b@}[*VT$WO/RV!' );
define( 'LOGGED_IN_KEY',    'A{eA>h/(^vB[2]clVS$2?%,0,;8M{/Tq4Z=^-b7B@;S4]*cr%I=8$o7[8R!{/@U%' );
define( 'NONCE_KEY',        '7ZW4&MsCCCkB#:!M.4R6&8)KZ%5ZP#PuK3?TS.vzmov/vJn`!M|E8~|)3X^f.(SC' );
define( 'AUTH_SALT',        'rn_L#c~VEkBlUMeS,Z`OOkmADY<l7o^L0%}h?P7<z*3He. Nh~eC4QDG6-Ox>GhM' );
define( 'SECURE_AUTH_SALT', '4Uj_x@lIgy-#c}552nzL~Ub2ljFUH=gOWsLTYD&~v*kKQxG7~v_:-p!edB-nXE+&' );
define( 'LOGGED_IN_SALT',   'FR>f^hCL%3cW3Kv &6$^Fv<|B5Z)*y> Yk!R]v?buRmDzJT0(giH)qW3Sd~r{JOU' );
define( 'NONCE_SALT',       'CjgNZd1q4b(IU*ilud`{$/+pY;QA9Gn2VU*Obu/H/_-ZM4Z/U<HAmg@.;][sqh=3' );

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
