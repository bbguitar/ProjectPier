<!DOCTYPE html PUBLIC "-//W3C//DTD HTML 3.2//EN">
<html>
<head>
<meta name="generator" content=
"HTML Tidy for Mac OS X (vers 31 October 2006 - Apple Inc. build 13), see www.w3.org">
<title></title>
</head>
<body>
------------------------------------------------------------
<?php echo lang('dont reply wraning') ?>
------------------------------------------------------------
<?php echo lang('new comment posted', $new_comment->getObject()->getTitle()) ?>.
<?php
/* Send the comment body unless the configuration file specifically says not to:
** to prevent sending the body of email messages add the following to config.php
** For config.php:  define('SHOW_COMMENT_BODY', false);
*/
if ((!defined('SHOW_COMMENT_BODY')) or (SHOW_COMMENT_BODY == true)) {
  echo "\n----------------\n";
  echo $new_comment->getText();
  echo "\n----------------\n\n";
}
?> <?php echo lang('view new comment') ?>: -
<?php echo str_replace('&amp;', '&', $new_comment->getViewUrl()) ?>
<?php echo lang('company') ?>:
<?php echo owner_company()->getName() ?>
<?php echo lang('project') ?>:
<?php echo $new_comment->getProject()->getName() ?>
<?php echo lang('author') ?>:
<?php echo $new_comment->getCreatedByDisplayName() ?> --
<?php echo ROOT_URL ?>
</body>
</html>
