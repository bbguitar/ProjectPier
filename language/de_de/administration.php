<?php

  // Return array of langs
  return array(
  
    // ---------------------------------------------------
    //  Administration tools
    // ---------------------------------------------------
    
    'administration tool name test_mail_settings' => 'Mail-Einstellungen testen',
    'administration tool desc test_mail_settings' => 'Senden Sie eine Test-E-Mail, um zu prüfen ob der ProjectPier-Mailer korrekt konfiguriert ist.',
    'administration tool name mass_mailer' => 'Massenversand von E-Mails',
    'administration tool desc mass_mailer' => 'Hiermit können Sie eine (Plain Text-) Nachricht an eine Gruppe von Nutzern schicken.',
  
    // ---------------------------------------------------
    //  Configuration categories and options
    // ---------------------------------------------------
  
    'configuration' => 'Einstellungen',
    
    'mail transport mail()' => 'Standard-PHP-Einstellungen',
    'mail transport smtp' => 'SMTP-Server',
    
    'secure smtp connection no'  => 'Nein',
    'secure smtp connection ssl' => 'Ja, nutze SSL',
    'secure smtp connection tls' => 'Ja, nutze TLS',
    
    'file storage file system' => 'Dateisystem',
    'file storage mysql' => 'Datenbank (MySQL)',
    
    // Categories
    'config category name general' => 'Allgemeines',
    'config category desc general' => 'Allgemeine ProjectPier-Einstellungen.',
    'config category name mailing' => 'E-Mail-Einstellungen',
    'config category desc mailing' => 'Hier können Sie einstellen wie ProjectPier E-Mails verschicken soll. Sie können die Einstellungen aus der php.ini-Datei übernehmen oder einen anderen SMTP-Server einstellen.',
    
    // ---------------------------------------------------
    //  Options
    // ---------------------------------------------------
    
    // General
    'config option name site_name' => 'Site-Name',
    'config option desc site_name' => 'Dieser Name wird auf der Startseite angezeigt.',
    'config option name file_storage_adapter' => 'Dateiablage',
    'config option desc file_storage_adapter' => 'Hier können Sie auswählen, wo Dateianhänge, Bilder, Logos und andere hochgeladene Dokumente abgelegt werden. <strong>Die Ablage im Dateisystem wird empfohlen.</strong>',
    'config option name default_project_folders' => 'Standardordner',
    'config option desc default_project_folders' => 'Ordner, die bei der Anlage von Projekten erstellt werden. Jeder Ordnername soll in einer neuen Zeile stehen, doppelte oder leere Zeilen werden nicht beachtet.',
    'config option name theme' => 'Thema',
    'config option desc theme' => 'Mit Themen können Sie das Aussehen von ProjectPier ändern.',
    
    // ProjectPier.org
    'config option name upgrade_check_enabled' => 'Upgrade-Überprüfung einrichten',
    'config option desc upgrade_check_enabled' => 'Soll ProjectPier einmal täglich nach neuen Versionen zum Download suchen?',
    
    // Mailing
    'config option name exchange_compatible' => 'Microsoft Exchange-Kompatibilitätsmodus',
    'config option desc exchange_compatible' => 'Wenn Sie einen Microsoft Exchange-Server nutzen, setzen Sie diese Option auf „Ja“, um bekannte Mail-Probleme zu vermeiden.',
    'config option name mail_transport' => 'E-Mail-Übermittlung',
    'config option desc mail_transport' => 'Sie können die Standard-PHP-Einstellungen zum E-Mail-Versand nutzen oder die Angaben für Ihren SMTP-Server eingeben.',
    'config option name smtp_server' => 'SMTP-Server',
    'config option name smtp_port' => 'SMTP-Port',
    'config option name smtp_authenticate' => 'SMTP-Authentication nutzen',
    'config option name smtp_username' => 'SMTP-Username',
    'config option name smtp_password' => 'SMTP-Password',
    'config option name smtp_secure_connection' => 'Sichere SMTP-Verbindung nutzen',
    
  ); // array

?>
