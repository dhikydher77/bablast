<?php
define( 'WP_CACHE', true );
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
 * * ABSPATH
 *
 * @link https://wordpress.org/documentation/article/editing-wp-config-php/
 *
 * @package WordPress
 */

// ** Database settings - You can get this info from your web host ** //
/** The name of the database for WordPress */
define( 'DB_NAME', 'bablast.id' );

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
define( 'AUTH_KEY',         'WnaXXu2wZ6nRJGE5c8OkH9UuEpZMUlftvrl9Sp2WQgDbdSjYwTEGj3hF7ZHlWy8F' );
define( 'SECURE_AUTH_KEY',  'n89PTxONZ1b3mn33kgJ6t1m26X3ctAYsTP6y5Dad8uzwAEqLPZtC537kHykpCnBT' );
define( 'LOGGED_IN_KEY',    'lMbSzL2I45p7uLvKqfdNYTuy1krkHjCWrjdHnzS694GsGwhf5MjODNvE49cL8Xbm' );
define( 'NONCE_KEY',        'mxZOhzVjwrQhvBXJ238p6yWoUCq7kXeFBfelOlNl5UafhsR0b7HLPGem3Jtp2Qb1' );
define( 'AUTH_SALT',        'mzjb80Wamb214d93ZsSjqht0lvAlxnU6NL6waiTcagt29zDAmWWDuolnuAMPaivd' );
define( 'SECURE_AUTH_SALT', 'CYRG29BsfNBWfNs1bucTHWEQATOJNESCfzKiLzmp8Y9o5CerX4vnZbAVsD2NzXBS' );
define( 'LOGGED_IN_SALT',   'u9TwvqhJ0UDd4weQWg3uLcZN1RS9FMvWzCgTTHvV9sHBVbszojp0OQUb5V2M1n2t' );
define( 'NONCE_SALT',       '9uwScb3xGpWjtJmjxb1uNleLfTsumttaZfmRefhA8sBPRqyRfCLBfYqYYaHeDJKF' );

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
