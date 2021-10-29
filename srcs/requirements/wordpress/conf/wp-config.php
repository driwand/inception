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
 * @link https://wordpress.org/support/article/editing-wp-config-php/
 *
 * @package WordPress
 */

// ** MySQL settings - You can get this info from your web host ** //
/** The name of the database for WordPress */
define( 'DB_NAME', 'wpdb' );

/** MySQL database username */
define( 'DB_USER', 'DB_USERNAME' );

/** MySQL database password */
define( 'DB_PASSWORD', 'DB_USERPASS' );

/** MySQL hostname */
define( 'DB_HOST', 'mariadb' );

/** Database Charset to use in creating database tables. */
define( 'DB_CHARSET', 'utf8' );

/** The Database Collate type. Don't change this if in doubt. */
define( 'DB_COLLATE', '' );

/**
 * Authentication Unique Keys and Salts.
 *
 * Change these to different unique phrases!
 * You can generate these using the {@link https://api.wordpress.org/secret-key/1.1/salt/ WordPress.org secret-key service}
 * You can change these at any point in time to invalidate all existing cookies. This will force all users to have to log in again.
 *
 * @since 2.6.0
 */
define( 'AUTH_KEY',          'haXOz#Jh,tP$&TB(m`u*R]an}uM:BB{-:os,z6P1R%p-Eno/{`fP(q.doY{;4*?Y' );
define( 'SECURE_AUTH_KEY',   '-=KR*?-VUZ)(//L]NUXaJKL!AAAw@sr/*oKE1m1Ql]}BMP,$5t_x{] >6JCedTc)' );
define( 'LOGGED_IN_KEY',     '~mW-Cmm7hNqp7o:##SQE#xP5zQAsJ%QWu <lHA{|:7R7}%]8Edb]*fmr}#P/z;(9' );
define( 'NONCE_KEY',         '3grqm2)4JkZj`3 B2Tb4/?qYyAg38^tmkx f&md1AWXhH~/dpD>U{|Yp$YDT4[0%' );
define( 'AUTH_SALT',         'WT GKHvm=CqQj/twmagoq2N=&gUKSZT%@.CfRI>=nz4yn`U1M$yYxxwtg<$W&hr{' );
define( 'SECURE_AUTH_SALT',  'E?VPZ`R&szgasfWA;Ka1hEe68PQRaR|5oU,)3h_Nj;Ltl9z!!Hh+@=Wi4u)9JR!j' );
define( 'LOGGED_IN_SALT',    '+z[+w/6{&MsMNUJmuWz[Rz/6JKYxUO3K^b=F[ddcg#o`guv&ttv6-!plZ5XaiFoN' );
define( 'NONCE_SALT',        'VZxu_~boyXo{z}{lLq<sxz^bs3%M +Vg:)Dr;3/KRiSFc~>{WpNE+%t<Dc!>i)y0' );
define( 'WP_CACHE_KEY_SALT', '=8Dyvsm1&GOE97bkLAmu.ry?p/=QT,UfY0@UV@AX KM;S?NBZl(%.IR2214BGj($' );

/**
 * WordPress Database Table prefix.
 *
 * You can have multiple installations in one database if you give each
 * a unique prefix. Only numbers, letters, and underscores please!
 */
$table_prefix = 'wp_';




define( 'WP_REDIS_HOST', 'redis' );
define( 'WP_REDIS_PORT', '6379' );
define( 'WP_REDIS_TIMEOUT', '1' );
define( 'WP_REDIS_READ_TIMEOUT', '1' );
define( 'WP_REDIS_DATABASE', '0' );
/* That's all, stop editing! Happy publishing. */

/** Absolute path to the WordPress directory. */
if ( ! defined( 'ABSPATH' ) ) {
        define( 'ABSPATH', dirname( __FILE__ ) . '/' );
}

/** Sets up WordPress vars and included files. */
require_once ABSPATH . 'wp-settings.php';
