<?php
/**
 * As configurações básicas do WordPress
 *
 * O script de criação wp-config.php usa esse arquivo durante a instalação.
 * Você não precisa usar o site, você pode copiar este arquivo
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

// ** Configurações do MySQL - Você pode pegar estas informações com o serviço de hospedagem ** //
/** O nome do banco de dados do WordPress */
define('DB_NAME', 'wp-curso');

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
 * Você pode alterá-las a qualquer momento para invalidar quaisquer
 * cookies existentes. Isto irá forçar todos os
 * usuários a fazerem login novamente.
 *
 * @since 2.6.0
 */
define('AUTH_KEY',         'nCY!.,@Gkbr9J|4vvy%!sN732@DH$t1yD14sy ]/2|Hh@K]<=oA|kv)Zn?>0+}J<');
define('SECURE_AUTH_KEY',  '={Y|mR*Z10mvRVJg=D,MDX9Wr7e~&llKmqWe&Fsm&Y,`)}ciCN8|Bhw6!|L>5PY=');
define('LOGGED_IN_KEY',    '+)B2Ec.Fe})HG&72[()V&G)fItDl]=O}$S6_5ZSk!BqEq@RoP$T,jF9 HC}->@l|');
define('NONCE_KEY',        '*/#h,Qw|5y}~yMMm`wY2Y$O$OC<j6+~:1A;z1S|M6&1HX+W]9U9J({0$ .as!r$K');
define('AUTH_SALT',        '3!.3CS[A1]=+L7@K(z&[nO3&Cs[|B|5;Zm4A%{u!%-v-*lQ^a;!SHGDB[CKjpZ+a');
define('SECURE_AUTH_SALT', 'digFlzT^{mAKqgy]iY#,IaT)-M7$+$-~tu0Tyex|VFD9Atchw1{1bZ70V+WO%O2+');
define('LOGGED_IN_SALT',   'Z]Bw]S*@hS{zPunEe61|%G3|fL~wj<o#KAg[*]],N(465jq{rgG0Xm|n)-K1TpFh');
define('NONCE_SALT',       '|#>W;K;rQl]*D5o_L)s?5+|:kwV.eS6a+Rc8((OnV6DV_E|3e7;lg|4.=kqj{@PB');

/**#@-*/

/**
 * Prefixo da tabela do banco de dados do WordPress.
 *
 * Você pode ter várias instalações em um único banco de dados se você der
 * um prefixo único para cada um. Somente números, letras e sublinhados!
 */
$table_prefix = 'wp_';

/**
 * Para desenvolvedores: Modo de debug do WordPress.
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
