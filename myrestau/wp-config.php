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
define('DB_NAME', 'wordpress');

/** Usuário do banco de dados MySQL */
define('DB_USER', 'root');

/** Senha do banco de dados MySQL */
define('DB_PASSWORD', 'root');

/** Nome do host do MySQL */
define('DB_HOST', 'localhost');

/** Charset do banco de dados a ser usado na criação das tabelas. */
define('DB_CHARSET', 'utf8mb4');

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
define('AUTH_KEY',         'TD0}~xF,I!y#}N!N0JU).*KJ/r!litrOpb+iM-4;iloLLuOTu5Ibn3_cC&&dn(j%');
define('SECURE_AUTH_KEY',  '% 5] p:x$pX@ y KI%.Sm/:ffj`X#tz8@QE4m11*[cCmAXgLWF-4a8Kf{lBm^(8t');
define('LOGGED_IN_KEY',    'cyj8PTH/?!!]D9,J*/]-NPe6b<nC*NcTgV J,UZl<C4@?vOb:5A*q]>zQafi *Z8');
define('NONCE_KEY',        '_lRy}!xri=pv7Wr+!lo--%DBtp:E#c7mYwJ:ji-(5u~C{lTQk:3Cn0-G4 LP`nG;');
define('AUTH_SALT',        ';to/N~$`^E1g}Pf`^6J#4Pacf(rNU^N6Dk0sfz%_0rC8+fH6Jl{i(]M+KD OBp/,');
define('SECURE_AUTH_SALT', '&_D^W~f#oTqt,+G]-0Y [TUerOCbu>{,IiDK.Uvx$Nx:-6kPV*^}vrj1, uOT-$g');
define('LOGGED_IN_SALT',   'E=y_$|pkftp7wM90FCA}Fp);+HswPYhQtT^Iuz-lt;Gcg_JD)|@M#u PeFY?lgLm');
define('NONCE_SALT',       'a[,MjhEoV`iiJqD?(xJEdY6qrZFTt6{)QU&8U-3I+PG-[fCTv<{T>iK/%&TT/3~5');

/**#@-*/

/**
 * Prefixo da tabela do banco de dados do WordPress.
 *
 * Você pode ter várias instalações em um único banco de dados se você der
 * um prefixo único para cada um. Somente números, letras e sublinhados!
 */
$table_prefix  = 'wp_myrestau';

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
