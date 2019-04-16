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
define( 'DB_NAME', 'local' );

/** MySQL database username */
define( 'DB_USER', 'root' );

/** MySQL database password */
define( 'DB_PASSWORD', 'root' );

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
define('AUTH_KEY',         'qT7dOfXWc7iC3tmOtUPzXQ2wd31OOXbtsGN+kWtmM66Y1Dh+8PwovoiXxorL4LNA958Gx9UXZOp4V6ePCpsNWw==');
define('SECURE_AUTH_KEY',  'svl0WXAKzhx15QbWPuaCkKDqbC4zD17O1PlpGfZxxyLEjonucDUeApHTgpYEe14E+dwfbJqL4vmvo6KkZVbO0g==');
define('LOGGED_IN_KEY',    'CFZBEZ97lWI3rsnat1ANpc/1+YjBpXkgMUr8Ew8awm/8DlDDxxQ/jmXfgtvq6yoAvn4gtoZpsOaSZXfwvfAIoQ==');
define('NONCE_KEY',        'TS7MOlYWGYma175cXuHXGdGlyRO3UGV2ZtdjnQM94VjNMz7iNdlBHO4aaqfwjxSEzYGKb4sCaBh6Kzco1fBcww==');
define('AUTH_SALT',        'spZjy6bB+jiPdvn5E1TpTm9QeCGY8C7Y6j2kiYyE7zIZ8LGwMGAtfH/XfZLSru6EhmfsU8ccDb3LxyAOyQHN0A==');
define('SECURE_AUTH_SALT', 'b3YTmoeqvkvQWadlqbH0n8AmpCi360sOrrdMpcmj4DtbrlUCjzcWDB5NcftJOZSStrzqsmOXtAVT/d27KOcRmw==');
define('LOGGED_IN_SALT',   'IAzdowRtCW3cSzLhpa24iZCwA5ZC6TOJsUE+4STvbE086zNXfsp6plBJIvLO+jAZVQwq2eW0DItd92j9SEy7SQ==');
define('NONCE_SALT',       'e7uMcg/6daqu5bvNmi7RnXnfBSgrphRey8mcSp0BTUk/PYA26p/frSHyeyvJMtOMY5BLt9cq4DgzDCkiffTMIQ==');

/**
 * WordPress Database Table prefix.
 *
 * You can have multiple installations in one database if you give each
 * a unique prefix. Only numbers, letters, and underscores please!
 */
$table_prefix = 'wp_';




/* That's all, stop editing! Happy blogging. */

/** Absolute path to the WordPress directory. */
if ( ! defined( 'ABSPATH' ) )
	define( 'ABSPATH', dirname( __FILE__ ) . '/' );

/** Sets up WordPress vars and included files. */
require_once ABSPATH . 'wp-settings.php';
