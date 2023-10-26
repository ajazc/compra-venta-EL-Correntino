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
define( 'DB_NAME', 'elcorrentino' );

/** Database username */
define( 'DB_USER', 'root' );

/** Database password */
define( 'DB_PASSWORD', '' );

/** Database hostname */
define( 'DB_HOST', '' );

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
define( 'AUTH_KEY',         'mhWbJK$RZ,5EuMM!h.;YG;_f&=f-.Se#fb;t=r2W`>F 1:i%co.okcxk(ogN`9Qr' );
define( 'SECURE_AUTH_KEY',  '-YZ]d9L8{t+{{<a?R)sl@ynNds~f(EF_LX`KW4h:jVW!Z0NF[Sy,]5(s3.ob~Ks]' );
define( 'LOGGED_IN_KEY',    'y<m;;=!Qp+}>mmv SpgV;NV7|tjR-p3zo2Zv:!;j(o/Ca0y|.D44,bWP^_.|K)90' );
define( 'NONCE_KEY',        'XL2~a/&HUxcs{|JLz]a@okxUij )Y TkOBZ]P.($|cND>A! !0*f<{TX~WddjcUD' );
define( 'AUTH_SALT',        '1* xYwz==t4/[7 S&(&=r8r3,]GqtSex=|c3X1LHoCN*ou:eA20gQm*C^#lOUHt@' );
define( 'SECURE_AUTH_SALT', 'B_d1pG#D.R8vptqY$tC0YG@WyCtC&Hxx4fx8I:wD)[!BN65N[M{r kFo9[4zu)5^' );
define( 'LOGGED_IN_SALT',   '_3iV^Hcg<&3d&YXk7x+@RSq[BZ%9642HB 5w4gpzJVe)M:|DQ3G.^)16]iF_EmV>' );
define( 'NONCE_SALT',       'vlg+Z8@H7GTp3,B]zG5}H}w:0uiK_:}L~yTO#s{`+R]$?4Xz24ft,D1zYcSd$3id' );

/**#@-*/

/**
 * WordPress database table prefix.
 *
 * You can have multiple installations in one database if you give each
 * a unique prefix. Only numbers, letters, and underscores please!
 */
$table_prefix = 'wp_elcorrentino';

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
