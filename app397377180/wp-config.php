<?php


// ** MySQL settings ** //
/** The name of the database for WordPress */
define('DB_NAME', 'db580110755');

/** MySQL database username */
define('DB_USER', 'dbo580110755');

/** MySQL database password */
define('DB_PASSWORD', 'KayXibco');

/** MySQL hostname */
define('DB_HOST', 'db64.1and1.es:3306');

/** Database Charset to use in creating database tables. */
define('DB_CHARSET', 'utf8');

/** The Database Collate type. Don't change this if in doubt. */
define('DB_COLLATE', '');

define('AUTH_KEY',         '=r<BG`G*_Ny/pniOwdCWkT3NwfM A|Oq<$:z<SZIa&YNgIPyKvTAq/}86UmQsK+Q');
define('SECURE_AUTH_KEY',  'u?+LK^NE_NkOg`5zb.)S8Y)Z*9}&-slu$$;h2*R5/Z@m}d:v71YHM<S_bw-KJO5-');
define('LOGGED_IN_KEY',    '-|m+6BM{n%*OEj-s LNpHn0S5Gd:T^x__`$x)M38Dw4}wc@bZZqX9A,f6v*x+l*_');
define('NONCE_KEY',        'Dzy-LRx$|=4?+oE<O?:g[{`,977l6>#)t=mgpj>AuH|5WXi6gVNtvXEt$0L|HsYh');
define('AUTH_SALT',        '53gy6J@}hc;AL)|PeK238iw9{X]%D-ezcp_oqdNkT/]=GD/Ncg4Q&!aIc7CDK|nj');
define('SECURE_AUTH_SALT', '+) PT2T9D6~$D1Of-Q>-9=b/IC>,gM-igjL|qi&{N(a#qh`4+pq?2O#H<s5 J?uv');
define('LOGGED_IN_SALT',   ';ppCB@-[@X27K++sJGdR+9YC(/RyKJLVcuu-U^|}SUyZ.2_sCU*xd mE!Y{Pb9D%');
define('NONCE_SALT',       '7+~XW t&Q#D-1|5#udru+wW7,t3Y:$-=YbVvOr+}:b2T<gk5Im3;*H+~d<h*:pvG');


$table_prefix = 'awk7uzlsv5';


/**
 * For developers: WordPress debugging mode.
 *
 * Change this to true to enable the display of notices during development.
 * It is strongly recommended that plugin and theme developers use WP_DEBUG
 * in their development environments.
 */
define('WP_DEBUG', false);

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
