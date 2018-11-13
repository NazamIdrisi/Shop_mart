<?php

// BEGIN iThemes Security - Do not modify or remove this line
// iThemes Security Config Details: 2
define( 'DISALLOW_FILE_EDIT', true ); // Disable File Editor - Security > Settings > WordPress Tweaks > File Editor
// END iThemes Security - Do not modify or remove this line

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
define('DB_NAME', 'shopp');

/** MySQL database username */
define('DB_USER', 'root');

/** MySQL database password */
define('DB_PASSWORD', '');

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
define('AUTH_KEY',         'mQlzO{F-Xg}#qAC-`E~UEgK;uw{[YW8@G%)HrUcmZl?2/yv{Hz2s[q3A`SIfr$to');
define('SECURE_AUTH_KEY',  '^IOQYbh|va@BX)ZRf1XMz2>*o8Z=DtQA^`>/FX+zm!WN@vo 8c-j=}k&K#;pP<|%');
define('LOGGED_IN_KEY',    'xJcH)1h*sV0fySpaFhkq(Z{%|/l?Ol)a70w&5|}&IX~>]SBc;pGJ1*2Y*e0ATiu=');
define('NONCE_KEY',        '.S3JyVOQoaJ5# B#Ek)x@n|yDk{(y>W7%QsucZF1*)[lBUyG7s0$V|82b}?Rrjy~');
define('AUTH_SALT',        'G#s2<D)LGgiaiHzJV0M1^k3,09$OElK[g45tQX=],D.l92:3mDe]3qylu);)x8UX');
define('SECURE_AUTH_SALT', 'C=i(SP<tXSasq*<ruV%[BFFcKCbbO-.<d>HjVpd8[ML8Q0;}r T&H@hVL_HB0et,');
define('LOGGED_IN_SALT',   '0uI0@;<QPa.[n~k^fda0NNOqsv>o}]}?Gv4uW&si-9&agv8>f,CGIg{$EZ%#sun.');
define('NONCE_SALT',       '|Tk7|s))m(>y]}_vzo<:9{-0Xa?8ryebapq>x$@MP]oeJ|Y/,:;|Mp*upZ+;shA,');

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
