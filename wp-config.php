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
define( 'DB_PASSWORD', '' );

/** Adresse de l’hébergement MySQL. */
define( 'DB_HOST', 'localhost:3308' );

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
define( 'AUTH_KEY',         'n1a;K4S+A|/$Rz `qf+94Pkv!!PFaoK qU6Q+f$bcQ#$MA;>``5<N:)I}?UfYq&}' );
define( 'SECURE_AUTH_KEY',  'Gg#y9@6+P9ke$N6&Q%^k6n!FiD[h+@w*y64YDMVU~:k:.Du{}Glbvw*KDv0G4<es' );
define( 'LOGGED_IN_KEY',    '~=2tlwg,kQTb&q5cPB}OaB^`JFf|pEhAB=(3]BK2T5&>(<J;^qMi!_LE?A/WHIMg' );
define( 'NONCE_KEY',        'n^ntJ,`w{|_]M&lkPthQt^Qz4%Xx,,N: nAFOwfCgqce+8i]!UJ.5BDerV0%*g/}' );
define( 'AUTH_SALT',        '0:M6yS90]Tan<OO[X[xp)n:iC;1e)_GGsiKmkyqE|1!>F1!4|jys2/{1[jrhM.II' );
define( 'SECURE_AUTH_SALT', 'MY`,x-GclKFEX+6zc;xcAo+U7w*h,VDI!jS,]KARWfyIV5Gl >Im{)R;hMqO=701' );
define( 'LOGGED_IN_SALT',   'BVFyc/?FVBv32e9|fxY~>h:KyqK0?m 5<n}uSxQ:mCR M+*MW|TQc&~2sSjs|+9.' );
define( 'NONCE_SALT',       'XN!C5U]iz=%AThf>0`sooR~&,9Qr1A+PNfE2` m*yK^X1>ET%5rN=g,`(6/IEnZo' );
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
