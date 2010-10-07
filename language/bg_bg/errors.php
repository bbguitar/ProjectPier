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
    'invalid email address' => 'Невалиден e-mail адрес',

    // Company validation errors
    'company name required' => 'Моля, посочете наименованието на организацията',
    'company homepage invalid' => 'Невалиден URL адрес на web сайт',

    // User validation errors
    'username value required' => 'Моля, посочете потребителско име',
    'username must be unique' => 'Избраното от вас потребителско име е вече заето',
    'email value is required' => 'Въвеждането на e-mail адрес е задължително',
    'email address must be unique' => 'Въведеният от вас e-mail адрес е вече използван',
    'company value required' => 'Потребителят задължително трябва да е свързан с някоя организация',
    'password value required' => 'Въвеждането на парола е задължително',
    'passwords dont match' => 'ВЪведената повторно парола не съвпада',
    'old password required' => 'Въвеждането на старата парола е задължително',
    'invalid old password' => 'Въведената стара парола е невалидна',

    // Avatar
    'invalid upload type' => 'Некоректен тип на файла. Разрешени са %s',
    'invalid upload dimensions' => 'Некоректен размер на изображението. Максимално допустим размер %sx%s пиксела',
    'invalid upload size' => 'Некоректен размер на файла на изображението. Максимално допустим размер %s',
    'invalid upload failed to move' => 'Копирането на качения файл не е осъществено',

    // Registration form
    'terms of services not accepted' => 'За да бъде създаден нов потребителски профил трябва да приемете условията за ползване',

    // Init company website
    'failed to load company website' => 'Web сайтът не може да бъде зареден. Организацията собственик не е открита',
    'failed to load project' => 'Зареждането на активния проект протече неуспешно',

    // Login form
    'username value missing' => 'Моля, въведете вашето потребителско име',
    'password value missing' => 'Моля, въведете вашата парола за достъп',
    'invalid login data' => 'Влизането е неуспешно. Моля, проверете данните, които въвеждате и опитайте отново',

    // Add project form
    'project name required' => 'Въвеждането на наименование е задължително',
    'project name unique' => 'Наименованието на проекта трябва да бъде уникално',

    // Add message form
    'message title required' => 'Въвеждането на заглавие е задължително',
    'message title unique' => 'Заглавието на съобщението трябва да бъде уникално',
    'message text required' => 'Въвеждането на текст на съобщението е задължително',

    // Add comment form
    'comment text required' => 'Въвеждането на текст на коментара е задължително',

    // Add milestone form
    'milestone name required' => 'Въвеждането на наименование на етапа е задължително',
    'milestone due date required' => 'Въвеждането на очаквана дата е задължително',

    // Add task list
    'task list name required' => 'Въвеждането на наименование на списъка със задачи е задължително',
    'task list name unique' => 'Наименованието на списъка със задачи трябва да е уникално в рамките на проекта',

    // Add task
    'task text required' => 'Въвеждането на текст на задачта е задължително',

    // Add project form
    'form name required' => 'Въвеждането на наименование на формата е задължително',
    'form name unique' => 'Наименованието на формата трябва да е уникално',
    'form success message required' => 'Въвеждането на текст за успешно изпращане на формата е задължително',
    'form action required' => 'Въвеждането на действие за формата е задължително',
    'project form select message' => 'Моля, изберете съобщение',
    'project form select task lists' => 'Моля, изберете списък със задачи',

    // Submit project form
    'form content required' => 'Моля, въведете съдържанието в текстовото поле',

    // Validate project folder
    'folder name required' => 'Въвеждането на име на папката е задължително',
    'folder name unique' => 'Името на папката трябва да е уникално в рамките на проекта',

    // Validate add / edit file form
    'folder id required' => 'Моля, изберете име на папката',
    'filename required' => 'Въвеждането на име на файла е задължително',

    // File revisions (internal)
    'file revision file_id required' => 'Версията трябва да бъде обвързана с конкретен файл',
    'file revision filename required' => 'Въвеждането на име на файла е задължително',
    'file revision type_string required' => 'Неизвестен тип файл',

    // Test mail settings
    'test mail recipient required' => 'Въвеждането на адрес на получателя е задължително',
    'test mail recipient invalid format' => 'Въведеният адрес е невалиден',
    'test mail message required' => 'Въвеждането на тестово съобщение е задължително',

    // Mass mailer
    'massmailer subject required' => 'Моля, въведете тема на съобщението',
    'massmailer message required' => 'Въвеждането на съдържание е задължително',
    'massmailer select recipients' => 'Моля, изберете потребителите, които да получат e-mail',

  ); // array

?>