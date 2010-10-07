<?php

  /**
  * Array of messages file (error, success message, status...)
  *
  * @version 1.0
  * @http://www.projectpier.org/
  */

  return array(
  
    // Empty, dnx etc
    'project dnx' => 'Projektia ei löydy tietokannasta',
    'message dnx' => 'Viestiä ei löydy',
    'no comments in message' => 'Viestiä ei ole kommentoitu',
    'no comments associated with object' => 'Kohdetta ei ole kommentoitu',
    'no messages in project' => 'Projektilla ei ole viestejä',
    'no subscribers' => 'Viestiä ei ole tilannut kukaan käyttäjä',
    'no activities in project' => 'Projektin lokissa ei ole kirjautuneita toimenpiteitä',
    'comment dnx' => 'Kommenttia ei löydy',
    'milestone dnx' => 'Välitavoitetta ei ole olemassa',
    'task list dnx' => 'Tehtävälistaa ei ole olemassa',
    'task dnx' => 'Tehtävää ei ole olemassa',
    'no milestones in project' => 'Projektilla ei ole välitavoitteita',
    'no active milestones in project' => 'Projektilla ei ole aktiivisia välitavoitteita',
    'empty milestone' => 'Välitavoite on tyhjä. Voit lisätä <a href="%s">viestin</a> tai <a href="%s">tehtävälistan</a> sille koska tahansa',
    'no logs for project' => 'Projektiin ei liity lokimerkintöjä',
    'no recent activities' => 'Ei lähiajan aktiviteetteja lokissa',
    'no open task lists in project' => 'Projektilla ei ole avoimia tehtävälistoja',
    'no completed task lists in project' => 'Projektilla ei ole valmistuneita tehtävälistoja',
    'no open task in task list' => 'Ei avoimia tehtäviä listalla',
    'no projects in db' => 'Ei määriteltyä projektia tietokannassa',
    'no projects owned by company' => 'Yrityksellä ei ole projekteja',
    'no projects started' => 'Ei aloitettuja projekteja',
    'no active projects in db' => 'Ei aktiivisia projekteja',
    'no new objects in project since last visit' => 'Ei uusia projektitapahtumia viime käynnin jälkeen',
    'no clients in company' => 'Yritykselläsi ei ole rekisteröityneitä asiakkaita',
    'no users in company' => 'Yrityksellä ei ole käyttäjiä',
    'client dnx' => 'Valittua asiakasyritystä ei ole',
    'company dnx' => 'Valittua yritystä ei ole',
    'user dnx' => 'Käyttäjää ei löydy tietokannasta',
    'avatar dnx' => 'Kuvaa ei ole',
    'no current avatar' => 'Kuvaa ei ole siirretty',
    'no current logo' => 'Logoa ei ole siirretty',
    'user not on project' => 'Valittu käyttäjä ei ole mukana valitussa projektissa',
    'company not on project' => 'Valittu yritys ei ole mukana valitussa projektissa',
    'user cant be removed from project' => 'Valittua käyttäjää ei voi poistaa projektista',
    'tag dnx' => 'Hakusanaa ei ole',
    'no tags used on projects' => 'Projektilla ei ole hakusanoja',
    'no forms in project' => 'Projektilla ei ole lomakkeita',
    'project form dnx' => 'Projektin lomaketta ei löydy tietokannasta',
    'related project form object dnx' => 'Lomakkeen kohde ei löydy tietokannasta',
    'no my tasks' => 'Sinulle ei ole määritelty tehtäviä',
    'no search result for' => 'Ei kohteita jotka vastaavat hakua "<strong>%s</strong>"',
    'no files on the page' => 'Sivulla ei ole tiedostoja',
    'folder dnx' => 'Kansiota ei ole tietokannassa',
    'define project folders' => 'Projektilla ei ole kansioita. Määrittele kansiot jatkaaksesi',
    'file dnx' => 'Tiedostoa ei ole tietokannassa',
    'file revision dnx' => 'Revisiota ei ole tietokannassa',
    'no file revisions in file' => 'Väärä tiedosto - tiedostoon ei liity revisioita',
    'cant delete only revision' => 'Revisiota ei voi poistaa. Jokaisella tiedostolla pitää olla ainakin yksi revisio',
    'config category dnx' => 'Konfigurointikategoriaa ei ole',
    'config category is empty' => 'Valittu konfigurointikategoria on tyhjä',
    'email address not in use' => '%s ei ole käytössä',
    'no attached files' => 'Kohteeseen ei ole liitetty tiedostoja',
    'file not attached to object' => 'Valittua tiedostoa ei ole liitetty valittuun kohteeseen',
    'no files to attach' => 'Valitse liitettävät tiedostot',
    'no administration tools' => 'Ei rekisteröityjä admin-työkaluja tietokannassa',
    'administration tool dnx' => 'Admin-työkalua "%s" ei ole',
    
    // Success
    'success add project' => 'Projekti %s lisätty',
    'success edit project' => 'Projekti %s päivitetty',
    'success delete project' => 'Projekti %s poistettu',
    'success complete project' => 'Projekti %s valmistunut',
    'success open project' => 'Projekti %s avattu uudelleen',
    
    'success add milestone' => 'Välitavoite \'%s\' lisätty',
    'success edit milestone' => 'Välitavoite \'%s\' päivitetty',
    'success deleted milestone' => 'Välitavoite \'%s\' poistettu',
    
    'success add message' => 'Viesti %s lisätty',
    'success edit message' => 'Viesti %s päivitetty',
    'success deleted message' => 'Viesti \'%s\' ja kaikki sen kommentit poistettu',
    
    'success add comment' => 'Kommentti lisätty',
    'success edit comment' => 'Kommentti päivitetty',
    'success delete comment' => 'Kommentti poistettu',
    
    'success add task list' => 'Tehtävälista \'%s\' lisätty',
    'success edit task list' => 'Tehtävälista \'%s\' päivitetty',
    'success delete task list' => 'Tehtävälista \'%s\' poistettu',
    
    'success add task' => 'Valittu tehtävä lisätty',
    'success edit task' => 'Valittu tehtävä päivitetty',
    'success delete task' => 'Valittu tehtävä poistettu',
    'success complete task' => 'Valittu tehtävä valmistunut',
    'success open task' => 'Valittu tehtävä avattu uudelleen',
    'success n tasks updated' => '%s tehtävää päivitetty',
    
    'success add client' => 'Asiakasyritys %s lisätty',
    'success edit client' => 'Asiakasyritys %s päivitetty',
    'success delete client' => 'Asiakasyritys %s poistettu',
    
    'success edit company' => 'Yrityksen tiedot päivitetty',
    'success edit company logo' => 'Yrityksen logo päivitetty',
    'success delete company logo' => 'Yrityksen logo poistettu',
    
    'success add user' => 'Käyttäjä %s lisätty',
    'success edit user' => 'Käyttäjä %s päivitetty',
    'success delete user' => 'Käyttäjä %s poistettu',
    
    'success update project permissions' => 'Projektin oikeudet päivitetty',
    'success remove user from project' => 'Käyttäjä poistettu projektista',
    'success remove company from project' => 'yritys poistettu projektista',
    
    'success update profile' => 'Profiili päivitetty',
    'success edit avatar' => 'Kuva päivitetty',
    'success delete avatar' => 'Kuva poistettu',
    
    'success hide welcome info' => 'Tervetuloa-ikkuna piilotettu',
    
    'success complete milestone' => 'Välitavoite \'%s\' valmis',
    'success open milestone' => 'Välitavoite \'%s\' avattu uudelleen',
    
    'success subscribe to message' => 'Olet tilannut viestin',
    'success unsubscribe to message' => 'Olet peruuttanut viestin tilauksen',
    
    'success add project form' => 'Lomake \'%s\' lisätty',
    'success edit project form' => 'Lomake \'%s\' päivitetty',
    'success delete project form' => 'Lomake \'%s\' poistettu',
    
    'success add folder' => 'Kansio \'%s\' lisätty',
    'success edit folder' => 'Kansio \'%s\' päivitetty',
    'success delete folder' => 'Kansio \'%s\' poistettu',
    
    'success add file' => 'Tiedosto \'%s\' lisätty',
    'success edit file' => 'Tiedosto \'%s\' päivitetty',
    'success delete file' => 'Tiedosto \'%s\' poistettu',
    
    'success edit file revision' => 'Revisio päivitetty',
    'success delete file revision' => 'Tiedoston revisio poistettu',
    
    'success attach files' => '%s tiedosto(a) liitetty',
    'success detach file' => 'Tiedosto(ja) irrotettu',
    
    'success update config category' => '%s konfiguraatio-arvoja päivitetty',
    'success forgot password' => 'Salasanasi on lähetetty sähköpostiisi',
    
    'success test mail settings' => 'Testiviesti on lähetetty onnistuneesti',
    'success massmail' => 'Sähköposti on lähetetty',
    
    'success update company permissions' => 'Yrityksen oikeudet päivitetty. %s tietuetta päivitetty',
    'success user permissions updated' => 'Käyttäjän oikeudet päivitetty',
    
    // Failures
    'error form validation' => 'Kohteen tallennus ei onnistu koska jokin arvo ei ole validi',
    'error delete owner company' => 'Omistavaa yritystä ei voi poistaa',
    'error delete message' => 'Viestiä ei voitu poistaa',
    'error update message options' => 'Viestin asetuksia ei voitu päivittää',
    'error delete comment' => 'Kommentin poisto ei onnistunut',
    'error delete milestone' => 'Välitavoitteen poisto ei onnistunut',
    'error complete task' => 'Tehtävän päättäminen ei onnistunut',
    'error open task' => 'Tehtävän uudelleen avaaminen ei onnistunut',
    'error upload file' => 'Tiedoston lisääminen ei onnistunut',
    'error delete project' => 'Projektin poistaminen ei onnistunut',
    'error complete project' => 'Projektin päättäminen ei onnistunut',
    'error open project' => 'Projektin uudelleen avaaminen ei onnistunut',
    'error delete client' => 'Asiakasyrityksen poistaminen ei onnistunut',
    'error delete user' => 'Käyttäjän poistaminen ei onnistunut',
    'error update project permissions' => 'Projektin oikeuksien päivittäminen ei onnistunut',
    'error remove user from project' => 'Käyttäjän poistaminen projektista ei onnistunut',
    'error remove company from project' => 'Yrityksen poistaminen projektista ei onnistunut',
    'error edit avatar' => 'Kuvan editointi ei onnistunut',
    'error delete avatar' => 'Kuvan poistaminen ei onnistunut',
    'error hide welcome info' => 'Tervetuloa-ikkunan piilotus ei onnistunut',
    'error complete milestone' => 'Välitavoitteen päättäminen ei onnistunut',
    'error open milestone' => 'Välitavoitteen uudelleenavaus ei onnistunut',
    'error file download' => 'Tiedoston lataus ei onnistunut',
    'error attach file' => 'Tiedoston liittäminen ei onnistunut',
    'error edit company logo' => 'Logon päivitys epäonnistui',
    'error delete company logo' => 'Logon poistaminen epäonnistui',
    'error subscribe to message' => 'Viestin tilaaminen ei onnistunut',
    'error unsubscribe to message' => 'Viestin tilauksen lopettaminen ei onnistunut',
    'error add project form' => 'Projektin lomakkeen lisäys ei onnistunut',
    'error submit project form' => 'Projektin lomakkeen lähetys ei onnistunut',
    'error delete folder' => 'Kansion poistaminen ei onnistunut',
    'error delete file' => 'Tiedoston poistaminen ei onnistunut',
    'error delete file revision' => 'Tiedoston revision poistaminen ei onnistunut',
    'error delete task list' => 'Tehtävälistan poistaminen ei onnistunut',
    'error delete task' => 'Tehtävän poistaminen ei onnistunut',
    'error check for upgrade' => 'Uuden version tarkistus ei onnistunut',
    'error attach file' => 'Tiedostojen liittäminen ei onnistunut',
    'error detach file' => 'Tiedostojen irrottaminen ei onnistunut',
    'error attach files max controls' => 'Tiedostoja ei voida liittää enempää. Raja on %s',
    'error test mail settings' => 'Testiviestin lähetys epäonnistui',
    'error massmail' => 'Sähköpostin lähetys epäonnistui',
    'error owner company has all permissions' => 'Omistajayrityksellä on kaikki oikeudet',
    
    // Access or data errors
    'no access permissions' => 'You don\'t have permissions to access requested page',
    'invalid request' => 'Invalid request!',
    
    // Confirmation
    'confirm delete message' => 'Are you sure that you want to delete this message?',
    'confirm delete milestone' => 'Are you sure that you want to delete this milestone?',
    'confirm delete task list' => 'Are you sure that you want to delete this task lists and all of its tasks?',
    'confirm delete task' => 'Are you sure that you want to delete this task?',
    'confirm delete comment' => 'Are you sure that you want to delete this comment?',
    'confirm delete project' => 'Are you sure that you want to delete this project and all related data (messages, tasks, milestones, files...)?',
    'confirm complete project' => 'Are you sure that you want to mark this project as finished? All project actions will be locked',
    'confirm open project' => 'Are you sure that you want to mark this project as open? This will unlock all project actions',
    'confirm delete client' => 'Are you sure that you want to delete selected client company and all of its users?',
    'confirm delete user' => 'Are you sure that you want to delete this user account?',
    'confirm reset people form' => 'Are you sure that you want to reset this form? All modifications you made will be lost!',
    'confirm remove user from project' => 'Are you sure that you want to remove this user from project?',
    'confirm remove company from project' => 'Are you sure that you want to remove this company from project?',
    'confirm logout' => 'Are you sure that you want to log out?',
    'confirm delete current avatar' => 'Are you sure that you want to delete this avatar?',
    'confirm detach file' => 'Are you sure that you want to detach this file?',
    'confirm delete company logo' => 'Are you sure that you want to delete this logo?',
    'confirm subscribe' => 'Are you sure that you want to subscribe to this message? You will receive an email everytime someone (except you) posts a comment on this message?',
    'confirm unsubscribe' => 'Are you sure that you want to unsubscribe?',
    'confirm delete project form' => 'Are you sure that you want to delete this form?',
    'confirm delete folder' => 'Are you sure that you want to delete this folder?',
    'confirm delete file' => 'Are you sure that you want to delete this file?',
    'confirm delete revision' => 'Are you sure that you want to delete this revision?',
    'confirm reset form' => 'Are you sure that you want to reset this form?',
    
    // Errors...
    'system error message' => 'We are sorry, but a fatal error prevented ProjectPier from executing your request. An Error Report has been sent to the administrator.',
    'execute action error message' => 'We are sorry, but ProjectPier is not currently able to execute your request. An Error Report has been sent to the administrator.',
    
    // Log
    'log add projectmessages' => '\'%s\' added',
    'log edit projectmessages' => '\'%s\' updated',
    'log delete projectmessages' => '\'%s\' deleted',
    
    'log add comments' => '%s added',
    'log edit comments' => '%s updated',
    'log delete comments' => '%s deleted',
    
    'log add projectmilestones' => '\'%s\' added',
    'log edit projectmilestones' => '\'%s\' updated',
    'log delete projectmilestones' => '\'%s\' deleted',
    'log close projectmilestones' => '\'%s\' finished',
    'log open projectmilestones' => '\'%s\' reopened',
    
    'log add projecttasklists' => '\'%s\' added',
    'log edit projecttasklists' => '\'%s\' updated',
    'log delete projecttasklists' => '\'%s\' deleted',
    'log close projecttasklists' => '\'%s\' closed',
    'log open projecttasklists' => '\'%s\' opened',
    
    'log add projecttasks' => '\'%s\' added',
    'log edit projecttasks' => '\'%s\' updated',
    'log delete projecttasks' => '\'%s\' deleted',
    'log close projecttasks' => '\'%s\' closed',
    'log open projecttasks' => '\'%s\' opened',
    
    'log add projectforms' => '\'%s\' added',
    'log edit projectforms' => '\'%s\' updated',
    'log delete projectforms' => '\'%s\' deleted',
    
    'log add projectfolders' => '\'%s\' added',
    'log edit projectfolders' => '\'%s\' updated',
    'log delete projectfolders' => '\'%s\' deleted',
    
    'log add projectfiles' => '\'%s\' uploaded',
    'log edit projectfiles' => '\'%s\' updated',
    'log delete projectfiles' => '\'%s\' deleted',
    
    'log edit projectfilerevisions' => '%s updated',
    'log delete projectfilerevisions' => '%s deleted',
  
  ); // array

?>