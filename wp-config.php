<?php
define( 'WP_CACHE', true );

/**
 * The base configuration for WordPress
 *
 * The wp-config.php creation script uses this file during the installation.
 * You don't have to use the web site, you can copy this file to "wp-config.php"
 * and fill in the values.
 *
 * This file contains the following configurations:
 *
 * * Database settings
 * * Secret keys
 * * Database table prefix
 * * Localized language
 * * ABSPATH
 *
 * @link https://wordpress.org/support/article/editing-wp-config-php/
 *
 * @package WordPress
 */

// ** Database settings - You can get this info from your web host ** //
/** The name of the database for WordPress */
define( 'DB_NAME', 'Nk1ul5oMmNWFlc' );

/** Database username */
define( 'DB_USER', 'Nk1ul5oMmNWFlc' );

/** Database password */
define( 'DB_PASSWORD', 'GgjUN0rj1Sp1T6' );

/** Database hostname */
define( 'DB_HOST', 'localhost:3306' );

/** Database charset to use in creating database tables. */
define( 'DB_CHARSET', 'utf8' );

/** The database collate type. Don't change this if in doubt. */
define( 'DB_COLLATE', '' );

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
define( 'AUTH_KEY',          'W6pf(0b}<RsO}G|]wpr$T$=YLU0Tt~Cv#3 @9pJav,G*N&I0kN8^DEW13+87G>Vw' );
define( 'SECURE_AUTH_KEY',   'xqQ3zCxs.9WU^kX3)pg@2!kuU:e#Bu6i:5r^7>`h?!FY#&V8TuPDfZJn2p!?T9*W' );
define( 'LOGGED_IN_KEY',     'V<e>UjjW%[GD/~HV3raTa};h1XI,]Lea$rY#0#cVZv0^YT{WM:a[amAYPW4Qd8B-' );
define( 'NONCE_KEY',         '{cCP@6Au7,vX8wlx5%jSl:4i7Dn(M* zd3]L.sh~u`S)#;U!WX~w#aP;FK4r;sn&' );
define( 'AUTH_SALT',         '+x&:Q)Sn>$ *6Uf5?nx-d>{AlDUWH.(of*6u.*7J4AYoX93o2lV.nH(ZjxS%iZr%' );
define( 'SECURE_AUTH_SALT',  '.JjQ]0hIJC,4mid^B]7O:b~rOpru-VnF3;1^>JFSs(M+z~HW3agsW_aXI2y`E{o3' );
define( 'LOGGED_IN_SALT',    'XnaCIQv&f[pP[Z!c4>~}[P.)GWCc`/x|Q0X!*`PtQ#~|v.#v%./0QIu@qa=J#LwH' );
define( 'NONCE_SALT',        'B73,N5BVFcy mY=Vr<C`&J:4dsY2V&A%%_?~4M^dp.cl/)(ZQ@myp?!+M_)kQ}%4' );
define( 'WP_CACHE_KEY_SALT', 'fCjF}^Z=JRGit.EfBSLDmLg+OG,ezbsftaabXbAQ0}t8e!P#s~w+(]:oC+yMfP)r' );


/**#@-*/

/**
 * WordPress database table prefix.
 *
 * You can have multiple installations in one database if you give each
 * a unique prefix. Only numbers, letters, and underscores please!
 */
$table_prefix = 'wp_';


/* Add any custom values between this line and the "stop editing" line. */



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
if ( ! defined( 'WP_DEBUG' ) ) {
	define( 'WP_DEBUG', false );
}

/* That's all, stop editing! Happy publishing. */

/** Absolute path to the WordPress directory. */
if ( ! defined( 'ABSPATH' ) ) {
	define( 'ABSPATH', __DIR__ . '/' );
}

/** Sets up WordPress vars and included files. */
require_once ABSPATH . 'wp-settings.php';
