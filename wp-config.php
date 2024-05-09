<?php



define('WP_CACHE', true); // Added by Speed Booster Pack

define('FORCE_SSL_ADMIN', true);

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

 * @link https://wordpress.org/support/article/editing-wp-config-php/

 *

 * @package WordPress

 */


// ** MySQL settings - You can get this info from your web host ** //

/** The name of the database for WordPress */

define( 'DB_NAME', "Kainos Site" );


/** MySQL database username */

define( 'DB_USER', "root_user12" );


/** MySQL database password */

define( 'DB_PASSWORD', "KainosSite123!@#\$" );


/** MySQL hostname */

define( 'DB_HOST', "localhost" );


/** Database Charset to use in creating database tables. */

define( 'DB_CHARSET', 'utf8mb4' );


/** The Database Collate type. Don't change this if in doubt. */

define( 'DB_COLLATE', '' );


/**#@+

 * Authentication Unique Keys and Salts.

 *

 * Change these to different unique phrases!

 * You can generate these using the {@link https://api.wordpress.org/secret-key/1.1/salt/ WordPress.org secret-key service}

 * You can change these at any point in time to invalidate all existing cookies. This will force all users to have to log in again.

 *

 * @since 2.6.0

 */

define( 'AUTH_KEY',         'iH7SPT-DJ#QIK8h@Fj1]XlETtrG|0;dT`Lg!N`*c{t;RE5S<S:5TNP_nk1{bNTF!' );

define( 'SECURE_AUTH_KEY',  'ha=?KEsUYK2ca^9.vZiKN`kalV+,(/|a)h>dv@%#Q-?Dth(*_P2B5*C)Q>RAjhpt' );

define( 'LOGGED_IN_KEY',    '=(;A8#NT)EE4n*#$V,QF<n6wxtL!0D9HYM:bCB,yqj*E*:%&%{CYSkY4vC}*p2/?' );

define( 'NONCE_KEY',        '8Ne)?uAxxLT]us;Dn?T yBdyojFda[mu3s?]`NT{W/OX$<(>`]6bV{|@AAC=k/X5' );

define( 'AUTH_SALT',        '+j}[}B@|4Ucxp4E`gcq$wQF_t)$LYa)NV;a6S|)?el-O1S3_Yh|?Ob#7Y.+q,.sw' );

define( 'SECURE_AUTH_SALT', 'A??Vq<9@S<!DCDT_qT2p_2fsu=Wbn{x]4.2;VeK9lu[$ p{l~0WXS{d 4HTiR@e>' );

define( 'LOGGED_IN_SALT',   'mL^k1`<LJ*PRi^,f4kL.JSdW2bb0IW1V MKY>X@#OGNwDV]Qm]ePYunyaR:Zi37=' );

define( 'NONCE_SALT',       '{^)^*[6{H|A3{0okj6!mLj?1[6.3NKNvB3-_.aN(]=m;[;hbwfEYz5Romw*a!(Xf' );


/**#@-*/


/**

 * WordPress Database Table prefix.

 *

 * You can have multiple installations in one database if you give each

 * a unique prefix. Only numbers, letters, and underscores please!

 */

$table_prefix = 'wp_';


/**

 * For developers: WordPress debugging mode.

 *

 * Change this to true to enable the display of notices during development.

 * It is strongly recommended that plugin and theme developers use WP_DEBUG

 * in their development environments.

 *

 * For information on other constants that can be used for debugging,

 * visit the documentation.

 *

 * @link https://wordpress.org/support/article/debugging-in-wordpress/

 */

define( 'WP_DEBUG', true );

// define( 'WP_DEBUG_DISPLAY', false );
// define( 'WP_DEBUG_LOG', false );
// define( 'SCRIPT_DEBUG', false );

define( 'WPMS_ON', true ); // True turns on constants support and usage, false turns it off.

define( 'WPMS_SMTP_HOST', 'sg2plcpnl0093.prod.sin2.secureserver.net' ); // The SMTP mail host.
define( 'WPMS_SMTP_PORT', 587 ); // The SMTP server port number.
define( 'WPMS_SSL', 'tls' ); // Possible values '', 'ssl', 'tls' - note TLS is not STARTTLS.
define( 'WPMS_SMTP_AUTH', true ); // True turns it on, false turns it off.
define( 'WPMS_SMTP_USER', 'info@kainosinnovative.com' ); // SMTP authentication username, only used if WPMS_SMTP_AUTH is true.
define( 'WPMS_SMTP_PASS', 'KainosInfo2021' ); // SMTP authentication password, only used if WPMS_SMTP_AUTH is true.
define( 'WPMS_SMTP_AUTOTLS', true ); // True turns it on, false turns it off.


/* That's all, stop editing! Happy publishing. */


/** Absolute path to the WordPress directory. */

if ( ! defined( 'ABSPATH' ) ) {

	define( 'ABSPATH', __DIR__ . '/' );

}


/** Sets up WordPress vars and included files. */

require_once ABSPATH . 'wp-settings.php';

