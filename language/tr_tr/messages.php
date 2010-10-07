<?php

  /**
  * Array of messages file (error, success message, status...)
  *
  * @version 1.0
  * @http://www.projectpier.org/
  */

  return array(
  
    // Empty, dnx etc
    'project dnx' => 'İstenilen proje veritabanında bulunmıyor',
    'message dnx' => 'İstenilen mesaj bulunamıyor',
    'no comments in message' => 'Bu mesaj için yorum yapılmamış',
    'no comments associated with object' => 'Bu madde için yorum yapılmamış',
    'no messages in project' => 'Bu projede hiç mesaj yok',
    'no subscribers' => 'Bu mesaja abone olan kullanıcı yok',
    'no activities in project' => 'Bu projede henüz bir aktivite yok',
    'comment dnx' => 'İstenilen yorum bulunamıyor',
    'milestone dnx' => 'İstenilen kilometre taşı bulunamıyor',
    'task list dnx' => 'İstenilen görev listesi bulunamıyor',
    'task dnx' => 'İstenilen görev listesi bulunamıyor',
    'no milestones in project' => 'Bu projede kilometre taşı yok',
    'no active milestones in project' => 'Bu projede etkin kilometre taşı yok',
    'empty milestone' => 'Bu kilometre taşı boş. İstediğiniz zaman <a href="%s">mesaj</a> veya <a href="%s">görev listesi</a> ekleyebilirsiniz',
    'no logs for project' => 'Bu proje ile ilgili tutulmuş kayıt yok',
    'no recent activities' => 'Veritabanına girilmiş yeni etkinlik yok',
    'no open task lists in project' => 'Bu projede açık görev listesi yok',
    'no completed task lists in project' => 'Bu projede tamamlanmış görev listesi yok',
    'no open task in task list' => 'Bu listede görev yok',
    'no projects in db' => 'Veritabanında tanımlanmış proje yok',
    'no projects owned by company' => 'Bu şirketin sahip olduğu proje yok',
    'no projects started' => 'Başlanmış proje yok',
    'no active projects in db' => 'Etkin proje yok',
    'no new objects in project since last visit' => 'Son ziyaretinizden beri bu projede yeni bir madde yok',
    'no clients in company' => 'Şirketinizde kayıtlı müşteri yok',
    'no users in company' => 'Bu şirkette kullanıcı yok',
    'client dnx' => 'Seçili müşteri şirket bulunamıyor',
    'company dnx' => 'Seçili şirket bulunamıyor',
    'user dnx' => 'İstenilen kullanıcı veritabanında bulunmuyor',
    'avatar dnx' => 'Avatar bulunamıyor',
    'no current avatar' => 'Avatar yüklenmemiş',
    'no current logo' => 'Bir logo yüklenmemiş',
    'user not on project' => 'Seçili kullanıcı seçili proje ile alakalı değil',
    'company not on project' => 'Seçili şirket seçili proje ile alakalı değil',
    'user cant be removed from project' => 'Seçili kullanıcı projeden çıkarılamıyor',
    'tag dnx' => 'İstenilen etiket bulunamıyor',
    'no tags used on projects' => 'Bu projede etiket kullanılmamış',
    'no forms in project' => 'Bu projede form yok',
    'project form dnx' => 'İstenilen proje formu veritabanında bulunamıyor',
    'related project form object dnx' => 'İlişkili form maddesi veritabanında bulunamıyor',
    'no my tasks' => 'Size atanmış görev yok',
    'no search result for' => '"<strong>%s</strong>" ile eşleşen madde yok',
    'no files on the page' => 'Bu sayfada dosya yok',
    'folder dnx' => 'Talep ettiğiniz klasör veritabanında bulunamıyor',
    'define project folders' => 'Bu projede klasör yok. Devam etmek için lütfen klasör tanımlayın',
    'file dnx' => 'İstenilen dosya veritabanında bulunamıyor',
    'file revision dnx' => 'İstenilen revizyon veritabanında bulunamıyor',
    'no file revisions in file' => 'Geçersiz dosya - bu dosyayla ilişkili revizyon yok',
    'cant delete only revision' => 'Bu revizyonu silemezsiniz. Her dosyanın gönderilmiş en az bir revizyonu olmalı',
    'config category dnx' => 'İstediğiniz yapılandırma kategorisi bulunamıyor',
    'config category is empty' => 'Seçili yapılandırma kategorisi boş',
    'email address not in use' => '%s kullanımda değil',
    'no attached files' => 'Bu maddeye iliştirilmiş dosya yok',
    'file not attached to object' => 'Seçili dosya seçili maddeye iliştirilmemiş',
    'no files to attach' => 'Lütfen iliştirilmesi gereken dosyaları seçin',
    'no administration tools' => 'Veritabanında kayıtlı yönetim aracı yok',
    'administration tool dnx' => 'Yönetim aracı "%s" bulunamıyor',
    
    // Success
    'success add project' => 'Proje %s başarılı bir şekilde eklendi',
    'success edit project' => 'Proje %s güncellendi',
    'success delete project' => 'Proje %s silindi',
    'success complete project' => 'Proje %s tamamlandı',
    'success open project' => 'Proje %s tekrar açıldı',
    
    'success add milestone' => 'Kilometre taşı \'%s\' başarılı bir şekilde oluşturuldu',
    'success edit milestone' => 'Kilometre taşı \'%s\' başarılı bir şekilde güncellendi',
    'success deleted milestone' => 'Kilometre taşı \'%s\' başarılı bir şekilde silindi',
    
    'success add message' => 'Mesaj %s başarılı bir şekilde eklendi',
    'success edit message' => 'Mesaj %s başarılı bir şekilde güncellendi',
    'success deleted message' => 'Mesaj \'%s\' ve bu mesaj için yapılmış tüm yorumlar başarılı bir şekilde silindi',
    
    'success add comment' => 'Yorum başarılı bir şekilde eklendi',
    'success edit comment' => 'Yorum başarılı bir şekilde güncellendi',
    'success delete comment' => 'Yorum başarılı bir şekilde silindi',
    
    'success add task list' => 'Görev listesi \'%s\' eklendi',
    'success edit task list' => 'Görev listesi \'%s\' güncellendi',
    'success delete task list' => 'Görev listesi \'%s\' silindi',
    
    'success add task' => 'Seçili görev eklendi',
    'success edit task' => 'Seçili görev güncellendi',
    'success delete task' => 'Seçili görev silindi',
    'success complete task' => 'Seçili görev tamamlandı',
    'success open task' => 'Seçili görev tekrar açıldı',
    'success n tasks updated' => '%s görev güncellendi',
    
    'success add client' => 'Müşteri şirket %s eklendi',
    'success edit client' => 'Müşteri şirket %s güncellendi',
    'success delete client' => 'Müşteri şirket %s silindi',
    
    'success edit company' => 'Şirket bilgisi güncellendi',
    'success edit company logo' => 'Şirket logosu güncellendi',
    'success delete company logo' => 'Şirket logosu silindi',
    
    'success add user' => 'Kullanıcı %s başarılı bir şekilde eklendi',
    'success edit user' => 'Kullanıcı %s başarılı bir şekilde güncellendi',
    'success delete user' => 'Kullanıcı %s başarılı bir şekilde silindi',
    
    'success update project permissions' => 'Proje izinleri başarılı bir şekilde güncellendi',
    'success remove user from project' => 'Kullanıcı başarılı bir şekilde projeden çıkarıldı',
    'success remove company from project' => 'Şirket başarılı bir şekilde projeden çıkarıldı',
    
    'success update profile' => 'Profil güncellendi',
    'success edit avatar' => 'Avatar başarılı bir şekilde güncellendi',
    'success delete avatar' => 'Avatar başarılı bir şekilde silindi',
    
    'success hide welcome info' => 'Hoşgeldiniz bilgi kutusu başarılı bir şekilde gizlendi',
    
    'success complete milestone' => 'Kilometre taşı \'%s\' tamamlandı',
    'success open milestone' => 'Kilometre taşı \'%s\' tekrar açıldı',
    
    'success subscribe to message' => 'Bu mesaja başarılı bir şekilde abone oldunuz',
    'success unsubscribe to message' => 'Bu mesaja aboneliğinizi başarılı bir şekilde iptal ettiniz',
    
    'success add project form' => 'Form \'%s\' eklendi',
    'success edit project form' => 'Form \'%s\' güncellendi',
    'success delete project form' => 'Form \'%s\' silindi',
    
    'success add folder' => 'Klasör \'%s\' eklendi',
    'success edit folder' => 'Klasör \'%s\' güncellendi',
    'success delete folder' => 'Klasör \'%s\' silindi',
    
    'success add file' => 'Dosya \'%s\' eklendi',
    'success edit file' => 'Dosya \'%s\' güncellendi',
    'success delete file' => 'Dosya \'%s\' silindi',
    
    'success edit file revision' => 'Revizyon güncellendi',
    'success delete file revision' => 'Dosya revizyonu silindi',
    
    'success attach files' => '%s dosya başarılı bir şekilde iliştirildi',
    'success detach file' => 'Dosya(lar) başarılı bir şekilde ayrıldı',
    
    'success update config category' => '%s yapılandırma değerleri güncellendi',
    'success forgot password' => 'Parolanız e-posta adresinize gönderildi',
    
    'success test mail settings' => 'Test postası başarılı bir şekilde gönderildi',
    'success massmail' => 'E-posta gönderildi',
    
    'success update company permissions' => 'Şirket izinleri başarılı bir şekilde güncellendi. %s kayıt güncellendi',
    'success user permissions updated' => 'Kullanıcı izinleri güncellendi',
    
    // Failures
    'error form validation' => 'Madde kaydetme başarısız çünkü maddenin bazı özellikleri geçersiz',
    'error delete owner company' => 'Sahip şirket silinemiyor',
    'error delete message' => 'Seçili mesajı silme başarısız',
    'error update message options' => 'Mesaj seçeneklerini güncelleme başarısız',
    'error delete comment' => 'Seçili yorumu silme başarısız',
    'error delete milestone' => 'Seçili kilometre taşını silme başarısız',
    'error complete task' => 'Seçili görevi tamamlama başarısız',
    'error open task' => 'Seçili görevi tekrar açma başarısız',
    'error upload file' => 'Dosyayı yükleme başarısız',
    'error delete project' => 'Seçili projeyi silme başarısız',
    'error complete project' => 'Seçili projeyi tamamlama başarısız',
    'error open project' => 'Seçili projeyi tekrar açma başarısız',
    'error delete client' => 'Seçili müşteri şirketi silme başarısız',
    'error delete user' => 'Seçili kullanıcıyı silme başarısız',
    'error update project permissions' => 'Proje izinlerini güncelleme başarısız',
    'error remove user from project' => 'Projeden kullanıcıyı çıkarma başarısız',
    'error remove company from project' => 'Projeden şirketi çıkarma başarısız',
    'error edit avatar' => 'Avatarı düzenleme başarısız',
    'error delete avatar' => 'Avatarı silme başarısız',
    'error hide welcome info' => 'Hoşgeldiniz bilgisini gizleme başarısız',
    'error complete milestone' => 'Seçili kilometre taşını tamamlama başarısız',
    'error open milestone' => 'Seçili kilometre taşını tekrar açma başarısız',
    'error file download' => 'Belirlenmiş dosyayı indirme başarısız',
    'error attach file' => 'Dosya iliştirme başarısız',
    'error edit company logo' => 'Şirket logosunu güncelleme başarısız',
    'error delete company logo' => 'Şirket logosunu silme başarısız',
    'error subscribe to message' => 'Seçili mesaja abone olma başarısız',
    'error unsubscribe to message' => 'Seçili mesaj için aboneliği iptal etme başarısız',
    'error add project form' => 'Proje formu ekleme başarısız',
    'error submit project form' => 'Proje formu onaylama başarısız',
    'error delete folder' => 'Seçili klasörü silme başarısız',
    'error delete file' => 'Seçili dosyayı silme başarısız',
    'error delete file revision' => 'Dosya revizyonunu silme başarısız',
    'error delete task list' => 'Seçili görev listesini silme başarısız',
    'error delete task' => 'Seçili görevi silme başarısız',
    'error check for upgrade' => 'Yeni sürümü kontrol etme başarısız',
    'error attach file' => 'Dosya iliştirme başarısız',
    'error detach file' => 'Dosya ayırma başarısız',
    'error attach files max controls' => 'Daha fazla dosya eki ekleyemezsiniz. Limit: %s',
    'error test mail settings' => 'Test mesajı gönderme başarısız',
    'error massmail' => 'E-posta gönderimi başarısız',
    'error owner company has all permissions' => 'Sahip şirket tüm izinlere sahiptir',
    
    // Access or data errors
    'no access permissions' => 'İstenilen sayfaya giriş izniniz yok',
    'invalid request' => 'Geçersiz istek!',
    
    // Confirmation
    'confirm delete message' => 'Bu mesajı silmek istediğinizden emin misiniz?',
    'confirm delete milestone' => 'Bu kilometre taşını silmek istediğinizden emin misiniz?',
    'confirm delete task list' => 'Bu görev listesini ve listedeki tüm görevleri silmek istediğinizden emin misiniz?',
    'confirm delete task' => 'Bu görevi silmek istediğinizden emin misiniz?',
    'confirm delete comment' => 'Bu yorumu silmek istediğinizden emin misiniz?',
    'confirm delete project' => 'Bu projeyi ve alakalı tüm verileri (mesajlar, görevler, kilometre taşları, dosyalar...) silmek istediğinizden emin misiniz?',
    'confirm complete project' => 'Bu projeyi tamamlandı olarak işaretlemek istediğinizden emin misiniz? Tüm proje işlemleri kilitlenecek',
    'confirm open project' => 'Bu projeyi etkin olarak işaretlemek istediğinizden emin misiniz? Tüm proje işlemleri açılacak',
    'confirm delete client' => 'Seçili müşteri şirketi ve tüm kullanıcılarını silmek istediğinizden emin misiniz?',
    'confirm delete user' => 'Bu kullanıcı hesabını silmek istediğinizden emin misiniz?',
    'confirm reset people form' => 'Bu formu sıfırlamak istediğinizden emin misiniz? Yaptığınız tüm değişiklikler kaybedilecek!',
    'confirm remove user from project' => 'Bu kullanıcıyı projeden çıkarmak istediğinizden emin misiniz?',
    'confirm remove company from project' => 'Bu şirketi projeden çıkarmak istediğinizden emin misiniz?',
    'confirm logout' => 'Çıkmak istediğinizden emin misiniz?',
    'confirm delete current avatar' => 'Bu avatarı silmek istediğinizden emin misiniz?',
    'confirm detach file' => 'Bu dosyayı ayırmak istediğinizden emin misiniz?',
    'confirm delete company logo' => 'Bu logoyu silmek istediğinizden emin misiniz?',
    'confirm subscribe' => 'Bu mesaja abone olmak istediğinizden emin misiniz? Herhangi bir kişi (sizin dışınızda) bu mesaja yorum yapınca bir e-posta alacaksınız.',
    'confirm unsubscribe' => 'Aboneliği iptal etmek istediğinizden emin misiniz?',
    'confirm delete project form' => 'Bu formu silmek istediğinizden emin misiniz?',
    'confirm delete folder' => 'Bu klasörü silmek istediğinizden emin misiniz?',
    'confirm delete file' => 'Bu dosyayı silmek istediğinizden emin misiniz?',
    'confirm delete revision' => 'Bu revizyonu silmek istediğinizden emin misiniz?',
    'confirm reset form' => 'Bu formu sıfırlamak istediğinizden emin misiniz?',
    
    // Errors...
    'system error message' => 'Üzgünüz, fakat önüne geçilemeyen bir hata ProjectPier\'ın isteğinizi yerine getirmesini engelledi. Yöneticiye bir hata raporu gönderildi.',
    'execute action error message' => 'Üzgünüz, fakat ProjectPier isteğinizi şimdilik yerine getiremiyor. Yöneticiye bir hata raporu gönderildi.',
    
    // Log
    'log add projectmessages' => '\'%s\' eklendi',
    'log edit projectmessages' => '\'%s\' güncellendi',
    'log delete projectmessages' => '\'%s\' silindi',
    
    'log add comments' => '%s eklendi',
    'log edit comments' => '%s güncellendi',
    'log delete comments' => '%s silindi',
    
    'log add projectmilestones' => '\'%s\' eklendi',
    'log edit projectmilestones' => '\'%s\' güncellendi',
    'log delete projectmilestones' => '\'%s\' silindi',
    'log close projectmilestones' => '\'%s\' tamamlandı',
    'log open projectmilestones' => '\'%s\' tekrar açıldı',
    
    'log add projecttasklists' => '\'%s\' eklendi',
    'log edit projecttasklists' => '\'%s\' güncellendi',
    'log delete projecttasklists' => '\'%s\' silindi',
    'log close projecttasklists' => '\'%s\' kapatıldı',
    'log open projecttasklists' => '\'%s\' açıldı',
    
    'log add projecttasks' => '\'%s\' eklendi',
    'log edit projecttasks' => '\'%s\' güncellendi',
    'log delete projecttasks' => '\'%s\' silindi',
    'log close projecttasks' => '\'%s\' kapatıldı',
    'log open projecttasks' => '\'%s\' açıldı',
    
    'log add projectforms' => '\'%s\' eklendi',
    'log edit projectforms' => '\'%s\' güncellendi',
    'log delete projectforms' => '\'%s\' silindi',
    
    'log add projectfolders' => '\'%s\' eklendi',
    'log edit projectfolders' => '\'%s\' güncellendi',
    'log delete projectfolders' => '\'%s\' silindi',
    
    'log add projectfiles' => '\'%s\' yüklendi',
    'log edit projectfiles' => '\'%s\' güncellendi',
    'log delete projectfiles' => '\'%s\' silindi',
    
    'log edit projectfilerevisions' => '%s güncellendi',
    'log delete projectfilerevisions' => '%s silindi',
  
  ); // array

?>