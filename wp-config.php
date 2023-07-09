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
 * * Configurações do banco de dados
 * * Chaves secretas
 * * Prefixo do banco de dados
 * * ABSPATH
 *
 * @link https://wordpress.org/support/article/editing-wp-config-php/
 *
 * @package WordPress
 */

// ** Configurações do banco de dados - Você pode pegar estas informações com o serviço de hospedagem ** //
/** O nome do banco de dados do WordPress */
define( 'DB_NAME', 'cursoemvideo' );

/** Usuário do banco de dados MySQL */
define( 'DB_USER', 'root' );

/** Senha do banco de dados MySQL */
define( 'DB_PASSWORD', '' );

/** Nome do host do MySQL */
define( 'DB_HOST', 'localhost' );

/** Charset do banco de dados a ser usado na criação das tabelas. */
define( 'DB_CHARSET', 'utf8mb4' );

/** O tipo de Collate do banco de dados. Não altere isso se tiver dúvidas. */
define( 'DB_COLLATE', '' );

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
define( 'AUTH_KEY',         '>[7B*|]_VyRhth`/6KgIcOWMGWx[:W>@1WLNc%##Gf+3jflwp$;wBwL:Fa<kJ4_v' );
define( 'SECURE_AUTH_KEY',  ' ^l5 NSHm4+%J`s#Hdu)6{<8M|yGAEBG!G 0no3|GX|hSwT@{vRaq{,vLUO%gQ{#' );
define( 'LOGGED_IN_KEY',    'NoBjI4g%H/kU7Ox`Lx`evHYpC{!mVODq:1+s.iWy_BF| D$5Qhr,|^U8PWF3gR~O' );
define( 'NONCE_KEY',        'g6]g:^x`^(J3=.GO8C;rCQGq!|)T9wl-QS2|p;$W{k,g x:bB:6k`lba,dpO^A^#' );
define( 'AUTH_SALT',        'X^1,T9{<X&_&8~]hTNa2Gs4$h _bRz?edkN)G$HD {kGF5iuZsAO3#wE.!#g/:O-' );
define( 'SECURE_AUTH_SALT', '=XdfW+SQq1A- ,QrDEFW*UP#5Ew@6HtT%ykhk~(*.;=Fg#t^(7*=44uk&w$?76q#' );
define( 'LOGGED_IN_SALT',   'xURVjdsQ:dq[zR{U^IKK]2rM^|ao?B9$lvKM^}6K-pmy!d@h,@q?Dz&K`FA@5W-h' );
define( 'NONCE_SALT',       '= lTKy.,%+oxolfMEd)B}0kKoeJ>jg(SSC;o(w>mfru(BRGvE;YwB&nWjfC;=1)X' );

/**#@-*/

/**
 * Prefixo da tabela do banco de dados do WordPress.
 *
 * Você pode ter várias instalações em um único banco de dados se você der
 * um prefixo único para cada um. Somente números, letras e sublinhados!
 */
$table_prefix = 'cv_';

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
 * @link https://wordpress.org/support/article/debugging-in-wordpress/
 */
define( 'WP_DEBUG', false );

/* Adicione valores personalizados entre esta linha até "Isto é tudo". */



/* Isto é tudo, pode parar de editar! :) */

/** Caminho absoluto para o diretório WordPress. */
if ( ! defined( 'ABSPATH' ) ) {
	define( 'ABSPATH', __DIR__ . '/' );
}

/** Configura as variáveis e arquivos do WordPress. */
require_once ABSPATH . 'wp-settings.php';
