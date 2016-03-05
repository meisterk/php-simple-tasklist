<?php
require 'Database.php';

class Model {
    private $database;
    
    public function __construct() {
        $this->database = new Database();
    }

    /**
     * 
     * returns array of Tasks
     * 
     * @return array of Tasks
     */
    public function getTaskList(){
        $taskList = $this->database->getTaskList();
        return $taskList;
    }
}
