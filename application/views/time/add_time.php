<?php 

  set_page_title($time->isNew() ? lang('add time') : lang('edit time'));
  project_tabbed_navigation(PROJECT_TAB_TIME);
	if($time->isNew()) {
  	project_crumbs(lang('add time'));
	} else {
  	project_crumbs(lang('edit time'));
	}
  
?>
<?php if($time->isNew()) { ?>
<form action="<?php echo get_url('time', 'add') ?>" method="post">
<?php } else { ?>
<form action="<?php echo $time->getEditUrl() ?>" method="post">
<?php } // if ?>

<?php tpl_display(get_template_path('form_errors')) ?>

  <div>
    <?php echo label_tag(lang('name'), 'timeFormName', true) ?>
    <?php echo text_field('time[name]', array_var($time_data, 'name'), array('class' => 'long', 'id' => 'timeFormName')) ?>
  </div>

  <div>
    <?php echo label_tag(lang('hours'), 'timeFormHours', true) ?>
    <?php echo text_field('time[hours]', array_var($time_data, 'hours'), array('class' => 'short', 'id' => 'timeFormHours')) ?>
  </div>
  
  <div>
    <?php echo label_tag(lang('description'), 'timeFormDesc') ?>
    <?php echo textarea_field('time[description]', array_var($time_data, 'description'), array('class' => 'short', 'id' => 'timeFormDesc')) ?>
  </div>
  
  <div>
    <?php echo label_tag(lang('done date'), null, true) ?>
    <?php echo pick_date_widget('time_done_date', array_var($time_data, 'done_date')) ?>
  </div>
  
<?php if(logged_user()->isMemberOfOwnerCompany()) { ?>
  <div class="formBlock">
    <label><?php echo lang('private time') ?>: <span class="desc">(<?php echo lang('private time desc') ?>)</span></label>
    <?php echo yes_no_widget('time[is_private]', 'timeFormIsPrivate', array_var($time_data, 'is_private'), lang('yes'), lang('no')) ?>
  </div>
  <div class="formBlock">
    <label><?php echo lang('billable time') ?>:</label>
    <?php echo yes_no_widget('time[is_billable]', 'timeFormIsBillable', array_var($time_data, 'is_billable'), lang('yes'), lang('no')) ?>
  </div>
<?php } // if ?>
  
  <div class="formBlock">
    <div>
      <?php echo label_tag(lang('assign to'), 'timeFormAssignedTo') ?>
      <?php echo assign_to_select_box('time[assigned_to]', active_project(), array_var($time_data, 'assigned_to'), array('id' => 'timeFormAssignedTo')) ?>
    </div>
  </div>
  
  <?php echo submit_button($time->isNew() ? lang('add time') : lang('edit time')) ?>
</form>
