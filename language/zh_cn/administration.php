<?php

  return array(
  
    // ---------------------------------------------------
    //  Administration tools
    // ---------------------------------------------------
    
    'administration tool name test_mail_settings' => '测试邮件设置',
    'administration tool desc test_mail_settings' => '测试邮件发送功能的设置是否正确',
    'administration tool name mass_mailer' => '邮件群发',
    'administration tool desc mass_mailer' => '同时给多个用户发送邮件',
  
    // ---------------------------------------------------
    //  Configuration categories and options
    // ---------------------------------------------------
  
    'configuration' => '配置',
    
    'mail transport mail()' => '默认PHP设置',
    'mail transport smtp' => 'SMTP服务器',
    
    'secure smtp connection no'  => '不使用',
    'secure smtp connection ssl' => '使用SSL',
    'secure smtp connection tls' => '使用TLS',
    
    'file storage file system' => '文件系统',
    'file storage mysql' => '数据库(MySQL)',
    
    // Categories
    'config category name general' => '常规',
    'config category desc general' => '常规设置',
    'config category name mailing' => '邮件',
    'config category desc mailing' => '配置电子邮件发送设置，可以使用php.ini中的配置或其他SMTP服务器',
    
    // ---------------------------------------------------
    //  Options
    // ---------------------------------------------------
    
    // General
    'config option name site_name' => '站点名称',
    'config option desc site_name' => '主面板显示的站点名称。',
    'config option name file_storage_adapter' => '文件存储',
    'config option desc file_storage_adapter' => '配置附件、头像和其他上传文档的存储位置，<strong>建议选择数据库存储</strong>。',
    'config option name default_project_folders' => '默认文件夹',
    'config option desc default_project_folders' => '创建一个新项目时自动建立的文件夹。每个文件夹单独占一行，重复或空白行将被忽略。',
    'config option name theme' => '主题',
    'config option desc theme' => '使用主题改变默认的外观和风格。',
    
    // activeCollab.com
    'config option name upgrade_check_enabled' => '允许升级检测',
    'config option desc upgrade_check_enabled' => '如果选择允许，系统每天自动检测一次是否存在可供下载的新版本',
    
    // Mailing
    'config option name exchange_compatible' => '微软Exchange兼容模式',
    'config option desc exchange_compatible' => '如果您使用微软Exchange Server，请选择本项以避免某些邮件发送问题。',
    'config option name mail_transport' => '邮件发送',
    'config option desc mail_transport' => '您可以使用默认PHP设置或指定SMTP服务器用以发送邮件。',
    'config option name smtp_server' => 'SMTP服务器',
    'config option name smtp_port' => 'SMTP端口',
    'config option name smtp_authenticate' => '使用SMTP认证',
    'config option name smtp_username' => 'SMTP用户名',
    'config option name smtp_password' => 'SMTP密码',
    'config option name smtp_secure_connection' => '使用安全SMTP连接',
    
  ); // array

?>