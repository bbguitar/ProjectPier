<?php

  return array(
  
    // ---------------------------------------------------
    //  Administration tools
    // ---------------------------------------------------
    
    'administration tool name test_mail_settings' => 'Testa epostinställningarna',
    'administration tool desc test_mail_settings' => 'Använd det här verktyget för att kontrollera att activeCollabs inställningar för att skicka underrättelser via epost är korrekt konfigurerade',
    'administration tool name mass_mailer' => 'Mass-utskick',
    'administration tool desc mass_mailer' => 'Enkelt verktyg som låter dig skicka epost (ren text) till valfritt urval deltagare från systemet',
  
    // ---------------------------------------------------
    //  Configuration categories and options
    // ---------------------------------------------------
  
    'configuration' => 'Konfiguration',
    
    'mail transport mail()' => 'Förvald PHP inställning',
    'mail transport smtp' => 'SMTP server',
    
    'secure smtp connection no'  => 'Nej',
    'secure smtp connection ssl' => 'Ja, använd SSL',
    'secure smtp connection tls' => 'Ja, använd TLS',
    
    'file storage file system' => 'Filsystem',
    'file storage mysql' => 'Databas (MySQL)',
    
    // Categories
    'config category name general' => 'Allmänt',
    'config category desc general' => 'Allmänna activeCollab inställningar',
    'config category name mailing' => 'Epostutskick',
    'config category desc mailing' => 'Gör inställningar för hur activeCollab ska hantera epostutskick. Du kan göra konfigurationsinställningar i din php.ini-fil eller ställa in här att extern SMTP server ska användas',
    
    // ---------------------------------------------------
    //  Options
    // ---------------------------------------------------
    
    // General
    'config option name site_name' => 'Webplatsens namn',
    'config option desc site_name' => 'Kommer att visas som webplatsens namn på Dashboard-sidan',
    'config option name file_storage_adapter' => 'Fillagring',
    'config option desc file_storage_adapter' => 'Ange var du vill lagra bilagor, användarbilder, loggor och andra uppladdade filer. <strong>Det är rekommenderat att välja lagring i databasen</strong>.',
    'config option name default_project_folders' => 'Förvalda mappar',
    'config option desc default_project_folders' => 'Dessa mappar kommer att skapas till varje nytt projekt. Ange ett mappnamn per rad. Dubletter och tommar rader kommer att ignoreras',
    'config option name theme' => 'Utseendetema',
    'config option desc theme' => 'Med hjälp av teman kan du ändra utseende på activeCollabs gränssnitt',
    
    // activeCollab.com
    'config option name upgrade_check_enabled' => 'Tillåt automatisk sökning efter uppdatering',
    'config option desc upgrade_check_enabled' => 'Om du anger Ja här kommer systemet att göra en daglig koll om det finns en ny version av activeCollab att ladda ner',
    
    // Mailing
    'config option name exchange_compatible' => 'Microsoft Exchange kompatibilitet',
    'config option desc exchange_compatible' => 'Om du använder en Microsoft Exchange Server ange Ja här för att undvika problem med att skicka epost.',
    'config option name mail_transport' => 'Utgående epost',
    'config option desc mail_transport' => 'Du kan använda de förvalda PHP inställningarna för att skicka epost eller ange en SMTP server',
    'config option name smtp_server' => 'SMTP server',
    'config option name smtp_port' => 'SMTP port',
    'config option name smtp_authenticate' => 'Använd SMTP autentisering',
    'config option name smtp_username' => 'SMTP användarnamn',
    'config option name smtp_password' => 'SMTP lösenord',
    'config option name smtp_secure_connection' => 'Använd en säker SMTP-förbindelse',
    
  ); // array

?>