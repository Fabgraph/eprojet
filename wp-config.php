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
define('DB_NAME', 'eprojet');

/** Utilisateur de la base de données MySQL. */
define('DB_USER', 'root');

/** Mot de passe de la base de données MySQL. */
define('DB_PASSWORD', '');

/** Adresse de l’hébergement MySQL. */
define('DB_HOST', 'localhost');

/** Jeu de caractères à utiliser par la base de données lors de la création des tables. */
define('DB_CHARSET', 'utf8mb4');

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
define('AUTH_KEY',         '/S7OkRmt9:Kz*Y@P(T=MpK^L>A+t4I~ktoh}pU$NA`HK9OtPX7Z%$=TO~GBoO-XP');
define('SECURE_AUTH_KEY',  '0}Jrq2YkOeHwm0dArz*6HF.O6&9d8sGQd8=Z0](pO4o1=R^rkdT*v75O1p}}df^{');
define('LOGGED_IN_KEY',    '7cxnE=2*#CA@mhF-i9pw%DXXnSgYbf&$u-4BE1+OcTDk*Jp$;vVgU}G?ZTlre^@@');
define('NONCE_KEY',        '$;&?c!p.O~]QSl>HG[bQ1mt~)DfE[4,iu}pZ&fH?4JA#w7pmwWwuz?eVlC i]8?4');
define('AUTH_SALT',        ';D7F:&-d.((!&tG ;{q~!N7;{f[[(!W/@d*1[/E;;!z-v^_x@qxU9a]V&1/*V[KZ');
define('SECURE_AUTH_SALT', '/I5BpwB,~Xa:zII(BT,8f<;.=0UTkX5GmaPu>@*F__n#c17MY=_TRJ{-uXjS[SVb');
define('LOGGED_IN_SALT',   'vDf|59PNc`X8i!UwyrtQ<kGgun!r8qOB?b$7*8u#]3cmub~_Ez9J+<]edBkl(`p]');
define('NONCE_SALT',       'p7vYl;}@:.y}H&*y?]Li:)pd1NtqdV@[w)7:W,&Y:3~2|%:&RJAe.l]SP+C7nxHN');
/**#@-*/

/**
 * Préfixe de base de données pour les tables de WordPress.
 *
 * Vous pouvez installer plusieurs WordPress sur une seule base de données
 * si vous leur donnez chacune un préfixe unique.
 * N’utilisez que des chiffres, des lettres non-accentuées, et des caractères soulignés !
 */
$table_prefix  = 'wp_';

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

/* C’est tout, ne touchez pas à ce qui suit ! */

/** Chemin absolu vers le dossier de WordPress. */
if ( !defined('ABSPATH') )
	define('ABSPATH', dirname(__FILE__) . '/');

/** Réglage des variables de WordPress et de ses fichiers inclus. */
require_once(ABSPATH . 'wp-settings.php');