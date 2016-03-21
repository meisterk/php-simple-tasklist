<?php

require 'View.php';

class ListView implements View {

    private $model;    

    public function __construct(Model $model) {
        $this->model = $model;
    }

    private function getTasksAsHTMLList() {
        $htmlList = '<ul>';
        $taskList = $this->model->getTaskList();
        foreach ($taskList as $task) {
            $htmlList = $htmlList . '<li>' . $task->getText() . '</li>';
        }
        $htmlList = $htmlList . '</ul>';
        return $htmlList;
    }

    public function sendHTTPResponse() {        
        echo $this->getTasksAsHTMLList();
    }

}
