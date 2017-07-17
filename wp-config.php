<?php
/**
 * The base configurations of the WordPress.
 *
 * This file has the following configurations: MySQL settings, Table Prefix,
 * Secret Keys, and ABSPATH. You can find more information by visiting
 * {@link https://codex.wordpress.org/Editing_wp-config.php Editing wp-config.php}
 * Codex page. You can get the MySQL settings from your web host.
 *
 * This file is used by the wp-config.php creation script during the
 * installation. You don't have to use the web site, you can just copy this file
 * to "wp-config.php" and fill in the values.
 *
 * @package WordPress
 */

define ( 'DS_COLOR' , 'aqua');

// ** MySQL settings - You can get this info from your web host ** //
/** The name of the database for WordPress */
define('DB_NAME', 'generalaDBxldxo');

/** MySQL database username */
define('DB_USER', 'generalaDBxldxo');

/** MySQL database password */
define('DB_PASSWORD', 'NNYVeyebk3');

/** MySQL hostname */
define('DB_HOST', '127.0.0.1');

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
define('AUTH_KEY',         '2XbIy.qubm6.<2*P6EWDO~lp-h1~]:-KW9CO5lSdhO~[ww!o8|14!RdKNVCsZkL2A');
define('SECURE_AUTH_KEY',  '40!|cCqti]*.;tLPD9;2pPaeS+pt~e59;]~_a9KODpthdSW:tbfU$ru^f7B{^.bA');
define('LOGGED_IN_KEY',    'Jgkrg>@!>@F47J}gjNYcQznr$c37}>$^Y7lpd#-~[pGK95C1ZOSdC-~sodh8~[:!K');
define('NONCE_KEY',        'Z{L2L6mXL*qteE;2.WL6pWeP;*#tHYJ@nrcB}3,UF3nYfM^r,uE7<IPAqbGCwhkV');
define('AUTH_SALT',        'Z_[:!K8CN:kodZNR[oz@s4[:a+*Dei;~S9H1lhpW]bM^nufE7<XIQqbjP.u<yI2A');
define('SECURE_AUTH_SALT', 'VzkV4|}zNB}gNxi629]ePSDxiW]-~pD9G1lWZK~sd1~jT<.{yM6EfPXIyiqmA{;*T');
define('LOGGED_IN_SALT',   ';*TWLH59xWila_x+#l9H51#]hH37}UJMY7vznjYb3$^{rIMB7{nMXbQ$nq$b37^{');
define('NONCE_SALT',       'doZ0w!|zC044>}kJVYNvkozY04@>}^J7B;tLP2DH6eSWiH*_lx+p2#]5-SWKHODla');

/**#@-*/

/**
 * WordPress Database Table prefix.
 *
 * You can have multiple installations in one database if you give each a unique
 * prefix. Only numbers, letters, and underscores please!
 */
$table_prefix  = 'wp_';

/**
 * For developers: WordPress debugging mode.
 *
 * Change this to true to enable the display of notices during development.
 * It is strongly recommended that plugin and theme developers use WP_DEBUG
 * in their development environments.
 */
define('WP_DEBUG', false);
define('FS_METHOD', 'direct');

/* That's all, stop editing! Happy blogging. */

/** Absolute path to the WordPress directory. */
if ( !defined('ABSPATH') )
	define('ABSPATH', dirname(__FILE__) . '/');

/** Sets up WordPress vars and included files. */
require_once(ABSPATH . 'wp-settings.php');
