<?php
/**
 * Основные параметры WordPress.
 *
 * Скрипт для создания wp-config.php использует этот файл в процессе установки.
 * Необязательно использовать веб-интерфейс, можно скопировать файл в "wp-config.php"
 * и заполнить значения вручную.
 *
 * Этот файл содержит следующие параметры:
 *
 * * Настройки базы данных
 * * Секретные ключи
 * * Префикс таблиц базы данных
 * * ABSPATH
 *
 * @link https://ru.wordpress.org/support/article/editing-wp-config-php/
 *
 * @package WordPress
 */

// ** Параметры базы данных: Эту информацию можно получить у вашего хостинг-провайдера ** //
/** Имя базы данных для WordPress */
define( 'DB_NAME', 'tstu' );

/** Имя пользователя базы данных */
define( 'DB_USER', 'root' );

/** Пароль к базе данных */
define( 'DB_PASSWORD', '' );

/** Имя сервера базы данных */
define( 'DB_HOST', 'localhost' );

/** Кодировка базы данных для создания таблиц. */
define( 'DB_CHARSET', 'utf8mb4' );

/** Схема сопоставления. Не меняйте, если не уверены. */
define( 'DB_COLLATE', '' );

/**#@+
 * Уникальные ключи и соли для аутентификации.
 *
 * Смените значение каждой константы на уникальную фразу. Можно сгенерировать их с помощью
 * {@link https://api.wordpress.org/secret-key/1.1/salt/ сервиса ключей на WordPress.org}.
 *
 * Можно изменить их, чтобы сделать существующие файлы cookies недействительными.
 * Пользователям потребуется авторизоваться снова.
 *
 * @since 2.6.0
 */
define( 'AUTH_KEY',         'LTEFzwaRN+kVuV3%Zd`G`! wJeA/S_N1 @QTE):?_>l~qrdOC#vQ-yF&H#uEnx9K' );
define( 'SECURE_AUTH_KEY',  '3@FgUNE5b~,)Nz7D$}Fr}m6A] VX8.A-Bk|6%D`!h TrB$rHTo(HI`2TiBm)Ws(:' );
define( 'LOGGED_IN_KEY',    '}[>`g7^WT$M)4}!zMuBSYLeG)8,N9T&{2vE{HOWU-u@#<&0?^L-B}]Bg}~#nK6YM' );
define( 'NONCE_KEY',        'Gw?n[^PLcGPnjo/o/DyXC}r56G[tt7tok*lR_)n+AVn[Ghl,wR8ZZ`;G2amMqsoC' );
define( 'AUTH_SALT',        'jFlDBq/H.8g,4qlzkJ,AIiKehYsx@ H0bsGR7pBUx?Epq>D_,UaD3Z(,8i4dAeW3' );
define( 'SECURE_AUTH_SALT', 'pL.*IkY|u|7%vQI|u%@/PX6zD{6OJ<WpXLtnp?WG/;CQfPV@NOI(:d`@$SE@I!Ip' );
define( 'LOGGED_IN_SALT',   'QA<%:DFzi(v/GRveSGq{4.(]ayx>p<<ZWTzQ~VQq>9%=;v{[s6oUs5sV]kW65B.f' );
define( 'NONCE_SALT',       'gtW5~[kupjY*^,ZEEuWbeJVcRX}@qB^&Am2<?{EI?M;F#8@vui5iwOdoX7jGs.D]' );

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

/* Произвольные значения добавляйте между этой строкой и надписью "дальше не редактируем". */



/* Это всё, дальше не редактируем. Успехов! */

/** Абсолютный путь к директории WordPress. */
if ( ! defined( 'ABSPATH' ) ) {
	define( 'ABSPATH', __DIR__ . '/' );
}

/** Инициализирует переменные WordPress и подключает файлы. */
require_once ABSPATH . 'wp-settings.php';
