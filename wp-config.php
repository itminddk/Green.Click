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
define('DB_NAME', 'greencli_db');

/** MySQL database username */
define('DB_USER', 'greencli_fa');

/** MySQL database password */
define('DB_PASSWORD', 'y)5KlHND!M70');

/** MySQL hostname */
define('DB_HOST', 'localhost');

/** Database Charset to use in creating database tables. */
define('DB_CHARSET', 'utf8mb4');

/** The Database Collate type. Don't change this if in doubt. */
define('DB_COLLATE', '');

/**#@+
 * Authentication Unique Keys and Salts.
 *
 * Change these to different unique phrases!
 * You can generate these using the {@link https://api.wordpress.org/secret-key/1.1/salt/ WordPress.org secret-key service}
 * You can change these at any point in time to invalidate all existing cookies. This will force all users to have to log in again.
 *
 * @since 2.6.0
 */
define('AUTH_KEY',         'Rq|Qv(|dT#SVGYz~vA<Z:/Ju/&e43f38p+=H5sfyXGoa[t%|~&B[6&cLdn1}{z?7');
define('SECURE_AUTH_KEY',  'Q+?^}}6#KM:j^ZFZcZX??`X [Y]Jy,2HFT6/+V-kr-L^xy.y4Clx$11=aow6GnKE');
define('LOGGED_IN_KEY',    'kp${/{m&;d-|AqS2SjV]A7=-=GjS4#[6qn.&A0ZzsqN:f.<f`!Auw7lmc9THz!qR');
define('NONCE_KEY',        ';_>c#w3f-K|O#:/2eo~Tesx.R1n}WY1dF]l|)n#=+ |E+~zDQ+fq8TBxmxniUH/.');
define('AUTH_SALT',        '-+,CVj~+ q^rH4|hoe/u kGTusF_ i|+ MpkSix=ClW8V;CyuqXbT;|l,H*O-x.@');
define('SECURE_AUTH_SALT', 'U*4X]bk`4$$,+eg,(hUDvUM%*~!gbo:h]M3p|]8+m24`<`s_[_io#.WE`M5{:w$#');
define('LOGGED_IN_SALT',   'u|qAAL6C&Aq.L4XDV%l1Y|zW9e*n<^q,~ynX11cS&T:cV&x3aIjneto+l/G<Iz+w');
define('NONCE_SALT',       '-PI{|BS*cU4osG8=MxAm V+f*. )ay490PWC*e8Xd29|-e @mTid31y_sNTCj8C+');

/**#@-*/

/**
 * WordPress Database Table prefix.
 *
 * You can have multiple installations in one database if you give each
 * a unique prefix. Only numbers, letters, and underscores please!
 */
$table_prefix  = 'gcfa_';

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
define('WP_DEBUG', false);

/* That's all, stop editing! Happy blogging. */

/** Absolute path to the WordPress directory. */
if ( !defined('ABSPATH') )
	define('ABSPATH', dirname(__FILE__) . '/');

/** Sets up WordPress vars and included files. */
require_once(ABSPATH . 'wp-settings.php');
