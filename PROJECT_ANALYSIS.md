# Анализ кодовой базы MaxiCMS

**Проект**: MaxiCMS (форк InstantCMS 2, open source PHP CMS)
**Расположение**: `/Users/maxisoft/Repos/maxicms`
**Версия PHP**: >= 7.2
**База данных**: MySQL 5.0+ / MariaDB с расширением mysqli

---

## 2. СТРУКТУРА КАТАЛОГОВ

| Каталог | Назначение |
|---------|------------|
| `/system/` | Основные файлы CMS - контроллеры, модели, поля, языки, библиотеки |
| `/templates/` | Шаблоны фронтенда (default, modern, admincoreui) |
| `/install/` | Мастер установки |
| `/upload/` | Загруженные файлы пользователей (аватары, изображения) |
| `/cache/` | Каталог кэша (записываемый) |
| `/static/` | Статические ресурсы (смайлы, иконки) |
| `/wysiwyg/` | Интеграции WYSIWYG редакторов |
| `/update/` | Пакеты обновлений |
| `.logs/` | Файлы логов |
| `bootstrap.php` | Инициализация приложения |
| `index.php` | Точка входа фронтенда |
| `cron.php` | Точка входа CLI/cron |

---

## 3. ЯДРО СИСТЕМЫ (`/system/core/`)

**38 PHP файлов** - основные классы фреймворка:

| Файл | Класс | Назначение |
|------|-------|------------|
| core.php | cmsCore | Singleton, HTTP запросы, маршрутизация, загрузка контроллеров, выполнение виджетов |
| controller.php | cmsController | Базовый контроллер, экшены, хуки, формы, сетки, маршрутизация |
| model.php | cmsModel | Построитель запросов к БД, фильтрация, объединения, пагинация, Nested Sets |
| database.php | cmsDatabase | Обёртка mysqli, транзакции, префикс таблиц |
| autoloader.php | cmsAutoloader | PSR-4 загрузка для пространства `icms\*`, устаревшие классы `cms*` |
| config.php | cmsConfig | Singleton настроек сайта |
| template.php | cmsTemplate | Рендеринг, виджеты, ресурсы, SEO, хлебные крошки |
| backend.php | cmsBackend | Базовый контроллер админ-панели |
| frontend.php | cmsFrontend | Базовый контроллер страниц сайта |
| form.php | cmsForm | Формы на основе структуры с группами полей, вкладками, валидацией |
| formfield.php | cmsFormField | Базовый класс поля формы |
| widget.php | cmsWidget | Рендеринг виджетов, кэширование, опции |
| user.php | cmsUser | Данные пользователя, права, группы, сессия |
| request.php | cmsRequest | Обработка GET/POST, заголовки, определение устройства |
| response.php | cmsResponse | HTTP ответ, редиректы |
| cache.php | cmsCache | Фабрика кэширования file/memcache/redis |
| grid.php | cmsGrid | Таблицы админ-гридов с фильтрацией/сортировкой |
| eventsmanager.php | cmsEventsManager | Система событий/хуклов |
| nestedsets.php | cmsNestedsets | Операции с деревьями Nested Sets |
| images.php | cmsImages | Изменение размера, обрезка, водяные знаки |
| uploader.php | cmsUploader | Обработка загрузки файлов |
| mailer.php | cmsMailer | Отправка email |
| permissions.php | cmsPermissions | Обработка прав доступа |
| paginator.php | cmsPaginator | Пагинация |

---

## 4. КОНТРОЛЛЕРЫ (`/system/controllers/`)

**36 каталогов контроллеров** - модульная архитектура:

### Архитектурный паттерн:
```
system/controllers/{name}/
├── frontend.php       # Контроллер фронтенда
├── backend.php        # Контроллер бэкенда/админки
├── model.php          # Модель данных
├── routes.php         # Пользовательская маршрутизация
├── hooks/             # Хуки событий (*.php файлы с классами on*)
├── actions/           # Внешние файлы действий
├── forms/             # Определения форм (form_*.php)
├── widgets/           # Виджеты контроллера
└── backend/
    ├── model.php      # Модель бэкенда
    ├── grids/         # Определения гридов (grid_*.php)
    └── forms/         # Админ-формы
```

