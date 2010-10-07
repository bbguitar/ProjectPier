<?php

  return array(
  
    // ---------------------------------------------------
    //  Administration tools
    // ---------------------------------------------------
    
    'administration tool name test_mail_settings' => 'Testování nastavení elektronické pošty',
    'administration tool desc test_mail_settings' => 'Použijte tento jednoduchý nástroj k poslání testovacích e-mailů, aby jste vyzkoušeli zda activeCollab mailer je správně nastaven',
    'administration tool name mass_mailer' => 'Hromadná korespondence',
    'administration tool desc mass_mailer' => 'Jednoduchý nástroj pro posílání textových zpráv skupině nebo jednotlivým uživatelů registrovaným v systému',
  
    // ---------------------------------------------------
    //  Configuration categories and options
    // ---------------------------------------------------
  
    'configuration' => 'Konfigurace',
    
    'mail transport mail()' => 'Výchozí nastavení PHP',
    'mail transport smtp' => 'SMTP server',
    
    'secure smtp connection no'  => 'Ne',
    'secure smtp connection ssl' => 'Ano, použít SSL',
    'secure smtp connection tls' => 'Ano, použít TLS',
    
    'file storage file system' => 'Souborový systém (disk)',
    'file storage mysql' => 'Databáze (MySQL)',
    
    // Categories
    'config category name general' => 'Obecné',
    'config category desc general' => 'Obecné nastavení activeCollab',
    'config category name mailing' => 'Elektronická pošta',
    'config category desc mailing' => 'Použijte tyto volby k nastavení posílání e-mailů. Můžete použít konfigurační možnosti ve vašem php.ini nebo si nastavit jiný SMTP server',
    
    // ---------------------------------------------------
    //  Options
    // ---------------------------------------------------
    
    // General
    'config option name site_name' => 'Jméno stránek',
    'config option desc site_name' => 'Tato jméno bude zobrazeno jako jméno stránek na Nástěnce',
    'config option name file_storage_adapter' => 'Uložiště souborů',
    'config option desc file_storage_adapter' => 'Zvolte kde se budou ukádat přílohy, avataři, loga a jiné nahrané dokumenty. <strong>Doporučujeme použít databázi</strong>.',
    'config option name default_project_folders' => 'Výchozí adresáře',
    'config option desc default_project_folders' => 'Adrešáře budou vytvořeny když bude vytvořen projekt. Každé jméno adresáře by mělo být na novém řádku. Duplikáty nebo prázdné řádky budou ignorovány',
    'config option name theme' => 'Téma',
    'config option desc theme' => 'Použité téma umožní změňit výchozí vzhled activeCollab',
    
    // activeCollab.com
    'config option name upgrade_check_enabled' => 'Povolit kontrolu aktualizace',
    'config option desc upgrade_check_enabled' => 'Pokud je povolena kontrola aktualizace, tak systém jednou denně kontroluje zda není nová verze activeCollab k dipozici',
    
    // Mailing
    'config option name exchange_compatible' => 'Kompatibilní mod s Microsoft Exchange',
    'config option desc exchange_compatible' => 'Pokud používáte Microsoft Exchange Server, tak zvolením ano, můžete předejít některým problémům s poštou.',
    'config option name mail_transport' => 'Posílání pošty',
    'config option desc mail_transport' => 'Můžete použít výchozí nastavení PHP pro posílání emailů nebo nastavit SMTP server',
    'config option name smtp_server' => 'SMTP server',
    'config option name smtp_port' => 'SMTP port',
    'config option name smtp_authenticate' => 'Použít SMTP autentifikaci',
    'config option name smtp_username' => 'SMTP jméno',
    'config option name smtp_password' => 'SMTP heslo',
    'config option name smtp_secure_connection' => 'Použít zabezpečené SMTP spojení',
    
  ); // array

?>
