<?php

  /**
  * Array of messages file (error, success message, status...)
  *
  * @version 1.0
  * @http://www.projectpier.org/
  */

  return array(
  
    // Empty, dnx etc
    'project dnx' => 'Il progetto cercato non esiste nel database ',
    'message dnx' => 'Il messaggio cercato non esiste',
    'no comments in message' => 'Non ci sono commenti per questo messaggio',
    'no comments associated with object' => 'Non ci sono commenti per questo oggetto',
    'no messages in project' => 'Non ci sono messaggi in questo progetto',
    'no subscribers' => 'Non ci sono utenti sottoscrittori per questo messaggio',
    'no activities in project' => 'Non ci sono attivit&agrave; registrate per questo progetto',
    'comment dnx' => 'Il commento ricercato non esiste',
    'milestone dnx' => 'La tappa cercata non esiste',
    'task list dnx' => 'La lista dei compiti cercata non esiste',
    'task dnx' => 'Il compito cercato non esiste',
    'no milestones in project' => 'Non ci sono tappe registrate in questo progetto',
    'no active milestones in project' => 'Non ci sono tappe attive in questo progetto',
    'empty milestone' => 'Questa tappa &egrave; vuota. Puoi aggiungere in qualunque momento un <a href="%s">messaggio</a> o un <a href="%s">elenco di compiti</a>',
    'no logs for project' => 'Il log di questo progetto &grave; vuoto',
    'no recent activities' => 'Non ci sono attivit&agrave; recenti registrate nel database',
    'no open task lists in project' => 'Non ci sono elenchi attivi di compiti per questo progetto',
    'no completed task lists in project' => 'Non ci sono elenchi completati di compiti per questo progetto',
    'no open task in task list' => 'Non ci sono compiti attivi in questa lista',
    'no projects in db' => 'Non ci sono progetti nel database',
    'no projects owned by company' => 'Non ci sono progetti di questa azienda',
    'no projects started' => 'Non ci sono progetti iniziati',
    'no active projects in db' => 'Non ci sono progetti attivi',
    'no new objects in project since last visit' => 'Non ci sono nuovi oggetti in questo progetto dalla tua ultima visita',
    'no clients in company' => 'La tua azienda non ha alcun cliente registrato nel database',
    'no users in company' => 'Non ci sono utenti in questa azienda',
    'client dnx' => 'L\'azienda cliente selezionata non esiste',
    'company dnx' => 'La azienda selezionata non esiste',
    'user dnx' => 'L\'utente cercato non esiste nel database',
    'avatar dnx' => 'L\'avatar non esiste',
    'no current avatar' => 'L\'avatar non &egrave; caricato',
    'no current logo' => 'Un logo non &egrave; caricato',
    'user not on project' => 'L\'utente selezionato non &egrave; impegnato in questo progetto',
    'company not on project' => 'L\'azienda selezionata non &egrave; impegnata in questo progetto',
    'user cant be removed from project' => 'L\'utente selezionato non pu&ograve; essere totlo da questo progetto',
    'tag dnx' => 'Il tag ricercato non esiste',
    'no tags used on projects' => 'Non ci sono tag registrati per questo progetto',
    'no forms in project' => 'Non ci sono form in questo progetto',
    'project form dnx' => 'Il form cercato non esiste in questo progetto',
    'related project form object dnx' => 'L\'oggetto collegato al form non esiste nel database',
    'no my tasks' => 'Non ci sono compiti assegnati a te',
    'no search result for' => 'Non ci sono oggetti che corrispondano a "<strong>%s</strong>"',
    'no files on the page' => 'Non ci sono files in questa pagina',
    'folder dnx' => 'La cartella che hia richiesto non esiste nel database',
    'define project folders' => 'Non ci sono cartelle definite per questo progetto. Perfavore definisci una cartella per continuare.',
    'file dnx' => 'Il file richiesto non esiste nel database',
    'file revision dnx' => 'La rervisione richiesta non esiste nel database',
    'no file revisions in file' => 'File non valido - non ci sono revisioni associate a questo file',
    'cant delete only revision' => 'Non puoi cancellare questa revisione. Ogni file deve avere almeno una revisione.',
    'config category dnx' => 'La categoria di conigurazione che hai richiesto non esiste',
    'config category is empty' => 'La categoria di configurazione selezionata &grave; vuota',
    'email address not in use' => '%s non &egrave; in uso',
    'no attached files' => 'Non ci sono files allegati a questo oggetto',
    'file not attached to object' => 'Il file selezionato non &egrave; allegato a questo oggetto',
    'no files to attach' => 'Perfavore seleziona i files che devono essere allegati',
    'no administration tools' => 'Non ci sono strumenti di amministrazione registrati nel database',
    'administration tool dnx' => 'Lo strumento di amministrazione "%s" non esiste',
    
    // Success
    'success add project' => 'Il progetto %s &egrave; stato creato',
    'success edit project' => 'Il progetto %s &egrave; stato aggiornato',
    'success delete project' => 'Il progetto %s &egrave; stato cancellato',
    'success complete project' => 'Il progetto %s &egrave; stato completato',
    'success open project' => 'Il progetto %s &egrave; stato riaperto',
    
    'success add milestone' => 'La tappa \'%s\' &egrave; stata creata',
    'success edit milestone' => 'La tappa \'%s\' &egrave; stata aggiornata',
    'success deleted milestone' => 'La tappa \'%s\' &egrave; stata cancellata',
    
    'success add message' => 'Il messaggio %s &egrave; stato aggiunto',
    'success edit message' => 'Il messaggio %s &egrave; stato aggiornato',
    'success deleted message' => 'Il messaggio \'%s\' e tutti i suoi commenti sono stati cancellati',
    
    'success add comment' => 'Il commento &egrave; stato postato',
    'success edit comment' => 'Il commento &egrave; stato aggiornato',
    'success delete comment' => 'Il commento &egrave; stato cancellato',
    
    'success add task list' => 'La lista di compiti \'%s\' &egrave; stata creata',
    'success edit task list' => 'La lista di compiti \'%s\' &egrave; stata aggiornata',
    'success delete task list' => 'La lista di compiti \'%s\' &egrave; stata cancellata',
    
    'success add task' => 'Il compito selezionato &egrave; stato aggiunto',
    'success edit task' => 'Il compito selezionato &egrave; stato aggiornato',
    'success delete task' => 'Il compito selezionato &egrave; stato cancellato',
    'success complete task' => 'Il compito selezionato &egrave; stato completato',
    'success open task' => 'Il compito selezionato &egrave; stato riaperto',
    'success n tasks updated' => '%s tasks updated',
    
    'success add client' => 'L\'azienda cliente %s &egrave; stata aggiunta',
    'success edit client' => 'L\'azienda cliente %s &egrave; stato aggiornata',
    'success delete client' => 'L\'azienda cliente %s &egrave; stato cancellata',
    
    'success edit company' => 'I dati dell\'azienda sono stati aggiornati',
    'success edit company logo' => 'Il logo dell\'azienda &egrave; stato aggiornato',
    'success delete company logo' => 'Il logo dell\'azienda &egrave; stato cancellato',
    
    'success add user' => 'L\'utente %s &egrave; stato aggiunto',
    'success edit user' => 'L\'utente %s &egrave; stato aggiornato',
    'success delete user' => 'L\'utente %s &egrave; stato cancellato',
    
    'success update project permissions' => 'I permessi del progetto sono stati aggiornati',
    'success remove user from project' => 'L\'utente &egrave; stato tolto dal progetto',
    'success remove company from project' => 'L\'azienda &egrave; stata tolta dal progetto',
    
    'success update profile' => 'Il profilo &egrave; stato aggiornato',
    'success edit avatar' => 'L\'avatar &egrave; stato aggiornato',
    'success delete avatar' => 'L\'avatar &egrave; stato cancellato',
    
    'success hide welcome info' => 'Il box di benvenuto &egrave; stato nascosto',
    
    'success complete milestone' => 'La tappa \'%s\' &egrave; stata compeltata',
    'success open milestone' => 'La tappa \'%s\' &egrave; stata riaperta',
    
    'success subscribe to message' => 'Sei stato abbonato a questo messaggio',
    'success unsubscribe to message' => 'Il tuo abbonamento al messaggio &egrave; stato revocato con succcesso',
    
    'success add project form' => 'Il Form \'%s\' &egrave; stato aggiunto',
    'success edit project form' => 'Il Form \'%s\' &egrave; stato aggiornato',
    'success delete project form' => 'Il Form \'%s\' &egrave; stato cancellato',
    
    'success add folder' => 'La cartella \'%s\' &egrave; stata aggiunta',
    'success edit folder' => 'La cartella \'%s\' &egrave; stata aggiornata',
    'success delete folder' => 'La cartella \'%s\' &egrave; stata cancellata',
    
    'success add file' => 'Il File \'%s\' &egrave; stato aggiunto',
    'success edit file' => 'Il File \'%s\' &egrave; stato aggiornato',
    'success delete file' => 'Il File \'%s\' &egrave; stato cancellato',
    
    'success edit file revision' => 'La revisione &egrave; stato aggiornata',
    'success delete file revision' => 'La revisione &egrave; stata cancellata',
    
    'success attach files' => 'Il (i) file %s &egrave; (sono) stato allegati',
    'success detach file' => '(i) file %s &egrave; (sono) stato disallegati',
    
    'success update config category' => 'I valori della configurazione %s  sono stati aggiornati',
    'success forgot password' => 'Ti &egrave stata inviata una email con la tua password',
    
    'success test mail settings' => 'La email di prova &egrave; stata spedita con successo',
    'success massmail' => 'la email &egrave; stata spedita',
    
    'success update company permissions' => 'I premessi dell\'azienda sono stati aggiornati. Modificati %s records',
    'success user permissions updated' => 'I premessi dell\'azienda sono stati aggiornati',
    
    // Failures
    'error form validation' => 'Non ho potuto salvare l\'oggetto perch&eacute; alcune propriet&agrave; non sono valide.',
    'error delete owner company' => 'Il proprietario dell\'azienda non pu&ograve; essere cancellato',
    'error delete message' => 'Non ho potuto cancellare questo messaggio',
    'error update message options' => 'Non ho potuto aggiornare le opzioni del messaggio',
    'error delete comment' => 'Non ho potuto cancellare questo commento',
    'error delete milestone' => 'Non ho potuto cancellare questa tappa',
    'error complete task' => 'Non ho potuto segnare come completo il compito selezionato',
    'error open task' => 'Non ho potuto riaprire questo compito',
    'error upload file' => 'Non ho potuto caricare il file',
    'error delete project' => 'Non ho potuto cancellare questo progetto',
    'error complete project' => 'Non ho potuto segnare come completo il progetto selezionato',
    'error open project' => 'Non ho potuto riaprire il progetto selezionato',
    'error delete client' => 'Non ho potuto cancellare la azienda cliente selezionata',
    'error delete user' => 'Non ho potuto cancellare l\'utente selezionato',
    'error update project permissions' => 'Non ho potuto aggiornare i permessi del progetto',
    'error remove user from project' => 'Non ho potuto rimuovere il form del progetto',
    'error remove company from project' => 'Non ho potuto rimuovere il form della azienda del progetto',
    'error edit avatar' => 'Non ho potuto editare l\'avatar',
    'error delete avatar' => 'Non ho potuto cancellare l\'avatar',
    'error hide welcome info' => 'Non ho potuto nascondere il box di benvenuto',
    'error complete milestone' => 'Non ho potuto segnare come compeltata la tappa selezionata',
    'error open milestone' => 'Non ho potuto riaprire la tappa selezionata',
    'error file download' => 'Non ho potuto effettuare il download del file selezionato',
    'error attach file' => 'Non ho potuto allegare il file',
    'error edit company logo' => 'Non ho potuto aggiornare il logo della azienda',
    'error delete company logo' => 'Non ho potuto cancellare il logo dell\'azienda',
    'error subscribe to message' => 'Non ho potuto fare una sottoscrizione al messaggio selezionato',
    'error unsubscribe to message' => 'Non ho potuto cancellare l\'abbonamento al messaggio selezionato',
    'error add project form' => 'Non ho potuto  aggiungere il form del progetto',
    'error submit project form' => 'Non ho potuto inviare il form del progetto',
    'error delete folder' => 'Non ho potuto cancellare la cartella selezionata',
    'error delete file' => 'Non ho potuto cancellare il file selezionato',
    'error delete file revision' => 'Non ho potuto cancellare la revsione del file',
    'error delete task list' => 'Non ho potuto cancellare la lista di compiti selezionata',
    'error delete task' => 'Non ho potuto cancellare il compito selezionato',
    'error check for upgrade' => 'Non ho potuto verificare l\'esistenza di una nuova versione',
    'error attach file' => 'Non ho potuto allegare il file',
    'error detach file' => 'Non ho potuto disallegare il file',
    'error attach files max controls' => 'Non puoi aggiungere altri file allegati. Il limite &egrave; %s',
    'error test mail settings' => 'Non ho potuto inviare il messaggio di prova',
    'error massmail' => 'Non ho potuto inviare l\'email',
    'error owner company has all permissions' => 'Il proprietario dell\'azienda ha tutti i permessi',
    
    // Access or data errors
    'no access permissions' => 'Non hai i permessi necessari per accedere a questa pagina',
    'invalid request' => 'Richiesta non valida!',
    
    // Confirmation
    'confirm delete message' => 'Sei sicuro di cancellare questo messaggio?',
    'confirm delete milestone' => 'Sei sicuro di cancellare questa tappa?',
    'confirm delete task list' => 'Sei sicuro di cancellare questa lista di compiti e tutti i suoi compiti?',
    'confirm delete task' => 'Sei sicuro di cancellare questo compito?',
    'confirm delete comment' => 'Sei sicuro di cancellare questo commento?',
    'confirm delete project' => 'Sei sicuro di cancellare questo progetto e tutti i dati correlati (messaggi, compiti, tappe, files, ...)?',
    'confirm complete project' => 'Sei sicuro di segnare questo progetto come concluso? Tutte le azioni del progetto saranno bloccate',
    'confirm open project' => 'Sei sicuro di segnare questo progetto come attivo? Tutte le azioni del progetto saranno sbloccate',
    'confirm delete client' => 'Sei sicuro di cancellare l\'azienda cliente e tutti i suoi membri?',
    'confirm delete user' => 'Sei sicuro di cancellare l\'account di questo utente?',
    'confirm reset people form' => 'Sei sicuro di resettare questo form? Tutte le modifiche fatte saranno perse!',
    'confirm remove user from project' => 'Sei sicuro di rimuovere questo utente dal progetto?',
    'confirm remove company from project' => 'Sei sicuro di rimuovere questa azienda dal progetto?',
    'confirm logout' => 'Sei sicuro di fare il log out?',
    'confirm delete current avatar' => 'Sei sicuro di cancellare questo avatar?',
    'confirm detach file' => 'Sei sicuro di disallegare questo file?',
    'confirm delete company logo' => 'Sei sicuro di cancellare questo logo?',
    'confirm subscribe' => 'Sei sicuro di sottoscrivere questo messaggio? Ricevereai una email ogni volta che qualcuno (eccetto te) poster&agrave; un commento al messaggio.',
    'confirm unsubscribe' => 'Sei sicuro di cancellare l\'abbonamento?',
    'confirm delete project form' => 'Sei sicuro di cancellare questo form?',
    'confirm delete folder' => 'Sei sicuro di cancellare questa cartella?',
    'confirm delete file' => 'Sei sicuro di cancellare questo file?',
    'confirm delete revision' => 'Sei sicuro di cancellare questa revisione?',
    'confirm reset form' => 'Sei sicuro di resettare questo form?',
    
    // Errors...
    'system error message' => 'Sono spiacente, ma un errore ha impedito a ProjectPier di portare a termine la tua richiesta. Un messaggio di errore &egrave; stato spedito all\'amministratore.',
    'execute action error message' => 'Sono spiacente, ma ProjectPier non &egrave; attualmente in grado di eseguire la tua richiesta. Un messaggio di errore &egrave; stato spedito all\'amministratore',
    
    // Log
    'log add projectmessages' => '\'%s\' aggiunto',
    'log edit projectmessages' => '\'%s\' aggiornato',
    'log delete projectmessages' => '\'%s\' cancellato',
    
    'log add comments' => '%s aggiunto',
    'log edit comments' => '%s aggiornato',
    'log delete comments' => '%s cancellato',
    
    'log add projectmilestones' => '\'%s\' aggiunto',
    'log edit projectmilestones' => '\'%s\' aggiornato',
    'log delete projectmilestones' => '\'%s\' cancellato',
    'log close projectmilestones' => '\'%s\' finished',
    'log open projectmilestones' => '\'%s\' reopened',
    
    'log add projecttasklists' => '\'%s\' aggiunto',
    'log edit projecttasklists' => '\'%s\' aggiornato',
    'log delete projecttasklists' => '\'%s\' cancellato',
    'log close projecttasklists' => '\'%s\' closed',
    'log open projecttasklists' => '\'%s\' opened',
    
    'log add projecttasks' => '\'%s\' aggiunto',
    'log edit projecttasks' => '\'%s\' aggiornato',
    'log delete projecttasks' => '\'%s\' cancellato',
    'log close projecttasks' => '\'%s\' closed',
    'log open projecttasks' => '\'%s\' opened',
    
    'log add projectforms' => '\'%s\' aggiunto',
    'log edit projectforms' => '\'%s\' aggiornato',
    'log delete projectforms' => '\'%s\' cancellato',
    
    'log add projectfolders' => '\'%s\' aggiunto',
    'log edit projectfolders' => '\'%s\' aggiornato',
    'log delete projectfolders' => '\'%s\' cancellato',
    
    'log add projectfiles' => '\'%s\' uploaded',
    'log edit projectfiles' => '\'%s\' aggiornato',
    'log delete projectfiles' => '\'%s\' cancellato',
    
    'log edit projectfilerevisions' => '%s aggiornato',
    'log delete projectfilerevisions' => '%s cancelalto',
  
  ); // array

?>