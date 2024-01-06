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
define( 'DB_NAME', 'wp' );

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
define( 'AUTH_KEY',         '<8`Jqm!wR8xd3#7$s_}tu!`:kHD&h# +ts3NK-r-QgLJT8,x0n~tJQ6y8qSxJ#db' );
define( 'SECURE_AUTH_KEY',  'K>R)/=JC-}vu)|ReHV1U`W&`[b3#].mqN/:7/o8^~|D) T-T/r!vmz+D.hh<Vgom' );
define( 'LOGGED_IN_KEY',    '>AM@/f=eoKs!uF`:%^H.nM@p#skMuXiwtIo4k rB/Qvx y<6nN~z05^`?eYoL1.m' );
define( 'NONCE_KEY',        '51dzM@UO3]*]p^+QT~b,ua]O/%Ac|,l5kvU9C<@4)[`Hh-*RhM2ln:*~GzCPk~kc' );
define( 'AUTH_SALT',        'x1HrtYRFW8Vc|RgPT;gDc?1oE#fE~OEq.-+DduRVzhJm-s3jDJ~4,6$[F|*Cz)k4' );
define( 'SECURE_AUTH_SALT', '3]&:TFU?/FYqV;TeFsbOg6$`PzY*:C6?Gc896:$F]Hy=uVqwjbcvSFg~TjTI9kg?' );
define( 'LOGGED_IN_SALT',   'Tkw7d4[,k*m&e|1zUm-]E-w)mu83pk5]9!!p0?whtSpO!#k}vts~h7,{qn#?P&W%' );
define( 'NONCE_SALT',       '@7@5fP)>H&f6uQwc@mEg}$c10;U+2u}TIg2~W2(KiRrc_sP4`fk%_K7%v:a?KSa<' );

/**#@-*/

/**
 * WordPress database table prefix.
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
