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
define( 'DB_NAME', 'sidesea' );

/** MySQL database username */
define( 'DB_USER', 'sidesea' );

/** MySQL database password */
define( 'DB_PASSWORD', 'sidesea' );

/** MySQL hostname */
define( 'DB_HOST', 'localhost' );

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
define( 'AUTH_KEY',         'qt<%Y#$Vbb=krqv>mAkj*! VULgVnib8Cv 7wRvoz;]XJo04J,p*b<kYcdh~++]6' );
define( 'SECURE_AUTH_KEY',  '&8kZiu`mDv7l/RS3;b6|>,l,_a@I*mOerk[nS})@}#*)/sI-Q!x^?aC31LLa/d2M' );
define( 'LOGGED_IN_KEY',    'D,V v=kJ3{DiNeD%P[xBN9=&8RodVmMgmGqY<wfzeh}JbT,FP+`Txr03T=q)^:qS' );
define( 'NONCE_KEY',        'Ga8f 5t?)rhq6 d!T mX3W]C@s9ez|Jl7`b1#%CD)KO#(^NptNMeKEM!8?DT^* z' );
define( 'AUTH_SALT',        'DQ6Apz:G%x2wX&);03&N/*oo&05137]]L(YQ+#mcC@aD>$Lb6W48!QG^g-b[q0Uf' );
define( 'SECURE_AUTH_SALT', 'aYC($z d3 e23dlQUn_,wHvMeU7G`MAqVdX8,BGk,*??PZOQ!5t>l;Pd,@Qc_?JM' );
define( 'LOGGED_IN_SALT',   '%BX2;VwEd)Rr5*).1]!shd1ly5tx^WP5x{nk$+cb5y}WKW4 7v,VL%Zv;IBRT<2/' );
define( 'NONCE_SALT',       '${Cc]63-Z*cJp /R]3iEPOKfx],hQoihN*~^h)35F=/q%`@/164BVvNp|7k9_0ir' );

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
 * visit the Codex.
 *
 * @link https://codex.wordpress.org/Debugging_in_WordPress
 */
define( 'WP_DEBUG', false );

/* That's all, stop editing! Happy publishing. */

/** Absolute path to the WordPress directory. */
if ( ! defined( 'ABSPATH' ) ) {
	define( 'ABSPATH', dirname( __FILE__ ) . '/' );
}

/** Sets up WordPress vars and included files. */
require_once( ABSPATH . 'wp-settings.php' );
