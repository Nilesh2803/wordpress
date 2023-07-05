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
 * * ABSPATH
 *
 * @link https://wordpress.org/support/article/editing-wp-config-php/
 *
 * @package WordPress
 */

// ** Database settings - You can get this info from your web host ** //
/** The name of the database for WordPress */
define( 'DB_NAME', 'mydocs' );

/** Database username */
define( 'DB_USER', 'root' );

/** Database password */
define( 'DB_PASSWORD', 'Info@1234' );

/** Database hostname */
define( 'DB_HOST', 'localhost' );

/** Database charset to use in creating database tables. */
define( 'DB_CHARSET', 'utf8mb4' );

/** The database collate type. Don't change this if in doubt. */
define( 'DB_COLLATE', '' );

define( 'FS_METHOD', 'direct' );

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
define( 'AUTH_KEY',         '75e5AP7(Zg[1gn~MJz,1;0WXEIkQsWBxzzWZxlI=^j2I$ktriD)yJ-yNgv%Qju:;' );
define( 'SECURE_AUTH_KEY',  '5upkZn?!@Up=j^A/a/ux2D/!]g1~hOch1 HB9u_brtg&31:p76$kZ&C:MCdDs?G@' );
define( 'LOGGED_IN_KEY',    'oa(rN`{F9/^O*qk}ez-;]=xU/<qD9Raa}c//8|`is`y#rs[bu68`r>qNdY$?#U}e' );
define( 'NONCE_KEY',        'D{**ROV!!7PJ}dX5K3I*VtbdI8a$p6~[ToAWV#}~%|bM+77<al(5^ne.4CA=G9,I' );
define( 'AUTH_SALT',        '*7dj}mS$%B2;,NaaJ#}.Esh-&H/ESQ`ZWLhU2eC3L%pQ0G!y8n!)>|!wY9-d`vq6' );
define( 'SECURE_AUTH_SALT', 'Y&R*<XbK*=WIcLYJxZxf6=nZbP`LjTk#:i_J$l]60R`A]?6H6QudMNU[kn<_Aq/z' );
define( 'LOGGED_IN_SALT',   'H+$N@&01$F4Nvi uG]fB]M!QF}s@NJ(Do-ZJi`hxo%ZPFgJBsp$<Poeqoj7m8c8Q' );
define( 'NONCE_SALT',       '6XH;aqkkLws /xS(+|d^$X?^!M_0V`|ig>z<,`BO{zKAjmsa9s6xGT_mf%QEcS]W' );

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
 * @link https://wordpress.org/support/article/debugging-in-wordpress/
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
