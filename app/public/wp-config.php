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
 * @link https://codex.wordpress.org/Editing_wp-config.php
 *
 * @package WordPress
 */

// ** MySQL settings - You can get this info from your web host ** //
/** The name of the database for WordPress */
define( 'DB_NAME', 'local' );

/** MySQL database username */
define( 'DB_USER', 'root' );

/** MySQL database password */
define( 'DB_PASSWORD', 'root' );

/** MySQL hostname */
define( 'DB_HOST', 'localhost' );

/** Database Charset to use in creating database tables. */
define( 'DB_CHARSET', 'utf8' );

/** The Database Collate type. Don't change this if in doubt. */
define( 'DB_COLLATE', '' );

/**
 * Authentication Unique Keys and Salts.
 *
 * Change these to different unique phrases!
 * You can generate these using the {@link https://api.wordpress.org/secret-key/1.1/salt/ WordPress.org secret-key service}
 * You can change these at any point in time to invalidate all existing cookies. This will force all users to have to log in again.
 *
 * @since 2.6.0
 */
define('AUTH_KEY',         '8Jg20UIrB9JJIePKWNZGe0AsoSR/DKLjuNRIMS6qyxOOqXnMtOlunswSsX6d8HL9F1BxfR47BXBWubX6adEmQw==');
define('SECURE_AUTH_KEY',  'kZKZ8HGqLtJVBacDUir3NGtnCOzlwq7RjdbLWlZicTFNuth++AD7Mh5IAEbYZa1EZYhJSjZtwPc6zvG5ZGnEXw==');
define('LOGGED_IN_KEY',    'NB9NokMSYufNTlq61pnCBjOY06JtYK0fHS13/wEd1Wa6hrIocC5Po9hhA3Za1rxBVprBGXnndia5L8e5T0uYXQ==');
define('NONCE_KEY',        'cGiVF4pKLZ75m+BQW3iBJYdeWaDLXv2NhJsVc2XGpdv6tW9ZifW1iTb9gp5M7O3N4W/4yYqr1rPO/s24sNqL0A==');
define('AUTH_SALT',        'PWE8zJfO91ACOvy3JUeLIUM+3De8a0xaBQKwyuLS6VexeEtpV6Co/0VoqcHhHZGm/8mzSbR38IyiPBjIRMIFPA==');
define('SECURE_AUTH_SALT', 'JOXJDITFrmKOfQ4Q3GST/oVt1J+esE2QqFYqd+NUyyE0qKu/5U0cm2NVIMg7hG5crVJqzT5cE+FgWPrJv3pmXA==');
define('LOGGED_IN_SALT',   '5Bso3EoyOVAhIH1EKduy3WRszWDbYJkXH8UQJmS3in39m3q03uRL0gs7Zr6xGywr1D1iNplka9WHVpph3SxLQg==');
define('NONCE_SALT',       '+jtXgNKhsnWasg+gjkRaNRzFRPWzygZyQ2hlS1ORQfR6ZGQcZ4Va8QSLoMwWHuXMoHS6mHhFjKFyMVpNChG/5A==');

/**
 * WordPress Database Table prefix.
 *
 * You can have multiple installations in one database if you give each
 * a unique prefix. Only numbers, letters, and underscores please!
 */
$table_prefix = 'wp_';




/* That's all, stop editing! Happy publishing. */

/** Absolute path to the WordPress directory. */
if ( ! defined( 'ABSPATH' ) ) {
	define( 'ABSPATH', dirname( __FILE__ ) . '/' );
}

/** Sets up WordPress vars and included files. */
require_once ABSPATH . 'wp-settings.php';
