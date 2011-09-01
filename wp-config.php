<?php
/**
 * The base configurations of the WordPress.
 *
 * This file has the following configurations: MySQL settings, Table Prefix,
 * Secret Keys, WordPress Language, and ABSPATH. You can find more information
 * by visiting {@link http://codex.wordpress.org/Editing_wp-config.php Editing
 * wp-config.php} Codex page. You can get the MySQL settings from your web host.
 *
 * This file is used by the wp-config.php creation script during the
 * installation. You don't have to use the web site, you can just copy this file
 * to "wp-config.php" and fill in the values.
 *
 * @package WordPress
 */

// ** MySQL settings - You can get this info from your web host ** //
/** The name of the database for WordPress */
define('DB_NAME', 'wallofawesome');

/** MySQL database username */
define('DB_USER', 'root');

/** MySQL database password */
define('DB_PASSWORD', 'root');

/** MySQL hostname */
define('DB_HOST', 'localhost');

/** Database Charset to use in creating database tables. */
define('DB_CHARSET', 'utf8');

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
define('AUTH_KEY',         '>gfBE>a;YxT/~6K4W;L]DfEwwU$-+E|S@Z7_b7-PCQa/~FDZ0rI=V{_cB6F)0qXu');
define('SECURE_AUTH_KEY',  'rL~^N+J,Cj=LS^-Y*J-%nkpQ=4{/ ki18pHeTw9xZ9W1-?Qs}]<R~/]xa^7mwpvN');
define('LOGGED_IN_KEY',    'zx5[5mt-Z)+&JmK,Ca@[a CWBcgF@i ,^@dy.%SX2[&:>8Wl:g>5,sK#!%e$,YqK');
define('NONCE_KEY',        'kF5n4H#GHn7y:9:|wtbC. 7cRREqs?IYA5gR14CsTu|K<>| P*h~F8@A+<=Blol:');
define('AUTH_SALT',        ',3U<kq):19[:.zVEav$F^vl62qdu9i+K;[gj:^p::xMv}Q1;Dm62Xjd:KaIqft4r');
define('SECURE_AUTH_SALT', '81hk@@FOTyX%rN=B{EOOT<5t)x*_zZz4&yfOe]G95MIJe*B0V<ra3@9&^heDEyC;');
define('LOGGED_IN_SALT',   'h194(%,Pb`[f2#{FVslKXujCH<*QWkV>Uo!rqD#ni:^sXp:B7=^HSq^OVKa*#hX3');
define('NONCE_SALT',       'p4QZ:/Y|R4/fCf,8WRs3(]8Rv&`?`gFt%{t3b,kwurl$FY<#Tjr_N@7W{XU~A#nU');

/**#@-*/

/**
 * WordPress Database Table prefix.
 *
 * You can have multiple installations in one database if you give each a unique
 * prefix. Only numbers, letters, and underscores please!
 */
$table_prefix  = 'wp_';

/**
 * WordPress Localized Language, defaults to English.
 *
 * Change this to localize WordPress. A corresponding MO file for the chosen
 * language must be installed to wp-content/languages. For example, install
 * de_DE.mo to wp-content/languages and set WPLANG to 'de_DE' to enable German
 * language support.
 */
define('WPLANG', '');

/**
 * For developers: WordPress debugging mode.
 *
 * Change this to true to enable the display of notices during development.
 * It is strongly recommended that plugin and theme developers use WP_DEBUG
 * in their development environments.
 */
define('WP_DEBUG', false);

/* That's all, stop editing! Happy blogging. */

/** Absolute path to the WordPress directory. */
if ( !defined('ABSPATH') )
	define('ABSPATH', dirname(__FILE__) . '/');

/** Sets up WordPress vars and included files. */
require_once(ABSPATH . 'wp-settings.php');
