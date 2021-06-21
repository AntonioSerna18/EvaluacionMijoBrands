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
define( 'DB_NAME', 'wordpress_mijobrands' );

/** MySQL database username */
define( 'DB_USER', 'root' );

/** MySQL database password */
define( 'DB_PASSWORD', '' );

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
define( 'AUTH_KEY',         '(+@CcCax%E=~oOmfJ=5h~DSA-+3$05_6BP|&_z<Jn 5WIHd=3OU^Pa,>I^Ew%ecE' );
define( 'SECURE_AUTH_KEY',  'o$fYHFOw0Z?8,?+T1qm{(JQArodMet2/}7v[P2fd)qLrNq42fIzzoV26[5?Fm <R' );
define( 'LOGGED_IN_KEY',    '!N&2L*h5^!Qy`gX<r{Ny$-2s%}24*I <7PZm#z(KN`C{&9>MwCdv8]S0jyR9WwIx' );
define( 'NONCE_KEY',        '.u0~1Qpz<Q/.-5hv^o1c/d|37Rl>UUi8{?JjghG5jX1:n|_zXpE?=;FI:*_B$fyC' );
define( 'AUTH_SALT',        'l`jSY#.Bk:7)On{5^x!|O_O~:|9iaK?>2xcs8(qWKGYTfQG^]}(Jq06D.HqwjDnI' );
define( 'SECURE_AUTH_SALT', 'N.=qNeH#G67h;id[CP9|pi7)]AzP*=l0o*Z 2qmKwOI}FYJ]1Gv}=ad~JHV)k~hs' );
define( 'LOGGED_IN_SALT',   'yVU~-E|!qNPWv0;l>3n4i]IXp1=Pyk9l|wJ1/MMQX<;ZK1f]B:REF6Xf}_adMb4}' );
define( 'NONCE_SALT',       ',UJ0Sq+MTz=$Q5)`miq-C{aZ)=q]}KZG(k*Z^:DN(3g4hb`W}Y39*Z%*w7NkD%#O' );

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
 * visit the documentation.
 *
 * @link https://wordpress.org/support/article/debugging-in-wordpress/
 */
define( 'WP_DEBUG', false );

/* That's all, stop editing! Happy publishing. */

/** Absolute path to the WordPress directory. */
if ( ! defined( 'ABSPATH' ) ) {
	define( 'ABSPATH', __DIR__ . '/' );
}

/** Sets up WordPress vars and included files. */
require_once ABSPATH . 'wp-settings.php';
