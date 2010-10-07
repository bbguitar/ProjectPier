<?php 

  return array(
  
    // ---------------------------------------------------
    //  Administration tools
    // ---------------------------------------------------
    
    'administration tool name test_mail_settings' => 'Δοκιμή ρυθμίσεων email',
    'administration tool desc test_mail_settings' => 'Χρησιμοποιήστε αυτό το απλό εργαλείο για να στείλετε email και να ελέγξετε ότι ο mailer είναι σωστά ρυθμισμένος',
    'administration tool name mass_mailer' => 'Μαζική αποστολή email',
    'administration tool desc mass_mailer' => 'Απλό εργαλείο που σας επιτρέπει να στέλνετε μηνύματα απλού κειμένου σε όποια ομάδα χρηστών είναι εγγεγραμένη στο σύστημα',
  
    // ---------------------------------------------------
    //  Configuration categories and options
    // ---------------------------------------------------
  
    'configuration' => 'Παραμετροποίηση',
    
    'mail transport mail()' => 'Προκαθορισμένες ρυθμίσεις PHP',
    'mail transport smtp' => 'SMTP server',
    
    'secure smtp connection no'  => 'Όχι',
    'secure smtp connection ssl' => 'Ναι, χρησιμοποίησε SSL',
    'secure smtp connection tls' => 'Ναι, χρησιμοποίησε TLS',
    
    'file storage file system' => 'Σύστημα αρχείων',
    'file storage mysql' => 'Βάση δεδομένων (MySQL)',
    
    // Categories
    'config category name general' => 'Γενικά',
    'config category desc general' => 'Γενικές ρυθμίσεις',
    'config category name mailing' => 'Emails',
    'config category desc mailing' => 'Ρυθμίστε το πώς θα γίνεται ο χειρισμός των email. Μπορείτε να χρησιμοποιήσετε τις επιλογές που βρίσκονται στο php.ini ή να το ρυθμίσετε να χρησιμοποιεί οποιονδήποτε άλλο SMTP server',
    
    // ---------------------------------------------------
    //  Options
    // ---------------------------------------------------
    
    // General
    'config option name site_name' => 'Όνομα site',
    'config option desc site_name' => 'Αυτή η τιμή θα εμφανιστεί ως όνομα του site στη σελίδα του κεντρικού πίνακα ελέγχου',
    'config option name file_storage_adapter' => 'Αποθήκευση αρχείων',
    'config option desc file_storage_adapter' => 'Επιλέξτε πού θα αποθηκεύονται τα συνημμένα αρχεία, οι φωτογραφίες, λογότυπα και όλα τα άλλα έγγραφα. <strong>Προτείνεται η αποθήκευση στη βάση δεδομένων</strong>.',
    'config option name default_project_folders' => 'Προκαθορισμένοι φάκελοι',
    'config option desc default_project_folders' => 'Οι φάκελοι που θα δημιουργθηθούν όταν ένα νέο έργο δημιουργείται. Κάθε όνομα φακέλου πρέπει να είναι σε νέα γραμμή. Διπλές ή άδειες γραμμές θα αγνοηθούν',
    'config option name theme' => 'Θέμα Εμφάνισης',
    'config option desc theme' => 'Χρησιμοποιώντας θέματα, μπορείτε να αλλάξετε την προκαθορισμένη εμφάνιση και αίσθηση',
    
    // activeCollab.com
    'config option name upgrade_check_enabled' => 'Ενεργοποίηση ελέγχου αναβάθμισης',
    'config option desc upgrade_check_enabled' => 'Αν Ναι, το σύστημα θα ελέγχει καθημερινά αν υπάρχει νέα έκδοση για κατέβασμα',
    
    // Mailing
    'config option name exchange_compatible' => 'Λειτουργία σε mode συμβατό με Microsoft Exchange',
    'config option desc exchange_compatible' => 'Αν χρησιμοποιείτε τον Microsoft Exchange Server, ορίστε αυτή την επιλογή σε "ναι" για να αποφύγετε μερικά γνωστά προβλήματα με τα email.',
    'config option name mail_transport' => 'Αποστολή email ',
    'config option desc mail_transport' => 'Μπορείτε να χρησιμοποιήσετε τις προκαθορισμένες ρυθμίσεις της PHP ή να ορίσετε SMTP server',
    'config option name smtp_server' => 'SMTP server',
    'config option name smtp_port' => 'SMTP port',
    'config option name smtp_authenticate' => 'Χρήση πιστοποίησης SMTP',
    'config option name smtp_username' => 'SMTP username',
    'config option name smtp_password' => 'SMTP password',
    'config option name smtp_secure_connection' => 'Χρήση ασφαλούς σύνδεσης SMTP',
    
  ); // array

?>
