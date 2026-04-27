<?php

define('LANG_PAGE_TITLE',               'Установка MaxiCMS');

define('LANG_STEP',                     'Шаг');
define('LANG_STEP_OF',                  'из');
define('LANG_ERROR',                    'Ошибка');

define('LANG_FEATURE_MODULAR',         'Модульность');
define('LANG_FEATURE_MODULAR_DESC',    'Расширяйте функциональность');
define('LANG_FEATURE_FLEXIBLE',        'Гибкость');
define('LANG_FEATURE_FLEXIBLE_DESC',   'Настраивайте под себя');
define('LANG_FEATURE_SECURE',          'Безопасность');
define('LANG_FEATURE_SECURE_DESC',     'Защита данных');

define('LANG_MANUAL',                   '<a href="https://docs.maxicms.ru/manual/install" target="_blank" rel="noopener noreferrer">Инструкция по установке</a>');

define('LANG_STEP_START',              'Добро пожаловать');
define('LANG_STEP_LICENSE',           'Лицензия');
define('LANG_STEP_PHP_CHECK',          'Требования');
define('LANG_STEP_PATHS',              'Пути');
define('LANG_STEP_SITE',               'Настройка сайта');
define('LANG_STEP_DATABASE',           'База данных');
define('LANG_STEP_ADMIN',              'Администратор');
define('LANG_STEP_CONFIG',             'Конфигурация');
define('LANG_STEP_CRON',               'CRON');
define('LANG_STEP_ADDONS',             'Дополнения');
define('LANG_STEP_FINISH',             'Завершение');

define('LANG_NEXT',                    'Далее');
define('LANG_BACK',                    'Назад');
define('LANG_SKIP',                    'Пропустить');

define('LANG_STEP_ADDONS_WARN',        'Вы устанавливаете сборку со сторонними дополнениями.<br>Авторы MaxiCMS не имеют отношения к ним.');
define('LANG_STEP_ADDONS_HINT',        'Следующие дополнения включены в эту сборку:');
define('LANG_STEP_START_1',            'Мастер установки MaxiCMS проверит, удовлетворяет ли ваш сервер системным требованиям.');
define('LANG_STEP_START_2',            'В процессе работы мастер задаст несколько вопросов, необходимых для корректной установки и настройки MaxiCMS.');

define('LANG_LICENSE_NOTE',            'MaxiCMS распространяется по лицензии <a href="https://www.gnu.org/licenses/old-licenses/gpl-2.0.html" target="_blank" rel="noopener noreferrer">GNU/GPL</a> версии 2.');
define('LANG_LICENSE_AGREE',           'Я принимаю условия данного лицензионного соглашения');
define('LANG_LICENSE_AGREE_HINT',      'Вы должны принять условия лицензии для продолжения установки');

define('LANG_PHP_VERSION',            'Версия PHP');
define('LANG_PHP_VERSION_REQ',        'Минимальная требуемая версия: PHP 8.0.0');
define('LANG_PHP_VERSION_DESC',       'Текущая версия');
define('LANG_PHP_EXTENSIONS',          'Обязательные расширения');
define('LANG_PHP_EXTENSIONS_REQ',     'Эти расширения необходимы для корректной работы MaxiCMS.');
define('LANG_PHP_EXTENSIONS_EXTRA',    'Дополнительные расширения');
define('LANG_PHP_EXTENSIONS_EXTRA_REQ', 'Эти расширения расширяют функциональность, но не являются обязательными.');
define('LANG_PHP_EXT_INSTALLED',      'Установлено');
define('LANG_PHP_EXT_NOT_INSTALLED',  'Не установлено');
define('LANG_PHP_CHECK_ERROR',        'Сервер не соответствует требованиям.');
define('LANG_PHP_CHECK_ERROR_HINT',   'Пожалуйста, обратитесь к хостинг-провайдеру или системному администратору.');

define('LANG_PATHS_ROOT_INFO',         'Корневая директория: %s');
define('LANG_PATHS_ROOT',             'Основные пути');
define('LANG_PATHS_ROOT_PATH',        'Путь к системе');
define('LANG_PATHS_ROOT_HOST',        'URL сайта');
define('LANG_PATHS_UPLOAD',           'Директория загрузок');
define('LANG_PATHS_UPLOAD_PATH',      'Путь к загрузкам');
define('LANG_PATHS_UPLOAD_HOST',      'URL загрузок');
define('LANG_PATHS_CACHE',            'Директория кэша');
define('LANG_PATHS_CACHE_PATH',       'Путь к кэшу');
define('LANG_PATHS_SESSION',           'Директория сессий');
define('LANG_PATHS_SESSION_PATH',      'Путь к сессиям');
define('LANG_PATHS_MUST_WRITABLE',    'Директория должна быть доступна для записи');
define('LANG_PATHS_CHANGE_INFO',      'Вы можете изменить эти пути после установки в файле системной конфигурации.');

