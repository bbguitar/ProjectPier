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
<?php echo lang('milestone assigned', $milestone_assigned->getName()) ?>.
<?php
/* Send the milestone body unless the configuration file specifically says not to:
** to prevent sending the body of email messages add the following to config.php
** For config.php:  define('SHOW_MILESTONE_BODY', false);
*/
if ((!defined('SHOW_MILESTONE_BODY')) or (SHOW_MILESTONE_BODY == true)) {
  echo "\n----------------\n";
  echo $milestone->getDescription();
  echo "\n----------------\n\n";
}
?> <?php echo lang('view assigned milestones') ?>: -
<?php echo str_replace('&amp;', '&', $milestone_assigned->getViewUrl()) ?>
Company: <?php echo owner_company()->getName() ?> Project:
<?php echo $milestone_assigned->getProject()->getName() ?> --
<?php echo ROOT_URL ?>
</body>
</html>
