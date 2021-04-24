<?php
define( 'WP_CACHE', true );
// define( 'WP_CACHE', true ) ;

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
define('DB_NAME', 'vodanhc2_htclawfirm'); // vodanhc2_htclawfirm paaa: htclawfirm8w9b5%Ol  //htclawfirm
define('DB_USER', 'vodanhc2_htclawfirm');// 
//user_admin:lotusonic
/** MySQL database password */
define('DB_PASSWORD', 'htclawfirm8w9b5%Ol');// 
//htclawfirm
//htclawfirm8w9b5%Ol
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
define('AUTH_KEY',         'KP2[_8+nSs()3d<K<%i n:>dfl(yvHmRBO(su~H8|62ROQpCeEFHu.d{fO.;g>Hn');
define('SECURE_AUTH_KEY',  '`sx)KY)-BKhKlao>(^r|]!l+$|1Xz``|`t>M5T10o:2W_9;kDWR.!X ``+Vn|dhM');
define('LOGGED_IN_KEY',    'npH! d3csIAu4o<G0+]}Hf--p(<>J-u5jPk0SYV>S|f}aN8n,$i-~WqUeqKeK!d[');
define('NONCE_KEY',        'I7VR%)^qsi!RG|Q=4l[o4 {EDMeuW/dk`6K&1qYmGxEFHIfzi0BU+!iO<zMj|k?t');
define('AUTH_SALT',        'AH-xbrMA]Dfc9z@(Z]+:y58S-!IX<A6NIn>@Bv@s5UPQ}<k@S6v~zPN9|PNtHztT');
define('SECURE_AUTH_SALT', 'l/?DOoQbJX!~pWtOB_H8xT_}=?R;lr/tL(QM%Q]n!X6.w.-b9rqYRV|Dm4:B0qF<');
define('LOGGED_IN_SALT',   '}dcMn)W%``N<L+K%DOz$D5Xw#g4q)QQIixMd?6x^;oDS:%&f+{?Gc+guG(j13W}B');
define('NONCE_SALT',       'V86A8|wDa4{-<LfLih?1|.x6VFr;/mQU~0u_}mS}w(}Btf!|N^VE-EP6}DHP=4I:');

/**#@-*/

/**
 * WordPress Database Table prefix.
 *
 * You can have multiple installations in one database if you give each
 * a unique prefix. Only numbers, letters, and underscores please!
 */
$table_prefix  = 'htctbl_';

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
define( 'WP_AUTO_UPDATE_CORE', false );

/* That's all, stop editing! Happy blogging. */

/** Absolute path to the WordPress directory. */
if ( !defined('ABSPATH') )
	define('ABSPATH', dirname(__FILE__) . '/');

/** Sets up WordPress vars and included files. */
require_once(ABSPATH . 'wp-settings.php');
// $memcached_servers = array( 'default' => array('/home/vodanhc2/.applicationmanager/memcached.sock:0'));