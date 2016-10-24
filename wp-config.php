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
define('DB_NAME', 'portfolio');

/** Имя пользователя MySQL */
define('DB_USER', 'root');

/** Пароль к базе данных MySQL */
define('DB_PASSWORD', 'root');

/** Имя сервера MySQL */
define('DB_HOST', 'localhost');

/** Кодировка базы данных для создания таблиц. */
define('DB_CHARSET', 'utf8mb4');

/** Схема сопоставления. Не меняйте, если не уверены. */
define('DB_COLLATE', '');
define('FS_METHOD', 'direct');

/**#@+
 * Уникальные ключи и соли для аутентификации.
 *
 * Смените значение каждой константы на уникальную фразу.
 * Можно сгенерировать их с помощью {@link https://api.wordpress.org/secret-key/1.1/salt/ сервиса ключей на WordPress.org}
 * Можно изменить их, чтобы сделать существующие файлы cookies недействительными. Пользователям потребуется авторизоваться снова.
 *
 * @since 2.6.0
 */
define('AUTH_KEY',         'zS_;]z=XE5sBzbx;uCegySeb<gwabSRKazy W n9Sc|4zFcG.L5.zbTdvH&rUcMs');
define('SECURE_AUTH_KEY',  'oV@K?*]#%vW2`!{Rc5Prb[}GTLeIbdg;::w.>U[$3Q{D-v2_bfz!.VESm6M#DCFZ');
define('LOGGED_IN_KEY',    'J7n.|Gz< *~G@%|O9Tx7Y(+*Y4mjJO@%=67FH-wPnJlPc#h],zI|VPSPiH>R`}jw');
define('NONCE_KEY',        'T|8*h[shawjMe!t=5d7r<aH0sB&@t`k!5d|nNGaA-StN]!m@R|yP]}.dLXaW|k(j');
define('AUTH_SALT',        'dM:DvQDFJdmtuhVRX6tuWRcM,V4bAIWW^TuP=E1x[B$VR8p%7QpvL-,*`.,4r~jD');
define('SECURE_AUTH_SALT', '(?,Ip~HRPwI~;qQ^4.(3hGk!JA9>4A0zm]Lh5RWN?9FunTjKiKph~Co4^x-H4(!X');
define('LOGGED_IN_SALT',   'N()eI-hVG{4X>k6dt~mva!s/Us2H1&<I5%DUT4F*v#tGC-&!NDX Lo63l`750K-9');
define('NONCE_SALT',       'dh[Jjr2M]t$|l:q;M%wvm1&m7/X+AQkZ&`CwB5E~%E<5`,7uENfoIwsF.oj}+U@i');

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
