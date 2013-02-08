<?php
/**
 * La configuration de base de votre installation WordPress.
 *
 * Ce fichier contient les réglages de configuration suivants : réglages MySQL,
 * préfixe de table, clefs secrètes, langue utilisée, et ABSPATH.
 * Vous pouvez en savoir plus à leur sujet en allant sur 
 * {@link http://codex.wordpress.org/Editing_wp-config.php Modifier
 * wp-config.php} (en anglais). C'est votre hébergeur qui doit vous donner vos
 * codes MySQL.
 *
 * Ce fichier est utilisé par le script de création de wp-config.php pendant
 * le processus d'installation. Vous n'avez pas à utiliser le site web, vous
 * pouvez simplement renommer ce fichier en "wp-config.php" et remplir les
 * valeurs.
 *
 * @package WordPress
 */

// ** MySQL settings - You can get this info from your web host ** //
/** The name of the database for WordPress */
define('DB_NAME', 'wp_khelil');

/** MySQL database username */
define('DB_USER', 'root');

/** MySQL database password */
define('DB_PASSWORD', '');

/** MySQL hostname */
define('DB_HOST', 'localhost');

/** Database Charset to use in creating database tables. */
define('DB_CHARSET', 'utf8');

/** The Database Collate type. Don't change this if in doubt. */
define('DB_COLLATE', '');
/**#@+
 * Clefs uniques d'authentification et salage.
 *
 * Remplacez les valeurs par défaut par des phrases uniques !
 * Vous pouvez générer des phrases aléatoires en utilisant 
 * {@link https://api.wordpress.org/secret-key/1.1/salt/ le service de clefs secrètes de WordPress.org}.
 * Vous pouvez modifier ces phrases à n'importe quel moment, afin d'invalider tous les cookies existants.
 * Cela forcera également tous les utilisateurs à se reconnecter.
 *
 * @since 2.6.0
 */
define('AUTH_KEY',         'f&.Ei(3PB MWS77t_R>T`^darU4|{Fdd^E?]pq>>DvT&3<d$cAHX+%x/%sQ%8L=^');
define('SECURE_AUTH_KEY',  'tBNAY ZwQr,o9.,%L`bc2:j!wP?dWd_K=b}q@bMVN;O%Zb@h.@d.)+v ]*?`&{ot');
define('LOGGED_IN_KEY',    ')>>EY?Rx+;eXkixN~O}RHh7[#VY/ul<|xS,qkuiKnqB6;Ye0f=AC+-8]dq-[JN@P');
define('NONCE_KEY',        'Y46lIl<d=rsQggh/%u/&me5%Og(Jlc#Rs^,/I@9[49OJwk3f3q1oSBm_d<S;~}Z!');
define('AUTH_SALT',        '2~tP;F.em+GS]2)rj@Vb=Zg4}~.&K7*2V?|O}h@?@k q`eoY|.;bNR&J=Lf]x,jf');
define('SECURE_AUTH_SALT', 'C+O1&hzndV&!OLG_6iMU~YOVcv:Pl5uJw~[$Sco6m9g|7Kk#,U0A!w`Qq:-Jxq9j');
define('LOGGED_IN_SALT',   '*4Mi5B5+$5R~,i0Ty90v~VD;IqLF/TLte<P,qz42~?m?mK`xU&h_4[CN5W4bxE6@');
define('NONCE_SALT',       'y4EwBU3 0gKp|_Gof&R>cPY.|9R1.PL(-)E<ib%98QG1|Zj9I~tQ114T+`b#4nV`');
/**#@-*/

/**
 * Préfixe de base de données pour les tables de WordPress.
 *
 * Vous pouvez installer plusieurs WordPress sur une seule base de données
 * si vous leur donnez chacune un préfixe unique. 
 * N'utilisez que des chiffres, des lettres non-accentuées, et des caractères soulignés!
 */
$table_prefix  = 'wp_';

/**
 * Langue de localisation de WordPress, par défaut en Anglais.
 *
 * Modifiez cette valeur pour localiser WordPress. Un fichier MO correspondant
 * au langage choisi doit être installé dans le dossier wp-content/languages.
 * Par exemple, pour mettre en place une traduction française, mettez le fichier
 * fr_FR.mo dans wp-content/languages, et réglez l'option ci-dessous à "fr_FR".
 */
define('WPLANG', 'fr_FR');

/** 
 * Pour les développeurs : le mode deboguage de WordPress.
 * 
 * En passant la valeur suivante à "true", vous activez l'affichage des
 * notifications d'erreurs pendant votre essais.
 * Il est fortemment recommandé que les développeurs d'extensions et
 * de thèmes se servent de WP_DEBUG dans leur environnement de 
 * développement.
 */ 
define('WP_DEBUG', false); 

/* C'est tout, ne touchez pas à ce qui suit ! Bon blogging ! */

/** Chemin absolu vers le dossier de WordPress. */
if ( !defined('ABSPATH') )
	define('ABSPATH', dirname(__FILE__) . '/');

/** Réglage des variables de WordPress et de ses fichiers inclus. */
require_once(ABSPATH . 'wp-settings.php');