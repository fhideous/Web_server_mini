<?php

define( 'DB_NAME', 'wordpress_school_21' );
define( 'DB_USER', 'admin' );
define( 'DB_PASSWORD', 'admin' );
define( 'DB_HOST', 'localhost' );
define( 'DB_CHARSET', 'utf8' );

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
define('AUTH_KEY',         '6|s#MH)vC:XF/|!cY,=D|6Cwaq2-VZFw;+6 JuswZ.|(NY&H(|[)R+MQ |S2VMMm');
define('SECURE_AUTH_KEY',  'xKn&@p5%+3,>@SyOqCz/3bYFNe3bEY|)/CzK(u@EU4#+HjQnq(U^Ta#m2aF{=2;8');
define('LOGGED_IN_KEY',    'ST+3M@eke2LoUW)oz0-bf#Q7wFUD%-A!OL?le,^8jiS Z+c{0a9Pgr#DU]KX- jJ');
define('NONCE_KEY',        'iXf]|c.#|!tfp:g*QH|xz)Ed+BA,fce_dab#3igWIc+ pNPWVNV[|t!3JSi?(,/^');
define('AUTH_SALT',        '&q{LmnQTKIH1(NRdvpzWhMe6@DqA.Yoy9MQPLpdDGVINK[S&^xPt[Mlk_x@A6IBJ');
define('SECURE_AUTH_SALT', ':TQxb-snx/z,kU-u^k7+i}?{.Dgy9%~k3u.})c(gbSK.SM1=DB,V#=Bw>tQl/i}Y');
define('LOGGED_IN_SALT',   ']pZ3OPStR2[;|Zt=;z>?RXT TU{uyjZyvuy|}|$~>V7UXb<kX[kf!bG9POj(LqJ|');
define('NONCE_SALT',       'C}bC;m;-KyhHOxbx-k1Cnf`p><K}=N_|z&94yoV0ts8#LpqI^V}wd[TP*?IMB>}C');

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
define( 'WP_DEBUG', false );

/* That's all, stop editing! Happy publishing. */

/** Absolute path to the WordPress directory. */
if ( !defined('ABSPATH') )
	define('ABSPATH', '/var/www/html/wordpress');

/** Sets up WordPress vars and included files. */
require_once(ABSPATH . 'wp-settings.php');