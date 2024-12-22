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
define( 'DB_NAME', 'test_forthouse' );

/** MySQL database username */
define( 'DB_USER', 'test_forthouse' );

/** MySQL database password */
define( 'DB_PASSWORD', 'forthouse' );

/** MySQL hostname */
define( 'DB_HOST', 'localhost' );

/** Database Charset to use in creating database tables. */
define( 'DB_CHARSET', 'utf8' );

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
define('AUTH_KEY',         'LaHY.K807}S(nEtgCE=l#EjowgyjF{etF^JMdp=^{h_y6s_{1`9u!y|v8B:cS2@q');
define('SECURE_AUTH_KEY',  ':6paceT+jZj|6As]S-$eG#kfIv/Xfxmp-3^+I3FQ_=x/N2<+)OfE/8: %XJ8h$%)');
define('LOGGED_IN_KEY',    '2jaZ)P3<0.j6{G]zn?rHT$._Cg7<+[eOEyp[&|VpU.%Q]u1V#fXO=Onjx)?b.QN5');
define('NONCE_KEY',        'dP(m]%PGTK@ kQTkrXkv~x2~}s#vALlrK-~Tq%$|`i;o#|v6;|!|c0%xhZ_Q^eVs');
define('AUTH_SALT',        'lr7[/oOw5(s%]7m+bY4+u60eb+v(_%p-+BT5e2|u+ {gD|+9%++|QW}|8M0!D`W]');
define('SECURE_AUTH_SALT', '-?+,#^+J9.Xa.!m6(ab|]~$:(1DY>xrRBeE~t WQ|1Xjf.4..(C.Kkq]F2<AS{:;');
define('LOGGED_IN_SALT',   'Mq,H:khglT.Tn :^:GMyJqD$>+YLs6 <$aHDEwEu4}TX5A3&GEh>olMlfJo@~)7-');
define('NONCE_SALT',       '-9R,KCK`+[!>=/Dofo.EUx2!@*L,?NrrNKU+X6/F w^Kg<etWI4an~C[OtDW%>,x');

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
define('WP_SITEURL', 'http://forthouse-reserve.com/'); /*http://forthouse-reserve.com*/
define('WP_HOME', 'http://forthouse-reserve.com/');
define( 'FS_METHOD', 'direct' );

/** Disable File Editing**** Onyi */
define('DISALLOW_FILE_EDIT', true);

/** Limit WP Post Revisions to 5 */
define( 'WP_POST_REVISIONS', 5 );

/** Required File Permissions to import the templates from Starter Templates are missing.

You can easily update permissions by adding the following code into the wp-config.php file.
*/
define( 'FS_METHOD', 'direct' );

/* That's all, stop editing! Happy publishing. */

/** Absolute path to the WordPress directory. */
if ( ! defined( 'ABSPATH' ) ) {
	define( 'ABSPATH', __DIR__ . '/' );
}

/** Sets up WordPress vars and included files. */
require_once ABSPATH . 'wp-settings.php';
