<?php


// ** MySQL settings ** //
/** The name of the database for WordPress */
define('DB_NAME', 'db577700542');

/** MySQL database username */
define('DB_USER', 'dbo577700542');

/** MySQL database password */
define('DB_PASSWORD', '7KNzLNZL');

/** MySQL hostname */
define('DB_HOST', 'db60.1and1.es:3306');

/** Database Charset to use in creating database tables. */
define('DB_CHARSET', 'utf8');

/** The Database Collate type. Don't change this if in doubt. */
define('DB_COLLATE', '');

define('AUTH_KEY',         'p5BR~g8&bL_p%,ee.||:5{J?/J9Ws%v][mF>V$$`|RsMY)2CKo+[nB-,Z6/W!3c1');
define('SECURE_AUTH_KEY',  'UXp)/j?544h<Ba17 ;ZpdWKbL&^_:sbTIv4zd*7*z)dQ/{_ez_]mT;{rV3~a3MoS');
define('LOGGED_IN_KEY',    '7Qrt?;a|924%6-(.V%|:F(/[G _:4CYa+8}|ylV+)/}CZP!m-@-(JX2O,u+;Wi>s');
define('NONCE_KEY',        'E-dJVxJa! jAT,Woc@k|vm$J=Ddjxpto@ -*^eO]MR0_sD9|kQ5e-P,E6|mo-t&>');
define('AUTH_SALT',        'E!!{y`M00)XxvNYIZd=:_|z:1nLUSiD-u {fQy3WYKK7F|/y?8t.p0zO$T^hno5J');
define('SECURE_AUTH_SALT', 'k7?c*;!vF?*k<fMx ]p`iD,EK>)J%kNv6Dj[Z|juHa8hseYQ{:tDN94stl^zzaFu');
define('LOGGED_IN_SALT',   'E+v_VE#ZWCa)rOWQcLPe7[sh>X|7{tP|-Uiq(e,-Zd%yU.J~p)P8OV.#)OnQWpDs');
define('NONCE_SALT',       '=V_HGJ9gk4RSP=1@N$|[m!O)OyHxN8yMSeHmHBlI{nsZ*$!W/o#y1uR!~+cdXm=j');


$table_prefix = 'byxn14buin';


/**
 * For developers: WordPress debugging mode.
 *
 * Change this to true to enable the display of notices during development.
 * It is strongly recommended that plugin and theme developers use WP_DEBUG
 * in their development environments.
 */
define('WP_DEBUG', true);

/**
 * Disable the Plugin and Theme Editor.
 *
 * Occasionally you may wish to disable the plugin or theme editor to prevent
 * overzealous users from being able to edit sensitive files and potentially crash the site.
 * Disabling these also provides an additional layer of security if a hacker
 * gains access to a well-privileged user account.
 */
define('DISALLOW_FILE_EDIT', true);



/* That's all, stop editing! Happy blogging. */

/** Absolute path to the WordPress directory. */
if ( !defined('ABSPATH') )
	define('ABSPATH', dirname(__FILE__) . '/');

/** Sets up WordPress vars and included files. */
require_once(ABSPATH . 'wp-settings.php');
