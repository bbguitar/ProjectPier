<?php

  return array(
  
    // ---------------------------------------------------
    //  Administration tools
    // ---------------------------------------------------
    
    'administration tool name test_mail_settings' => 'Teste das configurações E-mail',
    'administration tool desc test_mail_settings' => 'Use esta ferramenta para enviar e-mails de teste que verficam se o ProjectPier está configurado correctamente',
    'administration tool name mass_mailer' => 'Mensagens em massa',
    'administration tool desc mass_mailer' => 'Ferramenta que permite enviar mensagens a qualquer grupo de utilizadores registrados no sistema',
  
    // ---------------------------------------------------
    //  Configuration categories and options
    // ---------------------------------------------------
  
    'configuration' => 'Configuração',
    
    'mail transport mail()' => 'Configurações padrões do PHP',
    'mail transport smtp' => 'Servidor de SMTP',
    
    'secure smtp connection no'  => 'Não',
    'secure smtp connection ssl' => 'Sim, use SSL',
    'secure smtp connection tls' => 'Sim, use TLS',
    
    'file storage file system' => 'Sistema de arquivos',
    'file storage mysql' => 'Base de dados (MySQL)',
    
    // Categories
    'config category name general' => 'Geral',
    'config category desc general' => 'Configurações gerais do ProjectPier',
    'config category name mailing' => 'Correio Electrónico',
    'config category desc mailing' => 'Use este conjunto de configurações para que o ProjectPier possa enviar e-mail. Pode usar as opções de configuração fornecidas pelo seu php.ini ou configurá-lo para usar um outro servidor SMTP',
    
    // ---------------------------------------------------
    //  Options
    // ---------------------------------------------------
    
    // General
    'config option name site_name' => 'Nome do sítio',
    'config option desc site_name' => 'O nome do sítio será apresentado no Quadro',
    'config option name file_storage_adapter' => 'Armazenamento de arquivos',
    'config option desc file_storage_adapter' => 'Seleccione onde deseja armazenar os anexos, avatars, logótipos e qualquer outro documento carregado. <strong>O sistema de base de dados é recomendado</strong>.',
    'config option name default_project_folders' => 'Pastas padrão',
    'config option desc default_project_folders' => 'Pastas que serão criadas quando o projecto é criado. Um nome de pasta por linha. Linhas duplicadas ou vazias serão ignoradas',
    'config option name theme' => 'Tema',
    'config option desc theme' => 'Ao usar temas pode alterar o aspecto padrão do ProjectPier',
    
    // activeCollab.com
    'config option name upgrade_check_enabled' => 'Permitir a verificação de actualizações',
    'config option desc upgrade_check_enabled' => 'Se "Sim" o sistema verifica, uma vez por dia, se existem novas versões do ProjectPier disponíveis para download',
    
    // Mailing
    'config option name exchange_compatible' => 'Modo de compatibilidade com o Microsoft Exchange',
    'config option desc exchange_compatible' => 'Se usar o Microsoft Exchange Server e marcar esta opção com "Sim" evitará problemas conhecidos.',
    'config option name mail_transport' => 'Transporte de email',
    'config option desc mail_transport' => 'Pode usar as configurações do PHP para enviar mensagens ou especificar um servidor SMTP',
    'config option name smtp_server' => 'Servidor SMTP',
    'config option name smtp_port' => 'Porta SMTP',
    'config option name smtp_authenticate' => 'Use autenticação SMTP',
    'config option name smtp_username' => 'Login do SMTP',
    'config option name smtp_password' => 'Senha do SMTP',
    'config option name smtp_secure_connection' => 'Use conexão SMTP segura',
    
  ); // array

?>