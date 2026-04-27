<?php
/**
 * Массив опций и свойств шаблона
 */
return [
    // Наследование от шаблона
    'inherit' => ['admincoreui'],
    'title' => 'Modern',
    // Авторство
    'author' => [
        'name' => 'MaxiCMS Team',
        'url'  => 'https://maxicms.ru',
        'help' => 'https://docs.maxicms.ru/manual/settings/templates'
    ],
    // Свойства шаблона
    'properties' => [
        'vendor'                     => 'bootstrap4',
        'style_middleware'           => 'scss',
        'has_options'                => true,
        'has_profile_themes_support' => false,
        'has_profile_themes_options' => false,
        'is_dynamic_layout'          => true,
        'is_backend'                 => false,
        'is_frontend'                => true,
        'html_attr'                  => [
            'class' => 'min-vh-100'
        ]
    ]
];
