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
define('DB_NAME', 'wpportfolio_db');

/** MySQL database username */
define('DB_USER', 'root');

/** MySQL database password */
define('DB_PASSWORD', 'Markchris01');

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
define('AUTH_KEY',         '8BB[nD)P5NBI>j[U`GC1iE+E(p_eH@tfB8glvya!,|=bMg#X,*R{w3@wLP*wYKdr');
define('SECURE_AUTH_KEY',  'KhS8S*(k),@xYrbHw;-e!:k:$Qx8VHKSEKda[N>I~ADg#6gM-:j/lJUW,S~gG6e8');
define('LOGGED_IN_KEY',    '0^eEh/1WSKLc2XiA2DGds7#tBmx@*vQ;!p4^zmt7+U|)*CZT{Z>Y?15yZ^cGeM+n');
define('NONCE_KEY',        '=X%$KM{2Ow!m6.rw]0lyW`Kle`Hu47m#AQpoX*4l]7Eqm9e=~>A/}Z@ iXN>8ChU');
define('AUTH_SALT',        'YOMssB`8@@_<[Z4J*_1FLoTev+|FI:J X2Hp#}W(I72Vo9>[>L]XEf:3y}whOiVt');
define('SECURE_AUTH_SALT', 'slQ*od#f&P _#@$}v|iY-ug@!u5U#Da=nmZ7EQ`ms2$h9osP^L{( (O$;W{@Gl&2');
define('LOGGED_IN_SALT',   'lwx]|fUFqGUN`nwcyY}:!85=m+N#w%gcr.%z6ofZ$B-JF*S<m]+-m7}Zn`)f,2ji');
define('NONCE_SALT',       '1V=:3t2RYjEjRU!9gx]]y2d?Gp!@0]![=ryCJS.E2rr]nhkmAx)C,s~vE.AQh3H!');

/**#@-*/

/**
 * WordPress Database Table prefix.
 *
 * You can have multiple installations in one database if you give each
 * a unique prefix. Only numbers, letters, and underscores please!
 */
$table_prefix  = 'wp_';

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
