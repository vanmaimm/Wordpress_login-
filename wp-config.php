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
define( 'DB_NAME', 'wordpress1' );

/** MySQL database username */
define( 'DB_USER', 'wordpress1' );

/** MySQL database password */
define( 'DB_PASSWORD', '209@123456' );

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
define( 'AUTH_KEY',         '+*mrP|4VLRG-$}a{V;,AnTf|i# iG<1*%mPVGz=jr&7t7ce!6jcyO(K-3qz7Md$~' );
define( 'SECURE_AUTH_KEY',  '+oe[QeEbmc:L*NX~K5m z8%2XG)}*{1o[}IlZ`c9DW$JauG/)<p2R5 QZ>jIS=>*' );
define( 'LOGGED_IN_KEY',    'J]nN}N_PPgE3KP-O7D!%1=6zA{zmmQsojfkvp+:ut1Z}a{>#e4<8&^%Ss6+=,CSz' );
define( 'NONCE_KEY',        'G JH|]KP%Ls5jf<|VhREo{d7Z[A#?TI2Um&.iwT;Z:}$hns=*>ok&fo~83Jw%DT$' );
define( 'AUTH_SALT',        'RaUPg4a:orGDY!H1%GoNSrR;95,tG?s/Ay)H [[M`JOc5+,*`^YL6Ua,#to0<W]m' );
define( 'SECURE_AUTH_SALT', 'p.+)X yLz+p10c8xfM5utO..K[EaEH*pAUAO7|]PYG,3E{g?hN!#Y3TgS xGV&6#' );
define( 'LOGGED_IN_SALT',   'toBu7CE2Wm4GS@}GA,,Nl)wB[HA?zD!$t$.41FitMB:J;@.*ok@4V%3*}@ gf`;W' );
define( 'NONCE_SALT',       '?8]KcX^G>^x;Rno6;])GIgFbT!V2 5Ep%C7h=[#73ogPlf O0X!%Y@W<f723`:UF' );

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
