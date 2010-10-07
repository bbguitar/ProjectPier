<?php

  /**
  * Error messages
  *
  * @version 1.0
  * @http://www.projectpier.org/
  */

  // Return langs
  return array(

    // General
    'invalid email address' => 'E-posta adres biçimi geçerli değil',

    // Company validation errors
    'company name required' => 'Şirket / organizasyon ismi gerekli',
    'company homepage invalid' => 'Ana sayfa adresi geçerli bir URL değil',
    
    // User validation errors
    'username value required' => 'Kullanıcı adı değeri gerekli',
    'username must be unique' => 'Üzgünüm, ama bu kullanıcı adı alınmış',
    'email value is required' => 'E-posta adresi değeri gerekli',
    'email address must be unique' => 'Üzgünüm, bu e-posta adresi alınmış',
    'company value required' => 'Kullanıcı şirketin / organizasyonun bir parçası olmalı',
    'password value required' => 'Parola değeri girilmeli',
    'passwords dont match' => 'Parolalar birbirini tutmuyor',
    'old password required' => 'Eski parola değeri girilmeli',
    'invalid old password' => 'Eski parola geçerli değil',
    
    // Avatar
    'invalid upload type' => 'Geçersiz dosya türü. İzin verilen türler %s',
    'invalid upload dimensions' => 'Geçersiz resim boyutu. Maksimum boyut %sx%s piksel',
    'invalid upload size' => 'Geçersiz resim büyüklüğü. Maksimum büyüklük %s',
    'invalid upload failed to move' => 'Yüklenen dosyanın taşıma işlemi başarısız',
    
    // Registration form
    'terms of services not accepted' => 'Hesap oluşturmak için kullanım şartlarımızı okuyup kabul etmeniz gerekir',
    
    // Init company website
    'failed to load company website' => 'Web sitesini yükleme işlemi başarısız. Sahip şirket bulunamadı',
    'failed to load project' => 'Etkin projeyi yükleme başarısız',
    
    // Login form
    'username value missing' => 'Lütfen kullanıcı adınızı girin',
    'password value missing' => 'Lütfen parolanızı girin',
    'invalid login data' => 'Giriş yapma işlemi başarısız. Lütfen giriş bilgilerinizi kontrol edip tekrar deneyin',
    
    // Add project form
    'project name required' => 'Proje ismi değeri gerekli',
    'project name unique' => 'Proje ismi eşsiz olmalı',
    
    // Add message form
    'message title required' => 'Başlık değeri gerekli',
    'message title unique' => 'Başlık değeri bu projede eşsiz olmalı',
    'message text required' => 'Metin değeri gerekli',
    
    // Add comment form
    'comment text required' => 'Yorum metni gerekli',
    
    // Add milestone form
    'milestone name required' => 'Kilometre taşı ismi gerekli',
    'milestone due date required' => 'Kilometre taşı son bitiş tarihi değeri gerekli',
    
    // Add task list
    'task list name required' => 'Görev listesi ismi gerekli',
    'task list name unique' => 'Görev listesi ismi bu projede eşsiz olmalı',
    
    // Add task
    'task text required' => 'Görev metni gerekli',
    
    // Add project form
    'form name required' => 'Form ismi gerekli',
    'form name unique' => 'Form ismi eşsiz olmalı',
    'form success message required' => 'Başarı mesajı gerekli',
    'form action required' => 'Form işlemi gerekli',
    'project form select message' => 'Lütfen mesaj seçin',
    'project form select task lists' => 'Lütfen görev listesi seçin',
    
    // Submit project form
    'form content required' => 'Lütfen metin alanına içerik girin',
    
    // Validate project folder
    'folder name required' => 'Klasör ismi gerekli',
    'folder name unique' => 'Bu projede klasör ismi eşsiz olmalı',
    
    // Validate add / edit file form
    'folder id required' => 'Lütfen klasör seçin',
    'filename required' => 'Dosya ismi gerekli',
    
    // File revisions (internal)
    'file revision file_id required' => 'Revizyon bir dosyaya bağlı olmalı',
    'file revision filename required' => 'Dosya ismi gerekli',
    'file revision type_string required' => 'Bilinmeyen dosya türü',
    
    // Test mail settings
    'test mail recipient required' => 'Alıcı adresi gerekli',
    'test mail recipient invalid format' => 'Geçersiz alıcı adres biçimi',
    'test mail message required' => 'E-posta mesajı gerekli',
    
    // Mass mailer
    'massmailer subject required' => 'Mesaj konusu gerekli',
    'massmailer message required' => 'Mesaj metni gerekli',
    'massmailer select recepients' => 'Lütfen bu e-postayı alacak kullanıcıları seçin',
    
  ); // array

?>