### Основные контроллеры:

| Контроллер | Назначение |
|------------|------------|
| admin | Главная админ-панель |
| auth | Аутентификация пользователей |
| content | Система типов контента |
| users | Профили пользователей |
| groups | Группы пользователей |
| menu | Управление меню |
| images | Галерея изображений |
| comments | Комментарии |
| messages | Личные сообщения |
| wall | Записи на стене пользователя |
| moderation | Очередь модерации |
| rating | Рейтинг/голосование |
| tags | Теги |
| search | Поиск |
| billing | Платёжные системы |
| forms | Конструктор форм |
| geo | Геолокация |
| activity | Лента активности |
| subscriptions | Email-подписки |
| rss | RSS ленты |
| sitemap | Карта сайта |
| wysiwygs | Конфигурации WYSIWYG |
| photos | Фотогалереи |
| widgets | Управление виджетами |

### Контроллеры с платёжными системами (`/system/controllers/billing/systems/`):
Robokassa, Yandex Kassu, W1, Interkassa, PayPal, Payeer, Тестовый режим

---

## 5. СИСТЕМА ПОЛЕЙ (`/system/fields/`)

**31 тип поля**:

| Поле | Назначение |
|------|------------|
| string | Однострочный текст |
| text | Многострочный textarea |
| html | HTML с WYSIWYG |
| htmlhint | HTML с валидацией |
| htmlcross | HTML с перекрёстными ссылками |
| number | Числовой (int/float) |
| list | Выпадающий список |
| listmultiple | Множественный выбор |
| listbitmask | Битовый флаг |
| listgroups | Группы пользователей |
| checkbox | Булево значение |
| date | Выбор даты |
| age | Ввод возраста |
| color | Выбор цвета |
| image | Загрузка одного изображения |
| images | Несколько изображений |
| file | Загрузка файла |
| url | Ввод URL |
| user | Ссылка на пользователя |
| users | Несколько пользователей |
| category | Выбор категории |
| captcha | CAPTCHA |
| parent | Родительский элемент (дерево) |
| child | Дочерние элементы |
| hidden | Скрытое поле |
| toolbar | Панель редактора |
| fieldsgroup | Группа полей |
| forms | Выбор формы |
| paypal | Кнопка PayPal |
| city | Выбор города |

---

## 6. ШАБЛОНЫ (`/templates/`)

**3 шаблона**:

| Шаблон | Назначение |
|--------|------------|
| default | Устаревший шаблон |
| modern | Современный адаптивный (Bootstrap 4, SCSS) |
| admincoreui | UI админ-панели |

### Структура шаблона:
```
templates/{name}/
├── manifest.php          # Метаданные, наследование
├── main.tpl.php          # Основной макет
├── scheme.php            # Схема раскладки
├── css/                  # Стили
├── scss/                 # Исходники SCSS
├── js/                   # JavaScript
├── images/               # Изображения
├── controllers/          # Шаблоны контроллеров
├── content/              # Отображение контента
├── assets/
│   ├── ui/               # UI компоненты
│   ├── fields/           # Шаблоны полей
│   └── errors/           # Страницы ошибок
└── widgets/              # Шаблоны виджетов
```

### Ключевые особенности:
- Наследование шаблонов через `manifest.php`
- Система обёрток для виджетов (`wrapper.tpl.php` и т.д.)
- Загрузка CSS/JS по требованию

---

## 7. ПРОЦЕСС УСТАНОВКИ (`/install/`)

### Шаги установки:

| Шаг | Файл | Назначение |
|-----|------|------------|
| 0 | start.php | Приветственный экран |
| 1 | license.php | Принятие лицензии |
| 2 | php.php | Проверка расширений PHP |
| 3 | paths.php | Права на каталоги |
| 4 | site.php | Название сайта, хост |
| 5 | database.php | Подключение к БД, таблицы |
| 6 | admin.php | Аккаунт администратора |
| 7 | config.php | Запись конфига |
| 8 | cron.php | Настройка cron |
| 9 | addons.php | Дополнения (опционально) |
| 10 | finish.php | Завершение |

