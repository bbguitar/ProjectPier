<?php

  return array(
  
    // ---------------------------------------------------
    //  Administration tools
    // ---------------------------------------------------
    
    'administration tool name test_mail_settings' => 'Preizkusi nastavitve za pošiljanje elektronske pošte',
    'administration tool desc test_mail_settings' => 'To preprosto orodje lahko uporabite za preizkus ali pošiljanje elektronske pošte deluje',
    'administration tool name mass_mailer' => 'Masovno pošiljanje',
    'administration tool desc mass_mailer' => 'Preprosto orodje za pošiljanje sporočil katerikoli skupini uporabnikov v sistemu',
  
    // ---------------------------------------------------
    //  Configuration categories and options
    // ---------------------------------------------------
  
    'configuration' => 'Nastavitve',
    
    'mail transport mail()' => 'Privzete nastavitve PHP (funkcija mail())',
    'mail transport smtp' => 'SMTP stežnik',
    
    'secure smtp connection no'  => 'Ne',
    'secure smtp connection ssl' => 'Da, uporabi SSL',
    'secure smtp connection tls' => 'Da, uporabi TLS',
    
    'file storage file system' => 'Datotečni sistem',
    'file storage mysql' => 'Podatkovna baza (MySQL)',
    
    // Categories
    'config category name general' => 'Splošno',
    'config category desc general' => 'Splošne nastavitve activeCollaba.',
    'config category name mailing' => 'Elektronska pošta',
    'config category desc mailing' => 'Nastavitve za pošiljanje elektronske pošte. Uporabite lahko nastavitve vašega strežnika iz datoteke php.ini ali nastavite uporabo SMTP strežnika.',
    
    // ---------------------------------------------------
    //  Options
    // ---------------------------------------------------
    
    // General
    'config option name site_name' => 'Ime spletnega mesta',
    'config option desc site_name' => 'To ime bo izpisano na Dashboardu.',
    'config option name file_storage_adapter' => 'Shranjevanje datotek',
    'config option desc file_storage_adapter' => 'Izberite kam želite shranjevati priponke, avatarje, logotipe in ostale naložene datoteke. <strong>Priporočena je uporaba podatkovne baze</strong>.',
    'config option name default_project_folders' => 'Privzete mape',
    'config option desc default_project_folders' => 'Mape, ki bodo ustvarjene, ko boste ustvarili nov projekt. Vsako novo ime mape naj bo v novi vrstici. Dvojnikov in prazni vrstic ne upoštevamo.',
    'config option name theme' => 'Izgled',
    'config option desc theme' => 'Spremenite privzeti izgled',
    
    // activeCollab.com
    'config option name upgrade_check_enabled' => 'Preveri ali obstajajo posodobitve',
    'config option desc upgrade_check_enabled' => 'Če je omogočeno preverjanje, bo sistem dnevno preveril ali obstaja nova različica activeCollaba',
    
    // Mailing
    'config option name exchange_compatible' => 'Kompatibilnost z Microsoft Exchange',
    'config option desc exchange_compatible' => 'Če uporabljate Microsoft Exchange Server nastavite to možnost, da bi preprečili nekatere znane težave.',
    'config option name mail_transport' => 'Sistem za pošiljanje elektronske pošte',
    'config option desc mail_transport' => 'Uporabite lahko privzete nastavitve vašega strežnika ali nastavite uporabo SMTP strežnika.',
    'config option name smtp_server' => 'SMTP strežnik',
    'config option name smtp_port' => 'SMTP vrata',
    'config option name smtp_authenticate' => 'Uporabi SMTP avtentikacijo',
    'config option name smtp_username' => 'SMTP uporabniško ime',
    'config option name smtp_password' => 'SMTP geslo',
    'config option name smtp_secure_connection' => 'Uporabi varno SMTP povezavo',
    
  ); // array

?>
