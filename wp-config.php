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
define( 'DB_NAME', 'mv_acad' );

/** Utilisateur de la base de données MySQL. */
define( 'DB_USER', 'root' );

/** Mot de passe de la base de données MySQL. */
define( 'DB_PASSWORD', '' );

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
define( 'AUTH_KEY',         'XZouW#sjEjAx J]nXH :RnH?_zT|:*No/*0p!sS~3n&<UsuoUVp.=]<&O0K2Xl-0' );
define( 'SECURE_AUTH_KEY',  'yh;HPEoi8%ZMeo]Wt33$C5!%RNp%pC>Aj5N=rTI^}zS{h-L&<zHj;z)VOU[,pHx?' );
define( 'LOGGED_IN_KEY',    '#_U^!eHj40ws/zSGk)g_8238 rdh{69i6.2K$`5$S69=oPkQgF(]*{kSKG<gwT$=' );
define( 'NONCE_KEY',        'Z]6qM<s6jN@jWi3T!.@c{?MEa]j?Rx5q2,$O]QXw2 y[gsD&NmBc<63WYE?>^y.c' );
define( 'AUTH_SALT',        'KlEE2e;dG/a7oiDcCW36LWaQ0QZ#feil(~H iB:}N4,LjX}6LHUHy<qp@w,>QinQ' );
define( 'SECURE_AUTH_SALT', '?)V0zD,CjT5L>y0|BE0R?5bzDFUj+; =}A7F/%{9/R=]>1?a46K5s$FX?xqGAdh2' );
define( 'LOGGED_IN_SALT',   'Go}&RkeZcSZpr#jENPe^*~cN~pk&_&Ysp&j#N,Pm_H n$7bRr`ndy2,Ke)Z/}pwk' );
define( 'NONCE_SALT',       '&ye`DR_Mq2?ho;!ZyTmyVNbzves1l;T0m/:&-Q8zEgZ)R`D6g%JUDW[DA`K/;<UV' );
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
