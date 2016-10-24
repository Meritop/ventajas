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
define('DB_NAME', 'i2939763_wp1');

/** MySQL database username */
define('DB_USER', 'i2939763_wp1');

/** MySQL database password */
define('DB_PASSWORD', 'W^QBEtlsD[G74(j(]j]16]#3');

/** MySQL hostname */
define('DB_HOST', 'localhost');

/** Database Charset to use in creating database tables. */
define('DB_CHARSET', 'utf8');

/** The Database Collate type. Don't change this if in doubt. */
define('DB_COLLATE', '');

/**#@+
 * Authentication Unique Keys and Salts.
 *
 * Change these to different unique phrases!
 * You can generate these using the {@link https://api.wordpress.org/secret-key/1.1/salt/ WordPress.org secret-key service}
 * You can change these at any point in time to invalidate all existing cookies. This will force all users to have to log in again.
 *
 * @since 2.6.0
 */
define('AUTH_KEY',         'oD7PlDqZ6kX4OV1kseIOPCIbGUUf5OBNyh17QLUGcqLHNshaBOlxiOnP0xNEdEtL');
define('SECURE_AUTH_KEY',  'r6fPC5jWWw1xQBAVd42WbZ9iPssoz0RFTdEbTpACKT6Hj37UKTdVIjCJNHhoyVUf');
define('LOGGED_IN_KEY',    '6t2fC4oKTzPaQaCNOJW8kBmJ2TXLz6YlFDkFx7sXGIyMvWqUfbefnUMKAMYK8oJO');
define('NONCE_KEY',        '3UfOHOOB8YPBQIJG4Rb3X0dzG5H6QFyBrryjGwVxgfpBJ5QnzBlNmNzusZVLEOMT');
define('AUTH_SALT',        'iZXtHH5DMus4rMNm2uC6v8ydFCV4fyiqxiD2JOfcmRWAuQFrXFEgr2F1IctJqeCu');
define('SECURE_AUTH_SALT', 'tU6rQVpN3jRK59TkvwuPfOoV2yqMIyf9EIRe6RUEJaJ2o7lOnCgOoiKpBDubDNMM');
define('LOGGED_IN_SALT',   'GQK4zVAFjqmIkWkj4sLSizwIggd8doQWSsZwfLtAhvMonTnx6rGt8CP4ZORDW6NG');
define('NONCE_SALT',       'lkmu4QGCnd9ZgA457fPlTEyDmV1svlBuuo9mUVou3hntgkO2HXu3BZlVNKSz5f4z');

/**
 * Other customizations.
 */
define('FS_METHOD','direct');define('FS_CHMOD_DIR',0755);define('FS_CHMOD_FILE',0644);
define('WP_TEMP_DIR',dirname(__FILE__).'/wp-content/uploads');

/**
 * Turn off automatic updates since these are managed upstream.
 */
define('AUTOMATIC_UPDATER_DISABLED', true);


/**#@-*/

/**
 * WordPress Database Table prefix.
 *
 * You can have multiple installations in one database if you give each
 * a unique prefix. Only numbers, letters, and underscores please!
 */
$table_prefix  = 'wp_';

/**
 * For developers: WordPress debugging mode.
 *
 * Change this to true to enable the display of notices during development.
 * It is strongly recommended that plugin and theme developers use WP_DEBUG
 * in their development environments.
 *
 * For information on other constants that can be used for debugging,
 * visit the Codex.
 *
 * @link https://codex.wordpress.org/Debugging_in_WordPress
 */
define('WP_DEBUG', false);

/* That's all, stop editing! Happy blogging. */

/** Absolute path to the WordPress directory. */
if ( !defined('ABSPATH') )
	define('ABSPATH', dirname(__FILE__) . '/');

/** Sets up WordPress vars and included files. */
require_once(ABSPATH . 'wp-settings.php');
