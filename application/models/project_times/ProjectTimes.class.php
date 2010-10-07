<?php

  /**
  * ProjectTimes
  * Generated on Sat, 04 Mar 2006 12:50:11 +0100 by DataObject generation tool
  * @http://www.projectpier.org/
  */
  class ProjectTimes extends BaseProjectTimes {
  
    /**
    * Return all times that are assigned to the user
    *
    * @param User $user
    * @return array
    */
    static function getTimeByUser(User $user) {
      $projects = $user->getActiveProjects();
      if(!is_array($projects) || !count($projects)) {
        return null;
      } // if
      
      $project_ids = array();
      foreach($projects as $project) {
        $project_ids[] = $project->getId();
      } // foreach
      
      return self::findAll(array(
        'conditions' => array('(`assigned_to_user_id` = ? OR (`assigned_to_user_id` = ? AND `assigned_to_company_id` = ?)) AND `project_id` IN (?)', $user->getId(), 0, 0, $project_ids),
        'order' => '`done_date`'
      )); // findAll
    } // getTimeByUser
    
    /**
    * Return times that are assigned to the specific user and belongs to specific project
    *
    * @param User $user
    * @param Project $project
    * @return array
    */
    static function getTimeByUserAndProject(User $user, Project $project) {
      return self::findAll(array(
        'conditions' => array('(`assigned_to_user_id` = ? OR (`assigned_to_user_id` = ? AND `assigned_to_company_id` = ?)) AND `project_id` = ?', $user->getId(), 0, 0, $project->getId()),
        'order' => '`done_date`'
      )); // findAll
    } // getTimeByUserAndProject
    
  } // ProjectTimes

?>
