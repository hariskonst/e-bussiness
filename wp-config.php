<?php
// Begin AIOWPSEC Firewall
if (file_exists('C:/xampp/htdocs/wordpress/aios-bootstrap.php')) {
	include_once('C:/xampp/htdocs/wordpress/aios-bootstrap.php');
}
// End AIOWPSEC Firewall
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
 * @link https://wordpress.org/documentation/article/editing-wp-config-php/
 *
 * @package WordPress
 */

// ** Database settings - You can get this info from your web host ** //
/** The name of the database for WordPress */
define( 'DB_NAME', 'wordpress' );

/** Database username */
define( 'DB_USER', 'root' );

/** Database password */
define( 'DB_PASSWORD', '' );

/** Database hostname */
define( 'DB_HOST', 'localhost:3307' );

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
define( 'AUTH_KEY',         'N8F6Q7&p0?+eR]*Vq2&/W?59?^V9}4`-e@Cp~.86W~|b|FM/WtS~l/5x)1V.6O)t' );
define( 'SECURE_AUTH_KEY',  '(.7%))[G{K5e-s~w6qT@&A#/f; Y /o~qnZ-EXV+3_GikM(=Gq7%s}kVkE6Fl7<n' );
define( 'LOGGED_IN_KEY',    ']Wo0H+5(d)]h}nC-zSic-nTK;8.qMzY>VHwp4JK/5ytqN;Es?7CTbr^WL CH/:0f' );
define( 'NONCE_KEY',        'C0X[@hL,*oop?]PQD[tah=eOps,y f M4$MF?Fxl[Zrk:|>EGXVPuAaZvg&*~<1`' );
define( 'AUTH_SALT',        'u&>?}%bf(c<Dr]E)huK[W1/Ohc_:^mA5gQU}42nAF|;d2p/T~:0vG`$~Mg1QbhbR' );
define( 'SECURE_AUTH_SALT', 'F(,mM*^7<6xRoHQF0:lX`KveXn]V</Jc_&}kl7?<] K-]s0_9_P<8GH,(829Vepm' );
define( 'LOGGED_IN_SALT',   '`9Bb.JR0uV#1|2WV$S7D*?eHiKd~b=|U+JVh){,9f-ya+%^3K&0xmC$>-<S!(#,{' );
define( 'NONCE_SALT',       '*Mx)(D+M5@*$R{{ZQ<Dd[ZS9Z7v*FH4R=L(y&)^DhNqFvR/[d=J>HMSm9w8HdXtB' );

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