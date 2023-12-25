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
 * @link https://wordpress.org/documentation/article/editing-wp-config-php/
 *
 * @package WordPress
 */

// ** Database settings - You can get this info from your web host ** //
/** The name of the database for WordPress */
define( 'DB_NAME', 'db_playselects' );

/** Database username */
define( 'DB_USER', 'root' );

/** Database password */
define( 'DB_PASSWORD', '' );

/** Database hostname */
define( 'DB_HOST', 'localhost' );

/** Database charset to use in creating database tables. */
define( 'DB_CHARSET', 'utf8mb4' );

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
define( 'AUTH_KEY',         'g$&ciF7&ui22%56/2^D/WTyx}bTa5V;qj}`3?WKu#MC]]?,f10Vb0t$F6r#7a^*U' );
define( 'SECURE_AUTH_KEY',  'H~ubc;U%&Z&S|]}C/BzSz &c$q<xCU7tiT&ob8CcIcwbsypShXD>!9)rQ,2&ECQa' );
define( 'LOGGED_IN_KEY',    'sr7/}{*.av|*?hy`<>l8ifcIZbLFp>%Cx8)d+E[<% [X#~wXz:g(o]~(WO=1WOB3' );
define( 'NONCE_KEY',        ' }ul)LVg2^A|.b9,r=SkA)q]}p@3QdNz:K^$H6>NULiaKI~+)2Tiy|w4jCrPFr{>' );
define( 'AUTH_SALT',        'd(_E-(>I,F|JaMxW?#H=5o%BL<66AfuUHAkZa3Cjl]{cbx,GMfxs /W`WC(-~-~V' );
define( 'SECURE_AUTH_SALT', '&0,>Vhzwp*]var#y84Fk.HrTDBSHhYtq`2~CECzW93&VbGr,q{BcAO#iGCPRT=Z*' );
define( 'LOGGED_IN_SALT',   'E5Y_EC:iXZQ->A`dP#H$rMy~@klP0:#v-91VN0V)Kv-2PEws9WH9=n,hVBrJU(AG' );
define( 'NONCE_SALT',       'myR.iW?0P:<>E.M,r~;N)qyp6R=B>FO&Lv}u}>K+$zV~e6;V5b.jcaZ;%ZQ;kl:g' );

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
