<?php

  return array(
  
    // ---------------------------------------------------
    //  Administration tools
    // ---------------------------------------------------
    
    'administration tool name test_mail_settings' => 'Patrikrinti pasto nustatymus',
//    'administration tool desc test_mail_settings' => 'Use this simple tool to send test emails to check if ProjectPier mailer is well configured',
    'administration tool desc test_mail_settings' => 'Naudojant si iranki galima patikrinti ar ProjectPier pasta gerai nustatytas',
//    'administration tool name mass_mailer' => 'Mass mailer',
    'administration tool name mass_mailer' => 'Grupes pastas',
//    'administration tool desc mass_mailer' => 'Simple tool that let you send plain text messages to any group of users registered to the system',
    'administration tool desc mass_mailer' => 'Irankis leidziantis siust laiskus bet kuriai sistemos vartotoju grupei',
  
    // ---------------------------------------------------
    //  Configuration categories and options
    // ---------------------------------------------------
  
//    'configuration' => 'Configuration',
    'configuration' => 'Konfiguracija',
    
//    'mail transport mail()' => 'Default PHP settings',
    'mail transport mail()' => 'PHP nustatymai pagal nutylejima',
    'mail transport smtp' => 'SMTP serveris',
    
    'secure smtp connection no'  => 'No',
    'secure smtp connection ssl' => 'Yes, naudojant SSL',
    'secure smtp connection tls' => 'Yes, Naudojant TLS',
    
    'file storage file system' => 'Bylu systema',
    'file storage mysql' => 'Duomenu baze (MySQL)',
    
    // Categories
    'config category name general' => 'Bendri',
    'config category desc general' => 'Bendri ProjectPier nustatymai',
    'config category name mailing' => 'Pastas',
//    'config category desc mailing' => 'Use this set of settings to set up how ProjectPier should handle email sending. You can use configuration options provided in your php.ini or set it so it uses any other SMTP server',
    'config category desc mailing' => 'Cia nustatoma kaip ProjectPier sius laiskus. Taip pat galima naudoti nustatymus esancius php.ini arba nurodyti bet koki kita SMTP serveri.',
    
    // ---------------------------------------------------
    //  Options
    // ---------------------------------------------------
    
    // General
    'config option name site_name' => 'Puslapio vardas',
//    'config option desc site_name' => 'This value will be displayed as the site name on the Dashboard page',
    'config option desc site_name' => 'Cia yra puslapio vardas atvaizduojamas informaciniame skyde',
    'config option name file_storage_adapter' => 'Bylu talpykla',
//    'config option desc file_storage_adapter' => 'Select where you want to store attachments, avatars, logos and any other uploaded documents. <strong>Database storage engine is recommended</strong>.',
    'config option desc file_storage_adapter' => 'Pasirink informacijos talpykla. <strong>Rekomenduojame duomenu baziu serveri</strong>.',
    'config option name default_project_folders' => 'Default folders',
//    'config option desc default_project_folders' => 'Folders that will be created when project is created. Every folder name should be in a new line. Duplicate or empty lines will be ignored',
    'config option desc default_project_folders' => 'Aplankai sukuriami kartu su nauju projektu. Kiekvienas rasomas naujoje eiluteje.',
    'config option name theme' => 'Tema',
//    'config option desc theme' => 'Using themes you can change the default look and feel of ProjectPier',
    'config option desc theme' => 'Nuo temos priklauso ProjectPier isvaizda',
    
    // ProjectPier
//    'config option name upgrade_check_enabled' => 'Enable upgrade check',
    'config option name upgrade_check_enabled' => 'Nauju versiju tikrinimas',
//    'config option desc upgrade_check_enabled' => 'If Yes system will once a day check if there are new versions of ProjectPier available for download',
    'config option desc upgrade_check_enabled' => '"Yes" atveju sistema tikrins ar nera nauju versiju',
    
    // Mailing
//    'config option name exchange_compatible' => 'Microsoft Exchange compatibility mode',
    'config option name exchange_compatible' => 'Suderinamumas su Microsoft Exchange',
//    'config option desc exchange_compatible' => 'If you are using Microsoft Exchange Server set this option to yes to avoid some known mailing problems.',
    'config option desc exchange_compatible' => 'Naudojant Microsoft Exchange Server reikia parinkit "yes".',
//    'config option name mail_transport' => 'Mail transport',
    'config option name mail_transport' => 'Pasto transport',
//    'config option desc mail_transport' => 'You can use default PHP settings for sending emails or specify SMTP server',
    'config option desc mail_transport' => 'Pasto siuntimui galima naudotis PHP arba nurodyti SMTP serveri',
    'config option name smtp_server' => 'SMTP serveris',
    'config option name smtp_port' => 'SMTP portas',
    'config option name smtp_authenticate' => 'Naudotis SMTP authentikacija',
    'config option name smtp_username' => 'SMTP vartotojas',
    'config option name smtp_password' => 'SMTP slaptazodis',
    'config option name smtp_secure_connection' => 'Naudoti saugu SMTP kanala',
    
  ); // array

?>
