<?php
/**
 * As configurações básicas do WordPress
 *
 * O script de criação wp-config.php usa esse arquivo durante a instalação.
 * Você não precisa user o site, você pode copiar este arquivo
 * para "wp-config.php" e preencher os valores.
 *
 * Este arquivo contém as seguintes configurações:
 *
 * * Configurações do MySQL
 * * Chaves secretas
 * * Prefixo do banco de dados
 * * ABSPATH
 *
 * @link https://codex.wordpress.org/pt-br:Editando_wp-config.php
 *
 * @package WordPress
 */

// ** Configurações do MySQL - Você pode pegar estas informações
// com o serviço de hospedagem ** //
/** O nome do banco de dados do WordPress */
define('DB_NAME', 'leforte');

/** Usuário do banco de dados MySQL */
define('DB_USER', 'root');

/** Senha do banco de dados MySQL */
define('DB_PASSWORD', '');

/** Nome do host do MySQL */
define('DB_HOST', 'localhost');

/** Charset do banco de dados a ser usado na criação das tabelas. */
define('DB_CHARSET', 'utf8');

/** O tipo de Collate do banco de dados. Não altere isso se tiver dúvidas. */
define('DB_COLLATE', '');

/**#@+
 * Chaves únicas de autenticação e salts.
 *
 * Altere cada chave para um frase única!
 * Você pode gerá-las
 * usando o {@link https://api.wordpress.org/secret-key/1.1/salt/ WordPress.org
 * secret-key service}
 * Você pode alterá-las a qualquer momento para desvalidar quaisquer
 * cookies existentes. Isto irá forçar todos os
 * usuários a fazerem login novamente.
 *
 * @since 2.6.0
 */
define('AUTH_KEY',         'nNFNrTSKrG5.(;A<N,^wRK+M^^T;&Ys19SL}Q/cv[]w2r{VRWo[E7BJ^~SaPY{);');
define('SECURE_AUTH_KEY',  '1-!Z|Idk|MT{^Y}`$MwMV4,5X|3*HgxOWWU;&L)J5sfl0%^;[|PZqlXzoX>2L+,+');
define('LOGGED_IN_KEY',    '<?|+9+.H@Na*Hd-n7:fbn e&O%TDVl:J3CypY[3Yq$B3t#bormI;5OUWhh;ECS{Z');
define('NONCE_KEY',        '-Nv7|sN N^-4U|q9V B*K#|%qzE@I1%}+T;g.3Q0h+S}_nk |UQUx(cH<!crjiHh');
define('AUTH_SALT',        'x}p7k?{=GOAOau0YrP=TSq 3x;Ypp2-AlKd=DL2UTa?1LP?1`1KG?kS|,|gThj%K');
define('SECURE_AUTH_SALT', 'I(y$C!;MZ=LMx,]@_<Su; u+=tK3<X+/Eyb2TwwC[-HAy ESZzPz3H{|#-<}KJ@m');
define('LOGGED_IN_SALT',   'VUx-L;E#|<bE jxYQLepW}qT/jkNEr(,h+k[,G<q0>.k>} bB&-lUT=T-|X<%z@b');
define('NONCE_SALT',       'Ru-(ljn2QwFr[SuPM><iN=u9I+Ik-M$FGyQQWibL7[Z-!sUQm`wB;13g*P:~moi7');

/**#@-*/

/**
 * Prefixo da tabela do banco de dados do WordPress.
 *
 * Você pode ter várias instalações em um único banco de dados se você der
 * para cada um um único prefixo. Somente números, letras e sublinhados!
 */
$table_prefix  = 'wp_';

/**
 * Para desenvolvedores: Modo debugging WordPress.
 *
 * Altere isto para true para ativar a exibição de avisos
 * durante o desenvolvimento. É altamente recomendável que os
 * desenvolvedores de plugins e temas usem o WP_DEBUG
 * em seus ambientes de desenvolvimento.
 *
 * Para informações sobre outras constantes que podem ser utilizadas
 * para depuração, visite o Codex.
 *
 * @link https://codex.wordpress.org/pt-br:Depura%C3%A7%C3%A3o_no_WordPress
 */
define('WP_DEBUG', false);

/* Isto é tudo, pode parar de editar! :) */

/** Caminho absoluto para o diretório WordPress. */
if ( !defined('ABSPATH') )
	define('ABSPATH', dirname(__FILE__) . '/');

/** Configura as variáveis e arquivos do WordPress. */
require_once(ABSPATH . 'wp-settings.php');
