<?php

require 'IView.php';
require 'Model.php';

class ListView implements IView {

    private $model;

    public function __construct() {
        $this->model = new Model();
    }
    
    /**
     * 
     * returns HTML-List auf Tasks
     * 
     * @return string
     */    
    public function getTasks() {
        $htmlList = '<ul>';
        $taskList = $this->model->getTaskList();
        foreach ($taskList as $task) {
            $htmlList = $htmlList . '<li>' . $task->getText() . '</li>';
        }
        $htmlList = $htmlList . '</ul>';
        return $htmlList;
    }

}
