<?php

return [

    'old_installation_has_data' => 'Ваша база данных не пуста! Возможно, некоторые данные остались от вашей предыдущей установки. Для новой установки вам может потребоваться очистить базу данных и переустановить лицензию. Чтобы сохранить старые данные, вы можете перейти на страницу входа. Вы также можете заново импортировать демонстрационные данные.',

    /**
     * Shared translations.
     */
    'title' => config('app.name', 'zCart') . ' Установщик',
    'next' => 'Следующий шаг',
    'back' => 'Предыдущий',
    'finish' => 'Установить',
    'forms' => [
        'errorTitle' => 'Произошли следующие ошибки:',
    ],
    'wait' => 'Пожалуйста, подождите, установка может занять несколько минут..',

    /**
     * Home page translations.
     */
    'welcome' => [
        'templateTitle' => 'Добро пожаловать',
        'title'   => config('app.name', 'zCart') . ' Установщик',
        'message' => 'Мастер простой установки и настройки.',
        'next'    => 'Проверьте требования',
    ],

    /**
     * Requirements page translations.
     */
    'requirements' => [
        'templateTitle' => 'Шаг 1 | Требования к серверу',
        'title' => 'Требования к серверу',
        'next'    => 'Проверьте разрешения',
        'required' => 'Чтобы продолжить, необходимо установить все требования к серверу.',
    ],

    /**
     * Permissions page translations.
     */
    'permissions' => [
        'templateTitle' => 'Шаг 2 | Разрешения',
        'title' => 'Разрешения',
        'next' => 'Настроить среду',
        'required' => 'Установите разрешения, необходимые для продолжения. Прочтите документ. для помощи.',
    ],

    /**
     * Environment page translations.
     */
    'environment' => [
        'menu' => [
            'templateTitle' => 'Шаг 3 | Настройки среды',
            'title' => 'Настройки среды',
            'desc' => 'Выберите, как вы хотите настроить файл приложения <code>.env</code>..',
            'wizard-button' => 'Настройка мастера форм',
            'classic-button' => 'Classic Text Editor',
        ],
        'wizard' => [
            'templateTitle' => 'Шаг 3 | Настройки среды | Управляемый мастер',
            'title' => 'Управляемый мастер <code>.env</code>',
            'tabs' => [
                'environment' => 'Среда',
                'database' => 'База данных',
                'application' => 'Приложение',
            ],
            'form' => [
                'name_required' => 'Укажите имя среды..',
                'app_name_label' => 'Имя приложения',
                'app_name_placeholder' => 'Имя приложения',
                'app_environment_label' => 'Среда приложения',
                'app_environment_label_local' => 'Local',
                'app_environment_label_developement' => 'Development',
                'app_environment_label_qa' => 'Qa',
                'app_environment_label_production' => 'Production',
                'app_environment_label_other' => 'Other',
                'app_environment_placeholder_other' => 'Enter your environment...',
                'app_debug_label' => 'App Debug',
                'app_debug_label_true' => 'True',
                'app_debug_label_false' => 'False',
                'app_log_level_label' => 'App Log Level',
                'app_log_level_label_debug' => 'debug',
                'app_log_level_label_info' => 'info',
                'app_log_level_label_notice' => 'notice',
                'app_log_level_label_warning' => 'warning',
                'app_log_level_label_error' => 'error',
                'app_log_level_label_critical' => 'critical',
                'app_log_level_label_alert' => 'alert',
                'app_log_level_label_emergency' => 'emergency',
                'app_url_label' => 'App Url',
                'app_url_placeholder' => 'App Url',
                'db_connection_failed' => 'Не удалось подключиться к базе данных. Проверьте конфигурации.',
                'db_connection_label' => 'Database Connection',
                'db_connection_label_mysql' => 'mysql',
                'db_connection_label_sqlite' => 'sqlite',
                'db_connection_label_pgsql' => 'pgsql',
                'db_connection_label_sqlsrv' => 'sqlsrv',
                'db_host_label' => 'Database Host',
                'db_host_placeholder' => 'Database Host',
                'db_port_label' => 'Database Port',
                'db_port_placeholder' => 'Database Port',
                'db_name_label' => 'Database Name',
                'db_name_placeholder' => 'Database Name',
                'db_username_label' => 'Database User Name',
                'db_username_placeholder' => 'Database User Name',
                'db_password_label' => 'Database Password',
                'db_password_placeholder' => 'Database Password',

                'app_tabs' => [
                    'more_info' => 'More Info',
                    'broadcasting_title' => 'Broadcasting, Caching, Session, and Queue',
                    'broadcasting_label' => 'Broadcast Driver',
                    'broadcasting_placeholder' => 'Broadcast Driver',
                    'cache_label' => 'Cache Driver',
                    'cache_placeholder' => 'Cache Driver',
                    'session_label' => 'Session Driver',
                    'session_placeholder' => 'Session Driver',
                    'queue_label' => 'Queue Driver',
                    'queue_placeholder' => 'Queue Driver',
                    'redis_label' => 'Redis Driver',
                    'redis_host' => 'Redis Host',
                    'redis_password' => 'Redis Password',
                    'redis_port' => 'Redis Port',

                    'mail_label' => 'Mail',
                    'mail_driver_label' => 'Mail Driver',
                    'mail_driver_placeholder' => 'Mail Driver',
                    'mail_host_label' => 'Mail Host',
                    'mail_host_placeholder' => 'Mail Host',
                    'mail_port_label' => 'Mail Port',
                    'mail_port_placeholder' => 'Mail Port',
                    'mail_username_label' => 'Mail Username',
                    'mail_username_placeholder' => 'Mail Username',
                    'mail_password_label' => 'Mail Password',
                    'mail_password_placeholder' => 'Mail Password',
                    'mail_encryption_label' => 'Mail Encryption',
                    'mail_encryption_placeholder' => 'Mail Encryption',

                    'pusher_label' => 'Pusher',
                    'pusher_app_id_label' => 'Pusher App Id',
                    'pusher_app_id_palceholder' => 'Pusher App Id',
                    'pusher_app_key_label' => 'Pusher App Key',
                    'pusher_app_key_palceholder' => 'Pusher App Key',
                    'pusher_app_secret_label' => 'Pusher App Secret',
                    'pusher_app_secret_palceholder' => 'Pusher App Secret',
                ],
                'buttons' => [
                    'setup_database' => 'Setup Database',
                    'setup_application' => 'Setup Application',
                    'install' => 'Install',
                ],
            ],
        ],
        'classic' => [
            'backup' => 'Чтобы избежать беспорядка, скопируйте и сохраните конфигурации по умолчанию в другом месте, прежде чем вносить какие-либо изменения.',
            'templateTitle' => 'Step 3 | Environment Settings | Classic Editor',
            'title' => 'Environment File Editor',
            'save' => 'Save The Configurations',
            'back' => 'Use Form Wizard',
            'install' => 'Install',
            'required' => 'Исправьте проблему, чтобы продолжить.',
        ],
        'success' => 'Настройки файла .env сохранены.',
        'errors' => 'Невозможно сохранить файл .env. Создайте его вручную..',
    ],

    'verify' => [
        'verify_purchase' => 'Verify Purchase',
        'submit' => 'Submit',
        'form' => [
            'email_address_label' => 'Email Address',
            'email_address_placeholder' => 'Email Address',
            'purchase_code_label' => 'Purchase Code',
            'purchase_code_placeholder' => 'Purchase Code or License Key',
            'root_url_label' => 'Root Url',
            'root_url_placeholder' => 'ROOT URL (without / at the end)',
        ],
    ],

    'install' => 'Install',
    'verified' => 'Лицензия успешно проверена.',
    'verification_failed' => 'Проверка лицензии не удалась!',

    /**
     * Installed Log translations.
     */
    'installed' => [
        'success_log_message' => config('app.name', 'zCart') . ' Установщик успешно УСТАНОВЛЕН на ',
    ],

    /**
     * Final page translations.
     */
    'final' => [
        'title' => 'Заключительный этап',
        'templateTitle' => 'Заключительный этап',
        'finished' => 'Приложение успешно установлено.',
        'migration' => 'Вывод консоли миграции и заполнения:',
        'console' => 'Вывод консоли приложения:',
        'log' => 'Запись в журнале установки:',
        'env' => 'Окончательный файл .env:',
        'exit' => 'Кликните здесь чтоб войти',
        'import_demo_data' => 'Import Demo Data',
    ],

    /**
     * Update specific translations
     */
    'updater' => [
        /**
         * Shared translations.
         */
        'title' => config('app.name', 'zCart') . ' Updater',

        /**
         * Welcome page translations for update feature.
         */
        'welcome' => [
            'title'   => 'Welcome To The Updater',
            'message' => 'Welcome to the update wizard.',
        ],

        /**
         * Welcome page translations for update feature.
         */
        'overview' => [
            'title'   => 'Overview',
            'message' => 'There is 1 update.|There are :number updates.',
            'install_updates' => 'Install Updates',
        ],

        /**
         * Final page translations.
         */
        'final' => [
            'title' => 'Finished',
            'finished' => 'База данных приложения успешно обновлена.',
            'exit' => 'Нажмите здесь, чтобы выйти',
        ],

        'log' => [
            'success_message' => config('app.name', 'zCart') . ' Installer successfully UPDATED on ',
        ],
    ],
];
