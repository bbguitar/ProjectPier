<?php

  return array(
  
    // ---------------------------------------------------
    //  Administration tools
    // ---------------------------------------------------
    
    'administration tool name test_mail_settings' => 'Test e-mail instellingen',
    'administration tool desc test_mail_settings' => 'Gebruik dit eenvoudige gereedschap om te testen of de activeCollab mailer goed is geconfigureerd.',
    'administration tool name mass_mailer' => 'Massa mailer',
    'administration tool desc mass_mailer' => 'Simple tool that let you send plain text messages to any group of users registered to the system',
    'administration tool desc mass_mailer' => 'Eenvoudig gereedschap om tekst berichten aan een groep of geregistreerde gebruikers te sturen.',
  
    // ---------------------------------------------------
    //  Configuration categories and options
    // ---------------------------------------------------
  
    'configuration' => 'Configuratie',
    
    'mail transport mail()' => 'Standaard PHP instellingen',
    'mail transport smtp' => 'SMTP server',
    
    'secure smtp connection no'  => 'Nee',
    'secure smtp connection ssl' => 'Ja, gebruik SSL',
    'secure smtp connection tls' => 'Yes, gebruik TLS',
    
    'file storage file system' => 'Bestandssysteem',
    'file storage mysql' => 'Database (MySQL)',
    
    // Categories
    'config category name general' => 'Algemeen',
    'config category desc general' => 'Algemene activeCollab instellingen',
    'config category name mailing' => 'Mailing',
    'config category desc mailing' => 'Gebruikt set van instellingen om aan te geven hoe activeCollab met e-mail moet ongaan. Je kunt de configuratie instellingen gebruiken in je php.ini of stel deze zo in dat een andere SMTP server wordt gerbuikt',

    // ---------------------------------------------------
    //  Options
    // ---------------------------------------------------
    
    // General
    'config option name site_name' => 'Site naam',
    'config option desc site_name' => 'Deze waarde wordt getoond als de naam van de site op de Dashboard pagina',
    'config option name file_storage_adapter' => 'Bestands opslag',
    'config option desc file_storage_adapter' => 'Selecteer waar je bijlagen, avatars, logo\'s en andere ge-uploade documenten wilt opslaan. <strong>Database opslag is aanbevolen</strong>.',
    'config option name default_project_folders' => 'Standard mappen',
    'config option desc default_project_folders' => 'Mappen die aangemaakt worden wanneer een project wordt aangemaakt. Elke mapnaam moet op een nieuwe regel. Dubbele ingaven of lege regels worden genegeerd',
    'config option name theme' => 'Thema',
    'config option desc theme' => 'Met themas kun je het uiterlijk van activeCollab wijzigen',
    
    // activeCollab.com
    'config option name upgrade_check_enabled' => 'Zet upgrade check aan',
    'config option desc upgrade_check_enabled' => 'If Yes system will once a day check if there are new versions of activeCollab available for download',
    
    // Mailing
    'config option name exchange_compatible' => 'Microsoft Exchange compatibiliteits mode',
    'config option desc exchange_compatible' => 'Als je Microsoft Exchange Server gebruikt, zet dezeoptie op JA om enkele bekende mailproblemen te voorkomen.',
    'config option name mail_transport' => 'Mail transport',
    'config option desc mail_transport' => 'Je kunt standaard PHP instellingen gebruiken voor het versturen van emails óf specificeer een SMTP server',
    'config option name smtp_server' => 'SMTP server',
    'config option name smtp_port' => 'SMTP poort',
    'config option name smtp_authenticate' => 'gebruik SMTP authenticatie',
    'config option name smtp_username' => 'SMTP gebruikersnaam',
    'config option name smtp_password' => 'SMTP wachtwoord',
    'config option name smtp_secure_connection' => 'Gebruik beveiligde SMTP connection',
    
  ); // array

?>