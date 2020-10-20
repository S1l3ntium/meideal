<?php
/**
 * Основные параметры WordPress.
 *
 * Скрипт для создания wp-config.php использует этот файл в процессе
 * установки. Необязательно использовать веб-интерфейс, можно
 * скопировать файл в "wp-config.php" и заполнить значения вручную.
 *
 * Этот файл содержит следующие параметры:
 *
 * * Настройки MySQL
 * * Секретные ключи
 * * Префикс таблиц базы данных
 * * ABSPATH
 *
 * @link https://codex.wordpress.org/Editing_wp-config.php
 *
 * @package WordPress
 */

// ** Параметры MySQL: Эту информацию можно получить у вашего хостинг-провайдера ** //
/** Имя базы данных для WordPress */
define( 'DB_NAME', 'h007381017_meideal_db' );

/** Имя пользователя MySQL */
define( 'DB_USER', 'h007381017_md_rt' );

/** Пароль к базе данных MySQL */
define( 'DB_PASSWORD', 'Ae5KNjJ6Vo' );

/** Имя сервера MySQL */
define( 'DB_HOST', 'localhost' );

/** Кодировка базы данных для создания таблиц. */
define( 'DB_CHARSET', 'utf8mb4' );

/** Схема сопоставления. Не меняйте, если не уверены. */
define( 'DB_COLLATE', '' );

/**#@+
 * Уникальные ключи и соли для аутентификации.
 *
 * Смените значение каждой константы на уникальную фразу.
 * Можно сгенерировать их с помощью {@link https://api.wordpress.org/secret-key/1.1/salt/ сервиса ключей на WordPress.org}
 * Можно изменить их, чтобы сделать существующие файлы cookies недействительными. Пользователям потребуется авторизоваться снова.
 *
 * @since 2.6.0
 */
define( 'AUTH_KEY',         'hju?FWvv#)De/r?vvnnf=bf3C^ @2~t:IL$0]g%=]!3Woq~f!>/>Ap%!xOG~!eo`' );
define( 'SECURE_AUTH_KEY',  '&SJ~18Fc.i?gkC74Tbf]Q9>K(0>{ UgmdIuQc6E J:,)yd}v~uL TAgHJd:mzf^!' );
define( 'LOGGED_IN_KEY',    '$V1#*goe<3U$-g;(yK~a^m!-l*^}#0C-{5+|[1=N*k|SrmBK) 2]^~%20.;Q,2@J' );
define( 'NONCE_KEY',        'lj&TevW/~1Y[I/eJ;hi7[zRJ6TTCi+X}>>Oxr|6Q(cLQRy`Hsk2,!nb+w_a|>%+z' );
define( 'AUTH_SALT',        'ja`}-JG*Y8~_x*wkta>ha,M|HT>l^/:%c[F~3WAezt[_?eY+]Y;I!Lrd^{FMr~1l' );
define( 'SECURE_AUTH_SALT', 'D`s(jLj- wX5lVJXVT h`[@L!;t8bcsc?Gc8yz~Axl;vf#yS>TNSYbBw4z-d:?o4' );
define( 'LOGGED_IN_SALT',   '2#j+AV [Z>inp^V/ID,}$?P$_Spw@#Lf6)xw6W?viS@3c@w/T2afL*n$7,<q10)%' );
define( 'NONCE_SALT',       'H!o6D+7{ )*I7]Z#Y7I9#ef>VN0;Dsy*(-P)q9{+.O)d#cL_p:$6JLrwKCGp2~ +' );

/**#@-*/

/**
 * Префикс таблиц в базе данных WordPress.
 *
 * Можно установить несколько сайтов в одну базу данных, если использовать
 * разные префиксы. Пожалуйста, указывайте только цифры, буквы и знак подчеркивания.
 */
$table_prefix = 'wp_';

/**
 * Для разработчиков: Режим отладки WordPress.
 *
 * Измените это значение на true, чтобы включить отображение уведомлений при разработке.
 * Разработчикам плагинов и тем настоятельно рекомендуется использовать WP_DEBUG
 * в своём рабочем окружении.
 *
 * Информацию о других отладочных константах можно найти в Кодексе.
 *
 * @link https://codex.wordpress.org/Debugging_in_WordPress
 */
define( 'WP_DEBUG', false );

/* Это всё, дальше не редактируем. Успехов! */

/** Абсолютный путь к директории WordPress. */
if ( ! defined( 'ABSPATH' ) ) {
	define( 'ABSPATH', dirname( __FILE__ ) . '/' );
}

/** Инициализирует переменные WordPress и подключает файлы. */
require_once( ABSPATH . 'wp-settings.php' );
