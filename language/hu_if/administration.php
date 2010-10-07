<?php

  return array(
  
    // ---------------------------------------------------
    //  Administration tools
    // ---------------------------------------------------
    
    'administration tool name test_mail_settings' => 'Postázás beállításainak tesztelése',
    'administration tool desc test_mail_settings' => 'Ezzel az egyszerű eszközzel próbaemaileket küldhetsz az activeCollab postázója megfelelő beállításainak ellenőrzéséhez',
    'administration tool name mass_mailer' => 'Csoportos levélküldő',
    'administration tool desc mass_mailer' => 'Egyszerű eszköz, mellyel egyszerű szöveg formátumú üzenetet küldhetsz a rendszerbe regisztrált bármelyik felhasználócsoportnak',
  
    // ---------------------------------------------------
    //  Configuration categories and options
    // ---------------------------------------------------
  
    'configuration' => 'Beállítások',
    
    'mail transport mail()' => 'Alapértelmezett PHP beállítások',
    'mail transport smtp' => 'SMTP kiszolgáló',
    
    'secure smtp connection no'  => 'Nem',
    'secure smtp connection ssl' => 'Igen, SSL használata',
    'secure smtp connection tls' => 'Igen, TLS használata',
    
    'file storage file system' => 'Fájlrendszer',
    'file storage mysql' => 'Adatbázis (MySQL)',
    
    // Categories
    'config category name general' => 'Általános',
    'config category desc general' => 'Az activeCollab általános beállításai',
    'config category name mailing' => 'Postázás',
    'config category desc mailing' => 'Ezzel a beállításhalmazzal határozhatod meg, hogy az activeCollab hogyan kezelje az emailküldést. Használhatod a php.ini fájlban lévő konfigurációs lehetőségeket, vagy megadhatod bármilyen másik SMTP kiszolgáló adatait',
    
    // ---------------------------------------------------
    //  Options
    // ---------------------------------------------------
    
    // General
    'config option name site_name' => 'Webhely neve',
    'config option desc site_name' => 'Ez az érték lesz látható a webhely neveként az Irányítópult oldalon',
    'config option name file_storage_adapter' => 'Fájltárolás',
    'config option desc file_storage_adapter' => 'Válaszd ki, hogy hol kívánod tárolni a mellékleteket, az avatarokat, az emblémákat és más feltöltött dokumentumokat. <strong>Az adatbázis tárolómotor ajánlott</strong>.',
    'config option name default_project_folders' => 'Alapértelmezett mappák',
    'config option desc default_project_folders' => 'Egy projekt létrehozásakor készítendő mappák. Minden mappanévnek új sorba kell kerülnie. A dupla vagy az üres sorok figyelmen kívül maradnak',
    'config option name theme' => 'Téma',
    'config option desc theme' => 'A témák használatával megváltoztathatod az activeCollab alapértelmezett arculatát',
    
    // activeCollab.com
    'config option name upgrade_check_enabled' => 'Frissítés-ellenőrzés engedélyezése',
    'config option desc upgrade_check_enabled' => 'Ha Igen, akkor a rendszer naponta egyszer ellenőrizni fogja, hogy letölthető-e új activeCollab verzió',
    
    // Mailing
    'config option name exchange_compatible' => 'Microsoft Exchange kompatibilitás mód',
    'config option desc exchange_compatible' => 'Microsoft Exchange Server használata esetén néhány ismert postázási probléma elkerülése végett állítsd Igenre ezt a lehetőséget.',
    'config option name mail_transport' => 'Levélátvitel',
    'config option desc mail_transport' => 'Használhatod az alapértelmezett PHP beállításokat az emailek küldéséhez, vagy megadhatod az SMTP kiszolgáló adatait',
    'config option name smtp_server' => 'SMTP kiszolgáló',
    'config option name smtp_port' => 'SMTP port',
    'config option name smtp_authenticate' => 'SMTP hitelesítés használata',
    'config option name smtp_username' => 'SMTP felhasználónév',
    'config option name smtp_password' => 'SMTP jelszó',
    'config option name smtp_secure_connection' => 'Biztonságos SMTP kapcsolat használata',
    
  ); // array

?>