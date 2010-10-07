<?php

  return array(

    // ---------------------------------------------------
    //  Administration tools
    // ---------------------------------------------------

    'administration tool name test_mail_settings' => 'Проверка настроек почты',
    'administration tool desc test_mail_settings' => 'Здесь Вы можете отправить email для проверки правильности настроек почты',
    'administration tool name mass_mailer' => 'Массовая рассылка',
    'administration tool desc mass_mailer' => 'Здесь можно отправить текстовые email-сообщения любой группе пользователей зарегистрированной в системе',

    // ---------------------------------------------------
    //  Configuration categories and options
    // ---------------------------------------------------

    'configuration' => 'Конфигурация',

    'mail transport mail()' => 'Настройки PHP по умолчанию',
    'mail transport smtp' => 'SMTP-сервер',

    'secure smtp connection no'  => 'Нет',
    'secure smtp connection ssl' => 'Да, используя SSL',
    'secure smtp connection tls' => 'Да, используя TLS',

    'file storage file system' => 'Файловая система',
    'file storage mysql' => 'База данных (MySQL)',

    // Categories
    'config category name general' => 'Главная',
    'config category desc general' => 'Основные настройки ProjectPier',
    'config category name mailing' => 'Почта',
    'config category desc mailing' => 'Эта группа настроек для поддержки отправки email-сообщений. Вы можете использовать настройки из php.ini или настроить работу с любым SMTP-сервером',

    // ---------------------------------------------------
    //  Options
    // ---------------------------------------------------

    // General
    'config option name site_name' => 'Название сайта',
    'config option desc site_name' => 'Это значение будет отбражаться как название сайта на Главной странице',
    'config option name file_storage_adapter' => 'Файловое хранилище',
    'config option desc file_storage_adapter' => 'Укажите, где хранить вложения, аватары, логотипы и другие загружаемые файлы. <strong>Рекомендуется использование базы данных как хранилища</strong>.',
    'config option name default_project_folders' => 'Папки по умолчанию',
    'config option desc default_project_folders' => 'Папки, создаваемые при заведении проекта. Каждое название папки должно быть новой строкой. Пустые названия и дубликаты игнорируются.',
    'config option name theme' => 'Тема',
    'config option desc theme' => 'Темы позволяют менять внешний вид ProjectPier',

    // ProjectPier
    'config option name upgrade_check_enabled' => 'Разрешить проверку обновлений',
    'config option desc upgrade_check_enabled' => 'Если да, то система раз в день будет проверять доступность новых версий ProjectPier для скачивания',

    // Mailing
    'config option name exchange_compatible' => 'Режим совместимости с Microsoft Exchange',
    'config option desc exchange_compatible' => 'Если вы используете Microsoft Exchange Server установите "Да" для предотвращения известных проблем с почтой.',
    'config option name mail_transport' => 'Почтовый транспорт',
    'config option desc mail_transport' => 'Вы можете использовать настройки PHP по умолчанию или указать SMTP-сервер',
    'config option name smtp_server' => 'SMTP сервер',
    'config option name smtp_port' => 'SMTP порт',
    'config option name smtp_authenticate' => 'Использовать SMTP аутентификацию',
    'config option name smtp_username' => 'SMTP пользователь',
    'config option name smtp_password' => 'SMTP пароль',
    'config option name smtp_secure_connection' => 'Использовать безопасное SMTP соединение',

  ); // array

?>