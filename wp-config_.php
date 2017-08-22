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
define('DB_NAME', 'accelerate');

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
define('AUTH_KEY',         'n];>1wWdvH1mdbWk)9z/0zQlEB{*<[TgN{S.*x ^`cmMh23Df?bzhjLfY9(&ej^{');
define('SECURE_AUTH_KEY',  'm)=Zv`u2_TChp-{_Qk{q(j)]-eO`[Wcl5`2.bwUWem$p#:3R!%_S{+O/:qzoz>si');
define('LOGGED_IN_KEY',    '{s:rExk+kZt@]pD(k+M4}R9Zs/3K+%C&C`77`nNSuMqSx]9X/8|yP;58v?YDkcu~');
define('NONCE_KEY',        '5kxh38N|).~yi qh9z:p9Hel.lYv0`c[oD%NjZR=)l@We^]cRo`i5T*5]~3E&=)/');
define('AUTH_SALT',        '3/R2SOCay%/0t@$EVz0+~ *Uv2@&P/TMkN|r)SFVt6kwO_y^<_D~R&<{J$2&!_ed');
define('SECURE_AUTH_SALT', '1$ph#%RuuJkV&lc@)EzjHdBe(+y;A)T jKKNK3z]LHn4 )qe&~_P4(#:o{<`HClO');
define('LOGGED_IN_SALT',   '&nAT!W?yzX5k0nZH(D$1|`_+w[k6%($]$F1x,yH2](GnEU+YEV#e,]&ttEz<-%Wk');
define('NONCE_SALT',       'OvCk}iL9fj>aZDDN9.MmA!uQ*.,K~}A&n7OLEY8ea;=~hq*VYe9GSI5Ari|d2(qD');

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
