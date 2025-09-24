<?php
/**
 * The base configuration for WordPress
 *
 * The wp-config.php creation script uses this file during the installation.
 * You don't have to use the website, you can copy this file to "wp-config.php"
 * and fill in the values.
 *
 * This file contains the following configurations:
 *
 * * Database settings
 * * Secret keys
 * * Database table prefix
 * * ABSPATH
 *
 * @link https://developer.wordpress.org/advanced-administration/wordpress/wp-config/
 *
 * @package WordPress
 */

// ** Database settings - You can get this info from your web host ** //
/** The name of the database for WordPress */
define( 'DB_NAME', 'rochas' );

/** Database username */
define( 'DB_USER', 'phpmyadmin' );

/** Database password */
define( 'DB_PASSWORD', 'Tchoupie69*' );

/** Database hostname */
define( 'DB_HOST', 'localhost' );

/** Database charset to use in creating database tables. */
define( 'DB_CHARSET', 'utf8' );

/** The database collate type. Don't change this if in doubt. */
define( 'DB_COLLATE', '' );

define('FS_METHOD', 'direct');
/**#@+
 * Authentication unique keys and salts.
 *
 * Change these to different unique phrases! You can generate these using
 * the {@link https://api.wordpress.org/secret-key/1.1/salt/ WordPress.org secret-key service}.
 *
 * You can change these at any point in time to invalidate all existing cookies.
 * This will force all users to have to log in again.
 *
 * @since 2.6.0
 */
define('AUTH_KEY',         'eh`:t+_s9tckcD]3q@Cno(+Yfx|pFa6BY5%!S~{vZ/Rho|-$YwW:z-iWaGirq48P');
define('SECURE_AUTH_KEY',  'Az<l80LT6]fs.B-f7C!efk;{/jT@9-s9(<egJ$*Ltla7w~SLU:|?^NF<i+-f?Ee$');
define('LOGGED_IN_KEY',    'N2xBrgO#7r/9=b>,v=Bp]hGQ/Xkf$L2p@I3s:cOHNn_2:aOfstf|iX0:x0`h>DNj');
define('NONCE_KEY',        '$`skb|#vBe|)!~Hb--v|Zmw7}>82ky+m.<+!V|H_Q]*N<],.:$<ZW-0|>^?:=w05');
define('AUTH_SALT',        'OD((}*4&{&b0#(IH|My(&>yeDAxiWttK56|)*9g%`F;DJz|I7--qMXD4Np2@uH!t');
define('SECURE_AUTH_SALT', 'gx}gwM}d21Eblk~?L?(GmkPMwBJgVg)9gMSAs~FEmqzhrN6tvdO)ioJh:2?8aZsA');
define('LOGGED_IN_SALT',   'zzIb-R!N2if*+C@w*K|.TMw$vl.QGEpAY0s+E&u? UuS|T*d9w`]^*oT2-wSNU^C');
define('NONCE_SALT',       'zX5l4>C%;ARS::ghQKvY52`0d-TPo@jLmwN4Qi@_?h!!e^dPYV)}3J^FZ%H<r<@@');

/**#@-*/

/**
 * WordPress database table prefix.
 *
 * You can have multiple installations in one database if you give each
 * a unique prefix. Only numbers, letters, and underscores please!
 *
 * At the installation time, database tables are created with the specified prefix.
 * Changing this value after WordPress is installed will make your site think
 * it has not been installed.
 *
 * @link https://developer.wordpress.org/advanced-administration/wordpress/wp-config/#table-prefix
 */
$table_prefix = 'elrochaswp_';

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
 * @link https://developer.wordpress.org/advanced-administration/debug/debug-wordpress/
 */
define( 'WP_DEBUG', true ); // Active le mode debug global de WordPress
define( 'WP_DEBUG_DISPLAY', true ); // Affiche les erreurs et avertissements dans le navigateur
define( 'WP_DEBUG_LOG', true ); // Enregistre les erreurs et avertissements dans un fichier debug.log (dossier wp-content)
define( 'SCRIPT_DEBUG', true ); // Charge les versions non minimisées des fichiers CSS et JS pour faciliter le débogage

/* Add any custom values between this line and the "stop editing" line. */



/* That's all, stop editing! Happy publishing. */

/** Absolute path to the WordPress directory. */
if ( ! defined( 'ABSPATH' ) ) {
	define( 'ABSPATH', __DIR__ . '/' );
}

/** Sets up WordPress vars and included files. */
require_once ABSPATH . 'wp-settings.php';
