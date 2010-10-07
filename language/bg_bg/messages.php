<?php

  /**
  * Array of messages file (error, success message, status...)
  *
  * @version 1.0
  * @http://www.projectpier.org/
  */

  return array(

    // Empty, dnx etc
    'project dnx' => 'Заявеният проект не е открит в базата данни',
    'message dnx' => 'Заявеното съобщение не е открито в базата данни',
    'no comments in message' => 'Няма коментари към съобщението',
    'no comments associated with object' => 'Няма коментари към обекта',
    'no messages in project' => 'Няма съобщения към проекта',
    'no subscribers' => 'Няма абонирани потребители за това съобщение',
    'no activities in project' => 'Няма извършени дейности по проекта',
    'comment dnx' => 'Заявеният коментар не е открит в базата данни',
    'milestone dnx' => 'Заявеният етап не е открит в базата данни',
    'task list dnx' => 'Заявеният списък със задачи не е открит в базата данни',
    'task dnx' => 'Заявената задача не е открита в базата данни',
    'no milestones in project' => 'Няма етапи към текущия проект',
    'no active milestones in project' => 'Няма активни етапи в текущия проект',
    'empty milestone' => 'Този етап не е попълнен. Можете да добавите <a href="%s">съобщение</a> или <a href="%s">списък със задачи</a> към етапа по всяко време',
    'no logs for project' => 'В журнала няма записи, касаещи този проект',
    'no recent activities' => 'Няма записи за текуща активност',
    'no open task lists in project' => 'Няма отворени списъци със задачи към текущия проект',
    'no completed task lists in project' => 'Няма приключени списъци със задачи към текущия проект',
    'no open task in task list' => 'Няма задачи в текущия списък',
    'no projects in db' => 'В базата данни не са открити проекти',
    'no projects owned by company' => 'В базата данни не са открити проекти, които да са свързани с тази организация',
    'no projects started' => 'В базата данни не са открити стартирали проекти',
    'no active projects in db' => 'В базата данни не са открити активни проекти',
    'no new objects in project since last visit' => 'Няма нови обекти в проекта след вашето последно посещение',
    'no clients in company' => 'Вашата организация няма регистрирани клиенти',
    'no users in company' => 'В тази организация няма регистрирани потребители',
    'client dnx' => 'Заявеният клиент не е открит в базата данни',
    'company dnx' => 'Заявената организация не е открита в базата данни',
    'user dnx' => 'Заявеният потребител не е открит в базата данни',
    'avatar dnx' => 'Изображението не е открито',
    'no current avatar' => 'Не е заредено изображение',
    'no current logo' => 'Не е заредено лого',
    'user not on project' => 'Избраният потребител не участва в текущия проект',
    'company not on project' => 'Избраната организация не участва в текущия проект',
    'user cant be removed from project' => 'Посоченият потребител не може да бъде премахнат от проекта',
    'tag dnx' => 'Няма въведен такъв етикет',
    'no tags used on projects' => 'В текущия проект не са използвани етикети',
    'no forms in project' => 'В текущия проект няма форми',
    'project form dnx' => 'Заявената форма не е открита в базата данни',
    'related project form object dnx' => 'Формата към проекта не е открита в базата данни',
    'no my tasks' => 'Няма задачи адресирани до вас',
    'no search result for' => 'Не са открити обекти отговарящи на условието "<strong>%s</strong>"',
    'no files on the page' => 'На страницата няма файлове',
    'folder dnx' => 'Заявената папка не е открита в базата данни',
    'define project folders' => 'В проекта няма папки. Моля, добавете папки преди да продължите.',
    'file dnx' => 'Заявеният файл не е открит в базата данни',
    'file revision dnx' => 'Заявената версия не е открита в базата данни',
    'no file revisions in file' => 'Грешен файл - няма версии свързани с файла',
    'cant delete only revision' => 'Не може да бъде изтрита ревизията. Всеки файл трябва да има публикувана поне една ревизия.',
    'config category dnx' => 'Заявеният раздел в настройките не е открит',
    'config category is empty' => 'Заявеният раздел в настройките няма съдържаине',
    'email address not in use' => 'E-mail адресът %s не се използва',
    'no attached files' => 'Няма файлове свързани с обекта',
    'file not attached to object' => 'Избраният файл не е прикрепен към обекта',
    'no files to attach' => 'Моля, изберете файлове, които да бъдат прикрепени',
    'no administration tools' => 'Няма регистрирани инструменти в базата данни',
    'administration tool dnx' => 'Инструментът "%s" не е открит',
    'about to delete' => 'Ще бъде изтрит',

    // Success
    'success add project' => 'Проект \'%s\' беше добавен успешно',
    'success edit project' => 'Проект \'%s\' беше редактиран успешно',
    'success delete project' => 'Проект \'%s\' беше премахнат успешно',
    'success complete project' => 'Проект \'%s\' беше приключен',
    'success open project' => 'Проет \'%s\' беше отново отворен',

    'success add milestone' => 'Етап \'%s\' беше добавен успешно',
    'success edit milestone' => 'Етап \'%s\' беше редактиран успешно',
    'success deleted milestone' => 'Етап \'%s\' беше премахнат успешно',

    'success add message' => 'Съобщението \'%s\' беше добавено успешно',
    'success edit message' => 'Съобщение \'%s\' беше редактирано успешно',
    'success deleted message' => 'Съобщението \'%s\' и всички негови коментари бяха премахнати успешно',

    'success add comment' => 'Коментарът беше добавен успешно',
    'success edit comment' => 'Коментарът беше редактиран успешно',
    'success delete comment' => 'КОментарът беше премахнат успешно',

    'success add task list' => 'Списъкът със задачи \'%s\' беше добавен успешно',
    'success edit task list' => 'Списъкът със задачи \'%s\' беше редактиран успешно',
    'success delete task list' => 'Списъкът със задачи \'%s\' беше премахнат успешно',

    'success add task' => 'Избраната задача беше добавена успешно',
    'success edit task' => 'Избраната задача беше редактирана успешно',
    'success delete task' => 'Избраната задача беше премахната успешно',
    'success complete task' => 'Избраната задача беше приключена успешно',
    'success open task' => 'Избраната задача беше отново отворена успешно',
    'success n tasks updated' => '%s задачи бяха обновени успешно',

    'success add client' => 'Организацията клиент \'%s\' беше добавена успешно',
    'success edit client' => 'Организацията клиент \'%s\' беше редактирана успешно',
    'success delete client' => 'Организацията клиент \'%s\' беше премахната успешно',

    'success edit company' => 'Данните за организацията са обновени успешно',
    'success edit company logo' => 'Логото на организацията е добавено успешно',
    'success delete company logo' => 'Логото на организацията е премахнато успешно',

    'success add user' => 'Потребител \'%s\' беше добавен успешно',
    'success edit user' => 'Потребител \'%s\' беше редактиран успешно',
    'success delete user' => 'Потребител \'%s\' беше премахнат успешно',

    'success update project permissions' => 'Правата за достъп са променени успешно',
    'success remove user from project' => 'Потребителят е изваден от проекта успешно',
    'success remove company from project' => 'Организацията е извадена от проекта успешно',

    'success update profile' => 'Потребителският профил беше обновен успешно',
    'success edit avatar' => 'Изображението беше заменено успешно',
    'success delete avatar' => 'Изображението беше премахнато успешно',

    'success hide welcome info' => 'Съобщението беше успешно скрито за постоянно',

    'success complete milestone' => 'Етап \'%s\' беше приключен успешно',
    'success open milestone' => 'Етап \'%s\' беше отново отворен',

    'success subscribe to message' => 'Бяхте успешно абонирани за това съобщение',
    'success unsubscribe to message' => 'Бяхте успешно извадени от абонамента за това съобщение',

    'success add project form' => 'Формата \'%s\' беше добавена успешно',
    'success edit project form' => 'Формата \'%s\' беше редактирана успешно',
    'success delete project form' => 'Формата \'%s\' беше премахната успешно',

    'success add folder' => 'Папка \'%s\' беше добавена успешно',
    'success edit folder' => 'Папка \'%s\' беше редактирана успешно',
    'success delete folder' => 'Папка \'%s\' беше премахната успешно',

    'success add file' => 'Файлът \'%s\' беше добавен успешно',
    'success edit file' => 'Файлът \'%s\' беше заменен успешно',
    'success delete file' => 'Файлът \'%s\' беше премахнат успешно',

    'success edit file revision' => 'Версията на файла беше обновена успешно',
    'success delete file revision' => 'Версията на файла беше премахната успешно',

    'success attach files' => 'Прикрепени файлове: %s',
    'success detach file' => 'Файловете бяха успешно разкачени',

    'success update config category' => 'Раздел %s от конфигурацията беше обновен',
    'success forgot password' => 'Вашата нова парола е изпратена по e-mail',

    'success test mail settings' => 'Тестовото съобщение е изпратено успешно',
    'success massmail' => 'E-mail-ът беше изпратен успешно',

    'success update company permissions' => 'Правата за достъп на организацията бяха променени успешно. Променени записи: %s',
    'success user permissions updated' => 'Правата за достъп на потребителя бяха променени успешно',

    // Failures
    'error form validation' => 'Данните не бяха съхранени поради подадена некоректна информация',
    'error delete owner company' => 'Организацията собственик не може да бъде премахната',
    'error delete message' => 'Избраното съобщение не беше премахнато',
    'error update message options' => 'Промените в съобщението не бяха записани',
    'error delete comment' => 'Избраният коментар не беше премахнат',
    'error delete milestone' => 'Избраният етап не беше премахнат',
    'error complete task' => 'Избраната задача не беше приключена',
    'error open task' => 'Избраната задача не беше наново отворена',
    'error upload file' => 'Неуспешно качване на файл',
    'error delete project' => 'Избраният проект не беше премахнат',
    'error complete project' => 'Избраният проект не беше приключен',
    'error open project' => 'Избраният проект не беше наново активиран',
    'error delete client' => 'Избраната организация клиент не беше премахната',
    'error delete user' => 'Избраният потребител не беше премахнат',
    'error update project permissions' => 'Правата за достъп на проекта не бяха променени',
    'error remove user from project' => 'Избраният потребител не беше изваден от проекта',
    'error remove company from project' => 'Избраната организация не беше извадена от проекта',
    'error edit avatar' => 'Изображението не беше заменено',
    'error delete avatar' => 'Изображението не беше премахнато',
    'error hide welcome info' => 'Съобщението не беше скрито за постоянно',
    'error complete milestone' => 'Избраният етап не беше приключен',
    'error open milestone' => 'Избраният етап не беше наново отворен',
    'error file download' => 'Избраният файл не може да бъде зареден',
    'error attach file' => 'Избраният файл не беше прикачен',
    'error edit company logo' => 'Логото на организацията не беше заменено',
    'error delete company logo' => 'Логото на организацията не беше премахнато',
    'error subscribe to message' => 'Абонирането за съобщение не беше успешно',
    'error unsubscribe to message' => 'Изваждането от абонамента не беше успешно',
    'error add project form' => 'Формата не беше добавена към проекта',
    'error submit project form' => 'Формата не беше изпратена',
    'error delete folder' => 'Избраната папка не беше премахната',
    'error delete file' => 'Избраният файл не беше премахнат',
    'error delete file revision' => 'Избраната версия не беше премахната',
    'error delete task list' => 'Избраният списък със задачи не беше премахнат',
    'error delete task' => 'Избраната задача не беше премахната',
    'error check for upgrade' => 'Проверката за нова версия не се състоя',
    'error attach file' => 'Файловете не бяха прикрепени',
    'error detach file' => 'Файловете не бяха разкачени',
    'error attach files max controls' => 'Не можете да прикачите повече файлове. Максимално допустим брой: %s',
    'error test mail settings' => 'Изпращането на тестовото съобщение не беше успешно',
    'error massmail' => 'E-mail-ът не беше изпратен',
    'error owner company has all permissions' => 'Организацията собственик има пълни права на достъп',

    // Access or data errors
    'no access permissions' => 'Правата за достъп не позволяват избраното от вас действие да бъде извършено ',
    'invalid request' => 'Некоректна заявка!',

    // Confirmation
    'confirm delete message' => 'Сигурни ли сте, че желаете да премахнете това съобщение?',
    'confirm delete milestone' => 'Сигурни ли сте, че желаете да премахнете този етап?',
    'confirm delete task list' => 'Сигурни ли сте, че желаете да премахнете този списък със задачи заедно с всички задачи в него?',
    'confirm delete task' => 'Сигурни ли сте, че желаете да премахнете тази задача?',
    'confirm delete comment' => 'Сигурни ли сте, че желаете да премахнете този коментар?',
    'confirm delete project' => 'Сигурни ли сте, че желаете да премахнете този проект и всичката информация в него (съобщения, задачи, етапи, файлове и др.)?',
    'confirm complete project' => 'Сигурни ли сте, че желаете да маркирате този проект като приключен? Всички действия върху проекта ще бъдат блокирани.',
    'confirm open project' => 'Сигурни ли сте, че желаете да маркирате този проект като отворен? Ще бъде даден достъп за нанасяне на промени в проекта.',
    'confirm delete client' => 'Сигурни ли сте, че желаете да премахнете организацията клиент заедно с ?',
    'confirm delete user' => 'Сигурни ли сте, че желаете да премахнете този потребителски профил?',
    'confirm reset people form' => 'Сигурни ли сте, че желаете да изчистите формата? Всички нанесени корекции в полетата ще бъдат изгубени!',
    'confirm remove user from project' => 'Сигурни ли сте, че желаете да извадите този потребител от проекта?',
    'confirm remove company from project' => 'Сигурни ли сте, че желаете да извадите тази организация от проекта?',
    'confirm logout' => 'Сигурни ли сте, че желаете да излезете?',
    'confirm delete current avatar' => 'Сигурни ли сте, че желаете да премахнете изображението?',
    'confirm detach file' => 'Сигурни ли сте, че желаете да разкачите този файл?',
    'confirm delete company logo' => 'Сигурни ли сте, че желаете да премахнете логото?',
    'confirm subscribe' => 'Сигурни ли сте, че желаете да се абонирате за това съобщение? Ще получавате e-mail всеки път, когато някой публикува нов коментар по съобщението?',
    'confirm unsubscribe' => 'Сигурни ли сте, че желаете да бъдете извадени от обаномента?',
    'confirm delete project form' => 'Сигурни ли сте, че желаете да премахнете тази форма?',
    'confirm delete folder' => 'Сигурни ли сте, че желаете да премахнете тази папта?',
    'confirm delete file' => 'Сигурни ли сте, че желаете да премахнете този файл?',
    'confirm delete revision' => 'Сигурни ли сте, че желаете да премахнете тази версия/ревизия?',
    'confirm reset form' => 'Сигурни ли сте, че желаете да изчистите формата?',

    // Errors...
    'system error message' => 'Поради фатална грешка вашата заявка не беше изпълнена. Съобщение за грешка е докладвано на администратора.',
    'execute action error message' => 'За съжаление в момента ProjectPier не може да обработи вашата заявка. Съобщение за грешка е докладвано на администратора.',

    // Log
    'log add projectmessages' => '\'%s\' беше добавено',
    'log edit projectmessages' => '\'%s\' беше редактирано',
    'log delete projectmessages' => '\'%s\' беше премахнато',

    'log add comments' => '%s беше добавен',
    'log edit comments' => '%s беше редактиран',
    'log delete comments' => '%s беше премахнат',

    'log add projectmilestones' => '\'%s\' беше добавен',
    'log edit projectmilestones' => '\'%s\' беше редактиран',
    'log delete projectmilestones' => '\'%s\' беше премахнат',
    'log close projectmilestones' => '\'%s\' беше приключен',
    'log open projectmilestones' => '\'%s\' беше наново отворен',

    'log add projecttasklists' => '\'%s\' беше добавена',
    'log edit projecttasklists' => '\'%s\' беше редактирана',
    'log delete projecttasklists' => '\'%s\' беше премахната',
    'log close projecttasklists' => '\'%s\' беше закрита',
    'log open projecttasklists' => '\'%s\' беше наново открита',

    'log add projecttasks' => '\'%s\' беше добавена',
    'log edit projecttasks' => '\'%s\' беше редактирана',
    'log delete projecttasks' => '\'%s\' беше премахната',
    'log close projecttasks' => '\'%s\' беше закрита',
    'log open projecttasks' => '\'%s\' беше наново открита',

    'log add projectforms' => '\'%s\' беше добавена',
    'log edit projectforms' => '\'%s\' беше редактирана',
    'log delete projectforms' => '\'%s\' беше премахната',

    'log add projectfolders' => '\'%s\' беше добавена',
    'log edit projectfolders' => '\'%s\' беше редактирана',
    'log delete projectfolders' => '\'%s\' беше премахната',

    'log add projectfiles' => '\'%s\' беше добавен',
    'log edit projectfiles' => '\'%s\' беше редактиран',
    'log delete projectfiles' => '\'%s\' беше премахнат',

    'log edit projectfilerevisions' => '%s беше обновена',
    'log delete projectfilerevisions' => '%s беше премахната',

  ); // array

?>