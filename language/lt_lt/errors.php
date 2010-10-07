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
//    'invalid email address' => 'Email address format is not valid',
    'invalid email address' => 'El. pasto addreso formatas netinkamas',
   
    // Company validation errors
//    'company name required' => 'Company / organization name is required',
    'company name required' => 'Reikalingas imones/organizacijos pavadinimas',
//    'company homepage invalid' => 'Homepage value is not a valid URL',
    'company homepage invalid' => 'Tinklapis neteisingas',
    
    // User validation errors
//    'username value required' => 'Username value is required',
    'username value required' => 'reikalingas vartotojo vardas',
//    'username must be unique' => 'Sorry, but selected username is already taken',
    'username must be unique' => 'Toks vardas jau yra',
//    'email value is required' => 'Email address value is required',
    'email value is required' => 'reikalingas el.pasto adresas',
//    'email address must be unique' => 'Sorry, selected email address is already taken',
    'email address must be unique' => 'Toks el.pasto adresas jau yra',
//    'company value required' => 'User must be part of company / organization',
    'company value required' => 'Vartotojas turi priklausyti imonei/organizacijai',
//    'password value required' => 'Password value is required',
    'password value required' => 'Reikalingas slaptazodis',
//    'passwords dont match' => 'Passwords don\'t match',
    'passwords dont match' => 'Slaptazodziai nesutampa',
//    'old password required' => 'Old password value is required',
    'old password required' => 'Reikalingas senas slaptazodis',
//    'invalid old password' => 'Old password is not valid',
    'invalid old password' => 'Netoks senas slaptazodis',
    
    // Avatar
//    'invalid upload type' => 'Invalid file type. Allowed types are %s',
    'invalid upload type' => 'Netinkamas bylos tipas. Turi buti %s',
//    'invalid upload dimensions' => 'Invalid image dimensions. Max size is %sx%s pixels',
    'invalid upload dimensions' => 'Nnetinkami matmenys. Maksimalus dydis %sx%s tasku',
//    'invalid upload size' => 'Invalid image size. Max size is %s',
    'invalid upload size' => 'Per didele byla. Maksimalus dydis %s',
//    'invalid upload failed to move' => 'Failed to move uplaoded file',
    'invalid upload failed to move' => 'Nepavyko padeti pasiustos bylos',
    
    // Registration form
//    'terms of services not accepted' => 'In order to create an account you need to read and accept our terms of services',
    'terms of services not accepted' => 'Kriant vartotoja reikia perskaityti ir sutikti su aptarnavimo salygomis',
    
    // Init company website
//    'failed to load company website' => 'Failed to load website. Owner company not found',
    'failed to load company website' => 'Nepavyko uzkrauti tinklalapio. Nerasta pagrindine imone',
//    'failed to load project' => 'Failed to load active project',
    'failed to load project' => 'Nepavyko paleisti aktyvaus projekto',
    
    // Login form
    'username value missing' => 'Prasau ivesti varda',
    'password value missing' => 'Prasau ivesti slaptazodi',
//    'invalid login data' => 'Failed to log you in. Please check your login data and try again',
    'invalid login data' => 'Nepavyko prisijungti. Patikrinkit savo duomenis ir kartokit',
    
    // Add project form
//    'project name required' => 'Project name value is required',
    'project name required' => 'Reikalingas projekto vardas',
//    'project name unique' => 'Project name must be unique',
    'project name unique' => 'Projecto vardas turi buti unikalus',
    
    // Add message form
//    'message title required' => 'Title value is required',
    'message title required' => 'Reikalingas pavadinimas',
//    'message title unique' => 'Title value must be unique in this project',
    'message title unique' => 'Pavadinimas turi buti unikalus',
//    'message text required' => 'Text value is required',
    'message text required' => 'Reikalingas tekstas',
    
    // Add comment form
//    'comment text required' => 'Text of the comment is required',
    'comment text required' => 'Reikalingas komentaro tekstas',
    
    // Add milestone form
//    'milestone name required' => 'Milestone name value is required',
    'milestone name required' => 'Reikalingas etapo vardas',
//    'milestone due date required' => 'Milestone due date value is required',
    'milestone due date required' => 'Reikalinga etapo ivykdymo data',
    
    // Add task list
//    'task list name required' => 'Task list name value is required',
    'task list name required' => 'Reikalingas uzduociu sarasas',
//    'task list name unique' => 'Task list name must be unique in project',
    'task list name unique' => 'Uzduociu saraso vardas turi buti unikalus',
    
    // Add task
//    'task text required' => 'Task text is required',
    'task text required' => 'Reikalingas uzduoties tekstas',
    
    // Add project form
//    'form name required' => 'Form name is required',
    'form name required' => 'Reikalingas formos vardas',
//    'form name unique' => 'Form name must be unique',
    'form name unique' => 'Formos vardas turi buti unikalus',
//    'form success message required' => 'Success message is required',
    'form success message required' => 'Reikalinga sekminga zinute',
//    'form action required' => 'Form action is required',
    'form action required' => 'Reikalingas formos veiksmas',
//    'project form select message' => 'Please select message',
    'project form select message' => 'Parinkit zinute',
//    'project form select task lists' => 'Please select task list',
    'project form select task lists' => 'Parinkite uzduociu sarasa',
    
    // Submit project form
//    'form content required' => 'Please insert content into text field',
    'form content required' => 'Irasykite turini i teksto lauka',
    
    // Validate project folder
//    'folder name required' => 'Folder name is required',
    'folder name required' => 'Reikalingas aplanko vardas',
//    'folder name unique' => 'Folder name need to be unique in this project',
    'folder name unique' => 'Aplanko vardas turi buti unikalus',
    
    // Validate add / edit file form
//    'folder id required' => 'Please select folder',
    'folder id required' => 'Parinkite aplanka',
//    'filename required' => 'Filename is required',
    'filename required' => 'Reikalingas bylos vardas',
    
    // File revisions (internal)
//    'file revision file_id required' => 'Revision needs to be connected with a file',
    'file revision file_id required' => 'Versija turi buti susieta su byla',
//    'file revision filename required' => 'Filename required',
    'file revision filename required' => 'Reikalingas bylos vardas',
//    'file revision type_string required' => 'Unknown file type',
    'file revision type_string required' => 'Nezinomo tipo byla',
    
    // Test mail settings
//    'test mail recipient required' => 'Recipient address is required',
    'test mail recipient required' => 'Reikalingas el.pasto adresas',
//    'test mail recipient invalid format' => 'Invalid recipient address format',
    'test mail recipient invalid format' => 'Neteisingas adresas',
//    'test mail message required' => 'Mail message is required',
    'test mail message required' => 'Reikalinga zinute',
    
    // Mass mailer
    'massmailer subject required' => 'Message subject is required',
//    'massmailer message required' => 'Message body is required',
    'massmailer message required' => 'Reikalingas zinutes tekstas',
//    'massmailer select recepients' => 'Please select users that will receive this email',
    'massmailer select recepients' => 'Prinkit vartotojus kurie gaus si laiska',
    
  ); // array

?>
