<?php

  /**
  * Array of messages file (error, success message, status...)
  *
  * @version 1.0
  * @http://www.projectpier.org/
  */

  return array(
  
    // Vazio, não existe, etc
    'project dnx' => 'O projeto pedido não existe na base de dados',
    'message dnx' => 'A mensagem pedida não existe',
    'no comments in message' => 'Não há comentários nesta mensagem',
    'no comments associated with object' => 'Não há comentários para este item',
    'no messages in project' => 'Não há mensagens neste projecto',
    'no subscribers' => 'Não há subscritores para esta mensagem',
    'no activities in project' => 'Não há actividades registadas neste projecto',
    'comment dnx' => 'O comentário pedido não existe',
    'milestone dnx' => 'A etapa pedida não existe',
    'task list dnx' => 'A lista de tarefas pedida não existe',
    'task dnx' => 'A tarefa pedida não existe',
    'no milestones in project' => 'Não há etapas neste projeto',
    'no active milestones in project' => 'Não há etapas activas neste projecto',
    'empty milestone' => 'A etapa está vazia. Pode adicionar uma <a href="%s">mensagem</a> ou uma <a href="%s">lista de tarefas</a>',
    'no logs for project' => 'Não há entradas registadas no registo deste projecto',
    'no recent activities' => 'Não há actividades recentes registadas na base de dados',
    'no open task lists in project' => 'Não há lista de tarefas aberta neste projeto',
    'no completed task lists in project' => 'Não há lista de tarefas concluídas neste projeto',
    'no open task in task list' => 'Não há tarefas nesta lista',
    'no projects in db' => 'Não há projectos definidos na base de dados',
    'no projects owned by company' => 'Não há projectos associados a esta organização',
    'no projects started' => 'Não há projectos iniciados',
    'no active projects in db' => 'Não há projectos activos',
    'no new objects in project since last visit' => 'Não há novos objectos neste projecto desde a sua última visita',
    'no clients in company' => 'A sua organização não tem clientes registados',
    'no users in company' => 'Não há utilizadores nesta organização',
    'client dnx' => 'A organização cliente seleccionada não existe',
    'company dnx' => 'A organização seleccionado não existe',
    'user dnx' => 'O utilizador pedido não existe na base de dados',
    'avatar dnx' => 'O avatar não existe',
    'no current avatar' => 'Não há avatar carregado',
    'no current logo' => 'Não há logótipo carregado',
    'user not on project' => 'O utilizador seleccionado não está envolvido no projecto seleccionado',
    'company not on project' => 'A organização seleccionada não está envolvida no projecto seleccionado',
    'user cant be removed from project' => 'O utilizador seleccionado não pode ser removido do projecto',
    'tag dnx' => 'A etiqueta pedida não existe',
    'no tags used on projects' => 'Não há etiquetas usadas neste projecto',
    'no forms in project' => 'Não há formulário neste projecto',
    'project form dnx' => 'O formulário do projecto pedido não existe na base de dados',
    'related project form object dnx' => 'O objecto formulário relacionado não existe na base de dados',
    'no my tasks' => 'Não tem tarefas atribuídas',
    'no search result for' => 'Não há objectos que correspondam a "<strong>%s</strong>"',
    'no files on the page' => 'Não há arquivos nesta página',
    'folder dnx' => 'A pasta pedida não existe na base de dados',
    'define project folders' => 'Não há pastas neste projecto. Defina as pastas para continuar',
    'file dnx' => 'O arquivo pedido não existe na base de dados',
    'file revision dnx' => 'A revisão pedida não existe na base de dados',
    'no file revisions in file' => 'Arquivo inválido - não há revisões associadas a este arquivo',
    'cant delete only revision' => 'Você não pode apagar esta revisão. Cada arquivo deve ter pelo menos uma revisão armazenada',
    'config category dnx' => 'A categoria de configuração pedida não existe',
    'config category is empty' => 'A categoria de configuração selecionada está vazia',
    'email address not in use' => '%s não está em uso',
    'no attached files' => 'Não há arquivos anexados a este objeto',
    'file not attached to object' => 'O arquivo seleccionado não está anexado ao objecto seleccionado',
    'no files to attach' => 'Seleccione os arquivos que necessitam ser anexados',
    'no administration tools' => 'Não há ferramentas de administração registadas na base de dados',
    'administration tool dnx' => 'Ferramenta de administração "%s" não existe',
    
    // Success
    'success add project' => 'Projecto %s adicionado com sucesso',
    'success edit project' => 'Projecto %s actualizado com sucesso',
    'success delete project' => 'Projecto %s apagado com sucesso',
    'success complete project' => 'Projecto %s concluído com sucesso',
    'success open project' => 'Projecto %s reaberto com sucesso',
    
    'success add milestone' => 'Etapa \'%s\' criada com sucesso',
    'success edit milestone' => 'Etapa \'%s\' actualizada com sucesso',
    'success deleted milestone' => 'Etapa \'%s\' apagada com sucesso',
    
    'success add message' => 'Mensagem %s adicionada com sucesso',
    'success edit message' => 'Mensagem %s actualizada com sucesso',
    'success deleted message' => 'Mensagem \'%s\' e todos seus comentários apagados com sucesso',
    
    'success add comment' => 'Comentário enviado com sucesso',
    'success edit comment' => 'Comentário actualizado com sucesso',
    'success delete comment' => 'Comentário apagado com sucesso',
    
    'success add task list' => 'Lista de tarefas \'%s\' adicionada com sucesso',
    'success edit task list' => 'Lista de tarefas \'%s\' actualizada com sucesso',
    'success delete task list' => 'Lista de tarefas \'%s\' apagada com sucesso',
    
    'success add task' => 'Tarefa seleccionada adicionada com sucesso',
    'success edit task' => 'Tarefa seleccionada actualizada com sucesso',
    'success delete task' => 'Tarefa seleccionada apagada com sucesso',
    'success complete task' => 'Tarefa seleccionada concluída com sucesso',
    'success open task' => 'Tarefa seleccionada reaberta com sucesso',
    'success n tasks updated' => '%s tarefas actualizadas',
    
    'success add client' => 'Organização cliente %s adicionada com sucesso',
    'success edit client' => 'Organização cliente %s actualizada com sucesso',
    'success delete client' => 'Organização cliente %s apagada com sucesso',
    
    'success edit company' => 'Dados da organização actualizados com sucesso',
    'success edit company logo' => 'Logótipo da organização actualizado com sucesso',
    'success delete company logo' => 'Logótipo da organização apagado com sucesso',
    
    'success add user' => 'Utilizador %s adicionado com sucesso',
    'success edit user' => 'Utilizador %s actualizado com sucesso',
    'success delete user' => 'Utilizador %s removido com sucesso',
    
    'success update project permissions' => 'Permissões do projeto actualizadas com sucesso',
    'success remove user from project' => 'Utilizador removido do projecto com sucesso',
    'success remove company from project' => 'Organização removida do projecto com sucesso',
    
    'success update profile' => 'Perfil actualizado com sucesso',
    'success edit avatar' => 'Avatar actualizado com sucesso',
    'success delete avatar' => 'Avatar apagado com sucesso',
    
    'success hide welcome info' => 'Mensagem de boas-vindas ocultada com sucesso',
    
    'success complete milestone' => 'Etapa \'%s\' concluída com sucesso',
    'success open milestone' => 'Etapa \'%s\' reaberta com sucesso',
    
    'success subscribe to message' => 'Subscrição bem sucedida',
    'success unsubscribe to message' => 'Subscrição anulada com sucesso',
    
    'success add project form' => 'Formulário \'%s\' adicionado com sucesso',
    'success edit project form' => 'Formulário \'%s\' actualizado com sucesso',
    'success delete project form' => 'Form \'%s\' apagado com sucesso',
    
    'success add folder' => 'Pasta \'%s\' adicionada com sucesso',
    'success edit folder' => 'Pasta \'%s\' actualizada com sucesso',
    'success delete folder' => 'Pasta \'%s\' apagada com sucesso',
    
    'success add file' => 'Arquivo \'%s\' adicionado com sucesso',
    'success edit file' => 'Arquivo \'%s\' actualizado com sucesso',
    'success delete file' => 'Arquivo \'%s\' apagada com sucesso',
    
    'success edit file revision' => 'Revisão actualizada com sucesso',
    'success delete file revision' => 'Revisão apagada com sucesso',
    
    'success attach files' => '%s arquivo(s) anexados com sucesso',
    'success detach file' => 'Arquivo(s) desanexados com sucesso',
    
    'success update config category' => '%s valores de configuração actualizados',
    'success forgot password' => 'A sua senha foi enviada para o e-mail',
    
    'success test mail settings' => 'Teste de e-mail bem sucedido',
    'success massmail' => 'O e-mail foi enviado com sucesso',
    
    'success update company permissions' => 'Permissões da organização actualizadas com sucesso. %s registros actualizados',
    'success user permissions updated' => 'Permissões do utilizador actualizadas com sucesso',
    
    // Failures
    'error form validation' => 'Falha ao salvar objecto devido a propriedades inválidas',
    'error delete owner company' => 'A organização proprietária não pode ser apagada',
    'error delete message' => 'Falha ao apagar a mensagem seleccionada',
    'error update message options' => 'Falha ao actualizar opções da mensagem',
    'error delete comment' => 'Falha ao apagar o comentário seleccionado',
    'error delete milestone' => 'Falha ao apagar a etapa seleccionada',
    'error complete task' => 'Falha ao concluir a tarefa selecionada',
    'error open task' => 'Falha ao reabrir a tarefa seleccionada',
    'error upload file' => 'Falha ao carregar arquivo',
    'error delete project' => 'Falha ao apagar o projecto seleccionado',
    'error complete project' => 'Falha ao concluir o projecto seleccionado',
    'error open project' => 'Falha ao reabrir o projecto seleccionado',
    'error delete client' => 'Falha ao apagar cliente',
    'error delete user' => 'Falha ao apagar o utilizador seleccionado',
    'error update project permissions' => 'Falha ao actualizar permissões do projecto',
    'error remove user from project' => 'Falha ao remover utilizador do projecto',
    'error remove company from project' => 'Falha ao remover a organização do projecto',
    'error edit avatar' => 'Falha ao editar o avatar',
    'error delete avatar' => 'Falha ao apagar o avatar',
    'error hide welcome info' => 'Falha ao ocultar as boas-vindas',
    'error complete milestone' => 'Falha ao completar a etapa seleccionada',
    'error open milestone' => 'Falha ao reabrir a etapa seleccionada',
    'error file download' => 'Falha ao obter o arquivo específicado',
    'error attach file' => 'Falha ao anexar aquivo',
    'error edit company logo' => 'Falha ao actualizar o logótipo da organização',
    'error delete company logo' => 'Falha ao apagar o logótipo da organização',
    'error subscribe to message' => 'Falha ao subscrever a mensagem seleccionada',
    'error unsubscribe to message' => 'Falha ao apagar subscrição da mensagem seleccionada',
    'error add project form' => 'Falha ao adicionar formulário ao projecto',
    'error submit project form' => 'Falha ao submeter o formulário do projecto',
    'error delete folder' => 'Falha ao apagar a pasta seleccionada',
    'error delete file' => 'Falha ao apagar o arquivo seleccionado',
    'error delete file revision' => 'Falha ao apagar a revisão do arquivo',
    'error delete task list' => 'Falha ao apagar a lista de tarefas',
    'error delete task' => 'Falha ao apagar a tarefa seleccionada',
    'error check for upgrade' => 'Falha ao verificar nova versão',
    'error attach file' => 'Falha ao anexar o(s) arquivo(s)',
    'error detach file' => 'Falha ao desanexar o(s) arquivo(s)',
    'error attach files max controls' => 'Não é possível adicionar mais anexos. O limite é %s.',
    'error test mail settings' => 'Não foi possível enviar a mensagem de teste',
    'error massmail' => 'Não foi possível enviar o e-mail',
    'error owner company has all permissions' => 'A organização proprietária tem todas as permissões',
    
    // Access or data errors
    'no access permissions' => 'Não tem permissão para aceder à página requisitada',
    'invalid request' => 'Requisição inválida!',
    
    // Confirmation
    'confirm delete message' => 'Tem certeza que deseja apagar esta mensagem?',
    'confirm delete milestone' => 'Tem certeza que deseja apagar esta etapa?',
    'confirm delete task list' => 'Tem certeza que deseja apagar esta lista de tarefas e todas suas tarefas?',
    'confirm delete task' => 'Tem certeza que deseja apagar esta tarefa?',
    'confirm delete comment' => 'Tem certeza que deseja apagar este comentário?',
    'confirm delete project' => 'Tem certeza que deseja apagar este projecto e todos os dados relacionados (mensagens, tarefas, etapas, arquivos...)?',
    'confirm complete project' => 'Tem certeza que deseja marcar este projecto como concluído? Todas as acções do projeto serão bloqueadas',
    'confirm open project' => 'Tem certeza que deseja marcar este projecto como aberto? Todas as acções do projeto serão desbloqueadas',
    'confirm delete client' => 'Tem certeza que deseja apagar a organização cliente e todos os seus utilizadores?',
    'confirm delete user' => 'Tem certeza que deseja apagar esta conta de utilizador?',
    'confirm reset people form' => 'Tem certeza que deseja restaurar este formulário? Todas as alterações serão perdidas!',
    'confirm remove user from project' => 'Tem certeza que deseja remover este utilizador do projeto?',
    'confirm remove company from project' => 'Tem certeza que deseja remover esta organização do projecto?',
    'confirm logout' => 'Tem certeza que deseja sair?',
    'confirm delete current avatar' => 'Tem certeza que deseja apagar este avatar?',
    'confirm detach file' => 'Tem certeza que deseja desanexar este arquivo?',
    'confirm delete company logo' => 'Tem certeza que deseja apagar este logótipo?',
    'confirm subscribe' => 'Tem certeza que deseja subscrever esta mensagem? Receberá um e-mail a cada vez que alguém (excepto você) faz um comentário sobre esta mensagem.',
    'confirm unsubscribe' => 'Tem certeza que deseja apagar a subscrição?',
    'confirm delete project form' => 'Tem certeza que deseja apagar este formulário?',
    'confirm delete folder' => 'Tem certeza que deseja apagar esta pasta?',
    'confirm delete file' => 'Tem certeza que deseja apagar este arquivo?',
    'confirm delete revision' => 'Tem certeza que deseja apagar esta revisão?',
    'confirm reset form' => 'Tem certeza que deseja restaurar este formulário?',
    
    // Erros...
    'system error message' => 'Pedimos desculpa mas ocorreu um erro fatal durante a execução do seu pedido. Foi enviada uma mensagem informando o administrador da ocorrência.',
    'execute action error message' => 'Pedimos desculpa mas o ProjectPier não está apto a executar o seu pedido. Foi enviada uma mensagem informando o administrador da ocorrência.',
    
    // Log
    'log add projectmessages' => '\'%s\' adicionada',
    'log edit projectmessages' => '\'%s\' actualizada',
    'log delete projectmessages' => '\'%s\' apagada',
    
    'log add comments' => '%s adicionado',
    'log edit comments' => '%s actualizado',
    'log delete comments' => '%s apagado',
    
    'log add projectmilestones' => '\'%s\' adicionado',
    'log edit projectmilestones' => '\'%s\' actualizado',
    'log delete projectmilestones' => '\'%s\' apagado',
    'log close projectmilestones' => '\'%s\' concluído',
    'log open projectmilestones' => '\'%s\' reaberto',
    
    'log add projecttasklists' => '\'%s\' adicionada',
    'log edit projecttasklists' => '\'%s\' actualizada',
    'log delete projecttasklists' => '\'%s\' apagada',
    'log close projecttasklists' => '\'%s\' concluído',
    'log open projecttasklists' => '\'%s\' aberta',
    
    'log add projecttasks' => '\'%s\' adicionada',
    'log edit projecttasks' => '\'%s\' actualizada',
    'log delete projecttasks' => '\'%s\' apagada',
    'log close projecttasks' => '\'%s\' fechada',
    'log open projecttasks' => '\'%s\' aberta',
    
    'log add projectforms' => '\'%s\' adicionado',
    'log edit projectforms' => '\'%s\' actualizado',
    'log delete projectforms' => '\'%s\' apagado',
    
    'log add projectfolders' => '\'%s\' adicionada',
    'log edit projectfolders' => '\'%s\' actualizada',
    'log delete projectfolders' => '\'%s\' apagada',
    
    'log add projectfiles' => '\'%s\' adicionado',
    'log edit projectfiles' => '\'%s\' actualizado',
    'log delete projectfiles' => '\'%s\' apagado',
    
    'log edit projectfilerevisions' => '%s actualizada',
    'log delete projectfilerevisions' => '%s apagada',
  
  ); // array

?>