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
define( 'DB_NAME', 'shopes' );

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
define( 'AUTH_KEY',         'D2!zCRFa5*jQaa<x gkw#--hXF>m1%V GIH_z/.Hl[(2YAp~f#i*&`zmj{>39gcf' );
define( 'SECURE_AUTH_KEY',  'kZj.Sy7i]}/_HPhelP*5i_CrI]7F|2<lF.r|5^!s0Y;s.Po-`Xn^}BAF%e^!!r[B' );
define( 'LOGGED_IN_KEY',    '$|(.~7cSAzhdnK86L Wv3k:l%@QK/X#QW|z)>hcP*B)?d^ieXzjtxP>4k?-,r9R4' );
define( 'NONCE_KEY',        'Sz]~8[1%c]=`?tPs[]|/n`=Pbl4X/oRu(S{MWi5@-qU-l=;SmH3rm<JIq5yxB2Ir' );
define( 'AUTH_SALT',        'nlOnZN%HTYkm$m3hx])gY^8$o~D%/1&%_J1xwt7*?@w7+iOl)*Xa^?]E|dBe-|{W' );
define( 'SECURE_AUTH_SALT', 'V.oIorVVx$*&>ES>Kt!8YSb`gn}p>D-d &4p{QdS&W,c7DtT}C#!%o*M:$G}hu5R' );
define( 'LOGGED_IN_SALT',   ')[ADk6p+:;ojM[`5W ,:X.oc/oVufL,PaL>igx=S8,UaMaW-jys`]-P$F;!y%)Pf' );
define( 'NONCE_SALT',       ',3!osj`2flY%kMrp~v<ghIgA.JSqE?Z<Bc!?fWpYa<,Mp$w-a0|Mhpd~MKGMC89q' );

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

@ini_set('max_execution_time', 1200);
@ini_set('max_input_time', 600);

/* That's all, stop editing! Happy publishing. */

/** Absolute path to the WordPress directory. */
if ( ! defined( 'ABSPATH' ) ) {
	define( 'ABSPATH', __DIR__ . '/' );
}

/** Sets up WordPress vars and included files. */
require_once ABSPATH . 'wp-settings.php';
