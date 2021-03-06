<?php

  set_page_title(lang('tags'));
  project_tabbed_navigation(PROJECT_TAB_TAGS);
  project_crumbs(lang('tags'));

?>
<?php if (isset($tag_names) && is_array($tag_names) && count($tag_names)) { ?>
<p><?php echo lang('tags used on projects') ?>:</p>
<ul>
<?php foreach ($tag_names as $tag_name) { ?>
  <li><a href="<?php echo active_project()->getTagUrl($tag_name) ?>"><?php echo clean($tag_name) ?></a> <span class="desc"> - <?php echo lang('number of tagged objects', active_project()->countObjectsByTag($tag_name)) ?></span></li>
<?php } // foreach ?>
</ul>
<?php } else { ?>
<p><?php echo lang('no tags used on projects') ?></p>
<?php } // if ?>
