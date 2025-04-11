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
define( 'DB_NAME', 'stay_world' );

/** Database username */
define( 'DB_USER', 'root' );

/** Database password */
define( 'DB_PASSWORD', 'root' );

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
define( 'AUTH_KEY',         '0Q/gt,l,IbXc1ILa 1=q `-K`(2MK)+(4]dFr59[0 4&/{`wfYUaw`T6>d#[KT-|' );
define( 'SECURE_AUTH_KEY',  '6n RybI&p)c^&7{)v6`T0ifx[p1~Dr$8!dE*Wg-udZL4pCV_.aV(rTRKAYt9D4OM' );
define( 'LOGGED_IN_KEY',    'D~<;09(Mowa^5SH2)].uO_$rD=98dhFepvI7nb2oVH~MCbK;#MDHX64u}e`UOT&i' );
define( 'NONCE_KEY',        ' Q,SomC3[%;HCHu@oU#:QbfW[`.For[=5:GDDca$n]PI+sc,~t!H&irCbue4zS%l' );
define( 'AUTH_SALT',        '0+%o~2w&1y<@@9G~G2WNg2 g5Ik[9=32n4D.N|G#(z4wkj_1LCx*!36cRRhJ)DAC' );
define( 'SECURE_AUTH_SALT', '2e87tYzKZ-!cN^_+_`Qh]FX}lQpo[R1#Hf`d2645w(2M.!DR@asq<!}aW!6>[C|Y' );
define( 'LOGGED_IN_SALT',   ']`8~/NS{bJ)v4n^N3ygdAS%nI{tn=5?arDX^Qg=}A`sJap8;`{5dQj&GJewx ufs' );
define( 'NONCE_SALT',       'E>:`[qg}_APmypNP4cy!_Hc5O6P^O71)CP)`_0ZvT.{cy,2ie9d3W#~`@c:mNgpW' );

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
 * @link https://developer.wordpress.org/advanced-administration/debug/debug-wordpress/
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
