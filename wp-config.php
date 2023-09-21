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
define( 'DB_NAME', 'wp' );

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
define( 'AUTH_KEY',         'CNH:m!%XHRTZCk$o%vie8%5]-JcC7rjt<B.1f/6c|thEN_(M^yY-c/l#P_iF5y$l' );
define( 'SECURE_AUTH_KEY',  'v_$IH-4uDU@<Xc2~A;,p(7d=5){myKbx_A(xIm4Z+[0_jNZ$_[W8M{[OB|^DAgo0' );
define( 'LOGGED_IN_KEY',    '1$|#Yd)Pxg56ReN<2I!CH1YFmhytlJqF3i]LV-! w4w`o7jF)@XZ9y5k$MI9,E=`' );
define( 'NONCE_KEY',        'oe9gGX`.Kx0bI>Skc=.pDJI^>$vNDN |M!/zGj&N>OAi0i~em)h`L}`j23 7?fS}' );
define( 'AUTH_SALT',        'k,Xv8yb0?[qM)1<4YcF=G({v1^?&i]j]AL6NAw%s*Rt^AN[8Ia~j}bU2;~A-e<&a' );
define( 'SECURE_AUTH_SALT', 'C`T<vYo3E4ss4.`[y^_<fF#mK(.en#>B(s[z.L>rK*=VS3z-5TgNt:<H0:}MT~XO' );
define( 'LOGGED_IN_SALT',   'f?AG`LJ%~P*- 0P+eh8NdG}LR*Y/;`ooy%S`.)V5.+?27?TF>`mx}qd_M~IDF!S<' );
define( 'NONCE_SALT',       'hI^1r#^)J}RyEojCow1A_K.L:;;Shv*`3S@.YuuOgQK$/VYo$yY6NB`%9<;?#|Xz' );

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
