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
define( 'DB_NAME', 'wordpress' );

/** MySQL database username */
define( 'DB_USER', 'Admin2' );

/** MySQL database password */
define( 'DB_PASSWORD', '123456' );

/** MySQL hostname */
define( 'DB_HOST', 'localhost' );

/** Database Charset to use in creating database tables. */
define( 'DB_CHARSET', 'utf8mb4' );

/** The Database Collate type. Don't change this if in doubt. */
define( 'DB_COLLATE', '' );

/**#@+
 * Authentication Unique Keys and Salts.
 *
 * Change these to different unique phrases!
 * You can generate these using the {@link https://api.wordpress.org/secret-key/1.1/salt/ WordPress.org secret-key service}
 * You can change these at any point in time to invalidate all existing cookies. This will force all users to have to log in again.
 *
 * @since 2.6.0
 */
define( 'AUTH_KEY',         'Y-e1eZqM9xX2Rq%|o>S1I#*n1JFM1212zx{F*9$YU]AR{ Cw>%TkN6DEb{Fgk ~o' );
define( 'SECURE_AUTH_KEY',  ':!Y*mvW.wIi7uHExpFl%}Q;[N]KG6B8]vbP<=J7;m_Gs-.h{)7xD]W5dOWjN6p1g' );
define( 'LOGGED_IN_KEY',    '3YqN,z$j}~u4JW:8OPVV)bWHdd[H,wQ/DYBn4ZRY@_v4`EkOF.3nX3=0gMXI%lQH' );
define( 'NONCE_KEY',        'yv99m@2,;Nu`e4e~mf85hf4I$-$_=iNiW$KH|tZ`m~3=/bCqT3>NXd:X6/fw?8U2' );
define( 'AUTH_SALT',        '~qqk*p VL( lvs5}VUsRB8:82VHNNl{<Y:,+>FqCQ4tpr(*xMDJEphsPFeE3h~LA' );
define( 'SECURE_AUTH_SALT', 'LD`{i=w?;DvzZ@+m@mT}3iV8f41)ARa@QrNS;F?:&`zi[4sA]L,2?U^W<fnMsK;H' );
define( 'LOGGED_IN_SALT',   '{**fJ>d6~&XSr(QvkUE]q72j:2@^-y5EtOw0SdQ?b4z REwm?svmLSPu!<_s]UEY' );
define( 'NONCE_SALT',       '2Q1Pf4 H_G{e|t89ceft6q+`6UnZz7Sf$KzK7gc!G)8J_v-Of~r`_(AY*}X!oJ+d' );

/**#@-*/

/**
 * WordPress Database Table prefix.
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
 * @link https://wordpress.org/support/article/debugging-in-wordpress/
 */
define( 'WP_DEBUG', false );

/* That's all, stop editing! Happy publishing. */

/** Absolute path to the WordPress directory. */
if ( ! defined( 'ABSPATH' ) ) {
	define( 'ABSPATH', __DIR__ . '/' );
}

/** Sets up WordPress vars and included files. */
require_once ABSPATH . 'wp-settings.php';
