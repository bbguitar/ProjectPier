<?php

  return array(
  
    // ---------------------------------------------------
    //  Administration tools
    // ---------------------------------------------------
    
    'administration tool name test_mail_settings' => 'Afpr�v indstillinger for email',
    'administration tool desc test_mail_settings' => 'Brug dette v�rkt�j til at sende en test-email, for at se om activeCollab er konfigureret korrekt',
    'administration tool name mass_mailer' => 'Distributions-tjeneste',
    'administration tool desc mass_mailer' => 'Simpelt v�rkt�j, der udsender emails til en gruppe af brugere p� dette system',
  
    // ---------------------------------------------------
    //  Configuration categories and options
    // ---------------------------------------------------
  
    'configuration' => 'Konfiguration',
    
    'mail transport mail()' => 'Standard PHP-indstillinger',
    'mail transport smtp' => 'SMTP server',
    
    'secure smtp connection no'  => 'Nej',
    'secure smtp connection ssl' => 'Ja, brug SSL',
    'secure smtp connection tls' => 'Ja, brug TLS',
    
    'file storage file system' => 'Filsystem',
    'file storage mysql' => 'Database (MySQL)',
    
    // Categories
    'config category name general' => 'Generelt',
    'config category desc general' => 'Generelle indstillinger',
    'config category name mailing' => 'Email',
    'config category desc mailing' => 'Brug disse indstillinger til konfiguration af email-funktioner. Du kan bruge indstillingerne fra din php.ini, eller v�lge en anden SMTP server.',
    
    // ---------------------------------------------------
    //  Options
    // ---------------------------------------------------
    
    // General
    'config option name site_name' => 'Site navn',
    'config option desc site_name' => 'Dette vises som navnet p� sitet, p� Forsiden',
    'config option name file_storage_adapter' => 'Dokument-lager',
    'config option desc file_storage_adapter' => 'V�lg hvor vedh�ftede filer, avatarer, logoer og andre dokumenter skal lagres. <strong>Lagring i database anbefales</strong>.',
    'config option name default_project_folders' => 'Standard-mapper',
    'config option desc default_project_folders' => 'Mapper, der automatisk skal tilf�jes n�r et nyt projekt oprettes. Skriv �t mappe-navn per linie. Tomme linier og dubletter ignor�res.',
    'config option name theme' => 'Tema',
    'config option desc theme' => 'Temaer �ndrer brugergr�nsefladens funktionalitet og udseende i activeCollab.',
    
    // activeCollab.com
    'config option name upgrade_check_enabled' => 'Check for opdateringer',
    'config option desc upgrade_check_enabled' => 'Hvis valgt, foretages et dagligt check for nye versioner af activeCollab',
    
    // Mailing
    'config option name exchange_compatible' => 'Microsoft Exchange kompatibilitet',
    'config option desc exchange_compatible' => 'Hvis du bruger Microsoft Exchange, b�r du sl� denne valgmulighed til, for at undg� nogen almindelige problemer med afsendelse af email.',
    'config option name mail_transport' => 'Email-tjeneste',
    'config option desc mail_transport' => 'Du kan bruge PHP\'s standard-indstillinger, eller angive en bestemt SMTP server',
    'config option name smtp_server' => 'SMTP server',
    'config option name smtp_port' => 'SMTP port',
    'config option name smtp_authenticate' => 'Brug SMTP adgangskontrol',
    'config option name smtp_username' => 'SMTP brugernavn',
    'config option name smtp_password' => 'SMTP adgangskode',
    'config option name smtp_secure_connection' => 'Brug sikker SMTP-forbindelse',
    
  ); // array

?>