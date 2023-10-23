<?php
/** Enable W3 Total Cache */
define('WP_CACHE', true); // Added by W3 Total Cache

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
define( 'DB_NAME', 'wp_9tif9' );

/** Database username */
define( 'DB_USER', 'wp_d95mk' );

/** Database password */
define( 'DB_PASSWORD', 'n23KuPY65Y*olH!F' );

/** Database hostname */
define( 'DB_HOST', 'localhost:3306' );

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
define('AUTH_KEY', 'vSR7eu:@nh&n21:!pv*y:ZV_!)qE1:b2!*5_8w&6@05W2:![;&vk]O*F4Y[@525b');
define('SECURE_AUTH_KEY', '3Xqo(0H1|*rTgf;3@Qd7C08-HrMEY6u|@5fLh0go0JurV3D0%/::~2q!Giref(73');
define('LOGGED_IN_KEY', '4J[2HKPgTSH:Om]rWe8~73;Bu8Zwb705]av1Y29H|eY9@h|701vVl_qT007QQS8_');
define('NONCE_KEY', '1i!R+6;8+5wU;!5%!6|;zNX8D4|Y+jO|t#5|Aj(|@uF3)dl31wR52Xaa7H%:wam6');
define('AUTH_SALT', 'uu!e0Na6B4w+1#73:rCm*bQ!!6hVj7++~)M8I46#ye&5-z+HBu91P|yI5)6zkz#X');
define('SECURE_AUTH_SALT', 'ds78eA~2@(B)CH#3Vs5N+&wWZ%7#G0&]Llm&s@RBvA[DZR5Z9~09O(%Z-unUy*]2');
define('LOGGED_IN_SALT', 'SUOcB1S7!EsD8@r(Wv8qbzOG(y]W4UR8klxa7Lq#8&(927Y2o2|sMx]wpSAr2#V&');
define('NONCE_SALT', '014J32bYneC89!FDs60jF-5]_48tth51Z07Ut(W_18pNfFT@@|V1[9g2A6jm1o+:');


/**#@-*/

/**
 * WordPress database table prefix.
 *
 * You can have multiple installations in one database if you give each
 * a unique prefix. Only numbers, letters, and underscores please!
 */
$table_prefix = 'mSfQmltK5_';


/* Add any custom values between this line and the "stop editing" line. */

define('WP_ALLOW_MULTISITE', true);
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

/* That's all, stop editing! Happy publishing. */

/** Absolute path to the WordPress directory. */
if ( ! defined( 'ABSPATH' ) ) {
	define( 'ABSPATH', __DIR__ . '/' );
}

/** Sets up WordPress vars and included files. */
require_once ABSPATH . 'wp-settings.php';
