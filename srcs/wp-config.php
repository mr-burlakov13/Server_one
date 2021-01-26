s<?php
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
 * @link https://ru.wordpress.org/support/article/editing-wp-config-php/
 *
 * @package WordPress
 */

// ** Параметры MySQL: Эту информацию можно получить у вашего хостинг-провайдера ** //
/** Имя базы данных для WordPress */
define( 'DB_NAME', 'wp' );

/** Имя пользователя MySQL */
define( 'DB_USER', 'root' );

/** Пароль к базе данных MySQL */
define( 'DB_PASSWORD', '' );

/** Имя сервера MySQL */
define( 'DB_HOST', 'localhost' );

/** Кодировка базы данных для создания таблиц. */
define( 'DB_CHARSET', 'utf8' );

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
define( 'AUTH_KEY',         'KR.t}`YVIjL2y%z^lpgy*laLLRtm}F-&LEwS6drYAQiYr=]/Qq}KRd|p+uti[4 n' );
define( 'SECURE_AUTH_KEY',  ')6PPDM+(tijMgq:68+ZW|YJ-Vjl5O1#Sq)H8se Xy[FV/H_c|3YJo{}s ZX8ko)P' );
define( 'LOGGED_IN_KEY',    'hFQvkspnUN)*N[qo4cdV>@0tAe6x-~}U(p-yA*(&Ucb|%qhgc7TE9Ib(_>Vzr3|o' );
define( 'NONCE_KEY',        'a*dT9Y8#W<6-o|J:*UB{bsIQEp4M?,B`EoE6s&,(3uX@plWUR#oW9W$B;xO-*xX#' );
define( 'AUTH_SALT',        '/U*fa.%$9k*aV3]JN:*9]t@$hS|d&eCYy^DRcTXEcioZ]f?usP&bUxvbIaL`(x8P' );
define( 'SECURE_AUTH_SALT', 'wd$>)b|7H]:<+1<Cj+?6xs[WmaH|KmML#-fv]cM6HkSuMHWPtmON$wo8kqCYDOGO' );
define( 'LOGGED_IN_SALT',   '`kn=}awuPcz;k:@}yc;V_Oyx+^c61:>oTbu%?R)M%F)~;tqSb$Op3&+2]SjhYaBL' );
define( 'NONCE_SALT',       '<_]9j~>miCt;r;O?<BsrMf/J-WQo6,W}Z/628Fclj?-2yjVQzV$c3.t*TT9faY:a' );

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
 * Информацию о других отладочных константах можно найти в документации.
 *
 * @link https://ru.wordpress.org/support/article/debugging-in-wordpress/
 */
define( 'WP_DEBUG', false );

/* Это всё, дальше не редактируем. Успехов! */

/** Абсолютный путь к директории WordPress. */
if ( ! defined( 'ABSPATH' ) ) {
	define( 'ABSPATH', __DIR__ . '/' );
}

/** Инициализирует переменные WordPress и подключает файлы. */
require_once ABSPATH . 'wp-settings.php';
