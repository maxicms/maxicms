<?php

define('LANG_PAGE_TITLE',               'MaxiCMS Installation');

define('LANG_STEP',                     'Step');
define('LANG_STEP_OF',                  'of');
define('LANG_ERROR',                    'Error');

define('LANG_FEATURE_MODULAR',         'Modular');
define('LANG_FEATURE_MODULAR_DESC',    'Extend functionality');
define('LANG_FEATURE_FLEXIBLE',        'Flexible');
define('LANG_FEATURE_FLEXIBLE_DESC',   'Customize as you need');
define('LANG_FEATURE_SECURE',          'Secure');
define('LANG_FEATURE_SECURE_DESC',     'Data protection');

define('LANG_MANUAL',                   '<a href="https://docs.maxicms.ru/en/manual/install" target="_blank" rel="noopener noreferrer">Installation Manual</a>');

define('LANG_STEP_START',              'Welcome');
define('LANG_STEP_LICENSE',           'License');
define('LANG_STEP_PHP_CHECK',          'Requirements');
define('LANG_STEP_PATHS',              'Paths');
define('LANG_STEP_SITE',               'Site Configuration');
define('LANG_STEP_DATABASE',           'Database');
define('LANG_STEP_ADMIN',              'Administrator');
define('LANG_STEP_CONFIG',             'Configuration');
define('LANG_STEP_CRON',               'Cron');
define('LANG_STEP_ADDONS',             'Add-ons');
define('LANG_STEP_FINISH',             'Complete');

define('LANG_NEXT',                    'Next');
define('LANG_BACK',                    'Back');
define('LANG_SKIP',                    'Skip');

define('LANG_STEP_ADDONS_WARN',        'You are installing a build with third-party add-ons.<br>MaxiCMS authors have nothing to do with them.');
define('LANG_STEP_ADDONS_HINT',        'The following add-ons are included in this build:');
define('LANG_STEP_START_1',            'The MaxiCMS installation wizard will check whether your server meets the system requirements.');
define('LANG_STEP_START_2',            'During the process, the wizard will ask you a few questions necessary for the correct installation and configuration of MaxiCMS.');

define('LANG_LICENSE_NOTE',            'MaxiCMS is licensed under <a href="https://www.gnu.org/licenses/old-licenses/gpl-2.0.html" target="_blank" rel="noopener noreferrer">GNU/GPL</a> v2.');
define('LANG_LICENSE_AGREE',           'I accept the terms of this license agreement');
define('LANG_LICENSE_AGREE_HINT',      'You must agree to the license terms to continue installation');

define('LANG_PHP_VERSION',            'PHP Version');
define('LANG_PHP_VERSION_REQ',        'Minimum required version: PHP 8.0.0');
define('LANG_PHP_VERSION_DESC',       'Current version');
define('LANG_PHP_EXTENSIONS',          'Required Extensions');
define('LANG_PHP_EXTENSIONS_REQ',     'These extensions are required for MaxiCMS to function properly.');
define('LANG_PHP_EXTENSIONS_EXTRA',    'Optional Extensions');
define('LANG_PHP_EXTENSIONS_EXTRA_REQ', 'These extensions enhance functionality but are not required.');
define('LANG_PHP_EXT_INSTALLED',      'Installed');
define('LANG_PHP_EXT_NOT_INSTALLED',  'Not installed');
define('LANG_PHP_CHECK_ERROR',        'Server does not meet the requirements.');
define('LANG_PHP_CHECK_ERROR_HINT',   'Please contact your hosting provider or system administrator.');

define('LANG_PATHS_ROOT_INFO',         'Document root: %s');
define('LANG_PATHS_ROOT',             'Main Paths');
define('LANG_PATHS_ROOT_PATH',        'System Path');
define('LANG_PATHS_ROOT_HOST',        'Site URL');
define('LANG_PATHS_UPLOAD',           'Upload Directory');
define('LANG_PATHS_UPLOAD_PATH',      'Upload Path');
define('LANG_PATHS_UPLOAD_HOST',      'Upload URL');
define('LANG_PATHS_CACHE',            'Cache Directory');
define('LANG_PATHS_CACHE_PATH',       'Cache Path');
define('LANG_PATHS_SESSION',         'Session Directory');
define('LANG_PATHS_SESSION_PATH',      'Session Path');
define('LANG_PATHS_MUST_WRITABLE',    'Directory must be writable');
define('LANG_PATHS_CHANGE_INFO',      'You can change these paths after installation in the system configuration file.');

