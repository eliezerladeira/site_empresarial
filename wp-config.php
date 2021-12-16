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
 * @link https://wordpress.org/support/article/editing-wp-config-php/
 *
 * @package WordPress
 */

// ** Configurações do MySQL - Você pode pegar estas informações com o serviço de hospedagem ** //
/** O nome do banco de dados do WordPress */
define( 'DB_NAME', 'portfolio_site_empresarial' );

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
define( 'AUTH_KEY',         '7KHWO!IDC$)W*GgEZD-*m&B>+,Affg=_22(;=~zg>. +Fc[B^twn~1hRqky2#g`o' );
define( 'SECURE_AUTH_KEY',  '$j1MR.c;wg=9CpEr:b%KYL;Q}:dI8>/xN<EDK}_oh9_@!pxj5>P?DRp/hqR`TC}a' );
define( 'LOGGED_IN_KEY',    'GwjnN?EzNl>H)CS4:OJ.>gIh]!Bm;}Z&LvAfr8joy3w(Xw-J9,Aqv40mB~culHJ+' );
define( 'NONCE_KEY',        ':HJ^ V=A,OO7U`~~4`I|k<dhnEt?d|vWD$A:wseFGWi8pH}q1KjOA7K+#vz`FBVJ' );
define( 'AUTH_SALT',        'z+-_v_GK[W6BHu ?}^0Z;Xb]`.q g2&#8v/]C8wjbG/3LD*lA{i(w[Tf<[&Z^>QD' );
define( 'SECURE_AUTH_SALT', 'JRQY*wF[H1-Fkefxc;@9s<;]),]K8=Jfw(}s1,[cET|-cL?}h)hyt8-}e1.8L ,m' );
define( 'LOGGED_IN_SALT',   '1}avk~kib}o>B.ybc/s][.h0}4:9qJ!%?ER 2`:9AH{!]R_v*:#V=YL_HmL*Y2*<' );
define( 'NONCE_SALT',       'zRn:kIhHySZ?Yz>x GG]_@sDn2Yl1~hf1UVD(lJq--#ir4)q3?n$mv&*IUzAN( t' );

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
 * @link https://wordpress.org/support/article/debugging-in-wordpress/
 */
define( 'WP_DEBUG', false );

/* Isto é tudo, pode parar de editar! :) */

/** Caminho absoluto para o diretório WordPress. */
if ( ! defined( 'ABSPATH' ) ) {
	define( 'ABSPATH', __DIR__ . '/' );
}

/** Configura as variáveis e arquivos do WordPress. */
require_once ABSPATH . 'wp-settings.php';
