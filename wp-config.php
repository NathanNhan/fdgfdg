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
define('AUTH_KEY',         'KmggAcQMd8paCSleY6W8A2p8IeXId8kAxfBBtVVTbk3n80gvPZ1vs+UjlHBlPa1/rpEm6TkC+LMGdGCg/1mIwQ==');
define('SECURE_AUTH_KEY',  'SONlk2mySAYnqRteP3+SnpJvc6RyPLy6ZPU3TXg1mlMhaLoDy9rzWFmppwxXeDHtRESR4DXkcelBTN3L3XU3HA==');
define('LOGGED_IN_KEY',    'xCiguCsHQI/LDzYkzGy74NqHiuXVCqy5D/57g+m5d7afy4pr3/uhb612SkrXSRw2xwbEvGaCY6Rfc6C7iZl+vw==');
define('NONCE_KEY',        'Kh0ZpG6KMyc24p98/AaEPuLAowzYaLI55tq0r40kz6QoLiSzZ7xge9LzzbrSAsbO8rrJ5IYsvmykj7Rlh7rVog==');
define('AUTH_SALT',        '+QElbl6ZoQMQiMJ7PzVOVL8eKUq/Ng5rQ4Es2UCTlNWY+0uSXCYCrtwYY62jjdaJza2tSTEZ/SDMhKCAF95c0w==');
define('SECURE_AUTH_SALT', 'X5mwCxcNK7SLjCPK4ipta/yjoRF9CF6VFSzLYNGF+xvpwKLBdy9frpEUQ3m9YvbSmRpouuO+PPTZKs9JGMOu8A==');
define('LOGGED_IN_SALT',   'hDKRrkdAlfmQjEBXd3fOMTiD5/pXEDrXN35V59r7wrT9uFxghv/ofFVxh7B/NUbI/DBj+h120Fco4izEnTmfMw==');
define('NONCE_SALT',       'TtpaNMqmYKawIxGLcwH9NUb5glyuiozRcpBuVM1avSuDy2OGc/nJy4tmIgcy/y3bzAVOm+v53iXWxiimfAC4aw==');

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
