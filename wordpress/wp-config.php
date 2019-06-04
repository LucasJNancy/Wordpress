<?php
/**
 * La configuration de base de votre installation WordPress.
 *
 * Ce fichier contient les réglages de configuration suivants : réglages MySQL,
 * préfixe de table, clés secrètes, langue utilisée, et ABSPATH.
 * Vous pouvez en savoir plus à leur sujet en allant sur
 * {@link http://codex.wordpress.org/fr:Modifier_wp-config.php Modifier
 * wp-config.php}. C’est votre hébergeur qui doit vous donner vos
 * codes MySQL.
 *
 * Ce fichier est utilisé par le script de création de wp-config.php pendant
 * le processus d’installation. Vous n’avez pas à utiliser le site web, vous
 * pouvez simplement renommer ce fichier en "wp-config.php" et remplir les
 * valeurs.
 *
 * @package WordPress
 */

// ** Réglages MySQL - Votre hébergeur doit vous fournir ces informations. ** //
/** Nom de la base de données de WordPress. */
define( 'DB_NAME', 'wordpress' );

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
 * {@link https://api.wordpress.org/secret-key/1.1/salt/ le service de clefs secrètes de WordPress.org}.
 * Vous pouvez modifier ces phrases à n’importe quel moment, afin d’invalider tous les cookies existants.
 * Cela forcera également tous les utilisateurs à se reconnecter.
 *
 * @since 2.6.0
 */
define( 'AUTH_KEY',         'V(v Rs1 fpRzn[D:SF%=EVy6/`@aaiaptjze=iK,(gqnz9Tn;.x`Mh14V`eUHQ{4' );
define( 'SECURE_AUTH_KEY',  'N-j*!`GM[ycF@u;:@[wW:OG 9~6=7:jkGWD2$PVKw?C|<ws}U)TDTDbS{Yu_o(1 ' );
define( 'LOGGED_IN_KEY',    'ru)|P@>3zHrty6Vl}28JyluZ}Z 8JgL@xfT]qFpi){[X:y?hS/jY^e>2&M.UxB0x' );
define( 'NONCE_KEY',        '/7q)hG]T}a51>A_D^%[R~B;!W)ZyTP$]xoSJbY{XPm:]QS&U3d3i>RMo!=z1@U 4' );
define( 'AUTH_SALT',        'FM?FsJg:0Te+hIw|{{,gT:8X;k?n|NGVLQ*3JT)|[GI;2=&X{&Gw)O=9,=zgf;0D' );
define( 'SECURE_AUTH_SALT', ',V.]|N>jU7K.uB#4mP]HX;v8fW3o>whv$jK#hgz0%+w~juQw>JUdPgByI#GyRbdl' );
define( 'LOGGED_IN_SALT',   'NKUX4Gj6qR1?jW&=X!%J?`98@pV(^,#2gpOijgsk!]&8?e?cBWt?#+NOc}lA:}ti' );
define( 'NONCE_SALT',       '5$CKKGp%P^!5?x^7U;6eSg/#*rhr0C{AmI78v(j5=i<I0WqZMTQ$Yfj{d8-;$z2~' );
/**#@-*/

/**
 * Préfixe de base de données pour les tables de WordPress.
 *
 * Vous pouvez installer plusieurs WordPress sur une seule base de données
 * si vous leur donnez chacune un préfixe unique.
 * N’utilisez que des chiffres, des lettres non-accentuées, et des caractères soulignés !
 */
$table_prefix = 'wp_';

/**
 * Pour les développeurs : le mode déboguage de WordPress.
 *
 * En passant la valeur suivante à "true", vous activez l’affichage des
 * notifications d’erreurs pendant vos essais.
 * Il est fortemment recommandé que les développeurs d’extensions et
 * de thèmes se servent de WP_DEBUG dans leur environnement de
 * développement.
 *
 * Pour plus d’information sur les autres constantes qui peuvent être utilisées
 * pour le déboguage, rendez-vous sur le Codex.
 *
 * @link https://codex.wordpress.org/Debugging_in_WordPress
 */
define('WP_DEBUG', false);

/* C’est tout, ne touchez pas à ce qui suit ! Bonne publication. */

/** Chemin absolu vers le dossier de WordPress. */
if ( !defined('ABSPATH') )
	define('ABSPATH', dirname(__FILE__) . '/');

/** Réglage des variables de WordPress et de ses fichiers inclus. */
require_once(ABSPATH . 'wp-settings.php');
