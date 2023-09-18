<?php
/**
 * La configuration de base de votre installation WordPress.
 *
 * Ce fichier est utilisé par le script de création de wp-config.php pendant
 * le processus d’installation. Vous n’avez pas à utiliser le site web, vous
 * pouvez simplement renommer ce fichier en « wp-config.php » et remplir les
 * valeurs.
 *
 * Ce fichier contient les réglages de configuration suivants :
 *
 * Réglages MySQL
 * Préfixe de table
 * Clés secrètes
 * Langue utilisée
 * ABSPATH
 *
 * @link https://fr.wordpress.org/support/article/editing-wp-config-php/.
 *
 * @package WordPress
 */

// ** Réglages MySQL - Votre hébergeur doit vous fournir ces informations. ** //
/** Nom de la base de données de WordPress. */
define( 'DB_NAME', 'chaletsetcaviar' );

/** Utilisateur de la base de données MySQL. */
define( 'DB_USER', 'root' );

/** Mot de passe de la base de données MySQL. */
define( 'DB_PASSWORD', '' );

/** Adresse de l’hébergement MySQL. */
define( 'DB_HOST', 'localhost' );

/** Jeu de caractères à utiliser par la base de données lors de la création des tables. */
define( 'DB_CHARSET', 'utf8mb4' );

/**
 * Type de collation de la base de données.
 * N’y touchez que si vous savez ce que vous faites.
 */
define( 'DB_COLLATE', '' );

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
define( 'AUTH_KEY',         'l/2G9*5B`/ eUNI6*V?s{|>85s}|#,e(*i-IKu(W*KCK*21n&Y&/,gBlRQ6)%oaY' );
define( 'SECURE_AUTH_KEY',  'U[A-((cFTZTDu_mts4FC9c<gsomHyhRw|{H!P$1U. 3BwFGz|GX0_T0_Kk-c#Lg$' );
define( 'LOGGED_IN_KEY',    'Dtxhh*6?M?_Ioz0&N)S73czqM/~6crH/#>]b*9tCh?ByS?Uw(j{;:IKMgInH@@,1' );
define( 'NONCE_KEY',        '#t!5fa#&IT>#cFaoT`PvmPAx+rIIm4tAl@Fn37CarN?C;S,aZCIeR2ry!X>2jKS_' );
define( 'AUTH_SALT',        ':8n#OcqwbvYRui7ORy1J; U%j`)?H)phy6?_8]24Vfc#X s3YMm^SS2N)Qrx?)GI' );
define( 'SECURE_AUTH_SALT', 'ODce@burSUZJQYb]y{mQ]oJ~>G7h`}1+>o@j>D=/xgYPY:(&(zy5n$pk`]DnwYc6' );
define( 'LOGGED_IN_SALT',   'SjOaUUgOKJ^QV^&_CU*6ot}48fh</-d(o%&4+JIE`,uxa7Vqq!6D]8b}||*$;cI~' );
define( 'NONCE_SALT',       'qX<#|_`.6,@Y]Rnwt4+qcS42e#+kpRP9UPLj*moDYJPG>v#9UyD#d*AN2cMBg|#j' );
/**#@-*/

/**
 * Préfixe de base de données pour les tables de WordPress.
 *
 * Vous pouvez installer plusieurs WordPress sur une seule base de données
 * si vous leur donnez chacune un préfixe unique.
 * N’utilisez que des chiffres, des lettres non-accentuées, et des caractères soulignés !
 */
$table_prefix = 'cc_';

/**
 * Pour les développeurs : le mode déboguage de WordPress.
 *
 * En passant la valeur suivante à "true", vous activez l’affichage des
 * notifications d’erreurs pendant vos essais.
 * Il est fortement recommandé que les développeurs d’extensions et
 * de thèmes se servent de WP_DEBUG dans leur environnement de
 * développement.
 *
 * Pour plus d’information sur les autres constantes qui peuvent être utilisées
 * pour le déboguage, rendez-vous sur le Codex.
 *
 * @link https://fr.wordpress.org/support/article/debugging-in-wordpress/
 */
define( 'WP_DEBUG', false );

/* C’est tout, ne touchez pas à ce qui suit ! Bonne publication. */

/** Chemin absolu vers le dossier de WordPress. */
if ( ! defined( 'ABSPATH' ) )
  define( 'ABSPATH', dirname( __FILE__ ) . '/' );

/** Réglage des variables de WordPress et de ses fichiers inclus. */
require_once( ABSPATH . 'wp-settings.php' );
