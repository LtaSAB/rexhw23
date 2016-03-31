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
define('DB_NAME', 'hw23');

/** Имя пользователя MySQL */
define('DB_USER', 'root');

/** Пароль к базе данных MySQL */
define('DB_PASSWORD', '');

/** Имя сервера MySQL */
define('DB_HOST', 'localhost');

/** Кодировка базы данных для создания таблиц. */
define('DB_CHARSET', 'utf8mb4');

/** Схема сопоставления. Не меняйте, если не уверены. */
define('DB_COLLATE', '');

/**#@+
 * Уникальные ключи и соли для аутентификации.
 *
 * Смените значение каждой константы на уникальную фразу.
 * Можно сгенерировать их с помощью {@link https://api.wordpress.org/secret-key/1.1/salt/ сервиса ключей на WordPress.org}
 * Можно изменить их, чтобы сделать существующие файлы cookies недействительными. Пользователям потребуется авторизоваться снова.
 *
 * @since 2.6.0
 */
define('AUTH_KEY',         '=;]!..[]GZXL;0+*h`V<s$[n&MkpTxy17UR|<0?0/IhkSJCn6WOBiQ(XviU7Iz@(');
define('SECURE_AUTH_KEY',  'yjd/oC0jSZ-47|SS><QWs)}2H)!MU)kZypH]1S+DF`:SE}JfT!7p nb04m/4o-xh');
define('LOGGED_IN_KEY',    'Wli-(aCSscM|K.EmFYpL!<Fd}M5X+.K<D?V<i-ICNNk+iOh>=6X)zHVv-H79odoM');
define('NONCE_KEY',        'UO1lWG]/<05?+asL3 WAo^`srSg$rK*&ePuUM-eTL|AAcw08X!|_(TgkgGM9zUCz');
define('AUTH_SALT',        '__]v)J,1D))wSH-n^(T2Yl&NY22>W<E7f}!bKJ/t1^tXeXZ17yW7F~piPsbt9+ZT');
define('SECURE_AUTH_SALT', '):#Jl9p6B_kLVPgVsYs}>}|&uda0+?~}.?r6s6,;-O0B+<>e1eq,1lq)69h~HxU&');
define('LOGGED_IN_SALT',   'I+$JWVu1WzHHO{`ZeR-$7G-?/^i8k:HwTb{]GW>Yx{p4#EK|C1 ^K%-|*vNk:BWg');
define('NONCE_SALT',       'u=PUF 7yEEAIt)5[%{`Mt5HT!*N57s| k(8W`+sk|&sB>Nzy+`ug-zYB-+Z^uU&H');

/**#@-*/

/**
 * Префикс таблиц в базе данных WordPress.
 *
 * Можно установить несколько сайтов в одну базу данных, если использовать
 * разные префиксы. Пожалуйста, указывайте только цифры, буквы и знак подчеркивания.
 */
$table_prefix  = 'wp_';

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
define('WP_DEBUG', false);

/* Это всё, дальше не редактируем. Успехов! */

/** Абсолютный путь к директории WordPress. */
if ( !defined('ABSPATH') )
	define('ABSPATH', dirname(__FILE__) . '/');

/** Инициализирует переменные WordPress и подключает файлы. */
require_once(ABSPATH . 'wp-settings.php');
