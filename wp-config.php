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
define('DB_NAME', 'word');

/** Имя пользователя MySQL */
define('DB_USER', 'word');

/** Пароль к базе данных MySQL */
define('DB_PASSWORD', '2628');

/** Имя сервера MySQL */
define('DB_HOST', 'localhost');

/** Кодировка базы данных для создания таблиц. */
define('DB_CHARSET', 'utf8');

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
define('AUTH_KEY',         '+-d1Y~k^;j+(,yxI@)]jW:_[jZ_mOA(D+q-UQHbVh^$%sXLGi1`DvZ1$VP]_^4Uo');
define('SECURE_AUTH_KEY',  ':V>_vgST|&]lk;Djp,w2kLUa1Zj+j8^@ZbjB#)nSC*3K=#{>p3?0u.vwkJYmf1|D');
define('LOGGED_IN_KEY',    'j<UU+jR.L9*m>2+clAC(~iLPX7auX`n?iI{=q1%yj-?9E8d$;g}Zd#wl}ZY|+3A-');
define('NONCE_KEY',        '2:-;]i]fq7}1+IK~8E5[%WJO(V[rM/-t_o{9+B*FD2$A.&A1(qM4y/;23:GJR;_u');
define('AUTH_SALT',        ';zS 5[GY11>N&LTw/v}jn_^#H)>GsJqC:Z@-}mGQWr>&_jp*{+_ es=:8c~,Z#qY');
define('SECURE_AUTH_SALT', '&+z]+|s-EOm1bn[V}*GN! Gh07lqb-2yg%8f/<YV6lr`WWt+{5Yi[t4B_sK>%+Kw');
define('LOGGED_IN_SALT',   'xh.ooySP23xt9,`WOQS8l-EWF->vvUi|Awn;-[,Cs&$[zP#XNz|m-=(U<;(+M}u?');
define('NONCE_SALT',       'PQMTDo.^ML(sAyM6|gi8[0NWDS-^Gg>*|C].eR(`ogq):VrcTtc7+|+3/yYYbsF@');

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
