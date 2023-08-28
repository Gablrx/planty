<?php
/**
 * La configuration de base de votre installation WordPress.
 *
 * Ce fichier contient les réglages de configuration suivants : réglages MySQL,
 * préfixe de table, clés secrètes, langue utilisée, et ABSPATH.
 * Vous pouvez en savoir plus à leur sujet en allant sur
 * {@link https://fr.wordpress.org/support/article/editing-wp-config-php/ Modifier
 * wp-config.php}. C’est votre hébergeur qui doit vous donner vos
 * codes MySQL.
 *
 * Ce fichier est utilisé par le script de création de wp-config.php pendant
 * le processus d’installation. Vous n’avez pas à utiliser le site web, vous
 * pouvez simplement renommer ce fichier en "wp-config.php" et remplir les
 * valeurs.
 *
 * @link https://fr.wordpress.org/support/article/editing-wp-config-php/
 *
 * @package WordPress
 */

// ** Réglages MySQL - Votre hébergeur doit vous fournir ces informations. ** //
/** Nom de la base de données de WordPress. */
define( 'DB_NAME', 'planty' );

/** Utilisateur de la base de données MySQL. */
define( 'DB_USER', 'root' );

/** Mot de passe de la base de données MySQL. */
define( 'DB_PASSWORD', 'root' );

/** Adresse de l’hébergement MySQL. */
define( 'DB_HOST', 'localhost' );

/** Jeu de caractères à utiliser par la base de données lors de la création des tables. */
define( 'DB_CHARSET', 'utf8mb4' );

/** Type de collation de la base de données.
  * N’y touchez que si vous savez ce que vous faites.
  */
define('DB_COLLATE', '');

/**#@+
 * Clés uniques d’authentification et salage.
 *
 * Remplacez les valeurs par défaut par des phrases uniques !
 * Vous pouvez générer des phrases aléatoires en utilisant
 * {@link https://api.wordpress.org/secret-key/1.1/salt/ le service de clés secrètes de WordPress.org}.
 * Vous pouvez modifier ces phrases à n’importe quel moment, afin d’invalider tous les cookies existants.
 * Cela forcera également tous les utilisateurs à se reconnecter.
 *
 * @since 2.6.0
 */
define( 'AUTH_KEY',         '2WZUbN.rHPI2|Zwa<p?g,0N;~}sb;~GhZKfJ)sZ;2<XAAtAzlt<*9Xdls)xY}@hU' );
define( 'SECURE_AUTH_KEY',  'S8xYAeM8~<?=@WUj=+69HvYuXGU5EcGJx*~cY=r & K{CF,Rh_XmlWIwaxNp}cuV' );
define( 'LOGGED_IN_KEY',    'T]?Soe`f2v338*`}8: $!o%1*MxU>Y*>O$ZX6O/^92+:$3|+/[xzB6]x>>4n?A,>' );
define( 'NONCE_KEY',        '?Nwi<ijwdMmdi#bY^7fcYA)fer_V]SO=ljo^qPx~fG:`EG,._=J&+/^szYl1?z20' );
define( 'AUTH_SALT',        '2r2*[rT-_7^srz)5lIw6Jwx~@f=n)JBkxhQI0saz(#!9+4Y]s>KWm4iwMJ<Dj?S>' );
define( 'SECURE_AUTH_SALT', 'AAiA:*6AKIwHVGc4kz,&A`(-oyg/DTQ#7DoiZZ?wxT5`hV83k|fN>V}$s:G6:{G?' );
define( 'LOGGED_IN_SALT',   'cN ]jePD!z#R >0kV OMr].*vQ?7lb66[$Ws5Eh]gpvWYC#kK:6D*,qlpC9vAv*$' );
define( 'NONCE_SALT',       'uf*O7rQizW$9#oXi+v&I:[nAOlnDxE,Indor]_<y8jvsi0<l|~3n?aj*IFX#{F$I' );
/**#@-*/

/**
 * Préfixe de base de données pour les tables de WordPress.
 *
 * Vous pouvez installer plusieurs WordPress sur une seule base de données
 * si vous leur donnez chacune un préfixe unique.
 * N’utilisez que des chiffres, des lettres non-accentuées, et des caractères soulignés !
 */
$table_prefix = 'wp_';

/**
 * Pour les développeurs et développeuses : le mode déboguage de WordPress.
 *
 * En passant la valeur suivante à "true", vous activez l’affichage des
 * notifications d’erreurs pendant vos essais.
 * Il est fortement recommandé que les développeurs et développeuses d’extensions et
 * de thèmes se servent de WP_DEBUG dans leur environnement de
 * développement.
 *
 * Pour plus d’information sur les autres constantes qui peuvent être utilisées
 * pour le déboguage, rendez-vous sur la documentation.
 *
 * @link https://fr.wordpress.org/support/article/debugging-in-wordpress/
 */
define('WP_DEBUG', false);

/* C’est tout, ne touchez pas à ce qui suit ! Bonne publication. */

/** Chemin absolu vers le dossier de WordPress. */
if ( !defined('ABSPATH') )
	define('ABSPATH', dirname(__FILE__) . '/');

/** Réglage des variables de WordPress et de ses fichiers inclus. */
require_once(ABSPATH . 'wp-settings.php');
