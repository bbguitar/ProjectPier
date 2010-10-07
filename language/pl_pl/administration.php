<?php

  return array(
  
    // ---------------------------------------------------
    //  Administration tools
    // ---------------------------------------------------
    
    'administration tool name test_mail_settings' => 'Testuj ustawienia poczty',
    'administration tool desc test_mail_settings' => 'Użyj tego narzędzia, aby sprawdzić czy activeCollab będzie w stanie poprawnie wysyłać wiadomości e-mail',
    'administration tool name mass_mailer' => 'Masowa wysyłka',
    'administration tool desc mass_mailer' => 'Narzędzie, które pozwala na wysłanie wiadomości tekstowej do dowolnej grupy zarejestrowanych użytkowników systemu.',
  
    // ---------------------------------------------------
    //  Configuration categories and options
    // ---------------------------------------------------
  
    'configuration' => 'Konfiguracja',
    
    'mail transport mail()' => 'Domyślne ustawienia PHP',
    'mail transport smtp' => 'Serwer SMTP',
    
    'secure smtp connection no'  => 'Nie',
    'secure smtp connection ssl' => 'Tak, użyj SSL',
    'secure smtp connection tls' => 'Tak, użyj TLS',
    
    'file storage file system' => 'System plików',
    'file storage mysql' => 'Baza danych (MySQL)',
    
    // Categories
    'config category name general' => 'Ogólne',
    'config category desc general' => 'Ogólne ustawienia activeCollab',
    'config category name mailing' => 'Mailing',
    'config category desc mailing' => 'Użyj tych ustawień, aby określić sposób obsługi poczty przez activeCollab. Możesz skorzystać z domyślnych ustawień PHP lub użyć innego serwera SMTP.',
    
    // ---------------------------------------------------
    //  Options
    // ---------------------------------------------------
    
    // General
    'config option name site_name' => 'Nazwa serwisu',
    'config option desc site_name' => 'Ta wartość będzie wyświetlana jako nazwa serwisu na stronie z Tablicą',
    'config option name file_storage_adapter' => 'Przechowywanie w plikach',
    'config option desc file_storage_adapter' => 'Wybierz jeśli chcesz przechowywać załączniki, loga i inne wysyłane dokumenty. <strong>Zalecane jest przechowywanie w bazie danych.</strong>.',
    'config option name default_project_folders' => 'Domyślne katalogi',
    'config option desc default_project_folders' => 'Katalogi, które zostaną utworzone przy zakładaniu projektu. Każda nazwa katalogu musi być zapisana w nowej linii. Podwójne lub puste linie zostaną zignorowane.',
    'config option name theme' => 'Motyw',
    'config option desc theme' => 'Dzięki użyciu motywów możesz zmieniać domyślny wygląd activeCollab',
    
    // activeCollab.com
    'config option name upgrade_check_enabled' => 'Włącz sprawdzanie aktualizacji',
    'config option desc upgrade_check_enabled' => 'Jeśli jest włączone to raz dziennie system sprawdzi czy są dostępne aktualizacje activeCollab',
    
    // Mailing
    'config option name exchange_compatible' => 'Tryb zgodności z Microsoft Exchange',
    'config option desc exchange_compatible' => 'Jeśli korzystasz z Microsoft Exchange Server włącz tą opcję, aby uniknąć problemów z wysyłką poczty.',
    'config option name mail_transport' => 'Transport poczty',
    'config option desc mail_transport' => 'Możesz użyć domyślnych ustawień PHP lub określić serwer SMTP',
    'config option name smtp_server' => 'Serwer SMTP',
    'config option name smtp_port' => 'Port SMTP',
    'config option name smtp_authenticate' => 'Użyj autoryzacji SMTP',
    'config option name smtp_username' => 'Użytkownik SMTP',
    'config option name smtp_password' => 'Hasło SMTP',
    'config option name smtp_secure_connection' => 'Użyj bezpiecznego połączenia SMTP',
    
  ); // array

?>