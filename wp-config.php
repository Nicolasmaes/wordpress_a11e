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
define( 'DB_NAME', 'db_a11e' );

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
define( 'AUTH_KEY',         'H&V(fM^Mk?aa:3S(T_-+CkR`sjB_-3/DJH]|?y0Iuss%2tnJ:tFr/v[,6E{F)b{)' );
define( 'SECURE_AUTH_KEY',  'K!U:kBaw!~$-%vpvK,+){0Nq)gRloBpP7X~Y{esl/8xM8R23wXKE6THn<W`i4|}h' );
define( 'LOGGED_IN_KEY',    '[to[c>)t4NYo@D4wWz(FtvRtyJXa;iaxK.ZI}BQMK&k86?)IOz_MK P j^z8l;9#' );
define( 'NONCE_KEY',        '}<B|GT+vt%n}3.,~w0fW)pG2DGC{wG;8kOU}?lyO(#EYJE!T3(#>+A-sdWyV[(B8' );
define( 'AUTH_SALT',        'C,!l<~m.Ez04S@+I;GwKMOJW1Lw#Uh1WORbLOSH<~n2hA!&[YXAKPYI)%t_t6y%^' );
define( 'SECURE_AUTH_SALT', '~?HzKtP_GAnzb]I{p_!YMOrerAO<jX[VZc omS/gWZ[oSE4o {L{5BFi!7u}E@UZ' );
define( 'LOGGED_IN_SALT',   '~5P i~)cn-*Y2ynyv_OQJ,M7z%&qJ-Z[k-}GKGt $kFZ7[1WCT~;|E`lR$yP^^.^' );
define( 'NONCE_SALT',       ')^c1NvyDH!#Gm:DCDDvhre@q`7tu`o0!-,e!FgQfx% 8dkx%4lTWbniEDY8FKup%' );
/**#@-*/

/**
 * Préfixe de base de données pour les tables de WordPress.
 *
 * Vous pouvez installer plusieurs WordPress sur une seule base de données
 * si vous leur donnez chacune un préfixe unique.
 * N’utilisez que des chiffres, des lettres non-accentuées, et des caractères soulignés !
 */
$table_prefix = 'a11e_';

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
