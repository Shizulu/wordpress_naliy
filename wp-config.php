<?php
/**
 * WordPress の基本設定
 *
 * このファイルは、インストール時に wp-config.php 作成ウィザードが利用します。
 * ウィザードを介さずにこのファイルを "wp-config.php" という名前でコピーして
 * 直接編集して値を入力してもかまいません。
 *
 * このファイルは、以下の設定を含みます。
 *
 * * MySQL 設定
 * * 秘密鍵
 * * データベーステーブル接頭辞
 * * ABSPATH
 *
 * @link http://wpdocs.osdn.jp/wp-config.php_%E3%81%AE%E7%B7%A8%E9%9B%86
 *
 * @package WordPress
 */

// 注意:
// Windows の "メモ帳" でこのファイルを編集しないでください !
// 問題なく使えるテキストエディタ
// (http://wpdocs.osdn.jp/%E7%94%A8%E8%AA%9E%E9%9B%86#.E3.83.86.E3.82.AD.E3.82.B9.E3.83.88.E3.82.A8.E3.83.87.E3.82.A3.E3.82.BF 参照)
// を使用し、必ず UTF-8 の BOM なし (UTF-8N) で保存してください。

// ** MySQL 設定 - この情報はホスティング先から入手してください。 ** //
/** WordPress のためのデータベース名 */
define('DB_NAME', 'miraymelia_database01');

/** MySQL データベースのユーザー名 */
define('DB_USER', 'miraymelia');

/** MySQL データベースのパスワード */
define('DB_PASSWORD', 'mitsulu3');

/** MySQL のホスト名 */
define('DB_HOST', 'mysql703.db.sakura.ne.jp');

/** データベースのテーブルを作成する際のデータベースの文字セット */
define('DB_CHARSET', 'utf8');

/** データベースの照合順序 (ほとんどの場合変更する必要はありません) */
define('DB_COLLATE', '');

/**#@+
 * 認証用ユニークキー
 *
 * それぞれを異なるユニーク (一意) な文字列に変更してください。
 * {@link https://api.wordpress.org/secret-key/1.1/salt/ WordPress.org の秘密鍵サービス} で自動生成することもできます。
 * 後でいつでも変更して、既存のすべての cookie を無効にできます。これにより、すべてのユーザーを強制的に再ログインさせることになります。
 *
 * @since 2.6.0
 */
define('AUTH_KEY',         'cDWD(RN<PVkBZB+p UojY-y#q^|+#;r*<Nj0{`XI(|}-LC.[[89#QjAAb2:OFCIG');
define('SECURE_AUTH_KEY',  'S`NoU.+hW.[5*a,H}*W]ftx^I4/|Nc=+.=<y/}M,T7|6(xQjI8}pZugnZd77|?_J');
define('LOGGED_IN_KEY',    'r@8 Oxx)J!NB1>#,8-whO*=:bt^wf4`)?b O^Hbfd&yX/~/-#e}1ib4-]Fc)7E?D');
define('NONCE_KEY',        'FvfS2<X+W.1(-4tG~}^Yr]b|{bJk%<r<lHIEz30b^/NfKFKFJaQs,O$(.J9[jaR>');
define('AUTH_SALT',        ';b0VVoR^3z3--c%{95dV0|=jJcA~|u<$EL+1=K6+&wTQ/$(m`~iRp~QL,zrE:_.y');
define('SECURE_AUTH_SALT', ':agaw;Osus`3D4V?KyJ{q%5`:i[6k=_>Sl/qYG^4:,c9uD/uE(:&($E,sx9#*3_X');
define('LOGGED_IN_SALT',   'f-e1Q n.+vhGvD/+4ft]+U#+=X=?4:]|ql/@Y`Q?H]~0D?LL@w49vaQ)R=z7zs+W');
define('NONCE_SALT',       '8+:h,Rj_z]=i]=Ei{+ipxJyP]kSDjs1_Uwu,IyIp2RqRel$l= !JK lO}Yyc:)|#');


/**#@-*/

/**
 * WordPress データベーステーブルの接頭辞
 *
 * それぞれにユニーク (一意) な接頭辞を与えることで一つのデータベースに複数の WordPress を
 * インストールすることができます。半角英数字と下線のみを使用してください。
 */
$table_prefix  = 'wp_';

/**
 * 開発者へ: WordPress デバッグモード
 *
 * この値を true にすると、開発中に注意 (notice) を表示します。
 * テーマおよびプラグインの開発者には、その開発環境においてこの WP_DEBUG を使用することを強く推奨します。
 *
 * その他のデバッグに利用できる定数については Codex をご覧ください。
 *
 * @link http://wpdocs.osdn.jp/WordPress%E3%81%A7%E3%81%AE%E3%83%87%E3%83%90%E3%83%83%E3%82%B0
 */
define('WP_DEBUG', true);

/* 編集が必要なのはここまでです ! WordPress でブログをお楽しみください。 */

/** Absolute path to the WordPress directory. */
if ( !defined('ABSPATH') )
	define('ABSPATH', dirname(__FILE__) . '/');

/** Sets up WordPress vars and included files. */
require_once(ABSPATH . 'wp-settings.php');
