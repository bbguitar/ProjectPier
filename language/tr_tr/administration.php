<?php

  return array(
  
    // ---------------------------------------------------
    //  Administration tools
    // ---------------------------------------------------
    
    'administration tool name test_mail_settings' => 'E-posta ayarlarını test et',
    'administration tool desc test_mail_settings' => 'Bu basit aracı posta göndericisinin doğru yapılandırıldığını test e-postaları atarak kontrol etmek için kullanın',
    'administration tool name mass_mailer' => 'Toplu e-posta gönderici',
    'administration tool desc mass_mailer' => 'Sisteme kayıtlı herhangi bir kullanıcı grubuna düz metin mesajları göndermeye yarayan basit araç',
  
    // ---------------------------------------------------
    //  Configuration categories and options
    // ---------------------------------------------------
  
    'configuration' => 'Yapılandırma',
    
    'mail transport mail()' => 'Varsayılan PHP ayarları',
    'mail transport smtp' => 'SMTP sunucusu',
    
    'secure smtp connection no'  => 'Hayır',
    'secure smtp connection ssl' => 'Evet, SSL kullan',
    'secure smtp connection tls' => 'Evet, TLS kullan',
    
    'file storage file system' => 'Dosya sistemi',
    'file storage mysql' => 'Veritabanı (MySQL)',
    
    // Categories
    'config category name general' => 'Genel',
    'config category desc general' => 'ProjectPier genel ayarları',
    'config category name mailing' => 'Postalama',
    'config category desc mailing' => 'ProjectPier\'ın e-posta gönderim şeklini ayarlamak için kullanın. Yapılandırma seçeneklerini php.ini dosyasındaki gibi kullanabilirsiniz veya diğer SMTP sunucusu kullanacak şekilde ayarlayabilirsiniz',
    
    // ---------------------------------------------------
    //  Options
    // ---------------------------------------------------
    
    // General
    'config option name site_name' => 'Site ismi',
    'config option desc site_name' => 'Bu değer panel sayfasında site ismi olarak görüntülenecek',
    'config option name file_storage_adapter' => 'Dosya depolama',
    'config option desc file_storage_adapter' => 'Ekleri, avatarları, logoları ve yüklenen diğer belgeleri depolayacağınız yeri seçin. <strong>Veritabanı depolama motoru tavsiye edilir</strong>.',
    'config option name default_project_folders' => 'Varsayılan klasörler',
    'config option desc default_project_folders' => 'Proje oluşturulduğunda oluşturulacak klasörler. Her klasör ismi yeni bir satırda olmalı. Çift veya boş satırlar göz ardı edilecek',
    'config option name theme' => 'Tema',
    'config option desc theme' => 'Temaları kullanarak ProjectPier\'ın görünümünü ve havasını değiştirebilirsiniz',
    
    // ProjectPier
    'config option name upgrade_check_enabled' => 'Yükseltme kontrolünü etkinleştir',
    'config option desc upgrade_check_enabled' => 'Evet derseniz sistem günde bir kere mevcut indirilebilir yeni sürüm ProjectPier olup olmadığını kontrol edecek',
    
    // Mailing
    'config option name exchange_compatible' => 'Microsoft Exchange uyumluluk modu',
    'config option desc exchange_compatible' => 'Microsoft Exchange Server kullanıyorsanız bilinen bazı postalama problemlerini önlemek için bu seçeneği evet olarak ayarlayın.',
    'config option name mail_transport' => 'Posta taşıma',
    'config option desc mail_transport' => 'E-posta gönderimi için varsayılan PHP ayarlarını kullanabilirsiniz veya SMTP sunucusu belirleyebilirsiniz',
    'config option name smtp_server' => 'SMTP sunucusu',
    'config option name smtp_port' => 'SMTP portu',
    'config option name smtp_authenticate' => 'SMTP doğrulaması kullan',
    'config option name smtp_username' => 'SMTP kullanıcı adı',
    'config option name smtp_password' => 'SMTP parolası',
    'config option name smtp_secure_connection' => 'Güvenli SMTP bağlantısı kullan',
    
  ); // array

?>