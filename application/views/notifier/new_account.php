<?php echo lang('hi john doe', $new_account->getDisplayName()) ?>
<!DOCTYPE html PUBLIC "-//W3C//DTD HTML 3.2//EN">
<html>
<head>
<meta name="generator" content=
"HTML Tidy for Mac OS X (vers 31 October 2006 - Apple Inc. build 13), see www.w3.org">
<title></title>
</head>
<body>
,
<?php echo lang('user created your account', $new_account->getCreatedByDisplayName()) ?>.
<?php echo lang('visit and login', ROOT_URL) ?>:
<?php echo lang('username') ?>:
<?php echo $new_account->getUsername() ?>
<?php echo lang('password') ?>: <?php echo $raw_password ?> --
<?php echo ROOT_URL ?>
</body>
</html>
