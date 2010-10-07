<?php

  return array(
  
    // ---------------------------------------------------
    //  Administration tools
    // ---------------------------------------------------
    
    'administration tool name test_mail_settings' => 'Testaa sähköpostiasetukset',
    'administration tool desc test_mail_settings' => 'Käytä tätä yksinkertaista tyäkalua testataksesi toimiiko sähköpostien lähettäminen',
    'administration tool name mass_mailer' => 'Massapostitus',
    'administration tool desc mass_mailer' => 'Lähettää tekstimuotoisen viestin ryhmälle',
  
    // ---------------------------------------------------
    //  Configuration categories and options
    // ---------------------------------------------------
  
    'configuration' => 'Konfigurointi',
    
    'mail transport mail()' => 'PHP-oletusasetukset',
    'mail transport smtp' => 'SMTP-palvelin',
    
    'secure smtp connection no'  => 'Ei',
    'secure smtp connection ssl' => 'Kyllä, käytä SSL:ää',
    'secure smtp connection tls' => 'Kyllä, käytä TLS:ää',
    
    'file storage file system' => 'Datajärjestelmä',
    'file storage mysql' => 'Tietokanta (MySQL)',
    
    // Categories
    'config category name general' => 'Yleiset',
    'config category desc general' => 'Yleiset ProjectPier-asetukset',
    'config category name mailing' => 'sähköpostit',
    'config category desc mailing' => 'Kuinka ProjectPier lähettää sähköpostia. Voit käyttää php.ini:n asetuksia tai määritellä oman lähettävän palvelimen tiedot',
    
    // ---------------------------------------------------
    //  Options
    // ---------------------------------------------------
    
    // General
    'config option name site_name' => 'Sivuston nimi',
    'config option desc site_name' => 'Tieto näytetään sivuston nimenä Koti-sivulla',
    'config option name file_storage_adapter' => 'Tietokantavarasto',
    'config option desc file_storage_adapter' => 'Valitse mihin haluat tallentaa liitetiedosto, kuvat, logot ja muut tiedostot. <strong>Suosittelemme tietokantaan tallentamista</strong>.',
    'config option name default_project_folders' => 'Oletuskansiot',
    'config option desc default_project_folders' => 'Kansiot jotka luodaan kun projekti aloitetaan. Jokainen kansio omalla rivillään. Tuplarivit tai tyhjät poistetaan',
    'config option name theme' => 'Teema',
    'config option desc theme' => 'teemojen avulla voit muuttaa ProjectPierin ulkonäkää',
    
    // ProjectPier
    'config option name upgrade_check_enabled' => 'Salli päivitysten tarkkailu',
    'config option desc upgrade_check_enabled' => 'Jos Kyllä, järjestelmä tarkistaa kerran päivässä onko usia ProjectPier-versioita saatavilla',
    
    // Mailing
    'config option name exchange_compatible' => 'Microsoft Exchange-yhteensopivuustila',
    'config option desc exchange_compatible' => 'Jos käytät MS Exchange-palvelinta, aseta tämä päälle välttääksesi yhteensopivuusongelmia.',
    'config option name mail_transport' => 'sähköpostien lähettäminen',
    'config option desc mail_transport' => 'Voit käyttää PHP:n oletusasetuksia tai määritellä SMTP-palvelimen tiedot',
    'config option name smtp_server' => 'SMTP-palvelin',
    'config option name smtp_port' => 'SMTP-portti',
    'config option name smtp_authenticate' => 'Käytä SMTP-tunnistusta (authentication)',
    'config option name smtp_username' => 'SMTP-käyttäjätunnus',
    'config option name smtp_password' => 'SMTP-salasana',
    'config option name smtp_secure_connection' => 'Käytä salattua SMTP-yhteyttä',
    
  ); // array

?>