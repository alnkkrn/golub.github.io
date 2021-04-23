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
define( 'DB_NAME', 'newprojectalin' );

/** Имя пользователя MySQL */
define( 'DB_USER', 'root' );

/** Пароль к базе данных MySQL */
define( 'DB_PASSWORD', 'root' );

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
define( 'AUTH_KEY',         '$]-SDegiDI=p4,/y*7&tk6@9aDpuZ-K>P>U[YC|8ijU,!PMvH l*1OywlLm))oM*' );
define( 'SECURE_AUTH_KEY',  'V)6-r>,1fLFT?Gfs+qqGKaFg;c/U{d}IeywXY$>;?OB^tPSEY!3tiq! m?$a4Mj.' );
define( 'LOGGED_IN_KEY',    '`0/wHyBt_e(Pq]TN6Kr[f:}5a7BXNZJ_@(G!aW/X2ho_bg7efnYH0*(FW&<~iEdj' );
define( 'NONCE_KEY',        '_;QDSZ/Vx5?%0O^7@rWPw7ChxEmnL.3A%+0,n:~P<Ij_04Z?2deABi2G0orvSo`3' );
define( 'AUTH_SALT',        '>4),pZ_ p3KC?-QkT,EM,%wgN(0O[1H?)R&e=rX0G6#:Gg= PpMQXu5!b/^O}gd6' );
define( 'SECURE_AUTH_SALT', 'GXU~{,wd?PF=/_{hTM>nT{O@nHNbeh<t@$<lKq{)s3.8F*ZoM9Y((=g?+iCH2U`j' );
define( 'LOGGED_IN_SALT',   'gzk+}YOg{cC9~.15zy0!!4Ai ^qN]H%!/z(.9=i)Ar D8F ?3rH{3$1bq^-!!23_' );
define( 'NONCE_SALT',       '_1i)YhUg+X+ThspQ3[oQk=S?sl[)Q?ws>C^cOisJ6,FRzK~]C(<t{j0;j3jk?+TI' );

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
