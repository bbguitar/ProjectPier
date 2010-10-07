<?php

  return array(

    // ---------------------------------------------------
    //  Administration tools
    // ---------------------------------------------------

    'administration tool name test_mail_settings' => 'Проверка на настройките за поща',
    'administration tool desc test_mail_settings' => 'Оттук можете да изпратите e-mail за да проверите коректността на настройките за поща',
    'administration tool name mass_mailer' => 'Масово изпращане',
    'administration tool desc mass_mailer' => 'От тук можете да изпращате текстови e-mail съобщение да произволна групарегистрирани в системата потребители',

    // ---------------------------------------------------
    //  Configuration categories and options
    // ---------------------------------------------------

    'configuration' => 'Конфигурация',

    'mail transport mail()' => 'Настройка PHP по подразбиране',
    'mail transport smtp' => 'SMTP-сървър',

    'secure smtp connection no'  => 'Без',
    'secure smtp connection ssl' => 'Използвай SSL',
    'secure smtp connection tls' => 'Използвай TLS',

    'file storage file system' => 'Файлова система',
    'file storage mysql' => 'База данни (MySQL)',

    // Categories
    'config category name general' => 'Основни',
    'config category desc general' => 'Основни настройки на ProjectPier',
    'config category name mailing' => 'Поща',
    'config category desc mailing' => 'Това са настройки за изпращане на e-mail съобщения. Можете да използвате настройките от php.ini или да конфигурирате произволен SMTP-сървър',

    // ---------------------------------------------------
    //  Options
    // ---------------------------------------------------

    // General
    'config option name site_name' => 'Наименование на сайта',
    'config option desc site_name' => 'Тази стойност ще се изобразява като наименование на главната страница',
    'config option name file_storage_adapter' => 'Съхраняване на файлове',
    'config option desc file_storage_adapter' => 'Посочете къде желаете да се съхраняват файловете с изображения, лого и други качени файлове. <strong>Препоръчва се използването на база данни</strong>.',
    'config option name default_project_folders' => 'Папки по подразбиране',
    'config option desc default_project_folders' => 'Тези папки ще бъдат създадени автоматично при инициирането на нов проект. Всяко име на папка трябва да бъде на отделен ред. Празните редове и повторенията се игнорират.',
    'config option name theme' => 'Шаблон',
    'config option desc theme' => 'Шаблонът позволява да промените интерфейса на ProjectPier',

    // ProjectPier
    'config option name upgrade_check_enabled' => 'Разрешена проверка за обновени версии',
    'config option desc upgrade_check_enabled' => 'Ако е посочено Да, то системата ще проверява по веднъж на ден, дали е достъпна за сваляне нова версия на ProjectPier',

    // Mailing
    'config option name exchange_compatible' => 'Съвместим с Microsoft Exchange режим',
    'config option desc exchange_compatible' => 'Ако използвате Microsoft Exchange Server изберете Да, за да избегнете известни проблеми при изпращане и получаване на поща.',
    'config option name mail_transport' => 'Настройки поща',
    'config option desc mail_transport' => 'Можете да използвате настройките на PHP по подразбиране или да посочите SMTP-сървър',
    'config option name smtp_server' => 'SMTP сървър',
    'config option name smtp_port' => 'SMTP порт',
    'config option name smtp_authenticate' => 'С използване на SMTP автентикация',
    'config option name smtp_username' => 'SMTP потребителско име',
    'config option name smtp_password' => 'SMTP парола за достъп',
    'config option name smtp_secure_connection' => 'Използване на сигурна SMTP връзка',

  ); // array

?>