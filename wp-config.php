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
define( 'DB_NAME', 'demo-wordpress' );

/** Utilisateur de la base de données MySQL. */
define( 'DB_USER', 'root' );

/** Mot de passe de la base de données MySQL. */
define( 'DB_PASSWORD', 'root' );

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
define( 'AUTH_KEY',         'Ipn)|/4FR:OcO~#<.SHw&pEIOspCdZ:]pJ!&=#CAsI#w7).<l5E[ByF@cR14E{|;' );
define( 'SECURE_AUTH_KEY',  '0aP}F,qnQ`&ex,81Thb.S5+LOM&|a{)99WS<7sM/<bE~~o8x@7ET>Q2}[I1==8.x' );
define( 'LOGGED_IN_KEY',    'CTca-(|IkF3sFy/c){{:3PGTqw%7TDwlw.dA9u3OM8f4zd?s* lBu.lZR-S{R,^Q' );
define( 'NONCE_KEY',        'ma,)7(I`M.=M>lk8:ekTfx,S#U)wA]<{N%yPs7[*]XqK5T#T , hZ`M8HV{ ^6(J' );
define( 'AUTH_SALT',        ']1MBA0$-`}A<nIKy0~CD;*ICm}5Q7]e]$E<sHnR0vi_KCgU>o;D($Rg$o&zl$po+' );
define( 'SECURE_AUTH_SALT', '4,l_m.^UQ!+~M8Hlcsb>@xS3P~Y{6i]iqX(#vT(GMD ;p{I8r}]N|h_eDa-:XQh@' );
define( 'LOGGED_IN_SALT',   'ZpZ+Rb<S+x.3:Fp#d>QtsV<*l+>lL@(@yOw$f&Rp_l|PDi(3$rW|^:1/MG]@dQJ)' );
define( 'NONCE_SALT',       '$qdh[7:_]fgu$%8/>J)8Y@sXa*3dh;uHQ@1DAn=~xv`e%kl8B;8[Z6l7W/6tnaa/' );
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
