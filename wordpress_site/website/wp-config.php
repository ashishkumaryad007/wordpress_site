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
 * @link https://wordpress.org/support/article/editing-wp-config-php/
 *
 * @package WordPress
 */

// ** MySQL settings - You can get this info from your web host ** //
/** The name of the database for WordPress */
define( 'DB_NAME', 'training' );

/** MySQL database username */
define( 'DB_USER', 'trainee' );

/** MySQL database password */
define( 'DB_PASSWORD', 'Tr@!neE@123' );

/** MySQL hostname */
define( 'DB_HOST', '45.64.11.3' );

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
define( 'AUTH_KEY',         '1+AFg.cq63>(Y=.mNzaO6`w]{Nu!:zdp#7@4U/za>Y:oSLsxDJ29MKp^1OJ[F4aO' );
define( 'SECURE_AUTH_KEY',  'DOV@BW`KaPQjG){_UxMha|XCkHKY1&hfX`=d>+Mh>&)T1iUl0uyCb^0)krc<Yd_J' );
define( 'LOGGED_IN_KEY',    ']`0<Ie}]+&DmBh$8/FEm[X^]%v9.GQi7qeos/E7/@5-B%x g:_[mSCd*UXTEQV(1' );
define( 'NONCE_KEY',        '701(S^MS#[V@nfu3Gu_D,^Xm+=fj|n{aNHQKcn9Z.S_uInDLhiDUF#Ls!M?m/f7B' );
define( 'AUTH_SALT',        '_Z0Q_2npT-a,|<R`l2(4oE.c)SXO^Lr<{@bD@Rs,v(Q1d8:dm-/BZ@%1Xl,R(I+~' );
define( 'SECURE_AUTH_SALT', '9 <a?4!V*~_3bndVpSne[zx7*kIwFJ}V7u91OV-aJB[u4B/!GQk0`Csz7R1s|g}@' );
define( 'LOGGED_IN_SALT',   'oX7~nGI6v(>e4!_B^#xv[3-wDQS=GPcqIj/#>59_aZ(rUB^&R;s^B^e$8G.cF>uN' );
define( 'NONCE_SALT',       'L4csu??sz#7Dfly0{kPi<E_.J[d>0Dq,xb;dM>=cpo~&zPPhHQ<%DwYT !MXJ_a7' );

/**#@-*/

/**
 * WordPress Database Table prefix.
 *
 * You can have multiple installations in one database if you give each
 * a unique prefix. Only numbers, letters, and underscores please!
 */
$table_prefix = 'wp__';

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
define('UPLOADS','wp-content/uploads');
define('FS_METHOD','direct');

/* That's all, stop editing! Happy publishing. */

/** Absolute path to the WordPress directory. */
if ( ! defined( 'ABSPATH' ) ) {
	define( 'ABSPATH', __DIR__ . '/' );
}

/** Sets up WordPress vars and included files. */
require_once ABSPATH . 'wp-settings.php';

