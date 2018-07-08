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
define('DB_NAME', 'wpfilms');

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
define('AUTH_KEY',         '@m9Fw[,y4,tW{u+Gi&^*c=+Ml?poW?BZ.jk4!L$7sG&s^&-+)1oeOTYHndA)}``m');
define('SECURE_AUTH_KEY',  'hi1d~v1@9.l:=K=*kisxOJWLOTF0mY,t_[`Z.r5(Q$ck)v$`7k[lOB<%82kS%DIC');
define('LOGGED_IN_KEY',    '02MU:UrQG?j1p2zTlI34*Fh#B24R>h&1DnI#7b)fe5{x_Ir!x)<8t@!an.EWwZk*');
define('NONCE_KEY',        'K,]3;o;?2X=>:j>CatUT{//<@rcwQWd5x2xF}L<lF7QmQt<OlwL_dA8!DBhB3iWb');
define('AUTH_SALT',        'mjquBeCrytW#R<J!WxLL4>]DeX=|@6G8ASGDgLb4tC!T]>@FUn-R2^J4Z|1,kJ>c');
define('SECURE_AUTH_SALT', '7b#=>4ZysDMUQ7O|UrX.ZillP^{j:L><5]@J4`PoBD*pXefee1#k;GQw?;T< *R/');
define('LOGGED_IN_SALT',   'Y,SPDZQ&:QNukki_2HTkQ)=pfs*xZz[KY=W!e,iv!NpGPUSeL?Nt5r[NL#$7cbfc');
define('NONCE_SALT',       'LU0J4T1iXqBx(_S2TP5!+m-=XTNC{Z}&zr:PD_yyVcD rJNLI{@SOzUK_n@_59z3');

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
