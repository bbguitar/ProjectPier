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
    'invalid email address' => 'Formato de direccion de correo no valida',
   
    // Company validation errors
    'company name required' => 'Nombre de la Compañia  / Organizacion',
    'company homepage invalid' => 'La direccion de la pagina principal no es valida',
    
    // User validation errors
    'username value required' => 'Escriba un nombre de usuario',
    'username must be unique' => 'El nombre de usuario ya se encuentra registrado en el sistema. Seleccione otro por favor',
    'email value is required' => 'Escriba una direccion de correo',
    'email address must be unique' => 'La direccion de correo ya se encuentra registrada en el sistema. Seleccione otra por favor',
    'company value required' => 'El usuario debe ser parte de una compa&ntilde;ia / organizacion',
    'password value required' => 'Escriba una contrase&ntilde;a',
    'passwords dont match' => 'No coinciden contraseñas',
    'old password required' => 'Escriba la contrase&ntilde;a anterior',
    'invalid old password' => 'Contrase&ntilde;a anterior no valida',
    
    // Avatar
    'invalid upload type' => 'Tipo de archivo Invalido. Los tipos de archivo permitidos son: %s',
    'invalid upload dimensions' => 'Dimensiones de imagen invalidas. Maximo: %sx%s pixeles',
    'invalid upload size' => 'Tamaño de imagen invalido. Maximo: %s',
    'invalid upload failed to move' => 'Error al mover imagen',
    
    // Registration form
    'terms of services not accepted' => 'Antes de crear una cuenta, por favor lea y acepte los terminos de servicios',
    
    // Init company website
    'failed to load company website' => 'Error al leer sitio. Compañia / Organizacion no encontrada',
    'failed to load project' => 'Error al leer proyecto activo',
    
    // Login form
    'username value missing' => 'Por favor escriba su nombre de usuario',
    'password value missing' => 'Por favor escriba su contrase&ntilde;a',
    'invalid login data' => 'Error al ingresar al sistema, Favor de verificar la informacion. Intente de nuevo',
    
    // Add project form
    'project name required' => 'Escriba el nombre del proyecto',
    'project name unique' => 'El nombre del proyecto debe ser unico',
    
    // Add message form
    'message title required' => 'Escriba un titulo para mensaje',
    'message title unique' => 'El titulo debe ser unico en este proyecto',
    'message text required' => 'Escriba algun texto para el mensaje',
    
    // Add comment form
    'comment text required' => 'Escriba el comentario',
    
    // Add milestone form
    'milestone name required' => 'Escriba el nombre del Evento',
    'milestone due date required' => 'Escriba fecha de termino del evento',
    
    // Add task list
    'task list name required' => 'Escriba el nombre de Lista de tareas',
    'task list name unique' => 'El nombre de la lista debe ser unico para este proyecto',
    
    // Add task
    'task text required' => 'Escriba el texto para la tarea',
    
    // Add project form
    'form name required' => 'Escriba el nombre del Formulario',
    'form name unique' => 'El nombre del formulario debe ser unico',
    'form success message required' => 'Escriba el mensaje de terminacion',
    'form action required' => 'Escriba la actividad del formulario',
    'project form select message' => 'Por favor seleccione un mensaje',
    'project form select task lists' => 'Por favor seleccione una lista de tareas',
    
    // Submit project form
    'form content required' => 'Por favor escriba algun contenido dentro del campo de texto',
    
    // Validate project folder
    'folder name required' => 'Escriba el nombre de la carpeta',
    'folder name unique' => 'El nombre de la carpeta debe ser unico para este proyecto',
    
    // Validate add / edit file form
    'folder id required' => 'Por favor seleccione una carpeta',
    'filename required' => 'Escriba el nombre del archivo',
    
    // File revisions (internal)
    'file revision file_id required' => 'La revision debe ser relacionada con un archivo',
    'file revision filename required' => 'Escriba el nombre del archivo',
    'file revision type_string required' => 'Tipo de archivo desconocido',
    
    // Test mail settings
    'test mail recipient required' => 'Escriba la direccion del destinatario',
    'test mail recipient invalid format' => 'Formato de direccion del destinatario invalida',
    'test mail message required' => 'Escriba algun texto que llevara el correo',
    
    // Mass mailer
    'massmailer subject required' => 'Escriba el asunto del mensaje',
    'massmailer message required' => 'Escriba el texto del mensaje a enviar',
    'massmailer select recepients' => 'Por favor seleccione los usuarios que recibiran este mensaje',
    
  ); // array

?>
