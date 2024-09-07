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
define( 'DB_NAME', 'wpabd' );

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
define( 'AUTH_KEY',         '1v6U?~bnk+A-2sf@=dM&Q-AI)zj8n<5$c03}N%<[~@8*9bBUU3~&k-D5naaf+_cN' );
define( 'SECURE_AUTH_KEY',  '6>b cZ(l,+YQ+8nNYI{CNj*6gTfdlEJ(xm@Ejo$e&^Y`~!;C6*As)B;<,w5FXE6U' );
define( 'LOGGED_IN_KEY',    'xAR/MqtNaJd`1uXA2,iSO,yI3|JH^,H(zk&8Y&~$!OWFp%*c4<i$NT,H_AUM9m92' );
define( 'NONCE_KEY',        '#MLayPXXQ|mB>Dq(43`5:=})B~AWo7&/%$LNRMbA(B!t($$^:t6txhPaGh,&fg+p' );
define( 'AUTH_SALT',        '-)Z$Lw >LU0Pf956@PN7_F7jF1X`61mn[FG.3S0E19;Md(2yjgS7ndUoe1{I{F>E' );
define( 'SECURE_AUTH_SALT', 'OlWpyfo/1%j`Yi.RHabqdv+KgbQ`T=~76]ZCawrB%y/4! ?oEKEwjWy&GZpyUFLE' );
define( 'LOGGED_IN_SALT',   'UD4k>A_[F3Bb6?O1(kdmC)5.ID|Q.<{3AH&4>UTV.oiIhd!A6@iP&KgT#O^A+gjZ' );
define( 'NONCE_SALT',       'yOjDsU({Q7SH&%U(?bIU5nGW:YKRNYm`F:Ah:)w(#1[i?-9V$*j)66X&-t>9e(@}' );

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