### Ключевые файлы:
- `index.php` - Главная точка входа
- `functions.php` - Вспомогательные функции
- `manifest.php` - Конфиг сборки
- `languages/` - Языки установщика
- `templates/` - HTML шаблоны установщика

---

## 8. СОГЛАШЕНИЯ ОБ ИМЕНОВАНИИ

| Паттерн | Пример | Использование |
|---------|--------|---------------|
| Основные классы | `cmsCore`, `cmsController` | Префикс `cms` |
| Контроллеры | `content`, `auth` | строчные буквы |
| Модели | `modelContent`, `modelBackendAdmin` | Префикс `model` + CamelCase |
| Поля | `fieldString`, `fieldList` | Префикс `field` + CamelCase |
| Экшены | `actionIndex`, `actionView` | Префикс `action` + CamelCase |
| Хуки | `onContentBeforeAdd` | Префикс `on` + CamelCase |
| Виджеты | `widgetMenu`, `widgetHtml` | Префикс `widget` + CamelCase |

### Организация файлов:
- Экшены: `actions/{action}.php` с классом `action{Name}{Action}`
- Хуки: `hooks/{event}.php` с классом `on{Name}{Event}`
- Формы: `forms/form_{name}.php`
- Гриды: `backend/grids/grid_{name}.php`

---

## 9. СТАНДАРТЫ КОДИРОВАНИЯ

- **Отступы**: 4 пробела
- **Переносы строк**: Unix-стиль
- **PHP теги**: `<?php` (всегда длинная форма)
- **Конкатенация**: Оператор точка `.`
- **Пространство имён**: `icms\*` для библиотечных классов
- **Динамические свойства**: Аннотация `#[\AllowDynamicProperties]`
- **Трейты**: `icms\traits\corePropertyLoadable` для доступа к свойствам

### Автозагрузка:
- `cms*` → `/system/core/`
- `field*` → `/system/fields/`
- `model*` → `/system/controllers/{name}/model.php` или `/backend/model.php`
- `icms\*` → `/system/{path}/`

---

## 10. БАЗА ДАННЫХ

### Основные таблицы (префикс `cms_`):

| Таблица | Назначение |
|---------|------------|
| controllers | Зарегистрированные модули |
| users | Аккаунты пользователей |
| users_groups | Группы пользователей |
| content | Определения типов контента |
| con_{ctype} | Элементы контента по типу |
| con_{ctype}_cats | Категории |
| widgets | Экземпляры виджетов |
| widgets_pages | Назначения виджетов |
| events | Регистрации хуков |

### Возможности модели:
- Nested Sets для деревьев категорий
- Поддержка префикса таблиц (по умолчанию `con_`)
- Полнотекстовый поиск со стоп-словами
- Фильтры приватности (`is_private`)
- Фильтры одобрения (`is_approved`)
- Мягкое удаление (`is_deleted`)
- Многоязычность через постфиксы полей (`_ru`, `_en`)

### Абстракция базы данных

**Текущее состояние**: Нет слоя абстракции БД. `cmsDatabase` использует `\mysqli` напрямую.

| Компонент | Реализация |
|-----------|------------|
| Подключение | `new mysqli()` в `cmsDatabase::connect()` |
| Выполнение запросов | `$this->mysqli->query()` |
| Экранирование | `$this->mysqli->real_escape_string()` |
| Транзакции | `$this->mysqli->autocommit()`, `$this->mysqli->commit()`, `$this->mysqli->rollback()` |
| Префикс таблиц | Плейсхолдер `{#}` заменяется через `replacePrefix()` |

### Анализ поддержки PostgreSQL

**Статус**: НЕ ПОДДЕРЖИВАЕТСЯ - требуются высокие трудозатраты

#### Найденные MySQL-специфичные паттерны:

| Паттерн | Кол-во | Расположение |
|---------|--------|--------------|
| `{#}` плейсхолдер префикса таблицы | 63 | По всему коду |
| `INSERT IGNORE` | 1 | database.php:719 |
| `SHOW COLUMNS` | 2 | database.php, languages/model.php |
| `SHOW INDEX` | 2 | database.php |
| `SHOW VARIABLES` | 1 | database.php:334 |
| `LIMIT 0,1` захардкожен | 4 | nestedsets.php |
| Функция SQL `REPLACE()` | 2 | model.php, content/model.php |
| `INFORMATION_SCHEMA` | 1 | database.php:1155 |

