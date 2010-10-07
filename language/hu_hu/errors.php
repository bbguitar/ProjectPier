<?php

  // Return langs
  
  return array(
  
    // General
    'invalid email address' => 'Az email cím formátuma nem érvényes',
   
    // Company validation errors
    'company name required' => 'A cég / szervezet nevének a megadása kötelező',
    'company homepage invalid' => 'A honlap értéke nem érvényes URL',
    
    // User validation errors
    'username value required' => 'A felhasználónév mező kitöltése kötelező',
    'username must be unique' => 'Sajnos a választott felhasználónév már foglalt',
    'email value is required' => 'Az email cím mező kitöltése kötelező',
    'email address must be unique' => 'Sajnos a megadott email cím már foglalt',
    'company value required' => 'A felhasználónak cég / szervezet tagjának kell lennie',
    'password value required' => 'A jelszó megadása kötelező',
    'passwords dont match' => 'A jelszavak nem egyeznek',
    'old password required' => 'A régi jelszó értékének a megadása kötelező',
    'invalid old password' => 'A régi jelszó nem érvényes',
    
    // Avatar
    'invalid upload type' => 'Érvénytelen a fájltípus. Az engedélyezett típusok a következők: %s',
    'invalid upload dimensions' => 'Érvénytelen a kép mérete. A legnagyobb méret a(z) %sx%s képpont',
    'invalid upload size' => 'Érvénytelen a kép fájlmérete. A legnagyobb méret a(z) %s',
    'invalid upload failed to move' => 'A feltöltött fájlt nem sikerült áthelyezni',
    
    // Registration form
    'terms of services not accepted' => 'A fiók létrehozásához el kell olvasnia, és el kell fogadnia a szolgáltatási feltételeinket',
    
    // Init company website
    'failed to load company website' => 'A weblap betöltése nem sikerült. A tulajdonos cég nem található',
    'failed to load project' => 'Az aktív projekt betöltése nem sikerült',
    
    // Login form
    'username value missing' => 'Kérjük, hogy írja be a felhasználónevét',
    'password value missing' => 'Kérjük, hogy írja be a jelszavát',
    'invalid login data' => 'Az Ön bejelentkezése sikertelen. Kérjük, hogy ellenőrizze a bejelentkezési adatait, és próbálja újra',
    
    // Add project form
    'project name required' => 'A projekt nevének a megadása kötelező',
    'project name unique' => 'Legyen egyedi a projekt neve',
    
    // Add message form
    'message title required' => 'A cím mező kitöltése kötelező',
    'message title unique' => 'Legyen egyedi a cím ebben a projektben',
    'message text required' => 'A szöveg mező kitöltése kötelező',
    
    // Add comment form
    'comment text required' => 'A hozzászólás szövegének a beírása kötelező',
    
    // Add milestone form
    'milestone name required' => 'A mérföldkő nevének a megadása kötelező',
    'milestone due date required' => 'A mérföldkő esedékességi dátumának a megadása kötelező',
    
    // Add task list
    'task list name required' => 'A feladatlista nevének a megadása kötelező',
    'task list name unique' => 'Legyen egyedi a feladatlista neve a projektben',
    
    // Add task
    'task text required' => 'A feladat szövegének kitöltése kötelező',
    
    // Add project form
    'form name required' => 'Az űrlapnév megadása kötelező',
    'form name unique' => 'Legyen egyedi az űrlapnév',
    'form success message required' => 'A siker üzenet megadása kötelező',
    'form action required' => 'Az űrlapműveletek megadása kötelező',
    'project form select message' => 'Kérjük, hogy válassza ki az üzenetet',
    'project form select task lists' => 'Kérjük, hogy válassza ki a feladatlistát',
    
    // Submit project form
    'form content required' => 'Kérjük, hogy szúrja be a tartalmat a szöveg mezőbe',
    
    // Validate project folder
    'folder name required' => 'A mappanév megadása kötelező',
    'folder name unique' => 'Legyen egyedi a mappanév ebben a projektben',
    
    // Validate add / edit file form
    'folder id required' => 'Kérjük, hogy válassza ki a mappát',
    'filename required' => 'A fájlnév megadása kötelező',
    
    // File revisions (internal)
    'file revision file_id required' => 'A javítást össze kell kapcsolni a fájllal',
    'file revision filename required' => 'A fájlnév megadása kötelező',
    'file revision type_string required' => 'A fájltípus ismeretlen',
    
    // Test mail settings
    'test mail recipient required' => 'A címzett címének a kitöltése kötelező',
    'test mail recipient invalid format' => 'Érvénytelen a címzett címének a formátuma',
    'test mail message required' => 'A levél szövegének a kitöltése kötelező',
    
    // Mass mailer
    'massmailer subject required' => 'Az üzenet tárgyának a kitöltése kötelező',
    'massmailer message required' => 'Az üzenet szövegének a kitöltése kötelező',
    'massmailer select recepients' => 'Kérjük, hogy válassza ki azokat a felhasználókat, akik ezt az emailt fogják kapni',
    
  ); // array

?>
