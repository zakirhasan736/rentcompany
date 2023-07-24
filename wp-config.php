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
 * * Localized language
 * * ABSPATH
 *
 * @link https://wordpress.org/support/article/editing-wp-config-php/
 *
 * @package WordPress
 */

// ** Database settings - You can get this info from your web host ** //
/** The name of the database for WordPress */
define( 'DB_NAME', 'local' );

/** Database username */
define( 'DB_USER', 'root' );

/** Database password */
define( 'DB_PASSWORD', 'root' );

/** Database hostname */
define( 'DB_HOST', 'localhost' );

/** Database charset to use in creating database tables. */
define( 'DB_CHARSET', 'utf8' );

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


/**#@-*/

/**
 * WordPress database table prefix.
 *
 * You can have multiple installations in one database if you give each
 * a unique prefix. Only numbers, letters, and underscores please!
 */
$table_prefix = 'wp_';


/* Add any custom values between this line and the "stop editing" line. */



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
if ( ! defined( 'WP_DEBUG' ) ) {
	define( 'WP_DEBUG', false );
}


define('AUTH_KEY',         'W/madoy520hVcqE/hDYgZdhAORIu5EUFxa+iolq2bV/QrtCO00WoxBC+CjN0zhXtR2BtXRoO9n7itb/U7qqGmQ==');
define('SECURE_AUTH_KEY',  'uq0ft963NHJ/6b5DbFa8aZiawRkZ5NXkAIla+MRjfW8csjf0MTS2QQICtgdrTXZ6tYIPnnVoWr3aXKQR7QHLew==');
define('LOGGED_IN_KEY',    'iszrrOaqNhHiRcunqYxP8XAuvjmOlyGfetPYzjim2ZzgQnbsz2HHYgYE54AOHMqyo1zgz+9L+Fsr256xmARfhg==');
define('NONCE_KEY',        'EQ1EZGZEFXRDAeHNK0tzfB265BxNbY6TPHhglQC7G79bt/fN0SMD3FTWyb2FcRo7uPSHsV7leXDovyHmYlRblQ==');
define('AUTH_SALT',        'NHi9LoTsXQjV4iYlP7oVJ6QId++rZGFOCpQ8eaHs40qws24Jx6Eu2HV2hw/B7oaJ+/fRGALNNpTqBeYG1mKrZA==');
define('SECURE_AUTH_SALT', 'lNldRiNF9zLooQevvJCirR7Mi4+qRkgxML/ybwZLRSr1LkSRexbiizaSlO6ulrQ3AQv6SiHmMXVXxiqQwaVJWw==');
define('LOGGED_IN_SALT',   'JU766KQv6C+oau9Rf37GGNr+PyrsqfHLRfote7ZgFNPQMKZN/EI57dj2xlWR/f7L30Jxk0WxH0EPEGGHMmsm/w==');
define('NONCE_SALT',       'YLcpdhNIcUvUtzHZCkJCJRxsVsPdRfjHDcfoOloMlHzkvdi3aoDotWyf/hScZoA7blJ2drenAMuAyh374uFnew==');
define( 'WP_ENVIRONMENT_TYPE', 'local' );
/* That's all, stop editing! Happy publishing. */

/** Absolute path to the WordPress directory. */
if ( ! defined( 'ABSPATH' ) ) {
	define( 'ABSPATH', __DIR__ . '/' );
}

/** Sets up WordPress vars and included files. */
require_once ABSPATH . 'wp-settings.php';
