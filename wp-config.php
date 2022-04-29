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
define( 'DB_NAME', 'mywebsite1' );

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
define( 'AUTH_KEY',         'HuU+(+ivE5CMHd67Z`<P4xtz,X p1O1hf5O)Ze<$}S/Nl|JS(>YR1i]k0&M>hrD;' );
define( 'SECURE_AUTH_KEY',  'i,%,h:V7F/GKgQz)jOXXzK],WN^CD:pn OmU05?zQ@!CP1[9&r|]n.ev)?:`yy }' );
define( 'LOGGED_IN_KEY',    '-^l8}yd>532~%)*dhH%d)&*9LXNnB@9/q,{/{Bu{C9,0N<~>p07hW+~8vXrAnh;^' );
define( 'NONCE_KEY',        ';v<==}4!AcWdhgf8t(BzWkSHa$ U[V*Gh`4%Ds}IOsGh(4I}?I,AB(|L8%c dQS6' );
define( 'AUTH_SALT',        '%M,xZ?|*ybH>;?B#>4jSs5V;!U3ok(BRO(fgt<5z*I4_pl@71+qWiF=>3lr=j.`/' );
define( 'SECURE_AUTH_SALT', '8O7I>W>X)lq(2}F%FSqhAQg!qST**0 Sx_(;_&o|I%wPcuk/xTQ@w,iOV/t~FBmv' );
define( 'LOGGED_IN_SALT',   'yrkps14{/?Y!f.9bH4Lw3x6>rn;>+aag*yhU=pE-A2>M$HPVY&r~[hroSt%W8QEm' );
define( 'NONCE_SALT',       'MV~];qbG[I<(#|F0C4DaBJm9>KDA{JabfH }1MwSQCK3/aVvf$7hJR9FZGqH+g`y' );

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
