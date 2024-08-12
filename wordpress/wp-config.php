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
define( 'DB_HOST', 'db' );

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
define( 'AUTH_KEY',          'zyAirkCt[xA#k8$.k$aPdv{X}]cB=iAg<uvbX$-6{k]1KC!u7K9*5-sNy6J%2h01' );
define( 'SECURE_AUTH_KEY',   '1N)^h>9FKj~Doyb ?6sW+:04*,&?u0T~3Zl2;XgpKJ6D&1FCb4@X{iU5>@`:8HZ^' );
define( 'LOGGED_IN_KEY',     '[WX,9D(QrJ<k_3I#tP?5vyM44xqIv}n04.r`908&/?!(nQx$D7bguvW*h|*Dy+9/' );
define( 'NONCE_KEY',         '+VF@QI)d:1,V+vhjC:L6a:-8P?=0MB{OkA_;5^{$1ckYl]$<,6%h@t!  @g&Y1ZA' );
define( 'AUTH_SALT',         'e#@</OKqswM(6e$,rI)2<`R2)[mq9}.KSEQs@~q*G_6yqASZZ+A4wH.rYtT~/z#_' );
define( 'SECURE_AUTH_SALT',  'k/7Das~h.]e?Zj7 0~0Q!f687e$<JARdu,coKCh6q@1FJl4;fd];nWb&!8v|#8f$' );
define( 'LOGGED_IN_SALT',    'PFN7qdd/O;L!>i5h$I_t6)RZW9Z2gg=x)Zio(V37$5X0WyD^C4OJ%kc)W4JY;wi6' );
define( 'NONCE_SALT',        'a6sC|,?nAX6L:`kh58!Ws79ia3+y]kl;A~umr9?=C%gFhk+kaLKbgHS}{~xPP57)' );
define( 'WP_CACHE_KEY_SALT', 'm94o9~f#^jzFwm*sadFRn]2aktQsxi9.U$*MF713PNh)Q~6(@HCgjO$@BcHuI{05' );


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

define( 'WP_ENVIRONMENT_TYPE', 'local' );
/* That's all, stop editing! Happy publishing. */

/** Absolute path to the WordPress directory. */
if ( ! defined( 'ABSPATH' ) ) {
	define( 'ABSPATH', __DIR__ . '/' );
}

/** Sets up WordPress vars and included files. */
require_once ABSPATH . 'wp-settings.php';
