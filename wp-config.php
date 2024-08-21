<?php
/**
 * The base configuration for WordPress
 *
 * The wp-config.php creation script uses this file during the installation.
 * You don't have to use the website, you can copy this file to "wp-config.php"
 * and fill in the values.
 *
 * This file contains the following configurations:
 *
 * * Database settings
 * * Secret keys
 * * Database table prefix
 * * ABSPATH
 *
 * @link https://developer.wordpress.org/advanced-administration/wordpress/wp-config/
 *
 * @package WordPress
 */

// ** Database settings - You can get this info from your web host ** //
/** The name of the database for WordPress */
define( 'DB_NAME', 'wordpress2' );

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
define( 'AUTH_KEY',         'B~[%Quv89,](>CMDVG}UEtzfZT;Gw0&s0cm}i^W@e1,aNwa>y<]]cNtbC~V0g`jc' );
define( 'SECURE_AUTH_KEY',  '2ZpJ%x/n(I,p<M}g--=v@(B,6x6oCt.*_Q fdcD+a{a]`Cq~%f}SG3HgVkli38:y' );
define( 'LOGGED_IN_KEY',    '?h.,@Pxeh6 ?8AJ:SW5LOl$i4FJAz>Y|P)v{V:x0s4%S9s}^,_$`q%LXQXLn8.M$' );
define( 'NONCE_KEY',        '+y1+sSh.qBPZa.^J8MGL*9<p4pXveD8qmuaAOc&L]#/>b%7$JHoSId6s_qx:+wVU' );
define( 'AUTH_SALT',        'x*/#HE=2_PBG(p/ax,Bo?9x3]]-6;Lbde&h#Sp.4B#7_M`9*n_9Buqe({0M!hu?;' );
define( 'SECURE_AUTH_SALT', '65H/F?H^CWyK{0>OZ*fV}<JuLGNfV|&F`yYFjwLeePdGJ)0b:fUJR~I~rif`,}j0' );
define( 'LOGGED_IN_SALT',   'J)J|C{$:VmT@ApwL?}Tyl[ar*vC8RgqHwQ=>jWiRgV./ykB>(J;4Ui*VIzA.XzID' );
define( 'NONCE_SALT',       '%m|kQ;YiYlk Cl0d}H;q?_4b9HE4BX}lyZ`%.M)&-?vG1TW!iw-V9sNh5xd,|*y7' );

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
 * @link https://developer.wordpress.org/advanced-administration/debug/debug-wordpress/
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