define('LANG_SITE_SITENAME',          'Название сайта');
define('LANG_SITE_HOMETITLE',        'Заголовок главной страницы');
define('LANG_SITE_METAKEYS',          'Meta ключевые слова');
define('LANG_SITE_METADESC',          'Meta описание');
define('LANG_SITE_TEMPLATE',          'Шаблон сайта');
define('LANG_SITE_TEMPLATE_ADMIN',   'Шаблон админ-панели');
define('LANG_SITE_CHECK_UPDATE',     'Автоматически проверять обновления');
define('LANG_CFG_SITENAME',          'MaxiCMS');
define('LANG_CFG_METAKEYS',          'maxicms, cms, php');
define('LANG_CFG_METADESC',          'Сайт работает на MaxiCMS');

define('LANG_DATABASE_INFO',          'Введите параметры подключения к базе данных MySQL. Если вы не уверены, обратитесь к хостинг-провайдеру.');
define('LANG_DATABASE_HOST',         'Хост базы данных');
define('LANG_DATABASE_USER',         'Пользователь базы данных');
define('LANG_DATABASE_PASS',         'Пароль базы данных');
define('LANG_DATABASE_BASE',         'Имя базы данных');
define('LANG_DATABASE_BASE_HINT',    'Создать базу данных, если она не существует');
define('LANG_DATABASE_CHARSET',      'Кодировка базы данных');
define('LANG_DATABASE_ENGINE',       'Движок базы данных');
define('LANG_DATABASE_ENGINE_HINT',  'Рекомендуется InnoDB');
define('LANG_DATABASE_PREFIX',       'Префикс таблиц');
define('LANG_DATABASE_USERS_TABLE',  'Таблица пользователей');
define('LANG_DATABASE_USERS_TABLE_NEW', 'Создать новую таблицу пользователей');
define('LANG_DATABASE_USERS_TABLE_OLD', 'Использовать существующую таблицу пользователей');
define('LANG_DATABASE_INSTALL_DEMO', 'Установить демо-контент');
define('LANG_DEPRECATED',            'устарело');

define('LANG_ADMIN_INFO',            'Создайте учетную запись администратора. Этот аккаунт получит полный доступ к сайту.');
define('LANG_ADMIN_NAME',           'Логин администратора');
define('LANG_ADMIN_EMAIL',           'Email администратора');
define('LANG_ADMIN_PASS',            'Пароль администратора');
define('LANG_ADMIN_PASS2',           'Подтверждение пароля');
define('LANG_ADMIN_EXTERNAL',       'Пользователи будут синхронизированы с внешней таблицей: %s');

define('LANG_CONFIG_INFO',           'Мастер установки создаст файл конфигурации с вашими настройками.');
define('LANG_CONFIG_PATH',          'Файл конфигурации:');
define('LANG_CONFIG_MUST_WRITABLE', 'Системная директория должна быть доступна для записи.');
define('LANG_CONFIG_AFTER',         'После установки вы можете изменить эти настройки в панели управления.');

define('LANG_CRON_1',               'Для полноценной работы MaxiCMS необходимо создать задание CRON на сервере.');
define('LANG_CRON_2',               'CRON позволяет выполнять запланированные задачи, такие как отправка уведомлений, генерация карты сайта и очистка кэша.');
define('LANG_CRON_FILE',             'CRON команда:');
define('LANG_CRON_INT',             'Рекомендуемый интервал: Каждую минуту');
define('LANG_CRON_EXAMPLE',         'Пример CRON команды:');
define('LANG_CRON_SUPPORT_1',       'Нужна помощь с настройкой CRON?');
define('LANG_CRON_SUPPORT_2',       'Обратитесь к хостинг-провайдеру или ознакомьтесь с документацией.');

define('LANG_FINISH_1',             'Установка MaxiCMS завершена!');
define('LANG_FINISH_2',             'Спасибо за выбор MaxiCMS. Ваш сайт готов к использованию.');
define('LANG_FINISH_TO_SITE',       'Перейти на сайт');
define('LANG_FINISH_TO_ADMIN',      'Перейти в админ-панель');

define('LANG_RB_TITLE',              'Кастомизация MaxiCMS %s');
define('LANG_RB_START',             'Настройка MaxiCMS...');
define('LANG_RB_DONE_HINT',         'Вы можете приступать к установке MaxiCMS.');

define('LANG_FROM',                 'от');
define('LANG_INSTALL',              'Установить');
define('LANG_LOADING',              'Загрузка...');
define('LANG_SUCCESS',              'Успешно');
define('LANG_FAILED',               'Ошибка');
