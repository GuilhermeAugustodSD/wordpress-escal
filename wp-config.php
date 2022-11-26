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
define( 'DB_NAME', 'banco-escal' );

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
define( 'AUTH_KEY',         '{KO<b>4bNAX^F!4&S9@z,m|dltT+N IyQG$v@TmXJuLZz8Sz%OA D6(&ZRwM!iJz' );
define( 'SECURE_AUTH_KEY',  'KT87E<X6>p}R;kwjKf6,3DWfw-Fo1Hzk[^rI2ko~E:,fD>jz^mK 7f@jhPXAfLXe' );
define( 'LOGGED_IN_KEY',    'B=tI2f~4S>(OAJi=CJtK627-b:h5X{+@xP7mCmd75_Xv{] jdPm7+%7R7/_sGc)I' );
define( 'NONCE_KEY',        'T5] W+?O~K*68V{p)~H,E@2I;Wr<]*!i}r`L1Jl(D^r6@(]=gGkY:0vBkg-Dh2f%' );
define( 'AUTH_SALT',        '/9fZ,P|/.>,P9uTllSz~m1$|#Hw%O>xA@9@OtSt]VxW60 WCc/:#jLQHrO`# Xd_' );
define( 'SECURE_AUTH_SALT', '($L;.Xp~BW)3BFo@4w{*N-={TbT%Vs$qX[<&[j$D^g;$]91g;#{Dd0Nj]OSxO8J_' );
define( 'LOGGED_IN_SALT',   'HdOw!D_b~oEV+B5^+!b/.a=B>OO3ty!30E{E))g0AKj[%P]VEk }>Ml9~o_-u$eg' );
define( 'NONCE_SALT',       'lO6p=W,V.qPCpW]{1RbDapGi,zc.<T*SOpujSi;;iMfj?1<#w+N& 2<+;<RCum4q' );

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
