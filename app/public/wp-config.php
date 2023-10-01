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


define('AUTH_KEY',         'HonKa2tzUquf6K6bkfQBJ1u+SkEh1igH9UjyOnd2LZNdM8gQDh1OK+u+8Vg6XJbtnWx/dNbKtF6L3Uluf+PKaA==');
define('SECURE_AUTH_KEY',  'VdDkzIV7Ckk3jx+kQL+ou5gpYHDtZK+pZqwzDknUZtyqtNE++0bC3yHevTaPR1fdIxf5SfXCoQV8SEdRXRDxpw==');
define('LOGGED_IN_KEY',    'cojZRXwP/zA947oVyHoqqWHq3KupNxiciFMNWTIoOz0BYiZzJXZePQGcMRUAO81K7wvRPtqi9YbbdU1AZC9T0w==');
define('NONCE_KEY',        't5RGLfCGkCKl0SeKOEm5+QSiL55nNyl7yLRaOQBHlGEit//0lLHRuz7tfr6iqrZa1m7duEoIMe6ifJB/ruzuJA==');
define('AUTH_SALT',        'tsysonRfLdrwn6og4teWFGjJqr6oSyXCqCLJFLU8iDYiq1S+6QlcMaAvjPvgb5h5yo6Ac0evt7wuMfjFd9L7NA==');
define('SECURE_AUTH_SALT', '2z5wNtzNkzFUhThV4CG3HmziQgacS5bXGhJ2Brh4/M9WRUhBrwGRza4dpP7rO1KwBu+gZahrHCgaZs9Y+YtEyQ==');
define('LOGGED_IN_SALT',   'NrxTvwqozL0m2But2ljY3/Die5xSZQWQagrwyJ42sHv33QPekZchaSz7OTkUEy8/5I6Mql12CGenfO5ntLlotw==');
define('NONCE_SALT',       '2RYW4otAvpO3XUtqm5F0+ZxPCbif53Q28JgvjmLrgIZ1MYIx0fi5KgGZvWjmWmFjXwxy8dgOPz73foLrKgiIbw==');
define( 'WP_ENVIRONMENT_TYPE', 'local' );
/* That's all, stop editing! Happy publishing. */

/** Absolute path to the WordPress directory. */
if ( ! defined( 'ABSPATH' ) ) {
	define( 'ABSPATH', __DIR__ . '/' );
}

/** Sets up WordPress vars and included files. */
require_once ABSPATH . 'wp-settings.php';
