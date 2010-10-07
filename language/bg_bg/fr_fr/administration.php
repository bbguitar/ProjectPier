<?php

  return array(
  
    // ---------------------------------------------------
    //  Administration tools
    // ---------------------------------------------------
    
    'administration tool name test_mail_settings' => 'Tester les paramètres de messagerie électronique',
    'administration tool desc test_mail_settings' => 'Utiliser cet outil pour envoyer des emails de test et vérifier si le moteur de messagerie d\'activecollab est bien configuré',
    'administration tool name mass_mailer' => 'Envoi en masse',
    'administration tool desc mass_mailer' => 'Cet outil permet d\'envoyer un message en texte brut à un groupe d\'utilisateurs enregistrés dans le système',
  
    // ---------------------------------------------------
    //  Configuration categories and options
    // ---------------------------------------------------
  
    'configuration' => 'Configuration',
    
    'mail transport mail()' => 'PHP',
    'mail transport smtp' => 'Serveur SMTP',
    
    'secure smtp connection no'  => 'Non',
    'secure smtp connection ssl' => 'Oui, utiliser SSL',
    'secure smtp connection tls' => 'Oui, utiliser TLS',
    
    'file storage file system' => 'Système de fichiers',
    'file storage mysql' => 'Base de données (MySQL)',
    
    // Categories
    'config category name general' => 'Général',
    'config category desc general' => 'Paramètres généraux d\'activeCollab',
    'config category name mailing' => 'Messagerie électronique',
    'config category desc mailing' => 'Ces paramètres permettent de définir comment activeCollab doit gérer l\'envoi d\'emails. Vous pouvez modifier les options de configuration présentes dans votre fichier php.ini ou paramétrer l\'utilisation d\'un serveur SMTP.',
    
    // ---------------------------------------------------
    //  Options
    // ---------------------------------------------------
    
    // General
    'config option name site_name' => 'Nom du site',
    'config option desc site_name' => 'Le nom du site apparaît sur la page tableau de bord.',
    'config option name file_storage_adapter' => 'Stockage de fichiers',
    'config option desc file_storage_adapter' => 'Selectionnez l\'endroit où vous voulez stocker les pièces jointes, les avatars, les logos et tous les documents uploadés. <strong>Le stockage dans la base de données est recommandé</strong>.',
    'config option name default_project_folders' => 'Dossiers par défaut',
    'config option desc default_project_folders' => 'Dossiers à créer avec le projet. Chaque nom de dossier doit figurer sur une nouvelle ligne. Les doublons ou les lignes vides seront ignorés.',
    'config option name theme' => 'Thème',
    'config option desc theme' => 'En changeant de thème, vous pouvez changer le look d\'activeCollab.',
    
    // activeCollab.com
    'config option name upgrade_check_enabled' => 'Activer la vérification de mise à jour d\'activeCollab',
    'config option desc upgrade_check_enabled' => 'Si vous sélectionnez "Oui", le système ira vérifier chaque jour s\'il existe une nouvelle version d\'activeCollab à télécharger.',
    
    // Mailing
    'config option name exchange_compatible' => 'Compatiblité avec Microsoft Exchange',
    'config option desc exchange_compatible' => 'Si vous utilisez Microsoft Exchange Server règlez cette option à "Oui" pour éviter les problèmes connus.',
    'config option name mail_transport' => 'Transport messagerie électronique',
    'config option desc mail_transport' => 'Vous pouvez utiliser les paramètres PHP ou indiquer un serveur SMTP pour envoyer les messages électroniques.',
    'config option name smtp_server' => 'Serveur SMTP',
    'config option name smtp_port' => 'Port SMTP',
    'config option name smtp_authenticate' => 'Utiliser l\'authentification SMTP',
    'config option name smtp_username' => 'Utilisateur SMTP',
    'config option name smtp_password' => 'Mot de passe SMTP',
    'config option name smtp_secure_connection' => 'Utiliser une connexion SMTP sécurisée',
    
  ); // array

?>