define('LANG_SITE_SITENAME',          'Site Name');
define('LANG_SITE_HOMETITLE',        'Homepage Title');
define('LANG_SITE_METAKEYS',          'Meta Keywords');
define('LANG_SITE_METADESC',          'Meta Description');
define('LANG_SITE_TEMPLATE',          'Site Template');
define('LANG_SITE_TEMPLATE_ADMIN',   'Admin Template');
define('LANG_SITE_CHECK_UPDATE',     'Check for updates automatically');
define('LANG_CFG_SITENAME',          'MaxiCMS');
define('LANG_CFG_METAKEYS',          'maxicms, cms, php');
define('LANG_CFG_METADESC',          'Website powered by MaxiCMS');

define('LANG_DATABASE_INFO',          'Enter your MySQL database connection details. If you are unsure, contact your hosting provider.');
define('LANG_DATABASE_HOST',         'Database Host');
define('LANG_DATABASE_USER',         'Database User');
define('LANG_DATABASE_PASS',         'Database Password');
define('LANG_DATABASE_BASE',         'Database Name');
define('LANG_DATABASE_BASE_HINT',    'Create database if it does not exist');
define('LANG_DATABASE_CHARSET',      'Database Charset');
define('LANG_DATABASE_ENGINE',       'Database Engine');
define('LANG_DATABASE_ENGINE_HINT',  'InnoDB is recommended');
define('LANG_DATABASE_PREFIX',       'Tables Prefix');
define('LANG_DATABASE_USERS_TABLE',  'Users Table');
define('LANG_DATABASE_USERS_TABLE_NEW', 'Create new users table');
define('LANG_DATABASE_USERS_TABLE_OLD', 'Use existing users table');
define('LANG_DATABASE_INSTALL_DEMO', 'Install demo content');
define('LANG_DEPRECATED',            'deprecated');

define('LANG_ADMIN_INFO',            'Create the administrator account. This account will have full access to the site.');
define('LANG_ADMIN_NAME',           'Admin Login');
define('LANG_ADMIN_EMAIL',           'Admin Email');
define('LANG_ADMIN_PASS',            'Admin Password');
define('LANG_ADMIN_PASS2',           'Confirm Password');
define('LANG_ADMIN_EXTERNAL',       'Users will be synchronized with the external table: %s');

define('LANG_CONFIG_INFO',           'The installation wizard will now create the configuration file with your settings.');
define('LANG_CONFIG_PATH',          'Configuration file:');
define('LANG_CONFIG_MUST_WRITABLE', 'The system directory must be writable.');
define('LANG_CONFIG_AFTER',         'After installation, you can change these settings in the admin panel.');

define('LANG_CRON_1',               'You need to schedule a CRON job on your web server to make MaxiCMS function properly.');
define('LANG_CRON_2',               'CRON allows scheduled tasks like sending email notifications, generating sitemaps, and cleaning cache.');
define('LANG_CRON_FILE',             'CRON Command:');
define('LANG_CRON_INT',             'Recommended interval: Every minute');
define('LANG_CRON_EXAMPLE',         'Example CRON command:');
define('LANG_CRON_SUPPORT_1',       'Need help with CRON setup?');
define('LANG_CRON_SUPPORT_2',      'Contact your hosting provider or refer to the documentation.');

define('LANG_FINISH_1',             'MaxiCMS installation is complete!');
define('LANG_FINISH_2',             'Thank you for choosing MaxiCMS. Your website is ready to use.');
define('LANG_FINISH_TO_SITE',       'Go to Site');
define('LANG_FINISH_TO_ADMIN',      'Go to Admin Panel');

define('LANG_RB_TITLE',              'MaxiCMS %s customization');
define('LANG_RB_START',             'Customizing MaxiCMS...');
define('LANG_RB_DONE_HINT',         'You can start MaxiCMS installation.');

define('LANG_FROM',                 'by');
define('LANG_INSTALL',              'Install');
define('LANG_LOADING',              'Loading...');
define('LANG_SUCCESS',              'Success');
define('LANG_FAILED',               'Failed');
