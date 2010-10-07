<?php

  return array(
  
    // ---------------------------------------------------
    //  Administration tools
    // ---------------------------------------------------
    
    'administration tool name test_mail_settings' => 'Prova il settaggio mail',
    'administration tool desc test_mail_settings' => 'Usa questo strumento per inviare email di prova per provare se l\'invio di email da ProjectPier &egrave; ben configurato',
    'administration tool name mass_mailer' => 'Invio email di massa',
    'administration tool desc mass_mailer' => 'Strumento che invia messaggi di testo puro a qualsiasi gruppo di utenti registrati',
  
    // ---------------------------------------------------
    //  Configuration categories and options
    // ---------------------------------------------------
  
    'configuration' => 'Configurazione',
    
    'mail transport mail()' => 'Settaggi PHP di default',
    'mail transport smtp' => 'SMTP server',
    
    'secure smtp connection no'  => 'No',
    'secure smtp connection ssl' => 'Si, usa SSL',
    'secure smtp connection tls' => 'Si, usa TLS',
    
    'file storage file system' => 'File system',
    'file storage mysql' => 'Database (MySQL)',
    
    // Categories
    'config category name general' => 'Generale',
    'config category desc general' => 'Settaggi general ProjectPier',
    'config category name mailing' => 'Mailing',
 
    'config category desc mailing' => 'Usa questi settaggi per decidere come ProjectPier gestisce l\'invio di email. Puoi utilizzare le opzioni in php.ini o configurarlo in modo che utilizzi altri server SMTP',
    
    // ---------------------------------------------------
    //  Options
    // ---------------------------------------------------
    
    // General
    'config option name site_name' => 'Nome del sito',
    'config option desc site_name' => 'Questo valore sar&agrave; mostrato come nome del sito nella Dashboard',
    'config option name file_storage_adapter' => 'Spazio salvataggio file',
    'config option desc file_storage_adapter' => 'Scegli dove vuoi salvare attachment, avatar, loghi e altri documenti caricati. <strong>Un motore di storage &egrave; consigliabile</strong>',
    'config option name default_project_folders' => 'Cartelal di default',
    'config option desc default_project_folders' => 'Le cartelle saranno create quando viene creato il progetto. Ogni nome di cartella deve stare in una nuova riga. Linee duplicate o vuote saranno ignorate',
    'config option name theme' => 'Tema',
    'config option desc theme' => 'L\'utilizzo di temi permette di cambiare il look&amp;feel di ProjectPier',
    
    // ProjectPier
    'config option name upgrade_check_enabled' => 'Attiva la verifica degli upgrade',
    'config option desc upgrade_check_enabled' => 'Se S&igrave; il sistema verificher&agrave; una volta al giorno se ci sono nuove versioni di ProjectPier disponibili per il download',
    
    // Mailing
    'config option name exchange_compatible' => '>ompatibilit&agrave; con Microsoft Exchange ',
    'config option desc exchange_compatible' => 'Se utilizzi il Microsoft Exchange Server attiva questa opzione per evitare alcuni problemi gi&agrave; noti con la email.',
    'config option name mail_transport' => 'Mail transport',
    'config option desc mail_transport' => 'Puoi lasciare i settings di default di PHP per spedire email o specificare un server SMTP',
    'config option name smtp_server' => 'SMTP server',
    'config option name smtp_port' => 'SMTP port',
    'config option name smtp_authenticate' => 'Usa l\'autenticazione SMTP',
    'config option name smtp_username' => 'SMTP username',
    'config option name smtp_password' => 'SMTP password',
    'config option name smtp_secure_connection' => 'Usa una connession SMTP sicura',
    
  ); // array

?>