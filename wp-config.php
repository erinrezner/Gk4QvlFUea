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
define('DB_NAME', 'MoBrLoGoKart');

/** MySQL database username */
define('DB_USER', 'beentoolong');

/** MySQL database password */
define('DB_PASSWORD', 'vGaf619~');

/** MySQL hostname */
define( 'DB_HOST', 'localhost' );

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
define('AUTH_KEY',         'f~f[5$RlA?n+VjL5S!Lsc~JLL0$sH@Zey0?2s%B:4}E~9?3P3uY-I 4g+VW(|WAu');
define('SECURE_AUTH_KEY',  'en%A!}pPCo3g)1PWI;~N>J9}O[{}g?BNn 7OZq2({eWo(=-h5qN,X9eo;V nwMGh');
define('LOGGED_IN_KEY',    'uI.j]JoxA:I3Q>ZBw<06fj<k/XR+b:lAA!r!Y4Vopam8.&(>A*eJ-yL&H-o3@f4T');
define('NONCE_KEY',        ' `.@+^Wj6&@P5{!]u,&~]781T!mHPx^U0p|%L.WF[b6Cq6V.cr{AXr:MoCV-hPu?');
define('AUTH_SALT',        ',|Y#SvR^-QVBQ<^f(U6z7gV.NiVj/<@?|6x-SIJ+kCUwo!R]$c0t]`PX;|iT?4;l');
define('SECURE_AUTH_SALT', 'J:cU-j61`WTLEM4AuJ0S&-7[z`FFy$X@lPc$ v_HgzK;4/J4jDCZUo1@{Y{cI_3u');
define('LOGGED_IN_SALT',   's:9 ^o1gISm3_L}QUx=rg+7ayCVarR*m mp!L7Z{+VnqA:AE[S;-:Q%.]YQ|;B0Z');
define('NONCE_SALT',       '4]|%(t&!(* ~p,n) 5x:k<Ny;rnF6iP+>.[vFa~f@_?`A1f::5:f7?<hVba,XHc9');

/**#@-*/

/**
 * WordPress Database Table prefix.
 *
 * You can have multiple installations in one database if you give each a unique
 * prefix. Only numbers, letters, and underscores please!
 */
$table_prefix  = 'kart_';

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

//** How long before emptying trash */
define('EMPTY_TRASH_DAYS', 15 );  // 15 days

//** Autosave limits */
define('WP_POST_REVISIONS',5);
define('AUTOSAVE_INTERVAL',120);

//WP Super Cache
define('WP_CACHE', true);

/* Auto Updates */
define('WP_AUTO_UPDATE_CORE', true); //core

//define('WP_ALLOW_REPAIR', true);

//define('ADMIN_COOKIE_PATH', '/');

/* That's all, stop editing! Happy blogging. */

/** Absolute path to the WordPress directory. */
if ( !defined('ABSPATH') )
	define('ABSPATH', dirname(__FILE__) . '/');

/** Sets up WordPress vars and included files. */
require_once(ABSPATH . 'wp-settings.php');
