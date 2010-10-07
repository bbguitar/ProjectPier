<?php

  /**
  * Array of messages file (error, success message, status...)
  *
  * @version 1.0
  * @http://www.projectpier.org/
  */

  return array(
  
    // Empty, dnx etc
    'project dnx' => 'El proyecto solicitado no existe en la base de datos',
    'message dnx' => 'El mensaje solicitado no existe',
    'no comments in message' => 'Mensaje sin comentarios',
    'no comments associated with object' => 'Para este objeto no hay comentarios publicados',
    'no messages in project' => 'Proyecto sin mensajes',
    'no subscribers' => 'No hay usuarios inscritos a este mensaje',
    'no activities in project' => 'Proyecto sin actividades',
    'comment dnx' => 'El comentario solicitado no existe',
    'milestone dnx' => 'La actividad solicitada no existe',
    'task list dnx' => 'La lista de tareas no existe',
    'task dnx' => 'La tarea no existe',
    'no milestones in project' => 'Proyecto sin eventos',
    'no active milestones in project' => 'Proyecto sin eventos activos',
    'empty milestone' => 'El evento esta vacio. Puede agregar un <a href="%s">Mensaje</a> o una <a href="%s">Lista de tareas</a> cuando lo desee',
    'no logs for project' => 'Proyecto sin registro de entradas',
    'no recent activities' => 'No existen actividades recientes registradas en la base de datos',
    'no open task lists in project' => 'No existe lista de tareas en este proyecto',
    'no completed task lists in project' => 'No existen listas de tareas completas en este proyecto',
    'no open task in task list' => 'No hay tareas en esta lista',
    'no projects in db' => 'No se han definido proyectos en la base de datos',
    'no projects owned by company' => 'No existen proyectos propios de esta compa&ntilde;ia',
    'no projects started' => 'No se han iniciado proyectos',
    'no active projects in db' => 'No existen proyectos activos',
    'no new objects in project since last visit' => 'No hay nuevos objetos en este proyecto desde su ultima visita',
    'no clients in company' => 'Su compa&ntilde;ia no tiene ningun cliente registrado',
    'no users in company' => 'No hay usuarios en esta compa&ntilde;ia',
    'client dnx' => 'El cliente seleccionado no existe',
    'company dnx' => 'La compa&ntilde;ia seleccionada no existe',
    'user dnx' => 'El usuario solicitado no existe en la base de datos',
    'avatar dnx' => 'No existe imagen del usuario',
    'no current avatar' => 'No se ha cargado imagen del usuario',
    'no current logo' => 'No se ha cargado logo',
    'user not on project' => 'El usuario seleccionado no se encuentra involucrado en el proyecto seleccionado',
    'company not on project' => 'La compa&ntilde;ia seleccionada no se encuentra involucrada en el proyecto seleccionado',
    'user cant be removed from project' => 'El usuario seleccionado no puede ser eliminado del proyecto',
    'tag dnx' => 'La etiqueta solicitada no existe',
    'no tags used on projects' => 'No se han usado etiquetas en este proyecto',
    'no forms in project' => 'No existen formularios en este proyecto',
    'project form dnx' => 'El formulario solicitado para este proyecto no existe en la base de datos',
    'related project form object dnx' => 'El objeto de formulario no existe en la base de datos',
    'no my tasks' => 'No hay tareas asignadas a usted',
    'no search result for' => 'No existen objetos que coincidan con "<strong>%s</strong>"',
    'no files on the page' => 'No hay archivos en esta pagina',
    'folder dnx' => 'La carpeta que se ha solicitado no existe en la base de datos',
    'define project folders' => 'El proyecto no tiene carpetas. Por favor defina las carpetas para continuar',
    'file dnx' => 'El archivo solicitado no existe en la base de datos',
    'file revision dnx' => 'La revision solicitada no existe en la base de datos',
    'no file revisions in file' => 'Archivo Invalido - No hay revisiones asociadas con este archivo',
    'cant delete only revision' => 'No puede borrar esta revision. Cada archivo requiere de al menos una revision publicada',
    'config category dnx' => 'La categoria de configuracion solicitada no existe',
    'config category is empty' => 'La categoria de configuracion esta vacia',
    'email address not in use' => '%s no esta en uso',
    'no attached files' => 'No hay archivos vinculados a este objeto',
    'file not attached to object' => 'El archivo seleccionado no esta vinculado al objeto seleccionado',
    'no files to attach' => 'Por favor seleccione los archivos que requieren ser vinculados',
    'no administration tools' => 'No hay herramientas de administracion registradas en la base de datos',
    'administration tool dnx' => 'La herramienta de administracion "%s" no existe',
    'about to delete' => 'Esta a punto de borrar',
    
    // Success
    'success add project' => 'El proyecto %s ha sido creado satisfactoriamente',
    'success edit project' => 'El proyecto %s ha sido actualizado',
    'success delete project' => 'El proyecto %s ha sido borrado',
    'success complete project' => 'El proyecto %s ha sido completado',
    'success open project' => 'El proyecto %s ha sido reabierto',
    
    'success add milestone' => 'El evento \'%s\' ha sido creado satisfactoriamente',
    'success edit milestone' => 'El evento \'%s\' ha sido actualizado satisfactoriamente',
    'success deleted milestone' => 'El evento \'%s\' ha sido borrado satisfactoriamente',
    
    'success add message' => 'El mensaje %s ha sido creado satisfactoriamente',
    'success edit message' => 'El mensaje %s ha sido actualizado satisfactoriamente',
    'success deleted message' => 'El mensaje \'%s\' y todos sus comentarios han sido borrados satisfactoriamente',
    
    'success add comment' => 'El comentario ha sido publicado satisfactoriamente',
    'success edit comment' => 'El comentario ha sido actualizado satisfactoriamente',
    'success delete comment' => 'El comentario ha sido borrado satisfactoriamente',
    
    'success add task list' => 'La lista de tareas \'%s\' ha sido creada',
    'success edit task list' => 'La lista de tareas \'%s\' ha sido actualizada',
    'success delete task list' => 'La lista de tareas \'%s\' ha sido borrada',
    
    'success add task' => 'La tarea seleccionada ha sido creada',
    'success edit task' => 'La tarea seleccionada ha sido actualizada',
    'success delete task' => 'La tarea seleccionada ha sido borrada',
    'success complete task' => 'La tarea seleccionada ha sido completada',
    'success open task' => 'La tarea seleccionada ha sido reabierta',
    'success n tasks actualizada' => '%s tasks actualizada',
    
    'success add client' => 'El cliente %s ha sido creado',
    'success edit client' => 'El cliente %s ha sido actualizado',
    'success delete client' => 'El cliente %s ha sido borrado',
    
    'success edit company' => 'Los datos de la compa&ntilde;ia han sido actualizados',
    'success edit company logo' => 'El logo de la compa&ntilde;ia ha sido actualizado',
    'success delete company logo' => 'El logo de la compa&ntilde;ia ha sido borrado',
    
    'success add user' => 'El usuario %s ha sido agregado satisfactoriamente',
    'success edit user' => 'El usuario %s ha sido actualizado satisfactoriamente',
    'success delete user' => 'El usuario %s ha sido borrado satisfactoriamente',
    
    'success update project permissions' => 'Los permisos del proyecto han sido actualizados satisfactoriamente',
    'success remove user from project' => 'El usuario ha sido eliminado del proyecto',
    'success remove company from project' => 'La compa&ntilde;ia ha sido eliminada del proyecto satisfactoriamente',
    
    'success update profile' => 'Los datos personales han sido actualizados',
    'success edit avatar' => 'La imagen de usuario ha sido actualzada correctamente',
    'success delete avatar' => 'La imagen de usuario ha sido borrada correctamente',
    
    'success hide welcome info' => 'La informacion de bienvenida se ha ocultado satisfactoriamente',
    
    'success complete milestone' => 'El evento \'%s\' se ha completado',
    'success open milestone' => 'El evento \'%s\' ha sido reabierto',
    
    'success subscribe to message' => 'Se ha suscrito a este mensaje satisfactoriamente',
    'success unsubscribe to message' => 'Se ha eliminado la suscripcion a este mensaje satisfactoriamente',
    
    'success add project form' => 'El formulario \'%s\' ha sido creado',
    'success edit project form' => 'El formulario \'%s\' ha sido actualizado',
    'success delete project form' => 'El formulario \'%s\' ha sido borrado',
    
    'success add folder' => 'La carpeta \'%s\' ha sido creada',
    'success edit folder' => 'La carpeta \'%s\' ha sido actualizada',
    'success delete folder' => 'La carpeta \'%s\' ha sido borrada',
    
    'success add file' => 'El archivo \'%s\' se ha agregado',
    'success edit file' => 'El archivo \'%s\' ha sido actualizado',
    'success delete file' => 'El archivo \'%s\' ha sido borrado',
    
    'success edit file revision' => 'La revision ha sido actualizada',
    'success delete file revision' => 'El archivo de revision ha sido borrado',
    
    'success attach files' => '%s archivo(s) se han adjuntado satisfactoriamente',
    'success detach file' => 'El archivo(s) se ha desvinculado',
    
    'success update config category' => 'los datos de configuracion para %s se han actualizado',
    'success forgot password' => 'Se le ha enviado un correo con su contrase&ntilde;a. Favor de verificar.',
    
    'success test mail settings' => 'El correo de prueba se ha enviado satisfactoriamente',
    'success massmail' => 'El correo se ha enviado',
    
    'success update company permissions' => 'Los permisos de la compa&ntilde;ia se han actualizado correctamente. %s registros actualizados',
    'success user permissions actualizada' => 'Los permisos del usuario han sido actualizados',
    
    // Failures
    'error form validation' => 'Error al guardar objecto ya que algunas de sus propiedades no son validas',
    'error delete owner company' => 'La compa&ntilde;ia a la cual pertenece no puede ser borrada',
    'error delete message' => 'Error al borrar el mensaje seleccionado',
    'error update message options' => 'Error al actualizar las opciones del mensaje',
    'error delete comment' => 'Error al borrar el comentario seleccionado',
    'error delete milestone' => 'Error al borrar el evento seleccionado',
    'error complete task' => 'Error al completar la tarea seleccionada',
    'error open task' => 'Error al reabrir la tarea seleccionada',
    'error upload file' => 'Error al publicar archivo',
    'error delete project' => 'Error al borrar el proyecto seleccionado',
    'error complete project' => 'Error al completar el proyecto seleccionado',
    'error open project' => 'Error al reabrir el proyecto seleccionado',
    'error delete client' => 'Error al borrar el cliente seleccionado',
    'error delete user' => 'Error al borrar el usuario seleccionado',
    'error update project permissions' => 'Error al actualizar los permisos del proyecto',
    'error remove user from project' => 'Error al quitar usuario del proyecto',
    'error remove company from project' => 'Error al quitar compa&ntilde;ia del proyecto',
    'error edit avatar' => 'Error al editar imagen de usuario',
    'error delete avatar' => 'Error al borrar imagen de usuario',
    'error hide welcome info' => 'Error al ocultar la informacion de bienvenida',
    'error complete milestone' => 'Error al completar el evento seleccionado',
    'error open milestone' => 'Error al reabrir el evento seleccionado',
    'error file download' => 'Error al descargar el archivo especificado',
    'error attach file' => 'Error al adjuntar archivo',
    'error edit company logo' => 'Error al actualizar el logo',
    'error delete company logo' => 'Error al borrar el logo',
    'error subscribe to message' => 'Error al suscribirse al mensaje seleccionado',
    'error unsubscribe to message' => 'Error al eliminar la suscripcion del mensaje seleccionado',
    'error add project form' => 'Error al agregar el formulario del proyecto',
    'error submit project form' => 'Error al enviar el formulario del proyecto',
    'error delete folder' => 'Error al borrar la carpeta seleccionada',
    'error delete file' => 'Error al borrar el archivo seleccionado',
    'error delete file revision' => 'Error al borrar al revision del archivo',
    'error delete task list' => 'Error al borrar la lista de tareas seleccionada',
    'error delete task' => 'Error al borrar la tarea seleccionada',
    'error check for upgrade' => 'Error al verificar si existe una nueva version',
    'error attach file' => 'Error al adjuntar archivo(s)',
    'error detach file' => 'Error al desvincular archivo(s)',
    'error attach files max controls' => 'No puede adjuntar mas archivos. El Limite es %s',
    'error test mail settings' => 'Error al enviar correo de prueba',
    'error massmail' => 'Error al enviar correo',
    'error owner company has all permissions' => 'La compa&ntilde;ia tiene todos los permisos',
    
    // Access or data errors
    'no access permissions' => 'No tiene los permisos necesarios para ingresar a la pagina solicitada',
    'invalid request' => 'Solicitud Invalida!',
    
    // Confirmation
    'confirm delete message' => 'Esta seguro que desea borrar este mensaje?',
    'confirm delete milestone' => 'Esta seguro que desea borrar este evento?',
    'confirm delete task list' => 'Esta seguro que desea borrar estas listas incluyendo sus tareas?',
    'confirm delete task' => 'Esta seguro que desea borrar esta tarea?',
    'confirm delete comment' => 'Esta seguro que desea borrar este comentario?',
    'confirm delete project' => 'Esta seguro que desea borrar este proyecto y los datos relacionados a el (mensajes, tareas, eventos, archivos...)?',
    'confirm complete project' => 'Esta seguro que desea marcar este proyecto como terminado? Todas las acciones del proyecto seran bloqueadas',
    'confirm open project' => 'Esta seguro que desea marcar este proyecto como abierto? Esto desbloqueara todas las acciones del proyecto',
    'confirm delete client' => 'Esta seguro que desea borrar el cliente seleccionado y a todos sus miembros?',
    'confirm delete user' => 'Esta seguro que desea borrar esta cuenta de usuario?',
    'confirm reset people form' => 'Esta seguro que desea limpiar este formulario? Todas las modificaciones que haya hecho se perderan!',
    'confirm remove user from project' => 'Esta seguro que desea quitar a este usuario del proyecto?',
    'confirm remove company from project' => 'Esta seguro que desea quitar a esta compa&ntilde;ia del proyecto?',
    'confirm logout' => 'Esta seguro que desea salir?',
    'confirm delete current avatar' => 'Esta seguro que desea borrar esta imagen del usuario?',
    'confirm detach file' => 'Esta seguro que desea desvincular este archivo?',
    'confirm delete company logo' => 'Esta seguro que desea borrar este logo?',
    'confirm subscribe' => 'Esta seguro que desea suscribirse a este mensaje? Recibira un correo cada vez que alguien (excepto usted) publique un comentario en este mensaje?',
    'confirm unsubscribe' => 'Esta seguro que desea quitar su suscripcion?',
    'confirm delete project form' => 'Esta seguro que desea borrar este formulario?',
    'confirm delete folder' => 'Esta seguro que desea borrar esta carpeta?',
    'confirm delete file' => 'Esta seguro que desea borrar este archivo?',
    'confirm delete revision' => 'Esta seguro que desea borrar esta revision?',
    'confirm reset form' => 'Esta seguro que desea limpiar este formulario?',
    
    // Errors...
    'system error message' => 'Lo sentimos, un grave error ha sido prevenido por ProjectPier para ejecutar su solicitud. Un reporte de error ha sido enviado al administrador.',
    'execute action error message' => 'Lo sentimos, pero ProjectPier no se encuentra disponible para ejecutar su solicitud. Un reporte de error ha sido enviado al administrador.',
    
    // Log
    'log add projectmessages' => '\'%s\' agregado',
    'log edit projectmessages' => '\'%s\' actualizado',
    'log delete projectmessages' => '\'%s\' borrado',
    
    'log add comments' => '%s agregado',
    'log edit comments' => '%s actualizado',
    'log delete comments' => '%s borrado',
    
    'log add projectmilestones' => '\'%s\' agregado',
    'log edit projectmilestones' => '\'%s\' actualizado',
    'log delete projectmilestones' => '\'%s\' borrado',
    'log close projectmilestones' => '\'%s\' terminado',
    'log open projectmilestones' => '\'%s\' reabierto',
    
    'log add projecttasklists' => '\'%s\' agregado',
    'log edit projecttasklists' => '\'%s\' actualizado',
    'log delete projecttasklists' => '\'%s\' borrado',
    'log close projecttasklists' => '\'%s\' cerrado',
    'log open projecttasklists' => '\'%s\' abierto',
    
    'log add projecttasks' => '\'%s\' agregado',
    'log edit projecttasks' => '\'%s\' actualizado',
    'log delete projecttasks' => '\'%s\' borrado',
    'log close projecttasks' => '\'%s\' cerrado',
    'log open projecttasks' => '\'%s\' abierto',
    
    'log add projectforms' => '\'%s\' agregado',
    'log edit projectforms' => '\'%s\' actualizado',
    'log delete projectforms' => '\'%s\' borrado',
    
    'log add projectfolders' => '\'%s\' agregado',
    'log edit projectfolders' => '\'%s\' actualizado',
    'log delete projectfolders' => '\'%s\' borrado',
    
    'log add projectfiles' => '\'%s\' publicado',
    'log edit projectfiles' => '\'%s\' actualizado',
    'log delete projectfiles' => '\'%s\' borrado',
    
    'log edit projectfilerevisions' => '%s actualizado',
    'log delete projectfilerevisions' => '%s borrado',
  
  ); // array

?>
