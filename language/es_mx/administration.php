<?php

  return array(
  
    // ---------------------------------------------------
    //  Administration tools
    // ---------------------------------------------------
    
    'administration tool name test_mail_settings' => 'Probar configuracion de correo',
    'administration tool desc test_mail_settings' => 'Usar esta sencilla herramienta para enviar mensajes de prueba y checar si es correcta la configuracion del sistema',
    'administration tool name mass_mailer' => 'Correo Masivo',
    'administration tool desc mass_mailer' => 'Sencilla herramienta que permite enviar mensajes de texto plano a cualquier grupo de usuarios registrados dentro del sistema',
  
    // ---------------------------------------------------
    //  Configuration categories and options
    // ---------------------------------------------------
  
    'configuration' => 'Configuracion',
    
    'mail transport mail()' => 'Configuracion PHP Predeterminada',
    'mail transport smtp' => 'Servidor SMTP',
    
    'secure smtp connection no'  => 'No',
    'secure smtp connection ssl' => 'Si, usar SSL',
    'secure smtp connection tls' => 'Si, usar TLS',
    
    'file storage file system' => 'Sistema de Archivos',
    'file storage mysql' => 'Base de Datos (MySQL)',
    
    // Categories
    'config category name general' => 'General',
    'config category desc general' => 'Configuracion General',
    'config category name mailing' => 'Envio de Correo',
    'config category desc mailing' => 'Usar estas opciones para configurar como se debe enviar el correo. Se pueden usar las opciones asignadas en el php.ini del servidor o usar algun otro Servidor SMTP',
    
    // ---------------------------------------------------
    //  Options
    // ---------------------------------------------------
    
    // General
    'config option name site_name' => 'Nombre del Sitio',
    'config option desc site_name' => 'Este valor sera desplegado como el nombre del sitio en la pagina principal',
    'config option name file_storage_adapter' => 'Almacenamiento de archivos',
    'config option desc file_storage_adapter' => 'Seleccione la ruta donde se almacenaran archivos, imagenes, logos y algun otro documento adjunto. <strong>Se recomienda usar el amacenamiento por Base de Datos</strong>.',
    'config option name default_project_folders' => 'Carpetas Predeterminadas',
    'config option desc default_project_folders' => 'Las carpetas podran ser creadas cuando el proyecto se este creando. Cada nombre de carpeta debera estar en una nueva linea. Lineas vacias o duplicadas seran ignoradas',
    'config option name theme' => 'Tema',
    'config option desc theme' => 'Con los temas se puede cambiar el aspecto visual predeterminado de la aplicacion',
    
    // ProjectPier
    'config option name upgrade_check_enabled' => 'Habilitar verificacion de actualizacion',
    'config option desc upgrade_check_enabled' => 'Si habilita la opcion, el sistema comprobara diariamente si existen nuevas versiones de ProjectPier disponibles para descargar',
    
    // Mailing
    'config option name exchange_compatible' => 'Modo de compatibilidad para Microsoft Exchange',
    'config option desc exchange_compatible' => 'Si esta usando un Servidor Microsoft Exchange, habilite esta opcion para resolver algunos problemas de envio.',
    'config option name mail_transport' => 'Medio de envio de correo',
    'config option desc mail_transport' => 'Se pueden usar las opciones de PHP predeterminadas o especificar un Servidor SMTP',
    'config option name smtp_server' => 'Servidor SMTP',
    'config option name smtp_port' => 'Puerto SMTP',
    'config option name smtp_authenticate' => 'Usar autenticacion SMTP',
    'config option name smtp_username' => 'Nombre de Usuario SMTP',
    'config option name smtp_password' => 'Contrase&ntilde;a SMTP',
    'config option name smtp_secure_connection' => 'Usar conexion segura',
    
  ); // array

?>
