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
define( 'DB_NAME', 'wordpress3db' );

/** Database username */
define( 'DB_USER', 'root' );

/** Database password */
define( 'DB_PASSWORD', 'namazu1708' );

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
define( 'AUTH_KEY',         ':LZ(3u,2tdrE5Mz#YOV@EU7GLXKs|EN$ap.In_/sFBOisT#SWRst:QlT~scs{Iv/' );
define( 'SECURE_AUTH_KEY',  'y1Md2%Qy)3@5QK87V,J<A>nIe>0-Ny*R2aBq<RtitY]QJAl!m<&4dg)xZn?<OiNe' );
define( 'LOGGED_IN_KEY',    'dbaxM.=v.i;6mc/35Ywe7096<dWrjE:10YtS6D[a6[J<Rdv[R1PyFJhc~W)(5OLk' );
define( 'NONCE_KEY',        'WuP*#p&)9Ad@qbU`v[M)71d#%MkOvTjX[DUNGTfgKX,%a]Q7+|3]B_5NM[]Er=>}' );
define( 'AUTH_SALT',        '}gzYh}~#:3~`XM:FMx]}g+3c5h4?O@J>|GL77CQPvu-oip[oJmWrTm$n76<%u>!L' );
define( 'SECURE_AUTH_SALT', 'L&*$yaw>P/nfBT)R~w@jX3,zTv>&m6#|A(P]$> cVp/-K|8aBG#ZeRhWBJCd)ng%' );
define( 'LOGGED_IN_SALT',   '=Wsaf.|wF4~3D?iXC46@wO/XP~01lbs8sp{EQteJvQ?:cp$K}r_5tQ9qZ@}p4^YL' );
define( 'NONCE_SALT',       'W,i|[dd7oWrnOY;6zZ5Oxc<LKMqy>V| e_-o#1fxKqt;};TYQ)Ij@%j5n]?ekAW?' );

/**#@-*/

/**
 * WordPress database table prefix.
 *
 * You can have multiple installations in one database if you give each
 * a unique prefix. Only numbers, letters, and underscores please!
 */
$table_prefix = 'wp3_';

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

