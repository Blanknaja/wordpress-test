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
define( 'DB_NAME', 'wordpress_web' );

/** MySQL database username */
define( 'DB_USER', 'root' );

/** MySQL database password */
define( 'DB_PASSWORD', '' );

/** MySQL hostname */
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
define( 'AUTH_KEY',         'YDx_Su3xVjVR2a8YbKmai*{Uv:G%7K,1%bNp-VUi|8mEQ|qj6w3 F_</e,AXD@@>' );
define( 'SECURE_AUTH_KEY',  '~SZ95i7Unx=]|K-#2Us:t[MGmE+jFKwj;,n^y=v)-64&Lj`NY]LPjY*NmE gPd.p' );
define( 'LOGGED_IN_KEY',    '#=MnAr&tV)6nl7A`^HQIz*[Ui&2|wC&]E/R4MyJQaA%B_C4su44hP-B|pg&tq74P' );
define( 'NONCE_KEY',        '^A)7:qrT;/{Z3^Y&`5x<t9,X#KL#JP{ZOR/_1aaU[^3?aM KE^DqHdBIRg&@,7R8' );
define( 'AUTH_SALT',        'L72Q8J%?({gFP1i 3:o4CO .:9H@$p;Xcgg%/,`[j L= BynSO6tdf$/o9k?h&#l' );
define( 'SECURE_AUTH_SALT', 'pkd)9!i!dn49`cf-HRGne_G%V#FyQLFANsM/|G})ysq9VQElR)$EVyp_6gEnCajX' );
define( 'LOGGED_IN_SALT',   '#8&i@RO,8%H`)[Ll5^OO oI#:=:KS T*rs*NgKrtIQmeI0T.Z[&3&|XFnq_g[{^/' );
define( 'NONCE_SALT',       'X4h{]aCKcI/9NUt.t}+.?-64$AvYu*kxrEM^#@%1VTh}EIc=vB$$>L/w.;G$Z qC' );

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
