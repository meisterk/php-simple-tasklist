<?php

class Model {

    private $database;

    public function __construct(Database $database) {
        $this->database = $database;
    }

    /**
     * 
     * returns array of Tasks
     * 
     * @return array of Tasks
     */
    public function getTaskList() {
        $taskList = $this->database->getTaskList();
        return $taskList;
    }

}
