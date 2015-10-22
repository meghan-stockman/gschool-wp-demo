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
define('DB_NAME', 'larryvilleblue_wp');

/** MySQL database username */
define('DB_USER', 'leslethal');

/** MySQL database password */
define('DB_PASSWORD', 'Love4lb!');

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
define('AUTH_KEY',         'Dy86B`L3[s[6tA*ns_BZK1|+wb9D6IEeyU*P:&-{}pCQvKtlEh6GQz-/4$rB0U3$');
define('SECURE_AUTH_KEY',  'U85-/EE+K60>k2 QSb|Sy!#VjU,2o?B(tr|r%jmS+5N%dSs^iJw-t/-$_*fUH7@]');
define('LOGGED_IN_KEY',    'q[SicvA/mw/J&n0#Qv]-2,2b-qic.!<TMoM=NXSzDi7x221|UWL,NgKgJ^:xqwXc');
define('NONCE_KEY',        'r1R!IY}gXQ>{qW2YtNz<~Fa+R7Nq~Lt&tp:3|*u+o_-ZM]R82T5%G1@XQ?}F1srR');
define('AUTH_SALT',        'I_@x+9Im 2YVJ34(p?F~2opE2laR5r#-5YHxxEz,`SUbd<?N_+L]^NGPjgD$8m_.');
define('SECURE_AUTH_SALT', 'xg.#R[E=E8!bf&0xx)0)pF5%I4`HnR:sv#8m[UiE0Sx[?ZudkP}t^6li<_{dNs#4');
define('LOGGED_IN_SALT',   '~dg`@$U`}7^||r0g+*``df5rq+]a9thGq&>!UD`jfYHWc&9q5n+aHd_NDw(U~g|i');
define('NONCE_SALT',       'Twxr<BGiR?S5_;xU(EJvI]1`^/mNsH7;#j+.w%{L8jdYff^ejF{5e~!$`77eKac<');

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
define('WP_DEBUG', true);

/* That's all, stop editing! Happy blogging. */

/** Absolute path to the WordPress directory. */
if ( !defined('ABSPATH') )
	define('ABSPATH', dirname(__FILE__) . '/');

/** Sets up WordPress vars and included files. */
require_once(ABSPATH . 'wp-settings.php');
