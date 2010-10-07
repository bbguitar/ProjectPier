<?php

  // Return langs
  
  return array(
  
    // General
    'invalid email address' => 'Formát emailové adresy není platný',
   
    // Company validation errors
    'company name required' => 'Jméno Společnosti / organizace je povinné',
    'company homepage invalid' => 'Domácí stránka nemá platné URL (musí začínat http://)',
    
    // User validation errors
    'username value required' => 'Musíte zadat jméno',
    'username must be unique' => 'Promiňte, ale vybrané jméno už někdo používá',
    'email value is required' => 'Musíte zadat emailovou adresu',
    'email address must be unique' => 'Promiňte, vybranou emailovou adresu už někdo používá',
    'company value required' => 'Uživatel musí být člen společnosti / organizace',
    'password value required' => 'Musíte zadat heslo',
    'passwords dont match' => 'Heslo nesouhlasí',
    'old password required' => 'Musíte zadat staré heslo',
    'invalid old password' => 'Staré heslo není platné',
    
    // Avatar
    'invalid upload type' => 'Neplatný formát souboru. Povolené typy souborů jsou: %s',
    'invalid upload dimensions' => 'Neplatné rozměry obrázku. Maximální velikost je %sx%s pixelů',
    'invalid upload size' => 'Neplatná velikost obrázku. Maximílní velikost je %s',
    'invalid upload failed to move' => 'Selhal, přesun nahraného obrázku',
    
    // Registration form
    'terms of services not accepted' => 'In order to create an account you need to read and accept our terms of services',
    
    // Init company website
    'failed to load company website' => 'Selhalo nahrání webové stránky. Společnost majitele nebyla nalezena',
    'failed to load project' => 'Selhalo nahrání aktivního projektu',
    
    // Login form
    'username value missing' => 'Prosím vložte své jméno',
    'password value missing' => 'Prosím vložte své heslo',
    'invalid login data' => 'Selhalo přihlášení. Prosím zkontrolujte vaše přihlašovací údaje a zkuste to znovu',
    
    // Add project form
    'project name required' => 'Musíte zadat jméno projektu',
    'project name unique' => 'Jméno projektu musí být unikátní',
    
    // Add message form
    'message title required' => 'Musíte zadat titul',
    'message title unique' => 'Titul musí být unikátní v tomto projektu.',
    'message text required' => 'Musíte zadat text',
    
    // Add comment form
    'comment text required' => 'Musíte zadat text komentáře',
    
    // Add milestone form
    'milestone name required' => 'Musíte zadat název milníku',
    'milestone due date required' => 'Musíte zadat konečné datum milníku.',
    
    // Add task list
    'task list name required' => 'Musíte zadat jméno listu úkolů',
    'task list name unique' => 'Jméno listu úkolů musí být unikátní v projektu',
    
    // Add task
    'task text required' => 'Musíte zadat text úkolu',
    
    // Add project form
    'form name required' => 'Musíte zadat jméno formuláře',
    'form name unique' => 'Jméno formuláře musí být unikátní',
    'form success message required' => 'Musíte zadat úspěšnou zprávu',
    'form action required' => 'Musíte zadat akci',
    'project form select message' => 'Prosím zvolte zprávu',
    'project form select task lists' => 'Prosím zvolte list úkolů',
    
    // Submit project form
    'form content required' => 'Prosím vložte obsah do textového políčka',
    
    // Validate project folder
    'folder name required' => 'Musíte vložit název adresáře',
    'folder name unique' => 'Název adresáře musí být unikátní v tomto projektu',
    
    // Validate add / edit file form
    'folder id required' => 'Prosím zvolte adresář',
    'filename required' => 'Musíte zadat jméno souboru',
    
    // File revisions (internal)
    'file revision file_id required' => 'Revize musí být propojena se souborem',
    'file revision filename required' => 'Povinné jméno souboru',
    'file revision type_string required' => 'Neznámý typ souboru',
    
    // Test mail settings
    'test mail recipient required' => 'Musíte zadat adresu příjemce',
    'test mail recipient invalid format' => 'Špatný formát adresy příjemce',
    'test mail message required' => 'Musíte zadat emailovou zprávu',
    
    // Mass mailer
    'massmailer subject required' => 'Musíte zadat předmět zprávy',
    'massmailer message required' => 'Musíte zadat obsah zprávy',
    'massmailer select recepients' => 'Prosím zvolte uživatele, kteří obdrží tento email',
    
  ); // array

?>