#### Ключевые препятствия:

1. **Нет паттерна адаптера** - `cmsDatabase` жестко привязан к `\mysqli` (строка 32: `private $mysqli;`)
2. **MySQL-специфичный SQL** разбросан по 74+ файлам
3. **Nested sets** использует MySQL-специфичный синтаксис LIMIT
4. **Методы транзакций** MySQL-специфичны
5. **Команды SHOW** не имеют эквивалентов в PostgreSQL

#### Оценка трудозатрат:

**Высокие** - требуется полный рефакторинг слоя абстракции БД:
- Создать абстрактный интерфейс `DatabaseAdapter`
- Вынести MySQL-код в класс `MysqlAdapter`
- Создать реализацию `PostgreSqlAdapter`
- Заменить весь SQL на вызовы адаптера
- Обновить 74+ файлов использующих префикс `{#}`

#### Рекомендация:

Поддержка PostgreSQL НЕ рекомендуется для ближайшей разработки. Сначала необходимо значительно рефакторить слой базы данных.

---

## 11. СИСТЕМА РАСШИРЕНИЙ

| Компонент | Расположение |
|-----------|--------------|
| Контроллеры | `/system/controllers/{name}/` |
| Виджеты | `/system/widgets/{name}/` или `widgets/` контроллера |
| Типы полей | `/system/fields/{name}.php` |
| Шаблоны | `/templates/{name}/` |
| WYSIWYG | `/wysiwyg/{name}/` |

### Хуки:
- Хранятся в таблице БД `events`
- Файлы: `hooks/{event}.php` с классом `on{Controller}{Event}`
- Включение/выключение для каждого контроллера
- Порядок выполнения по полю `ordering`

---

## 12. КОНФИГУРАЦИЯ

### Файлы конфигурации:
- `system/config/autoload.php` - Маппинги автозагрузчика
- `system/config/remap.php` - Переопределение URL
- `system/config/timezones.php` - Список часовых поясов
- `system/config/version.ini` - Версия CMS
- `system/config/theme_default.yml` - Настройки темы по умолчанию
- `system/config/theme_modern.yml` - Настройки современной темы
- `system/config/mimetypes.php` - MIME типы

### Runtime конфиг (`cmsConfig`):
- База данных: `db_host`, `db_user`, `db_pass`, `db_base`, `db_prefix`
- Сайт: `language`, `template`, `admin_template`
- Кэш: `cache_enabled`, `cache_backend`
- Отладка: Режим `debug`
- Безопасность: `aes_key` для шифрования

---

## 13. ТОЧКИ ВХОДА

| Файл | Назначение |
|------|------------|
| index.php | HTTP запросы фронтенда |
| cron.php | CLI/cron задания |
| bootstrap.php | Инициализация приложения |

---

## 14. ИТОГО

**MaxiCMS** - это форк InstantCMS 2, зрелая PHP CMS с модульной архитектурой:

1. **MVC-подобный паттерн** - Контроллеры, Модели, Шаблоны
2. **Система плагинов/хуклов** - Слушатели событий для расширяемости
3. **Страницы на виджетах** - Повторно используемые блоки компонуют страницы
4. **31 тип поля** - Динамические типы контента
5. **Многоязычность** - Постфиксы полей БД
6. **Наследование шаблонов** - Система обёрток/виджетов
7. **Nested Sets** - Иерархические категории
8. **Только MySQL/MariaDB** - Нет PostgreSQL (прямое использование mysqli, высокие затраты на добавление PG)
9. **Несколько бэкендов кэша** - File, Memcache, Redis
10. **Интеграция биллинга** - Несколько платёжных шлюзов

### Ключевые пути для разработки:
- Добавить контроллер: `/system/controllers/{name}/`
- Добавить поле: `/system/fields/{name}.php`
- Добавить виджет: `/system/widgets/{name}/`
- Изменить шаблон: `/templates/{name}/`
- Шаги установки: `/install/steps/`