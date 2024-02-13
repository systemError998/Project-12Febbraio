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
define( 'DB_NAME', 'wp-project-1' );

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
define( 'AUTH_KEY',         '~1^g$QK.>|>egst%(6~1/4y^#]@Zs1>f{&)nDKqw1GjOc@<[!.9RXo,e6tEgTcYE' );
define( 'SECURE_AUTH_KEY',  'E5vXM zlqrcqQ^zLJfc(9,SCu(yg78lT%^E$Njl8_B!i`kj*H#W8AFjWV?^W`.[n' );
define( 'LOGGED_IN_KEY',    ':}AUw``9e5Hi{qA8Le6GOC,0(YN3B`MUfp2_P:vS+g^$p7zx-5%K)>?5PtU-/1Q3' );
define( 'NONCE_KEY',        '3I(!re0C-#ahN?>FZ-9NB/@@W%vz21Pz(P226$c[?,1nn|Ga}NH]Ssu]*)t-1,6G' );
define( 'AUTH_SALT',        '8SX*+!nMXrIHE[v&+m2F&?pHr:|/hi49A@^vhQ4vbgI1_ki/_Ins6yYw{Fg:zz#&' );
define( 'SECURE_AUTH_SALT', '<do=26&/K02l-:RV#7f<<z`+3 ~8B:U``=o.t-5AU3J)0WEVEBCbnwq9P9*N>yVz' );
define( 'LOGGED_IN_SALT',   'iW<I1nZdw@S]0hgJ<cXH}a)]>IIEU1g%u6P}4b=D2jN69*APsENqxGjeL1C5RI`U' );
define( 'NONCE_SALT',       'rFPvS/c_}t/3XWV]}v@%$hwvG~`-_,OeK#C c+}-L|E?7f*>h=o|T?vrCKzW*x1e' );

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
