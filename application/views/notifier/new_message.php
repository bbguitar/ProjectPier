<!DOCTYPE html PUBLIC "-//W3C//DTD HTML 4.01 Transitional//EN">
<html lang="en">
<head>
<meta name="generator" content=
"HTML Tidy for Mac OS X (vers 31 October 2006 - Apple Inc. build 13), see www.w3.org">
<meta http-equiv="Content-Type" content=
"text/html; charset=us-ascii">
<title>Template 2 - Single Column</title>

<style type="text/css" media="screen">
      body {
         background-color: #f5f6f4;
         margin: 0;
         padding: 0;
      }

      a img {
         border: none;
      }

      a {
         border: none;
      }

      td.permission {
         padding: 30px 0 10px 0;
      }

      .permission {
         font-family: 'Lucida Grande';
         font-size: 10px;
         color: #666666;
         padding: 4px 0 4px 0;
      }

      .permission a {
         color: #333333;
      }

      .permission p {
         margin: 0 0 4px 0;
      }

      .header {
         background-color: #353535;
      }

      .header h1 {
       font-family: Georgia;
       font-size: 32px;
       font-weight: normal;
       color: #bfbfbf;
       display: inline;
       text-align: left;}

      .date h3 {
       font-family: Georgia;
       font-size: 14px;
       color: #bfbfbf;
       font-weight: normal;
       text-align: right;
       display: inline;
       font-style: italic;
      }

      .body {
         background-color: #ffffff;
      }

      td.sidebar {
       padding: 22px 0 0 0;
      }

      .sidebar h2 {
         font-family: Georgia;
         font-size: 18px;
         font-weight: bold;
         color: #808080;
         margin: 0 0 6px 4px;
         padding: 0;
         text-align: left;
      }

      .sidebar h2.issue {
         color: #000000;
         margin: 0 0 10px 10px;
      }

      .sidebar ul {
         font-family: Georgia;
         font-size: 12px;
         color: #2679b9;
         margin: 0 0 0 24px;
         padding: 0;
         text-align: left;
      }

      .sidebar ul a {
       font-family: Georgia;
       font-size: 12px;
       color: #2679b9;
       font-style: italic;
      }
      .sidebar ul li {
       margin: 0 0 10px 0;
      }
      .sidebar p {
         font-family: 'Lucida Grande';
         font-size: 11px;
         color: #5f5f5f;
         padding: 0;
         margin: 0 0 10px 0;
         text-align: left;
      }

      td.sidebg {
         background-color: #f1f1f1;
         padding: 10px 16px 10px 16px;
      }

      td.mainbar {
       padding: 22px 0 0 14px;
       text-align: left;
      }

      .mainbar p {
       font-family: 'Lucida Grande';
       font-size: 12px;
       color: #333333;
       margin: 0 0 10px 0;
       text-align: left;
      }

      .mainbar p.first {
       margin-top: 10px;
      }

      .mainbar h2 {
       font-family: 'Lucida Grande';
       font-size: 16px;
       color: #000000;
       text-transform: uppercase;
       margin: 10px 0 16px 0;
      }

      .mainbar h2 a {
       font-family: 'Lucida Grande';
       font-size: 16px;
       color: #000000;
       text-transform: uppercase;
       text-decoration: none;
       font-style: normal;
      }

      .mainbar a {
       font-family: Georgia;
       font-size: 13px;
       color: #2679b9;
       font-style: italic;
      }

      .mainbar a.center {
       font-size: 12px;
       text-align: center;
       display: block;
       color: #999999;
       padding: 8px 0 12px 0;
       text-decoration: none;
      }

      .mainbar img.inline {
       border: 1px solid #dedede;
       padding: 4px;
      }

      td.footer {
       padding: 0 0 10px 0;
       border-top: 2px solid #ededed;
      }

      .footer p {
       color: #a1a1a1;
       font-size: 11px;
       margin: 0;
       padding: 0;
      }

      .footer p.first {
       margin: 14px 0 0 0;
      }

      .footer a {
       font-family: 'Lucida Grande';
       font-size: 11px;
       color: #2679b9;
      }
</style>
</head>
<body>
<a name="top" id="top"></a>
<table width="100%" cellspacing="0" cellpadding="0" bgcolor=
"#F5F6F4">
<tr>
<td align="center">
<table width="600" cellspacing="0" cellpadding="0">
<tr>
<td height="77" align="left" class="header">
<table width="600" border="0" cellspacing="0" cellpadding="0">
<tr>
<td style="padding: 15px;">
<h1>Project Pier Testing</h1>
</td>
</tr>
</table>
</td>
</tr>
</table>
</td>
</tr>
<tr>
<td align="center">
<table width="600" cellspacing="10" cellpadding="0" class="body">
<tr>
<td align="center" valign="top" class="mainbar">
<p>Hi ,<br>
<br>
A new message has been posted on the project Pier website</p>
<br>
<hr>
<?php
/* Send the message body unless the configuration file specifically says not to:
 ** to prevent sending the body of email messages add the following to config.php
 ** For config.php:  define('SHOW_MESSAGE_BODY', false);
 */
if ((!defined('SHOW_MESSAGE_BODY')) or (SHOW_MESSAGE_BODY == true)) {
       
       echo $new_message->getText();
}
?>
<hr>
<?php echo lang('new message posted', $new_message->getTitle(), $new_message->getProject()->getName()) ?>
<hr>
<?php echo lang('view new message') ?>
<hr>
<?php echo str_replace('&amp;', '&', $new_message->getViewUrl()) ?>
<hr>
<?php echo owner_company()->getName() ?>Project:
<?php echo $new_message->getProject()->getName() ?> --
<p class="first">Pellentesque mi. Ut gravida metus vel odio.
Pellentesque habitant morbi tristique senectus et netus et
malesuada fames ac turpis egestas. Etiam lacinia turpis et quam. In
luctus massa eget enim.</p>
<p>Suspendisse diam felis, tristique sed, sagittis at, interdum a,
sem. Lorem ipsum dolor sit amet, consectetuer adipiscing elit.
Curabitur augue lacus, luctus sit amet, dictum sit amediam.
<a href="#">Read more &raquo;</a></p>
<a href="#top" class="center">Back to top^</a></td>
</tr>
<tr>
<td align="center">
<table width="560" border="0" cellspacing="0" cellpadding="0">
<tr>
<td class="footer" align="left">
<p class="first"><?php echo lang('dont reply wraning') ?><br>
Project Pier Test<span style=
"color: #000000;"><?php echo ROOT_URL ?></span>.</p>
&lt;&lt;/p&gt;</td>
</tr>
</table>
</td>
</tr>
</table>
</td>
</tr>
</table>
: - <?php echo owner_company()->getName() ?> Project:
<?php echo $new_message->getProject()->getName() ?> --
<?php echo ROOT_URL ?>
</body>
</html>
