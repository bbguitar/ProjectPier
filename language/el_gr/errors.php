<?php

  // Return langs
  return array(
  
    // General
    'invalid email address' => 'Δεν είναι έγκυρη η σύνταξη του email',
   
    // Company validation errors
    'company name required' => 'Απαιτείται το όνομα της εταιρίας / οργανισμού',
    'company homepage invalid' => 'Η σύνταξη του url της ιστοσελίδας δεν είναι έγκυρη',
    
    // User validation errors
    'username value required' => 'Απαιτείται τιμή στο όνομα χρήστη',
    'username must be unique' => 'Λυπούμαστε, αλλά το επιλεγμένο όνομα χρήστη είναι πιασμένο',
    'email value is required' => 'Απαιτείται τιμή στο email',
    'email address must be unique' => 'Λυπούμαστε, αλλά το επιλεγμένο email είναι ήδη πιασμένο',
    'company value required' => 'Ο χρήστης πρέπει να είναι μέλος κάποιας εταιρίας / οργανισμού',
    'password value required' => 'Απαιτείται τιμή στο password',
    'passwords dont match' => 'Τα password δεν είναι ίδια',
    'old password required' => 'Απαιτείται τιμή στο παλιό password',
    'invalid old password' => 'Το παλιό password δεν είναι έγκυρο',
    
    // Avatar
    'invalid upload type' => 'Μη έγκυρος τύπος αρχείου. Οι επιτρεπόμενοι τύποι είναι %s',
    'invalid upload dimensions' => 'Μη έγκυρες διαστάσεις εικόνας. Το μέγιστο μέγεθος είναι %sx%s pixels',
    'invalid upload size' => 'Μη έγκυρο μέγεθος εικόνας. Το μέγιστο μέγεθος είναι %s',
    'invalid upload failed to move' => 'Αποτυχία κατά τη μετακίνηση του προς ανέβασμα αρχείου',
    
    // Registration form
    'terms of services not accepted' => 'Για να δημιουργήσετε λογαριασμό, πρέπει να διαβάσετε και να αποδεχθείτε τους όρους χρήσης των υπηρεσιών μας',
    
    // Init company website
    'failed to load company website' => 'Αποτυχία στο φόρτωμα της ιστοσελίδας. Δε βρέθηκε η ιδιοκτήτρια εταιρία',
    'failed to load project' => 'Αποτυχία στο φόρτωμα του ενεργού έργου',
    
    // Login form
    'username value missing' => 'Παρακαλούμε εισάγετε το όνομα χρήστη',
    'password value missing' => 'Παρακαλούμε εισάγετε το password',
    'invalid login data' => 'Αποτυχία κατά τη σύνδεση. Παρακαλούμε ελέγξτε τα στοιχεία σύνδεσης και προσπαθήστε ξανά',
    
    // Add project form
    'project name required' => 'Απαιτείται τιμή στο όνομα του έργου',
    'project name unique' => 'Το όνομα του έργου πρέπει να είναι μοναδικό',
    
    // Add message form
    'message title required' => 'Απαιτείται τιμή στον τίτλο',
    'message title unique' => 'Η τιμή του Τίτλου πρέπει να είναι μοναδική σε αυτό το έργο',
    'message text required' => 'Απαιτείται η τιμή κειμένου',
    
    // Add comment form
    'comment text required' => 'Απαιτείται το κείμενο του σχολίου',
    
    // Add milestone form
    'milestone name required' => 'Απαιτείται τιμή στο όνομα του ορόσημου',
    'milestone due date required' => 'Απαιτείται τιμή στην προθεσμία του ορόσημου',
    
    // Add task list
    'task list name required' => 'Απαιτείται τιμή στο όνομα της λίστας εργασιών',
    'task list name unique' => 'Το όνομα της λίστας εργασιών πρέπει να είναι μοναδικό σε αυτό το έργο',
    
    // Add task
    'task text required' => 'Απαιτείται το κείμενο της εργασίας',
    
    // Add project form
    'form name required' => 'Απαιτείται το όνομα της φόρμας',
    'form name unique' => 'Το όνομα της φόρμας πρέπει να είναι μοναδικό',
    'form success message required' => 'Απαιτείται το μήνυμα επιτυχίας',
    'form action required' => 'Απαιτείται η δράση της φόρμας',
    'project form select message' => 'Παρακαλούμε επιλέξτε μήνυμα',
    'project form select task lists' => 'Παρακαλούμε επιλέξτε λίστα εργασιών',
    
    // Submit project form
    'form content required' => 'Παρακαλούμε εισάγετε περιεχόμενο στο πεδίο κειμένου',
    
    // Validate project folder
    'folder name required' => 'Απαιτείται το όνομα φακέλου',
    'folder name unique' => 'Το όνομα φακέλου πρέπει να είναι μοναδικό σε αυτό το έργο',
    
    // Validate add / edit file form
    'folder id required' => 'Παρακαλούμε επιλέξτε φάκελο',
    'filename required' => 'Απαιτείται όνομα αρχείου',
    
    // File revisions (internal)
    'file revision file_id required' => 'Οι αναθεωρήσεις πρέπει να είναι συνδεδεμένες με ένα αρχείο',
    'file revision filename required' => 'Απαιτείται όνομα αρχείου',
    'file revision type_string required' => 'Άγνωστος τύπος αρχείου',
    
    // Test mail settings
    'test mail recipient required' => 'Απαιτείται η διεύθυνση παραλήπτη',
    'test mail recipient invalid format' => 'Μη έγκυρη διεύθυνση παραλήπτη',
    'test mail message required' => 'Απαιτείται το μήνυμα του email',
    
    // Mass mailer
    'massmailer subject required' => 'Απαιτείται το θέμα του μηνύματος',
    'massmailer message required' => 'Απαιτείται το σώμα του μηνύματος',
    'massmailer select recepients' => 'Παρακαλούμε επιλέξτε τους χρήστες που θα λάβουν αυτό το email',
    
  ); // array

?>
