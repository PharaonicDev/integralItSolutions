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

// ** MySQL settings ** //
/** The name of the database for WordPress */
define( 'DB_NAME', 'mozylimy_002' );

/** MySQL database username */
define( 'DB_USER', 'mozylimy_002' );

/** MySQL database password */
define( 'DB_PASSWORD', 'F82ABl1o56pq9g4b7m0' );

/** MySQL hostname */
define( 'DB_HOST', 'localhost' );

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
define( 'AUTH_KEY',          'HjmZwn$t%}V;@jG|SUO8m:@i1[q+TQ^tUP5dDA}2iX8`{3z5/n)ZJbi&*d.APQ~c' );
define( 'SECURE_AUTH_KEY',   'frp-a$(au<dYx0=]q659q|egV]/bf&}@Q`g(1u,H0h~X_ BcKct!Jsg/x=-J1& h' );
define( 'LOGGED_IN_KEY',     '&BYERsY!R:m~+SY$22q1V_O#Xb] RsaF6KfN7NF5 nPqa?NNV`y(AIF{WWKf|C_+' );
define( 'NONCE_KEY',         '&G/&$w*&DH4PMp(r+Wo5v@YHYUx;5IKf]LNKj;cO&OB&+W4zI]p^K~RXoyaJq-~n' );
define( 'AUTH_SALT',         'r]8!=/x1@iwr)yM$#x_^=jsU&RrpDZn<m+j[yfa$IqflS/Awz(legU@ddhO{MXZW' );
define( 'SECURE_AUTH_SALT',  'eB< %z1?z3_P$6HebkT`.EzfsSpD!hu^sifqKC0n3EY:,Q+-2[SgWqFUu|{Q.IyR' );
define( 'LOGGED_IN_SALT',    '*#TELhU5_mH5Bt%yQQ~E dVss8G`yKYqw,dG`<Sswr&9;?+{w,eI7Emqdg$3LnAz' );
define( 'NONCE_SALT',        't_!]s.@7#nu}O&`tKa[0.reT[?wp>MUb>+C}6>PfQ3.hkY`noIz]M_6;jCh&#@G7' );
define( 'WP_CACHE_KEY_SALT', '@2#WQFLn~Y&hH/rl<m9%iZt=xy5<*1x*6]3;63$Czs2YJ#%=X7)&iS%UO+GeREDr' );

/**
 * WordPress Database Table prefix.
 *
 * You can have multiple installations in one database if you give each
 * a unique prefix. Only numbers, letters, and underscores please!
 */
$table_prefix = '002_';



define( 'AUTOSAVE_INTERVAL',    300  );
define( 'WP_POST_REVISIONS',    5    );
define( 'EMPTY_TRASH_DAYS',     7    );
define( 'WP_AUTO_UPDATE_CORE',  true );
define( 'WP_CRON_LOCK_TIMEOUT', 120  );

/* That's all, stop editing! Happy blogging. */

/** Absolute path to the WordPress directory. */
if ( ! defined( 'ABSPATH' ) )
	define( 'ABSPATH', dirname( __FILE__ ) . '/' );

/** Sets up WordPress vars and included files. */
require_once ABSPATH . 'wp-settings.php';
