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
define( 'DB_NAME', 'landing_page' );

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
define( 'AUTH_KEY',         'D(f`.GrvS&Zu,;,k}rS>+j;+?X$rfFb(k9R1Prv@:xuyvIgVv)#X][/mIw>](~1B' );
define( 'SECURE_AUTH_KEY',  '^2PAX,(qts+Rz+cle$AkCRH0(FS^wrR,(]ckNeDo9&b`251y#RAE<<iqVwLTZKCK' );
define( 'LOGGED_IN_KEY',    ']Ov?bl.G13s*x{AdZ&@a/8+bWavHi[iC|~T(Fles*`jbZjMrcN4;f]3,ZxZ?}Y[(' );
define( 'NONCE_KEY',        '/yPMqBz;)f80<|; pt~n2SDq4@bXh)|w<W1i]Y$C Uc^8;,XC@q.iJE)#Z&b _|f' );
define( 'AUTH_SALT',        'jfncYL/LX@YQj)^c<EeNNDe-<dJs` Hy3Q.j`j:L#:IA+3|*sL7NUO@CBmc!(wFu' );
define( 'SECURE_AUTH_SALT', 'f}_KGQ9cjNC {H)QehZ5n P,Qv:HynP9*;$]ymqmpxgb)7]l~#[d+6ccJeN-:zt+' );
define( 'LOGGED_IN_SALT',   '/AAn5{m,](/WAp*x_D[S$g{JFQ#fTl&w68kMm#G/te>h*gZG|ddZrtsuBY*9f1J%' );
define( 'NONCE_SALT',       'hI}l 2zQ3x*p_@[)kD|#3GgzsKWuIX56>|Lk7UE[PJc7Djyb]wY^GLfg^dN&TR4L' );

/**#@-*/

/**
 * WordPress database table prefix.
 *
 * You can have multiple installations in one database if you give each
 * a unique prefix. Only numbers, letters, and underscores please!
 */
$table_prefix = 'gvn_';

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
