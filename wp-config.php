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
 * @link https://codex.wordpress.org/Editing_wp-config.php
 *
 * @package WordPress
 */

// ** MySQL settings - You can get this info from your web host ** //
/** The name of the database for WordPress */
define( 'DB_NAME', 'java' );

/** MySQL database username */
define( 'DB_USER', 'java' );

/** MySQL database password */
define( 'DB_PASSWORD', 'java' );

/** MySQL hostname */
define( 'DB_HOST', 'localhost' );

/** Database Charset to use in creating database tables. */
define( 'DB_CHARSET', 'utf8mb4' );

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
define( 'AUTH_KEY',         '^c!2D,$s5|Tq$${ZQdd9G}e3VPq?M>lv%TZ^,>(!7=lW!d*jlhB|Y~jb,xv&k,/y' );
define( 'SECURE_AUTH_KEY',  'mMeq*NXVZBNkPJF#Ye:.SlX^ w:WYr=t9_|*z!+~qlB_YLQzN9@kY^TbeGTgBcf*' );
define( 'LOGGED_IN_KEY',    'zfiO<Ie?hKH?$-b,<l7E4 YrqBGMrtgEbxx=191Kp7SVMrMg_X~,_fn/85Q_nELX' );
define( 'NONCE_KEY',        't!Mf^Yfa!D;cC3gH11x_1C~,Gg#Ph:<i_^M}p/NGX,%rQ,9.L=S%s.0P,l1WV!5k' );
define( 'AUTH_SALT',        'I VnaBaD3[.)x~eXIb,SkLb|nxl$QqE[C}B~LFD&l^YzQpL1}{ppB]y9[rB,y*-/' );
define( 'SECURE_AUTH_SALT', 'nm7Z03Qu]3kO7]p)hO1^9I50_9@t;>4!{d&762bo4BW,q6LNy[RJ^Fw3iCic,<Dr' );
define( 'LOGGED_IN_SALT',   'h+VD/p|351ED3T,6r/J:`iPV#34oN]bVA_-$;XM&.Q/Zhz@?6I -`vrX/IhN^T/q' );
define( 'NONCE_SALT',       'T*?0Fk<8j8fVork){eQcgq+7>w4}%Ka7DHa 6)9;.N&[*%nj7uF@Wm09kV=3|?!1' );

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
 * visit the Codex.
 *
 * @link https://codex.wordpress.org/Debugging_in_WordPress
 */
define( 'WP_DEBUG', false );

/* That's all, stop editing! Happy publishing. */

/** Absolute path to the WordPress directory. */
if ( ! defined( 'ABSPATH' ) ) {
	define( 'ABSPATH', dirname( __FILE__ ) . '/' );
}

/** Sets up WordPress vars and included files. */
require_once( ABSPATH . 'wp-settings.php' );
