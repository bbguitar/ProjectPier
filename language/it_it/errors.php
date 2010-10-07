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
    'invalid email address' => 'Il formato dell\'indirizzo email non &egrave; valido',
   
    // Company validation errors
    'company name required' => '&Egrave; necessario il nome della azienda/organizzazione',
    'company homepage invalid' => 'Il valore per la Homepage non &egrave; URL valida',
    
    // User validation errors
    'username value required' => 'Specificare lo username',
    'username must be unique' => 'Spiacente, questo username &egrave; gi&agrave; utilizzato',
    'email value is required' => 'Specificare l\'indirizzo email',
    'email address must be unique' => 'Spiacente, questa email &egrave; gi&agrave; utilizzata',
    'company value required' => 'Ogni utente deve eseere parte di una azienda / organizzazione',
    'password value required' => 'Specificare la password',
    'passwords dont match' => 'Le passwords non corrispondono',
    'old password required' => 'Specificare la vecchia password',
    'invalid old password' => 'La vecchia password non &egrave; valida',
    
    // Avatar
    'invalid upload type' => 'Tipo di file non valido. I tipi consentiti sono %s',
    'invalid upload dimensions' => 'Dimensioni della immagine non valide. La dimensione massima &egrave; %sx%s pixels',
    'invalid upload size' => 'Peso della immagine non consentito. Il peso massimo &egrave; %s',
    'invalid upload failed to move' => 'Fallito lo spostamento del file uploadato',
    
    // Registration form
    'terms of services not accepted' => 'Per creare un account occorre che tu legga e accetti le condizioni di servizio',
    
    // Init company website
    'failed to load company website' => 'Non riesco a caricare il sito web. Non trovo l\'azienda proprietaria.',
    'failed to load project' => 'Non riesco a caricare il progetto attivo',
    
    // Login form
    'username value missing' => 'Perfavore inserisci il tuo username',
    'password value missing' => 'Perfavore inserisci la tua password',
    'invalid login data' => 'Non riesco ad effettuare il login con questi dati. Perfavore verifica login e password e prova di nuovo',
    
    // Add project form
    'project name required' => 'Specificare il nome del projetto',
    'project name unique' => 'Il nome del progetto deve essere unico',
    
    // Add message form
    'message title required' => 'Specificare il valore del Title',
    'message title unique' => 'Il valore di Title deve essere unico per questo progetto',
    'message text required' => 'Specificare il testo',
    
    // Add comment form
    'comment text required' => 'Specificare il testo del commento',
    
    // Add milestone form
    'milestone name required' => 'Specificare il nome della tappa',
    'milestone due date required' => 'Specificare la data di scadenza della tappa',
    
    // Add task list
    'task list name required' => 'Specificare il nome della lista dei compiti',
    'task list name unique' => 'Il nome della lista deve essere unico per questo progetto',
    
    // Add task
    'task text required' => 'Specificare il testo del compito',
    
    // Add project form
    'form name required' => 'Specificare il nome del Form',
    'form name unique' => 'Il nome del Form deve essere unico',
    'form success message required' => 'Specificare il messaggio di successo',
    'form action required' => 'Specificare la action del Form',
    'project form select message' => 'Perfavore seleziona un messaggio',
    'project form select task lists' => 'Perfavore seleziona un elenco di compiti',
    
    // Submit project form
    'form content required' => 'Perfavore inserisci del contenuto nel campo testo',
    
    // Validate project folder
    'folder name required' => 'Speficiare il nome della cartella',
    'folder name unique' => 'Il nome della cartella deve essere unico per questo progetto',
    
    // Validate add / edit file form
    'folder id required' => 'Perfavore seleziona una cartella',
    'filename required' => 'Specificare il nome del file',
    
    // File revisions (internal)
    'file revision file_id required' => 'Una revisioen deve essere collegata ad un file',
    'file revision filename required' => 'Specificare il nome del file',
    'file revision type_string required' => 'Tipo di file sconosciuto',
    
    // Test mail settings
    'test mail recipient required' => 'Specificare l\'indirizzo del destinatario',
    'test mail recipient invalid format' => 'L\'indirizzo del destinatario non ha un formato corretto',
    'test mail message required' => 'Specificare il testo della email',
    
    // Mass mailer
    'massmailer subject required' => 'Specificareil subject della email',
    'massmailer message required' => 'Specificare il corpo del messaggio',
    'massmailer select recepients' => 'Perfavore seleziona gli utenti che ricevereanno questo messaggio',
    
  ); // array

?>