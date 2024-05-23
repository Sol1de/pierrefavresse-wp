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
 * @link https://wordpress.org/documentation/article/editing-wp-config-php/
 *
 * @package WordPress
 */

// ** Database settings - You can get this info from your web host ** //
/** The name of the database for WordPress */
define( 'DB_NAME', 'PierreFavresse' );

/** Database username */
define( 'DB_USER', 'root' );

/** Database password */
define( 'DB_PASSWORD', '' );

/** Database hostname */
define( 'DB_HOST', 'localhost' );

/** Database charset to use in creating database tables. */
define( 'DB_CHARSET', 'utf8' );

/** The database collate type. Don't change this if in doubt. */
define( 'DB_COLLATE', '' );

if ( !defined('WP_CLI') ) {
    define( 'WP_SITEURL', $_SERVER['REQUEST_SCHEME'] . '://' . $_SERVER['HTTP_HOST'] );
    define( 'WP_HOME',    $_SERVER['REQUEST_SCHEME'] . '://' . $_SERVER['HTTP_HOST'] );
}



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
define( 'AUTH_KEY',         'aJIiShwHwBRlWtZxA8CCIyKjS9UkRoco9U9wbOXb38W7A3OdJ5zCWi18ClQQ0Sij' );
define( 'SECURE_AUTH_KEY',  'D60xfRdkOOd1YyC7ZTTXdBbfUTK5KFkzZnAjZgxctizu68g5SRpgAoPLjADlAFxD' );
define( 'LOGGED_IN_KEY',    '5aaXZv4sMmJ9Sqv2nhjLfJRI8SMMGe0eEUl73P8XYxlBwUSD7ZmEvJZoCdEkjSKq' );
define( 'NONCE_KEY',        'G9miBCZoDPtI8BQKC6D7MboyEWwTk2gPmghYaUuIk4UzMkGfVRHux3dtHMIud0yM' );
define( 'AUTH_SALT',        'qpWVOkiaHWMGqE7YEvbWU8hOQzpkMD3jIz3TSKDWH1yQHPZlv8CedMcZL5gOSjTE' );
define( 'SECURE_AUTH_SALT', 'bwQCqGsaPHuevUCP0kh0aWKUcj4kGsuxum1kYwYi5kJF36az2ecqNTRQ4NqVcdD0' );
define( 'LOGGED_IN_SALT',   'C4WMpCjz5frjLM2L7HZ7v8A15W7v8xXZVlfCn3mbv9Qu9oKieaoCxDZ9wBCCXhtQ' );
define( 'NONCE_SALT',       '49Xc9g0I2NXrGEUGu6pUxfgthV9c46LEAR1prBWW1nCBybmRril1rX0LPeCCGuHE' );

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
 * @link https://wordpress.org/documentation/article/debugging-in-wordpress/
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
