<?php

  return array(
  
    // ---------------------------------------------------
    //  Administration tools
    // ---------------------------------------------------
    
    'administration tool name test_mail_settings' => 'Configuraciones mail de prueba',
    'administration tool desc test_mail_settings' => 'Use esta simple herramienta para enviar mails de prueba para verificar si el correo de activeCollab está bien configurado',
    'administration tool name mass_mailer' => 'Correo masivo',
    'administration tool desc mass_mailer' => 'Simple herramienta que le permite enviar mensajes de texto plano a cualquier grupo de usuarios registrados en el sistema',
  
    // ---------------------------------------------------
    //  Configuration categories and options
    // ---------------------------------------------------
  
    'configuration' => 'Configuración',
    
    'mail transport mail()' => 'Configuración PHP por defecto',
    'mail transport smtp' => 'servidor SMTP',
    
    'secure smtp connection no'  => 'No',
    'secure smtp connection ssl' => 'Sí, usa SSL',
    'secure smtp connection tls' => 'Sí, usa TLS',
    
    'file storage file system' => 'File system',
    'file storage mysql' => 'Database (MySQL)',
    
    // Categories
    'config category name general' => 'General',
    'config category desc general' => 'Configuraciones generales activeCollab',
    'config category name mailing' => 'Mailing',
    'config category desc mailing' => 'Use estas configuraciones para establecer como activeCollab debe manejar en envío de mail. Puede utilizar las opciones de configuración de su archivo php.ini o configurarlo para usar otro servidor SMTP',
    
    // ---------------------------------------------------
    //  Options
    // ---------------------------------------------------
    
    // General
    'config option name site_name' => 'Nombre del sitio',
    'config option desc site_name' => 'Este valor será mostrado como el nombre del sitio en la página del Panel',
    'config option name file_storage_adapter' => 'Almacenamiento de archivos',
    'config option desc file_storage_adapter' => 'Seleccione dónde quiere almacenar los adjuntos, avatares, logos y cualquier tro documento subido. <strong>Un motor de base de datos es recomendado</strong>.',
    'config option name default_project_folders' => 'Carpetas por defecto',
    'config option desc default_project_folders' => 'Carpetas que serán creadas cuando es creado el proyecto. Cada carpeta debe ingresarse en una nueva línea. Líneas duplicadas o vacías serán ignoradas',
    'config option name theme' => 'Tema',
    'config option desc theme' => 'Utilizando temas puede cambiar el look&feel de activeCollab',
    
    // activeCollab.com
    'config option name upgrade_check_enabled' => 'Activar el chequeo de actualizaciones',
    'config option desc upgrade_check_enabled' => 'Si se indica Sí, el sistema chequeará un avez por día si hay nuevas versiones de activeCollab para descargar',
    
    // Mailing
    'config option name exchange_compatible' => 'Modo de compatibilidad con Microsoft Exchange',
    'config option desc exchange_compatible' => 'Si utiliza Microsoft Exchange Server establezca esta opción en Sí para evitar algunos problemas de mailing conocidos.',
    'config option name mail_transport' => 'Transporte de mail',
    'config option desc mail_transport' => 'Puede utilizar las configuraciones PHP por defecto para enviar emails o especificar un servidor SMTP',
    'config option name smtp_server' => 'servidor SMTP',
    'config option name smtp_port' => 'puerto SMTP',
    'config option name smtp_authenticate' => 'Usar autenticación SMTP',
    'config option name smtp_username' => 'usuario SMTP',
    'config option name smtp_password' => 'password SMTP',
    'config option name smtp_secure_connection' => 'Use conexión SMTP segura',
    
  ); // array

?>