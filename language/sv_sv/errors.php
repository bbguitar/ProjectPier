<?php

  // Return langs
  
  return array(
  
    // General
    'invalid email address' => 'Epostadressen har ett ogiltigt format',
   
    // Company validation errors
    'company name required' => 'Ett företags- eller organisationsnamn krävs',
    'company homepage invalid' => 'Länken till hemsidan är inte giltig',
    
    // User validation errors
    'username value required' => 'Du måste ange ett användarnamn',
    'username must be unique' => 'Tyvärr, det önskade användarnamnet är upptaget',
    'email value is required' => 'Du måste ange en epostadress',
    'email address must be unique' => 'Den angivna epostadressen finns redan',
    'company value required' => 'Användaren måste höra till ett företag eller en organisation',
    'password value required' => 'Du måste ange ett lösenord',
    'passwords dont match' => 'Lösenorden matchar inte',
    'old password required' => 'Du måste ange det gamla lösenordet',
    'invalid old password' => 'Det gamla lösenordet är inte korrekt',
    
    // Avatar
    'invalid upload type' => 'Otillåten filetyp. Tillåtna filtyper är %s',
    'invalid upload dimensions' => 'Felaktig bildstorlek. Max bildstorlek ör %sx%s pixlar',
    'invalid upload size' => 'Felaktig filstorlek. Max filstorlek är %s',
    'invalid upload failed to move' => 'Misslyckades att flytta den uppladdade filen',
    
    // Registration form
    'terms of services not accepted' => 'För att skapa ett konto måste du läsa och godkänna våra användarvillkor',
    
    // Init company website
    'failed to load company website' => 'Misslyckades att visa websidan. Ägarföretaget kan inte hittas',
    'failed to load project' => 'Misslyckades att visa det aktiva projektet',
    
    // Login form
    'username value missing' => 'Var vänlig ange ditt användarnamn',
    'password value missing' => 'Var vänlig ange ditt lösenord',
    'invalid login data' => 'Misslyckades att logga in dig. Var vänlig kontrollera inloggningsuppgifterna och försök igen',
    
    // Add project form
    'project name required' => 'Du måste ange ett projektnamn',
    'project name unique' => 'Det projektnamnet är upptaget',
    
    // Add message form
    'message title required' => 'Du måste ange en rubrik på ditt meddelande',
    'message title unique' => 'Den rubriken finns redan. Välj en annan',
    'message text required' => 'Du måste skriva en meddelandetext',
    
    // Add comment form
    'comment text required' => 'Du måste skriva en text i kommentarfältet',
    
    // Add milestone form
    'milestone name required' => 'Du måste ange en rubrik på milstolpen',
    'milestone due date required' => 'Du måste ange ett slutdatum för milstolpen',
    
    // Add task list
    'task list name required' => 'Du måste ge att-göra-listan ett namn',
    'task list name unique' => 'Att-göra-listans namn är upptaget i det här projektet. Välj ett annat',
    
    // Add task
    'task text required' => 'Du måste ange en text till arbetsuppgiften',
    
    // Add project form
    'form name required' => 'Du måste ange ett namn på mallen',
    'form name unique' => 'Mallens namn är upptaget. Välj ett annat',
    'form success message required' => 'Du måste ange ett meddelande som visas när mallen utförde sin uppgift',
    'form action required' => 'Du måste ange en händelse för mallen',
    'project form select message' => 'Välj meddelande',
    'project form select task lists' => 'Välj att-göra-lista',
    
    // Submit project form
    'form content required' => 'Var vänlig ange innehåll i textfältet',
    
    // Validate project folder
    'folder name required' => 'Du måste ange ett namn på mappen',
    'folder name unique' => 'Mappens namn är upptaget i det här projektet. Välj ett annat',
    
    // Validate add / edit file form
    'folder id required' => 'Välj mapp',
    'filename required' => 'Du måste ange ett namn på filen',
    
    // File revisions (internal)
    'file revision file_id required' => 'Utgåvan måste kopplas ihop med en fil',
    'file revision filename required' => 'Du måste ange ett namn på filen',
    'file revision type_string required' => 'Okänd filtyp',
    
    // Test mail settings
    'test mail recipient required' => 'Du måste ange en mottagaradress',
    'test mail recipient invalid format' => 'Mottagaradressen är ogiltig',
    'test mail message required' => 'Du måste skriva en meddelandetext',
    
    // Mass mailer
    'massmailer subject required' => 'Du måste ange ett ärende till meddelandet',
    'massmailer message required' => 'Du måste skriva en meddelandetext',
    'massmailer select recepients' => 'Välj vilka deltagare som ska få meddelandet',
    
  ); // array

?>
