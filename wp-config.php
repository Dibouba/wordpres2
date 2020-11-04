<?php

// BEGIN iThemes Security - Ne modifiez pas ou ne supprimez pas cette ligne
// iThemes Security Config Details: 2
define( 'DISALLOW_FILE_EDIT', true ); // Désactivez l’éditeur de code - iThemes Security > Réglages > Ajustements WordPress > Éditeur de code
// END iThemes Security - Ne modifiez pas ou ne supprimez pas cette ligne

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
define( 'DB_NAME', 'Jarditou' );

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
define( 'AUTH_KEY',         '!RH/9VD4WlmEmP#wbXjd.iSM9n!u0+UfaJx&o158c==WbVy,#:m.Q`)qIqV zijE' );
define( 'SECURE_AUTH_KEY',  '<`N_AF+RZwk&ruVUnQ>yb^JSl1CuT@xsBP%b>f~4?zp6Wt@Fc$XrcGzlC7xO?F:$' );
define( 'LOGGED_IN_KEY',    ',x]TsGi/aq8q6(@LO@{M1>5j~T+T;{n;;uaGBdm~7M!PdxT:2Kc7?-)3rW?w4RA/' );
define( 'NONCE_KEY',        'Sy94J5/Uo0-_#FrD3u>R*Jx>jWs+,:}+*N_+Pxt/0 q(#<`*!Ff)})kN9*<B2L7m' );
define( 'AUTH_SALT',        '5l]erOl-q>zkvmsq0JH8&^OQA8/6?LhrMAhp3wE#{WQSh}=d[x?V0fx6/ukTwO9H' );
define( 'SECURE_AUTH_SALT', '4G!:;C?4CJGxn;YIk3|.L?iLZ-$FCT qFTrue3kSuv#E?}qM~KLdz87c `KBFK8J' );
define( 'LOGGED_IN_SALT',   'rxY/^:=b{PsCw_f`4dr?e*O2n}*J|VZ))UZ%t>lC8`b}Cu7a;LIagOg~62;=<yu%' );
define( 'NONCE_SALT',       'vE7<*_S^RQ)/zbN 4<XfkP1mPQ16%?.N~j?<(^lio^dAr`VzpZX#<A] O#f>fuqg' );
/**#@-*/

/**
 * Préfixe de base de données pour les tables de WordPress.
 *
 * Vous pouvez installer plusieurs WordPress sur une seule base de données
 * si vous leur donnez chacune un préfixe unique.
 * N’utilisez que des chiffres, des lettres non-accentuées, et des caractères soulignés !
 */
$table_prefix = 'jar_';

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
