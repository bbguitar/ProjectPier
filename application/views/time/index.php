<?php

set_page_title(lang('time'));
project_tabbed_navigation(PROJECT_TAB_TIME);
project_crumbs(lang('time'));
if(ProjectTime::canAdd(logged_user(), active_project()))
{
	add_page_action(lang('add time'), get_url('time', 'add'));
} // if

add_stylesheet_to_page('project/time.css');
?>
<?php
if($times) {
	echo <<<TABSTART
<div id="time">

<table class="timeLogs blank">
	<tr>
		<th>Date</th>
		<th>Name</th>
		<th>Details</th>
		<th>Hours</th>
		<th></th>
	</tr>
TABSTART;

	foreach($times as $time) {
		
		$this->assign('time', $time);

		if($time->isToday())
		{
			echo '<tr class="timeToday">';
		} elseif($time->isYesterday()) {
			echo '<tr class="timeYesterday">' ;
		} else {
			echo '<tr class="timeOlder">';
			
		}
		echo '<td class="timeDate">';
		if($time->getDoneDate()->getYear() > DateTimeValueLib::now()->getYear()) {
				echo format_date($time->getDoneDate(), null, 0);  } else {
					echo format_descriptive_date($time->getDoneDate(), 0) ; }
					echo '</td><td class="timeUser">';
					if($time->getAssignedTo() instanceof ApplicationDataObject) {
						echo clean($time->getAssignedTo()->getObjectName());  }
						echo '</td><td class="timeDetails"><a href="' . $time->getViewUrl() .'">';
						echo clean($time->getName()) . '</a></td>';
						echo '<td class="timeHours">'. $time->getHours() . '</td>';
						echo '<td class="timeEdit">';
						$options = array();
						if($time->canEdit(logged_user())) $options[] = '<a href="' . $time->getEditUrl() . '">' . lang('edit') . '</a>';
						if($time->canDelete(logged_user())) $options[] = '<a href="' . $time->getDeleteUrl() . '" onclick="return confirm(\'' . lang('confirm delete time') . '\')">' . lang('delete') . '</a>';
				  if(count($options)) {  echo implode(' | ', $options); }
				  echo "</td></tr>";

		}
		echo "</table></div>";

	} else {  echo '<p>'. clean(lang('no time records in project')) . '</p>';
	}
