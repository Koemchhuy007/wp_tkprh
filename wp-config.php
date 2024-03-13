<?php
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
 * * ABSPATH
 *
 * @link https://wordpress.org/documentation/article/editing-wp-config-php/
 *
 * @package WordPress
 */

// ** Database settings - You can get this info from your web host ** //
/** The name of the database for WordPress */
define( 'DB_NAME', 'wp_takeo_prh' );

/** Database username */
define( 'DB_USER', 'root' );

/** Database password */
define( 'DB_PASSWORD', '' );

/** Database hostname */
define( 'DB_HOST', 'localhost' );

/** Database charset to use in creating database tables. */
define( 'DB_CHARSET', 'utf8mb4' );

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
define( 'AUTH_KEY',         '4][Xbk-{!:cJub<B[r7zg==rS|PxF],F>i1#(/n];K6d3,*&VkgF$eskejw;RHT&' );
define( 'SECURE_AUTH_KEY',  '&m}/.;|Q-J_MeF`2#Wf*gsM~IW|Iv:6@O73#odb 1pa;8,lx@7L$xZjg*o@onZtu' );
define( 'LOGGED_IN_KEY',    '`UEEQ5k>.a$Cq0Noi:y>^G~lqiQBd1F@ iD/qPodcUKqp{I=D(]fSh]:U+7>pA84' );
define( 'NONCE_KEY',        'Fiq1^8,u~2`rGrE)V|#I3j[L##&MRo[xB{:f/{WM*@0IW8L>Ci(UHB=k##h>H=?2' );
define( 'AUTH_SALT',        '#7U,sZ4(0T$^cS~)HH!WYRG9YYu<,U1xDqM[A`Ys.@OduWKojoSfmDva`pnNd=bw' );
define( 'SECURE_AUTH_SALT', '7GKN`t* W`-jA,IQ[ C;{nG-e[_Zk1-+W@)Y6r{vx5ZENPj2:?uv <qdm4>;NI;M' );
define( 'LOGGED_IN_SALT',   'BMs49M.L@7op%{r{E-h(q)s9<4~ C1owl*!npjlR-rn4LG`z7[AABWp~H}a>*xrn' );
define( 'NONCE_SALT',       '[G]#EW[GIcj:.::ymz~6gN{O_Uw#CuhBREvBSi$D#P,a&bi&pr@(:t8Ktv4HK{o0' );

/**#@-*/

/**
 * WordPress database table prefix.
 *
 * You can have multiple installations in one database if you give each
 * a unique prefix. Only numbers, letters, and underscores please!
 */
$table_prefix = 'wp_tkprh';

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
 * @link https://wordpress.org/documentation/article/debugging-in-wordpress/
 */
define( 'WP_DEBUG', false );

/* Add any custom values between this line and the "stop editing" line. */



/* That's all, stop editing! Happy publishing. */

/** Absolute path to the WordPress directory. */
if ( ! defined( 'ABSPATH' ) ) {
	define( 'ABSPATH', __DIR__ . '/' );
}

/** Sets up WordPress vars and included files. */
require_once ABSPATH . 'wp-settings.php';
