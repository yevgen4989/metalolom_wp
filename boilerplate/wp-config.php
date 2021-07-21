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
 * @link https://ru.wordpress.org/support/article/editing-wp-config-php/
 *
 * @package WordPress
 */

// ** Параметры MySQL: Эту информацию можно получить у вашего хостинг-провайдера ** //
/** Имя базы данных для WordPress */
define( 'DB_NAME', 'db' );

/** Имя пользователя MySQL */
define( 'DB_USER', 'admin' );

/** Пароль к базе данных MySQL */
define( 'DB_PASSWORD', 'admin' );

/** Имя сервера MySQL */
define( 'DB_HOST', 'mysql' );

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
define( 'AUTH_KEY',         '&DJPS{Yc7W +DX4C*`[#+T(rS$r%f71r4{2ly>UI4!qA|(n_7Bmy8_VLR^TAfC_H' );
define( 'SECURE_AUTH_KEY',  'M9BYwT|x- %0Q)v4f!,B<FP:~$AMZT_c*5/GFfm_ |i7~??+Mk7Xj1&R)p}Sq<rh' );
define( 'LOGGED_IN_KEY',    'o9Z>z)QW0S%MsQx* );S9u!Y7CH]*c;MoqV4qqr;v7+ &,,ma; 5L?phCt zhoW)' );
define( 'NONCE_KEY',        'G~$~cec~_c=C@V@pjUwO)x{~QjYmF6^7l.69`I`I%[S2hjtXc)0GY<1,!|QF4) @' );
define( 'AUTH_SALT',        ';z+]F(}H$Jx=fvEnQu#_`Jy- S1Aim[?ZKaW5E,kOft&dT?gz9_BJIshIMe?6iq=' );
define( 'SECURE_AUTH_SALT', 'j{hSPm||Zsbx_^j7FOv@YgHE%LX#y:h-v[&96jp4=#$RwHvy$OPSj[Q~z##Nbb$w' );
define( 'LOGGED_IN_SALT',   'hW|/EPw7%@pCJmv 0sw0llpS6SI~vYAkLC)<hyZqoRz&Q75RF;CYD5JsU}I-3f Y' );
define( 'NONCE_SALT',       'B~h)}aFI!@}+:$TF2H&UM^#)43Nh-{C8$[L|6gouJp1Y#ywlud[VgdGqVK=J~5c;' );

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
