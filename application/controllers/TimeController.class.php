<?php

  /**
  * Time controller
  *
  * @package Taus.application
  * @subpackage controller
  * @version 1.0
  * @http://www.projectpier.org/
  */
  class TimeController extends ApplicationController {
  
    /**
    * Construct the TimeController
    *
    * @access public
    * @param void
    * @return TimeController
    */
    function __construct() {
      parent::__construct();
      prepare_company_website_controller($this, 'project_website');
    } // __construct
    
    /**
    * List all time in specific (this) project
    *
    * @access public
    * @param void
    * @return null
    */
    function index() {
      $this->addHelper('textile');
      $project = active_project();
      
      tpl_assign('times', $project->getTimes());
      
      $this->setSidebar(get_template_path('index_sidebar', 'time'));
    } // index

    /**
    * Show view time page
    *
    * @access public
    * @param void
    * @return null
    */
    function view() {
      $this->addHelper('textile');

      $time = ProjectTimes::findById(get_id());
      if(!($time instanceof ProjectTime)) {
        flash_error(lang('time dnx'));
        $this->redirectTo('time', 'index');
      } // if

      if(!$time->canView(logged_user())) {
        flash_error(lang('no access permissions'));
        $this->redirectToReferer(get_url('time'));
      } // if

      tpl_assign('time', $time);
    } // view
    
    /**
    * Process add time form
    *
    * @access public
    * @param void
    * @return null
    */
    function add() {
      $this->setTemplate('add_time');
      
      if(!ProjectTime::canAdd(logged_user(), active_project())) {
        flash_error(lang('no access permissions'));
        $this->redirectToReferer(get_url('time'));
      } // if
      
      $time_data = array_var($_POST, 'time');
      if(!is_array($time_data)) {
	  $user = logged_user();
	  $time_data = array(
			     'done_date' => DateTimeValueLib::now(),
			     'is_billable' => true,
			     'is_private' => true,
			     'assigned_to' => logged_user()->getCompanyId() . ":" . logged_user()->getId()
			     ); // array
      } // if
      $time = new ProjectTime();
      tpl_assign('time_data', $time_data);
      tpl_assign('time', $time);
      
      if(is_array(array_var($_POST, 'time'))) {
        $time_data['done_date'] = DateTimeValueLib::make(0, 0, 0, array_var($_POST, 'time_done_date_month', 1), array_var($_POST, 'time_done_date_day', 1), array_var($_POST, 'time_done_date_year', 1970));
        
        $assigned_to = explode(':', array_var($time_data, 'assigned_to', ''));
        
        $time->setFromAttributes($time_data);
	if(!logged_user()->isMemberOfOwnerCompany()) $time->setIsPrivate(false);
        
        $time->setProjectId(active_project()->getId());
        $time->setAssignedToCompanyId(array_var($assigned_to, 0, 0));
        $time->setAssignedToUserId(array_var($assigned_to, 1, 0));
        
        try {
          DB::beginWork();
          
          $time->save();
          ApplicationLogs::createLog($time, active_project(), ApplicationLogs::ACTION_ADD);
          
          DB::commit();
          
          flash_success(lang('success add time', $time->getName()));
          $this->redirectTo('time');
          
        } catch(Exception $e) {
          DB::rollback();
          tpl_assign('error', $e);
        } // try
      } // if
    } // add
    
    /**
    * Show and process edit time form
    *
    * @access public
    * @param void
    * @return null
    */
    function edit() {
      $this->setTemplate('add_time');
      
      $time = ProjectTimes::findById(get_id());
      if(!($time instanceof ProjectTime)) {
        flash_error(lang('time dnx'));
        $this->redirectTo('time', 'index');
      } // if
      
      if(!$time->canEdit(logged_user())) {
        flash_error(lang('no access permissions'));
        $this->redirectToReferer(get_url('time'));
      }
      
      $time_data = array_var($_POST, 'time');
      if(!is_array($time_data)) {
        $time_data = array(
          'name'        => $time->getName(),
          'hours'        => $time->getHours(),
          'is_billable'  => $time->getBillable(),
          'done_date'    => $time->getDoneDate(),
          'description' => $time->getDescription(),
          'assigned_to' => $time->getAssignedToCompanyId() . ':' . $time->getAssignedToUserId(),
          'is_private'  => $time->isPrivate(),
        ); // array
      } // if
      
      tpl_assign('time_data', $time_data);
      tpl_assign('time', $time);
      
      if(is_array(array_var($_POST, 'time'))) {
        $old_owner = $time->getAssignedTo(); // remember the old owner
        $time_data['done_date'] = DateTimeValueLib::make(0, 0, 0, array_var($_POST, 'time_done_date_month', 1), array_var($_POST, 'time_done_date_day', 1), array_var($_POST, 'time_done_date_year', 1970));
        
        $assigned_to = explode(':', array_var($time_data, 'assigned_to', ''));
        
        $old_is_private  = $time->isPrivate();
        $time->setFromAttributes($time_data);
        if(!logged_user()->isMemberOfOwnerCompany()) $time->setIsPrivate($old_is_private);
        
        $time->setProjectId(active_project()->getId());
        $time->setAssignedToCompanyId(array_var($assigned_to, 0, 0));
        $time->setAssignedToUserId(array_var($assigned_to, 1, 0));
        
        try {
          DB::beginWork();
          $time->save();
          
          ApplicationLogs::createLog($time, active_project(), ApplicationLogs::ACTION_EDIT);
          DB::commit();
          
          flash_success(lang('success edit time', $time->getName()));
          $this->redirectTo('time');
          
        } catch(Exception $e) {
          DB::rollback();
          tpl_assign('error', $e);
        } // try
      } // if
    } // edit
    
    /**
    * Delete single time
    *
    * @access public
    * @param void
    * @return null
    */
    function delete() {
      $time = ProjectTimes::findById(get_id());
      if(!($time instanceof ProjectTime)) {
        flash_error(lang('time dnx'));
        $this->redirectTo('time');
      } // if
      
      if(!$time->canDelete(logged_user())) {
        flash_error(lang('no access permissions'));
        $this->redirectToReferer(get_url('time'));
      } // if
      
      try {
        
        DB::beginWork();
        $time->delete();
        ApplicationLogs::createLog($time, $time->getProject(), ApplicationLogs::ACTION_DELETE);
        DB::commit();
        
        flash_success(lang('success deleted time', $time->getName()));
      } catch(Exception $e) {
        DB::rollback();
        flash_error(lang('error delete time'));
      } // try
      
      $this->redirectTo('time');
    } // delete
    
  } // TimeController

?>